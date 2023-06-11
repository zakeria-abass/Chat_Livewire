@extends('chat.layouts.master')

@section('title','Friend Request');


@section('container')

    <div class="container-fluid ">
        <div class="row removable ">
            <div class="col-lg-12 px-sm-0">
                <div class="card shadow-none  bg-transparent mt-0 mb-4">
                    <div class="card-body px-0 pb-0">
                        <div class="px-0 pb-4">


                                <livewire:chat.components.settings-conversation :selectedConversation="$id" :key="$id">


                        </div>
                    </div>
                </div>
            </div>

        </div>
@stop
