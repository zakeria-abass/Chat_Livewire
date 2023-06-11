<div>


    <div  class="row p-1 " wire:poll>

        @forelse($Requests as $request)
        <div class="d-flex p-2  col-lg-4 bg-gradient-primary   align-items-center">

            <img alt="Image" src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8cG9ydHJhaXR8ZW58MHwyfDB8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=800&amp;q=60" class="avatar">
            <div class="ml-2 ">
                <div class="justify-content-between d-flex  align-items-center">
                    <div>
                        <h4 class="mb-0 mt-1 text-white">{{$request->user->name}}</h4>
                        <p class="mb-0 text-xs font-weight-normal text-muted text-white">{!! $request->user->description !!}</p>

                    </div >
                    <div class="position-relative ml-3 d-flex j">

                            <button wire:click="acceptance(1 , {{$request->user->id}})" type="submit" class="btn-sm  bg-gradient-green border-0 ml-2"><i class="fa fa-check"></i></button>


                            <button wire:click="acceptance(0 , {{$request->user->id}})" type="submit" class="btn-sm  bg-gradient-red border-0 ml-2"><i class="fa fa-ban"></i></button>



                        <div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        @empty

        @endforelse

    </div>



   <div class="mt-4">
       {{$Requests->links()}}
   </div>

</div>
