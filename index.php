<?php
    session_start();
    $arrProducts = array(
        array(
            'name' =>  "Brown Shirt",
            'description' =>  "Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo eius recusandae sapiente eveniet beatae nihil ad dolorum ducimus dolore, enim est excepturi voluptate maiores perferendis ullam aliquid perspiciatis fuga atque officiis incidunt esse. Voluptates, cum! Labore tempore, et neque laborum, ab sunt asperiores consectetur ipsam illum consequuntur dolorem praesentium deleniti impedit suscipit minus? Recusandae eius expedita obcaecati quaerat totam amet, voluptate reprehenderit voluptas quae eveniet molestiae nihil incidunt ducimus rem tempora nemo, alias, saepe odit voluptatum dolorem! Temporibus adipisci recusandae, eligendi incidunt voluptas veritatis sint vitae et amet unde id accusantium a sapiente tempora perferendis? Commodi recusandae quaerat minus quo?",
            'price' =>  "550",
            'photo1' =>  "produc1A",
            'photo2' =>  "produc1B"
        ),
        array(
            'name' =>  "Gray Shirt",
            'description' =>  "Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo eius recusandae sapiente eveniet beatae nihil ad dolorum ducimus dolore, enim est excepturi voluptate maiores perferendis ullam aliquid perspiciatis fuga atque officiis incidunt esse. Voluptates, cum! Labore tempore, et neque laborum, ab sunt asperiores consectetur ipsam illum consequuntur dolorem praesentium deleniti impedit suscipit minus? Recusandae eius expedita obcaecati quaerat totam amet, voluptate reprehenderit voluptas quae eveniet molestiae nihil incidunt ducimus rem tempora nemo, alias, saepe odit voluptatum dolorem! Temporibus adipisci recusandae, eligendi incidunt voluptas veritatis sint vitae et amet unde id accusantium a sapiente tempora perferendis? Commodi recusandae quaerat minus quo?",
            'price' =>  "550",
            'photo1' =>  "produc2A",
            'photo2' =>  "produc2B"
        ),
        array(
            'name' =>  "White Blazer",
            'description' =>  "Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo eius recusandae sapiente eveniet beatae nihil ad dolorum ducimus dolore, enim est excepturi voluptate maiores perferendis ullam aliquid perspiciatis fuga atque officiis incidunt esse. Voluptates, cum! Labore tempore, et neque laborum, ab sunt asperiores consectetur ipsam illum consequuntur dolorem praesentium deleniti impedit suscipit minus? Recusandae eius expedita obcaecati quaerat totam amet, voluptate reprehenderit voluptas quae eveniet molestiae nihil incidunt ducimus rem tempora nemo, alias, saepe odit voluptatum dolorem! Temporibus adipisci recusandae, eligendi incidunt voluptas veritatis sint vitae et amet unde id accusantium a sapiente tempora perferendis? Commodi recusandae quaerat minus quo?",
            'price' =>  "750",
            'photo1' =>  "produc3A",
            'photo2' =>  "produc3B"
        ),
        array(
            'name' =>  "Dark Blue Polo Shirt",
            'description' =>  "Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo eius recusandae sapiente eveniet beatae nihil ad dolorum ducimus dolore, enim est excepturi voluptate maiores perferendis ullam aliquid perspiciatis fuga atque officiis incidunt esse. Voluptates, cum! Labore tempore, et neque laborum, ab sunt asperiores consectetur ipsam illum consequuntur dolorem praesentium deleniti impedit suscipit minus? Recusandae eius expedita obcaecati quaerat totam amet, voluptate reprehenderit voluptas quae eveniet molestiae nihil incidunt ducimus rem tempora nemo, alias, saepe odit voluptatum dolorem! Temporibus adipisci recusandae, eligendi incidunt voluptas veritatis sint vitae et amet unde id accusantium a sapiente tempora perferendis? Commodi recusandae quaerat minus quo?",
            'price' =>  "600",
            'photo1' =>  "produc4A",
            'photo2' =>  "produc4B"
        ),
        array(
            'name' =>  "Dark Blue Long Sleeves",
            'description' =>  "Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo eius recusandae sapiente eveniet beatae nihil ad dolorum ducimus dolore, enim est excepturi voluptate maiores perferendis ullam aliquid perspiciatis fuga atque officiis incidunt esse. Voluptates, cum! Labore tempore, et neque laborum, ab sunt asperiores consectetur ipsam illum consequuntur dolorem praesentium deleniti impedit suscipit minus? Recusandae eius expedita obcaecati quaerat totam amet, voluptate reprehenderit voluptas quae eveniet molestiae nihil incidunt ducimus rem tempora nemo, alias, saepe odit voluptatum dolorem! Temporibus adipisci recusandae, eligendi incidunt voluptas veritatis sint vitae et amet unde id accusantium a sapiente tempora perferendis? Commodi recusandae quaerat minus quo?",
            'price' =>  "800",
            'photo1' =>  "produc5A",
            'photo2' =>  "produc5B"
        ),
        array(
            'name' =>  "White Long Sleeves",
            'description' =>  "Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo eius recusandae sapiente eveniet beatae nihil ad dolorum ducimus dolore, enim est excepturi voluptate maiores perferendis ullam aliquid perspiciatis fuga atque officiis incidunt esse. Voluptates, cum! Labore tempore, et neque laborum, ab sunt asperiores consectetur ipsam illum consequuntur dolorem praesentium deleniti impedit suscipit minus? Recusandae eius expedita obcaecati quaerat totam amet, voluptate reprehenderit voluptas quae eveniet molestiae nihil incidunt ducimus rem tempora nemo, alias, saepe odit voluptatum dolorem! Temporibus adipisci recusandae, eligendi incidunt voluptas veritatis sint vitae et amet unde id accusantium a sapiente tempora perferendis? Commodi recusandae quaerat minus quo?",
            'price' =>  "800",
            'photo1' =>  "produc6A",
            'photo2' =>  "produc6B"
        ),
        array(
            'name' =>  "Dark Blue Blazer",
            'description' =>  "Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo eius recusandae sapiente eveniet beatae nihil ad dolorum ducimus dolore, enim est excepturi voluptate maiores perferendis ullam aliquid perspiciatis fuga atque officiis incidunt esse. Voluptates, cum! Labore tempore, et neque laborum, ab sunt asperiores consectetur ipsam illum consequuntur dolorem praesentium deleniti impedit suscipit minus? Recusandae eius expedita obcaecati quaerat totam amet, voluptate reprehenderit voluptas quae eveniet molestiae nihil incidunt ducimus rem tempora nemo, alias, saepe odit voluptatum dolorem! Temporibus adipisci recusandae, eligendi incidunt voluptas veritatis sint vitae et amet unde id accusantium a sapiente tempora perferendis? Commodi recusandae quaerat minus quo?",
            'price' =>  "750",
            'photo1' =>  "produc7A",
            'photo2' =>  "produc7B"
        ),
        array(
            'name' =>  "Floral Polo",
            'description' =>  "Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo eius recusandae sapiente eveniet beatae nihil ad dolorum ducimus dolore, enim est excepturi voluptate maiores perferendis ullam aliquid perspiciatis fuga atque officiis incidunt esse. Voluptates, cum! Labore tempore, et neque laborum, ab sunt asperiores consectetur ipsam illum consequuntur dolorem praesentium deleniti impedit suscipit minus? Recusandae eius expedita obcaecati quaerat totam amet, voluptate reprehenderit voluptas quae eveniet molestiae nihil incidunt ducimus rem tempora nemo, alias, saepe odit voluptatum dolorem! Temporibus adipisci recusandae, eligendi incidunt voluptas veritatis sint vitae et amet unde id accusantium a sapiente tempora perferendis? Commodi recusandae quaerat minus quo?",
            'price' =>  "650",
            'photo1' =>  "produc8A",
            'photo2' =>  "produc8B"
        )
    )
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <title>Shopping Cart</title>
</head>
<body>
<form  method="post">
    <div class="container my-5">
        <div class="row">
            <div class="col-sm-12">
                <h1><i class="fa-solid fa-store"></i>Shopping Cart
                    <a href="cart.php">
                        <button type="button" class="btn btn-primary float-right">
                            <i class="fa-solid fa-cart-shopping"></i>
                            Cart 
                            <?php 
                                if(isset($_SESSION['totalqty']))
                                    echo '<span class="badge badge-light">' . $_SESSION['totalqty'] . '</span>';
                                else
                                    echo '<span class="badge badge-light">0</span>';
                            ?>   
                            <span class="sr-only"></span>
                        </button>
                    </a>
                </h1>   
            </div>      
        </div>
        <hr>
        <div class="row">
        <?php foreach($arrProducts as $prodkey => $prodvalue):?>      
            <div class="col-2 col-md-3">
                <div class="card product-grid2">
                    <div class="product-image2">
                        <a href="details.php?k=<?php echo $prodkey; ?>">
                            <img class="pic-1" src="img/<?php echo $prodvalue['photo1'];?>.jpg">
                            <img class="pic-2" src="img/<?php echo $prodvalue['photo2'];?>.jpg">    
                        <a class="add-to-cart" href="details.php?k=<?php echo $prodkey; ?>"><i class="fa-solid fa-cart-plus"></i> Add to cart</a></a>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><?php echo $prodvalue['name'];?> <span class="badge badge-dark">₱ <?php echo $prodvalue['price'];?></span></h3>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        <?php 
            $_SESSION['arrProducts'] = $arrProducts;
        ?>
    </div>
</form>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>