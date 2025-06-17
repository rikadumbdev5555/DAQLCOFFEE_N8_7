document.getElementById("loginForm").addEventListener("submit", function(event) {
    event.preventDefault(); 

    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;

    if (username === "" || password === "") {
        alert("❌ Vui lòng nhập đầy đủ thông tin!");
        return;
    }

   
    console.log("Tên đăng nhập:", username);
    console.log("Mật khẩu:", password);

  
    alert("✅ Đăng nhập thành công!");
    
 
    window.location.href = "dashboard.html";
});


function togglePassword() {
    const passwordInput = document.getElementById("password");
    passwordInput.type = passwordInput.type === "password" ? "text" : "password";
}