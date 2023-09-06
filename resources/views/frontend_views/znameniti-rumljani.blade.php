<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Entrada</title>
    <!-- favion -->
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="img/favicon-16x16.png"
    />
    <!-- link to font awesome -->
    <link
      media="all"
      rel="stylesheet"
      href="vendors/font-awesome/css/font-awesome.css"
    />
    <!-- link to custom icomoon fonts -->
    <link
      rel="stylesheet"
      type="text/css"
      href="css/fonts/icomoon/icomoon.css"
    />
    <!-- link to wow js animation -->
    <link media="all" rel="stylesheet" href="vendors/animate/animate.css" />
    <!-- link to jQuery UI css -->
    <link
      media="all"
      rel="stylesheet"
      href="vendors/jquery-ui/jquery-ui.min.css"
    />
    <!-- include bootstrap css -->
    <link media="all" rel="stylesheet" href="css/bootstrap.css" />
    <!-- include main css -->
    <link media="all" rel="stylesheet" href="css/main.css" />
  </head>
  <body>
    <div class="preloader" id="pageLoad">
      <div class="holder">
        <div class="coffee_cup"></div>
      </div>
    </div>
    <!-- main wrapper -->
    <div id="wrapper">
      <div class="page-wrapper">
        <!-- main header -->
        <header id="header" class="white-header">
          <!-- search form -->
          <form class="search-form" action="#">
            <fieldset>
              <a href="#" class="search-opener hidden-md hidden-lg">
                <span class="icon-search"></span>
              </a>
              <div class="search-wrap">
                <a href="#" class="search-opener close">
                  <span class="icon-cross"></span>
                </a>
                <div class="trip-form trip-form-v2 trip-search-main">
                  <div class="trip-form-wrap">
                    <div class="holder">
                      <label>Departing</label>
                      <div class="select-holder">
                        <div
                          id="datepicker"
                          class="input-group date"
                          data-date-format="mm-dd-yyyy"
                        >
                          <input class="form-control" type="text" readonly />
                          <span class="input-group-addon"
                            ><i class="icon-drop"></i
                          ></span>
                        </div>
                      </div>
                    </div>
                    <div class="holder">
                      <label>Returning</label>
                      <div class="select-holder">
                        <div
                          id="datepicker1"
                          class="input-group date"
                          data-date-format="mm-dd-yyyy"
                        >
                          <input class="form-control" type="text" readonly />
                          <span class="input-group-addon"
                            ><i class="icon-drop"></i
                          ></span>
                        </div>
                      </div>
                    </div>
                    <div class="holder">
                      <label for="select-region">Select Region</label>
                      <div class="select-holder">
                        <select
                          class="trip-select trip-select-v2 region"
                          name="region"
                          id="select-region"
                        >
                          <option value="select">Africa</option>
                          <option value="select">Arctic</option>
                          <option value="select">Asia</option>
                          <option value="select">Europe</option>
                          <option value="select">Oceanaia</option>
                          <option value="select">Polar</option>
                        </select>
                      </div>
                    </div>
                    <div class="holder">
                      <label for="select-activity">Select Activity</label>
                      <div class="select-holder">
                        <select
                          class="trip-select trip-select-v2 acitvity"
                          name="activity"
                          id="select-activity"
                        >
                          <option value="Holiday Type">Holiday Type</option>
                          <option value="Holiday Type">Beach Holidays</option>
                          <option value="Holiday Type">Weekend Trips</option>
                          <option value="Holiday Type">Summer and Sun</option>
                          <option value="Holiday Type">Water Sports</option>
                          <option value="Holiday Type">Scuba Diving</option>
                        </select>
                      </div>
                    </div>
                    <div class="holder">
                      <label for="price-range">Price Range</label>
                      <div class="select-holder">
                        <select
                          class="trip-select trip-select-v2 price"
                          name="activity"
                          id="price-range"
                        >
                          <option value="Price Range">Price Range</option>
                          <option value="Price Range">$1 - $499</option>
                          <option value="Price Range">$500 - $999</option>
                          <option value="Price Range">$1000 - $1499</option>
                          <option value="Price Range">$1500 - $2999</option>
                          <option value="Price Range">$3000+</option>
                        </select>
                      </div>
                    </div>
                    <div class="holder">
                      <button class="btn btn-trip btn-trip-v2" type="submit">
                        Find Tours
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </fieldset>
          </form>
        </header>
        <!-- main banner -->
        <section
          class="banner banner-inner parallax"
          data-stellar-background-ratio="0.5"
          id="banner-layout-rightsidebar"
        >
          <div class="banner-text">
            <div class="center-text">
              <div class="container">
                <h1>Знаменити Румљани</h1>
                <strong class="subtitle"
                  >Туристика организација општине Рума</strong
                >
              </div>
            </div>
          </div>
        </section>

        <aside class="count-block">
          <div class="container-fluid">
            <div class="row">
              <div class="col-xs-6 col-md-3 block-1">
                <div class="holder">
                  <span class="icon icon-group-large"></span>
                  <span class="info"><span class="counter">30076</span></span>
                  <span class="txt">Stanovnika</span>
                </div>
              </div>
              <div class="col-xs-6 col-md-3 block-2">
                <div class="holder">
                  <span class="icon icon-duration"></span>
                  <span class="info"><span class="counter">1546</span></span>
                  <span class="txt">Prvi put pomenut</span>
                </div>
              </div>
              <div class="col-xs-6 col-md-3 block-3">
                <div class="holder">
                  <span class="icon icon-mountain"></span>
                  <span class="info"><span class="counter">111</span></span>
                  <span class="txt">Nadmorska visina</span>
                </div>
              </div>
              <div class="col-xs-6 col-md-3 block-4">
                <div class="holder">
                  <span class="icon icon-urban"></span>
                  <span class="info"><span class="counter">67.5</span></span>
                  <span class="txt">Površina u km2</span>
                </div>
              </div>
            </div>
          </div>
        </aside>
        <!-- main container -->
        <main>
          <!-- content with sidebar -->
          <div class="content-with-sidebar common-spacing content-left">
            <div class="container">
              <div id="two-columns" class="row">
                <!-- left-side -->
                <div id="content" class="col-sm-8 col-md-9">
                  <article>
                    <h2>Знаменити Румљани</h2>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                      Beatae enim fugiat architecto at necessitatibus maxime
                      possimus veniam provident laborum officia laudantium,
                      commodi, animi quisquam, eum totam? Amet tempora, dolore
                      animi!
                    </p>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                      Beatae enim fugiat architecto at necessitatibus maxime
                      possimus veniam provident laborum officia laudantium,
                      commodi, animi quisquam, eum totam? Amet tempora, dolore
                      animi!
                    </p>
                    <!-- <img
                      src="img/img-02.jpg"
                      height="627"
                      width="960"
                      alt="image description"
                      style="
                        width: 100%;
                        margin-top: 0px;
                        margin-left: -0.215311px;
                      "
                    /> -->
                    <!-- blockquotes start -->
                    <div class="demo-wrapper">
                      <div
                        style="padding: 20px"
                        class="testimonial-holder parallax bottom-spacing"
                        data-stellar-background-ratio=".8"
                        id="testimonial-home-page"
                      >
                        <div class="">
                          <div id="testimonial-home-slide">
                            <div class="slide">
                              <blockquote class="testimonial-quote">
                                <div class="img">
                                  <img
                                    src="img/poznati-rumljani/Atanasije_Stojkovic_by_Djurkovic.jpg"
                                    height="112"
                                    width="112"
                                    alt="image description"
                                  />
                                </div>
                                <div class="text">
                                  <cite>Атанасије Стојковић (1773 — 1832)</cite>
                                  <q
                                    >Атанасије је рођен у Руми 1773. године, од
                                    оца Јована Стојковића и мајке Ане Гроздић. У
                                    родном месту је пошао у школу и после
                                    основне, био је послат да учи кожарски
                                    трговачки занат у Пешти. Оданде 1787. године
                                    побегне и смести се код неког унијатског
                                    свештеника у Трнави (Словачкој), где је
                                    певао у цркви.</q
                                  >
                                </div>
                              </blockquote>
                            </div>
                            <div class="slide">
                              <blockquote class="testimonial-quote">
                                <div class="img">
                                  <img
                                    src="img/poznati-rumljani/bozidar-grujovic.webp"
                                    height="112"
                                    width="112"
                                    alt="image description"
                                  />
                                </div>
                                <div class="text">
                                  <cite>Божидар Грујовић (1778 — 1807)</cite>
                                  <q
                                    >Био је поријеклом из ваљевског округа, а
                                    рођен је у Руми. Завршио је право на
                                    Пештанском универзитету.[2] Био је професор
                                    права и историје на Харковском универзитету
                                    до преласка у Србију 1805. године. Приликом
                                    преласка у Србију.</q
                                  >
                                </div>
                              </blockquote>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- blockquote end -->
                  </article>
                </div>
                <!-- leftw-side-end -->
                <!-- sidebar -->
                <aside
                  id="sidebar-right"
                  class="col-sm-4 col-md-3 sidebar sidebar-list"
                >
                  <div class="sidebar-holder">
                    <!-- accordion filters in sidebar -->
                    <div class="accordion">
                      <div class="accordion-group">
                        <div class="panel-heading">
                          <h4 class="panel-title">
                            <a
                              role="button"
                              data-toggle="collapse"
                              href="#collapse1"
                              aria-expanded="true"
                              aria-controls="collapse1"
                              >Најновије вести</a
                            >
                          </h4>
                        </div>
                        <div
                          id="collapse1"
                          class="panel-collapse collapse in"
                          role="tabpanel"
                        >
                          <div class="panel-body">
                            <ul class="side-list region-list hovered-list">
                              <li>
                                <a href="#">
                                  <span class="ico-holder">
                                    <span class="icon-asia"></span>
                                  </span>
                                  <span class="text">Asia</span>
                                </a>
                              </li>
                              <li>
                                <a href="#">
                                  <span class="ico-holder">
                                    <span class="icon-arctic"></span>
                                  </span>
                                  <span class="text">Arctic</span>
                                </a>
                              </li>
                              <li>
                                <a href="#">
                                  <span class="ico-holder">
                                    <span class="icon-middle-east"></span>
                                  </span>
                                  <span class="text">Middle East</span>
                                </a>
                              </li>
                              <li>
                                <a href="#">
                                  <span class="ico-holder">
                                    <span class="icon-africa"></span>
                                  </span>
                                  <span class="text">Africa</span>
                                </a>
                              </li>
                              <li>
                                <a href="#">
                                  <span class="ico-holder">
                                    <span class="icon-europe"></span>
                                  </span>
                                  <span class="text">Europe</span>
                                </a>
                              </li>
                              <li>
                                <a href="#">
                                  <span class="ico-holder">
                                    <span class="icon-north-america"></span>
                                  </span>
                                  <span class="text">North America</span>
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-group">
                        <div class="panel-heading">
                          <h4 class="panel-title">
                            <a
                              role="button"
                              data-toggle="collapse"
                              href="#collapse2"
                              aria-expanded="true"
                              aria-controls="collapse2"
                              >Туристизам</a
                            >
                          </h4>
                        </div>
                        <div
                          id="collapse2"
                          class="panel-collapse collapse in"
                          role="tabpanel"
                        >
                          <div class="panel-body">
                            <ul class="side-list horizontal-list hovered-list">
                              <li>
                                <a href="#">
                                  <span class="icon-hiking-camping"></span>
                                  <span class="popup"> Hiking </span>
                                </a>
                              </li>
                              <li>
                                <a href="#">
                                  <span class="icon-wildlife"></span>
                                  <span class="popup"> Wildlife </span>
                                </a>
                              </li>
                              <li>
                                <a href="#">
                                  <span class="icon-boating"></span>
                                  <span class="popup"> Boating </span>
                                </a>
                              </li>
                              <li>
                                <a href="#">
                                  <span class="icon-food-wine"></span>
                                  <span class="popup"> Food &amp; Wine </span>
                                </a>
                              </li>
                              <li>
                                <a href="#">
                                  <span class="icon-mountain-biking"></span>
                                  <span class="popup"> Mountain Biking </span>
                                </a>
                              </li>
                              <li>
                                <a href="#">
                                  <span class="icon-scuba-diving"></span>
                                  <span class="popup"> Scuba Diving </span>
                                </a>
                              </li>
                              <li>
                                <a href="#">
                                  <span class="icon-peak"></span>
                                  <span class="popup"> Peak </span>
                                </a>
                              </li>
                              <li>
                                <a href="#">
                                  <span class="icon-bungee"></span>
                                  <span class="popup"> Bungee </span>
                                </a>
                              </li>
                              <li>
                                <a href="#">
                                  <span class="icon-family"></span>
                                  <span class="popup"> Family </span>
                                </a>
                              </li>
                              <li>
                                <a href="#">
                                  <span class="icon-budget"></span>
                                  <span class="popup"> Budget </span>
                                </a>
                              </li>
                              <li>
                                <a href="#">
                                  <span class="icon-culture"></span>
                                  <span class="popup"> Culture </span>
                                </a>
                              </li>
                              <li>
                                <a href="#">
                                  <span class="icon-diamond"></span>
                                  <span class="popup"> Luxury </span>
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </aside>
              </div>
            </div>
          </div>
        </main>
      </div>

      <!-- main footer -->
      <footer id="footer">
        <div class="container">
          <!-- newsletter form -->
          <form
            action="php/subscribe.html"
            id="signup"
            method="post"
            class="newsletter-form"
          >
            <fieldset>
              <div class="input-holder">
                <input
                  type="email"
                  class="form-control"
                  placeholder="Email Address"
                  name="subscriber_email"
                  id="subscriber_email"
                />
                <input type="submit" value="GO" />
              </div>
              <span class="info" id="subscribe_message"
                >To receive news, updates and tour packages via email.</span
              >
            </fieldset>
          </form>
          <!-- footer links -->
          <div class="row footer-holder">
            <nav class="col-sm-4 col-lg-2 footer-nav active">
              <h3>About Entrada</h3>
              <ul class="slide">
                <li><a href="#">The Company</a></li>
                <li><a href="#">Our Values</a></li>
                <li><a href="#">Responsiblity</a></li>
                <li><a href="#">Our Mission</a></li>
                <li><a href="#">Opportunity</a></li>
                <li><a href="#">Safety Concerns</a></li>
              </ul>
            </nav>
            <nav class="col-sm-4 col-lg-2 footer-nav">
              <h3>Destinations</h3>
              <ul class="slide">
                <li><a href="#">Nepal</a></li>
                <li><a href="#">Thailand</a></li>
                <li><a href="#">Vietnam</a></li>
                <li><a href="#">Fiji Island</a></li>
                <li><a href="#">United States</a></li>
                <li><a href="#">Australia</a></li>
              </ul>
            </nav>
            <nav class="col-sm-4 col-lg-2 footer-nav">
              <h3>themes</h3>
              <ul class="slide">
                <li><a href="#">Hiking and Camping</a></li>
                <li><a href="#">Trekking Tours</a></li>
                <li><a href="#">Jungle Safaris</a></li>
                <li><a href="#">Bungee Jumping</a></li>
                <li><a href="#">Wildlife &amp; Polar</a></li>
                <li><a href="#">Peak Climbing</a></li>
              </ul>
            </nav>
            <nav class="col-sm-4 col-lg-2 footer-nav">
              <h3>reservation</h3>
              <ul class="slide">
                <li><a href="#">Booking Conditions</a></li>
                <li><a href="#">My Bookings</a></li>
                <li><a href="#">Refund Policy</a></li>
                <li><a href="#">Includes &amp; Excludes</a></li>
                <li><a href="#">Your Responsibilities</a></li>
                <li><a href="#">Order a Brochure</a></li>
              </ul>
            </nav>
            <nav class="col-sm-4 col-lg-2 footer-nav">
              <h3>ask Entrada</h3>
              <ul class="slide">
                <li><a href="#">Why Entrada?</a></li>
                <li><a href="#">Ask an Expert</a></li>
                <li><a href="#">Safety Updates</a></li>
                <li><a href="#">We Help When...</a></li>
                <li><a href="#">Personal Matters</a></li>
              </ul>
            </nav>
            <nav class="col-sm-4 col-lg-2 footer-nav last">
              <h3>contact Entrada</h3>
              <ul class="slide address-block">
                <li class="wrap-text">
                  <span class="icon-tel"></span>
                  <a href="tel:02072077878">(020) 72077878</a>
                </li>
                <li class="wrap-text">
                  <span class="icon-fax"></span>
                  <a href="tel:02088828282">(020) 88828282</a>
                </li>
                <li class="wrap-text">
                  <span class="icon-email"></span>
                  <a href="mailto:info@entrada.com">info@entrada.com</a>
                </li>
                <li>
                  <span class="icon-home"></span>
                  <address>707 London Road Isleworth, Middx TW7 7QD</address>
                </li>
              </ul>
            </nav>
          </div>
          <!-- social wrap -->
          <ul class="social-wrap">
            <li class="facebook">
              <a href="#">
                <span class="icon-facebook"></span>
                <strong class="txt">Like Us</strong>
              </a>
            </li>
            <li class="twitter">
              <a href="#">
                <span class="icon-twitter"></span>
                <strong class="txt">Follow On</strong>
              </a>
            </li>
            <li class="google-plus">
              <a href="#">
                <span class="icon-google-plus"></span>
                <strong class="txt">+1 On Google</strong>
              </a>
            </li>
            <li class="vimeo">
              <a href="#">
                <span class="icon-vimeo"></span>
                <strong class="txt">Share At</strong>
              </a>
            </li>
            <li class="pin">
              <a href="#">
                <span class="icon-pin"></span>
                <strong class="txt">Pin It</strong>
              </a>
            </li>
            <li class="dribble">
              <a href="#">
                <span class="icon-dribble"></span>
                <strong class="txt">Dribbble</strong>
              </a>
            </li>
          </ul>
        </div>
        <div class="footer-bottom">
          <div class="container">
            <div class="row">
              <div class="col-lg-6">
                <!-- copyright -->
                <strong class="copyright"
                  ><i class="fa fa-copyright"></i> Copyright 2016 - Entrada - An
                  Adventure Theme - by <a href="#">Waituk</a></strong
                >
              </div>
              <div class="col-lg-6">
                <ul class="payment-option">
                  <li>
                    <img src="img/footer/visa.png" alt="visa" />
                  </li>
                  <li>
                    <img
                      src="img/footer/mastercard.png"
                      height="20"
                      width="33"
                      alt="master card"
                    />
                  </li>
                  <li>
                    <img
                      src="img/footer/paypal.png"
                      height="20"
                      width="72"
                      alt="paypal"
                    />
                  </li>
                  <li>
                    <img
                      src="img/footer/maestro.png"
                      height="20"
                      width="33"
                      alt="maestro"
                    />
                  </li>
                  <li>
                    <img
                      src="img/footer/bank-transfer.png"
                      height="20"
                      width="55"
                      alt="bank transfer"
                    />
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- scroll to top -->
    <div class="scroll-holder text-center">
      <a href="javascript:" id="scroll-to-top"
        ><i class="icon-arrow-down"></i
      ></a>
    </div>
    <!-- jquery library -->
    <script src="vendors/jquery/jquery-2.1.4.min.js"></script>
    <!-- external scripts -->
    <script src="vendors/jquery-mobile/jquery.mobile.custom.min.js"></script>
    <script src="vendors/bootstrap/javascripts/bootstrap.min.js"></script>
    <script src="vendors/jquery-placeholder/jquery.placeholder.min.js"></script>
    <script src="vendors/match-height/jquery.matchHeight.js"></script>
    <script src="vendors/wow/wow.min.js"></script>
    <script src="vendors/stellar/jquery.stellar.min.js"></script>
    <script src="vendors/validate/jquery.validate.js"></script>
    <script src="vendors/waypoint/waypoints.min.js"></script>
    <script src="vendors/counter-up/jquery.counterup.min.js"></script>
    <script src="vendors/jquery-ui/jquery-ui.min.js"></script>
    <script src="vendors/jQuery-touch-punch/jquery.ui.touch-punch.min.js"></script>
    <script src="vendors/fancybox/jquery.fancybox.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="vendors/jcf/js/jcf.js"></script>
    <script src="vendors/jcf/js/jcf.select.js"></script>
    <script src="vendors/retina/retina.min.js"></script>
    <script src="vendors/bootstrap-datetimepicker-master/dist/js/bootstrap-datepicker.js"></script>
    <!-- mailchimp newsletter subscriber -->
    <script src="js/mailchimp.js"></script>
    <!-- custom script -->
    <script src="js/jquery.main.js"></script>
  </body>
</html>
