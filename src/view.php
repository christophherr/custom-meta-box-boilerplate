<p>
	<label for="subtitle"><?php _e( 'Subtitle', 'custom-meta-box' ); ?></label>
	<input class="large-text" type="text" name="custom_meta_box[subtitle]" value="<?php esc_attr_e( $subtitle ); ?>">
	<span class="description"><?php _e( 'Enter the subtitle for this post.', 'custom-meta-box' ); ?></span>
</p>
<p>
	<input type="checkbox" name="custom_meta_box[show_subtitle]" value="1" <?php checked( $show_subtitle, 1); ?> >
	<label for="show_subtitle"><?php _e( 'Show Subtitle', 'custom-meta-box' ); ?></label>
	<p class="description"><?php _e( 'Select / check the box if you want to show the subtitle for this post.', 'custom-meta-box' ); ?></p>
</p>
