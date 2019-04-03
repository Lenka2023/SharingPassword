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
        
          <form  method="POST" action="{{ url('sharePass') }}">
                        {{ csrf_field() }}
                        <input  id="passw" type="password"  name="password" required>
                                <button type="submit" onclick="createLink()">
                                    submit
                                </button>
                               
                               

                                        <!--  @if(isset($password))-->

                                               
                                 <div id="data"></div><div id="link"></div>
                                                        
                                                <!--    @endif  -->
                                
                    </form>           
                     <script type="text/javascript">
                        var Time;
                        function createLinkTime(){
                            Time = setTimeout(createLink(), 9000);
                                                 }
                        function createLink(){
                           var paste=document.getElementById("link");
                             /*document.write("<a href="{{ url('sharePass') }}" onclick="pass()">");
                            document.write("123");
                            document.write("</a>");*/
                         var link = "{{ url('/sharePass/{encpassword}') }}";
                          var pass = "pass()";
                          var element = document.createElement("a");
                            element.setAttribute("href", link);
                            element.setAttribute("onclick", pass);
                            element.innerHTML = "{{$pass}}";
                             document.body.appendChild(element);
                             //paste.appendChild(element);
                                        }
                      function pass(){
                                var xhr = new XMLHttpRequest();

                                xhr.open('GET', 'localhost/SharingPassword.loc/sharePass', true);

                                xhr.send(); // (1)

                                xhr.onreadystatechange = function() { // (3)
                                  if (xhr.readyState != 4) return;

                                  button.innerHTML = 'Готово!';

                                  if (xhr.status != 200) {
                                    alert(xhr.status + ': ' + xhr.statusText);
                                  } else {
                                    alert(xhr.responseText);
                                  }

                                }

                                    button.innerHTML = 'Загружаю...'; // (2)
                                    button.disabled = true;
                                                          }                  

                                          </script>
                    
    </body>
</html>   
