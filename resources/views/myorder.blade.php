
@extends('master')
@section('content')
<div class="container">
 <div class="col-sm-6">
    <div class="">
        <h3>My Order</h3>
              @foreach ($orders as $item)
                  <div class="row searched-item card-list-divider">
                         <div class="col-sm-6">
                               <a href="detail/{{ $item->id }}">
                                   <img class="trending-image" src="{{ $item->gallery }}"><br>
                                  <h4>Price: {{ $item->price }}</h4>
                                 </a>
                            </div>
                            <div class="detail">
                               <div class="col-sm-12">
                
                                 <h5> Name:{{ $item->name }}</h5>
                                 <h5> Delivary Status:{{ $item->status }}</h5>
                                 <h5> Address:{{ $item->address }}</h5>
                                 <h5> Payment Status:{{ $item->payment_status }}</h5>
                                 <h5> Payment Method:{{ $item->payment_method}}</h5>

                   
                              </div>
                            </div>
                           
                    </div>
    @endforeach
</div>
</div>
</div>
@endsection