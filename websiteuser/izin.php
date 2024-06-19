<?php
    session_start();
    if(!isset($_SESSION['user_ormawa'])){
        header('location:login.php');
    }

    $nama = '';
    $kegiatan = '';
    $mulai = '';
    $akhir = '';
    $undangan = '';
    $rab = '';
    $desc = '';

    if(!empty($_POST)){
       $nama = $_POST['namaormawa'];
       $kegiatan = $_POST['namaacara'];
       $mulai = $_POST['tanggalmulai'];
       $akhir = $_POST['tanggalakhir'];
       $undangan = $_POST['undangan'];
       $rab = $_POST['rab'];
       $desc = $_POST['desc'];
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logopolindra.png" type="image/x-icon">
    <title>Track anggaran organisasi mahasiswa</title>
</head>

<style>
    *{
    padding: 0px;
    margin: 0px;
}

/* Start navbar */

.judul {
    display: flex;
    margin-left: 1.5%;
    justify-content:space-between;
}

.logo{
    display: flex;
    margin-top:1%;
}

.logo img{
    width: 60px;
    margin-top: 1%;
}

.logo h3{
    margin-top: 20px;
    margin-left: 10px;
    color: rgb(0, 0, 0);
    font-size: 22px;
    margin-top: 5%;
}


.ham span{
    display:block;
    width: 24px;
    height:5px;
    background-color:black;
    margin-bottom:2px;
    border-radius:10px;
}

.ham input{
    width: 25px;
    height:24px;
    opacity: 0%;
    position: absolute;
}

.ham-menu h2{
    margin-right:10px;
}

.ham-menu{
    display:flex;
    margin-top:2%;
    margin-right:50px;
}

.ham input:checked ~ span:nth-child(2){
    background-color:blue;
    width: 20px;
}

.ham input:checked ~ span:nth-child(3){
    background-color:green;
    width: 24px;
}

.ham input:checked ~ span:nth-child(4){
    background-color:red;
    width: 20px;
}
/* End navbar */

.isi{
    display: flex;
}

.left{
    width: 20%;
    height: 91.3vh;
    background-color: rgb(255, 255, 255);
    text-align: center;
}

.left ul{
    margin-top: 10%;
    font-size: 18px;
    
}

.left ul li{
    width: 300px;
    height: 70px;
    margin: auto;
    background-color: aliceblue;
    margin-bottom: 20px;
    list-style: none;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    
}

.left ul li:hover{
    background-color: #6666FF;
    color:white;
}

.left ul a {
   text-decoration: none;
   color: rgb(56, 56, 56);
   
}

.right{
    width: 80%;
    height: 91.3vh;
    background-color: rgb(255, 255, 255);
}


.con1{
    display: flex;
    justify-content: space-evenly;
    margin-top: 2.5%;
}


.dat1{
    width: 22%;
    height: 25vh;
    border-radius: 10px;
    background-color: rgb(66, 141, 190);
}

.dat2{
    width: 22%;
    height: 25vh;
    border-radius: 10px;
    background-color: rgb(66, 141, 190);
}

.dat3{
    width: 22%;
    height: 25vh;
    border-radius: 10px;
    background-color: rgb(66, 141, 190);
}

.dat4{
    width: 22%;
    height: 25vh;
    border-radius: 10px;
    background-color: rgb(66, 141, 190);
}

.con2{
    display: flex;
    width: 97.8%;
    justify-content: space-between;
}

.bar1{ 
    width: 100%;
    height: 80.1vh;
    border-radius: 10px;
    margin-left: 2.2%;
    margin-top: 2.5%;
   background-color: #6666FF;
   display:flex;
}
.lop h3{
    margin:30px;
    color:white;
    font-size:19px;
} 

.bar1 input{
    margin-bottom:20px;
    margin-left:30px;
   width: 500px;
   height:30px;
   border-radius:10px;
   border:none;
   margin-top:10px;
   font-size:14px;
   text-align:center;
}

.bar1 label{
    margin-left:30px;
    color:white;
    font-size:16px;
}

.rar{
    width: 800px;
   height:600px;
   border-radius:10px;
   margin-top:100px;
   margin-left:100px;
   background-color:white;
}

.rar h3{
    margin:30px;
}

textarea{
    margin-left:30px;
    width: 500px;
    height:100px;
    font-size:15px;
    border-radius:3px;
    text-align:justify;
    font-size:16px;
}

.kk{
    margin:20px;
    font-size:15px;
}

.kk p{
    margin-bottom:10px;
}


</style>

<body>

    <div class="page">  
    <div class="judul">
            <div class="logo">
            <img src="img/logopolindra.png" width="100px" alt="">
            <h3>Poltikenik Negeri Indramayu</h3>
            </div>

            <div class="ham-menu">
            <h2>Nama User</h2><br>
            <div class="ham">
                <input type="checkbox" name="ham" id="">
                <span></span>
                <span></span>
                <span></span>
            </div>
            </div>
        </div>
        <div class="isi">
            <div class="left">
                <ul>
                    <a href="dashboard.php"><li>Dashboard</li></a>
                    <a href="izin.php"><li>Izin Kegiatan  </li></a>
                    <a href="profil.php"><li>Profil Saya </li></a>
                    <a href="login.php"><li>Ganti Password </li></a>
                    
                </ul>
            </div>
            <div class="right">
                
                <div class="con2">
                    <div class="bar1">
                        <div class="lop">
                            <h3>Form pendaftaran kegiatan organisai mahasiswa</h3>
                            <form action="#" method="post">
                                <label for="namaormawa">Nama Organisasi</label><br>
                                <input type="text" name="namaormawa" id="namaormawa"><br>
                                <label for="namaacara">Nama Acara</label><br>
                                <input type="text" name="namaacara" id="namaacara"><br>
                                <label for="tanggalmulai">Tanggal dimulai</label><br>
                                <input type="text" name="tanggalmulai" id="tanggalmulai"><br>
                                <label for="tanggalakhir">Tanggal berakhri</label><br>
                                <input type="text" name="tanggalakhir" id="tanggalakhir"><br>
                                <label for="undangan">Undangan Terbuka</label><br>
                                <input type="text" name="undangan" id="undanga"><br>
                                <label for="rab">Dokumen RAB</label><br>
                                <input type="text" name="rab" id="rab"><br>
                                <label for="desc">Deskripsi</label><br>
                                <textarea name="desc" id="desc"  ></textarea><br>
                                
                                <input type="submit" value="kirim" name="kirim" style="width:300px; margin-left:120px; cursor:pointer;">
                            </form>
                        </div>
                        <div class="rar">
                            <h3>Detail kegiatan Organisasi mahasiswa</h3>
                            <div class="kk">
                            <p>Nama ormawa : <?php echo $nama?></p>
                            <p>Nama Kegiatan : <?php echo $kegiatan?></p>
                            <p>Tanggal mulai : <?php echo $mulai?></p>
                            <p>Tanggal akhir : <?php echo $akhir?></p>
                            <p>Undangan : <?php echo $undangan?></p>
                            <p>RAB : <?php echo $rab?></p>
                            <p>Deskripsi : <?php echo $desc?></p>
                            </div>
                        </div>
                    </div>
                  
                </div>
            </div>
        </div>
    </div>

    <?php

    include "koneksi.php";

    if(isset($_POST['kirim'])){
        mysqli_query($koneksi,"insert into pendaftaran set
        namaormawa = '$_POST[namaormawa]',
        namakegiatan = '$_POST[namaacara]',
        mulai = '$_POST[tanggalmulai]',
        akhir = '$_POST[tanggalakhir]',
        undangan = '$_POST[undangan]',
        rab = '$_POST[rab]',
        deskripsi = '$_POST[desc]'");

        echo "Telah tersimpan";
    }

    ?>



</body>
</html>