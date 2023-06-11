<div>


    <div class="container-fluid " wire:poll>
        <div class="row removable ">
            <div class="col-lg-12 px-sm-0">
                <div class="card shadow-none  bg-transparent mt-0 mb-4">
                    <div class="card-body px-0 pb-0">
                        <div class="px-0 pb-4">
                            <div class="row ">

                                <!--------------------->
                                <div class="col-lg-3 mb-4">
                                    <div
                                        class="card max-height-vh-70 h-100 overflow-auto overflow-x-hidden mb-5 mb-lg-0"
                                        style="max-height: 100vh;">
                                        <form class="card-header">
                                            <div class="input-group mb-0">
                                                <input type="text" placeholder="Search" class="form-control"
                                                       aria-label="Amount (to the nearest dollar)">
                                                <div class="input-group-append">
                                                        <span class="input-group-text">
                                                            <i class="fa fa-search"></i>
                                                        </span>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="card-body p-2" style="height: 400px;" >



                                            @foreach($conversations->conversations as $conversation)
                                                <div  wire:click="conversation({{$conversation->id}})" class="d-block mt-2  rounded-lg bg-gradient-primary" style="cursor: pointer">
                                                    <div class="d-flex p-2">
                                                        <img alt="Image"
                                                             src="https://images.unsplash.com/photo-1529068755536-a5ade0dcb4e8?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzV8fHBvcnRyYWl0fGVufDB8MnwwfHw%3D&amp;auto=format&amp;fit=crop&amp;w=800&amp;q=60"
                                                             class="avatar shadow">
                                                        <div class="ml-2">
                                                            <div class="justify-content-between align-items-center">

                                                                <h4 class="text-white mb-0 mt-1" >
                                                                    {{$conversation->label ? $conversation->label : $conversation->participant->where('id','!=',auth()->id())->first()->name }}

                                                                    <span
                                                                        class="badge badge-success ml-2">
                                                                    5
                                                                </span>
                                                                </h4>


                                                                <p class="text-white mb-0 text-xs font-weight-normal">
                                                                    @if($conversation->type == "peer")
                                                                    {{ strlen($conversation->last_message->body) > 10 ? substr($conversation->last_message->body, 0, 10) . "..." : $conversation->last_message->body }}

                                                                    @else

                                                                    {{ strlen($conversation->last_message->user->name." : ".$conversation->last_message->body ) > 20 ? substr($conversation->last_message->user->name." : ".$conversation->last_message->body, 0, 20) . "..." : $conversation->last_message->user->name." : ".$conversation->last_message->body }}

                                                                    @endif
                                                                </p>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach


                                        </div>
                                    </div>
                                </div>

                                <!---------box chat------------->




                                    <!-- قائمة المحادثات هنا -->
                                    @if(isset($room))



                                    <div class="col-lg-9 " >

                                            <div class="card max-height-vh-70 bg-img-chat"  style="height: 600px;">
                                                <div class="card-header shadow-xl">
                                                    <div class="row">
                                                        <div class="col-md-12" >

                                                                <div  class="ms-3 d-flex align-items-center justify-content-between">

                                                                    <div class="d-flex">
                                                                        <img alt="Image"
                                                                             src="https://images.unsplash.com/photo-1529068755536-a5ade0dcb4e8?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzV8fHBvcnRyYWl0fGVufDB8MnwwfHw%3D&amp;auto=format&amp;fit=crop&amp;w=800&amp;q=60"
                                                                             class="avatar shadow">
                                                                        <h3 class="mb-0 ml-2 d-block">
                                                                            {{$room->label ?  $room->label :  $room->participant->where('id','!=',auth()->id())->first()->name}}
                                                                            <br>
                                                                            <span class=" text-sm text-muted font-weight-bold">
                                                                              {{$room->type}}
                                                                                </span>
                                                                        </h3>
                                                                    </div>

                                                                    <div class="d-flex">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 576 512"><style>svg{fill: #0000ff; cursor: pointer ;
                                                                                    margin:0px 4px 0px 4px ;}</style><path d="M0 128C0 92.7 28.7 64 64 64H320c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128zM559.1 99.8c10.4 5.6 16.9 16.4 16.9 28.2V384c0 11.8-6.5 22.6-16.9 28.2s-23 5-32.9-1.6l-96-64L416 337.1V320 192 174.9l14.2-9.5 96-64c9.8-6.5 22.4-7.2 32.9-1.6z"/></svg>

                                                                        <form action="{{route('SettingsConversation',$room->id)}}" method="post">
                                                                            @csrf

                                                                             <button type="submit" style="border: 0 ; background: none ">
                                                                                 <svg   xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512"><style>svg{fill:#0000ff; cursor: pointer ;
                                                                                             margin:0px 4px 0px 4px ;}</style><path d="M495.9 166.6c3.2 8.7 .5 18.4-6.4 24.6l-43.3 39.4c1.1 8.3 1.7 16.8 1.7 25.4s-.6 17.1-1.7 25.4l43.3 39.4c6.9 6.2 9.6 15.9 6.4 24.6c-4.4 11.9-9.7 23.3-15.8 34.3l-4.7 8.1c-6.6 11-14 21.4-22.1 31.2c-5.9 7.2-15.7 9.6-24.5 6.8l-55.7-17.7c-13.4 10.3-28.2 18.9-44 25.4l-12.5 57.1c-2 9.1-9 16.3-18.2 17.8c-13.8 2.3-28 3.5-42.5 3.5s-28.7-1.2-42.5-3.5c-9.2-1.5-16.2-8.7-18.2-17.8l-12.5-57.1c-15.8-6.5-30.6-15.1-44-25.4L83.1 425.9c-8.8 2.8-18.6 .3-24.5-6.8c-8.1-9.8-15.5-20.2-22.1-31.2l-4.7-8.1c-6.1-11-11.4-22.4-15.8-34.3c-3.2-8.7-.5-18.4 6.4-24.6l43.3-39.4C64.6 273.1 64 264.6 64 256s.6-17.1 1.7-25.4L22.4 191.2c-6.9-6.2-9.6-15.9-6.4-24.6c4.4-11.9 9.7-23.3 15.8-34.3l4.7-8.1c6.6-11 14-21.4 22.1-31.2c5.9-7.2 15.7-9.6 24.5-6.8l55.7 17.7c13.4-10.3 28.2-18.9 44-25.4l12.5-57.1c2-9.1 9-16.3 18.2-17.8C227.3 1.2 241.5 0 256 0s28.7 1.2 42.5 3.5c9.2 1.5 16.2 8.7 18.2 17.8l12.5 57.1c15.8 6.5 30.6 15.1 44 25.4l55.7-17.7c8.8-2.8 18.6-.3 24.5 6.8c8.1 9.8 15.5 20.2 22.1 31.2l4.7 8.1c6.1 11 11.4 22.4 15.8 34.3zM256 336a80 80 0 1 0 0-160 80 80 0 1 0 0 160z"/></svg>

                                                                             </button>
                                                                        </form>


                                                                    </div>
                                                                    </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body overflow-auto overflow-x-hidden" id="chat" >

                                                    @foreach($room->messages as $message)

                                                        @if($message->type != "update")
                                                        <div class="row  mb-4   {{$message->user_id == auth()->id() ? 'justify-content-end text-right' : 'justify-content-start '}}">
                                                            <div class="col-auto">


                                                                <div class="d-flex justify-center align-content-center">
                                                                    <i wire:click="reply({{ $message->id }})"  class="mt-4 " >
                                                                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><style>svg{fill: #0a4f52; cursor: pointer ;margin:0px 4px 0px 4px ;}</style><path d="M209.4 39.5c-9.1-9.6-24.3-10-33.9-.9L33.8 173.2c-19.9 18.9-19.9 50.7 0 69.6L175.5 377.4c9.6 9.1 24.8 8.7 33.9-.9s8.7-24.8-.9-33.9L66.8 208 208.5 73.4c9.6-9.1 10-24.3 .9-33.9zM352 64c0-12.6-7.4-24.1-19-29.2s-25-3-34.4 5.4l-160 144c-6.7 6.1-10.6 14.7-10.6 23.8s3.9 17.7 10.6 23.8l160 144c9.4 8.5 22.9 10.6 34.4 5.4s19-16.6 19-29.2V288h32c53 0 96 43 96 96c0 30.4-12.8 47.9-22.2 56.7c-5.5 5.1-9.8 12-9.8 19.5c0 10.9 8.8 19.7 19.7 19.7c2.8 0 5.6-.6 8.1-1.9C494.5 467.9 576 417.3 576 304c0-97.2-78.8-176-176-176H352V64z"/></svg>

                                                                    </i>


                                                                    <div class="card {{$message->user_id == auth()->id() ? 'bg-dark  text-white ' : ''}}">

                                                                        <!------------------------------------------------->
                                                                            @if($room->type == "group" )
                                                                            <div class="d-flex p-2">
                                                                            <h4 class="mr-3" style="color: blueviolet">{{$message->user->name}}</h4>
                                                                            <h4 class="mr-3" style="color: blueviolet">{{$message->user->phone}}</h4>
                                                                            </div>
                                                                            @endif
                                                                        <!------------------------------------------------->
                                                                        <!------------------------------------------------->
                                                                                @if($message->parentMessage)
                                                                                    @if(isset($message->parentMessage->body))

                                                                                        <div class="p-2">
                                                                                            <div class="alert alert-success m-0 p-1" >
                                                                                                <p>{{ $message->parentMessage->user_id === auth()->id() ? 'You' : $message->parentMessage->user->name }} </p>
                                                                                                <strong>{{$message->parentMessage->body}}</strong>
                                                                                            </div>
                                                                                        </div>


                                                                                    @endif
                                                                                @endif
                                                                        <!------------------------------------------------->

                                                                        <div class="card-body p-2">
                                                                            <p class="mb-1">
                                                                                {!! $message->body !!}
                                                                            </p>
                                                                            <div class="d-flex align-items-center text-sm opacity-6">

                                                                                <i class="fa fa-check mr-1 text-xs"
                                                                                   aria-hidden="true"></i>
                                                                                <small>{{$message->created_at->diffForHumans()}}</small>
                                                                            </div>
                                                                        </div>

                                                                    </div>


                                                                </div>

                                                            </div>
                                                        </div>

                                                        @else
                                                            <div class="justify-content-center d-flex align-items-center mt-5">
                                                                <h3 class="text-center  position-relative  btn btn-google-plus p-2  ">
                                                                    {{$message->body." " . $message->user->name}}
                                                                </h3>
                                                            </div>


                                                        @endif


                                                    @endforeach


                                                </div>


                                                <div class="card-footer d-block" >

                                                    <form  wire:submit.prevent="sendMessages({{$reply ?$reply->id:''}})" >

                                                        @if(isset($reply ) != null)
                                                        <div class="alert alert-success  alert-dismissible" >
                                                            <button wire:click="close"  type="button" class="close" data-dismiss="alert">&times;</button>
                                                            <strong>{!! $reply->body !!}</strong>
                                                        </div>
                                                        @endif

                                                        <div class="input-group mb-3">


                                                            <input onkeydown='scrollDown()'   wire:model="messages" type="text" placeholder="Send Messages" class="form-control"
                                                                   name="messages" id="emoji" >

                                                            <div class="input-group-append">
                                                                <button wire:offline.attr="disabled" type="submit" class="input-group-text">
                                                                    <i class="fa fa-paper-plane"></i>
                                                                </button>

                                                            </div>
                                                        </div>
                                                    </form>


                                                    @push('scripts')
                                                        <script type="text/javascript">
                                                            $('#emoji').emojioneArea({
                                                                pickerPosition:'top'
                                                            })
                                                        </script>


                                                    @endpush



                                                </div>

                                            </div>


                                            {{--                                        <div class="card max-height-vh-70-chat" style="max-height: 90vh;">--}}
                                            {{--                                            <img src="{{asset('asset_chat/img/boxChat.png')}}" width="100%" height="100%" >--}}
                                            {{--                                        </div>--}}


                                        </div>

                                    @endif

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




</div>


