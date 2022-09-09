<!doctype html>
<html lang="en">
  <head><?php include 'head.php'; ?></head>
  <body>
    <div class="container-fluid p-0">
      <div class="row m-0">
        <div style="" class="col-xl-4 col-lg-12 m-auto p-0">
            <div class="right">
              <div class="card bg-transparent border-0">
                <form method="POST" action="controller/controller.php">
                  <h3 class="title_signin mt-4">Sign In <?php echo $title; ?></h3>
                  <label>Enter your username and password to sign in</label>
                  <br><br>
                  <div class="form-group">
                    <label>Username*</label>
                    <div class="form-control pl-2 p-0 border-0 bg-white d-flex" style="place-items: center;">
                      <i class="fas fa-user text-muted"></i>
                      <input type="text" name="username" id="username" placeholder="<?php echo $title; ?> ID" class="rounded w-100 h-100 pl-2 border-0" style="outline: none;">
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Password*</label>
                    <div class="form-control pl-2 pr-2 p-0 border-0 bg-white d-flex" style="place-items:center;">
                      <i class="fas fa-lock text-muted"></i>
                      <input id="password-field" type="password" name="password" placeholder="********" class="rounded w-100 h-100 pl-2 border-0" style="outline: none;">
                      <i toggle="#password-field" class="fas fa-eye text-muted toggle-password"></i>
                    </div>
                  </div>
                  <div class="form-group d-none">
                    <div class="form-control p-0 border-0">
                      <input type="submit" name="login" class="rounded signin btn-lg text-white w-100 border-0" value="Sign in" style="outline: none;background-color: #82abdd;" onclick="lsRememberMe()">
                    </div>
                  </div>
                  <div>
                    <div class="text-center">
                      <a href="#" class="text-decotation-none text-muted">Forgot <?php echo $title; ?> ID or password?</a>
                    </div>
                  </div>
                  <br>
                  <br>
                  <div>
                    <div class="text-muted text-center">
                      Dont' have an <?php echo $title; ?> ID?
                      <br>
                      <a href="#">Contact us now!</a>
                    </div>
                  </div>
                  
                </form>
              </div>
            </div>
        </div>
        <div class="col-xl-7 col-lg-12 p-0" style="position: relative;overflow: hidden;">
          <div style="position: absolute;width: 100%;height: 100%;z-index: 1">
            <div class="slider">
              <img src="https://images.unsplash.com/photo-1485893086445-ed75865251e0?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8cGVvcGxlfGVufDB8MnwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60" />
              <img src="https://images.unsplash.com/photo-1479936343636-73cdc5aae0c3?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cGVvcGxlfGVufDB8MnwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60" />
              <img src="https://images.unsplash.com/photo-1519699047748-de8e457a634e?ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8cGVvcGxlfGVufDB8MnwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60" />
              <img src="https://images.unsplash.com/photo-1529068755536-a5ade0dcb4e8?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8cGVvcGxlfGVufDB8MnwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60" />
              <img src="https://images.unsplash.com/photo-1499887142886-791eca5918cd?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8cGVvcGxlfGVufDB8MnwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60" />
              <img src="https://images.unsplash.com/photo-1484186304838-0bf1a8cff81c?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8cGVvcGxlfGVufDB8MnwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60" />
              <img src="https://images.unsplash.com/photo-1484611941511-3628849e90f7?ixid=MnwxMjA3fDB8MHxzZWFyY2h8N3x8cGVvcGxlfGVufDB8MnwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60" />
              <img src="https://images.unsplash.com/photo-1485206412256-701ccc5b93ca?ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8cGVvcGxlfGVufDB8MnwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include 'footer.php'; ?>
  </body>
</html>