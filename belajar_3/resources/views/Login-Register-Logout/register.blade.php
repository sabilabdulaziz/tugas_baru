<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up page</title>
</head>
<body>
    <div class="container"><div class="judul-1"> <img src="./image/Picsart_23-11-30_01-19-10-753.png" alt="icon" class="icon"></div></div>
    <div class="container">
        <h5 id="heading__5_1">silahkan anda mendaftar melalui form dibawah ini</h5>
    </div>
    <div class="container" id="form-page">
        <form action="{{route('proses-daftar')}}" method="post">
            @csrf
            <div class="row" id="b-1">
                <div class="col">
                    <input type="text" name="name" id="username" placeholder="username" class="form-control @error('username')is-invalid @enderror" value="{{old('username')}}">
                   @error('username')
                    <div  class="invalid-feedback">
                        {{$message}}
                    </div>
                   @enderror
                </div>
            </div>
            <div class="row" id="e">
                <div class="col">
                    <input type="text" name="email" id="email-1"placeholder="email" class="form-control @error('email')is-invalid @enderror" value="{{old('email')}}">
                    @error('email')
                    <div  class="invalid-feedback">
                        {{$message}}
                    </div>
                   @enderror
                </div>
            </div>
            <div class="row" id="pw-n">
                <div class="col">
                    <label for="password" class="form-label" id="pw">8-20 karakter dari minimal 2 kategori: huruf, angka, karakter khusus.</label>
                    <input type="password" name="password" id="password" placeholder="masukan password baru" class="form-control @error('password')is-invalid @enderror">
                    @error('password')
                    <div  class="invalid-feedback">
                        {{$message}}
                    </div>
                   @enderror
                </div>
            </div>
            <div class="row" id="pw-n">
                <div class="col">
                    <input type="password" name="rtype_password" id="retype_password" placeholder="masukan ulang password" class="form-control  @error('rtype_password')is-invalid @enderror">
                    @error('rtype_password')
                    <div  class="invalid-feedback">
                        {{$message}}
                    </div>
                   @enderror
                </div>
            </div>

            <div class="row" id="daftar">
                <div class="col">
                    <input type="submit"  id="daftar" value="Daftar" class="btn btn-primary">
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
