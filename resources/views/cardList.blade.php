
@extends('master')
@section('content')
<div class="container">
 <div class="col-sm-6">
    <div class="">
        <h3>Product for result</h3>
        <a  class="btn btn-success"href="ordernow">Order Now</a>
              @foreach ($products as $item)
                  <div class="row searched-item card-list-divider">
                         <div class="col-sm-6">
                               <a href="detail/{{ $item->id }}">
                                   <img class="trending-image" src="{{ $item->gallery }}"><br>
                                  <h4>Price: {{ $item->price }}</h4>
                                 </a>
                            </div>
                            <div class="detail">
                               <div class="col-sm-12">
                
                                  {{ $item->name }}
                                   {{ $item->description }}
                   
                              </div>
                            </div>
                            <div class="col-sm-4">
                
                               <a href="/remove/{{ $item->card_id }}" class="btn btn-warning">Remove Item</a>
                 
                              </div>
                    </div>
    @endforeach
</div>
</div>
</div>
@endsection