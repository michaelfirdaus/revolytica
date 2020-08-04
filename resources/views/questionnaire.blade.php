<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Kuesioner Marugame Udon &mdash;Revolytica </title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/fontawesome/css/all.min.css') }}">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{ asset('css/jqvmap/dist/jqvmap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/summernote/summernote-bs4.css') }}">
  <link rel="stylesheet" href="{{ asset('css/owlcarousel2/dist/assets/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/owlcarousel2/dist/assets/owl.theme.default.min.css') }}">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/components.css') }}">

  <!-- Custom CSS Control -->
  <link rel="stylesheet" href="{{ asset('css/custom/customquestionnaire.css') }}">

  <style>
    .error{color:red; font-weight:bold;margin-top:5px;}
  </style>

</head>




<body>

  <!-- Navigation Bar -->
  <nav class="navbar bg-primary">
        <a class="navbar-brand" href="#" class="navbar"><img src="{{ asset('img/revolytica.png') }}" class="revolyticalogoheader"></a>
  </nav>

  <!-- Header Company Logo -->
  <img src="{{ asset('img/logo.png') }}" class="headerlogo"> 

  <!-- Description -->
  <div class="card-body">
      <h5 style="text-align: justify;">Silahkan isi form ini dengan jujur agar kami dapat meningkatkan mutu pelayanan kami.
      Segala data diri anda bersifat rahasia (tidak dibocorkan ke siapapun) dan sepenuhnya menjadi
      hak milik kami untuk evaluasi pelayanan kami.
      <br><br>Form kuesioner ini dibuat oleh Revolytica.</h5>
      <span class="required-asterisk-explanation">* required/wajib diisi</span>
  </div>

  <!-- Question Card -->
  <form id="scoring" action="{{ route('questionnaire.store') }}" method="POST">

    @csrf

    <div class="card-footer bg-whitesmoke">
        <h6>1. Nama Lengkap <span class="required-asterisk">*</span> <br></h6>
        <div id="messageBox"></div>
        @error('name')
          <span class="text-danger"> {{ $message }} </span>
        @enderror
        <div class="inputbox">
          <input class="textbox" type="text" name="name" placeholder="Nama Lengkap">
        </div>
    </div>

    <div class="card-footer bg-whitesmoke">
        <h6>2. Umur <span class="required-asterisk">*</span> <br></h6>
        <div id="help-block with-errors"></div>
        <div class="inputbox">
          <input class="textbox" type="text" name="age" placeholder="Umur">
        </div>
    </div>

    <div class="card-footer bg-whitesmoke">
        <h6>3. Jenis Kelamin <span class="required-asterisk">*</span><br></h6>
        <br>
        <fieldset>
          <select id="gender" name="gender">
            <option value = "none" selected disabled hidden> Silahkan Pilih </option> 
            <option value = "male">Laki-laki</option>
            <option value = "female">Perempuan</option>
            <option value = "others">Lainnya</option>
          </select>
       </fieldset>
    </div>

    <div class="card-footer bg-whitesmoke">
        <h6>4. Nomor Handphone<br></h6>
        <div class="inputbox">
          <input class="textbox" type="tel" name="handphone" placeholder="Nomor Handphone">
        </div>
    </div>

    <div class="card-footer bg-whitesmoke">
        <h6>5. E-mail <span class="required-asterisk">*</span><br></h6>
        <div class="inputbox">
          <input class="textbox" type="email" name="email" placeholder="E-mail">
        </div>
    </div>

    <div class="card-footer bg-whitesmoke">
        <h6>6. Apa yang bisa kami perbaiki? <span class="required-asterisk">*</span> <br></h6>
        <div class="inputbox">
          <input class="textbox" required type="text" name="shouldfixed" placeholder="Berikan pendapat anda">
        </div>
    </div>

    <div class="card-footer bg-whitesmoke">
        <h6>7. Apa yang bisa kami pertahankan? <span class="required-asterisk">*</span> <br></h6>
        <div class="inputbox">
          <input class="textbox" required type="text" name="goodthings" placeholder="Berikan pendapat anda">
        </div>
    </div>

    <div class="card-footer bg-whitesmoke">
        <h6>8. Jenis Pesanan <span class="required-asterisk">*</span> <br></h6>
        <div class="inputbox">
          <input class="textbox" required type="text" name="ordertype" placeholder="Sebutkan pesanan anda">
        </div>
    </div>

    <div class="card-footer bg-whitesmoke">
        <h6>9. Makanan yang dipesan <span class="required-asterisk">*</span> <br></h6>
        <div class="inputbox">
          <input class="textbox" required type="text" name="foodordered" placeholder="Sebutkan makanan yang anda pesan">
        </div>
    </div>

    <div class="card-footer bg-whitesmoke">
        <h6>10. Kepuasan terhadap makanan yang dipesan <span class="required-asterisk">*</span> <br></h6>
        <div class="error-text"></div>
        <div class="inputrange">
          <input type="radio" name="foodsatisfaction" value="1">
          <label for="1">Tidak puas</label><br>
          <input type="radio" name="foodsatisfaction" value="2">
          <label for="2">Puas</label><br>
          <input type="radio" name="foodsatisfaction" value="3">
          <label for="3">Sangat puas</label>
        </div>
    </div>

    <div class="card-footer bg-whitesmoke">
        <h6>11. Minuman yang dipesan <span class="required-asterisk">*</span> <br></h6>
        <div class="inputbox">
          <input class="textbox" required type="text" name="drinkordered" placeholder="Sebutkan minuman yang anda pesan">
        </div>
    </div>

    <div class="card-footer bg-whitesmoke">
        <h6>12. Kepuasan terhadap minuman yang dipesan <span class="required-asterisk">*</span> <br></h6>
        <div class="inputrange">
          <input type="radio" name="drinksatisfaction" value="1">
          <label for="1">Tidak puas</label><br>
          <input type="radio" name="drinksatisfaction" value="2">
          <label for="2">Puas</label><br>
          <input type="radio" name="drinksatisfaction" value="3">
          <label for="3">Sangat puas</label>
        </div>
    </div>

    <div class="card-footer bg-whitesmoke">
        <h6>13. Makanan Favorit Anda <span class="required-asterisk">*</span> <br></h6>
        <div class="inputbox">
          <input class="textbox" required type="text" name="favoritefood" placeholder="Sebutkan makanan favorit anda">
        </div>
    </div>

    <div class="card-footer bg-whitesmoke">
        <h6>14. Minuman Favorit Anda <span class="required-asterisk">*</span> <br></h6>
        <div class="inputbox">
          <input class="textbox" required type="text" name="favoritedrink" placeholder="Sebutkan minuman favorit anda">
        </div>
    </div>

    <div class="card-footer bg-whitesmoke">
        <h6>15. Menu baru apa yang Anda ingin kami sajikan? <span class="required-asterisk">*</span> <br></h6>
        <div class="inputbox">
          <input class="textbox" required type="text" name="menusuggestion" placeholder="Berikan pendapat anda">
        </div>
    </div>

    <div class="card-footer bg-whitesmoke">
        <h6>16. Kecocokan harga <span class="required-asterisk">*</span> <br></h6>
        <div class="inputrange">
          <input type="radio" name="price" value="1">
          <label for="1">Tidak cocok</label><br>
          <input type="radio" name="price" value="2">
          <label for="2">Cocok</label><br>
          <input type="radio" name="price" value="3">
          <label for="3">Sangat cocok</label>
        </div>
    </div>

    <div class="card-footer bg-whitesmoke">
        <h6>17. Seberapa sering Anda datang ke lokasi outlet ini? <span class="required-asterisk">*</span> <br></h6> 
        <br>
        <fieldset>
          <select name="howoften" id="howoften">
            <option value = "none" selected disabled hidden> Silahkan Pilih </option> 
            <option value = "firsttime">Pertama kali</option>
            <option value = "often">2-5 kali</option>
            <option value = "veryoften">>5 kali</option>
          </select>
       </fieldset>
    </div>

    <div class="card-footer bg-whitesmoke">
        <h6>18. Darimanakah Anda pertama kali mengetahui tentang kami? <span class="required-asterisk">*</span> <br></h6>
        <br>
        <fieldset>
          <select name="references">
            <option value = "none" selected disabled hidden> Silahkan Pilih </option> 
            <option value = "online">Media Online</option>
            <option value = "printed">Media Cetak</option>
            <option value = "radio/tv">Media Massa</option>
            <option value = "others">Lainnya</option>
          </select>
       </fieldset>
    </div>

    <div class="card-footer bg-whitesmoke">
        <h6>19. Promo apa yang menurut Anda menarik? <span class="required-asterisk">*</span> <br></h6>
        <br>
        <fieldset>
          <select id="promo" name="promo">
            <option value = "none" selected disabled hidden> Silahkan Pilih </option> 
            <option value = "voucher">Voucher</option>
            <option value = "discount">Diskon</option>
            <option value = "cashback">Cashback</option>
            <option value = "setmeal">Set Meal/Promo Paket</option>
            <option value = "others">Lainnya</option>
          </select>
       </fieldset>
    </div>

    <div class="card-footer bg-whitesmoke">
        <h6>20. Jarak dari rumah ke lokasi outlet kami <span class="required-asterisk">*</span> <br></h6>
        <br>
        <fieldset>
          <select id="distance" name="distance">
            <option value = "none" selected disabled hidden> Silahkan Pilih </option> 
            <option value = "near"> &lt10km </option>
            <option value = "far"> >10 km</option>
            <option value = "differentcity">Luar kota</option>
          </select>
       </fieldset>
    </div>

    <div class="card-footer bg-whitesmoke">
        <h6>21. Tingkat keramahan Staff <span class="required-asterisk">*</span> <br></h6>
        <div class="inputrange">
          <input type="radio" name="stafffriendliness" value="1">
          <label for="1">Buruk</label><br>
          <input type="radio" name="stafffriendliness" value="2">
          <label for="2">Sedang</label><br>
          <input type="radio" name="stafffriendliness" value="3">
          <label for="3">Ramah</label>
        </div>
    </div>

    <div class="card-footer bg-whitesmoke">
        <h6>22. Kecepatan servis <span class="required-asterisk">*</span> <br></h6>
        <div class="inputrange">
          <input type="radio" name="servicequality" value="1">
          <label for="1">Lambat</label><br>
          <input type="radio" name="servicequality" value="2">
          <label for="2">Sedang</label><br>
          <input type="radio" name="servicequality" value="3">
          <label for="3">Cepat</label>
        </div>
        
    </div>

    <div class="card-footer bg-whitesmoke">
        <h6>23. Tingkat kebersihan outlet <span class="required-asterisk">*</span> <br></h6>
        <div class="inputrange">
          <input type="radio" name="outletcleanliness" value="1">
          <label for="1">Kotor</label><br>
          <input type="radio" name="outletcleanliness" value="2">
          <label for="2">Sedang</label><br>
          <input type="radio" name="outletcleanliness" value="3">
          <label for="3">Bersih</label>
        </div>
    </div>

    <!-- Submit Button -->
    <div class="wrapper-btn-submit">
      <a href="" onclick="validasi()"><button type="submit" class="btn btn-success">Simpan dan Kirim</button></a>
    </div>
  </form>
 
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>


  <!-- General JS Scripts -->
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/popper.js') }}"></script>
  <script src="{{ asset('js/tooltip.js') }}"></script>
  <script src="{{ asset('js/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/nicescroll/jquery.nicescroll.min.js') }}"></script>
  <script src="{{ asset('js/moment.min.js') }}"></script>
  <script src="{{ asset('js/stisla.js') }}"></script>
  
  <!-- JS Libraies -->
  <script src="{{ asset('js/jquery.sparkline.min.js') }}"></script>
  <script src="{{ asset('js/chart.min.js') }}"></script>
  <script src="{{ asset('js/owlcarousel2/dist/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('js/summernote/summernote-bs4.js') }}"></script>
  <script src="{{ asset('js/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>

  <!-- Page Specific JS File -->
  <script src="{{ asset('js/page/index.js') }}"></script>
  
  <!-- Template JS File -->
  <script src="{{ asset('js/scripts.js') }}"></script>
  <script src="{{ asset('js/custom.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
  <script src="{{ asset('js/custom/customjs.js') }}"></script>

</body>

<!-- Footer -->
<footer>
  <img src="{{ asset('img/poweredrevolytica.png') }}" class="revolyticalogofooter">
  <h6 style="margin-left: 30px;">Copyright &copy 2020 PT. Revolytica Teknologi Indonesia 
</footer>

</html>