@php
    $students = DB::select('select * from articles order by id desc limit 3');
@endphp
@if ($students != Null)
    @foreach ($students as $item)
        <article class="mb-8">
            <div class="article-image mb-4 sm:mr-4">
                <img src="{{ $item->article_img }}" alt="">
            </div>
            <div class="article-text">
                <div class="title mb-4">
                    <p>{{ $item->upload_at }}</p>
                </div>
                <div class="sub-title">
                    {{ $item->article_body }}
                </div>
            </div>
        </article>
    @endforeach
@else
    {!! '<article>
            <p>Not found please insert article</p>
        </article>' !!}
@endif