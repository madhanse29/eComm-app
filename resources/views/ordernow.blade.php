@extends('master')
@section('content')
<div class="container custom-product">
<div class="col-sm-10">
<table class="table">
  <tbody>
    <tr>
      <td>Amount</td>
      <td>${{$total}}</td>
    </tr>
    <tr>
      <td>Tax</td>
      <td>$ 0</td>
    </tr>
    <tr>
      <td>Delivery</td>
      <td>$ 10</td>
    </tr>
    <tr>
      <td>Total Amount</td>
      <td>${{$total+10}}</td>
    </tr>
  </tbody>
</table>
<div>
<form action='/orderplace' method="POST">
    @csrf
  <div class="mb-3">
    <textarea type="text" name="address" placeholder="enter your address" class="form-control"></textarea>
  </div>
  <div class="mb-3">
    <label for="pwd" class="form-label">Payment Method</label><br>
    <input type="radio" value="online"  name="payment"><span>online payment</span><br>
    <input type="radio" value="emi" name="payment"><span>EMI payment</span><br>
    <input type="radio" value="COD" name="payment"><span>Cash on Delivery</span>
  </div>
  <button type="submit" class="btn btn-primary">Order now</button>
</form>
</div>

</div>
</div>
@endsection 