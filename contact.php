<?php
if (isset($_POST['email'])) {
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "kenny.seo@websitedevteam.com";
    $email_subject = "Contact From kennyseo.github.io";
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error . "<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
    // validation expected data exists
    if (!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['subject']) ||
        !isset($_POST['message'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');
    }
    $name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
    $subject = $_POST['subject']; // not required
    $message = $_POST['message']; // required
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
    if (!preg_match($email_exp, $email_from)) {
        $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
    }
    $string_exp = "/^[A-Za-z .'-]+$/";
    if (!preg_match($string_exp, $name)) {
        $error_message .= 'The Name you entered does not appear to be valid.<br />';
    }
    if (strlen($comments) < 2) {
        $error_message .= 'The Comments you entered do not appear to be valid.<br />';
    }
    if (strlen($error_message) > 0) {
        died($error_message);
    }
    $email_message = "Form details below.\n\n";
    function clean_string($string) {
        $bad = array("content-type", "bcc:", "to:", "cc:", "href");
        return str_replace($bad, "", $string);
    }
    $email_message .= "Name: " . clean_string($name) . "\n";
    $email_message .= "Email: " . clean_string($email) . "\n";
    $email_message .= "Subject: " . clean_string($subject) . "\n";
    $email_message .= "Message: " . clean_string($message) . "\n";
// create email headers
    $headers = 'From: ' . $email_from . "\r\n" .
            'Reply-To: ' . $email_from . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $email_subject, $email_message, $headers);
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>arkorean.org is on sale</title>
        <meta name="description" content="알칸사 한인회, 알칸사 주소록 등 알칸사 한인회 관련 홈페이지에 알맞는 도메인 이름입니다." />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--Bootstrap 4-->
        <link rel="stylesheet" href="bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <!--icons-->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
        <style>
          a { color: #17a2b8;}
          a:hover { color: #17a2b8;}
        .head-fixed{padding:100px 0;}
        .form-control {
          height: 55px;
          font-size: 1.2rem;
        }
        .form-group {
          margin-bottom: 1.5rem;
        }
        textarea.form-control {
          height: 120px;
        }
        @media (min-width:768px){
          .head-fixed{position:fixed;;top:0;bottom:0;padding:350px 0 0 0;}
          .rotate {
          /* Safari */
          -webkit-transform: rotate(-90deg);
          /* Firefox */
          -moz-transform: rotate(-90deg);
          /* IE */
          -ms-transform: rotate(-90deg);
          /* Opera */
          -o-transform: rotate(-90deg);
          /* Internet Explorer */
          filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);
          }
        }
        </style>
    </head>
    <body>
        <!--hero section-->
        <section class="bg-white hero p-0">
            <div class="container-fluid">s
                <div class="row">
                    <div class="col-md-2 bg-info text-center head-fixed">
                        <h1 class="rotate"><a href="http://arkorean.org" class="text-white">ARKOREAN.ORG</a></h1>
                    </div>


                    <div class="col-md-10 ml-auto px-0 py-2">
                        <!--Make an offer-->
                        <section class="bg-white">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8 col-sm-12 mx-auto text-center">
																				<br /><br /><br /><br /><br /><br />
                                        <h2 class="text-info">Thanks for contact Website Dev team.</h2>
                                        <hr/>

                                        <p class="text-muted">
                                          <br/>
                                              Website Dev Team will consider your offer very seriously and contact you as soon as possible.
                                        </p>
																				<br /><br /><br /><br /><br /><br />
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!--Why This Domain-->
                        <section class="bg-dark pt-6">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-10 col-sm-8 mx-auto text-center">
                                        <h2 class="text-info">Why arkorean.org?</h2>
                                        <hr/>
                                        <p class="text-muted">
                                          Suitable domain name for Arkansas Korean association, Arkansas Korean address book or any other Arkansas Korean related website.
                                          알칸사 한인회, 알칸사 업소록, 알칸사 교회 등 알칸사 한인사회 관련 홈페이지에 알맞는 도메인 이름입니다.
                                        </p>
                                    </div>
                                </div>
                                <br />
                                <div class="row d-md-flex mt-6">
                                    <div class="col-lg-4 col-md-5 col-sm-5 offset-lg-2 offset-md-1 offset-sm-1 mt-2 text-center">
                                        <div class="card card-outline-info">
                                            <div class="card-body">
                                                <h5 class="card-title">Website Design/Develop</h5>
                                                <p class="card-text text-muted">arkorean.org domain name will be free if you develop your website with <a href="http://websitedevteam.com" target="_blank">Website Dev Team</a>.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-5 col-sm-5 mt-2 text-center">
                                        <div class="card card-outline-info">
                                            <div class="card-body">
                                                <h5 class="card-title">Easy Domain Transfer</h5>
                                                <p class="card-text text-muted">Website Dev Team wil help you transfer arkorean.org on your domain name server provider.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!--contact-->
                        <section class="bg-dark pt-3 pb-3">
                            <div class="container-fluid">
                                <div class="row d-md-flex text-center text-info">
                                    <div class="col-sm-6">
                                        <p><em class="ion-ios-telephone-outline icon-md"></em></p>
                                        <p class="lead">+1 (213)-761-8074</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <p><em class="ion-ios-email-outline icon-md"></em></p>
                                        <p class="lead"><a href="mailto:info@websitedevteam.com">info@websitedevteam.com</a></p>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!--footer-->
                            <div class="container">
                                <div class="row mt-4">
                                    <div class="col-sm-12">
                                        <p class="text-muted text-center">
                                            &copy; <script type="text/javascript">document.write(new Date().getFullYear());</script> Another Awesome Project By
                                            <a href="http://websitedevteam.com" target="_blank">Website Dev Team</a>.
                                        </p>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </section>

    </body>
</html>

<meta http-equiv="refresh" content="15;URL='http://arkorean.org'" />
