<script src="{{asset('asset_chat/js/loopple/vendor/jquery.min.js')}}"></script>
<script src="{{asset('asset_chat/js/loopple/vendor/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('asset_chat/js/loopple/vendor/js.cookie.js')}}"></script>
<script src="{{asset('asset_chat/js/loopple/vendor/Chart.min.js')}}"></script>
<script src="{{asset('asset_chat/js/loopple/vendor/chart.extension.js')}}"></script>
<script src="{{asset('asset_chat/js/loopple/vendor/argon.min.js')}}"></script>


{{-- <script>--}}
{{--    function scrollDown() {--}}
{{--        document.getElementById('chat').scrollTop =  document.getElementById('chat').scrollHeight--}}
{{--    }--}}
{{--    setInterval(scrollDown, 1000);--}}

{{-- </script>--}}

<script>
    function insertEmoji(emoji) {
        document.getElementById('emoji-input').value += emoji;
    }
</script>
@yield('script')


<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.2/emojionearea.min.js"></script>


