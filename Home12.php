  <?php
  session_start();
  ?>
  <html>
  <head>
  <link rel="stylesheet" href="Home.css" >
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" >
  <link rel="stylesheet" href="Social_buttons.css" >
  <link rel="stylesheet" href="Styles.css" >
  <script src = "registration.js"></script> 
  </head>
  <title>SSNCE Hostel Management System</title>
  </head>
  <body>
  <div class="header">
  <a href="http://www.ssn.edu.in/"><IMG SRC="SSN.JPG" WIDTH = "120" HEIGHT="55"></a>
    <h2><strong><font color= "green">SSN College of Engineering Hostel Management System</font></strong></h2>
    <p>Old Mahabalipuram Road, Kalavakkam, Tamil Nadu 603110</p>
  </div>
  <p align="right"><font color="red"><?php
  echo $_SESSION["wpass"]. "<br>";
  ?></font></p>
  <div class="topnav">
  <a href="http://www.ssn.edu.in/">About</a>
  <a href="Registration.html">Registration</a>  
  <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;" class="button3" style="vertical-align:middle"><span>Login</font></button>
  <div id="id01" class="modal">
    <form class="modal-content animate" action="Login1.php" method="post">
      <div class="imgcontainer">
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
        <img src="avatar.jpg" alt="Avatar" class="avatar">
      </div>
      <div class="container">
        <label for="uname"><b>Registration No.</b></label>
        <input type="text" placeholder="Enter Registration Number" name="uname"  required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" onkeyup="check()" required><span id='message'></span>
         
        <button type="submit" class = "button4">Login</button>
        <label>
          <input type="checkbox" name="remember"> Remember Me
        </label>
      </div>
      <div class="container" style="background-color:#f1f1f1">      
        <button type="button" class="cancelbtn" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <span class="psw">Forgot password?</span>
      </div>
    </form>
  </div>
  </div>
  <script>
  var modal = document.getElementById('id01');
  window.onclick = function(event) {
      if (event.target == modal) {
          modal.style.display = "none";
      }
  }
  </script>
  <div class="row">
    <div class="column side">
      <h2><font face="Arial" color="green">Notifications</font></h2>
      <p><font color="red"><marquee direction = "up" scrollamount="2" height="300" width = "80%">Notificatons will be updated soon.</marquee></font></p>
    </div>
    <div class="column middle">
      <h2><font face="Arial" color="green">SSN Hostel</font></h2>
      <p><font face="Helvetica">Our hostels are convenient, comfortable homes away from home with spacious rooms and ample storage. Internet access, via w-fi or wired connections, keeps our students plugged into online educational resources.</font></p>
      <p><font face="Helvetica">Each hostel building is designed to be an independent unit with its own kitchen, dining hall, reading room/library, television and telephone facilities.</font></p>
  <P><font face="Helvetica">There are separate hostels for boys and girls.</font></p>
    </div>
  <br><br>
  <div class="column middle">
      <h2><font face="Arial" color="green">Staff Quarters</font></h2>
      <p><font face="Helvetica">On-campus accommodation is allotted to faculty and other staff on the basis of seniority and availability. The college provides daily transport to Kelambakkam for shopping. </font></p>    
    </div>
  </div>
  <br>
  <br>
  <p align = "center" class="container" style="background-color:#f1f1f1">
  <b><font face = "Times New Roman" >FOR MORE DETAILS    &copy; Mayank Singh</font></b><BR><BR>
  <a href="https://www.facebook.com/" class="fa fa-facebook"></a>
  <a href="https://twitter.com/MayankS76682259" class="fa fa-twitter"></a>
  <a href="https://plus.google.com/" class="fa fa-google"></a>
  <a href="https://www.linkedin.com/learning/login" class="fa fa-linkedin"></a>
  <a href="#" class="fa fa-whatsapp"></a>
  </p>
  </body>
  </html>

