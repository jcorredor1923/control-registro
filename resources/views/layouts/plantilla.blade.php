<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <title>SENA</title>
</head>
<body>
<br>
<br>
<!-- Navbar -->
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light"  style="background-color: #fc4b08;"  >
        <div class="container-fluid" >
            <h2 style="color:#ffffff;font-family: Bahnschrift Light Condensed;">
                <b>Centro De Electricidad Electronica Y Telecomunicaciones </b> </h2>
            <a class="navbar-brand" href="#">
                <img src="{{asset('IMAGENES/sena.png') }}" alt="" width="60" height="54">
            </a>
        </div>
    </nav>
</div>
        <!-- sidebar -->
<br>
<div  class="container" >
    <div class="col-md-3" style="background-color: #fc4b08; ">
        <ul class="list-group">
            <li class="list-group-item "style="background-color: #fc4b08; color: aliceblue;" aria-current="true"><b>Sofia Plus</b></li>
            <li class="list-group-item "style="background-color: #fc4b08;color: aliceblue;"><b>Blog CEET</b> </li>
            <li class="list-group-item "style="background-color: #fc4b08;color: aliceblue;"><b>Biblioteca</b>  </li>
            <li class="list-group-item "style="background-color: #fc4b08;color: aliceblue;"><b>Sena</b>  </li>
            <li class="list-group-item "style="background-color: #fc4b08;color: aliceblue;"><b>Otros</b> </li>

        </ul>
    </div>
</div>

<div class="col-md-6" style="">
    @yield('contenido')
</div>

<footer style="background-color: #ffffff">
    <p style="text-align:center">Servicio Nacional de Aprendizaje - SENA. </p>
</footer>

</body>
</html>


