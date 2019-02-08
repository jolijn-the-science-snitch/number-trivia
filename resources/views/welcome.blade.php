<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Random number trivia's</title>

        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Poiret+One|Roboto:300" rel="stylesheet"> 

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            h1 {
                font-size: 84px;
                color: #636b6f;
                font-family: 'Amatic SC', cursive;
                font-weight: 200;
            }

            p {
                font-size: 35px;
                color: #636b6f;
                font-family: 'Poiret One', cursive;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    <h1>The random number trivia</h1>
                    <p id="trivia">Press the button to load in a new random number trivia</p><br />
                    <button type="button" class="btn btn-secondary">Load a new trivia</button>
                </div>
            </div>
        </div>

        <script>
            $(document).ready(function() {
                $('.btn-secondary').click(function() {
                    $('#trivia').text('Loading a new trivia...');
                    $.ajax({
                        type:'GET',
                        url:'http://numbersapi.com/random/trivia',
                        success: function(data) {
                            $('#trivia').html(data);
                        },
                        error: function (data) {
                            alert('Whoops, something went wrong');
                        },
                    });
                });
            });
        </script>
    </body>
</html>
