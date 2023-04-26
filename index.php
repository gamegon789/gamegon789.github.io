<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>microCoder</title>
  <meta name="description" content="I will create Websites that are tailored to your business model and target audience...">
  <link rel="shortcut icon" href="./img/m.png" type="image/x-icon">
  
  <!-- font-awesome -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- owl.carousel.min.css -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- owl.theme.default.css -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- style.css -->

  <link rel="stylesheet" href="./style.css">

</head>
<body>

  <?php

  $user_ip = getenv('REMOTE_ADDR');
  $geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$user_ip"));
  $country = $geo["geoplugin_countryName"];
  echo $country;

  ?>

  <div id="dismiss"></div>
  <!-- navbar-one -->

  <nav class="sticky bdr">
    <div class="navbar-inner display-flex">
      <div class="nav-left display-flex">
        <a href="https://ellcizin.github.io/"><img src="./img/microCoder.png" alt="logo"></a>
        <input disabled type="text" class="in-search display-n2" placeholder="Search..."><input type="submit" class="sub-search display-n2" value="Coder search" disabled>
      </div>
      <div class="nav-right display-flex">
        <a class="overview active display-n4" href="#overview">Overview</a>
        <a class="faq display-n4" href="#faq">FAQ</a>
        <div class="fixed_left display-n4">
          <a class="butn" href="#popup4">Service <i class="fa-brands fa-servicestack"></i></a>
          <a class="butn" href="#popup2">Contact Seller <i class="far social-icon fa-envelope"></i></a> 
        </div>
        <a class="display-n3 display-n butn" href="#popup">Nav Menu</a>
      </div>
    </div>
  </nav>  

    <!-- navbar-two -->

    <nav>
      <div class="navbar-inner display-flex display-n2">
        <span>Parsonal portfolio</span>
        <span>Buisness Portfolio</span>
        <span>E-Comerec templates</span>
        <span>Blogger templates</span>
        <span class="display-n1">Email Templates</span>
        <span>Technology Templates </span>
        <span class="display-n1">Education Templates</span>
      </div>
    </nav>
  
    <!-- navbar-three -->
  
    <nav>
      <div class="navbar-inner display-flex">
        <div class="nav-right display-flex">
            <span class="display-n5"><i class="fa-solid fa-book-atlas"></i> English</span>
            <span class="display-n4">$USD</span>
            <span class="display-n4"><i class="fa-solid fa-code"></i> Code </span>
            <span class="display-n5"><i class="fa-solid social-icon fa-laptop-code"></i></span>
            <a class="butn butn2" href="#popup3">Seller Skills <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
        </div>
        <div class="nav-left display-flex">
          <div class="social-link display-flex">
              <a href="https://www.facebook.com/ellcizin" target="_blank"><i class="fab fa-facebook-square social-icon"></i></a>
              <a href="https://twitter.com/ellcizin" target="_blank"><i class="fab social-icon fa-twitter-square"></i></a>
              <a href="https://www.instagram.com/ellcizin" target="_blank"><i class="fab social-icon fa-instagram-square"></i></a>
              <a href="https://www.linkedin.com/company/ellcizin" target="_blank"><i class="fab social-icon fa-linkedin"></i></a>
              <a href="https://www.pinterest.com/ellcizin" target="_blank"><i class="fab social-icon fa-pinterest-square"></i></a>
          </div>
        </div>
      </div>
    </nav>

  <!-- popup -->

  <div id="popup">
    <a href="#dismiss" class="close-popup">&times;</a>
    <nav>
        <a href="https://ellcizin.github.io/" class="m-coder"><img src="./img/microCoderw.png" alt="logo"></a>
        <a class="overview active" href="#overview">Overview</a>
        <a class="faq" href="#faq">FAQ</a>
        <a  class="navPopup" href="#popup2">Contact Seller </a>
        <a class="navPopup" href="#popup4">Service</a>
    </nav>
  </div>

  <!-- popup2 -->

  <div id="popup2">
    <?php 
    if(isset($_POST['submit_form']))
        { 
          $name=$_POST['name']; 
          $email=$_POST['email']; 
          $msg=$_POST['msg']; 
          $phone=$_POST['phone']; 
          $FromName="Micro Coder";
          $FromEmail="info@yourdomain.com";
          $ReplyTo=$email;
          $toemail="ashahalam1965@gmail.com";
          $subject="Micro Coder Contact Form "; 
          $message='Name:-'.$name.'<br>Email :-' .$email.'<br> Phone No:-'.$phone.'<br> Message:-'.$msg;
          $headers  = "MIME-Version: 1.0\n";
          $headers .= "Content-type: text/html; charset=iso-8859-1\n";
          $headers .= "From: ".$FromName." <".$FromEmail.">\n";
          $headers .= "Reply-To: ".$ReplyTo."\n";
          $headers .= "X-Sender: <".$FromEmail.">\n";
          $headers .= "X-Mailer: PHP\n";
          $headers .= "X-Priority: 1\n";
          $headers .= "Return-Path: <".$FromEmail.">\n";
    
    if(mail($toemail, $subject, $message, $headers,'-f'.$FromEmail) ){
    
    
      $hide=2;
      echo '<div class="form_message form_success_messagee">
              <a href="https://ellcizin.github.io/" class="close-popup3">&times;</a>
              <h3>Sent Successfuly</h3>
              <p class="p_color">We will reply as <span class="s_success">Soon</span>  as posible</p>
            </div>'; 
    
    } else {
      echo '<div class="form_message form_error_messagee">
              <a href="https://ellcizin.github.io/" class="close-popup3">&times;</a>
              <h3>The server failed</h3>
              <p class="p_color">Please try <span class="s_error">Again</span>  later or Make sure</p>
            </div>';
          } 
    }
    ?>
  
  
  <?php if(!isset($hide)) { ?>

      <div class="popup-content">
        <h2>Contact us</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" autocomplete="off" name="myform" onsubmit="return validateForm()" id="contactForm">
          <div class="f_width" id="namei">
            <input type="text" class=" btn-input" placeholder="*Your full name" name="name">
            <span class="formerror"></span>
          </div>            
          <div class=" f_width" id="emaili">
            <input type="text" class="btn-input"  placeholder="*Email address" name="email">
            <span class="formerror"></span>
          </div>
          <div class=" f_width" id="phonei">
            <input type="tel" class="btn-input"  placeholder="*Your phone number" name="phone">
            <span class="formerror"></span>
          </div>
          <div class="f_t_width hiding" id="msgi">
            <textarea class="btn-input"  placeholder="*Your message" name="msg" ></textarea>
            <span class="formerror"></span>
          </div>
          <div>
            <input  class="btn-input btn-submit" type="submit" value="SUBMIT" name="submit_form">
          </div>
        </form>
        <a href="#dismiss" class="close-popup2">&times;</a>
      </div>
  
  <?php }?> 
  
  
  </div>

  <!-- popup3 -->

  <div  id="popup3">
    <a href="#dismiss" class="close-popup3">&times;</a>
    <b class="b_top">My creative skills &amp; experiences.</b>
    <p><b> I Am A Professional Web Designer.</b> I love the logic and structure of coding and always strive to write elegant and effeicint code.  I always try to code elegant. I have completed many project overtime. I Will Create Responsive Website without any coding provlem.
    </p>
    <div class="progress-bar">
      <div class="bars">
          <div class="display-flex">
              <span>HTML(5)</span>
              <span>90%</span>
          </div>
          <div class="progress progress-one"></div>
      </div>
      <div class="bars">
          <div class="display-flex">
              <span>CSS(3)</span>
              <span>80%</span>
          </div>
          <div class="progress progress-two"></div>
      </div>
      <div class="bars">
          <div class="display-flex">
              <span>Bootstrap(4 &amp; 5)</span>
              <span>85%</span>
          </div>
          <div class="progress progress-three"></div>
      </div>
    </div>
  <p><b> Cereate your parsonal and business portfolio with me.</b></p>
  </div>

  <!-- popup4 -->

  <div id="popup4">
    <a href="#dismiss" class="close-popup3">&times;</a>
    <b class="b_top">Description of service</b>
    <ul>
      <li>Eye-Catching Responsive Landing page design</li>
      <li>Quickly convert <b>PSD to HTML</b> with Responsive design</li>
      <li><b>PSD To Bootstrap</b></li>
      <li><b>JPG To HTML</b></li>
      <li><b>PDF To HTML</b></li>
      <li>Create custom <b>HTML, CSS, Bootstrap</b> templates</li>
      <li><b>W3C Validation</b></li>
      <li><b>Slider/Scroller, Carousel, Sticky Menu, Etc.</b></li>
      <li>All Source Code <b>Upload to Server</b></li>
      <li><b>All code is HAND CODED</b></li>
    </ul>
    <p><b>NOTE:</b> If you are confused and not clear properly what to do then just knock me.</p>
  </div>

  <!-- main-area -->

  <div class="main-area display-flex">
    <div class="main-left">

      <!-- overview -->

      <section id="overview">
        <div class="trac <?php if($country == 'United States') {echo 'd-block';} else if($country == 'United Kingdom') {echo 'd-block';} else {echo 'd-none';} ?> ">
          <div class="carosol">
            <div class="owl-carousel owl-carousel1 owl-theme">
              <a href="" target="_blank">
                <div class="item image-item">
                  <img src="./img/kfc.jpg" alt="kfc">
                </div>
              </a>
              <a href="" target="_blank">
                <div class="item image-item">
                  <img src="./img/lol.jpg" alt="lol">
                </div>
              </a>
              <a href="" target="_blank">
                <div class="item image-item">
                  <img src="./img/netflix.jpg" alt="netflix">
                </div>
              </a>
              <a href=""  target="_blank">
                <div class="item image-item">
                  <img src="./img/xbox.jpg" alt="xbox">
                </div>
              </a>
              <a href="" target="_blank">
                <div class="item image-item">
                  <img src="./img/keto.jpg" alt="keto">
                </div>
              </a>
            </div>  
          </div>
          <p><samp class="display-n6">=====</samp>== You Must Like This Offer ==<samp class="display-n6">=====</samp></p>
        </div>
        <div class="quote <?php if($country == 'United States') {echo 'd-none';}  else if($country == 'United Kingdom') {echo 'd-none';} else {echo 'd-block';} ?> ">
          <p><samp class="display-n5 display-n7 display-n8">I can help you create professionally designed websites in Bootstrap5.</samp> <samp class="display-n6">I will work closely with you to understand your needs and goals so that we can provide the right solution for your company.</samp></p>
        </div>
         <div class="psd display-flex">
           <span>PSD <i class="fa-solid fa-angle-right"></i></span>
           <span>HTML <i class="fa-solid fa-angle-right"></i> </span>
           <span>RESPONSIVE WEBSITE</span>
         
         </div>
         <div class="carosol">          
            <h2> <img src="./img/yousuf.jpg" alt="yousuf" class="m_pic"> I will create Websites that are tailored to your business model and target audience.</h2>

           <div class="owl-carousel owl-carousel2 owl-theme">
             <div class="item">
               <img src="./img/slider1.jpg" alt="slider1">
             </div>
             <div class="item">
               <img src="./img/slider2.jpg" alt="slider2">
             </div>
             <div class="item">
               <img src="./img/slider3.jpg" alt="slider3">
             </div>
           </div>  
         </div>
      </section>
    </div>
    <div class="main-right sticky-two">
      <div class="main-right-inner">
        <div class="modal-btn">
          <a class="butn" href="#popup2">Contact For Order <i class="far social-icon fa-envelope"></i></a>
        </div>
        <!-- /* tab */ -->
        
        <div class="tab">
          <input type="radio" name="tabs" checked id="tab-one">
          <input type="radio" name="tabs" id="tab-two">
          <input type="radio" name="tabs" id="tab-three">
         
          <div class="tab-content tab-content-one">
            <div>
              <div class="display-flex">
                <h3>BASIC</h3>
                <h3>10$</h3>
              </div>
              <p><b>1 Simple</b> page <b>(4 - 5 section)</b> Psd to Html with responsive Bootstrap5</p>
              <div>
                <p><b> <i class="fas fa-history"></i> 2 Day Delivery</b></p>
                <p><b> <i class="fas fa-sync-alt"></i> Unlimited Revisions</b></p>
              </div>
              <ul>
                <li><i class="fas fa-check"></i> Responsive Design</li>
                <li><i class="fas fa-check"></i> W3C Validation</li>
                <li><i class="fas fa-check"></i> Content Upload</li>
                <li><i class="fas fa-check"></i> Source File</li>
                <li><i class="fas fa-check"></i> Nabvar</li>
                <li><i class="fas fa-times"></i> Carousel</li>
                <li><i class="fas fa-times"></i>  Form</li>
              </ul>
              <p><b>NOTE :</b>If you want more than one page, you must contact me.</p>
            </div>
          </div>
          <div class="tab-content tab-content-two">
            <div>
              <div class="display-flex">
                <h3>STANDARD</h3>
                <h3>15$</h3>
              </div>
              <p><b>1 Standard</b> page <b>(4 - 5 section)</b> Psd to Html with responsive Bootstrap5</p>
              <div>
                <p><b> <i class="fas fa-history"></i> 2 Day Delivery</b></p>
                <p><b> <i class="fas fa-sync-alt"></i> Unlimited Revisions</b></p>
              </div>
              <ul>
                <li><i class="fas fa-check"></i> Responsive Design</li>
                <li><i class="fas fa-check"></i> W3C Validation</li>
                <li><i class="fas fa-check"></i> Content Upload</li>
                <li><i class="fas fa-check"></i> Source File</li>
                <li><i class="fas fa-check"></i> Nabvar</li>
                <li><i class="fas fa-check"></i> Carousel</li>
                <li><i class="fas fa-times"></i>  Form</li>
              </ul>
              <p><b>NOTE :</b>If you want more than one page, you must contact me.</p>
            </div>
          </div>
          <div class="tab-content tab-content-three">
            <div>
              <div class="display-flex">
                <h3>PREMIUM</h3>
                <h3>20$</h3>
              </div>
              <p><b>1 Premium</b> page <b>(4 - 5 section)</b> Psd to Html with responsive Bootstrap5</p>
              <div>
                <p><b> <i class="fas fa-history"></i> 2 Day Delivery</b></p>
                <p><b> <i class="fas fa-sync-alt"></i> Unlimited Revisions</b></p>
              </div>
              <ul>
                <li><i class="fas fa-check"></i> Responsive Design</li>
                <li><i class="fas fa-check"></i> W3C Validation</li>
                <li><i class="fas fa-check"></i> Content Upload</li>
                <li><i class="fas fa-check"></i> Source File</li>
                <li><i class="fas fa-check"></i> Nabvar</li>
                <li><i class="fas fa-check"></i> Carousel</li>
                <li><i class="fas fa-check"></i>  Form</li>
            
              </ul>
              <p><b>NOTE :</b>If you want more than one page, you must contact me.</p>
            </div>
          </div>
  
          <nav class="display-flex nav-label">
            <label for="tab-one" class="tab-lavel-one">10$</label>
            <label for="tab-two" class="tab-lavel-two">15$</label>
            <label  for="tab-three" class="tab-lavel-three">20$</label>
          </nav>
        </div>
      </div>
      
  
    </div>
    <div class="main-left">

      <!-- faq -->

      <section id="faq" class="accordion">
        <h2 class="d-none">Faq</h2>
        <div class="accordion-mrg">
          <input type="radio" name="accordion" checked id="accordion-one">
        <label for="accordion-one" class="accordion-lavel">Can I Contact you before placing order? <span class="add">+</span><span class="remove">-</span></label>
        <div class="accordion-content">
          <p>
            Yes, before placing your order, You can always contact me and ask question you have .
          </p>
        </div>
        </div>
        <div class="accordion-mrg">
          <input type="radio" name="accordion" id="accordion-two">
        <label for="accordion-two" class="accordion-lavel">What you need to do first? <span class="add">+</span><span class="remove">-</span></label>
        <div class="accordion-content">
         <p>
          First, you need to buy a domain and hosting. Because, these are needed to host a website.
         </p>
        </div>
        </div>
        <div class="accordion-mrg">
          <input type="radio" name="accordion" id="accordion-three">
        <label for="accordion-three" class="accordion-lavel">Is the landing page responsive?<span class="add">+</span><span class="remove">-</span></label>
        <div class="accordion-content">
         <p>
          Yes , I design responsive landing that works on desktop, Tablet, and mobile device.
         </p>
        </div>
        </div>
        <div class="accordion-mrg">
          <input type="radio" name="accordion" id="accordion-four">
        <label for="accordion-four" class="accordion-lavel">Do you really offer unlimited revisions?<span class="add">+</span><span class="remove">-</span></label>
        <div class="accordion-content">
         <p>
          Yes, I am ready to work on your project until you are completely satisfied with it.
         </p>
        </div>
        </div>
        <div class="accordion-mrg">
          <input type="radio" name="accordion" id="accordion-five">
        <label for="accordion-five" class="accordion-lavel">
          Why you can choose me?<span class="add">+</span><span class="remove">-</span></label>
        <div class="accordion-content">
         <p>
          Because, life time support & money-back guarantee.
         </p>
        </div>
        </div>
        <div class="accordion-mrg">
          <input type="radio" name="accordion" id="accordion-six">
        <label for="accordion-six" class="accordion-lavel">
          Will you accept cash-on-delivery payments?<span class="add">+</span><span class="remove">-</span></label>
        <div class="accordion-content">
         <p>
          Yes, I will accept cash-on-delivery payments. 
         </p>
        </div>
        </div>
      </section>

      <!-- footer -->

      <section id="footer">
        <h2 class="d-none">End</h2>
        <div>
          <img src="./img/microCoder.png" alt="logo">
        </div>
          <div>
            <div>
              <i class="fab social-icon fa-whatsapp"></i>
              <span>01888021696</span>
            </div>
            <i class="far social-icon fa-envelope"></i>
            <span>ashahalam1965@gmail.com</span>
          </div>
  
        <div class="social-link display-flex">
          <a href="https://www.facebook.com/ellcizin" target="_blank"><i class="fab fa-facebook-square social-icon"></i></a>
            <a href="https://twitter.com/ellcizin" target="_blank"><i class="fab social-icon fa-twitter-square"></i></a>
            <a href="https://www.instagram.com/ellcizin" target="_blank"><i class="fab social-icon fa-instagram-square"></i></a>
            <a href="https://www.linkedin.com/company/ellcizin" target="_blank"><i class="fab social-icon fa-linkedin"></i></a>
            <a href="https://www.pinterest.com/ellcizin" target="_blank"><i class="fab social-icon fa-pinterest-square"></i></a>
        </div>
        
        <div class="display-flex">
          <span> <i class="fa-solid fa-book-atlas"></i> English</span>
          <span>$USD</span>
          <span><i class="fa-solid fa-code"></i> Code </span>
        </div>
        <div>
          <span>&copy; microCoder 2022</span>
        </div>
      </section>
    </div>
  </div>


  <!-- jquery.min.js -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!-- owl.carousel.min.js -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>



  <!-- respond.min.js -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js" integrity="sha512-qWVvreMuH9i0DrugcOtifxdtZVBBL0X75r9YweXsdCHtXUidlctw7NXg5KVP3ITPtqZ2S575A0wFkvgS2anqSA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!-- html5shiv.min.js -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" integrity="sha512-UDJtJXfzfsiPPgnI5S1000FPLBHMhvzAMX15I+qG2E2OAzC9P1JzUwJOfnypXiOH7MRPaqzhPbBGDNNj7zBfoA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!-- selectivizr-min.js -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js" integrity="sha512-0mXreXYrXoy9laHoypsAOjuSCqh57vY+kIdE46k8Hw0yRY1EhJyHWUEAqfHOTrPkBpsbO39/ZPw5HITv8mLVOA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!-- script.js -->

  <script src="./script.js"></script>
</body>
</html>