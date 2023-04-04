@push('css')
    <link rel="stylesheet" href="/asset/account.css">
@endpush


<div class="h-screen w-full flex flex-col justify-center text-[#c4c3ca] bg-[#23242D] px-4">
    <div class="container">
        <div class="text-center">
            @include('partials.account.logo')

            <div class="mx-auto card-3d-wrap">
                <div class="card-3d-wrapper">
                    <div class="card-front">
                        <div class="center-wrap">
                            <form action="/login" method="POST">
                                @csrf
                                <h4 class="pb-8">LOG IN</h4>

                                @include('partials.account.username')
                                @error('email')
                                    <div>{{ $message }}</div>
                                @enderror

                                @include('partials.account.password')
                                @error('password')
                                    <div>{{ $message }}</div>
                                @enderror

                                <p class="sm:text-sm text-xs text-left mt-2">Don't have an account yet ? <a
                                        class="text-green" href="/register">Register</a>
                                </p>

                                <button type="submit" class="mt-8 btn">SUBMIT</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
