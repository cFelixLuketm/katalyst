
var tabLinks = document.querySelectorAll(".about_tab_link");
var tabContent = document.querySelectorAll(".tabcontent");
const content = document.querySelector(".content");

function animateServiceLine() {
   var line = document.getElementById('serviceLine');
   line.style.width = '100%';
 }

 function animateApproachLine() {
   var line = document.getElementById('approachLine');
   line.style.width = '100%';
 }

 function deleteGap() {
   var clientTitle = document.querySelector('.clientsgap');
   clientTitle.style.marginBottom = '0px';
 }

tabLinks.forEach(function(el) {
   el.addEventListener("click", openTabs);
   el.addEventListener("click", select);
});


function openTabs(el) {
   var btnTarget = el.currentTarget;
   var country = btnTarget.dataset.title;

   // tabContent.forEach(function(el) {
   //    el.classList.remove("active");
   //    const approachSections = document.querySelectorAll(".approach");
   //    approachSections.forEach(section => {
   //       section.classList.remove("active");
   //    })
   // });

   // tabLinks.forEach(function(el) {
   //    el.classList.remove("active");
   // });

   document.querySelector("#" + country).classList.add("active");
   setTimeout(() => {
      var tab = document.querySelector("#" + country);
      var approach = tab.querySelectorAll(".approach");
      approach.forEach(section => {
         section.classList.add("active");
      })
   }, 500);
   
   btnTarget.classList.add("active");
}

function select() {
   const ourstudioHeader = document.getElementById("ourstudio");
   // ourstudioHeader.style.height = "auto";
   const footer = document.querySelector(".footer-block");
   footer.style.display = "block";
}
 