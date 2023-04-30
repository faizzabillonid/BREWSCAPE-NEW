<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <title>Menu</title>
    <link rel="icon" href="img/logo1.png" >
    <link rel="stylesheet" href="script.js">
    <script src="https://kit.fontawesome.com/861a14876a.js" crossorigin="anonymous"></script>


</head>
<body>
    <nav>
       <a href="home.php"> <img src="img/Brewscape_Mug_white.png" style=" width: 120px; height: 120px;"> </a>
       <ul>
        <li> <a href="home.php">HOME</a></li>
          <li> <a href="menucoffee.php">MENU</a></li>
          <li> <a href="#">FIND A STORE</a></li>
          <li> <a href="#">ABOUT US</a></li>       
          <li> <a href="#">  <i class="fa-solid fa-cart-shopping fa-bounce" style="color: #ffffff;"></i> CART</a></li>
          <button onclick="window.location.href = 'signin.php';"id="signup-btn">Sign In</button>

      </ul>
    </nav>     
        <div class="image-container"> 
            <img src="Photos/coffeemenu.png" class="menucoffee" style=" width: 100%; height: 425px;">
            <div class="text-container-menucoffee">
            <h1 class="indulge">"Indulge in a perfect pairing of rich coffee and delectable pastries, crafted to elevate your taste buds."</h1>
          </div>
            </div>

            <div id="menu-container" class="menu-container">
            <div id="category-list">
                <p class="item-menu" style="font-size: 30px;"><b> Menus</b></p>
                <div class="border"></div>
                <div class="list-card">
                    <img src="img\home_coffee.png" style="width:100px; height: 100px;"
                     alt="list">
                     <a href="#coffee" class="list-name"> Coffee</a>
                </div>
                <div class="list-card" id="Bread-list">
                    <img src="img\home_donut.png" style="width:100px; height: 100px;"
                     alt="list">
                     <a href="#breads" class="list-name" > Bread and Pastries</a>
                </div>
                <div class="list-card">
                <img src="img\home_breakfast.png" style="width:100px; height: 100px;"
                     alt="list">
                     <a href="#breakfast" class="list-name">Breakfast Meal</a>
                </div>
            </div>
            

            <div id="food-container">
                <p class="category-name" id="coffee">Coffee</p>
                <!-- ROW -->
                <div class="row">
                    <!-- 1st card -->
                    <div class="col-sm-4">
                        <div id="item-card">           
                            <div id="card-top">
                                <i class="fa fa-star" id="rating">  5</i>
                                <i class="fa fa-shopping-cart"> Add to Cart </i>
                             <img src="img\menu_cafelatte.png"    alt="">          
                         </div>
                             <div class="card-bottom"> 
                              <p id="item-name">Cafe Latte</p> 
                            <p class="item-description"> Espresso with milk</p>
                             <p id="item-price" class="item-price" style=" font-size:28px;">₱150.00</p>
                            </div>
                        </div>
                    </div>
                    <!-- 2nd card -->
                    <div class="col-sm-4">
                        <div id="item-card">           
                            <div id="card-top">
                                <i class="fa fa-star" id="rating">  5 </i>
                                <i class="fa fa-shopping-cart"> Add to Cart </i>
                                <img src="img\menu_cappuccino1.png" alt="">          
                         </div>
                             <div class="card-bottom"> 
                              <p id="item-name">Cappuccino</p> 
                            <p class="item-description"> Single espresso shot with hot milk</p>
                            
                             <p id="item-price" class="item-price" style=" font-size:28px;">₱150.00</p>
                     </div>
                            </div>

                    </div>
                             <!-- 3rd card -->
                             <div class="col-sm-4">
                                <div id="item-card">           
                                    <div id="card-top">
                                        <i class="fa fa-star" id="rating">  5 </i>
                                        <i class="fa fa-shopping-cart">Add to Cart</i>
                                        <img src="img\menu_macchiato1.png" alt="">
                                    </div>
                                   <div class="card-bottom">
                                        <p id="item-name">Macchiato</p>
                                        <p class="item-description"> Espresso with small amount of milk</p>
                                        <p id="item-price" style=" font-size:28px; " >₱150.00</p>
                                    </div>
                                </div>
                            </div>
                            <!-- 4th card -->
                            <div id="col-sm-4">
                                    <div id="item-card">           
                                    <div id="card-top">
                                        <i class="fa fa-star" id="rating">  5 </i>
                                        <i class="fa fa-shopping-cart">Add to Cart</i>
                                         <img src="img\menu_greentea.png" style="height:180px; width: 240px; margin-top:15px;" alt="" >
                                    </div>
                                    <div class="card-bottom">
                                            <p id="item-name">Green Tea</p>
                                        <p class="item-description"> Camellia sinensis plant</p>
                                        <p id="item-price" style="font-size: 28px;">₱150.00</p>

                                    </div>
                            </div> 
                        </div>

                </div>
                            <!-- BREADS AND PASTRIES SECTION -->
                            <p class="category-name" id="breads">Bread and Pastries</p>
                            <!-- ROW -->
                <div class="row">
                        <!-- 1st card BREAD -->
                        <div class="col-sm-4">
                        <div id="item-card">           
                            <div id="card-top">
                                <i class="fa fa-star" id="rating">  5 </i>
                                <i class="fa fa-shopping-cart"> Add to Cart </i>
                             <img src="img\menu_waffles1.png" alt="">          
                         </div>
                             <div class="card-bottom"> 
                              <p id="item-name">Waffles</p> 
                            <p class="item-description"> Blueberry and strawberry waffles with syrup</p>
                             <p id="item-price" class="item-price" style=" margin-top:0px">₱150.00</p>
                            </div>
                        </div>
                    </div>
                      <!-- 2nd card BREAD -->
                      <div class="col-sm-4">
                        <div id="item-card">           
                            <div id="card-top">
                                <i class="fa fa-star" id="rating">  5 </i>
                                <i class="fa fa-shopping-cart"> Add to Cart </i>
                             <img src="img\menu_muffin.png" alt="">          
                         </div>
                             <div class="card-bottom"> 
                              <p id="item-name">Muffins</p> 
                            <p class="item-description">  Chocolate muffin topped with kisses chocolates</p>
                             <p id="item-price" class="item-price" style=" margin-top:0px">₱150.00</p>
                            </div>
                        </div>
                    </div>
                        <!-- 3RD card BREAD -->
                        <div class="col-sm-4">
                        <div id="item-card">           
                            <div id="card-top">
                                <i class="fa fa-star" id="rating">  5 </i>
                                <i class="fa fa-shopping-cart"> Add to Cart </i>
                             <img src="img\menu_cookie.png" alt="">          
                         </div>
                             <div class="card-bottom"> 
                              <p id="item-name"> Oatmeal Cookie </p> 
                            <p class="item-description">  soft and chewy cookies with raisins</p>
                             <p id="item-price" class="item-price" style=" margin-top:0px">₱150.00</p>
                            </div>
                        </div>
                    </div>
                           <!--  4th card BREAD -->
                           <div class="col-sm-4">
                        <div id="item-card">           
                            <div id="card-top">
                                <i class="fa fa-star" id="rating">  5 </i>
                                <i class="fa fa-shopping-cart"> Add to Cart </i>
                             <img src="img\menu_brownies.png" alt="">          
                         </div>
                             <div class="card-bottom"> 
                              <p id="item-name"> Brownies </p> 
                            <p class="item-description">  Made with high-quality cocoa powder and melted chocolate </p>
                             <p id="item-price" class="item-price" style=" margin-top:0px">₱150.00</p>
                            </div>
                        </div>
                    </div>






                </div>

                 <!-- BREAKFAST MEALS SECTION -->
                 <p class="category-name" id="breakfast">Breakfast Meals</p>
                            <div class="row">
                       <!-- 1st card BREAD -->
                       <div class="col-sm-4">
                        <div id="item-card">           
                            <div id="card-top">
                                <i class="fa fa-star" id="rating">  5</i>
                                <i class="fa fa-shopping-cart"> Add to Cart </i>
                             <img src="img\menu_pancakes.png" alt="">          
                         </div>
                             <div class="card-bottom"> 
                              <p id="item-name">Pancakes</p> 
                            <p class="item-description"> Blueberry and strawberry pancakes with syrup</p>
                             <p id="item-price" class="item-price" style=" margin-top:0px">₱150.00</p>
                            </div>
                        </div>
                    </div>
                    

                            <!-- 1st card BREAD -->
                            <div class="col-sm-4">
                        <div id="item-card">           
                            <div id="card-top">
                                <i class="fa fa-star" id="rating">  5</i>
                                <i class="fa fa-shopping-cart"> Add to Cart </i>
                             <img src="img\menu_englishbreakfast.png" style="width: 180px; height:180px; margin-top: 20px" alt="">          
                         </div>
                             <div class="card-bottom"> 
                              <p id="item-name">Full English Breakfast</p> 
                            <p class="item-description"> bacon, eggs, sausage, baked beans, fried tomato, with toasted bread. </p>
                             <p id="item-price" class="item-price" style=" margin-top:0px">₱150.00</p>
                            </div>
                        </div>
                    </div>
                                <!-- 1st card BREAD -->
                                <div class="col-sm-4">
                        <div id="item-card">           
                            <div id="card-top">
                                <i class="fa fa-star" id="rating">  5</i>
                                <i class="fa fa-shopping-cart"> Add to Cart </i>
                             <img src="img\menu_benedict.png" style="width: 180px; height:180px; margin-top: 20px" alt="">          
                         </div>
                             <div class="card-bottom"> 
                              <p id="item-name">Eggs Benedict</p> 
                            <p class="item-description"> English muffin, Canadian bacon, poached egg, and hollandaise sauce </p>
                             <p id="item-price" class="item-price" style=" margin-top:0px">₱150.00</p>
                            </div>
                        </div>
                    </div>





                        </div>
               
                
                <!-- END CARD -->
                <!-- END ROW -->
               
            </div>


            </div>
            </div>

            </div>

</body>
</html>