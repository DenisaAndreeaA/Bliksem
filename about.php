<?php
require_once("includes/config.php");
include(ROOT_PATH . "includes/head.php");
?>

<body style="background-image: url(<?php echo BASE_URL; ?>images/eindhoven-blur.jpg);">
      <?php include(ROOT_PATH . "includes/nav.php"); ?>
<!--end of top menu bar-->

<div class="wrapper2">
<article class="about">
  <section>
  <h2>History of Eindhoven</h2>
  <img id="myImg4" src="images/history.jpg" alt="Stratumseind, Eindhoven, 1950" >
      <div id="myModal4" class="modal4">


  <span class="close4" onclick="document.getElementById('myModal4').style.display='none'">&times;</span>


  <img class="modal-content4" id="img04">


  <div id="caption4"></div>
</div>

<script>

var modal = document.getElementById('myModal4');


var img = document.getElementById('myImg4');
var modalImg = document.getElementById("img04");
var captionText = document.getElementById("caption4");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}


var span = document.getElementsByClassName("close4")[0];


span.onclick = function() {
    modal.style.display = "none";
}
</script>
        <p>Eindhoven arose between the Dommel and Gender rivers, acquiring <br>
          its town charter in 1232.In 1920 the municipality of Eindhoven was <br>
          created when the original municipality of Eindhoven – the current city <br>
          centre – merged with the surrounding municipalities of Strijp, Woensel,<br>
          Gestel, Tongelre and Stratum. </p>

        </section>
  <section>
      <h2>City of Light</h2>
        <p>When you google innovation, it is no coincidence that the first images you will<br>
           find are light bulbs. 125 years ago, Philips brought light to the City of <br>
           Eindhoven. The company transformed the city into a vibrant industrial
           <br> success story. Nowadays Eindhoven is a city of opportunity, encouraging<br>
            possibilities. Of brainpower, work ethic, of fun. There is a constant flow <br>
            of new developments in the fields of creativity, innovation, technology, design<br>
            and knowledge. Eindhoven is bursting with energy. And we are glad to share it with you.</p>
          </section>
</article>
</div>
<?php include (ROOT_PATH . "includes/footer.php");?>
</body>
</html>
