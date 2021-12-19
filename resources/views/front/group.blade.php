@extends('layouts.app')

@section('content')
    <h1>{{ $group->name }} Products</h1>
    <div class="row">
        @foreach($group->product as $product)
            <div class="col-4">
                <div class="card mt-3" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">{{ $product->description }}</p>
                        <p class="card-text">{{ $product->price }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
