
<!-- PHP INCLUDES -->

<?php

    include "connect.php";
    include "Includes/templates/header.php";
    include "Includes/templates/navbar.php";


?>

    <!-- HOME SECTION -->

    <section class="home-section" id="home-section">
	    <div class="home-section-content">
		    <div id="home-section-carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#home-section-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#home-section-carousel" data-slide-to="1"></li>
                    
                </ol>
                <div class="carousel-inner">
                    <!-- FIRST SLIDE -->
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="Design/images/barbershop_image_1.jpg" alt="First slide">
                        <div class="carousel-caption d-md-block">
                            <h3>Üdvözlünk a weboldalon.</h3>
                            <p>
                                Nézz körbe és foglalj időpontot
                                <br>
                                
                            </p>
                        </div>
                    </div>
                    <!-- SECOND SLIDE -->
                    <div class="carousel-item">
                        <img class="d-block w-100" src="Design/images/barbershop_image_2.jpg" alt="Second slide">
                        <div class="carousel-caption d-md-block">
                            <h3>Üdvözlünk! </h3>
                            <p>
                            Készen állsz egy produktív napra?
                                <br>
                                Vágjunk bele!
                            </p>
                        </div>
                    </div>
                    
                    
                </div>
                <!-- PREVIOUS & NEXT -->
                <a class="carousel-control-prev" href="#home-section-carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#home-section-carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
		</div>
	</section>

    <!-- ABOUT SECTION -->

    <section id="about" class="about_section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="about_content" style="text-align: center;">
                        
                    <img src="Design/images/Logo.jpg" alt="[Z cutz] Barber" style="max-width: 60%; height: auto;">

                        
                        <p style="color: #ffffff;">
                        Üdvözlünk a [Z CUTZ] Barbernél, ahol a hagyományos borbélymesterség találkozik a modern stílussal! Nálunk minden vendég különleges figyelmet kap – lépj be, és hagyd, hogy egyedi frizurával és megújult önbizalommal távozz!
                        </p>
                        
                    </div>
                </div>
                <div class="col-md-6  d-none d-md-block">
                    <div class="about_img" style = "overflow:hidden">
                        <img class="about_img_1" src="Design/images/about-1.png" alt="about-1">
                        <img class="about_img_2" src="Design/images/rolunk2.jpg" alt="about-2">
                        <img class="about_img_3" src="Design/images/rolunk3.jpg" alt="about-3">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES SECTION -->

    <section class="services_section" id="services">
        <div class="container">
            <div class="section_heading">
                <h3>Z CUTZ Barber</h3>
                <h2>Szolgáltatásaink</h2>
                <div class="heading-line"></div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 padd_col_res">
                    <div class="service_box">
                        <i class="bs bs-scissors-1"></i>
                        <h3>Hajvágás</h3>
                        <p></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 padd_col_res">
                    <div class="service_box">
                        <i class="bs bs-razor-2"></i>
                        <h3>Szakálligazítás</h3>
                        <p></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 padd_col_res" >
                    <div class="service_box">
                        <i class="bs bs-brush"></i>
                        <h3>Borotválás</h3>
                        <p></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 padd_col_res">
                    <div class="service_box">
                        <i class="bs bs-hairbrush-1"></i>
                        <h3>Ollós vágás</h3>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- BOOKING SECTION -->

    <section class="book_section" id="booking">
        <div class="book_bg"></div>
        <div class="map_pattern"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-6">
                    <form action="appointment.php" method="post" id="appointment_form" class="form-horizontal appointment_form">
                        <div class="book_content">
                            <h2 style="color: white;">Foglalj Időpontot</h2>
                            <p style="color: #999;">
                                Foglalj időpontot <br>ONLINE
                            </p>
                        </div>
                        <div class="form-group row">
                            
                        </div>

                        <!-- SUBMIT BUTTON -->

                        <button id="app_submit" class="default_btn" type="submit">
                            Foglalás
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- GALLERY SECTION -->

    <section class="gallery-section" id="gallery">
        <div class="section_heading">
            <h3>[Z CUTZ]</h3>
            <h2>Munkáink</h2>
            <div class="heading-line"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 gallery-column">
                    <div style="height: 230px">
                        <div class="gallery-img" style="background-image: url('Design/images/galeri1.jpg');">    </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 gallery-column">
                    <div style="height: 230px">
                        <div class="gallery-img" style="background-image: url('Design/images/galeri2.jpg');"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 gallery-column">
                    <div style="height: 230px">
                        <div class="gallery-img" style="background-image: url('Design/images/galeri3.jpg');"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 gallery-column">
                    <div style="height: 230px">
                        <div class="gallery-img" style="background-image: url('Design/images/galeri4.jpg');"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 gallery-column">
                    <div style="height: 230px">
                        <div class="gallery-img" style="background-image: url('Design/images/galeri5.jpg');"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 gallery-column">
                    <div style="height: 230px">
                        <div class="gallery-img" style="background-image: url('Design/images/galeri6.jpg');"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 gallery-column">
                    <div style="height: 230px">
                        <div class="gallery-img" style="background-image: url('Design/images/galeri7.jpg');"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 gallery-column">
                    <div style="height: 230px">
                        <div class="gallery-img" style="background-image: url('Design/images/galeri8.jpg');"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TEAM SECTION -->

    <section id="team" class="team_section">
        <div class="container">
            <div class="section_heading ">
                <h3 style="color: #ffffff;" >Barbereink</h3>
                <h2 style="color: #ffffff;">A csapat</h2>
                <div class="heading-line"></div>
            </div>
            <ul class="team_members row"> 
                <li class="col-lg-3 col-md-6 padd_col_res">
                    <div class="team_member">
                        <img src="Design/images/zoli.jpg" alt="Team Member">
                    </div>
                </li>
                <li class="col-lg-3 col-md-6 padd_col_res">
                    <div class="team_member">
                        <img src="Design/images/david.jpg" alt="Team Member">
                    </div>
                </li>
              
                
                
            </ul>
        </div>
    </section>

    <!-- REVIEWS SECTION -->

    

    <!-- PRICING SECTION  -->

    <section class="pricing_section" id="pricing">

        <!-- START GET CATEGORIES  PRICES FROM DATABASE -->

            <?php

                $stmt = $con->prepare("Select * from service_categories");
                $stmt->execute();
                $categories = $stmt->fetchAll();

            ?>

        <!-- END -->

        <div class="container">
            <div class="section_heading">
                <h3></h3>
                <h2>Árlista</h2>
                <div class="heading-line"></div>
            </div>
            <div class="row">
                <?php

                    foreach($categories as $category)
                    {
                        $stmt = $con->prepare("Select * from services where category_id = ?");
                        $stmt->execute(array($category['category_id']));
                        $totalServices =  $stmt->rowCount();
                        $services = $stmt->fetchAll();

                        if($totalServices > 0)
                        {
                        ?>

                            <div class="col-lg-4 col-md-6 sm-padding">
                                <div class="price_wrap">
                                    <h3><?php echo $category['category_name'] ?></h3>
                                    <ul class="price_list">
                                        <?php

                                            foreach($services as $service)
                                            {
                                                ?>

                                                    <li>
                                                        <h4><?php echo $service['service_name'] ?></h4>
                                                        <p><?php echo $service['service_description'] ?></p>
                                                        <span class="price"><?php echo $service['service_price'] ?> HUF</span>
                                                    </li>

                                                <?php
                                            }

                                        ?>
                                        
                                    </ul>
                                </div>
                            </div>

                        <?php
                        }
                    }

                ?>
                
            </div>
        </div>
    </section>

    <!-- CONTACT SECTION -->

    <section class="contact-section" id="contact-us">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 sm-padding">
                <div class="contact-info">
                    <h2 style="color: #ffffff;">
                        Vedd fel a kapcsolatot velünk:
                        <br>
                    </h2>
                    <p style="color: #ffffff;"> 
                    Legyünk része a stílusodnak – foglalj időpontot, és frissítsd megjelenésed!
                    </p>
                    <h3 style="color: #ffffff;">
                        Nyíregyháza Univerzum Üzletház
                        <br>
                        Vay Ádám körút 4-6
                    </h3>
                    <h4 style="color: #ffffff;">
                        <span style="font-weight: bold">Email:</span> 
                        odavidbarber@gmail.com
                        <br> 
                        <span style="font-weight: bold">Tel. Zoli:</span> 
                        +36 20 213 33 00
                        <br> 
                        <span style="font-weight: bold">Tel. Dávid:</span> 
                        +36 30 723 3611
                        <br> 
                    </h4>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- WIDGET SECTION / FOOTER -->

    <section class="widget_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer_widget">
                        
                        <p>
                            Social media felületeink:
                        </p>
                        <ul class="widget_social">
                            <li><a href="https://www.facebook.com/zoltancutz" data-toggle="tooltip" title="Facebook"><i class="fab fa-facebook-f fa-2x"></i></a></li>
                            
                            <li><a href="https://www.instagram.com/zoltan_cutzz" data-toggle="tooltip" title="Instagram"><i class="fab fa-instagram fa-2x"></i></a></li>
                            
                            
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="footer_widget">
                        <h3>
                            Nyitvatartás
                        </h3>
                        <ul class="opening_time">
                            <li>Hétfő     08:00 - 20:00</li>
                            <li>Kedd      08:00 - 20:00</li>
                            <li>Szerda    08:00 - 20:00</li>
                            <li>Csütörtök 08:00 - 20:00</li>
                            <li>Péntek    08:00 - 20:00</li>
                            <li>Szombat   08:00 - 20:00</li>
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <!-- FOOTER  -->

    <?php include "Includes/templates/footer.php"; ?>