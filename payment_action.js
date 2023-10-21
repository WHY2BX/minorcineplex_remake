// เมื่อคลิกปุ่ม "แสดง Pop Up"
document.getElementById("openPopupButton").addEventListener("click", function() {
    document.getElementById("popup").style.display = "block";
});

// เมื่อคลิกปุ่มปิดหน้า Pop Up (x)
document.getElementById("closePopupButton").addEventListener("click", function() {
    document.getElementById("popup").style.display = "none";
});

// เมื่อคลิกภายนอกขอบของ Pop Up ให้ปิด Pop Up
document.querySelector(".popup").addEventListener("click", function(event) {
    if (event.target === document.querySelector(".popup")) {
        document.getElementById("popup").style.display = "none";
    }
});
