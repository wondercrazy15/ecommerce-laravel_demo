@extends('master')
@section('content')
<div class="custom-product">
    <div class="col-sm-10">
    <table class="table table-striped">
   
    <tbody>
      <tr>
        <td>Amount</td>
        <td>₹ {{$totals}}</td>
        
      </tr>
      <tr>
        <td>Tax</td>
        <td>₹ 0</td>
        
      </tr>
      <tr>
        <td>Delivery</td>
        <td>₹ 100</td>
        
      </tr>
      <tr>
        <td>Total Amount</td>
        <td>₹ {{$totals+100}}</td>
        
      </tr>
    </tbody>
  </table>
    <div>
    <form action="/orderplace" method="POST">
      @csrf
    <div class="form-group">
      <label for="email">Email:</label>
      <textarea type="email" class="form-control" id="address" placeholder="Enter Address" name="address"></textarea>
    </div>
    <div class="form-group">
      <label for="pwd">Payment Method:</label> <br>
      <input type="radio" value="cash" name="payment" id="payment"> <span>Online Payment</span> <br>
      <input type="radio" value="cash" name="payment" id="payment"> <span>EMI Payment</span> <br>
      <input type="radio" value="cash" name="payment" id="payment"> <span>Cash On Delivery</span> <br>
      

    </div>
  
    <button type="submit" class="btn btn-default">Order Now</button>
  </form>
    </div>
    
    </div>
</div>
@endsection