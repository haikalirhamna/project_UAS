@php
    $galleries = DB::select('select * from galleries order by id desc limit 5');
@endphp
@if ($galleries != Null)
    @foreach ($galleries as $item)
    <article class="mb-4">
        <img src="{{ $item->gallery_img }}">
    </article>
    @endforeach
@else
    {!! '<article>
            <p>Not found please insert gallery</p>
        </article>' !!}
@endif
