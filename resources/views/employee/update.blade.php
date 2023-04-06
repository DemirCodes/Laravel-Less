<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>

        body {
            background-color: #4a5568;
            color: #e2e8f0;
            font-family: 'Mukta', sans-serif;
        @import url('https://fonts.googleapis.com/css2?family=Mukta:wght@200&display=swap');
        }

        #card {
            border-color: #bacbe6;
            background-color: #4a5568;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #e2e8f0;
            /*margin-left: 500px;*/
        }

    </style>
</head>
<body>


<div class="container py-3">
    <div class="d-flex justify-content-between">
        <div class="h4">Employees</div>
        <div class="">

            <a href="{{route('employee.index')}}" class="btn btn-dark">Back</a>

            <!-- Create Modal BUTTONS -->
            {{--            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#createModal">--}}
            {{--                Create--}}
            {{--            </button>--}}
        </div>
    </div>
</div>

@if(Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
@endif

<div class="rows-lg-6">
    <div class="col-lg-12">
        <div class="card" id="card">
            <h5 class="card-header" style="border-bottom-color: black">Update Employee Form</h5>
            <div class="card-body">
                <form action="{{route('employee.store')}}">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Name :</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                               id="empCreateName" placeholder="Please enter your name
                               " value="{{old('name')}}">
                        @error('name')
                        <p class="valid-feedback">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email :</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                               id="empCreateMail" aria-describedby="emailHelp"
                               placeholder="Please enter your email@ ..." value="{{old('email')}}">
                        @error('email')
                        <p class="valid-feedback">{{$message}}</p>
                        @enderror
                    </div>
                    <label for="#empCreateAddress" class="form-label">Address :</label>
                    <div class="input-group">
                        <span class="input-group-text">Address :</span>
                        <textarea class="form-control @error('address') is-invalid @enderror" name="address"
                                  id="empCreateAddress" aria-label="With textarea"
                                  placeholder="Please enter your address 'Country/City' ...
                        ">{{old('address')}}</textarea>
                        @error('address')
                        <p class="valid-feedback">{{$message}}</p>
                        @enderror
                    </div>
                    <br>
                    <label for="#empCreateImage" class="form-label">Image :</label>
                    <div class="input-group">
                        <input type="file" name="image" class="form-control" id="empCreateImage"
                               aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                        @error('image')
                        <p class="valid-feedback">{{$message}}</p>
                        @enderror
                    </div>
                    <br>
                    <button type="submit" class="btn btn-success">Create</button>
                </form>
            </div>
        </div>
    </div>
</div>


<!------------------BOOTSTRAP CDN LINKS START ----------------->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
        integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
<!------------------BOOTSTRAP CDN LINKS END ------------------->
</body>
</html>
