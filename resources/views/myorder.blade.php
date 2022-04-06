@extends('master')
@section('content')
<div class="custom-product">
    <div class="col-sm-10">
        
    <div class="trending-wrapper">
      <h3>My Orders</h3>
      @foreach($orders as $item)
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
              <h2 class="">Name: {{$item->name}}</h2>
              <h6>Delivery Status: {{$item->status}}</h6>
              <h6>Payment Method: {{$item->payment_method}}</h6>
              <h6>Payment Status: {{$item->payment_status}}</h6>
              <h6>Addres: {{$item->address}}</h6>
              
          </div>
         
        </div>
        <div class="col-sm-3">
        
        </div>
      </div>
      @endforeach
      
    </div>
    </div>
</div>
@endsection