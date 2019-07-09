<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prueba</title>

    <!----- STYLE CSS ----->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="estiloFooter.css">

    <!----- GOOGLE FONTS ----->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet"> 
</head>

<body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="/docs/4.3/assets/brand/bootstrap-solid.svg" width="30" height="30" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>          
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Nosotros</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Servicios
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1">¿Porque Remextiven?</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>


    <div class="container">
        @yield('contenido')
    </div>


    <!------- FOOTER PAGE ----->
    <footer>
        <div class="headerFooter">
            <ul>
                <li>
                    <a href="#">Sobre Nosotros</a>
                </li>
                <li>
                    <a href="#">Testimonios</a>
                </li>
                <li>
                    <a href="#">Preguntas Frecuentes</a>
                </li>
                <li>
                    <a href="#">Terminos y condiciones</a>
                </li>
                <li>
                    <a href="#">Contacto</a>
                </li>
            </ul>
        </div>
        <div class="bodyFooter">
            <section class="socialIcons">
                <a href="#"><img src="../img/socialIcons/sombreados/linkedin.png" alt="Nuestro Linkedin"/></a>
                <a href="#"><img src="../img/socialIcons/sombreados/youtube2.png" alt="Nuestro Canal de Youtube "/></a>
                <a href="#"><img src="../img/socialIcons/sombreados/facebook.png" alt="Nuestro Facebook"/></a>
                <a href="#"><img src="../img/socialIcons/sombreados/twitter.png" alt="Nuestro Twitter"/></a>
                <a href="#"><img src="../img/socialIcons/sombreados/instagram.png" alt="Nuestro Instagram"/></a>
            </section>
            <section class="sentenceRemextiven">
                <div>
                    <img src="../img/logoRemextiven.png" style="width:20%;" alt="Remextiven"/>
                </div>
            </section>
            <section class="contactRemextiven">
                <ul>
                    <li><div class="lineWithIcon"><img src="../img/icons/envelope.png" alt="Correo: "/><p>info@remextiven.com</p></div></li>
                    <li><div class="lineWithIcon"><img src="../img/icons/phone-call.png" alt="Telefono: "/><p>(598) 093834456</p></div></li>
                    <li><div class="lineWithIcon"><img src="../img/icons/placeholder.png" alt="Direccion: "/><p>Montevideo Uruguay</p></div></li>
                </ul>
            </section>
        </div>
        <div class="footerFooter">
            <div class="copyright">
                <p>Copyright </p>
                <img src="../img/icons/simboloCopyrightPequeño.png" alt="Copyright "/>
                <p>2019 Remextiven. All Rights Reserved.</p>
            </div>
        </div>
    </footer>


    <!------ JS ----->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>