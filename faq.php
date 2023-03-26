<!DOCTYPE html>

<html>
    <head>
        <!-- CSS -->
        <link rel="stylesheet" href="css/styles.min.css"/>
        <link rel="stylesheet" href="css/style.css"/>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="bootstrap/bootstrap.min.css"/>
        <link rel="stylesheet" href="bootstrap/animation.css"/>

        <!-- Bootstrap JS -->
        <script src="js/script.min.js"></script>
        <script src="js/carousel.js"></script>
        <script src="js/hoverAnimation.js"></script>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0", shrink-to-fit=no">
        <title>Endurance Fitness - FAQs</title>
    </head>

    <?php
    include 'nav.php';
    ?>
    
    <body>
        
        <section class="py-5">
            <div class="row mb-4 mb-lg-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h1 class="display-1 fw-bold align-content-stretch" style="color: rgb(0,192,163);">FAQs</h1>
                    <h2 class="fw-bold" style="font-family: Inter, sans-serif;">Your questions answered - discover anything you need to know to kick-start your fitness journey</h2>
                </div>
            </div>
            <div class="container">
                <div class="accordion" role="tablist" id="accordion-1">
                    <div class="accordion-item">
                        <h2 class="accordion-header" role="tab"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-1 .item-1" aria-expanded="false" aria-controls="accordion-1 .item-1" style="font-family: Inter, sans-serif;"><strong>What are your hours of operation?</strong></button></h2>
                        <div class="accordion-collapse collapse item-1" role="tabpanel" data-bs-parent="#accordion-1">
                            <div class="accordion-body">
                                <p class="mb-0">We are open daily from 8am - 10pm on weekdays, and 9am - 10pm on weekends.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" role="tab"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-1 .item-2" aria-expanded="false" aria-controls="accordion-1 .item-2" style="font-family: Inter, sans-serif;"><strong>Where is the nearest Endurance Fitness?</strong></button></h2>
                        <div class="accordion-collapse collapse item-2" role="tabpanel" data-bs-parent="#accordion-1">
                            <div class="accordion-body">
                                <p class="mb-0">We currently have 2 outets, one at Kallang (Kallang Wave Mall), and Bishan (Bishan Community Club).&nbsp;</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" role="tab"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-1 .item-3" aria-expanded="false" aria-controls="accordion-1 .item-3" style="font-family: Inter, sans-serif;"><strong>Is it compulsory to register for an account before I can make any booking?</strong></button></h2>
                        <div class="accordion-collapse collapse item-3" role="tabpanel" data-bs-parent="#accordion-1">
                            <div class="accordion-body">
                                <p class="mb-0">Yes, it is compulsory to register for an account on our website before you can make any booking or purchase our plans. By registering for an account with Endurance Fitness, you will be automatically subscribed to receive our monthly newsletters to stay updated on any news or promotions we may have in store for you!</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" role="tab"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-1 .item-4" aria-expanded="false" aria-controls="accordion-1 .item-4" style="font-family: Inter, sans-serif;"><strong>How much are your membership plans and what payment method(s) do you accept?</strong></button></h2>
                        <div class="accordion-collapse collapse item-4" role="tabpanel" data-bs-parent="#accordion-1">
                            <div class="accordion-body">
                                <p class="mb-0">We currently have a Basic plan @$68, and a Premium Plan @$98. We currently only accept payment via PayPal, which you can link your credit/debit cards to.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" role="tab"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-1 .item-5" aria-expanded="false" aria-controls="accordion-1 .item-5" style="font-family: Inter, sans-serif;"><strong>Do you have any locker rooms and showers available?</strong></button></h2>
                        <div class="accordion-collapse collapse item-5" role="tabpanel" data-bs-parent="#accordion-1">
                            <div class="accordion-body">
                                <p class="mb-0">Yes! We do have locker rooms, as well as peronal showers available!</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" role="tab"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-1 .item-6" aria-expanded="false" aria-controls="accordion-1 .item-6" style="font-family: Inter, sans-serif;"><strong>What is your cancellation policy?</strong></button></h2>
                        <div class="accordion-collapse collapse item-6" role="tabpanel" data-bs-parent="#accordion-1">
                            <div class="accordion-body">
                                <p class="mb-0">Upon payment for our membership plans, any cancellation made before the 1 month duration will not be entitled to any refunds.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" role="tab"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-1 .item-7" aria-expanded="false" aria-controls="accordion-1 .item-7" style="font-family: Inter, sans-serif;"><strong>Do you offer any nutritional guidance or support?</strong></button></h2>
                        <div class="accordion-collapse collapse item-7" role="tabpanel" data-bs-parent="#accordion-1">
                            <div class="accordion-body">
                                <p class="mb-0">Members with the Basic plan will be entitled to a one-time meal plan consultation. Members with the Premium plan will be entitled to more benefits, such as complimentary nutrition consultation and meal plan, fitness consultation and personalized workout plan, and much more!</p>
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
