<?php
require_once("../../app/helpers/dashboard_page.php");
Dashboard_Page::headerTemplate('Grupos');
?>
<section>
  <br>
  <div class="container">
    <div class="row">
      <div class="col-12 text-center" id="Titulo1">
        <h1 class="center">Gestión de grupos</h1>
      </div>
    </div>
    <br>
    <div class="row">
      <nav class="navbar navbar-light bg-light">
        <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 col-xxl-8 p-3">
        </div>
        <div class="col-6 col-xs-6 col-sm-6 col-md-2 col-lg-2 col-xl-2 col-xxl-2 p-3 text-center" id="MuestraBTN">
        </div>
        <div class="col-6 col-xs-6 col-sm-6 col-md-2 col-lg-2 col-xl-2 col-xxl-2 p-3 text-center">
          <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#ModalAgregarGrupo">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus"
              viewBox="0 0 16 16">
              <path   
                d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
            </svg>  
            Agregar     
          </button>
        </div>
    </div>
    </nav>
    <br>
    <div class="row">
      <div class="table-responsive" class="col scroll">
        <table id="data-table" class="table table-bordered">
          <thead class="table-info">
            <tr>
              <th scope="col">Código</th>
              <th scope="col">Nombre</th>
              <th scope="col">Controlador</th>
            </tr>
          </thead>
          <tbody id="tbody-rows">
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-6 col-xs-6 col-sm-6 col-md-2 col-lg-2 col-xl-2 col-xxl-2 p-3 text-center" id="MuestraBTN">
      <div id="ModalAgregarGrupo" class="modal fade">
        <div class="container-fluid">
          <form method="post" id="save-form">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Agregar grupo</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="container">
                    <div class="row">
                      <form id="save-form" method="post" enctype="multipart/form-data">
                        <div class="form-group ">
                          <label for="codigo">Código:</label>
                          <input type="text" autocomplete="off" class="form-control" id="codigo" name="codigo"
                            placeholder="Codigo">
                        </div>
                        <div class="form-group">
                          <label for="nombre">Nombre:</label>
                          <textarea class="form-control" id="nombre" autocomplete="off" name="nombre" placeholder="Nombre"
                            rows="3"></textarea>
                        </div>
                        <br>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                          <button type="submit" class="btn btn-success">Guardar</button><br>
                          <hr>
                          <br>
                          <hr>
                        </div>
                    </div>
                  </div>
                </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <br>
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Actualizar grupo</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form id="update-form" method="post" enctype="multipart/form-data">
          <div class="form-group d-none">
            <label for="formGroupExampleInput">ID:</label>
            <input type="text" class="form-control " placeholder="" aria-label="Buscar" aria-describedby="basic-addon1"
              id="grupoidac" type="text" name="grupoidac" class="validate" required>
          </div>
          <div class="modal-body">
            <div class="container">
              <div class="row">
                <div class="form-group ">
                  <label for="codigo_ac">Codigo:</label>
                  <input type="text" class="form-control" autocomplete="off" id="codigo_ac" name="codigo_ac"
                    placeholder="Codigo">
                </div>
                <div class="form-group">
                  <label for="nombre_ac">Nombre:</label>
                  <textarea class="form-control" autocomplete="off" id="nombre_ac" name="nombre_ac" placeholder="Nombre"
                    rows="3"></textarea>
                </div>
                <br>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                  <button type="submit" class="btn btn-success">Guardar</button><br>
                  <hr>
                  <br>
                  <hr>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  </div>
</section>

<?php
Dashboard_Page::footerTemplate('grupos.js');
?>