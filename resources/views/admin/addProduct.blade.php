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


                    {!! Form::open(['url'=>'add-product-store']) !!}
                    {!! Form::text('name'); !!}
                    {!! Form::text('price'); !!}
                    {{--{!! Form::select('cat_id',--}}
                    {{--['' => 'Large', 'S' => 'Small'], 'S'); !!}--}}
                    {!! Form::submit('Click Me!'); !!}
                    {!! Form::close() !!}


            </div>
        </div>
    </div>
@endsection



