<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="canonical" href="https://eduprov.com/" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Application Form - Eduprov</title>
    <script type="application/ld+json">
    
    </script>
    <meta name="description" content="">
    <meta name="keywords" content=" 
    
    ">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="Eduprov Educational Institute" />
    <meta property="og:description"
      content="" />
    <meta property="og:image" content="" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@eduprov" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:description"
      content="" />
    <meta name="twitter:image" content="" />
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

    <script>
    if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
        }
    </script>
</head>
<body class="bg-light">
<nav>
    <div class="hamburger">
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
    </div>
    <ul class="nav-links">
      <li class="text-white" style="font-weight: bold;"><a href="https://eduprov.com/">Home</a></li>
      <li style="font-weight: bold;"><a href="application-form.php">Application Form</a></li>
      <li style="font-weight: bold;"><a href="contact.php">Contact us</a></li>
    </ul>
  </nav>
  <div id="logo">
    <img src="images/logo-white.png" alt="Edu-logo"   title="Eduprov Brand Logo"/>
  </div>



    
    <?php
      include('config/database.php');

      if(!empty($_POST["send"])) {
        $name                 = $_POST["name"];
        $email                = $_POST["email"];
        $mobileno             = $_POST["mobileno"];
        $dob                 = $_POST["dob"];
        $gender               = $_POST["gender"];
        $exactivities         = $_POST["exactivities"];
        $precourse            = $_POST["precourse"];
        $precoursetwo         = $_POST["precoursetwo"];
        $precoursethree       = $_POST["precoursethree"];
        $precoursefour        = $_POST["precoursefour"];
        $fathername           = $_POST["fathername"];
        $mothername           = $_POST["mothername"];
        $parentsno            = $_POST["parentsno"];
        $motherocp            = $_POST["motherocp"];
        $fatherocp            = $_POST["fatherocp"];
        $caste                = $_POST["caste"];
        $country              = $_POST["country"];
        $state                = $_POST["state"];
        $city                 = $_POST["city"];
        $nationality          = $_POST["nationality"];
        $precollege           = $_POST["precollege"];
        $precollegetwo        = $_POST["precollegetwo"];
        $precollegethree      = $_POST["precollegethree"];
        $precollegefour       = $_POST["precollegefour"];
        $qualification        = $_POST["qualification"];
        $achievements         = $_POST["achievements"];
        $address              = $_POST["address"];


        
            // Store student data in database
            $sql = $connection->query("INSERT INTO student_data(name, email, mobileno, dob, gender, exactivities, precourse, precoursetwo, precoursethree, precoursefour, fathername, mothername, parentsno, motherocp,  fatherocp,  caste, country, state, city, nationality, precollege, precollegetwo, precollegethree, precollegefour, qualification, achievements, address, sent_date)
            VALUES (
              '{$name}', 
              '{$email}', 
              '{$mobileno}', 
              '{$dob}', 
              '{$gender}', 
              '{$exactivities}', 
              '{$precourse}', 
              '{$precoursetwo}', 
              '{$precoursethree}', 
              '{$precoursefour}', 
              '{$fathername}', 
              '{$mothername}', 
              '{$parentsno}', 
              '{$motherocp}', 
              '{$fatherocp}', 
              '{$caste}', 
              '{$country}', 
              '{$state}',
              '{$city}', 
              '{$nationality}',
              '{$precollege}',
              '{$precollegetwo}',
              '{$precollegethree}',
              '{$precollegefour}',
              '{$qualification}',
              '{$achievements} ',
              '{$address}',
              
                now()
                )");

            if(!$sql) {
              die("MySQL query failed.");
            } else {
              $response = array(
                "status" => "alert-success",
                "message" => "Message Sent Successfully !."
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

    <!-- Contact form -->
    <form action="" name="contactForm" method="post" enctype="multipart/form-data">
     <div class="container mt-5">
         <div class="row">
             <div class="col-md-12 text-center">
             <h3 className="text-center "> Student Application Form </h3>
             </div>
         </div>
         <div class="row">
           <div class="col-lg-1"></div>
           <div class="col-lg-10">
             <div class="card ">
               <div class="card-header bg-primary text-white">Enter Students Details</div>
               <div class="card-body">
                 <div class="row form-group">
                   <div class="col-md-4 mb-4">
                   <input type="text" class="form-control" placeholder="Name" name="name" id="name"/>
                   </div>
                   <div class="col-md-4 mb-4">
                   <input type="text" class="form-control" placeholder="Email-ID" name="email" id="email"/>
                   </div>
                   <div class="col-md-4 mb-4">
                   <input type="text" class="form-control" placeholder="Mobile No." name="mobileno" id="mobileno"/>
                   </div>
                   <div class="col-md-4 mb-4">
                    <input type="text" class="form-control" placeholder="Date of Birth" onfocus="(this.type='date')" onblur="(this.type='text')" name="dob" id="dob"/>
                   </div>
                   <div class="col-md-4 mb-4">
                   <input type="text" class="form-control" placeholder="Gender" name="gender" id="gender"/>
                   </div>
                   <div class="col-md-4 mb-4">
                     <input type="text" class="form-control" placeholder="Extra Curricular Activities " name="exactivities" id="exactivities"/>
                   </div>
                   <div class="col-md-4 mb-4">
                     <input type="text" class="form-control" placeholder="Preferred Course" name="precourse" id="precourse"/>
                   </div>
                   <div class="col-md-4 mb-4">
                     <input type="text" class="form-control" placeholder="Preferred Course Two (optional)" name="precoursetwo" id="precoursetwo"/>
                   </div>
                   <div class="col-md-4 mb-4">
                     <input type="text" class="form-control" placeholder="Preferred Course Three (optional)" name="precoursethree" id="precoursethree"/>
                   </div>
                   <div class="col-md-4 mb-4">
                     <input type="text" class="form-control" placeholder="Preferred Course Four (optional)" name="precoursefour" id="precoursefour"/>
                   </div>
                   <div class="col-md-4 mb-4">
                     <input type="text" class="form-control" placeholder="Father Name" name="fathername" id="fathername"/>
                   </div>
                   <div class="col-md-4 mb-4">
                     <input type="text" class="form-control" placeholder="Mother Name" name="mothername" id="mothername"/>
                   </div>
                   <div class="col-md-4 mb-4">
                     <input type="text" class="form-control" placeholder="Parents Mobile No." name="parentsno" id="parentsno"/>
                   </div>
                   <div class="col-md-4 mb-4">
                     <input type="text" class="form-control" placeholder="Mother's Occupation" name="motherocp" id="motherocp"/>
                   </div>
                   <div class="col-md-4 mb-4">
                     <input type="text" class="form-control" placeholder="Father's Occupation" name="fatherocp" id="fatherocp"/>
                   </div>
                   <div class="col-md-4 mb-4">
                     <input type="text" class="form-control" placeholder="Caste" name="caste" id="caste"/>
                   </div>
                   <div class="col-md-4 mb-4">
                     <input type="text" class="form-control" placeholder="Country" name="country" id="country"/>
                   </div>
                   <div class="col-md-4 mb-4">
                     <input type="text" class="form-control" placeholder="State" name="state" id="state"/>
                   </div>
                   <div class="col-md-4 mb-4">
                     <input type="text" class="form-control" placeholder="City" name="city" id="city"/>
                   </div>
                   <div class="col-md-4 mb-4">
                     <input type="text" class="form-control" placeholder="Nationality" name="nationality" id="nationality"/>
                   </div>
                   <div class="col-md-4 mb-4">
                     <input type="text" class="form-control" placeholder="Preferred College " name="precollege" id="precollege"/>
                   </div>
                   <div class="col-md-4 mb-4">
                     <input type="text" class="form-control" placeholder="Preferred College Two (optional)" name="precollegetwo" id="precollegetwo"/>
                   </div>
                   <div class="col-md-4 mb-4">
                     <input type="text" class="form-control" placeholder="Preferred College Three (optional)" name="precollegethree" id="precollegethree"/>
                   </div>
                   <div class="col-md-4 mb-4">
                     <input type="text" class="form-control" placeholder="Preferred College Four (optional)" name="precollegefour" id="precollegefour"/>
                   </div>
                   <div class="col-md-6 mb-4">
                     <input type="text" class="form-control" placeholder="Enter your qualification " name="qualification" id="qualification"/>
                   </div>
                   <div class="col-md-6 mb-4">
                     <input type="text" class="form-control" placeholder="Sports and Achievements " name="achievements" id="achievements"/>
                   </div>
                   <div class="col-md-12 mb-4">
                    <textarea class="form-control" placeholder="Enter Your Address" name="address" id="address" rows="4"></textarea>
                  </div>
                  <div class="text-center">
                  <input type="submit" name="send" value="Send Message" class="btn btn-success">
                  </div>
                   
                 </div>
               </div>
             </div>
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
          mobileno:      "required",
          dob:          "required",
          gender:        "required",
          exactivities:  "required",
          precourse:     "required",
          fathername:    "required",
          mothername:    "required",
          parentsno:     "required",
          motherocp:     "required",
          fatherocp:     "required",
          caste:         "required",
          country:       "required",
          state:         "required",
          city:          "required",
          nationality:   "required",
          precollege:    "required",
          qualification: "required",
          achievements:"required",
          address: "required",
          name: {
            required: true
          },
          email: {
            required: true,
            email: true
          },          
          mobileno: {
            required: true,
            minlength: 10,
            maxlength: 10,
            number: true
          },          
          dob: {
            required: true
          },          
          gender: {
            required: true
          },
          exactivities: {
            required: true,
            minlength: 10,
            maxlength: 100
          },
          precourse: {
            required: true,
            minlength: 5,
            maxlength: 100
          },
          fathername:{
            required: true,
            minlength: 10,
            maxlength: 50
          },
          mothername:{
            required: true,
            minlength: 10,
            maxlength: 50
          },
          parentsno:{
            required: true,
            minlength: 10,
            maxlength: 10,
            number: true
          },
          motherocp:{
            required: true,
            minlength: 10,
            maxlength: 100,
          },
          fatherocp:{
            required: true,
            minlength: 10,
            maxlength: 100,
          },
          caste:{
            required: true,
            minlength: 10,
            maxlength: 50,
          },
          country:{
            required: true,
            minlength: 3,
            maxlength: 100,
          },
          state:{
            required: true,
            minlength: 5,
            maxlength: 100,
          },
          city:{
            required: true,
            minlength: 5,
            maxlength: 100,
          },
          nationality:{
            required: true,
            minlength: 3,
            maxlength: 100,
          },
          precollege:{
            required: true,
            minlength: 10,
            maxlength: 100,
          },
          qualification:{
            required: true,
            minlength: 10,
            maxlength: 100,
          },
          achievements:{
            required: true,
            minlength: 10,
            maxlength: 100,
          },
          address:{
            required: true,
          }
          
        },
        // Specify validation error messages
        messages: {
          name: "Please provide a valid name.",
          email: {
            required: "Please enter your email",
            minlength: "Please enter a valid email address"
          },
          mobileno: {
            required: "Please provide a mobile no",
            minlength: "Phone number must be min 10 characters long",
            maxlength: "Phone number must not be more than 10 characters long"
          },
          exactivities: {
            required: "Please enter extra curricular activities",
            minlength: "must be min 10 characters long",
            maxlength: "must not be more than 100 characters long"
          },
          precourse: {
            required: "Please enter your preferred course ",
            minlength: "must be min 5 characters long",
            maxlength: "must not be more than 100 characters long"
          },
          fathername: {
            required: "Please enter your father's name ",
            minlength: "must be min 10 characters long",
            maxlength: "must not be more than 50 characters long"
          },
          mothername: {
            required: "Please enter your mother's name ",
            minlength: "must be min 10 characters long",
            maxlength: "must not be more than 50 characters long"
          },
          parentsno: {
            required: "Please provide a mobile no",
            minlength: "Phone number must be min 10 characters long",
            maxlength: "Phone number must not be more than 10 characters long"
          },
          motherocp: {
            required: "Please enter your mother's occupation",
            minlength: "must be min 10 characters long",
            maxlength: "must not be more than 100 characters long"
          },
          fatherocp: {
            required: "Please enter your father's occupation",
            minlength: "must be min 10 characters long",
            maxlength: "must not be more than 100 characters long"
          },
          caste: {
            required: "Please enter your caste ",
            minlength: "must be min 10 characters long",
            maxlength: "must not be more than 50 characters long"
          },
          country: {
            required: "Please enter your country ",
            minlength: "must be min 3 characters long",
            maxlength: "must not be more than 100 characters long"
          },
          state: {
            required: "Please enter your state ",
            minlength: "must be min 5 characters long",
            maxlength: "must not be more than 100 characters long"
          },
          city: {
            required: "Please enter your city ",
            minlength: "must be min 5 characters long",
            maxlength: "must not be more than 100 characters long"
          },
          nationality: {
            required: "Please enter your nationality ",
            minlength: "must be min 3 characters long",
            maxlength: "must not be more than 100 characters long"
          },
          precollege: {
            required: "Please enter your preferred college / university ",
            minlength: "must be min 10 characters long",
            maxlength: "must not be more than 100 characters long"
          },
          qualification: {
            required: "Please enter your qualification ",
            minlength: "must be min 10 characters long",
            maxlength: "must not be more than 100 characters long"
          },
          achievements: {
            required: "Please enter your achievements ",
            minlength: "must be min 10 characters long",
            maxlength: "must not be more than 100 characters long"
          },
          address: {
            required: "Please enter your address ",
          },
          dob: "Please choose your dob",
          gender: "Please enter your gender"

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

     
        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
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
        
        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
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