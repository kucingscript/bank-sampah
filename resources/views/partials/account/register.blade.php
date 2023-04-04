@push('css')
    <link rel="stylesheet" href="/asset/account.css">
@endpush


<div class="section text-[#c4c3ca] bg-[#23242D] px-4 overflow-x-hidden">
    <div class="container">
        <div class="row full-height justify-content-center">
            <div class="py-5 text-center col-12 align-self-center">
                <div class="pt-5 pb-5 text-center section pt-sm-2">
                    <h6 class="pb-3 mb-0"><span>Log In </span><span>Sign Up</span></h6>
                    <input class="checkbox" type="checkbox" id="reg-log" name="reg-log" />
                    <label for="reg-log"></label>
                    
                    @include('partials.account.logo')

                    <div class="mx-auto card-3d-wrap">
                        <div class="card-3d-wrapper">
                            <div class="card-front">
                                <div class="center-wrap">
                                    <form class="text-center section" action="/login" method="POST">
                                        @csrf
                                        <h4 class="pb-3 mb-4">LOG IN</h4>

                                        @include('partials.account.username')
                                        @error('email')
                                            <div>{{ $message }}</div>
                                        @enderror
                                            
                                        @include('partials.account.password')
                                        @error('password')
                                            <div>{{ $message }}</div>
                                        @enderror

                                        <button type="submit" class="mt-4 btn">SUBMIT</button>
                                    </form>
                                </div>
                            </div>
                            <div class="card-back">
                                <div class="center-wrap">
                                    <form class="text-center section" action="/register" method="POST">
                                        @csrf
                                        <h4 class="pb-3 mb-4">SIGN UP</h4>

                                        @include('partials.account.fullname')
                                        @error('name')
                                            <div>{{ $message }}</div>
                                        @enderror
                                        @include('partials.account.username')
                                        @error('email')
                                            <div>{{ $message }}</div>
                                        @enderror
                                        @include('partials.account.password')
                                        @error('password')
                                            <div>{{ $message }}</div>
                                        @enderror

                                        <button type="submit" class="mt-4 btn">SUBMIT</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
