@extends('layouts.main')

@section('auth')
    @auth
        <a href="{{ url('/dashboard') }}" class="fixed z-10 bottom-5 right-5 bg-slate-800 text-white py-2 px-4 rounded-full">Dashboard</a>
    @else
        <a href="{{ route('login') }}" class="fixed z-10 bottom-5 right-5 bg-slate-800 text-white py-2 px-4 rounded-full">Log in</a>
    @endauth
@endsection

@section('navbar')
    @include('partials.navbar')
@endsection

@section('sidebar')
    @include('partials.sidebar')
@endsection

@section('carousel')
    @include('partials.carousel')
@endsection

@section('studentAchievement')
    @include('partials.student-achievement')
@endsection

@section('article')
    @include('partials.article')
@endsection

@section('galleries')
    @include('partials.galleries')
@endsection