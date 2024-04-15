<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <link rel="stylesheet" href="Assets/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <style>
    .modal {
      display: none;
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(0, 0, 0, 0.5);
  }

  .modal-content {
      background-color: #fefefe;
      margin: 15% auto;
      padding: 20px;
      border: 1px solid #888;
      width: 40%;
      border-radius: 5px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      text-align: center;
  }

  .close {
      color: #aaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
  }

  .close:hover,
  .close:focus {
      color: black;
      text-decoration: none;
      cursor: pointer;
  }

  .success-icon {
      color: #28a745;
      font-size: 64px;
      margin-bottom: 20px;
  }

  .success-text {
      font-size: 20px;
      margin-bottom: 10px;
  }

  .redirect-text {
      font-size: 16px;
      color: #666;
  }
</style>
</head>
<body>
  <div class="wrapper">
    <header>Login Form</header>
    <form action="Partials/login_process.php" method="POST">
            <div class="field">
                <div class="input-area">
                    <i class="icon fas fa-envelope"></i>
                    <input type="email" id="email" name="email" placeholder="Email" required>
                </div>
            </div>
            
            <div class="field">
                <div class="input-area">
                    <i class="icon fas fa-lock"></i>
                    <input type="password" id="password" name="password" placeholder="Password" required>
                </div>
            </div>
            
            <input type="submit" value="Login">
        </form>

    <div class="sign-txt">Not yet member? <a href="register.php">Signup now</a></div>
    

 <!-- Modal -->
 <div id="myModal" class="modal">
  <div class="modal-content">
      <span class="close">&times;</span>
      <i class="fas fa-check-circle success-icon"></i>
      <p class="success-text">Successfully Logged In!</p>
      <p class="redirect-text">You will be redirected to the Driver Portal shortly...</p>
  </div>
</div>

  </div>
  

  <script src="https://kit.fontawesome.com/a076d05399.js"></script>

  <script>
    const form = document.querySelector("form");
eField = form.querySelector(".email"),
eInput = eField.querySelector("input"),
pField = form.querySelector(".password"),
pInput = pField.querySelector("input");

form.onsubmit = (e)=>{
  e.preventDefault(); //preventing from form submitting
  //if email and password is blank then add shake class in it else call specified function
  (eInput.value == "") ? eField.classList.add("shake", "error") : checkEmail();
  (pInput.value == "") ? pField.classList.add("shake", "error") : checkPass();

  setTimeout(()=>{ //remove shake class after 500ms
    eField.classList.remove("shake");
    pField.classList.remove("shake");
  }, 500);

  eInput.onkeyup = ()=>{checkEmail();} //calling checkEmail function on email input keyup
  pInput.onkeyup = ()=>{checkPass();} //calling checkPassword function on pass input keyup

  function checkEmail(){ //checkEmail function
    let pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/; //pattern for validate email
    if(!eInput.value.match(pattern)){ //if pattern not matched then add error and remove valid class
      eField.classList.add("error");
      eField.classList.remove("valid");
      let errorTxt = eField.querySelector(".error-txt");
      //if email value is not empty then show please enter valid email else show Email can't be blank
      (eInput.value != "") ? errorTxt.innerText = "Enter a valid email address" : errorTxt.innerText = "Email can't be blank";
    }else{ //if pattern matched then remove error and add valid class
      eField.classList.remove("error");
      eField.classList.add("valid");
    }
  }

  function checkPass(){ //checkPass function
    if(pInput.value == ""){ //if pass is empty then add error and remove valid class
      pField.classList.add("error");
      pField.classList.remove("valid");
    }else{ //if pass is empty then remove error and add valid class
      pField.classList.remove("error");
      pField.classList.add("valid");
    }
  }

  //if eField and pField doesn't contains error class that mean user filled details properly
  if(!eField.classList.contains("error") && !pField.classList.contains("error")){
    window.location.href = form.getAttribute("action"); //redirecting user to the specified url which is inside action attribute of form tag
  }
}
  </script>
  <script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on the button, open the modal
    function showModal() {
        modal.style.display = "block";
        // Simulate form submission
        setTimeout(function() {
            modal.style.display = "none";
            window.location.href = "Driver/DriverPortal.php";
        }, 3000);
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }
</script>
</body>
</html>