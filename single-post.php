<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>House Leading - Post</title>
  <link rel="icon" type="image/png" href="images/logo.png" />  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
  <script src="js/script.js"></script>
</head>
<body onload="init()">
  <!-- Header Start -->
  <?php include 'header.php' ?>
  <!-- Header End -->

  <!-- Post Start -->
  <div class="single-post-container">
    <div class="container">
      <!-- Card 1 End-->
      <div class="single-post card">
                <div class="card-head">
                  <img src="images/feature1.jpg" alt="feature image">
                  <div class="cost">
                    <p class="cost-btn">
                      $954 890
                    </p>
                  </div>
                </div>

                <div class="card-body">
                  <h5>Vital Villas</h5>
                  <p class="location">
                    <i class="icon-hl-gps"></i> Upper Road 3411, no.34 CA
                  </p>

                  <p class="description">
                  Integer nec bibendum lacus. Suspendisse dictum enim sit amet libero malesuada.
                  <a href="single-post.php" class="more-link">Read More</a>
                  </p>

                  <div class="property-meta-data flex-d">
                    <div class="new-tag flex-d">
                      <i class="icon-hl-new"></i>
                    </div>

                    <div class="bathroom flex-d">
                      <i class="icon-hl-bathroom"></i>
                      <span class="bathroom-quantity">2</span>
                    </div>
                    <div class="bedroom flex-d">
                      <i class="icon-hl-bed"></i>
                      <span class="rooms-quantity">2</span>
                    </div>
                    <div class="space flex-d">
                      <i class="icon-hl-resize"></i>
                      <span class="space-measurement">120 sq ft</span>
                      
                    </div>
                  </div>  
                </div>
              </div>
             <!-- Card 1 End -->
    </div>
  </div>
  <!-- Post End -->

  <!-- Footer Start -->
  <?php include 'footer.php' ?>
  <!-- Footer End -->
</body>
</html>