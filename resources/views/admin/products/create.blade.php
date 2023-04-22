<x-content>
    <x-slot name="title">Create Products</x-slot>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">
                <div class="card">
                    <div class="card-header">
                        ایجاد محصول جدید
                    </div>
                    <div class="card-body">
                        <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="title" class="form-label"> عنوان محصول :</label>
                                <input name="title" type="text" value="{{old('title')}}" id="title"
                                       class="form-control">
                                @error('title')
                                <span class="text-danger"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">توضیحات :</label>
                                <textarea name="description" rows="4" type="text" id="description" class="form-control">
                                    {{old('description')}}
                                </textarea>
                                @error('description')
                                <span class="text-danger"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="price" class="form-label">قیمت :</label>
                                <input name="price" type="number" value="{{old('price') ?? 0}}" id="price"
                                       class="form-control">
                                @error('price')
                                <span class="text-danger"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="discount" class="form-label">میزان تخفیف :</label>
                                <input name="discount" type="number" value="{{old('discount') ?? 0}}" id="discount"
                                       class="form-control">
                                @error('discount')
                                <span class="text-danger"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="inventory" class="form-label">موجودی :</label>
                                <input name="inventory" type="number" value="{{old('inventory') ?? 0}}" id="inventory"
                                       class="form-control">
                                @error('inventory')
                                <span class="text-danger"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="image" class="form-label">تصویر محصول :</label>
                                <input name="image" class="form-control" type="file" id="image">
                                @error('image')
                                <span class="text-danger"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-dark">تایید و ایجاد محصول</button>
                            <a href="{{route('products.index') }}" class="btn btn-danger">بازگشت</a>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-content>
