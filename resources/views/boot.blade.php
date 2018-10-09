<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<header>

</header>
<section class="container">
    <img class=" mx-auto  " src="pix/index.jpeg" alt="Hamid-photo">
    <div class="row">

        <article class="col">
            hello world
        </article>
        <article class="col">
            hell again
        </article>
        <article class="col">
            another hi
        </article>


    </div>
</section>
<div class="container">
    <section class="content">
        {{--<figure class="text-center">--}}
            {{--<img class="img-fluid mx-auto rounded " src="pix/index.jpeg" alt="Hamid-photo">--}}
            {{--<figcaption>--}}
                {{--Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Amet consectetur adipiscing elit pellentesque habitant morbi tristique.--}}
            {{--</figcaption>--}}
        {{--</figure>--}}
        {{--<figure class="">--}}
            {{--<img class="img-thumbnail" src="pix/index.jpeg" alt="Hamid-photo">--}}
            {{--<figcaption>--}}
                {{--Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Amet consectetur adipiscing elit pellentesque habitant morbi tristique.--}}
            {{--</figcaption>--}}
        {{--</figure>--}}
        {{--<figure class="figure">--}}
            {{--<img class="figure-img img-fluid " src="pix/index.jpeg" alt="Hamid-photo">--}}
            {{--<figcaption>--}}
                {{--Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Amet consectetur adipiscing elit pellentesque habitant morbi tristique.--}}
            {{--</figcaption>--}}
        {{--</figure>--}}

        <div class="display-4">
            our test
        </div>
        <ul class="list-inline">
            <li class="list-inline-item">Java</li>
            <li class="list-inline-item">Php</li>
            <li class="list-inline-item">Css</li>
            <li>Python</li>
            <li>c#</li>
        </ul>
        <blockquote class="blockquote">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Dictum varius duis at consectetur lorem donec massa. Quis imperdiet massa tincidunt nunc pulvinar.
            <div class="blockquote-footer">Jane</div>
        </blockquote>

    </section>
    <section class="content">
        <h1 class="text-capitalize text-center text-sm-right text-md-left ">Our Comment</h1>
        <p class="lead text-justify">Lorem ipsum <span class="font-weight-bold">dolor </span>sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Orci nulla pellentesque dignissim enim sit. Ipsum consequat nisl vel pretium lectus quam. In tellus integer feugiat scelerisque varius morbi enim nunc faucibus. Fermentum dui faucibus in ornare quam viverra orci sagittis.</p>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Dictum varius duis at consectetur lorem donec massa. Quis imperdiet massa tincidunt nunc pulvinar.</p>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Amet consectetur adipiscing elit pellentesque habitant morbi tristique.</p>
    </section>

</div>
</body>
</html>
