<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> Admin Login </title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">

    </head>

    <body>
        <div class="container">
            <div class="row">
              <div class="col-md-6 offset-md-3">
                <h2 class="text-center text-dark mt-5">Loan App Login</h2>
                <div class="card my-5">

                  <form class="card-body cardbody-color p-lg-5" action="{{ url('adminDashboard') }}">

                    <div class="text-center">
                      <img src="https://cdn.pixabay.com/photo/2017/07/18/23/40/group-2517459_1280.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                        width="200px" alt="profile">
                    </div>

                    <div class="mb-3">
                      <input type="text" class="form-control" id="Username" aria-describedby="emailHelp"
                        placeholder="Enter Username " required minlength="5">
                    </div>
                    <div class="mb-3">
                      <input type="password" class="form-control" id="password" placeholder="Enter Password" required minlength="8">
                    </div>
                    <div class="text-center"><button type="submit" class="btn btn-color px-5 mb-5 w-100 bg-info text-light">Login</button></div>
                    <div id="emailHelp" class="form-text text-center mb-5 text-dark">Forgot Password? <a href="#" class="text-dark fw-bold"> Change Password</a>
                    </div>
                  </form>
                </div>

              </div>
            </div>
          </div>
    </body>

</html>
