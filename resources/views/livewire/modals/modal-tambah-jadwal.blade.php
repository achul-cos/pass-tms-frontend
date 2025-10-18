<flux:modal name="modal-tambah-jadwal" class="font-sans! min-md:min-w-[calc(100vw*0.75)] max-md:w-[calc(100vw*0.75)] !z-0 bg-white flex flex-col rounded-2xl! border-2! border-dark! p-0!" tabindex="-1">
    <div class="p-4 bg-yellow text-dark w-full items-center border-b-2 border-dark flex flex-row justify-between">
        <flux:heading class="font-bold! text-xl! font-sans! text-dark!">
            Tambah Jadwal Keberangkatan
        </flux:heading>
    </div>
    <form>
        <div class="p-8 bg-white w-full min-md:pb-12 rounded-b-2xl overflow-y-auto max-h-[calc(100vh*0.7)]">
            <div class="flex max-md:flex-col min-md:flex-row gap-8 justify-between text-dark fill-dark">
                <div class="w-full flex flex-col gap-y-4">
                    <div class="min-h-16 flex min-lg:flex-row max-lg:flex-col gap-4 justify-between">
                        <div class="w-full flex flex-col gap-2">
                            <div class="flex flex-row items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="w-6 h-6"><path d="M320 64C214 64 128 148.4 128 252.6C128 371.9 248.2 514.9 298.4 569.4C310.2 582.2 329.8 582.2 341.6 569.4C391.8 514.9 512 371.9 512 252.6C512 148.4 426 64 320 64z"/></svg>                        
                                <p class="font-bold">Rute Asal</p>
                            </div>
                            <div class="relative flex items-stretch">                  
                            <div class="w-6 bg-dark/50 rounded-l-full"></div>
                            <select
                                name="ruteAsal"
                                class="w-full rounded-r-full bg-dark/10 border-dark/50 border-2 p-1 px-4 pe-8 outline-none"
                                required
                            >
                            <option value="batam">Batam</option>
                            </select>
                            </div>
                        </div>
                        <div class="w-full flex flex-col gap-2">
                            <div class="flex flex-row items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="w-6 h-6"><path d="M128 252.6C128 148.4 214 64 320 64C426 64 512 148.4 512 252.6C512 371.9 391.8 514.9 341.6 569.4C329.8 582.2 310.1 582.2 298.3 569.4C248.1 514.9 127.9 371.9 127.9 252.6zM320 320C355.3 320 384 291.3 384 256C384 220.7 355.3 192 320 192C284.7 192 256 220.7 256 256C256 291.3 284.7 320 320 320z"/></svg>
                                <p class="font-bold">Rute Tujuan</p>
                            </div>
                            <div class="relative flex items-stretch">                  
                            <div class="w-6 bg-dark/50 rounded-l-full"></div>
                            <select
                                type="text"
                                class="w-full rounded-r-full bg-dark/10 border-dark/50 border-2 p-1 px-4 outline-none"
                                required
                            >
                            <option value="Lingga">Lingga</option>
                            <option value="Tungkal">Kuala Tungkal</option>
                            <option value="Karimun">Tanjung Balai Karimun</option>
                            <option value="Bengkalis">Sei Pakning, Bengkalis</option>
                            <option value="Tanjung-Uban">Tanjung Uban</option>
                            </select>
                            </div>
                        </div>
                    </div>
                    <div class="min-h-16 w-full flex flex-col gap-2">
                        <div class="flex flex-row items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="w-6 h-6"><path d="M224 64C241.7 64 256 78.3 256 96L256 128L384 128L384 96C384 78.3 398.3 64 416 64C433.7 64 448 78.3 448 96L448 128L480 128C515.3 128 544 156.7 544 192L544 480C544 515.3 515.3 544 480 544L160 544C124.7 544 96 515.3 96 480L96 192C96 156.7 124.7 128 160 128L192 128L192 96C192 78.3 206.3 64 224 64zM224 320C206.3 320 192 334.3 192 352L192 416C192 433.7 206.3 448 224 448L416 448C433.7 448 448 433.7 448 416L448 352C448 334.3 433.7 320 416 320L224 320z"/></svg>
                        <p class="font-bold">Nama Kapal</p>
                        </div>
                        <div class="relative flex items-stretch">
                        <div class="w-6 bg-dark/50 rounded-l-full"></div>
                        <input
                            type="text"
                            class="w-full rounded-r-full bg-dark/10 border-dark/50 border-2 p-1 px-4 outline-none"
                            placeholder="KMP Kapal Penyebrangan"
                            required
                        />
                        </div>
                    </div>
                    <div class="min-h-16 w-full flex flex-col gap-2">
                        <div class="flex flex-row items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="w-6 h-6"><path d="M320 64C461.4 64 576 178.6 576 320C576 461.4 461.4 576 320 576C178.6 576 64 461.4 64 320C64 178.6 178.6 64 320 64zM296 184L296 320C296 328 300 335.5 306.7 340L402.7 404C413.7 411.4 428.6 408.4 436 397.3C443.4 386.2 440.4 371.4 429.3 364L344 307.2L344 184C344 170.7 333.3 160 320 160C306.7 160 296 170.7 296 184z"/></svg>
                            <p class="font-bold">Jumlah Penumpang</p>
                        </div>
                        <div class="relative flex items-stretch">
                            <div class="w-6 bg-dark/50 rounded-l-full"></div>
                            <p class="absolute top-1.5 right-8">
                                Orang
                            </p>
                            <input
                                id="jumlahPenumpang"
                                type="number"
                                wire:model.live="jumlahPenumpang"
                                class="w-full rounded-r-full bg-dark/10 border-dark/50 border-2 p-1 px-4 outline-none pe-24 focus:ring-2 focus:ring-blue-500 transition"
                                placeholder="100"
                                min="0"
                                required
                            />
                        </div>
                    </div>
                    <div class="min-h-16 w-full">
                        <p class="text-sm pb-2">
                            Perkiraan maksimal kendaraan: 
                            {{ $semuaMotor['motor'] }} <span class="font-bold">Motor</span>, 
                            {{ $semuaMotor['mobil'] }} <span class="font-bold">Mobil</span> | 
                            {{ $semuaMobil['motor'] }} <span class="font-bold">Motor</span>, 
                            {{ $semuaMobil['mobil'] }} <span class="font-bold">Mobil</span> | 
                            {{ $seimbang['motor'] }} <span class="font-bold">Motor</span>, 
                            {{ $seimbang['mobil'] }} <span class="font-bold">Mobil</span>
                        </p>
                        <p class="text-sm pb-2">
                            Note :
                            Jumlah penumpang akan mempengaruhi jumlah kendaraan yang akan bisa masuk, dengan maksimal penumpang per masing kendaraan sebagai berikut,
                        </p>
                        <p class="text-sm pb-2">
                            <span class="font-bold">Motor</span> : 2 Orang
                        </p>
                        <p class="text-sm">
                            <span class="font-bold">Mobil</span> : 6 Orang
                        </p>
                    </div>
                </div>
                <div class="w-full flex flex-col gap-y-4">
                    <div class="min-h-16 w-full flex flex-col gap-2">
                        <div class="flex flex-row items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="w-6 h-6"><path d="M64 483.6L64 173.5C64 150.3 88.1 134.9 110.3 141.5C198 167.7 260 147 322.4 126.2C386.9 104.7 451.8 83.1 545.7 113.1C564.2 119 576 136.9 576 156.4L576 466.5C576 489.7 551.9 505.1 529.8 498.5C442.1 472.3 380 493 317.7 513.8C253.2 535.3 188.3 556.9 94.4 526.9C75.9 521 64.1 503.1 64.1 483.6zM400 320C400 267 364.2 224 320 224C275.8 224 240 267 240 320C240 373 275.8 416 320 416C364.2 416 400 373 400 320zM184 477.6C188.4 477.6 191.9 473.8 191.2 469.5C186.6 441.7 164.2 420 136 416.5C131.6 416 128 419.6 128 424L128 463.9C128 467.5 130.4 470.7 134 471.6C151.9 475.8 168.3 477.7 184 477.7zM502.5 426.5C507.5 427.3 512 423.5 512 418.5L512 375.9C512 371.5 508.4 367.8 504 368.4C478.8 371.5 458.1 389.3 450.8 413C449.4 417.7 453.1 422.1 458 422.2C472.2 422.6 487 423.9 502.4 426.5zM512 216L512 176.1C512 172.5 509.5 169.3 506 168.4C488.1 164.2 471.7 162.3 456 162.3C451.6 162.3 448.1 166.1 448.8 170.4C453.4 198.2 475.8 219.9 504 223.4C508.4 223.9 512 220.3 512 215.9zM189.2 226.9C190.6 222.2 186.9 217.8 182 217.7C167.8 217.3 153 216 137.6 213.4C132.6 212.6 128.1 216.4 128.1 221.4L128 264C128 268.4 131.6 272.1 136 271.5C161.2 268.4 181.9 250.6 189.2 226.9z"/></svg>
                            <p class="font-bold">Biaya Layanan</p>
                        </div>
                        <div class="relative flex items-stretch">                  
                            <div class="w-6 bg-dark/50 rounded-l-full relative"></div>
                            <p class="absolute top-1.5 left-8">
                                Rp.
                            </p>
                            <input
                                id="hargaInput"
                                type="text"
                                class="w-full rounded-r-full bg-dark/10 border-dark/50 border-2 p-1 px-4 ps-12 outline-none pe-24"
                                placeholder="100.000"
                                required
                            />
                        </div>
                    </div>
                    <div class="min-h-16 w-full flex flex-col gap-2">
                        <div class="flex flex-row items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="w-6 h-6"><path d="M224 64C241.7 64 256 78.3 256 96L256 128L384 128L384 96C384 78.3 398.3 64 416 64C433.7 64 448 78.3 448 96L448 128L480 128C515.3 128 544 156.7 544 192L544 480C544 515.3 515.3 544 480 544L160 544C124.7 544 96 515.3 96 480L96 192C96 156.7 124.7 128 160 128L192 128L192 96C192 78.3 206.3 64 224 64zM224 320C206.3 320 192 334.3 192 352L192 416C192 433.7 206.3 448 224 448L416 448C433.7 448 448 433.7 448 416L448 352C448 334.3 433.7 320 416 320L224 320z"/></svg>
                            <p class="font-bold">Tanggal Keberangkatan</p>
                        </div>
                        <div class="relative flex items-stretch">
                            <div class="w-6 bg-dark/50 rounded-l-full"></div>
                            <input
                                type="date"
                                class="w-full rounded-r-full bg-dark/10 border-dark/50 border-2 p-1 px-4 outline-none"
                                placeholder="MM-DD-YYYY"
                                required
                            />
                        </div>
                    </div>
                    <div class="min-h-16 w-full flex flex-col gap-2">
                        <div class="flex flex-row items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="w-6 h-6"><path d="M320 64C461.4 64 576 178.6 576 320C576 461.4 461.4 576 320 576C178.6 576 64 461.4 64 320C64 178.6 178.6 64 320 64zM296 184L296 320C296 328 300 335.5 306.7 340L402.7 404C413.7 411.4 428.6 408.4 436 397.3C443.4 386.2 440.4 371.4 429.3 364L344 307.2L344 184C344 170.7 333.3 160 320 160C306.7 160 296 170.7 296 184z"/></svg>
                        <p class="font-bold">Jam Keberangkatan</p>
                        </div>
                        <div class="relative flex items-stretch">
                        <div class="w-6 bg-dark/50 rounded-l-full"></div>
                        <input
                            type="time"
                            class="w-full rounded-r-full bg-dark/10 border-dark/50 border-2 p-1 px-4 outline-none"
                            required
                        />
                        </div>
                    </div>
                    <div class="min-h-16 w-full">
                        <p class="text-sm pb-2">
                            <span class="font-bold">Open Gate</span> : 14.00 WIB
                        </p>
                        <p class="text-sm">
                            <span class="font-bold">Arrival Threshold</span> : 15.45 WIB
                        </p>
                    </div>                                     
                </div>
            </div>
        </div>
        <div class="p-4 bg-white border-t-2 border-dark/50 flex flex-row justify-end gap-4">
            <flux:button class="active:scale-80 transition-all duration-200 p-2! px-6! border-2! border-black! bg-orange-500! text-white! font-bold! rounded-full!">
                Simpan
            </flux:button>
        </div>
    </form>
</flux:modal>

@script
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const hargaInput = document.getElementById('hargaInput');

            // Format number with thousand separators
            function formatNumber(value) {
                // Remove non-numeric characters
                let cleanValue = value.replace(/[^0-9]/g, '');
                // Add thousand separators
                return cleanValue.replace(/\B(?=(\d{3})+(?!\d))/g, '.');
            }

            // On input, format the value
            hargaInput.addEventListener('input', function () {
                let cursorPosition = this.selectionStart;
                let originalLength = this.value.length;
                let formatted = formatNumber(this.value);

                // Update input value
                this.value = formatted;

                // Adjust cursor position to account for added/removed dots
                let newLength = this.value.length;
                let cursorOffset = newLength - originalLength;
                this.setSelectionRange(cursorPosition + cursorOffset, cursorPosition + cursorOffset);

                // Trigger Livewire update
                @this.set('harga', formatted);
            });

            // On load, format the initial value (if any)
            if (hargaInput.value) {
                hargaInput.value = formatNumber(hargaInput.value);
            }
        });        
    </script>
@endscript