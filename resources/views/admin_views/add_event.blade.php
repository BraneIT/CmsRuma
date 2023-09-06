<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>
</head>
<body>
<?php

  $currentDate = date('Y-m-d'); 

    ?>
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
        <form action="{{ route('store_event') }}" method="post" enctype="multipart/form-data" class="add_news_form">
            @csrf
            <input type="text" name="title" placeholder="Naslov">
            <input type="date" name="date" placeholder="Datum odrzavanja manifestacije" min="{{$currentDate}}">
            <div class="choose_file">
                 <p class="upload_image"> Izaberite sliku</p>
                <input type="file" name="image" id="" class="hide_file">
            </div>
    
            <textarea type="text" name="content" placeholder="Sadrzaj" class="content" id="content" ></textarea>
            <button type="submit" class="logout-button">Dodaj manifestaciju </button>
            @if ($errors->any())
    <div class="alert alert-danger">
        <ul><div class="error">
            @foreach ($errors->all() as $error)
                
                    <p>{{ $error }}</p>
                
            @endforeach
            </div>
     
        </ul>
    </div>
@endif
<script>
        ClassicEditor
            .create( document.querySelector( '#content' ) )
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
