<div>

    @php
     $result = 0 ;
     if ($Conversations->type == "group"){
         $result = 1;
     }

        @endphp

    <div class="row ">
        <!---------box chat------------->
        <div class="col-lg-12">
            <div class="card max-height-vh-70 ">

                <div class="card-body  ">


                    @if($result == 1)
                    <div class="card mt-3">
                        <div class="card-header">المشاركين بلمجموعة </div>

                        <div class="card-body">

                            @if($open == 0)

                            <button wire:click="open" class="btn btn-github">
                                تغير اسم المجموعة
                            </button>

                            @else

                                <button wire:click="close" class="btn btn-google-plus">
                                    اللغاء
                                </button>

                                <button wire:click="save" class="btn btn-vimeo">
                                    حفظ التغيرات

                                </button>
                                <input type="text" wire:model="label" placeholder="Search" class="form-control mt-3" aria-label="Amount (to the nearest dollar)">


                            @endif
                        </div>

                    </div>


                    <div class="card mt-3">
                        <div class="card-header">المشاركين بلمجموعة </div>

                        <div class="card-body">



                                <button wire:click="add({{$user ? $user->id :null}})" class="btn btn-twitter">
                                   أضافة لمجموعة
                                </button>

                             <div class="d-flex justify-content-between">
                                 <input type="text" wire:model="phoneUser" placeholder="Search" class="form-control mt-3 col-sm-6" >
                                 <input type="text" value="{{$user ? $user->name :'unavailable'}}" disabled placeholder="" class="form-control mt-3 col-sm-4" >

                             </div>


                        </div>

                    </div>
                    @endif


                    <div class="card mt-3">
                        <div class="card-header">المشاركين بلمجموعة </div>

                        <div class="card-body">
                            @if($open == 0 && $result == 1)

                                <button wire:click="open" class="btn btn-github">
                                    أضافة اعضاء من اصدقائي
                                </button>

                                <ul class="list-group mt-2">

                                    @foreach($Conversations->participant as $participant)
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <div class="d-flex">
                                                <img width="60px" height="60px" src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8dXNlcnxlbnwwfHwwfHx8MA%3D%3D&w=1000&q=80" class="rounded-circle" alt="Cinque Terre">
                                                <div class="ml-3 ">
                                                    <h3>{{$participant->name}}</h3>
                                                    <p>{!! $participant->description !!}</p>

                                                </div>
                                            </div>

                                            <div>

                                                <p> {{$participant->phone}}</p>


                                                <span class="badge badge-pill badge-secondary">
                                       {{$participant->conversations->pluck('pivot.role')->first()}}
                                       </span>

                                            </div>
                                        </li>


                                    @endforeach
                                </ul>

                            @else

                                <button wire:click="close" class="btn btn-google-plus">
                                    عرض اعضاء المجموعة
                                </button>

                                <ul class="list-group mt-2">
                                    @foreach($Friends as $friend)

                                        @if($friend->user->id != auth()->id())
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <div class="d-flex">
                                                <img width="60px" height="60px" src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8dXNlcnxlbnwwfHwwfHx8MA%3D%3D&w=1000&q=80" class="rounded-circle" alt="Cinque Terre">
                                                <div class="ml-3 ">
                                                    <h3>{{$friend->user->name}}</h3>
                                                    <p>{!! $friend->user->description !!}</p>

                                                </div>
                                            </div>

                                            <div>

                                                <p> {{$friend->user->phone}}</p>

                                                @php
                                                    $true = $friend->user->Conversations->where('id',$selectedConversation)->pluck('id')->first()
                                                @endphp

                                                @if(!isset($true))
                                                    <button wire:click="add({{$friend->user->id}})" class="btn btn-youtube">
                                                        Add to group
                                                    </button>

                                                @else
                                                    <button class="btn btn-youtube">
                                                        Available in a group
                                                    </button>
                                                @endif
                                            </div>
                                        </li>
                                        @else
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                <div class="d-flex">
                                                    <img width="60px" height="60px" src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8dXNlcnxlbnwwfHwwfHx8MA%3D%3D&w=1000&q=80" class="rounded-circle" alt="Cinque Terre">
                                                    <div class="ml-3 ">
                                                        <h3>{{$friend->friend->name}}</h3>
                                                        <p>{!! $friend->friend->description !!}</p>

                                                    </div>
                                                </div>

                                                <div>

                                                    <p> {{$friend->friend->phone}}</p>

                                                    @php
                                                      $true = $friend->friend->Conversations->where('id',$selectedConversation)->pluck('id')->first()
                                                     @endphp

                                                    @if(!isset($true))
                                                     <button wire:click="add({{$friend->friend->id}})" class="btn btn-youtube">
                                                         Add to group
                                                     </button>

                                                    @else
                                                        <button class="btn btn-youtube">
                                                            Available in a group
                                                        </button>
                                                    @endif

                                                </div>
                                            </li>

                                        @endif

                                    @endforeach

                                </ul>

                            @endif



                        </div>

                    </div>


                     @if($result == 1)
                    <div class="card mt-3">
                        <div class="card-header">المشاركين بلمجموعة </div>

                        <div class="card-body">


                            <div class="d-flex justify-content-between">

                                 <h2>Allow members to send messages</h2>

                                <!-- Default switch -->
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitches">
                                    <label class="custom-control-label" for="customSwitches"></label>
                                </div>

                            </div>


                        </div>

                    </div>
                        @endif

                    <button  wire:click="logout" type="submit" class="btn btn-danger col-sm-12 mt-3">
                        Log Out  <i class="fa fa-bracket"></i>
                    </button>
                </div>

            </div>
        </div>


    </div>
</div>
