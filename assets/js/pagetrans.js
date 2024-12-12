
// onclick="javascript:setTimeout(()=>{window.location = '<?= $item->url() ?>' },1000);"

const appRoot = document.getElementById("page");
const nav = document.querySelector(".navigation");
const pageItems = document.querySelectorAll(".page-nav-items");
const discoverMoreLinks = document.querySelectorAll("#discoverMoreLinks");
const loader = document.querySelector(".loader");
const logo = document.querySelector(".logo");
const projectGrid = document.querySelector(".project-grid");
const recentGrid = document.querySelector(".grid-recent-work");
const titleLinks = document.querySelectorAll("#titleLink");
const footerLinks = document.querySelectorAll("#footerLinks");

const topline = document.querySelector(".top-line");

const root = document.documentElement;

const startTransition = () => {
	loader.style.transform = "translateY(100%)";
  if (document.body.contains(topline)) {
    topline.style.width = "100%";
  }
};

discoverMoreLinks.forEach(link => {
    link.addEventListener("click", function(){
      loader.style.transform = "translateY(0%)";
    })
})

pageItems.forEach(pageItem => {
  pageItem.addEventListener("click", function(){
    loader.style.transform = "translateY(0%)";
  })
})

titleLinks.forEach(titleLink => {
  titleLink.addEventListener("click", function(){
    loader.style.transform = "translateY(0%)";
  })
})

logo.addEventListener("click", function(){
    loader.style.transform = "translateY(0%)";
})

footerLinks.forEach(footerLink => {
  footerLink.addEventListener("click", function(){
    loader.style.transform = "translateY(0%)";
  })
})

if (document.body.contains(projectGrid)) {
    const projectLinks = document.querySelectorAll(".project-link");
    projectLinks.forEach(link => {
      link.addEventListener("click", function(){
        loader.style.transform = "translateY(0%)";
      })
    })
} else {
  null
}

if (document.body.contains(recentGrid)) {
  const projectLinks = document.querySelectorAll(".project-link");
  projectLinks.forEach(link => {
    link.addEventListener("click", function(){
      loader.style.transform = "translateY(0%)";
    })
  })
} else {
null
}

window.addEventListener("load", () => {
	startTransition();
});