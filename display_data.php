<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="main.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
  <!-- @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"); -->
</head>

<body>
  <!-- Header -->

  <header>
    <nav>

      <div class="left">
        <?php

        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "port";

        // Create a connection to the MySQL database
        $conn = new mysqli($servername, $username, $password, $database);

        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }

        // Fetch and display user data
        
        // $sql = "SELECT name, image_path FROM ports";
        $sql = "SELECT name FROM ports ORDER BY id DESC LIMIT 1";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            echo $row["name"];
            // echo "<img src='" . $row["image_path"] . "' alt='User Image' width='200'><br><br>";
          }
        } else {
          echo "No results found.";
        }

        $conn->close();
        ?>
        Portfolio
      </div>
      <div class="right">
        <ul>
          <li><a href="#1">Home</a></li>
          <li><a href="#2">About</a></li>
          <li><a href="#3">Services</a></li>
          <!-- <li><a href="/">Project</a></li> -->
          <li><a href="#4">Contact</a></li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- Main Content-->

  <main>
    <section class="firstsection" id="1">
      <div class="leftsection">
        <div class="subsec">HELLO!</div>
        <strong>i,m <span class="SB">
        <?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "port";

// Create a connection to the MySQL database
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Fetch and display user data

// $sql = "SELECT name, image_path FROM ports";
$sql = "SELECT name FROM ports ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    echo $row["name"];
    // echo "<img src='" . $row["image_path"] . "' alt='User Image' width='200'><br><br>";
  }
} else {
  echo "No results found.";
}

