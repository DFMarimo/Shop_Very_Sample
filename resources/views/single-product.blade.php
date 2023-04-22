<x-content>
    {{--Title Name--}}
    <x-slot name="title">Single Product</x-slot>

    {{--Content base--}}
    <div class="container">
        <div class="row py-3">
            <div class="col-12 col-md-7 col-lg-8">
                <divc class="card shadow">
                    <div class="card-body d-flex gap-2 flex-column">
                        <img class="card-img" src="{{ asset('img/'. $product->image) }}" alt="{{ $product->title }}">
                        <h4 class="card-title">{{$product->title}}</h4>
                        <p class="link-body-emphasis">
                            {{ $product->description }}
                        </p>
                    </div>
                </divc>
            </div>
            <div class="col-12 col-md-5 col-lg-4">
                <divc class="card shadow">
                    <div class="card-body">

                        @auth()
                            <a href="#" class="btn btn-primary mb-2 w-100">افزودن به سبد خرید</a>

                            <p class="mb-2 alert alert-info text-center p-2">این محصول در سبد خرید شما میباشد.</p>
                        @endauth

                        @guest()
                            <p class="mb-2 alert alert-warning text-center p-2">برای خرید ابتدا وارد سایت شوید.</p>
                        @endguest

                        <table class="table">
                            <tbody>
                            <tr>
                                <td>قیمت :</td>
                                <td>
                                    @if($product->discount > 0 && $product !== null)
                                        <span class="text-success">{{ $product->priceDiscount }}</span>
                                        <small class="text-danger">
                                            <del>{{ $product->price }}</del>
                                        </small>
                                    @else
                                        {{ number_format($product->price) }} تومان
                                    @endif

                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </divc>
            </div>
        </div>
    </div>
</x-content>


