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
            border-color: #5a667a;
            background-color: #4a5568;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #e2e8f0;
        }

    </style>
</head>
<body>


<div class="container py-3">
    <div class="d-flex justify-content-between">
        <div class="h4">Employees</div>
        <div class="">

            <a href="{{route('employee.create')}}" class="btn btn-success">Create</a>

            <!-- Create Modal BUTTONS -->
{{--            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#createModal">--}}
{{--                Create--}}
{{--            </button>--}}
        </div>
    </div>
</div>


<div class="rows-lg-6">
    <div class="col-lg-12">
        <div class="card text-center" id="card">
            <div class="card-header">
                Employees
            </div>
            <div class="card-body">
                <table class="table table-responsive-lg table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Address</th>
                        <th scope="col">Image</th>
                        <th scope="col">Other Options</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($employees as $employee)

                        <tr>

                            <th scope="row">{{$employee->id}}</th>
                            <td>{{$employee->name}}</td>
                            <td>{{$employee->email}}</td>
                            <td>{{$employee->address}}</td>
                            <td>{{$employee->image}}</td>
                            <td>

                                <a href="{{ route('employee.edit',$employee->id) }}" class="btn btn-warning">Edit</a>
                                <a href="#" onclick="deleteEmployee({{$employee->id}})" class="btn btn-danger">Delete</a>
                                <form id="employee-destroy-action-{{$employee->id}}" action="{{route('employee.destroy',$employee->id)}}" method="post">
                                    @csrf
                                    @method('delete');
                                </form>

                                {{--

<button type="button" class="btn btn-warning "  data-bs-toggle="modal"--}}
{{--                                        data-bs-target="#updateModal">--}}
{{--                                    Update--}}
{{--                                </button>--}}
{{--                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"--}}
{{--                                        data-bs-target="#deleteModal">--}}
{{--                                    Delete--}}
{{--                                </button>--}}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    function deleteEmployee(id)
    {
        if(confirm("Are u sure ?")){
                document.getElementById('employee-destroy-action-'+id).submit();
        }
    }
</script>

<!--*********************************MODALS START************************-->

<!--CREATE Modal START-->
{{--<div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
{{--    <div class="modal-dialog">--}}
{{--        <div class="modal-content">--}}
{{--            <div class="modal-header">--}}
{{--                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>--}}
{{--                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>--}}
{{--            </div>--}}
{{--            <div class="modal-body">--}}
{{--                ...--}}
{{--            </div>--}}
{{--            <div class="modal-footer">--}}
{{--                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>--}}
{{--                <button type="button" class="btn btn-primary">Save changes</button>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!--CREATE Modal END-->


<!--UPDATE Modal START-->
{{--<div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
{{--    <div class="modal-dialog">--}}
{{--        <div class="modal-content">--}}
{{--            <div class="modal-header">--}}
{{--                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>--}}
{{--                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>--}}
{{--            </div>--}}
{{--            <div class="modal-body">--}}
{{--                ...--}}
{{--            </div>--}}
{{--            <div class="modal-footer">--}}
{{--                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>--}}
{{--                <button type="button" class="btn btn-primary">Save changes</button>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!--UPDATE Modal END-->

<!--Delete Modal START-->
{{--<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
{{--    <div class="modal-dialog">--}}
{{--        <div class="modal-content">--}}
{{--            <div class="modal-header">--}}
{{--                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>--}}
{{--                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>--}}
{{--            </div>--}}
{{--            <div class="modal-body">--}}
{{--                ...--}}
{{--            </div>--}}
{{--            <div class="modal-footer">--}}
{{--                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>--}}
{{--                <button type="button" class="btn btn-primary">Save changes</button>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!--Delete Modal END-->
<!--*********************************MODALS END************************-->


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
