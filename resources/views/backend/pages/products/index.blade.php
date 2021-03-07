@extends('backend.layouts.master')
@section('content')
<div class="row">
  <div class="col-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title mb-4">All Products</h5>
        <div class="table-responsive">
          <table class="table center-aligned-table">
            <thead>
              <tr>
                <th class="border-bottom-0"> Id</th>
                <th class="border-bottom-0">Image</th>
                <th class="border-bottom-0"> Name</th>
                <th class="border-bottom-0"> Brand</th>
                <th class="border-bottom-0">Quantity</th>
                <th class="border-bottom-0">Price</th>
                <th class="border-bottom-0"> Status</th>
                <th class="border-bottom-0"></th>
                <th class="border-bottom-0"></th>
                <th class="border-bottom-0"></th>
              </tr>
            </thead>
            <tbody>
              @foreach($products as $product)
              <tr>
                <td>{{$product->id}}</td>
                <td>
                  @foreach($product->images as $img)
                  <img src="{{asset('products/'.$img->image)}}" width="80">
                  @endforeach
                </td>
                <td>{{$product->title}}</td>
                <td>{{$product->brand->name}}</td>
                <td>{{$product->quantity}}</td>
                <td>{{$product->price}}</td>
                <td><label class="badge badge-teal">Approved</label></td>
                <td><a href="#" class="btn btn-outline-success btn-sm">View Order</a></td>
                <td><a href="#" class="btn btn-outline-danger btn-sm">Cancel</a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection