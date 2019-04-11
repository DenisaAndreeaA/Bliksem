<?php
require_once("includes/config.php");
include(ROOT_PATH . "includes/head.php");
?>

<body style="background-image: url(<?php echo BASE_URL; ?>images/city-of-eindhoven-hi_res.jpg);">
      <?php include(ROOT_PATH . "includes/nav.php"); ?>
      <?php include(ROOT_PATH . "includes/side-nav.php"); ?>

<main>
    <article class="event-details">
      <div class="about-info">
      <h1 class="event_name">Event Title</h1>

        <div class="description">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vel mi ac est finibus auctor in hendrerit ante. Maecenas vehicula tristique dolor, in vulputate dolor venenatis sit amet. Mauris id odio non lorem commodo eleifend vel sit amet ante. Ut massa massa, hendrerit ac ultricies in, ultrices vel ligula. Pellentesque a lorem vestibulum ante cursus vehicula sit amet non sapien. Cras nunc nisl, maximus a fermentum vitae, elementum vel enim. Fusce semper lorem a interdum vehicula. In metus est, tempor ut tortor id, facilisis venenatis augue.

Cras vel sodales massa. Proin orci augue, iaculis ac rutrum in, accumsan in eros. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer auctor neque at velit vulputate porttitor. Nunc pulvinar, ipsum sit amet eleifend placerat, neque nisl vestibulum odio, ac consectetur lacus justo vitae dui. Morbi nisl velit, vehicula nec augue sit amet, ullamcorper hendrerit lacus. Nulla justo ipsum, eleifend nec quam eget, mollis ultricies risus. Proin eget ullamcorper nisi. Vestibulum posuere risus et quam commodo rhoncus.

Duis eget nunc eget velit pharetra vestibulum quis sit amet mauris. Duis quis accumsan nisl. Donec elementum dapibus diam, ac tempor ex posuere sit amet. Ut interdum in risus et mollis. Nulla malesuada justo quis tempor fermentum. Cras sit amet volutpat est. Proin ut interdum justo. Praesent orci leo, tristique id lorem eget, volutpat laoreet diam. Cras ante libero, viverra quis elementum nec, tempus ac sapien. Aliquam varius sagittis quam, nec luctus mi mattis id. Proin tempus ante sit amet quam consequat vulputate id a sapien. Integer malesuada gravida sapien et convallis. Integer dictum porttitor lorem. Cras id varius arcu.
        </p>
        </div>
          <button class="button">GET TICKETS</a></button>
      </div>

          <img id="event-pic"  src="images/events_medium.jpg" alt="Picture of the event" style="width:420px;height:315px;border:0;">


    </article>
      <h2 class="categtitle">Similar events</h2>
      <?php include(ROOT_PATH . "includes/event-short.php"); ?>
      <?php include(ROOT_PATH . "includes/event-short.php"); ?>
    </main>
    </div>
      <!--till here-->
      <?php include(ROOT_PATH . "includes/footer.php"); ?>
    </body>
    </html>
