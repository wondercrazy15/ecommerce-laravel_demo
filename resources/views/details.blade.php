@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6">
        <img class="details-img" src="{{$products['gallery']}}">
        </div>
    <!-- </div>
    <div class="row"> -->
        <div class="col-sm-6">
            <a href="/">Go Back</a>
            <h3>{{$products['name']}}</h3>
            <p>Price:{{$products['price']}}</p>
            <h4>Details:{{$products['description']}}</h4>
            <h4>Category:{{$products['category']}}</h4>
            <br><br>
           <form action="/add_to_cart" method="post">
               @csrf
               <input type="hidden" name="product_id" value="{{$products['id']}}">
           <button class="btn btn-warning">Add To Cart</button>
           </form>
            <br><br>
            <button class="btn btn-primary">Buy Now</button>
            <br><br>
        </div>
    </div>
</div>
@endsection