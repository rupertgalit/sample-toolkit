<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MMRC Login</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="<?=base_url('assets/css/login.css');?>">
</head>
<body>
<div class="container">
    <div class="signInUp">
      <!-- Sign-in Part -->
      <div class="box signin">
        <h1>TAU GAMMA PHI</h1>
   
        <h2>Already have an account ?</h2>
        <button class="signinBtn">Sign in</button>
      </div>

      <!-- Sign-up Part -->
      <div class="box signup">
        <br>
        <h1>TAU GAMMA PHI</h1>
        <p>Be a BROTHER/SISTER, not just a MEMBER
    </p>
        <h2>Don't have an account ?</h2>
        <button class="signupBtn">Sign-up Now</button>
      </div>

    </div>

    <!-- Sign-in Form -->
    <div class="form-box">
      <div class="form signinForm">
      <h1 class="login">Login</h1>
        <div id="errorMessage" class="text-light text-center mt-2 hold-transition  animate__animated animate__zoomIn animate__faster text-bold" style=" display: none; font-size: 15px;"></div>
        <form id='login'>
          <input type="text"name="user" placeholder="Please Enter username" required>
          <div class="password-container">
            <input type="password"name="password" id="passwordField" placeholder="   Please Enter Password" required>
            <span class="toggle-password" onclick="togglePasswordVisibility()">
              <i class="fas fa-eye" id="eyeIcon"></i>
            </span>
          </div>
        
          <div class="submit-btn">
            <input type="submit" value="Log-in Now">
          </div>
          <a href="#" class="forget">Forgot Password?</a>
        </form>
      </div>

      <!-- Sign-up Form -->
      <div class="form signupForm scrollable">
        <h1 class="registration">Registration</h1>
        <br>
        <form>
 
          <input type="text" placeholder="Username" required>
          <div class="form-row">
          <input type="text" placeholder="First Name" class="form-item" required>
          <input type="text" placeholder="Last Name" class="form-item" required>
          </div>
          <input type="text" placeholder="Email Address" required>
            <input type="password" placeholder="Password" required>
          <input type="password" placeholder="Confirm Password" required>
          <div class="form-row">
            <div class="form-item">
            <label for="accountType">Account Type:</label>
            <select id="accountType" name="accountType" onchange="toggleInputType()" required>
                <option value="type1" selected>Member</option>
                <option value="type2">GT</option>
            </select>
        </div>
        <div class="form-item" id="dateInitiatedContainer">
            <label for="dateInitiated">Date Initiated:</label>
            <input type="date" id="dateInitiated" name="dateInitiated" required>
        </div>
        <div class="form-item" id="chapterContainer" style="display:none;">
          <label for="chapterText">Add Chapter:</label>
          <input type="text" id="chapterText" name="chapterText" placeholder="Chapter Name" required>
        </div>
        
        <div class="form-item" id="memberChapterContainer" style="display:none;">
          <label for="memberChapter">Select Chapter:</label>
          <select id="memberChapter" name="memberChapter" required>
          <option value="">None</option>
            <option value="chapter1">Chapter 1</option>
            <option value="chapter2">Chapter 2</option>
            <option value="chapter3">Chapter 3</option>
          </select>
        </div>
        
        <div class="form-item" id="registerContainer">
          <div class="submit-btn">
            <input type="submit" value="Register Now">
          </div>
        </div>
        </form>
      </div>

    </div>
  </div>
  <script src="https://kit.fontawesome.com/8628368ab2.js" crossorigin="anonymous"></script>
  <script src="<?=base_url('assets/js/login.js');?>"></script>
</body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script>
  $(function() {
    $("#login").submit(function(e) { // Corrected the form ID
      e.preventDefault();

      $("#btnSubmit").css('display', 'none');
      $("#errorMessage").html('');

      $.ajax({
        url: "<?= site_url('login/auth') ?>",
        data: $(this).serialize(),
        dataType: "json",
        type: "post",
        success: function(data) {
          if (data.response === "true") {
            $("#submit_preloader").css('display', 'none');
            $("#errorMessage").css('display', 'block');
            $("#errorMessage").html(data.errors);
            window.location.href = '<?= site_url('admin_dashboard') ?>';
          } else {
            $("#errorMessage").css('display', 'block');
            $("#errorMessage").html(data.errors);
            $("#btnSubmit").css('display', 'block');
          }
        },
      });
    });
  });
</script>