<?php include'connect.php'?>
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
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
        <link rel="stylesheet" href="MaintainenceServices.css">
        <link rel="stylesheet" href="style3.css">

        <script src="home.js"></script>
    </head> 
    
    <body>
        <div class="home-wrapper">
            <div class="logo">
                <img src="logof.gif" alt="Alpha Solar Logo" class="logo">
                <p id="p1">Call Us Today! +92 301-0068484 <br>sales@SOLARSolutions.com.pk</p>
            </div>
            <div class="sidebar">
                <img src="sidebar.png" alt="" id="sidebar" onclick="sidebar()">
            </div>

            <div class="nav">
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
                      <a href="h.php">Customize Package </a>
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

            <div class="services-div">
                <div class="reveal">
                    <div class="arrow">
                        <p>MAKE YOUR OWN PACKAGE   <br><span>TRY NOW!</span></p>
                        <img src="goldenarrow.gif" alt="Customize Package">
    
                    </div>
                </div>
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
           

            <div class="brands-container">
                <div class="brand-text">
                    <h1>TOP BRANDS WE TRUST FOR YOUR SOLAR SYSTEM NEEDS</h1>
                    <hr>
                </div>
                <div class="brand-img-container">
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
                <div class="recommendedPackages reveal" id="rp">
                <h1>LOWER YOUR ELECTRICITY BILLS</h1>
                <p>Discover The Best Solar Solution For Your Home</p>
                </div>
        
    
                <div class="pricing-table">
                    <div class="plan reveal slideIn">
                        <h2>REGULAR</h2>
                        <h1>6kW</h1>
                        <h3>(Average Home)</h3>
                        <div class="save">
                            Save up to Rs.380,000/year
                            7500 units/year
                        </div>
                        <ul>
                            <li>6 x Fans</li>
                            <li>20 x Lights</li>
                            <li>1 x Refrigerator</li>
                            <li>1 x Inverter AC 1.5 ton</li>
                            <li>1 x Water Pump 1HP</li>
                            <li><b>Tier 1 Products and Brands</b></li>
                            <li><b>Payback Period less than 4 yrs.</b></li>
                        </ul>
                        <div class="price">Rs 9,00,000</div>
                    </div>
                    <div class="plan reveal">
                        <h2>BEST</h2>
                        <h1>10kW</h1>
                        <h3>(Standard Home)</h3>
                        <div class="save">
                            Save up to Rs.650,000/year
                            1400 units/year
                        </div>
                        <ul>
                            <li>8 x Fans</li>
                            <li>25 x Lights</li>
                            <li>1 x Refrigerator</li>
                            <li>3 x Inverter AC 1.5 ton</li>
                            <li>1 x Water Pump 1HP</li>
                            <li><b>Tier 1 Products and Brands</b></li>
                            <li><b>Payback Period less than 3 yrs.</b></li>
                        </ul>
                        <div class="price">Rs 14,00,000</div>
                    </div>
                    <div class="plan reveal slideOut">
                        <h2>PREMIUM</h2>
                        <h1>15kW</h1>
                        <h3>(Spacious Home)</h3>
                        <div class="save">
                            Save up to Rs.1,000,000/year
                            21000 units/year
                        </div>
                        <ul>
                            <li>15 x Fans</li>
                            <li>35 x Lights</li>
                            <li>2 x Refrigerator</li>
                            <li>4 x Inverter AC 1.5 ton</li>
                            <li>1 x Water Pump 1HP</li>
                            <li><b>Tier 1 Products and Brands</b></li>
                            <li><b>Payback Period less than 3 yrs.</b></li>
                        </ul>
                        <div class="price">Rs 120,00,000</div>
                    </div>
                </div>
                
                </div>

                <div class="workflow-container">
                    <div class="divwork1">
                        <h1>Since 2012</h1><hr>
                        
                        <div class="imgwork">
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
                    <div class="work2"></div>
                </div>

                <div class="clientrew-container">
                <div class="clientrev">
                    <h1 class="reveal slideUp">Clients’ Reviews</h1>
                    <div class="bgreview">
                        <div class="revcontainer reveal" style="background-image: url('h5.jpg');">
                            <div class="rev-overlay">
                                <div class="rev1">
                                    <p>"Fantastic experience with SOLAR SOLUTIONS! Their team was professional, and the solar installation was quick and efficient. We’re thrilled with the results and the positive impact on our energy costs."</p>
                                </div>
                            </div>
                        </div>
                
                        <div class="revcontainer reveal" style="background-image: url('h2.jpg');">
                            <div class="rev-overlay">
                                <div class="rev1">
                                    <p>"SOLAR SOLUTIONS provided exceptional service and top-quality solar panels. The installation was smooth, and we've already noticed significant savings on our energy bills. Highly recommend!"</p>
                                </div>
                            </div>
                        </div>
                
                        <div class="revcontainer reveal" style="background-image: url('h1.jpg');">
                            <div class="rev-overlay">
                                <div class="rev1">
                                    <p>"I had a fantastic experience with SOLAR SOLUTIONS. Their team is extremely knowledgeable and took the time to explain. The system they installed is working perfectly and producing the exact amount they promised it would."</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                
          
                  
        </div>
    </div>
</div>

<?php include('footer.php');?>

    

    </body>
</html>