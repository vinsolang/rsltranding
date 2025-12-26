@extends('layouts.master')

@section('title')
    <title>About - RSL Trading</title>
@endsection
{{--
@section('css')
     <link rel="stylesheet" href="{{ asset('assets/css/about.css') }}">
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

        .first-sub-card-context p,
        .first-sub-card-context h5,
        .first-sub-card-context h4 {
            margin: 0;
            padding: 0;
        }

        .first-card {
            position: relative;
            width: 100%;
            height: 170vh;
            padding-top: 18rem;
            margin-top: -12% !important;
        }

        @media screen and (max-width: 2561px) and (min-width: 1441px) {
            .first-card {
                position: relative;
                width: 100%;
                height: 170vh;
                padding-top: 18rem;
                margin-top: -18% !important;
            }
        }


        @media screen and (max-width: 1440px) and (min-width: 1025px) {
            .first-card {
                position: relative;
                width: 100%;
                height: 170vh;
                padding-top: 18rem;
                margin-top: -13% !important;
            }
        }


        @media screen and (max-width: 1024px) and (min-width: 769px) {
            .first-card {
                position: relative;
                width: 100%;
                height: 170vh;
                padding-top: 18rem;
                margin-top: -18% !important;
            }
        }

        @media screen and (max-width: 992px) {
            .first-card {
                width: 100%;
                height: 100%;
            }

        }

        .first-card-background {
            z-index: 0 !important;
            position: absolute;
            height: 100%;
            width: 100%;
            top: 0;
        }

        .first-card-background img {
            object-fit: cover;
            width: 100%;
            height: 170vh;

        }

        .first-card .first-card-sub-title {
            width: 100%;
            position: relative;
            z-index: 2 !important;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 5rem;
            padding-left: 1rem;
            padding-right: 1rem;
        }

        .first-card .first-card-sub-title p {
            max-width: 100%;
            text-align: center;
            font-size: 20px;


        }

        @media screen and (max-width: 426px) {
            .first-card .first-card-sub-title p {
                font-size: 16px;
            }
        }


        @media screen and (max-width: 769px) {

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
        }


        .card-product {
            position: relative;
            z-index: 2;
            margin-bottom: 1rem;
        }

        .card-product .first-sub-card {
            width: 100%;
            height: 450px;
            background-color: #FFFFFF;
            margin-bottom: 0.5rem;
            padding-left: 1rem;
            padding-top: 1rem;
            border: 1px solid #DBDBDB;
        }

        @media screen and (max-width: 1396px) {
            .card-product .first-sub-card {
                height: 490px;
            }
        }

        @media screen and (max-width: 769px) {
            .card-product .first-sub-card {
                height: 450px;
            }

            .first-card {
                width: 100%;
                height: 100%;
            }
        }

        @media screen and (max-width: 426px) {
            .card-product .first-sub-card {
                height: 490px;
            }
        }

        .card-product .first-sub-card h5 {
            font-weight: bold;
            font-size: 20px;
            color: #FF5900;
        }

        .card-product .first-sub-card p {
            font-size: 15px;
        }

        .card-product .second-sub-card {
            width: 100%;
            height: 116px;
            background-color: #FF5900;
            border-radius: 0px 0px 20px 20px;
            display: flex;
            justify-content: end;
            align-items: center;
            padding-right: 1rem;
            border: 1px solid #DBDBDB;
        }


        .wrapper-contact {
            margin-top: 5rem;
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


        .meet-our-team-card {
            width: 100%;
            height: 100%;
            margin-top: -14rem;
            position: relative;
            z-index: 60;
        }



        .meet-our-team-card h1 {
            font-size: 25px;
            font-weight: bold;
            color: #059848;
            text-align: center;
            margin-bottom: 2rem;
        }

        .meet-our-team-card .card-profile {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .card-profile img {
            width: 180px;
            height: 180px;
        }

        .card-profile .profile-name {
            font-size: 20px;
            margin-top: 0.5rem;
        }

        .card-profile .profile-position {
            font-size: 15px;
            color: #059848 !important
        }

        .card-profile img,
        .card-profile p {
            margin: 0;
            padding: 0;
        }

        .credentail-card-title h1 {
            font-size: 25px;
            color: #059848;
            font-weight: bold;
            text-align: center;
            margin-top: 3rem;
            margin-bottom: 2rem;
        }

        .business-credentail-card {
            width: 100%;
            height: 100%;
            background-color: #ECECEC;
            padding-top: 2rem;
            padding-bottom: 2rem;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .business-credentail-card-wrapper {
            display: flex;
            gap: 1rem;
        }

        @media screen and (max-width: 992px) {
            .business-credentail-card-wrapper {
                padding-left: 0.5rem;
                padding-right: 0.5rem;
                display: flex;
                flex-direction: column !important;
                gap: 1rem;
                align-items: center;
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


        .second-banner {
            width: 100%;
            height: 150vh;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        .second-banner .second-banner-img {
            width: 100%;
            height: 150vh;
            object-fit: cover;
            position: absolute;
            top: 0%;
            z-index: -1;
        }

        .second-banner .second-banner-context {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            position: relative;
            z-index: 5;
            width: 100%;
            margin-top: -25rem !important;
        }

        .second-banner .second-banner-context h5 {
            font-size: 20px;
            color: #059848;
            margin-top: 1rem;
            font-weight: bold;
        }

        .second-banner .second-banner-context .p-bg {
            width: 70rem;
            max-width: 100%;
            margin-top: 1rem;
        }

        .second-banner .second-banner-context .p-bg p {
            font-size: 20px;
            color: #1E1E1E;
            text-align: center;
        }


        @media screen and (max-width: 768px) {
            .second-banner .second-banner-context h5 {
                font-size: 16px;
            }

            .second-banner .second-banner-context .p-bg p {
                font-size: 16px;
            }
        }


        @media screen and (max-width: 426px) {
            .second-banner .second-banner-context {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                position: relative;
                z-index: 5;
                width: 100%;
                margin-top: -20rem !important;
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

        .first-card {
            position: relative;
            width: 100%;
            height: 100%;
            margin-top: -10% !important;
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
                margin-top: 30% !important;
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
                margin-top: 55% !important;
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
        <div class="main-banner">
            <img class="banner-img" src="{{ asset('assets/images/banner-img-1.png') }}">
            <div class="wrapper-banner">
                <div class="logo-video">
                    <video autoplay muted loop class="home-banner-logo">
                        <source src="{{ asset('assets/videos/LOGO.webm') }}">
                        </source>
                    </video>
                </div>
                <div class="banner-content">
                    <div class="main-banner-h1-bg">
                        <h1 class="popup">About Us</h1>
                    </div>
                    <div class="main-banner-p-bg">
                        <p class="popup">​​Your Trusted Partner in Cambodian Agricultural Exports</p>
                    </div>
                    <a class="popup" href="#first-card"><button class="btn-Interest-to-export">Interest to
                            Export</button></a>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section>
        <div class="first-card">
            <div class="first-card-background">
                <img src="{{ asset('assets/images/bg-1.png') }}">
            </div>
            <div class="first-card-sub-title container">
                <p style="text-align: left;">Founded in 2015, RSL Trading is a Cambodian leader in agricultural exports,
                    dedicated to connecting local farmers with global markets. Our goal is to bring the finest “Made in
                    Cambodia” products—such as rice, coffee, corn, cashew nuts, mangoes, and cassava—to buyers worldwide
                    while supporting farmers with better opportunities and incomes.</p>
            </div>
            <div class="main-card-product">
                <div class="container">
                    <div class="row">


                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="card-product">
                                <div class="first-sub-card">
                                    <h5 style="color: #8DC640">Our Vision</h5>
                                    <p>Everyone has Better Health, Longer Life & Greater Future.</p>

                                </div>
                                <div style="background-color: #8DC640;" class="second-sub-card ">
                                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <mask id="mask0_23_5168" style="mask-type:luminance" maskUnits="userSpaceOnUse"
                                            x="0" y="0" width="48" height="48">
                                            <path d="M0 0H47.9141V47.9141H0V0Z" fill="white" />
                                        </mask>
                                        <g mask="url(#mask0_23_5168)">
                                            <path
                                                d="M33.1822 27.5668L39.1572 21.5918C40.2103 20.5388 40.8018 19.1107 40.8018 17.6215V6.27001C40.8018 4.71944 42.0588 3.46254 43.6093 3.46254C45.1598 3.46254 46.4168 4.71944 46.4168 6.27001V21.5983C46.4168 23.7875 45.6493 25.9075 44.2477 27.5893L37.0586 36.2163V40.8955H23.957V32.7286C23.957 30.2468 24.9429 27.8666 26.6978 26.1115L34.8465 17.9624C35.9428 16.866 37.7202 16.866 38.8166 17.9622C39.913 19.0585 39.9131 20.8361 38.8168 21.9324L33.1823 27.5673"
                                                stroke="white" stroke-width="2" stroke-miterlimit="10"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path
                                                d="M14.7317 27.5668L8.75662 21.5918C7.70354 20.5388 7.11201 19.1107 7.11201 17.6215V6.27001C7.11201 4.71944 5.85501 3.46254 4.30454 3.46254C2.75407 3.46254 1.49707 4.71944 1.49707 6.27001V21.5983C1.49707 23.7875 2.26454 25.9075 3.66612 27.5893L10.8553 36.2163V40.8955H23.9568V32.7286C23.9568 30.2468 22.9709 27.8666 21.2161 26.1115L13.0674 17.9624C11.9711 16.866 10.1937 16.866 9.09726 17.9622C8.00085 19.0585 8.00076 20.8361 9.09708 21.9324L14.7316 27.5673"
                                                stroke="white" stroke-width="2" stroke-miterlimit="10"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M38.9302 46.5104H23.957V40.8955H38.9302V46.5104Z" stroke="white"
                                                stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M23.9566 46.5104H8.9834V40.8955H23.9566V46.5104Z" stroke="white"
                                                stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M23.957 4.17233L22.5491 2.76439C20.7348 0.950107 17.7933 0.950107 15.9789 2.76439C14.1646 4.57876 14.1646 7.52024 15.9789 9.33461L23.957 17.3127L31.9351 9.33461C33.7495 7.52024 33.7495 4.57876 31.9351 2.76439C30.1207 0.950107 27.1792 0.950107 25.365 2.76439L23.957 4.17233Z"
                                                stroke="white" stroke-width="2" stroke-miterlimit="10"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </g>
                                    </svg>

                                </div>
                            </div>
                        </div>


                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="card-product">
                                <div class="first-sub-card">
                                    <h5>Our Mission</h5>
                                    <p>To Find the BEST Quality Products with Reasonable Price for Customer</p>
                                    <p>To Bring “Made in Cambodia” to THE WORLD.</p>
                                    <p>To Help Farmer to get more jobs and better incomes</p>
                                </div>
                                <div class="second-sub-card">
                                    <svg width="55" height="55" viewBox="0 0 55 55" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <mask id="mask0_23_5129" style="mask-type:luminance" maskUnits="userSpaceOnUse"
                                            x="0" y="0" width="55" height="55">
                                            <path d="M0 3.05176e-05H54.759V54.759H0V3.05176e-05Z" fill="white" />
                                        </mask>
                                        <g mask="url(#mask0_23_5129)">
                                            <path
                                                d="M42.9943 31.6575C43.5847 31.6575 44.0638 32.1366 44.0638 32.727C44.0638 33.3173 43.5847 33.7965 42.9943 33.7965C42.4039 33.7965 41.9248 33.3173 41.9248 32.727C41.9248 32.1366 42.4039 31.6575 42.9943 31.6575Z"
                                                fill="white" />
                                            <path
                                                d="M11.7648 31.6575C12.3552 31.6575 12.8343 32.1366 12.8343 32.727C12.8343 33.3173 12.3552 33.7965 11.7648 33.7965C11.1745 33.7965 10.6953 33.3173 10.6953 32.727C10.6953 32.1366 11.1745 31.6575 11.7648 31.6575Z"
                                                fill="white" />
                                            <path
                                                d="M22.4596 39.1439C22.4596 45.0508 17.6714 49.839 11.7644 49.839C5.85754 49.839 1.06934 45.0508 1.06934 39.1439C1.06934 37.8572 1.29607 36.6252 1.71211 35.4829C1.98591 34.7321 2.34099 34.022 2.76558 33.361C4.66931 30.4059 7.98801 28.4487 11.7644 28.4487C17.6714 28.4487 22.4596 33.2369 22.4596 39.1439Z"
                                                stroke="white" stroke-width="2" stroke-miterlimit="10"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path
                                                d="M15.7978 34.156C17.2512 35.3335 18.1817 37.1324 18.1817 39.1442C18.1817 42.6832 15.3037 45.5613 11.7646 45.5613"
                                                stroke="white" stroke-width="2" stroke-miterlimit="10"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path
                                                d="M51.9938 33.3612C52.4185 34.0222 52.7735 34.7324 53.0474 35.4832C53.4633 36.6254 53.69 37.8575 53.69 39.1441C53.69 45.051 48.9019 49.8392 42.9949 49.8392C37.088 49.8392 32.2998 45.051 32.2998 39.1441C32.2998 33.2372 37.088 28.449 42.9949 28.449C46.7714 28.449 50.0901 30.4062 51.9938 33.3612Z"
                                                stroke="white" stroke-width="2" stroke-miterlimit="10"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path
                                                d="M47.0283 34.1506C47.5545 34.5774 48.0176 35.0897 48.3973 35.679C48.6529 36.0768 48.8647 36.5036 49.0251 36.9431C49.2818 37.6479 49.4112 38.3859 49.4112 39.1442C49.4112 42.6832 46.5332 45.5613 42.9941 45.5613"
                                                stroke="white" stroke-width="2" stroke-miterlimit="10"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M32.2998 15.6148V17.7538V23.1014V30.5879V34.866V39.144" stroke="white"
                                                stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M51.9938 33.3612L44.8292 17.5677L42.1469 11.6533C41.3801 10.4629 40.1532 9.59664 38.7169 9.30573C38.3714 9.23515 38.0131 9.19771 37.6474 9.19771C34.6944 9.19771 32.2998 11.5924 32.2998 14.5453"
                                                stroke="white" stroke-width="2" stroke-miterlimit="10"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path
                                                d="M22.4596 14.5453C22.4596 11.5924 20.065 9.19771 17.1121 9.19771C16.7463 9.19771 16.388 9.23515 16.0425 9.30573C14.6062 9.59664 13.3795 10.4629 12.6126 11.6533L9.93028 17.5677L2.76562 33.3612"
                                                stroke="white" stroke-width="2" stroke-miterlimit="10"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M22.46 39.144V34.866V30.5879V23.1014V17.7538V15.6148" stroke="white"
                                                stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M22.46 34.8661H32.2995" stroke="white" stroke-width="2"
                                                stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M22.46 30.588H32.2995" stroke="white" stroke-width="2"
                                                stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M22.46 17.7539H32.2995" stroke="white" stroke-width="2"
                                                stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                            <path
                                                d="M32.2998 15.6148V14.5453V8.12827C32.2998 6.35609 33.7362 4.91973 35.5083 4.91973C37.2805 4.91973 38.7169 6.35609 38.7169 8.12827V9.30473"
                                                stroke="white" stroke-width="2" stroke-miterlimit="10"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path
                                                d="M16.043 9.30473V8.12827C16.043 6.35609 17.4793 4.91973 19.2515 4.91973C21.0237 4.91973 22.46 6.35609 22.46 8.12827V14.5453V15.6148"
                                                stroke="white" stroke-width="2" stroke-miterlimit="10"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path
                                                d="M32.2998 23.1014C32.2998 18.9667 35.6517 15.6148 39.7864 15.6148C41.7286 15.6148 43.4987 16.3549 44.8291 17.5678"
                                                stroke="white" stroke-width="2" stroke-miterlimit="10"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path
                                                d="M9.93066 17.5678C11.2611 16.3549 13.0312 15.6148 14.9734 15.6148C19.1081 15.6148 22.46 18.9667 22.46 23.1014"
                                                stroke="white" stroke-width="2" stroke-miterlimit="10"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>





                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="card-product">
                                <div class="first-sub-card">
                                    <h5 style="color: #059848">Our Core Values</h5>
                                    <div class="first-sub-card-context">
                                        <h5 style="font-weight: bold; color: #000000">PEACE</h5>
                                        <h6 style="font-weight: bold;">P – Passion</h6>
                                        <p>To Find the BEST Quality Products with Reasonable Price for Customer</p>
                                        <h6 style="font-weight: bold;">E – Excellence</h6>
                                        <p>Striving to achieve the best possible results through dedication, skill, and
                                            continuous improvement.</p>
                                        <h6 style="font-weight: bold;">A – Accountability</h6>
                                        <p>Taking full responsibility for your actions, decisions, and outcomes.</p>
                                        <h6 style="font-weight: bold;">C – Compassion</h6>
                                        <p>Showing kindness, care, and a willingness to help others in need.</p>
                                        <h6 style="font-weight: bold;">E – Empathy</h6>
                                        <p>Understanding and sharing the feelings, needs, and challenges of others.</p>
                                    </div>
                                </div>
                                <div style="background-color: #059848;" class="second-sub-card">
                                    <svg width="45" height="47" viewBox="0 0 45 47" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6.10555 11.0202H21.9826C22.3818 11.0202 22.7013 10.7008 22.7013 10.3015V4.90755C22.7013 4.50827 22.3818 4.18884 21.9826 4.18884H6.10555C5.70626 4.18884 5.38684 4.50827 5.38684 4.90755V10.2943C5.37958 10.6935 5.70626 11.0202 6.10555 11.0202ZM6.82426 5.63353H21.2638V9.58281H6.82426V5.63353Z"
                                            fill="white" />
                                        <path
                                            d="M11.7829 14.4832H4.6611C4.26181 14.4832 3.94238 14.8026 3.94238 15.2019V21.3581C3.94238 21.7574 4.26181 22.0768 4.6611 22.0768H11.7829C12.1822 22.0768 12.5016 21.7574 12.5016 21.3581V15.2019C12.5016 14.8098 12.1822 14.4832 11.7829 14.4832ZM11.0569 20.6467H5.37981V15.9278H11.0569V20.6467Z"
                                            fill="white" />
                                        <path
                                            d="M14.1719 16.5957C14.1719 16.9949 14.4913 17.3144 14.8906 17.3144H31.5371C31.9364 17.3144 32.2558 16.9949 32.2558 16.5957C32.2558 16.1964 31.9364 15.8769 31.5371 15.8769H14.8906C14.4913 15.8697 14.1719 16.1964 14.1719 16.5957Z"
                                            fill="white" />
                                        <path
                                            d="M14.8906 20.6973H27.0797C27.4789 20.6973 27.7984 20.3779 27.7984 19.9786C27.7984 19.5793 27.4789 19.2599 27.0797 19.2599H14.8906C14.4913 19.2599 14.1719 19.5793 14.1719 19.9786C14.1719 20.3779 14.4913 20.6973 14.8906 20.6973Z"
                                            fill="white" />
                                        <path
                                            d="M28.1323 25.5906H14.8906C14.4913 25.5906 14.1719 25.91 14.1719 26.3093C14.1719 26.7086 14.4913 27.028 14.8906 27.028H28.1323C28.5316 27.028 28.851 26.7086 28.851 26.3093C28.851 25.91 28.5316 25.5906 28.1323 25.5906Z"
                                            fill="white" />
                                        <path
                                            d="M14.8906 28.9808C14.4913 28.9808 14.1719 29.3003 14.1719 29.6995C14.1719 30.0988 14.4913 30.4183 14.8906 30.4183H23.1158C23.5151 30.4183 23.8346 30.0988 23.8346 29.6995C23.8346 29.3003 23.5151 28.9808 23.1158 28.9808H14.8906Z"
                                            fill="white" />
                                        <path
                                            d="M24.5388 35.3113H14.8906C14.4913 35.3113 14.1719 35.6307 14.1719 36.03C14.1719 36.4293 14.4913 36.7487 14.8906 36.7487H24.5388C24.938 36.7487 25.2575 36.4293 25.2575 36.03C25.2575 35.6307 24.938 35.3113 24.5388 35.3113Z"
                                            fill="white" />
                                        <path
                                            d="M20.633 38.7015H14.8906C14.4913 38.7015 14.1719 39.021 14.1719 39.4202C14.1719 39.8195 14.4913 40.139 14.8906 40.139H20.633C21.0323 40.139 21.3517 39.8195 21.3517 39.4202C21.3517 39.021 21.0323 38.7015 20.633 38.7015Z"
                                            fill="white" />
                                        <path
                                            d="M11.7829 24.204H4.6611C4.26181 24.204 3.94238 24.5234 3.94238 24.9227V31.0789C3.94238 31.4782 4.26181 31.7976 4.6611 31.7976H11.7829C12.1822 31.7976 12.5016 31.4782 12.5016 31.0789V24.9227C12.5016 24.5307 12.1822 24.204 11.7829 24.204ZM11.0569 30.3675H5.37981V25.6487H11.0569V30.3675Z"
                                            fill="white" />
                                        <path
                                            d="M11.7829 33.9247H4.6611C4.26181 33.9247 3.94238 34.2441 3.94238 34.6434V40.7996C3.94238 41.1989 4.26181 41.5183 4.6611 41.5183H11.7829C12.1822 41.5183 12.5016 41.1989 12.5016 40.7996V34.6434C12.5016 34.2514 12.1822 33.9247 11.7829 33.9247ZM11.0569 40.0882H5.37981V35.3694H11.0569V40.0882Z"
                                            fill="white" />
                                        <path
                                            d="M7.21627 19.2889C7.35421 19.4269 7.5357 19.4995 7.72445 19.4995C7.9132 19.4995 8.10196 19.4269 8.23263 19.2889L9.69909 17.8225C9.98222 17.5393 9.98222 17.082 9.69909 16.8061C9.41597 16.523 8.9586 16.523 8.68273 16.8061L7.72445 17.7644L7.63007 17.67C7.34695 17.3869 6.88958 17.3869 6.61371 17.67C6.33058 17.9531 6.33058 18.4105 6.61371 18.6864L7.21627 19.2889Z"
                                            fill="white" />
                                        <path
                                            d="M7.21627 29.2494C7.35421 29.3873 7.5357 29.4599 7.72445 29.4599C7.9132 29.4599 8.10196 29.3873 8.23263 29.2494L9.69909 27.7829C9.98222 27.4998 9.98222 27.0424 9.69909 26.7665C9.41597 26.4834 8.9586 26.4834 8.68273 26.7665L7.72445 27.7248L7.63007 27.6305C7.34695 27.3473 6.88958 27.3473 6.61371 27.6305C6.33058 27.9136 6.33058 28.3709 6.61371 28.6468L7.21627 29.2494Z"
                                            fill="white" />
                                        <path
                                            d="M43.5728 12.2834L39.7615 10.6936C39.2896 10.4976 38.7669 10.4976 38.295 10.6863C37.8231 10.8823 37.4529 11.2453 37.2569 11.7172L36.1316 14.4033L35.6742 15.4995V9.87322C35.6742 9.8587 35.667 9.85144 35.667 9.84418C35.667 9.77158 35.6525 9.70624 35.6234 9.64091C35.6162 9.61913 35.6089 9.59735 35.6017 9.57557C35.5653 9.50297 35.5291 9.43763 35.471 9.37956C35.4637 9.3723 35.4637 9.36504 35.4565 9.36504L26.3092 0.210532C26.302 0.203272 26.2802 0.196012 26.2729 0.188753C26.2221 0.145194 26.164 0.101636 26.1059 0.0725972C26.0769 0.0580778 26.0551 0.050818 26.0261 0.0435583C25.968 0.0217791 25.9099 0.0145194 25.8519 0.00725971C25.8373 0.00725971 25.8156 0 25.801 0H3.49192C1.5681 0 0 1.5681 0 3.49192V42.9703C0 44.9014 1.5681 46.4695 3.49918 46.4695H32.1751C34.1061 46.4695 35.6742 44.9014 35.6742 42.9703V36.1752L43.4857 17.4814L44.611 14.7953C45.0102 13.8152 44.5456 12.69 43.5728 12.2834ZM38.5854 12.2762C38.6362 12.16 38.7233 12.0657 38.8395 12.0221C38.9556 11.9785 39.0863 11.9713 39.2025 12.0221L43.0138 13.612C43.2534 13.7136 43.3695 13.9895 43.2679 14.2363L42.4258 16.2618L37.736 14.3016L38.5854 12.2762ZM37.1843 15.6302L38.8613 16.3344L30.7594 35.7251L29.0824 35.0209L37.1843 15.6302ZM30.8683 37.3367L32.8212 38.1498L29.1768 41.3804L28.9154 36.5236L30.8683 37.3367ZM33.7649 36.981L32.0879 36.2768L40.1898 16.8788L41.8668 17.583L33.7649 36.981ZM33.2132 9.16176H27.5942C27.0061 9.16176 26.527 8.68262 26.527 8.09459V2.46104L33.2132 9.16176ZM32.1751 45.0175H3.49192C2.35941 45.0175 1.43742 44.0955 1.43742 42.963V3.49192C1.43742 2.36667 2.35941 1.44468 3.49192 1.44468H25.0751V8.09459C25.0751 9.48119 26.2003 10.6064 27.5869 10.6064H34.2223V18.9624L27.4708 35.137C27.4635 35.1443 27.4708 35.1588 27.4635 35.1661C27.4345 35.2387 27.4199 35.3113 27.4199 35.3911V35.4274V35.4565L27.8265 42.9557C27.841 43.2316 28.0152 43.4785 28.2693 43.5801C28.3565 43.6164 28.4508 43.6382 28.5452 43.6382C28.7194 43.6382 28.8864 43.5728 29.0243 43.4567L34.2368 38.8322V42.9703C34.2296 44.1028 33.3076 45.0175 32.1751 45.0175Z"
                                            fill="white" />
                                    </svg>

                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="second-banner">
            <img class="second-banner-img" src="{{ asset('assets/images/about-us-second-image.png') }}">
            <div class="second-banner-context container">
                <img class="direct-profile" src="{{ asset('assets/images/profile-card-1.png') }}">
                <h5>Message from Board of Director</h5>
                <div class="p-bg">
                    <p>At the heart of our mission is a commitment to global well-being. By providing premium, high-quality
                        products, we aim to enhance longevity and health for people everywhere. We are dedicated to serving
                        and supporting our global community indefinitely, ensuring a thriving future for all humanity.</p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="meet-our-team-card">
            <div class="container">
                <h1>Meet Our Team</h1>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <div class="card-profile">
                            <img src="{{ asset('assets/images/profile-card-1.png') }}">
                            <p class="profile-name">Mr. Reach Sothorn</p>
                            <p class="profile-position">Founder</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="card-profile">
                            <img src="{{ asset('assets/images/profile-card-2.png') }}">
                            <p class="profile-name">Mr. Chov Sambath (Mike)</p>
                            <p class="profile-position">Co-Founder</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="card-profile">
                            <img src="{{ asset('assets/images/profile-card-3.png') }}">
                            <p class="profile-name"> Ms. Chheng Sony</p>
                            <p class="profile-position">Co-Founder</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="card-profile">
                            <img src="{{ asset('assets/images/profile-card-4.png') }}">
                            <p class="profile-name">Mr. Srun Phechlang (Jessie)</p>
                            <p class="profile-position">Co-Founder</p>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="credentail-card-title">
            <h1>Business Credential Licenses</h1>
        </div>
        <div class="business-credentail-card">
            <div class="business-credentail-card-wrapper">
                <div class="credentail-img">
                    <img src="{{ asset('assets/images/credentail-1.png') }}">
                </div>

                <div class="credentail-img">
                    <img src="{{ asset('assets/images/credentail-2.png') }}">
                </div>

                <div class="credentail-img">
                    <img src="{{ asset('assets/images/credentail-2.png') }}">
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
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
