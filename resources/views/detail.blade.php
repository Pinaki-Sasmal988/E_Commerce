@extends('master')
@section('content')
  <div class="container">
      
   <div class="row">
       <div class="col-sm-6">
       <img class="detail-image"src="{{ $product['gallery'] }}">
       </div>
       <div class="col-sm-6">
           <a href="/">Home</a>
           <h3>{{ $product['name'] }}</h3>
           <h4>Price:{{ $product['price'] }}
            <h4>Detail:{{ $product['description'] }}
            <h4>Category:{{ $product['category'] }}
           <hr>
           <form action="/add_card" method="post">
               @csrf
               <input type="hidden" name="product_id" value="{{ $product['id'] }}"><button class="btn btn-primary">Add To Card</button>
           </form>
           <hr>
           <button class="btn btn-success">Buy Now</button>

        </div>
  </div>
   
  </div>
@endsection
