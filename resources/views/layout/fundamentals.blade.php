@extends('template.vistas')
@section('content')
<div id="main">
    <!-- Post -->
    <article class="post">
        <header>
            <div class="title">
                <h2><a href="single.html">Comandos</a></h2>
            </div>
        </header>
        <center><a lass="image featured"><img src="https://raw.githubusercontent.com/yeoman/media/master/optimized/yeoman-masthead.png" alt="" /></a></center>
        <p><code>yo</code>es el comando que permite la creación de proyectos utilizando plantillas de andamiaje (conocidas como generadores) y estos se instalan utilizando npm.</p>
        <p>Intalación <code>yo</code> usando <code>npm</code>:</p>
        <pre><code>npm install -g yo</code></pre>
        <p>Los generadores son paquetes npm llamados <code>generator-XYZ</code>.</p>
        <p>"instalar un generador" mientras se ejecuta <code>yo</code>. Para instalar el <code>webapp</code> generador:</p>
        <pre><code>npm install -g generator-webapp</code></pre>
        <p>Los usuarios de New Node y npm pueden tener problemas de permisos. Estos problemas aparecen en forma de <code>EACCESS</code> errores durante la instalación.</p>
        <p><em>npm</em> es el administrador de paquetes para Node.js y viene con él.</p>
        <p>En Windows, sugerimos usar una mejor herramienta de línea de comandos como cmdero PowerShell para mejorar la experiencia.</p>
        <h3>Para montar un nuevo proyecto.</h3>
        <pre><code>yo webapp</code></pre>
        <h3>Para ver qué opciones están disponibles.</h3>
        <pre><code>yo webapp --help</code></pre>
        <p>Muchos generadores se basan en sistemas de compilación y administradores de paquetes.</p>
        <h3>Acceso al inicio de un generador.</h3>
        <pre><code>npm home generator-webapp</code></pre>
        <p>Es probable que los generadores de estructuras complejas de andamios proporcionen generadores adicionales para andamiar partes más pequeñas de un proyecto. Estos generadores suelen denominarse subgeneradores y se accede a ellos como <code>generator:sub-generator</code>.</p>
        <p>Una vez que se ha generado la aplicación angular completa, se pueden agregar otras características. Para agregar un nuevo controlador al proyecto, ejecute el subgenerador del controlador:</p>
        <pre><code>yo angular:controller MyNewController</code></pre>
        <p><code>yo</code> también es una herramienta totalmente interactiva. Simplemente tecleando <code>yo</code> en una terminal le brindará una lista de opciones para gestionar todo lo relacionado con los generadores:</p>
        <p><code> yo --help</code> Accede a la pantalla de ayuda completa</p>
        <ul>
            <li>
                <p><code>yo --generators</code> Listar todos los generadores instalados</p>
            </li>
            <li>
                <p><code>yo --version</code> Obtener la versión</p>
            </li>
        </ul>
        <h3>Solución de problemas</h3>
        <p>La mayoría de los problemas se pueden encontrar ejecutando:</p>
        <pre><code>yo doctor</code></pre>
        <p>El comando <code>doctor</code> diagnosticará y proporcionará pasos para resolver los problemas más comunes.</p>
    </article>
</div>
@endsection
@section('alter')
<section class="blurb">
    <h2>Hablemos de yeoman</h2>
    <p>YEOMAN implementa el modelo vista controlador en la creación de un proyecto para cualquier tipo de aplicación sin importan el tipo de lenguaje que se utilice permitiendo un comienzo rápido si es que se trata de un nuevo y en los existentes permite su agilización.</p>
    <H2>Generadores</H2>
    <p>Los generadores son complementos del entorno de YEOMAN y actualmente existen muchos a disposición del publico o se puede optar por la creación de uno el cual se adapte a un flujo de trabajo en específico.</p>
    <p>YEOMAN permite en general:</p>
    <ul>
        <li>
            <p>Crear rápidamente un nuevo proyecto.</p>
        </li>
        <li>
            <p>Cree nuevas secciones de un proyecto, como un nuevo controlador con pruebas unitarias.</p>
        </li>
        <li>
            <p>Crear módulos o paquetes.</p>
        </li>
        <li>
            <p>Puesta en marcha de nuevos servicios.</p>
        </li>
        <li>
            <p>Cumplimiento de estándares, mejores prácticas y guías de estilo.</p>
        </li>
        <li>
            <p>Promocione nuevos proyectos al permitir que los usuarios comiencen con una aplicación de muestra.</p>
        </li>
    </ul>
</section>
@endsection