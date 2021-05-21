<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>
<link rel='stylesheet' id='elementor-post-35-css'  href='/wp/wp-content/uploads/elementor/css/post-35.css?ver=1612168566' media='all' />
<style>
#primary { width: 100% !important; }
.elementor-widget-heading .elementor-heading-title { margin: 0; }
.ast-separate-container .ast-article-post, .ast-separate-container .ast-article-single { padding: 0; }
.ast-pagination .prev.page-numbers { float: left; text-align: left; }
</style>

<?php if ( astra_page_layout() == 'left-sidebar' ) : ?>

	<?php get_sidebar(); ?>

<?php endif ?>

	<div id="primary" <?php astra_primary_class(); ?>>
		<?php astra_primary_content_top(); ?>

		<main id="main" class="site-main">
			<article
				class="post-35 page type-page status-publish ast-article-single" id="post-35" itemtype="https://schema.org/CreativeWork" itemscope="itemscope">
				<div class="entry-content clear" 
					itemprop="text"	>
					<div data-elementor-type="wp-post" data-elementor-id="35" class="elementor elementor-35" data-elementor-settings="[]">
						<div class="elementor-inner">
							<div class="elementor-section-wrap elementor-35">
								<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
								<section class="elementor-section elementor-top-section elementor-element elementor-element-08a9800 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="08a9800" data-element_type="section">
									<div class="elementor-container elementor-column-gap-default">
										<div class="elementor-row">
											<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-35ee912" data-id="35ee912" data-element_type="column">
												<div class="elementor-column-wrap elementor-element-populated">
													<div class="elementor-widget-wrap">
														<?php if (get_post_meta($post->ID,'TITLE',true)): ?>
														<section class="elementor-section elementor-inner-section elementor-element elementor-element-40bf433 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="40bf433" data-element_type="section">
															<div class="elementor-container elementor-column-gap-default">
																<div class="elementor-row">
																	<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-613b7c7" data-id="613b7c7" data-element_type="column">
																		<div class="elementor-column-wrap elementor-element-populated">
																			<div class="elementor-widget-wrap">
																				<div class="elementor-element elementor-element-1c34014 elementor-widget elementor-widget-heading" data-id="1c34014" data-element_type="widget" data-widget_type="heading.default">
																					<div class="elementor-widget-container">
																						<h3 class="elementor-heading-title elementor-size-default"><?php echo nl2br(htmlspecialchars(get_post_meta($post->ID,'TITLE',true))); ?></h3>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</section>
														<?php endif; ?>
														<div class="elementor-element elementor-element-78e6a3f elementor-widget elementor-widget-spacer" data-id="78e6a3f" data-element_type="widget" data-widget_type="spacer.default">
															<div class="elementor-widget-container">
																<div class="elementor-spacer">
																	<div class="elementor-spacer-inner"></div>
																</div>
															</div>
														</div>
														<div class="elementor-element elementor-widget elementor-widget-image" data-element_type="widget" data-widget_type="image.default" style="text-align: left;">
															<div class="elementor-widget-container">
																<div class="elementor-image" style="max-width:768px;">
																	<?php the_post_thumbnail('full'); ?>
																</div>
															</div>
														</div>
														<?php
														$forms = array(
															'LIVE',
															'TIME',
															'TICKET',
															'INFO',
															'LINK',
														);
														foreach ($forms as $key):
															$value = get_post_meta($post->ID,$key,true);
															if ($value):
														?>
														<section class="elementor-section elementor-inner-section elementor-element elementor-element-960dda3 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="960dda3" data-element_type="section">
															<div class="elementor-container elementor-column-gap-default">
																<div class="elementor-row">
																	<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-382228f" data-id="382228f" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
																		<div class="elementor-column-wrap elementor-element-populated">
																			<div class="elementor-widget-wrap">
																				<div class="elementor-element elementor-element-5a271b0 elementor-widget elementor-widget-heading" data-id="5a271b0" data-element_type="widget" data-widget_type="heading.default">
																					<div class="elementor-widget-container">
																						<h4 class="elementor-heading-title elementor-size-default"><?php echo $key; ?></h4>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-9f5ccdb" data-id="9f5ccdb" data-element_type="column">
																		<div class="elementor-column-wrap elementor-element-populated">
																			<div class="elementor-widget-wrap">
																				<?php if (strpos($value, 'elementor-element')): ?>
																				<?php echo $value; ?>
																				<?php else: ?>
																				<div class="elementor-element elementor-element-bdf7ead elementor-widget elementor-widget-heading" data-id="bdf7ead" data-element_type="widget" data-widget_type="heading.default">
																					<div class="elementor-widget-container">
																						<?php if ($key != 'LINK'): ?>
																						<h4 class="elementor-heading-title elementor-size-default"><?php echo nl2br($value); ?></h4>
																						<?php else: ?>
																						<div class="elementor-size-default"><a href="<?php echo $value; ?>" target="_blank"><?php echo $value; ?></a></div>
																						<?php endif; ?>
																					</div>
																				</div>
																				<?php endif; ?>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</section>
														<?php
															endif;
														endforeach;
														?>
													</div>
												</div>
											</div>
										</div>
									</div>
								</section>
								<div class="elementor-element elementor-element-ae915ee elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="ae915ee" data-element_type="widget" data-widget_type="divider.default">
									<div class="elementor-widget-container">
										<div class="elementor-divider">
											<span class="elementor-divider-separator"></span>
										</div>
									</div>
								</div>
								<?php endwhile; endif; ?>
							</div>
						</div>
					</div>
				</div>
			</article>
		</main>
		<?php astra_pagination(); ?>

		<?php astra_primary_content_bottom(); ?>

	</div><!-- #primary -->

<?php if ( astra_page_layout() == 'right-sidebar' ) : ?>

	<?php get_sidebar(); ?>

<?php endif ?>

<?php get_footer(); ?>
