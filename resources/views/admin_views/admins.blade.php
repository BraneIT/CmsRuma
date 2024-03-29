<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
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
    <div class="welcome">

        <div class="info">
            <p>trenutno prijavljen: {{$fullName}}</p>        
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="logout-button">Logout</button>
            </form>
        </div>
        <div class="admins-wrapper">
            @foreach($admins as $item)
            <div class="admin-container">
                <p>{{$item->full_name}}</p>
                <p>{{$item->username}}</p>
            </div>

            @endforeach
        </div>                                     
    </div>
    </div>
    </div>
</body>
</html>

