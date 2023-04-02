@extends('layouts.main')

@section('content')
    <nav id="navbar" class="w-full bg-dark h-[10vh] flex justify-between items-center sm:px-16 px-4">
        <div class="text-xl font-bold sm:text-2xl text-green">
            @include('partials.logo')
        </div>
        @include('partials.navbar')
    </nav>

    <section class="w-full sm:h-[90vh] h-screen bg-dark">
        @include('partials.home.hero')
    </section>

    <section id="prinsip" class="max-h-full bg-slate-100">
        @include('partials.home.prinsip')
    </section>

    <section class="flex flex-col items-center justify-center h-screen bg-dark">
        @include('partials.home.sampahB')
    </section>

    <section id="jenisSampah" class="flex flex-col items-center justify-center h-full bg-slate-100 sm:py-16 py-0">
        @include('partials.home.jenisSampah')
    </section>

    <section class="flex flex-col items-center justify-center h-screen bg-dark">
        @include('partials.home.aktivitas')
    </section>

    <footer class="w-full py-4 bg-dark">
        @include('partials.footer')
    </footer>

    @include('partials.scrollTop')
@endsection