$conn->close();
?>
          </span></strong>
        <div>and I am Passionate</div>
        <!-- Element to contain animated typing -->
        <span id="element"></span>
      </div>
      <div class="rightsection">
        <?php

        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "port";

        // Create a connection to the MySQL database
        $conn = new mysqli($servername, $username, $password, $database);

        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }

        // Fetch and display user data
        
        // $sql = "SELECT name, image_path FROM ports";
        $sql = "SELECT image_path FROM ports ORDER BY id DESC LIMIT 1";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            // echo "Name: " . $row["name"] . "<br>";
            echo "<img src='" . $row["image_path"] . "' alt='User Image'><br><br>";
          }
        } else {
          echo "No results found.";
        }

        $conn->close();
        ?>

      </div>
    </section>

    <hr class="hr0" />


    <section class="secondsection" id="2">
      <span class="grey">What I have Learn</span>
      <h1>Working on</h1>
      <!-- <hr class="hr2"> -->
      <hr class="hr1" />

      <div class="box">
        <div class="vertical">
          <img class="img_top" src="html.png" alt="" />
          <div class="ver-tit">
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "port";

            // Create a connection to the MySQL database
            $conn = new mysqli($servername, $username, $password, $database);

            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }

            // Fetch and display user data
            
            // $sql = "SELECT name, image_path FROM ports";
            $sql = "SELECT skill1 FROM ports ORDER BY id DESC LIMIT 1";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                echo $row["skill1"] . "<br>";
              }
            } else {
              echo "No results found.";
            }

            $conn->close();
            ?>
            Developer
          </div>

        </div>
        <div class="vertical">
          <img class="img_top" src="css.png" alt="" />
          <div class="ver-tit">
          <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "port";

            // Create a connection to the MySQL database
            $conn = new mysqli($servername, $username, $password, $database);

            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }

            // Fetch and display user data
            
            // $sql = "SELECT name, image_path FROM ports";
            $sql = "SELECT skil2 FROM ports ORDER BY id DESC LIMIT 1";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                echo $row["skil2"] . "<br>";
              }
            } else {
              echo "No results found.";
            }

            $conn->close();
            ?>
            Developer
          </div>
        </div>
        <div class="vertical">
          <img class="img_top" src="java.png" alt="" />
          <div class="ver-tit">
          <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "port";

            // Create a connection to the MySQL database
            $conn = new mysqli($servername, $username, $password, $database);

            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }

            // Fetch and display user data
            
            // $sql = "SELECT name, image_path FROM ports";
            $sql = "SELECT ski FROM ports ORDER BY id DESC LIMIT 1";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                echo $row["ski"] . "<br>";
              }
            } else {
              echo "No results found.";
            }

            $conn->close();
            ?>
            Developer
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- End main section -->


  <div class="cont_1">
    <strong>
      <h1 class="cont_h1" id="3">My Services</h1>
    </strong>
    <h1 class="cont_h2">Services</h1>
  </div>

  <!-- Second section -->
  <section>
    <div class="hov">
      <div class="hov_1">
        <div class="colomn">
          <div class="row img"><i class="bi bi-app-indicator"></i></div>
          <div class="row">App Development</div>
          <div class="row_1">Experienced app developer with a strong proficiency in mobile application development,
            including iOS and Android platforms. Skilled in coding, debugging, and optimizing apps for performance and
            user experience.</div>
        </div>
      </div>
      <div class="hov_2">
        <div class="colomn">
          <div class="row img"><i class="bi bi-code-slash"></i></div>
          <div class="row">Web Development</div>
          <div class="row_2">Developed responsive and user-friendly websites using HTML, CSS, JavaScript, and modern web
            frameworks, ensuring optimal performance, cross-browser compatibility, and adherence to web standards.</div>
        </div>
      </div>
      <div class="hov_3">
        <div class="colomn">
          <div class="row img"><i class="bi bi-ubuntu"></i></div>
          <div class="row">UI/UX Development</div>
          <div class="row_3">Passionate UI/UX Developer with a proven track record of creating visually appealing and
            user-friendly interfaces. Proficient in wireframing, prototyping, and front-end development, with a keen eye
            for design aesthetics and a deep understanding of user behavior. </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end second section  -->

  <div class="cont_1">
    <strong>
      <h1 class="cont_h1">My works</h1>
    </strong>
    <h1 class="cont_h2">Works</h1>
  </div>

  <!-- Third Section -->

  <section>
    <div class="hov">
      <div class="img_main">
        <div class="img_1"><img src="app.jpg" alt=""></div>
        <div class="overlay">
          <div class="content">
            <h3>App Developed</h3>
          </div>
        </div>
      </div>
      <div class="img_main">
        <div class="img_1"><img src="web.png" alt=""></div>
        <div class="overlay">
          <div class="content">
            <h3>Web Developed</h3>
          </div>
        </div>
      </div>
      <div class="img_main">
        <div class="img_1"><img src="uiux.png" alt=""></div>
        <div class="overlay">
          <div class="content">
            <h3>UI/UX Developed</h3>
          </div>
        </div>
      </div>
  </section>








  <!--- Contact Me  --->

  <section class="cont">
    <div class="cont_1">
      <strong>
        <h1 class="cont_h1">Contact Me</h1>
      </strong>
      <h1 class="cont_h2">Contect</h1>
    </div>
    <div class="contacts_main">
      <div class="contacts">


        <!-- <div class="contact_txt"><h1>Contact me</h1></div> -->
        <div class="contacts_icon" id="4">
          <div class="contacts_subicon"><i class="bi bi-telegram"></i></div>
          <div class="contacts_subtxt"><?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "port";

            // Create a connection to the MySQL database
            $conn = new mysqli($servername, $username, $password, $database);

            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }

            // Fetch and display user data
            
            // $sql = "SELECT name, image_path FROM ports";
            $sql = "SELECT emai FROM ports ORDER BY id DESC LIMIT 1";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                echo $row["emai"] . "<br>";
              }
            } else {
              echo "No results found.";
            }

            $conn->close();
            ?></div>
        </div>
        <div class="contacts_icon_1">
          <div class="contacts_subicon"><i class="bi bi-telephone-fill"></i></div>




          <!-- contacts -->




          <div class="contacts_subtxt">
            <?php

            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "port";

            // Create a connection to the MySQL database
            $conn = new mysqli($servername, $username, $password, $database);

            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }

            // Fetch and display user data
            
            // $sql = "SELECT name, image_path FROM ports";
            $sql = "SELECT contact FROM ports ORDER BY id DESC LIMIT 1";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                echo $row["contact"] . "<br>";
                // echo "<img src='" . $row["image_path"] . "' alt='User Image'><br><br>";
              }
            } else {
              echo "No results found.";
            }

            $conn->close();
            ?>
          </div>
        </div>
        <div class="contacts_sec_icon">
          <div class="contacts_sec_icon_1"><i class="bi bi-facebook"></i></div>
          <div class="contacts_sec_icon_2"><i class="bi bi-twitter"></i></div>
          <div class="contacts_sec_icon_3"><i class="bi bi-instagram"></i></div>
          <div class="contacts_sec_icon_4"><i class="bi bi-linkedin"></i></div>
        </div>
      </div>

      <!-- <div class="contacts_second">
        <form action="#">
          <div class="inq"><input type="text" name="nam" placeholder="Full name"></div>
          <div class="inq"><input type="email" name="e-mail" placeholder="Your email"></div>
          <div class="inq"><input type="text" name="subject" placeholder="Type a subject"></div>
          <div class="inq"><textarea rows="5" cols="30" name="message" placeholder="Message..."></textarea></div>
          <div class="inq"><input type="submit" name="submit"></div>
        </form>
      </div> -->

  </section>

  <!--- Fotter --->

  <footer>
    <div class="foot" id="about">
      <div class="foot_first">
        <h2>About</h2>
        <div class="foot_last_text">
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "port";

            // Create a connection to the MySQL database
            $conn = new mysqli($servername, $username, $password, $database);

            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }

            // Fetch and display user data
            
            // $sql = "SELECT name, image_path FROM ports";
            $sql = "SELECT abc FROM ports ORDER BY id DESC LIMIT 1";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                echo $row["abc"];
              }
            } else {
              echo "No results found.";
            }

            $conn->close();
            ?>
        </div>
      </div>
      <div class="foot_second">
        <h2>Link</h2>
        <div class="foot_link">
          <ul>
            <li><a href="#1">Home</a></li>
            <li><a href="#2">About</a></li>
            <li><a href="#3">Services</a></li>
            <!-- <li><a href="/">Project</a></li> -->
            <li><a href="#4">Contact</a></li>
          </ul>
        </div>
      </div>
      <div class="foot_third">
        <h2>Services</h2>
        <div class="sub_third">
          <li>Web Design</li>
          <li>Web Development</li>
          <li>App Development</li>
        </div>
      </div>
      <div class="foot_fourth">
        <h2>Have a Questions?</h2>

        <div class="add">
          <!-- Icons of location-->

          <i class="bi bi-geo-alt"></i>
          <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "port";

            // Create a connection to the MySQL database
            $conn = new mysqli($servername, $username, $password, $database);

            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }

            // Fetch and display user data
            
            // $sql = "SELECT name, image_path FROM ports";
            $sql = "SELECT addr FROM ports ORDER BY id DESC LIMIT 1";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                echo $row["addr"] . "<br>";
              }
            } else {
              echo "No results found.";
            }

            $conn->close();
            ?>
        </div>

        <!-- Icons of contact-->

        <div class="con">
          <i class="bi bi-telephone"></i>
          <a href="">
            <?php

            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "port";

            // Create a connection to the MySQL database
            $conn = new mysqli($servername, $username, $password, $database);

            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }

            // Fetch and display user data
            
            // $sql = "SELECT name, image_path FROM ports";
            $sql = "SELECT contact FROM ports ORDER BY id DESC LIMIT 1";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                echo $row["contact"] . "<br>";
                // echo "<img src='" . $row["image_path"] . "' alt='User Image'><br><br>";
              }
            } else {
              echo "No results found.";
            }

            $conn->close();
            ?>
          </a>
        </div>

        <div class="mai">
          <i class="bi bi-envelope-fill"></i>
          <a href="">
          <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "port";

            // Create a connection to the MySQL database
            $conn = new mysqli($servername, $username, $password, $database);

            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }

            // Fetch and display user data
            
            // $sql = "SELECT name, image_path FROM ports";
            $sql = "SELECT emai FROM ports ORDER BY id DESC LIMIT 1";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                echo $row["emai"] . "<br>";
              }
            } else {
              echo "No results found.";
            }

            $conn->close();
            ?>
          </a>
        </div>
      </div>
    </div>
  </footer>
  <footer class="sec_foot">
    <div class="last">
      <p>&copy; Copyright All Rights Reserved.</p>
    </div>
  </footer>
</body>

<!-- Animation of text -->

<script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
<script>
  var typed = new Typed("#element", {
    strings: [
      "<?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "port";

            // Create a connection to the MySQL database
            $conn = new mysqli($servername, $username, $password, $database);

            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }

            // Fetch and display user data
            
            // $sql = "SELECT name, image_path FROM ports";
            $sql = "SELECT skill1 FROM ports ORDER BY id DESC LIMIT 1";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                echo $row["skill1"];
              }
            } else {
              echo "No results found.";
            }

            $conn->close();
            ?>,",
      "<?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "port";

            // Create a connection to the MySQL database
            $conn = new mysqli($servername, $username, $password, $database);

            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }

            // Fetch and display user data
            
            // $sql = "SELECT name, image_path FROM ports";
            $sql = "SELECT skil FROM ports ORDER BY id DESC LIMIT 1";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                echo $row["skil"];
              }
            } else {
              echo "No results found.";
            }

            $conn->close();
            ?>,",
      "<?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "port";

            // Create a connection to the MySQL database
            $conn = new mysqli($servername, $username, $password, $database);

            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }

            // Fetch and display user data
            
            // $sql = "SELECT name, image_path FROM ports";
            $sql = "SELECT ski FROM ports ORDER BY id DESC LIMIT 1";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                echo $row["ski"] ;
              }
            } else {
              echo "No results found.";
            }

            $conn->close();
            ?>,"
    ],
    typeSpeed: 60,
  });
</script>

<!-- <script src="main.js"></script> -->

</html>