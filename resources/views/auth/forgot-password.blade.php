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
                                <form method="POST">
                                    @csrf
                                    <h4 class="pb-8 text-2xl">Don't Worry</h4>
                                    <p class="text-sm mb-6">We are here to help you to recover your password. Enter
                                        the email address you used when you joined and we'll send you instructions to reset
                                        your password.</p>

                                    @include('partials.account.email')

                                    <button type="submit" class="my-3 btn w-full">SUBMIT</button>

                                    <div class="text-left">
                                        <a href="/login" class="text-sm text-green inline-block">&larr; Back</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
