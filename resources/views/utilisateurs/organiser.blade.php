@extends("master")

@section('content')
<br>
<br>
<br>
<hr>

  <style type="text/css">
  hr {
    border: none;
    height: 2px;
    color:#ccc;
    background-color:#ccc;
  }
  .comment{
    border: 2px solid #ccc;
    padding:10px;

  }
  .groove
     {border-style: solid;
      border-color: #666;}
  </style>

  </head>
  <body>


             <style>
                .button2 {
                  display: inline-block;
                  padding: 10px 20px;
float: right;
                  font-size: 12px;
                  cursor: pointer;
                  text-align: center;
                  text-decoration: none;
                  outline: none;
                  color: #fff;
                  background-color: #FE485B;
                  border: none;
                  border-radius: 15px;
                  box-shadow: 0 9px #999;
                }

                .button2:hover {background-color: #FE485B}

                .button2:active {
                  background-color: #3e8e41;
                  box-shadow: 0 5px #666;
                  transform: translateY(4px);

                }
                button.like{
	width: 40px;
	height: 40px;
	margin: 0 auto;
	line-heigth: 50px;
	border-radius: 50%;
	color: rgba(0,150,136 ,1);
	background-color:rgba(38,166,154 ,0.3);
	border-color: rgba(0,150,136 ,1);
	border-width: 1px;
	font-size: 15px;
}

button.dislike{
	width: 40px;
	height: 40px;
	margin: 0 auto;
	line-heigth: 50px;
	border-radius: 50%;
	color: rgba(255,82,82 ,1);
	background-color: rgba(255,138,128 ,0.3);
	border-color: rgba(255,82,82 ,1);
	border-width: 1px;
	font-size: 15px;
}



                </style>
     <!-- /.container -->
   <div class="comments-container">
    <h1>Proposer une action</h1>
<h4>Proposer un événement, une idée, nous sommes à votre écoute...</h4>
@foreach ($posts as $post)

    <ul id="comments-list" class="comments-list">
        <li>
            <div class="comment-main-level">
                <!-- Avatar -->


                <div class="post" data-postid="{{ $post->id }}">
                <div class="comment-avatar">
                        <img src="/uploads/avatars/{{ $post->user->avatar }}"></div>
                <!-- Contenedor del Comentario -->
                <div class="comment-box">
                        <br>
                    <div class="comment-head">

                        <h6 class="comment-name by-author"><a href="http://creaticode.com/blog" style="color: #FE485B;"><b>{{$post->user->name}}</b> </a>{{$post->title}}</h6>
                        <span>Il y a {{ (new Carbon\Carbon($post->created_at))->diffForHumans() }} </span>

                        @php
                        $like_count=0;
                         $dislike_count=0;
           $like_status = "btn-secondry";
           $dislike_status = "btn-secondry";
                        @endphp

                        @foreach($post->likes as $like)
                        @php
                        if($like->like == 1)
           {
           $like_count++;
           }            if($like->like == 0)
           {
           $dislike_count++;
           }
           if(Auth::check())
           {
           if($like->like == 1 && $like->user_id == Auth::user()->id)
                        {
                          $like_status="btn-success";
                        }

           if($like->like == 0 && $like->user_id == Auth::user()->id)
                        {
                          $dislike_status="btn-danger";
                        }
           }
                        @endphp

                              @endforeach
                              <i>
                                    <button type="button" data-postid="{{$post->id}}_l"data-like="{{ $like_status }}" class="like btn {{ $like_status }}"> <span class="fa fa-thumbs-up like_count">{{ $like_count }}</span>
                                    </b></button>
                                    <button id="dislike" data-postid="{{$post->id}}_d" type="button" class="dislike btn {{ $dislike_status }}"><span class="fa fa-thumbs-down dislike_count">{{$dislike_count}}</span>
                                    </button>

                </i>

                    </div>
                    <div class="comment-content">
                            {{$post->body}}
                    </div>
                </div>

            </div>

            </div>
            <form method="POST" action="{{ url("/utilisateurs/organiser/{$post->id}/store") }}">
                {{csrf_field()}}
                <div class="comment-box form-group">
                  <label for="body">Ecrivez un commentaire . . .</label>
                  <textarea name="body" id="body" class="form-control" required="required"rows="2" cols="20"></textarea>
                </div>
                <div class="comment-box form-group">
                 <button class="button2" type="submit" class="btn btn-danger">Ajouter commentaire</button>
                </div>

              </form>
        </li>

            <!-- Respuestas de los comentarios -->

            @foreach ($post->comments as $comment)
            <ul class="comments-list reply-list">

                <li>
                    <!-- Avatar -->
<div>
                    <div class="comment-box">
                        <div class="comment-head">
                            	<div class="comment-avatar"> <img src="/uploads/avatars/{{ $comment->user->avatar }}"></div>
                            <h6 class="comment-name"><a href="http://creaticode.com/blog">{{ $comment->user->name }}</a></h6>
                            <span><b>Il y a {{(new Carbon\Carbon($comment->created_at))->diffForHumans()}}</b></span>
                            <i class="fa fa-reply"></i>
                            <i class="fa fa-heart"></i>
                        </div>
                        <div class="comment-content">
                                {{$comment->body}}
                        </div>
                    </div>
</div>

                </li>

                </ul>



@endforeach
@endforeach

</ul>



   </div>


<style>
    /**
 * Oscuro: #283035
 * Azul: #03658c
 * Detalle: #c7cacb
 * Fondo: #dee1e3
 ----------------------------------*/
 * {
 	margin: 0;
 	padding: 0;
 	-webkit-box-sizing: border-box;
 	-moz-box-sizing: border-box;
 	box-sizing: border-box;
 }

 a {
 	color: #03658c;
 	text-decoration: none;
 }

ul {
	list-style-type: none;
}

body {
	font-family: 'Roboto', Arial, Helvetica, Sans-serif, Verdana;
	background: #dee1e3;
}

/** ====================
 * Lista de Comentarios
 =======================*/
.comments-container {
	margin: 60px auto 15px;
	width: 1150px;
}

.comments-container h1 {
	font-size: 36px;
	color: #283035;
	font-weight: 400;
}

.comments-container h1 a {
	font-size: 18px;
	font-weight: 700;
}

.comments-list {
	margin-top: 30px;
	position: relative;
}

/**
 * Lineas / Detalles
 -----------------------*/
.comments-list:before {
	content: '';
	width: 2px;
	height: 100%;
	background: #c7cacb;
	position: absolute;
	left: 32px;
	top: 0;
}

.comments-list:after {
	content: '';
	position: absolute;
	background: #c7cacb;
	bottom: 0;
	left: 27px;
	width: 7px;
	height: 7px;
	border: 3px solid #dee1e3;
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	border-radius: 50%;
}

.reply-list:before, .reply-list:after {display: none;}
.reply-list li:before {
	content: '';
	width: 60px;
	height: 2px;
	background: #c7cacb;
	position: absolute;
	top: 25px;
	left: -55px;
}


.comments-list li {
	margin-bottom: 15px;
	display: block;
	position: relative;
}

.comments-list li:after {
	content: '';
	display: block;
	clear: both;
	height: 0;
	width: 0;
}

.reply-list {
	padding-left: 100px;
	clear: both;
	margin-top: 15px;
}
/**
 * Avatar
 ---------------------------*/
.comments-list .comment-avatar {
	width: 65px;
	height: 65px;
	position: relative;
	z-index: 99;
	float: left;
	border: 3px solid #FFF;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
	-webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.2);
	-moz-box-shadow: 0 1px 2px rgba(0,0,0,0.2);
	box-shadow: 0 1px 2px rgba(0,0,0,0.2);
	overflow: hidden;
}

.comments-list .comment-avatar img {
	width: 100%;
	height: 100%;
}

.reply-list .comment-avatar {
	width: 50px;
	height: 50px;
}

.comment-main-level:after {
	content: '';
	width: 0;
	height: 0;
	display: block;
	clear: both;
}
/**
 * Caja del Comentario
 ---------------------------*/
.comments-list .comment-box {
	width: 1060px;
	float: right;
	position: relative;
	-webkit-box-shadow: 0 1px 1px rgba(0,0,0,0.15);
	-moz-box-shadow: 0 1px 1px rgba(0,0,0,0.15);
	box-shadow: 0 1px 1px rgba(0,0,0,0.15);
}

.comments-list .comment-box:before, .comments-list .comment-box:after {
	content: '';
	height: 0;
	width: 0;
	position: absolute;
	display: block;
	border-width: 10px 12px 10px 0;
	border-style: solid;
	border-color: transparent #FCFCFC;
	top: 8px;
	left: -11px;
}

.comments-list .comment-box:before {
	border-width: 11px 13px 11px 0;
	border-color: transparent rgba(0,0,0,0.05);
	left: -12px;
}

.reply-list .comment-box {
	width: 952px;
}
.comment-box .comment-head {
	background: #FCFCFC;
	padding: 10px 12px;
	border-bottom: 1px solid #E5E5E5;
	overflow: hidden;
	-webkit-border-radius: 4px 4px 0 0;
	-moz-border-radius: 4px 4px 0 0;
	border-radius: 4px 4px 0 0;
}

.comment-box .comment-head i {
	float: right;
	margin-left: 14px;
	position: relative;
	top: 2px;
	color: black;
	cursor: pointer;
	-webkit-transition: color 0.3s ease;
	-o-transition: color 0.3s ease;
	transition: color 0.3s ease;
}

.comment-box .comment-head i:hover {
	color: #03658c;
}

.comment-box .comment-name {
	color: #283035;
	font-size: 14px;
	font-weight: 700;
	float: left;
	margin-right: 10px;
}

.comment-box .comment-name a {
	color: #283035;
}

.comment-box .comment-head span {
	float: left;
	color: #999;
	font-size: 13px;
	position: relative;
	top: 1px;
}

.comment-box .comment-content {
	background: #FFF;
	padding: 12px;
	font-size: 15px;
	color: #595959;
	-webkit-border-radius: 0 0 4px 4px;
	-moz-border-radius: 0 0 4px 4px;
	border-radius: 0 0 4px 4px;
}

.comment-box .comment-name.by-author, .comment-box .comment-name.by-author a {color: #03658c;}
.comment-box .comment-name.by-author:after {
	content: 'autor';
	background: #03658c;
	color: #FFF;
	font-size: 12px;
	padding: 3px 5px;
	font-weight: 700;
	margin-left: 10px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
}

/** =====================
 * Responsive
 ========================*/
@media only screen and (max-width: 766px) {
	.comments-container {
		width: 480px;
	}

	.comments-list .comment-box {
		width: 390px;
	}

	.reply-list .comment-box {
		width: 320px;
	}
}
</style>
 <div class="container">
    <div class="blog-header">
       <h2>Proposer une action </h2>
       <p>Proposer une action au profit de l'association Un Enfant Des Sourires</p>
      <hr>
    </div>

    <div class="content text-center">
       <div class="row text-center" >
         <div class="col-md-12 text-center">
               <form method ="POST" action ="{{ url('utilisateurs/organiser') }}"  enctype="multipart/form-data">
                   {{ csrf_field() }}
           <div class="col-md-12 text-center">
               <div class="form-group">
                 <label>Objet de votre proposition :</label>
                 <input name="title" id="title"  type="text" step="0.01" required="required" class="form-control" placeholder="Entrer l'objet de votre proposition" />

               </div>
               <div class="form-group">
                   <label for="body">Sujet de votre proposition :</label>
                   <textarea name="body" id="body" class="form-control" placeholder="Développez votre idée..."></textarea>
                 </div>


             <div class="form-group">
                   <button type="submit" class="btn btn-danger btn-round">Publier</button>
           </div>
             </div>
          </div>

           </form>
     </div>
   </div>
 </div>
@endsection

@section('js')
    <script type="text/javascript" src="{{ url('/js/like.js') }}"></script>
    <script type="text/javascript">

    var url = "{{url('/like')}}";
    var url_dis = "{{url('/dislike')}}";
      var token ="{{ Session::token()}}";

    </script>

@endsection
