$(document).ready(function () {
  var id, opcion;
  opcion = 4;

  usersTable = $("#usersTable").DataTable({
    ajax: {
      url: "../../config/users_crud.php",
      method: "POST", //usamos el metodo POST
      data: { opcion: opcion }, //enviamos opcion 4 para que haga un SELECT
      dataSrc: "",
    },
    columns: [
      { data: "id"},
      { data: "email"},
      { data: "password"},
      {
        defaultContent:
          "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btn-sm btnEdit' id='btnEdit'><i class='material-icons'>edit</i></button><button class='btn btn-danger btn-sm btnDelet' id='btnDelet'><i class='material-icons'>delete</i></button></div></div>",
      },
    ],
  });

  var row; //captura la fila, para editar o eliminar
  //submit para el Alta y Actualización
  $("#usersForm").submit(function (e) {
    e.preventDefault(); //evita el comportambiento normal del submit, es decir, recarga total de la página
    password = $.trim($("#password").val());
    email = $.trim($("#email").val());
    $.ajax({
      url: "../../config/users_crud.php",
      type: "POST",
      datatype: "json",
      data: {
        id: id,
        email: email,
        password: password,
        opcion: opcion,
      },
      success: function (data) {
        usersTable.ajax.reload(null, false);
      },
    });
    $("#modalCRUD").modal("hide");
  });

  //para limpiar los campos antes de dar de Alta una Persona
  $("#btnNew").click(function () {
    opcion = 1; //alta
    id = null;
    $("#usersForm").trigger("reset");
    $(".modal-header").css("background-color", "#17a2b8");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Create new User");
    $("#modalCRUD").modal("show");
  });

  //Edit
  $(document).on("click", ".btnEdit", function () {
    opcion = 2; //edit
    row = $(this).closest("tr");
    id = parseInt(row.find("td:eq(0)").text()); //capturo el ID
    email = row.find("td:eq(1)").text();
    password = row.find("td:eq(2)").text();
    console.log(email);
    $("#email").val(email);
    $("#password").val(password);
    $(".modal-header").css("background-color", "#007bff");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Edit User");
    $("#modalCRUD").modal("show");
  });

  //Clear
  $(document).on("click", ".btnDelet", function () {
    row = $(this);
    id = parseInt($(this).closest("tr").find("td:eq(0)").text());
    opcion = 3; //Clear
    var answer = confirm("Are you sure to delete the record " + id + "?");
    if (answer) {
      $.ajax({
        url: "../../config/users_crud.php",
        type: "POST",
        datatype: "json",
        data: { opcion: opcion, id: id },
        success: function () {
          usersTable.row(row.parents("tr")).remove().draw();
        },
      });
    }
  });
  
});
