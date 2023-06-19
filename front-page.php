<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kpop - IL</title>
    <?php wp_head() ?>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand logo" href="#"><img
                    src="https://res.cloudinary.com/duohe6hiw/image/upload/v1686425600/kpop-logo_p8ghlt.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">בית</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">חנות</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">צור קשר</a>
                    </li>
                </ul>

            </div>
        </nav>
        <div class="header-icons">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-search"
                viewBox="0 0 16 16">
                <path
                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-basket3"
                viewBox="0 0 16 16">
                <path
                    d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-1A.5.5 0 0 1 .5 6h1.717L5.07 1.243a.5.5 0 0 1 .686-.172zM3.394 15l-1.48-6h-.97l1.525 6.426a.75.75 0 0 0 .729.574h9.606a.75.75 0 0 0 .73-.574L15.056 9h-.972l-1.479 6h-9.21z" />
            </svg>
        </div>
    </header>
    <div class="home-hero">
        <div class="swiper">
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide slide-1">

                </div>
                <div class="swiper-slide slide-2">

                </div>
                <div class="swiper-slide slide-3">

                </div>
                <div class="swiper-scrollbar"></div>
            </div>
        </div>

        <div class="hero-data">
            <div class="hero-title">
                עולם ה - kpop
            </div>
            <button class="hero-btn">
                קני עכשיו
            </button>
        </div>
    </div>
    <div class="main">
        <div class="catagory-list">
            <?php

            $categories = get_terms('product_cat', array('hide_empty' => false));
            if (!empty($categories)) {

                foreach ($categories as $category) {
                    // var_dump($category);
                    $category_url = get_term_link($category);
                    $category_image_id = get_term_meta($category->term_id, 'thumbnail_id', true);
                    
                        $category_image = wp_get_attachment_image($category_image_id, 'thumbnail');
                    ?>

                    <a style="text-decoration: none" href="<?php echo $category_url ?>">
                        <div class="catagory">
                            <?php echo $category_image;?>
                            <div class="catagory-title">
                                <?php echo $category->name ?>
                            </div>
                        </div>
                    </a>

                    <?php
                }

            } else {
                echo 'לא נמצאו קטגוריות.';
            }
            ?>
        </div>
        <hr />
        <div class="search-box">
            <div class="search-title">
                מצא את המוצרים האהובים עלייך
            </div>
            <div class="search-demo-form">
                <div class="search-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                        class="bi bi-search" viewBox="0 0 16 16">
                        <path
                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg>
                </div>
                <div class="demo-input" id="demo-input">
                    <p>
                        <span class="typed-text"></span>
                        <span class="cursor">&nbsp;</span>
                    </p>
                </div>
            </div>
        </div>

        <footer>
            <div>כל הזכויות שמורות </div>
            <?php wp_footer(); ?>
        </footer>
</body>

</html>