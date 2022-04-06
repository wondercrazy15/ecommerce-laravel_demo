@extends('master')
@section('content')
<div class="custom-product">

    <div class="trending-wrapper">
      <h3>Searched Products</h3>
      @foreach($products as $item)
      <div class="search-item">
      <a href="details/{{$item['id']}}">
        <img class="trending-img" src="{{$item['gallery']}}">
          <div class="">
              <h2 class="">{{$item['name']}}</h2>
              <h4>{{$item['description']}}</h4>
              
          </div>
          </a>
      </div>
      @endforeach
    </div>
</div>
@endsection