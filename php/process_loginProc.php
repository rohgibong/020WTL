<?php
  $adminId = $_POST["adminId"];
  $adminPwd = $_POST["adminPwd"];

  // 호스팅 했을때 수정
  // $con = mysqli_connect("localhost", "rohgibong", "rlqhd0725!", "rohgibong");
  $con = mysqli_connect("localhost", "user1", "12345", "020wtl");
  $sql = "select adminNo, adminName from admin where adminId = '$adminId' and adminPwd = '$adminPwd'";

  $result = mysqli_query($con, $sql);
  $row_cnt = mysqli_num_rows($result);

  if($row_cnt == 0){
    echo "
      <script>
        alert('아이디 또는 비밀번호가 일치하지 않습니다.');
        location.href = './manage_login.php';
      </script>
    ";
  } else{
    while($row = mysqli_fetch_assoc($result)) {
      $adminNo = $row['adminNo'];
      $adminName = $row['adminName'];
    }
    session_start();
    $_SESSION['adminNo'] = $adminNo;
    $_SESSION['adminName'] = $adminName;
    $_SESSION['adminId'] = $adminId;

    echo "
      <script>
        alert('관리자 $adminName($adminId)님 환영합니다.');
        location.href = './_index.php';
      </script>
    ";
  }
?>