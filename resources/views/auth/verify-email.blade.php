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
                                <form method="POST" action="{{ route('verification.send') }}">
                                    @csrf
                                    <h4 class="pb-8 text-2xl">VERIFY YOUR EMAIL ADDRESS</h4>
                                    <p>Thaks for signup with us. Click on the button below to verify your email address</p>
                                    <button type="submit" class="mt-8 btn">VERIFY YOUR EMAIL</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
