  <?php

  /*
  echo "<pre>";
  print_r($_POST);
  echo "</pre>";
  */

  if ( isset($_POST['peso']) && isset($_POST['altura']) && is_numeric($_POST['peso']) && is_numeric($_POST['altura'])) {

    $peso = $_POST['peso'];
    $altura = $_POST['altura'];

    //echo $peso + $altura;
    $imc = $peso / ($altura*$altura);
    $imc = round($imc,1);//poner los decimales que queramos



    if ($imc<18.5) {
      $resultado = "  Peso inferior al normal";
      $color="red";
    }


    if ($imc >= 18.5 && $imc < 24.9) {
      $resultado = "  Normal";
      $color="green";
    }


    if ($imc >= 24.9 && $imc < 29.9) {
      $resultado = "  Peso superior al normal";
      $color="pink";
    }

    if ($imc>30) {
      $resultado = "  Obesidad";
      $color="orange";
    }
  //  echo round($imc,1);//funcion para decirle decimales queremos yeea

  }

  /*
  echo "El numero 1 es: ".$peso;
  //echo "<br>";
  echo "El numero 2 es: ".$altura;
  */


   ?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Calcula tu IMC</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
  </head>
  <body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <div class="container px-4">
        <a class="navbar-brand" href="#page-top">Calculadora IMC</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
            <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
            <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header-->
    <header class="bg-primary bg-gradient text-white">
      <div class="container px-4 text-center">
        <h1 class="fw-bolder">Bienvenidos a calculadora IMC</h1>
        <p class="lead">No es belleza es salud</p>
        <a class="btn btn-lg btn-light" href="#about">Ver resultdo IMC!</a>
      </div>
    </header>
    <!-- About section-->
    <section id="about">
      <div class="container px-4">
        <div class="row gx-4 justify-content-center">


          <div class="col-lg-8">

            <header class="bg-dark py-5">
              <div class="container px-5">
                <div class="row gx-5 align-items-center justify-content-center">
                  <div class="col-lg-8 col-xl-7 col-xxl-6">
                    <div class="my-5 text-center text-xl-start">
                      <h1 class="display-5 fw-bolder text-white mb-2">Calcula tu IMC</h1>
                      <p class="lead fw-normal text-white-50 mb-4">No es belleza es SALUD!</p>

                        <div class="row">


                          <div class="col-lg-6">
                            <form class="" action="index.php" method="POST">
                              <br><br><br>
                              Peso (KG) -> <input type="number" step=".01" name="peso" value="" placeholder=" Peso kilogramos" required><br><br>
                              Altura (M) -> <input type="number" step=".01" name="altura" value="" placeholder="Altura en Metros" required>
                              <br><br><br>
                              <input class="btn btn-primary btn-lg px-4 me-sm-3" type="submit" name="" value="CALCULAR">
                              <input class="btn btn-outline-light btn-lg px-4" type="submit" name="" value="CALCULAR">
                            </form>
                          </div>


                          <div class="col-lg-6">
                            <?php if (isset($imc)) { ?>
                              <?php echo "Tu I.M.C es de -> ".$imc; ?>
                                <br>
                                <div style="color:<?php echo $color;?>" >Resultado: <?php echo $resultado; ?></div>
                            <?php } ?>
                          </div>
                        </div>




                      <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">


                      </div>
                    </div>
                  </div>
                  <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="imagenes/F100029916.jpg" alt="..."></div>
                </div>
              </div>
            </header>

          </div>


        </div>


      </div>
    </section>
    <!-- Services section-->
    <section class="bg-light" id="services">
      <div class="container px-4">
        <div class="row gx-4 justify-content-center">
          <div class="col-lg-8">
            <h2>Services we offer</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut optio velit inventore, expedita quo laboriosam possimus ea consequatur vitae, doloribus consequuntur ex. Nemo assumenda laborum vel, labore ut velit dignissimos.</p>
          </div>
        </div>
      </div>
    </section>
    <!-- Contact section-->
    <section id="contact">
      <div class="container px-4">
        <div class="row gx-4 justify-content-center">
          <div class="col-lg-8">
            <h2>Contact us</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero odio fugiat voluptatem dolor, provident officiis, id iusto! Obcaecati incidunt, qui nihil beatae magnam et repudiandae ipsa exercitationem, in, quo totam.</p>
          </div>
        </div>
      </div>
    </section>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
      <div class="container px-4"><p class="m-0 text-center text-white">Consulta mas informacion en
        <a href="">Clinica Salud</a>
      </p></div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
  </body>
  </html>
