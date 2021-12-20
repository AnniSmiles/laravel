@extends('layouts.app')

@section('content')
    <div class="row mt-5">
        <div class="col-6">
            <form method="post" action="{{ route('product.store') }}">
                @csrf
                <h5>Add Product</h5>
                <div class="form-group">
                    <label for="inputState">Group</label>
                    <select id="inputState" class="form-control" name="group">
                        @foreach($groups as $group)
                            <option value="{{ $group->id }}">{{ $group->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Name</label>
                    <input name="name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Price</label>
                    <input name="price" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Price">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Description</label>
                    <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Position</label>
                    <input name="position" type="number" class="form-control" id="exampleFormControlInput1" placeholder="Position">
                </div>
                <button class="btn btn-outline-dark" style="background-color: limegreen">Submit</button>
            </form>
        </div>
        <div class="col-6">
            <form method="post" action="{{ route('group.store') }}">
                @csrf
                <h5>Add Group</h5>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Name</label>
                    <input name="name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name">
                </div>
                <button class="btn btn-outline-dark" style="background-color: limegreen">Submit</button>
            </form>
        </div>
    </div>
    <div class="row">
        <div><h2>ჯგუფები</h2></div>
        @foreach($groups as $group)
            <div style="align-self: auto; margin-top:3rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $group->name }}</h5>
                    <form action="{{ route('group.destroy', $group->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-outline-warning">Delete</button>
                    </form>

                </div>
            </div>


            @endforeach
        <div>
            <div><h2>პროდუქტები</h2></div>
            @foreach($products as $product)
                <div class="card mt-4 m-2" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">{{ $product->description }}</p>
                        <p class="card-text">{{ $product->price }}</p>
                        <form action="{{ route('product.destroy', $product->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-outline-warning">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>

    </div>


@endsection
