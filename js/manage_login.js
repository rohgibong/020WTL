function login(){
  let adminId = document.getElementById("adminId").value;
  let adminPwd = document.getElementById("adminPwd").value;
  
  if(adminId == ""){
    alert("아이디를 입력해주세요!");
    return;
  } else if(adminPwd == ""){
    alert("비밀번호를 입력해주세요!");
    return;
  } else {
    document.loginForm.submit();
  }
}
