<?php
    class slide {
        function __construct($url,$img,$name,$description) {
            $this->url = $url;
            $this->img = $img;
            $this->name = $name;
            $this->description = $description;
			global $slides_info;
			if (!isset($slides_info)) {
				$slides_info = array();
			} else {
            	$slides_info[] = $this;
			}
        }
    }
?>
