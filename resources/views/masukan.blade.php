<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masukan</title>
    <link rel="stylesheet" href="css/feedback.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="icon" href="Pict/PET.png" type="image/jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Magra&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Delius+Unicase&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Reem+Kufi+Fun:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

</head>


@extends('layouts.navfoot')

@section('container')

<main>
    <!-- <br><br><br> 
    <input type="submit" value="Tulis Masukan" id="tulis_masukan"> -->
    
    <div id="insert"></div>
    <br>
    <center>
    <button onclick="gone()" type="button" class="btn btn-warning" id="masuk" style="width:150px;font-family:magra; margin-bottom:100px;">Beri Masukan</button>
    <!-- <hr class="col-lg-11" style="border-top:3px double;" width="80%"> -->
    </center>
    <center>
        <h1 style="font-family: 'Reem Kufi Fun', sans-serif">Apa Pendapat Pelanggan?</h1>
    </center>

    <!-- feedback  -->
    @foreach ($data as $row)
    <div class="card mb-3" style="max-width: 70%;">
        <div class="row no-gutters">
            <div class="col-md-2">
                @php
                $media_type = mime_content_type(public_path('pict/' . $row['gambar_video_masukan']));
                @endphp
                @if (strpos($media_type, 'image') !== false)
                <img src="../pict/{{ $row -> gambar_video_masukan }}" class="card-img" alt="...">
                @elseif (strpos($media_type, 'video') !== false)
                <video controls class="card-img">
                    <source src="../pict/{{ $row -> gambar_video_masukan }}" type="video/mp4">
                </video>
                @endif
            </div>
            <div class="col-md-10">
                <div class="card-body">
                    <h5 class="card-title">{{ $row -> nama_pengunjung }}</h5>
                    <hr>
                    <p class="card-text">{{ $row -> teks_masukan }}</p>
                    <p class="card-text"><small class="text-muted">{{ $row -> tanggal_post_masukan}}</small></p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</main>

<!-- footer -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
<script src="js/feedback.js"></script>
<!-- @if (Session::has('message'))
<script>
  toastr.success("{{ Session::get('message') }}");
</script>

@endif -->

@if(session('success'))
<script>
        alert("{{ session('success') }}");
</script>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

<script>
    var btnPesan = document.getElementById("masuk");
    var pesansekarang = document.getElementById("insert");
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
      xhr.open("GET", "{{ route('insert') }}", true);
      xhr.send();
    });
  </script>
<script>
function gone() {
  var x = document.getElementById("masuk");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>

</body>


</html>
@endsection