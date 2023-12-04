$(document).ready(function () {
  const employeeId = sessionStorage.getItem("employee_id");
  var employee_id, opcion,vpnId,row, zohoId;
  employeeForm();
  elementForm();
  nextcloudForm();

  //Consult the Employee
  //-------------------------------------------------------------
  function employeeForm() {
    $.ajax({
      url: "../../config/employee_crud.php",
      type: "POST",
      datatype: "json",
      data: {
        employee_id: employeeId,
        opcion: 1,
      },
    }).done(function (data) {
      datax = JSON.parse(data);
      //console.log(employeeId);
      //$("#title_employeeId").innerHTML(employeeId);
      $(".employee-id").text(employeeId);
      $("#employeeForm_name").val(datax[0].name);
      $("#employeeForm_email").val(datax[0].email);
      $("#employeeForm_phoneNumber").val(datax[0].phone_number);
    });
  }

  //para limpiar los campos antes de dar de Alta una Persona
  $("#employeeForm_btn").click(function () {
    opcion = 2;
    $("#employeesFormCrud").trigger("reset");
    $(".modal-header").css("background-color", "#17a2b8");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Edit Employee");

    $("#employeeCrudName").val($("#employeeForm_name").val());
    $("#employeeCrudEmail").val($("#employeeForm_email").val());
    $("#employeeCrudPhoneNumber").val($("#employeeForm_phoneNumber").val());
    $("#modalCRUDEmployees").modal("show");
  });

  //submit para el Alta y Actualización
  $("#employeesFormCrud").submit(function (e) {
    e.preventDefault(); //evita el comportambiento normal del submit, es decir, recarga total de la página
    employeeCrudName = $.trim($("#employeeCrudName").val());
    employeeCrudEmail = $.trim($("#employeeCrudEmail").val());
    employeeCrudPhoneNumber = $.trim($("#employeeCrudPhoneNumber").val());
    $.ajax({
      url: "../../config/employee_crud.php",
      type: "POST",
      datatype: "json",
      data: {
        employee_id: employeeId,
        nameEmployee: employeeCrudName,
        emailEmployee: employeeCrudEmail,
        phone_numberEmployee: employeeCrudPhoneNumber,
        opcion: opcion,
      },
      success: function (data) {
        //employeeForm.reload()
        datax = JSON.parse(data);
        console.log(employeeId);
        //$("#title_employeeId").innerHTML(employeeId);
        $("#employeeForm_name").val(datax[0].name);
        $("#employeeForm_email").val(datax[0].email);
        $("#employeeForm_phoneNumber").val(datax[0].phone_number);
        //employeeForm();
      },
    });
    $("#modalCRUDEmployees").modal("hide");
  });

  //Consult the Element
  //-------------------------------------------------------------
  function elementForm() {
    $.ajax({
      url: "../../config/employee_crud.php",
      type: "POST",
      datatype: "json",
      data: {
        employee_id: employeeId,
        opcion: 3,
      },
    }).done(function (data) {
      //console.log(Object.keys(data).length);
      if (Object.keys(data).length != 2) {
        datax = JSON.parse(data);
        //console.log(data);
        //$("#title_employeeId").innerHTML(employeeId);
        $("#elementForm_userName").val(datax[0].user_name);
        $("#elementForm_identifier").val(datax[0].identifier);
        $("#elementForm_sessionId").val(datax[0].session_id);
        $("#elementForm_sessionKey").val(datax[0].session_key);
        $("#elementForm_encryptionKey").val(datax[0].encryption_key);
      }
    });
  }

  //para limpiar los campos antes de dar de Alta una Persona
  $("#elementForm_btn").click(function () {
    opcion = 4;
    $("#elementFormCrud").trigger("reset");
    $(".modal-header").css("background-color", "#17a2b8");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Edit Element");

    $("#elementCrudUserName").val($("#elementForm_userName").val());
    $("#elementCrudIdentifier").val($("#elementForm_identifier").val());
    $("#elementCrudSessionId").val($("#elementForm_sessionId").val());
    $("#elementCrudSessionKey").val($("#elementForm_sessionKey").val());
    $("#elementCrudEncryptionKey").val($("#elementForm_encryptionKey").val());
    $("#modalCRUDElement").modal("show");
  });

  //submit para el Alta y Actualización
  $("#elementFormCrud").submit(function (e) {
    e.preventDefault(); //evita el comportambiento normal del submit, es decir, recarga total de la página
    elementCrudUserName = $.trim($("#elementCrudUserName").val());
    elementCrudIdentifier = $.trim($("#elementCrudIdentifier").val());
    elementCrudSessionId = $.trim($("#elementCrudSessionId").val());
    elementCrudSessionKey = $.trim($("#elementCrudSessionKey").val());
    elementCrudEncryptionKey = $.trim($("#elementCrudEncryptionKey").val());
    $.ajax({
      url: "../../config/employee_crud.php",
      type: "POST",
      datatype: "json",
      data: {
        employee_id: employeeId,
        userNameElement: elementCrudUserName,
        identifierElement: elementCrudIdentifier,
        sessionIdElement: elementCrudSessionId,
        sessionKeyElement: elementCrudSessionKey,
        encryptionKeyElement: elementCrudEncryptionKey,
        opcion: opcion,
      },
      success: function (data) {
        //console.log(data);
        datax = JSON.parse(data);
        //console.log(data);
        //$("#title_employeeId").innerHTML(employeeId);
        $("#elementForm_userName").val(datax[0].user_name);
        $("#elementForm_identifier").val(datax[0].identifier);
        $("#elementForm_sessionId").val(datax[0].session_id);
        $("#elementForm_sessionKey").val(datax[0].session_key);
        $("#elementForm_encryptionKey").val(datax[0].encryption_key);
      },
    });
    $("#modalCRUDElement").modal("hide");
  });

  //Consult the Nextcloud
  //-------------------------------------------------------------
  function nextcloudForm() {
    $.ajax({
      url: "../../config/employee_crud.php",
      type: "POST",
      datatype: "json",
      data: {
        employee_id: employeeId,
        opcion: 5,
      },
    }).done(function (data) {
      //console.log(Object.keys(data).length);
      if (Object.keys(data).length != 2) {
        datax = JSON.parse(data);
        console.log(data);
        //$("#title_employeeId").innerHTML(employeeId);
        $("#nextcloudForm_userName").val(datax[0].user_name);
        $("#nextcloudForm_password").val(datax[0].password);
        $("#nextcloudForm_email").val(datax[0].email);
      }
    });
  }

  //para limpiar los campos antes de dar de Alta una Persona
  $("#nextcloudForm_btn").click(function () {
    opcion = 6;
    $("#nextcloudFormCrud").trigger("reset");
    $(".modal-header").css("background-color", "#17a2b8");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Edit Element");

    $("#nextcloudCrudUserName").val($("#nextcloudForm_userName").val());
    $("#employeeCrudPassword").val($("#nextcloudForm_password").val());
    $("#nextcloudCrudEmail").val($("#nextcloudForm_email").val());
    $("#modalCRUDNextcloud").modal("show");
  });

  //submit para el Alta y Actualización
  $("#nextcloudFormCrud").submit(function (e) {
    e.preventDefault(); //evita el comportambiento normal del submit, es decir, recarga total de la página
    nextcloudCrudUserName = $.trim($("#nextcloudCrudUserName").val());
    employeeCrudPassword = $.trim($("#employeeCrudPassword").val());
    nextcloudCrudEmail = $.trim($("#nextcloudCrudEmail").val());
    $.ajax({
      url: "../../config/employee_crud.php",
      type: "POST",
      datatype: "json",
      data: {
        employee_id: employeeId,
        userNameNextcloud: nextcloudCrudUserName,
        passwordNextcloud: employeeCrudPassword,
        emailNextcloud: nextcloudCrudEmail,
        opcion: opcion,
      },
      success: function (data) {
        //console.log(data);
        datax = JSON.parse(data);
        //console.log(data);
        //$("#title_employeeId").innerHTML(employeeId);
        $("#nextcloudForm_userName").val(datax[0].user_name);
        $("#nextcloudForm_password").val(datax[0].password);
        $("#nextcloudForm_email").val(datax[0].email);
      },
    });
    $("#modalCRUDNextcloud").modal("hide");
  });
  //Zoho
  //-------------------------------------------------------------
  //Ajx to fill Type_Zoho
  dropTypeZoho = $.ajax({
    url: "../../config/employee_crud.php",
    type: "POST",
    datatype: "json",
    data: {
      opcion: 10,
    },
    success: function (data) {
      //console.log(data);
      datax = JSON.parse(data);
      //console.log(datax.length);
      $("#ajaxData").empty();
      var appenddata = "";
      for (var i = 0; i < datax.length; i++) {
        //console.log(datax[i].name);
        appenddata +=
          "<option id = '" +
          datax[i].id +
          "' value = '" +
          datax[i].id +
          " '>" +
          datax[i].name +
          " </option>";
      }
      $("#ajaxData").append(appenddata);
      //console.log(datax);
      //var cod = id_actividad_costo = $('#ajaxData').find('option:selected').val();
      //console.log(cod)
    },
    error: function (XMLHttpRequest, textStatus, errorThrown) {
      alert(textStatus);
    },
  });

  zohoTable = $("#zohoTable").DataTable({
    ajax: {
      //url: "/tech_department/controller/employeesController.php",
      url: "../../config/employee_crud.php",
      method: "POST", //usamos el metodo POST
      data: { employee_id: employeeId, opcion: 7 }, //enviamos opcion 4 para que haga un SELECT
      dataSrc: "",
    },
    columns: [
      { data: "id" },
      { data: "username" },
      { data: "email" },
      { data: "password" },
      { data: "type_zoho_id" },
      {
        defaultContent:
          "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btn-sm btnEdit' id = 'btnEdit'><i class='material-icons'>edit</i></button><button class='btn btn-danger btn-sm btnDelet' id = 'btnDelet'><i class='material-icons'>delete</i></button></div></div>",
      },
    ],
  });

 //captura la fila, para editar o eliminar
  //submit para el Alta y Actualización
  $("#zohoFormCrud").submit(function (e) {
    e.preventDefault(); //evita el comportambiento normal del submit, es decir, recarga total de la página
    zohoUserName = $.trim($("#zohoUserName").val());
    zohoCrudEmail = $.trim($("#zohoCrudEmail").val());
    zohoCrudPassword = $.trim($("#zohoCrudPassword").val());
    var typeZoho = $("#ajaxData").find("option:selected").val();
    $.ajax({
      url: "../../config/employee_crud.php",
      type: "POST",
      datatype: "json",
      data: {
        employee_id: employeeId,
        userNameZoho: zohoUserName,
        emailZoho: zohoCrudEmail,
        passwordZoho: zohoCrudPassword,
        typeZoho: typeZoho,
        idZoho: zohoId,
        opcion: opcion,
      },
      success: function (data) {
        zohoTable.ajax.reload(null, false);
      },
    });
    $("#modalCRUDZoho").modal("hide");
  });

  //para limpiar los campos antes de dar de Alta una Persona
  $("#zohoForm_btn").click(function () {
    opcion = 8; //alta
    zohoId = null;
    $("#zohoFormCrud").trigger("reset");
    $(".modal-header").css("background-color", "#17a2b8");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Edit zoho");
    $("#modalCRUDZoho").modal("show");
  });

  //Editar
  $(document).on("click", ".btnEdit", function () {
    opcion = 9; //editar
    row = $(this).closest("tr");
    zohoId = parseInt(row.find("td:eq(0)").text()); //capturo el ID
    zohoUserName = row.find("td:eq(1)").text();
    zohoCrudEmail = row.find("td:eq(2)").text();
    zohoCrudPassword = row.find("td:eq(3)").text();
    typeZoho = row.find("td:eq(4)").text();
    $("#zohoUserName").val(zohoUserName);
    $("#zohoCrudEmail").val(zohoCrudEmail);
    $("#zohoCrudPassword").val(zohoCrudPassword);
    $("#ajaxData").find("option:selected").val(typeZoho);
    $(".modal-header").css("background-color", "#007bff");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Editar Usuario");
    $("#modalCRUDZoho").modal("show");
  });

  //Borrar
  $(document).on("click", ".btnDelet", function () {
    row = $(this);
    zohoId = parseInt($(this).closest("tr").find("td:eq(0)").text());
    opcion = 11; //eliminar
    var answer = confirm("Are you sure to delete the record " + zohoId + "?");
    if (answer) {
      $.ajax({
        url: "../../config/employee_crud.php",
        type: "POST",
        datatype: "json",
        data: { opcion: opcion, idZoho: zohoId },
        success: function () {
          zohoTable.row(row.parents("tr")).remove().draw();
        },
      });
    }
  });

  //UsersVpn
  //-------------------------------------------------------------
  vpnTable = $("#vpnTable").DataTable({
    ajax: {
      //url: "/tech_department/controller/employeesController.php",
      url: "../../config/employee_crud.php",
      method: "POST", //usamos el metodo POST
      data: { employee_id: employeeId, opcion: 12 }, //enviamos opcion 4 para que haga un SELECT
      dataSrc: "",
    },
    columns: [
      { data: "id" },
      { data: "expiry_date" },
      { data: "key" },
      {
        defaultContent:
          "<div class='text-center'><div class='btn-group'><button class='btn btn-danger btn-sm btnDeletVpnUser' id = 'btnDeletVpnUser'><i class='material-icons'>delete</i></button></div></div>",
      },
    ],
  });

  //Delete
  $(document).on("click", ".btnDeletVpnUser", function () {
    row = $(this);
    vpnId = parseInt($(this).closest("tr").find("td:eq(0)").text());
    opcion = 15; //eliminar
    var answer = confirm("Are you sure to delete the record " + vpnId + "?");
    if (answer) {
      $.ajax({
        url: "../../config/employee_crud.php",
        type: "POST",
        datatype: "json",
        data: { employee_id: employeeId,
          idVpn: vpnId,
          opcion: 15 },
        success: function () {
          vpnTable.row(row.parents("tr")).remove().draw();
          vpnUserTable.ajax.reload(null, false);
        },
      });
    }
  });

  //para limpiar los campos antes de dar de Alta una Persona
  $("#vpnForm_btn").click(function () {
    opcion = 14; //alta
    vpnId = null;
    $("#vpnFormCrud").trigger("reset");
    $(".modal-header").css("background-color", "#17a2b8");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Edit zoho");
    $("#modalCRUDVpn").modal("show");
  });

  //Vpns
  //-------------------------------------------------------------
  vpnUserTable = $("#vpnUserTable").DataTable({
    ajax: {
      //url: "/tech_department/controller/employeesController.php",
      url: "../../config/employee_crud.php",
      method: "POST", //usamos el metodo POST
      data: { employee_id: employeeId, opcion: 13 }, //enviamos opcion 4 para que haga un SELECT
      dataSrc: "",
    },
    columns: [
      { data: "ID" },
      { data: "expiry_date" },
      { data: "key" },
      { data: "email" },
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
    vpnId = parseInt(row.find("td:eq(0)").text()); //capturo el ID
    //console.log(userId);
    //console.log(idVpn);
    $.ajax({
      url: "../../config/employee_crud.php",
      type: "POST",
      datatype: "json",
      data: {
        employee_id: employeeId,
        idVpn: vpnId,
        opcion: 14,
      },
      success: function (data) {
        vpnUserTable.ajax.reload(null, false);
        vpnTable.ajax.reload(null, false);
      },
    });
    //$("#modalCRUDUsers").modal("hide");
  });
});
