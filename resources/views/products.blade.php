<x-content>
    {{--Title Name--}}
    <x-slot name="title">products</x-slot>

    {{--Content base--}}
    <div class="container">
        <form>
            {{--Control Box--}}
            <div class="row gap-2 mt-3 justify-content-between align-items-center">
                {{--FilterBox--}}
                <div class="col-12 col-md-6 col-lg-4 d-flex gap-2">
                    <form>
                        <select aria-label="filter" class="form-select" name="filter">
                            <option value="new" {{request()->query('filter') == 'new' ? 'selected' : '' }}>جدید ترین
                            </option>
                            <option value="old" {{request()->query('filter') == 'old' ? 'selected' : '' }}>قدیمی ترین
                            </option>
                            <option value="low" {{request()->query('filter') == 'low' ? 'selected' : '' }}>ارزان ترین
                            </option>
                            <option value="high" {{request()->query('filter') == 'high' ? 'selected' : '' }}>گران ترین
                            </option>
                        </select>
                        <button class="btn btn-primary">فیلتر</button>
                    </form>
                </div>

                {{--SearchBox input--}}
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="input-group">
                        <input name="search" type="text" class="form-control bg-white" placeholder="جستوجو ..."
                               aria-label="Example text with button addon" aria-describedby="button-addon1"
                               value="{{ request()->query('search') }}">
                        <button class="btn btn-outline-secondary" type="submit" id="button-addon1">
                            <i class="bi bi-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </form>
        <hr>
        {{--Prodcuts show--}}
        <div class="row justify-content-center g-4">
            @if($products->items())
                @foreach($products as $product)
                    {{--Card Product--}}
                    <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                        <div class="card card-cus">
                            <img src="{{asset('img/'.$product->image)}}" class="card-img-top card-img-top-cus" alt="#">
                            <div class="card-body text-center">
                                <strong class="card-title">{{ $product->title }}</strong>
                                @if($product->discount > 0 && $product->discount !== null)
                                    <div class="card-text  mb-1">
                                        <del class="text-danger"><small>قیمت : {{ $product->price }} تومان</small></del>
                                        <span class="text-success"> {{ $product->PriceDiscount }} تومان</span>
                                    </div>
                                @else
                                    <div class="card-text mb-1">قیمت : {{ $product->price }} تومان</div>
                                @endif

                                <a href="{{ route('single-product' , $product->id) }}" class="btn btn-dark w-100">مشاهده
                                    محصول</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="alert alert-warning">متأسفانه محصولی برای نمایش وجود ندارد.</div>
            @endif
        </div>

        {{--Paginate--}}
        <div class="justify-content-center d-flex my-4">
            {{ $products->render() }}
        </div>
    </div>
</x-content>


