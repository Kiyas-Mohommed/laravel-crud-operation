<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Laravel-Crud</title>
    <link rel="stylesheet" href="{{ url('css/mdb.min.css') }}">
</head>

<body>

    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-12">

                <div class="my-3 float-end">
                    <a href="{{ route('students.create') }}" class="btn btn-success btn-rounded">Add New</a>
                </div>

                <table class="table align-middle mb-0 bg-white">

                    <thead class="bg-dark text-white">
                        <tr class="text-center">
                            <th>ID</th>
                            <th>Images</th>
                            <th>Full Names</th>
                            <th>Emails</th>
                            <th>Mobiles</th>
                            <th>Subjects</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody class="bg-light text-dark">

                        @foreach ($students as $student)
                            <tr class="text-center">
                                <td>
                                    <p class="fw-normal mb-1">{{ $student->id }}</p>
                                </td>

                                <td>
                                    <img style="width: 60px; height: 60px;" class="img-fluid rounded"
                                        src="{{ $student->images }}">
                                </td>

                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="ms-3">
                                            <p class="mb-1">{{ $student->full_name }}</p>
                                        </div>
                                    </div>
                                </td>

                                <td>
                                    <p class="fw-normal mb-1">{{ $student->email }}</p>
                                </td>


                                <td>{{ $student->mobile }}</td>
                                <td>
                                    <h6>
                                        <span
                                            class="badge badge-success rounded d-inline p-2">{{ $student->subject }}</span>
                                    </h6>
                                </td>

                                <td>
                                    <form action="{{ route('students.destroy', $student->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <a href="{{ route('students.edit', $student->id) }}"
                                            class="btn btn-link btn-sm btn-rounded">Edit</a>
                                        <input type="submit" class="btn btn-link btn-sm btn-rounded" value="Delete">

                                    </form>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>

            </div>
        </div>
    </div>

    <script src="{{ url('js/mdb.min.js') }}"></script>
</body>

</html>
