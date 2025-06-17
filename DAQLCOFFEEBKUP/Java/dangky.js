document.getElementById("signupForm").addEventListener("submit", function(event) {
    event.preventDefault(); 

    
    const name = document.getElementById("name").value;
    const password = document.getElementById("password").value;
    const confirmPassword = document.getElementById("confirm_password").value;
    const phone = document.getElementById("phone").value;


    if (password !== confirmPassword) {
        alert("❌ Mật khẩu xác nhận không khớp! Vui lòng kiểm tra lại.");
        return;
    }


    if (!/^\d{10,11}$/.test(phone)) {
        alert("❌ Số điện thoại không hợp lệ! Vui lòng nhập đúng số.");
        return;
    }

  
    alert("✅ Đăng ký thành công!");

    
    const userData = { name, password, phone };
    console.log("Dữ liệu gửi đi:", JSON.stringify(userData));


    window.location.href = "dangnhap.html";
});


function togglePassword() {
    const passwordInput = document.getElementById("password");
    passwordInput.type = passwordInput.type === "password" ? "text" : "password";
}

function toggleConfirmPassword() {
    const confirmPasswordInput = document.getElementById("confirm_password");
    confirmPasswordInput.type = confirmPasswordInput.type === "password" ? "text" : "password";
}