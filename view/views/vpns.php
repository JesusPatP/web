<?php
$title = 'Vpns';
$page = 'vpns';
require_once(dirname(__DIR__, 2) . "/view/dashboard/dashboard.php");
if (empty($_SESSION['user'])) {
  header("Location:../../index.php");
}
?>

<!--ID-->
<div class="container">
  <!--Principal-->

  <!--Vpn information-->
  <!-- Form -->
  <form class="needs-validation" id="vpnForm" novalidate>
    <div class="row g-3">

      <div class="row g-1">
        <div class="col-sm-1">
          <button id="vpnForm_btn" type="button" class="btn btn-info" data-toggle="modal"><i class="material-icons">library_add</i></button>
        </div>
        <h2 class="col-sm-2">VPN</h4>
          <h2 class="vpn-id col-sm-1">1</h4>
      </div>

      <hr class="my-4">
      <div class="col-sm-5">
        <label for="vpnForm_password" class="form-label">Password</label>
        <input type="text" class="form-control" id="vpnForm_password" placeholder="" value="" required readonly>
        <div class="invalid-feedback">
          Valid Phone Password is required.
        </div>

      </div>

      <div class="col-sm-7">
        <label for="vpnForm_expiryDate" class="form-label">Expiry Date</label>
        <input type="text" class="form-control" id="vpnForm_expiryDate" placeholder="" value="" required readonly>
        <div class="invalid-feedback">
          Valid Expiry Date is required.
        </div>
      </div>
      <div class="col-12">
        <label for="vpnForm_key" class="form-label">Key</label>
        <input type="text" class="form-control" id="vpnForm_key" placeholder="" required readonly>
        <div class="invalid-feedback">
          Please enter a valid Key.
        </div>
      </div>
      <div class="col-12">
        <label for="vpnForm_email" class="form-label">Email</label>
        <input type="email" class="form-control" id="vpnForm_email" placeholder="you@example.com" required readonly>
        <div class="invalid-feedback">
          Please enter a valid email.
        </div>
      </div>
    </div>
  </form>

  <!--Users-->
  <div class="row g-3 divider">
    <div class="row g-1">
      <div class="col-sm-1">
        <button id="usersVpnForm_btn" type="button" class="btn btn-info" data-toggle="modal"><i class="material-icons">library_add</i></button>
      </div>
      <h2 class="col-sm-2">Users_Vpn</h4>
    </div>

    <hr class="my-4">

    <div class="caja">
      <div class="row">
        <div class="col-lg-12">
          <div class="table-responsive">
            <table id="usersVpnTable" class="table table-striped table-bordered table-condensed" style="width:100%">
              <thead class="text-center">
                <tr>
                  <th>User_Id</th>
                  <th>userName</th>
                  <th>Email</th>
                  <th>Phone_Number</th>
                  <th>Options</th>
                </tr>
              </thead>
              <tbody>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section>
    <!-- ModalCrud Employees-->
    <div class="modal" id="modalCRUDVpn" tabindex="-1" aria-labelledby="modalCRUDVpn" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalCRUDVpn">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="vpnFormCrud">
              <div class="modal-body">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label for="vpnCrudEmail" class="col-form-label">Email</label>
                      <input type="vpnCrudEmail" class="form-control" id="vpnCrudEmail" placeholder="you@example.com" required>
                      <div class="invalid-feedback">
                        Please insert a valid Email.
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label for="vpnCrudPassword" class="col-form-label">Password</label>
                      <input type="text" class="form-control" id="vpnCrudPassword" required>
                      <div class="invalid-feedback">
                        Please insert a valid Password.
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label for="vpnCrudKey" class="col-form-label">Key</label>
                      <input type="text" class="form-control" id="vpnCrudKey" required>
                      <div class="invalid-feedback">
                        Please insert a valid Key.
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label for="vpnCrudExpiryDate" class="col-form-label">Expiry Date</label>
                      <input type="text" class="form-control" id="vpnCrudExpiryDate" placeholder="YYYY-MM-DD" required>
                      <div class="invalid-feedback">
                        Please insert a valid Expiry Date.
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
  </section>
  <section>
    <!-- ModalCrud Zoho-->
    <div class="modal" id="modalCRUDUsers" tabindex="-1" aria-labelledby="modalCRUDUsers" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalCRUDUsers">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="usersFormCrud">
              <div class="modal-body">
                <!---->
                <div class="caja">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="table-responsive">
                        <table id="usersTable" class="table table-striped table-bordered table-condensed" style="width:100%">
                          <thead class="text-center">
                            <tr>
                              <th>User_Id</th>
                              <th>userName</th>
                              <th>Email</th>
                              <th>Phone_Number</th>
                              <th>Options</th>
                            </tr>
                          </thead>
                          <tbody>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                <!---->

                <!---->
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <!--<button type="submit" id="btnGuardar" class="btn btn-primary">Save changes</button>-->
              </div>
            </form>
          </div>

        </div>
      </div>
    </div>
  </section>


  <!--Principal-->
</div>

<?php
include_once(dirname(__DIR__, 2) . "/view/dashboard/footer.php");
?>
<!--
<script>
      $(document).ready(function () {
        var data = { name: "Waleed", age: 23, gender: "Male" };
        $("#employeeForm").jsonToForm(data);
      });
    </script>
    -->

<!-- EmployeesTable -->
<script type="text/javascript" src="../../assets/js/vpn.js"></script>