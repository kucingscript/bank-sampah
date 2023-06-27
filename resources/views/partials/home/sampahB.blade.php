<h1 class="text-5xl font-bold text-center text-transparent bg-linearGreen bg-clip-text relative">
    <img src="{{ url('/asset/skull.svg') }}" alt="Danger"
        class="absolute w-10 sm:w-16 sm:block hidden -top-16 -right-2" />
    Sampah Berbahaya
</h1>

<div
    class="container flex flex-col items-center justify-center pb-0 mt-16 space-y-10 sm:space-x-20 sm:mt-20 sm:pb-20 sm:space-y-0 sm:flex-row">
    <div class="order-1 danger__img"></div>
    <div class="order-2 px-4">

        @include('partials.home.sampahB.sampahBText')

    </div>
</div>
