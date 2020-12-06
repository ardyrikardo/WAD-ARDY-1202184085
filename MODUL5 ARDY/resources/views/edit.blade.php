@extends('layouts.product')

@section('content')
<div class="d-flex justify-content-center" style="margin-top: 50px;">    
    <h2>Update Product</h2>
</div>


<div class="container">
    <br>
    <div class="d-flex justify-content-center">
        <div class="col-10">
            <form action="/product/{{$product-> id}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="product">Product Name</label>
                    <input type="text" class="form-control" id="product" aria-describedby="product" name="name" value="{{$product->name}}">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">$ USD</div>
                        </div>
                        <input type="number" class="form-control" id="inlineFormInputGroup" name="price" value="{{$product->price}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description">{{$product->description}}</textarea>
                </div>
                <div class="form-group">
                    <label for="stok">Stock</label>
                    <input type="text" class="form-control" id="stok" aria-describedby="stok" name="stock" value="{{$product->stock}}">
                </div>
                <div class="form-group">
                    <label for="gambar">Image File Input</label>
                    <input type="file" class="form-control-file" id="gambar" name="img_path">
                </div>
                <button type="submit" class="btn btn-dark">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
