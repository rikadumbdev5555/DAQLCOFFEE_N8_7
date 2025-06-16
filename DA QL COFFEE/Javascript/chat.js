function startChat() {
    let name = document.getElementById("name").value;
    let phone = document.getElementById("phone").value;
    let question = document.getElementById("question").value;

    if (!name || !phone || !question) {
        alert("Vui lòng nhập đầy đủ thông tin!");
        return;
    }

    let chatData = { name: name, phone: phone, message: question };

    fetch("https://chatbot-api.com/sendMessage", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(chatData)
    })
    .then(response => response.json())
    .then(data => {
        document.getElementById("chat-response").innerText = `Chatbot trả lời: ${data.reply}`;
    })
    .catch(error => {
        console.error("Lỗi gửi tin nhắn:", error);
    });
}