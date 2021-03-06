<!DOCTYPE html>
<html lang="es">

  <?php
  session_start();
  if(!isset($_SESSION["correoLogin"])){

      header("location:iniciodesesion.php");
      
  }
?>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="estilos.css" />
    <link
      rel="shortcut icon"
      href="img/manzana_animado.png"
      type="image/x-icon"
    />
    <title>Healthy home</title>
  </head>
  <header class="header">
    <nav class="menu"> 
      <ul>
        <li><img src="img/icono.png" class="logo" /></li>
        <li> <a> BIENVENIDO
         <?php

  echo $nombre=$_SESSION['correoLogin'];

?> </a> </li>
        <li><a href="Cerrar_sesion.php">Cerrar_sesion</a></li>
      </ul>
    </nav>
  </header>
  <body>
   

    <div class="portada">
      <div class="portada_cont">
        <div class="portada_info">
          <p><b>¡Gestiona tu peso y comidas!</b></p>
          <button OnClick="location.href='iniciodesesion.php'">
            Comienza ahora
          </button>
        </div>
        <img src="img/para portada.png" alt="" class="portada_img" />
      </div>
    </div>
    <div class="sist_alimenticio">
      <div class="sist alimenticio">
        <h1>Sistema alimenticio</h1>
        <p>
          Creado para que lleves un control de tus alimentos, comidas semanales
          y gastos
        </p>
      </div>
       <div class="cont_sist">
        <div class="cont_izq">
          <div
            class="opc_1 planificador"
            OnClick="location.href='calendario.php'"
          >
            <img src="img/planificador.png" alt="" />
            <p>Planificador de comidas semanales</p>
          </div>
          <div class="cont_colum">
            <div
              class="opc_1 inventario"
              OnClick="location.href='formulario_registro.php'"
            >
              <img src="img/inventario.png" alt="" />
              <p>Inventario</p>
            </div>
            <div
              class="opc_1 recomendaciones"
              OnClick="location.href='recomendaciones_recetas.html'"
            >
              <img src="img/recomendación_comidas.png" alt="" />
              <p>Recetas</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="sist_fisico">
      <div class="cont_sist">
        <div class="cont_izq">
          <div
            class="opc_3 tipodecuerpo"
            OnClick="location.href='tipodecuerpo.html'"
          >
            <img src="img/TipoCuerpo.png" alt="" />
            <p>¿Cuál es mi tipo de cuerpo?</p>
          </div>
          <div class="cont_colum">
            <div
              class="opc_2 recomendaciones"
              OnClick="location.href='recomendaciones.html'"
            >
              <img src="img/recomendación_ejercicios.png" alt="" />
              <p>Ejercicios</p>
            </div>
            <div
              class="opc_2 calculadora"
              OnClick="location.href='calculadoras.html'"
            >
              <img src="img/calculadora.png" alt="" />
              <p>Calculadoras</p>
            </div>
          </div>
        </div>
      </div>
      <div class="sist fisico">
        <h1>Sistema de salud física</h1>
        <p>Creado para la evaluación de tu estado físico actual</p>
      </div>
    </div>
    <section class="contenedor-sobre-nosotros">
      <!--Sección quienes somos uwu -->
      <h2>Acerca de nosotros</h2>
      <img src="img/portadaquienessomos.jpg" />
      <div class="contenido-texto">
        <p>
          Somos una plataforma orientada a tu salud fisica y alimenticia.
          Nuestra prioridad es brindar un estilo saludable a nuestros usuarios a
          través de nuestros servicios para ayudarte a cumplir tus metas, ven y
          comienza esta nueva etapa ... Sé parte de Healthy Home.
        </p>
      </div>
    </section>
    <section class="comentarios">
      <div class="contenedor">
        <div class="titulo_comentarios">
          <h2>Que dicen nuestros clientes</h2>
        </div>
        <div class="usuarios">
          <div class="usuario">
            <img src="img/usuario1.jpg" width="100" />
            <div class="contenido-texto-usuario">
              <h3>Lorena Gonzales</h3>
              <h4>Logré mejorar mis hábitos en la comida</h4>
              <p>
                Hace dos meses que empezó mi cambo, gracias a esta app pude
                tener los resultados que esperaba; el planificador de alimentos
                fue una herramienta muy útil
              </p>
            </div>
          </div>
          <div class="usuario">
            <img src="img/usuaria2.jpg" width="100" />
            <div class="contenido-texto-usuario">
              <h3>Claudia Jimenez</h3>
              <h4>Amo las rutinas de ejercicios</h4>
              <p>
                Cuando empecé a hacer ejercicio no sabía por donde comenzar,
                gracias a las rutinas de acuerdo a mi cuerpo, pude tonificar y
                mejorar mi figura. Súper recomendada 10/10.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div id="disqus_thread"></div>
    <script>
      /**
       *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
       *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
      /*
    var disqus_config = function () {
    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    */
      (function () {
        // DON'T EDIT BELOW THIS LINE
        var d = document,
          s = d.createElement("script");
        s.src = "https://healthyhome-2.disqus.com/embed.js";
        s.setAttribute("data-timestamp", +new Date());
        (d.head || d.body).appendChild(s);
      })();
    </script>
    <noscript
      >Please enable JavaScript to view the
      <a href="https://disqus.com/?ref_noscript"
        >comments powered by Disqus.</a
      ></noscript
    >
    <footer>
      <div class="contenedor-footer">
        <div class="content-foo">
          <h4>Celular</h4>
          <p>992963122</p>
        </div>
        <div class="content-foo">
          <h4>Email</h4>
          <p>healthyHome@gmail.com</p>
        </div>
        <div class="content-foo">
          <h4>Facebook</h4>
          <p>@HealthyHomeSalud</p>
        </div>
      </div>
      <h2 class="titulo-final">
        &copy; HealthyHome | Grupo 12-Calidad de Software
      </h2>
    </footer>
  </body>
</html>
