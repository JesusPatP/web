<?php
$title = 'Employee';
$page = 'employees';
require_once(dirname(__DIR__, 2) . "/view/dashboard/dashboard.php");
if (empty($_SESSION['user'])) {
  header("Location:../../index.php");
}
?>

<!--ID-->
<div class="container">
  <!--Principal-->

  <!--Employees information-->
  <!-- Form -->
  <form class="needs-validation" id="employeeForm" novalidate>
    <div class="row g-3">

      <div class="row g-1">
        <div class="col-sm-1">
          <button id="employeeForm_btn" type="button" class="btn btn-info" data-toggle="modal"><i class="material-icons">library_add</i></button>
        </div>
        <h2 class="col-sm-2">Employee</h4>
          <h2 class="employee-id col-sm-1">1</h4>
      </div>

      <hr class="my-4">
      <div class="col-sm-5">
        <label for="employeeForm_name" class="form-label">Name</label>
        <input type="text" class="form-control" id="employeeForm_name" placeholder="" value="" required readonly>
        <div class="invalid-feedback">
          Valid Name is required.
        </div>
      </div>

      <div class="col-sm-7">
        <label for="employeeForm_phoneNumber" class="form-label">Phone Number</label>
        <input type="text" class="form-control" id="employeeForm_phoneNumber" placeholder="" value="" required readonly>
        <div class="invalid-feedback">
          Valid Phone number is required.
        </div>
      </div>

      <div class="col-12">
        <label for="employeeForm_email" class="form-label">Email</label>
        <input type="email" class="form-control" id="employeeForm_email" placeholder="you@example.com" required readonly>
        <div class="invalid-feedback">
          Please enter a valid email.
        </div>
      </div>
    </div>
  </form>

  <!--Element-->
  <!-- Form -->
  <form class="needs-validation" id="ElementForm" novalidate>
    <div class="row g-3 divider">
      <div class="row g-1">
        <div class="col-sm-1">
          <button id="elementForm_btn" type="button" class="btn btn-info" data-toggle="modal"><i class="material-icons">library_add</i></button>
        </div>
        <h2 class="col-sm-2">Element</h4>
      </div>

      <hr class="my-4">
      <div class="col-sm-5">
        <label for="elementForm_userName" class="form-label">User name</label>
        <input type="text" class="form-control" id="elementForm_userName" placeholder="" value="" required readonly>
        <div class="invalid-feedback">
          Please enter a valid User Name
        </div>
      </div>

      <div class="col-sm-7">
        <label for="elementForm_identifier" class="form-label">Identifier</label>
        <input type="text" class="form-control" id="elementForm_identifier" placeholder="" value="" required readonly>
        <div class="invalid-feedback">
          Please enter a valid Identifier
        </div>
      </div>

      <div class="col-12">
        <label for="elementForm_sessionId" class="form-label">Session Id</label>
        <input type="text" class="form-control" id="elementForm_sessionId" placeholder="" value="" required readonly>
        <div class="invalid-feedback">
          Please enter a valid Session Id.
        </div>
      </div>
      <div class="col-12">
        <label for="elementForm_sessionKey" class="form-label">Session Key</label>
        <input type="text" class="form-control" id="elementForm_sessionKey" placeholder="" value="" required readonly>
        <div class="invalid-feedback">
          Please enter a valid Session Key.
        </div>
      </div>

      <div class="col-12">
        <label for="elementForm_encryptionKey" class="form-label">Encryption Key</label>
        <input type="text" class="form-control" id="elementForm_encryptionKey" placeholder="" value="" required readonly>
        <div class="invalid-feedback">
          Please enter a valid Encryption Key.
        </div>
      </div>
    </div>
  </form>

  <!--Nextcloud-->
  <!-- Form -->
  <form class="needs-validation" id="nextcloudForm" novalidate>
    <div class="row g-3 divider">
      <div class="row g-1">
        <div class="col-sm-1">
          <button id="nextcloudForm_btn" type="button" class="btn btn-info" data-toggle="modal"><i class="material-icons">library_add</i></button>

        </div>
        <h2 class="col-sm-2">Nextcloud</h4>
      </div>
      <hr class="my-4">
      <div class="col-sm-5">
        <label for="nextcloudForm_userName" class="form-label">User name</label>
        <input type="text" class="form-control" id="nextcloudForm_userName" placeholder="" value="" required readonly>
        <div class="invalid-feedback">
          Please enter a valid User Name
        </div>
      </div>

      <div class="col-sm-7">
        <label for="nextcloudForm_password" class="form-label">Password</label>
        <input type="text" class="form-control" id="nextcloudForm_password" placeholder="" value="" required readonly>
        <div class="invalid-feedback">
          Valid Password is required.
        </div>
      </div>

      <div class="col-12">
        <label for="nextcloudForm_email" class="form-label">Email</label>
        <input type="email" class="form-control" id="nextcloudForm_email" placeholder="you@example.com" required readonly>
        <div class="invalid-feedback">
          Please enter a valid email.
        </div>
      </div>
    </div>
  </form>


  <!--Zoho-->
  <div class="row g-3 divider">
    <div class="row g-1">
      <div class="col-sm-1">
        <button id="zohoForm_btn" type="button" class="btn btn-info" data-toggle="modal"><i class="material-icons">library_add</i></button>
      </div>
      <h2 class="col-sm-2">Zoho</h4>
    </div>

    <hr class="my-4">

    <div class="caja">
      <div class="row">
        <div class="col-lg-12">
          <div class="table-responsive">
            <table id="zohoTable" class="table table-striped table-bordered table-condensed" style="width:100%">
              <thead class="text-center">
                <tr>
                  <th>Zoho_Id</th>
                  <th>userName</th>
                  <th>Email</th>
                  <th>Password</th>
                  <th>Type_Zoho</th>
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

  <!--UsersVpn-->
  <div class="row g-3 divider">
    <div class="row g-1">
      <div class="col-sm-1">
        <button id="vpnForm_btn" type="button" class="btn btn-info" data-toggle="modal"><i class="material-icons">library_add</i></button>
      </div>
      <h2 class="col-sm-2">Vpns</h4>
    </div>

    <hr class="my-4">

    <div class="caja">
      <div class="row">
        <div class="col-lg-12">
          <div class="table-responsive">
            <table id="vpnTable" class="table table-striped table-bordered table-condensed" style="width:100%">
              <thead class="text-center">
                <tr>
                  <th>Vpn_Id</th>
                  <th>Expiry_Date</th>
                  <th>Key</th>
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
    <!-- ModalCrud Zoho-->
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
                <!---->
                <div class="caja">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="table-responsive">
                        <table id="vpnUserTable" class="table table-striped table-bordered table-condensed" style="width:100%">
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

  <section>
    <!-- ModalCrud Employees-->
    <div class="modal" id="modalCRUDEmployees" tabindex="-1" aria-labelledby="modalCRUDEmployees" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalCRUDEmployees">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="employeesFormCrud">
              <div class="modal-body">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label for="employeeCrudName" class="col-form-label">Name</label>
                      <input type="text" class="form-control" id="employeeCrudName" required>
                      <div class="invalid-feedback">
                        Please select a valid name.
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label for="employeeCrudEmail" class="col-form-label">Email</label>
                      <input type="email" class="form-control" id="employeeCrudEmail" required>
                      <div class="invalid-feedback">
                        Please select a valid Email.
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label for="employeeCrudPhoneNumber" class="col-form-label">Phone Number</label>
                      <input type="text" class="form-control" id="employeeCrudPhoneNumber" required>
                      <div class="invalid-feedback">
                        Please select a valid Phone Number.
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
    <!-- ModalCrud Element-->
    <div class="modal" id="modalCRUDElement" tabindex="-1" aria-labelledby="modalCRUDElement" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalCRUDElement">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="elementFormCrud">
              <div class="modal-body">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label for="elementCrudUserName" class="col-form-label">Name</label>
                      <input type="text" class="form-control" id="elementCrudUserName" required>
                      <div class="invalid-feedback">
                        Please select a valid name.
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="elementCrudIdentifier" class="col-form-label">Identifier</label>
                    <input type="text" class="form-control" id="elementCrudIdentifier" required>
                    <div class="invalid-feedback">
                      Please select a valid Identifier.
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="elementCrudSessionId" class="col-form-label">Session Id</label>
                    <input type="text" class="form-control" id="elementCrudSessionId" required>
                    <div class="invalid-feedback">
                      Please select a valid Session Id.
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="elementCrudSessionKey" class="col-form-label">Session Key</label>
                    <input type="text" class="form-control" id="elementCrudSessionKey" required>
                    <div class="invalid-feedback">
                      Please select a valid Session Key.
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="elementCrudEncryptionKey" class="col-form-label">Encryption Key</label>
                    <input type="text" class="form-control" id="elementCrudEncryptionKey" required>
                    <div class="invalid-feedback">
                      Please select a valid Encryption Key.
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
    <!-- ModalCrud NextCloud-->
    <div class="modal" id="modalCRUDNextcloud" tabindex="-1" aria-labelledby="modalCRUDNextcloud" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalCRUDNextcloud">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="nextcloudFormCrud">
              <div class="modal-body">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label for="nextcloudCrudUserName" class="col-form-label">User Name</label>
                      <input type="text" class="form-control" id="nextcloudCrudUserName" required>
                      <div class="invalid-feedback">
                        Please select a valid User name.
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label for="nextcloudCrudEmail" class="col-form-label">Email</label>
                      <input type="email" class="form-control" id="nextcloudCrudEmail" required>
                      <div class="invalid-feedback">
                        Please select a valid Email.
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label for="employeeCrudPassword" class="col-form-label">Password</label>
                      <input type="text" class="form-control" id="employeeCrudPassword" required>
                      <div class="invalid-feedback">
                        Please select a valid Password.
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
    <div class="modal" id="modalCRUDZoho" tabindex="-1" aria-labelledby="modalCRUDZoho" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalCRUDZoho">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="zohoFormCrud">
              <div class="modal-body">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label for="zohoUserName" class="col-form-label">User Name</label>
                      <input type="text" class="form-control" id="zohoUserName" required>
                      <div class="invalid-feedback">
                        Please select a valid User name.
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label for="zohoCrudEmail" class="col-form-label">Email</label>
                      <input type="email" class="form-control" id="zohoCrudEmail" required>
                      <div class="invalid-feedback">
                        Please select a valid Email.
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label for="zohoCrudPassword" class="col-form-label">Password</label>
                      <input type="text" class="form-control" id="zohoCrudPassword" required>
                      <div class="invalid-feedback">
                        Please select a valid Password.
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label class="font-noraml">
                        Select event type
                      </label>
                      <div class="input-group">
                        <select data-placeholder="Select" class="ajaxData form-control chosen-select" style="width:350px;" tabindex="2" id="ajaxData" name="ajaxData">
                          <option value="">
                          </option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>

                <!---->
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
<script type="text/javascript" src="../../assets/js/employee.js"></script>