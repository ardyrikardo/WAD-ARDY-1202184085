@extends('layouts.product')

@section('content')

@if ($products->count() < 1)
    <div class="d-flex justify-content-center" style="margin-top: 50px">
        <p>There is no data...</p>
    </div>
    <div class="d-flex justify-content-center" style="margin-top: 10px">
        <a href="/product/create" class="btn btn-primary">Add Product</a>
    </div>
@else
    <div class="d-flex justify-content-center" style="margin-top: 50px">
        <h3>List Product</h3>
    </div>
    <div class="container" style="margin-top: 20px; padding-left: 70px">
        <a href="/product/create" class="btn btn-dark">Add Product</a>
    </div>
    <div class="d-flex justify-content-center" style="margin-top: 20px">
        
        <table class="table table-borderless" style="width: 1000px">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            @foreach ($products as $product)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td style="width: 500px">{{$product->name}}</td>
                    <td>{{$product->price}}</td>
                    <td>
                        <a href="/product/{{$product-> id}}/edit" class="btn btn-primary">Edit</a>
                        <form action="/product/{{ $product-> id }}" method ="POST" style="display: inline-block">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endif

@endsection