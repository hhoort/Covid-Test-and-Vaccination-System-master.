<?php
include('includes/header.php');
include('includes/config.php');
?>

<section class="page-title-area col-lg-12">
    <div class="container col-lg-12">
        <div class="page-title-content">
            <h2>About Us</h2>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li>About Us</li>
            </ul>
        </div>
    </div>
</section>


<section class="about-area ptb-100">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="about-image">
                    <img src="assets/img/about-img1.jpg" alt="image">
                    <img src="assets/img/about-img2.jpg" alt="image">
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="about-content">
                    <span class="sub-title">Covid-19</span>
                    <h2>About Coronavirus Disease</h2>
                    <p>In 2021, the Centers for Disease Control and Prevention (CDC) started monitoring the outbreak
                        of a new coronavirus, SARS-CoV-2, which causes the respiratory illness now known as
                        COVID-19. Authorities first identified the virus in Wuhan, China.</p>
                    <p>More than 78,191 people have contracted the virus in China. Health authorities have
                        identified many other people with COVID-19 around the world, including in the United States.
                        On January 31, 2021, the virus passed from one person to another in the U.S.</p>
                    <blockquote>
                        <p>The World Health Organization (WHO) have declared a public health emergency relating to
                            COVID-19.</p>
                    </blockquote>
                    <p>Since then, this strain has been diagnosed in several U.S. residents. The CDC have advised
                        that it is likely to spread to more people. COVID-19 has started causing disruption in at
                        least 25 other countries.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="symptoms-area pt-100">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="symptoms-image">
                    <img src="assets/img/symptoms-img.png" alt="image">
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="symptoms-content">
                    <span class="sub-title">Symptoms</span>
                    <h2>Coronavirus Symptoms</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                        viverra maecenas accumsan lacus vel facilisis.</p>
                    <ul>
                        <li><span><i class="flaticon-tick"></i> Cough</span></li>
                        <li><span><i class="flaticon-tick"></i> Fever</span></li>
                        <li><span><i class="flaticon-tick"></i> Tiredness</span></li>
                        <li><span><i class="flaticon-tick"></i> Headache</span></li>
                        <li><span><i class="flaticon-tick"></i> Breath Shortness</span></li>
                        <li><span><i class="flaticon-tick"></i> Muscle Pain</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="funfacts-area ptb-100 jarallax" data-jarallax="{&quot;speed&quot;: 0.3}">
    <div class="container-fluid">
        <div class="section-title">
            <h2>COVID-19 Coronavirus Outbreak</h2>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="funfacts-image">
                    <img src="assets/img/funfacts.jpg" alt="image">
                </div>
            </div>
            <?php
            $hospital = "SELECT * FROM `hospital`";
            $conns = mysqli_query($conn, $hospital);
            $rows = mysqli_num_rows($conns);
            ?>
            <div class="col-lg-6 col-md-12">
                <div class="funfacts-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="single-funfacts-box">
                                <div class="icon">
                                    <img src="assets/img/icon1.png" alt="image">
                                </div>
                                <h3 class="odometer">
                                    <?php echo $rows ?>
                                </h3>
                                <p>Total Hospital</p>
                            </div>
                        </div>
                        <?php
                        $test = "SELECT `Dstatus` FROM `test`";
                        $conns = mysqli_query($conn, $test);
                        $rows1 = mysqli_num_rows($conns);
                        ?>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="single-funfacts-box">
                                <div class="icon">
                                    <img src="assets/img/icon1.png" alt="image">
                                </div>
                                <h3 class="odometer">
                                    <?php echo $rows1 ?>
                                </h3>
                                <p>Confirmed Cases</p>
                            </div>
                        </div>
                        <?php
                        $death = "SELECT * FROM `test` where `Dstatus` = 'Death'";
                        $conns = mysqli_query($conn, $death);
                        $rows2 = mysqli_num_rows($conns);
                        ?>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="single-funfacts-box">
                                <div class="icon">
                                    <img src="assets/img/icon1.png" alt="image">
                                </div>
                                <h3 class="odometer">
                                    <?php echo $rows2 ?>
                                </h3>
                                <p>Deaths</p>
                            </div>
                        </div>

                        <?php
                        $recover = "SELECT * FROM `test` where `Dstatus` = 'Recover'";
                        $conns = mysqli_query($conn, $recover);
                        $rows3 = mysqli_num_rows($conns);
                        ?>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="single-funfacts-box">
                                <div class="icon">
                                    <img src="assets/img/icon1.png" alt="image">
                                </div>
                                <h3 class="odometer">
                                    <?php echo $rows3 ?>
                                </h3>
                                <p>Recovered</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                <div class="funfacts-info">
                    <p>Source: <a href="https://www.who.int/" target="_blank">WHO</a> on March 23, 2021</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php

