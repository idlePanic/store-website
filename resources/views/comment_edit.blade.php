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
                        <h3>Edit Comment</h3>
                    </div>
                    <div class="card-body">
                        <form class="form-group" method="POST" action="/product/{{$comment->id}}/edit/store">
                            {{csrf_field()}}
                            {{ method_field('PATCH') }}
                            <input type="text" name="body" class="form-control" placeholder="{{$comment->body}}">
                            <button class="btn btn-info text-white form-control" type="submit">
                                <i class="fa fa-pencil">Edit</i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


