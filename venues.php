<?php
require_once("includes/config.php");
include(ROOT_PATH . "includes/head.php");
?>
<body style="background-color:black; background-image: url(<?php echo BASE_URL; ?>images/effenaar-venues.jpg);">
      <?php include(ROOT_PATH . "includes/nav.php"); ?>

<div class="wrapper2">

<article class="about">
  <div class="about-info">
<h1 class="categtitle" style="font-size:3em;">Event venues</h1>
      <p>When thoughts of Eindhoven come to mind many visitors think of the industry
      and technology centres like DAF, Philips and ASML that have made this city
      so popular with Dutch citizens and expats alike. However, behind this science
      exterior lies a love for music and culture! Live music in the city is a great
      way to spend an evening with good family and friends or enjoy a bigger concert
      in one of the larger concert venues within the city. The nightlife of Eindhoven
      has always been a fun and interesting aspect of the city with many different
      genres to suit every person, even the hard to please people! Local bands are
      playing in some of the many pubs along the Stratumseind, Market Square, or
      Wilhelmina plein. Many of the smaller venues within the city do not require
      patrons to pay to see live bands playing, which is great if you do not want an
      extremely expensive night out on the town. There are sometimes small fees for
      some of the performances, but it is worth the little bit of money to experience
      some of the local talent! </p>
    </br>

    <h2 class="categtitle">Here are some of Eindhoven's famous event venues...</h2>
  </div>
  </article>

<article class="about">
  <div class="about-info">
    <a class="categtitle" href="#" title="Effenaar" onclick="navFunction()">Effenaar</a>

    <script>
function navFunction() {
    var x;
    if (confirm("Do you want to go to the official page?") == true) {
        window.location.href = 'http://www.effenaar.nl';
    }  else {
                return false;}
    document.getElementById("demo").innerHTML = x;
}
</script>


    <p>From 1975-1995 the Effenaar was a linen factory but now it is a 650 seat (or standing)<br>
    concert hall where many popular artists come to perform. This venue has had many <br>
    different artists perform here such as R.E.M., Ice Cube, Pearl Jam, Red Hot Chili Peppers,<br>
    and many others. The Effenaar provides a wide variety of music genre for all kinds <br>
    of people to enjoy.</p>
  </div>

    <img id="myImg1" src="http://www.effenaar.nl/assets/frontend/images/open-graph-image.jpg" alt="Effenaar">

    <div id="myModal1" class="modal1">
  <span class="close1" onclick="document.getElementById('myModal').style.display='none'">&times;</span>
  <img class="modal-content1" id="img01">
  <div id="caption1"></div>
</div>

<script>

var modal = document.getElementById('myModal1');


var img = document.getElementById('myImg1');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption1");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}
var span = document.getElementsByClassName("close1")[0];
span.onclick = function() {
    modal.style.display = "none";
}
</script>
</article>


<article class="about">
  <div class="about-info">
    <a class="categtitle" href="#" title="POPEI" onclick="navFunction()">POPEI</a>
    <script>
function navFunction() {
    var x;
    if (confirm("Do you want to go to the official page?") == true) {
        window.location.href = 'https://www.popei.nl/nld';
    }  else {
                return false;}
    document.getElementById("demo").innerHTML = x;
}
</script>

    <p>PopEi is a great place for renting a rehearsal room, trying out recording studios,<br>
    or seeing a concert. It's a good place for the alternative scene with rap battles,<br>
    dance troupes, theatre performances and rock concerts. They also offer a variety<br>
    of educational courses to help with dancing, singing, and playing instruments.<br>
    Check out their website for more information!</p>
  </div>
    <img id="myImg2" src="http://www.eindhoven-now.nl/attachments/Eindhoven_Strijp_S_-_Pop_Ei_-_04.jpg" alt="Popei Pub">



<div id="myModal2" class="modal2">
  <span class="close2" onclick="document.getElementById('myModal2').style.display='none'">&times;</span>
  <img class="modal-content2" id="img02">
  <div id="caption2"></div>
</div>

<script>
var modal = document.getElementById('myModal2');
var img = document.getElementById('myImg2');
var modalImg = document.getElementById("img02");
var captionText = document.getElementById("caption2");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

var span = document.getElementsByClassName("close2")[0];
span.onclick = function() {
    modal.style.display = "none";
}
</script>
</article>


<article class="about">
  <div class="about-info">
    <a class="categtitle" href="#" title="Dynamo" onclick="navFunction()">Dynamo</a>
    <script>
function navFunction() {
    var x;
    if (confirm("Do you want to go to the official page?") == true) {
        window.location.href = 'http://www.dynamo-eindhoven.nl';
    }  else {
                return false;}
    document.getElementById("demo").innerHTML = x;
}
</script>

    <p>This unique venue provides young and inspired artists a place to perform & practice<br>
      and workshops to help tune their talent! There are various stages for all different<br>
      kinds of music such as hip-hop, electro/house music, and popular rock/metal music.<br>
      Visit their website for workshops and concerts!
    </p>
  </div>
    <img id="myImg3" src="https://c1.staticflickr.com/3/2078/2411150216_1bfce16254_b.jpg" alt="Dynamo Eindhoven">

    <div id="myModal3" class="modal3">


  <span class="close3" onclick="document.getElementById('myModal3').style.display='none'">&times;</span>
  <img class="modal-content3" id="img03">

  <div id="caption3"></div>
</div>

<script>

var modal = document.getElementById('myModal3');
var img = document.getElementById('myImg3');
var modalImg = document.getElementById("img03");
var captionText = document.getElementById("caption3");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

var span = document.getElementsByClassName("close3")[0];
span.onclick = function() {
    modal.style.display = "none";
}
</script>
</article>
</div>

</body>
<?php include(ROOT_PATH . "includes/footer.php"); ?>
</html>
