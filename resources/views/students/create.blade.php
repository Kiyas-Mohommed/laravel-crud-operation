<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Laravel-Crud</title>
    <link rel="stylesheet" href="{{ url('css/mdb.min.css') }}">
</head>

<body>

    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-3"></div>

            <div class="col-lg-6">
                <h3 class="mb-4">Laravel CRUD</h3>

                <form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-lg-6">
                            <div class="form-outline">
                                <input type="text" name="full_name" id="typeText" class="form-control" />
                                <label class="form-label" for="typeText">Full Name</label>
                            </div>

                            @error('full_name')
                                <span class="error text-danger h6">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-lg-6">
                            <div class="form-outline">
                                <input type="email" name="email" id="typeEmail" class="form-control" />
                                <label class="form-label" for="typeEmail">Email</label>
                            </div>

                            @error('email')
                                <span class="error text-danger h6">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-lg-6">
                            <div class="form-outline">
                                <input type="password" name="password" id="typePassword" class="form-control" />
                                <label class="form-label" for="typePassword">Password</label>
                            </div>

                            @error('password')
                                <span class="error text-danger h6">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-lg-6">
                            <div class="form-outline">
                                <input type="tel" name="mobile" id="typePhone" class="form-control" />
                                <label class="form-label" for="typePhone">Mobile Number</label>
                            </div>

                            @error('mobile')
                                <span class="error text-danger h6">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-lg-12">
                            <select class="form-select" name="subject">
                                <option value="html">HTML</option>
                                <option value="css">CSS</option>
                                <option value="java script">JAVA SCRIPT</option>
                                <option value="php" selected>PHP</option>
                                <option value="laravel">LARAVEL</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-lg-12">
                            <div>
                                <input type="file" name="images" class="form-control" id="customFile" />
                            </div>

                            {{-- @error('images')
                                <span class="error text-danger h6">{{ $message }}</span>
                            @enderror --}}
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-rounded float-end">Add Recorde</button>
                </form>


            </div>

            <div class="col-lg-3"></div>
        </div>
    </div>

    <script src="{{ url('js/mdb.min.js') }}"></script>
</body>

</html>
