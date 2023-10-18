<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Banh Code</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('/banhcode/assets/img/Banh Code.ico') }}" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('/banhcode/css/styles.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('/banhcode/css/transaction_js.css') }}">
</head>

<body id="page-top">
    <?php
    session_start();
    ?>

    <style>
        /* Center the loader */

        #loader {
            position: absolute;
            left: 50%;
            top: 50%;
            z-index: 1;
            width: 150px;
            height: 150px;
            margin: -75px 0 0 -75px;
            border: 16px solid #f3f3f3;
            border-radius: 50%;
            border-top: 16px solid #3498db;
            width: 120px;
            height: 120px;
            -webkit-animation: spin 2s linear infinite;
            animation: spin 2s linear infinite;
        }

        @-webkit-keyframes spin {
            0% {
                -webkit-transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
            }
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        /* Add animation to "page content" */
        .animate-bottom {
            position: relative;
            -webkit-animation-name: animatebottom;
            -webkit-animation-duration: 1s;
            animation-name: animatebottom;
            animation-duration: 1s
        }

        @-webkit-keyframes animatebottom {
            from {
                bottom: -100px;
                opacity: 0
            }

            to {
                bottom: 0px;
                opacity: 1
            }
        }

        @keyframes animatebottom {
            from {
                bottom: -100px;
                opacity: 0
            }

            to {
                bottom: 0;
                opacity: 1
            }
        }

        #myDiv {
            display: none;
        }

        /*css3 design scrollbar*/
        ::-webkit-scrollbar {
            width: 15px;
        }

        ::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
            background: transparent;
        }

        ::-webkit-scrollbar-thumb {
            background: rgba(0, 0, 204, 0.5);
        }

        p {
            font-size: 1.1rem;
            line-height: 150%;
            font-weight: 300;
            margin-top: 0;
            margin-bottom: 0;
            line-clamp: initial;
            -webkit-line-clamp: initial;
            transition-property: -webkit-line-clamp, line-clamp;
            transition-duration: 300;
            transition-timing-function: ease-out;
            overflow: hidden
        }

        .wrapper {
            display: justify;
            justify-content: center;
            align-items: center;
        }

        .card {
            /*            background: #191C24;*/
            padding: 24px;
            border-radius: 13px;
            position: relative;
            max-width: 280px;
            margin: 0 12px;
            box-shadow: 0 1px 10px 0 hsl(224, 18%, 12%);


            & button {
                background: none;
                border: none;
                padding: 0;
                margin-top: 12px;
                color: teal;
                transition: opacity .2s ease-out;
                cursor: pointer;
            }

            ;

            & a {
                display: inline-block;
                font-size: 18px;
                line-height: 1;
                text-decoration-line: none;
                font-weight: 700;
                text-transform: uppercase;
                letter-spacing: 3px;
                margin-bottom: 12px;
                color: inherit;
                transition: color .2s ease-out;

                &:hover {
                    color: teal;
                }
            }
        }

        .clamp-two {
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 2;
            overflow: hidden;
        }

        .card-price {
            display: flex;
            justify-content: space-between;
        }


        .price-new {
            color: red;
        }
                /* Custom CSS for styling the button */
        .custom-button {
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
        }
    </style>


    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container px-4 px-lg-5" data-aos="zoom-in" data-aos-duration="1150">
            <a class="navbar-brand" href="{{ url('/') }}">Banh Code</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ url('#about') }}">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('#Course') }}">Course</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('#responses') }}">Feedback</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('#contact') }}">Contact</a></li>
                    @auth
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">{{ auth()->user()->name }}</a></li>

                    @else
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Daftar</a></li>

                    @endauth


            </div>
        </div>
        </div>
    </nav>

    <!-- Masthead-->
    <header class="masthead">
        <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
            <div class="d-flex justify-content-center">
                <div class="text-center" data-aos="zoom-in" data-aos-duration="1150">
                    <h1 class="mx-auto my-0 text-uppercase">Banh Code{/}</h1>
                    <h2 class="text-white-50 mx-auto mt-2 mb-5">The best error message is the one that never shows
                        up.
                    </h2>
                </div>
            </div>
        </div>
    </header>
    <!-- About-->
    <section class="about-section text-center" id="about">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
                    <h2 class="text-white mb-4">Git Hub Banh Code</h2>
                    <p class="text-white-50">
                        we have a Git Hub which contains PHP programs and we continue to publish to
                        <a href="https://github.com/Bayu-Sumantri">Git Hub.</a> so that we provide good programs or
                        code
                        for Banh Code users to use.
                    </p>
                </div>
            </div>
            <img class="img-fluid" data-aos="zoom-in" data-aos-delay="200"
                src="{{ asset('/banhcode/assets/img/Banh_Code-(no-background).png') }}" alt="..." />
        </div>

    </section>
    <!-- Projects-->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#313131" fill-opacity="1"
            d="M0,96L48,122.7C96,149,192,203,288,186.7C384,171,480,85,576,80C672,75,768,149,864,197.3C960,245,1056,267,1152,250.7C1248,235,1344,181,1392,154.7L1440,128L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z">
        </path>
    </svg>
    <h1 class="text-black text-center" id="Course" data-aos="zoom-in" data-aos-delay="200">Course</h1>






    <div class="container mt-5" data-aos="zoom-in" data-aos-delay="200">
        @csrf
        <div class="row">
            @foreach ($kelas as $row)
                <div class="col-md-4"> <!-- Tambahkan class "col-md-4" untuk mengatur lebar card -->
                    <div class="card">
                        <img class="img-wrap" src="{{ \Illuminate\Support\Facades\Storage::url($row->images) }}"
                            alt="Food">
                        <p style="text-align: center; font-weight: bold;">{{ $row->namakelas }}</p>
                        <p class="text"
                            data-config='{ "type": "text", "element": "div", "limit": 80, "more": "show more ↓", "less": "show less ↑"}'>
                            {{ $row->deskripsikelas }}
                        </p>
                        <!-- <button class="reveal">Show more</button> -->
                        <div class="card-price">
                            <span class="price-new">Rp{{ $row->harga }}</span>
                        </div>
                        <a href="{{ route('Transaksi_kelas', $row->kelasID) }}"
                            class="custom-button button button-like">Buy</a>
                    </div>
                    <br>
                    <br>
                </div>
            @endforeach
        </div>
    </div>

    <!--end-->


    <!-- Signup-->
    <section class="signup-section" id="responses">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5">
                <div class="col-md-10 col-lg-8 mx-auto text-center" data-aos="fade-up" data-aos-duration="500">
                    <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                    <h2 class="text-white mb-5" data-aos="fade-up" data-aos-duration="500">give us feedback for
                        improvement!</h2>
                    <form class="form-signup" id="contactForm" data-sb-form-api-token="API_TOKEN"
                        action="proses_contact.php" method="post">
                        <!-- Email address input-->
                        <div class="row input-group-newsletter">
                            <div class="row margin" id="form_respon"><input class="form-control" id="emailAddress"
                                    name="gmail" type="email" placeholder="Enter email address..."
                                    data-aos="fade-up" data-aos-duration="5000" aria-label="Enter email address..."
                                    required></div>
                            <div class="row margin" id="form_respon"><input class="form-control" id="emailAddress"
                                    name="username" type="text" placeholder="Enter Your username..."
                                    data-aos="fade-up" data-aos-duration="5000"
                                    aria-label="Enter Your username..." /></div>
                            <div class="row margin" id="form_respon"><input class="form-control" id="emailAddress"
                                    name="no_phone" type="number" placeholder="Enter Number Phone..."
                                    data-aos="fade-up" data-aos-duration="5000" aria-label="Enter Number Phone..." />
                            </div>
                            <div class="row margin" id="form_respon"><input class="form-control" id="emailAddress"
                                    name="tanggapan" type="text" placeholder="Enter Your response..."
                                    data-aos="fade-up" data-aos-duration="5000"
                                    aria-label="Enter Your response..." /></div>
                            <div class="row-auto"></div>
                            <button class="btn btn-primary" style="width: 96%; margin-left: 15px;" id="submitButton"
                                type="submit" data-aos="fade-up" data-aos-duration="5000">Notify Me!</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact-->
    <section class="contact-section bg-black" id="contact">
        <div class="container px-4 px-lg-5" data-aos="fade-up" data-aos-duration="500">
            <div class="row gx-4 gx-lg-5">
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Address</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-black-50">JL.Icikiwir no 66 <br>kecamatan Slamet Kopling</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-envelope text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Email</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-black-50"><a
                                    href="https://i.pinimg.com/originals/0f/86/6c/0f866ce4373f288aca970cae971891fc.jpg">Banh
                                    Code@gmail.com</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-mobile-alt text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Phone</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-black-50">+626666666666</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="social d-flex justify-content-center" data-aos="zoom-in-up" data-aos-duration="500">
                <a class="mx-2" href="https://twitter.com/Banh_Code"><i class="fab fa-twitter"></i></a>
                <a class="mx-2" href="https://www.instagram.com/sumantri7968/"><i class="fab fa-instagram"></i></a>
                <a class="mx-2" href="https://github.com/Bayu-Sumantri"><i class="fab fa-github"></i></a>
            </div>
        </div>
        </form>
    </section>
    <!-- Footer-->
    <footer class="footer bg-black small text-center text-white-50">
        <div class="container px-4 px-lg-5" data-aos="zoom-in-up" data-aos-duration="500">Copyright &copy;<a
                class="link" href="https://github.com/Bayu-Sumantri"> Banh Code </a> 2022 </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('/banhcode/js/scripts.js') }}"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/tomik23/show-more@master/docs/showMore.min.js"></script>

    <body onload="myFunction()" style="margin:0;">
        <div id="loader"></div>
        <div style="display:none;" id="myDiv" class="animate-bottom">
            <script>
                // Loading Page
                var myVar;

                function myFunction() {

                    myVar = setTimeout(showPage, 500);

                }

                function showPage() {
                    document.getElementById("loader").style.display = "none";
                    document.getElementById("myDiv").style.display = "block";
                }


                    //      const revealButtons = document.querySelectorAll(".reveal")
    // const revealButtonsArray = Array.from(revealButtons)
    // const revealButtonSibling = revealButtonsArray[0].previousElementSibling

    // revealButtonsArray.forEach( () => {
    //   revealButtonsArray[0].addEventListener("click", () => {
    //     if(revealButtonSibling.classList.contains("clamp-two")) {
    //       revealButtonSibling.classList.remove("clamp-two");
    //       revealButtonsArray.textContent = "Show less"
    //     } else {
    //       revealButtonSibling.classList.add("clamp-two");
    //       revealButtonsArray.textContent = "Show more"
    //     }
    //   })
    // })

    new ShowMore('.text');
            </script>
            <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
            <script>
                AOS.init();
            </script>

    </body>

</html>
