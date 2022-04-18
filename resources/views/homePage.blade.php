<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
                background-image: url("ENSA-JADIDA-compus.jpg");
                background-size : cover;
                margin:0;
                padding:0;
            }
            .home{
                background-image: url("ensaj.jpg");
                background-size : cover;
                background-color: #7d8ec4;
                width:100vw;
                height:100vh;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items:center;
            }
            a{
                text-decoration :none;
            }
            section{
                margin:10px 0;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items:center;
                text-align:center;
                width:150px;
                height:60px;
                background-color: rgba(255,255,255,.5);
                border-radius:5px;
            }
        </style>
    </head>
    <body class="antialiased" >
        <div class="home" >
            <section>
            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
            </section>
            <section>
            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
            </section>
            
        </div>
    </body>
</html>
