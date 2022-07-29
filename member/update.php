<?php

$num = $_GET["num"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "computer10";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT num,user,pass,name,tel FROM member where num=".$num;

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  $row = mysqli_fetch_assoc($result);
  $num = $row["num"];
  $user = $row["user"];
  $pass = $row["pass"];
  $name = $row["name"];
  $tel = $row["tel"];
} 
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원수정</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js" defer></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js" defer></script>
    <link rel="stylesheet" href="./style.css">
    
</head>
<body>





        <div class="modal-dialog">
            <div class="loginmodal-container">
                <h1>회원정보 수정</h1><br>
                <form action="./updateok.php" method="post">
                    <input type="hidden" name="num" value="<?php echo $num;?>">
                    <input type="text" name="user" placeholder="아이디입력" virtual="<?php echo $user;?>">
                    <input type="password" name="pass" placeholder="패스워드입력"virtual="<?php echo $pass;?>">
                    <input type="text" name="name" placeholder="이름입력"virtual="<?php echo $neme;?>">
                    <input type="text" name="tel" placeholder="연락처입력"virtual="<?php echo $tel;?>">

                    <input type="submit" name="login" class="login loginmodal-submit" value="수정">
                </form>
              
		 
</body>
</html>