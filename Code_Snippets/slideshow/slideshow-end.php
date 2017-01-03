
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
