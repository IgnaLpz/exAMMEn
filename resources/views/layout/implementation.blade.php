@extends('template.vistas')
@section('content')
<div id="main">
    <!-- Post -->
    <article class="post">
        <header>
            <div class="title">
                <h2><a href="single.html">implementacion</a></h2>
                <p>Ejecutar la <code>gulp build</code> tarea genera una versión optimizada de su aplicación en el <code>dist</code>directorio. Hay varias formas de versionar e implementar este código en producción.</p>
            </div>
        </header>
        <a lass="image featured"><img src="https://res.cloudinary.com/practicaldev/image/fetch/s--qMg1zWdx--/c_imagga_scale,f_auto,fl_progressive,h_420,q_auto,w_1000/https://dev-to-uploads.s3.amazonaws.com/i/s1g4l5sfysyi4s2x8m32.png" alt="" width="800" height="280"/></a>
        <h3>Gulp-gh-páginas</h3>
        <p>Con el gulp-gh-pagescomplemento Gulp , puede permitir que su aplicación se implemente mediante una tarea específica, como <code>gulp deploy</code>:</p>
        <ul>
            <li>
                <p>El origen de Git, por defecto es <code>origin</code>.</p>
            </li>
            <li>
                <p>La rama a la que empujar, por defecto es <code>gh-pages</code>.</p>
            </li>
            <li>
                <p>El mensaje de confirmación.</p>
            </li>
            <li>
                <p>Una opción para especificar si la rama debe ser empujada al origen automáticamente.</p>
            </li>
        </ul>
        <h3>Comando subárbol Git</h3>
        <p>También puede mantener el código fuente y compilado en la misma rama e implementar solo el <code>dist</code> directorio con el <code>git subtree</code> comando.</p>
        <ul>
            <li>
                <p>Elimina el <code>dist</code> directorio del <code>.gitignore</code>. Archivo. Los proyectos Yeoman lo ignoran por defecto.</p>
            </li>
            <li>
                <p>Agregue el <code>dist</code> directorio a su repositorio:</p>
            </li>
            <pre><code>git add dist && git commit -m "Initial dist subtree commit"</code></pre>
            <li>
                <p>Implemente el subárbol en una rama diferente. Especifique una ruta relativa a su <code>dist</code> directorio con <code>1. --prefix</code>:</p>
            </li>
            <pre><code>git subtree push --prefix dist origin gh-pages</code></pre>
            <li>
                <p>Desarrolle normalmente, asignando todo su repositorio a su rama predeterminada (maestra).</p>
            </li>
            <li>
                <p>Para implementar el <code>dist</code> directorio, ejecute el <code>subtree push</code> comando desde el directorio raíz:</p>
            </li>
            <pre><code>git subtree push --prefix dist origin gh-pages</code></pre>
        </ul>
        <h3>Script de implementación del directorio Git</h3>
        <p>La implementación del directorio Git es un script menos automatizado que funciona con principios similares al control de compilación grunt.</p>
    </article>
</div>
@endsection
@section('alter')
<ul class="posts">
    <li>
        <center>
            <h3>Datos curiosos</h3>
        </center>
        <article>
            <header>
                <h3><a href="single.html">Comunidada</a></h3>
            </header>
            <a href="single.html" class="image"><img src="https://img2.freepng.es/20180413/ofw/kisspng-virtual-community-computer-icons-social-network-check-5ad170d9893073.9005702115236753535619.jpg" alt="" /></a>
        </article>
    </li>
    <li>
        <article>
            <header>
                <h3><a href="single.html">Documentación</a></h3>
            </header>
            <a href="single.html" class="image"><img src="https://cdn-icons-png.flaticon.com/512/165/165611.png" alt="" /></a>
        </article>
    </li>
    <li>
        <article>
            <header>
                <h3><a href="single.html">Generadores oficiales</a></h3>
            </header>
            <a href="single.html" class="image"><img src="https://cdn-icons-png.flaticon.com/512/1546/1546765.png" alt="" /></a>
        </article>
    </li>
    <li>
        <article>
            <header>
                <h3><a href="single.html">Sistema central</a></h3>
            </header>
            <a href="single.html" class="image"><img src="https://cdn-icons-png.flaticon.com/512/2721/2721191.png" alt="" /></a>
        </article>
    </li>
</ul>
@endsection