<?php 

	function metabox_text(){
		
		//echo get_the_ID();
		$data = get_post_meta(get_the_ID(), 'sami_text',true);

		return $data;

	}

	add_shortcode('first_text', 'metabox_text');





