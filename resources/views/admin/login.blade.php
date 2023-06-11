<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/login.css" />
    <title>Login</title>
    <link rel="icon" href="../pict/PET.png" type="image/jpg" />
  </head>
  <body>
    <section>
      <div class="form-box">
        <div class="form-value">
        <form action="{{ route('login_aksi') }}" method="post">
            @csrf
            <center><img src="../pict/logo.png" style="width: 250px" /></center>
            <div class="inputbox">
              <ion-icon name="person-outline"></ion-icon>
              <input type="text" name = "username" required placeholder="Username" />
            </div>
            <div class="inputbox">
              <ion-icon name="lock-closed-outline"></ion-icon>
              <input type="password" name="password" required placeholder="Password" />
            </div>
            <button name="login">Log in</button>
          </form>
        </div>
      </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  </body>
</html>
