<main class="h-full w-full">

    @livewire('dashboard.sidebar')

    <div class="relative w-full z-0 min-h-[calc(100vh)] pt-28 flex flex-col bg-cover bg-no-repeat bg-top-right overflow-hidden transition-all duration-500 max-md:ps-0 min-md:ps-48"
         :class="sidebarOpen ? 'min-md:!ps-48 max-md:!ps-0' : 'min-md:!ps-0 max-md:!ps-0'">
        <!-- Background -->
        <div class="absolute top-26 inset-0 bg-[url(../../public/img/pattren/Square-Pattern1-Orange.png)] bg-cover bg-no-repeat opacity-15"></div>

        <!-- Sub Judul -->
        <div class="relative text-dark flex flex-col gap-y-2 p-4 ps-8 pb-8 border-b-2 border-dark shrink-0">
            <p class="text-2xl font-bold">Kelola Profil</p>
            <p class="text-sm">Mengubah nama, nomor telepon dan kata sandi akun.</p>
        </div>

        <!-- Konten Utama -->
        <div class="flex flex-row justify-between w-full flex-1 border-b-2 border-dark">
            <div class="w-8 text-dark bg-[image:repeating-linear-gradient(315deg,currentColor_0,currentColor_1px,transparent_0,transparent_4%)]"></div>
            <div class="w-full border-x-2 border-dark p-4 ps-8">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae, iusto reiciendis. Fugit, atque reprehenderit est nulla vero autem odio, tempora provident eligendi, aspernatur modi qui. Temporibus explicabo enim porro recusandae blanditiis eos facilis. Consequuntur, a incidunt maxime ipsum voluptatem quisquam. Possimus esse eius minus repellendus ad fugit deleniti ea magnam!
            </div>
            <div class="w-8 text-dark bg-[image:repeating-linear-gradient(315deg,currentColor_0,currentColor_1px,transparent_0,transparent_4%)]"></div>
        </div>
    </div>

</main>