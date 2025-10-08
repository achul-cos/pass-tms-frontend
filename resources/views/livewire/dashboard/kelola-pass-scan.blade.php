<main class="h-full w-full">

    @livewire('dashboard.sidebar')

    <div class="relative w-full z-0 min-h-[calc(100vh)] pt-28 flex flex-col bg-cover bg-no-repeat bg-top-right overflow-hidden transition-all duration-500 max-md:ps-0 min-md:ps-48"
         :class="sidebarOpen ? 'min-md:!ps-48 max-md:!ps-0' : 'min-md:!ps-0 max-md:!ps-0'">
        <!-- Background -->
        <div class="absolute top-26 inset-0 bg-[url(../../public/img/pattren/Square-Pattern1-Orange.png)] bg-cover bg-no-repeat opacity-15"></div>

        <!-- Sub Judul -->
        <div class="relative text-dark flex flex-col gap-y-2 p-4 ps-8 pb-8 border-b-2 border-dark shrink-0">
            <p class="text-2xl font-bold">Kelola PASS SCAN</p>
            <p class="text-sm">Memantau kinerja alat IoT secara real-time</p>
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
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="w-8 h-8 fill-black"><path d="M240 88C240 74.7 229.3 64 216 64C202.7 64 192 74.7 192 88L192 128C156.7 128 128 156.7 128 192L88 192C74.7 192 64 202.7 64 216C64 229.3 74.7 240 88 240L128 240L128 296L88 296C74.7 296 64 306.7 64 320C64 333.3 74.7 344 88 344L128 344L128 400L88 400C74.7 400 64 410.7 64 424C64 437.3 74.7 448 88 448L128 448C128 483.3 156.7 512 192 512L192 552C192 565.3 202.7 576 216 576C229.3 576 240 565.3 240 552L240 512L296 512L296 552C296 565.3 306.7 576 320 576C333.3 576 344 565.3 344 552L344 512L400 512L400 552C400 565.3 410.7 576 424 576C437.3 576 448 565.3 448 552L448 512C483.3 512 512 483.3 512 448L552 448C565.3 448 576 437.3 576 424C576 410.7 565.3 400 552 400L512 400L512 344L552 344C565.3 344 576 333.3 576 320C576 306.7 565.3 296 552 296L512 296L512 240L552 240C565.3 240 576 229.3 576 216C576 202.7 565.3 192 552 192L512 192C512 156.7 483.3 128 448 128L448 88C448 74.7 437.3 64 424 64C410.7 64 400 74.7 400 88L400 128L344 128L344 88C344 74.7 333.3 64 320 64C306.7 64 296 74.7 296 88L296 128L240 128L240 88zM224 192L416 192C433.7 192 448 206.3 448 224L448 416C448 433.7 433.7 448 416 448L224 448C206.3 448 192 433.7 192 416L192 224C192 206.3 206.3 192 224 192zM240 240L240 400L400 400L400 240L240 240z"/></svg>                                
                                </div>
                                <div class="flex flex-col gap-y-1 justify-center items-start p-4">
                                    <p class="text-xl font-bold text-white">Welcoming Gateway</p>
                                    <p class="text-base text-white">Online </p>
                                </div>
                            </div>
                            <div class="min-h-30 min-w-60 bg-orange rounded-2xl border-2 border-dark flex flex-row">
                                <div class="h-full w-15 bg-yellow rounded-s-2xl items-center justify-center flex border-e-2 border-dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="w-8 h-8 fill-black"><path d="M240 88C240 74.7 229.3 64 216 64C202.7 64 192 74.7 192 88L192 128C156.7 128 128 156.7 128 192L88 192C74.7 192 64 202.7 64 216C64 229.3 74.7 240 88 240L128 240L128 296L88 296C74.7 296 64 306.7 64 320C64 333.3 74.7 344 88 344L128 344L128 400L88 400C74.7 400 64 410.7 64 424C64 437.3 74.7 448 88 448L128 448C128 483.3 156.7 512 192 512L192 552C192 565.3 202.7 576 216 576C229.3 576 240 565.3 240 552L240 512L296 512L296 552C296 565.3 306.7 576 320 576C333.3 576 344 565.3 344 552L344 512L400 512L400 552C400 565.3 410.7 576 424 576C437.3 576 448 565.3 448 552L448 512C483.3 512 512 483.3 512 448L552 448C565.3 448 576 437.3 576 424C576 410.7 565.3 400 552 400L512 400L512 344L552 344C565.3 344 576 333.3 576 320C576 306.7 565.3 296 552 296L512 296L512 240L552 240C565.3 240 576 229.3 576 216C576 202.7 565.3 192 552 192L512 192C512 156.7 483.3 128 448 128L448 88C448 74.7 437.3 64 424 64C410.7 64 400 74.7 400 88L400 128L344 128L344 88C344 74.7 333.3 64 320 64C306.7 64 296 74.7 296 88L296 128L240 128L240 88zM224 192L416 192C433.7 192 448 206.3 448 224L448 416C448 433.7 433.7 448 416 448L224 448C206.3 448 192 433.7 192 416L192 224C192 206.3 206.3 192 224 192zM240 240L240 400L400 400L400 240L240 240z"/></svg>                                
                                </div>
                                <div class="flex flex-col gap-y-1 justify-center items-start p-4">
                                    <p class="text-xl font-bold text-white">Check-in Gateway</p>
                                    <p class="text-base text-white">Offline</p>
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
                    <p class="text-xl font-bold text-dark border-b-2 pe-4 pb-2">Log Aktivitas</p>
                    <div class="bg-yellow rounded-2xl border-2 border-dark p-4 flex flex-col gap-y-4">
                        <div class="grid grid-cols-12 gap-x-2">
                            <div class="col-span-1 w-full rounded-full items-center text-center bg-orange p-2 text-white font-bold border-2 border-dark">No</div>
                            <div class="col-span-3 w-full rounded-full items-center text-center bg-orange p-2 text-white font-bold border-2 border-dark">Waktu</div>
                            <div class="col-span-8 w-full rounded-full items-center text-center bg-orange p-2 text-white font-bold border-2 border-dark">Log</div>
                        </div>
                        <div class="bg-orange flex flex-col rounded-2xl border-2 border-dark">
                            <!-- Baris 1-->
                            <div class="grid grid-cols-12 border-b-2 border-dark">
                                <div class="col-span-1 items-center text-center p-2 text-white font-bold border-e-2 border-dark">No</div>
                                <div class="col-span-3 items-center text-center p-2 text-white font-bold border-e-2 border-dark">Waktu</div>
                                <div class="col-span-8 items-center text-center p-2 text-white font-bold">Log</div>                            
                            </div>
                            <!-- Baris 2-->
                            <div class="grid grid-cols-12 border-b-2 border-dark">
                                <div class="col-span-1 items-center text-center p-2 text-white font-bold border-e-2 border-dark">No</div>
                                <div class="col-span-3 items-center text-center p-2 text-white font-bold border-e-2 border-dark">Waktu</div>
                                <div class="col-span-8 items-center text-center p-2 text-white font-bold ">Log</div>                                
                            </div>                            
                            <!-- Baris 3-->
                            <div class="grid grid-cols-12 ">
                                <div class="col-span-1 items-center text-center p-2 text-white font-bold border-e-2 border-dark">No</div>
                                <div class="col-span-3 items-center text-center p-2 text-white font-bold border-e-2 border-dark">Waktu</div>
                                <div class="col-span-8 items-center text-center p-2 text-white font-bold ">Log</div>                                
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-8 text-dark bg-[image:repeating-linear-gradient(315deg,currentColor_0,currentColor_1px,transparent_0,transparent_4%)]"></div>
        </div>
    </div>

</main>