@extends('template.vistas')
@section('content')
<div id="main">
    <!-- Post -->
    <article class="post">
        <header>
            <div class="title">
                <h2><a href="single.html">Generadores</a></h2>
                <p>Los generadores son los componentes básicos del ecosistema Yeoman. Son los complementos que se ejecutan <code>yo</code> para generar archivos para los usuarios finales.</p>
            </div>
        </header>
        <center><a lass="image featured"><img src="https://yeoman.io/static/illustration-home-inverted.91b07808be.png" alt="" width="800" height="380"/></a></center>
        <h3>Configuración como un módulo de nodo</h3>
        <p>Un generador es, en esencia, un módulo de Node.js.</p>
        <p>Primero, cree una carpeta dentro de la cual escribirá su generador. Esta carpeta debe tener un nombre <code>generator-name</code>.</p>
        <p>Después se cree un <code>package.json</code> archivo. Este archivo es un manifiesto de módulo de Node.js. Puede generar este archivo ejecutándolo <code>npm init</code>desde su línea de comando o ingresando:</p>
        <pre><code>{
  "name": "generator-name",
  "version": "0.1.0",
  "description": "",
  "files": [
    "generators"
  ],
  "keywords": ["yeoman-generator"],
  "dependencies": {
    "yeoman-generator": "^1.0.0"
  }
}
</code></pre>
        <p>La propiedad <code>name</code> debe tener el prefijo <code>generator</code>. La <code>keywords</code> propiedad debe contener <code>"yeoman-generator"</code> y el repositorio debe tener una descripción para ser indexado por nuestra página de generadores.</p>
        <p>Debe asegurarse de configurar la última versión de <code>yeoman-generator</code> como una dependencia: <code> npm install --save yeoman-generator</code>.</p>
        <p>La propiedad <code>files</code> debe ser una matriz de archivos y directorios que utilice su generador.</p>
    </article>
</div>

<div id="main">
    <!-- Post -->
    <article class="post">
        <header>
            <div class="title">
                <h2><a href="single.html">árbol de carpetas</a></h2>
                <p>La funcionalidad de Yeoman depende de cómo estructure su árbol de directorios. Cada subgenerador está contenido en su propia carpeta.</p>
            </div>
        </header>
        <center><a lass="image featured"><img src="https://programmaticponderings.files.wordpress.com/2015/11/article-background.jpg?w=620" alt="" /></a></center>
        <p>El generador predeterminado que se utiliza cuando llama <code>yo name</code> es el generador <code>app</code>. Esto debe estar contenido dentro del <code>app/</code> directorio.</p>
        <p>Los subgeneradores, que se utilizan cuando llama a <code>yo name:subcommand</code>, se almacenan en carpetas con el mismo nombre que el subcomando.</p>
        <pre><code>
├───package.json
└───generators/
    ├───app/
        │   └───index.js
    └───router/
        └───index.js

        </code></pre>
        <p>Este generador expondrá <code>yo name</code> y <code>yo name:router</code></p>
        <p>Yeoman permite dos estructuras de directorios diferentes. Buscará dentro <code>./</code> y dentro <code>generators/</code> para registrar los generadores disponibles.</p>
        <pre><code>
├───package.json
├───app/
│   └───index.js
└───router/
    └───index.js
        </code></pre>
        <p>Si usa esta segunda estructura de directorios, asegúrese de señalar la <code>files</code> propiedad en <code>package.json</code> todas las carpetas del generador.</p>
        <pre><code>
{
  "files": [
    "app",
    "router"
  ]
}
        </code></pre>        
    </article>
</div>

<div id="main">
    <!-- Post -->
    <article class="post">
        <header>
            <div class="title">
                <h2><a href="single.html">Generador extensible</a></h2> 
                <p>Una vez que tenga esta estructura en su lugar, es hora de escribir el generador real.</p> 
                <p>Yeoman ofrece un generador base que puede ampliar para implementar su propio comportamiento. Este generador base agregará la mayoría de las funcionalidades que esperaría para facilitar su tarea.</p>              
            </div>
        </header>
        <a lass="image featured"><img src="https://miro.medium.com/max/868/1*jNKM7eY8-6QACjvjXiAOpg.png" alt="" /></a>
        <p>En el archivo index.js del generador, así es como se extiende el generador base:</p>
        <pre><code>
