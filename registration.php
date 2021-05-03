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
}
    $file = fopen("registrationinfo.txt", "r");
    $array_info = array();

while (! feof($file)) {
        array_push($array_info, (fgets($file)));
}
    fclose($file);
    $msg = "Registration Successful";
for ($x = 2; $x <= sizeof($array_info); $x += 7) {
    if ($icNo == $array_info[$x]) {
        $msg = "You have already registered, please wait for the vaccine" ;
        $msg2 = "You have already registered to take the vaccine. Phases of vaccination are being implemented so please wait for your phase to get vaccinated";
} else { 
        $myfile = fopen("registrationinfo.txt", "a+");
        $txt = $fname;
        fwrite($myfile, $txt . "\n");
        $txt = $lname;
        fwrite($myfile, $txt . "\n");
        $txt = $icNo;
        fwrite($myfile, $txt . "\n");
        $txt = $phoneNo;
        fwrite($myfile, $txt . "\n");
        $txt = $vaccines;
        fwrite($myfile, $txt . "\n");
        $txt = $comment;
        fwrite($myfile, $txt . "\n");
        $txt = $consent;
        fwrite($myfile, $txt . "\n");
        $msg = "Registration successful";
        $msg2 = "Your have succesfully registered for the vaccine. Thank you for your co-operation in the works of curbing Covid-19<br>
        We will contact you once you are appointed to take the vaccine. Together we can do this.";
    }
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
                        Home
                        </a>
                    </li>

                    <li class="nav-item" id="menu1">
                        <a class="nav-link" href="page1.html">
                            Pfizer
                        </a>
                    </li>

                    <li class="nav-item" id="menu2">
                        <a class="nav-link" href="page2.html">
                            Sinovac
                        </a>
                    </li>

                    <li class="nav-item" id="menu3">
                        <a class="nav-link" href="page3.html">
                            AstraZeneca
                        </a>
                    </li>

                    <li class="nav-item" id="menu4">
                        <a class="nav-link active" href="registration.html">
                            Registration
                        </a>
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
                                               <h3><?php echo $msg ?></h3>
                                               <p><?php echo $msg2 ?></p>
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
