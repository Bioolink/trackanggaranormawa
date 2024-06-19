<?php
session_start();
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
<body>

<style>

*{
    padding: 0px;
    margin: 0px;
}

.page{
    width: 100%;
    height: 100vh;
    background-color: rgb(255, 255, 255);
    display: flex;
}

.page1{
    width: 50%;
    height: 100vh;
    background-color: rgb(32, 103, 255);
    border-top-right-radius: 50%;
    border-bottom-right-radius: 50%;
}

.page1 h2{
    margin-left: 3%;
    margin-top: 20%;
    color: white;
    font-size: 4rem;
}

.page1 span{
    color: salmon;
}

.page1 p{
    width: 80%;
    color: white;
    text-align: justify;
    font-size: 1.5rem;
    margin-left: 3%;
    margin-top: 10%;
}

.judul {
    display: flex;
    margin-left: 3%;
    margin-top: 2%;

}

.judul img{
    width: 60px;
}

.judul h3{
    margin-top: 20px;
    margin-left: 10px;
    color: white;
    font-size: 22px;
}

.page2{
    width: 50%;
    text-align: center;
    height: 100vh;
}

.foto{
    width: 500px;
    height: 100px;
    border-radius: 10px;
    margin: auto;
    margin-top: 3%;
    background-color: rgb(175, 175, 175);
}

.form{
    margin-top: 8%;
}

.form p{
    font-size: 15px;
    font-weight: 1000;
    margin-top: .6%;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}

.page2 input{
  width: 500px;
  height: 40px;
  border-radius: 10px;
  margin-top: 3%;
  border: 2px solid black;
  background-color: rgb(255, 255, 255);
  text-align: center;
  font-size: 15px;
}

.page2 button{
    width: 500px;
    height: 40px;
    border-radius: 10px;
    border: none;
    background: linear-gradient(rgb(36, 221, 253), rgb(0, 60, 255));
    color: white;
    font-size: 15px;
  
}

.page2 button:hover{
    width: 200px;
    height: 40px;
    background: linear-gradient(rgb(0, 60, 255),rgb(36, 221, 253));
    cursor: pointer;
    transition: all .5s ease-in-out;
}

.lupa{
    width: 500px;
    margin-top: 4%;
    margin-bottom: 4%;
    /* background-color: aqua; */
    justify-content: space-between;
    display: flex;
}

.other{
    display: flex;
    justify-content: space-between;
    width: 500px;
    margin: auto;
    margin-top: 4%;
}

.google{
    width: 230px;
    height: 50px;
    border-radius: 10px;
    background-color: rgb(255, 255, 255);
    border: 2px solid black;
    background: url(img/google.png);
    background-size: 150px;
    background-repeat: no-repeat;
    background-position: center;
    cursor: pointer;
   
}


.apple{
    width: 250px;
    height: 50px;
    border-radius: 10px;
    background: url(img/apple.png);
    background-size: 150px;
    background-repeat: no-repeat;
    background-position: center;
    border: 2px solid black;
    cursor: pointer;
}

</style>

<?php
        if(isset($_POST['username'])){
            $username = $_POST['username'];
            $password = $_POST['password'];

            $query = mysqli_query($koneksi, "SELECT*FROM user_admin where username='$username' and password='$password'");

            if(mysqli_num_rows($query) > 0){
                $data = mysqli_fetch_array($query);
                $_SESSION['user_ormawa'] = $data;
                echo '<script>alert("Selamat datang Admin, '.$data['nama'].'"); location.href="dashboard.php";</script>';
            }else{
                echo '<script>alert("Username/password salah");</script>';
            }
        }

    ?>




    
<div class="page">

<div class="page1">
    <div class="judul">
        <img src="img/logopolindra.png" alt="">
        <h3>Politeknik Negeri Indramayu</h3>
    </div>
    <h2>Student affairs <br> New Tourism Spots</h2>
    <p> <span>Information Detail</span> <br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis voluptas excepturi beatae consequuntur asperiores? Ratione temporibus modi dicta magni nisi ipsam. Provident natus quis eius necessitatibus earum cupiditate sequi quas quos sunt. Excepturi non vero, quod quae amet eveniet hic nemo minus tenetur cumque perspiciatis iure. Voluptates sed vel nostrum modi, quisquam, facilis sit, pariatur hic dignissimos alias illo. Debitis voluptate explicabo tempore beatae eos repellendus libero error eum harum dicta obcaecati officia soluta, quo enim officiis quaerat, quos nemo natus dolores ipsa quasi expedita? Aut nisi incidunt explicabo officiis quasi! Enim dicta eos atque facilis dolore, hic inventore labore!</p>
</div>


<div class="page2">
    <div class="form">
        <img src="img/logopolindra.png" width="150px" >
        <p>Pengajuan izin dan pelaporan kegiatan Organisasi Mahasiswa</p>
        <p>Politeknik Negeri Indramayu ( admin )</p>
        <div class="foto"></div>
    </div>
    <form method="post">
        <center>
        <input type="text" name="username" placeholder="Username" autocomplete="off" required ><br>
        <input type="password" name="password" id="password" placeholder="Password" required><br>
        <div class="lupa">
           <a href="#">Lupa password</a>
           <p>Belum punya akun ? <a href="#">Bikin Yuk</a></p>
        </div>
        <button type="submit">Submit</button>
    </center>
    <div class="other">
        <a href="www.youtube.com"><div class="google"></div></a>
        <div class="apple"></div>
    </div>
    </form>
</div>

</div>

</body>
</html>