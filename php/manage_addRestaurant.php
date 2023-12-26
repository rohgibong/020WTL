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
  <form name="addForm" action="" method="post">
    <caption>(*)표시 항목은 필수 입력 사항입니다.</caption>
    <tr>
      <td>식당명 (*)</td>
      <td>
        <input type="text" class="inputName">
      </td>
      <td rowspan="5">
        <img src="../img/noImage.png" alt="noImage"> <br>
        <span></span>
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
      <td>
        <input type="file" class="inputFile">
      </td>
    </tr>
    <tr>
      <td>연락처</td>
      <td>
        <input type="text" class="contactNum" id="contactNum1" inputmode="numeric" maxlength="3" placeholder="010" oninput="this.value = this.value.replace(/\D/g, '');"> - 
        <input type="text" class="contactNum" id="contactNum2" inputmode="numeric" maxlength="4" placeholder="0000" oninput="this.value = this.value.replace(/\D/g, '');"> -
        <input type="text" class="contactNum" id="contactNum3" inputmode="numeric" maxlength="4" placeholder="0000" oninput="this.value = this.value.replace(/\D/g, '');">
      </td>
    </tr>
    <tr>
      <td>카테고리 (*)</td>
      <td>
        <select class="categorySelect">
          <option value="kor">한식 </option>
          <option value="chi">중식</option>
          <option value="jap">일식</option>
          <option value="wes">양식</option>
          <option value="fas">패스트푸드</option>
          <option value="des">디저트&커피</option>
        </select>
      </td>
    </tr>
    <tr>
      <td>위치 (*)</td>
      <td colspan="2">
        <input type="text" id="addressInput" onclick="openAddressPopup()" readonly>
        <div id="map"></div>
      </td>
    </tr>
    <tr>
      <td>운영 시간</td>
      <td colspan="2">4</td>
    </tr>
    <tr>
      <td colspan="3">
        <button>등록</button>
      </td>
    </tr>
  </form>
  </table>
</div>

<?php include "./index_footer.php";?>
<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=c8dd956afcda50310fb5d0603f4747a1&autoload=false&libraries=services"></script>
<script src="../js/manage_addRestaurant.js"></script>
<script src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
</body>
</html>