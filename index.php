<!DOCTYPE html>
<html>
<head>
    <title>SI-PINJAM JTE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <link rel="icon" type="image/png" href="img/Logo_UnivLampung.png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <style>
        body{
            font-family: 'Roboto', sans-serif;
            background-image: url("img/pattern.jpg");
            background-repeat: repeat;
            margin: 50px;
        }
        h2 {
            font-size: 25px;
            text-align: center;
            font-family: 'Roboto', sans-serif;
        }
        hr{
            width: 200px;
            border-top : 2px solid #c4c4c4;
        }
        img{
            
            max-height: 100px;
        }
        .panel {
            border-radius: 2%;
            box-shadow: 5px 10px 5px#c4c4c4;
        }
        @media(min-width:321px)and(max-width:425){
            section#login{
                width : 100%;
                height: 160px;
                margin-left: 5%;
                margin-right: 5%;
                margin-top: 60px;
            }
        }

    </style>
</head>
<body style="background-color : #f0f0f0">
    <br/>
    <br/>
    
    <br/>
    <br/>
  
    <div class="container">

        <div class="col-md-4 col-md-offset-4">
            <?php 
            session_start();
            if(isset($_GET['pesan'])){
                if($_GET['pesan'] == "gagal"){
                    echo "<div class='alert alert-danger'>Login gagal! username dan password salah!</div>";
                }else if($_GET['pesan'] == "logout"){
                    echo "<div class='alert alert-info'>Anda telah berhasil logout</div>";
                }else if($_GET['pesan'] == "belum_login"){
                    echo "<div class='alert alert-danger'>Anda harus login untuk mengakses halaman admin</div>";
                }
            }
            ?>          
            
            <form action="login.php" method="post">
                <div class="panel">
                <center>
                <h2><b>SI-PINJAM JTE</b></h2>
                </center>
                <hr>
           
                    <div class="panel-body">
                        <div style="text-align: center;">
                        <img src="img/Logo_UnivLampung.png">
                        </div>
                        <br>
                   
                        <div class="form-group">
                            <label>Username</label>
                            
                            <input type="text" class="form-control" name="username">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>  

                        <input type="submit" class="btn btn-primary " value="Login">                
                    </div>
                    <br/>
                </div>
            </form>

        </div>
    </div>
 
</body>
</html>
