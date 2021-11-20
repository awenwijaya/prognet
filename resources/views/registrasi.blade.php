<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Registrasi Akun</title>
    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Registrasi Akun</h1>
                            </div>
                            <form class="user" action="/daftar" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="nama_pegawai" class="form-control form-control-user" id="exampleInputName"
                                        placeholder="Nama Lengkap">
                                    <div class="text-danger">
                                        @error('nama_pegawai')
                                        {{ $message }}
                                        @enderror
                                    </div>
                                    <br>
                                <div class="form-group">
                                    <input type="text" name="alamat" class="form-control form-control-user" id="exampleInputAddress"
                                        placeholder="Alamat">
                                    <div class="text-danger">
                                        @error('alamat')
                                        {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="username" class="form-control form-control-user" id="exampleInputUsername"
                                        placeholder="Username">
                                    <div class="text-danger">
                                        @error('username')
                                        {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword"
                                        placeholder="Password">
                                    <div class="text-danger">
                                        @error('password')
                                        {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Foto Profil</label>
                                    <input name="foto" type="file" accept="image/jpeg" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="role">Role Akun:</label>
                                    <select class="custom-select custom-select-sm" id="role" name="role">
                                        <option value="ADMIN">Admin</option>
                                        <option value="MANAGER">Manager</option>
                                        <option value="PEGAWAI">Pegawai</option>
                                    </select>
                                </div>
                                <button class="btn btn-flat btn-primary btn-sm" type="submit">Daftar Akun</button>
                            </form>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

</body>

</html>