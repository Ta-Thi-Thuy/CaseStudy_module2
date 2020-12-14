
<?php

require_once "src/view/blocks/header.php";

?>
<div class="container my-5 py-5 z-depth-1">


    <!--Section: Content-->
    <section class="px-md-5 mx-md-5 text-center text-lg-left dark-grey-text">

        <!--Grid row-->
        <div class="row">

            <!--Grid column-->
            <div class="col-md-6 mb-4 mb-md-0">

                <h3 style="font-size: 50px" class="font-weight-bold"> <?php echo $data[0]['foodLine']?></h3>

                <p  style="font-style: italic;font-size: 17px" class="text-muted">
                    <?php echo $data[0]['textDescription'] ?></p>

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-6 mb-4 mb-md-0">

                <!--Image-->
                <div class="view overlay z-depth-1-half">
                    <img src="./img/<?php echo $data[0]['img'];?>" alt="">
                    <a href="#">
                        <div class="mask rgba-white-light"></div>
                    </a>
                </div>

            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->


    </section>
    <!--Section: Content-->


</div>
<?php
require_once "src/view/blocks/footer.php";

?><?php
