///////////////////////////////////////////////////
function checkLocationUser() {
    window.addEventListener('scroll', () => {
    let check = window.scrollY;
    let backDauTrang = document.querySelector('.lienhe .back_dautrang');
    backDauTrang.style.display = "none";
        if (check >= 300) {
            backDauTrang.style.display = "block";
            // console.log(check);
        }
    })
}
checkLocationUser();