<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>020WTL</title>
  <link rel="icon" type="image/x-icon" href="../img/YNC.png" />
  <link rel="stylesheet" href="../css/manage_addRestaurant.css">
</head>
<body>
<!-- 관리자 외(로그인x)에 들어오지 못하게 처리하기 -->
<?php include "./index_header.php";?>

<div class="content">
  <h1>추가하기</h1>

  <table class="" border="1">
    <caption>(*)표시 항목은 필수 입력 사항입니다.</caption>
    <tr>
      <td>식당명 (*)</td>
      <td>
        <input type="text" class="inputText">
      </td>
      <td rowspan="5">
        <img src="../img/noImage.png" alt="noImage"> <br>
        <span><></span>
      </td>
    </tr>
    <tr>
      <td>대표 사진</td>
      <td>
        <input type="file" class="inputFile">
      </td>
    </tr>
    <tr>
      <td>메뉴 사진</td>
      <td>1</td>
    </tr>
    <tr>
      <td>위치 (*)</td>
      <td>4</td>
    </tr>
    <tr>
      <td>카테고리 (*)</td>
      <td>4</td>
    </tr>
    <tr>
      <td>연락처</td>
      <td colspan="2">4</td>
    </tr>
    <tr>
      <td>운영 시간</td>
      <td colspan="2">4</td>
    </tr>
  </table>
</div>

<?php include "./index_footer.php";?>
<script src="../js/manage_addRestaurant.js"></script>
</body>
</html>