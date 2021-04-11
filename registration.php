<!DOCTYPE html>
<html class="theme-cyan cdc-page-type-content cdc-2020" lang="en-us">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
    
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="home_files/bootstrap.css">
    <link rel="stylesheet" href="home_files/app.css">
       
	<title>Home | COVID-19 Info Center</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="description" content="COVID-19 vaccine homepage">
    <meta name="keywords" content="COVID-19, homepage">	
</head>

<body>
<?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
// collect value of input field
 $fname = $_POST['fName'];
                                                       
$lname = $_POST['lName'];
$icNo = $_POST['icNo'];
                                                      
$phoneNo = $_POST['phoneNo'];
                                                       
$vaccines = $_POST['vaccines'];
                                                      
$comment = $_POST['comments'];
$consent = $_POST['consent'];


$myfile = fopen("registrationinfo.txt","w");
//$txt = $fname . "\n" . $lname. "\n" .$icNo. "\n" .$phoneNo."\n" .$vaccines+ "\n" . $comment."\n" .$consent;
$txt = $fname;
fwrite($myfile, $txt."\n");
$txt = $lname;
fwrite($myfile, $txt."\n");
$txt = $icNo;
fwrite($myfile, $txt."\n");
$txt = $phoneNo;
fwrite($myfile, $txt."\n");
$txt = $vaccines;
fwrite($myfile, $txt."\n");
$txt = $comment;
fwrite($myfile, $txt."\n");
$txt = $consent;
fwrite($myfile, $txt."\n");
                                  }
?>
<div class="container-fluid site-title">
    <!-- <div class=""> -->
        <div class="container">
            <div class="row">
                <h3>CoVid-19 Vaccines</h3>
            </div>
        </div>
    </div>
    <div id="cdc-meganav-wrapper">
        
        <div class="container" id="cdc-meganav-bar">
            
            <nav class="navbar navbar-expand-xl yamm">
            
                <ul class="nav navbar-nav nav-justified w-100">
                  
                    <li class="nav-item" id="menu_home">
                        <a class="nav-link" href="home.html">
                            Home				        </a>
                    </li>

                    <li class="nav-item" id="menu1">
                        <a class="nav-link" href="page1.html">
                            Pfizer						</a>
                    </li>

                    <li class="nav-item" id="menu2">
                        <a class="nav-link" href="page2.html">
                            Sinovac						</a>
                    </li>

                    <li class="nav-item" id="menu3">
                        <a class="nav-link" href="page3.html">
                            AstraZeneca					</a>
                    </li>

                    <li class="nav-item" id="menu4">
                        <a class="nav-link active" href="registration.html">
                            Registration				</a>
                    </li>

                </ul>
            </nav>
        </div>
    </div>

    <!-- Page Content Wrap -->
    <div class="container d-flex flex-wrap body-wrapper bg-white">
    
        <!-- Content -->
        <main class="col-xl-9 order-xl-2">
            
            <div class="row">
            
                <div class="col content">
                    <div class="cdc-2020-bar container">							
                    </div>
                 
                    <div class="syndicate">
                        <div class="row ">
                            <div class="col-md-12">
                                <div class="card border-0 rounded-0 mb-3">
                                    <div class="card-body bg-primary">
                                        <div class="row">
                                            <div class="d-none">
                                                <div class="text-center">
                                                    
                                                </div>
                                            </div>
                                            <div class="col">
                                            <p>Registration successful</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
							
          <br>
          <br>
          <br>
     
        </main>
    						
    </div>

    <div class="container-fluid">
        <div class="container">
        
            <div class="card-body bg-quaternary">
                    
                <h5>Disclaimer</h5>
                <p style="font-size:14px;">This website is created mainly for educational and non-commercial use only. It is a 
                partial fulfillment for completion of unit SWE20001 - Development Project 1 offered in 
                Swinburne University of Technology, Sarawak Campus. The web-master and author(s) do not 
                represent the business entity. The content of the pages of this website might be out-dated 
                or inaccurate, thus, the author(s) and web-master does not take any responsibility for 
                incorrect information disseminated or cited from this website.</p>
                
            </div>
        </div>
    </div>
</body>
</html>