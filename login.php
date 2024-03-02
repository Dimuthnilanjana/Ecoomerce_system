<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<!-- Section: Design Block -->
<section class="background-radial-gradient overflow-hidden">
  <style>
    .background-radial-gradient {
      background-color: hsl(218, 41%, 15%);
      background-image: radial-gradient(650px circle at 0% 0%,
          hsl(218, 41%, 35%) 15%,
          hsl(218, 41%, 30%) 35%,
          hsl(218, 41%, 20%) 75%,
          hsl(218, 41%, 19%) 80%,
          transparent 100%),
        radial-gradient(1250px circle at 100% 100%,
          hsl(218, 41%, 45%) 15%,
          hsl(218, 41%, 30%) 35%,
          hsl(218, 41%, 20%) 75%,
          hsl(218, 41%, 19%) 80%,
          transparent 100%);
    }

    #radius-shape-1 {
      height: 220px;
      width: 220px;
      top: -60px;
      left: -130px;
      background: radial-gradient(#44006b, #ad1fff);
      overflow: hidden;
    }

    #radius-shape-2 {
      border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
      bottom: -60px;
      right: -110px;
      width: 300px;
      height: 300px;
      background: radial-gradient(#44006b, #ad1fff);
      overflow: hidden;
    }

    .bg-glass {
      background-color: hsla(0, 0%, 100%, 0.9) !important;
      backdrop-filter: saturate(200%) blur(25px);
    }
  </style>

  <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
    <div class="row gx-lg-5 align-items-center mb-5">
      <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
        <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
          LOGIN  <br />
          <span style="color: hsl(218, 81%, 75%)">The Future Store : Your smart partner</span>
        </h1>
        <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
        Welcome to Future Store Mobile Shop, where innovation meets convenience! At Future Store, we are dedicated to providing you with the latest and most cutting-edge mobile devices to suit your digital lifestyle needs. Whether you're a tech enthusiast, a professional on-the-go, or a casual user, we have something for everyone.
        </p>
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
        <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
        <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

        <div class="card bg-glass">
          <div class="card-body px-4 py-5 px-md-5">
            <form class="text-center">
              <!-- 2 column grid layout with text inputs for the first and last names -->
             

              <!-- Email input -->
              <div class="form-outline mb-4">
                <input type="email" id="useremail" class="form-control" />
                <label class="form-label" for="useremail">Email address</label>
              </div>

              <!-- Password input -->
              <div class="form-outline mb-4">
                <input type="password" id="userpassword" class="form-control" />
                <label class="form-label" for="userpassword">Password</label>
              </div>

              <!-- Checkbox -->
              <div class="form-check d-flex justify-content-center mb-4">
                <input class="form-check-input me-2" type="checkbox" value="" id="passwordcheck" checked />
                <label class="form-check-label" for="passwordcheck">
                  remember username & password
                </label>
              </div>

              <!-- Submit button -->
              <button type="submit" class="btn btn-primary btn-lg btn-block">
                Login
              </button>

              <p class="text-center py-3">
                If you haven't registered.Please <a href="signup.php">sign up now</a>
              </p>

              
              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->


<script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
