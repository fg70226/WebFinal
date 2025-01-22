var i=0;
var imgArray = [
    "D&Glogo.jpg",
    "pradalogo.jpg",
    "polologo.jpg",
    "guccilogo.jpg",
]
var slideshow = document.getElementById("slideshow");
function goToSlide(index){
    slideshow.src = imgArray[index];
}
