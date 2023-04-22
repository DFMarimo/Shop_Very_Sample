<x-content>
    <x-slot name="title">Admin</x-slot>

    <div class="container">
        <div>
            <a href="{{ route('products.index') }}" class="btn btn-primary">محصولات</a>
            <a href="{{ route('users.index') }}" class="btn btn-info">کاربران</a>
            <a href="{{ route('orders.index') }}" class="btn btn-success">سفارشات</a>
        </div>
        <p>ایندکس اصلی</p>
    </div>


</x-content>

