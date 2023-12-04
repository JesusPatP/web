$(document).ready(function () {
  const idVpn = sessionStorage.getItem("vpn_id");
  var opcion, userId;
  var row; //captura la fila, para editar o eliminar
  //console.log(idVpn);
  vpnForm();

  //Consult the Employee
  //-------------------------------------------------------------
  function vpnForm() {
    $.ajax({
      url: "../../config/vpn_crud.php",
      type: "POST",
      datatype: "json",
      data: {
        idVpn: idVpn,
        opcion: 1,
      },
    }).done(function (data) {
      datax = JSON.parse(data);
      //console.log(employeeId);
      //$("#title_employeeId").innerHTML(employeeId);
      $(".vpn-id").text(idVpn);
      $("#vpnForm_expiryDate").val(datax[0].expiry_date);
      $("#vpnForm_key").val(datax[0].key);
      $("#vpnForm_password").val(datax[0].password);
      $("#vpnForm_email").val(datax[0].email);
    });
  }

  //para limpiar los campos antes de dar de Alta una Persona
  $("#vpnForm_btn").click(function () {
    opcion = 2;
    $("#vpnFormCrud").trigger("reset");
    $(".modal-header").css("background-color", "#17a2b8");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Edit Employee");

    $("#vpnCrudEmail").val($("#vpnForm_email").val());
    $("#vpnCrudPassword").val($("#vpnForm_password").val());
    $("#vpnCrudExpiryDate").val($("#vpnForm_expiryDate").val());
    $("#vpnCrudKey").val($("#vpnForm_key").val());
    $("#modalCRUDVpn").modal("show");
  });

  //submit para el Alta y Actualización
  $("#vpnFormCrud").submit(function (e) {
    e.preventDefault(); //evita el comportambiento normal del submit, es decir, recarga total de la página
    vpnCrudEmail = $.trim($("#vpnCrudEmail").val());
    vpnCrudPassword = $.trim($("#vpnCrudPassword").val());
    //console.log(vpnCrudPassword);
    vpnCrudExpiryDate = $.trim($("#vpnCrudExpiryDate").val());
    vpnCrudKey = $.trim($("#vpnCrudKey").val());
    $.ajax({
      url: "../../config/vpn_crud.php",
      type: "POST",
      datatype: "json",
      data: {
        idVpn: idVpn,
        emailVpn: vpnCrudEmail,
        passwordVpn: vpnCrudPassword,
        keyVpn: vpnCrudKey,
        expiryDateVpn: vpnCrudExpiryDate,
        opcion: 2,
      },
      success: function (data) {
        //employeeForm.reload()
        datax = JSON.parse(data);
        //console.log(employeeId);
        //$("#title_employeeId").innerHTML(employeeId);
        $(".vpn-id").text(idVpn);
        $("#vpnForm_expiryDate").val(datax[0].expiry_date);
        $("#vpnForm_key").val(datax[0].key);
        $("#vpnForm_password").val(datax[0].password);
        $("#vpnForm_email").val(datax[0].email);
      },
    });
    $("#modalCRUDVpn").modal("hide");
  });

  //UsersVpn
  //-------------------------------------------------------------

  usersVpnTable = $("#usersVpnTable").DataTable({
    ajax: {
      //url: "/tech_department/controller/employeesController.php",
      url: "../../config/vpn_crud.php",
      method: "POST", //usamos el metodo POST
      data: { idVpn: idVpn, opcion: 3 }, //enviamos opcion 4 para que haga un SELECT
      dataSrc: "",
    },
    columns: [
      { data: "id" },
      { data: "name" },
      { data: "email" },
      { data: "phone_number" },
      {
        defaultContent:
          "<div class='text-center'><div class='btn-group'><button class='btn btn-danger btn-sm btnDelet' id = 'btnDelet'><i class='material-icons'>delete</i></button></div></div>",
      },
    ],
  });

  //Delete
  $(document).on("click", ".btnDelet", function () {
    row = $(this);
    userId = parseInt($(this).closest("tr").find("td:eq(0)").text());
    opcion = 4; //eliminar
    var answer = confirm("Are you sure to delete the record " + userId + "?");
    if (answer) {
      $.ajax({
        url: "../../config/vpn_crud.php",
        type: "POST",
        datatype: "json",
        data: { opcion: opcion, idVpn: idVpn, idUser: userId },
        success: function () {
          usersVpnTable.row(row.parents("tr")).remove().draw();
          usersTable.ajax.reload(null, false);
        },
      });
    }
  });

  //para limpiar los campos antes de dar de Alta una Persona
  $("#usersVpnForm_btn").click(function () {
    opcion = 5; //alta
    userId = null;
    $("#usersFormCrud").trigger("reset");
    $(".modal-header").css("background-color", "#17a2b8");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Edit zoho");
    $("#modalCRUDUsers").modal("show");
  });

  //Users
  //-------------------------------------------------------------
  usersTable = $("#usersTable").DataTable({
    ajax: {
      //url: "/tech_department/controller/employeesController.php",
      url: "../../config/vpn_crud.php",
      method: "POST", //usamos el metodo POST
      data: { idVpn: idVpn, opcion: 6 }, //enviamos opcion 4 para que haga un SELECT
      dataSrc: "",
    },
    columns: [
      { data: "ID" },
      { data: "name" },
      { data: "email" },
      { data: "phone_number" },
      {
        defaultContent:
          "<div class='text-center'><div class='btn-group'><button class='btn btn-info fa-solid fa-plus btnAdd' id = 'btnAdd'><i class='material-icons'></i></button></div></div>",
      },
    ],
  });
  //Edit
  $(document).on("click", ".btnAdd", function (e) {
    e.preventDefault(); //evita el comportambiento normal del submit, es decir, recarga total de la página
    row = $(this).closest("tr");
    userId = parseInt(row.find("td:eq(0)").text()); //capturo el ID
    console.log(userId);
    console.log(idVpn);
    $.ajax({
      url: "../../config/vpn_crud.php",
      type: "POST",
      datatype: "json",
      data: {
        idUser: userId,
        idVpn: idVpn,
        opcion: 5,
      },
      success: function (data) {
        usersTable.ajax.reload(null, false);
        usersVpnTable.ajax.reload(null, false);
      },
    });
    //$("#modalCRUDUsers").modal("hide");
  });
});
