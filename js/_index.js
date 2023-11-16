let target = document.querySelector("#dynamic");
let isCalled = false;
let totalScrollLength = document.body.scrollHeight - window.innerHeight;


if(totalScrollLength < 300 && !isCalled){
  dynamic("우리는 항상 고민했습니다.".split(""), 1);
  isCalled = true;
} else {
  window.addEventListener("scroll", function() {
    let value = window.scrollY;
    let percentage = (value / totalScrollLength) * 100;
    // console.log("scrollY", value);
    console.log(totalScrollLength);
    console.log(percentage);
  
    if(percentage > 60 && !isCalled){
      dynamic("우리는 항상 고민했습니다.".split(""), 1);
      isCalled = true;
    }
  });
}




//한글자씩 텍스트 타이밍효과
function dynamic(text, num){
  if(num == 2){
    target = document.querySelector("#dynamic2");
  } else if(num == 3){
    target = document.querySelector("#dynamic3");
  }

  if(text.length > 0){
    target.textContent += text.shift();
    setTimeout(function(){
      dynamic(text, num);
    }, 80);
  } else {
    target.classList.remove("active");
    if(num == 1){
      setTimeout(() => dynamic("\"오늘 점심 뭐 먹지?\"".split(""), 2), 1000);
    } else if(num == 2){
      setTimeout(() => dynamic("\"글쎄.. 랜덤으로 뽑을까..?\"".split(""), 3), 1000);
    } else if(num == 3){
      target.classList.add("active");
    }
  }
}


// 커서 깜빡이는 효과
function blink(){
  target.classList.toggle("active");
}

// 반복함수, blink라는 함수를 0.5초마다 반복하게
setInterval(blink, 500);