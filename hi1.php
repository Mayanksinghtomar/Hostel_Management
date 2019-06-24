  <?php
  session_start();
  ?>
  <!DOCTYPE html>
  <html>
  <title>After Login</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="Social_buttons12.css" >
  <link rel="stylesheet" href="Styles.css" >
  <script src = "hi1.js"></script>
  <script src = "registration.js"></script> 
  <style>
  body,h1,h2,h3,h4,h5,h6 {font-family:Arial, Helvetica, sans-serif, Times new roman}
  * {box-sizing: border-box}
  .mySlides {display: none}
  img {vertical-align: middle;}
  </style>
  <body>
  <div class="topnav">
  <a><?php
  echo "Welcome : " . $_SESSION["uname"]. "<br>";
  ?></a>
  <a href="signout.php" style ="float:right">Sign out</a>
  </div>
  <br>
  <div style="margin-left:150px">
  <div style="margin-right:150px">
    <!-- Slideshow Header -->
  <h1><strong><font color= "green">SSN Hostel</font></strong></h1>
  <div class="w3-content w3-section" style="max-width:750px" style="padding:10px 60px">
    <img class="mySlides" src="hostel1.jpg" style="max-width:100%">
    <img class="mySlides" src="hostel2.jpg" style="max-width:100%">
    <img class="mySlides" src="hostel3.jpg" style="max-width:100%">
    <img class="mySlides" src="hostel4.jpg" style="max-width:100%">
    <img class="mySlides" src="hostel5.jpg" style="max-width:100%">
    <img class="mySlides" src="hostel6.jpg" style="max-width:100%">
    <img class="mySlides" src="hostel7.jpg" style="max-width:100%">
    <img class="mySlides" src="hostel8.jpg" style="max-width:100%">
  </div>
  <script>
  var myIndex = 0;
  carousel();
  function carousel() {
      var i;
      var x = document.getElementsByClassName("mySlides");
      for (i = 0; i < x.length; i++) {
         x[i].style.display = "none";  
      }
      myIndex++;
      if (myIndex > x.length) {myIndex = 1}    
      x[myIndex-1].style.display = "block";  
      setTimeout(carousel, 2000); // Change image every 2 seconds
  }
  </script>
  <hr>
      <h4><strong>The space</strong></h4>
  <table border="0">
  <tr>
  <td style="padding:10px 20px"><i class="fa fa-fw fa-male"></i> Max people: 4</td>
  <td style="padding:10px 80px"><i class="fa fa-fw fa-clock-o"></i> Check In: Any Time</td>
  </tr>
  <tr>
  <td style="padding:10px 20px"><i class="fa fa-fw fa-bed"></i> Bedrooms: 1</td>
  <td style="padding:10px 80px"><i class="fa fa-fw fa-clock-o"></i> Check Out: Any Time</td>
  </tr>
  <tr>
  <td style="padding:10px 20px"><i class="fa fa-fw fa-bath"></i> Bathrooms: 1</td>
  <td style="padding:10px 80px"></td>
  </tr>
  </table>     
      <hr>    
      <h4><strong>Amenities</strong></h4>
  <table border="0">
  <tr>
  <td style="padding:10px 20px"><i class="fa fa-fw fa-shower"></i> Shower</td>
  <td style="padding:10px 130px"><i class="fa fa-fw fa-wifi"></i> WiFi</td>
  </tr>
  <tr>
  <td style="padding:10px 20px"><i class="fa fa-fw fa-tv"></i> TV</td>
  <td style="padding:10px 130px"><i class="fa fa-fw fa-cutlery"></i> Hostel Mess</td>
  </tr>
  <tr>
  <td style="padding:10px 20px"><i class="fa fa-fw fa-thermometer"></i> Heating</td>
  <td style="padding:10px 130px"><i class="fa fa-fw fa-wheelchair"></i> Accessible</td>
  </tr>
  </table>
      <hr>    
      <h4><strong>Extra Info</strong></h4>
      <p>Staff Quarters, Guest House & Hostels Faculty may stay with their family in the Staff quarters. The Guest house is available for visitors. The SSN hostels are nothing less than a boon for the non-resident students of Chennai. Spacious room, excellent water, modern kitchen and dining facilities mark the SSN hostels. The standout feature is definitely the 24-hour Internet facility, which enable the inmates to spend their time constructively.</p><hr>    
      <h4><strong>Rules</strong></h4>
      <p>Complaint form/Register to be provided to students. Any cleanliness matter to be brought to the notice of the Campus Administrator/Rector.</p>
      <p>Mess to be informed about non-availability of students.</p>
      <p>No gambling of any kind shall be allowed on the premises of the hostel. No student shall bring or store any firearm, ammunition, explosive and inflammable goods on the premises of the hostel.</p>
      <p><u>Timings for Mess:</u></p>
      <p>Breakfast - 6:50 am to 8:15 am</p>
      <p>Lunch - 11:30 am to 1:30 pm</P>
      <p>Dinner - 7:00 pm to 8:30 pm</p>
      <p>These timings shall be strictly followed by the hostellers.</p>
      <p>Attendance of the students in the hostel will be taken strictly between 10.00 pm to 10.30 pm.</p>
      <p>The Management has the right to discontinue Hostel accommodation given to a student
  on account of misconduct and/or violation of rules and regulations.</P>
      <p><strong>Please Fill in the below details to Book Room.</strong></p>
    <hr>
      <h3>Book Room</h3>   
      <hr>
  <form action="book.php" method="post" onsubmit="return confirm('Do you want to Book Room?')">
  <TABLE BORDER = 0 ALIGN = 'CENTER' STYLE = "WIDTH:50%" >
  <tr>
  <td><p><label><i class="fa fa-calendar-check-o"></i> Check In</label></p></td>    
  <td><input type="date" class = "date" name="checkin" required></td>
  </tr>
  <tr>
  <td><p><label><p><label><i class="fa fa-calendar-o"></i> Check Out</label></p></td>    
  <td><input type="date" class = "date" name="checkout" required></td>
  </tr>
  <tr>
  <td> <p><label><i class="fa fa-male"></i> Name</label></p></td>    
  <td> <input type="text" name="name" required placeholder="Enter Your Name"></td>
  </tr>
  <tr>
  <td> <p><label><i class="fa fa-phone"></i> Contact</label></p></td>    
  <td> <input type="tel" name="contact" minlength="10" maxlength="10" id="phone" placeholder="Enter Contact" onkeyup="phonevalidate()" required> </TD>
  <TD STYLE = "PADDING:10PX"><span id='message3'></span></td>
  </tr>      
  <tr>
  <td></td>    
  <td><p><button class="button4" type="submit"><i class="fa fa-search w3-margin-right"></i>Book</button></p></td>
  </tr>
  </table>
  </form>
  <p align = "center" class="container" style="background-color:#f1f1f1" style="margin-left:20px">
  <strong><font face = "Times New Roman" >FOR MORE DETAILS    &copy; Mayank Singh</font></strong><BR><BR>
  <a href="https://www.facebook.com/" class="fa fa-facebook"></a>
  <a href="https://twitter.com/MayankS76682259" class="fa fa-twitter"></a>
  <a href="https://plus.google.com/" class="fa fa-google"></a>
  <a href="https://www.linkedin.com/learning/login" class="fa fa-linkedin"></a>
  <a href="#" class="fa fa-whatsapp"></a>
  </p>  
  </body>
  </html>