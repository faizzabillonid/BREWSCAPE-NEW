<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <title>Menu</title>
    <link rel="icon" href="img/Brewscape_Mug_white.png" >
    <link rel="stylesheet" href="script.js">
    <script src="https://kit.fontawesome.com/861a14876a.js" crossorigin="anonymous"></script>


</head>
<body>
<?php include 'Bars/navbar.php';?>
  
        <div class="image-container"> 
            <img src="Photos/coffeemenu.png" class="menucoffee" style=" width: 100%; height: 425px;">
            <div class="text-container-menucoffee">
            <h1 class="indulge">"Indulge in a perfect pairing of rich coffee and delectable pastries, crafted to elevate your taste buds."</h1>
          </div>
            </div>

            <div id="menu-container" class="menu-container">
            <div id="category-list">
                <p class="item-menu" style="font-size: 30px;"><b>Menu</b></p>
                <div class="border"></div>
                <div class="list-card">
                    <img src="img\home_coffee.png" style="width:100px; height: 100px;"
                     alt="list">
                     <a href="#coffee" class="list-name">Coffee and Frappe</a>
                </div>
                <div class="list-card" id="Bread-list">
                    <img src="img\home_donut.png" style="width:100px; height: 100px;"
                     alt="list">
                     <a href="#breads" class="list-name" >Bread and Pastry</a>
                </div>
                <div class="list-card">
                <img src="img\home_breakfast.png" style="width:100px; height: 100px;"
                     alt="list">
                     <a href="#breakfast" class="list-name">Breakfast and Pasta</a>
                </div>
            </div>
            

            <div id="food-container">
                <p class="category-name" id="coffee">Coffee and Frappe</p>
                <!-- ROW -->
                <div class="row">
                    <!-- 1st card COFFEE -->
                    <div class="col-sm-4">
                        <div id="item-card">           
                            <div id="card-top">
                            <i class="fa fa-star" id="rating"> BEST SELLER </i>
                      
                                
                         </div>
                             <div class="card-bottom"> 
                             <img src="img\menu_cafelatte1.png"    alt="">       
                              <p id="item-name">Cafe Latte</p> 
                            <p class="item-description">Espresso with milk.</p>
                             <p id="item-price" class="item-price" style=" font-size:28px;">₱150.00</p>
                            </div>
                        </div>
                    </div>
                    <!-- 2nd card COFFEE-->
                    <div class="col-sm-4">
                        <div id="item-card">           
                            <div id="card-top">
                                <i class="fa fa-star" id="rating"> BEST SELLER </i>
                           
                                <img src="img\menu_cappuccino.png" alt="">          
                         </div>
                             <div class="card-bottom"> 
                              <p id="item-name">Cappuccino</p> 
                            <p class="item-description">Single espresso shot with hot milk.</p>
                            
                             <p id="item-price" class="item-price" style="font-size: 28px;">₱150.00</p>
                     </div>
                            </div>

                    </div>
                             <!-- 3rd card COFFEE -->
                             <div class="col-sm-4">
                                <div id="item-card">           
                                    <div id="card-top">
                                        <i class="fa fa-star" id="rating"> BEST SELLER </i>
                                        <img src="img\menu_macchiato1.png" alt="">
                                    </div>
                                   <div class="card-bottom">
                                        <p id="item-name">Macchiato</p>
                                        <p class="item-description">Espresso "stained" with a dollop of milk foam.</p>
                                        <p id="item-price" style="font-size: 28px; margin-top:0px;">₱150.00</p>
                                    </div>
                                </div>
                            </div>

                               <!-- 4th card COFFEE-->
                               <div id="col-sm-4">
                                    <div id="item-card">           
                                    <div id="card-top">
                                        <i class="fa fa-star" id="rating">BEST SELLER</i>
                                         <img src="img\menu_americano1.png" style=" margin-top:0px;" alt="" >
                                    </div>
                                    <div class="card-bottom">
                                            <p id="item-name">Cafe Americano</p>
                                        <p class="item-description">Espresso poured over hot water.</p>
                                        <p id="item-price" style="font-size: 28px;">₱99.00</p>

                                    </div>
                            </div> 
                        </div>
                           <!-- 5th card COFFEE-->
                           <div id="col-sm-4">
                                    <div id="item-card">           
                                    <div id="card-top">
                                        <i class="fa fa-star" id="rating">5</i>
                                        <i>BEST SELLER</i>
                                         <img src="img\menu_cafemocha.png"  alt="" >
                                    </div>
                                    <div class="card-bottom">
                                            <p id="item-name"> Cafe Mocha </p>
                                        <p class="item-description">Espresso, chocolate, and steamed milk in a delicious coffee drink.</p>
                                        <p id="item-price" style="font-size: 28px; margin-top:0px;">₱129.00</p>

                                    </div>
                                    </div> 
                            </div>
                             <!-- 6th card -->
                             <div id="col-sm-4">
                                    <div id="item-card">           
                                    <div id="card-top">
                                        <i class="fa fa-star" id="rating">5</i>
                                       
                                         <img src="img\menu_flatwhite.png"  alt="" >
                                    </div>
                                    <div class="card-bottom">
                                            <p id="item-name">Flat White</p>
                                        <p class="item-description">Double shot, steamed milk, microfoam espresso drink.</p>
                                        <p id="item-price" style="font-size: 28px; margin-top:0px;">₱129.00</p>

                                    </div>
                                    </div> 
                            </div>
                            <!-- 7th card COFFEE-->
                            <div id="col-sm-4">
                                    <div id="item-card">           
                                    <div id="card-top">
                                        <i class="fa fa-star" id="rating">5</i>
                                         <img src="img\menu_hotchocolate.png"  alt="" >
                                    </div>
                                    <div class="card-bottom">
                                            <p id="item-name">Hot Chocolate</p>
                                        <p class="item-description">Steamed milk and mocha syrup topped with whipped cream.</p>
                                        <p id="item-price" style="font-size: 28px; margin-top:0px;">₱199.00</p>

                                    </div>
                                    </div> 
                            </div>
                               <!-- 8th card -->
                               <div id="col-sm-4">
                                    <div id="item-card">           
                                    <div id="card-top">
                                        <i class="fa fa-star" id="rating"> BEST SELLER </i>
                                         <img src="img\menu_whitechocomocha.png"  alt="" >
                                    </div>
                                    <div class="card-bottom">
                                            <p id="item-name">White Chocolate Mocha</p>
                                        <p class="item-description">A blend of espresso coffee, white chocolate and milk.</p>
                                        <p id="item-price" style="font-size: 28px; margin-top: 0px;">₱199.00</p>

                                    </div>
                                    </div> 
                            </div>
                               <!-- 9th card -->
                               <div id="col-sm-4"> 
                                    <div id="item-card">           
                                    <div id="card-top">
                                        <i class="fa fa-star" id="rating"> BEST SELLER</i>
                                         <img src="img\menu_darklatte.png"  alt="" >
                                    </div>
                                    <div class="card-bottom">
                                            <p id="item-name">Dark Chocolate Latte</p>
                                        <p class="item-description">Espresso, steamed milk, and dark chocolate syrup in coffee drink.</p>
                                        <p id="item-price" style="font-size: 28px; margin-top:0px;">₱150.00</p>

                                    </div>
                                    </div> 
                            </div>

                            <!-- 6th card -->
                            <div id="col-sm-4">
                                    <div id="item-card">           
                                    <div id="card-top">
                                
                                         <img src="img\menu_espresso.png"  alt="" >
                                    </div>
                                    <div class="card-bottom">
                                            <p id="item-name">Espresso</p>
                                        <p class="item-description">Finely ground, 100% coffee, and hot water.</p>
                                        <p id="item-price" style="font-size: 28px; margin-top:0px;">₱150.00</p>

                                    </div>
                                    </div> 
                            </div>
                               <!-- 6th card -->
                               <div id="col-sm-4">
                                    <div id="item-card">           
                                    <div id="card-top">
                                        <i class="fa fa-star" id="rating"> </i>
                                         <img src="img\menu_greentea1.png"  alt="" >
                                    </div>
                                    <div class="card-bottom">
                                            <p id="item-name">Green Tea</p>
                                        <p class="item-description">Made solely from the leaves of the camellia sinensis plant.</p>
                                        <p id="item-price" style="font-size: 28px;margin-top:0px;">₱150.00</p>

                                    </div>
                                    </div> 
                            </div>
                       
                               <!-- 6th card -->
                               <div id="col-sm-4">
                                    <div id="item-card">           
                                    <div id="card-top">
                                        <i class="fa fa-star" id="rating">5</i>
                                         <img src="img\menu_icedamericano.png"  alt="" >
                                    </div>
                                    <div class="card-bottom">
                                            <p id="item-name">Iced Americano</p>
                                        <p class="item-description">Espresso shots and cold water over ice in tall glass.</p>
                                        <p id="item-price" style="font-size: 28px;margin-top:0px;">₱150.00</p>

                                    </div>
                                    </div> 
                            </div>
                               <!-- 6th card -->
                               <div id="col-sm-4">
                                    <div id="item-card">           
                                    <div id="card-top">
                                        <i class="fa fa-star" id="rating">5</i>
                                         <img src="img\menu_icedcapuccino.png"  alt="" >
                                    </div>
                                    <div class="card-bottom">
                                            <p id="item-name">Iced Cappuccino</p>
                                        <p class="item-description">Espresso with cold milk and ice topped with of frothed milk.</p>
                                        <p id="item-price" style="font-size: 28px; margin-top:0px;">₱150.00</p>

                                    </div>
                                    </div> 
                            </div>
                               <!-- 6th card -->
                               <div id="col-sm-4">
                                    <div id="item-card">           
                                    <div id="card-top">
                                        <i class="fa fa-star" id="rating">5</i>
                                         <img src="img\menu_icedlatte.png"  alt="" >
                                    </div>
                                    <div class="card-bottom">
                                            <p id="item-name">Iced Latte</p>
                                        <p class="item-description">Made with Ice, a shot of espresso and cold milk.</p>
                                        <p id="item-price" style="font-size: 28px; margin-top:0px;">₱150.00</p>

                                    </div>
                                    </div> 
                            </div>
                               <!-- 6th card -->
                               <div id="col-sm-4">
                                    <div id="item-card">           
                                    <div id="card-top">
                                        <i class="fa fa-star" id="rating">5</i>
                                         <img src="img\menu_icedmatcha.png"  alt="" >
                                    </div>
                                    <div class="card-bottom">
                                            <p id="item-name">Iced Matcha Latte</p>
                                        <p class="item-description">Matcha green tea and milk, lightly sweetened and served over ice.</p>
                                        <p id="item-price" style="font-size: 28px; margin-top:0px;">₱150.00</p>

                                    </div>
                                    </div> 
                            </div>
                               <!-- 6th card -->
                               <div id="col-sm-4">
                                    <div id="item-card">           
                                    <div id="card-top">
                                        <i class="fa fa-star" id="rating">5</i>
                                         <img src="img\menu_icedmocha.png"  alt="" >
                                    </div>
                                    <div class="card-bottom">
                                            <p id="item-name">Iced Cafe Mocha</p>
                                        <p class="item-description">Espresso, mocha syrup, and ice topped with whipped cream.</p>
                                        <p id="item-price" style="font-size: 28px; margin-top:0px;">₱150.00</p>

                                    </div>
                                    </div> 
                            </div>
                             <!-- 6th card -->
                             <div id="col-sm-4">
                                    <div id="item-card">           
                                    <div id="card-top">
                                        <i class="fa fa-star" id="rating">5</i>
                                         <img src="img\menu_icecaramelmacchiato.png"  alt="" >
                                    </div>
                                    <div class="card-bottom">
                                            <p id="item-name">Iced Caramel Macchiato</p>
                                        <p class="item-description">Espresso, vanilla syrup, cold milk, ice topped with caramel sauce.</p>
                                        <p id="item-price" style="font-size: 28px; margin-top:0px;">₱150.00</p>

                                    </div>
                                    </div> 
                            </div>
                             <!-- 6th card -->
                             <div id="col-sm-4">
                                    <div id="item-card">           
                                    <div id="card-top">
                                        <i class="fa fa-star" id="rating">5</i>
                                         <img src="img\menu_caramelfrap.png"  alt="" >
                                    </div>
                                    <div class="card-bottom">
                                            <p id="item-name">Caramel Frappe</p>
                                        <p class="item-description">Made by blending ice, milk, coffee, and caramel syrup together.</p>
                                        <p id="item-price" style="font-size: 28px; margin-top: 0px;">₱150.00</p>

                                    </div>
                                    </div> 
                            </div>
                             <!-- 6th card -->
                             <div id="col-sm-4">
                                    <div id="item-card">           
                                    <div id="card-top">
                                        <i class="fa fa-star" id="rating">5</i>
                                         <img src="img\menu_darkchocofrap.png"  alt="" >
                                    </div>
                                    <div class="card-bottom">
                                            <p id="item-name">Dark Chocolate Frappe</p>
                                        <p class="item-description">Dark chocolate and mocha syrup blended with milk and ice.</p>
                                        <p id="item-price" style="font-size: 28px; margin-top:0px;">₱150.00</p>

                                    </div>
                                    </div> 
                            </div>
                             <!-- 6th card -->
                             <div id="col-sm-4">
                                    <div id="item-card">           
                                    <div id="card-top">
                                        <i class="fa fa-star" id="rating">5</i>
                                         <img src="img\menu_coffeefrap.png"  alt="" >
                                    </div>
                                    <div class="card-bottom">
                                            <p id="item-name">Coffee Frappe</p>
                                        <p class="item-description">Made by blending ice, milk, sugar, and espresso together.</p>
                                        <p id="item-price" style="font-size: 28px; margin-top:0px;">₱150.00</p>

                                    </div>
                                    </div> 
                            </div>

                </div>
                            <!-- BREADS AND PASTRIES SECTION -->
                            <p class="category-name" id="breads">Bread and Pastry</p>
                            <!-- ROW -->
                <div class="row">
                        <!-- 1st card BREAD -->
                        <div class="col-sm-4">
                        <div id="item-card">           
                            <div id="card-top">
                                <i class="fa fa-star" id="rating">5</i>
                                <i>BEST SELLER</i>
                             <img src="img\menu_waffles1.png" alt="">          
                         </div>
                             <div class="card-bottom"> 
                              <p id="item-name">Waffles</p> 
                            <p class="item-description">Blueberry and strawberry waffles with syrup.</p>
                             <p id="item-price" class="item-price" style=" margin-top:0px">₱150.00</p>
                            </div>
                        </div>
                    </div>
                      <!-- 2nd card BREAD -->
                      <div class="col-sm-4">
                        <div id="item-card">           
                            <div id="card-top">
                                <i class="fa fa-star" id="rating">5</i>
                                <i >BEST SELLER</i>
                             <img src="img\menu_muffin.png" alt="">          
                         </div>
                             <div class="card-bottom"> 
                              <p id="item-name">Muffins</p> 
                            <p class="item-description"> Chocolate muffin topped with kisses chocolates.</p>
                             <p id="item-price" class="item-price" style=" margin-top:0px">₱150.00</p>
                            </div>
                        </div>
                    </div>
                        <!-- 3RD card BREAD -->
                        <div class="col-sm-4">
                        <div id="item-card">           
                            <div id="card-top">
                                <i class="fa fa-star" id="rating">5</i>
                                <i >BEST SELLER</i>
                             <img src="img\menu_cookie.png" alt="">          
                         </div>
                             <div class="card-bottom"> 
                              <p id="item-name">Oatmeal Cookie</p> 
                            <p class="item-description">Cookie made from an oatmeal-based dough with raisins.</p>
                             <p id="item-price" class="item-price" style=" margin-top:0px">₱150.00</p>
                            </div>
                        </div>
                    </div>
                           <!--  4th card BREAD -->
                           <div class="col-sm-4">
                        <div id="item-card">           
                            <div id="card-top">
                                <i class="fa fa-star" id="rating">5</i>
                             <img src="img\menu_brownies.png" alt="">          
                         </div>
                             <div class="card-bottom"> 
                              <p id="item-name">Brownies</p> 
                            <p class="item-description">Made with high-quality cocoa powder and melted chocolate.</p>
                             <p id="item-price" class="item-price" style=" margin-top:0px">₱150.00</p>
                            </div>
                        </div>
                    </div>
                           <!--  4th card BREAD -->
                           <div class="col-sm-4">
                        <div id="item-card">           
                            <div id="card-top">
                                <i class="fa fa-star" id="rating">5</i>
                             <img src="img\menu_butter.png" alt="">          
                         </div>
                             <div class="card-bottom"> 
                              <p id="item-name">Butter Croissant</p> 
                            <p class="item-description">Flaky, crescent-shaped pastry that is layered with butter.</p>
                             <p id="item-price" class="item-price" style=" margin-top:0px">₱150.00</p>
                            </div>
                        </div>
                    </div>
                           <!--  4th card BREAD -->
                           <div class="col-sm-4">
                        <div id="item-card">           
                            <div id="card-top">
                                <i class="fa fa-star" id="rating">5.</i>
                             <img src="img\menu_almond.png" alt="">          
                         </div>
                             <div class="card-bottom"> 
                              <p id="item-name">Almond Croissant</p> 
                            <p class="item-description">Flaky croissant filled with almond paste, topped with sliced almonds.</p>
                             <p id="item-price" class="item-price" style=" margin-top:0px">₱150.00</p>
                            </div>
                        </div>
                    </div>
                         <!--  4th card BREAD -->
                         <div class="col-sm-4">
                        <div id="item-card">           
                            <div id="card-top">
                                <i class="fa fa-star" id="rating">5</i>
                             <img src="img\menu_hamcheese.png" alt="">          
                         </div>
                             <div class="card-bottom"> 
                              <p id="item-name">Ham & Cheese Croissant</p> 
                            <p class="item-description">Triple smoked ham with cheddar sandwiched in a buttery croissant.</p>
                             <p id="item-price" class="item-price" style=" margin-top:0px">₱150.00</p>
                            </div>
                        </div>
                    </div>

                           <!--  4th card BREAD -->
                           <div class="col-sm-4">
                        <div id="item-card">           
                            <div id="card-top">
                                <i class="fa fa-star" id="rating">5</i>
                             <img src="img\menu_cinammon.png" alt="">          
                         </div>
                             <div class="card-bottom"> 
                              <p id="item-name">Cinnamon Scroll</p> 
                            <p class="item-description">Sweet pastry swirl with cinnamon, sugar, butter, and icing drizzle.</p>
                             <p id="item-price" class="item-price" style=" margin-top:0px">₱150.00</p>
                            </div>
                        </div>
                    </div>
                     <!--  4th card BREAD -->
                     <div class="col-sm-4">
                        <div id="item-card">           
                            <div id="card-top">
                                <i class="fa fa-star" id="rating">5</i>
                             <img src="img\menu_chococookie.png" alt="">          
                         </div>
                             <div class="card-bottom"> 
                              <p id="item-name">Chocolate Chip Cookie</p> 
                            <p class="item-description">Classic American cookie with chocolate chips and soft center.</p>
                             <p id="item-price" class="item-price" style=" margin-top:0px">₱150.00</p>
                            </div>
                        </div>
                    </div>
                         <!--  4th card BREAD -->
                         <div class="col-sm-4">
                        <div id="item-card">           
                            <div id="card-top">
                                <i class="fa fa-star" id="rating">5</i>
                             <img src="img\menu_plainbagel.png" alt="">          
                         </div>
                             <div class="card-bottom"> 
                              <p id="item-name">Bagel</p> 
                            <p class="item-description">Classic chewy bagel with cream cheese.</p>
                             <p id="item-price" class="item-price" style=" margin-top:0px" >₱150.00</p>
                            </div>
                        </div>
                    </div>
                 <!--  4th card BREAD -->
                 <div class="col-sm-4">
                        <div id="item-card">           
                            <div id="card-top">
                                <i class="fa fa-star" id="rating">5</i>
                             <img src="img\menu_strawberrycake1.png" alt="">          
                         </div>
                             <div class="card-bottom"> 
                              <p id="item-name">Strawberry Short Cake</p> 
                            <p class="item-description">Moist vanilla cake with fresh strawberries and frosting layers.</p>
                             <p id="item-price" class="item-price" style=" margin-top:0px">₱150.00</p>
                            </div>
                        </div>
                    </div>
                         <!--  4th card BREAD -->
                         <div class="col-sm-4">
                        <div id="item-card">           
                            <div id="card-top">
                                <i class="fa fa-star" id="rating">  5 </i>
                             <img src="img\bread_chocolat.png" alt="">          
                         </div>
                             <div class="card-bottom"> 
                              <p id="item-name">Pain au Chocolate</p> 
                            <p class="item-description">Traditional French-style  croissant oozing with chocolate filling.</p>
                             <p id="item-price" class="item-price"style=" margin-top:0px">₱150.00</p>
                            </div>
                        </div>
                    </div>
                          <!--  4th card BREAD -->
                          <div class="col-sm-4">
                        <div id="item-card">           
                            <div id="card-top">
                                <i class="fa fa-star" id="rating">5</i>
                             <img src="img\menu_chochojamdonut.png" alt="">          
                         </div>
                             <div class="card-bottom"> 
                              <p id="item-name">Strawberry Jam Donut</p> 
                            <p class="item-description">Donut topped with chocolate glaze filled with strawberry jam.</p>
                             <p id="item-price" class="item-price"style=" margin-top:0px">₱150.00</p>
                            </div>
                        </div>
                    </div>
                          <!--  4th card BREAD -->
                          <div class="col-sm-4">
                        <div id="item-card">           
                            <div id="card-top">
                                <i class="fa fa-star" id="rating">5</i>
                             <img src="img\bread_bacondanish.png" alt="">          
                         </div>
                             <div class="card-bottom"> 
                              <p id="item-name">Cheese & Bacon Danish</p> 
                            <p class="item-description"> Flakey and buttery pastry filled with melted cheese and bacon.</p>
                             <p id="item-price" class="item-price"style=" margin-top:0px">₱150.00</p>
                            </div>
                        </div>
                    </div>
                    
                    









                </div>

                 <!-- BREAKFAST MEALS SECTION -->
                 <p class="category-name" id="breakfast" style="margin-top: 80px;">Breakfast and Pasta</p>
                            <div class="row">
                       <!-- 1st card BREAD -->
                       <div class="col-sm-4">
                        <div id="item-card">           
                            <div id="card-top">
                                <i class="fa fa-star" id="rating">5</i>
                                <i>BEST SELLER</i>
                             <img src="img\menu_pancakes.png" alt="">          
                         </div>
                             <div class="card-bottom"> 
                              <p id="item-name">Pancakes</p> 
                            <p class="item-description">Blueberry and strawberry pancakes with syrup.</p>
                             <p id="item-price" class="item-price" style=" margin-top:0px">₱150.00</p>
                            </div>
                        </div>
                    </div>
                    

                            <!-- 1st card BREAD -->
                            <div class="col-sm-4">
                        <div id="item-card">           
                            <div id="card-top">
                                <i class="fa fa-star" id="rating">5</i>
                                <i >BEST SELLER</i>
                             <img src="img\menu_englishbreakfast.png" style="width: 180px; height:180px; margin-top: 20px" alt="">          
                         </div>
                             <div class="card-bottom"> 
                              <p id="item-name">Full English Breakfast</p> 
                            <p class="item-description">Classic English breakfast with bacon, eggs, and sausage.</p>
                             <p id="item-price" class="item-price" style=" margin-top:0px">₱150.00</p>
                            </div>
                        </div>
                    </div>
                                <!-- 1st card BREAD -->
                                <div class="col-sm-4">
                        <div id="item-card">           
                            <div id="card-top">
                                <i class="fa fa-star" id="rating">4</i>
                       
                             <img src="img\menu_benedict.png" style="width: 180px; height:180px; margin-top: 20px" alt="">          
                         </div>
                             <div class="card-bottom"> 
                              <p id="item-name">Eggs Benedict</p> 
                            <p class="item-description">Poached eggs, bacon, and hollandaise sauce dish.</p>
                             <p id="item-price" class="item-price" style=" margin-top:0px">₱150.00</p>
                            </div>
                        </div>
                    </div>  
                              <!-- 1st card BREAD -->
                              <div class="col-sm-4">
                        <div id="item-card">           
                            <div id="card-top">
                                <i class="fa fa-star" id="rating">4</i>
                             <img src="img\menu_pestopasta.png"  alt="">          
                         </div>
                             <div class="card-bottom"> 
                              <p id="item-name">Pesto Pasta</p> 
                            <p class="item-description">Pasta with basil sauce and pine nuts.</p>
                             <p id="item-price" class="item-price" style=" margin-top:0px">₱150.00</p>
                            </div>
                        </div>
                    </div>
                        <!-- 1st card BREAD -->
                        <div class="col-sm-4">
                        <div id="item-card">           
                            <div id="card-top">
                                <i class="fa fa-star" id="rating">4</i>
                             <img src="img\break_bolognese.png"  alt="">          
                         </div>
                             <div class="card-bottom"> 
                              <p id="item-name">Bolognese Pasta</p> 
                            <p class="item-description">Hearty Italian pasta dish with meat sauce, tomatoes, and herbs.</p>
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
            <hr style= "border-top: 3px solid #c5bdbd; margin: 50px;">
      <!--footer-->
        <?php  include 'Bars/footer.php';?>
        <!-- custom js file link  -->
        <script src="script.js"></script>
    

</body>
</html>