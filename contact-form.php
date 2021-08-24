<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="canonical" href="https://eduprov.com/contact.html" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <script type="application/ld+json">
    
    </script>
    <meta name="description" content="">
    <meta name="keywords" content=" 
    
    ">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Contact Form" />
    <meta property="og:url" content="https://eduprov.com/contact.html" />
    <meta property="og:site_name" content="Eduprov Educational Institute" />
    <meta property="og:description"
      content="" />
    <meta property="og:image" content="#" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@eduprov" />
    <meta name="twitter:title" content="Contact Form" />
    <meta name="twitter:description"
      content="" />
    <meta name="twitter:image" content="#" />
    <meta name="twitter:url" content="https://twitter.com/eduprov" />
    <link rel="shortcut icon" type="image/png" href="/images/favicon.png"  alt="Edurpov Logo" title="Eduprov logo"  />
    <link rel="apple-touch-icon" href="/images/favicon.png"  alt="Edurpov Logo" title="Eduprov logo" >
    <meta name="author" content="thephotogenicbug">
    <link rel="stylesheet" href="blog.css" />
    <link rel="stylesheet" href="accordian.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"rel="stylesheet"/>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css"rel="stylesheet"/>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>
      <!-- Prevent form from Submitting Twice -->
      <script>
        if ( window.history.replaceState ) {
          window.history.replaceState( null, null, window.location.href );
        }
        </script>
