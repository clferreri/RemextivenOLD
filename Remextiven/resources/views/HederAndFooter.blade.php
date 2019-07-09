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
    <link rel="stylesheet" type="text/css" href="../resources/views/estiloFooter.css">

    <!----- GOOGLE FONTS ----->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet"> 
</head>

<body>
    
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