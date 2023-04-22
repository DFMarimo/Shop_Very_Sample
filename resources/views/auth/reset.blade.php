@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row justify-content-center mt-5">
            {{--Reset Card--}}
            <div class="card shadow border-0 p-3 col-12 col-md-6 col-lg-4">
                <div class="card-body">
                    <a href="/" class="text-decoration-none text-dark-emphasis">
                        <h4 class="card-title fw-bold text-center">
                            فروشگاه
                        </h4>
                    </a>
                    <p class="text-secondary text-center my-3">برای عضویت لطفا اطلاعات خود را وارد کنید.</p>
                    <form method="post" action="#">
                        <div class="mb-4">
                            <label for="email" class="form-label"> ایمیل :</label>
                            <input type="email" name="email" class="form-control" placeholder="example@gmail.com"
                                   id="email">
                        </div>
                        <button class="btn btn-dark w-100 mb-2">تایید</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
