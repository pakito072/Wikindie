document.addEventListener("DOMContentLoaded", function () {
  // Inicializa tus plugins aquí
  var editButtons = document.querySelectorAll(
    '[data-bs-target="#kt_modal_edit_user"]'
  );
  editButtons.forEach(function (button) {
    button.addEventListener("click", function () {
      var userId = this.getAttribute("data-id");
      var username = this.getAttribute("data-username");
      var email = this.getAttribute("data-email");
      var roleId = this.getAttribute("data-role_id");

      document.getElementById("edit_user_id").value = userId;
      document.getElementById("edit_username").value = username;
      document.getElementById("edit_email").value = email;
      document.getElementById("edit_role_id").value = roleId;
    });
  });

  document
    .querySelector('[data-kt-user-table-filter="reset"]')
    .addEventListener("click", function () {
      document.querySelector('input[name="username"]').value = "";
      document.querySelector('input[name="email"]').value = "";
      document.querySelector('input[name="role_id"]').value = "";
      document.querySelector('input[name="created_at"]').value = "";
      document.querySelector('input[name="showDisabled"]').checked = false;
      document.querySelector("form").submit();
    });
});

$(document).ready(function () {
  $(".disable-user").on("click", function (e) {
    e.preventDefault();
    var url = $(this).attr("href");
    Swal.fire({
      title: "Are you sure?",
      text: "You won't be able to revert this!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yes, disable it!",
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = url;
      }
    });
  });

  $(".restore-user").on("click", function (e) {
    e.preventDefault();
    var url = $(this).attr("href");
    Swal.fire({
      title: "Are you sure?",
      text: "You want to restore this record!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yes, restore it!",
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = url;
      }
    });
  });
});
