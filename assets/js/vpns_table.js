$(document).ready(function () {
  var employee_id, opcion;
  //To get all the employees
  opcion = 4;
  vpnsTable = $("#vpnsTable").DataTable({
    ajax: {
      //url: "/tech_department/controller/employeesController.php",
      url: "../../config/vpns_crud.php",
      method: "POST", //POST
      data: { opcion: opcion }, //opcion 4 to SELECT
      dataSrc: "",
    },
    columns: [
      { data: "id" },
      { data: "expiry_date" },
      { data: "key" },
      { data: "email" },
      { data: "password" },
      {
        defaultContent:
          "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btn-sm btnEdit' id = 'btnEdit'><i class='material-icons'>edit</i></button><button class='btn btn-danger btn-sm btnDelet' id = 'btnDelet'><i class='material-icons'>delete</i></button></div></div>",
      }
    ]
  });

  //Edit
  $(document).on("click", ".btnEdit", function () {
    row = $(this).closest("tr");	        
    vpn_id = parseInt(row.find('td:eq(0)').text()); //capturo el ID
    sessionStorage.setItem('vpn_id', vpn_id);
    window.location.replace("../../view/views/vpns.php");
  });

  var row;
  //submit para el Alta
  $("#vpnsForm").submit(function (e) {
    e.preventDefault(); //evita el comportambiento normal del submit, es decir, recarga total de la página
    email = $.trim($("#email").val());
    password = $.trim($("#password").val());
    key = $.trim($("#key").val());
    expiryDate = $.trim($("#expiryDate").val());
    $.ajax({
      url: "../../config/vpns_crud.php",
      type: "POST",
      datatype: "json",
      data: {
        email: email,
        password: password,
        key: key,
        expiryDate: expiryDate,
        opcion: opcion,
      },
      success: function (data) {
        datax = JSON.parse(data);
        vpn_id = parseInt(datax[0].id);
        sessionStorage.setItem('vpn_id',vpn_id);
        window.location.replace("../../view/views/vpns.php");
        //employeesTable.ajax.reload(null, false);
      },
    });
    $("#modalCRUD").modal("hide");
  });

  //To clean the text area
  $("#btnNew").click(function () {
    opcion = 1; //alta
    vpn_id = null;
    $("#vpnsForm").trigger("reset");
    $(".modal-header").css("background-color", "#17a2b8");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("User register");
    $("#modalCRUD").modal("show");
  });

  //Delet
  $(document).on("click", ".btnDelet", function () {
    row = $(this);
    vpn_id = parseInt($(this).closest("tr").find("td:eq(0)").text());
    opcion = 3; //eliminar
    var answer = confirm(
      "Are you sure to delete the record " + vpn_id + "?"
    );
    if (answer) {
      $.ajax({
        url: "../../config/vpns_crud.php",
        type: "POST",
        datatype: "json",
        data: { opcion: opcion, vpn_id: vpn_id },
        success: function () {
          vpnsTable.row(row.parents("tr")).remove().draw();
        },
      });
    }
  });
});
