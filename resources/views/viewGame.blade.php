@extends('layout')
@section('content')
<style>

    .viewGame-row{
        margin: 100px auto;
        box-shadow: 0 6px 10px 0 rgba(0,0,0,0.4);
        transition: 0.3s;
        max-width: 1000px;
        background-color: white;
        opacity: 0.80;
    }

    .viewGame-row:hover{
        box-shadow: 0 10px 18px 0 rgba(0,0,0,0.4);
    }

    .details{
        padding: 45px 40px;
    }

    .game-title{
        font-size: 40px;
    }

    .grey{
        color: #808080;
    }

    .game-img{
        padding: 0;
        max-width: 300px;
        object-fit:cover;

    }

    .text-justify{
        text-align: justify;
    }

    .button{
        position: relative;
        top: 70px;
        
    }

    .card {
        margin: 0 0.5em;
        box-shadow: 2px 6px 8px 0 rgba(22, 22, 26, 0.18);
        border: none;
        border-radius: 0;
        height: 450px;
        text-align: center;
    }

    .cards-wrapper {
        display: flex;
        justify-content: center;
        padding: 20px auto;
    }
    .card img {
    max-width: 100%;
    max-height: 230px;
    object-fit:cover;
    }

    .carousel-inner {
    padding: 1em;
    }

    .card-title{
        padding: 20px;
    }

    .love{
        font-size: 25px;
    }

    .window{
      padding: 10px;
    }

    .content{
      background-image: url('{{ asset('images/scene.png') }}');
      background-size: cover;
      padding-top: 50px;
      padding-bottom: 50px;
    }

    .btn{
        margin-top: 10px
    }

    .comment-title{
        padding-bottom: 20px;
        padding-top: 20px;
    }

    .comment-container{
        
        background-color: lightblue;
    }
  
</style>

<div class="container-fluid content">
    @foreach($games as $game)
    <div class="viewGame-row row">
        <div class="col-lg-4 col-md-4 col-sm-12 game-img">
            <img src="{{asset('images/')}}/{{$game->image}}" class="img-fluid" alt="Game"> 
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 details">
            <h3 class="game-title">{{$game->name}}</h3>
            <p class="grey">{{$game->categoryName}}</p>
            <p class="text-justify">{{$game->description}}</p>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-12">
            <div class="button">
            @if( $game->platform == 'mobile' || $game->platform == 'Mobile')
            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-phone" viewBox="0 0 16 16">
                <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z"/>
                <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
            </svg>
            
            @elseif($game->platform == 'window' || $game->platform == 'Window')
            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-windows window" viewBox="0 0 16 16">
                <path d="M6.555 1.375 0 2.237v5.45h6.555V1.375zM0 13.795l6.555.933V8.313H0v5.482zm7.278-5.4.026 6.378L16 16V8.395H7.278zM16 0 7.33 1.244v6.414H16V0z"/>
            </svg>
            @else
            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-controller" viewBox="0 0 16 16">
            <path d="M11.5 6.027a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-1.5 1.5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm2.5-.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-1.5 1.5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm-6.5-3h1v1h1v1h-1v1h-1v-1h-1v-1h1v-1z"/>
            <path d="M3.051 3.26a.5.5 0 0 1 .354-.613l1.932-.518a.5.5 0 0 1 .62.39c.655-.079 1.35-.117 2.043-.117.72 0 1.443.041 2.12.126a.5.5 0 0 1 .622-.399l1.932.518a.5.5 0 0 1 .306.729c.14.09.266.19.373.297.408.408.78 1.05 1.095 1.772.32.733.599 1.591.805 2.466.206.875.34 1.78.364 2.606.024.816-.059 1.602-.328 2.21a1.42 1.42 0 0 1-1.445.83c-.636-.067-1.115-.394-1.513-.773-.245-.232-.496-.526-.739-.808-.126-.148-.25-.292-.368-.423-.728-.804-1.597-1.527-3.224-1.527-1.627 0-2.496.723-3.224 1.527-.119.131-.242.275-.368.423-.243.282-.494.575-.739.808-.398.38-.877.706-1.513.773a1.42 1.42 0 0 1-1.445-.83c-.27-.608-.352-1.395-.329-2.21.024-.826.16-1.73.365-2.606.206-.875.486-1.733.805-2.466.315-.722.687-1.364 1.094-1.772a2.34 2.34 0 0 1 .433-.335.504.504 0 0 1-.028-.079zm2.036.412c-.877.185-1.469.443-1.733.708-.276.276-.587.783-.885 1.465a13.748 13.748 0 0 0-.748 2.295 12.351 12.351 0 0 0-.339 2.406c-.022.755.062 1.368.243 1.776a.42.42 0 0 0 .426.24c.327-.034.61-.199.929-.502.212-.202.4-.423.615-.674.133-.156.276-.323.44-.504C4.861 9.969 5.978 9.027 8 9.027s3.139.942 3.965 1.855c.164.181.307.348.44.504.214.251.403.472.615.674.318.303.601.468.929.503a.42.42 0 0 0 .426-.241c.18-.408.265-1.02.243-1.776a12.354 12.354 0 0 0-.339-2.406 13.753 13.753 0 0 0-.748-2.295c-.298-.682-.61-1.19-.885-1.465-.264-.265-.856-.523-1.733-.708-.85-.179-1.877-.27-2.913-.27-1.036 0-2.063.091-2.913.27z"/>
          </svg>
            @endif
            <a href="{{ route('game.detail',['id'=>$game->id])}}"><button type="button" class="btn btn-dark btn">Learn More</button></a>
        </div>
            
        </div>
    </div>
    @endforeach
</div>

<div class="container-fluid comment-container">
    <div class="row comment">
        <div class="col-lg-9 col-md-9s col-sm-12 mx-auto">
            <h2 class="comment-title">Comment</h2>
            @foreach($comments as $comment)
            <h6>{{$comment->userName}}</p>
            <p>{{$comment->comment}}</p>
            @endforeach
            <form action="{{route('addComment')}}" method="POST">
                @CSRF
                <div class="form-group">
                    <textarea class="form-control textarea" id="comment" name="comment" placeholder="New Comment" rows="6"></textarea>
                </div>
                <div class="add">
                    <button type="submit" class="btn btn-primary" style="margin: 10px auto">Add Comment</button>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection