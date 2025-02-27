

<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles.css" />
    <title>ER News Page</title>
  </head>
  <body>
    <navbar class="navbar">
      <div class="navbar-container">
        <div class="logo-container">
          <img
            class="logo-img"
            src="./Images/logo-text-r-letter-market-angle-esports-line-symbol-png-clipart.jpg"
          />
        </div>
        <div class="navbar-link-container">
          <a href="homepage.php" class="navbar-link">Home</a>
          <a href="sports.php" class="navbar-link">Sports</a>
          <a href="innovation.php" class="navbar-link">Innovation</a>
        </div>
        <div class="navbar-buttons">
          <a href="login.php" class="logIn-button">Log In</a>
          <a href="register.php" class="register-button">Register</a>
        </div>
      </div>
    </navbar>
    <hr />
    <section class="hero-section">
      <div class="main-content__wrapper">
        <div class="main-content_left-row">
          <div class="main-article">
            <div class="background-image_container">
              <img class="background-image" src="./Images/donaldTrump.avif" />
            </div>
            <div class="main-article_overlay">
              <h2>
                Donald Trump has secured more than the 270 Electoral College
                votes needed to secure the presidency..
              </h2>
            </div>
          </div>
          <div class="left-row-subarticles-container">
            <div class="subarticle-container">
              <img src="./Images/aleppo.webp" alt="" class="subarticle_image" />
              <p>
                Inside Aleppo: Family reunions, nervousness at rebel rule and
                fear of war
              </p>
            </div>
            <div class="subarticle-container">
              <img
                src="./Images/DominicanRepublic.webp"
                alt=""
                class="subarticle_image"
              />
              <p>Dominican Republic records largest cocaine seizure</p>
            </div>
            <div class="subarticle-container">
              <img
                src="./Images/black-hole-approach-1.webp"
                alt=""
                class="subarticle_image"
              />
              <p>
                NASA's new black hole visualizations showcase how gravity warps
                light Images from computer simulations highlight the photon
                rings and more
              </p>
            </div>
          </div>
          <div class="" style="display: none">
            <div class="img-wrapper__main">
              <img class="main-img" src="./Images/SouthKorea.jpg" />
            </div>
            <h2>South Korean president declares Martial Law in South Korea</h2>
            <a href="" class="article-link">
              <p class="truncate">
                South Korea's president shocked the country on Tuesday night
                when, out of the blue, he declared martial law in the Asian
                democracy for the first time in nearly 50 years.
              </p>
            </a>
          </div>
        </div>
        <div class="main-content_right-row">
          <div class="right-row_article">
            <img
              src="./Images/SouthKorea.jpg"
              alt=""
              class="right-row_article-image"
            />
            <div class="right-row-article_info">
              <h3 class="right-row-article_heading">Politics</h3>
              <a href="" class="article-link">
                <p class="truncate">
                  South korea's President declares shortest martial law in
                  hitory.
                </p></a
              >
            </div>
          </div>
          <div class="right-row_article margin-top">
            <img
              src="./Images/HealthcareCEO.jpg"
              alt=""
              class="right-row_article-image"
            />
            <div class="right-row-article_info">
              <h3 class="right-row-article_heading">Bussiness</h3>
              <a href="" class="article-link"
                ><p class="truncate">
                  Killing of insurance CEO reveals simmering anger at US health
                  system
                </p></a
              >
            </div>
          </div>
          <div class="right-row_article margin-top">
            <img
              src="./Images/LandoNorris.webp"
              alt="Lando Norris"
              class="right-row_article-image"
            />
            <div class="right-row-article_info">
              <h3 class="right-row-article_heading">Formula 1</h3>
              <a href="" class="article-link"
                ><p class="truncate">
                  Lando Norris took pole position at the Abu Dhabi Grand Prix
                </p></a
              >
            </div>
          </div>
          <div class="right-row_article margin-top">
            <img
              src="./Images/Nightclub.webp"
              alt=""
              class="right-row_article-image"
            />
            <div class="right-row-article_info">
              <h3 class="right-row-article_heading">Innovation</h3>
              <a href="" class="article-link">
                <p class="truncate">
                  Nightclub stickers over smartphone rule divides the dancefloor
                </p></a
              >
            </div>
          </div>
          <div class="right-row_article margin-top">
            <img
              src="./Images/HawkTuah.webp"
              alt=""
              class="right-row_article-image"
            />
            <div class="article_info">
              <h3 class="right-row-article_heading">Technology</h3>
              <a href="" class="article-link">
                <p class="truncate">
                  Online star Hawk Tuah girl faces crypto coin criticism
                </p></a
              >
            </div>
          </div>
          <div class="right-row_article margin-top">
            <img
              src="./Images/Mbappe.jpg"
              alt=""
              class="right-row_article-image"
            />
            <div class="right-row-article_info">
              <h3 class="right-row-article_heading">Football</h3>
              <a href="" class="article-link">
                <p class="truncate">
                  'Mbappe fell flat when needed' - why Real Madrid are in
                  trouble
                </p></a
              >
            </div>
          </div>
          <div class="right-row_article margin-top">
            <img
              src="./Images/donaldtrump2.jpg"
              alt=""
              class="right-row_article-image"
            />
            <div class="right-row-article_info">
              <h3 class="right-row-article_heading">Politics</h3>
              <a href="" class="article-link">
                <p class="truncate">
                  There will be ALL HELL TO PAY in the Middle East-Trump
                  threatens
                </p></a
              >
            </div>
          </div>
        </div>
      </div>
    </section>
    <br />
    <br />
    <hr />
    <section class="slider">
      <div class="figure-h1"><h1>AI Generated News</h1></div>

      <figure class="carousell-wrapper">
        <div class="carousell-image-container">
          <img
            src="./Fake news Images/ResizedFakeNews/resized_news_image_0.png"
            alt=""
            class="carousell-image"
          />
        </div>

        <div class="nature-img__container">
          <img
            src="./Fake news Images/ResizedFakeNews/resized_news_image_1.png"
            alt="God like figure"
          />
        </div>
        <div class="nature-img__container">
          <img
            src="./Fake news Images/ResizedFakeNews/resized_news_image_2.png"
          />
        </div>
        <div class="nature-img__container">
          <img
            src="./Fake news Images/ResizedFakeNews/resized_news_image_3.png"
            alt="T-rex image, gjall jena po sjena tu mujt mi ra nfije"
          />
        </div>
        <div class="nature-img__container">
          <img
            src="./Images/Images-nature/HD-wallpaper-
          nature-lake-forest-2020-high-quality.jpg"
            alt=""
          />
        </div>
      </figure>
    </section>
    <br />
    <br />
    <br />
    <hr />
    <br />
    <br />
    <footer class="footer">
      <div class="footer-container">
        <div class="about-us__footer">
          <h1 class="footer-h1">About Our Company</h1>
          <br />
          <p>
            Welcome to ER News, your trusted source for breaking news,
            insightful analysis, and in-depth reporting. Our mission is to keep
            you informed, engaged, and empowered by delivering accurate and
            timely news from around the world. At [Your Website Name], we are
            committed to journalistic integrity and providing balanced
            perspectives on the stories that matter most. Whether it’s politics,
            business, technology, culture, or local events, we aim to bring you
            the facts and context you need to stay ahead.
          </p>
          <p>Copyright 2024 ER Company. All rights reserved.</p>
        </div>
        <div class="our-links__footer">
          <h1 class="footer-h1">Our Links</h1>
          <br />
          <a href="" class="footer-links"> <p>Advertise</p></a>
          <a href="" class="footer-links"><p>Support</p></a>
          <a href="" class="footer-links"><p>Our company</p></a>
          <a href="" class="footer-links"> <p>Contact</p></a>
        </div>
        <div class="social-media-footer-icons">
          <div class="social-media__footer">
            <a href="" class="footer-links"
              ><img class="social-media__pictures" src="./Images/facebook.png"
            /></a>
            <a href="" class="footer-links"
              ><img class="social-media__pictures" src="./Images/twitter.png"
            /></a>
            <a href="" class="footer-links"
              ><img class="social-media__pictures" src="./Images/instagram.png"
            /></a>
            <a href="" class="footer-links"
              ><img class="social-media__pictures" src="./Images/pinterest.png"
            /></a>
          </div>
          <br />
          <div>
            <a href="" class="footer-links"><p>Terms of use</p></a>
            <br />
            <a href="" class="footer-links"><p>Privacy Policy</p></a>
            <br />
            <a href="" class="footer-links"><p>Designed by ER</p></a>
            <br>
            <div>
    <?php

    if (isset($_SESSION['email']) && trim($_SESSION['email']) === "elshanirron@gmail.com") {
       
        echo '<a href="dashboard.php" class="footer-links"><p>Admin Dashboard</p></a>';
    }
    ?>
</div>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>
