<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Table Page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <style>
        body{
            background-color: #4a5568;
        }
    </style>
</head>
<body>


<!----------------------- Bootstrap Navbar Start ------------------------->
<nav class="navbar navbar-expand-md  bg-secondary" style="color: #cbd5e0 ;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#" style="color: #e2e8f0">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown link
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!----------------------- Bootstrap Navbar End ------------------------->




<!--------------------USER TABLE START-------------------->

    <div class="row-md-6" style="margin-top: 50px;display: grid;
	place-items: center;">
        <div class="col-md-6">
            <h4 style="display: grid;
	place-items: center;color: #cbd5e0">Kullanıcı Tablosu</h4>
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Ad</th>
                        <th scope="col">Soyad</th>
                        <th scope="col">Kullanıcı Adı</th>
                        <th scope="col">Şifre</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        @csrf
                        <tr>
                            <th scope="row">{{ $user->id }}</th>
                            <td> {{ $user->name }}</td>
                            <td>{{ $user->surName }}</td>
                            <td>{{ $user->userId }}</td>
                            <td>{{ $user->passw }}</td>
                            <td></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

<!--------------------USER TABLE END---------------------->




<!--------BOOTSTRAP CDN LINKS START------->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<!--------BOOTSTRAP CDN LINKS START------->
</body>
</html>
