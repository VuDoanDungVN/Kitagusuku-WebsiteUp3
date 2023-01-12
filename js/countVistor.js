/**Đây là đoạn code đếm số lần truy cập trang bằng JavaScripts */
var countVisitor = document.getElementById('count');
updateCountviews();
function updateCountviews() {
    fetch('https://api.countapi.xyz/update/vudungocc/vudungocc/?amount=1')
        .then(res => res.json())
        .then(res => {
            countVisitor.innerHTML = res.value;
        });
}

/**Đây là đoạn code đếm số lần truy cập trang bằng JavaScripts */
var countVisitor1 = document.getElementById('count1');
updateCountviews1();
function updateCountviews1() {
    fetch('https://api.countapi.xyz/update/03669/03669/?amount=1')
        .then(res => res.json())
        .then(res => {
            countVisitor1.innerHTML = res.value;
        });
}

/**Cảm ơn các bạn đã xem video của mình */