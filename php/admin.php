<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>


        <?php
            require_once('../DB/shop_db.php'); echo "<br>";
        ?>


<?php
    $parduotuve = getShop(1);
?>


<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Image</th>
      <th scope="col">Description</th>
      <th scope="col"></th>
    </tr
  </thead>



  <tbody>
    <tr>
        <?php
            $parduotuve = getShop(1);
        ?>
      <th scope="row"><?php echo $parduotuve['id']; ?></th>
      <td><?php echo $parduotuve['name']; ?></td>
      <td><?php echo $parduotuve['img']; ?></td>
      <td><?php echo $parduotuve['description']; ?></td>
      <td> <a href="../php/delete_shop.php?numeris=<?php echo $parduotuve['id']; ?>" class="btn btn-danger "> DELETE </a></td>
    </tr>




    <tr>
        <?php
            $parduotuve = getShop(2);
        ?>
      <th scope="row"><?php echo $parduotuve['id']; ?></th>
      <td><?php echo $parduotuve['name']; ?></td>
      <td><?php echo $parduotuve['img']; ?></td>
      <td><?php echo $parduotuve['description']; ?></td>
      <td> <a href="../php/delete_shop.php?numeris=<?php echo $parduotuve['id']; ?>" class="btn btn-danger "> DELETE </a></td>
    </tr>

    <tr>
        <?php
            $parduotuve = getShop(3);
        ?>
      <th scope="row"><?php echo $parduotuve['id']; ?></th>
      <td><?php echo $parduotuve['name']; ?></td>
      <td><?php echo $parduotuve['img']; ?></td>
      <td><?php echo $parduotuve['description']; ?></td>
      <td> <a href="../php/delete_shop.php?numeris=<?php echo $parduotuve['id']; ?>" class="btn btn-danger "> DELETE </a></td>
    </tr>

    <tr>
        <?php
            $parduotuve = getShop(4);
        ?>
      <th scope="row"><?php echo $parduotuve['id']; ?></th>
      <td><?php echo $parduotuve['name']; ?></td>
      <td><?php echo $parduotuve['img']; ?></td>
      <td><?php echo $parduotuve['description']; ?></td>
      <td> <a href="../php/delete_shop.php?numeris=<?php echo $parduotuve['id']; ?>" class="btn btn-danger "> DELETE </a></td>
    </tr>

    <tr>
        <?php
            $parduotuve = getShop(5);
        ?>
      <th scope="row"><?php echo $parduotuve['id']; ?></th>
      <td><?php echo $parduotuve['name']; ?></td>
      <td><?php echo $parduotuve['img']; ?></td>
      <td><?php echo $parduotuve['description']; ?></td>
      <td> <a href="../php/delete_shop.php?numeris=<?php echo $parduotuve['id']; ?>" class="btn btn-danger "> DELETE </a></td>
    </tr>

    <tr>
        <?php
            $parduotuve = getShop(6);
        ?>
      <th scope="row"><?php echo $parduotuve['id']; ?></th>
      <td><?php echo $parduotuve['name']; ?></td>
      <td><?php echo $parduotuve['img']; ?></td>
      <td><?php echo $parduotuve['description']; ?></td>
      <td> <a href="../php/delete_shop.php?numeris=<?php echo $parduotuve['id']; ?>" class="btn btn-danger "> DELETE </a></td>
    </tr>

    <tr>
        <?php
            $parduotuve = getShop(7);
        ?>
      <th scope="row"><?php echo $parduotuve['id']; ?></th>
      <td><?php echo $parduotuve['name']; ?></td>
      <td><?php echo $parduotuve['img']; ?></td>
      <td><?php echo $parduotuve['description']; ?></td>
      <td> <a href="../php/delete_shop.php?numeris=<?php echo $parduotuve['id']; ?>" class="btn btn-danger "> DELETE </a></td>
    </tr>

    <tr>
        <?php
            $parduotuve = getShop(8);
        ?>
      <th scope="row"><?php echo $parduotuve['id']; ?></th>
      <td><?php echo $parduotuve['name']; ?></td>
      <td><?php echo $parduotuve['img']; ?></td>
      <td><?php echo $parduotuve['description']; ?></td>
      <td> <a href="../php/delete_shop.php?numeris=<?php echo $parduotuve['id']; ?>" class="btn btn-danger "> DELETE </a></td>
    </tr>

    <tr>
        <?php
            $parduotuve = getShop(9);
        ?>
      <th scope="row"><?php echo $parduotuve['id']; ?></th>
      <td><?php echo $parduotuve['name']; ?></td>
      <td><?php echo $parduotuve['img']; ?></td>
      <td><?php echo $parduotuve['description']; ?></td>
      <td> <a href="../php/delete_shop.php?numeris=<?php echo $parduotuve['id']; ?>" class="btn btn-danger "> DELETE </a></td>
    </tr>

    <tr>
        <?php
            $parduotuve = getShop(10);
        ?>
      <th scope="row"><?php echo $parduotuve['id']; ?></th>
      <td><?php echo $parduotuve['name']; ?></td>
      <td><?php echo $parduotuve['img']; ?></td>
      <td><?php echo $parduotuve['description']; ?></td>
      <td> <a href="../php/delete_shop.php?numeris=<?php echo $parduotuve['id']; ?>" class="btn btn-danger "> DELETE </a></td>
    </tr>



  </tbody>
</table>





    </body>
</html>
