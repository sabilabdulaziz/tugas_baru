<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{asset('style/style2.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <img src="{{asset('image/Picsart_23-11-30_01-19-10-753.png')}}" alt="ico" id="ico">
   <div class="content">
    <div class="row" id="b-1">
        <div class="col">
            <label id="form-label" for="password" class="form-label">Masukan password baru anda </label>
            <input type="password" class="form-control" name="password" id="password" placeholder="password">
        </div>
    </div>
    <div class="row" id="b-2">
        <div class="col">
            <label id="form-label" for="password" class="form-label">Masukan ulang password baru anda </label>
            <input type="password" class="form-control" name="password" id="password" placeholder="password">
        </div>
    </div>
    <div class="row" id="b-2">
        <div class="col">
            <input type="submit" value="kirim" class="btn btn-primary" id="send">
        </div>
    </div>
   </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
