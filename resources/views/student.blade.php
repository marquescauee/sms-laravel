<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <title>Student Management System</title>
</head>

<body>

    @include('navbar')

    @if ($layout == 'index')
        <div class="container-fluid mt-4">
            <div class="container-fluid mt-4">
                <div class="row justify-content-center">
                    <section class="col-md-5">
                        @include('studentlist')
                    </section>
                </div>
            </div>
        </div>
    @elseif($layout == 'create')
        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col">
                    @include('studentlist')
                </section>
                <section class="col">

                    <div class="card mb-3">
                        <img src="https://cdn.pixabay.com/photo/2020/06/16/23/33/education-5307517_1280.png"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Enter the information of the new student</h5>

                            <form action="{{ route('student.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label>CNE</label>
                                    <input name="cne" type="text" class="form-control" placeholder="Enter CNE">
                                </div>
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input name="firstName" type="text" class="form-control"
                                        placeholder="Enter First Name">
                                </div>
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input name="lastName" type="text" class="form-control"
                                        placeholder="Enter Last Name">
                                </div>
                                <div class="form-group">
                                    <label>Age</label>
                                    <input name="age" type="text" class="form-control" placeholder="Enter Your Age">
                                </div>
                                <div class="form-group">
                                    <label>Speciality</label>
                                    <input name="speciality" type="text" class="form-control"
                                        placeholder="Enter speciality">
                                </div>
                                <input type="submit" class="btn btn-info mt-3" value="Save">
                                <input type="reset" class="btn btn-warning mt-3" value="Reset">
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    @elseif($layout == 'show')
        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col">
                    @include('studentlist')
                </section>
                <section class="col"></section>
            </div>
        </div>
    @elseif($layout == 'edit')
        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col-md-7">
                    @include('studentlist')
                </section>
                <section class="col-md-5">
                    <div class="card mb-3">
                        <img src="https://cdn.pixabay.com/photo/2020/06/16/23/33/education-5307517_1280.png"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Update Student's info</h5>

                            <form action="{{ url('student/' . $student->id) }}" method="POST">
                                @csrf
                                @method("PUT")
                                <div class="form-group">
                                    <label>CNE</label>
                                    <input value="{{ $student->cne }}" name="cne" type="text" class="form-control"
                                        placeholder="Enter CNE">
                                </div>
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input value="{{ $student->firstName }}" name="firstName" type="text"
                                        class="form-control" placeholder="Enter First Name">
                                </div>
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input value="{{ $student->lastName }}" name="lastName" type="text"
                                        class="form-control" placeholder="Enter Last Name">
                                </div>
                                <div class="form-group">
                                    <label>Age</label>
                                    <input value="{{ $student->age }}" name="age" type="text" class="form-control"
                                        placeholder="Enter Your Age">
                                </div>
                                <div class="form-group">
                                    <label>Speciality</label>
                                    <input value="{{ $student->speciality }}" name="speciality" type="text"
                                        class="form-control" placeholder="Enter speciality">
                                </div>
                                <input type="submit" class="btn btn-info mt-3" value="Update">
                                <input type="reset" class="btn btn-warning mt-3" value="Reset">
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    @endif

    <footer>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
