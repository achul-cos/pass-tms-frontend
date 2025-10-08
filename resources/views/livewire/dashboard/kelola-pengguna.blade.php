<main class="h-full w-full">

    @livewire('dashboard.sidebar')

    <div class="relative w-full z-0 min-h-[calc(100vh)] pt-28 flex flex-col bg-cover bg-no-repeat bg-top-right overflow-hidden transition-all duration-500 max-md:ps-0 min-md:ps-48"
         :class="sidebarOpen ? 'min-md:!ps-48 max-md:!ps-0' : 'min-md:!ps-0 max-md:!ps-0'">
        <!-- Background -->
        <div class="absolute top-26 inset-0 bg-[url(../../public/img/pattren/Square-Pattern1-Orange.png)] bg-cover bg-no-repeat opacity-15"></div>

        <!-- Sub Judul -->
        <div class="relative text-dark flex flex-col gap-y-2 p-4 ps-8 pb-8 border-b-2 border-dark shrink-0">
            <p class="text-2xl font-bold">Kelola Pengguna</p>
            <p class="text-sm">Melakukan verifikasi pembelian tiket penumpang</p>
        </div>

        <!-- Konten Utama -->
        <div class="flex flex-row justify-between w-full flex-1 border-b-2 z-10 border-dark">
            <div class="w-8 text-dark bg-[image:repeating-linear-gradient(315deg,currentColor_0,currentColor_1px,transparent_0,transparent_4%)]"></div>
            <div class="w-full border-x-2 border-dark p-4 px-8 flex flex-col gap-y-8">
                <div class="flex flex-row justify-between gap-x-4">
                    <div class="w-full flex flex-col gap-y-4">
                        <p class="text-xl font-bold text-dark border-b-2  pe-4 pb-2">Informasi Kilat</p>
                        <div class="flex flex-row flex-wrap gap-4 transition-all">
                            <div class="min-h-30 min-w-60 bg-orange rounded-2xl border-2 border-dark flex flex-row">
                                <div class="h-full w-15 bg-yellow rounded-s-2xl items-center justify-center flex border-e-2 border-dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="w-8 h-8 fill-black"><path d="M320 80C377.4 80 424 126.6 424 184C424 241.4 377.4 288 320 288C262.6 288 216 241.4 216 184C216 126.6 262.6 80 320 80zM96 152C135.8 152 168 184.2 168 224C168 263.8 135.8 296 96 296C56.2 296 24 263.8 24 224C24 184.2 56.2 152 96 152zM0 480C0 409.3 57.3 352 128 352C140.8 352 153.2 353.9 164.9 357.4C132 394.2 112 442.8 112 496L112 512C112 523.4 114.4 534.2 118.7 544L32 544C14.3 544 0 529.7 0 512L0 480zM521.3 544C525.6 534.2 528 523.4 528 512L528 496C528 442.8 508 394.2 475.1 357.4C486.8 353.9 499.2 352 512 352C582.7 352 640 409.3 640 480L640 512C640 529.7 625.7 544 608 544L521.3 544zM472 224C472 184.2 504.2 152 544 152C583.8 152 616 184.2 616 224C616 263.8 583.8 296 544 296C504.2 296 472 263.8 472 224zM160 496C160 407.6 231.6 336 320 336C408.4 336 480 407.6 480 496L480 512C480 529.7 465.7 544 448 544L192 544C174.3 544 160 529.7 160 512L160 496z"/></svg>
                                </div>
                                <div class="flex flex-col gap-y-1 justify-center items-start p-4">
                                    <p class="text-xl font-bold text-white">Jumlah Pengguna</p>
                                    <p class="text-base text-white">50 Pengguna </p>
                                </div>
                            </div>
                            <div class="min-h-30 min-w-60 bg-orange rounded-2xl border-2 border-dark flex flex-row">
                                <div class="h-full w-15 bg-yellow rounded-s-2xl items-center justify-center flex border-e-2 border-dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="w-8 h-8 fill-black"><path d="M96 128C60.7 128 32 156.7 32 192L32 256C32 264.8 39.4 271.7 47.7 274.6C66.5 281.1 80 299 80 320C80 341 66.5 358.9 47.7 365.4C39.4 368.3 32 375.2 32 384L32 448C32 483.3 60.7 512 96 512L544 512C579.3 512 608 483.3 608 448L608 384C608 375.2 600.6 368.3 592.3 365.4C573.5 358.9 560 341 560 320C560 299 573.5 281.1 592.3 274.6C600.6 271.7 608 264.8 608 256L608 192C608 156.7 579.3 128 544 128L96 128zM448 400L448 240L192 240L192 400L448 400zM144 224C144 206.3 158.3 192 176 192L464 192C481.7 192 496 206.3 496 224L496 416C496 433.7 481.7 448 464 448L176 448C158.3 448 144 433.7 144 416L144 224z"/></svg>                                
                                </div>
                                <div class="flex flex-col gap-y-1 justify-center items-start p-4">
                                    <p class="text-xl font-bold text-white">Pembelian Tiket</p>
                                    <p class="text-base text-white">12 Tiket</p>
                                </div>
                            </div>
                            <div class="min-h-30 min-w-60 bg-orange rounded-2xl border-2 border-dark flex flex-row">
                                <div class="h-full w-15 bg-yellow rounded-s-2xl items-center justify-center flex border-e-2 border-dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="w-8 h-8 fill-black"><path d="M320 64C461.4 64 576 178.6 576 320C576 461.4 461.4 576 320 576C178.6 576 64 461.4 64 320C64 178.6 178.6 64 320 64zM296 184L296 320C296 328 300 335.5 306.7 340L402.7 404C413.7 411.4 428.6 408.4 436 397.3C443.4 386.2 440.4 371.4 429.3 364L344 307.2L344 184C344 170.7 333.3 160 320 160C306.7 160 296 170.7 296 184z"/></svg>                                
                                </div>
                                <div class="flex flex-col gap-y-1 justify-center items-start p-4">
                                    <p class="text-xl font-bold text-white">Menunggu Verifikasi</p>
                                    <p class="text-base text-white">7 Tiket</p>
                                </div>
                            </div>
                            <div class="min-h-30 min-w-60 bg-orange rounded-2xl border-2 border-dark flex flex-row">
                                <div class="h-full w-15 bg-yellow rounded-s-2xl items-center justify-center flex border-e-2 border-dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="w-8 h-8 fill-black"><path d="M128 64C92.7 64 64 92.7 64 128L64 512C64 547.3 92.7 576 128 576L308 576C285.3 544.5 272 505.8 272 464C272 363.4 349.4 280.8 448 272.7L448 234.6C448 217.6 441.3 201.3 429.3 189.3L322.7 82.7C310.7 70.7 294.5 64 277.5 64L128 64zM389.5 240L296 240C282.7 240 272 229.3 272 216L272 122.5L389.5 240zM608 464C608 384.5 543.5 320 464 320C384.5 320 320 384.5 320 464C320 543.5 384.5 608 464 608C543.5 608 608 543.5 608 464zM521.4 403.1C528.5 408.3 530.1 418.3 524.9 425.4L460.9 513.4C458.1 517.2 453.9 519.6 449.2 519.9C444.5 520.2 439.9 518.6 436.6 515.3L396.6 475.3C390.4 469.1 390.4 458.9 396.6 452.7C402.8 446.5 413 446.5 419.2 452.7L446 479.5L499 406.6C504.2 399.5 514.2 397.9 521.4 403.1z"/></svg>                                
                                </div>
                                <div class="flex flex-col gap-y-1 justify-center items-start p-4">
                                    <p class="text-xl font-bold text-white">Terverfikasi</p>
                                    <p class="text-base text-white">3 Tiket</p>
                                </div>
                            </div>
                            <div class="min-h-30 min-w-60 bg-orange rounded-2xl border-2 border-dark flex flex-row">
                                <div class="h-full w-15 bg-yellow rounded-s-2xl items-center justify-center flex border-e-2 border-dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="w-8 h-8 fill-black"><path d="M431.2 476.5L163.5 208.8C141.1 240.2 128 278.6 128 320C128 426 214 512 320 512C361.5 512 399.9 498.9 431.2 476.5zM476.5 431.2C498.9 399.8 512 361.4 512 320C512 214 426 128 320 128C278.5 128 240.1 141.1 208.8 163.5L476.5 431.2zM64 320C64 178.6 178.6 64 320 64C461.4 64 576 178.6 576 320C576 461.4 461.4 576 320 576C178.6 576 64 461.4 64 320z"/></svg>
                                </div>
                                <div class="flex flex-col gap-y-1 justify-center items-start p-4">
                                    <p class="text-xl font-bold text-white">Dibatalkan/Kadaluarsa</p>
                                    <p class="text-base text-white">2 Tiket</p>
                                </div>
                            </div>                                                                                                                                                          
                        </div>
                    </div>
                    <div class="w-full flex flex-col gap-y-4">
                        <p class="text-xl font-bold text-dark border-b-2 pe-4 pb-2">Aksi Cepat</p>
                        <div class="flex flex-row flex-wrap gap-4">
                            <div class="flex items-center group">
                                <div class="absolute flex items-center justify-center w-16 h-16 rounded-full bg-yellow border-2 border-dark z-20 ring-4 ring-white group-hover:scale-110 group-active:scale-95 transition-all duration-200 ease-in-out">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="w-12 h-12 fill-black"><path d="M320 576C461.4 576 576 461.4 576 320C576 178.6 461.4 64 320 64C178.6 64 64 178.6 64 320C64 461.4 178.6 576 320 576zM296 408L296 344L232 344C218.7 344 208 333.3 208 320C208 306.7 218.7 296 232 296L296 296L296 232C296 218.7 306.7 208 320 208C333.3 208 344 218.7 344 232L344 296L408 296C421.3 296 432 306.7 432 320C432 333.3 421.3 344 408 344L344 344L344 408C344 421.3 333.3 432 320 432C306.7 432 296 421.3 296 408z"/></svg>
                                </div>
                                <div class="min-w-48 h-30 flex justify-center items-start ps-12 p-4 flex-col bg-orange rounded-2xl border-2 border-dark translate-x-8 z-10">
                                    <p class="text-xl font-bold text-white">Tambah</p>
                                    <p class="text-sm text-white">Menambahkan jadwal keberangkatan baru</p>                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-y-4">
                    <p class="text-xl font-bold text-dark border-b-2 pe-4 pb-2">Pembelian Tiket</p>
                    <div class="bg-yellow rounded-2xl border-2 border-dark p-4 flex flex-col gap-y-4">
                        <div class="grid grid-cols-12 gap-x-2">
                            <div class="col-span-1 w-full rounded-full items-center text-center bg-orange p-2 text-white font-bold border-2 border-dark">No</div>
                            <div class="col-span-4 w-full rounded-full items-center text-center bg-orange p-2 text-white font-bold border-2 border-dark">Nama Pengguna</div>
                            <div class="col-span-4 w-full rounded-full items-center text-center bg-orange p-2 text-white font-bold border-2 border-dark">Rute Perjalanan</div>
                            <div class="col-span-2 w-full rounded-full items-center text-center bg-orange p-2 text-white font-bold border-2 border-dark">Jumlah Penumpang</div>
                            <div class="col-span-1 w-full rounded-full items-center text-center bg-orange p-2 text-white font-bold border-2 border-dark">Aksi</div>
                        </div>
                        <div class="bg-orange flex flex-col rounded-2xl border-2 border-dark">
                            <!-- Baris 1-->
                            <div class="grid grid-cols-12 border-b-2 border-dark">
                                <div class="col-span-1 items-center text-center p-2 text-white font-bold border-e-2 border-dark">No</div>
                                <div class="col-span-4 items-center text-center p-2 text-white font-bold border-e-2 border-dark">Rute Perjalanan</div>
                                <div class="col-span-4 items-center text-center p-2 text-white font-bold border-e-2 border-dark">Jadwal Keberangkatan</div>
                                <div class="col-span-2 items-center text-center p-2 text-white font-bold border-e-2 border-dark">Jumlah Penumpang</div>
                                <div class="col-span-1 items-center text-center p-2 text-white font-bold ">Aksi</div>                                
                            </div>
                            <!-- Baris 2-->
                            <div class="grid grid-cols-12 border-b-2 border-dark">
                                <div class="col-span-1 items-center text-center p-2 text-white font-bold border-e-2 border-dark">No</div>
                                <div class="col-span-4 items-center text-center p-2 text-white font-bold border-e-2 border-dark">Rute Perjalanan</div>
                                <div class="col-span-4 items-center text-center p-2 text-white font-bold border-e-2 border-dark">Jadwal Keberangkatan</div>
                                <div class="col-span-2 items-center text-center p-2 text-white font-bold border-e-2 border-dark">Jumlah Penumpang</div>
                                <div class="col-span-1 items-center text-center p-2 text-white font-bold ">Aksi</div>                                
                            </div>                            
                            <!-- Baris 3-->
                            <div class="grid grid-cols-12 ">
                                <div class="col-span-1 items-center text-center p-2 text-white font-bold border-e-2 border-dark">No</div>
                                <div class="col-span-4 items-center text-center p-2 text-white font-bold border-e-2 border-dark">Rute Perjalanan</div>
                                <div class="col-span-4 items-center text-center p-2 text-white font-bold border-e-2 border-dark">Jadwal Keberangkatan</div>
                                <div class="col-span-2 items-center text-center p-2 text-white font-bold border-e-2 border-dark">Jumlah Penumpang</div>
                                <div class="col-span-1 items-center text-center p-2 text-white font-bold ">Aksi</div>                                
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-8 text-dark bg-[image:repeating-linear-gradient(315deg,currentColor_0,currentColor_1px,transparent_0,transparent_4%)]"></div>
        </div>
    </div>

</main>