<?php  include'connect.php'; ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html> 
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Home</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="MaintainenceServices.css">
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    </head>
    <body>

    <div class="background">
        <div id="d1">
            <img src="logof.gif" alt="Alpha Solar Logo" class="logo">
            <p id="p1">Call Us Today! +92 301-0068484 | sales@SOLARSolutions.com.pk</p>
            
        </div>

        <div class="topnav">
        <input type="checkbox" name="" id="check">
          <label for="check" class="checknav">
            <li class="fas fa-bars"></li>
          </label>
            <div class="dropdown">
                <button class="dropbtn">About Us</button>
                <div class="dropdown-content">
                </div>
              </div>

              <div class="dropdown">
                <button class="dropbtn">Solar Packages</button>
                <div class="dropdown-content">
                  <a href="#">Solar Hybrid System</a>
                  <a href="#">Solar On-Grid System</a>
                </div>
              </div>

              <div class="dropdown">
                <button class="dropbtn">Products</button>
                <div class="dropdown-content">
                  <a href="#">Solar Panels</a>
                  <a href="#">Solar Inverters</a>
                  <a href="#">Solar Dry Batteries</a>
                </div>
              </div>

              <div class="dropdown">
                <button class="dropbtn">Solar Solution</button>
                <div class="dropdown-content">
                  <a href="#">Customize Package</a>
                </div>
              </div>

              <div class="dropdown">
                <button class="dropbtn">Net Metering</button>
                <div class="dropdown-content">
                </div>
              </div>

              <div class="dropdown">
                <button class="dropbtn">Projects</button>
                <div class="dropdown-content">
                </div>
              </div>

              <div class="dropdown">
                <button class="dropbtn">Blog</button>
                <div class="dropdown-content">
                </div>
              </div>
              
              <div class="dropdown">

    <!-- Dropdown Button -->
    <?php if (isset($_SESSION['user'])): ?>
        <button class="dropbtn" onclick="location.href='signout.php'">Sign Out</button>
    <?php endif; ?>
    <?php if (!isset($_SESSION['user'])): ?>
        <button class="dropbtn" onclick="location.href='customerRegistrationHome.php'">Sign In</button>
    <?php endif; ?>

    <!-- Dropdown Content (Always present) -->
    <div class="dropdown-content">
        <!-- Add dropdown items here -->
    </div>
</div>
        </div>

            
            <div id="d2">
                <div id="customP" class="reveal"><p>MAKE YOUR OWN PACKAGE   <br><span>TRY NOW!</span></p>
                  <img src="goldenarrow.gif" alt=""></div>
                
                
                
                  <div id="d24">
                    
                    <div id="d21"><a href="signupChecking.php"> 
                        <div id="d241cp">

                        </div></a>
                        <div>
                           <a id="d242cp" href="signupChecking.php"> Customize Package </a>
                        </div>
                    </div>


                    <div id="d21"><a href="elc.html">
                        <div id="d241Enerload">
                            
                        </div></a>
                        <div>
                           <a id="d242elc" href="elc.html"> Energy Load Calculator</a>
                        </div>
                    </div>

               
                    <div id="d21"><a href="#rp"> 
                        <div id="d241recomPackage">
                             
                        </div></a>
                        <div id="d242rp">
                             <a href="#rp">Recommended Package</a> 
                        </div>
                    </div>

                    <div id="d21"><a href="#" id="openOverlay"> 
                        <div id="d241Services">
                            
                        </div></a>
                        <div id="d242Services">
                            <a href="#" id="openOverlay">Services</a>
                        </div>
                    </div>
                </div>

            </div>

