@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h3>Category Lists</h3>
                    </div>
                    <div class="card-body">
                        @foreach($categories as $category)
                            <div><a href="/category/{{$category->id}}">{{$category->name}}</a></div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


