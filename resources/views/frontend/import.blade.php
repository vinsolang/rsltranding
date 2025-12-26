@extends('layouts.master')

@section('title')
    <title>Import - RSL Trading</title>
@endsection

{{-- @section('css')
     <link rel="stylesheet" href="{{ asset('assets/css/import.css') }}">
@endsection --}}

@section(section: 'content')
    <style>
        :root {
            color: #059848;
            color: #FFFFFF
        }

        .main-banner {
            width: 100%;
            height: 115vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            z-index: 0 !important;
            position: relative;
        }

        .main-banner .img-banner {
            width: 100%;
            height: 115vh;
            position: absolute;
            object-fit: cover;
            top: 0;
            z-index: -1;
        }

        .main-banner .main-banner-h1-bg {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .main-banner h1 {
            font-weight: bolder;
            font-size: 100px;
            color: #059848;
        }

        .main-banner .main-banner-p-bg {
            width: 50rem;
            text-align: center;
        }

        .main-banner .main-banner-p-bg p {
            font-size: 20px;
        }

        .btn-Interest-to-export {
            width: 228px;
            height: 43px;
            background-color: #FFFFFF;
            font-weight: bolder;
            color: #059848;
            border-radius: 41.5px;
            margin-top: 3rem;
        }

        @media screen and (max-width: 1025px) {
            .main-banner h1 {
                font-weight: bolder;
                font-size: 75px;
                color: #059848;
            }

            .main-banner .main-banner-p-bg {
                width: 30rem;
                text-align: center;
            }

            .btn-Interest-to-export {
                width: 208px;
                height: 40px;
                background-color: #FFFFFF;
                font-weight: bolder;
                color: #059848;
                border-radius: 41.5px;
                margin-top: 3rem;
            }
        }

        @media screen and (max-width: 640px) {

            .main-banner {
                height: 70vh;
            }

            .main-banner h1 {
                font-weight: bolder;
                font-size: 50px;
                color: #059848;
            }

            .main-banner .main-banner-p-bg {
                width: 25rem;
                text-align: center;
            }

            .main-banner .main-banner-p-bg p {
                font-size: 15px;
            }


            .btn-Interest-to-export {
                width: 180px;
                height: 30px;
                background-color: #FFFFFF;
                font-weight: bolder;
                color: #059848;
                border-radius: 41.5px;
                margin-top: 3rem;
            }
        }



        @media screen and (max-width: 426px) {

            .main-banner {
                height: 70vh;
            }

            .main-banner h1 {
                font-weight: bolder;
                font-size: 40px;
                color: #059848;
            }

            .main-banner .main-banner-p-bg {
                width: 18rem;
                text-align: center;
            }

            .main-banner .main-banner-p-bg p {
                font-size: 13px;
            }


            .btn-Interest-to-export {
                width: 180px;
                height: 30px;
                background-color: #FFFFFF;
                font-weight: bolder;
                color: #059848;
                border-radius: 41.5px;
                margin-top: 3rem;
            }
        }

        .first-card {
            position: relative;
            width: 100%;
            height: 100%;
            padding-top: 18rem;
            margin-top: -2% !important;
        }

        .first-card-background {
            z-index: 0 !important;
            position: absolute;
            height: 100%;
            width: 100%;
            top: 0;
            margin-top: -5.5rem;

        }

        .first-card-background img {
            object-fit: cover;
            width: 100%;
            height: 170vh;
        }



        @media screen and (max-width: 769px) {
            .first-card {
                margin-top: 6% !important;
            }
        }

        .main-banner {
            width: 100%;
            height: 100vh;
            background-color: #D9D9D9;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            z-index: 0 !important;
            position: relative;
        }


        .btn-Interest-to-export {
            width: 228px;
            height: 43px;
            background-color: #FFFFFF;
            font-weight: bolder;
            color: #059848;
            border-radius: 41.5px;
            margin-top: 2rem;
        }

        .card-product {
            position: relative;
            margin-top: -5rem;
        }

        .card-product .card-product-bg {
            width: 100%;
        }

        .card-product .card-product-detail {
            width: 100%;
            height: 480px;
            background-color: #D7FFEE;
            position: relative;
            margin-top: -5rem;
            border: #EEFFF8;
            border-radius: 20px;
            padding-left: 2rem;
            padding-right: 2rem;
            padding-top: 3rem;
            padding-bottom: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .card-product .card-product-detail h5 {
            font-weight: bolder;
            color: #059848;
            font-size: 20px;
        }

        .smaill-detail-card {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            position: relative;
        }



        .card-product .card-product-detail .smaill-detail-card button {
            color: #1E1E1E;
            font-size: 20px;
            width: 274px;
            max-width: 100%;
            height: 47px;
        }

        .card-product .card-product-detail .smaill-detail-card button a {
            color: #000000;
            text-decoration: none;
        }


        .card-product .card-product-detail .smaill-detail-card button:hover {
            background-color: #059848;
            color: #FFFFFF;
            width: 274px;
            max-width: 100%;
            height: 47px;
            border-radius: 23.5px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card-product .card-product-detail .smaill-detail-card button:hover a {
            color: #FFFFFF;
        }

        .card-product .card-product-detail .btn-card-interest-to-export {
            position: absolute;
            bottom: 5%;
            left: 50%;
            transform: translate(-50%);

        }

        .card-product .card-product-detail .btn-card-interest-to-export button {
            width: 140.27px;
            height: 42.66px;
            background: linear-gradient(to right, #8DC640, #059848);
            border-radius: 41.5px;
            font-size: 12px;
            font-weight: bold;
            color: #FFFFFF;
        }


        .card-no {
            width: 72px;
            height: 72px;
            background: linear-gradient(to right, #8DC640, #059848);
            position: absolute;
            top: -7%;
            right: 10%;
            border-radius: 100px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card-no p {
            font-size: 40px;
            font-weight: 500;
            color: #FFFFFF;
            margin-top: 1rem;
        }

        .partner-main {
            width: 100%;
            height: 100%;
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin-top: 5rem;
            z-index: 10;
        }

        .partner-main .partner-bg {
            width: 100%;
            height: 598px !important;
            object-fit: cover;
            position: absolute;
            top: 0;
            z-index: -1;
        }

        .partner-main h1 {
            font-size: 25px;
            color: #FFFFFF;
            font-weight: bolder;
            margin-bottom: 2.5rem;
            margin-top: 2.5rem;
        }

        .partner-main .partner-card-wrapper {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr;
            gap: 2rem;
            padding-left: 1rem;
            padding-right: 1rem;
        }

        .partner-main .partner-card-wrapper .partner-card {
            width: 100%;
            height: 323px;
            background-color: #007E3A;
            color: #FFFFFF;
            border-radius: 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            gap: 1rem;
            padding-left: 1rem;
        }

        .partner-main .partner-card-wrapper .partner-card h5 {
            font-size: 20px;
        }

        .partner-main .partner-card-wrapper .partner-card p {
            font-size: 15px;
        }

        .partner-main .partner-card-wrapper .partner-card svg {
            width: 80px
        }

        @media screen and (max-width: 769px) {
            .partner-main .partner-card-wrapper {
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 1rem;
                padding-left: 1rem;
                padding-right: 1rem;
            }


            .partner-main .partner-card-wrapper .partner-card {
                width: 100%;
                height: 220px;
                background-color: #007E3A;
                color: #FFFFFF;
                border-radius: 30px;
                display: flex;
                flex-direction: column;
                justify-content: center;
                gap: 0.5rem;
                padding-left: 0.5rem;
            }

            .partner-main .partner-card-wrapper .partner-card h5 {
                font-size: 15px;
            }

            .partner-main .partner-card-wrapper .partner-card p {
                font-size: 13px;
            }

            .partner-main .partner-card-wrapper .partner-card svg {
                width: 60px
            }

        }


        @media screen and (max-width: 426px) {

            .partner-main {
                width: 100%;
                height: 598px;
                position: relative;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }

            .partner-main .partner-card-wrapper {
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 0.5rem;
                padding-left: 0.5rem;
                padding-right: 0.5rem;
            }


            .partner-main .partner-card-wrapper .partner-card {
                width: 100%;
                height: 190px;
                background-color: #007E3A;
                color: #FFFFFF;
                border-radius: 20px;
                display: flex;
                flex-direction: column;
                justify-content: center;
                gap: 0.5rem;
                padding-left: 0.5rem;
            }

            .partner-main .partner-card-wrapper .partner-card h5 {
                font-size: 13px;
            }

            .partner-main .partner-card-wrapper .partner-card p {
                font-size: 10px;
            }

            .partner-main .partner-card-wrapper .partner-card svg {
                width: 40px
            }
        }

        .wrapper-contact {
            margin-top: 15rem;
            margin-bottom: 5rem;
            padding-top: 1rem;
            width: 100%;
            padding-left: 5rem !important;
            padding-right: 5rem !important;
        }

        .wrapper-contact p {
            text-align: center;
            color: #059848;
            font-size: 30px;
        }

        .wrapper-contact .input-field input {
            width: 100%;
            height: 49px;
            border-radius: 24.5px;
            background-color: #ECECEC;
            padding-left: 1.5rem;
            font-size: 16px !important;
            margin-bottom: 0.5rem;
            outline: none !important;
        }

        .wrapper-contact .input-field input::placeholder {
            font-size: 16px !important;
            color: #394552 !important;
        }

        .wrapper-contact .input-field input:focus {
            border: 1px solid #059848 !important;
        }

        .wrapper-contact .input-field textarea {
            width: 100%;
            max-height: auto;
            border-radius: 24.5px;
            background-color: #ECECEC;
            padding-left: 1.5rem;
            font-size: 16px !important;
            margin-bottom: 0.5rem;
        }

        .wrapper-contact .input-field textarea::placeholder {
            color: #394552;
        }

        .wrapper-contact .input-field textarea:focus {
            border: 1px solid #059848 !important;
        }

        .wrapper-contact .input-field select {
            width: 100%;
            height: 49px;
            border-radius: 24.5px;
            background-color: #ECECEC;
            padding-left: 1.5rem;
            font-size: 16px !important;
            margin-bottom: 0.5rem;
            outline: none !important;
            border: 1px solid #394552;
        }

        .wrapper-contact .input-field select option {
            background-color: #059848;
            color: #ffffff
        }

        .confirm-policy {
            display: flex;
            justify-content: center;
            margin-top: 1rem;
        }

        .confirm-policy input[type="checkbox"] {
            width: 27px;
            height: 27px;
            border-radius: 100px;
            background-color: #059848;
            border: none;
        }

        .confirm-policy input[type="checkbox"]:focus,
        .confirm-policy input[type="checkbox"]:active {
            box-shadow: none;
            background-color: #059848;
        }

        .confrim-policy-text {
            width: 25rem;
        }

        .confirm-policy p {
            font-size: 15px;
            color: #059848;
        }

        .btn-Submit {
            position: relative;
            width: 396.97px;
            height: 80.14px;
            margin-top: 2rem;
        }

        .btn-Submit img {
            width: 100%;
            position: absolute;
            top: 0;
            z-index: 0;
        }

        .btn-Submit p {
            position: absolute;
            top: 47%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1;
            color: #FFFFFF;
            font-weight: 500;
            margin-top: 0.2rem;
            font-size: 35px;
        }


        @media screen and (max-width: 768px) {


            .wrapper-contact {
                margin-top: 1rem;
                padding-top: 1rem;
                width: 100%;
                padding-left: 1rem !important;
                padding-right: 1rem !important;
            }

            .btn-Submit {
                width: 356.97px;
                height: 75.14px;
                margin-top: 2rem;
            }

            .btn-Submit p {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                z-index: 1;
                color: #FFFFFF;
                font-weight: 500;
                margin-top: 0rem;
            }

            .confirm-policy p {
                font-size: 14px;
                color: #059848;
            }
        }

        @media screen and (max-width: 426px) {
            .btn-Submit {
                width: 286.97px;
                height: 68.14px;
                margin-top: 2rem;
            }

            .btn-Submit p {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                z-index: 1;
                color: #FFFFFF;
                font-weight: 500;
                margin-top: -0.3rem;
                font-size: 25px;
            }
        }

        .last-banner {
            width: 100%;
            height: 70vh;
        }

        .last-banner img {
            width: 100%;
            height: 70vh;
            object-fit: cover;
        }

        @media screen and (max-width: 769px) {
            .last-banner {
                width: 100%;
                height: 50vh;
            }

            .last-banner img {
                width: 100%;
                height: 50vh;
                object-fit: cover;
            }

        }


        @media screen and (max-width: 426px) {
            .last-banner {
                width: 100%;
                height: 40vh;
            }

            .last-banner img {
                width: 100%;
                height: 40vh;
                object-fit: cover;
            }

        }








        .showcommoditylist {
            width: 100%;
            height: auto;
            background-color: #059848;
            color: #ffffff;
            border-radius: 24.5px;
            padding-left: 1rem;
        }

        .wrapper-contact .choose-field {
            width: 100%;
            height: 49px;
            border-radius: 24.5px;
            background-color: #ECECEC;
            padding-left: 1.5rem;
            font-size: 16px !important;
            margin-bottom: 0.5rem;
            outline: none !important;
            padding-top: 0.7rem
        }



        /* banner style */

        .main-banner .wrapper-banner {
            display: grid;
            grid-template-columns: 1fr 1fr;
            padding-left: 5rem;
            padding-right: 5rem;
            gap: 5rem !important;
            position: relative
        }

        .main-banner .banner-img {
            position: absolute;
            width: 100%;
            height: 120vh;
            top: 0%;
            z-index: -1;
            object-fit: cover;
        }

        .banner-content {
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .banner-content .main-banner-h1-bg {
            text-align: center;
        }

        .wrapper-banner .logo-video {
            display: flex;
            justify-content: center;
            align-items: center;

        }

        .wrapper-banner .home-banner-logo {
            width: 400px !important;
        }

        .banner-content .main-banner-h1-bg h1 {
            font-size: 70px;
        }

        .banner-content .main-banner-p-bg p {
            font-size: 16px;
        }

        .banner-content .main-banner-p-bg {
            width: 500px;
        }

        @media screen and (max-width: 1025px) {
            .main-banner .wrapper-banner {
                display: grid;
                grid-template-columns: 1fr 1fr;
                padding-left: 2.5rem;
                padding-right: 2.5rem;
            }

            .banner-content .main-banner-h1-bg {
                text-align: center;
            }

            .wrapper-banner .home-banner-logo {
                width: 300px !important;
            }

            .banner-content .main-banner-h1-bg h1 {
                font-size: 55px;
            }

            .banner-content .main-banner-p-bg {
                width: 350px !important;
            }

            .banner-content .main-banner-p-bg p {
                font-size: 16px;
            }
        }

        @media screen and (max-width: 769px) {
            .main-banner .wrapper-banner {
                display: grid;
                grid-template-columns: 1fr;
                padding-left: 1rem;
                padding-right: 1rem;
                margin-top: -4rem
            }

            .banner-content .main-banner-h1-bg {
                text-align: center;
            }

            .wrapper-banner .home-banner-logo {
                width: 250px !important;
            }

            .banner-content .main-banner-h1-bg {
                width: 100% !important
            }


            .banner-content .main-banner-h1-bg h1 {
                font-size: 40px;
            }

            .banner-content .main-banner-p-bg {
                width: 100% !important;
            }

            .banner-content .main-banner-p-bg p {
                font-size: 16px;
            }

            .first-card {
                position: relative;
                width: 100%;
                height: 100%;
                margin-top: 7% !important;
            }


            .main-banner .banner-img {
                position: absolute;
                width: 100%;
                height: 130vh;
                top: 0%;
                z-index: -1;
                object-fit: cover;
            }
        }


        @media screen and (max-width: 641px) {
            .main-banner .wrapper-banner {
                display: grid;
                grid-template-columns: 1fr;
                padding-left: 1rem;
                padding-right: 1rem;
                margin-top: 15rem
            }

            .first-card {
                position: relative;
                width: 100%;
                height: 100%;
                margin-top: 50% !important;
            }

            .main-banner .banner-img {
                position: absolute;
                width: 100%;
                height: 150vh;
                top: 0%;
                z-index: -1;
                object-fit: cover;
            }
        }

        @media screen and (max-width: 426px) {
            .main-banner .wrapper-banner {
                display: grid;
                grid-template-columns: 1fr;
                padding-left: 1rem;
                padding-right: 1rem;
                gap: 1rem;
                margin-top: 15rem;
            }

            .banner-content .main-banner-h1-bg {
                text-align: center;
            }

            .wrapper-banner .home-banner-logo {
                width: 200px !important;
            }

            .banner-content .main-banner-h1-bg h1 {
                font-size: 40px;
            }

            .banner-content .main-banner-p-bg {
                width: 100% !important;
            }

            .banner-content .main-banner-p-bg p {
                font-size: 14px;
            }

            .first-card {
                position: relative;
                width: 100%;
                height: 100%;
                margin-top: 70% !important;
            }
        }

        /* popup animate */


        .popup {
            opacity: 0;
            transform: scale(0.6);
            animation: popupIn 1s ease-out forwards;
        }

        /* Keyframe animation */
        @keyframes popupIn {
            0% {
                opacity: 0;
                transform: scale(0.6);
            }

            60% {
                opacity: 1;
                transform: scale(1.05);
            }

            100% {
                opacity: 1;
                transform: scale(1);
            }
        }
    </style>
    <section>
        <div class="main-banner relative">
            <video autoplay muted loop playsinline class="absolute banner-img inset-0 z-[-10] object-cover w-full h-full"
                poster="fallback-image.jpg">
                <source src="{{ url('assets/videos/bg.mp4') }}" type="video/mp4">
                <source src="{{ url('assets/videos/bg.webm') }}" type="video/webm">
            </video>
            <div class="wrapper-banner">
                <div class="logo-video">
                    <video id="logoVideo" autoplay muted loop playsinline class="home-banner-logo hidden">
                        <source src="{{ asset('assets/videos/LOGO.webm') }}" type="video/webm">
                    </video>

                    <img id="logoImg" src="{{ asset('assets/images/logo.png') }}" class="home-banner-logo" alt="Logo">
                </div>
                <div class="banner-content">
                    <div class="main-banner-h1-bg">
                        <h1 class="popup">Import</h1>
                        <h1 class="popup">Commodities</h1>
                    </div>
                    <div class="main-banner-p-bg">
                        <p class="popup">Premium Cambodian Agricultural Products – Rice, Coffee, Corn, Cashew Nuts, Mangoes
                            & Cassava, Exported Worldwide with Quality You Can Trust.</p>
                    </div>
                    <a class="popup" href="#first-card"><button class="btn-Interest-to-export">Interest to
                            Import</button></a>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section id="first-card">
        <div class="first-card">
            <div class="first-card-background">
                <img src="{{ asset('assets/images/second-bg.png') }}">
            </div>
            <div class="main-card-product">
                <div class="container">
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-y-20 gap-x-4">
                        {{-- item 1 --}}
                        <div class="">
                            <div class="card-product" x-data="{
                                active: 'default',
                                products: {
                                    default: {
                                        title: 'Premium Rice Varieties',
                                        desc: 'High-quality imported aromatic and medium-grain rice varieties trusted by international buyers.',
                                        img: '{{ asset('assets/images/import/premium _rice.jpg') }}'
                                    },
                                    basmati: {
                                        title: 'Basmati Rice (India)',
                                        desc: 'Premium long-grain basmati rice imported from India with rich aroma and superior quality.',
                                        img: '{{ asset('assets/images/import/rice.jpg') }}'
                                    },
                                    corn: {
                                        title: 'Yellow Corn',
                                        desc: 'High-grade yellow corn suitable for food processing and animal feed.',
                                        img: '{{ asset('assets/images/export-card-product-1.png') }}'
                                    }
                                }
                            }">
                                <!-- Image -->
                                <img class="card-product-bg h-[250px] object-cover" :src="products[active].img">

                                <div class="card-product-detail">
                                    <!-- Title -->
                                    <h5 x-text="products[active].title"></h5>

                                    <!-- Description -->
                                    <p x-text="products[active].desc"></p>

                                    <!-- Buttons -->
                                    <div class="smaill-detail-card">
                                        <!-- Basmati -->
                                        <button x-show="active === 'default'" @click="active = 'basmati'">
                                            Basmati Rice (India)
                                        </button>

                                        <!-- Yellow Corn -->
                                        <button x-show="active === 'default'" @click="active = 'corn'">
                                            Yellow Corn
                                        </button>

                                        <!-- Back -->
                                        <button x-show="active !== 'default'" @click="active = 'default'" class="btn-back">
                                            Back
                                        </button>
                                    </div>

                                    <!-- Interest Button -->
                                    <div class="btn-card-interest-to-export">
                                        <button><a href="#contact" class="text-[#fff] decoration-transparent">Interest to
                                                Import</a></button>
                                    </div>

                                    <!-- Card Number -->
                                    <div class="card-no">
                                        <p>01</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- item 2 --}}
                        <div class="">
                            <div class="card-product" x-data="{
                                active: 'default',
                                products: {
                                    default: {
                                        title: 'Whole Spices',
                                        desc: 'Sourced from reputable growers to ensure purity, aroma, and strong market demand.',
                                        img: '{{ asset('assets/images/export/spices.jpg') }}'
                                    },
                                    cumin: {
                                        title: 'Cumin Seeds',
                                        desc: 'High-quality whole cumin seeds with strong aroma for global spice markets.',
                                        img: '{{ asset('assets/images/import/cumin_seed.jpg') }}'
                                    },
                                    turmeric: {
                                        title: 'Turmeric (Whole)',
                                        desc: 'Whole turmeric roots known for vibrant color and medicinal properties.',
                                        img: '{{ asset('assets/images/import/turmeric-1.jpg') }}'
                                    },
                                    red_pepper: {
                                        title: 'Red Peppers (Whole)',
                                        desc: 'Whole dried red peppers with bold heat and rich color.',
                                        img: '{{ asset('assets/images/import/red_peppers.jpg') }}'
                                    },
                                    cardamom: {
                                        title: 'Cardamom (Green)',
                                        desc: 'Premium green cardamom pods with intense aroma and flavor.',
                                        img: '{{ asset('assets/images/import/cardamom.jpg') }}'
                                    }
                                }
                            }">
                                <!-- Image -->
                                <img class="card-product-bg h-[250px] object-cover" :src="products[active].img">

                                <div class="card-product-detail">
                                    <!-- Title -->
                                    <h5 x-text="products[active].title"></h5>

                                    <!-- Description -->
                                    <p x-text="products[active].desc"></p>

                                    <!-- Buttons -->
                                    <div class="smaill-detail-card">
                                        <button x-show="active === 'default'" @click="active = 'cumin'">
                                            Cumin Seeds
                                        </button>

                                        <button x-show="active === 'default'" @click="active = 'turmeric'">
                                            Turmeric (Whole)
                                        </button>

                                        <button x-show="active === 'default'" @click="active = 'red_pepper'">
                                            Red Peppers (Whole)
                                        </button>

                                        <button x-show="active === 'default'" @click="active = 'cardamom'">
                                            Cardamom (Green)
                                        </button>

                                        <!-- Back -->
                                        <button x-show="active !== 'default'" @click="active = 'default'" class="btn-back">
                                            Back
                                        </button>
                                    </div>

                                    <!-- Interest Button -->
                                    <div class="btn-card-interest-to-export">
                                        <button><a href="#contact" class="text-[#fff] decoration-transparent">Interest to
                                                Import</a></button>
                                    </div>

                                    <!-- Card Number -->
                                    <div class="card-no">
                                        <p>02</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- item 3 --}}
                        <div class="">
                            <div class="card-product" x-data="{
                                active: 'default',
                                products: {
                                    default: {
                                        title: 'Spice Powders',
                                        desc: 'Finely milled premium spice powders ready for wholesale and reprocessing.',
                                        img: '{{ asset('assets/images/import/spices_powder.jpg') }}'
                                    },
                                    turmeric_powder: {
                                        title: 'Turmeric Powder',
                                        desc: 'Premium turmeric powder with vibrant color and strong aroma for food processing.',
                                        img: '{{ asset('assets/images/import/turmeric.jpg') }}'
                                    },
                                    red_pepper_powder: {
                                        title: 'Red Pepper Powder',
                                        desc: 'High-quality red pepper powder with rich color and balanced heat.',
                                        img: '{{ asset('assets/images/import/red_peppers_powder.jpg') }}'
                                    }
                                }
                            }">
                                <!-- Image -->
                                <img class="card-product-bg h-[250px] object-cover" :src="products[active].img">

                                <div class="card-product-detail">
                                    <!-- Title -->
                                    <h5 x-text="products[active].title"></h5>

                                    <!-- Description -->
                                    <p x-text="products[active].desc"></p>

                                    <!-- Buttons -->
                                    <div class="smaill-detail-card">
                                        <!-- Turmeric Powder -->
                                        <button x-show="active === 'default'" @click="active = 'turmeric_powder'">
                                            Turmeric Powder
                                        </button>

                                        <!-- Red Pepper Powder -->
                                        <button x-show="active === 'default'" @click="active = 'red_pepper_powder'">
                                            Red Pepper Powder
                                        </button>

                                        <!-- Back -->
                                        <button x-show="active !== 'default'" @click="active = 'default'" class="btn-back">
                                            Back
                                        </button>
                                    </div>

                                    <!-- Interest Button -->
                                    <div class="btn-card-interest-to-export">
                                        <button><a href="#contact" class="text-[#fff] decoration-transparent">Interest to
                                                Import</a></button>
                                    </div>

                                    <!-- Card Number -->
                                    <div class="card-no">
                                        <p>03</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- item 4 --}}
                        <div class="">
                            <div class="card-product" x-data="{
                                active: 'default',
                                products: {
                                    default: {
                                        title: 'Dehydrated Vegetables',
                                        desc: 'Long-shelf-life dehydrated garlic and onion products ideal for food production and distribution.',
                                        img: '{{ asset('assets/images/import/dehydrated_vegetables.jpg') }}'
                                    },
                                    garlic: {
                                        title: 'Dried Garlic',
                                        desc: 'Premium dehydrated garlic with strong aroma and extended shelf life for global food markets.',
                                        img: '{{ asset('assets/images/import/garlic.jpg') }}'
                                    }
                                }
                            }">
                                <!-- Image -->
                                <img class="card-product-bg  h-[250px] object-cover" :src="products[active].img">

                                <div class="card-product-detail">
                                    <!-- Title -->
                                    <h5 x-text="products[active].title"></h5>

                                    <!-- Description -->
                                    <p x-text="products[active].desc"></p>

                                    <!-- Buttons -->
                                    <div class="smaill-detail-card">
                                        <!-- Dried Garlic -->
                                        <button x-show="active === 'default'" @click="active = 'garlic'">
                                            Dried Garlic
                                        </button>

                                        <!-- Back -->
                                        <button x-show="active !== 'default'" @click="active = 'default'"
                                            class="btn-back">
                                            Back
                                        </button>
                                    </div>

                                    <!-- Interest Button -->
                                    <div class="btn-card-interest-to-export">
                                        <button><a href="#contact" class="text-[#fff] decoration-transparent">Interest to
                                                Import</a></button>
                                    </div>

                                    <!-- Card Number -->
                                    <div class="card-no">
                                        <p>04</p>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>

        <div class="partner-main">
            <img class="partner-bg" src="{{ asset('assets/images/bg-3.png') }}">
            <h1>Why Partner with RSL Trading?</h1>

            <div class="partner-card-wrapper">
                <div class="partner-card">
                    <svg width="82" height="82" viewBox="0 0 82 82" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <mask id="mask0_47_4715" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0"
                            width="82" height="82">
                            <path d="M80.5 80.5V1.5H1.5V80.5H80.5Z" fill="white" stroke="white" stroke-width="3" />
                        </mask>
                        <g mask="url(#mask0_47_4715)">
                            <path
                                d="M8.00732 45.9648C8.89139 45.9648 9.60889 46.6823 9.60889 47.5664C9.60889 48.4505 8.89139 49.168 8.00732 49.168C7.12326 49.168 6.40576 48.4505 6.40576 47.5664C6.40576 46.6823 7.12326 45.9648 8.00732 45.9648Z"
                                fill="white" />
                            <path
                                d="M14.4136 66.7948C14.4088 68.5598 12.977 69.9883 11.2104 69.9883H1.60107V41.1602H11.2104C12.9802 41.1602 14.4136 42.5937 14.4136 44.3633V66.7948Z"
                                stroke="white" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M54.462 59.7943L74.142 53.0295C76.2417 52.2718 78.7289 52.9877 79.7891 54.9496C81.2289 57.6132 79.9685 60.5504 77.5229 61.5288L47.5977 74.705C45.1505 75.8181 42.4935 76.3945 39.8061 76.3945C36.3948 76.3945 33.0475 75.4672 30.1231 73.7119L21.7469 68.6864C19.8138 67.5267 16.6603 66.8766 14.4133 66.7948"
                                stroke="white" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M14.4136 44.3633H27.0931C28.7444 44.3633 30.3667 44.7877 31.8049 45.5981L40.2676 50.3579C40.7481 50.6286 41.2878 50.7695 41.8387 50.7695H52.2105C54.8642 50.7695 57.0151 52.9204 57.0151 55.5742C57.0151 57.368 56.0334 58.9311 54.576 59.7559C53.8777 60.1531 53.0705 60.3789 52.2105 60.3789H35.929"
                                stroke="white" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M27.2183 13.2947C28.5154 8.86784 32.2041 5.5896 37.1078 5.5896C45.0067 5.5896 47.5019 14.5984 47.5019 14.5984C47.5019 14.5984 49.9971 5.5896 57.8976 5.5896C64.0508 5.5896 68.2918 10.7546 68.2918 16.8724C68.2918 24.9685 60.6587 30.388 47.6941 41.6248C39.8841 34.8556 33.5491 30.1257 29.9542 25.4166"
                                stroke="white" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M27.0659 18.0977C27.95 18.0977 28.6675 18.8152 28.6675 19.6992C28.6675 20.5833 27.95 21.3008 27.0659 21.3008C26.1819 21.3008 25.4644 20.5833 25.4644 19.6992C25.4644 18.8152 26.1819 18.0977 27.0659 18.0977Z"
                                fill="white" />
                        </g>
                    </svg>
                    <h5>Strong Financial Stabilityt</h5>
                    <p>We have the resources and expertise to handle large-scale exports efficiently and reliably.</p>
                </div>


                <div class="partner-card">
                    <svg width="82" height="82" viewBox="0 0 82 82" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <mask id="mask0_47_4715" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0"
                            width="82" height="82">
                            <path d="M80.5 80.5V1.5H1.5V80.5H80.5Z" fill="white" stroke="white" stroke-width="3" />
                        </mask>
                        <g mask="url(#mask0_47_4715)">
                            <path
                                d="M8.00732 45.9648C8.89139 45.9648 9.60889 46.6823 9.60889 47.5664C9.60889 48.4505 8.89139 49.168 8.00732 49.168C7.12326 49.168 6.40576 48.4505 6.40576 47.5664C6.40576 46.6823 7.12326 45.9648 8.00732 45.9648Z"
                                fill="white" />
                            <path
                                d="M14.4136 66.7948C14.4088 68.5598 12.977 69.9883 11.2104 69.9883H1.60107V41.1602H11.2104C12.9802 41.1602 14.4136 42.5937 14.4136 44.3633V66.7948Z"
                                stroke="white" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M54.462 59.7943L74.142 53.0295C76.2417 52.2718 78.7289 52.9877 79.7891 54.9496C81.2289 57.6132 79.9685 60.5504 77.5229 61.5288L47.5977 74.705C45.1505 75.8181 42.4935 76.3945 39.8061 76.3945C36.3948 76.3945 33.0475 75.4672 30.1231 73.7119L21.7469 68.6864C19.8138 67.5267 16.6603 66.8766 14.4133 66.7948"
                                stroke="white" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M14.4136 44.3633H27.0931C28.7444 44.3633 30.3667 44.7877 31.8049 45.5981L40.2676 50.3579C40.7481 50.6286 41.2878 50.7695 41.8387 50.7695H52.2105C54.8642 50.7695 57.0151 52.9204 57.0151 55.5742C57.0151 57.368 56.0334 58.9311 54.576 59.7559C53.8777 60.1531 53.0705 60.3789 52.2105 60.3789H35.929"
                                stroke="white" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M27.2183 13.2947C28.5154 8.86784 32.2041 5.5896 37.1078 5.5896C45.0067 5.5896 47.5019 14.5984 47.5019 14.5984C47.5019 14.5984 49.9971 5.5896 57.8976 5.5896C64.0508 5.5896 68.2918 10.7546 68.2918 16.8724C68.2918 24.9685 60.6587 30.388 47.6941 41.6248C39.8841 34.8556 33.5491 30.1257 29.9542 25.4166"
                                stroke="white" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M27.0659 18.0977C27.95 18.0977 28.6675 18.8152 28.6675 19.6992C28.6675 20.5833 27.95 21.3008 27.0659 21.3008C26.1819 21.3008 25.4644 20.5833 25.4644 19.6992C25.4644 18.8152 26.1819 18.0977 27.0659 18.0977Z"
                                fill="white" />
                        </g>
                    </svg>
                    <h5>Integrity You Can Trust</h5>
                    <p>We operate with transparency, honesty, and professionalism in every transaction.</p>

                </div>
                <div class="partner-card">
                    <svg width="82" height="82" viewBox="0 0 82 82" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <mask id="mask0_47_4715" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0"
                            width="82" height="82">
                            <path d="M80.5 80.5V1.5H1.5V80.5H80.5Z" fill="white" stroke="white" stroke-width="3" />
                        </mask>
                        <g mask="url(#mask0_47_4715)">
                            <path
                                d="M8.00732 45.9648C8.89139 45.9648 9.60889 46.6823 9.60889 47.5664C9.60889 48.4505 8.89139 49.168 8.00732 49.168C7.12326 49.168 6.40576 48.4505 6.40576 47.5664C6.40576 46.6823 7.12326 45.9648 8.00732 45.9648Z"
                                fill="white" />
                            <path
                                d="M14.4136 66.7948C14.4088 68.5598 12.977 69.9883 11.2104 69.9883H1.60107V41.1602H11.2104C12.9802 41.1602 14.4136 42.5937 14.4136 44.3633V66.7948Z"
                                stroke="white" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M54.462 59.7943L74.142 53.0295C76.2417 52.2718 78.7289 52.9877 79.7891 54.9496C81.2289 57.6132 79.9685 60.5504 77.5229 61.5288L47.5977 74.705C45.1505 75.8181 42.4935 76.3945 39.8061 76.3945C36.3948 76.3945 33.0475 75.4672 30.1231 73.7119L21.7469 68.6864C19.8138 67.5267 16.6603 66.8766 14.4133 66.7948"
                                stroke="white" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M14.4136 44.3633H27.0931C28.7444 44.3633 30.3667 44.7877 31.8049 45.5981L40.2676 50.3579C40.7481 50.6286 41.2878 50.7695 41.8387 50.7695H52.2105C54.8642 50.7695 57.0151 52.9204 57.0151 55.5742C57.0151 57.368 56.0334 58.9311 54.576 59.7559C53.8777 60.1531 53.0705 60.3789 52.2105 60.3789H35.929"
                                stroke="white" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M27.2183 13.2947C28.5154 8.86784 32.2041 5.5896 37.1078 5.5896C45.0067 5.5896 47.5019 14.5984 47.5019 14.5984C47.5019 14.5984 49.9971 5.5896 57.8976 5.5896C64.0508 5.5896 68.2918 10.7546 68.2918 16.8724C68.2918 24.9685 60.6587 30.388 47.6941 41.6248C39.8841 34.8556 33.5491 30.1257 29.9542 25.4166"
                                stroke="white" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M27.0659 18.0977C27.95 18.0977 28.6675 18.8152 28.6675 19.6992C28.6675 20.5833 27.95 21.3008 27.0659 21.3008C26.1819 21.3008 25.4644 20.5833 25.4644 19.6992C25.4644 18.8152 26.1819 18.0977 27.0659 18.0977Z"
                                fill="white" />
                        </g>
                    </svg>
                    <h5>High-Quality Products</h5>
                    <p>Our agricultural products are carefully sourced from local farmers and meet international standards.
                    </p>

                </div>

                <div class="partner-card">
                    <svg width="82" height="75" viewBox="0 0 82 75" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M73.3737 43.495C72.991 43.495 72.7359 43.3674 72.4808 43.1123C71.9706 42.6021 71.9706 41.8368 72.4808 41.3266C81.0267 32.6532 81.0267 18.7501 72.4808 10.0766C68.2716 5.86745 62.7869 3.57153 56.9196 3.57153C51.0522 3.57153 45.44 5.86745 41.3584 10.0766L28.3481 22.9593C29.7512 23.9797 31.4094 24.6174 33.0675 24.6174C35.1084 24.745 37.0216 23.9797 38.4247 22.5766L38.9349 22.0664C41.1033 19.3879 44.4196 18.495 47.4808 19.5154C48.6288 19.8981 49.7767 20.1532 50.9247 20.1532C54.4961 20.1532 57.8124 18.2399 59.8533 15.0511C60.2359 14.4134 61.0012 14.2858 61.639 14.6685C62.2767 15.0511 62.4043 15.8164 62.0216 16.4542C59.5982 20.4083 55.389 22.7042 50.9247 22.7042C49.3941 22.7042 47.991 22.4491 46.5879 21.9389C44.5471 21.1736 42.3788 21.9389 40.8481 23.7246C40.593 23.9797 40.4655 24.2348 40.2104 24.4899C38.2971 26.4032 35.7461 27.4236 32.94 27.296C30.1339 27.1685 27.5828 26.0205 25.542 23.9797L24.6492 23.0868L39.4451 8.29092C44.0369 3.69908 50.2869 1.02051 56.9196 1.02051C63.5522 1.02051 69.6747 3.57153 74.3941 8.29092C83.9604 17.8572 83.9604 33.546 74.3941 43.1123C74.0114 43.3674 73.7563 43.495 73.3737 43.495Z"
                            fill="white" />
                        <path
                            d="M37.532 75.0002C35.7462 75.0002 34.2156 74.3625 32.9401 73.0869C30.3891 70.5359 30.3891 66.4543 32.9401 63.9033L37.7871 59.0563C39.0626 57.7808 40.5932 57.1431 42.3789 57.1431C44.1646 57.1431 45.6952 57.7808 46.9707 59.0563C49.5218 61.6074 49.5218 65.689 46.9707 68.24L42.1238 73.0869C40.8483 74.2349 39.1901 75.0002 37.532 75.0002ZM42.2513 59.6941C41.2309 59.6941 40.2105 60.0767 39.4452 60.842L34.5983 65.689C33.0677 67.2196 33.0677 69.7706 34.5983 71.3012C36.1289 72.8318 38.6799 72.8318 40.2105 71.3012L45.0575 66.4543C46.5881 64.9237 46.5881 62.3727 45.0575 60.842C44.2922 60.0767 43.3993 59.6941 42.2513 59.6941Z"
                            fill="white" />
                        <path
                            d="M29.2412 68.495C27.4555 68.495 25.7973 67.8572 24.6493 66.5817C22.0983 64.0307 22.0983 59.949 24.6493 57.398L31.9198 50.1276C33.1953 48.8521 34.8534 48.2144 36.5116 48.2144C38.1698 48.2144 39.9555 48.8521 41.1034 50.1276C43.6545 52.6786 43.6545 56.7603 41.1034 59.3113L33.833 66.5817C32.5575 67.7297 30.8993 68.495 29.2412 68.495ZM36.5116 50.6378C35.4912 50.6378 34.4708 51.0205 33.7055 51.7858L26.4351 59.0562C24.9045 60.5868 24.9045 63.1378 26.4351 64.6684C27.9657 66.199 30.5167 66.199 32.0473 64.6684L39.3177 57.398C40.8483 55.8674 40.8483 53.3164 39.3177 51.7858C38.5524 51.148 37.532 50.6378 36.5116 50.6378Z"
                            fill="white" />
                        <path
                            d="M20.8226 61.9898C19.0369 61.9898 17.5063 61.3521 16.2308 60.0766L16.1032 59.949C13.5522 57.398 13.5522 53.3164 16.1032 50.8929L27.0726 39.9235C28.3481 38.648 29.8787 38.0103 31.6644 38.0103C33.4501 38.0103 34.9808 38.648 36.2563 39.9235L36.3838 40.0511C38.9348 42.6021 38.9348 46.6837 36.3838 49.1072L25.4144 60.0766C24.1389 61.3521 22.6083 61.9898 20.8226 61.9898ZM31.792 40.4337C30.7716 40.4337 29.7512 40.8164 28.9859 41.5817L18.0165 52.5511C16.4859 54.0817 16.4859 56.5051 18.0165 58.0358L18.144 58.1633C19.6746 59.6939 22.2257 59.6939 23.6287 58.1633L34.5981 47.1939C36.1287 45.6633 36.1287 43.2398 34.5981 41.7092L34.4706 41.5817C33.8328 40.9439 32.8124 40.4337 31.792 40.4337Z"
                            fill="white" />
                        <path
                            d="M14.3176 53.5716C12.5319 53.5716 10.8737 52.9338 9.72577 51.6583C7.17474 49.1073 7.17474 45.0257 9.72577 42.4746L16.3584 35.842C17.6339 34.5665 19.2921 33.9287 20.9503 33.9287C22.736 33.9287 24.3941 34.5665 25.5421 35.842C28.0931 38.393 28.0931 42.4746 25.5421 45.0257L18.9094 51.6583C17.7615 52.9338 16.1033 53.5716 14.3176 53.5716ZM20.9503 36.4797C19.9298 36.4797 18.9094 36.8624 18.1441 37.6277L11.5115 44.2603C9.98087 45.791 9.98087 48.342 11.5115 49.8726C13.0421 51.4032 15.5931 51.4032 17.1237 49.8726L23.7564 43.2399C25.287 41.7093 25.287 39.1583 23.7564 37.6277C22.9911 36.8624 21.9707 36.4797 20.9503 36.4797Z"
                            fill="white" />
                        <path
                            d="M10.1084 44.5153C9.72577 44.5153 9.47066 44.3878 9.21556 44.1327L7.17474 42.0918C-2.39158 32.5255 -2.39158 16.8367 7.17474 7.27041C11.7666 2.67857 18.0166 0 24.6492 0C31.2819 0 37.4043 2.55102 42.1237 7.27041C42.6339 7.78061 42.6339 8.54592 42.1237 9.05612C41.6135 9.56633 40.8482 9.56633 40.338 9.05612C36.1288 4.84694 30.6441 2.55102 24.7768 2.55102C18.9094 2.55102 13.2972 4.84694 9.21556 9.05612C0.669644 17.7296 0.669644 31.6327 9.21556 40.3061L11.2564 42.3469C11.7666 42.8571 11.7666 43.6225 11.2564 44.1327C10.7462 44.3878 10.4911 44.5153 10.1084 44.5153Z"
                            fill="white" />
                        <path
                            d="M54.7513 67.7299C52.9655 67.7299 51.4349 67.0922 50.1594 65.8167L45.44 61.0973C44.9298 60.5871 44.9298 59.8218 45.44 59.3116C45.9502 58.8013 46.7155 58.8013 47.2257 59.3116L51.9451 64.0309C53.4757 65.5616 56.0268 65.5616 57.5574 64.0309C59.088 62.5003 59.088 59.9493 57.5574 58.4187L50.9247 51.786C50.4145 51.2758 50.4145 50.5105 50.9247 50.0003C51.4349 49.4901 52.2002 49.4901 52.7104 50.0003L59.3431 56.633C61.8941 59.184 61.8941 63.2656 59.3431 65.8167C58.0676 66.9646 56.4094 67.7299 54.7513 67.7299Z"
                            fill="white" />
                        <path
                            d="M45.4401 73.3418C44.0371 73.3418 42.7615 72.9591 41.6136 72.0663C41.1034 71.6836 40.9758 70.7908 41.3585 70.2805C41.7411 69.7703 42.634 69.6428 43.1442 70.0254C44.6748 71.1734 46.9707 71.0459 48.2462 69.6428C49.7768 68.1122 49.7768 65.5612 48.2462 64.0305L47.0983 62.755C46.5881 62.2448 46.5881 61.4795 47.0983 60.9693C47.6085 60.4591 48.3738 60.4591 48.884 60.9693L50.0319 62.1173C52.583 64.6683 52.583 68.7499 50.0319 71.301C48.884 72.704 47.0983 73.3418 45.4401 73.3418Z"
                            fill="white" />
                        <path
                            d="M63.9351 62.1178C62.277 62.1178 60.6188 61.4801 59.3433 60.2045L47.481 48.3423C46.9708 47.8321 46.9708 47.0668 47.481 46.5566C47.9912 46.0464 48.7566 46.0464 49.2668 46.5566L61.129 58.4188C62.6596 59.9495 65.2106 59.9495 66.7412 58.4188C68.2719 56.8882 68.2719 54.3372 66.7412 52.8066L55.8994 41.9648C55.3892 41.4546 55.3892 40.6892 55.8994 40.179C56.4096 39.6688 57.1749 39.6688 57.6851 40.179L68.527 51.0209C71.078 53.5719 71.078 57.6535 68.527 60.2045C67.2514 61.4801 65.5933 62.1178 63.9351 62.1178Z"
                            fill="white" />
                        <path
                            d="M69.5472 52.9339C67.889 52.9339 66.2309 52.2961 64.9553 51.0206L53.0931 39.1583C52.5829 38.6481 52.5829 37.8828 53.0931 37.3726C53.6033 36.8624 54.3686 36.8624 54.8788 37.3726L66.7411 49.2349C68.2717 50.7655 70.8227 50.7655 72.2258 49.2349L72.3533 49.1073C73.8839 47.5767 73.8839 45.1532 72.3533 43.6226L54.1135 25.2553C53.6033 24.7451 53.6033 23.9798 54.1135 23.4696C54.6237 22.9594 55.389 22.9594 55.8992 23.4696L74.139 41.8369C76.69 44.3879 76.69 48.4696 74.139 50.893L74.0115 51.0206C72.8635 52.1685 71.3329 52.9339 69.5472 52.9339Z"
                            fill="white" />
                    </svg>


                    <h5>Supporting Local Farmers</h5>
                    <p>By partnering with RSL Trading, you help create jobs and improve incomes for Cambodian farmers.</p>

                </div>
            </div>

        </div>
    </section>

    <section id="contact" class="pt-6 md:pt-0">
        <form action="{{ route('contact.send') }}" method="POST" class="wrapper-contact container">
            <p>Contact Form</p>
            <div class="row">
                @csrf
                <div class="col-lg-6 col-md-6 input-field">
                    <input class="col-12" name="name" placeholder="Name">
                </div>

                <div class="col-lg-6 col-md-6 input-field">
                    <input class="col-12" name="phone" placeholder="Mobile Phone ">
                </div>

                <div class="col-lg-6 col-md-6 input-field">
                    <input class="col-12" name="company" placeholder="Company Name">
                </div>

                <div class="col-lg-6 col-md-6 input-field">
                    <select name="trade_type" id="tradeType" class="form-select">
                        <option value="">Select Import/Export</option>
                        <option value="import">Import</option>
                        <option value="export">Export</option>
                    </select>
                </div>

                <div class="col-lg-6 col-md-6 input-field">
                    <select name="country" class="form-select" aria-label="Default select example">
                        <option selected disabled>Select a Country</option>
                        <option value="Afghanistan">Afghanistan</option>
                        <option value="Albania">Albania</option>
                        <option value="Algeria">Algeria</option>
                        <option value="Andorra">Andorra</option>
                        <option value="Angola">Angola</option>
                        <option value="Argentina">Argentina</option>
                        <option value="Armenia">Armenia</option>
                        <option value="Australia">Australia</option>
                        <option value="Austria">Austria</option>
                        <option value="Azerbaijan">Azerbaijan</option>
                        <option value="Bahamas">Bahamas</option>
                        <option value="Bahrain">Bahrain</option>
                        <option value="Bangladesh">Bangladesh</option>
                        <option value="Barbados">Barbados</option>
                        <option value="Belarus">Belarus</option>
                        <option value="Belgium">Belgium</option>
                        <option value="Belize">Belize</option>
                        <option value="Benin">Benin</option>
                        <option value="Bhutan">Bhutan</option>
                        <option value="Bhutan">Bhutan</option>
                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                        <option value="Botswana">Botswana</option>
                        <option value="Brazil">Brazil</option>
                        <option value="Brunei">Brunei</option>
                        <option value="Bulgaria">Bulgaria</option>
                        <option value="Burkina Faso">Burkina Faso</option>
                        <option value="Burundi">Burundi</option>
                        <option value="Cambodia">Cambodia</option>
                        <option value="Cameroon">Cameroon</option>
                        <option value="Canada">Canada</option>
                        <option value="Cape Verde">Cape Verde</option>
                        <option value="Central African Republic">Central African Republic</option>
                        <option value="Chad">Chad</option>
                        <option value="Chile">Chile</option>
                        <option value="China">China</option>
                        <option value="Colombia">Colombia</option>
                        <option value="Comoros">Comoros</option>
                        <option value="Congo">Congo</option>
                        <option value="Costa Rica">Costa Rica</option>
                        <option value="Croatia">Croatia</option>
                        <option value="Cuba">Cuba</option>
                        <option value="Cyprus">Cyprus</option>
                        <option value="Czech Republic">Czech Republic</option>
                        <option value="Denmark">Denmark</option>
                        <option value="Djibouti">Djibouti</option>
                        <option value="Dominica">Dominica</option>
                        <option value="Dominican Republic">Dominican Republic</option>
                        <option value="Ecuador">Ecuador</option>
                        <option value="Egypt">Egypt</option>
                        <option value="El Salvador">El Salvador</option>
                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                        <option value="Eritrea">Eritrea</option>
                        <option value="Estonia">Estonia</option>
                        <option value="Ethiopia">Ethiopia</option>
                        <option value="Fiji">Fiji</option>
                        <option value="Finland">Finland</option>
                        <option value="France">France</option>
                        <option value="Gabon">Gabon</option>
                        <option value="Gambia">Gambia</option>
                        <option value="Georgia">Georgia</option>
                        <option value="Germany">Germany</option>
                        <option value="Ghana">Ghana</option>
                        <option value="Greece">Greece</option>
                        <option value="Grenada">Grenada</option>
                        <option value="Guatemala">Guatemala</option>
                        <option value="Guinea">Guinea</option>
                        <option value="Guinea-Bissau">Guinea-Bissau</option>
                        <option value="Guyana">Guyana</option>
                        <option value="Haiti">Haiti</option>
                        <option value="Honduras">Honduras</option>
                        <option value="Hungary">Hungary</option>
                        <option value="Iceland">Iceland</option>
                        <option value="India">India</option>
                        <option value="Indonesia">Indonesia</option>
                        <option value="Iran">Iran</option>
                        <option value="Iraq">Iraq</option>
                        <option value="Ireland">Ireland</option>
                        <option value="Israel">Israel</option>
                        <option value="Italy">Italy</option>
                        <option value="Jamaica">Jamaica</option>
                        <option value="Japan">Japan</option>
                        <option value="Jordan">Jordan</option>
                        <option value="Kazakhstan">Kazakhstan</option>
                        <option value="Kenya">Kenya</option>
                        <option value="Kiribati">Kiribati</option>
                        <option value="North Korea">North Korea</option>
                        <option value="South Korea">South Korea</option>
                        <option value="Kuwait">Kuwait</option>
                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                        <option value="Laos">Laos</option>
                        <option value="Latvia">Latvia</option>
                        <option value="Lebanon">Lebanon</option>
                        <option value="Lesotho">Lesotho</option>
                        <option value="Liberia">Liberia</option>
                        <option value="Libya">Libya</option>
                        <option value="Liechtenstein">Liechtenstein</option>
                        <option value="Lithuania">Lithuania</option>
                        <option value="Luxembourg">Luxembourg</option>
                        <option value="Madagascar">Madagascar</option>
                        <option value="Malawi">Malawi</option>
                        <option value="Malaysia">Malaysia</option>
                        <option value="Maldives">Maldives</option>
                        <option value="Mali">Mali</option>
                        <option value="Malta">Malta</option>
                        <option value="Marshall Islands">Marshall Islands</option>
                        <option value="Mauritania">Mauritania</option>
                        <option value="Mauritius">Mauritius</option>
                        <option value="Mexico">Mexico</option>
                        <option value="Micronesia">Micronesia</option>
                        <option value="Moldova">Moldova</option>
                        <option value="Monaco">Monaco</option>
                        <option value="Mongolia">Mongolia</option>
                        <option value="Montenegro">Montenegro</option>
                        <option value="Morocco">Morocco</option>
                        <option value="Mozambique">Mozambique</option>
                        <option value="Myanmar">Myanmar</option>
                        <option value="Namibia">Namibia</option>
                        <option value="Nauru">Nauru</option>
                        <option value="Nepal">Nepal</option>
                        <option value="Netherlands">Netherlands</option>
                        <option value="New Zealand">New Zealand</option>
                        <option value="Nicaragua">Nicaragua</option>
                        <option value="Niger">Niger</option>
                        <option value="Nigeria">Nigeria</option>
                        <option value="Norway">Norway</option>
                        <option value="Oman">Oman</option>
                        <option value="Pakistan">Pakistan</option>
                        <option value="Palau">Palau</option>
                        <option value="Panama">Panama</option>
                        <option value="Papua New Guinea">Papua New Guinea</option>
                        <option value="Paraguay">Paraguay</option>
                        <option value="Peru">Peru</option>
                        <option value="Philippines">Philippines</option>
                        <option value="Poland">Poland</option>
                        <option value="Portugal">Portugal</option>
                        <option value="Qatar">Qatar</option>
                        <option value="Romania">Romania</option>
                        <option value="Russia">Russia</option>
                        <option value="Rwanda">Rwanda</option>
                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                        <option value="Saint Lucia">Saint Lucia</option>
                        <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                        <option value="Samoa">Samoa</option>
                        <option value="San Marino">San Marino</option>
                        <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                        <option value="Saudi Arabia">Saudi Arabia</option>
                        <option value="Senegal">Senegal</option>
                        <option value="Serbia">Serbia</option>
                        <option value="Seychelles">Seychelles</option>
                        <option value="Sierra Leone">Sierra Leone</option>
                        <option value="Singapore">Singapore</option>
                        <option value="Slovakia">Slovakia</option>
                        <option value="Slovenia">Slovenia</option>
                        <option value="Solomon Islands">Solomon Islands</option>
                        <option value="Somalia">Somalia</option>
                        <option value="South Africa">South Africa</option>
                        <option value="Spain">Spain</option>
                        <option value="Sri Lanka">Sri Lanka</option>
                        <option value="Sudan">Sudan</option>
                        <option value="Suriname">Suriname</option>
                        <option value="Swaziland">Swaziland</option>
                        <option value="Sweden">Sweden</option>
                        <option value="Switzerland">Switzerland</option>
                        <option value="Syria">Syria</option>
                        <option value="Taiwan">Taiwan</option>
                        <option value="Tajikistan">Tajikistan</option>
                        <option value="Tanzania">Tanzania</option>
                        <option value="Thailand">Thailand</option>
                        <option value="Togo">Togo</option>
                        <option value="Tonga">Tonga</option>
                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                        <option value="Tunisia">Tunisia</option>
                        <option value="Turkey">Turkey</option>
                        <option value="Turkmenistan">Turkmenistan</option>
                        <option value="Tuvalu">Tuvalu</option>
                        <option value="Uganda">Uganda</option>
                        <option value="Ukraine">Ukraine</option>
                        <option value="United Arab Emirates">United Arab Emirates</option>
                        <option value="United Kingdom">United Kingdom</option>
                        <option value="USA">USA</option>
                        <option value="Uruguay">Uruguay</option>
                        <option value="Uzbekistan">Uzbekistan</option>
                        <option value="Vanuatu">Vanuatu</option>
                        <option value="Venezuela">Venezuela</option>
                        <option value="Vietnam">Vietnam</option>
                        <option value="Yemen">Yemen</option>
                        <option value="Zambia">Zambia</option>
                        <option value="Zimbabwe">Zimbabwe</option>
                    </select>

                </div>


                <div class="col-lg-6 col-md-6">
                    <label class="choose-field">Commodities</label>
                    <div id="commodityList" class="showcommoditylist"></div>
                </div>

                <div class="col-lg-6 col-md-6 input-field">
                    <input class="col-12" name="address" placeholder="Address">
                </div>

                <div class="col-lg-6 col-md-6 input-field">
                    <input class="col-12" name="email" placeholder="Email">
                </div>

                <div class="col-12 input-field">
                    <textarea class="col-12" name="message" placeholder="Messages"></textarea>
                </div>
            </div>

            <div class="confirm-policy">
                <input type="checkbox" name="policy">
                <div class="confrim-policy-text">
                    <p>I consent to having this website store my submitted
                        information so they can respond to my enquiry.
                    </p>
                </div>
            </div>


            <div class="d-flex justify-content-center">
                <button class="btn-Submit">
                    <img src="{{ asset('assets/images/btn-submit-bg.png') }}">
                    <p>Submit</p>
                </button>
            </div>
        </form>
    </section>

    <section>
        <div class="last-banner">
            <img src="{{ asset('assets/images/bg-3.png') }}">
        </div>
    </section>
@endsection
