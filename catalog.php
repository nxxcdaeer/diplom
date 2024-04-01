<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Каталог</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- HEADER -->

    <div class="main_header">
        <div class="logo_main">
            <img class="img_logo_main" src="images/logo.svg" alt="">
        </div>
    </div>

    <!-- POD HEADER -->

    <div class="pod_header_main">
        <div class="pod_header_box_main">
            <div class="boxes_main_flex"><a class="text_box_main" href="main.php">ГЛАВНАЯ</a></div>
            <div class="boxes_main_flex"><a class="text_box_main" href="category.php">КАТЕГОРИИ</a></div>
            <div class="boxes_main_flex"><a class="text_box_main" href="">КОРЗИНА</a></div>
        </div>
    </div>

    <!-- CATALOG -->

    <div class="main_hits_main">
        <div class="hits_main">
            <p class="text_hover_hits_main">КАТАЛОГ</p>
        </div>
        <?php include ("connect.php");
        ?>
        <div class="main_hits_products_main">
            <div class="full_box_hits_products_main">
                <?php
                $i = 0;
                while ($i < 3) {
                    ?>
                    <div class="hits_products_main">
                        <div class="hits_card_main">
                            <div class="main_hits_img_main">
                                <img class="hits_img_main" src="<?php
                                $result = $connect->query("SELECT * FROM `products` WHERE id_category_products='3'");
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        echo $row["img_products"];
                                    }
                                }
                                ?>" alt="">
                            </div>
                            <p class="hits_text_main">
                                <?php
                                $result = $connect->query("SELECT * FROM `products` WHERE id_category_products='3'");
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        echo $row["name_products"];
                                    }
                                }
                                ?>
                            </p>
                            <p class="hits_price_main">
                                <?php
                                $result = $connect->query("SELECT * FROM `products` WHERE id_category_products='3'");
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        echo $row["price_products"] . " Рублей";
                                    }
                                }
                                ?>
                            </p>
                        </div>

                    </div>
                    <?php $i++;
                } ?>
            </div>
        </div>
    </div>

</body>

</html>