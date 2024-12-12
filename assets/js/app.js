import { SmoothScroll } from './parallax.js';

const scrollable = document.querySelector('.scroll__container');
let images = [...document.querySelectorAll('#parallaxItem')];

new SmoothScroll(scrollable, images)