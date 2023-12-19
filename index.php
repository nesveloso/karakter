<?php

$message = '';
require_once "newsletter.php";

require_once "templates/header.php";

?>

    <section class="slider_section">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-5 offset-md-1">
                  <div class="detail-box">
                    <h1>
                      Explore <br>
                      Evaluate <br>
                      Reinvent Yourself!
                    </h1>
                    <div class="btn-box">
                      <a href="#about_section" class="btn-1">
                        About Karakter
                      </a>
                      <a href="#quote_section" class="btn-2">
                        Get Your Quote
                      </a>
                    </div>
                  </div>
                </div>

                <div class="offset-md-1 col-md-4 img-container">
                  <div class="img-box">
                    <img src="assets/images/UI/slider_axalot.png" alt="Karakter">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- About -->
  <section id="about_section" class="about_section layout_padding">
    <div class="container">
      <div class="detail-box">
        <h2>
          About Karakter Project
        </h2>
        <p id="small_text">
          Welcome to Karakter, where reality turns into a game! We're a unique virtual community designed for you to explore different facets of your personality.
          It all began with a solo project led by a full-stack developer who set out to explore new tools. While the idea is not yet 100% complete, it has 
          garnered positive support from external sources!
        </p>
        <p id="big_text" style="display: none;">
          Welcome to Karakter, where reality turns into a game! We're a unique virtual community designed for you to explore different facets of your personality.
          It all began with a solo project led by a full-stack developer who set out to explore new tools. While the idea is not yet 100% complete, it has 
          garnered positive support from external sources!
          The heart of Karakter lies in its engaging mini-games, where participants can delve into how they are perceived by others across different facets 
          of their personality, from temperament to fashion choices. It's a playful exploration of identity, allowing individuals to craft their visual narrative
          through the selection of a profile picture that captures their vectorized self—a delightful blend of human and canine elements, creating a unique 
          representation. In the world of Karakter, it's all about the essence—no strings attached. 
        </p>

        <button class="btn-2" onclick="readMore(this)">Read More</button>
      </div>
    </div>
  </section>

  <hr>

  <!-- Quote -->
  <section id="quote_section" class="quote_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <div class="img-box">
            <img src="assets/images/UI/the_quote.png" alt="">
          </div>
        </div>
        <div class="col-md-7">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                What would be Your quote?
              </h2>
            </div>
            <p id="quoteText">
              <br>
            </p>
            <p id="categoryText">
              <br>
            </p>
            <div class="btn-box">
              <button class="btn-1" onclick="lockQuote()">
                Pick
              </button>
              <button class="btn-2" onclick="generateRandomQuote()">
                Random
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Category -->
  <section class="category_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Categories
        </h2>
      </div>
      <div class="category_container">
        <div class="box">
          <div class="img-box">
            <img src="assets/images/icons/categories/compet.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              The Strategist (Competitive)
            </h5>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="assets/images/icons/categories/team.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              The Team Player (Cooperative)
            </h5>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="assets/images/icons/categories/adventure.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              The Fearless Explorer (Adventure)
            </h5>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="assets/images/icons/categories/cozy.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              The Chilled Nomad (Cozy)
            </h5>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="assets/images/icons/categories/artist.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              The Artistic Junkie (Creative)
            </h5>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="assets/images/icons/categories/horror.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              The Master of Shadows (Horror)
            </h5>
          </div>
        </div>
      </div>
      <br><br>
      <p>And more soon...</p>
    </div>
  </section>

  <!-- App -->
  <section id="app_section" class="app_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                What about the app?
              </h2>
            </div>
            <p>
              <br>We're cooking up a super cool app that's going to add a sprinkle of awesomeness to Karakter.
              Once it's up and running, you'll be able to snag it for a free download on the app <strong>PlayStore</strong>.<br><br>
              To ensure you're in the loop and don't miss out on the latest and greatest, be sure to follow Karakter on social media!
              Stay tuned for updates heading your way soon!
            </p>
          </div>
        </div>
        <div class="col-md-5">
          <div class="img-box">
            <img src="assets/images/UI/mobile.png" alt="Mobile">
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php
    require_once("templates/footer.php");
  ?>