<?php

// declare access to globals
global $post;

// init no comment class
$no_comments_class = '';

// override if there are no comments (for print stylesheet to hide title)
if ( $post->comment_count == 0 ) { $no_comments_class = ' no_comments'; }

?><!-- comments_sidebar.php -->

<div id="comments_sidebar" class="sidebar_container<?php echo $no_comments_class; ?>">



<div class="sidebar_header">

<h2>Notes</h2>

</div>



<div class="sidebar_minimiser">

<?php 

global $withcomments;
$withcomments = 1;

comments_template(); 

?>
	
</div><!-- /sidebar_minimiser -->



</div><!-- /comments_sidebar -->



