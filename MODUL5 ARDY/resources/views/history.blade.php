<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>History</title>
</head>

<body>


    <nav class="navbar navbar-expand-sm bg-danger justify-content-center">
        <ul class="navbar-nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link text-light " href="/"><strong>HOME</strong></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link text-light" href="/product"><strong>PRODUCT</strong></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link text-light" href="/order"><strong>ORDER</strong></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link active text-light" href="/history"><strong>HISTORY</strong></a>
            </li>
        </ul>
    </nav>


    @if ($orders->count() < 1) <div class="d-flex justify-content-center" style="margin-top: 50px">
        <p>There is no data...</p>
        </div>
        <div class="d-flex justify-content-center" style="margin-top: 10px">
            <a href="/order" class="btn btn-primary">Order Now</a>
        </div>
        @else

        <div class="d-flex justify-content-center" style="margin-top: 50px;">
            <h2>History</h2>
        </div>

        <div class="d-flex justify-content-center" style="margin-top: 50px">
            <table class="table table-borderless" style="width: 1000px">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Product</th>
                        <th>Buyer Name</th>
                        <th>Contact</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                @foreach ($orders as $order)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td style="width: 500px">{{$order->product->name}}</td>
                    <td>{{$order->buyer_name}}</td>
                    <td>{{$order->buyer_contact}}</td>
                    <td>${{$order->amount * $order->product->price}}</td>
                </tr>
                @endforeach
            </table>
        </div>
        @endif



</body>

</html>