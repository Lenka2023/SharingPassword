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
        <div>
                    <form  method="POST" action="{{ url('sharePass') }}">
                        {{ csrf_field() }}
                        <input  id="passw" type="password"  name="password" required>
                                <button type="submit" >
                                    submit
                                </button>
                                <a href="{{ url('sharePass') }}" onclick="pass()">link</a> <div id="data"></div>
                                    
        </div>
                    </form>

                    <script type="text/javascript">
                        
                      function pass(){
                        var passw=document.getElementById("passw").value;
                        alert("passw");
                        console.log(passw);
                        var data=document.getElementById("data");
                        data.innerText = passw;

                      }  
                    </script>
     
    </body>
</html>   
