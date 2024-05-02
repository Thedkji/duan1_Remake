function SlideViewSP() {
    let slideList = document.querySelector('#chitietsp .slide-sanpham .slide-list');
    let imgs = document.querySelectorAll('#chitietsp .slide-sanpham .slide-list img');
    let btnNext = document.querySelector('#chitietsp .nextpre .next');
    let btnPre = document.querySelector('#chitietsp .nextpre .pre');
    let dots = document.querySelectorAll('#chitietsp .dots ul li');

    let i = 0;
    btnNext.addEventListener('click', () => {
        {
            i++;
            if (i > imgs.length - 1) {
                i = 0;
            }
            reloadSlide();
        }
    })

    btnPre.addEventListener('click', () => {
        {
            i--;
            if (i < 0) {
                i = imgs.length - 1;
            }
            reloadSlide();
        }
    })

    function reloadSlide() {
        let widthLeft = imgs[i].offsetLeft;
        console.log(widthLeft);
        slideList.style.transform = `translateX(-${widthLeft}px)`;

        let dotsActive = document.querySelector('#chitietsp .dots ul li.active');
        dotsActive.classList.remove('active');
        dots[i].classList.add('active');
    }
    
    function Dots(){
        dots.forEach((li,index)=>{
            li.addEventListener('click',()=>{
                i = index;
                reloadSlide();
            })
        })
    }
    Dots();
}


SlideViewSP()