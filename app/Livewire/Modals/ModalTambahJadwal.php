<?php

namespace App\Livewire\Modals;

use Livewire\Component;

class ModalTambahJadwal extends Component
{
    public $jumlahPenumpang = 0; // Properti untuk menyimpan jumlah penumpang
    public $semuaMotor = ['motor' => 0, 'mobil' => 0]; // Skenario 1: Semua motor
    public $semuaMobil = ['motor' => 0, 'mobil' => 0]; // Skenario 2: Semua mobil
    public $seimbang = ['motor' => 0, 'mobil' => 0]; // Skenario 3: Seimbang 50/50

    // Method yang dipanggil setiap kali jumlahPenumpang berubah
    public function updatedJumlahPenumpang($value)
    {
        // Pastikan input adalah angka non-negatif
        $this->jumlahPenumpang = max(0, (int) $value);
        $this->hitungKendaraan();
    }

    // Method untuk menghitung jumlah kendaraan berdasarkan jumlah penumpang
    public function hitungKendaraan()
    {
        $penumpang = $this->jumlahPenumpang;

        // Skenario 1: Semua Motor
        // 1 motor = 2 orang, bulatkan ke atas untuk ganjil
        $this->semuaMotor = [
            'motor' => ceil($penumpang / 2),
            'mobil' => 0,
        ];

        // Skenario 2: Semua Mobil
        // 1 mobil = 6 orang, bulatkan ke atas untuk sisa
        $this->semuaMobil = [
            'motor' => 0,
            'mobil' => ceil($penumpang / 6),
        ];

        // Skenario 3: Seimbang (50/50)
        $motorSeimbang = 0;
        $mobilSeimbang = 0;
        if ($penumpang > 0) {
            $setengahPenumpang = floor($penumpang / 2); // Setengah untuk motor
            $sisaPenumpang = $penumpang - $setengahPenumpang; // Sisanya untuk mobil

            if ($penumpang % 2 !== 0) {
                // Penanganan untuk jumlah penumpang ganjil
                $ekstraPenumpang = $penumpang - 12; // Base case: 12 penumpang
                if ($penumpang <= 12) {
                    // Untuk 1–11 penumpang, bagi rata
                    $penumpangMotor = ceil($penumpang / 2);
                    $penumpangMobil = $penumpang - $penumpangMotor;
                } elseif ($ekstraPenumpang <= 2) {
                    // 13–14 penumpang: ekstra 1–2 orang naik motor
                    $penumpangMotor = $setengahPenumpang + $ekstraPenumpang;
                    $penumpangMobil = $sisaPenumpang - $ekstraPenumpang;
                } elseif ($ekstraPenumpang <= 5) {
                    // 15–17 penumpang: ekstra 3–5 orang naik mobil
                    $penumpangMotor = $setengahPenumpang;
                    $penumpangMobil = $sisaPenumpang;
                } else {
                    // 18+ penumpang: bagi rata dengan penyesuaian
                    $penumpangMotor = $setengahPenumpang;
                    $penumpangMobil = $sisaPenumpang;
                }
            } else {
                // Genap: bagi rata
                $penumpangMotor = $setengahPenumpang;
                $penumpangMobil = $sisaPenumpang;
            }

            $motorSeimbang = ceil($penumpangMotor / 2);
            $mobilSeimbang = ceil($penumpangMobil / 6);
        }

        $this->seimbang = [
            'motor' => $motorSeimbang,
            'mobil' => $mobilSeimbang,
        ];
    }

    public function render()
    {
        $this->hitungKendaraan();
        return view('livewire.modals.modal-tambah-jadwal');
    }
}
