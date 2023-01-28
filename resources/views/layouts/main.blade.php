<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased">
    <header>
        <div class="header container sm:container md:container lg:container xl:container 2xl:container top-0 left-0 right-0 mx-auto z-10 fixed"
            id="header">
            @yield('navbar')
        </div>
    </header>
    <section class="container">
        @yield('auth')
    </section>
    <section class="container sm:container md:container lg:container xl:container 2xl:container m-auto relative"
        id="carousel-slider">
        @yield('carousel')
    </section>
    <section
        class="side-bar container sm:container md:container lg:container xl:container 2xl:container m-auto fixed text-white py-14 px-8">
        @yield('sidebar')
    </section>
    <section
        class="about container sm:container md:container lg:container xl:container 2xl:container mx-auto lg:flex lg:py-14 xl:px-10">
        <article class="flex flex-col items-center p-6">
            <img src="{{ asset('img/Frame 405.svg') }}" alt="" class="mb-6">
            <h3 class="font-bold mb-6 lg:text-xl">Identitas Sekolah</h3>
            <p class=" text-slate-300 text-center mb-4 text-sm">Hight School berdiri sejak tahun
                1980 dengan nama Hight School 1. Sekolah yang akan membimbing muridnya hingga
                benar</p>
            <a href="#" class="text-sm mb-6">Read more</a>
        </article>
        <article class="flex flex-col items-center p-6">
            <img src="{{ asset('img/Frame 406.svg') }}" alt="" class="mb-6">
            <h3 class="font-bold mb-6 lg:text-xl">Visi Misi</h3>
            <p class=" text-slate-300 text-center mb-4 text-sm">Hight School berdiri sejak tahun
                1980 dengan nama Hight School 1. Sekolah yang akan membimbing muridnya hingga
                benar</p>
            <a href="#" class="text-sm mb-6">Read more</a>
        </article>
        <article class="flex flex-col items-center p-6">
            <img src="{{ asset('img/Frame 407.svg') }}" alt="" class="mb-6">
            <h3 class="font-bold mb-6 lg:text-xl">Struktur Sekolah</h3>
            <p class=" text-slate-300 text-center mb-4 text-sm">Hight School berdiri sejak tahun
                1980 dengan nama Hight School 1. Sekolah yang akan membimbing muridnya hingga
                benar</p>
            <a href="#" class="text-sm mb-6">Read more</a>
        </article>
    </section>
    <section
        class="container sm:container md:container lg:container xl:container 2xl:container mx-auto lg:flex lg:pb-14">
        <img src="{{ asset('img/Frame 399.svg') }}" alt="" class="w-screen lg:w-1/2">
        <div class="bg-green py-4 px-4 box-border xl:px-12 xl:py-12">
            <p class=" mb-4" style="color: #2F5D62;">Pembukaan Kepala Sekolah</p>
            <h2 class="font-bold mb-6">Ucapan Kepala Sekolah HIGHT SCHOOL</h2>
            <p class=" text-slate-500 mb-6 2xl:w-1/2">“ Lörem ipsum mikrolös dongen infodemi.
                Terapument anteliga deforen laskapet målagisk. Av euror. Karriärcoach pyjuskap
                andropatologi. “</p>
            <div class="flex items-center gap-2">
                <img src="{{ asset('img/Frame 410.svg') }}" alt="">
                <div>
                    <p class="font-bold mb-1">Bpk. Robert stent</p>
                    <p>Kepala Sekolah</p>
                </div>
            </div>
        </div>
    </section>
    <section
        class="container sm:container md:container lg:container xl:container 2xl:container m-auto py-8 px-4 xl:px-14 2xl:px-24">
        <div class="mb-28">
            <h2 class="font-bold mb-6 lg:text-4xl">Jurusan (Program Study)</h2>
            <div class="flex justify-between items-center mb-14">
                <p class="w-1/2 text-slate-500 text-sm">Terdapat Beberapa Jurusan atau Program Study di
                    SMA PGRI CICURUG yang dapat dipilih sesuai dengan minat Siswa</p>
                <button class="btn-primary">Academic Data</button>
            </div>
            <div class="grid sm:grid-cols-1 lg:grid-cols-2 gap-6">
                <article class="flex flex-col items-center border-2 border-solid border-gray-300 rounded-lg py-6 px-14">
                    <img src="{{ asset('img/Frame 405 IPS') }}.svg" alt="">
                    <h3 class="font-bold my-6 lg:text-xl">IPS</h3>
                    <p class="text-center text-slate-300">Jurusan IPS mempelajari tentang hubungan
                        antar manusia dan hubungan manusia dengan lingkungannya, serta berbagai aspek
                        sosial</p>
                </article>
                <article class="flex flex-col items-center border-2 border-solid border-gray-300 rounded-lg py-6 px-14">
                    <img src="{{ asset('img/Frame 405 IPA') }}.svg" alt="">
                    <h3 class="font-bold my-6 lg:text-xl">IPA</h3>
                    <p class="text-center text-slate-300">Selain belajar Ilmu Alam, anak SMA belajar
                        matematika juga. Oleh sebab itu selain disebut dengan jurusan IPA (Ilmu
                        Pengetahuan Alam) jurusan ini punya dua nama lain lagi, yaitu: MIPA , MIA</p>
                </article>
            </div>
        </div>
        <div class="mb-28">
            <h2 class="font-bold mb-6 lg:text-4xl">Prestasi Siswa - Siswi</h2>
            <div class="flex justify-between items-center" style="margin-bottom: 40px;">
                <p class="text-slate-500">Prestasi dari Siswa - Siswi SMA PGRI CICURUG</p>
                <button class="btn-primary">See all prestation</button>
            </div>
            <div class="grid justify-items-center gap-6 sm:grid-cols-1 xl:grid-cols-3">
                @yield('studentAchievement')
            </div>
        </div>
        <div class="flex flex-col justify-center items-center">
            <h2 class="font-bold mb-6 lg:text-4xl">Artikel</h2>
            <p class="text-slate-500 text-center w-full mb-10 px-4">Kami menyediakan beberapa
                artikel dari kegiatan - kegiatan pembelajaran maupun lorem ipsum donot saas</p>
            <div class="Article-item mb-10">
                @yield('article')
            </div>
            <button class="btn-primary">
                See more
            </button>
        </div>
    </section>
    <section
        class="bg-green container sm:container md:container lg:container xl:container 2xl:container m-auto flex flex-col items-center py-14">
        <h2 class="font-bold mb-6 lg:text-2xl">Gallery</h2>
        <p class="text-slate-500 mb-10 mx-4">Lörem ipsum mikrolös dongen infodemi. Terapument anteliga deforen laskapet
        </p>
        <div class="content-gallery flex flex-col xl:flex-row gap-2 xl:gap-8 mb-8">
            @yield('galleries')
        </div>
        <button class="btn-primary">See more</button>
    </section>
    <footer
        class="bg-footer container sm:container md:container lg:container xl:container 2xl:container m-auto text-white py-8 px-4 xl:px-14 2xl:px-24">
        <div class="flex items-center gap-2 mb-11">
            <img src="{{ asset('img/Project logo.svg') }}" alt="">
            <p class="font-bold">High School</p>
        </div>
        <div class="grid sm:grid-cols-1 lg:grid-cols-2 2xl:grid-cols-4 sm:gap-24 2xl:gap-0 items-start mb-20">
            <div class="w-72 mr-5">
                <p class="mb-11">“ Lörem ipsum mikrolös dongen infodemi. Terapument anteliga
                    deforen laskapet målagisk. Av euror. Karriärcoach pyjuskap andropatologi. “</p>
                <ul class="flex gap-6">
                    <li>
                        <img src="{{ asset('img/facebook logo.svg') }}" alt="">
                    </li>
                    <li>
                        <img src="{{ asset('img/Twitter logo.svg') }}" alt="">
                    </li>
                    <li>
                        <img src="{{ asset('img/linkedin logo.svg') }}" alt="">
                    </li>
                    <li>
                        <img src="{{ asset('img/instagram logo.svg') }}" alt="">
                    </li>
                </ul>
            </div>
            <div class="mr-28">
                <ul class="flex flex-col gap-6">
                    <li class="font-bold">
                        <p>Jelajah</p>
                    </li>
                    <li>
                        <p>Identitas Sekolah</p>
                    </li>
                    <li>
                        <p>Berita</p>
                    </li>
                    <li>
                        <p>Gallery</p>
                    </li>
                    <li>
                        <p>Fasilitas</p>
                    </li>
                    <li>
                        <p>Kontak Kami</p>
                    </li>
                </ul>
            </div>
            <div class="mr-28">
                <ul class="flex flex-col gap-6">
                    <li class="font-bold">
                        <p>Data Akademik</p>
                    </li>
                    <li>
                        <p>Tenaga Pendidik</p>
                    </li>
                    <li>
                        <p>Tenaga Kependidikan</p>
                    </li>
                    <li>
                        <p>Daftar Siswa</p>
                    </li>
                    <li>
                        <p>Absensi Siswa</p>
                    </li>
                    <li>
                        <p>Organisasi Sekolah</p>
                    </li>
                    <li>
                        <p>Jadwal Pelajaran</p>
                    </li>
                    <li>
                        <p>Jadwal Ujian</p>
                    </li>
                </ul>
            </div>
            <div class="w-72">
                <p class="font-bold mb-6">Lokasi</p>
                <div class="flex items-start gap-4 mb-4">
                    <img src="{{ asset('img/entypo_locati') }}on-pin.svg" alt="">
                    <div class="flex flex-col">
                        <p class="mb-2">Alamat</p>
                        <p>3891 Ranchview Dr. Richardson, California 62639</p>
                    </div>
                </div>
                <div class="flex items-start gap-4 mb-4">
                    <img src="{{ asset('img/dashicons_ema') }}il.svg" alt="">
                    <div class="flex flex-col">
                        <p class="mb-2">Kontak Kami</p>
                        <p>Telp: (0266) 123456 Web : www.higntschool.sch.id email : info@hightschool.sch.id</p>
                    </div>
                </div>
            </div>
        </div>
        <p class="text-center md:text-start">&copy; Hight School. All right Reserved. Website By mangcoding</p>
    </footer>
</body>

</html>