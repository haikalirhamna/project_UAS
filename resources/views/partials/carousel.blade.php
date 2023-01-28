@php
    $articles = DB::select('select * from articles order by id desc limit 3');
    $count = count($articles);
@endphp
<div class="relative myslide fade w-full">
    <div class="hero-text absolute h-full text-white">
        <div class="title font-bold">
            <h2>Buku - Buku yang dapat membuat anda Termotivasi</h2>
        </div>
        <div class="details py-2 sm:py-8 ">
            <p class="mb-2 sm:mb-4">September 6, 2022</p>
            <p>Lörem ipsum mikrolös dongen infodemi. Terapument anteliga deforen laskapet målagisk. Av euror.
                Karriärcoach pyjuskap andropatologi. </p>
        </div>
        <button class="btn-sub">Read more</button>
    </div>
    <div class="hero-background">
        <img src="{{ asset('img/unsplash_vSchPA-YA_A.svg') }}" alt="hero-carousel-image">
    </div>
</div>
@foreach ($articles as $item)
<div class="relative myslide fade w-full">
    <div class="hero-text absolute h-full text-white">
        <div class="title font-bold">
            <h2>{{ $item->title }}</h2>
        </div>
        <div class="details py-2 sm:py-8 ">
            <p class="mb-2 sm:mb-4">{{ $item->upload_at }}</p>
            <p>{{ $item->article_body }}</p>
        </div>
        <button class="btn-sub">Read more</button>
    </div>
    <div class="hero-background">
        <img src="{{ $item->article_img }}" alt="hero-carousel-image">
    </div>
</div>
@endforeach
<div class="dots absolute w-full bottom-2 md:bottom-5">
    <div class="flex justify-center items-center gap-2">
        <span class="dot w-2 h-2 bg-slate-300 rounded-full"></span>
        @for ($i = 0; $i < $count; $i++)
            {!! '<span class="dot w-2 h-2 bg-slate-300 rounded-full"></span>' !!}
        @endfor
    </div>
</div>

<script src="{{ asset('js/slider.js') }}"></script>

{{-- <div class="relative myslide fade w-full">
    <div class="hero-text absolute h-full text-white">
        <div class="title font-bold">
            <h2>Buku - Buku yang dapat membuat anda Termotivasi</h2>
        </div>
        <div class="details py-2 sm:py-8 ">
            <p class="mb-2 sm:mb-4">September 6, 2022</p>
            <p>Lörem ipsum mikrolös dongen infodemi. Terapument anteliga deforen laskapet målagisk. Av euror.
                Karriärcoach pyjuskap andropatologi. </p>
        </div>
        <button class="btn-sub">Read more</button>
    </div>
    <div class="hero-background">
        <img src="{{ asset('img/unsplash_vSchPA-YA_A.svg') }}" alt="hero-carousel-image">
    </div>
</div> --}}