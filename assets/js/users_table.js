$(document).ready(function () {
  var id, opcion;
  opcion = 4;

  tablaUsuarios = $("#tablaUsuarios").DataTable({
    ajax: {
      url: "/tech_department/config/users_crud.php",
      method: "POST", //usamos el metodo POST
      data: { opcion: opcion }, //enviamos opcion 4 para que haga un SELECT
      dataSrc: "",
    },
    columns: [
      { data: "id" },
      { data: "username" },
      { data: "email" },
      { data: "password" },
      {
        defaultContent:
          "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btn-sm btnEditar'><i class='material-icons'>edit</i></button><button class='btn btn-danger btn-sm btnBorrar'><i class='material-icons'>delete</i></button></div></div>",
      },
    ],
  });

  var fila; //captura la fila, para editar o eliminar
  //submit para el Alta y Actualización
  $("#formUsuarios").submit(function (e) {
    e.preventDefault(); //evita el comportambiento normal del submit, es decir, recarga total de la página
    username = $.trim($("#username").val());
    email = $.trim($("#email").val());
    password = $.trim($("#password").val());
    $.ajax({
      url: "/tech_department/config/employees_crud.php",
      type: "POST",
      datatype: "json",
      data: {
        id: id,
        username: username,
        email: email,
        password: password,
        opcion: opcion,
      },
      success: function (data) {
        tablaUsuarios.ajax.reload(null, false);
      },
    });
    $("#modalCRUD").modal("hide");
  });

  //para limpiar los campos antes de dar de Alta una Persona
  $("#btnNuevo").click(function () {
    opcion = 1; //alta
    id = null;
    $("#formUsuarios").trigger("reset");
    $(".modal-header").css("background-color", "#17a2b8");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Create new User");
    $("#modalCRUD").modal("show");
  });

  //Edit
  $(document).on("click", ".btnEditar", function () {
    opcion = 2; //edit
    fila = $(this).closest("tr");
    id = parseInt(fila.find("td:eq(0)").text()); //capturo el ID
    username = fila.find("td:eq(1)").text();
    email = fila.find("td:eq(2)").text();
    password = fila.find("td:eq(3)").text();
    $("#username").val(username);
    $("#email").val(email);
    $("#password").val(password);
    $(".modal-header").css("background-color", "#007bff");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Edit User");
    $("#modalCRUD").modal("show");
  });

  //Clear
  $(document).on("click", ".btnBorrar", function () {
    fila = $(this);
    id = parseInt($(this).closest("tr").find("td:eq(0)").text());
    opcion = 3; //Clear
    var respuesta = confirm("¿Está seguro de borrar el registro " + id + "?");
    if (respuesta) {
      $.ajax({
        url: "/tech_department/config/employees_crud.php",
        type: "POST",
        datatype: "json",
        data: { opcion: opcion, id: id },
        success: function () {
          tablaUsuarios.row(fila.parents("tr")).remove().draw();
        },
      });
    }
  });
});
