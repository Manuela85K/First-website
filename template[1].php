<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title>Little Genius Playground</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Joan&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
</head>
<body>
    <section class="header">
        <nav>
            <a href="template.html"><img class="nav-img" src="images/logo.jpg" alt="Little Genius Playground"></a> 
            <span>Little Genius Playground</span>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="">HOME</a></li>
                    <li><a href="">ABOUT US</a></li>
                    <li><a href="">ENROLLMENT</a></li>
                    <li><a href="">GALLERY</a></li>
                    <li><a href="">RESOURCES</a></li>
                    <li><a href="">CONTACT</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
 <div class="text-box">
      <hi> Seattle's Favorite Home Daycare</hi>
      <p>Our caregivers are trained, ready, and excited <br> to care for your children.</p>
      <a href="" class="hero-btn"> Visit Us To Know More</a>
 </div>       
 </section>

 <!-----------Enrollment------------>

 <section class="Enrollment">
    <h1>ENROLLMENT</h1>
    <p>Our mission at Little Genius Playground is that high quality early learning is accessible to all families.</p>

    <div class="row">
        <div class="enrollment-col">
            <h3>Infant</h3>
            <p>0-24 months
                $2800.
                Our experienced caregivers will give your baby lots of affection and provide stimulating activities to help with their development.
            </p>
        </div>
        <div class="enrollment-col">
            <h3>Toddler</h3>
            <p>24-48 months
                $2000.
                Our caregivers encourage developing communication skills by engaging your child in conversations and giving them the tools to navigate conflict respectfully.</p>
        </div>
    </div>
 </section>

 <!-------gallery-------->

 <section class="Gallery">
    <h1> GALLERY</h1>

    <div class="gallery">
        <a href="images/happyhappy.jpg"> <img src="images/happyhappy.jpg"></a>
        <a href="images/cookie.jpg"> <img src="images/cookie.jpg"></a>
        <a href="images/read.jpg"> <img src="images/read.jpg"></a>
        <a href="images/learnbaby.jpg"> <img src="images/learnbaby.jpg"></a>
        <a href="images/playtime.jpg"> <img src="images/playtime.jpg"></a>
        <a href="images/rolling.jpg"> <img src="images/rolling.jpg"></a>
        <a href="images/girl.jpg"> <img src="images/girl.jpg"></a>
        <a href="images/playground.jpg"> <img src="images/playground.jpg"></a>
    </div>
 </section>

 <!-------resources--------->

 <section class="Resources">
    <h1>RESOURCES</h1>
    <p>Familly Resources</p>

    <div class="row">
        <div class="resources-col">
            <h3>Family Handbook</h3>
            <p> Lorem ipsum sit dolor et rtumin lit sec</p>
        </div>
        <div class="resources-col">
            <h3>Tuition Assistance Resources</h3>
            <p> Lorem ipsum sit color et refust sur les met.</p>
        </div>
        <div class="resources-col">
            <h3>Anti-Bias Education Resources</h3>
            <p>Lorem ipsum met sur cosecteur elit.</p>
        </div>
    </div>
 </section>

 <!-------testimonials-------->

 <section class="Testimonials">
    <h1>WHAT OUR CLIENTS SAY</h1>
    <p>Testimonials from past and current parents.</p>

    <div class="row">
        <div class="testimonials-col">
            <div>
                <p>My daughter has been enrolled in this daycare since the age of 1. The staff does an excellent job taking care of all children.</p>
                <h3>Amy Gloom</h3>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
        </div>
        <div class="testimonials-col">
            <div>
                <p>I would recommend this home daycare to anyone. My children had a great experience there.</p>
                <h3>Eric LeGrand</h3>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
            </div>
        </div>
    </div>
 </section>

 <!-------Call To Action--------->

 <section class="cta">
    <h1> Enroll For Our Various Classes</h1>
    <a href="" class="hero-btn">CONTACT US</a>

    <br>
    <h2 class="subheader">Contact Lauren Greene</h2>
       
<!-- START HTML FORM -->
<form action="template.php" method="post">
<div>
    <label>
        Name:<br /><input type="text" name="Name" required="required" placeholder="Full Name (required)" title="Name is required" tabindex="10" size="44" autofocus />
    </label>
