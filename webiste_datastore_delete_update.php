
<?php
require("website_database.php");
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name='viewport'content='width=device-width,initial-scale=1.0'>
        <title>All  product - </title>
        <link rel="stylesheet" href="website.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    
    <body>
               <!---------------- Top --------------->
        <form action='website_data_store_register.php' method='post'>
    
        <div class="backgrounddd">
        <div class='mainbox'>
            <div class='navbar'>
                <div class='logo'>
                    <img src="nepal shoes.png" width="120px">
                </div>
                <nav>
                    <ul id='MenuItems'>
                        <li> <a href ="website.html"> Home</a></li>
                        <li> <a href ="website2.html">Products</a></li>
                        <li> <a href ="website_about.html">About</a></li>
                        <li> <a href ="website_contact.html">Contact</a></li>
                        <li> <a href ="website_register_username_.php">Account</a></li>
                    </ul>
    
                </nav>
                <img src="toppng (2).png" width="30px" height="30px">
                <img src="menu.png" width="30px" height="30px" class='menu-icon' onclick='menutoggle()'>
    
            </div>
        </div>
        
       
        <!--------account-page--------->
        
        <div class="account-page">
     
            <div class='space-of-left-and-right-side'>
                <div class='row'>

                <div class='col-2'>
                    <div class="form-container">
                    <div class="form-btn">
                        <span onclick="register()">Add your order</span>
                        <hr id="indicator">
                    </div>
                      
                        <!-- form 2nd -->
                        <form id='form2'>
                           <input type="text" placeholder='Product Name' name='pr1'>
                         <input type="text" placeholder='Product Price' name='pr2'>
                           <input type="text" placeholder='Product Description'name='pr3'>
                           <input type="text" placeholder='Product Quantity'name='pr4'>
                           
                            <button type="submit" class="botton" name='add'> ADD </button>
                            
                         
                        </form>
                    
                </div>

                </div>
            </div>

        </div>

                <!-- update and delete -->
    <div class='product'>
        <div class='account-page'>
            <div class="space-of-left-and-right-side">
              <div class='row'>
                <?php
                $q1 = "select * from addyourorder";
                $result = $conn->query($q1);
                while($data = $result->fetch_assoc()){ ?>
           
                <div class='col-2'>
                    
                    <p> Product Name: <?php echo $data['name'];?> </p>
                    <p> Product Quantity:  <?php echo $data['quantity'];?> </p>
                    <p> Product Description:  <?php echo $data['description'];?> </p>
                    <p> Product Price: <?php echo $data['price'];?> </p>
                    <p> <a href='website_data_store_register.php?product_id=<?php echo $data ['ID'];?>'> Delete </a> </p> 
                    <p> <a href='website_update_product.php?product_id=<?php echo $data ['ID'];?>'> Update </a> </p> 
                  
                    
                </div>

                <?php } ?>

                
                </div>
            </div>       
        </div>
           
    </div>
</div>
       

<!-------------------------footer--------------->

<div class="footer">
    <div class='space-of-left-and-right-side'>
        <div class="row">
            <div class="footer-col-1">
                <h3>Download Apps</h3>
                <p>Download Apps for Android and Apple.</p>
                <div class="app-logo">
                    <img src="apple and android1.png" width="270px">
                </div>
            </div>
            <div class="footer-col-2">
                <img src="nepal shoes.png" width="120px">
            </div>
            <div class='footer-col-3'>
                <h3>Useful links</h3>
                <ul>
                    <li>Blog post</li>
                    <li>Return Policy</li>
                </ul>
                <div class='footer-col-4'>
                    <h3>Follow Us</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <p class='copy-right'>Copyright@2021-2022</p>
</div>  
<!--------------------oneclick='menutoggle()-------------------------->
<script>
    var MenuItems = document.getElementById('MenuItems');
    MenuItems.style.maxHeight='0px';
    function menutoggle(){
        if( MenuItems.style.maxHeight =='0px')
        {
            MenuItems.style.maxHeight='200px';
        }
        else
        {
            MenuItems.style.maxHeight="0px";
        }
    }
</script>

    <!-- toggle form -->
    <script>
        var loginform = document.getElementById("loginform");
        var regform = document.getElementById("regform");
        var indicator = document.getElementById('indicator');

        function register()
        {
            regform.style.transform="translateX(0px)";
            loginform.style.transform="translateX(0px)";
            
        }

        function login()
        {
            regform.style.transform="translateX(350px)";
            loginform.style.transform="translateX(350px)";
     

        }
    </script>


    </body>
</html>