<nav class="flex justify-between xl:justify-evenly items-center text-white mx-2 sm:mx-4 py-4">
    <div class="brand-name font-bold">
        <a href="/" class="flex items-center gap-2">
            <img src="{{ asset('img/Project logo.svg') }}" alt="Hight School">
            <p>Hight School</p>
        </a>
    </div>
    <ul class="max-w-screen-2xl items-center gap-2 xl:gap-4 hidden lg:flex">
        <li class="font-bold">
            Home
        </li>
        <li>
            Profile Sekolah
        </li>
        <li>
            Data Akademik
        </li>
        <li>
            Artikel
        </li>
        <li>
            Fasilitas
        </li>
        <li>
            Gallery
        </li>
        <li>
            E-Learning
        </li>
    </ul>
    <button class="btn-primary hidden lg:block">
        Hubungi Kami
    </button>
    <div id="burger-button">
        <i class="lg:hidden text-base md:text-lg lg:text-xl">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-list"
                viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
            </svg>
        </i>
    </div>
</nav>

<script src="{{ asset('js/scroll.js') }}"></script>