</head>
<body style="background-color: #eff4f8;">
    
    <nav>
        <div class="hamburger">
          <div class="line"></div>
          <div class="line"></div>
          <div class="line"></div>
        </div>
        <ul class="nav-links">
          <li class="text-white" style="font-weight: bold;"><a href="https://eduprov.com/">Home</a></li>
          <li style="font-weight: bold;"><a href="https://eduprov.com/application-form.php">Application Form</a></li>
          <li style="font-weight: bold;"><a href="#">Contact us</a></li>
        </ul>
      </nav>
      <div id="logo">
        <img src="images/logo-white.png" alt="Edu-logo" />
      </div>
    
      <div class="banner">
    
        <div class="container text-white">
          <div class="row">
            <div class="col-md-8 mt-5 pt-5">
              <h1 class="text-white">Contact Form</h1>
            </div>
          </div>
        </div>
      </div>

      <?php
      include('enquiry.php');

      if(!empty($_POST["send"])) {
        $name                 = $_POST["name"];
        $email                = $_POST["email"];
        $mobile               = $_POST["mobile"];
        $enquiry              = $_POST["enquiry"];
        $message              = $_POST["message"];
        


        
            // Store student data in database
            $sql = $connection->query("INSERT INTO enquiry_form(name, mobile, email, enquiry, message, sent_date)
            VALUES (
              '{$name}', 
              '{$mobile}', 
              '{$email}', 
              '{$enquiry}', 
              '{$message}',
              
                now()
                )");

            if(!$sql) {
              die("MySQL query failed.");
            } else {
              $response = array(
                "status" => "alert-success",
                "message" => "Contact Form Submitted Successfully !."
              );              
            }
     
      }  
    ?>
    <!-- Msg -->
    <?php if(!empty($response)) {?>
      <div class="alert text-center <?php echo $response['status']; ?>" role="alert">
        <?php echo $response['message']; ?>
      </div>
    <?php }?>

     <form  action="" name="contactForm" method="post" enctype="multipart/form-data">
      <div class="container mt-3">
        <div class="row">
           <div class="col-md-12 text-center">
               <h5>Have Some Questions ?</h5>
               <h6>Drop a message our counselor will get back to you </h6>
           </div>
           <div class="col-md-6 mt-5">
               <div class="row">
                  <div class="col-md-6 input-right">
                    <div class="form-group mb-3">
                      <input type="text" placeholder="Name" name="name" class="form-control" id="name"/>
                     </div>
                  </div>
                  <div class="col-md-6 input-right">
                    <div class="form-group mb-3">
                      <input type="text" placeholder="Mobile" name="mobile" class="form-control" id="mobile"/>
                     </div>
                  </div>
               </div>
               <div class="row">
                <div class="col-md-6 input-right">
                  <div class="form-group mb-3">
                    <input type="text" placeholder="Email ID" name="email" class="form-control" id="email"  />
                   </div>
                </div>
                <div class="col-md-6 input-right">
                  <div class="selectWrapper">
                    <select class="selectBox" name="enquiry" id="enquiry" >
                        <option>Choose...</option>
                        <option>Career Counseling</option>
                        <option>Admission Guidance</option>
                        <option>Overseas Education</option>
                    </select>
                </div>
                </div>
             </div>
             <div class="form-group mt-3 input-right">
              <textarea class="textarea " placeholder="Message"  rows="5" name="message" id="message"  ></textarea>
             </div>
             <div class="form-group button-radius">
              <input class="btn btn-primary btn-rounded" type="submit" name="send" value="Send Message" />
          </div>
          <div class="row">
            <div class="col-md-6 mt-4">
              <label class="mb-2">Head office location (India)</label><br/>
              <p class="contact-form-location text-justify"><i class="fas fa-map-pin"></i>
                  No 20 2nd Floor Lady Curzon Rd Santha Complex Shivaji Nagar Bengaluru Karnataka 560001
              </p>
              <p class="contact-form-location text-justify"><i class="fas fa-phone-alt"></i>
                  +91 80 25591146
              </p>
              </div>
              <div class="col-md-6 mt-4">
                <label>USA location</label><br/>
                <p class="contact-form-location text-justify"><i class="fas fa-map-pin"></i>
                    N.E Blaine Minnesota USA 55434
                </p>
                <p class="contact-form-location text-justify"><i class="fas fa-map-pin"></i>
                    Old Whittlesey Road Suite Columbus Georgia 31909
                </p>
                <p class="contact-form-location text-justify"><i class="fas fa-phone-alt"></i>
                    (+1) 651 967 7789
                </p>
            </div>
          </div>
           </div>
           <div class="col-md-6 mt-5">
            <img src="/images/contact-form.svg" class="img-fluid contact-form-image" title="contact-form-banner" alt="contact-form-banner"/>
           </div>
        </div>
    </div>
     </form>

       <!-- JavaScript -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"></script>
  
  <script>
    $(function() {
      $("form[name='contactForm']").validate({
        // Define validation rules
        rules: {
          name:          "required",
          email:         "required",
          mobile:        "required",
          enquiry:       "required",
          message:       "required",
          
          name: {
            required: true
          },
          email: {
            required: true,
            email: true
          },          
          mobile: {
            required: true,
            number: true
          },
          enquiry:{
            required:true,
          },
          message:{
            required:true,
          }          
          
        },
        // Specify validation error messages
        messages: {
          name: "Please provide a valid name.",
          email: {
            required: "Please enter your email",
            minlength: "Please enter a valid email address"
          },
          mobile: {
            required: "Please provide a mobile no",
            minlength: "Phone number must be min 10 characters long",
            maxlength: "Phone number must not be more than 10 characters long"
          },
        },
      

        submitHandler: function(form) {
          form.submit();
        }
      });
    });    
  </script>
       
      <footer class="page-footer font-small bg-dark pt-4 mt-4">

        <!-- Footer Links -->
        <div class="container text-center text-md-left">
      
          <!-- Footer links -->
          <div class="row text-center text-md-left mt-3 pb-3">
      
            <!-- Grid column -->
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
              <label class="text-uppercase mb-4 font-weight-bold text-white">Head Office (INDIA)</label>
              <p class="text-white">
                <i class="fas fa-map-pin mr-3 text-white"></i> No 20 2nd Floor Lady Curzon Rd Santha Complex Shivaji Nagar Bengaluru Karnataka 560001</p>
                <hr/>
                <p class="text-white">
                  <i class="fas fa-envelope mr-3 text-white"></i> admin@eduprov.com</p>
                  <hr/>
                  <p class="text-white">
                  <i class="fas fa-phone mr-3 text-white"></i> +91 80 25591146</p>
            
            </div>
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
              <label class="text-uppercase mb-4 font-weight-bold text-white">USA Location</label>
              <p class="text-white">
                <i class="fas fa-map-pin mr-3 text-white"></i> N.E Blaine Minnesota USA 55434</p>
                <hr/>
                <p class="text-white">
                  <i class="fas fa-map-pin mr-3 text-white"></i> Old Whittlesey Road Suite Columbus Georgia 31909</p>
                  <hr/>
                <p class="text-white">
                  <i class="fas fa-phone mr-3 text-white"></i> (+1) 651 967 7789</p>
            </div>
    
         
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3 text-center">
              <label class="text-uppercase mb-4 font-weight-bold text-white">Exam Links</label>
              <p>
                <a id="links" href="https://eduprov.com/kcet-exam-information.html">KCET</a>
              </p>
              <p>
                <a id="links" href="https://eduprov.com/jee-exam-blog.html">JEE</a>
              </p>
              <p>
                <a id="links" href="https://eduprov.com/neet-exam.html">NEET</a>
              </p>
            </div>
            
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3 text-center">
              <label class="text-uppercase mb-4 font-weight-bold text-white">Course Links</label>
              <p>
                <a id="links" href="https://eduprov.com/mba-course-blogs.html">MBA</a>
              </p>
              <p>
                <a id="links" href="https://eduprov.com/medical-course-blogs.html">MEDICAL</a>
              </p>
              <p>
                <a id="links" href="https://eduprov.com/engineering-course-blogs.html">ENGINEERING</a>
              </p>
              <p>
                <a id="links" href="https://eduprov.com/law-course-blogs.html">LAW</a>
              </p>
              <p>
                <a id="links" href="https://eduprov.com/designing-course-blogs.html">DESIGNING</a>
              </p>
              <p>
                <a id="links" href="https://eduprov.com/arts-course-blogs.html">ARTS</a>
              </p>
            </div>
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-1">
              
              
            
            </div>
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-1">
             
            </div>
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto  mt-1">
            
            </div>
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-1">
            
            </div>
         
      
          </div>
      
          <hr>
      
          <!-- Grid row -->
          <div class="row d-flex align-items-center">
      
            <!-- Grid column -->
            <div class="col-md-7 col-lg-8">
      
              <!--Copyright-->
              <p class="text-center text-md-left">Eduprov Educational Institute 2021 © Copyright :
                <a href="https://www.thephotogenicbug.in">
                  <strong>thephotogenicbug</strong>
                </a>
              </p>
      
            </div>
            <!-- Grid column -->
      
            <!-- Grid column -->
            <div class="col-md-5 col-lg-4 ml-lg-0">
      
              <!-- Social buttons -->
              <div class="text-center text-md-right">
                <ul class="list-unstyled list-inline">
                  <li class="list-inline-item">
                    <a href="https://www.facebook.com/eduprovinstitute/" class="btn btn-primary btn-rounded btn-sm rgba-white-slight mx-1">
                      <i class="fab fa-facebook-f"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="https://twitter.com/eduprov" class="btn btn-info btn-rounded btn-sm rgba-white-slight mx-1">
                      <i class="fab fa-twitter"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="https://www.linkedin.com/in/eduprov-educational-institute-ab2b24115/" class="btn btn-secondary btn-rounded btn-sm rgba-white-slight mx-1">
                      <i class="fab fa-linkedin-in"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="https://www.instagram.com/eduprov_education/" class="btn btn-danger btn-rounded btn-sm rgba-white-slight mx-1">
                      <i class="fab fa-instagram"></i>
                    </a>
                  </li>
                </ul>
              </div>
      
            </div>
            <!-- Grid column -->
      
          </div>
          <!-- Grid row -->
      
        </div>
        <!-- Footer Links -->
      
      </footer>

</body>
<script src="app.js"></script>
</html>

