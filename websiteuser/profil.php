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
    display:flex;
    background-color: rgb(255, 255, 255);
}

.con2{
    display: flex;
    width: 100%;
   
}

.bar1{ 
    width: 50%;
    height: 80vh;
    margin-left: 2.2%;
    margin-top: 2.5%;
    background-color: #6666FF;
    display:flex;
    border-top-left-radius: 30px;
    border-bottom-left-radius: 30px;
}

.bar2{ 
    width: 45%;
    height: 80vh;
    margin-top: 2.5%;
    background-color: #6666FF;
    display:flex;
    border-top-right-radius: 30px;
    border-bottom-right-radius: 30px;
}

/* Bio */
.bio{
    width: 90%;
    height:700px;
    margin:auto;
    background-color:white;
    border-radius:10px;
    text-align:center;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.bio h1{
    margin:10px;
    margin-top:50px;
}

.foto{
    width: 100px;
    height:100px;
    border-radius:50%;
    background-color:salmon;
    margin:auto;
}

.bio button{
    margin:10px;
    border-radius:3px;
    border:none;
    background-color:salmon;
    color:white;
    width: 200px;
    height:30px;
    font-size:13px;
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
                    <a href="#"><li>Profil Saya </li></a>
                    <a href="login.php"><li>Ganti Password </li></a>
                    
                </ul>
            </div>
            <div class="right">
                
                <div class="con2">
                    <div class="bar1">
                        <div class="bio">
                            <h1>Profil Organisasi Mahasiswa</h1>
                            <div class="foto"></div>
                            <button>Organisasi Mahasiswa</button>
                            <h2>Himpunan Mahasiswa Refrigerasi dan Tata udara</h2>
                            <h2 style="font-size:16px; color:salmon;">Politeknik Negeri Indramayu</h2>
                            <p style="margin:20px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit explicabo quos, ullam asperiores quaerat officiis qui voluptate facere odio sed excepturi fuga laborum adipisci eveniet, accusamus necessitatibus! Labore eum sunt iusto impedit exercitationem totam quibusdam deserunt distinctio, consectetur obcaecati harum nam iure dicta esse magnam fugiat perferendis consequatur, odit hic. Ipsum velit assumenda, asperiores expedita a excepturi. Vero quis tenetur repellendus quibusdam obcaecati eum voluptate corporis nihil. Asperiores odit magnam dolorem harum suscipit. Libero, neque? Consequuntur harum, sed officiis sit eligendi omnis sunt minima beatae totam consectetur asperiores necessitatibus, illum officia aliquam vitae quasi deleniti quia. Quidem fuga porro assumenda.</p>
                            <div class="icon">
                                <img src="icon/facebook.ico" style="width:35px; margin-right:10px;" alt="">
                                <img src="icon/images.png" style="width:33px; margin-right:10px;" alt="">
                                <img src="icon/instagram.ico" style="width: 33px;px ; margin-right:10px;" alt="">
                                <img src="icon/github-logo.ico" style="width:33px; margin-right:10px;" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="bar2">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php

    include "koneksi.php";

    if(isset($_POST['kirim'])){
        mysqli_query($koneksi,"insert into ormawa set
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