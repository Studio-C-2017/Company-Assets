

<link rel="stylesheet" type="text/css" href="slideshow.css">
<?php include('slideshow-begin.php'); ?>
<?php
	create_slide('example.com', 'http://static.boredpanda.com/blog/wp-content/uploads/2014/03/amazing-fox-photos-3.jpg', 'Stuff', 'Another Thing');
    create_slide('example.com', 'http://static.boredpanda.com/blog/wp-content/uploads/2016/05/cute-baby-foxes-cubs-17-574436be67482__880.jpg', 'Stuff', 'Another Thing');
    create_slide('example.com', 'http://www.demilked.com/magazine/wp-content/uploads/2014/04/beautiful-foxes-wildlife-photography-9.jpg', 'Stuff', 'Another Thing');
    create_slide('example.com', 'https://s-media-cache-ak0.pinimg.com/originals/a1/b4/91/a1b491dca722c54ddf63d9bbabc43ed4.jpg', 'Stuff', 'Another Thing');
include('slideshow.php');
?>
<?php //include('slideshow-end.php'); ?>
<script src="slideshow-script.js"></script>
