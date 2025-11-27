@extends('frontend.layouts.app')

@section('contents')
    <x-frontend.breadcrump :items="[
        ['label' => 'Home', 'url' => '/'],
        ['label' => 'Login']
    ]"/>
    <div class="page-content pt-150 pb-135">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-10 col-md-12 m-auto">
                    <div class="row">
                        <div class="col-lg-6 pr-30 d-none d-lg-block">
                            <img class="border-radius-15" src="{{asset('assets/frontend/dist/imgs/bg-login.jpg')}}" alt="" />
                        </div>
                        <div class="col-lg-6 col-md-8">
                            <x-auth-session-status class="mb-4" :status="session('status')" />
                            <div class="login_wrap widget-taber-content background-white">
                                <div class="padding_eight_all bg-white">
                                    <div class="heading_s1">
                                        <h1 class="mb-5">Login</h1>
                                        <p class="mb-30">Don't have an account? <a href="{{route('register')}}">Create
                                                here</a></p>
                                    </div>
                                    <form method="post" action="{{route('login')}}">
                                        @csrf
                                        <div class="form-group">
                                            <input type="email required="" name="email"
                                                placeholder="Your Email *" value="{{old('email')}}"/>
                                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        </div>
                                        <div class="form-group">
                                            <input required="" type="password" name="password"
                                                placeholder="Your password *" />
                                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        </div>

                                        <div class="login_footer form-group mb-50">
                                            <div class="chek-form">
                                                <div class="custome-checkbox">
                                                    <input class="form-check-input" type="checkbox" name="checkbox"
                                                        id="exampleCheckbox1" value="" name="remember"/>
                                                    <label class="form-check-label" for="exampleCheckbox1"><span>Remember
                                                            me</span></label>
                                                </div>
                                            </div>
                                            <a class="text-muted" href="{{route('password.request')}}">Forgot password?</a>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-heading btn-block hover-up"
                                                name="login">Log in</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
