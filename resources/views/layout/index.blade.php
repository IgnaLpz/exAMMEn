@extends('template.vistas')
@section('content')
<!-- Post -->

<article class="post">
    <header>
        <div class="title">
            <h2><a href="single.html">Conoce sobre yeoman</a></h2>
            <p>En la programación YEOMAN permite a los desarrolladores a generar mejoras en la práctica de sus proyectos por medio de herramientas y un ecosistema generador generando un complemento por medio de la ejecución del comando ‘yo’ el cual permite montar proyectos o segmentos que sean de utilidad.</p>
        </div>
    </header>
    <a lass="image featured"><img src="https://dc722jrlp2zu8.cloudfront.net/media/cache/49/16/4916f38f468f1cec24ef063cbe0abfab.webp" alt="" /></a>
    <p>Las herramientas o marcos que el desarrollador puede implementar con YEOMAN permiten generar con rapidez aplicaciones en la web con un buen diseño evitando el paso de la configuración manual.</p>
    <p>YEOMAN aprovecha de la experiencia de la comunidad desarrolladora de código libre por su buena documentación y estructurado de proyectos con lo cual se puede garantizar su funcionalidad al momento de implementarlo en tus códigos y cuenta con soporte por lo que solo será necesario que modificar el error que la herramienta ya detecto permitiendo optimizar tiempos.</p>
</article>

<!-- Post -->
<article class="post">
    <header>
        <div class="title">
            <h2><a href="single.html">herramientas</a></h2>
            <p>YEOMAN ofrece 3 tipos de herramientas que mejorar la productividad y esto consiste en las herramientas de andamiaje y de construcción y el administrador de paquetes.</p>
        </div>
    </header>
    <h3>
        <li>andamiaje 'yo'</li>
    </h3>
    <p>Con el comando ‘yo’ se genera una nueva aplicación la cual se adquieren las dependencias del administrador de paquetes que el desarrollador podrá utilizar para su compilación de su proyecto.</p>
    <center><img src="https://yeoman.io/static/tool-yo.4ed95cac73.png" alt=""></center>
    <h3>
        <li>herramienta de construcción</li>
    </h3>
    <p>Permite la construcción y obtención de las vistas del proyecto. Se recomienda la implementación de Gulp y Grunt ya que son las mas populares dentro de la comunidad.</p>
    <center><img src="https://ucarecdn.com/a07628e8-d5cc-4c1f-8cb5-ef5700eb69f6/-/format/auto/-/progressive/yes/-/preview/480x480/" alt="" width="180" height="210"></center>
    <h3>
        <li>administrador de paquetes</li>
    </h3>
    <p>Esta se utiliza para administrar las dependencias del proyecto lo que significa que no existe la necesidad de controlar los scripts. Igualmente se recomienda npm y Bower por ser de los mas utilizados en la comunidad.</p>
    <center><img src="https://yeoman.io/static/yeoman-004.5ddf2404cb.png" alt="" width="200" height="250"></center>
    <br>
    <h4>Las herramientas funcionan de manera óptima de forma separada pero esto no significa algún impedimento para un acoplamiento que resulta benefactoría en cuestiones de flujo de trabajo y eficiencia del proyecto.</h4>
</article>
@endsection
@section('alter')
<!-- Mini Posts -->
<section>
    <div class="mini-posts">
        <center>
            <h3>mas información</h3>
        </center>
        <!-- Mini Post -->
        <article class="mini-post">
            <header>
                <center>
                    <h2><a href="js/maiin.js">gulp</a></h2>                 
                </h2>
                </center>
            </header>
            <a href="single.html" class="image"><img src="https://res.cloudinary.com/practicaldev/image/fetch/s--1KrROG-d--/c_imagga_scale,f_auto,fl_progressive,h_1080,q_auto,w_1080/https://dev-to-uploads.s3.amazonaws.com/i/s51ooekcg6ukxrf99cft.jpeg" alt="" /></a>            
        </article>

        <!-- Mini Post -->
        <article class="mini-post">
            <header>
                <center>
                    <h2><a href="single.html">grunt</a></h2>
                </center>
            </header>
            <a href="single.html" class="image"><img src="https://www.gruntjs.net/media/grunt-logo.png" alt="" /></a>
        </article>

        <!-- Mini Post -->
        <article class="mini-post">
            <header>
                <center>
                    <h2><a href="single.html">npm</a></h2>
                </center>
            </header>
            <a href="single.html" class="image"><img src="https://pbs.twimg.com/profile_images/1285630920263966721/Uk6O1QGC_400x400.jpg" alt="" /></a>
        </article>

        <!-- Mini Post -->
        <article class="mini-post">
            <header>
                <center>
                    <h2><a href="single.html">bower</a></h2>
                </center>
            </header>
            <a href="single.html" class="image"><img src="https://miro.medium.com/max/512/1*jqzCCGyzwbIcgGfI2mQ5Dg.png" alt="" /></a>
        </article>

    </div>
</script>
@endsection