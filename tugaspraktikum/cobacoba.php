<DOCTYPE html>
<html lang = "en" dir="ltr">
<style>
body {
  background: linear-gradient(#ffe0ab,#c0abff);
}
#card{
  background : linear-gradient(#91f2ff,#ffb091);
}
#card-header{
  background : linear-gradient(#796dff,#ffbd6d)
}
#ok{
  background : linear-gradient(#b9ff69,#91e631);
  font-family:"raleway"
  height : 30px;
  width : 120px;
}
#batal{
  background : linear-gradient(#ff2508,#e61b00);
  font-family:"raleway"
  height : 30px;
  width : 120px;
}
#tombol{
  margin: 20px;
  
}
</style>
<head>
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-
         scale=1.0">
<title>form login</title>
 <!--load bootstrap css-->
 <link rel="stylesheet" href="assets/css/bootstrap.min.css">
          <!--load jquery and bootstrap js-->
          <script src="assets/js/jquery.min.js"></script>
          <script src="assets/js/popper.min.js"></script>
          <script src="assets/js/bootstrap.js"></script>
          <script type="text/javascript">
          </script>
 </head>
<body>
<form method="post" action="run.php">
<div class ="container">
            <div class ="row">
            <div id="card" class="card col-6" style="margin-left: 300px; margin-top: 50px;" >
            <div id="card-header" class = "card-header">FORM PENDAFTARAN SUNDA EMPIRE</div>
            nis : <input type = "text" name="nis"><br>
            nama depan : <input type = "text" name="namadep"><br>
            nama belakang : <input type = "text" name="namabel"><br>
            tempat lahir : <input type = "text" name="tmplahir"><br>
            tanggal lahir : <input type = "date" name="tgllahir"><br>
            agama : <input type = "text" name="agama"><br>
            jenis kelamin : <input type="radio" name="kelamin" value="laki">
            <label for="laki">laki-laki</label>
            <input type="radio" name="kelamin" value="perempuan">
            <label for="perempuan">perempuan</label><br>
            email : <input type = "email" name="email"><br>
            telepon : <input type = "number" name="telepon"><br>
            instagram : <input type = "text" name="instagram"><br>
            facebook : <input type = "text" name="facebook"><br>
            website : <input type = "text" name="website"><br>
            alamat : <textarea class="form-control" rows="4" name="alamat"></textarea><br>
            jurusan : <select name="jurusan"><option value="">--pilih jurusan--</option>
                        <option value="RPL">Rekayasa Perangkat Lunak</option>
                        <option value="TKJ">Teknik Komputer Jaringan</option>
                      </select>
            kelas : <select name="kelas">
                        <option value="">--pilih kelas--</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                      </select>
  username : <input type ="text" name="username"><br>
  password : <input type = "password" name="password"><br>
  pesan : <textarea class="form-control" rows="5" name="comment"></textarea>  <br>
  <div id="tombol">
  <button id="ok" type="submit" class="btn"name="ok">submit</button>
<button id="batal" type ="reset" class="btn"name="batal">batal</button>
</div>
  </div>
  </div>
  </div>

  </body>
  </html>
  