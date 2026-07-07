@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{ $title}}
                    <p class="float-end">
                    <a href="{{ url('dna/subcategories/create') }}"><span class="badge text-bg-success">add</span></a>
                        
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
                        <th scope="col">Name</th>
                        <th scope="col">Subcategories</th>
                        <th scope="col">Products</th>
                        <th scope="col"><i class="fa fa-cog"></i> </th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">

                        @foreach($subcategories as $subcategory)
                        <tr>
                            <th scope="row">1</th>
                            <td>{{ $subcategory->name  }}</td>
                            <td>{{ $subcategory->slug  }}</td>
                            <td>{{ $subcategory->name  }}</td>
                            <td>
                                <a href=""><span class="badge text-bg-primary">edit</span></a>
                                <a href=""><span class="badge text-bg-danger">delete</span></a>
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
