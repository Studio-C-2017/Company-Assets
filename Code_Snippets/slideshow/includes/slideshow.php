<div id='slideshow'>
    <div id='carousel' style="left: 0">
    <?php $number_of_slides = 0; ?>
    <?php foreach ($slides_info as $current_slide): ?>
        <div class="slide">

            <a href="<?php echo $current_slide->url; ?>">
                <img src="<?php echo $current_slide->img; ?>"/>
            </a>

            <div class="slide-info">
                <a href="<?php echo $current_slide->url; ?>">
                    <h2 class="slide-title"><?php echo $current_slide->name; ?></h2>
                    <span class="slide-description">
                        <?php echo $current_slide->description; ?>

                    </span>
                </a>
            </div> <!-- END slide-info -->

        </div> <!-- END slide -->
        <?php $number_of_slides++; ?>
    <?php endforeach; ?>
    </div> <!--END carousel-->

    <div id="slide-icon-container">
        <?php while ($number_of_slides > 0): ?>
            <button class="slide-icon"></button>
            <?php $number_of_slides--; ?>
        <?php endwhile; ?>
    </div> <!-- END slide-icon-container -->

    <button id="left-arrow"></button>
    <button id="right-arrow"></button>
</div> <!-- END slideshow -->
