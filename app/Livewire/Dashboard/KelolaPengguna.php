<?php

namespace App\Livewire\Dashboard;

use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Facades\Http;

class KelolaPengguna extends Component
{
    public array $tikets = [];
    public array $statusByTiket = [];

    // Meta global (tidak dipengaruhi filter)
    public int $jumlahTiket = 0;
    public int $menungguVerifikasi = 0;
    public int $terverifikasi = 0;
    public int $dibatalkanKadaluarsa = 0;
    public int $jumlahPengguna = 0;

    // Total hasil query (dipengaruhi filter) untuk tulisan "Menampilkan X Data"
    public int $totalKueri = 0;

    // Filter inputs (sesuaikan nama param API)
    public ?string $filterNo = null;               // query: no
    public ?string $filterNamaPengguna = null;     // query: namaPengguna
    public ?string $filterRutePerjalanan = null;   // query: rutePerjalanan
    public ?string $filterWaktu = null;            // query: waktu
    public ?string $filterJenisKendaraan = null;   // query: jenisKendaraan
    public ?string $filterStatus = null;           // query: status

    public function mount(): void
    {
        $this->fetchTikets();
        $this->fetchPengguna();
    }

    public function updated($property, $value): void
    {
        if (str_starts_with($property, 'filter')) {
            $this->fetchTikets();
        }
    } 

    public function updatedStatusByTiket($value, $id): void
    {
        // Simpan status lama untuk rollback kalau gagal
        $old = null;
        foreach ($this->tikets as $row) {
            if (($row['id'] ?? null) == $id) {
                $old = $row['status'] ?? null;
                break;
            }
        }

        $url = config('services.api.base_url') . "/api/v1/tikets/{$id}";

        $res = Http::acceptJson()->patch($url, [
            'status' => $value,
        ]);

        // logger()->info('Ambatukam');

        if ($res->failed()) {
            // rollback dropdown
            $this->statusByTiket[$id] = $old;

            // penting: lihat pesan API-nya (sementara untuk debugging)
            logger()->error('Update status tiket gagal', [
                'id' => $id,
                'status' => $value,
                'code' => $res->status(),
                'body' => $res->body(),
            ]);

            return;
        }

        // sync data lokal supaya UI lain yang baca $tikets ikut update
        foreach ($this->tikets as &$row) {
            if (($row['id'] ?? null) == $id) {
                $row['status'] = $value;
                break;
            }
        }
        unset($row);
    }

    public function fetchTikets(): void
    {
        $params = array_filter([
            'no' => $this->filterNo,
            'namaPengguna' => $this->filterNamaPengguna,
            'rutePerjalanan' => $this->filterRutePerjalanan,
            'waktu' => $this->filterWaktu,
            'jenisKendaraan' => $this->filterJenisKendaraan,
            'status' => $this->filterStatus,
        ], fn ($v) => filled($v));

        $response = Http::acceptJson()
            ->get(config('services.api.base_url') . '/api/v1/tikets', $params)
            ->throw(); // biar cepat ketahuan kalau error [web:37]

        $raw = $response->json('data', []);

        $this->tikets = $raw;

        $this->tikets = collect($raw)->map(function (array $t) {
            $jadwal = $t['jadwal'] ?? [];

            $dt = !empty($jadwal['waktuBerangkat']) ? Carbon::parse($jadwal['waktuBerangkat']) : null;

            $label = $dt ? $dt->locale('id')->translatedFormat('l, d F Y H:i') . ' WIB' : '-';

            $t['jadwal']['waktuBerangkat'] = $label;

            return $t;
        })->all(); 

        // Meta global (tetap)
        $this->jumlahTiket = (int) $response->json('meta.total', 0);
        $this->menungguVerifikasi = (int) $response->json('meta.menungguVerifikasi', 0);
        $this->terverifikasi = (int) $response->json('meta.terverifikasi', 0);
        $this->dibatalkanKadaluarsa = (int) $response->json('meta.dibatalkanKadaluarsa', 0);

        // Total hasil query (terfilter)
        $this->totalKueri = (int) $response->json('meta.totalKueri.sesudah', count($this->tikets));

        $this->statusByTiket = [];
        foreach ($this->tikets as $t) {
            if (!isset($t['id'])) continue;
            $this->statusByTiket[$t['id']] = $t['status'] ?? null;
        }
    }

    public function fetchPengguna(): void
    {
        $response = Http::acceptJson()
            ->get(config('services.api.base_url') . '/api/v1/penumpangs')
            ->throw(); // [web:37]

        $this->jumlahPengguna = (int) $response->json('meta.total', 0);
    }

    public function render()
    {
        return view('livewire.dashboard.kelola-pengguna');
    }
}
