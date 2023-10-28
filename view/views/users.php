<?php
$title = 'Users';
$page = 'users';
require_once("c://xampp/htdocs/tech_department/view/dashboard/dashboard.php");
if (empty($_SESSION['user'])) {
  header("Location:/tech_department/index.php");
}
?>

<!--Page-->
<div class="container">
  <main>

    <div class="row g-5 py-5">

      <div class="col-md-5 col-lg-4 order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-primary">Is active?</span>
          <span class="badge bg-primary rounded-pill">3</span>
        </h4>

        <form class="card p-2">
          <div class="col-12">
            <label for="country" class="form-label">Country</label>
            <select class="form-select" id="country" required>
              <option value="">Choose...</option>
              <option>United States</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid country.
            </div>
          </div>
        </form>



      </div>


      <div class="col-md-7 col-lg-8">

        <h4 class="mb-3">User register</h4>

        <form class="needs-validation" novalidate>

          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Name</label>
              <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Last name</label>
              <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>
            <!--Name-->
            <div class="col-12">
              <label for="name" class="form-label">Name</label>
              <div class="input-group has-validation">
                <input type="text" class="form-control" id="name" placeholder="Name" required>
                <div class="invalid-feedback">
                  Your name is required
                </div>
              </div>
            </div>
            <!--Email-->
            <div class="col-12">
              <label for="email" class="form-label">Email <span class="text-body-secondary">(Optional)</span></label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>
            <!--Department-->
            <div class="col-md-6">
              <label for="department" class="form-label">department</label>
              <select class="form-select" id="department" required>
                <option value="">Choose...</option>
                <option>It</option>
                <option>Sales</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid department.
              </div>
            </div>
            <!--PhoneNumber-->
            <div class="col-md-6">
              <label for="phone_number" class="form-label">Phone Number</label>
              <input type="text" class="form-control" id="phone_number" placeholder="" required>
              <div class="invalid-feedback">
                Phone Number is required
              </div>
            </div>


            <hr class="my-4">

            <button class="w-100 btn btn-primary btn-lg" type="submit">Save</button>
        </form>
      </div>
    </div>
  </main>
  <script src="/asset/static/js/form.js"></script>

</div>
<!--Form-->

<?php
include_once('c://xampp/htdocs/tech_department/dirs.php');
include(DASHBOARD_FOOTER_PATH);
?>