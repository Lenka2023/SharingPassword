<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

           
        </style>
    </head>
    <body>
        <div >
                    <form  method="POST" action="{{ url('sharePass') }}">
                        {{ csrf_field() }}
                        <input  type="password"  name="password" required>
                                <button type="submit" class="btn btn-primary">
                                    submit
                                </button>
        </div>
                    </form>
    </body>
</html>   
