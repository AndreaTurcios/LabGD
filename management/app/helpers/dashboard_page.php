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
            <link rel="stylesheet" href="resources/css/bootstrap/bootstrap.min.css">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
            <!-- Agregamos LibroCSS -->
            <link rel="stylesheet" href="resources/css/style.css">
            <link rel="stylesheet" href="resources/css/vanilla-dataTables.min.css">
            <title>LaptopsG&D - ' . $title . '</title>
            <link rel="shortcut icon" href="resources/img/favicon.ico" type="image/x-icon">
        </head>
        <body>  
    ');
    $filename = basename($_SERVER['PHP_SELF']);
      print('
  <nav>
          <div class="menu">
              <ul>
                   <li><a href="../management/control.php"><img src="resources/img/favicon.ico" width="65" height="60" class="top-center"></a></li>
              </ul>
          </div>
      </nav>
      <div class="css-xfq28i"></div>
      <br> '
      );
    }
  


  public static function footerTemplate($controller)
  {
    $scripts = ('
         <!-- Script de Fontawesome -->
         <script src="https://kit.fontawesome.com/592eb2e9e3.js" crossorigin="anonymous"></script>
         <!-- Script de Bootstrap -->
         <script type="text/javascript" src="resources/js/autocomplete.js"></script>
         <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
         <script type="text/javascript" src="resources/js/vanilla-dataTables.min.js"></script>
         <script type="text/javascript" src="resources/js/sweetalert.min.js"></script>
         <script type="text/javascript" src="app/helpers/components.js"></script>
         <script type="text/javascript" src="app/controllers/' . $controller . '"></script>
            ');

    print('
        <hr />
        <div class="css-xfq28i"></div>
        <footer class="site-footer">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-6">
              <h6>Sobre nosotros</h6>
              <p class="text-justify">Laptops G&D</p>
            </div>

      <div class="col-xs-6 col-md-3">
        <h6>CONTACTO</h6>
        <ul class="footer-links">
          <li><a href="">Contactanos</a></li>
        </ul>
      </div>
    </div>
    <hr>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-sm-6 col-xs-12">
        <script type="text/javascript">
          copyright = new Date();
          update = copyright.getFullYear();
          document.write("Todos los derechos reservados " + "© 2022 - " + update + " " + "LaptopsG&D  | Developer"); 
        </script>
        <a href="https://github.com/AndreaTurcios">Andrea Turcios</a>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-12">
        <ul class="social-icons">
          <li><a class="facebook" href="https://www.facebook.com/andreaaturcios/"><i class="fa fa-facebook"></i></a></li>
          <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a class="linkedin" href="https://sv.linkedin.com/in/andrea-turcios-bb8932219"><i class="fa fa-linkedin"></i></a></li>   
        </ul>
      </div>
    </div>
  </div>
</footer>
' . $scripts . '
</form>
</body>
</html>');
  }
}