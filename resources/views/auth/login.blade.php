@extends('layouts.master')

@section('title' , 'Login')
@section('content')

    <div class="container">
        <div class="row justify-content-center mt-5">
            {{--Login Card--}}
            <div class="card shadow border-0 p-3 col-12 col-md-6 col-lg-4">
                <div class="card-body">
                    <a href="/" class="text-decoration-none text-dark-emphasis">
                        <h4 class="card-title fw-bold text-center">
                            فروشگاه
                        </h4>
                    </a>
                    <p class="text-secondary text-center my-3">لطفا ایمیل و گذرواژه خود را وارد کنید.</p>
                    <form method="post" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-4">
                            <label for="email" class="form-label"> ایمیل :</label>
                            <input type="email" name="email" class="form-control" placeholder="example@gmail.com"
                                   id="email">
                            @error('email')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="password" class="form-label"> گذرواژه :</label>
                            <input type="password" name="password" class="form-control" id="password">
                            @error('password')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="remember" class="form-check-label"> مرا به خاطر بسپار </label>
                            <input type="checkbox" name="remember" class="form-check-input" id="remember">
                        </div>
                        <button class="btn btn-dark w-100 mb-2">ورود</button>
                        <a href="#" class="btn btn-danger w-100">ثبت نام با Google</a>
                    </form>

                    <a href="{{ route('register') }}" class="text-center text-decoration-none d-block mt-4">اکانت
                        برای ورود ندارید ؟</a>
                </div>
            </div>
        </div>
    </div>

@endsection
