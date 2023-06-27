@extends('layouts.main')

@section('content')
    <nav id="navbar" class="w-full bg-dark h-[10vh] flex justify-between items-center sm:px-16 px-4">
        <div class="text-xl font-bold sm:text-2xl text-green">
            @include('partials.logo')
        </div>
        @include('partials.navbar')
    </nav>

    <section class="w-full sm:h-[90vh] h-screen bg-dark ">
        @include('partials.home.hero')
    </section>

    <section id="prinsip" class="max-h-full bg__pattern overflow-x-hidden">
        @include('partials.home.prinsip')
    </section>

    <section class="flex flex-col items-center justify-center min-h-screen bg-dark sm:py-0 py-20">
        @include('partials.home.sampahB')
    </section>

    <section id="jenis" class="flex flex-col items-center justify-center h-full py-0 bg__pattern sm:py-24">
        @include('partials.home.jenisSampah')
    </section>

    <section class="flex flex-col items-center justify-center min-h-screen bg-dark sm:py-0 pt-20 pb-6">
        @include('partials.home.aktivitas')
    </section>

    <section id="about" class="flex flex-col items-center justify-center h-full bg-dark">
        @include('partials.home.about')
    </section>

    <section class="w-full h-full py-10 bg__pattern">
        @include('partials.home.location')
    </section>

    <section class="bg-dark">
        @include('partials.home.ourstory')
    </section>

    <footer class="w-full py-4 bg-dark">
        @include('partials.footer')
    </footer>

    @include('partials.scrollTop')
@endsection
