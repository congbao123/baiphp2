
     <?php 
         $kiemtra=0;
         if(!empty($_POST["hoten"]) && !empty($_POST["email"]) && !empty($_POST["tendangnhap"]) && !empty($_POST["matkhau"])) {
          $thongtin = $_POST["hoten"]."-".$_POST["email"]."-".$_POST["tendangnhap"]."-".$_POST["matkhau"];
            setcookie("khachhang",$thongtin,time()+3600);
            $kiemtra=1;
         }
     ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form id="bao" name="bao" method="post" action="">
      <label for="">ho va ten:
           <input name="hoten" type="text" id="hoten" value="<?php echo $_POST["hoten"];?>"/>
      </label>         
      <label for="">Email:
           <input name="email" type="text" id="email" value="<?php echo $_POST["email"];?>"/>
      </label>      
        <label for="">Ten dang nhap:
           <input name="tendangnhap" type="text" id="tendangnhap" value="<?php echo $_POST["tendangnhap"];?>"/>
      </label>      
   <label for="">mat khau:
           <input name="matkhau" type="passwork" id="matkhau" value="<?php echo $_POST["matkhau"];?>"/>
      </label>
       <input name="submit" type="submit" id="button" value="dang nhap" /> 
       <p> </p>     
</form>
</body>
</html>