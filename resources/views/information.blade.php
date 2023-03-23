@extends('layouts.main')

@section('content')
    <nav class="w-full bg-dark h-[10vh] flex justify-between items-center sm:px-16 px-4">
        <div class="text-xl font-bold sm:text-2xl text-green">
            @include('partials.logo')
        </div>

        @include('partials.navbar')
    </nav>
@endsection
