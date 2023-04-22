<x-content>
    <x-slot name="title">Home</x-slot>

    <div class="container">
        <div class="d-flex gap-2 mb-3">
            <form method="post" action="{{ route('logout') }}">
                @csrf
                <button class="btn btn-danger">خروج</button>
            </form>
            <a href="{{route('home.profile')}}" class="btn btn-dark">پروفایل</a>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-11">
                <table class="table table-striped table-hover table-bordered">
                    <thead class="table-primary">
                    <tr>
                        <th>ID</th>
                        <th>شماره سفارش</th>
                        <th>زمان ثبت</th>
                        <th>مبلغ کل</th>
                        <th>عملیات</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->order_id }}</td>
                            <td>{{ $order->created_at }}</td>
                            <td>{{ number_format($order->total) }} تومان</td>
                            <td>
                                <a href="{{ route('home.order' , $order->id) }}" class="btn btn-info">مشاهده
                                    سفارش
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-content>
