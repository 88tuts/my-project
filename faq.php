<?php
/**
 * Template Name: FAQ Page
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header(); ?>

<section class="faq alt-sec st max-pad">
	<div class="container">
		<h2>
			<?php the_title(); ?>
		</h2>
		<div class="sm-txt">
			<?php if( have_rows('add_faqs') ): ?>
			<ul class="benefits">
				<?php while( have_rows('add_faqs') ): the_row(); ?>
				<li class="qa-content">
					<button class="accordion"><?php echo get_sub_field('add_question'); ?></button>
					<div class="panel">
						<?php echo get_sub_field('add_answer'); ?>
					</div>
				</li>
			   <?php endwhile; ?>
			</ul>
			<?php endif; ?>		
		</div>
	</div>
</section>

<?php get_footer(); ?>

