<?php
    session_start();
    if(!isset($_SESSION['user_ormawa'])){
        header('location:login.php');
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
    width: 97.8%;
}

.bar1{ 
    width: 100%;
    height: 80.1vh;
    border-radius: 10px;
    margin-left: 2.2%;
    margin-top: 2.5%;
    background-color: #6666FF;

}

table{
    margin-left:45px;
}

td{
    background-color:white;
    height:50px;
    text-align:center;
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
                    <a href="laporan.php"><li>Laporan Kegiatan  </li></a>
                    <a href="profil.php"><li>Profil Saya </li></a>
                    <a href="login.php"><li>Ganti Password </li></a>
                    
                </ul>
            </div>
            <div class="right">
                
                <div class="con2">
                    <div class="bar1">
                <table border="1" width="94%">
                    <tr bgcolor="salmon">
                        <th>Nama Ormawa</th>
                        <th>Nama Kegiatan</th>
                        <th>Mulai</th>
                        <th>Akhir</th>
                        <th>undangan</th>
                        <th>rab</th>
                        <th>deskripsi</th>
                    </tr>
                     <?php
                        include "koneksi.php";
                        $query = mysqli_query($koneksi, "SELECT * FROM pendaftaran");
                        while ($data = mysqli_fetch_array($query)){
                            
                        
                     ?>
                     <tr>
                            <td><?php echo $data['namaormawa']; ?></td>
                            <td><?php echo $data['namakegiatan']; ?></td>
                            <td><?php echo $data['mulai']; ?></td>
                            <td><?php echo $data['akhir']; ?></td>
                            <td><?php echo $data['undangan']; ?></td>
                            <td><?php echo $data['rab']; ?></td>
                            <td><?php echo $data['deskripsi']; }?></td><br>
                        </tr>
                </table>
                        
                    </div>
                  
                </div>
            </div>
        </div>
    </div>



</body>
</html>