<div class="b">

            <div id="brands" class="reveal">
                <h2>TOP BRANDS WE TRUST FOR YOUR SOLAR SYSTEM NEEDS</h2>
                <hr>
            </div>

            <div id="brandspics" class="reveal">
                <img src="image8.png" alt="">
                <img src="image9.png" alt="">
                <img src="image12.png" alt="">
                <img src="image13.png" alt="">
                <img src="image14.png" alt="">
                <img src="image15.png" alt="">
                <img src="image16.png" alt="">
                <img src="image17.png" alt="">
                <img src="image18.png" alt="">
            </div>

 </div>


  
 <div class="pack">


      <!-- Residential Packages -->
      <div class="recommendedPackages reveal" id="rp">
            <h1>LOWER YOUR ELECTRICITY BILLS</h1>
            <p>Discover The Best Solar Solution For Your Home</p>
        </div>

        <div class="pricing-table inner reveal">
            <?php

             

            // Fetch packages from the database
            $sql = "SELECT * FROM recommended_packages";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='plan reveal'>";
                    echo "<h2>{$row['TYPE']}</h2>";
                    echo "<h1>{$row['size']}</h1>";
                    echo "<p>{$row['description']}</p>";
                    echo "<div class='save'>{$row['savings']}</div>";
                    echo "<ul>";
                    $features = explode(',', $row['features']);
                    foreach ($features as $feature) {
                        echo "<li>{$feature}</li>";
                    }
                    echo "</ul>";
                    echo "<div class='price'>Rs  {$row['price']}</div>";
                    echo "</div>";
                }
            } else {
              echo '<div style="color:red">No Packages Available</div>';
            }

            $conn->close();
            ?>
        </div>


            
                
            <div class="statistics-section reveal">
                <h1 class="reveal slideUp">Since 2012</h1>
                <hr>
                <div class="stats reveal">
                    <div class="stat">
                        <img src="customers.png" alt="Total Systems Installed">
                        <p id="button">1,400+</p>
                        <p>Total Systems Installed</p>
                    </div>
                    <div class="stat">
                        <img src="solar-panel.png" alt="Total Megawatts">
                        <p>30+ MW</p>
                        <p>Total Megawatts</p>
                    </div>
                    <div class="stat">
                        <img src="package.png" alt="Customer Quoted">
                        <p>7,000+</p>
                        <p>Customer Quoted</p>
                    </div>
                </div>
            </div>


