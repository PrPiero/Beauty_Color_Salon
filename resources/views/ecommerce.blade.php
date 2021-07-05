<!DOCTYPE html>
<html lang="es">


<head>

    <title>INICIO</title>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
    <link rel="stylesheet" href="/assets/stylesinicio/stylesinicio.css">
    <!-- Google Font: Source Sans Pro -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rochester&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&family=Rochester&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/935a263ba2.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <script src="/assets/js/jquery.flexslider.js"></script>
    <script type="text/javascript" charset="utf-8">
        $(window).load(function () {
            $('.flexslider').flexslider();
        });
    </script>
</head>

<body>
    <div class="contenedorinicio">

        <header>
            <div class="logoinicio">
                <img src="/assets/img/logotipo.png">
            </div>
            <nav class="menu">

                <a href="#">Promociones</a>
                <a href="#">Reservas</a>
                <a href="#">Nosotros</a>
                <a href="#">Servicios</a>
                <a href="{{ route('shop') }}">Productos</a>
                <a href="#">Contacto</a>

            </nav>

        </header>


        <article>
            <div class="flexslider">
                <ul class="slides">
                    <li>
                        <img src="/assets/img/screen1x.png" />
                        <section class="flex-caption">
                            <h1>Tu Satisfaccion es nuestro compromiso</h1>
                            <h2>Nuestro servicio personalizado se traduce en un trato amable
                                y empatico hacia el cliente </h2><br><br>

                            <button type="button" role="link" onclick="window.location='{{ route('citas.create') }}'">Reservar una cita</button>
                        </section>
                    </li>
                    <li>
                        <img src="/assets/img/screen2x.png" />
                        <section class="flex-caption">
                            <h1>Queremos que tu experiencia sea la mejor
                                y las mas segura
                            </h1>
                            <h2>Nuestro servicio personalizado se traduce en un trato amable
                                y empatico hacia el cliente
                            </h2><br><br>
                            <button type="button" role="link" onclick="window.location='{{ route('citas.create') }}'">Reservar una cita</button>
                        </section>

                    </li>

                </ul>
            </div>

        </article>

        <div class="separador">
            <div class="separaimg">
                <img src="/assets/img/separadorinfo.png" alt="">
            </div>


        </div>

        <article class="contenedorinfo">

            <div class="info1">
                <div class="cont">
                    <h1>2 años Innovando tu Belleza</h1>
                    <h2>Somos un spa con 2 años de experiencia laboral dedicados enteramente al cuidado del cabello, el rostro, las manos
                        y pies. Contamos con un equipo profesional que asegura el mejor tratamiento posible. Además, siempre estamos buscando
                        innovar y seguir aprendiendo de las mejores técnicas de peluqueria y spa para brindarle el mejor servicio.</h2>
                    <h3>Mision</h1>
                        <p>Nuesta misión es brindar un servicio excelente y completo
                            en estética capilar, facial y corporal, bajo la premisa del
                            servicio de atención personalizado (Tratamientos avanzados en
                            Medicina Estética. Moderno infraestructura. Staff de
                            profesionales certificados y todos los servicios
                            que se requieren en el rubro de la belleza</p>
                        <h3>Vision</h3>
                        <p>Dominar el mercado de servicios relacionados al Spa, a través
                            de una adecuada satisfacción del cliente , llegando a ser un
                            salón de belleza exitoso en su especialidad  de servicios  y
                            ventas de productos.de belleza , apoderándose el mercado nacional 
                            con instalaciones de nuevas sedes y posicionarse entre los mejores
                            a nivel nacional.</p>
                </div>
            </div>
            <div class="imginfo1">
                <img src="/assets/img/info1.png">

            </div>
        </article>

        <div class="separador">
            <div class="separaimg">
                <img src="/assets/img/separadorservicios.png" alt="">
            </div>


        </div>

        <article class="contenedorservicio">
            <div class="servicio1">
                <div class="servinfo1">
                    <p>Corte de cabello: Nuestros estilistas se encargan de mantener e imponer la moda de los mejores cortes tanto para damas
                        como para caballeros, velando por la comodidad del cliente y su buen trato.</p>
                </div>


            </div>
            <div class="servfoto1">
                <img src="/assets/img/serfoto1.png" style="margin:0px auto ;" alt="">
            </div>




        </article>
        <article class="contenedorservicio">
            <div class="servfoto2" style="margin:0px auto;">
                <img src="/assets/img/serfoto2.png" style="margin-left: 80px;" alt="">
            </div>
            <div class="servicio1">
                <div class="servinfo1">
                    <p>Masaje: Nuestras terapias son personalizadas y efectivas,
                        en la cual se busca la satisfacción del cliente. Este servicio ayudara
                        a aliviar las tensiones, estrés,  cansancio provocado  por
                        las actividades laborales u otros y así
                        mejorando las actividades cotidianas o diarias del cliente.</p>
                </div>


            </div>
        </article>

        <article class="contenedorservicio">
            <div class="servicio1">
                <div class="servinfo1">
                    <p>Pedicura: Nuestros servicios son realizados de forma personalizada o de forma estándar,
                        ya que este tipo de trabajo son desarrollados por profesionales de acuerdo al estilo solicitado
                        por el cliente , tanto  para la parte de pies o de manos según su gusto, Usted elija y nosotros
                        nos encargamos del trabajo.</p>
                </div>


            </div>
            <div class="servfoto1">
                <img src="/assets/img/serfoto3.png" alt="">
            </div>




        </article>

        <div class="separador">
            <div class="separaimg">
                <img src="/assets/img/separadorportafolio.png" alt="">
            </div>


        </div>

        <section class="contenedorportafolio">
            <div class="portafolio">
                <div class="portimg1">
                    <img src="/assets/img/portfoto1.png" alt="">
                </div>
                <div class="portimg2">
                    <img src="/assets/img/portfoto2.png" alt="">
                </div>
                <div class="portimg3">
                    <img src="/assets/img/portfoto3.png" alt="">
                </div>
            </div>
        </section>

        <section class="contenedorportafolio">
            <div class="portafolio">
                <div class="portimg1">
                    <img src="/assets/img/portfoto4.png" alt="">
                </div>
                <div class="portimg2">
                    <img src="/assets/img/portfoto5.png" alt="">
                </div>
                <div class="portimg3">
                    <img src="/assets/img/portfoto6.png" alt="">
                </div>
            </div>
        </section>









        <div class="separador">
            <div class="separaimg">
                <img src="/assets/img/separadorubicacion.png" alt="">
            </div>


        </div>

        <section class="contenedorubicacion">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3900.93350041236!2d-
            77.01642204905352!3d-12.116702546463666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.
            1!3m3!1m2!1s0x9105c808ec5bef7f%3A0xcf738cbcef21d5ac!2sQ1%2C%20Surquillo%2015048!5e0!3m2!1ses-
            419!2spe!4v1623729111814!5m2!1ses-419!2spe" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

        </section>



    </div>

    <footer>
        <div class="footerinicio">
            <h1>VyN Beauty Color Salon</h1>
            <h2> Nosotros | Horarios | Preguntas Frecuentes | Termino y condiciones | Politicas de Privacidad | Blog |
                Libro de reclamaciones</h2>
            <nav>
                <a href=""><img src="/assets/img/vecwsp.png" alt=""></a>
                <a href=""><img src="/assets/img/vecfb.png" alt=""></a>

            </nav>
            <p>© 2021 Lima - Derechos reservados. Sitio por DevCop</p>
        </div>
    </footer>

</body>


</html>
