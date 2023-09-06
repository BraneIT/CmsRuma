<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>
    <style>.ck-editor__editable_inline 
        {
        height: 15rem;
        margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
    <div class="menu">
        <div class="logo-container">
            
        <img src="{{asset('images/logo.png')}}" alt="" srcset="" class="logo">
        </div>

        <div class="menu-container">
        <a href="/dashboard/news">lista vijesti</a>
        <a href="/dashboard/categories">kategorije vesti</a>
        <a href="/events">Lista manifestacija</a>
        <a href="/dashboard/public_procurements">lista javnih nabavki</a>
        <a href="/dashboard/admins">Lista admina</a>
        <a href="/">Podesavanja</a>
        </div>
    </div>
    <div class="add_news_wrapper">

    <div class="info">
        <p>trenutno prijavljen: {{$fullName}}</p>        
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="logout-button">Logout</button>
        </form>
    </div>
    <div class="add_news_container">
        <form action="{{ route('store_news') }}" method="post" enctype="multipart/form-data" class="add_news_form">
            @csrf
            <input type="text" name="title" placeholder="Naslov">
            @if($errors->has('title'))
            <p>{{$errors->first('title')}}</p>
            @endif
            <select name="category_id" class="dropdown">
                <option value="">Izaberite kategoriju</option>
           
                @foreach($categories as $item)
                <option value="{{ $item->id }}">{{$item->category}}</option>
                @endforeach
            </select>
            @if($errors->has('category_id'))
            <p>{{$errors->first('category_id')}}</p>
            @endif
            <div class="choose_file">
                 <p class="upload_image"> Izaberite sliku</p>
                <input type="file" name="image" id="" class="hide_file">
                <div></div>
            </div>
            @if($errors->has('image'))
            <p>{{$errors->first('image')}}</p>
            @endif
            <textarea type="text" name="content" placeholder="Sadrzaj" class="content" id="content"></textarea>
            @if($errors->has('content'))
            <p>{{$errors->first('content')}}</p>
            @endif
            <button type="submit" class="logout-button">Dodaj vijest</button>
            <!-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul><div class="error">
            @foreach ($errors->all() as $error)
                
                    <p class="alert-error">{{ $error }}</p>
                
            @endforeach
            </div>
        </ul>
    </div>
@endif -->

<script>
        ClassicEditor
            .create( document.querySelector( '#content' ),
            {
                ckfinder:{
                    uploadUrl:"{{route('store_news',['_token'=>csrf_token()])}}",
                }
            }
            )
            .catch( error => {
                console.error( error );
            } );
    </script>

        </form>
    </div>
    </div>
    </div>
</body>
</html>
