
import { lerp } from "./utils.js";
import { createProjects } from "./testimonials.js";

const main = document.querySelector('.scroll__container');

createProjects();

const projectsSticky = document.querySelector('.projects__sticky');
const projectSlider = document.querySelector('.projects__slider');

let projectTargetX = 0;
let projectCurrentX = 0;

let percentages = {
    small: 700,
    medium: 300,
    large: 100
}

let limit = window.innerWidth <= 600 ? percentages.small :
            window.innerWidth <= 1100 ? percentages.medium :
            percentages.large

function setLimit(){
    limit = window.innerWidth <= 600 ? percentages.small :
            window.innerWidth <= 1100 ? percentages.medium :
            percentages.large
}

window.addEventListener('resize', setLimit);

function animateProjects(){
    let offsetTop = projectsSticky.parentElement.offsetTop;
    let percentage = ((main.scrollTop - offsetTop) / window.innerHeight) * 100;
    percentage = percentage < 0 ? 0 : percentage > limit ? limit : percentage;
    projectTargetX = percentage;
    projectCurrentX = lerp(projectCurrentX, projectTargetX, .1);
    projectSlider.style.transform = `translate3d(${-(projectCurrentX / 1.01)}vw, 0 , 0)`;
}


function animate(){
    animateProjects();
    requestAnimationFrame(animate)
}

animate()