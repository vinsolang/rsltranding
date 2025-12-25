@extends('layouts.master')

@section('title')
    <title>Home - RSL Trading</title>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
@endsection



@section('content')
    <section>
        <div class="main-banner">
            <img class="img-banner" src="{{ asset('assets/images/banner-img-1.png') }}">
            <video autoplay muted class="home-banner-logo">
                <source src="{{ asset('assets/videos/LOGO.webm') }}">
                </source>
            </video>

            <div class="home-banner-context">
                <h5>Welcome to</h5>
                <h1>RSL TRADING</h1>
                <h3>Health Life Future</h3>

                <button class="btn-explore-our-exports">
                    <img src="{{ asset('assets/images/btn-submit-bg.png') }}">
                    <p><a href="{{ route('export') }}">Explore Our Exports</a></p>
                </button>
            </div>
        </div>
    </section>

    <section class="home-first-banner relative w-full h-[110vh] ">

        <!-- Background Image -->
        <div class="absolute inset-0 z-10">
            <img src="{{ asset('assets/images/bg-1.png') }}" alt="" class="w-full h-full object-cover object-top">
        </div>

        <!-- Content -->
        <div
            class="relative z-20 w-full h-full max-w-7xl mx-auto flex flex-col items-center justify-center text-center font-[700] px-4 pt-4">

            <h2 class="text-[#8DC640] text-[20px] md:text-[25px] mt-5">Welcome to</h2>

            <h1 class="text-[30px] md:text-[50px] text-[#059848] leading-tight fw-bolder">
                RSL TRADING
            </h1>

            <p class="text-[14px] md:text-[16px] font-[400] pt-4  md:px-10">
                Founded in 2015, RSL Trading Co., LTD. focuses on Agriculture Products for Local and International Markets, dedicated to connecting local farmers with us to bring agriculture products such as Rice, Coffee, Pepper, Banana, Cashew Nuts, Mango, Dried Mango, Dried Cassava and other several local products to buyers worldwide while supporting them for better opportunities and incomes.
            </p>


            <div class="rsl-trading">
                <img src="{{ asset('assets/images/rslrading-img.png') }}">
                <div class="rsl-trading-context">
                    <p>Cambodia</p>
                        <h5>2015</h5>
                     <p>Russia</p>
                </div>
                <div style="margin-top: -1rem;">
                     <p>3 tons of coffee exported to</p>
                </div>
            </div>

        </div>
    </section>




    <section>
        <div class="we-start">
            <img class="we-start-bg" src="{{ asset('assets/images/bg-2.png') }}">
            <div class="we-start-context">
                <div class="context-one">
                    <h5>Why We Started</h5>
                    <p>“We help local farmers by creating global opportunities for Cambodian agricultural products.”</p>
                </div>
                <div class="context-two">
                    <h5>Our Main Commodities</h5>
                </div>
            </div>

            <div class="we-start-person-none">
                <img src="{{ asset('assets/images/person-1.png') }}">
            </div>

            <div class="we-start-person">
                <img src="{{ asset('assets/images/person-1.png') }}">
            </div>
        </div>
    </section>


    <section>
        <h5 class="text-[30px] text-[#059848] text-center pt-10">Our Main Commodities</h5>
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card">
                        <img src="{{ asset('assets/images/card-1.png') }}">
                        <div class="card-content">
                            <h4>Rice</h4>
                            <p>We specialize in exporting agricultural products such as rice, coffee, corn, cashew nuts and
                                tropical fruits to countries worldwide.</p>

                            <a href="{{ route('rice-detail') }}"><div class="wrapper-card-content">
                                <button class="btn-explore">Explore More</button></a>
                                <h1>.01</h1>
                            </div>

                            <div class="card-content-logo">
                                <img src="{{ asset('assets/images/card-logo-1.png') }}">
                                <div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card">
                        <img src="{{ asset('assets/images/card-2.png') }}">
                        <div class="card-content">
                            <h4>Coffee</h4>
                            <p>We specialize in exporting agricultural products such as rice, coffee, corn, cashew nuts and
                                tropical fruits to countries worldwide.</p>

                            <div class="wrapper-card-content">
                                <a href="{{ route('coffee-detail') }}"><button class="btn-explore">Explore
                                        More</button></a>
                                <h1>.02</h1>
                            </div>

                            <div class="card-content-logo">
                                <img src="{{ asset('assets/images/card-logo-2.png') }}">
                                <div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card">
                        <img src="{{ asset('assets/images/card-3.png') }}">
                        <div class="card-content">
                            <h4>Corn</h4>
                            <p>We specialize in exporting agricultural products such as rice, coffee, corn, cashew nuts and
                                tropical fruits to countries worldwide.</p>

                            <div class="wrapper-card-content">
                                <a href="{{ route('corn-detail') }}"><button class="btn-explore">Explore More</button></a>
                                <h1>.03</h1>
                            </div>

                            <div class="card-content-logo">
                                <img src="{{ asset('assets/images/card-logo-3.png') }}">
                                <div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card">
                        <img src="{{ asset('assets/images/card-4.png') }}">
                        <div class="card-content">
                            <h4>Cashew Nuts</h4>
                            <p>We specialize in exporting agricultural products such as rice, coffee, corn, cashew nuts and
                                tropical fruits to countries worldwide.</p>

                            <div class="wrapper-card-content">
                                <a href="{{ route('cashewnuts-detail') }}"><button class="btn-explore">Explore
                                        More</button></a>
                                <h1>.04</h1>
                            </div>

                            <div class="card-content-logo">
                                <img src="{{ asset('assets/images/card-logo-4.png') }}">
                                <div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card">
                        <img src="{{ asset('assets/images/card-5.png') }}">
                        <div class="card-content">
                            <h4>Potato / Cassava</h4>
                            <p>We specialize in exporting agricultural products such as rice, coffee, corn, cashew nuts and
                                tropical fruits to countries worldwide.</p>

                            <div class="wrapper-card-content">
                                <a href="{{ route('potatocassava-detail') }}"><button class="btn-explore">Explore
                                        More</button></a>
                                <h1>.05</h1>
                            </div>

                            <div class="card-content-logo">
                                <img src="{{ asset('assets/images/card-logo-5.png') }}">
                                <div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card">
                        <img src="{{ asset('assets/images/card-6.png') }}">
                        <div class="card-content">
                            <h4>Mango</h4>
                            <p>We specialize in exporting agricultural products such as rice, coffee, corn, cashew nuts and
                                tropical fruits to countries worldwide.</p>

                            <div class="wrapper-card-content">
                                <a href="{{ route('mango-detail') }}"><button class="btn-explore">Explore More</button></a>
                                <h1>.06</h1>
                            </div>

                            <div class="card-content-logo">
                                <img src="{{ asset('assets/images/card-logo-6.png') }}">
                                <div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>

    <section>
        <div class="achievement">
            <img class="firstbg-achievement" src="{{ asset('assets/images/bg-3.png') }}">


            <div class="achievement-content">

                <h4>Achievenmet in Number</h4>

                <div class="container wrapper-achievement-card">
                    <div class="row">

                        <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                            <div class="achievement-card">
                                <div class="achievement-card-img">
                                    <img src="{{ asset('assets/images/achievement-card-img-1.png') }}">
                                </div>

                                <div class="achievement-card-content">
                                    <h1 class="counter" data-target="3">0</h1>
                                    <p>Tons of coffee Exported
                                        to Russia</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6 col-6 ">
                            <div class="achievement-card">
                                <div class="achievement-card-img">
                                    <img src="{{ asset('assets/images/achievement-card-img-2.png') }}">
                                </div>

                                <div class="achievement-card-content">
                                    <h1 class="counter plus" data-target="100">0</h1>
                                    <p>Local Farmers Supported</p>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                            <div class="achievement-card">
                                <div class="achievement-card-img">
                                    <img src="{{ asset('assets/images/achievement-card-img-3.png') }}">
                                </div>

                                <div class="achievement-card-content">
                                    <h1 class="counter plus" data-target="500">0</h1>
                                    <p>Export
                                        Products</p>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                            <div class="achievement-card">
                                <div class="achievement-card-img">
                                    <img src="{{ asset('assets/images/achievement-card-img-4.png') }}">
                                </div>

                                <div class="achievement-card-content">
                                    <h1 class="counter plus" data-target="10">0</h1>
                                    <p>Years in
                                        Operations</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <div class="achievement-main-logo">
                <img src="{{ asset('assets/images/achievement-main-logo.png') }}">
            </div>

            <div class="background-achievement-main">
                <img src="{{ asset('assets/images/background-achievement-main.png') }}" alt="">
            </div>
        </div>
    </section>

    <section>
        <div class="FAQ-background">
            <div class="container">
                <div class="FAQ-content">
                    <h1>Frequently Asked Questions</h1>
                    <h5>For buyers/Importers</h5>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="drop-down-card">
                            <div class="qanda">
                                <p class="question"><span>Q:</span> What Cambodian products does RSL Trading export?</p>
                                <p class="answer">A: RSL Trading exports premium Cambodian agricultural products, including
                                    rice, coffee beans, corn, cashew nuts, mangoes, and cassava. All products are sourced
                                    directly from local farmers in Cambodia.</p>
                            </div>

                            <button onclick="toggleDropdown(this)">
                                <svg width="18" height="17" viewBox="0 0 18 17" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.70851 15.6649C9.32815 16.3536 8.33811 16.3536 7.95775 15.6649L0.126071 1.48343C-0.241993 0.816944 0.240089 1.9447e-07 1.00145 2.61031e-07L16.6648 1.63036e-06C17.4262 1.69693e-06 17.9083 0.816944 17.5402 1.48343L9.70851 15.6649Z"
                                        fill="#D9D9D9" />
                                </svg>

                            </button>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="drop-down-card">
                            <div class="qanda">
                                <p class="question"><span>Q:</span>What is the minimum order quantity (MOQ) for exports?
                                </p>
                                <p class="answer">A: RSL Trading exports premium Cambodian agricultural products, including
                                    rice, coffee beans, corn, cashew nuts, mangoes, and cassava. All products are sourced
                                    directly from local farmers in Cambodia.</p>
                            </div>

                            <button onclick="toggleDropdown(this)">
                                <svg width="18" height="17" viewBox="0 0 18 17" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.70851 15.6649C9.32815 16.3536 8.33811 16.3536 7.95775 15.6649L0.126071 1.48343C-0.241993 0.816944 0.240089 1.9447e-07 1.00145 2.61031e-07L16.6648 1.63036e-06C17.4262 1.69693e-06 17.9083 0.816944 17.5402 1.48343L9.70851 15.6649Z"
                                        fill="#D9D9D9" />
                                </svg>

                            </button>
                        </div>
                    </div>


                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="drop-down-card">
                            <div class="qanda">
                                <p class="question"><span>Q:</span> Which countries do you export to?</p>
                                <p class="answer">A: RSL Trading exports premium Cambodian agricultural products, including
                                    rice, coffee beans, corn, cashew nuts, mangoes, and cassava. All products are sourced
                                    directly from local farmers in Cambodia.</p>
                            </div>

                            <button onclick="toggleDropdown(this)">
                                <svg width="18" height="17" viewBox="0 0 18 17" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.70851 15.6649C9.32815 16.3536 8.33811 16.3536 7.95775 15.6649L0.126071 1.48343C-0.241993 0.816944 0.240089 1.9447e-07 1.00145 2.61031e-07L16.6648 1.63036e-06C17.4262 1.69693e-06 17.9083 0.816944 17.5402 1.48343L9.70851 15.6649Z"
                                        fill="#D9D9D9" />
                                </svg>

                            </button>
                        </div>
                    </div>


                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="drop-down-card">
                            <div class="qanda">
                                <p class="question"><span>Q:</span> Which countries do you export to?</p>
                                <p class="answer">A: RSL Trading exports premium Cambodian agricultural products, including
                                    rice, coffee beans, corn, cashew nuts, mangoes, and cassava. All products are sourced
                                    directly from local farmers in Cambodia.</p>
                            </div>

                            <button onclick="toggleDropdown(this)">
                                <svg width="18" height="17" viewBox="0 0 18 17" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.70851 15.6649C9.32815 16.3536 8.33811 16.3536 7.95775 15.6649L0.126071 1.48343C-0.241993 0.816944 0.240089 1.9447e-07 1.00145 2.61031e-07L16.6648 1.63036e-06C17.4262 1.69693e-06 17.9083 0.816944 17.5402 1.48343L9.70851 15.6649Z"
                                        fill="#D9D9D9" />
                                </svg>

                            </button>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="drop-down-card">
                            <div class="qanda">
                                <p class="question"><span>Q:</span> Can RSL Trading provide custom packaging or labeling
                                    for buyers?</p>
                                <p class="answer">A: RSL Trading exports premium Cambodian agricultural products, including
                                    rice, coffee beans, corn, cashew nuts, mangoes, and cassava. All products are sourced
                                    directly from local farmers in Cambodia.</p>
                            </div>

                            <button onclick="toggleDropdown(this)">
                                <svg width="18" height="17" viewBox="0 0 18 17" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.70851 15.6649C9.32815 16.3536 8.33811 16.3536 7.95775 15.6649L0.126071 1.48343C-0.241993 0.816944 0.240089 1.9447e-07 1.00145 2.61031e-07L16.6648 1.63036e-06C17.4262 1.69693e-06 17.9083 0.816944 17.5402 1.48343L9.70851 15.6649Z"
                                        fill="#D9D9D9" />
                                </svg>

                            </button>
                        </div>
                    </div>


                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="drop-down-card">
                            <div class="qanda">
                                <p class="question"><span>Q:</span> How can I order Cambodian agricultural products from
                                    RSL Trading?</p>
                                <p class="answer">A: RSL Trading exports premium Cambodian agricultural products, including
                                    rice, coffee beans, corn, cashew nuts, mangoes, and cassava. All products are sourced
                                    directly from local farmers in Cambodia.</p>
                            </div>

                            <button onclick="toggleDropdown(this)">
                                <svg width="18" height="17" viewBox="0 0 18 17" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.70851 15.6649C9.32815 16.3536 8.33811 16.3536 7.95775 15.6649L0.126071 1.48343C-0.241993 0.816944 0.240089 1.9447e-07 1.00145 2.61031e-07L16.6648 1.63036e-06C17.4262 1.69693e-06 17.9083 0.816944 17.5402 1.48343L9.70851 15.6649Z"
                                        fill="#D9D9D9" />
                                </svg>

                            </button>
                        </div>
                    </div>

                    <div class="FAQ-content">
                        <h5>For Sellers / Local Farmers</h5>
                    </div>
                    <div class="container">
                        <div class="row">

                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="drop-down-card">
                                    <div class="qanda">
                                        <p class="question"><span>Q:</span> How can local farmers supply products to RSL
                                            Trading?</p>
                                        <p class="answer">A:  Farmers from across Cambodia can partner with RSL Trading to
                                            export rice, coffee, corn, fruits, and other crops. We guide farmers on quality
                                            standards, harvesting, and packaging to meet export requirements.</p>
                                    </div>

                                    <button onclick="toggleDropdown(this)">
                                        <svg width="18" height="17" viewBox="0 0 18 17" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.70851 15.6649C9.32815 16.3536 8.33811 16.3536 7.95775 15.6649L0.126071 1.48343C-0.241993 0.816944 0.240089 1.9447e-07 1.00145 2.61031e-07L16.6648 1.63036e-06C17.4262 1.69693e-06 17.9083 0.816944 17.5402 1.48343L9.70851 15.6649Z"
                                                fill="#D9D9D9" />
                                        </svg>

                                    </button>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="drop-down-card">
                                    <div class="qanda">
                                        <p class="question"><span>Q:</span> How does RSL Trading ensure fair pricing for
                                            farmers?</p>
                                        <p class="answer">A:  Farmers from across Cambodia can partner with RSL Trading to
                                            export rice, coffee, corn, fruits, and other crops. We guide farmers on quality
                                            standards, harvesting, and packaging to meet export requirements.</p>
                                    </div>

                                    <button onclick="toggleDropdown(this)">
                                        <svg width="18" height="17" viewBox="0 0 18 17" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.70851 15.6649C9.32815 16.3536 8.33811 16.3536 7.95775 15.6649L0.126071 1.48343C-0.241993 0.816944 0.240089 1.9447e-07 1.00145 2.61031e-07L16.6648 1.63036e-06C17.4262 1.69693e-06 17.9083 0.816944 17.5402 1.48343L9.70851 15.6649Z"
                                                fill="#D9D9D9" />
                                        </svg>

                                    </button>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="drop-down-card">
                                    <div class="qanda">
                                        <p class="question"><span>Q:</span> What support does RSL Trading provide to
                                            farmers?</p>
                                        <p class="answer">A:  Farmers from across Cambodia can partner with RSL Trading to
                                            export rice, coffee, corn, fruits, and other crops. We guide farmers on quality
                                            standards, harvesting, and packaging to meet export requirements.</p>
                                    </div>

                                    <button onclick="toggleDropdown(this)">
                                        <svg width="18" height="17" viewBox="0 0 18 17" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.70851 15.6649C9.32815 16.3536 8.33811 16.3536 7.95775 15.6649L0.126071 1.48343C-0.241993 0.816944 0.240089 1.9447e-07 1.00145 2.61031e-07L16.6648 1.63036e-06C17.4262 1.69693e-06 17.9083 0.816944 17.5402 1.48343L9.70851 15.6649Z"
                                                fill="#D9D9D9" />
                                        </svg>

                                    </button>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="drop-down-card">
                                    <div class="qanda">
                                        <p class="question"><span>Q:</span> Which types of Cambodian products are suitable
                                            for export?</p>
                                        <p class="answer">A:  Farmers from across Cambodia can partner with RSL Trading to
                                            export rice, coffee, corn, fruits, and other crops. We guide farmers on quality
                                            standards, harvesting, and packaging to meet export requirements.</p>
                                    </div>

                                    <button onclick="toggleDropdown(this)">
                                        <svg width="18" height="17" viewBox="0 0 18 17" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.70851 15.6649C9.32815 16.3536 8.33811 16.3536 7.95775 15.6649L0.126071 1.48343C-0.241993 0.816944 0.240089 1.9447e-07 1.00145 2.61031e-07L16.6648 1.63036e-06C17.4262 1.69693e-06 17.9083 0.816944 17.5402 1.48343L9.70851 15.6649Z"
                                                fill="#D9D9D9" />
                                        </svg>

                                    </button>
                                </div>
                            </div>


                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="drop-down-card">
                                    <div class="qanda">
                                        <p class="question"><span>Q:</span> Are there contracts or agreements with farmers?
                                        </p>
                                        <p class="answer">A:  Farmers from across Cambodia can partner with RSL Trading to
                                            export rice, coffee, corn, fruits, and other crops. We guide farmers on quality
                                            standards, harvesting, and packaging to meet export requirements.</p>
                                    </div>

                                    <button onclick="toggleDropdown(this)">
                                        <svg width="18" height="17" viewBox="0 0 18 17" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.70851 15.6649C9.32815 16.3536 8.33811 16.3536 7.95775 15.6649L0.126071 1.48343C-0.241993 0.816944 0.240089 1.9447e-07 1.00145 2.61031e-07L16.6648 1.63036e-06C17.4262 1.69693e-06 17.9083 0.816944 17.5402 1.48343L9.70851 15.6649Z"
                                                fill="#D9D9D9" />
                                        </svg>

                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="wrapper-contact container">
            <p>Contact Form</p>
            <div class="row">
                <div class="col-lg-6 col-md-6 input-field">
                    <input class="col-12" placeholder="Name">
                </div>

                <div class="col-lg-6 col-md-6 input-field">
                    <input class="col-12" placeholder="Mobile Phone ">
                </div>

                <div class="col-lg-6 col-md-6 input-field">
                    <input class="col-12" placeholder="Company Name">
                </div>

                <div class="col-lg-6 col-md-6 input-field">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Select Import/Export</option>
                        <option value="1">Import</option>
                        <option value="2">Export</option>
                    </select>
                </div>

                <div class="col-lg-6 col-md-6 input-field">
                    <select class="form-select" aria-label="Default select example">
                       <option selected disabled>Select a Country</option>
    <option value="AF">Afghanistan</option>
    <option value="AL">Albania</option>
    <option value="DZ">Algeria</option>
    <option value="AD">Andorra</option>
    <option value="AO">Angola</option>
    <option value="AR">Argentina</option>
    <option value="AM">Armenia</option>
    <option value="AU">Australia</option>
    <option value="AT">Austria</option>
    <option value="AZ">Azerbaijan</option>
    <option value="BS">Bahamas</option>
    <option value="BH">Bahrain</option>
    <option value="BD">Bangladesh</option>
    <option value="BB">Barbados</option>
    <option value="BY">Belarus</option>
    <option value="BE">Belgium</option>
    <option value="BZ">Belize</option>
    <option value="BJ">Benin</option>
    <option value="BT">Bhutan</option>
    <option value="BO">Bolivia</option>
    <option value="BA">Bosnia and Herzegovina</option>
    <option value="BW">Botswana</option>
    <option value="BR">Brazil</option>
    <option value="BN">Brunei</option>
    <option value="BG">Bulgaria</option>
    <option value="BF">Burkina Faso</option>
    <option value="BI">Burundi</option>
    <option value="KH">Cambodia</option>
    <option value="CM">Cameroon</option>
    <option value="CA">Canada</option>
    <option value="CV">Cape Verde</option>
    <option value="CF">Central African Republic</option>
    <option value="TD">Chad</option>
    <option value="CL">Chile</option>
    <option value="CN">China</option>
    <option value="CO">Colombia</option>
    <option value="KM">Comoros</option>
    <option value="CG">Congo</option>
    <option value="CR">Costa Rica</option>
    <option value="HR">Croatia</option>
    <option value="CU">Cuba</option>
    <option value="CY">Cyprus</option>
    <option value="CZ">Czech Republic</option>
    <option value="DK">Denmark</option>
    <option value="DJ">Djibouti</option>
    <option value="DM">Dominica</option>
    <option value="DO">Dominican Republic</option>
    <option value="EC">Ecuador</option>
    <option value="EG">Egypt</option>
    <option value="SV">El Salvador</option>
    <option value="GQ">Equatorial Guinea</option>
    <option value="ER">Eritrea</option>
    <option value="EE">Estonia</option>
    <option value="ET">Ethiopia</option>
    <option value="FJ">Fiji</option>
    <option value="FI">Finland</option>
    <option value="FR">France</option>
    <option value="GA">Gabon</option>
    <option value="GM">Gambia</option>
    <option value="GE">Georgia</option>
    <option value="DE">Germany</option>
    <option value="GH">Ghana</option>
    <option value="GR">Greece</option>
    <option value="GD">Grenada</option>
    <option value="GT">Guatemala</option>
    <option value="GN">Guinea</option>
    <option value="GW">Guinea-Bissau</option>
    <option value="GY">Guyana</option>
    <option value="HT">Haiti</option>
    <option value="HN">Honduras</option>
    <option value="HU">Hungary</option>
    <option value="IS">Iceland</option>
    <option value="IN">India</option>
    <option value="ID">Indonesia</option>
    <option value="IR">Iran</option>
    <option value="IQ">Iraq</option>
    <option value="IE">Ireland</option>
    <option value="IL">Israel</option>
    <option value="IT">Italy</option>
    <option value="JM">Jamaica</option>
    <option value="JP">Japan</option>
    <option value="JO">Jordan</option>
    <option value="KZ">Kazakhstan</option>
    <option value="KE">Kenya</option>
    <option value="KI">Kiribati</option>
    <option value="KP">North Korea</option>
    <option value="KR">South Korea</option>
    <option value="KW">Kuwait</option>
    <option value="KG">Kyrgyzstan</option>
    <option value="LA">Laos</option>
    <option value="LV">Latvia</option>
    <option value="LB">Lebanon</option>
    <option value="LS">Lesotho</option>
    <option value="LR">Liberia</option>
    <option value="LY">Libya</option>
    <option value="LI">Liechtenstein</option>
    <option value="LT">Lithuania</option>
    <option value="LU">Luxembourg</option>
    <option value="MG">Madagascar</option>
    <option value="MW">Malawi</option>
    <option value="MY">Malaysia</option>
    <option value="MV">Maldives</option>
    <option value="ML">Mali</option>
    <option value="MT">Malta</option>
    <option value="MH">Marshall Islands</option>
    <option value="MR">Mauritania</option>
    <option value="MU">Mauritius</option>
    <option value="MX">Mexico</option>
    <option value="FM">Micronesia</option>
    <option value="MD">Moldova</option>
    <option value="MC">Monaco</option>
    <option value="MN">Mongolia</option>
    <option value="ME">Montenegro</option>
    <option value="MA">Morocco</option>
    <option value="MZ">Mozambique</option>
    <option value="MM">Myanmar</option>
    <option value="NA">Namibia</option>
    <option value="NR">Nauru</option>
    <option value="NP">Nepal</option>
    <option value="NL">Netherlands</option>
    <option value="NZ">New Zealand</option>
    <option value="NI">Nicaragua</option>
    <option value="NE">Niger</option>
    <option value="NG">Nigeria</option>
    <option value="NO">Norway</option>
    <option value="OM">Oman</option>
    <option value="PK">Pakistan</option>
    <option value="PW">Palau</option>
    <option value="PA">Panama</option>
    <option value="PG">Papua New Guinea</option>
    <option value="PY">Paraguay</option>
    <option value="PE">Peru</option>
    <option value="PH">Philippines</option>
    <option value="PL">Poland</option>
    <option value="PT">Portugal</option>
    <option value="QA">Qatar</option>
    <option value="RO">Romania</option>
    <option value="RU">Russia</option>
    <option value="RW">Rwanda</option>
    <option value="KN">Saint Kitts and Nevis</option>
    <option value="LC">Saint Lucia</option>
    <option value="VC">Saint Vincent and the Grenadines</option>
    <option value="WS">Samoa</option>
    <option value="SM">San Marino</option>
    <option value="ST">Sao Tome and Principe</option>
    <option value="SA">Saudi Arabia</option>
    <option value="SN">Senegal</option>
    <option value="RS">Serbia</option>
    <option value="SC">Seychelles</option>
    <option value="SL">Sierra Leone</option>
    <option value="SG">Singapore</option>
    <option value="SK">Slovakia</option>
    <option value="SI">Slovenia</option>
    <option value="SB">Solomon Islands</option>
    <option value="SO">Somalia</option>
    <option value="ZA">South Africa</option>
    <option value="ES">Spain</option>
    <option value="LK">Sri Lanka</option>
    <option value="SD">Sudan</option>
    <option value="SR">Suriname</option>
    <option value="SZ">Swaziland</option>
    <option value="SE">Sweden</option>
    <option value="CH">Switzerland</option>
    <option value="SY">Syria</option>
    <option value="TW">Taiwan</option>
    <option value="TJ">Tajikistan</option>
    <option value="TZ">Tanzania</option>
    <option value="TH">Thailand</option>
    <option value="TG">Togo</option>
    <option value="TO">Tonga</option>
    <option value="TT">Trinidad and Tobago</option>
    <option value="TN">Tunisia</option>
    <option value="TR">Turkey</option>
    <option value="TM">Turkmenistan</option>
    <option value="TV">Tuvalu</option>
    <option value="UG">Uganda</option>
    <option value="UA">Ukraine</option>
    <option value="AE">United Arab Emirates</option>
    <option value="GB">United Kingdom</option>
    <option value="US">USA</option>
    <option value="UY">Uruguay</option>
    <option value="UZ">Uzbekistan</option>
    <option value="VU">Vanuatu</option>
    <option value="VE">Venezuela</option>
    <option value="VN">Vietnam</option>
    <option value="YE">Yemen</option>
    <option value="ZM">Zambia</option>
    <option value="ZW">Zimbabwe</option>
                    </select>

                </div>

                <div class="col-lg-6 col-md-6 input-field">
                        <select class="form-select" aria-label="Default select example">
                        <option selected>Commodities</option>
                        <option value="1">Import</option>
                        <option value="2">Export</option>
                    </select>
                </div>

                <div class="col-lg-6 col-md-6 input-field">
                    <input class="col-12" placeholder="Adress
">
                </div>

                <div class="col-lg-6 col-md-6 input-field">
                    <input class="col-12" placeholder="Email
">
                </div>

                <div class="col-12 input-field">
                    <textarea class="col-12" placeholder="Messages
"></textarea>
                </div>
            </div>

            <div class="confirm-policy">
                <input type="checkbox">
                <div class="confrim-policy-text">
                    <p>I consent to having this website store my submitted
                        information so they can respond to my enquiry.”
                    </p>
                </div>
            </div>


            <div class="d-flex justify-content-center">
                <button class="btn-Submit">
                    <img src="{{ asset('assets/images/btn-submit-bg.png') }}">
                    <p>Submit</p>
                </button>
            </div>
        </div>
    </section>
@endsection


@section('home')
    <script src="{{ asset('assets/js/home.js') }}"></script>
@endsection
