
<?php
    global $number_of_slides;
    // needs $category, $sku, $name, $description
?>

<?php function begin_slideshow() { ?>
<div id='slideshow'>
    <div id='carousel'>
<?php } // End begin_slideshow() ?>
        
    <?php function create_slide($url, $img, $name, $description) {
        global $number_of_slides;  
        $number_of_slides++;
    ?>
        <div class="slide">

            <a href="<?php echo $url; ?>">
                <img src="<?php echo $img; ?>"/>
            </a>

            <div class="slide-info">
                <a href="<?php echo $url; ?>">
                    <h2 class="slide-title">
                        <?php echo $name; ?>
                    </h2>
                    <span class="slide-description">
                        <?php echo $description; ?>
                    </span>
                </a>
            </div> <!-- END slide-info -->

        </div> <!-- END slide -->
<?php } // End create_slide() ?>

<?php
    function end_slideshow() {
?>
        </div> <!--END carousel-->

        <div id="slide-icon-container">
            <?php
                $number_of_slides = 0;
                while ($number_of_slides > 0):
            ?>
                    <button class="slide-icon"></button>
                    <?php $number_of_slides--; ?>
            <?php endwhile; ?>
        </div> <!-- slide-icon-container -->

        <button id="left-arrow"></button>
        <button id="right-arrow"></button>
    </div> <!-- END slideshow -->
<?php }
?>
