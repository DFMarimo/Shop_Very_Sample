@extends('layouts.master')
@section('title' , 'Register')
@section('content')
    <div class="container">
        <div class="row justify-content-center mt-5">
            {{--Register Card--}}
            <div class="card shadow border-0 p-3 col-12 col-md-6 col-lg-4">
                <div class="card-body">
                    <a href="/" class="text-decoration-none text-dark-emphasis">
                        <h4 class="card-title fw-bold text-center">
                            فروشگاه
                        </h4>
                    </a>
                    <p class="text-secondary text-center my-3">برای عضویت لطفا اطلاعات خود را وارد کنید.</p>
                    <form method="post" action="{{ route('register') }}">
                        @csrf
                        <div class="mb-4">
                            <label for="email" class="form-label"> ایمیل :</label>
                            <input type="email" name="email" class="form-control" placeholder="example@gmail.com"
                                   id="email">
                            @error('email')
                            <span class="text-danger"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>


                        <div class="mb-4">
                            <label for="name" class="form-label"> نام کاربری :</label>
                            <input type="text" name="name" class="form-control" placeholder="sample" id="name">
                            @error('name')
                            <span class="text-danger"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>


                        <div class="mb-4">
                            <label for="password" class="form-label"> گذرواژه :</label>
                            <input type="password" name="password" class="form-control" id="password">
                            @error('password')
                            <span class="text-danger"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="password-confirm" class="form-label">تکرار گذرواژه :</label>
                            <input type="password" name="password_confirmation" class="form-control" id="password-confirm">
                            @error('password_confirmation')
                            <span class="text-danger"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <button class="btn btn-dark w-100 mb-2">ثبت نام</button>
                        <a href="#" class="btn btn-danger w-100">ثبت نام با Google</a>
                    </form>

                    <a href="{{ route('login') }}" class="text-center text-decoration-none d-block mt-4">
                        قبلا ثبت نام کردید؟
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
