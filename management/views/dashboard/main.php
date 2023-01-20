<?php
require_once('../../app/helpers/dashboard_page.php');
Dashboard_Page::headerTemplate('Home');
?>
<div class="animated bounceInUp">
<!-- Se muestra un saludo de acuerdo con la hora -->
<div class="col-12 text-center" id="Titulo2">
    <a id="fontmain"><h4 class="text-center blue-text" id="greeting"></h4></a>    
</div>
<br>
<main>
        <Section>
        <div class="row">   
            <a id="fontmain"><h4 class="text-center blue-text">Bienvenido a los mantenimientos</h4></a>           
        </div>
        </Section>
</main>

<script type="text/javascript" src="../../app/controllers/index.js"></script>
    
<?php
Dashboard_Page::footerTemplate('index.js');
?>