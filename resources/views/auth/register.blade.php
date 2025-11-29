@extends('frontend.layouts.app')

@section('contents')
    <x-frontend.breadcrump :items="[['label' => 'Home', 'url' => '/'], ['label' => 'Register']]" />
    <div class="page-content pt-150 pb-140">
        <div class="container">
            <div class="row">
                <div class="col-12 m-auto">
                    <div class="row align-items-center">
                        <div class="col-lg-6 offset-lg-3">
                            <div class="login_wrap widget-taber-content background-white">
                                <div class="padding_eight_all bg-white">
                                    <div class="heading_s1">
                                        <h2 class="mb-5">Create an Account</h2>
                                        <p class="mb-30">Already have an account? <a href="{{route('login')}}">Login</a></p>
                                    </div>
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" required="" name="name" placeholder="Username" value="{{old('name')}}"/>
                                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                        </div>
                                        <div class="form-group">
                                            <input type="email" required="" name="email" placeholder="Email" value="{{old('email')}}"/>
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        </div>
                                        <div class="form-group">
                                            <input required="" type="password" name="password" placeholder="Password" />
                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        </div>
                                        <div class="form-group">
                                            <input required="" type="password" name="password_confirmation"
                                                placeholder="Confirm password" />
                                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                        </div>

                                        <div class="payment_option mb-30">
                                            <div class="custome-radio">
                                                <input class="form-check-input" required="" type="radio"
                                                    name="user_type" id="exampleRadios3" checked="" value="user"/>
                                                <label class="form-check-label" for="exampleRadios3"
                                                    data-bs-toggle="collapse" data-target="#bankTranfer"
                                                    aria-controls="bankTranfer">I am a customer</label>
                                            </div>
                                            <div class="custome-radio">
                                                <input class="form-check-input" required="" type="radio"
                                                    name="user_type" id="exampleRadios4" checked="" value="vendor"/>
                                                <label class="form-check-label" for="exampleRadios4"
                                                    data-bs-toggle="collapse" data-target="#checkPayment"
                                                    aria-controls="checkPayment">I am a vendor</label>
                                            </div>
                                        </div>
                                        <div class="form-group mb-0">
                                            <button type="submit"
                                                class="btn btn-fill-out btn-block hover-up font-weight-bold"
                                                name="login">Submit &amp; Register</button>
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
