<?php
    session_start();
    if(!isset($_SESSION['user_ormawa'])){
        header('location:login.php');

    }

    include "koneksi.php";

   


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

.page{
    width: 100%;
    height: 100vh;
    background-color: rgb(255, 255, 255);
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
    background-color: white;
}


.con1{
    display: flex;
    justify-content: space-evenly;
    margin-top: 2.5%;
}

.con1 p{
    color:white;
    font-size:19px;
    margin-left:50px;
    margin-top:170px;
}   

.con1 span{
    color:white;
    font-size:50px;
    margin-top:150px;
}


.dat1{
    width: 22%;
    height: 25vh;
    border-radius: 10px;
    background:url(img/dizin.png);
    background-size:cover;
    display:flex;
    justify-content:space-around;
}

.dat2{
    width: 22%;
    height: 25vh;
    border-radius: 10px;
    background-color: rgb(66, 141, 190);
    background:url(img/disetujui.png);
    background-size:cover;
    justify-content:space-around;
    display:flex;
}

.dat3{
    width: 22%;
    height: 25vh;
    justify-content:space-around;
    border-radius: 10px;
    background-color: rgb(66, 141, 190);
    background:url(img/ditolak.png);
    background-size:cover;
    display:flex;
}

.dat4{
    width: 22%;
    height: 25vh;
    border-radius: 10px;
    justify-content:space-around;
    background-color: rgb(98, 98, 98);
    background:url(img/dstat.png);
    background-size:cover;
    display:flex;
}

.con2{
    display: flex;
    width: 97.8%;
    justify-content: space-between;
}

.bar1{ 
    width: 73%;
    height: 53.6vh;
    border-radius: 10px;
    margin-left: 2.2%;
    margin-top: 1%;
    background-color: #6666FF;
}

.bar2{
    width: 23%;
    height: 53.5vh;
    margin-top: 1%;
    border-radius: 10px;
    background-color: #6666FF;
    text-align:center;
   
}


.bar2 button{
    width: 300px;
    height:40px;
    border-radius:10px;
    border:none;
    margin:auto;
    margin-top:450px;
    font-size:14px;
    background-color: white;
    cursor:pointer;
}

.bar2 button:hover{
    transform:scale(.9);
}

.bar2 button:active{
    transform:scale(.8);
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
            <h2> nama user</h2><br>
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
                    <a href="laporan.php"><li>Laporan Kegiatan</li></a>
                    <a href="profil.php"><li>Profil Saya</li></a>
                    <a href="login.php"><li>Ganti Password</li></a>
                    
                </ul>
            </div>
            <div class="right">
                <div class="con1">
                    <div class="dat1"> <p>Izin Kegiatan</p> <span>00</span></div>
                    <div class="dat2"> <p>Izin ditolak </p> <span>00</span></div>
                    <div class="dat3"> <p>Izin diterima </p> <span>00</span></div>
                    <div class="dat4"> <p>list izin </p> <span>00</span></div>
                </div>
                <div class="con2">
                    <div class="bar1"></div>
                    <div class="bar2">
                        <button>Look at me!</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>