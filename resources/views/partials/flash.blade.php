@if(session()->has('flash_message'))
    <div class="alert alert-{{session('flash_message_level')}} alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" >
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">close</span>
        </button>
        {{--{{session()->get('flash_message')}}--}}
        {{session('flash_message')}}
    </div>

@endif
