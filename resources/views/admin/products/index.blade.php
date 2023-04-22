<x-content>
    <x-slot name="title">Admin Products</x-slot>

    <div class="container">
        <div class="row">
            <div class="">
                <a href="{{ route('products.create') }}" class="btn btn-primary mb-2">ایجاد محصول جدید</a>
            </div>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">ID</th>
                    <th scope="col">عنوان محصول</th>
                    <th scope="col">قیمت با تخفیف</th>
                    <th scope="col">میزان تخفیف</th>
                    <th scope="col">قیمت اصلی</th>
                    <th scope="col">موجودی</th>
                    <th scope="col">عملیات</th>
                </tr>
                </thead>
                <tbody>
                @if($products->items())
                    @foreach($products as $index => $product)
                        <tr>
                            <th>{{$products->firstItem() + $index}}</th>
                            <th>{{$product->id}}</th>
                            <td>{{$product->title}}</td>
                            <td>{{$product->priceDiscount}} تومان</td>
                            <td>{{$product->discount}}</td>
                            <td>{{number_format($product->price)}} تومان</td>
                            <td>{{$product->inventory}}</td>
                            <td>
                                <a href="{{ route('products.edit' , $product->id) }}"
                                   class="btn btn-sm btn-warning">ویرایش</a>

                                <a onclick="document.getElementById('delProduct').submit()"
                                   class="btn btn-sm btn-danger">حذف</a>
                                {{--delete Form--}}
                                <form method="post" id="delProduct"
                                      action="{{route('products.destroy' , $product->id)}}">
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
                {{ $products->render() }}
            </div>
        </div>
    </div>


</x-content>
