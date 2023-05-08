@push('css')
    <link rel="stylesheet" href="/asset/account.css">
@endpush


<div class="h-screen w-full flex flex-col justify-center text-[#c4c3ca] bg-[#23242D] px-4">
    <div class="container">
        <div class="text-center">
            @include('partials.account.logo')

            <div class="mx-auto card-3d-wrap-register">
                <div class="card-3d-wrapper">
                    <div class="card-front">
                        <div class="center-wrap">
                            <form action="/register" method="POST">
                                @csrf
                                <h4 class="pb-8">SIGN UP</h4>

                                @include('partials.account.fullname')
                                @error('name')
                                    <div class="text-sm">{{ $message }}</div>
                                @enderror
                                @include('partials.account.username')
                                @error('username')
                                    <div class="text-sm">{{ $message }}</div>
                                @enderror
                                @include('partials.account.email')
                                @error('email')
                                    <div class="text-sm">{{ $message }}</div>
                                @enderror
                                @include('partials.account.password')
                                @error('password')
                                    <div class="text-sm">{{ $message }}</div>
                                @enderror

                                <p class="sm:text-sm text-xs text-left mt-2">Already have an account yet ? <a
                                        class="text-green" href="/login">Login</a>
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
