
@extends('master')
@section('content')
<div class="container">
 <div class="col-sm-6">
    <div class="">
        
        <table class="table">
            <thead>
              <tr>
                <th>Amount</th>
                <th>{{ $total }}</th>
                
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Tax</td>
                <td>0</td>
    
              </tr>
              <tr>
                <td>Delivary</td>
                <td>{{ $total>1000?"No Delivery Charges required":"45 Rupess Delivery Charges" }}</td>
              </tr>
              <tr>
                <td>Total Amount</td>
                <td>{{ $total>1000?$total:$total+10 }}</td>
              </tr>
            </tbody>
          </table>
          <div>

            <form action="/orderplace" method="POST">
              @csrf
                <div class="form-group">
                  <label for="email">Address:</label>
                  <textarea type="text" name="address"class="form-control"> </textarea>
                </div>
                <div class="form-group">
                  <label for="">Payment Method:</label><br>
                  <input type="radio" value="case" name="payment"><span>Online</span><br>
                  <input type="radio" value="case" name="payment">EMI<br>
                  <input type="radio" value="case" name="payment">Case On Delivery<br>
                </div>
                <button type="submit" class="btn btn-default">Order</button>
              </form>
          </div>
        
</div>
</div>
</div>
@endsection