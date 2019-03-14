<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>@yield('title', 'Opendag')</title>

    <style>

        #jumbo {
            width: 100%;
            height: auto;
        }

        #image {
            position: relative;
            
            left: 25%;
        }

        #create{
            position: fixed;
            top: 35%;
            left: 25%; 
            width: 45%;
        }
        
        #createimg {
            position: relative;
            top: 10;
            left: 35%;
        }

        #edit{
            position: fixed;
            top: 35%;
            left: 25%; 
            width: 45%;
        }

        .btnanimated:hover{
            transform: scale(1.2);
            
        }
        
        .cardrotate:hover{
            transform: rotate(2deg);
            
        }
        
    </style>
</head>
<body>
    <br>
    <div class="container" id="containerbody">
        @include('partials.flashmessages')
        @yield('content')
    </div>
</body>
</html>