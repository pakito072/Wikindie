
    // Función para llenar el formulario de edición
    function fillEditForm(id, username, email, role_id) {
        // Rellena los campos
        $('#user_id').val(id);
        $('#username').val(username);
        $('#email').val(email);
        $('#role_id').val(role_id);
        $('#password').val(''); // Limpiar contraseña
        $('#modal_title').text('Edit User'); // Cambiar título
        $('#kt_modal_edit_user_form').attr('action', '<?= base_url("manageUsers/update/") ?>' + id);
    }

    // Para crear usuarios, resetear el formulario
    $('#kt_modal_add_user').on('shown.bs.modal', function () {
        $('#kt_modal_edit_user_form')[0].reset();
        $('#user_id').val('');
        $('#modal_title').text('Create User');
        $('#kt_modal_edit_user_form').attr('action', '<?= base_url("manageUsers/create") ?>');
    });
