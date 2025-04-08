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
            <div class="col-lg-2"></div>

            <div class="col-lg-6">
                <h3 class="mb-4">Laravel CRUD</h3>

                <form action="" method="POST" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    @method('PATCH')

                    <input type="hidden" name="id" id="id" value="{{ $student->id }}" id="id" />

                    <div class="row mb-3">
                        <div class="col-lg-6">
                            <div class="form-outline">
                                <input type="text" name="full_name" value="{{ $student->full_name }}" id="typeText"
                                    class="form-control" />
                                <label class="form-label" for="typeText">Full Name</label>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-outline">
                                <input type="email" name="email" value="{{ $student->email }}" id="typeEmail"
                                    class="form-control" />
                                <label class="form-label" for="typeEmail">Email</label>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-lg-6">
                            <div class="form-outline">
                                <input type="password" name="password" value="{{ $student->password }}"
                                    id="typePassword" class="form-control" />
                                <label class="form-label" for="typePassword">Password</label>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-outline">
                                <input type="tel" name="mobile" value="{{ $student->mobile }}" id="typePhone"
                                    class="form-control" />
                                <label class="form-label" for="typePhone">Mobile Number</label>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-lg-12">
                            <div class="form-outline">
                                <select class="form-select" name="subject">

                                    <option value="html" {{ $student->subject == 'html' ? 'selected' : '' }}>HTML
                                    </option>
                                    <option value="css" {{ $student->subject == 'css' ? 'selected' : '' }}>CSS
                                    </option>
                                    <option value="java script"
                                        {{ $student->subject == 'java script' ? 'selected' : '' }}>JAVA SCRIPT</option>
                                    <option value="php" {{ $student->subject == 'php' ? 'selected' : '' }}>PHP
                                    </option>
                                    <option value="laravel" {{ $student->subject == 'laravel' ? 'selected' : '' }}>
                                        LARAVEL</option>

                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-lg-12">
                            <div>
                                <input type="file" name="images" class="form-control" id="customFile" />
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-rounded float-end">Save Recorde</button>
                </form>
            </div>

            <div class="col-lg-4">
                <center>
                    <img style="width: 110px; height: 110px;" class="img-fluid rounded mt-2" src="">
                </center>
            </div>
        </div>
    </div>
    </div>

    <script src="{{ url('js/mdb.min.js') }}"></script>
</body>

</html>
