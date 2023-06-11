@extends('chat.layouts.master')

@section('title','Group');


@section('container')



    <div class="container-fluid ">
        <div class="row removable ">
            <div class="col-lg-12 px-sm-0">
                <div class="card shadow-none  bg-transparent mt-0 mb-4">
                    <div class="card-body px-0 pb-0">
                        <div class="px-0 pb-4">
                            <div class="row ">

                                <!---------box chat------------->
                                <div class="col-lg-12">
                                    <div class="card max-height-vh-70 " style="max-height: 80vh;">

                                        <div class="card-body  ">

                                            <div class="col-lg-12 mb-4">
                                                <div class="card   mb-5 mb-lg-0" style="max-height: 100vh;">
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

                                                        <!------------  Page Livewire friend requests  ----------------------->

                                                        <livewire:chat.components.friend-requests>


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
            </div>

        </div>
@stop
