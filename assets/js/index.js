
console.log("Site Design & Development www.felixluke.co.uk");

window.onpageshow = function(event) {
  if (event.persisted) {
      window.location.reload() 
  }
};



// lines
const lines = document.querySelectorAll(".line-wrapper");
const lineObserver = new IntersectionObserver(lineEntries => {
    lineEntries.forEach(entry => {
        entry.target.classList.toggle("showing", entry.isIntersecting);
        const line = entry.target.querySelector(".line");
        if (document.body.contains(line)) {
          line.classList.toggle("line-in-view", entry.isIntersecting);
        }
        if(entry.isIntersecting) lineObserver.unobserve(entry.target)
    })
},
  {
    rootMargin: "-100px",
  }
)

lines.forEach(line => {
    lineObserver.observe(line)
})