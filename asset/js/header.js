function HoverIconUserInHeader() {
    iconUserHeader.addEventListener('mouseover',()=>{
        menuHeader.style.display = `block`;
    })
    menuHeader.addEventListener('mouseover',()=>{
        menuHeader.style.display = `block`;
    })
    menuHeader.addEventListener('mouseout',()=>{
        menuHeader.style.display = `none`;
    })
    
}
var a = 2;

console.log(a);

HoverIconUserInHeader();