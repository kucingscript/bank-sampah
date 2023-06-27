@extends('layouts.main')

@section('content')
    <nav id="navbar" class="w-full bg-dark h-[10vh] flex justify-between items-center sm:px-16 px-4">
        <div class="text-xl font-bold sm:text-2xl text-green">
            @include('partials.logo')
        </div>

        @include('partials.navbarInfo')
    </nav>

    <section class="w-full sm:h-[90vh] h-screen bg-dark">
        @include('partials.information.hero')
    </section>

    <section id="product" class="w-full h-full bg__pattern">
        @include('partials.information.product')
        @include('partials.information.product.allproduct')
    </section>

    <section class="flex flex-col items-center justify-center w-full h-screen px-4 space-y-10 bg-dark sm:px-0">
        @include('partials.information.track')
    </section>

    <section class="max-h-screen sm:h-screen bg__pattern flex sm:flex-row flex-col items-center justify-center">
        @include('partials.information.testimonials')
    </section>

    <section id="contact" class="flex flex-col items-center justify-center w-full h-screen px-4 bg-dark sm:px-0">
        @include('partials.information.contact')
    </section>

    <footer class="w-full py-4 bg-dark">
        @include('partials.footer')
    </footer>

    @include('partials.scrollTop')

    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
@endsection
