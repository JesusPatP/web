<?php
$title = 'Users';
$page = 'users';
require_once("c://xampp/htdocs/tech_department/view/dashboard/dashboard.php");
if (empty($_SESSION['user'])) {
    header("Location:/tech_department/index.php");
}
?>

<!-- Bootstrap CSS -->
<!--<link rel="stylesheet" href="/tech_department/assets/bootstrap/dist/css/bootstrap.min.css">-->

<!-- CSS personalizado -->
<link rel="stylesheet" href="/tech_department/assets/css/tables.css">


<!--datables CSS básico-->
<link rel="stylesheet" type="text/css" href="/tech_department/assets/datatables/datatables.min.css" />
<!--datables estilo bootstrap 4 CSS-->
<link rel="stylesheet" type="text/css" href="/tech_department/assets/datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!--Important-->
<div class="container-fluid px-4 page-main" id="contenido">
    <div class="btn-container">
        <div class="row">
            <div class="col-lg-12">
                <button id="btnNuevo" type="button" class="btn btn-info" data-toggle="modal"><i class="material-icons">library_add</i></button>
            </div>
        </div>
    </div>
    <br>

    <div class="caja">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table id="tablaUsuarios" class="table table-striped table-bordered table-condensed" style="width:100%">
                        <thead class="text-center">
                            <tr>
                                <th>Id</th>
                                <th>userName</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <!-- ModalCrud -->
    <div class="modal" id="modalCRUD" tabindex="-1" aria-labelledby="modalCRUD" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalCRUD">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="formUsuarios">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="" class="col-form-label">User Name</label>
                                        <input type="text" class="form-control" id="username">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="" class="col-form-label">Email</label>
                                        <input type="text" class="form-control" id="email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="" class="col-form-label">Password</label>
                                        <input type="text" class="form-control" id="password">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" id="btnGuardar" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>

<!--Modal para CRUD-->
<!--
<div class="modal fade" id="modalCRUD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="formUsuarios">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="" class="col-form-label">User Name</label>
                                    <input type="text" class="form-control" id="username">
                                </div>
                            </div> 
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="" class="col-form-label">Email</label>
                                    <input type="text" class="form-control" id="email">
                                </div>
                            </div> 
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="" class="col-form-label"></label>
                                    <input type="text" class="form-control" id="password">
                                </div>
                            </div> 
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                        <button type="submit" id="btnGuardar" class="btn btn-dark">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
-->

<!-- jQuery, Popper.js, Bootstrap JS -->
<script src="/tech_department/assets/jquery/jquery-3.3.1.min.js"></script>
<script src="/tech_department/assets/popper/popper.min.js"></script>
<script src="/tech_department/assets/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- datatables JS -->
<script type="text/javascript" src="/tech_department/assets/datatables/datatables.min.js"></script>

<script type="text/javascript" src="/tech_department/assets/js/users_table.js"></script>


<?php
include_once('c://xampp/htdocs/tech_department/dirs.php');
include(DASHBOARD_FOOTER_PATH);
?>