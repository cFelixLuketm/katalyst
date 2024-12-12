
const main = document.querySelector('.scroll__container');
const video = document.querySelector('.main__video');
const header = document.getElementById("header");
var headerheight = header.offsetHeight;
video.style.marginTop = headerheight + 'px';
video.style.height = window.innerHeight - headerheight + 'px';
const videoSection = document.querySelector('#video');

main.addEventListener('scroll', () => {
    animateVideo()
})


const element = document.querySelector('.homepage');
element.style.marginTop = headerheight + 'px';
element.style.height = window.innerHeight - headerheight + 'px'

const headerLeft = document.querySelector('.text__header__left');
const headerRight = document.querySelector('.text__header__right');

function animateVideo(){
    let {bottom} = videoSection.getBoundingClientRect();
    let scale = 1 - ((bottom - window.innerHeight) * .0005);
    scale = scale < .2 ? .2 : scale > 1 ? 1 : scale;
    video.style.transform = `scale(${scale})`;
    let textTrans = bottom - window.innerHeight;
    textTrans = textTrans < 0 ? 0 : textTrans;
} 


const initalText = document.querySelector(".hero__container");
addEventListener("DOMContentLoaded", (event) => {
    initalText.classList.add("active");
  });

  
