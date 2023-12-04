$(document).ready(function () {
  var employee_id, opcion;
  //To get all the employees
  opcion = 4;
  employeesTable = $("#employeesTable").DataTable({
    ajax: {
      //url: "/tech_department/controller/employeesController.php",
      url: "../../config/employees_crud.php",
      method: "POST", //usamos el metodo POST
      data: { opcion: opcion }, //enviamos opcion 4 para que haga un SELECT
      dataSrc: "",
    },
    columns: [
      { data: "id" },
      { data: "name" },
      { data: "email" },
      { data: "phone_number" },
      {
        defaultContent:
          "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btn-sm btnEdit' id = 'btnEdit'><i class='material-icons'>edit</i></button><button class='btn btn-danger btn-sm btnDelet' id = 'btnDelet'><i class='material-icons'>delete</i></button></div></div>",
      },
    ],
  });

  var row;
  //submit para el Alta
  $("#employeesForm").submit(function (e) {
    e.preventDefault(); //evita el comportambiento normal del submit, es decir, recarga total de la página
    username = $.trim($("#username").val());
    email = $.trim($("#email").val());
    phone_number = $.trim($("#phone_number").val());
    $.ajax({
      url: "../../config/employees_crud.php",
      type: "POST",
      datatype: "json",
      data: {
        employee_id: employee_id,
        username: username,
        email: email,
        phone_number: phone_number,
        opcion: opcion,
      },
      success: function (data) {
        datax = JSON.parse(data);
        //sessionStorage.setItem('employee_id', datax[0].id)
        //console.log();
        employee_id = parseInt(datax[0].id);
        sessionStorage.setItem('employee_id',employee_id)
        window.location.replace("../../view/views/employees.php");
        //window.location.replace("../../view/views/employees.php");
        //employeesTable.ajax.reload(null, false);
      },
    });
    $("#modalCRUD").modal("hide");
  });

  //To clean the text area
  $("#btnNew").click(function () {
    opcion = 1; //alta
    employee_id = null;
    $("#employeesForm").trigger("reset");
    $(".modal-header").css("background-color", "#17a2b8");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("User register");
    $("#modalCRUD").modal("show");
  });

  //Edit
  $(document).on("click", ".btnEdit", function () {
    row = $(this).closest("tr");	        
    employee_id = parseInt(row.find('td:eq(0)').text()); //capturo el ID
    sessionStorage.setItem('employee_id', employee_id)
    window.location.replace("../../view/views/employees.php");
  });

  //Delet
  $(document).on("click", ".btnDelet", function () {
    row = $(this);
    employee_id = parseInt($(this).closest("tr").find("td:eq(0)").text());
    opcion = 3;
    var answer = confirm(
      "Are you sure to delete the record " + employee_id + "?"
    );
    if (answer) {
      $.ajax({
        url: "../../config/employees_crud.php",
        type: "POST",
        datatype: "json",
        data: { opcion: opcion, employee_id: employee_id },
        success: function () {
          employeesTable.row(row.parents("tr")).remove().draw();
        },
      });
    }
  });
});
