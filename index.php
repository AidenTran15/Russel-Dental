<?php
// Start the session and include necessary tools.
require_once('tools.php');
// session_start();

// Set the page title using a variable.
$pageTitle = "Russel Street Medical";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $pageTitle; ?>
    </title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="booking-page.js" defer></script>
</head>

<body>
    <?php require_once('header.php'); // Include the header. ?>

    <div class="container mt-5"> <!-- Added a container and some margin-top -->
        <div class="row justify-content-center"> <!-- This row helps us to use the grid system -->
            <div class="col-lg-10"> <!-- This specifies the width; col-lg-8 means it takes 8 of 12 columns -->

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="./assets/Carousel-1.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="./assets/Carousel-2.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="./assets/Carousel-3.jpg" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="./assets/Carousel-4.jpg" alt="Fourth slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="./assets/Carousel-5.jpg" alt="Fifth slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

            </div>
        </div>
    </div>

    <!-- Main Content -->
    <main class="container">
        <br>
        <br>
        <section id="about-us">

            <h2>About Us</h2> <br>
            <p>Russel Street Medical opened in 2020 and is located in Melbourne’s CBD at 427 Swanston Street
                Melbourne 3000, just opposite RMIT University Building 10 and within walking distance of Melbourne
                central station.<br><br>
                We strive to help all our patients with a focus on preventative health care, a view to managing chronic
                health conditions with a holistic approach, and with access to a wide range of specialist care providers
                when needed.<br><br>
                RMIT students and staff receive discounts through partnership programs.</p>
            <table>
                <thead>
                    <tr>
                        <th>Consultation</th>
                        <th>Normal Fee</th>
                        <th>RMIT Member Fee</th>
                        <th>Medicare Rebate</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Standard</td>
                        <td>$80.00</td>
                        <td>$60.00</td>
                        <td>$40.00</td>
                    </tr>
                    <tr>
                        <td>Long or Complex</td>
                        <td>$125.00</td>
                        <td>$95.00</td>
                        <td>$75.00</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <br><br><br><br>

        <!-- Who We Are -->
        <section id="who-we-are">
            <h2>Our Team</h2> <br>
            <div class="profile">
                <img src="assets/DrStephenHill.png" alt="Dr. Stephen Hill" class="profile-image">
                <h3>Dr. Stephen Hill</h3>
                <p>Stephen Hill graduated from Auckland University in New Zealand in 2014 and obtained his Fellowship
                    from the Royal Australian College of General Practitioners in 2017.<br><br>
                    Over his training and practice, Stephen worked in internal medicine at the Royal Children's Hospital
                    Melbourne before transitioning to General Practice.</p>
            </div>
            <div class="profile"><br>
                <img src="assets/MsKiyokoTsu.png" alt="Ms Kiyoko Tsu" class="profile-image">
                <h3>Ms Kiyoko Tsu</h3>
                <p>Kiyoko Tsu completed her Bachelor of Nursing at the Yong Loo Lin School of Medicine in Singapore in
                    2019.<br><br>
                    She is an accredited Nurse Immunizer and has worked in various hospitals within metropolitan
                    Melbourne.
                </p>
            </div>
        </section>

        <!-- Service Area -->
        <section id="service-area">
            <h2>Service Area</h2>
            <p>You are welcome to register at our clinic if you are a new patient. Click here to book an appointment in
                our clinic for existing patients <a href="booking-page.html">Book here</a>
        </section>
    </main>

    <footer>
        <p>Contact details</p>
        <p>Tuan Kiet Tran | s3827472</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        crossorigin="anonymous"></script>
</body>

</html>