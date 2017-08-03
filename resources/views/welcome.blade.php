@extends("layouts.app")
@section("content")
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @if (Auth::check())
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>
                    <a href="{{ route('register') }}">Register</a>
                @endif
            </div>
        @endif

        <div class="content">
            <div class="title m-b-md">
                Museums Finder
                <a id="js-btn-show-notification" href="#" class="btn">Open notification</a>
            </div>

            <div class="links">
                <a href="{{ route('museums.index') }}">Museums</a>
            </div>
        </div>
    </div>

@endsection

@section("scripts")
    <script>
        (function ($) {
            var $btn = $('#js-btn-show-notification');

            $btn.on('click', function () {
                new PNotify({
                    title: 'New Thing',
                    text: 'Just to let you know, something happened.',
                    type: 'info'
                });
            });

        })(jQuery);
    </script>
@endsection