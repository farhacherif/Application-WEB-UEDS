@extends("master")

@section('css')
<link href="{{ asset('css/chat.css') }}" rel="stylesheet">
<style type="text/css">

</style>
@endsection
@section('content')
 <h1 class="text-center">Discussion</h1>
<!-- comments container -->
        <div class="comment_block" id="app">



         <!-- new comment -->
         <div class="new_comment">

            <!-- build comment -->
            <ul class="user_comment">
                    <chat-log :messages="messages"></chat-log>
                    <chat-composer v-on:messageSent="addMessage"></chat-composer>                


            </ul>

         </div>



        </div>
{{--   <!--  <head>
        <META HTTP-EQUIV="Refresh" CONTENT="8; URL=http://127.0.0.1:8000/chat">

    </head> -->
    <div class="container" id="app">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                       
                    </div>



                </div>
            </div>
        </div>
    </div>
 --}}
@endsection
@section('js')
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://js.pusher.com/4.4/pusher.min.js"></script>
@endsection