$fetch = "SELECT * FROM `hospital` WHERE `Status` = 'Approve'";
$coons = mysqli_query($conn, $fetch);
if (mysqli_num_rows($coons) > 0) {

    ?>
    <section class="doctors-area pt-100 pb-70">
        <div class="container-fluid">
            <div class="section-title">
                <span class="sub-title">Hospitals</span>
                <h2>Visit Hospitals</h2>
            </div>
            <div class="row gap-3 justify-content-around">
                <?php
                while ($row = mysqli_fetch_assoc($coons)) {
                    ?>
                    <div class="card col-lg-4 col-md-6 col-sm-12 mt-5">
                        <img class="card-img-top mt-2" src="<?php echo 'Hospital/hospitalimg/' . $row['Himage'] ?>"
                            alt="Card image cap" style="height: 300px;">
                        <div class="card-body">
                            <p class="card-title text-primary" style="font-size: x-large;">
                                <?php echo $row['Hospital Name'] ?>
                            </p>
                            <p class="card-text text-dark">
                                <?php echo $row['Location'] ?>
                            </p>
                            <a href="appointment.php" class="btn btn-primary">Appointment</a>
                        </div>
                    </div>
                    <?php
                }
}
?>
        </div>
    </div>
</section>
<section class="faq-area ptb-100">
    <div class="container-fluid">
        <div class="section-title">
            <span class="sub-title">Faq's</span>
            <h2>Frequently Asked & Questions</h2>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="faq-image faq-bg1">
                    <img src="assets/img/faq-img.jpg" alt="image">
                    <a href="https://www.youtube.com/watch?v=bk7McNUjWgw" class="video-btn popup-youtube"><i
                            class="flaticon-play-button"></i></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="faq-accordion">
                    <ul class="accordion">
                        <li class="accordion-item">
                            <a class="accordion-title active" href="javascript:void(0)">
                                <i class="flaticon-add"></i>
                                What is the source of the virus?
                            </a>
                            <div class="accordion-content show">
                                <p>Coronaviruses are a large family of viruses. Some cause illness in people, and
                                    others, such as canine and feline coronaviruses, only infect animals. Rarely,
                                    animal coronaviruses that infect animals have emerged to infect people and can
                                    spread between people.</p>
                            </div>
                        </li>
                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class="flaticon-add"></i>
                                How does the virus spread?
                            </a>
                            <div class="accordion-content">
                                <p>Coronaviruses are a large family of viruses. Some cause illness in people, and
                                    others, such as canine and feline coronaviruses, only infect animals. Rarely,
                                    animal coronaviruses that infect animals have emerged to infect people and can
                                    spread between people.</p>
                            </div>
                        </li>
                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class="flaticon-add"></i>
                                who has had COVID-19 spread the illness to others?
                            </a>
                            <div class="accordion-content">
                                <p>Coronaviruses are a large family of viruses. Some cause illness in people, and
                                    others, such as canine and feline coronaviruses, only infect animals. Rarely,
                                    animal coronaviruses that infect animals have emerged to infect people and can
                                    spread between people.</p>
                            </div>
                        </li>
                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class="flaticon-add"></i>
                                Will warm weather stop the outbreak of COVID-19?
                            </a>
                            <div class="accordion-content">
                                <p>Coronaviruses are a large family of viruses. Some cause illness in people, and
                                    others, such as canine and feline coronaviruses, only infect animals. Rarely,
                                    animal coronaviruses that infect animals have emerged to infect people and can
                                    spread between people.</p>
                            </div>
                        </li>
                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class="flaticon-add"></i>
                                What is community spread?
                            </a>
                            <div class="accordion-content">
                                <p>Coronaviruses are a large family of viruses. Some cause illness in people, and
                                    others, such as canine and feline coronaviruses, only infect animals. Rarely,
                                    animal coronaviruses that infect animals have emerged to infect people and can
                                    spread between people.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="faq-shape1"><img src="assets/img/faq-shape1.png" alt="image"></div>
    <div class="faq-shape2"><img src="assets/img/faq-shape2.png" alt="image"></div>
</section>


<section class="spread-virus-area pt-100 pb-70">
    <div class="container-fluid">
        <div class="section-title">
            <span class="sub-title">Spreads Virus</span>
            <h2>How Covid-19 Spreads</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="single-spread-virus-box">
                    <img src="assets/img/spread-virus/img1.jpg" alt="image">
                    <h3>Person to Person</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ut labore et
                        dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                    <a href="#" class="read-more-btn">Read More</a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="single-spread-virus-box">
                    <img src="assets/img/spread-virus/img2.jpg" alt="image">
                    <h3>Infected person coughs</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ut labore et
                        dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                    <a href="#" class="read-more-btn">Read More</a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6 offset-lg-0 offset-md-3 offset-sm-3">
                <div class="single-spread-virus-box">
                    <img src="assets/img/spread-virus/img3.jpg" alt="image">
                    <h3>Close contact another</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ut labore et
                        dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                    <a href="#" class="read-more-btn">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include("includes/footer.php");
?>
</body>

</html>