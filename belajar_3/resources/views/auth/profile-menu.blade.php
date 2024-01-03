<!DOCTYPE html>
<html lang="en">
<head>
    <!--boostrap link-->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!--end -->
    <link rel="stylesheet" href="{{asset('style/p.css')}}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('upload-profil')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="text-center">
            <img src="{{asset('')}}" class="rounded image rounded-circle" alt="...">
            <input type="file" class="form-control control" name="photo">
          </div>

          <div class="container">
            <div class="row">
                <div class="col">
                    <label for="username" class="form-label">username</label>
                    <input type="text"  name="name" class="form-control"id="inputan" value="{{auth()->user()->name}}">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="username" class="form-label">email</label>
                    <input type="text"  name="email" class="form-control email"id="inputan" value="{{auth()->user()->email}}">
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="username" class="form-label">bio</label>
                   <textarea name="tentang"  cols="20" rows="5" class="form-control tentang"></textarea>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <input type="submit" class="btn btn-primary" value="update">
                </div>
            </div>
          </div>
    </form>
    <form action="#" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col">
                <input type="submit" class="btn btn-danger" value="delete account">
            </div>
        </div>

    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