</div>
<div>	
    <label>
        Email:<br /><input type="email" name="Email" required="required" placeholder="Email (required)" title="A valid email is required" tabindex="20" size="44" />
    </label>
</div>
<!-- below change the HTML to your form elements - only 'Name' & 'Email' (above) are significant -->
<div>	
    <label>
        How Did You Hear About Us?:<br />
        <select name="How_Did_You_Hear_About_Us?" required="required" title="How You Heard is required" tabindex="30">
            <option value="">Choose How You Heard</option>
            <option value="Phone">Phone</option>
            <option value="Web">Web</option>
            <option value="Magazine">Magazine</option>
            <option value="A Friend">A Friend</option>
            <option value="Other">Other</option>
        </select>
    </label>
</div>

    <div>	
    <fieldset>
        <legend>Would you like to join our mailing list?</legend>
        <input type="radio" name="Join_Mailing_List?" value="Yes" 
        required="required" title="Mailing list is required" tabindex="50"  
        /> Yes <br />
        <input type="radio" name="Join_Mailing_List?" value="No" /> No <br />
    </fieldset>
</div>
<div>	
    <label>
        Comments:<br /><textarea name="Comments" cols="36" rows="4" placeholder="Your comments are important to us!" tabindex="60"></textarea>
    </label>
</div>	
<div class="g-recaptcha" data-sitekey="6LeDaSoUAAAAACnEiqA3QAkiRU-Q_wtk0vuBa_OX"></div>
<div>
    <input type="submit" value="submit" />
</div>
</form>
<!-- END HTML FORM -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://www.google.com/recaptcha/api.js?hl=en"></script>
    <script>
        /**
        * requires reCAPTCHA so user doesn't lose form data 
        *
        * https://stackoverflow.com/questions/27706594/how-can-i-make-recaptcha-a-required-field
        * 
        * In this version, jQuery is required and code will find first form on page and require 
        * the reCAPTCHA for that form using document.forms[0]
        */
    
        function checkRecaptcha() {
            res = $('#g-recaptcha-response').val();
            if (res == "" || res == undefined || res.length == 0)
                return false;
            else
                return true;
        }
        $(function() {
            let thisForm = document.forms[0];
            $(thisForm).submit(function(e) {            
                if(!checkRecaptcha()) {
                    alert("Please confirm you are not a robot.");
                    return false;
                }
            });
        }); 
    </script>
    
 </section>

<!---------Footer---------->

<section class="footer">
    <h4>ABOUT US</h4>
    <p>My name is Lauren Greene. I have been working with children since 2003. Little Genius Playground is an Early Childhood home daycare located in Seattle, WA. We are a dedicated staff who strives to provide quality education to children. </p>
    

    <p>

    Disclaimer / Privacy Notice

_____Little Genius Playground_________ has made reasonable efforts to ensure the accuracy of the information throughout this website. However, _____Little Genius Playground_________ reserves the right to make appropriate changes in information found on this website.  

Nothing contained in this website shall be construed as contractual rights. ________Little Genius Playground______ has many links to other websites. These include links to websites operated by other government agencies, nonprofit organizations and private businesses.  _____Little Genius Playground_________ does not endorse any content or linked materials found on websites or web services provided by and/or developed by ___Little Genius Playground___________.  

When linked to another site, you are no longer on the ____Little Genius Playground__________ website and this Privacy Notice will not apply. When linked to another website, you are subject to the privacy policy of that new site. _______Little Genius Playground______ does not warrant the accuracy, reliability or timeliness of any information published by this system, nor endorses any content, viewpoints, products, or services linked from this system, and shall not be held liable for any losses caused by reliance on the accuracy, reliability or timeliness of such information. Portions of such information may be incorrect or not current. 

Any person or entity that relies on any information obtained from this system does so at their own risk.




</section>

<footer>
    <p>&copy; 2022 by Manuela Kay-Arden, All Rights Reserved ~ <a href="https://validator.w3.org/nu/?doc=http://example.com/index.html" target="_blank">Check HTML</a> ~ <a href="https://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Check CSS</a></p>
</footer>










 <!---------JavaScript for Toggle Menu--------->
 <script>
    var navLinks= document.getElementById("navLinks");
    function showMenu(){
        navLinks.style.right = "0";
    }
    function hideMenu(){
        navLinks.style.right = "-200px";
    }
 </script>
    
</body>
</html>
