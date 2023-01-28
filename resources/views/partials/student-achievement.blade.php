@php
    $students = DB::select('select * from students order by id desc limit 3');
@endphp
@if ($students != Null)
    @foreach ($students as $item)
        <article class="mb-4">
            <img src="{{ $item->student_img }}" alt="">
        </article>
    @endforeach
@else
    {!! '<article>
            <p>Not found please insert student achievement</p>
        </article>' !!}
@endif