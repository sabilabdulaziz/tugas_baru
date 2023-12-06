<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
</head>
<body>
    <div class="row">
        <div class="col"  >
            <img src="./image/Logos.jpg" alt="image" class="img">
        </div>
        <div class="col">
           <div class="container" id="p">
            <div class="judul"> <img src="./image/Picsart_23-11-30_01-19-10-753.png" alt="ico" class="ico"></div>
           </div>
           <div class="container" id="heading__5">

            <h5>Selamat datang di Entersetream</h5>
           </div>
           <div class="container" id="form__1">
            <form action="{{route('proses-masuk')}}" method="post" id="form">
                @csrf
               <div class="row" id="f_1">
                <div class="col">
                    <label for="email" class="form-label">Login</label>
                    <input type="text" name="email" id="email" class="form-control" placeholder="username or phone number">
                </div>
               </div>
               <div class="row" id="f_2">
                <div class="col">
                    <label for="sandi" class="form-label">sandi</label>
                    <input type="password" name="sandi" id="sandi" class="form-control" placeholder="sandi">
                    <a href="#" class="link-primary">Lupa password</a>
                </div>
               </div>
               <div class="row" id="f_1">
                <div class="col">
                    <input type="submit" id="kirim" class="btn btn-primary" value="masuk">
                </div>
               </div>
               <div class="row" id="link">
                <div class="col">
                    <p id="text">Tidak punya akun ? <a href="{{route('daftar')}}">Daftar disini !</a></p>
                </div>
               </div>
            </form>
           </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
