<?php
require("website_database.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> update product</title>
    <link rel="stylesheet" href="website.css">
</head>
<body>

     <form action='website_data_store_register.php' method='post'>
<div class="background-6">
        <div class="account-page">
            <h2> Update Product <h2>
            <div class='space-of-left-and-right-side'>
                <div class='row'>

                <div class='col-2'>
                    <div class="form-container">
                    <div class="form-btn">
                        <span onclick="register()">Add your order</span>
                        <hr id="indicator">
                    </div>
                    

                    <?php
                $pid = $_GET['product_id'];
                $q = "select * from addyourorder where id='$pid'";
                $result = $conn->query($q);
                $data = $result->fetch_assoc();
                echo $data['ID'];
                ?>


                        <!-- form 2nd -->
                        <form id='form2'>
                            <input type="text" placeholder='Product Name' name='pr1' value="<?php echo $data['name']?>" >
                            <input type="text" placeholder='Product Price' name='pr2' value="<?php echo $data['price']?>" >
                            <input type="text" placeholder='Product Description'name='pr3'value="<?php echo $data['description']?>" >
                            <input type="text" placeholder='Product Quantity'name='pr4'value="<?php echo $data['quantity']?>" >
                            <input type='hidden' value='<?php echo $data['ID'] ?>' name='pid'>
                            <button type="submit" class="botton" name='add'> Update Product</button>
                            
                        
                        </form>

                    
                </div>

                </div>
            </div>
            
  
        </div>
</div>
      
                 
                
          
</body>
</html>