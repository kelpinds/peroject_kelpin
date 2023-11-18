<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/bootstrap-icons.min.css">
    <title>Document</title>
</head>
<body>
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card bg-dark text-white" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">
      
                  <div class="mb-md-5 mt-md-4 pb-5">
      
                    <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                    <p class="text-white-50 mb-5">Please enter your login and password!</p>
      
                    <form action="" method="post" class="mt-5">
                      @csrf
                      <div class="mb-3">
                          <input type="text" id="username" name="username" class="form-control py-2" placeholder="Username">
                      </div>
                      <div class="mb-3">
                          <input type="password" id="password" name="password" class="form-control py-2" placeholder="Password">
                      </div>
                      <div class="mb-3">
                          <button class="btn btn-outline-light form-control">Sign in</button>
                      </div>
      
                  </div>
      
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</body>
</html>