<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script>
        function openNav() {
            document.getElementById("myNav").style.height = "100%";
        }

        /* Close */
        function closeNav() {
          document.getElementById("myNav").style.height = "0%";
        }
    </script>
    <style>
body {
  font-family: 'Lato', sans-serif;
}

.overlay {
  height: 100%;
  width: 100%;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.9);
  overflow-y: hidden;
  transition: 0.5s;
}

.overlay-content {
  position: relative;
  top: 25%;
  width: 100%;
  text-align: center;
  margin-top: 30px;
}

.overlay a {
  padding: 8px;
  text-decoration: none;
  font-size: 36px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
  color: #f1f1f1;
}

.overlay .closebtn {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px;
}

@media screen and (max-height: 450px) {
  .overlay {overflow-y: auto;}
  .overlay a {font-size: 20px}
  .overlay .closebtn {
  font-size: 40px;
  top: 15px;
  right: 35px;
  }
}
.popup{
    color:white;
  }
.genel{
    border: 1px #fff solid;
    width: 200px;
    height: 200px;
}
.fotograf{
    border: 1px #fff solid;
    margin-top:5px;
    width: 180px;
    height: 150px;
}
.yemekAdi{
    border: 1px #fff solid;
    margin-top:5px;
    margin-left:9px;
    margin-right:9px;
    height:31px;
}
</style>
</head>
<body>
    
    
    

    <div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">+
  <div class="popup">
        <label>YEMEK ADI:</label>
        <input type="text" name="" id="country_name">
        <div id="kartContainer"></div>
        <hr>
        <center><label>YEMEK ADI:<span id="yemekadi"></span></label></center>
    </div>
  </div>
</div>
<?php
?>

<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script type="text/javascript" src="src/scripts/scriptara.js"></script>
</body>
</html>