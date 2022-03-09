<div class="card mb-3">
    <img src="https://cdn.pixabay.com/photo/2020/08/23/14/58/education-5511048_1280.png" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title text-center my-5">List of Students</h5>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">CNE</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Speciality</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <th scope="row">{{ $student->cne }}</th>
                        <td colspan="2">{{ $student->firstName }}</td>
                        <td>{{ $student->lastName }}</td>
                        <td>{{ $student->age }}</td>
                        <td>{{ $student->speciality }}</td>
                        <td>
                            <a href="{{ url('student/' . $student->id . '/edit') }}"
                                class="btn btn-sm btn-warning">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
