<?php get_header(); ?>
<section class="hero_section">
<div class="hero_section-main_image">
  <h1 class="hero_section-main-heading">
    THE ONLY GUIDE YOU WOULD NEED FOR ALL YOUR STUDENT LIFE IN KAUNAS
  </h1>
  <a href="#categories" class="hero_section-main-button"
    >See Categories</a
  >
</div>
</section>
</header>
<main>
  <section class="categories" id="categories">
    <h2 class="categories-headline">Categories</h2>

    <div class="categories-cards">
        <?php
            if(have_posts())
                while(have_posts())
                {
                    the_post();
                    $content = str_replace('<p>', '<p class="categories-card-content">', get_the_content());
                    $description = substr($content, 0, 100);
                    $permalink = get_the_permalink();
                    echo "
                        <div class='categories-card' onclick='window.location.href = \"$permalink\";'>
                            <h2 class='categories-card-heading'>
                              ".strtoupper(get_the_title())."
                            </h2>
                              <p class='categories-card-content'>".get_the_excerpt()."</p>
                            
                          </div>
                    ";
                }

        ?>
    </div>
  </section>
</main>
<?php get_footer(); ?>
