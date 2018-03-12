
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>


<div class="container">
        <h1>PREKES</h1>

        <?php
            include('../DB/shop_db.php');
        ?>

                    <article class="row">
                        <?php $preke = getShop(1); // masyvas ?>
                        <div class="col-6 bg-info text-center m-2">
                            <h2>
                                <?php echo $preke['name']; ?>
                            </h2>
                        </div>
                        <div class="col bg-success text-center m-2">
                            <h2>
                                <?php echo $preke['img']; ?>
                            </h2>
                        </div>
                    </article>

</div>


</body>
</html>
