<?php 
    $kiemtra = 0;
    if(isset($_POST["hoten"]) && isset($_POST["email"]) && isset($_POST["tendangnhap"]) && isset($_POST["matkhau"])) {
        $thongtin = "Xin chào ".$_POST["hoten"] ."</br>Email:" . $_POST["email"] . "</br>Tên đăng nhập:" . $_POST["tendangnhap"] . "</br> Mật khẩu:" . $_POST["matkhau"];
        setcookie("khachhang", $thongtin, time() + 3600);
        $kiemtra = 1;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>baitap</title>
    <style>
  .ttkh{
    background-color: aqua;
    margin-top:20px;
    padding-left: 30px;
    width:400px;
    text-align: center;
  }
  #bao{
    background-color: aqua;
    padding-left: 30px;
    width:400px;
    text-align: center;
  }
  h1{
    color:yellow;
  }
   #hoten{
    margin-left:33px;
    margin-bottom:10px;
   }
   #email{
    margin-left:57px;
    margin-bottom:10px;
   }
   #matkhau{
    margin-left:35px;
    margin-bottom:10px;
   }
   
   #tendangnhap{
        margin-bottom:10px;
    }
    #button{
        margin-bottom:10px;
    }
    </style>
</head>
<body>
    <form id="bao" name="bao" method="post" action="">
          <h1> Thông Tin Đăng Nhập </h1>
        <label for="">Họ và tên:
            <input name="hoten" type="text" id="hoten" value="<?php echo isset($_POST["hoten"]) ? $_POST["hoten"] : ''; ?>"/>
        </label></br>         
        <label for="">Email:
            <input name="email" type="text" id="email" value="<?php echo isset($_POST["email"]) ? $_POST["email"] : ''; ?>"/>
        </label> </br>      
        <label for="">Tên đăng nhập:
            <input name="tendangnhap" type="text" id="tendangnhap" value="<?php echo isset($_POST["tendangnhap"]) ? $_POST["tendangnhap"] : ''; ?>"/>
        </label>   </br>    
        <label for="">Mật khẩu:
            <input name="matkhau" type="password" id="matkhau" value="<?php echo isset($_POST["matkhau"]) ? $_POST["matkhau"] : ''; ?>"/>
        </label></br> 
        <input name="submit" type="submit" id="button" value="Đăng nhập" />     
    </form>
    <?php
       if($kiemtra == 1 && isset($_COOKIE["khachhang"])){
        echo "<div class='ttkh'>";
        echo $_COOKIE["khachhang"]."<br>";
        echo "<a href='text.php'>Click here!</a>";
        echo "</div>";
       }
    ?>
</body>
</html>
