<div >
    <div class="row ">
    <!---------box chat------------->
    <div class="col-lg-12">
        <div class="card max-height-vh-70 ">

            <div class="card-body  ">

                <div class="col-lg-12 mb-4">
                    <div class="card   mb-5 mb-lg-0">
                        <form class="card-header">
                            <div class="input-group mb-0">
                                <input type="text" placeholder="Search" class="form-control" aria-label="Amount (to the nearest dollar)">
                                <div class="input-group-append">
                                                                        <span class="input-group-text">
                                                                            <i class="fa fa-search"></i>
                                                                        </span>
                                </div>
                            </div>
                        </form>
                        <div class="card-body p-2">
                            @php
                                $last_letter="";
                            @endphp
                            <div  class=" p-1 ">

                                @foreach($Friends as $friend)

                                    @if($friend->user->id != auth()->id())

                                        @php
                                            $letter=substr($friend->user->name,0,1);
                                        @endphp

                                        @if($letter != $last_letter)

                                            <small  class="text-uppercase  pl-3 pr-3 text-muted bg-primary p-1 text-white  shadow-4 rounded">
                                                {{$letter}}
                                            </small>

                                            <hr class="p-0 m-3 ">
                                        @endif
                                        @php
                                            $last_letter=$letter;
                                        @endphp

                                <div  class="d-block p-1 ">
                                    <div class="d-flex p-2  col-lg-4    align-items-center">

                                        <img alt="Image" src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8cG9ydHJhaXR8ZW58MHwyfDB8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=800&amp;q=60" class="avatar">
                                        <div class="ml-2 ">
                                            <div class="justify-content-between d-flex  align-items-center">
                                                <div>
                                                    <h4 class="mb-0 mt-1 ">{{$friend->user->name}}</h4>
                                                    <p class="mb-0 text-xs font-weight-normal text-muted ">{!! $friend->user->description !!}</p>

                                                </div >

                                                <button class="btn-sm ml-4 mr-4 text-white  bg-gradient-green border-0">
                                                    Chat
                                                </button>
                                                    <div>

                                                    </div>

                                            </div>
                                        </div>
                                    </div>


                                </div>

                                <!--------------------------End Friend User--------------------------------->


                                    @else
                                <!-----------------------Friend User------------------------------------>


                                        @php
                                            $letter=substr($friend->friend->name,0,1);
                                        @endphp

                                        @if($letter != $last_letter)

                                            <small  class="text-uppercase text-muted bg-primary p-1 text-white rounded-circle">
                                                {{$letter}}
                                            </small>
                                        @endif
                                        @php
                                            $last_letter=$letter;
                                        @endphp


                                        <div  class="d-block p-1 ">
                                    <div class="d-flex p-2  col-lg-4    align-items-center">

                                        <img alt="Image" src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8cG9ydHJhaXR8ZW58MHwyfDB8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=800&amp;q=60" class="avatar">
                                        <div class="ml-2 ">
                                            <div class="justify-content-between d-flex  align-items-center">
                                                <div>
                                                    <h4 class="mb-0 mt-1 ">{{$friend->friend->name}}</h4>
                                                    <p class="mb-0 text-xs font-weight-normal text-muted ">{!! $friend->friend->description !!}</p>

                                                </div >

                                                <button class="btn-sm ml-4 mr-4 text-white  bg-gradient-green border-0">
                                                    Chat
                                                </button>

                                                    <div>

                                                    </div>


                                            </div>
                                        </div>
                                    </div>


                                </div>


                                <!--------------------------End Friend User--------------------------------->

                                    @endif
                                @endforeach

                            </div>
                        </div>



                    </div>

                </div>





            </div>

        </div>
    </div>
</div>
</div>
