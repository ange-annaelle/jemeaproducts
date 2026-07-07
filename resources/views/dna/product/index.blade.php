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

                    </p>
                </div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @elseif(session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @elseif(session('warning'))
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            {{ session('warning') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <table class="table table-hover table-sm">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name (Price)</th>
                        <th scope="col">Images</th>
                        <th scope="col">Category</th>
                        <th scope="col"><i class="fa fa-cog"></i> </th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">

                        @foreach($products as  $index => $product)
                        <tr>
                            <th scope="row"> {{++$index}} </th>
                            <td>{{ $product->name  }} ( {{ $product->price  }}FCFA )</td>
                            <td>
                                {{ $product->pictures()->count()  }}

                                @foreach($product->pictures as $picture)
                                    <img src="{{ url('images/product/'.$picture->picture) }}" width="25px" />
                                @endforeach
                            </td>
                            <td>{{ $product->subcategory->name  }}</td>
                            <td>
                                <a href="{{ url('dna/products/'.$product->id.'/edit') }}"><span class="badge text-bg-primary">edit</span></a>

                                <form action="{{url('dna/products/'.$product->id)}}" method="post" style="display : inline;" >
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="_method" value="delete">
                                <button type="submit" class="btn btn-sm badge text-bg-danger">delete</button>
                            </form>
                                <!-- <a href=""><span class="badge text-bg-danger">delete</span></a> -->
                            </td>
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
