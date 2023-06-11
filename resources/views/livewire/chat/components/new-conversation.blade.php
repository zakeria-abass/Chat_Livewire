<div >


    <div class="row " >

        <!---------box chat------------->
        <div class="col-lg-12">
            <div class="card max-height-vh-70 " style="max-height: 80vh;">

                <div class="card-body  ">
                    <div class="row">
                        <div class="col-lg-5 mb-4">
                            <div class="card max-height-vh-70 h-100 overflow-auto overflow-x-hidden mb-5 mb-lg-0" style="max-height: 100vh;">
                                <div class="card-header">
                                    <div class="input-group mb-0">
                                        <input type="text" placeholder="Search" class="form-control" aria-label="Amount (to the nearest dollar)">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fa fa-search"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!----------------submit------------>
                                <form wire:submit.prevent="addconversation">

                                    <div class="card-body p-2" >



                                         @foreach($Friends as $friend)

                                             @if($friend->user->id != auth()->id())
                                                <div  class="d-block p-1 ">
                                                    <div class="d-flex p-2  align-items-center">
                                                        <div class="custom-control custom-checkbox ">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck{{$friend->user->id}}" wire:model="friend.{{$friend->user->id}}" value="{{$friend->user->id}}">
                                                            <label class="custom-control-label" for="customCheck{{$friend->user->id}}"></label>
                                                        </div>
                                                        <img alt="Image" src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8cG9ydHJhaXR8ZW58MHwyfDB8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=800&amp;q=60" class="avatar">
                                                        <div class="ml-2">
                                                            <div class="justify-content-between align-items-center">
                                                                <h4 class="mb-0 mt-1">{{$friend->user->name}}
                                                                    <span class="badge badge-success"></span>
                                                                </h4>
                                                                <p class="mb-0 text-xs font-weight-normal text-muted">{!! $friend->user->description !!}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @else
                                                <div  class="d-block p-1 ">
                                                    <div class="d-flex p-2  align-items-center">
                                                        <div class="custom-control custom-checkbox ">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck{{$friend->friend->id}}"  wire:model="friend.{{$friend->friend->id}}"  value="{{$friend->friend->id}}">
                                                            <label class="custom-control-label" for="customCheck{{$friend->friend->id}}"></label>
                                                        </div>
                                                        <img alt="Image" src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8cG9ydHJhaXR8ZW58MHwyfDB8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=800&amp;q=60" class="avatar">
                                                        <div class="ml-2">
                                                            <div class="justify-content-between align-items-center">
                                                                <h4 class="mb-0 mt-1">{{$friend->friend->name}}
                                                                    <span class="badge badge-success"></span>
                                                                </h4>
                                                                <p class="mb-0 text-xs font-weight-normal text-muted">Job: Senior UX Designer</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach


                                    </div>

                            </div>
                        </div>
                        <!---------------------------------------------------------------------------------------------------------------------------->

                        <div class="col-lg-7 mb-4">
                            <div class="text-center mb-2">
                                <h2>New Conversation</h2>

                            </div>

                            <div class=" mb-3">

                                <!-------------------->
                                <div>
                                    <label for="">Name Group</label>
                                    <input type="text" placeholder="" class="form-control" wire:model="label">
                                </div>

                                <!-------------------->
                                <div class="mt-2 ">
                                    <label for="">Type conversation : </label>

                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="group"  wire:model="type"  value="group">
                                        <label class="custom-control-label" for="group">Group</label>
                                    </div>

                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="peer" wire:model="type" value="peer">
                                        <label class="custom-control-label" for="peer">Peer</label>
                                    </div>



                                </div>

                                <!-------------------->
                                <div class="mt-2">
                                    <label for="">Password</label>
                                    <input type="password" placeholder="" class="form-control" wire:model="password">
                                </div>

                                <button   class="btn bg-gradient-primary col-sm-12 mt-3 text-white">
                                    Create Conversation
                                    <i class="fa fa-paper-plane"></i>
                                </button>

                            </div>
                        </div>

                    </div>


                    <!---------------------------->

                    </form>
                </div>

            </div>
        </div>
    </div>


</div>
