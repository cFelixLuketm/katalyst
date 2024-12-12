
function lerp(start, end , t){
    return start * (1 - t) + end * t;
}

class SmoothScroll {
    constructor(el, images){
        this.el = el;
        this.images  = images;
        this.currentY = 0;
        this.targetY = 0;
        this.setup();
        this.onWindowResize();
        this.animate();
    }

    setup(){
        document.body.style.height = `${this.el.offsetHeight}px`;
        window.addEventListener('scroll', () => {
            this.targetY = window.scrollY;
        })
    }

    onWindowResize(){
        window.addEventListener('resize', () => {
            document.body.style.height = `${this.el.offsetHeight}px`;
        })
    }
    

    animate(){
        this.currentY = lerp(this.currentY, this.targetY, .75);
        // this.el.style.transform = `translate3d(0, -${this.currentY}px, 0)`;
        for(let i = 0; i < this.images.length; i++){

            let {top, height} = this.images[i].parentElement.getBoundingClientRect();
            
            function isMobile() {
                const minWidth = 768;
                return window.innerWidth < minWidth || screen.width < minWidth;
              }

              if (isMobile()) {
                top = (top - ((window.innerHeight * .15) - (height * .15))) * .175;
              } else {
                top = (top - ((window.innerHeight * .25) - (height * .25))) * .5;
              }

            let transTop = top;
            top = top < 0 ? 0 : top >= 50 ? 50 : top;
            this.images[i].style.transform = `translate3d(0, ${transTop}px, 0)`
        }

        requestAnimationFrame(this.animate.bind(this));
    }
}


export {
    SmoothScroll
}