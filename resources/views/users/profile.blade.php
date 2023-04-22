<x-content>
    <x-slot name="title">Profile</x-slot>

    <div class="container">
        <a href="{{ route('home.home') }}" class="btn btn-warning">سفارشات</a>
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <div class="mb-3">
                    <label for="name">نام کاربری :</label>
                    <input value="{{ $user->name }}" class="disabled form-control" id="name" disabled>
                </div>

                <div class="mb-3">
                    <label for="email">ایمیل : </label>
                    <input value="{{ $user->email }}" class="disabled form-control" id="email" disabled>
                </div>

                <div class="mb-3">
                    <label for="created_at">تاریخ عضویت :</label>
                    <input value="{{ $user->created_at }}" class="disabled form-control" id="created_at" disabled>
                </div>

                <div class="mb-3">
                    <label for="updated_at">آخرین بروز رسانی :</label>
                    <input value="{{ $user->updated_at }}" class="disabled form-control" id="updated_at" disabled>
                </div>

                <a href="{{ route('home.profile.form' , $user->id) }}" class="btn btn-warning">ویرایش اطلاعات</a>

            </div>
        </div>
    </div>
</x-content>
