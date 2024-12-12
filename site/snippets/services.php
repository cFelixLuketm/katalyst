
<style>
  @media screen and (max-width: 768px) {
    div.project__header {
        height: 5vh;
    }
  }
</style>

  <?php $servicestab = $page->children()->listed()->offset(1)->paginate(1) ?>
  <?php foreach ($servicestab as $service): ?>
    <figcaption class="img-caption insight-date">
      <p><?= $service->title() ?></p>
    </figcaption>
    <div class="title-paragraph-wrapper-services approach">
      <span>
        <h2><?= $service->servicesmainparagraph()->html() ?></h2>
      </span>
      <span class="right-side-paragraph-services">
        <span>
          <h3><?= $service->servicessecondparagraph()->html() ?></h3>
        </span>
      </span> 
    </div>

    
    <div class="services-wrapper approach">
      <?php $servicecategories = $service->children()->listed() ?>
      <?php foreach ($servicecategories as $category): ?>
        <span class="category-wrapper image-service-wrapper">
<!-- image -->
          <div class="image-wrapper">
            <?php $services = $category->children()->listed() ?>
            <?php foreach ($services as $singleservice): ?>
              <span class="service-image-wrapper">
                <?php if ($image = $singleservice->files()->filterBy('type', 'image')->first()): ?>
                  <img class="service-image service"
                    src="<?= $image->url() ?>"
                  >
                <?php elseif ($video =  $singleservice->files()->filterBy('type', 'video')->first()): ?>
                  <video class="service-image service"
                         src="<?= $video->url() ?>" 
                         type="<?= $video->mime() ?>" 
                         id="news-img" 
                         autoplay 
                         muted 
                         loop 
                         playsinline 
                  >
                  </video>
                <?php endif ?>
              </span>
            <?php endforeach; ?>
            </div>
<!-- category -->
          <!-- <div class="category-service-wrapper">
            <div></div>
            <div>
              <p class="service"><?= $category->title()->html() ?></p>
            </div>
          </div> -->
<!-- title -->
          <div class="title-service-wrapper">
            <?php $services = $category->children()->listed() ?>
            <?php foreach ($services as $singleservice): ?>
            <span class="service-title-wrapper">
              <h2 class="service"><?= $singleservice->service()->html() ?></h2>
            </span>
            <?php endforeach; ?>
          </div>

        </span>
      <?php endforeach; ?>
    </div>
  <?php endforeach; ?>



<script>

    const titleServiceWrappers = document.querySelectorAll(".service-title-wrapper");
    const titleServiceWrapperObserver = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        // entry.target.classList.toggle("show", entry.isIntersecting);
        const currentTitle = entry.target.querySelector(".service");
        currentTitle.classList.toggle("title-showing", entry.isIntersecting);
        // console.log(currentTitle)
      })
    },
      {
        rootMargin:'-50%',
      }
    )

    titleServiceWrappers.forEach(title => {
      titleServiceWrapperObserver.observe(title)
    })


    const imageServiceWrappers = document.querySelectorAll(".service-image-wrapper");
    console.log(imageServiceWrappers)
    const imageServiceWrapperObserver = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        // entry.target.classList.toggle("show", entry.isIntersecting);
        const currentTitle = entry.target.querySelector(".service");
        currentTitle.classList.toggle("image-showing", entry.isIntersecting);
        // console.log(currentTitle)
      })
    },
      {
        rootMargin:'-50%',
      }
    )

    imageServiceWrappers.forEach(image => {
      imageServiceWrapperObserver.observe(image)
    })

    <?php if ($page->isMobile()): ?>  
      var services = document.querySelectorAll('.image-service-wrapper');
      var last = services[services.length- 1];
      last.style.paddingBottom = "5rem";
    <?php else: ?>
        var services = document.querySelectorAll('.image-service-wrapper');
        var last = services[services.length- 1];
        last.style.paddingBottom = "10rem";
    <?php endif ?>

</script>