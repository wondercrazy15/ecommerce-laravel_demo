@extends('master')
@section('content')
<div class="custom-product">
    <div class="col-sm-10">
        
    <div class="trending-wrapper">
      <h3>Searched Products</h3>
      <a class="btn btn-success" href="ordernow">Order Now</a> <br> <br>
      @foreach($products as $item)
      <div class="row search-item cart-list-devider">
        <div class="col-sm-3">
        <a href="details/{{$item->id}}">
        <img class="trending-img" src="{{$item->gallery}}">
          <!-- <div class="">
              <h2 class="">{{$item->name}}</h2>
              <h4>{{$item->description}}</h4>
              
          </div> -->
          </a>
        </div>
        <div class="col-sm-3">
       
        <!-- <img class="trending-img" src="{{$item->gallery}}"> -->
          <div class="">
              <h2 class="">{{$item->name}}</h2>
              <h4>{{$item->description}}</h4>
              
          </div>
         
        </div>
        <div class="col-sm-3">
      
        <!-- <button class="btn btn-danger">Remove</button>
     -->
            <div class="product-close">
            <a href="/removecart/{{$item->cart_id}}" class="remove-product">
          <span class="glyphicon glyphicon-remove"></span>
        </a>
            </div>
    
         
        </div>
      </div>
      @endforeach
      <a class="btn btn-success" href="ordernow">Order Now</a> <br> <br>
    </div>
    </div>
</div>
@endsection

