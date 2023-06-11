<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Sertifikat</title>
    <link rel="stylesheet" href="css/admin.css">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="vendor/simple-datatables/style.css" rel="stylesheet">
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


</head>
@foreach($data as $row)
@extends('admin.navbar.nav')
@section('admin')
@endforeach

<main id="main" class="main">
    <div class="container">
        <div class="row">


            <div class="pagetitle">
                <h1>Sertifikat</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                        <li class="breadcrumb-item active">Sertifikat</li>
                    </ol>
                </nav>
            </div><!-- End Page Title -->

            <section class="section">
                <div class="row">
                    <div class="col-lg-6">

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Tambah Sertifikat</h5>

                                <!-- General Form Elements -->
                                <form role="form" action="/tambah_sertifikat" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-2 col-form-label">Judul Sertifikat</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="judul_sertifikat">
                                        </div>
                                    </div>  

                                    <div class="row mb-3">
                                        <label for="inputPassword" class="col-sm-2 col-form-label">Deskripsi</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" style="height: 100px" name="deskripsi_sertifikat"></textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputNumber" class="col-sm-2 col-form-label">Lambang </label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="file" id="formFile" name="lambang_sertifikat">
                                        </div>
                                    </div>

                                    <div class="row mb-3">

                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary">Submit </button>
                                        </div>
                                    </div>

                                </form><!-- End General Form Elements -->

                            </div>
                        </div>

                    </div>
                </div>
            </section>

        </div>
    </div>
</main>

<!-- ======= Footer ======= -->


<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="vendor/apexcharts/apexcharts.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/chart.js/chart.umd.js"></script>
<script src="vendor/echarts/echarts.min.js"></script>
<script src="vendor/quill/quill.min.js"></script>
<script src="vendor/simple-datatables/simple-datatables.js"></script>
<script src="vendor/tinymce/tinymce.min.js"></script>
<script src="vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="js/main.js"></script>

</body>

</html>

@endsection