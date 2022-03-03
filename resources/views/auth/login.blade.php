<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Restaurant - Login</title>
</head>

<body>

  <div class="container">
    <div class="row mt-5 justify-content-center">
      <div class="col-5 mt-5">
        <div class="card">
          <div class="card-header text-center pb-0">
            <p class="fs-5">Login Form</p>
          </div>
          <div class="card-body">
            <form action="{{ route('login') }}" method="POST">
              @csrf
              <div class="mb-3">
                <label class="form-label">Email :</label>
                <input type="text" name="email" class="form-control">
              </div>
              <div class="mb-3">
                <label class="form-label">Password :</label>
                <input type="password" name="password" class="form-control">
              </div>

              <div class="d-grid">
                <button class="btn btn-primary" type="submit">Login</button>
              </div>
            </form>
          </div>
          <div class="card-footer text-center p-0">
            <small>&copy; {{ date('Y') }}</small>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
