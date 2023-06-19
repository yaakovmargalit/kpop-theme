<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
        }

        img {
            width: 741px;
            height: 477px;
        }

        h1 {
            width: fit-content;
        }
    </style>
</head>

<body <?php body_class() ?>>
    <h1>היי ברוכים הבאים</h1>
    <?php

    $categories = get_terms('product_cat', array('hide_empty' => false));
    if (!empty($categories)) {
        echo '<ul>';
        foreach ($categories as $category) {
            $category_url = get_term_link($category); ?>
            <li><a href="<?php echo $category_url ?>"><?php echo $category->name ?></a></li>
            <?php
        }
        echo '</ul>';
    } else {
        echo 'לא נמצאו קטגוריות.';
    }
    ?>
</body>

</html>