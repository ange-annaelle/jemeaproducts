@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{ $title}}
                    <p class="float-end">
                    <a href="{{ url('dna/products/create') }}"><span class="badge text-bg-success">add</span></a>
                        <a href=""><span class="badge text-bg-primary">edit</span></a>
                        <a href=""><span class="badge text-bg-danger">delete</span></a>
                    </p>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="row g-3" action="{{ url('dna/products/'.$product->id) }}" enctype="multipart/form-data" method="post" >
                        @csrf
                        @method('put')
                    <div class="col-md-4">
                        <label for="name" class="form-label">Select  subcategory</label>
                        <select class="form-select {{ $errors->has('sub_category_id') ? ' is-invalid' : '' }}" aria-label="Default select example" name="sub_category_id">
                            <option value="{{$product->subcategory->id}}" >{{ $product->subcategory->name }}</option>
                            @foreach($subcategories as $subcategory)
                            <option value="{{$subcategory->id}}" {!! old('sub_category_id') == $subcategory->id ? 'selected' : ''!!} >{{ $subcategory->name }}</option>
                            @endforeach
                            </select>
                        <div class="invalid-feedback">{{ $errors->first('sub_category_id') }}</div>
                    </div>
                    <div class="col-md-4">
                        <label for="name" class="form-label">Product name</label>
                        <input type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name')!=null ? old('name') : $product->name }}">
                        <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                    </div>
                    <div class="col-md-4">
                        <label for="name" class="form-label">Product price</label>
                        <input type="number" class="form-control {{ $errors->has('price') ? ' is-invalid' : '' }}" name="price" value="{{ old('price')!=null ? old('price') : $product->price  }}">
                        <div class="invalid-feedback">{{ $errors->first('price') }}</div>
                    </div>
                    <div class="col-md-12">
                        <label for="image" class="form-label">Add more product image(s)</label>
                        <input type="file" class="form-control {{ $errors->has('images') ? ' is-invalid' : '' }}" name="images[]" multiple >
                        <div class="invalid-feedback">{{ $errors->first('images') }}</div>
                    </div>
                    <div class="col-md-12">
                        <div class="row text-center">
                            @foreach($product->pictures as $picture)
                                    <div class="col-md-1">
                                        <a href="{{ url('delete-product-image/'.$picture->id) }}" class="badge text-bg-danger">delete</a>
                                        <img src="{{ url('images/product/'.$picture->picture) }}" width="100%">
                                    </div>
                                @endforeach
                        </div>
                    </div>


                    <div class="col-12">
                        <label for="about" class="form-label">Short description</label>
                        <textarea class="form-control {{ $errors->has('short_description') ? ' is-invalid' : '' }}" id="short_description" rows="3" name="short_description" >{{old('short_description')!=null ? old('short_description') : $product->short_description }}</textarea>
                        <div class="invalid-feedback">{{ $errors->first('short_description') }}</div>
                    </div>

                    <div class="col-12">
                        <label for="about" class="form-label">Long description</label>
                        <textarea  class="form-control {{ $errors->has('long_description') ? ' is-invalid' : '' }}" id="trumbowyg-demo" rows="9" name="long_description" >{{old('long_description')!=null ? old('long_description') : $product->long_description}}</textarea>
                        <div class="invalid-feedback">{{ $errors->first('long_description') }}</div>
                    </div>





                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Update product</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
