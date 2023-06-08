<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopbly</title>

    <!-- font Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- font work sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400;1,500&display=swap" rel="stylesheet">

<!-- fonts nunito sans -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,500;0,600;0,700;1,200;1,500&display=swap" rel="stylesheet">

<!-- font sora -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Sora:wght@100;200;300;400;500;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
</head>
<body>
    <div class="container-page">
        <header>

            <img height="44" width="148" src="{{asset('img/logo-Framer.svg')}}" alt="logo">

            <nav class="nav-header">
                <ul>
                    <li class="nav-link"><a href="#">Products</a></li>
                    <li class="nav-link"><a href="#">Pricing</a></li>
                    <li class="nav-link"><a href="#">Blog</a></li>
                    <li class="nav-link"><a href="#">About</a></li>

                    <button class="btn-remix">
                        <svg height="20" width="20" xmlns="http://www.w3.org/2000/svg" focusable="false" viewBox="0 0 24 24" color="rgb(0, 0, 0)" class="rb-zeplin-selected"><path d="M10.59 9.17L5.41 4 4 5.41l5.17 5.17 1.42-1.41zM14.5 4l2.04 2.04L4 18.59 5.41 20 17.96 7.46 20 9.5V4h-5.5zm.33 9.41l-1.41 1.41 3.13 3.13L14.5 20H20v-5.5l-2.04 2.04-3.13-3.13z" class=""></path></svg>
                        Remix
                    </button>
                </ul>
            </nav>

        </header>
        <main>
            <div class="hero-title">
                <h3 class="title">Customer stories</h3>
                <p class="subtitle">Hear what our users say</p>
            </div>
            <div class="information">
                <div class="card">
                    <span class="mark">“</span>
                    <div class="information-card active" data-id="1">
                        <p class="testimonial">I absolutely love this product! It
                            has exceeded my expectations in
                            every way. Highly recommended!
                        </p>

                        <div class="info-user">
                            <img class="img-user" height="40" width="40" src="https://framerusercontent.com/images/qDkrbsiOQl9xuHVKVOtkU89kjpg.jpg" alt="user1">
                            <span class="name">Jhon Doe</span>
                        </div>
                    </div>
                    <div class="information-card" data-id="2">
                        <p class="testimonial">I've been using this service for a
                            while now, and I'm extremely
                            satisfied. The customer support
                            is top-notch, and the results are
                            fantastic!
                        </p>
                        <div class="info-user">
                          <img class="img-user" height="40" width="40" src="https://framerusercontent.com/images/yC2S2Q7IpJCCGVZMDfLBX9hFI.jpg" alt="user2">
                          <span class="name">Sarah M.</span>
                        </div>
                      </div>
                      <div class="information-card" data-id="3">
                        <p class="testimonial">I've tried many similar services
                            before, but none of them
                            compare to this one. The quality,
                            reliability, and ease of use are
                            unmatched.
                        </p>
                        <div class="info-user">
                          <img class="img-user" height="40" width="40" src="https://framerusercontent.com/images/jNIf3Dy2aNE2mUJ7QdVRkaU2og.jpg" alt="user2">
                          <span class="name">Emily S.</span>
                        </div>
                      </div>
                      <div class="information-card" data-id="4">
                        <p class="testimonial">I have recommended this service
                            to all my friends and colleagues.
                            It's a must-have for anyone
                            looking to streamline their
                            workflow.
                        </p>
                        <div class="info-user">
                          <img class="img-user" height="40" width="40" src="https://framerusercontent.com/images/cowBrktGl15JZi9ots1QYdiy4.jpg" alt="user2">
                          <span class="name">Lisa C.</span>
                        </div>
                      </div>
                    <div class="container-arrows">
                        <div class="container-arrow">
                            <svg class="arrow-left" width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19 12H5" stroke="#A48468" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12 19L5 12L12 5" stroke="#A48468" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>

                        </div>
                        <div class="container-arrow">
                            <svg class="arrow-right" width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 12H19" stroke="#A48468" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12 5L19 12L12 19" stroke="#A48468" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                        </div>
                    </div>
                </div>
                <div class="carousel">
                    <img class="image image--active " data-id="1" height="480" width="580px" src="{{asset('img/trip1.jpg')}}" alt="">
                    <img class="image " data-id="2" height="480" width="580px" src="{{asset('img/prague.jpg')}}" alt="">
                    <img class="image " data-id="3" height="480" width="580px" src="{{asset('img/trip1.jpg')}}" alt="">
                    <img class="image " data-id="4" height="480" width="580px" src="{{asset('img/trip1.jpg')}}" alt="">
                    <div class="information-img">

                    </div>
                </div>
            </div>

        </main>
        <script src="{{asset('js/main.js')}}"></script>

    </div>




</body>
</html>
