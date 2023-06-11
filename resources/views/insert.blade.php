<div class="form">
    <center>
        <br><br><br>
        <h1 style="font-family: 'Reem Kufi Fun', sans-serif; letter-spacing: 4px; color: aliceblue;">MASUKAN
        </h1>
    </center>
    <br><br>
    <form role="form" action="/insertmasukan" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="column nama col-lg-4">
                <input class="input" name="nama_pengunjung" type="text" placeholder="Masukkan Nama Anda" name="nama">
            </div>
            <div class="column email col-lg-4   ">
                <input class="input" name="email_pengunjung" type="email" placeholder="Masukkan email Anda" name="email">
            </div>
            <br> <br> <br>
            <div class="comment col-lg-6">
                <textarea class="textinput" name="teks_masukan" placeholder="Ketik Masukan Anda" name="masukan"></textarea>
            </div>
            <br> <br><br>
            <div class="column col-lg-2">
                <label for="images" class="drop-container">
                <span class="drop-title">Drop files here</span>
                or
                <input type="file" id="images" accept="image/*, video/*" name="gambar_video_masukan">
                </label>
                <!-- <input type="file" name="gambar_video_masukan" class="input file"> -->
            </div>
            <div class="column col-lg-12">
                <center><input type="submit" class="submit" value="Kirim"></center>
            </div>
        </div>
</div>
</form>