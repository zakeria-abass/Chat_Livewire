@extends('chat.layouts.master')

@section('title','Chat');





@section('container')


     <!------------  Page Livewire box chat  ----------------------->

     <livewire:chat.components.chat-box>

    <script>


        var cardScroll = document.getElementById('chat-window');
        cardScroll.scrollTop = cardScroll.scrollHeight;
        cardScroll.addEventListener('DOMNodeInserted', function() {
            cardScroll.scrollTop = cardScroll.scrollHeight;
        });



    </script>
@stop


