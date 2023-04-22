<x-content>
    <x-slot name="title">Home</x-slot>

    <div class="container">
        <div class="d-flex gap-2 mb-3">
            <a href="{{route('home.home')}}" class="btn btn-dark">سفارشات</a>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-11">
                <table class="table table-striped table-hover table-bordered">
                    <thead class="table-primary">
                    <tr>
                        <th>عنوان</th>
                        <th>قیمت</th>
                        <th>میزان تخفیف</th>
                        <th>مبلغ کل</th>
                        <th>زمان ثبت</th>
                        <th>وضعیت</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as  $product)
                        <tr>
                            <td>{{ $product->title }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->discount }}</td>
                            <td>{{ $product->PriceDiscount }}</td>
                            <td>{{ $product->created_at }}</td>
                            <td>#</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-content>
