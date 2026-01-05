@extends('layouts.master')

@section('title')
    <title>Export - RSL Trading</title>
@endsection

{{-- @section('css')
     <link rel="stylesheet" href="{{ asset('assets/css/export.css') }}">
@endsection --}}

@section('content')
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








        @media screen and (max-width: 768px) {

            .btn-Interest-to-export {
                width: 228px;
                height: 43px;
                background-color: #FFFFFF;
                font-weight: bolder;
                color: #059848;
                border-radius: 41.5px;
                margin-top: 2rem;
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
            height: 170vh;
            width: 100%;
            top: 0;
            margin-top: -7rem;
        }

        .first-card-background img {
            object-fit: cover;
            width: 100%;
            height: 170vh;
        }

        @media screen and (max-width: 2561px) and (min-width: 1441px) {
            .first-card {
                position: relative;
                width: 100%;
                height: 100%;
                padding-top: 10rem;
                margin-top: -5rem !important;
            }
        }


        @media screen and (max-width: 1440px) and (min-width: 1025px) {
            .first-card {
                position: relative;
                width: 100%;
                height: 100%;
                padding-top: 10rem;
                margin-top: -5rem !important;
            }
        }

        @media screen and (max-width: 1024px) and (min-width: 769px) {
            .first-card {
                position: relative;
                width: 100%;
                height: 100%;
                padding-top: 10rem;
                margin-top: -5rem !important;
            }
        }


        @media screen and (max-width: 640px) and (min-width: 426px) {
            .first-card {
                position: relative;
                width: 100%;
                height: 100%;
                padding-top: 10rem;
                margin-top: 2rem !important;
            }
        }

        @media screen and (max-width: 425px) {
            .first-card {
                position: relative;
                width: 100%;
                height: 100%;
                padding-top: 10rem;
                margin-top: 3rem !important;
            }
        }




        .main-card-product {
            width: 100%;
            height: auto;
            margin-top: 2rem !important;
            position: relative;
        }

        @media screen and (max-width: 2560px) and (min-width: 1441px) {
            .main-card-product {
                margin-top: 2rem !important;
                ;
            }
        }

        @media screen and (max-width: 1440px) and (min-width: 1025px) {
            .main-card-product {
                margin-top: 2rem !important;
            }
        }

        @media screen and (max-width: 1024px) and (min-width: 769px) {
            .main-card-product {
                margin-top: -2rem !important;
            }
        }

        @media screen and (max-width: 768px) and (min-width: 426px) {
            .main-card-product {
                margin-top: -2rem !important;
            }
        }

        @media screen and (max-width: 425px) {
            .main-card-product {
                margin-top: -2rem !important;
            }
        }

        .card-product {
            position: relative;
            margin-bottom: 1rem;
        }

        .card-product .card-product-bg {
            width: 100%;

        }

        .card-product .card-product-detail {
            width: 100%;
            height: 360px;
            background-color: #EEFFF8;
            position: relative;
            margin-top: -5rem;
            border: #EEFFF8;
            border-radius: 20px;
            padding-left: 2rem;
            padding-right: 2rem;
            padding-top: 3rem;
            padding-bottom: 1.5rem;
        }

        @media screen and (max-width: 767px) {
            .card-product .card-product-detail {
                width: 100%;
                height: 390px;
            }

        }



        @media screen and (max-width: 426px) {
            .card-product .card-product-detail {
                height: 380px;
            }
        }

        .card-product .card-product-detail h5 {
            font-weight: bolder;
            color: #059848;
            font-size: 20px;
        }

        .smaill-detail-card {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            margin-top: 2rem;
            margin-bottom: 2rem;

        }

        .card-product .card-product-detail .smaill-detail-card button {
            color: #1E1E1E;
            font-size: 20px;
            width: 274px;
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
            height: 47px;
            border-radius: 23.5px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card-product .card-product-detail .smaill-detail-card button:hover a {
            color: #FFFFFF
        }


        .card-product .card-product-detail .btn-card-interest-to-export {
            position: absolute;
            bottom: 5%;
            left: 50%;
            transform: translateX(-50%);
        }

        .card-product .card-product-detail .btn-card-interest-to-export button {
            width: 165px;
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
            top: -10%;
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
            margin-top: 5%;
            ;
        }

        @media screen and (max-width: 1200px) {

            .partner-main {
                width: 100%;
                height: 100%;
                position: relative;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                margin-top: 15%;
                ;
            }
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
            font-size: 20px;
            color: #FFFFFF;
            font-weight: bolder;
            margin-bottom: 2.5rem;
            margin-top: 2.5rem;
        }

        @media screen and (max-width: 426px) {
            .partner-main h1 {
                font-size: 14px;
                margin-top: 1.5rem;
                margin-bottom: 1.5rem;
            }
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
            margin-bottom: 3rem;
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
                margin-top: 5rem;
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
                margin-top: 75% !important;
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
                margin-top: 95% !important;
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
            {{-- <img class="banner-img" src="{{ asset('assets/images/banner-img-1.png') }}"> --}}
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
                        <h1 data-aos="zoom-in-up" data-aos-duration="1000">
                            {{ app()->getLocale() === 'en' ? 'Export' : (app()->getLocale() === 'km' ? 'ទំនិញនាំចេញ' : '出口商品') }}
                        </h1>
                        <h1 data-aos="zoom-in-up" data-aos-duration="1200">
                            {{ app()->getLocale() === 'en' ? 'Commodities' : (app()->getLocale() === 'km' ? '' : '') }}
                        </h1>
                    </div>
                    <div class="main-banner-p-bg">
                        <p data-aos="zoom-in-up" data-aos-duration="1400">
                            {{ app()->getLocale() === 'en'
                                ? 'Premium Cambodian Agricultural Products – Rice, Coffee, Corn, Cashew Nuts, Mangoes
                                                                                    & Cassava, Exported Worldwide with Quality You Can Trust.'
                                : (app()->getLocale() === 'km'
                                    ? 'ផលិតផលកសិកម្មកម្ពុជារួមមាន អង្ករ កាហ្វេ ពោត គ្រាប់ស្វាយចន្ទី ស្វាយ ដំណាប់ស្វាយ និងដំឡូងមី ត្រូវបាននាំចេញទៅកាន់ទីផ្សារពិភពលោកជាមួយនឹងគុណភាពដែលលោកអ្នកអាចទុកចិត្តបាន។'
                                    : '优质柬埔寨农产品-大米，咖啡，玉米，腰果，芒果和木薯，出口到世界各地，质量值得信赖。') }}
                        </p>
                    </div>
                    <a data-aos="zoom-in-up" data-aos-duration="1600" href="#interest"><button
                            class="btn-Interest-to-export">
                            {{ app()->getLocale() === 'en' ? 'Interest to Export' : (app()->getLocale() === 'km' ? 'ចំណាប់អារម្មណ៍ក្នុងការនាំចេញ' : '兴趣出口') }}
                        </button></a>
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

            <div class="main-card-product" id="interest">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-4 col-md-6 col-12" id="rice">
                            <div class="card-product" x-data="{
                                active: 'default',
                                products: {
                                    default: {
                                        title: '{{ app()->getLocale() === 'en' ? 'Grains & Cereals' : (app()->getLocale() === 'km' ? 'គ្រាប់ធញ្ញជាតិ' : '谷物和谷类食品') }}',
                                        desc: '{{ app()->getLocale() === 'en'
                                            ? 'High-quality, farm-sourced grains trusted by local farmers and global buyers.'
                                            : (app()->getLocale() === 'km'
                                                ? 'គ្រាប់ធញ្ញជាតិប្រកបដោយគុណភាពខ្ពស់មានប្រភពច្បាស់លាស់ដែលកសិករក្នុងស្រុក និងអ្នកទិញទូទាំងពិភពលោកអាចជឿទុកចិត្តបាន។'
                                                : '高品质、农场采购的谷物，深受当地农民和全球买家的信赖。') }}',
                                        img: '{{ asset('assets/images/export/cereals.jpg') }}'
                                    },

                                    rice: {
                                        title: '{{ app()->getLocale() === 'en' ? 'Rice' : (app()->getLocale() === 'km' ? 'អង្ករ' : '大米') }}',
                                        desc: '{{ app()->getLocale() === 'en'
                                            ? 'Premium export-quality rice carefully processed to meet international food standards.'
                                            : (app()->getLocale() === 'km'
                                                ? 'អង្ករ​ដែល​មាន​គុណភាព​ខ្ពស់​សម្រាប់​នាំចេញ។'
                                                : '优质出口级大米，经过精心加工，符合国际食品标准。') }}',
                                        img: '{{ asset('assets/images/export/rice.jpg') }}'
                                    },

                                    yellow_corn: {
                                        title: '{{ app()->getLocale() === 'en' ? 'Yellow Corn' : (app()->getLocale() === 'km' ? 'ពោតលឿង' : '黄玉米') }}',
                                        desc: '{{ app()->getLocale() === 'en'
                                            ? 'High-grade yellow corn suitable for animal feed, food processing, and industrial use.'
                                            : (app()->getLocale() === 'km'
                                                ? 'ពោតលឿងគុណភាពខ្ពស់ ស័ក្តិសមសម្រាប់ចំណីសត្វ ការកែច្នៃអាហារ និងការប្រើប្រាស់ក្នុងឧស្សាហកម្ម។'
                                                : '高品质的黄玉米，可用于动物饲料、食品加工以及工业用途。') }}',
                                        img: '{{ asset('assets/images/card-3.png') }}'
                                    }

                                }
                            }">
                                <!-- Image -->
                                <img class="card-product-bg h-[300px] object-cover" :src="products[active].img">

                                <div class="card-product-detail">
                                    <!-- Title -->
                                    <h5 x-text="products[active].title"></h5>

                                    <!-- Description -->
                                    <p x-text="products[active].desc"></p>

                                    <!-- Buttons -->
                                    <div class="smaill-detail-card">
                                        <!-- Fresh Mango -->
                                        <button x-show="active === 'default'" @click="active = 'rice'">
                                            {{ app()->getLocale() === 'en' ? 'Rice' : (app()->getLocale() === 'km' ? 'អង្ករ' : '大米') }}
                                        </button>

                                        <!-- Dried Mango -->
                                        <button x-show="active === 'default'" @click="active = 'yellow_corn'">
                                            {{ app()->getLocale() === 'en' ? 'Yellow Corn' : (app()->getLocale() === 'km' ? 'ពោតលឿង' : '黄玉米') }}
                                        </button>

                                        <!-- Back -->
                                        <button x-show="active !== 'default'" @click="active = 'default'" class="btn-back">
                                            {{ app()->getLocale() === 'en' ? 'Back' : (app()->getLocale() === 'km' ? 'ត្រឡប់ក្រោយ' : '回去') }}
                                        </button>
                                    </div>

                                    <!-- Interest Button -->
                                    <div class="btn-card-interest-to-export">
                                        <button><a href="#contact"
                                                class="text-[#fff] decoration-transparent">{{ app()->getLocale() === 'en' ? 'Interest to Export' : (app()->getLocale() === 'km' ? 'ចំណាប់អារម្មណ៍ក្នុងការនាំចេញ' : '兴趣出口') }}
                                            </a></button>
                                    </div>

                                    <!-- Card Number -->
                                    <div class="card-no">
                                        <p>{{ app()->getLocale() === 'en' ? '01' : (app()->getLocale() === 'km' ? '០១' : '01') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-4 col-md-6 col-12" id="fruits">
                            <div class="card-product" x-data="{
                                active: 'default',
                                products: {
                                    default: {
                                        title: '{{ app()->getLocale() === 'en' ? 'Fruits Products' : (app()->getLocale() === 'km' ? 'ផលិតផលផ្លែឈើ' : '水果制品') }}',
                                        desc: '{{ app()->getLocale() === 'en' ? 'Fresh and processed fruits harvested at peak ripeness for maximum flavor and quality.' : (app()->getLocale() === 'km' ? 'ផ្លែឈើស្រស់ និងផ្លែឈើកែច្នៃ ប្រមូលផលនៅពេលទុំដើម្បីទទួលបានឱជារស និងគុណភាពខ្ពស់។' : '新鲜且经过加工的水果均在成熟度最佳时采摘，以确保其风味和品质达到最高水平。') }}',
                                        img: '{{ asset('assets/images/export/fruits.jpg') }}'
                                    },
                                    fresh_mango: {
                                        title: '{{ app()->getLocale() === 'en' ? 'Fresh Mango' : (app()->getLocale() === 'km' ? 'ស្វាយស្រស់' : '新鲜芒果') }}',
                                        desc: '{{ app()->getLocale() === 'en' ? 'Export-quality fresh mangoes with rich flavor and natural sweetness.' : (app()->getLocale() === 'km' ? 'ស្វាយស្រស់ៗ គុណភាពនាំចេញ ជាមួយនឹងរសជាតិឈ្ងុយឆ្ងាញ់ និងផ្អែមធម្មជាតិ។' : '出口级新鲜芒果，味道浓郁，甜度自然。') }}',
                                        img: '{{ asset('assets/images/export-card-product-2.png') }}'
                                    },
                                    dried_mango: {
                                        title: '{{ app()->getLocale() === 'en' ? 'Dried Mango' : (app()->getLocale() === 'km' ? 'ដំណាប់ស្វាយ' : '芒果干') }}',
                                        desc: '{{ app()->getLocale() === 'en' ? 'Carefully dried mango slices for long shelf life and premium taste.' : (app()->getLocale() === 'km' ? 'ចំណិតស្វាយហាលស្ងួតល្អដើម្បីទទួលបានកាលបរិច្ឆេទរក្សាទុកបានយូរអង្វែង និងរសជាតិឆ្ងាញ់។' : '精心干燥处理的芒果片，保质期长且口感上乘。') }}',
                                        img: '{{ asset('assets/images/export/dry_mango.jpg') }}'
                                    }
                                }
                            }">
                                <!-- Image -->
                                <img class="card-product-bg h-[300px] object-cover" :src="products[active].img">

                                <div class="card-product-detail">
                                    <!-- Title -->
                                    <h5 x-text="products[active].title"></h5>

                                    <!-- Description -->
                                    <p x-text="products[active].desc"></p>

                                    <!-- Buttons -->
                                    <div class="smaill-detail-card">
                                        <!-- Fresh Mango -->
                                        <button x-show="active === 'default'" @click="active = 'fresh_mango'">
                                            {{ app()->getLocale() === 'en' ? 'Fresh Mango' : (app()->getLocale() === 'km' ? 'ស្វាយស្រស់' : '新鲜芒果') }}
                                        </button>

                                        <!-- Dried Mango -->
                                        <button x-show="active === 'default'" @click="active = 'dried_mango'">
                                            {{ app()->getLocale() === 'en' ? 'Dried Mango' : (app()->getLocale() === 'km' ? 'ដំណាប់ស្វាយ' : '芒果干') }}
                                        </button>

                                        <!-- Back -->
                                        <button x-show="active !== 'default'" @click="active = 'default'" class="btn-back">
                                            {{ app()->getLocale() === 'en' ? 'Back' : (app()->getLocale() === 'km' ? 'ត្រឡប់ក្រោយ' : '回去') }}
                                        </button>
                                    </div>

                                    <!-- Interest Button -->
                                    <div class="btn-card-interest-to-export">
                                        <button><a href="#contact"
                                                class="text-[#fff] decoration-transparent">{{ app()->getLocale() === 'en' ? 'Interest to Export' : (app()->getLocale() === 'km' ? 'ចំណាប់អារម្មណ៍ក្នុងការនាំចេញ' : '兴趣出口') }}</a></button>
                                    </div>

                                    <!-- Card Number -->
                                    <div class="card-no">
                                        <p>{{ app()->getLocale() === 'en' ? '02' : (app()->getLocale() === 'km' ? '០២' : '02') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12" id="nuts">
                            <div class="card-product" x-data="{
                                active: 'default',
                                products: {
                                    default: {
                                        title: '{{ app()->getLocale() === 'en' ? 'Nuts & Legumes' : (app()->getLocale() === 'km' ? 'គ្រាប់ធញ្ញជាតិ និង​សណ្តែក​' : '坚果和豆类') }}',
                                        desc: '{{ app()->getLocale() === 'en' ? 'Premium-grade nuts and legumes sourced from trusted Cambodian farmers.' : (app()->getLocale() === 'km' ? 'គ្រាប់ធញ្ញជាតិ និង​សណ្តែក​​លំដាប់​ខ្ពស់​ដែល​មាន​ប្រភព​មក​ពី​កសិករ​ក្នុងស្រុក​ប្រកបដោយទំនុកចិត្ត។' : '优质的坚果和豆类均来自可信赖的柬埔寨农民所种植的作物。') }}',
                                        img: '{{ asset('assets/images/export-card-product-3.png') }}'
                                    },
                                    cashew: {
                                        title: '{{ app()->getLocale() === 'en' ? 'Cashew Nuts' : (app()->getLocale() === 'km' ? 'គ្រាប់ស្វាយចន្ទី' : '腰果') }}',
                                        desc: '{{ app()->getLocale() === 'en' ? 'High-quality Cambodian cashew nuts suitable for global export markets.' : (app()->getLocale() === 'km' ? 'គ្រាប់ស្វាយចន្ទីកម្ពុជាប្រកបដោយគុណភាពខ្ពស់ សមស្របសម្រាប់ទីផ្សារនាំចេញពិភពលោក។' : '高品质的柬埔寨腰果，适合出口全球市场。') }}',
                                        img: '{{ asset('assets/images/export/nuts.jpg') }}'
                                    },
                                    peanut: {
                                        title: '{{ app()->getLocale() === 'en' ? 'Peanuts' : (app()->getLocale() === 'km' ? 'សណ្តែកដី' : '花生') }}',
                                        desc: '{{ app()->getLocale() === 'en' ? 'Premium peanuts processed for food and industrial use.' : (app()->getLocale() === 'km' ? 'សណ្តែកដីប្រកបដោយគុណភាពខ្ពស់កែច្នៃសម្រាប់ម្ហូបអាហារ និងការប្រើប្រាស់ក្នុងឧស្សាហកម្មនានា។' : '优质花生，用于食品和工业加工。') }}',
                                        img: '{{ asset('assets/images/export/peanut.jpg') }}'
                                    }
                                }
                            }">
                                <!-- Image -->
                                <img class="card-product-bg h-[300px] object-cover" :src="products[active].img">

                                <div class="card-product-detail">
                                    <!-- Title -->
                                    <h5 x-text="products[active].title"></h5>

                                    <!-- Description -->
                                    <p x-text="products[active].desc"></p>

                                    <!-- Buttons -->
                                    <div class="smaill-detail-card">
                                        <!-- Cashew -->
                                        <button x-show="active === 'default'" @click="active = 'cashew'">
                                            {{ app()->getLocale() === 'en' ? 'Cashew Nuts' : (app()->getLocale() === 'km' ? 'គ្រាប់ស្វាយចន្ទី' : '腰果') }}
                                        </button>

                                        <!-- Peanut -->
                                        <button x-show="active === 'default'" @click="active = 'peanut'">
                                            {{ app()->getLocale() === 'en' ? 'Peanuts' : (app()->getLocale() === 'km' ? 'សណ្តែកដី' : '花生') }}
                                        </button>

                                        <!-- Back -->
                                        <button x-show="active !== 'default'" @click="active = 'default'" class="btn-back">
                                            {{ app()->getLocale() === 'en' ? 'Back' : (app()->getLocale() === 'km' ? 'ត្រឡប់ក្រោយ' : '回去') }}
                                        </button>
                                    </div>

                                    <!-- Interest Button -->
                                    <div class="btn-card-interest-to-export">
                                        <div class="btn-card-interest-to-export">
                                            <button><a href="#contact"
                                                    class="text-[#fff] decoration-transparent">{{ app()->getLocale() === 'en' ? 'Interest to Export' : (app()->getLocale() === 'km' ? 'ចំណាប់អារម្មណ៍ក្នុងការនាំចេញ' : '兴趣出口') }}</a></button>
                                        </div>
                                    </div>

                                    <!-- Card Number -->
                                    <div class="card-no">
                                        <p>{{ app()->getLocale() === 'en' ? '03' : (app()->getLocale() === 'km' ? '០៣' : '03') }}</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-4 col-md-6 col-12" id="root_crops">
                            <div class="card-product" x-data="{
                                active: 'default',
                                products: {
                                    default: {
                                        title: '{{ app()->getLocale() === 'en' ? 'Root Crops' : (app()->getLocale() === 'km' ? 'ដំណាំ​មើម' : '根茎类作物') }}',
                                        desc: '{{ app()->getLocale() === 'en' ? 'Processed and dried cassava ideal for industrial and export applications.' : (app()->getLocale() === 'km' ? 'ដំឡូងមី​កែច្នៃ និង​សម្ងួត​ល្អ​សម្រាប់​ការ​ប្រើប្រាស់​ក្នុង​ឧស្សាហកម្ម និង​ការ​នាំ​ចេញ​។' : '经过加工和干燥处理的木薯非常适合用于工业生产及出口用途。') }}',
                                        img: '{{ asset('assets/images/export/root_crops.jpg') }}'
                                    },
                                    cassava: {
                                        title: '{{ app()->getLocale() === 'en' ? 'Dried Cassava' : (app()->getLocale() === 'km' ? 'ដំឡូងមី​ស្ងួត' : '干木薯') }}',
                                        desc: '{{ app()->getLocale() === 'en' ? 'High-quality dried cassava for industrial processing and international export.' : (app()->getLocale() === 'km' ? 'ដំឡូងមីស្ងួតប្រកបដោយគុណភាពខ្ពស់សម្រាប់កែច្នៃឧស្សាហកម្ម និងការនាំចេញអន្តរជាតិ។' : '高品质的干木薯，适用于工业加工及国际出口。') }}',
                                        img: '{{ asset('assets/images/export-card-product-4.png') }}'
                                    }
                                }
                            }">
                                <!-- Image -->
                                <img class="card-product-bg h-[300px] object-cover" :src="products[active].img">

                                <div class="card-product-detail">
                                    <!-- Title -->
                                    <h5 x-text="products[active].title"></h5>

                                    <!-- Description -->
                                    <p x-text="products[active].desc"></p>

                                    <!-- Buttons -->
                                    <div class="smaill-detail-card">
                                        <!-- Dried Cassava -->
                                        <button x-show="active === 'default'" @click="active = 'cassava'">
                                            {{ app()->getLocale() === 'en' ? 'Dried Cassava' : (app()->getLocale() === 'km' ? 'ដំឡូងមី​ស្ងួត' : '干木薯') }}
                                        </button>

                                        <!-- Back -->
                                        <button x-show="active !== 'default'" @click="active = 'default'"
                                            class="btn-back">
                                            {{ app()->getLocale() === 'en' ? 'Back' : (app()->getLocale() === 'km' ? 'ត្រឡប់ក្រោយ' : '回去') }}
                                        </button>
                                    </div>

                                    <!-- Interest Button -->
                                    <div class="btn-card-interest-to-export">
                                        <button><a href="#contact"
                                                class="text-[#fff] decoration-transparent">{{ app()->getLocale() === 'en' ? 'Interest to Export' : (app()->getLocale() === 'km' ? 'ចំណាប់អារម្មណ៍ក្នុងការនាំចេញ' : '兴趣出口') }}</a></button>
                                    </div>

                                    <!-- Card Number -->
                                    <div class="card-no">
                                        <p>{{ app()->getLocale() === 'en' ? '04' : (app()->getLocale() === 'km' ? '០៤' : '04') }}</p>
                                    </div>
                                </div>
                            </div>

                        </div>


                        <div class="col-lg-4 col-md-6 col-12" id="spices">
                            <div class="card-product" x-data="{
                                active: 'default',
                                products: {
                                    default: {
                                        title: '{{ app()->getLocale() === 'en' ? 'Spices' : (app()->getLocale() === 'km' ? 'គ្រឿងទេស' : '香料') }}',
                                        desc: '{{ app()->getLocale() === 'en' ? 'Aromatic Cambodian pepper known for its global reputation and rich flavor profile.' : (app()->getLocale() === 'km' ? 'ម្រេចដ៏ឈ្ងុយរបស់​កម្ពុជាមាន​កេរ្តិ៍ឈ្មោះ​ល្បីល្បាញ​ទូទាំង​ពិភពលោក ជាមួយនឹង​រសជាតិ​ឆ្ងាញ់។' : '具有浓郁香气的柬埔寨胡椒，以其全球知名的声誉和丰富的风味而著称。') }}',
                                        img: '{{ asset('assets/images/export/spices.jpg') }}'
                                    },
                                    pepper: {
                                        title: '{{ app()->getLocale() === 'en' ? 'Pepper' : (app()->getLocale() === 'km' ? 'ម្រេច' : '佩珀') }}',
                                        desc: '{{ app()->getLocale() === 'en' ? 'High-quality Cambodian pepper suitable for international export markets.' : (app()->getLocale() === 'km' ? 'ម្រេចកម្ពុជាប្រកបដោយគុណភាពខ្ពស់ សមស្របសម្រាប់ទីផ្សារនាំចេញអន្តរជាតិ។' : '高品质的柬埔寨辣椒，适合出口至国际市场的使用。') }}',
                                        img: '{{ asset('assets/images/export-card-product-5.png') }}'
                                    }
                                }
                            }">
                                <!-- Image -->
                                <img class="card-product-bg h-[300px] object-cover" :src="products[active].img">
                                <div class="card-product-detail">
                                    <!-- Title -->
                                    <h5 x-text="products[active].title"></h5>

                                    <!-- Description -->
                                    <p x-text="products[active].desc"></p>

                                    <!-- Buttons -->
                                    <div class="smaill-detail-card">
                                        <!-- Pepper -->
                                        <button x-show="active === 'default'" @click="active = 'pepper'">
                                            {{ app()->getLocale() === 'en' ? 'Pepper' : (app()->getLocale() === 'km' ? 'ម្រេច' : '佩珀') }}
                                        </button>

                                        <!-- Back -->
                                        <button x-show="active !== 'default'" @click="active = 'default'"
                                            class="btn-back">
                                            {{ app()->getLocale() === 'en' ? 'Back' : (app()->getLocale() === 'km' ? 'ត្រឡប់ក្រោយ' : '回去') }}
                                        </button>
                                    </div>

                                    <!-- Interest Button -->
                                    <div class="btn-card-interest-to-export">
                                        <button><a href="#contact"
                                                class="text-[#fff] decoration-transparent">{{ app()->getLocale() === 'en' ? 'Interest to Export' : (app()->getLocale() === 'km' ? 'ចំណាប់អារម្មណ៍ក្នុងការនាំចេញ' : '兴趣出口') }}</a></button>
                                    </div>

                                    <!-- Card Number -->
                                    <div class="card-no">
                                        <p>{{ app()->getLocale() === 'en' ? '05' : (app()->getLocale() === 'km' ? '០៥' : '05') }}</p>
                                    </div>
                                </div>
                            </div>

                        </div>


                        <div class="col-lg-4 col-md-6 col-12" id="coffee">
                            <div class="card-product" x-data="{
                                active: 'default',
                                products: {
                                    default: {
                                        title: '{{ app()->getLocale() === 'en' ? 'Coffee & Beverages' : (app()->getLocale() === 'km' ? 'គ្រាប់កាហ្វេ' : '咖啡与饮品') }}',
                                        desc: '{{ app()->getLocale() === 'en' ? 'Premium Cambodian coffee beans carefully selected and exported with international standards.' : (app()->getLocale() === 'km' ? 'គ្រាប់កាហ្វេកម្ពុជាកម្រិតខ្ពស់ត្រូវបានជ្រើសរើស និងនាំចេញតាមស្តង់ដាអន្តរជាតិ។' : '精选的优质柬埔寨咖啡豆，按照国际标准精心挑选并出口。') }}',
                                        img: '{{ asset('assets/images/export-card-product-6.png') }}'
                                    },
                                    coffee: {
                                        title: '{{ app()->getLocale() === 'en' ? 'Coffee Beans' : (app()->getLocale() === 'km' ? 'គ្រាប់កាហ្វេ' : '咖啡豆') }}',
                                        desc: '{{ app()->getLocale() === 'en' ? 'High-quality Cambodian coffee beans roasted and prepared for global export markets.' : (app()->getLocale() === 'km' ? 'គ្រាប់កាហ្វេកម្ពុជាកម្រិតខ្ពស់ត្រូវបានលីង និងរៀបចំសម្រាប់នាំចេញទៅកាន់ទីផ្សារពិភពលោក។' : '采用优质原料烘焙而成的柬埔寨咖啡豆，专为全球出口市场而生产。') }}',
                                        img: '{{ asset('assets/images/export/coffee_bean.jpg') }}'
                                    }
                                }
                            }">
                                <!-- Image -->
                                <img class="card-product-bg h-[300px] object-cover" :src="products[active].img">

                                <div class="card-product-detail">
                                    <!-- Title -->
                                    <h5 x-text="products[active].title"></h5>

                                    <!-- Description -->
                                    <p x-text="products[active].desc"></p>

                                    <!-- Buttons -->
                                    <div class="smaill-detail-card">
                                        <!-- Coffee Beans -->
                                        <button x-show="active === 'default'" @click="active = 'coffee'">
                                            {{ app()->getLocale() === 'en' ? 'Coffee Beans' : (app()->getLocale() === 'km' ? 'គ្រាប់កាហ្វេ' : '咖啡豆') }}
                                        </button>

                                        <!-- Back -->
                                        <button x-show="active !== 'default'" @click="active = 'default'"
                                            class="btn-back">{{ app()->getLocale() === 'en' ? 'Back' : (app()->getLocale() === 'km' ? 'ត្រឡប់ក្រោយ' : '回去') }}

                                        </button>
                                    </div>
                                    <div class="btn-card-interest-to-export">
                                        <button><a href="#contact"
                                                class="text-[#fff] decoration-transparent">{{ app()->getLocale() === 'en' ? 'Interest to Export' : (app()->getLocale() === 'km' ? 'ចំណាប់អារម្មណ៍ក្នុងការនាំចេញ' : '兴趣出口') }}</a></button>
                                    </div>

                                    <!-- Card Number -->
                                    <div class="card-no">
                                        <p>{{ app()->getLocale() === 'en' ? '06' : (app()->getLocale() === 'km' ? '០៦' : '06') }}</p>
                                    </div>
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
        @include('frontend.include.partner')
    </section>

    <section id="contact" class="relative z-[50]">
        {{-- <form action="{{ route('contact.send') }}" method="POST" class="wrapper-contact container">
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
        </form> --}}
        @include('frontend.include.contact-form')
    </section>

    <section>
        <div class="last-banner">
            <img src="{{ asset('assets/images/bg-3.png') }}">
        </div>
    </section>
@endsection
