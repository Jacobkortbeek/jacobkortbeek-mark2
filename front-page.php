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
                <h4><?php the_field( 'social_title' ); ?></h4>
                <?php if( have_rows( 'fa_icon_social' ) ) : while ( have_rows('fa_icon_social') ) : the_row(); ?>
                  <a href="<?php the_sub_field('link'); ?>" class="tooltipped" data-position="bottom" data-tooltip="<?php the_sub_field('tool_tip'); ?>"><i class="fab <?php the_sub_field('fa_label'); ?>"></i></a>
                <?php endwhile; endif; ?>
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
                  <h2 class="center-align"><?php the_field( 'skills_title' ); ?></h2>
                  <p class="center-align">
                    <?php the_field( 'skills_sub_title' ); ?>
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
                  <h2 class="center-align"><?php the_field( 'skill_slide_one_title' ); ?></h2>
                  <p class="center-align">
                    <?php the_field( 'skills_slide_one_sub_title' ); ?>
                  </p>
                </div>
                <div class="col s12 skills">
                  <div class="col-content flow-text">
                    <?php if( have_rows('skills') ):

     // loop through the rows of data
    while ( have_rows('skills') ) : the_row();

        if( get_row_layout() == 'fa_icon_skills' ): ?>

        <?php if( have_rows( 'fa_icon_skill' ) ) : while ( have_rows('fa_icon_skill') ) : the_row(); ?>
          <a href="<?php the_sub_field('fa_link'); ?>" class="tooltipped" data-position="bottom" data-tooltip="<?php the_sub_field('fa_tool_tip'); ?>"><i class="fab <?php the_sub_field('fa_skill'); ?>"></i></a>
        <?php endwhile; endif; ?>

      <?php elseif( get_row_layout() == 'skill_experience' ): ?>

        <div class="slide">
          <div class="container">
            <div class="row">
              <div class="col s12">
                <div class="col-content">
                  <h2 class="center-align"><?php the_sub_field( 'experience_title' ); ?></h2>
                  <p class="center-align">
                    <?php the_sub_field( 'experience_sub_heading' ); ?>
                  </p>
                </div>
                <div class="col s12 skills">
                  <div class="col-content flow-text center-align">
                    <?php if( have_rows( 'experience_fa_icon' ) ) : while ( have_rows('experience_fa_icon') ) : the_row(); ?>
                      <a href="<?php the_sub_field('experience_icon_link'); ?>" class="tooltipped" data-position="bottom" data-tooltip="<?php the_sub_field('experience_icon_tip_text'); ?>"><i class="fab <?php the_sub_field('expereince_icon'); ?>"></i></a>
                    <?php endwhile; endif; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <?php endif;

    endwhile;

else :

    // no layouts found

endif; ?>

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
                  <h2 class="center-align"><?php the_field( 'design_field_heading' ); ?></h2>
                  <p class="center-align">
                    <?php the_field( 'design_field_sub_heading' ); ?>
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
