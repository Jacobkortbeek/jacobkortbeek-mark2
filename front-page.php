<?php get_header(); ?>
<main class="home">
  <div id="fullpage">

    <div class="section hero" id="hero">
      <div class="container">
        <div class="row">
          <div class="col s12">
            <h1 class="center-align animated zoomIn delay-1s"><?php the_field( 'heading' ); ?></h1>
            <p class="center-align animated slideInLeft delay-2s"><?php the_field( 'sub_heading' ); ?></p>
          </div>
        </div>
      </div>
    </div>

    <div class="section about" id="about">
      <div class="slide">
        <div class="container">
          <div class="row">
            <div class="col s12 m6">
              <div class="col-content abHeight">
                <div class="abImg center-align">
                  <?php if ( get_field( 'headshot') ) { ?>
	                  <img src="<?php the_field( 'headshot' ); ?>" />
                  <?php } ?>
                </div>
              </div>
            </div>
            <div class="col s12 m6">
              <div class="col-content abHeight">
                <h3><?php the_field( 'about_title' ); ?></h3>
                <p>
                  <?php the_field( 'about_information' ); ?>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="slide">
        <div class="container">
          <div class="row">
            <div class="col s12">
              <div class="col-content abHeight">
                <h4 class="center-align"><?php the_field( 'second_slide_title' ); ?></h4>
                <h5 class="center-align"><?php the_field( 'second_information' ); ?></h5>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="slide">
        <div class="container">
          <div class="row">
            <div class="col s12">
              <div class="col-content abHeight center-align">
                <h4>Social Media</h4>
                <a href="#" class="tooltipped animated slideInLeft delay-30s" data-position="bottom" data-tooltip="@JacobKortbeek"><i class="fab fa-twitter"></i></a>
                <a href="#" class="tooltipped" data-position="bottom" data-tooltip="@jacobkortbeek"><i class="fab fa-instagram"></i></a>
                <a href="#" class="tooltipped" data-position="bottom" data-tooltip="Jacobkortbeek"><i class="fab fa-github"></i></a>
                <a href="#" class="tooltipped" data-position="bottom" data-tooltip="Message Me"><i class="fab fa-whatsapp"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="section code" id="code">
        <div class="slide">
          <div class="container">
            <div class="row">
              <div class="col s12">
                <div class="col-content abHeight skills flow-text">
                  <h2 class="center-align">My Skills</h2>
                  <p class="center-align">
                    Slide to see my skills.
                  </p>
                </div>
              </div>
            </div>
          </div>

        </div>

        <div class="slide">
          <div class="container">
            <div class="row center-align">
              <div class="col s12">
                <div class="col-content">
                  <h2 class="center-align">My Skills</h2>
                  <p class="center-align">
                    These are my most comonly used skills
                  </p>
                </div>
                <div class="col s12 skills">
                  <div class="col-content flow-text">
                    <a href="#" class="tooltipped" data-position="bottom" data-tooltip="HTML 5"><i class="fab fa-html5"></i></a>
                    <a href="#" class="tooltipped" data-position="bottom" data-tooltip="CSS 3"><i class="fab fa-css3-alt"></i></a>
                    <a href="#" class="tooltipped" data-position="bottom" data-tooltip="JavaScript"><i class="fab fa-js"></i></a>
                    <a href="#" class="tooltipped" data-position="bottom" data-tooltip="Sass"><i class="fab fa-sass"></i></a>
                    <a href="#" class="tooltipped" data-position="bottom" data-tooltip="NPM"><i class="fab fa-npm"></i></a>
                    <a href="#" class="tooltipped" data-position="bottom" data-tooltip="Gulp"><i class="fab fa-gulp"></i></a>
                    <a href="#" class="tooltipped" data-position="bottom" data-tooltip="WP-PHP"><i class="fab fa-php"></i></a>
                    <a href="#" class="tooltipped" data-position="bottom" data-tooltip="github"><i class="fab fa-github"></i></a>
                    <a href="#" class="tooltipped" data-position="bottom" data-tooltip="NodeJS"><i class="fab fa-node"></i></a>
                    <a href="#" class="tooltipped" data-position="bottom" data-tooltip="SQL"><i class="fas fa-database"></i></a>
                    <a href="#" class="tooltipped" data-position="bottom" data-tooltip="Liquid"><img src="assets/img/shopify.svg" alt=""></a>
                    <a href="#" class="tooltipped" data-position="bottom" data-tooltip="Photoshop"><img src="assets/img/adobephotoshop.svg" alt=""></a>
                    <a href="#" class="tooltipped" data-position="bottom" data-tooltip="Illustrator"><img src="assets/img/adobeillustrator.svg" alt=""></a>
                    <a href="#" class="tooltipped" data-position="bottom" data-tooltip="Wordpress"><i class="fab fa-wordpress"></i></a>
                    <a href="#" class="tooltipped" data-position="bottom" data-tooltip="Shopify"><img src="assets/img/shopify.svg" alt=""></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="container">
            <div class="row">
              <div class="col s12">
                <div class="col-content">
                  <h2 class="center-align">I Have Experence With:</h2>
                  <p class="center-align">
                    These are technologies I have experience with but haven't used extensivly
                  </p>
                </div>
                <div class="col s12 skills">
                  <div class="col-content flow-text center-align">
                    <a href="#" class="tooltipped" data-position="bottom" data-tooltip="Angularjs"><i class="fab fa-angular"></i></a>
                    <a href="#" class="tooltipped" data-position="bottom" data-tooltip="Reactjs"><i class="fab fa-react"></i></a>
                    <a href="#" class="tooltipped" data-position="bottom" data-tooltip="MongoDB"><img src="assets/img/mongodb.svg" alt=""></a>
                    <a href="#" class="tooltipped" data-position="bottom" data-tooltip="express">express</a>
                    <a href="#" class="tooltipped" data-position="bottom" data-tooltip="WebPack"><img src="assets/img/webpack.svg" alt=""></a>
                    <a href="#" class="tooltipped" data-position="bottom" data-tooltip="Pug">Pug</a>
                    <a href="#" class="tooltipped" data-position="bottom" data-tooltip="Premiere Pro"><img src="assets/img/adobepremiere.svg" alt=""></a>
                    <a href="#" class="tooltipped" data-position="bottom" data-tooltip="After Effects"><img src="assets/img/adobeaftereffects.svg" alt=""></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="container">
            <div class="row">
              <div class="col s12">
                <div class="col-content">
                  <h2 class="center-align">What I Am Learning</h2>
                  <p class="center-align">
                    I give at least one hour a day to learn new languages
                  </p>
                </div>
                <div class="col s12 skills">
                  <div class="col-content flow-text center-align">
                    <a href="#" class="tooltipped" data-position="bottom" data-tooltip="Reactjs"><i class="fab fa-react"></i></a>
                    <a href="#" class="tooltipped" data-position="bottom" data-tooltip="MongoDB"><img src="assets/img/mongodb.svg" alt=""></a>
                    <a href="#" class="tooltipped" data-position="bottom" data-tooltip="express">express</a>
                    <a href="#" class="tooltipped" data-position="bottom" data-tooltip="Java"><i class="fab fa-java"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

    </div>


    <div class="section design" id="design">
        <div class="slide">
          <div class="container">
            <div class="row">
              <div class="col s12">
                <div class="col-content abHeight skills flow-text">
                  <h2 class="center-align">My Design Portfolio</h2>
                  <p class="center-align">
                    These are my designs and illustrations
                  </p>
                  <p class="center-align">
                    (Swipe)
                  </p>
                </div>
              </div>
            </div>
          </div>

        </div>

        <div class="slide">
          <div class="container">
            <div class="row">
              <div class="col s12 m6">
                <div class="col-content">
                  <div class="card">
                    <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect">
                      <i class="material-icons">link</i>
                    </button>
                    <div class="card-image waves-effect waves-block waves-light">
                      <img class="activator" src="assets/img/yuiizaa-september-710275-unsplash.jpg">
                    </div>
                    <div class="card-content">
                      <span class="card-title activator grey-text text-darken-4">Card Title 1<i class="material-icons right">add</i></span>
                      <p><a href="#">This is a link</a></p>
                    </div>
                    <div class="card-reveal">
                      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                      <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col s12 m6">
                <div class="col-content">
                  <div class="card">
                    <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect">
                      <i class="material-icons">link</i>
                    </button>
                    <div class="card-image waves-effect waves-block waves-light">
                      <img class="activator" src="assets/img/yuiizaa-september-710275-unsplash.jpg">
                    </div>
                    <div class="card-content">
                      <span class="card-title activator grey-text text-darken-4">Card Title 2<i class="material-icons right">add</i></span>
                      <p><a href="#">This is a link</a></p>
                    </div>
                    <div class="card-reveal">
                      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                      <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col s12 m6">
                <div class="col-content">
                  <div class="card">
                    <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect">
                      <i class="material-icons">link</i>
                    </button>
                    <div class="card-image waves-effect waves-block waves-light">
                      <img class="activator" src="assets/img/yuiizaa-september-710275-unsplash.jpg">
                    </div>
                    <div class="card-content">
                      <span class="card-title activator grey-text text-darken-4">Card Title 3<i class="material-icons right">add</i></span>
                      <p><a href="#">This is a link</a></p>
                    </div>
                    <div class="card-reveal">
                      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                      <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col s12 m6">
                <div class="col-content">
                  <div class="card">
                    <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect">
                      <i class="material-icons">link</i>
                    </button>
                    <div class="card-image waves-effect waves-block waves-light">
                      <img class="activator" src="assets/img/yuiizaa-september-710275-unsplash.jpg">
                    </div>
                    <div class="card-content">
                      <span class="card-title activator grey-text text-darken-4">Card Title 4<i class="material-icons right">add</i></span>
                      <p><a href="#">This is a link</a></p>
                    </div>
                    <div class="card-reveal">
                      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                      <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="container">
            <div class="row">
              <div class="col s12 m6">
                <div class="col-content">
                  <div class="card">
                    <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect">
                      <i class="material-icons">link</i>
                    </button>
                    <div class="card-image waves-effect waves-block waves-light">
                      <img class="activator" src="assets/img/yuiizaa-september-710275-unsplash.jpg">
                    </div>
                    <div class="card-content">
                      <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">add</i></span>
                      <p><a href="#">This is a link</a></p>
                    </div>
                    <div class="card-reveal">
                      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                      <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col s12 m6">
                <div class="col-content">
                  <div class="card">
                    <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect">
                      <i class="material-icons">link</i>
                    </button>
                    <div class="card-image waves-effect waves-block waves-light">
                      <img class="activator" src="assets/img/yuiizaa-september-710275-unsplash.jpg">
                    </div>
                    <div class="card-content">
                      <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">add</i></span>
                      <p><a href="#">This is a link</a></p>
                    </div>
                    <div class="card-reveal">
                      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                      <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col s12 m6">
                <div class="col-content">
                  <div class="card">
                    <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect">
                      <i class="material-icons">link</i>
                    </button>
                    <div class="card-image waves-effect waves-block waves-light">
                      <img class="activator" src="assets/img/yuiizaa-september-710275-unsplash.jpg">
                    </div>
                    <div class="card-content">
                      <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">add</i></span>
                      <p><a href="#">This is a link</a></p>
                    </div>
                    <div class="card-reveal">
                      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                      <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col s12 m6">
                <div class="col-content">
                  <div class="card">
                    <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect">
                      <i class="material-icons">link</i>
                    </button>
                    <div class="card-image waves-effect waves-block waves-light">
                      <img class="activator" src="assets/img/yuiizaa-september-710275-unsplash.jpg">
                    </div>
                    <div class="card-content">
                      <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">add</i></span>
                      <p><a href="#">This is a link</a></p>
                    </div>
                    <div class="card-reveal">
                      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                      <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

    </div>

    <div class="section portfolio" id="portfolio">
        <div class="slide">
          <div class="container">
            <div class="row">
              <div class="col s12">
                <div class="col-content abHeight skills flow-text">
                  <h2 class="center-align">My Portfolio</h2>
                  <p class="center-align">
                    These are some websites I've built, with the technologies I used and the issues I ran into during development
                  </p>
                  <p class="center-align">
                    (Swipe)
                  </p>
                </div>
              </div>
            </div>
          </div>

        </div>

        <div class="slide">
          <div class="container">
            <div class="row">
              <div class="col s12 m6">
                <div class="col-content">
                  <div class="card">
                    <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect">
                      <i class="material-icons">link</i>
                    </button>
                    <div class="card-image waves-effect waves-block waves-light">
                      <img class="activator" src="assets/img/yuiizaa-september-710275-unsplash.jpg">
                    </div>
                    <div class="card-content">
                      <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">add</i></span>
                      <p><a href="#">This is a link</a></p>
                    </div>
                    <div class="card-reveal">
                      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                      <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col s12 m6">
                <div class="col-content">
                  <div class="card">
                    <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect">
                      <i class="material-icons">link</i>
                    </button>
                    <div class="card-image waves-effect waves-block waves-light">
                      <img class="activator" src="assets/img/yuiizaa-september-710275-unsplash.jpg">
                    </div>
                    <div class="card-content">
                      <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">add</i></span>
                      <p><a href="#">This is a link</a></p>
                    </div>
                    <div class="card-reveal">
                      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                      <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col s12 m6">
                <div class="col-content">
                  <div class="card">
                    <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect">
                      <i class="material-icons">link</i>
                    </button>
                    <div class="card-image waves-effect waves-block waves-light">
                      <img class="activator" src="assets/img/yuiizaa-september-710275-unsplash.jpg">
                    </div>
                    <div class="card-content">
                      <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">add</i></span>
                      <p><a href="#">This is a link</a></p>
                    </div>
                    <div class="card-reveal">
                      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                      <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col s12 m6">
                <div class="col-content">
                  <div class="card">
                    <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect">
                      <i class="material-icons">link</i>
                    </button>
                    <div class="card-image waves-effect waves-block waves-light">
                      <img class="activator" src="assets/img/yuiizaa-september-710275-unsplash.jpg">
                    </div>
                    <div class="card-content">
                      <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">add</i></span>
                      <p><a href="#">This is a link</a></p>
                    </div>
                    <div class="card-reveal">
                      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                      <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="container">
            <div class="row">
              <div class="col s12 m6">
                <div class="col-content">
                  <div class="card">
                    <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect">
                      <i class="material-icons">link</i>
                    </button>
                    <div class="card-image waves-effect waves-block waves-light">
                      <img class="activator" src="assets/img/yuiizaa-september-710275-unsplash.jpg">
                    </div>
                    <div class="card-content">
                      <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">add</i></span>
                      <p><a href="#">This is a link</a></p>
                    </div>
                    <div class="card-reveal">
                      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                      <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col s12 m6">
                <div class="col-content">
                  <div class="card">
                    <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect">
                      <i class="material-icons">link</i>
                    </button>
                    <div class="card-image waves-effect waves-block waves-light">
                      <img class="activator" src="assets/img/yuiizaa-september-710275-unsplash.jpg">
                    </div>
                    <div class="card-content">
                      <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">add</i></span>
                      <p><a href="#">This is a link</a></p>
                    </div>
                    <div class="card-reveal">
                      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                      <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col s12 m6">
                <div class="col-content">
                  <div class="card">
                    <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect">
                      <i class="material-icons">link</i>
                    </button>
                    <div class="card-image waves-effect waves-block waves-light">
                      <img class="activator" src="assets/img/yuiizaa-september-710275-unsplash.jpg">
                    </div>
                    <div class="card-content">
                      <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">add</i></span>
                      <p><a href="#">This is a link</a></p>
                    </div>
                    <div class="card-reveal">
                      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                      <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col s12 m6">
                <div class="col-content">
                  <div class="card">
                    <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect">
                      <i class="material-icons">link</i>
                    </button>
                    <div class="card-image waves-effect waves-block waves-light">
                      <img class="activator" src="assets/img/yuiizaa-september-710275-unsplash.jpg">
                    </div>
                    <div class="card-content">
                      <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">add</i></span>
                      <p><a href="#">This is a link</a></p>
                    </div>
                    <div class="card-reveal">
                      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                      <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

    </div>

    <div class="section reading" id="reading">
        <div class="slide">
          <div class="container">
            <div class="row">
              <div class="col s12">
                <div class="col-content abHeight skills flow-text">
                  <h2 class="center-align">My Reading List</h2>
                  <p class="center-align">
                    These are books I've read and my thoughts on them
                  </p>
                  <p class="center-align">
                    (Swipe)
                  </p>
                </div>
              </div>
            </div>
          </div>

        </div>

        <div class="slide">
          <div class="container">
            <div class="row">
              <div class="col s12 m6">
                <div class="col-content">
                  <div class="card">
                    <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect">
                      <i class="material-icons">link</i>
                    </button>
                    <div class="card-image waves-effect waves-block waves-light">
                      <img class="activator" src="assets/img/yuiizaa-september-710275-unsplash.jpg">
                    </div>
                    <div class="card-content">
                      <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">add</i></span>
                      <p><a href="#">This is a link</a></p>
                    </div>
                    <div class="card-reveal">
                      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                      <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col s12 m6">
                <div class="col-content">
                  <div class="card">
                    <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect">
                      <i class="material-icons">link</i>
                    </button>
                    <div class="card-image waves-effect waves-block waves-light">
                      <img class="activator" src="assets/img/yuiizaa-september-710275-unsplash.jpg">
                    </div>
                    <div class="card-content">
                      <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">add</i></span>
                      <p><a href="#">This is a link</a></p>
                    </div>
                    <div class="card-reveal">
                      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                      <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col s12 m6">
                <div class="col-content">
                  <div class="card">
                    <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect">
                      <i class="material-icons">link</i>
                    </button>
                    <div class="card-image waves-effect waves-block waves-light">
                      <img class="activator" src="assets/img/yuiizaa-september-710275-unsplash.jpg">
                    </div>
                    <div class="card-content">
                      <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">add</i></span>
                      <p><a href="#">This is a link</a></p>
                    </div>
                    <div class="card-reveal">
                      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                      <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col s12 m6">
                <div class="col-content">
                  <div class="card">
                    <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect">
                      <i class="material-icons">link</i>
                    </button>
                    <div class="card-image waves-effect waves-block waves-light">
                      <img class="activator" src="assets/img/yuiizaa-september-710275-unsplash.jpg">
                    </div>
                    <div class="card-content">
                      <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">add</i></span>
                      <p><a href="#">This is a link</a></p>
                    </div>
                    <div class="card-reveal">
                      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                      <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="container">
            <div class="row">
              <div class="col s12 m6">
                <div class="col-content">
                  <div class="card">
                    <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect">
                      <i class="material-icons">link</i>
                    </button>
                    <div class="card-image waves-effect waves-block waves-light">
                      <img class="activator" src="assets/img/yuiizaa-september-710275-unsplash.jpg">
                    </div>
                    <div class="card-content">
                      <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">add</i></span>
                      <p><a href="#">This is a link</a></p>
                    </div>
                    <div class="card-reveal">
                      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                      <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col s12 m6">
                <div class="col-content">
                  <div class="card">
                    <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect">
                      <i class="material-icons">link</i>
                    </button>
                    <div class="card-image waves-effect waves-block waves-light">
                      <img class="activator" src="assets/img/yuiizaa-september-710275-unsplash.jpg">
                    </div>
                    <div class="card-content">
                      <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">add</i></span>
                      <p><a href="#">This is a link</a></p>
                    </div>
                    <div class="card-reveal">
                      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                      <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col s12 m6">
                <div class="col-content">
                  <div class="card">
                    <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect">
                      <i class="material-icons">link</i>
                    </button>
                    <div class="card-image waves-effect waves-block waves-light">
                      <img class="activator" src="assets/img/yuiizaa-september-710275-unsplash.jpg">
                    </div>
                    <div class="card-content">
                      <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">add</i></span>
                      <p><a href="#">This is a link</a></p>
                    </div>
                    <div class="card-reveal">
                      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                      <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col s12 m6">
                <div class="col-content">
                  <div class="card">
                    <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect">
                      <i class="material-icons">link</i>
                    </button>
                    <div class="card-image waves-effect waves-block waves-light">
                      <img class="activator" src="assets/img/yuiizaa-september-710275-unsplash.jpg">
                    </div>
                    <div class="card-content">
                      <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">add</i></span>
                      <p><a href="#">This is a link</a></p>
                    </div>
                    <div class="card-reveal">
                      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                      <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

    </div>

    <div class="section blog" id="blog">
        <div class="slide">
          <div class="container">
            <div class="row">
              <div class="col s12">
                <div class="col-content abHeight skills flow-text">
                  <h2 class="center-align">My Blog</h2>
                  <p class="center-align">
                    These are my thoughts on anything I feel like writing about
                  </p>
                  <p class="center-align">
                    (Swipe)
                  </p>
                </div>
              </div>
            </div>
          </div>

        </div>

        <div class="slide">
          <div class="container">
            <div class="row">
              <div class="col s12 m6">
                <div class="col-content">
                  <div class="card">
                    <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect">
                      <i class="material-icons">link</i>
                    </button>
                    <div class="card-image waves-effect waves-block waves-light">
                      <img class="activator" src="assets/img/yuiizaa-september-710275-unsplash.jpg">
                    </div>
                    <div class="card-content">
                      <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">add</i></span>
                      <p><a href="#">This is a link</a></p>
                    </div>
                    <div class="card-reveal">
                      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                      <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col s12 m6">
                <div class="col-content">
                  <div class="card">
                    <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect">
                      <i class="material-icons">link</i>
                    </button>
                    <div class="card-image waves-effect waves-block waves-light">
                      <img class="activator" src="assets/img/yuiizaa-september-710275-unsplash.jpg">
                    </div>
                    <div class="card-content">
                      <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">add</i></span>
                      <p><a href="#">This is a link</a></p>
                    </div>
                    <div class="card-reveal">
                      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                      <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col s12 m6">
                <div class="col-content">
                  <div class="card">
                    <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect">
                      <i class="material-icons">link</i>
                    </button>
                    <div class="card-image waves-effect waves-block waves-light">
                      <img class="activator" src="assets/img/yuiizaa-september-710275-unsplash.jpg">
                    </div>
                    <div class="card-content">
                      <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">add</i></span>
                      <p><a href="#">This is a link</a></p>
                    </div>
                    <div class="card-reveal">
                      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                      <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col s12 m6">
                <div class="col-content">
                  <div class="card">
                    <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect">
                      <i class="material-icons">link</i>
                    </button>
                    <div class="card-image waves-effect waves-block waves-light">
                      <img class="activator" src="assets/img/yuiizaa-september-710275-unsplash.jpg">
                    </div>
                    <div class="card-content">
                      <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">add</i></span>
                      <p><a href="#">This is a link</a></p>
                    </div>
                    <div class="card-reveal">
                      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                      <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="container">
            <div class="row">
              <div class="col s12 m6">
                <div class="col-content">
                  <div class="card">
                    <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect">
                      <i class="material-icons">link</i>
                    </button>
                    <div class="card-image waves-effect waves-block waves-light">
                      <img class="activator" src="assets/img/yuiizaa-september-710275-unsplash.jpg">
                    </div>
                    <div class="card-content">
                      <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">add</i></span>
                      <p><a href="#">This is a link</a></p>
                    </div>
                    <div class="card-reveal">
                      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                      <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col s12 m6">
                <div class="col-content">
                  <div class="card">
                    <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect">
                      <i class="material-icons">link</i>
                    </button>
                    <div class="card-image waves-effect waves-block waves-light">
                      <img class="activator" src="assets/img/yuiizaa-september-710275-unsplash.jpg">
                    </div>
                    <div class="card-content">
                      <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">add</i></span>
                      <p><a href="#">This is a link</a></p>
                    </div>
                    <div class="card-reveal">
                      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                      <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col s12 m6">
                <div class="col-content">
                  <div class="card">
                    <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect">
                      <i class="material-icons">link</i>
                    </button>
                    <div class="card-image waves-effect waves-block waves-light">
                      <img class="activator" src="assets/img/yuiizaa-september-710275-unsplash.jpg">
                    </div>
                    <div class="card-content">
                      <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">add</i></span>
                      <p><a href="#">This is a link</a></p>
                    </div>
                    <div class="card-reveal">
                      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                      <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col s12 m6">
                <div class="col-content">
                  <div class="card">
                    <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect">
                      <i class="material-icons">link</i>
                    </button>
                    <div class="card-image waves-effect waves-block waves-light">
                      <img class="activator" src="assets/img/yuiizaa-september-710275-unsplash.jpg">
                    </div>
                    <div class="card-content">
                      <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">add</i></span>
                      <p><a href="#">This is a link</a></p>
                    </div>
                    <div class="card-reveal">
                      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                      <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

    </div>
    <div class="section contact" id="contact">
      <div class="container">
        <div class="row">
          <div class="col s12 m6 straight">
            <a href="#"><i class="fas fa-phone-volume"></i><p>+44(0) 7511 035 174</p></a>
          </div>
          <div class="col s12 m6 straight">
            <a href="#"><i class="far fa-envelope"></i><p>Jacob@Kortbeekcreative.com</p></a>
          </div>
        </div>
        <div class="row">
          <div class="col s12 m6">
            <a href="#" class="tooltipped" data-position="bottom" data-tooltip="@JacobKortbeek"><i class="fab fa-twitter"></i></a>
            <a href="#" class="tooltipped" data-position="bottom" data-tooltip="@jacobkortbeek"><i class="fab fa-instagram"></i></a>
            <a href="#" class="tooltipped" data-position="bottom" data-tooltip="Jacobkortbeek"><i class="fab fa-github"></i></a>
            <a href="#" class="tooltipped" data-position="bottom" data-tooltip="Message Me"><i class="fab fa-whatsapp"></i></a>
          </div>
        </div>
        <div class="row">
          <div class="col s12">
            <form action="/sneakerhead/contact/#wpcf7-f162-o1" method="post" class="wpcf7-form" novalidate="novalidate">
              <div style="display: none;">
              <input type="hidden" name="_wpcf7" value="162">
              <input type="hidden" name="_wpcf7_version" value="5.1">
              <input type="hidden" name="_wpcf7_locale" value="en_GB">
              <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f162-o1">
              <input type="hidden" name="_wpcf7_container_post" value="0">
              <input type="hidden" name="g-recaptcha-response" value="">
              </div>
              <p><label> Your Name (required)<br>
                  <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span> </label></p>
              <p><label> Your Email (required)<br>
                  <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false"></span> </label></p>
              <p><label> Subject<br>
                  <span class="wpcf7-form-control-wrap your-subject"><input type="text" name="your-subject" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false"></span> </label></p>
              <p><label> Your Message<br>
                  <span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"></textarea></span> </label></p>
              <p><input type="submit" value="Send" class="wpcf7-form-control wpcf7-submit"><span class="ajax-loader"></span></p>
              <div class="wpcf7-response-output wpcf7-display-none"></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div><!-- Fullpage -->
</main>
<?php get_footer(); ?>
