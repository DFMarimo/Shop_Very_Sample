<x-content>
    <x-slot name="title">Profile</x-slot>

    <div class="container">
        <a href="{{ route('home.home') }}" class="btn btn-warning">سفارشات</a>
        <a href="{{ route('home.profile') }}" class="btn btn-dark">پروفایل</a>
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <form method="post" action="{{ route('home.profile.update' , $user) }}">
                    @csrf
                    @method('PATCH')
                    <div class="mb-3">
                        <label for="name">نام کاربری :</label>
                        <input name="name" value="{{ $user->name }}" class=" form-control" id="name">
                        @error('name')
                        <span class="text-danger">
                            {{$message}}
                        </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email">ایمیل : </label>
                        <input name="email" value="{{ $user->email }}" class=" form-control" id="email">
                        @error('email')
                        <span class="text-danger">
                            {{$message}}
                        </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="created_at">تاریخ عضویت :</label>
                        <input value="{{ $user->created_at }}" class="form-control" id="created_at" disabled>
                    </div>

                    <div class="mb-3">
                        <label for="updated_at">آخرین بروز رسانی :</label>
                        <input value="{{ $user->updated_at }}" class="form-control" id="updated_at" disabled>
                    </div>

                    <div class="mb-3">
                        <label for="password">گذرواژه :</label>
                        <input name="password" class="form-control" id="password">
                        @error('password')
                        <span class="text-danger">
                            {{$message}}
                        </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password_confirmation">تایید گذرواژه :</label>
                        <input name="password_confirmation" class="form-control" id="password_confirmation">
                        @error('password-confirmation')
                        <span class="text-danger">
                            {{$message}}
                        </span>
                        @enderror
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-success">ویرایش اطلاعات</button>
                        <a href="{{ route('home.profile') }}" class="btn btn-warning">بازگشت</a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-content>
