
  // Toggle para Current Password
  document.getElementById('toggleCurrentPassword').addEventListener('click', function() {
    togglePassword('current_password', this);
  });

  // Toggle para New Password
  document.getElementById('toggleNewPassword').addEventListener('click', function() {
    togglePassword('new_password', this);
  });

  // Toggle para Confirm Password
  document.getElementById('toggleConfirmPassword').addEventListener('click', function() {
    togglePassword('confirm_password', this);
  });

  function togglePassword(fieldId, icon) {
    const field = document.querySelector(`input[name="${fieldId}"]`);
    field.type = (field.type === 'password') ? 'text' : 'password';
    icon.classList.toggle('fa-eye-slash');
  }

  function selectAvatar(url) {
    document.getElementById('profile-avatar').src = url;
    document.getElementById('selected-avatar').value = url;
  }

