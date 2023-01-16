// Ajax Call for admin Login Verification
function checkAdminLogin() {
  var adminLogEmail = $("#adminLogEmail").val();
  var adminLogPass = $("#adminLogPass").val();
  $.ajax({
    url: "admin/admin.php",
    type: "post",
    data: {
      checkLogemail: "checklogmail",
      adminLogEmail: adminLogEmail,
      adminLogPass: adminLogPass
    },
    success: function(data) {
      console.log(data);
      if (data == 0) {
        $("#statusAdminLogMsg").html(
          '<small class="alert alert-danger"> Invalid Email ID or Password ! </small>'
        );
      } else if (data == 1) {
        $("#statusAdminLogMsg").html(
          '<small class="alert alert-success"> Success! Loading..... </small>'
        );
        // Empty Login Fields
        clearAdminLoginField();
        setTimeout(() => {
          window.location.href = "admin/adminDashboard.php";
        }, 1000);
      }
    }
  });
}

// Empty Login Fields
function clearAdminLoginField() {
  $("#adminLoginForm").trigger("reset");
}

// Empty Login Fields and Status Msg
function clearAdminLoginWithStatus() {
  $("#statusAdminLogMsg").html(" ");
  clearAdminLoginField();
}
