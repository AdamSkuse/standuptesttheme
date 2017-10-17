<?php get_header(); ?>

    <div class="main-section">
        <div class="main-section__image">
            <img class="main-image" alt="" src="<?php bloginfo( 'template_url' ); ?>/images/pilot.jpg"></img>
        </div>

        <div class="panel-wrapper">
            <div class="panel about-panel">
              <h3>About</h3>
              <!-- 
              <p>UK-born me first took to the stage in a purposefully comedic capacity in 2013 while living in Shanghai, China. Within 6 months of starting out, he'd <a href="http://www.tavistock-today.co.uk/article.cfm?id=4227&headline=Comedian%20Adam%20stands%20up%20and%20gets%20heard%20in%20competition&sectionIs=news&searchyear=2013">won</a> the AudioGo Best New UK Comic Award.</p><br>

              <p>Since then, he (me) has performed across Asia and the UK as a feature act and headliner. In 2016 he took his first hour to the Edinburgh Fringe Festival.</p><br>

              <p>Adam (I) recently moved to Los Angeles, where he also writes, podcasts and assimilates into the local culture.</p>
                -->
              <?php if( have_posts() ) : ?>
                <?php while( have_posts() ) : the_post() ?>
                  <h2><a href='<?php the_permalink() ?>'><?php the_title() ?></a></h2>
                  <div class="content">
                    <?php the_content() ?>
                  </div>
                <?php endwhile ?>
              <?php else : ?>
                <p>Oh No, there are no posts!</p>
              <?php endif ?>
            </div>
            <div class="panel video-panel">
                <h3>Videos</h3>
                  <div class="video-panel__video-wrapper">
                    <h4>Cats on planes, dogs in clothing</h4>
                    <iframe width="374" height="210" src="https://www.youtube.com/embed/sR5rb3o1GDg?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                  </div>
                  <div class="video-wrapper">
                    <h4>Achille's heel</h4>
                    <iframe width="374" height="210" src="https://www.youtube.com/embed/WYIBeEsOgUI?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                  </div>
                  <div class="video-wrapper">
                    <h4>Entente cordiale</h4>
                    <iframe width="374" height="210" src="https://www.youtube.com/embed/9lEnm0HDaxQ?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                  </div>
            </div>
            <div class="panel podcasts-panel">
              <h3>Podcasts</h3>
                <div class="podcast__logo">
                  <a href="http://www.bestlaidplanspodcast.podbean.com/" target="_blank"><img src="<?php bloginfo( 'template_url' ); ?>/images/podcast-1.jpg" alt="Best Laid Plans logo"></a>
                </div>
                <div class="podcast__description">
                  <h4>Best Laid Plans</h4>
                  <p>In which I chat with entrepreneurs about their experiences setting up and running their businesses.</p>
                </div>
                <div class="podcast__logo">
                  <a href="http://www.polymorphself.com/" target="_blank"><img src="<?php bloginfo( 'template_url' ); ?>/images/podcast-2.jpg" alt="Polymorphself logo"></a>
                </div>
                <div class="podcast__description">
                  <h4>Polymorphself</h4>
                  <p>I played a magical elf in this Dungeons &amp; Dragons podcast until I was sucked hard into the void in episode 32. Spoiler.</p>
                </div>
                <div class="podcast__logo">
                  <a href="http://kurtdunsing.squarespace.com/ltaboutg/" target="_blank"><img src="<?php bloginfo( 'template_url' ); ?>/images/podcast-3.jpg" alt="LTAG logo"></a>
                </div>
                <div class="podcast__description">
                  <h4>Let's Talk About Greg</h4>
                  <p>I occassionally appear on this hilarious podcast hosted by funnyman Kurt Dunsing.</p>
                </div>
            </div>
            <div class="panel webcam-panel">
              <h3>Nude Webcam</h3>
              <p>Error 452: proxy-disconnect /// server-overload.</p>
              <p>Please try again later when traffic volume has diminished.</p>
            </div>
        </div>
    </div>


<!-- <script src="<?php bloginfo( 'template_url' ); ?>/js/app.js"></script> -->

<?php get_footer(); ?>
