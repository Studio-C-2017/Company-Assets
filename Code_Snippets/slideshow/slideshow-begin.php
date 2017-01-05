
<?php
    global $number_of_slides;
    $slides_info = array();
    // needs $category, $sku, $name, $description
?>

<?php
    class slide {
        function __construct($url,$img,$name,$description) {
            $this->url = $url;
            $this->img = $img;
            $this->name = $name;
            $this->description = $description;
        }
    }
?>

    <?php
        function create_slide($url, $img, $name, $description) {
            global $slides_info;
            $slides_info[] = new slide($url, $img, $name, $description);
            global $number_of_slides;
            $number_of_slides++;
        }
    ?>
