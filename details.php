<?php
    session_start();
    $arrprod = $_SESSION['arrProducts'];
    $arrSizes = array("XS","SM","MD","LG","XL");
    if (isset($_POST['txtQty'])) {
        $_SESSION['qty'] = $_POST['txtQty'];
    }
    if(isset($_POST['confirm'])){  
        if (isset($_SESSION['items'][$_POST['hdnKey']][$_POST['size']])) {
            $_SESSION['items'][$_POST['hdnKey']][$_POST['size']] += $_POST['txtQty'];
        } 
        else
            $_SESSION['items'][$_POST['hdnKey']][$_POST['size']] = $_POST['txtQty'];
        
        $_SESSION['totalqty'] += $_POST['txtQty'];
        header("location: confirm.php");   
    }
    $_SESSION['key'] = $_REQUEST['k'];   
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
        </div> <hr>
        <div class="row">
            <div class="col-sx-12 col-sm-6 col-md-4">
                <div class="card product-grid2">
                    <div class="product-image2">
                        <img class="pic-1" src="img/<?php echo $arrprod[$_REQUEST['k']]['photo1']; ?>.jpg">
                        <img class="pic-2" src="img/<?php echo $arrprod[$_REQUEST['k']]['photo2']; ?>.jpg">   
                    </div>
                </div >
            </div>
            <div class="product-content col-md">
                <h1 class="title"><?php echo $arrprod[$_REQUEST['k']]['name']; ?> <span class="badge badge-dark">₱ <?php echo $arrprod[$_REQUEST['k']]['price']; ?></span></h1>
                <div><p><?php echo $arrprod[$_REQUEST['k']]['description']; ?></p></div><hr>
                <div>
                    <input type="hidden" name="hdnKey" value="<?php echo $_REQUEST['k']; ?>">
                    <h1 class="title">Select Size:</h1>
                    <div>
                        <?php 
                        
                        foreach($arrSizes as $sizekey => $size){
                                if ($sizekey == 0){
                                    echo '<input type="radio" name="size" id="'.$sizekey.'" value="'.$size.'" checked>
                                        <label class="pr-5" for="'.$sizekey.'">'.$size.'</label>';
                                }
                                else 
                                    echo '<input type="radio" name="size" id="'.$sizekey.'" value="'.$size.'">
                                        <label class="pr-5" for="'.$sizekey.'">'.$size.'</label>';
                            }
                            
                        ?>
                    </div>
                </div><hr>
                    <h1 class="title">Enter Quantity:</h1>
                    <input type="number" name="txtQty" id="txtQty" class="form-control" min="1" max="100" placeholder="0" required>  
                    <div class="mt-4">
                        <button type="submit" class="btn btn-dark btn-lg" id="confirm" name="confirm"><i class="fa-solid fa-circle-check"></i> Confirm Product Purchase</button>
                        <a href="index.php"><button type="button" class="btn btn-danger btn-lg">Cancel/Go Back</button></a>
                    </div>
            </div>
        </div>
    </div>
</form>

    



    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>