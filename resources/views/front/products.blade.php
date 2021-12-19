@extends('layouts.app')

@section('content')
    <h1>Products</h1>
    <div class="row">
        @foreach($groups as $group)
            <div class="col-4 mb-5">
                <h5 class="mt-5">{{ $group->name }}</h5>
                @foreach($group->product->take(4) as $product)
                    <div class="card mt-3" style="width: 18rem;">
                        <div class="card-body">
                            <h3 class="card-title">{{ $product->name }}</h3>
                            <p class="card-text">{{ $product->description }}</p>
                            <p class="card-text">{{ $product->price }}</p>
                        </div>
                    </div>
                @endforeach
                <a href="{{ route('show.group', $group->id) }}" class="btn btn-primary mt-3">Go to group</a>

            </div>
        @endforeach
    </div>
@endsection
