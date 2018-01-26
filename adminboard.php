<!DOCTYPE html>
<html>
<title>Admin Dashboard</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
#details {width:100%;text-align: right;}
#state, #city, #alpha, #num {
    padding: 8px;
    margin: 5px;
    border-radius: 5px;
    text-align: center;
}

#state {
  width: 50px;
}

#city {
  width: 50px;
}

#alpha {
  width: 50px;
}

#num {
  width: 90px;
}

#submit {
  margin-top: 5px;
  padding-top: 8px;
  padding-bottom: 8px;
  background-color: #f0f0f0;
  border-radius: 5px;
}
</style>
<body class="w3-theme-l5">

<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4" title="Return to Home Page"><i class="fa fa-home w3-margin-right"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Latest Updates"><i class="fa fa-globe"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Account Settings"><i class="fa fa-user"></i></a>
  <a href="mail.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Messages"><i class="fa fa-envelope"></i><span class="w3-badge w3-right w3-small w3-green">1</span></a>
  <div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-button w3-padding-large" title="Notifications"><i class="fa fa-bell"></i><span class="w3-badge w3-right w3-small w3-green">2</span></button>
    <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:300px">
      <a href="#" class="w3-bar-item w3-button">One New Update</a>
      <a href="#" class="w3-bar-item w3-button">2 New Messages</a>
    </div>
  </div>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="My Account"><img src="https://www.w3schools.com/w3images/avatar2.png" class="w3-circle" style="height:25px;width:25px" alt="Avatar"></a>
 </div>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large">
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">My Profile</a>
</div>

<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-col m5">
      <!-- Profile -->
      <div class="w3-card w3-round w3-white">
        <div class="w3-container">
         <h4 class="w3-center">My Profile</h4>
         <p class="w3-center"><img src="https://www.w3schools.com/w3images/avatar3.png" class="w3-circle" style="height:106px;width:106px" alt="User Image"></p>
         <hr>
         <p><i class="fa fa-qrcode fa-fw w3-margin-right w3-text-theme"></i><b>Aadhaar Number:</b> <span  id="details">671645875487</span></p>
         <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i><b>Name:</b> <span  id="details">FirstName LastName</span></p>
         <p><i class="fa fa-id-card-o fa-fw w3-margin-right w3-text-theme"></i><b>License Number:</b> <span  id="details">456789123</span></p>
         <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i><b>Place:</b> <span  id="details">City, State</span></p>
         <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i><b>Date of Birth:</b> <span  id="details">DD/MM/YYYY</span></p>
        </div>
      </div>
      <br>





      <!-- Alert Box -->
      <div class="w3-container w3-display-container w3-round w3-theme-l4 w3-border w3-theme-border w3-margin-bottom w3-hide-small">
        <span onclick="this.parentElement.style.display='none'" class="w3-button w3-theme-l3 w3-display-topright">
          <i class="fa fa-remove"></i>
        </span>
        <p><strong>Note:</strong></p>
        <p>There are unread notifications!</p>
      </div>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-col m7">
      <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card w3-round w3-white">
            <div class="w3-container w3-padding">
              <h6 class="w3-opacity">Upload Vehicle Number Plate pic here</h6>
              <button type="button" class="w3-button w3-theme"><i class="fa fa-upload"></i> Upload Image</button>
            </div>
          </div>
        </div>
      </div>
      <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card w3-round w3-white">
            <div class="w3-container w3-padding">
              <h6 class="w3-opacity">Enter Vehicle Registration Number Manually</h6>
              <form>
                <input type="text" id="state" placeholder="XX"/>
                <label>-</label>
                <input type="text" id="city" placeholder="##"/>
                <label>-</label>
                <input type="text" id="alpha" placeholder="YY"/>
                <label>-</label>
                <input type="text" id="num" placeholder="####"/>
                <button type="submit" id="submit">Search</button>
                <br>
                <p id="error"></p>
              </form>
              <button type="button" class="w3-button w3-theme"><i class="fa fa-check"></i>  Submit</button>
            </div>
          </div>
        </div>
      </div>
    <!-- End Right Column -->
    </div>



  <!-- End Grid -->
  </div>

<!-- End Page Container -->
</div>
<br>

<!-- Footer -->
<footer class="w3-container w3-theme-d3 w3-padding-16">
  <h5>The SIH2018 Project</h5>
  <p>&copy;2017-18 PriSag WebApp Devs</p>
</footer>

<footer class="w3-container w3-theme-d5">
  <p>Powered by <a href="prisag.tk" target="_blank">PriSag</a></p>
</footer>

<script>
// Accordion
function myFunction(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-theme-d1";
    } else {
        x.className = x.className.replace("w3-show", "");
        x.previousElementSibling.className =
        x.previousElementSibling.className.replace(" w3-theme-d1", "");
    }
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

</body>
</html>
