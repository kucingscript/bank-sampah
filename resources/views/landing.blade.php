@extends('layouts.main')

@section('content')
    <section
        class="flex flex-col items-stretch justify-center w-full h-screen space-y-10 overflow-hidden sm:flex-row bg-dark sm:justify-between sm:items-center sm:space-y-0">
        <div class="absolute flex items-center justify-between w-full text-xl font-bold sm:text-2xl text-green top-4">
            @include('partials.logo')
            @include('partials.landing.treeMobile')
        </div>

        @include('partials.landing.text')
        @include('partials.landing.bgImage')
    </section>
@endsection
