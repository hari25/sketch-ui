<?php
// Make easy to reference variables.
$heading = get_field('heading');
$subheading = get_field('subheading');
$short_description = get_field('short_description');
if ( get_field('cta') ) :
	$cta = get_field('cta');
	$intro_cta_title = $cta['title'];
	$intro_cta_url = $cta['url'];
	$intro_cta_target = $cta['target'] ? $cta['target'] : '_self';
endif;
?>


<section class="intro-wrapper pb-row constrained-width">
	
		<div class="inner-content">
			<?php if(!empty($subheading)): ?>
				<span class="subheading green slide-right"><?php echo $subheading; ?></span>
			<?php endif; ?>
			<?php if(!empty($heading)): ?>
				<h1 class="my-0 pb-10 animate-right"><?php echo $heading; ?></h1>
			<?php endif; ?>
			<h2 class="txt-rotate mt-0 slide-right" data-period="2000" data-rotate='[ "faster supplier payments.", "point-of-sale lending", "travel and expense cards", "mobile wallet integration" ]'></h2>
			<?php if(!empty($short_description)): ?>
				<p class="text slide-right"><?php echo $short_description; ?></p>
			<?php endif; ?>
			<?php if ( get_field('cta') ) : ?>
				<div class="intro-cta-wrapper slide-right">
					<a class="btn" href="<?php echo esc_url( $intro_cta_url ); ?>" target="<?php echo esc_attr( $intro_cta_target ); ?>"><?php echo esc_html( $intro_cta_title ); ?></a>
				</div>
			<?php endif; ?>
		</div>
	
</section>