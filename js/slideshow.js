let currentSlide = 0;
var slide = document.querySelectorAll("#slide img");
console.log(slide)
slide.forEach(img => {
    if(img == slide[0]){ return; }
img.classList.toggle("opacityZero");
});
function imgSlide(){
    slide[currentSlide].classList.toggle("opacityZero");
    if(currentSlide == slide.length -1){
        currentSlide = 0;
    }
    else{
        currentSlide++;
    }
    slide[currentSlide].classList.toggle("opacityZero");
    setTimeout(imgSlide,8000);
}
imgSlide();