</div>

            <div class="workflow reveal">
                <h1 class="reveal slideIn">OUR <br>WORKFLOW <br> PROCESS <br><hr></h1>
                <img src="our-process.jpg" alt="">
            </div>
            










            <div class="clientrev">
                <h1 class="reveal slideUp">Clients’ Reviews</h1>
                <div class="bgreview">
                  <div class="revcontainer reveal">
                      <img src="h1.jpg" alt="Avatar" class="imagerev1">
                      <div class="rev-overlay">
                        <div class="rev1"><p>"Fantastic experience with SOLAR SOLUTIONS! Their team was professional, and the solar installation was quick and efficient. We’re thrilled with the results and the positive impact on our energy costs."</p></div>
                      </div>
                    </div>
                    
                    
                    <div class="revcontainer reveal">
                      <img src="h2.jpg" alt="Avatar" class="imagerev1">
                      <div class="rev-overlay">
                        <div class="rev1"><p>"SOLAR SOLUTIONS provided exceptional service and top-quality solar panels. The installation was smooth, and we've already noticed significant savings on our energy bills. Highly recommend!"</p></div>
                      </div>
                    </div>
      
      
                    <div class="revcontainer reveal">
                      <img src="h5.jpg" alt="Avatar" class="imagerev1">
                      <div class="rev-overlay">
                        <div class="rev1"><p>I had a fantastic experience with SOLAR SOLUTIONS. Their team is extremely knowledgeable and took the time to explain. The system they installed is working perfectly and producing the exact amount they promised it would.</p></div>
                      </div>
                    </div>
      
      
      
                </div>
            </div>                








    <section class="footer">
        <div class="footer-row reveal">
          <div class="footer-col">
            <h4>Info</h4>
            <ul class="links">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Contact Us</a></li>
              <li><a href="#">Products</a></li>
              <li><a href="#">Service</a></li>
            </ul>
          </div>
  
          <div class="footer-col">
            <h4>Explore</h4>
            <ul class="links">
              <li><a href="#">Energy Load Calculator</a></li>
              <li><a href="#">Customize Package</a></li>
              <li><a href="#">Maintenance Service</a></li>
            </ul>
          </div>
  
          <div class="footer-col">
            <h4>Legal</h4>
            <ul class="links">
              <li><a href="#">Customer Agreement</a></li>
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Security</a></li>
            </ul>
          </div>

          <div class="footer-col">
            <h4 class="news">Newsletter</h4>
            <p>
              Subscribe to our newsletter for a weekly dose
              of news, updates, helpful tips, and
              exclusive offers.
            </p>
            <form action="#">
              <input type="email" placeholder="Your email" required>
              <button type="submit">SUBSCRIBE</button>
            </form>
            <div class="icons">
                <i class="fa-brands fa-facebook-f"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-linkedin"></i>
                <i class="fa-brands fa-github"></i>
            </div>
          </div>
        </div>
      </section>    
    


   <!-- Maintainence Services -->

    
        <div id="overlay">
            <div id="overlayContent">
                <span id="closeOverlay">&times;</span>
                <h1 id="headingSelectServices">Select Service</h1>
                <button><a href="#" id="installationBtn">Installation Services</a></button>
                <button><a href="#" id="openOverlay2">Maintainance Services</a></button>
                
            </div>
        </div>
        <div id="blurBackground"></div>
    
        <div id="overlay2">
            <div id="maintainenceOverlayContent">
                
                <span id="closeOverlay1">&times;</span>
                <div id="selectCity">
                    <h1>Select City</h1>
                </div>
                
               
                <form method="POST" action="MaintainenceServices.php" name="forme" >
    <input type="hidden" id="locationField" name="location" value="">

    <button id="lahore" type="button" onclick="setLocation('Lahore')">Lahore</button>
    <div id="seperater"></div>
    <button id="Gujranwala" type="button" onclick="setLocation('Gujranwala')">Gujranwala</button>
    
    <div id="divForm">
        <label id="l2" for="address">Area:</label><br>
        <input type="text" name="area" id="i2" placeholder="Please enter your Area e.g Model Town" maxlength="15" required><br>
        
        <label id="l2" for="houseno">House No #:</label><br>
        <input type="number" name="houseno" id="i2" placeholder="Please enter your House Number e.g 320" max="999" required oninput="if(this.value.length > 3) this.value = this.value.slice(0, 3);"><br>
        
        <label id="l2" for="block">Block:</label><br>
        <input type="text" name="block" id="i2" placeholder="Please enter your Block e.g A" required maxlength="1" minlength="1"><br>
        
        <label id="l2" for="contact">Contact:</label><br>
      <input 
            id="i2" 
            type="tel" 
            name="contact" 
            placeholder="e.g 0310-712567" 
            pattern="[0-9]{4}-[0-9]{7}" 
            required 
            title="Enter a phone number in the format 0310-712567"
        ><br>        
        <div id="selectMaintainenceType">Select Maintainance System Type</div>
                            <div id="MaintainenceTypeBtns">
                            <input type="hidden" id="typeField" name="type" value="">
                                <input type="button" id="washingBtn" value="Solar System Washing" onclick="setType('Solar System Washing')" name="Washing"></input>
                                <input type="button" id="maintainenceBtn" value="Solar System Maintenance" onclick="setType('Solar System Maintenance')"name="Maintenance"></input>
                        </div>

                          <div class="divform" id="divform">

                            <legend class="l2">Select Solar System Size</legend>
                
                            <br>
                
                            <div>
                                <input type="radio" name="system-size" id="size-1kw" value="1kw">
                                <label for="size-1kw">1kW</label>
                            </div>
                
                            <br>
                
                            <div>
                                <input type="radio" name="system-size" id="size-2kw" value="2kw">
                                <label for="size-2kw">2kW</label>
                            </div>
                
                            <br>
                
                            <div>
                                <input type="radio" name="system-size" id="size-3kw" value="3kw">
                                <label for="size-3kw">3kW</label>
                            </div>
                
                            <br>
                
                            <div>
                                <input type="radio" name="system-size" id="size-6kw" value="6kw">
                                <label for="size-6kw">6kW</label>
                            </div>
                            
                            <br>
                
                            <div>
                                <input type="radio" name="system-size" id="size-10kw" value="10kw">
                                <label for="size-10kw">10kW</label>
                            </div>
                
                            <br>
                
                            <div>
                                <input type="radio" name="system-size" id="size-15kw" value="15kw">
                                <label for="size-15kw">15kW</label>
                            </div>
                           <input type="submit" id="bookMaintainence" name="bookMaintainence" onclick="location.href='MaintainenceServices.php'">
    </div>
</form>
          
            </div>
        </div>
    <!-- Maintainence Services -->



    
      <script src="home.js"></script>


    </body>
</html>