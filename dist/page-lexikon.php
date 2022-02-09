<?php

/* Template Name: Lexikon */

get_header(); ?>

<div class="container">
    <h1 class="mb-2">Ipari Kender Lexikon</h1>
    <div class="lexikon-wrapper">
        <div class="lexikon-alphabet">
            <div class="alphabet-letters">
                <a href="#a">A</a>
                <a href="#b">B</a>
                <a href="#c">C</a>
                <a href="#d">D</a>
                <a href="#e">E</a>
                <a href="#f">F</a>
                <a href="#g">G</a>
                <a href="#h">H</a>
                <a href="#i">J</a>
                <a href="#j">I</a>
                <a href="#k">K</a>
                <a href="#l">L</a>
                <a href="#m">M</a>
                <a href="#n">N</a>
                <a href="#o">O</a>
                <a href="#p">P</a>
                <a href="#q">Q</a>
                <a href="#r">R</a>
                <a href="#s">S</a>
                <a href="#t">T</a>
                <a href="#u">U</a>
                <a href="#v">V</a>
                <a href="#w">W</a>
                <a href="#x">X</a>
                <a href="#y">Y</a>
                <a href="#z">Z</a>
            </div>
        </div>
        <div class="lexikon">
            <div class="letter">
                <h2 id="a">A</h2>
                
                <?php $query = new WP_Query( 'cat=28' ); ?>
                <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>                
                    <div class="lexikon-article">
                        <h3><?php the_title(); ?></h3>
                        <div class="text-block">
                            <?php the_content(); ?>
                        </div>
                    </div>
                <?php endwhile; 
                wp_reset_postdata();?>
                <?php endif; ?>
            </div>
            <div class="letter">
                <h2 id="b">B</h2>

                <?php $query = new WP_Query( 'cat=29' ); ?>
                <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>                
                    <div class="lexikon-article">
                        <h3><?php the_title(); ?></h3>
                        <div class="text-block">
                            <?php the_content(); ?>
                        </div>
                    </div>
                <?php endwhile; 
                wp_reset_postdata();?>
                <?php endif; ?>
            </div>
            <div class="letter">
                <h2 id="c">C</h2>
                
                <?php $query = new WP_Query( 'cat=30' ); ?>
                <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>                
                    <div class="lexikon-article">
                        <h3><?php the_title(); ?></h3>
                        <div class="text-block">
                            <?php the_content(); ?>
                        </div>
                    </div>
                <?php endwhile; 
                wp_reset_postdata();?>
                <?php endif; ?>
            </div>
            <div class="letter">
                <h2 id="d">D</h2>
                
                <?php $query = new WP_Query( 'cat=31' ); ?>
                <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>                
                    <div class="lexikon-article">
                        <h3><?php the_title(); ?></h3>
                        <div class="text-block">
                            <?php the_content(); ?>
                        </div>
                    </div>
                <?php endwhile; 
                wp_reset_postdata();?>
                <?php endif; ?>
            </div>
            <div class="letter">
                <h2 id="e">E</h2>
                
                <?php $query = new WP_Query( 'cat=32' ); ?>
                <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>                
                    <div class="lexikon-article">
                        <h3><?php the_title(); ?></h3>
                        <div class="text-block">
                            <?php the_content(); ?>
                        </div>
                    </div>
                <?php endwhile; 
                wp_reset_postdata();?>
                <?php endif; ?>
            </div>
            <div class="letter">
                <h2 id="f">F</h2>
                
                <?php $query = new WP_Query( 'cat=33' ); ?>
                <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>                
                    <div class="lexikon-article">
                        <h3><?php the_title(); ?></h3>
                        <div class="text-block">
                            <?php the_content(); ?>
                        </div>
                    </div>
                <?php endwhile; 
                wp_reset_postdata();?>
                <?php endif; ?>
            </div>
            <div class="letter">
                <h2 id="g">G</h2>
                
                <?php $query = new WP_Query( 'cat=34' ); ?>
                <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>                
                    <div class="lexikon-article">
                        <h3><?php the_title(); ?></h3>
                        <div class="text-block">
                            <?php the_content(); ?>
                        </div>
                    </div>
                <?php endwhile; 
                wp_reset_postdata();?>
                <?php endif; ?>
            </div>
            <div class="letter">
                <h2 id="h">H</h2>
                
                <?php $query = new WP_Query( 'cat=35' ); ?>
                <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>                
                    <div class="lexikon-article">
                        <h3><?php the_title(); ?></h3>
                        <div class="text-block">
                            <?php the_content(); ?>
                        </div>
                    </div>
                <?php endwhile; 
                wp_reset_postdata();?>
                <?php endif; ?>
            </div>
            <div class="letter">
                <h2 id="i">I</h2>
                
                <?php $query = new WP_Query( 'cat=36' ); ?>
                <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>                
                    <div class="lexikon-article">
                        <h3><?php the_title(); ?></h3>
                        <div class="text-block">
                            <?php the_content(); ?>
                        </div>
                    </div>
                <?php endwhile; 
                wp_reset_postdata();?>
                <?php endif; ?>
            </div>
            <div class="letter">
                <h2 id="j">J</h2>
                
                <?php $query = new WP_Query( 'cat=37' ); ?>
                <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>                
                    <div class="lexikon-article">
                        <h3><?php the_title(); ?></h3>
                        <div class="text-block">
                            <?php the_content(); ?>
                        </div>
                    </div>
                <?php endwhile; 
                wp_reset_postdata();?>
                <?php endif; ?>
            </div>
            <div class="letter">
                <h2 id="k">K</h2>
                
                <?php $query = new WP_Query( 'cat=38' ); ?>
                <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>                
                    <div class="lexikon-article">
                        <h3><?php the_title(); ?></h3>
                        <div class="text-block">
                            <?php the_content(); ?>
                        </div>
                    </div>
                <?php endwhile; 
                wp_reset_postdata();?>
                <?php endif; ?>
            </div>
            <div class="letter">
                <h2 id="l">L</h2>
                
                <?php $query = new WP_Query( 'cat=39' ); ?>
                <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>                
                    <div class="lexikon-article">
                        <h3><?php the_title(); ?></h3>
                        <div class="text-block">
                            <?php the_content(); ?>
                        </div>
                    </div>
                <?php endwhile; 
                wp_reset_postdata();?>
                <?php endif; ?>
            </div>
            <div class="letter">
                <h2 id="m">M</h2>
                
                <?php $query = new WP_Query( 'cat=40' ); ?>
                <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>                
                    <div class="lexikon-article">
                        <h3><?php the_title(); ?></h3>
                        <div class="text-block">
                            <?php the_content(); ?>
                        </div>
                    </div>
                <?php endwhile; 
                wp_reset_postdata();?>
                <?php endif; ?>
            </div>
            <div class="letter">
                <h2 id="n">N</h2>
                
                <?php $query = new WP_Query( 'cat=41' ); ?>
                <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>                
                    <div class="lexikon-article">
                        <h3><?php the_title(); ?></h3>
                        <div class="text-block">
                            <?php the_content(); ?>
                        </div>
                    </div>
                <?php endwhile; 
                wp_reset_postdata();?>
                <?php endif; ?>
            </div>
            <div class="letter">
                <h2 id="o">O</h2>
                
                <?php $query = new WP_Query( 'cat=42' ); ?>
                <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>                
                    <div class="lexikon-article">
                        <h3><?php the_title(); ?></h3>
                        <div class="text-block">
                            <?php the_content(); ?>
                        </div>
                    </div>
                <?php endwhile; 
                wp_reset_postdata();?>
                <?php endif; ?>
            </div>
            <div class="letter">
                <h2 id="p">P</h2>
                
                <?php $query = new WP_Query( 'cat=43' ); ?>
                <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>                
                    <div class="lexikon-article">
                        <h3><?php the_title(); ?></h3>
                        <div class="text-block">
                            <?php the_content(); ?>
                        </div>
                    </div>
                <?php endwhile; 
                wp_reset_postdata();?>
                <?php endif; ?>
            </div>
            <div class="letter">
                <h2 id="q">Q</h2>
                
                <?php $query = new WP_Query( 'cat=44' ); ?>
                <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>                
                    <div class="lexikon-article">
                        <h3><?php the_title(); ?></h3>
                        <div class="text-block">
                            <?php the_content(); ?>
                        </div>
                    </div>
                <?php endwhile; 
                wp_reset_postdata();?>
                <?php endif; ?>
            </div>
            <div class="letter">
                <h2 id="r">R</h2>
                
                <?php $query = new WP_Query( 'cat=45' ); ?>
                <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>                
                    <div class="lexikon-article">
                        <h3><?php the_title(); ?></h3>
                        <div class="text-block">
                            <?php the_content(); ?>
                        </div>
                    </div>
                <?php endwhile; 
                wp_reset_postdata();?>
                <?php endif; ?>
            </div>
            <div class="letter">
                <h2 id="s">S</h2>
                
                <?php $query = new WP_Query( 'cat=46' ); ?>
                <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>                
                    <div class="lexikon-article">
                        <h3><?php the_title(); ?></h3>
                        <div class="text-block">
                            <?php the_content(); ?>
                        </div>
                    </div>
                <?php endwhile; 
                wp_reset_postdata();?>
                <?php endif; ?>
            </div>
            <div class="letter">
                <h2 id="t">T</h2>
                
                <?php $query = new WP_Query( 'cat=47' ); ?>
                <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>                
                    <div class="lexikon-article">
                        <h3><?php the_title(); ?></h3>
                        <div class="text-block">
                            <?php the_content(); ?>
                        </div>
                    </div>
                <?php endwhile; 
                wp_reset_postdata();?>
                <?php endif; ?>
            </div>
            <div class="letter">
                <h2 id="u">U</h2>
                
                <?php $query = new WP_Query( 'cat=93' ); ?>
                <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>                
                    <div class="lexikon-article">
                        <h3><?php the_title(); ?></h3>
                        <div class="text-block">
                            <?php the_content(); ?>
                        </div>
                    </div>
                <?php endwhile; 
                wp_reset_postdata();?>
                <?php endif; ?>
            </div>
            <div class="letter">
                <h2 id="v">V</h2>
                
                <?php $query = new WP_Query( 'cat=48' ); ?>
                <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>                
                    <div class="lexikon-article">
                        <h3><?php the_title(); ?></h3>
                        <div class="text-block">
                            <?php the_content(); ?>
                        </div>
                    </div>
                <?php endwhile; 
                wp_reset_postdata();?>
                <?php endif; ?>
            </div>
            <div class="letter">
                <h2 id="w">W</h2>
                
                <?php $query = new WP_Query( 'cat=49' ); ?>
                <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>                
                    <div class="lexikon-article">
                        <h3><?php the_title(); ?></h3>
                        <div class="text-block">
                            <?php the_content(); ?>
                        </div>
                    </div>
                <?php endwhile; 
                wp_reset_postdata();?>
                <?php endif; ?>
            </div>
            <div class="letter">
                <h2 id="x">X</h2>
                
                <?php $query = new WP_Query( 'cat=1' ); ?>
                <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>                
                    <div class="lexikon-article">
                        <h3><?php the_title(); ?></h3>
                        <div class="text-block">
                            <?php the_content(); ?>
                        </div>
                    </div>
                <?php endwhile; 
                wp_reset_postdata();?>
                <?php endif; ?>
            </div>
            <div class="letter">
                <h2 id="y">Y</h2>
                
                <?php $query = new WP_Query( 'cat=51' ); ?>
                <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>                
                    <div class="lexikon-article">
                        <h3><?php the_title(); ?></h3>
                        <div class="text-block">
                            <?php the_content(); ?>
                        </div>
                    </div>
                <?php endwhile; 
                wp_reset_postdata();?>
                <?php endif; ?>
            </div>
            <div class="letter">
                <h2 id="z">Z</h2>
                
                <?php $query = new WP_Query( 'cat=52' ); ?>
                <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>                
                    <div class="lexikon-article">
                        <h3><?php the_title(); ?></h3>
                        <div class="text-block">
                            <?php the_content(); ?>
                        </div>
                    </div>
                <?php endwhile; 
                wp_reset_postdata();?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer();