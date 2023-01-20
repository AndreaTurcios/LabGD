<?php
class Dashboard_Page
{
    public static function headerTemplate($title)
    {
        print('
            <!DOCTYPE html>
            <html lang="es">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <!-- Agregamos Bootstrap -->
                <link rel="stylesheet" href="../../resources/css/bootstrap/bootstrap.min.css">
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
                <!-- Agregamos LibroCSS -->
                <link rel="stylesheet" href="../../resources/css/Estilos/style.css">
                <link rel="stylesheet" href="../../resources/css/Estilos/login.css">
                <link rel="stylesheet" href="../../resources/css/vanilla-dataTables.min.css">
                <title>LaptopsG&D - '. $title. '</title>
                <link rel="shortcut icon" href="../../resources/img/logos/logo.ico" type="image/x-icon">
            </head>
            <body>  
                    <header>
                      <div class="container-fluid">
                      <div class="row ">
                        <nav class="nav">
                          <!-- Columna Logo -->                	
                            <div class="col-11 col-xs-11 col-sm-11 d-lg-none text-center">
                              <a href="main.php"><img src="../../resources/img/logos/iconPNG.png" class="img-fluid" alt=""></a>
                            </div>
                          <!-- Columna Logo pero para mobile -->
                          <div class="col-10 d-none d-lg-block " id="SeccionImagen">
                            <a href="main.php"><img src="../../resources/img/logos/iconPNG.png" class="img-fluid" alt=""></a>
                          </div>
                         
                        </nav>
                      </div>
                    </div>
                    <div class="container-fluid " id="BarraNav">
                      <div class="row">
                        <nav class="navbar navbar-expand-lg navbar-light SecBarra">
                          <div class="container-fluid">
                            <!-- Parte del NAVBAR MOBILE -->
                            <a class="navbar-brand d-lg-none" href="#">Navegación</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="col-12 d-lg-none">
                              <div class="collapse navbar-collapse " id="navbarNav">
                                <ul class="navbar-nav  ">
                                  <!-- Opciones -->
                                  <li class="nav-item">
                                    <a class="nav-link" href="invproductos.php">PRODUCTOS</a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                              <!-- Navbar Normal -->
                            <div class="col-12 d-none d-lg-block MenuSec">
                              <ul class="nav justify-content-center">
                                <li class="nav-item p-1">
                                  <button type="button" class="btn botonAnim"><i class="fas fa-truck-moving"></i><a href="invproductos.php" id="fontmen"> PRODUCTOS</a></button>
                                </li>
                                <li>
                              </ul>
                            </div>
                          </div>
                      </div>
                      </nav>
                    </div>
                    </div>
                  </header>
                  <main>
                ');
                           
    }
  

    public static function footerTemplate($controller)
    {
            $scripts = '
            <!-- Script de Fontawesome -->
            <script src="https://kit.fontawesome.com/592eb2e9e3.js" crossorigin="anonymous"></script>
            <script type="text/javascript" src="../../resources/js/vanilla-dataTables.min.js"></script>
            <script type="text/javascript" src="../../resources/js/autocomplete.js"></script>
            <!-- Script de Bootstrap -->
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
            <script type="text/javascript" src="../../resources/js/sweetalert.min.js"></script>
            <script type="text/javascript" src="../../app/helpers/components.js"></script>
            <script type="text/javascript" src="../../app/controllers/' . $controller . '"></script>

            ';
        
        print('
        <footer>
            <!-- Derechos Reservados -->
            <div class="text-center p-3" id="ptDerechos">
                <script type="text/javascript">
                  copyright = new Date();
                  update = copyright.getFullYear();
                  document.write("Todos los derechos reservados " + "© 2022 - " + update + " " + "| LaptopsG&D  | Developer"); 
                </script>
                <a href="https://github.com/AndreaTurcios">Andrea Turcios</a>
            </div>
        </footer>
        <!-- Agregamos SCRIPTS -->
                    ' . $scripts . '
            </body>
        </html>
        ');
    }    
}