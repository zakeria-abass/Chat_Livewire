<div>

    <div class="col-lg-12 mb-4">
        <div class="card   mb-5 mb-lg-0" >

                <div class="input-group mb-0">
                    <input type="text" placeholder="Search" class="form-control" wire:model="phone"  >
                    <div class="input-group-append">
                       <button type="submit"  class=" input-group-text">
                           <i class="fa fa-search"></i>
                       </button>
                    </div>
                </div>


            <div class="card-body p-2">

                <div  class="row p-1 ">


                     @if(isset($Friend))
                    <div class="d-flex p-2 col-lg-4 m-2 bg-gradient-primary   align-items-center">

                        <img alt="Image" src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8cG9ydHJhaXR8ZW58MHwyfDB8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=800&amp;q=60" class="avatar">
                        <div class="ml-2 ">
                            <div class="justify-content-between d-flex  align-items-center">
                                <div>
                                    <h4 class="mb-0 mt-1 text-white">{{$Friend->name}}</h4>
                                    <p class="mb-0 text-xs font-weight-normal text-muted text-white">{!! $Friend->description !!}</p>

                                </div >
                                <div class="position-relative ml-5">

                                    <form wire:submit.prevent>


                                        <button  wire:click="add({{$Friend->id}})" type="submit"  class="btn-sm  bg-gradient-green border-0" >
                                            <i class="fa fa-user"></i></button>

                                    </form>

                                    <div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    @endif





                </div>

            </div>



        </div>

    </div>

</div>
