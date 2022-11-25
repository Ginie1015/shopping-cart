<?php 
    session_start();
    if (isset($_SESSION['arrProducts'])) 
        $arrprod = $_SESSION['arrProducts'];
    if (isset($_SESSION['totalqty']))
        $con = $_SESSION['totalqty'];
    else
        $con = 0;

    $_SESSION['totalamount'] = 0;
    
    if (isset($_POST['update'])) {
        $Keys = $_POST['hdnKey'];
        $item = $_POST['hdnSize'];
        $qty = $_POST['txtQty'];

        if(isset($Keys)){
             $_SESSION['totalqty'] = 0;
            foreach ($Keys as $key => $value) {
             $_SESSION['items'][$value][$item[$key]] = $qty[$key];
             $_SESSION['totalqty'] += $qty[$key];
            }
        }
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
    <title>Shopping Cart</title>
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
                                        echo '<span class="badge badge-light">' . $con . '</span>';
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
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">Product</th>
                                <th scope="col">Size</th>
                                <th scope="col" class="text-center">Quantity</th>
                                <th scope="col" class="text-right">Price</th>
                                <th scope="col" class="text-right">Total</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            if (isset($_SESSION['items'])): 
                                foreach($_SESSION['items'] as $key => $itemvalue):
                                    foreach($itemvalue as $itemkey => $value):
                                        $_SESSION['totalamount'] += $arrprod[$key]['price'] * $value; ?>
                                            <tr>
                                                <td><img class="img img-thumbnail" width="40px" src="img/<?php echo $arrprod[$key]['photo1'] ?>.jpg" ></td>
                                                <td><?php echo $arrprod[$key]['name'] ?></td>
                                                <td><?php echo $itemkey; ?></td>
                                                <td>
                                                    <input type="hidden" name="hdnKey[]" value="<?php echo $key; ?>">
                                                    <input type="hidden" name="hdnSize[]" value="<?php echo $itemkey; ?>">
                                                    <input type="number" name="txtQty[]" id="txtQty" class="form-control text-center" min="1" max="100" value="<?php echo $value; ?>" required>
                                                </td>
                                                <td class="text-right">₱ <?php echo number_format($arrprod[$key]['price'], 2); ?></td>
                                                <td class="text-right">₱ <?php echo number_format($arrprod[$key]['price'] * $value, 2); ?></td>
                                                <td class="text-right"><a href="remove-confirm.php?k=<?php echo $key; ?>&s=<?php echo $itemkey; ?>&q=<?php echo $value; ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a></td>
                                            </tr>
                                    <?php endforeach;
                                endforeach; ?>
                                        <?php if ($_SESSION['totalqty']>0): ?>
                                            <tr>
                                                <td colspan="2"></td>
                                                <td><b>Total</b></td>
                                                <td class="text-center"><?php echo $_SESSION['totalqty']; ?></td>
                                                <td class="text-right">----</td>
                                                <td class="text-right">₱ <?php echo number_format($_SESSION['totalamount'], 2); ?></td>
                                                <td class="text-right">----</td>
                                            </tr>
                                        <?php endif; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="7">Cart is still Empty</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col mb-2">
                <div class="row">
                    <div class="col-sm-12  col-md-4">
                        <a href="index.php" class="btn btn-block btn-danger"><i class="fa-solid fa-bag-shopping"></i> Continue Shopping</a>
                    </div>
                    <?php if($con>0): ?>
                        
                        <div class="col-sm-12  col-md-4">
                            <button type="submit" class="btn btn-block btn-success" name="update"><i class="fa-solid fa-pen-to-square"></i> Update Cart</button>
                        </div>
                        <div class="col-sm-12  col-md-4">
                            <a href="clear.php" class="btn btn-block btn-primary"><i class="fa-solid fa-right-from-bracket"></i> Checkout</a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</form>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>