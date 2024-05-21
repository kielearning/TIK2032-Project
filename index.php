<?php
include 'config.php';

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>My Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale = 1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
  </head>
  <body>

    <input type="radio" name = "radio" id = "open">
    <input type="radio" name = "radio" id = "close" checked>
    <!-- nav -->
    <nav>
      <div class="left-side">
        <a href=""><h1>Jeheskiel Victor Liwe</h1></a>
      </div>
      <div class="right-side">
        <div class="nav-link-wrapper"><a href="#home" class = "page-scroll">Home</a></div>
        <div class="nav-link-wrapper"><a href="#about" class = "page-scroll">About</a></div>
        <div class="nav-link-wrapper"><a href="#contact" class = "page-scroll">Blog</a></div>
        <div class="nav-link-wrapper"><a href="#gallery" class = "page-scroll">Gallery</a></div>
        <div class="nav-link-wrapper"><a href="#contact" class = "page-scroll">Contact</a></div>
      </div>
      <label for = "open" class="hamburger">
        <span></span>
        <span></span>
        <span></span>
      </label>
      <label for="close" class = "cross">
        <span></span>
        <span></span>
      </label>
    </nav>

    <!-- home -->
    <div class="container-home" id = "home">
      <img src="image/profil1.jpg" alt="">
      <h1 id="typewriter"></h1>
      <p>A Student</p>
    </div>

    <!-- about -->
    <div class="container-about" id = "about">
      <h1>About</h1>
      <hr class="split">
      <div class="text">
        <p>Saya adalah seorang mahasiswa di Universitas Sam Ratulangi Manado. Sekarang telah memasuki semester 4. Ini merupakan tugas project yang saya kerjakan yaitu membuat website untuk memperkenalkan diri. Sekian informasi mengenai diri saya & Stay Curious</p>
      </div>
    </div>

  <!-- blog -->
  <section id="blog">
    <h2 style="padding-left: 20%; padding-right: 20%;">Blog</h2>
    <div class="container-blog" style="padding-left: 20%; padding-right: 20%;" id="blogContainer">
    <?php
    $query = "SELECT * FROM blog";
    $result = mysqli_query($conn, $query);

    $no = 1;

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            if ($no >=0) {
            ?>
            <div class="card" style="padding-top: 15px;">
    <article>
        <h2><?= $row["judul"] ?></h2>
        <p>
            <?= $row["deskripsi"] ?>
        </p>
        
    </article>
</div>
  <?php } 
            $no++;
        }
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    } ?>

       
        </div>
    </div>
   
    <div style="text-align:center; padding-top: 20px;" >
        
        
     
    </div>
</section>

    <!-- Galerry -->
    <div class="container-gallery"id="gallery" >
      <h1>Gallery</h1>
      <hr class="split">
      <div class="container" id="galleryContainer">
       
      </div>
      <div style="text-align:center; padding-top: 20px;" >
        
        
        <a href="#gallery" class="buttonClass" onclick="loadGallery()" id="loadGalleryButton" style="padding: 10px;">Tekan Untuk Melihat Gallery</a>
        <a href="#gallery" class="buttonClass" onclick="previousGallery()" id="previousGalleryButton" style="display: none">Sebelumnya</a>
        <a href="#gallery" class="buttonClass" onclick="nextGallery()" id="nextGalleryButton" style="display: none;">next</a>
      </div>
    </div>
    <!-- contact -->
    <section id="contact">
        <h2>Contact</h2>
        <ul>
          <li>
            <strong>Email:</strong>
            <a href="mailto:jeheskielvictor08@gmail.com" target="_blank">Email Saya</a>
          </li>
          <li>
            <strong>Phone:</strong>
            <a href="https://wa.me/+6285824204368" target="_blank">WhatsApp</a>
          </li>
          <li>
            <strong>Instagram:</strong>
            <a href="https://www.instagram.com/jeheskielvictor?igsh=MXZtdHMyeDQxa2kycw==" target="_blank">Instagram</a>
          </li>
        </ul>
      </section>
    </main>

    <!-- footer -->
    <footer>
      <p>Copyright 2024 | Built by Jeheskiel V.L</p>
    </footer>

    <!-- script -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src = "script.js"> </script>
    <script>var text = "Jeheskiel Victor Liwe";
      var speed = 100; // milliseconds per character
      
      function typeWriter() {
          if (text.length > 0) {
              document.getElementById("typewriter").innerHTML += text.charAt(0);
              text = text.substring(1);
              setTimeout(typeWriter, speed);
          }
      }
      
      typeWriter();</script>
  </body>
</html>
