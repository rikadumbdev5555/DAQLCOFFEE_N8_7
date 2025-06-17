document.addEventListener("DOMContentLoaded", () => {
    const items = document.querySelectorAll(".item");

    items.forEach(item => {
        item.addEventListener("click", () => {
            alert(`Bạn đã chọn ${item.innerText.trim()}!`);
        });
    });
});