// Trang chủ - hethong_showroom
function SlideShow_ShowRoom() {
    let item__list__slide = document.querySelector('.hethong__showroom .item__list__slide');
    let img = document.querySelectorAll('.hethong__showroom .item__list__slide img');
    let dots = document.querySelectorAll('.hethong__showroom .dots ul li');
    // console.log(img);
    // console.log(item__list__slide);

    // SlideAuto();
    let i = 0;
    function SlideAuto() {
        i++;
        if (i > img.length - 1) {
            i = 0;
        }
        let leftWidth = img[i].offsetLeft;
        item__list__slide.style.transform = `translateX(-${leftWidth}px)`;

        let dotsActive = document.querySelector('.hethong__showroom .dots ul li.active');
        dotsActive.classList.remove('active');
        dots[i].classList.add("active");
    }

    function Dots() {
        dots.forEach((li, index) => {
            li.addEventListener("click", () => {
                let leftWidth = img[index].offsetLeft;
                item__list__slide.style.transform = `translateX(-${leftWidth}px)`;

                let dotsActive = document.querySelector('.hethong__showroom .dots ul li.active');
                dotsActive.classList.remove('active');
                dots[index].classList.add("active");

                clearInterval(slideAuto);
                let slideAuto = setInterval(SlideAuto, 8000);
            })
        });
    }
    Dots();

    let slideAuto = setInterval(SlideAuto, 8000);
}

SlideShow_ShowRoom();