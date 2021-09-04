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
<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-success">
    <div class="container-fluid">
        <a class="navbar-brand" style="color: #f7fafc; font-family: Bahnschrift Light Condensed; " href="http://oferta.senasofiaplus.edu.co/sofia-oferta/"> <b> Sofia Plus</b></a>
        <button  class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav" style="text-align: center;">
                <a class="nav-link navbar-brand" style="color: #f7fafc; font-family: Bahnschrift Light Condensed; " aria-current="page" href="https://electricidadelectronicaytelecomu.blogspot.com/"> <b> Blog CEET</b></a>
                <a class="nav-link navbar-brand" style="color: #f7fafc; font-family: Bahnschrift Light Condensed; " href="https://www.sena.edu.co/es-co/formacion/Paginas/bibliotecas.aspx"><b> Biblioteca</b></a>
                <a class="nav-link navbar-brand" style="color: #f7fafc; font-family: Bahnschrift Light Condensed; " href="https://www.sena.edu.co/es-co/Paginas/default.aspx"><b> Sena</b></a>
                <a class="nav-link navbar-brand" style="color: #f7fafc; font-family: Bahnschrift Light Condensed; " href="https://www.sena.edu.co/es-co/ciudadano/Paginas/default.aspx" ><b>Contactenos</b></a>
            </div>
        </div>
    </div>
</nav>
</div>

<div class="col-md-6" style="">
    @yield('contenido')
</div>

<footer style="background-color: #ffffff">
    <p style="text-align:center">Servicio Nacional de Aprendizaje - SENA. </p>
</footer>

</body>
</html>


