<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
      <!-- Bootstrap core CSS -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
      <!-- Material Design Bootstrap -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/css/mdb.min.css" rel="stylesheet">
      <!-- JQuery -->
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <!-- Bootstrap tooltips -->
      <script type="text/javascript"
         src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
      <!-- Bootstrap core JavaScript -->
      <script type="text/javascript"
         src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
      <!-- MDB core JavaScript -->
      <script type="text/javascript"
         src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/js/mdb.min.js"></script>
      <!-- favicon -->
      <link rel="shortcut icon" type="assets/images/png" href="assets/images/favicon.ico"/>
      <!-- stylesheet -->
      <link rel="stylesheet" href="css/style.css"/>
      <link rel="stylesheet" href="css/style-min.css">
      <title>হ্যালো রক্ত | এক ফোঁটা রক্ত, একটি জীবন </title>
   </head>
   <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-danger sticky-top">
         <a class="navbar-brand" href="./">
         <img src="assets/images/logo.png" alt="Logo" style="width:160px; height: 60px;">
         </a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
            aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
            <ul class="navbar-nav ml-auto">
               <!-- <li class="nav-item active">
                  <a class="nav-link" href="#">Home
                      <span class="sr-only">(current)</span>
                  </a>
                  </li> -->
               <li class="nav-item">
                  <a class="nav-link" href="#" style="color: white;">Campaign</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#" style="color: white;">Blood Donor</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#" style="color: white;">Photos</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#" style="color: white;">Contact</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#" style="color: white;">About Us</a>
               </li>
            </ul>
            <ul class="navbar-nav ml-auto nav-flex-icons">
               <li class="nav-item">
                  <a class="nav-link waves-effect waves-light">
                  <i class="fab fa-facebook"></i>
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link waves-effect waves-light">
                  <i class="fab fa-youtube"></i>
                  </a>
               </li>
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                     aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-user"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right dropdown-default"
                     aria-labelledby="navbarDropdownMenuLink-333">
                     <a class="dropdown-item" href="admin/login.php">login</a>
                     <a class="dropdown-item" href="#">Another action</a>
                     <a class="dropdown-item" href="#">Something else here</a>
                  </div>
               </li>
            </ul>
         </div>
      </nav>
      <div id="layoutAuthentication">
         <div id="layoutAuthentication_content">
            <main>
               <div class="container mb-5">
                  <div class="row justify-content-center">
                     <div class="col-lg-5">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                           <div class="card-header">
                              <h3 class="text-center font-weight-light my-4">Login</h3>
                           </div>
                           <div class="card-body">
                              <form action="validate.php" method="post">
                                 <div class="login-box">
                                    <h1>Login</h1>
                                    <div class="form-group">
                                       <i class="fa fa-user" aria-hidden="true"></i>
                                       <input type="text" placeholder="Type Username"
                                          name="username" value="">
                                    </div>
                                    <div class="form-group">
                                       <i class="fa fa-lock" aria-hidden="true"></i>
                                       <input type="password" placeholder="Type Password"
                                          name="password" value="">
                                    </div>
                                    <!-- <div class="form-group">
                                       <i class="fa fa-inbox" aria-hidden="true"></i>
                                       <input type="password" placeholder=" Type Email"
                                       name="email" value="">
                                       </div> -->
                                    <input class="form-group d-flex align-items-center justify-content-between mt-4 mb-0" type="submit"
                                       name="login" value="Sign In">
                                 </div>
                              </form>
                           </div>
                           <div class="card-footer text-center">
                              <div class="small"><a href="register.php">Need an account? Sign up!</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </main>
         </div>
         <!-- <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="col-md-12">
                        <div class="flex-center  m-auto pb-2">
                &copy; HelloRokto.com | Developed By <a href="https://www.feydel.com"><img style="width:30px; height:30px;margin:0px 3px 0px 3px;" src="https://itcl20.com/wp-content/uploads/2020/11/footer_credit.png" alt="Feydel Technology"><strong>Feydel Technology</strong></a>
            
                </div>
            </div>
                </div>
            </footer>
            </div> -->
      </div>
      <footer class="page-footer font-small danger-color pt-4">
         <!-- Footer Links -->
         <div class="container-fluid text-center text-md-left">
            <!-- Grid row -->
            <div class="row">
               <!-- Grid column -->
               <div class="col-md-6 mt-md-0 mt-3">
                  <!-- Content -->
                  <h3 class="text-uppercase">আমরা "হ্যালো রক্ত" পরিবার</h3>
                  <p>আমরা সারা দেশব্যাপী কাজ করছি রক্তদান নিয়ে। আমরা চাই একটা মানুষের হাসিও যেন নষ্ট না হয় রক্তের জন্য। <br>
                     আমরা চাই কেউ প্রাণ হারাবে না রক্তের জন্য। আমাদের সাথে কাজ করার জন্য যোগাযোগ করুন আমাদের <br>ফেইসবুক পেইজে। 
                  </p>
               </div>
               <!-- Grid column -->
               <hr class="clearfix w-100 d-md-none pb-3">
               <!-- Grid column -->
               <div class="col-md-3 mb-md-0 mb-3">
                  <!-- Links -->
                  <h3 class="text-uppercase">যোগাযোগ</h3>
                  <ul class="list-unstyled">
                     <li>
                        <a href="mailto:webmetry@post.com"><i
                           class="fas fa-envelope-open mr-3"></i>hellorokto@admin.com</a>
                     </li>
                     <li>
                        <a href="#!"><i class="fas fa-location-arrow mr-3"></i>65/D, WEST RAJABAZAR, DHAKA-1215</a>
                     </li>
                     <li>
                        <a href="#!"><i class="fas fa-tty mr-3"></i>+880 1303531282</a>
                     </li>
                  </ul>
               </div>
               <!-- Grid column -->
               <!-- Grid column -->
               <div class="col-md-3 mb-md-0 mb-3">
                  <!-- Links -->
                  <h5 class="text-uppercase">সহযোগিতায়</h5>
                  <ul class="list-unstyled">
                     <li>
                        <a href="#!">ই-বার্তা</a>
                     </li>
                     <li>
                        <a href="#!">অপ্সরা</a>
                     </li>
                     <li>
                        <a href="#!">ফেডেল</a>
                     </li>
                  </ul>
               </div>
               <!-- Grid column -->
            </div>
            <!-- Grid row -->
         </div>
         <div class="container">
            <!-- Grid row-->
            <div class="row">
               <!-- Grid column -->
               <div class="col-md-12 py-5">
                  <div class="mb-5 flex-center">
                     <!-- Facebook -->
                     <a class="fb-ic">
                     <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                     </a>
                     <!-- Twitter -->
                     <a class="tw-ic">
                     <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                     </a>
                     <!--Linkedin -->
                     <a class="li-ic">
                     <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                     </a>
                     <!--Instagram-->
                     <a class="ins-ic">
                     <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                     </a>
                  </div>
               </div>
               <!-- Grid column -->
            </div>
            <!-- Grid row-->
         </div>
         <!-- Footer Links -->
         <!-- Copyright -->
         <div class="col-md-12">
            <div class="flex-center pb-2">
               &copy; HelloRokto.com | Developed By <a href="https://www.feydel.com"><img style="width:30px; height:30px;margin:0px 3px 0px 3px;" src="https://itcl20.com/wp-content/uploads/2020/11/footer_credit.png" alt="Feydel Technology"><strong>Feydel Technology</strong></a>
            </div>
         </div>
         <!-- Copyright -->
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
      <script src="js/scripts.js"></script>
   </body>
</html>