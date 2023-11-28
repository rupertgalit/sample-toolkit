 // left right sliding login - register animation script
 const signinBtn = document.querySelector(".signinBtn");
 const signupBtn = document.querySelector(".signupBtn");
 const formBx = document.querySelector(".form-box");
 const body = document.querySelector("body");
 
 signupBtn.onclick = function () {
   formBx.classList.add("active");
   body.classList.add("active");
   toggleInputType(); // Call the function when switching to signup form
 };
 
 signinBtn.onclick = function () {
   formBx.classList.remove("active");
   body.classList.remove("active");
   toggleInputType(); // Call the function when switching to signin form
 };
 
 function toggleInputType() {
     const accountTypeSelect = document.getElementById('accountType');
     const dateInitiatedContainer = document.getElementById('dateInitiatedContainer');
     const chapterContainer = document.getElementById('chapterContainer');
     const memberChapterContainer = document.getElementById('memberChapterContainer');
 console.log(accountTypeSelect.value);
     if (accountTypeSelect.value === 'GT') {
         dateInitiatedContainer.style.display = 'none';
         chapterContainer.style.display = 'block';
         memberChapterContainer.style.display = 'none';
     } else if (accountTypeSelect.value === 'Member') {
         dateInitiatedContainer.style.display = 'block';
         chapterContainer.style.display = 'none';
         memberChapterContainer.style.display = 'block';
     }
 }
function togglePasswordVisibility() {
  const passwordField = document.getElementById('passwordField');
  const eyeIcon = document.getElementById('eyeIcon');

  if (passwordField.type === 'password') {
    passwordField.type = 'text';
    eyeIcon.classList.remove('fa-eye');
    eyeIcon.classList.add('fa-eye-slash');
  } else {
    passwordField.type = 'password';
    eyeIcon.classList.remove('fa-eye-slash');
    eyeIcon.classList.add('fa-eye');
  }
}
