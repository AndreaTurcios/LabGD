<?php
require_once('../../app/helpers/dashboard_page.php');
Dashboard_Page::headerTemplate('Subgrupos');
?>
<body>
  <div class="container">
    <br>
    <div class="row">
      <div class="col-12 text-center" id="Titulo1">
        <h1>Gestión subgrupos</h1>
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
          <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#ModalAgregarSubgrupo">
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

    <div class="mx-auto" class="col-sm-12 col-md-12 col-lg-12 col-xl-8 offset-xl-1">
      <div class="row">
        <div class="container-fluid">
          <div class="col-6 col-xs-6 col-sm-6 col-md-2 col-lg-2 col-xl-2 col-xxl-2 p-3 text-center" id="MuestraBTN">

            <div id="ModalAgregarSubgrupo" class="modal fade">
              <div class="container-fluid">
                <form method="post" id="save-form">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">

                        <h5 class="modal-title" id="exampleModalLabel">Agregar subgrupo</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <div class="container">
                          <div class="row">
                            <form id="save-form" method="post" enctype="multipart/form-data">
                              <div class="form-group ">
                                <label for="nombresub">Nombre:</label>
                                <input type="text" class="form-control" id="nombresub" name="nombresub" autocomplete="off"
                                  placeholder="Nombre">
                              </div>
                              <div class="form-group">
                                <label for="codigosub">Codigo:</label>
                                <input type="text" class="form-control" id="codigosub" autocomplete="off"
                                  name="codigosub" placeholder="Codigo">
                              </div>
                              <div class="form-group">
                                <label>Grupo: </label>
                                <select id="grupo_f" name="grupo_f" class="form-select">
                                  <option selected></option>
                                </select>
                              </div>
                              <br>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                  data-bs-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn waves-effect blue tooltipped"
                                  data-tooltip="Guardar">Guardar</button><br>
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
      </div>
    </div>
  </div>
  </nav>

  <div class="row">
    <div class="table-responsive" class="col scroll">
      <table id="data-table" class="table table-bordered text-center">
        <thead class="table-info">
          <tr>
            <th scope="col">Codigo</th>
            <th scope="col">Nombre Subgrupo</th>
            <th scope="col">Nombre del grupo</th>
            <th scope="col">Controladores</th>
          </tr>
        </thead>
        <tbody id="tbody-rows">
      </table>
    </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal-title">Actualizar Subgrupo</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form id="update-form" method="post" enctype="multipart/form-data">
          <div class="form-group d-none">
            <label for="formGroupExampleInput">ID:</label>
            <input type="text" class="form-control " placeholder="" aria-label="Buscar" aria-describedby="basic-addon1"
              id="idsubg2" type="text" name="idsubg2" class="validate" required>
          </div>
          <div class="modal-body text-center">
            <div class="form-group">
              <label for="nombreac">Nombre:</label>
              <input type="text" class="form-control" id="nombreac" name="nombreac" placeholder="Nombre">
            </div>
             <div class="form-group">
            <label for="codigoac">Codigo:</label>
              <input type="text" class="form-control" id="codigoac" name="codigoac" placeholder="Codigo">
              </select>
            </div>
            <div class="input-field col s12 m6">
              <label>Grupo: </label>
              <select id="grupoac" name="grupoac" class="form-select">
                <option selected></option>
              </select>
            </div>
            <br>
            <div class="form-group">
              <div class="input-field col s12 m6">
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" data-tooltip="Actualizar" class="btn btn-primary">Guardar Cambios</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  </form>
</body>

<?php
Dashboard_Page::footerTemplate('subgrupo.js');
?>