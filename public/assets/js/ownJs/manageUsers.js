
    document.addEventListener('DOMContentLoaded', function() {
        var editButtons = document.querySelectorAll('[data-bs-target="#kt_modal_edit_user"]');
        editButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                var userId = this.getAttribute('data-id');
                var username = this.getAttribute('data-username');
                var email = this.getAttribute('data-email');
                var roleId = this.getAttribute('data-role_id');

                document.getElementById('edit_user_id').value = userId;
                document.getElementById('edit_username').value = username;
                document.getElementById('edit_email').value = email;
                document.getElementById('edit_role_id').value = roleId;
            });
        });
    });

    document.querySelector('[data-kt-user-table-filter="reset"]').addEventListener('click', function() {
        document.querySelector('input[name="username"]').value = '';
        document.querySelector('input[name="email"]').value = '';
        document.querySelector('input[name="role_id"]').value = '';
        document.querySelector('input[name="created_at"]').value = '';
        document.querySelector('input[name="showDisabled"]').checked = false;
        document.querySelector('form').submit();
    });

