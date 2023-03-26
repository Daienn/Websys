<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <?php
        include_once 'config.php';

        $price = '68.00';
        ?>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="bootstrap/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/styles.min.css"/>

        <!-- Bootstrap JS -->
        <script src="js/script.min.js"></script>
        <script src="js/carousel.js"></script>
        <script src="js/hoverAnimation.js"></script>
        <script src="js/bs-init.js"></script>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0", shrink-to-fit=no">
        <title>Endurance Fitness - Rates</title>
    </head>

    <?php
    include 'nav.php';
    ?>
    
    <body>

        <section class="py-5">
            <div class="container py-5">
                <div class="row mb-5">
                    <div class="col-md-8 col-xl-6 text-center mx-auto">
                        <h1 class="display-1 fw-bold" style="color: rgb(0,192,163);"><span style="color: rgb(0, 192, 163);">Our Membership Plans</span></h1>
                        <h2 class="fw-bold" style="font-family: Inter, sans-serif;"><strong>Choose the perfect plan to achieve your fitness goals with our membership options</strong></h2>
                    </div>
                </div>
                <div class="row g-0 row-cols-1 row-cols-md-2 row-cols-xl-3 d-flex align-items-md-center align-items-xl-center">
                    <div class="col offset-xl-2 mb-4">
                        <div class="card bg-dark border-dark">
                            <div class="card-body p-4">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h3 class="fw-bold mb-0">Basic</h3>
                                        <p>(Unlimited Open Gym)</p>
                                        <h4 class="display-4 fw-bold">$68/month</h4>
                                    </div>
                                </div>
                                <div>
                                    <ul class="list-unstyled">
                                        <li class="d-flex mb-2"><span class="bs-icon-xs bs-icon-rounded bs-icon-primary-light bs-icon bs-icon-xs me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-check-lg text-primary">
                                                <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                                </svg></span><span>Access to all gym facilities (Requires booking)</span></li>
                                        <li class="d-flex mb-2"><span class="bs-icon-xs bs-icon-rounded bs-icon-primary-light bs-icon bs-icon-xs me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-check-lg text-primary">
                                                <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                                </svg></span><span>One-time meal plan consultation</span></li>
                                        <li class="d-flex mb-2"><span class="bs-icon-xs bs-icon-rounded bs-icon-primary-light bs-icon bs-icon-xs me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-check-lg text-primary">
                                                <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                                </svg></span><span>Access to group fitness classes</span></li>
                                    </ul>
                                </div>

                                <form action="<?php echo PAYPAL_URL; ?>" method="POST">
                                    <!-- Identify your business so that you can collect the payment -->
                                    <input type="hidden" name="business" value="<?php echo PAYPAL_ID; ?>">
                                    <!-- Specify a buy now button -->
                                    <input type="hidden" name="cmd" value="_xclick">
                                    <!-- Specify details about the item that buyers will purchase -->
                                    <input type="hidden" name="item_name" value="Basic Membership">
                                    <input type="hidden" name="amount" value="<?php echo $price; ?>">
                                    <input type="hidden" name="currency_code" value="<?php echo PAYPAL_CURRENCY; ?>">
                                    <!-- Specify URLs -->
                                    <input type="hidden" name="return" value="<?php echo PAYPAL_RETURN_URL; ?>">
                                    <input type="hidden" name="cancel_return" value="<?php echo PAYPAL_CANCEL_URL; ?>">
                                    <!-- Display the payment button -->
                                    <button class="btn btn-primary d-block w-100" type="submit">Proceed to Payment</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xxl-5 mb-4">
                        <div class="card text-white bg-primary">
                            <div class="card-body p-4" style="width: 100%;margin-left: -10px;">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h3 class="fw-bold text-white mb-0" style="margin-right: 26px;">Premium</h3>
                                        <p style="margin-bottom: 3px;">(Open Gym + Special Benefits)</p><span class="badge rounded-pill bg-primary text-uppercase fs-6 bg-semi-white">Better Value</span>
                                        <h4 class="display-4 fw-bold text-white" style="margin-top: 3px;">$??/month</h4>
                                    </div>
                                    <div></div>
                                </div>
                                <div>
                                    <ul class="list-unstyled">
                                        <li class="d-flex mb-2"><span class="bs-icon-xs bs-icon-rounded bs-icon-semi-white bs-icon bs-icon-xs me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-check-lg text-primary">
                                                <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                                </svg></span><span>Access to all gym facilities (Requires booking)</span></li>
                                        <li class="d-flex mb-2"><span class="bs-icon-xs bs-icon-rounded bs-icon-semi-white bs-icon bs-icon-xs me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-check-lg text-primary">
                                                <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                                </svg></span><span>Complimentary nutrition consultation and meal plan</span></li>
                                        <li class="d-flex mb-2"><span class="bs-icon-xs bs-icon-rounded bs-icon-semi-white bs-icon bs-icon-xs me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-check-lg text-primary">
                                                <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                                </svg></span><span>Complimentary fitness consultation and personalized workout plan</span></li>
                                        <li class="d-flex mb-2"><span class="bs-icon-xs bs-icon-rounded bs-icon-semi-white bs-icon bs-icon-xs me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-check-lg text-primary">
                                                <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                                </svg></span><span>Access to group fitness classes and specialized workout programs</span></li>
                                        <li class="d-flex mb-2"><span class="bs-icon-xs bs-icon-rounded bs-icon-semi-white bs-icon bs-icon-xs me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-check-lg text-primary">
                                                <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                                </svg></span><span>Discounted rates on personal training sessions</span></li>
                                    </ul>
                                </div><button class="btn btn-primary d-block w-100 bg-semi-white" type="button">Coming Soon</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php
        include 'footer.php';
        ?>
        
    </body>
</html>
