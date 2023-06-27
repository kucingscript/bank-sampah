<div x-data="{ isOpen: false }" class="pr-4 sm:hidden">
    <button @click="isOpen = !isOpen" type="submit">
        <img src={{ url('/asset/burger.svg') }} alt="Burger Menu" class="-mb-2 w-7" x-show="!isOpen">
        <img src={{ url('/asset/close.svg') }} alt="Burger Menu" class="-mb-2 w-7" x-show="isOpen">
    </button>

    <div>
        <div class="absolute z-10 left-0 w-screen px-8 pt-2 pb-8 bg-dark top-16" x-show="isOpen"
            @click.away=" isOpen = false" x-transition.opacity>
            <ul class="flex flex-col space-y-6">
                @include('partials.navbarList')
            </ul>
        </div>
    </div>
</div>
