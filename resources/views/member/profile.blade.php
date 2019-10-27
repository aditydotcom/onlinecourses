<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
  <title>Ruang Cerdas</title>
  <link rel="canonical" href="https://www.wrappixel.com/templates/adminwrap/" />
  <!-- Bootstrap Core CSS -->
  <link href="../assets/node_modules/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css" rel="stylesheet">
  <!-- This page CSS -->
  <!-- chartist CSS -->
  <link href="../assets/node_modules/morrisjs/morris.css" rel="stylesheet">
  <!--c3 CSS -->
  <link href="../assets/node_modules/c3-master/c3.min.css" rel="stylesheet">
  <!--Toaster Popup message CSS -->
  <link href="../assets/node_modules/toast-master/css/jquery.toast.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="css/style.css" rel="stylesheet">
  <!-- Dashboard 1 Page CSS -->
  <link href="css/pages/dashboard1.css" rel="stylesheet">
  <!-- You can change the theme colors from here -->
  <link href="css/colors/default.css" id="theme" rel="stylesheet">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
 <![endif]-->
</head>

<body>
  <div class="card">
    <div class="card-body">
        <h4 class="card-title">Lengkapi Profile Anda</h4>
        <form class="needs-validation" novalidate action="/profile" method="POST">
            @csrf
          <div class="form-row">
            <div class="col-md-4 mb-3">
              <label for="validationCustom01">Nama</label>
              <input type="text" class="form-control" id="validationCustom01" name="nama" placeholder="Full name" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <label for="validationCustom02">Gender</label>
              <select name="jenis_kelamin" class="form-control" id="validationCustom02" required>
                  <option value="L">Laki-Laki</option>
                  <option value="P">Perempuan</option>
              </select>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <label for="validationCustomUsername">Kelas</label>
                <select name="kelas_id" class="form-control" id="validationCustomUsername">
                    <option selected disabled>Pilih Kelas</option>
                    @foreach ($kelas as $item)
                        <option value="{{ $item->id_kelas }}">{{ $item->nama_kelas }}</option>
                    @endforeach
                </select>
                <div class="invalid-feedback">
                  Please choose a username.
                </div>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-6 mb-3">
              <label for="validationCustom03">Tempat Lahir</label>
              <select name="kota_id" class="form-control" id="validationCustom03" required>
                  <option selected disabled>Pilih Kota</option>
                  @foreach ($kota as $item)
                        <option value="{{ $item->id_kota }}">{{ $item->nama_kota }}</option>
                  @endforeach
              </select>
              <div class="invalid-feedback">
                Please provide a valid city.
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <label for="validationCustom04">Tanggal Lahir</label>
              <input type="date" class="form-control" id="validationCustom04" name="tanggal_lahir" required>
              <div class="invalid-feedback">
                Please provide a valid date.
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <label for="validationCustom05">Asal Sekolah</label>
              <input type="text" class="form-control" id="validationCustom05" name="asal_sekolah" placeholder="Asal Sekolah" required>
              <div class="invalid-feedback">
                Please provide a valid data.
              </div>
            </div>
          </div>
            <input type="hidden" name="username" value="{{ Auth::user()->username }}">
          <input type="hidden" name="password" value="{{ Auth::user()->password }}">
          <input type="hidden" name="email" value="{{ Auth::user()->email }}">
          <button class="btn btn-primary" type="submit">Submit form</button>
        </form>
    </div>
</div>
</body>


