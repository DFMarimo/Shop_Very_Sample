<x-content>
    <x-slot name="title">Admin Users</x-slot>

    <div class="container">
        <div class="row">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">شماره سفارش</th>
                    <th scope="col">نام خریدار</th>
                    <th scope="col">مبلغ سفارش</th>
                    <th scope="col">تاریخ ثبت</th>
                    <th scope="col">عملیات</th>
                </tr>
                </thead>
                <tbody>
                @if($orders->items())
                    @foreach($orders as $index => $order)
                        <tr>
                            <th>{{$orders->firstItem() + $index}}</th>
                            <th>{{$order->order_id}}</th>
                            <td>{{$order->user->email}}</td>
                            <td>{{$order->total}}</td>
                            <td>{{$order->created_at}}</td>
                            <td>
                                <a class="btn btn-success btn-sm" href="{{ route('orders.show' , $order->id) }}">مشاهده
                                    سفارش</a>
                                <a onclick="document.getElementById('delOrder').submit()"
                                   class="btn btn-sm btn-danger">حذف</a>
                                {{--delete Form--}}
                                <form method="post" id="delOrder"
                                      action="{{route('orders.destroy' , $order->id)}}">
                                    @csrf @method('DELETE')
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
            {{--Paginate--}}
            <div class="justify-content-center d-flex my-4">
                {{ $orders->render() }}
            </div>
        </div>
    </div>


</x-content>
