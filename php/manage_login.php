<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>020WTL</title>
  <link rel="icon" type="image/x-icon" href="../img/YNC.png" />
  <link rel="stylesheet" href="../css/manage_login.css">
</head>
<body>
  <?php
    session_start();
    $memberNo = isset($_SESSION["memberNo"]) ? $_SESSION["memberNo"] : 0;
  ?>
  <script>
    const memberNo = <?php echo $memberNo ?>;
    if(memberNo > 0){
      alert('이미 로그인 된 상태입니다.');
      location.href='./_index.php';
    }
  </script>
  <?php include "./index_header.php";?>

  <div id="content">
    <form name="loginForm" action="./process_loginProc.php" method="post">
      <div id="loginDiv">

        <h1>Admin Login</h1>

        <input type="text" name="adminId" id="adminId" class="loginInput" onkeydown="if(event.keyCode==13) login()"><br>
        <input type="password" name="adminPwd" id="adminPwd" class="loginInput" onkeydown="if(event.keyCode==13) login()"><br>

        <button type="button" onclick="login();">Login</button>

      </div>
    </form>
  </div>
  
  <?php include "./index_footer.php";?>
<script src="../js/manage_login.js"></script>
</body>
</html>