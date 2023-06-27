<div class="h-screen w-full flex flex-col justify-center text-[#c4c3ca] bg-[#23242D] px-2">
    <div class="container">
        <div class="text-center">
            @include('partials.account.logo')

            <div class="mx-auto card-3d-wrap">
                <div class="card-3d-wrapper">
                    <div class="card-front">
                        <div class="center-wrap">
                            <form action="/login" method="POST">
                                @csrf
                                <h4 class="pb-8 text-2xl">LOG IN</h4>
                                @error('email')
                                    <div class="text-xs text-red-500 mb-2">{{ $message }}</div>
                                @enderror
                                @error('password')
                                    <div class="text-xs text-red-500 mb-2">{{ $message }}</div>
                                @enderror
                                @include('partials.account.username')
                                @include('partials.account.password')


                                <p class="sm:text-sm text-xs text-left mt-2">Don't have an account yet ? <a
                                        class="text-green" href="/register">Register</a> <br>
                                    <a href="/forgot-password"
                                        class="sm:text-sm text-xs text-left mt-1 text-green inline-block">Forgot
                                        Password ?</a>
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
