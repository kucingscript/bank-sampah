@extends('layouts.main')

@section('content')
    <nav class="w-full bg-dark h-[10vh] flex justify-between items-center sm:px-16 px-4">
        <div class="text-xl font-bold sm:text-2xl text-green">
            @include('partials.logo')
        </div>

        @include('partials.navbar')
    </nav>

    <section class="w-full sm:h-[90vh] h-screen bg-dark">
        @include('partials.information.hero')
    </section>

    <section id="product" class="w-full h-full bg-slate-100">
        @include('partials.information.product')
        @include('partials.information.product.allproduct')
    </section>

    <section class="flex flex-col items-center justify-center w-full h-screen px-4 space-y-10 bg-dark sm:px-0">
        @include('partials.information.track')
    </section>


    <footer class="w-full py-4 bg-dark">
        @include('partials.footer')
    </footer>

    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="/asset/app.js"></script>
@endsection
