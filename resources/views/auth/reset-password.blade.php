@extends('layouts.main')

@section('content')
    <div class="h-screen w-full flex flex-col justify-center text-[#c4c3ca] bg-[#23242D] px-2">
        <div class="container">
            <div class="text-center">
                @include('partials.account.logo')

                <div class="mx-auto card-3d-wrap">
                    <div class="card-3d-wrapper">
                        <div class="card-front">
                            <div class="center-wrap">
                                <form method="POST" action="{{ route('password.update') }}">
                                    @csrf
                                    <h4 class="pb-8 text-2xl">RESET PASSWORD</h4>

                                    @include('partials.account.resetpwd.email')

                                    @include('partials.account.password')
                                    @error('password')
                                        <div class="text-xs text-red-500 mb-2">{{ $message }}</div>
                                    @enderror

                                    @include('partials.account.resetpwd.confirmpwd')
                                    @error('password_confirmation')
                                        <div class="text-xs text-red-500 mb-2">{{ $message }}</div>
                                    @enderror


                                    <input type="hidden" name="token" value="{{ $token }}">

                                    <p class="sm:text-sm text-xs text-left mt-2">Already have an account yet ? <a
                                            class="text-green" href="/login">Login</a>
                                    </p>

                                    <button type="submit" class="mt-6 btn">RESET</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
