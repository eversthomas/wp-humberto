
<?php

register_block_pattern(
	'humberto-card-pattern',
		array(
			'title' 		=> __( 'Card', 'humberto' ),
			'description'	=> _x( 'Hier steht eine Beschreibung des Pattern', 'Block pattern description', 'humberto' ),
			'categories'  	=> array('buttons'),
			'content'     	=> "<!-- wp:columns {\"verticalAlignment\":null} --><div class=\"wp-block-columns card\"><!-- wp:column --><div class=\"wp-block-column\"><!-- wp:image {\"id\":1864,\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} --><figure class=\"wp-block-image size-full\"><img src=\"https://gutenberg.end-linkage.de/wp-content/uploads/2008/06/cropped-cropped-img_0767.jpg\" alt=\"\" class=\"wp-image-1864\"/></figure><!-- /wp:image --></div><!-- /wp:column --><!-- wp:column {\"verticalAlignment\":\"center\"} --><div class=\"wp-block-column is-vertically-aligned-center\"><!-- wp:heading --><h2>Überschrift</h2><!-- /wp:heading --><!-- wp:paragraph --><p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p><!-- /wp:paragraph --><!-- wp:buttons --><div class=\"wp-block-buttons\"><!-- wp:button --><div class=\"wp-block-button\"><a class=\"wp-block-button__link\">link</a></div><!-- /wp:button --></div><!-- /wp:buttons --></div><!-- /wp:column --></div><!-- /wp:columns --><style type=\"text/css\">.card{border: 2px solid #444;}</style>",
			)
);
