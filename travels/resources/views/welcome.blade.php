<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>

            *{
                box-sizing: border-box;
                margin: 0;
                padding: 0;
            }
            html, body {
                background-image: url(https://www.viaggiaconalice.it/images/blog/2018/curiosita/sotto-categorie-blog-viaggia-con-alice8.jpg);
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-position: center center;
                background-size: cover; 
                color: #172329;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            #bigtitle{
                text-align: center;
                margin: 20px 0px;
            }

            .container{
                display: flex;
                flex-direction: row;
                flex-wrap: wrap;
                justify-content: center;
                width: 80%;
                margin: auto;
                background-color: #a9b1b69a
            }

            .card{
                width: 40%;
                margin: 20px 5px;
                padding: 10px 0px 10px 15px;
            }

            img{
                width: 100%;
            }


        </style>
    </head>
    <body>

        <h1 id="bigtitle">Travel options</h1>
        <div class="container">
            @foreach ($travels as $travel)
            <div class="card">
                <img src="{{$travel->cover_url}}" alt="cover img">
                <h2>{{$travel->title}}</h2>
                <h2>{{$travel->location}}</h2>
                <hr>
                <h5>€ {{$travel->price}} | Insurance: {{$travel->insurance}}</h5>
                <hr>
                <h4>{{$travel->agency}}</h4>
                <p>{{$travel->agency_phone}} - {{$travel->agency_email}}</p>
                <p>{{$travel->agency_website}}</p>
            </div>
            @endforeach
        </div>


    </body>
</html>
