<?php

require_once "src/view/blocks/header.php";
?>
<!--Carousel Wrapper-->
<div  id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-1z" data-slide-to="1"></li>
        <li data-target="#carousel-example-1z" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->
    <!--Slides-->
    <div  class="carousel-inner" role="listbox">
        <!--First slide-->
        <div class="carousel-item active">
            <img width="60px" height="400px"  class="d-block w-100" src="https://lh6.googleusercontent.com/l1C4M3QPlDz7JQn_4XhyCtAFT0SAf2w641_r4bLZX3cGaJwDDoZKHKYxW7OnC-L6OlWCO9F7y2U5iF-60QsUgR2USlToGlxb1Jk5DumonKxknfIS5iaJiukVXaDwo17BZo629aUP0XPa8Ukgew"
                 alt="First slide">
        </div>
        <!--/First slide-->
        <!--Second slide-->
        <div class="carousel-item">
            <img width="600px" height="400px" class="d-block w-100" src="https://caphexanh.com.vn/upload/baiviet/nhung-loai-trai-cay-khong-nen-an-khi-giam-can-590.jpg"
                 alt="Second slide">
        </div>
        <!--/Second slide-->
        <!--Third slide-->
        <div class="carousel-item">
            <img width="60px" height="400px" class="d-block w-100" src="https://upload.wikimedia.org/wikipedia/commons/6/6d/Good_Food_Display_-_NCI_Visuals_Online.jpg"
                 alt="Third slide">
        </div>
        <!--/Third slide-->
    </div>
    <!--/.Slides-->
    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->

<?php
require_once "src/view/blocks/footer.php";

?>

