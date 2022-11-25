<?php
    session_start();
    $arr = $_SESSION['arrProducts'];
    $arrSizes = array("XS","SM","MD","LG","XL");

    if (isset($_POST["delete"])) {
        unset($_SESSION['items'][$_REQUEST['k']][$_REQUEST['s']]);
        $_SESSION['totalqty'] -= $_REQUEST['q'];
        header("location: cart.php");
    }
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
    <title>Shopping Cart | Product Description</title>
</head>
<body>
<form method="post">
    <div class="container my-4">
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
        </div><hr>
        <div class="row">
            <div class="col-sx-12 col-sm-6 col-md-4">
                <div class="card product-grid2">
                    <div class="product-image2">
                        <img class="pic-1" src="img/<?php echo $arr[$_REQUEST['k']]['photo1']; ?>.jpg">
                        <img class="pic-2" src="img/<?php echo $arr[$_REQUEST['k']]['photo2']; ?>.jpg">   
                    </div>
                </div >
            </div>
            <div class="product-content col-md">
                <h1 class="title"><?php echo $arr[$_REQUEST['k']]['name']; ?> <span class="badge badge-dark">₱ <?php echo $arr[$_REQUEST['k']]['price']; ?></span></h1>
                <div><p><?php echo $arr[$_REQUEST['k']]['description']; ?></p></div><hr>
                <div>
                    <h1 class="title">Size: <?php echo $_REQUEST['s']; ?></h1>

                </div><hr>
                    <h1 class="title">Quantity: <?php echo $_REQUEST['q']; ?></h1> 
                    <div class="mt-4">
                        <button type="submit" name="delete" id="delete" class="btn btn-dark btn-lg"><i class="fa-solid fa-circle-check"></i> Confirm Product Purchase</button>
                        <a href="cart.php"><button type="button" class="btn btn-danger btn-lg">Cancel/Go Back</button></a>
                    </div>
            </div>
        </div>
    </div>
</form>





    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>