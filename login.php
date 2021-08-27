<?php include_once "header.php"; ?>
    <body>
          <div class="wrapper">
              <section class="form login">
                  <header>
                      Realtime Chat App
                  </header>
                  <form action="#">
                    <div class="error-text"> </div>
                    <div class="field input">
                      <label>Email</label>
                      <input type="Email" name="email" placeholder="Enter your  Email">
                    </div>
                    <div class="field input">
                      <label>Password</label>
                      <input type="password" name="password" placeholder="Enter Password"> 
                      <i class="fas fa-eye"> </i>
                    </div>
                    <div class="field button ">
                      <input type="submit" value="Continue to Chat"> 
                    </div>
                  </form>
                  <div class="link">
                      Not yet signed up?<a href="index.php">Signup Now</a>
                  </div>
              </section>
          </div>
      <script src="javascript/pass-show-hide.js"></script>
      <script src="javascript/login.js"></script>
    </body>
</html>   