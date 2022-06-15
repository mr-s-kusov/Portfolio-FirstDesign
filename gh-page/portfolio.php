<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M.S.K.-Portfolio</title>
    <link rel="stylesheet" href="css/style-common.css">
    <link rel="stylesheet" href="css/style-portfolio.css">
</head>
<body>
    <div id="blur" class="container">

        <?php include 'menu.php';?> <!--File included the left menu -->
        
        <div class="info">

            <div class="portfolio-topic">
                <p class="t-topic f-t-topic">Портфолио</p>
            </div>

            <div class="portfolio-examples">
                <div onclick="look('window1', 'blur'); return false;" class="miniature">
                    <img src="img\portfolio-1-ico.png" alt="">
                    <p>Сайт-визитка</p>
                </div>

                <div onclick="look('window0', 'blur'); return false;" class="miniature">
                    <img src="img\portfolio-2-ico.jpg" alt="">
                    <p>Сайт-визитка (landing)</p>
                </div>

                <div onclick="look('window0', 'blur'); return false;" class="miniature">
                    <img src="img\portfolio-3-ico.jpg" alt="">
                    <p>Онлайн-магазин (автомобильные шины)</p>
                </div>
            </div>
        </div>

    </div>

    <?php include 'link0.php';?>
    <?php include 'link1.php';?>

    <script src="scripts\script-portfolio.js"></script>

</body>
</html>