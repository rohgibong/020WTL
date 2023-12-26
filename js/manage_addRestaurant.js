let contactNum1 = document.addForm.contactNum1;
let contactNum2 = document.addForm.contactNum2;
let contactNum3 = document.addForm.contactNum3;

let map;
let marker;

contactNum1.addEventListener("input", function() {
  if (contactNum1.value.length === 3) {
    contactNum2.focus();
  }
});
contactNum2.addEventListener("input", function() {
  if (contactNum2.value.length === 4) {
    contactNum3.focus();
  }
});


kakao.maps.load(() => {
  let mapContainer = document.getElementById('map'), // 지도를 표시할 div 
      mapOption = { 
          center: new kakao.maps.LatLng(35.8476701950372, 128.584203505219), // 지도의 중심좌표
          level: 3 // 지도의 확대 레벨
      };

  map = new kakao.maps.Map(mapContainer, mapOption); // 지도를 생성합니다

  // 마커가 표시될 위치입니다 
  let markerPosition  = new kakao.maps.LatLng(35.8476701950372, 128.584203505219); 

  // 마커를 생성합니다
  marker = new kakao.maps.Marker({
      position: markerPosition
  });

  // 마커가 지도 위에 표시되도록 설정합니다
  marker.setMap(map);
});

// 주소에 대한 좌표 정보를 얻기 위한 함수
function getAddressCoordinates(address, callback) {
  var geocoder = new kakao.maps.services.Geocoder();
  geocoder.addressSearch(address, function (result, status) {
    if (status === kakao.maps.services.Status.OK) {
      // 콜백 함수를 호출하면서 좌표 정보 전달
      callback(result[0].x, result[0].y);
    } else {
      console.error("Failed to get coordinates for the address");
      // 실패 시 적절한 처리를 추가할 수 있습니다.
    }
  });
}

function openAddressPopup() {
  new daum.Postcode({
    oncomplete: function(data) {
      document.getElementById('addressInput').value = data.address;

      // 주소에 대한 좌표 정보 얻기
      getAddressCoordinates(data.address, function(x, y) {
        updateMap(x, y);
      });
    }
  }).open();
}

function updateMap(x, y) {
  console.log(x, y);
  // 새로운 좌표로 마커를 이동시키는 코드를 추가하세요.
  let newPosition = new kakao.maps.LatLng(y, x);
  
  // 기존 마커를 지도에서 제거
  marker.setMap(null);

  // 새로운 위치에 마커 생성
  marker = new kakao.maps.Marker({
    position: newPosition
  });

  // 새로운 마커를 지도에 표시
  marker.setMap(map);

  // 지도 중심을 새로운 위치로 이동
  map.setCenter(newPosition);
}


//x값, y값, data.address 들고 가기.