@extends('layouts.order')

@section('content')

@if ($products->count() < 1) <div class="d-flex justify-content-center" style="margin-top: 50px">
    <p>There is no data...</p>
    </div>
    <div class="d-flex justify-content-center" style="margin-top: 10px">
        <a href="/order" class="btn btn-primary">Add Product</a>
    </div>
    @else
    <div class="d-flex justify-content-center" style="margin-top: 50px">
        <h2>Order</h2>
    </div>
    <div class="container">
        <div class="d-flex justify-content-start" style="margin-top: 100px">
            <div class="row">
                @foreach ($products as $product)
                <div class="col mb-2 ml-5">
                    <div class="card" style="width: 300px">
                        <img src="/image/{{$product->img_path}}" class="card-img-top" alt="pict1" style="width: 300px; height:300px">
                        <div class="card-body">
                            <h4 class="card-title">{{$product->name}}</h4>
                            <p>
                                {{$product->description}}
                            </p>
                            <h2>${{$product->price}}</h2>
                            <a href="/order/{{$product->id}}" class="btn btn-success">Order Now</a>
                            {{-- <button type=submit class="btn btn-primary" name="order">Order Now</button> --}}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    @endif

    @endsection