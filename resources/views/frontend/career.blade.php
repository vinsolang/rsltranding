@extends('layouts.master')

@section('title')
    <title>Career - RSL Trading</title>
@endsection

{{-- @section('css')
     <link rel="stylesheet" href="{{ asset('assets/css/career.css') }}">
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
            background-color: #D9D9D9;
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

        .main-banner .main-banner-p-bg .sub-1 {
            font-size: 30px;
        }

        .main-banner .main-banner-p-bg .sub-2 {
            font-size: 15px;
            color: #059848
        }

        .btn-Interest-to-export {
            width: 228px;
            height: 43px;
            background-color: #FFFFFF;
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
                font-size: 15px !important;
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
                font-size: 10px;
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
            height: 89vh;
            margin-bottom: 2rem;
        }

        .first-card-background {
            z-index: 0 !important;
            position: absolute;
            height: 100vh;
            width: 100%;
            top: 0
        }

        .first-card-background img {
            width: 100%;
            height: 100vh;
            object-fit: cover;
        }




        @media screen and (min-width: 991px) and (max-width: 1024px) {
            .first-card {
                margin-bottom: 1rem;
            }

            .first-card-background img {
                width: 100%;
                height: 100vh;
                object-fit: cover;
            }
        }


        @media screen and (max-width: 991px) {
            .first-card {
                margin-bottom: 15rem;
            }

            .first-card-background img {
                width: 100%;
                height: 140vh;
                object-fit: cover;
            }
        }


        @media screen and (max-width: 768px) {

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


        .career-main-form {
            position: relative;
            z-index: 2;
            background-color: #059848;
            width: 100%;
            padding-bottom: 4rem;
            padding-top: 4rem;
            margin-bottom: 15rem;
            padding-left: 10rem;
            padding-right: 10rem;
        }

        @media screen and (max-width: 1025px) {
            .career-main-form {
                padding-left: 5rem;
                padding-right: 5rem;
            }
        }

        @media screen and (max-width: 769px) {
            .career-main-form {
                padding-left: 1rem;
                padding-right: 1rem;
            }
        }

        @media screen and (max-width: 426px) {
            .career-main-form {
                padding-left: 0.8rem;
                padding-right: 0.8rem;
            }
        }

        .career-input-form input {
            background-color: #FFFFFF;
            height: 53px;
            width: 100%;
            padding-left: 1rem;
            outline: none;
            border-radius: 49.5px;
            margin-bottom: 1rem;
            padding-left: 2rem;
            padding-top: 0.7rem;
            font-size: 16px;
        }

        .career-input-form select {
            background-color: #FFFFFF;
            height: 53px;
            width: 100%;
            padding-left: 1rem;
            outline: none;
            border-radius: 49.5px;
            margin-bottom: 1rem;
            padding-left: 2rem;
            font-size: 16px;
        }

        .career-input-form select option {
            background-color: #FFFFFF;
            color: #394552;
        }

        .career-input-form input::placeholder {
            font-size: 16px;
            color: #394552
        }

        .career-file-form {
            background-color: #FFFFFF;
            height: 53px;
            width: 100%;
            outline: none;
            border-radius: 49.5px;
            margin-bottom: 1rem;
            font-size: 16px;
            position: relative;
        }

        .career-file-form input[type="file"] {
            height: 100%;
            width: 100%;
            outline: none;
            font-size: 16px;
            position: absolute;
            top: 0;
            z-index: 1;
            margin-left: 1.5rem;
            margin-top: 0.7rem;
        }



        .btn-career-submit {
            position: relative;
            width: 396.97px;
            height: 80.14px;
            margin-bottom: 1rem;
        }

        .btn-career-submit img {
            position: absolute;
            top: 0;
            z-index: 0;
        }

        .btn-career-submit p {
            position: relative;
            z-index: 1;
            font-size: 35px;
            color: #FFFFFF;
            margin-top: 0.7rem;
        }


        @media screen and (max-width: 611px) {
            .btn-career-submit {
                position: relative;
                width: 300.97px;
                height: 65.14px;
                margin-top: 1rem;
                margin-bottom: 1rem;
            }

            .btn-career-submit p {
                font-size: 25px;
                color: #FFFFFF;
                margin-top: 0.7rem;
            }
        }

        @media screen and (max-width: 426px) {
            .btn-career-submit {
                position: relative;
                width: 250.97px;
                height: 50.14px;
                margin-top: 1rem;
                margin-bottom: 1rem;
            }

            .btn-career-submit p {
                font-size: 20px;
                color: #FFFFFF;
                margin-top: 0.7rem;
            }
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
                        <h1 class="popup">Career</h1>
                    </div>
                    <div class="main-banner-p-bg">
                        <p class="popup">J​​oin Our Team and Grow with Cambodia’s
                            Leading Agricultural Exporter</p>

                        <p class="popup">​Be part of a company that connects local farmers to global markets, values
                            integrity, and delivers quality products worldwide.”</p>
                    </div>
                    <a class="popup" href="#first-card"><button class="btn-Interest-to-export">View Open
                            Positions</button></a>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section id="first-card">
        <div class="first-card">
            <div class="first-card-background">
                <img src="{{ asset('assets/images/career-bg.png') }}">
            </div>
            <form action="{{ route('contact.careerForm') }}" method="POST" enctype="multipart/form-data"
                class="career-main-form">
                @csrf
                <div class="container">
                    <div class="row gx-5">
                        <div class="col-lg-6">
                            <label class="text-[#fff] mb-1" for="name">Name</label>
                            <div class="career-input-form">
                                <input id="name" name="name" placeholder="Enter your full name">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <label class="text-[#fff] mb-1" for="email">Email</label>
                            <div class="career-input-form">
                                <input id="email" name="email" placeholder="Enter your email address">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <label class="text-[#fff] mb-1" for="phone">Phone Number</label>
                            <div class="career-input-form">
                                <input id="phone" name="phone" placeholder="Enter your phone number">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <label class="text-[#fff] mb-1" for="cv">Upload CV</label>
                            <div class="career-file-form">
                                <input type="file" id="cv" name="cv" placeholder="Upload your CV">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <label class="text-[#fff] mb-1" for="position">Position</label>
                            <div class="career-input-form">
                                <select id="position" name="position" class="form-select">
                                    <option selected disabled>Select a position</option>
                                    <option value="Position1">Position1</option>
                                    <option value="Position2">Position2</option>
                                    <option value="Position3">Position3</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <label class="text-[#fff] mb-1" for="cover_letter">Upload Cover Letter</label>
                            <div class="career-file-form">
                                <input type="file" id="cover_letter" name="cover_letter"
                                    placeholder="Upload your cover letter">
                            </div>
                        </div>

                        <div class="col-12 d-flex justify-content-center">
                            <button type="submit" class="btn-career-submit">
                                <img src="{{ asset('assets/images/btn-submit-bg.png') }}">
                                <p>Submit</p>
                            </button>
                        </div>

                    </div>
                </div>
            </form>


        </div>
    </section>
@endsection


@section('career')
    <script src="{{ asset('assets/js/career.js') }}"></script>
@endsection
