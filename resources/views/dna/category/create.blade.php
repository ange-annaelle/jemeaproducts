@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{ $title}}
                    <p class="float-end">
                    <a href="{{ url('dna/categories/create') }}"><span class="badge text-bg-success">add</span></a>
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

                    <form class="row g-3" action="{{ url('dna/categories') }}" enctype="multipart/form-data" method="post" >
                        @csrf
                    <div class="col-md-6">
                        <label for="name" class="form-label">Category name</label>
                        <input type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name')!=null ? old('name') : '' }}">
                        <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                    </div>
                    <div class="col-md-6">
                        <label for="image" class="form-label">Category image</label>
                        <input type="file" class="form-control {{ $errors->has('image') ? ' is-invalid' : '' }}" name="image" >
                        <div class="invalid-feedback">{{ $errors->first('image') }}</div>
                    </div>
                    <div class="col-12">
                        <label for="about" class="form-label">About category</label>
                        <textarea class="form-control {{ $errors->has('about') ? ' is-invalid' : '' }}" id="about" rows="3" name="about" >{{old('about')!=null ? old('about') : ''}}</textarea>
                        <div class="invalid-feedback">{{ $errors->first('about') }}</div>
                    </div>
                    
                    
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Save category</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
