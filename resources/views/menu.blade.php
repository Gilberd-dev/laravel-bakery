<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pizza Etnik Toba Bakery</title>
  <link rel="icon" href="../Pict/PET.png" type="image/jpg">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/style.css">
  <!-- <link rel="stylesheet" href="../css/style2.css"> -->
  <!-- <link rel="stylesheet" href="../css/bootstrap.css"> -->
  <link rel="stylesheet" href="../css/responsive.css">
  <link rel="stylesheet" href="../css/navbar.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Magra&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Delius+Unicase&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Reem+Kufi+Fun:wght@600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

</head>
@include('sweetalert::alert')
@extends('layouts.navfoot')

@section('container')

<body>
  <div id="pesansekarang">
    <div class="menu-box">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="heading-title text-center">
              <h2 style="font-family: 'Reem Kufi Fun', sans-serif;">MENU</h2>
              <hr>
            </div>
          </div>
        </div>

        <div class="row inner-menu-box">
          <div class="col-3 kategorii">

            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link active" id="v-pills-semua-tab" data-toggle="pill" href="#v-pills-semua" role="tab" aria-controls="v-pills-semua" aria-selected="true">All</a>
              <a class="nav-link" id="v-pills-makanan-tab" data-toggle="pill" href="#v-pills-makanan" role="tab" aria-controls="v-pills-makanan" aria-selected="false">Makanan</a>
              <a class="nav-link" id="v-pills-minuman-tab" data-toggle="pill" href="#v-pills-minuman" role="tab" aria-controls="v-pills-minuman" aria-selected="false">Minuman</a>
              <a class="nav-link" id="v-pills-roti-tab" data-toggle="pill" href="#v-pills-roti" role="tab" aria-controls="v-pills-roti" aria-selected="false">Roti dan Kue</a>
            </div>
          </div>

          <div class="col-9">
          <p class="pc"><em>*Arahkan kursor ke gambar produk untuk melihat detail produk</em></p>
						<p class="hp"><em>*Ketuk gambar produk untuk melihat detail produk</em></p>
            <div class="tab-content" id="v-pills-tabContent">
              <div class="tab-pane fade show active" id="v-pills-semua" role="tabpanel" aria-labelledby="v-pills-semua-tab">
                <div class="row">
                  @foreach($alls as $all)
                  <div class="col-lg-3 col-md-6 special-grid drinks">
                    <div class="gallery-single fix">
                      <img src="../Pict/{{ $all -> gambar_produk }}" class="img-fluid" alt="Image" />
                      <div class="why-text">
                        <h4> {{ $all -> nama_produk }}</h4>
                        <hr style="color: white;">
                        <p>{{ $all -> deskripsi_produk }}</p>
                      </div>
                      <p class="nama"><i class="fa-solid fa-burger" style="color: #272343; margin-right: 10px;"></i>{{ $all -> nama_produk }}</p>
                      <p class="harga"> <i class="fa-solid fa-money-bill-wave" style="color: #272343; margin-right:10px;"></i>Rp {{ number_format($all -> harga_produk, 2, ',', '.') }} </p>
                    </div>
                  </div>
                  @endforeach
                  {{ $alls->links('vendor.pagination.custom') }}
                </div>
              </div>
              <br>

              <div class="tab-pane fade" id="v-pills-makanan" role="tabpanel" aria-labelledby="v-pills-makanan-tab">
                <div class="row">
                  @foreach($makanans as $makanan)
                  <div class="col-lg-3 col-md-6 special-grid drinks">
                    <div class="gallery-single fix">
                      <img src="../Pict/{{ $makanan -> gambar_produk }}" class="img-fluid" alt="Image" />
                      <div class="why-text">
                        <h4> {{ $makanan -> nama_produk }}</h4>
                        <hr style="color: white;">
                        <p>{{ $makanan -> deskripsi_produk }}</p>
                      </div>
                      <p class="nama"><i class="fa-solid fa-burger" style="color: #272343; margin-right: 10px;"></i>{{ $makanan -> nama_produk }}</p>
                      <p class="harga"> <i class="fa-solid fa-money-bill-wave" style="color: #272343; margin-right:10px;"></i>Rp {{ number_format($makanan -> harga_produk, 2, ',', '.') }} </p>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>

              <div class="tab-pane fade" id="v-pills-minuman" role="tabpanel" aria-labelledby="v-pills-minuman-tab">
                <div class="row">
                  @foreach ($minumans as $minuman)
                  <div class="col-lg-3 col-md-6 special-grid drinks">
                    <div class="gallery-single fix">
                      <img src="../Pict/{{ $minuman -> gambar_produk }}" class="img-fluid" alt="Image" />
                      <div class="why-text">
                        <h4> {{ $minuman -> nama_produk }}</h4>
                        <hr style="color: white;">
                        <p>{{ $minuman -> deskripsi_produk }}</p>
                      </div>
                      <p class="nama"><i class="fa-solid fa-burger" style="color: #272343; margin-right: 10px;"></i>{{ $minuman -> nama_produk }}</p>
                      <p class="harga"> <i class="fa-solid fa-money-bill-wave" style="color: #272343; margin-right:10px;"></i>Rp {{ number_format($minuman -> harga_produk, 2, ',', '.') }} </p>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
              <div class="tab-pane fade" id="v-pills-roti" role="tabpanel" aria-labelledby="v-pills-roti-tab">
                <div class="row">
                  @foreach ($rotis as $roti)
                  <div class="col-lg-3 col-md-6 special-grid drinks">
                    <div class="gallery-single fix">
                      <img src="../Pict/{{ $roti -> gambar_produk }}" class="img-fluid" alt="Image" />
                      <div class="why-text">
                        <h4> {{ $roti -> nama_produk }}</h4>
                        <hr style="color: white;">
                        <p>{{ $roti -> deskripsi_produk }}</p>
                      </div>
                      <p class="nama"><i class="fa-solid fa-burger" style="color: #272343; margin-right: 10px;"></i>{{ $roti -> nama_produk }}</p>
                      <p class="harga"> <i class="fa-solid fa-money-bill-wave" style="color: #272343; margin-right:10px;"></i>Rp {{ number_format($roti -> harga_produk, 2, ',', '.') }} </p>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- <div id="pesansekarang">
    
  </div> -->
    <!-- End Menu -->

    <center><button type="button" class="btn pesan" id="pesan" style="width:150px;font-family:magra; margin-bottom:100px;">Pesan Sekarang</button></center>

    <!-- <div class="mb-3" id="pesansekarang"></div> -->
  </div>
  <script>
    var btnPesan = document.getElementById("pesan");
    var pesansekarang = document.getElementById("pesansekarang");
    btnPesan.addEventListener("click", function() {
      // alert('Anda sedang memesan sekarang!');
      var xhr = new XMLHttpRequest();

      // Cek kesiapan ajax
      xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
          pesansekarang.innerHTML = xhr.responseText;
        }
      };

      // eksekusi ajax
      xhr.open("GET", "{{ route('sekarang') }}", true);
      xhr.send();
    });
  </script>

  <script src="../js/nav.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

  <!-- ALL JS FILES -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/menu.js"></script>
  <!-- ALL PLUGINS -->


</body>

</html>

@endsection