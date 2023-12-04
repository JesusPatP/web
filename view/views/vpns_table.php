<?php
$title = 'Vpns';
$page = 'vpns';
//include (dirname(__DIR__, 2).'/config/db.php');
require_once(dirname(__DIR__, 2) . "/view/dashboard/dashboard.php");
if (empty($_SESSION['user'])) {
    header("Location:../../index.php");
}
?>

<!--Important-->
<div class="container-fluid px-4 page-main" id="contenido">
    <div class="btn-container">
        <div class="row">
            <div class="col-lg-12">
                <button id="btnNew" type="button" class="btn btn-info" data-toggle="modal"><i class="material-icons">library_add</i></button>
            </div>
        </div>
    </div>
    <br>

    <div class="caja">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table id="vpnsTable" class="table table-striped table-bordered table-condensed" style="width:100%">
                        <thead class="text-center">
                            <tr>
                                <th>Vpn_Id</th>
                                <th>Expiry_Date</th>
                                <th>Key</th>
                                <th>Password</th>
                                <th>Email</th>
                                <th>options</th>
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
                    <form id="vpnsForm">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="email" class="col-form-label">Email</label>
                                        <input type="email" class="form-control" id="email" placeholder="you@example.com" required>
                                        <div class="invalid-feedback">
                                            Please insert a valid Email.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="password" class="col-form-label">Password</label>
                                        <input type="text" class="form-control" id="password" required>
                                        <div class="invalid-feedback">
                                            Please insert a valid Password.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="key" class="col-form-label">Key</label>
                                        <input type="text" class="form-control" id="key" required>
                                        <div class="invalid-feedback">
                                            Please insert a valid Key.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="expiryDate" class="col-form-label">Expiry Date</label>
                                        <input type="text" class="form-control" id="expiryDate" placeholder="YYYY-MM-DD"required>
                                        <div class="invalid-feedback">
                                            Please insert a valid Expiry Date.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" id="btnSave" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- ModalCrud -->

</div>


<?php
include_once(dirname(__DIR__, 2) . "/view/dashboard/footer.php");
?>

<!-- EmployeesTable -->
<script type="text/javascript" src="../../assets/js/vpns_table.js"></script>