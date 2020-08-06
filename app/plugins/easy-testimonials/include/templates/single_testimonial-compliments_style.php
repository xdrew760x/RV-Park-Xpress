<?php
		//strip 'style-' from the front of the output class so our css selectors work
		$output_theme = str_replace("style-","",$output_theme);
?>
<div class="easy_testimonial">
	<div class="<?php echo $output_theme; ?>">
		<?php
			//output json-ld review markup, if option is set
			if($output_schema_markup){
				echo $this->output_jsonld_markup($display_testimonial);
			}
			
			$background_image = "none";
			if ($show_thumbs) {
				$background_image = $display_testimonial['image_src'];
			}		
		?>
		<div class="header-area-4" style="background-image: url(<?php echo $background_image; ?>);">
			<div class="rate-area-4">
				<?php if($show_the_date): ?>
				<div class="date-4"><?php echo $this->easy_t_clean_html($display_testimonial['date']);?></div>
				<?php endif; ?>
				<div class="easy_testimonial_star_wrapper right-icon"><?php			
					$max_stars = 5;
					$remaining_stars = 5;
					//output dark stars for the filled in ones
					for($i = 0; $i < $display_testimonial['num_stars']; $i ++){
						echo '<i class="ion-star"></i>';
						
						// add an nbsp to each star except the last
						if( $i < $max_stars - 1 ){
							echo '&nbsp;';
						}
						
						$remaining_stars--; //one less star available
					}
					//fill out the remaining empty stars
					for($i = 0; $i < $remaining_stars; $i++){
						echo '<span class="ccicon"><i class="ion-star"></i></span>';
						
						// add an nbsp to each star except the last
						if( $i < $remaining_stars - 1 ){
							echo '&nbsp;';
						}
					}
				?>
				</div>
			</div>
			<div class="title-area-4">
				<?php if($show_the_client): ?>
				<div class="testimonial-client"><?php echo $this->easy_t_clean_html($display_testimonial['client']);?></div>
				<?php endif; ?>
				<?php if($show_the_position): ?><div class="testimonial-position"><?php echo $this->easy_t_clean_html($display_testimonial['position']);?></div><?php endif; ?>
			</div>
		</div>
		<div class="main-content-4">
			<div class="easy_testimonial_title"><?php echo $this->easy_t_clean_html($display_testimonial['title']); ?></div>
			<div class="<?php echo $body_class; ?>"><?php echo wpautop($display_testimonial['content']); ?></div>
		</div>

		<div class="footer-area-4">
			<div class="testimonial-other"><?php echo $this->easy_t_clean_html($display_testimonial['other']);?></div>
		</div>
	</div>
</div>