<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Website Title</title>

    <link rel="stylesheet" 
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap">

    <link rel="stylesheet" 
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <link rel="stylesheet" 
    href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="icon" href="../images/logo.png">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js">
    </script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
    </script>

    <link rel="stylesheet" href="style.css">

    <style type="text/css">
    * {
            margin: 0px;
            padding: 0px;
      }

    body {
            background: #000;
            background-position: center;
            background-size: cover;
            font-family: monospace;
            margin-top: 0px;
            overflow-x: hidden;
    }

    #nav-bar {
      background: #696969;
    }

    .register {
            width: 200px;
            background-color: #d0a248;
            margin: auto;
            color: #000;
            padding: 5px 0px 2px 0px;
            text-align: center;
            border-radius: 15px 15px 0px 0px;

    }

    .regform {
        background-color: #696969;
        width: 400px;
        margin: auto;
        border-radius: 20px 20px 20px 20px;
        color: #ffffff;
    }

    form {
        padding: 10px;
    }

    a {
      text-decoration: none;
    }

    a:hover
    {
        text-decoration: none;
        color: #d0a248;
    }

    .form {
           margin-left: 25px;
           margin-top: 30px;
           width: 125px;
           color: whitesmoke;
           font-size: 18px;
           font-weight: 200;
    }

   .reg-btn {
            margin-left: 40%;
            font-weight: 900;
            width: 100px;
            border-radius: 20px;
    }

    .reg-btn:hover
    {
        background-color: #d0a248;
    }

    .footer
    {
        margin-top: -25px;
        background-color: whitesmoke;
    }

    </style>
</head>

     <body>
        <section id="nav-bar">
          <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <a class="navbar-brand" href="../index.html">
                        <img src="../images/logo.png" alt="logo">
                    </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                      <a class="nav-link" href="../index.html">HOME</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="../index.html#about">ABOUT</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">FORM</a>
                    </li>
              <!--  <li class="nav-item">
                      <a class="nav-link" href="../vote">VOTE</a>
                    </li> -->
                    <li class="nav-item">
                      <a class="nav-link" href="../index.html#contact">CONTACT</a>
                    </li>
                  </ul>
                </div>
                </div>
              </nav>
        </section> <br> <br>

    <div class="register"> <h5>REGISTRATION FORM</h5> </div>
    <div class="regform">

        <form action="register.php" method="POST">

    <div id="fullname">
        <p> Full Name: </p>
                <input class="form-control" type="text" placeholder="Your Full Name" name="fullname" required>
    </div> <br>

        <div>
        <p> Age: </p>
            <input class="form-control" type="number" placeholder="Your Age" name="age" required>
        </div>  <br>

        <div>
        <p> Phone Number: </p>
                <input class="form-control" data-parsley-type="number" type="text" placeholder="Phone number" name="phone" required>
        </div> <br>

        <div>
        <p> Whatsapp Number: </p>
                <input class="form-control" data-parsley-type="number" type="text" placeholder="Whatsapp number" name="whatsapp" required>
        </div> <br>

     <div>
        <p> Email: </p>
                <input class="form-control" type="email" placeholder="Your Email" name="email" required>
     </div> <br>

     <div>
        <p> State of Origin: </p>
                <input class="form-control" type="text" placeholder="State of Origin" name="states" required>
     </div> <br>

     <div>
        <p> State of Residence: </p>
                <input class="form-control" type="text" placeholder="State of Residence" name="residence" required>
     </div> <br>

     <div>
        <p> How did you get to know about the contest? </p>
        <select name="how" id="option" required>
                <option disabled="disabled" selected="selected"  value="choose">--Choose--</option>
                <option value="facebook">Facebook</option>
                <option value="instagram">Instagram</option>
                <option value="whatsapp group">Whatsapp group</option>
                <option value="whatsapp message">Whatsapp message</option>
                <option value="whatsapp status">Whatsapp status</option>
        </select>
     </div> <br>

    <p style="color:#d0a248;">*DO ENSURE YOU COMPLETED ALL FIELDS CORRECTLY.</p> <br>

    <input type="checkbox" required> By registering, I accept that I have fully read and
        understood all stated <a href="../index.html#terms">terms and conditions</a>. <br> <br>

    <button class="reg-btn" type="submit" value="submit">SUBMIT</button>

      </form>

        </div> <br> <br>

        <section class="footer">
                <div class="contacts">
                  <div class="row">
                  <span class="col-md-4"> <br>
                  <a href=""><img src="./img/phone-logo.png" alt=""> +0-000-000-000</a>
                  </span> <br> <br> <br>
                  <span class="col-md-4"> <br>
                  <a href="mailto:mbbbpageant@gmail.com"><img src="./img/email-logo.png" alt=""> email@gmail.com </a>
                  </span> <br> <br>
                  <span class="col-md-4"> <br>
                  <a href="https://api.whatsapp.com/send?phone=+00000000000"><img src="./img/whatsapp-logo.png" alt="">
                    <a href="https://api.whatsapp.com/send?phone=+00000000000"> Click to send a message</a></a>
                  </span>
                </div>
                </div> <br> <br>
  
              <div class="social text-center">
                <div class="row">
                  <span class="col-md-4"> <br>
                <a href="https://www.instagram.com"><img src="./img/instagram-logo.png" alt=""></a>
                  </span> <br> <br>
                  <span class="col-md-4"> <br>
                <a href="https://www.facebook.com"><img src="./img/facebook-logo.png" alt=""></a>
                  </span> <br> <br>
                <span class="col-md-4"> <br>
                <a href="https://www.twitter.com"><img src="./img/twitter-logo.png" alt=""></a>
                </span>
              </div> <br> <br>
  
              <div class="copyright">
                <div class="row">
                        <div class="col-md-4">
                                <h5 style="color:#fff"> QUICK LINKS </h5>
                              <a href="../index.html">HOME</a> <br>
                              <a href="../index.html#about">ABOUT</a> <br>
                              <a href="#">FORM</a> <br>
                             <!-- <a href="../vote">VOTE</a> <br> -->
                              <a href="../index.html#contact">CONTACT</a>
                        </div>
              <p class="col-md-4"> <br> Copyright © <script> document.write(new Date().getFullYear());</script> Brand. All rights reserved.</p>
              <button onclick="topFunction()" id="top-btn" title="Go to top"><img src="./img/arrow2.png" alt=""></button>
              
              </div>
            </div>
          </section>

          <script>
          //Get the button:
          mybutton = document.getElementById("top-btn");
          
          // When the user scrolls down 20px from the top of the document, show the button
          window.onscroll = function() {scrollFunction()};
          
          function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
              mybutton.style.display = "block";
            } else {
              mybutton.style.display = "none";
            }
          }
          
          // When the user clicks on the button, scroll to the top of the document
          function topFunction() {
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
          }
        </script>
</body>
</html>