var Generator = require('yeoman-generator');

module.exports = class extends Generator {};
        </code></pre>
        <p>Asignamos el generador extendido a <code>module.exports</code> para que esté disponible para el ecosistema. Así es como exportamos módulos en Node.js.</p>
        <h3>Sobrescribiendo el constructor</h3>
        <p>Algunos métodos generadores solo se pueden llamar dentro de la <code>constructor</code> función. Estos métodos especiales pueden hacer cosas como configurar controles de estado importantes y pueden no funcionar fuera del constructor.</p>
        <p>Para anular el constructor del generador, agregue un método constructor como este:</p>   
        <pre><code>
module.exports = class extends Generator {
  // The name `constructor` is important here
  constructor(args, opts) {
    // Calling the super constructor is important so our generator is correctly set up
    super(args, opts);

    // Next, add your custom code
    this.option('babel'); // This method adds support for a `--babel` flag
  }
};
        </code></pre>  
        <h3>Agregar su propia funcionalidad</h3>   
        <p>Cada método agregado al prototipo se ejecuta una vez que se llama al generador, y generalmente en secuencia. Pero, como veremos en la siguiente sección, algunos nombres de métodos especiales activarán un orden de ejecución específico.</p>
        <p>Agreguemos algunos métodos:</p>
        <pre><code>
module.exports = class extends Generator {
  method1() {
    this.log('method 1 just ran');
  }

  method2() {
    this.log('method 2 just ran');
  }
};
        </code></pre>
        <p>Cuando ejecutemos el generador más tarde, verá estas líneas registradas en la consola.</p>
    </article>
</div>

<div id="main">
    <!-- Post -->
    <article class="post">
        <header>
            <div class="title">
                <h2><a href="single.html">Ejecutando el generador</a></h2>
                <p>Dado que está desarrollando el generador localmente, aún no está disponible como módulo global de npm. Se puede crear un módulo global y vincularlo a uno local, usando npm. Esto es lo que querrás hacer:</p>
            </div>
        </header>
        <center><a lass="image featured"><img src="http://2.bp.blogspot.com/-6Ce7-7HfJig/Uin42Qv3R4I/AAAAAAAACOY/zBsg_qn-bsM/s1600/toolset.png" alt="" width="800" height="340"/></a></center>
        <p>En la línea de comando, desde la raíz de su proyecto generador (en la <code>generator-name/</code> carpeta), escriba:</p>
        <pre><code>npm link</code></pre>
        <p>Eso instalará las dependencias de su proyecto y vinculará un módulo global a su archivo local. Una vez que finalice npm, podrá llamar <code>yo name</code> y debería ver el <code>this.log</code>, definido anteriormente, representado en la terminal.</p>
        <h3>Encontrar la raíz del proyecto</h3>
        <p>Mientras ejecuta un generador, Yeoman intentará resolver algunas cosas en función del contexto de la carpeta desde la que se ejecuta.</p>
        <p>Lo más importante es que Yeoman busca un<code>.yo-rc.json</code> archivo en el árbol de directorios. Si lo encuentra, considera la ubicación del archivo como la raíz del proyecto. Detrás de escena, Yeoman cambiará el directorio actual a la <code>.yo-rc.json</code> ubicación del archivo y ejecutará el generador solicitado allí.</p>
        <p>El módulo de almacenamiento crea el <code>.yo-rc.json</code> archivo. Llamar <code>this.config.save()</code> desde un generador por primera vez creará el archivo.</p>
        <p>Entonces, si su generador no se está ejecutando en su directorio de trabajo actual, asegúrese de no tener un <code>.yo-rc.json</code> lugar arriba en el árbol de directorios.</p>
    </article>
</div>
@endsection
