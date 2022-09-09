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
                  <h3 class="title_signin mt-4 text-center">Sign In <?php echo $title; ?></h3>
                  <br><br>
                  <div class="form-group text-center">
                    <label>Hi John Doe</label>
                    <h4 class="text-muted">Enter your PIN to unlock</h4>
                    <div class=" p-3" style="place-items: center;">
                      <div class="d-flex" style="justify-content: center;">
                        <div class="circlepin circlepin1">
                          <input type="hidden" name="i1" class="i1 inputnumber ml-2 mr-2">
                        </div>
                        <div class="circlepin circlepin2">
                          <input type="hidden" name="i2" class="i2 inputnumber ml-2 mr-2">
                        </div>
                        <div class="circlepin circlepin3">
                          <input type="hidden" name="i3" class="i3 inputnumber ml-2 mr-2">
                        </div>
                        <div class="circlepin circlepin4">
                          <input type="hidden" name="i4" class="i4 inputnumber ml-2 mr-2">
                        </div>
                        <div class="circlepin circlepin5">
                          <input type="hidden" name="i5" class="i5 inputnumber ml-2 mr-2">
                        </div>
                      </div>
                    </div>
                    <div>
                      <div class="mt-2">
                        <button type="button" class="number m-2" value="1">1</button>
                        <button type="button" class="number m-2" value="2">2</button>
                        <button type="button" class="number m-2" value="3">3</button>
                      </div>
                      <div class="mt-2">
                        <button type="button" class="number m-2" value="4">4</button>
                        <button type="button" class="number m-2" value="5">5</button>
                        <button type="button" class="number m-2" value="6">6</button>
                      </div>
                      <div class="mt-2">
                        <button type="button" class="number m-2" value="7">7</button>
                        <button type="button" class="number m-2" value="8">8</button>
                        <button type="button" class="number m-2" value="9">9</button>
                      </div>
                      <div class="mt-2">
                        <button type="button" class="number m-2" value="0">0</button>
                      </div>
                      <!-- <button type="button" class="reset"><i class="fas fa-times"></i></button> -->
                    </div>
                  </div>
                  <br>
                  <div>
                    <div class="text-center">
                     Not [First name]?  <a href="#" class="text-decotation-none font-weight-bold text-muted">Sign out</a>
                    </div>
                  </div>
                  <br>
                  <br>
                  <br>
                  <br>
                  <div>
                    <div class="text-muted text-center">
                      <ul class="pl-0 m-auto">
                        <li class="pl-3 pr-3"><a href="#" class="text-decotation-none text-muted small">Help and Support</a></li>
                        <li class="pl-3 pr-3"><a href="#" class="text-decotation-none text-muted small">version 0.1</a></li>
                        <li class="pl-3 pr-3"><a href="#" class="text-decotation-none text-muted small">Forgot PIN?</a></li>
                      </ul>
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