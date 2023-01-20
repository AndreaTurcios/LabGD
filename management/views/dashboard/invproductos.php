<?php
require_once('../../app/helpers/dashboard_page.php');
Dashboard_Page::headerTemplate('Productos');
?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center" id="Titulo1">
                <h1 class="center">Gestión de Inventario</h1>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 col-xxl-8 p-3">
            </div>
            <div class="col-6 col-xs-6 col-sm-6 col-md-2 col-lg-2 col-xl-2 col-xxl-2 p-3 text-center" id="MuestraBTN">
                <div class="form-group">
                </div>
            </div>

            <div class="col-6 col-xs-6 col-sm-6 col-md-2 col-lg-2 col-xl-2 col-xxl-2 p-3 text-center">
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#ModalAgregarProducto">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                        class="bi bi-plus" viewBox="0 0 16 16">
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
                            <th scope="col">N°</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Precio normal</th>
                            <th scope="col">Con descuento</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Imagen</th>
                            <th scope="col">Categoría</th>
                            <th scope="col">Controladores</th>
                        </tr>
                    </thead>
                    <tbody id="tbody-rows">
                    </tbody>
                </table>
            </div>

            <div class="row">
                <nav>
                    <div class="col-6 col-xs-6 col-sm-6 col-md-2 col-lg-2 col-xl-2 col-xxl-2 p-3" id="MuestraBTN">
                        <div id="ModalAgregarProducto" class="modal fade">
                            <div class="container-fluid">
                                <form method="post" id="save-form">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modal-title">Agregar producto</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>

                                            <div class="modal-body">
                                                <div class="container">
                                                    <div class="form-group">
                                                        <label for="serviciopro">Nombre</label>
                                                        <input type="text" class="form-control" id="serviciopro"
                                                            name="nombrepro" placeholder="Nombre producto"
                                                            pattern="[a-zA-ZñÑáÁéÉíÍóÓúÚ\s]{1,50}" required
                                                            maxlength="1" autocomplete="off" />
                                                    </div>
                                                    <br>
                                                    <div class="form-group">
                                                        <label for="descripcionpro">Descripcion</label>
                                                        <input type="text" class="form-control" id="descripcionpro"
                                                            name="descripcionpro" placeholder="Descripcion"
                                                            required
                                                            minlength="3" maxlength="50" autocomplete="off" />
                                                    </div>
                                                    <br>
                                                    <div class="form-group">
                                                        <label for="preciopro">Precio normal</label>
                                                        <input type="number" class="form-control" id="preciopro"
                                                            name="preciopro" placeholder="Precio"
                                                            pattern="[a-zA-ZñÑáÁéÉíÍóÓúÚ\s]{1,50}" required
                                                            minlength="3" maxlength="50" autocomplete="off" />
                                                    </div>
                                                    <br>
                                                    <div class="form-group">
                                                        <label for="preciodescuentopro">Precio con descuento</label>
                                                        <input type="number" class="form-control" id="preciodescuentopro"
                                                            name="preciodescuentopro" placeholder="Precio con descuento"
                                                           required
                                                            autocomplete="off" />
                                                    </div>
                                                    <br>
                                                    <div class="form-group">
                                                        <label for="cantidadpro">Cantidad</label>
                                                        <input type="number" class="form-control" id="cantidadpro"
                                                            name="cantidadpro" placeholder="Cantidad"
                                                        required
                                                            autocomplete="off" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="imagenpro">Imagen</label>
                                                        <input type="number" class="form-control" id="imagenpro"
                                                            name="imagenpro" placeholder="Imagen"
                                                        required
                                                            autocomplete="off" />
                                                    </div>
                                                    <br>
                                                    <div class="form-group">
                                                        <label for="categoriapro">Categoria</label>
                                                        <select id="categoriapro" class="form-select" name="categoriapro">
                                                            <option selected></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Cancelar</button>
                                                    <button type="submit" class="btn waves-effect blue tooltipped"
                                                        data-tooltip="Guardar">Guardar</button><br>
                                                </div>
                                </form>
                                </form>
                            </div>
                        </div>
                    </div>
            </div>
            </nav>
            <br>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal-title">Actualizar producto</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <!-- Partes del modal para hacer insert -->
                    <form id="update-form" method="post" enctype="multipart/form-data">
                        <div class="form-group ">
                            <label for="formGroupExampleInput" class="d-none">ID</label>
                            <input type="text" class="form-control d-none" placeholder=""
                                aria-describedby="basic-addon1" id="productoidac" type="text" name="productoidac" />
                        </div>
                        <div class="modal-body">
                            <form id="update-form" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                                        <label for="serviciopro">Nombre</label>
                                                        <input type="text" class="form-control" id="serviciopro"
                                                            name="nombrepro" placeholder="Nombre producto"
                                                            pattern="[a-zA-ZñÑáÁéÉíÍóÓúÚ\s]{1,50}" required
                                                            maxlength="1" autocomplete="off" />
                                                    </div>
                                                    <br>
                                                    <div class="form-group">
                                                        <label for="descripcionpro">Descripcion</label>
                                                        <input type="text" class="form-control" id="descripcionpro"
                                                            name="descripcionpro" placeholder="Descripcion"
                                                            required
                                                            minlength="3" maxlength="50" autocomplete="off" />
                                                    </div>
                                                    <br>
                                                    <div class="form-group">
                                                        <label for="preciopro">Precio normal</label>
                                                        <input type="number" class="form-control" id="preciopro"
                                                            name="preciopro" placeholder="Precio"
                                                            pattern="[a-zA-ZñÑáÁéÉíÍóÓúÚ\s]{1,50}" required
                                                            minlength="3" maxlength="50" autocomplete="off" />
                                                    </div>
                                                    <br>
                                                    <div class="form-group">
                                                        <label for="preciodescuentopro">Precio con descuento</label>
                                                        <input type="number" class="form-control" id="preciodescuentopro"
                                                            name="preciodescuentopro" placeholder="Precio con descuento"
                                                           required
                                                            autocomplete="off" />
                                                    </div>
                                                    <br>
                                                    <div class="form-group">
                                                        <label for="cantidadpro">Cantidad</label>
                                                        <input type="number" class="form-control" id="cantidadpro"
                                                            name="cantidadpro" placeholder="Cantidad"
                                                        required
                                                            autocomplete="off" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="imagenpro">Imagen</label>
                                                        <input type="number" class="form-control" id="imagenpro"
                                                            name="imagenpro" placeholder="Imagen"
                                                        required
                                                            autocomplete="off" />
                                                    </div>
                                                    <br>
                                                    <div class="form-group">
                                                        <label for="categoriapro">Categoria</label>
                                                        <select id="categoriapro" class="form-select" name="categoriapro">
                                                            <option selected></option>
                                                        </select>
                                                    </div>
                        <br>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn waves-effect blue tooltipped"
                                data-tooltip="Guardar">Guardar</button><br>
                        </div>
                    </form>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>


<?php
Dashboard_Page::footerTemplate('productos.js');
?>