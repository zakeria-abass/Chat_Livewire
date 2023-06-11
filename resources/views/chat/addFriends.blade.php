@extends('chat.layouts.master')

@section('title','Add Friend');


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

                                            <!------------  Page Livewire box add friend  ----------------------->

                                            <livewire:chat.components.add-friends>

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
