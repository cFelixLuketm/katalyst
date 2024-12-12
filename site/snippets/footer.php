
  </main>

<script>
      const mobileNavButton = document.querySelector(".mobile-input");
      const mobileMenu = document.querySelector(".mobile-nav");
      const toggle = document.querySelector("#menuToggle");
      const pagenavItemsMobile = document.querySelectorAll(".page-nav-items");
      
      mobileNavButton.addEventListener('click', function(){
        if(mobileMenu.classList.contains('active')){
          mobileMenu.classList.remove('active');
          mobileMenu.style.transform = "translateY(100%)";
          toggle.classList.remove('active');
        } else {
          mobileMenu.style.transform = "translateY(0%)";
          mobileMenu.classList.add('active');
          toggle.classList.add('active');
          pagenavItemsMobile.forEach(item => {
            item.addEventListener('click', function() {
              const lines = document.querySelectorAll(".lines");
              lines.forEach(line => {
                line.style.transform = "rotate(0deg)";
                line.style.opacity = 1;
                console.log(line)
              })
            })
          })
        }
      },false)
</script>
  
  <?= js([
    'assets/js/pagetrans.js',
    'assets/js/index.js',
    'assets/js/filter.js',
    'assets/js/studiotabs.js',
    'assets/js/parallax.js',
    '@auto'
  ]) ?>
  

</body>
</html>
