<?php
$id = $_POST["id"];
$topic = $_POST["topic"];
$about = $_POST["about"];
$photographer = $_POST["photographer"];
$place = $_POST["place"];
$date = $_POST["date"];
$url = $_POST["url"];
?>
<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

            <section id="model">

                <div class="row">
                    <div class="col-md-12 text-center">
                        <h3 class="wow fadeInLeftBig" data-wow-delay="0.3s"><?php echo $topic; ?></h3>
                        <div class="divider"><i class="fa fa-camera"></i></div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-sm-6 post-thumb wow fadeInLeft" data-wow-delay="0.5s">
                        <img src="images/albums/<?php echo $id; ?>/BIG.jpg" alt="" class="img-responsive" />
                        <p>&nbsp;</p>
                    </div>

                    <div class="col-sm-6 entry-content wow fadeInRight" data-wow-delay="0.5s">
                        <ul class="profile">
                            <li class="row">
                                <div class="col-xs-12">
                                    <p><strong>About:</strong></p>
                                </div>
                                <div class="col-xs-12">
                                    <p class="text-justify"><?php echo $about; ?></p>
                                </div>
                            </li>
                            <li class="row">
                                <div class="col-xs-4 col-lg-3"><strong>Photographer:</strong></div>
                                <div class="col-xs-8 col-lg-9"><?php echo $photographer; ?></div>
                            </li>
                            <li class="row">
                                <div class="col-xs-4 col-lg-3"><strong>Place:</strong></div>
                                <div class="col-xs-8 col-lg-9"><?php echo $place; ?></div>
                            </li>
                            <li class="row">
                                <div class="col-xs-4 col-lg-3"><strong>Date:</strong></div>
                                <div class="col-xs-8 col-lg-9"><?php echo $date; ?></div>
                            </li>

                        </ul>
                        <br/>
                        <ul class="gallery col-xs-12">
                            <li>
                                <img src="images/albums/<?php echo $id; ?>/1.jpg" alt="" class="img-responsive" />
                            </li>                 
                            <li>
                                <img src="images/albums/<?php echo $id; ?>/2.jpg" alt="" class="img-responsive" />
                            </li>                 
                            <li>
                                <img src="images/albums/<?php echo $id; ?>/3.jpg" alt="" class="img-responsive" />
                            </li>                 
                            <li>
                                <img src="images/albums/<?php echo $id; ?>/4.jpg" alt="" class="img-responsive" />
                            </li>                 
                            <li>
                                <img src="images/albums/<?php echo $id; ?>/5.jpg" alt="" class="img-responsive" />
                            </li>                 
                            <li>
                                <img src="images/albums/<?php echo $id; ?>/6.jpg" alt="" class="img-responsive" />
                            </li>                 
                        </ul>
                        <div class="col-sm-12">
                            <?php if ($url == '') { ?>
                                <button class="btn btn-primary center-block">COMMING SOON</button>
                            <?php } else { ?>
                                <a href="<?php echo $url; ?>" target="_blank"><button class="btn btn-primary center-block">CHECK THE FULL ALBUM</button></a>
                            <?php } ?>
                        </div>
                    </div>


                </div>

            </section>

        </div>
    </div>
</div>