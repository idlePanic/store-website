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
                <div class="row">
                    <a href="{{route('add.product')}}">add</a>
                </div>
                <div class="row">
                    <div class="product_heading_name"><h2>{{$product->name}}</h2></div>
                </div>

                            <br><br><br>

                    <div class="row">
                    <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2 ">
                        <a href="#" onclick="document.getElementById('myImage').src='{{asset('pix/1.jpeg')}}'"><img class="img-fluid rounded" src="{{asset('pix/1.jpeg')}}"></a><hr>
                        <a href="#" onclick="document.getElementById('myImage').src='{{asset('pix/2.jpeg')}}'"><img class="img-fluid rounded" src="{{asset('pix/2.jpeg')}}"></a><hr>
                        <a href="#" onclick="document.getElementById('myImage').src='{{asset('pix/3.jpeg')}}'"><img class="img-fluid rounded" src="{{asset('pix/3.jpeg')}}"></a><hr>
                        <a href="#" onclick="document.getElementById('myImage').src='{{asset('pix/xz.jpeg')}}'"><img class="img-fluid rounded" src="{{asset('pix/xz.jpeg')}}"></a><hr>

                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-10 col-xs-10">
                        <img class="img-fluid rounded product_image" id="myImage" src={{asset('pix/xz.jpeg')}} alt="Hamid-photo">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="product_heading_name">ranking and score</div>
                        <span><i class="text-warning fa fa-star"></i></span>
                        <span><i class="text-warning fa fa-star"></i></span>
                        <span><i class="text-warning fa fa-star"></i></span>
                        <span><i class="text-warning fa fa-star"></i></span>
                        <span><i class="text-warning fa fa-star-half"></i></span>
                        8.5/10
                    </div>
                    </div>
                    <hr><br><br><br>






                <div class="row">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="detail-tab" data-toggle="tab" href="#detail" role="tab" aria-controls="detail" aria-selected="true">Detail</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="comments-tab" data-toggle="tab" href="#comments" role="tab" aria-controls="Comments" aria-selected="true">Comments</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="addNewComments-tab" data-toggle="tab" href="#addNewComment" role="tab" aria-controls="profile" aria-selected="true">Add new Comment</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="detail" role="tabpanel">
                                <div class="row">
                                    <table class="table col-md-8">
                                        <tbody>
                                        <tr>
                                            <td>name</td>
                                            <td>{{$product->name}}</td>
                                        </tr>
                                        <tr>
                                            <td>price</td>
                                            <td>{{$product->price}}</td>
                                        </tr>
                                        <tr>
                                            <td>category</td>
                                            <td>{{$product->category['name']}}</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        <div class="tab-pane fade" id="comments" role="tabpanel" aria-labelledby="comments-tab">
                            @foreach($product->comments as $comment)
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <img src="https://image.ibb.co/jw55Ex/def_face.jpg" class="img img-rounded img-fluid"/>
                                            <p class="text-secondary text-center">{{$comment->created_at}}</p>
                                        </div>
                                        <div class="col-md-10">
                                            <p>
                                                <a class="float-left" href="https://maniruzzaman-akash.blogspot.com/p/contact.html"><strong>{{$comment->user->name}}</strong></a>
                                                <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                                                <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                                                <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                                                <span class="float-right"><i class="text-warning fa fa-star"></i></span>

                                            </p>
                                            <div class="clearfix"></div>
                                            <p>{{$comment->body}}</p>
                                            <p>
                                                <a class="float-right btn btn-outline-primary ml-2"> <i class="fa fa-reply"></i> Reply</a>
                                                <a class="float-right btn text-white btn-danger"> <i class="fa fa-heart"></i> Like</a>
                                                @can('edit_comments' ,$comment)
                                                <a href="/product/{{$comment->id}}/edit" class="float-right btn text-white btn-success"> <i class="fa fa-pencil"></i> Edit Comment</a>
                                                @endcan
                                            </p>
                                        </div>
                                    </div>
                                    {{--<div class="card card-inner">--}}
                                        {{--<div class="card-body">--}}
                                            {{--<div class="row">--}}
                                                {{--<div class="col-md-2">--}}
                                                    {{--<img src="https://image.ibb.co/jw55Ex/def_face.jpg" class="img img-rounded img-fluid"/>--}}
                                                    {{--<p class="text-secondary text-center">15 Minutes Ago</p>--}}
                                                {{--</div>--}}
                                                {{--<div class="col-md-10">--}}
                                                    {{--<p><a href="https://maniruzzaman-akash.blogspot.com/p/contact.html"><strong>Maniruzzaman Akash</strong></a></p>--}}
                                                    {{--<p>Lorem Ipsum is simply dummy text of the pr make  but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>--}}
                                                    {{--<p>--}}
                                                        {{--<a class="float-right btn btn-outline-primary ml-2">  <i class="fa fa-reply"></i> Reply</a>--}}
                                                        {{--<a class="float-right btn text-white btn-danger"> <i class="fa fa-heart"></i> Like</a>--}}
                                                    {{--</p>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="tab-pane fade" id="addNewComment" role="tabpanel" aria-labelledby="addNewComment-tab">
                            <div class="card">
                                <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <img src="https://image.ibb.co/jw55Ex/def_face.jpg" class="img img-rounded img-fluid"/>
                                                    <p class="text-secondary text-center">15 Minutes Ago</p>
                                                </div>
                                                <div class="col-md-10">
                                                    <p>
                                                        <a class="float-left" href="https://maniruzzaman-akash.blogspot.com/p/contact.html"><strong>Maniruzzaman Akash</strong></a>
                                                        <span class="float-right"><i class="text-warning fa fa-star-half"></i></span>
                                                        <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                                                        <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                                                        <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                                                    </p>
                                                    <div class="clearfix"></div>
                                                    <p>Lorem Ipsum is simply dummy text of the pr make  but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                                    <p>
                                                        <a class="float-right btn btn-outline-primary ml-2"> <i class="fa fa-reply"></i> Reply</a>
                                                        <a class="float-right btn text-white btn-danger"> <i class="fa fa-heart"></i> Like</a>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="card card-inner">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <img src="https://image.ibb.co/jw55Ex/def_face.jpg" class="img img-rounded img-fluid"/>
                                                            <p class="text-secondary text-center">15 Minutes Ago</p>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <p><a href="https://maniruzzaman-akash.blogspot.com/p/contact.html"><strong>Maniruzzaman Akash</strong></a></p>
                                                            <p>Lorem Ipsum is simply dummy text of the pr make  but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                                            <p>
                                                                <a class="float-right btn btn-outline-primary ml-2">  <i class="fa fa-reply"></i> Reply</a>
                                                                <a class="float-right btn text-white btn-danger"> <i class="fa fa-heart"></i> Like</a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>


                </div>

                    

                {{--{!! Form::open() !!}--}}
                    {{--<input type="text" class="form-control">--}}
                    {{--<input type="file" class="form-control">--}}
                    {{--<textarea class="form-control"></textarea>--}}
                {{--{!! Form::close() !!}--}}
            </div>
        </div>
    </div>
@endsection


