<!DOCTYPE html>
<html>
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 

  <link rel="stylesheets" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script>
  function formvalidation(){
    let x=document.forms["forms2"]["name"].value;
    if(x==" "){
      alert("Name must be filled out");
      return false;
    }
  }
  </script>
<style>
  .heading {
    text-align: center;
    font-family:'sans-serif', 'Times New Roman', Times, serif;
  }
  .topnav{
    text-align: center;
  }
  ol {
    background: #ff9999;
    padding: 20px;
  }
  
  ul {
    background: #3399ff;
    padding: 20px;
  }
  
  ol li {
    background: #ffe5e5;
    color: darkred;
    padding: 5px;
    margin-left: 35px;
  }
  
  ul li {
    background: #cce5ff;
    color: darkblue;
    margin: 5px;
  }
 ul li{
  margin: 0;
  font-family: "Times New Roman ",times, serif;
  background-image: linear-gradient(pink);
 }
 p.a{
  font-family: "Times New Roman ",times, serif;
  text-align: center;
  color:#ff9999
  
 }


.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;.
}
.h1{
  background-image:linear gradient( rgb(253, 240, 255),rgb(255, 251, 0));
  text-align: center;
  color:red;
}
.row{
  padding: 10px;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<form action="signup.php" method="POST" id="Forms2" name="Forms">
</head>
<body>
<?php
if($userexists){
  echo "User already exists";
}
?>
<?php
if($registered){
  echo "User successfully registered";
}
?>
  <p class="a">
   <div class="heading"><h1>God's Own Country-Kerala </h1></div> 
  </p>
<div class="topnav">
  <a class="nav-link active" href="header.php">Home</a>
  <a href="nav-link" href=signup.php>Signup</a>
  <a href="#Login">Login</a>
  <a href="#about">About</a>
</div>

<div class="row">
  <div class="col-md-4">
    <img src="Pic1.jpg" alt="JatayuEarthcentre" height="250" width="400">
    <div class="desc">Jatayu Earths Center Incorporates all aspects of tourism, offering a complete God’s own Country experience to each one of you. Spread across 65 acres of land, Jatayu Earth's Center has elegant and mesmerizing elements that lures you for a visit!

    </div>
  </div>
  <div class="col-md-4">
    <img src="Pic2.jpeg" alt="Kovalam" height="250" width="400">
    <div class="desc">Kovalam is a beach lover's paradise, with three crescent-shaped beaches offering golden sands, clear waters, and stunning views. You can relax under the palm trees, enjoy a rejuvenating ayurvedic massage, or indulge in some water sports. Kovalam is also a cultural hub, with a historic lighthouse, a rock-cut temple, and a vibrant fishing village. </div> 
  </div>
  <div class="col-md-4">
    <img src="Pic3.jpeg" alt="Munnar" height="250" width="400"> 
    <div class="desc">
      When visiting Munnar, Kerala, guests should head to its famous evergreen tea plantations. These offer a beautiful view of Munnar's rolling hills, perfect for taking captivating photos. Aside from this, the city is also home to the Eravikulam National Park. Visitors will see various wild goats in their lush habitat.
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-4">
    <ul class="box1">
      <li style="text-decoration: underline;">Places</li>
      <li style="text-decoration: underline;">To visit</li>
      <li style="text-decoration: underline;">In Kerala</li>
    </ul> 
  </div>
  <div class="col-md-4">
    <ol>
      <li style="text-decoration: underline;">Jatayu Earth Centre</li>
      <li style="text-decoration: underline;">Kovalam</li>
      <li style="text-decoration: underline;">Munnar</li>
    </ol> 
  </div>
  <div class="col-md-4">
    <table>
      <tr>
        <th>Place</th>
        <th>What to see & do</th>
        <th>Activities</th>
      </tr>
      <tr>
        <td>Jatayu Earth Centre</td>
        <td>Mountain view</td>
        <td>Rock Climbing</td>
      </tr>
      <tr>
        <td>Kovalam</td>
        <td>Beaches</td>
        <td>Water sports</td>
      </tr>
      <tr>
        <td>Munnar</td>
        <td>Sightseeing</td>
        <td>Camping</td>
      </tr>
    </table>
  </div>
</div>

</body>
</html>