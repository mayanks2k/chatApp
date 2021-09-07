<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?> 
<?php include_once "header.php"; ?>
    <body>
          <div class="wrapper">
              <section class="form signup">
                  <header>
                      Realtime Chat App
                  </header>
                  <form action="#" enctype="multipart/form-data">
                      <div class="error-text">there is an error </div>
                      <div class="name-details"> 
                          <div class="field input">
                            <label>First Name</label>
                            <input type="text" name="fname" placeholder="First Name" required> 
                          </div>
                          <div class="field input">
                            <label>Last Name</label>
                            <input type="text" name="lname" placeholder="Last Name" required> 
                          </div>
                    </div>
                          <div class="field input">
                            <label>Email</label>
                            <input type="Email" name ="email" placeholder="Enter your  Email" required>
                          </div>
                          <div class="field input">
                            <label>Password</label>
                            <input type="password" name="password" placeholder="Enter new  Password" required>
                            <i class="fas fa-eye"> </i>
                          </div>
                          <div class="field button ">
                            <input type="submit" value="Continue to Chat"> 
                          </div>
                      
                  </form>
                  <div class="link">
                      Already signed up?<a href="login.php">login here</a>
                  </div>
              </section>
          </div>

      <script src="javascript/pass-show-hide.js"></script>
      <script src="javascript/signup.js"></script>
    </body>
</html>  
