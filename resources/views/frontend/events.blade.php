@extends('layouts.master')

@section('title')
    <title>Event - RSL Trading</title>
@endsection

{{-- @section('css')
     <link rel="stylesheet" href="{{ asset('assets/css/events.css') }}">
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
            padding-top: 13rem;
            margin-top: -10% !important;
        }

        @media screen and (max-width:769px) {
            .first-card {
                position: relative;
                width: 100%;
                height: 100%;
                padding-top: 9rem;
                margin-top: -10% !important;
            }
        }

        .first-card-background {
            z-index: 0 !important;
            position: absolute;
            height: 100%;
            width: 100%;
            top: 0
        }

        .first-card-background img {
            object-fit: cover;
            width: 100%;
            height: 170vh;
        }

        /* @media screen and (max-width: 1440px) and (min-width: 768px) {
                    .first-card {
                        position: relative;
                        width: 100%;
                        height: 170vh;
                        padding-top: 18rem;
                        margin-top: -15% !important;
                    }
                } */

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


        .main-card-product {
            position: relative;
            z-index: 2;
            width: 100%;
            height: 100%;
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

        .event-card-wrapper {
            display: flex;
            gap: 2rem;
            margin-top: 5rem;
        }

        .event-card-wrapper .event-img {
            width: 1200px;
            max-width: 100%;
            max-width: 100%;
            height: 325.79px;


        }

        .event-card-wrapper .event-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 0px 50px 0px 50px;
            border: 5px solid #CCC9C9;
        }

        .event-card-wrapper .event-content {
            width: 1700px;
            max-width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .event-card-wrapper .event-content h5 {
            font-size: 40px !important;
        }

        .event-card-wrapper .event-content p {
            font-size: 20px;
        }


        @media screen and (max-width: 769px) {
            .event-card-wrapper {
                display: flex;
                flex-direction: column;
                gap: 0.5rem;
                margin-top: 5rem;
            }

            .event-card-wrapper .event-img {
                order: 1;
            }

            .event-card-wrapper .event-content {
                order: 2;
            }

            .event-card-wrapper .event-content h5 {
                font-size: 30px !important;
            }

            .event-card-wrapper .event-content p {
                font-size: 15px;
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
                margin-top: 30% !important;
            }

            .main-banner .banner-img {
                position: absolute;
                width: 100%;
                height: 140vh;
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
                margin-top: 50% !important;
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

        .first-event-conten img {
            border-radius: 0px 50px 0px 50px;
            border: 5px solid #CCC9C9;
        }

        .first-event-conten h5 {
            font-size: 40px !important;
        }

        .first-event-conten p {
            font-size: 20px;
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
                        <h1 data-aos="zoom-in-up" data-aos-duration="1000">{{ app()->getLocale() === 'en' ? 'Activites' : (app()->getLocale() === 'km' ? 'សកម្មភាពអាជីវកម្ម' : '商业活动') }}</h1>
                    </div>
                    <div class="main-banner-p-bg">
                        <p data-aos="zoom-in-up" data-aos-duration="1200">​​{{ app()->getLocale() === 'en' ? '​Your Trusted Partner in Cambodian Agricultural Exports' : (app()->getLocale() === 'km' ? 'យើងខ្ញ៉ំជាដៃគូដែលអតិថិជនអាចទុកចិត្តក្នុងការនាំចេញផលិតផលកសិកម្មរបស់កម្ពុជា' : '您在柬埔寨农产品出口领域的可靠合作伙伴') }}</p>
                    </div>
                    <a data-aos="zoom-in-up" data-aos-duration="1400" href="#contact"><button
                            class="btn-Interest-to-export"> {{ app()->getLocale() === 'en' ? 'Interest to Export' : (app()->getLocale() === 'km' ? 'ចំណាប់អារម្មណ៍ក្នុងការនាំចេញ' : '兴趣出口') }}</button></a>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section>
        <div class="first-card">
            <div class="first-card-background">
                <img src="{{ asset('assets/images/second-bg.png') }}">
            </div>
            <div class="w-full max-w-7xl mx-auto pt-20">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 px-4">
                    <div class="relative overflow-hidden group bg-black" data-aos="fade-up" data-aos-duration="1000">
                        <img src="{{ asset('assets/images/Activites-2.JPG') }}" alt="Image"
                            class="w-full h-[500px] object-cover object-bottom transition-all duration-300 group-hover:opacity-50">

                        <div
                            class="absolute bottom-[-100%] left-0 w-full bg-black/60 text-white px-4 py-4 transition-all duration-300 text-[12px] group-hover:bottom-0 ">
                            <h1 class="text-[14px] md:text-[15px] font-[700]"> {{ app()->getLocale() === 'en' ? 'Visit rice mills in Battambang province.' : (app()->getLocale() === 'km' ? 'ទស្សនារោងម៉ាស៊ីនកិនស្រូវនៅខេត្តបាត់ដំបង។' : '参观马德望省的碾米厂。') }}</h1>

                        </div>
                    </div>
                    <div class="relative overflow-hidden group bg-black" data-aos="fade-up" data-aos-duration="1000">
                        <img src="{{ asset('assets/images/Activites-4.JPG') }}" alt="Image"
                            class="w-full h-[500px] object-cover object-bottom transition-all duration-300 group-hover:opacity-50">

                        <div
                            class="absolute bottom-[-100%] left-0 w-full bg-black/60 text-white px-4 py-4 transition-all duration-300 text-[12px] group-hover:bottom-0 ">
                            <h1 class="text-[14px] md:text-[15px] font-[700]"> {{ app()->getLocale() === 'en' ? 'Rice packing activities in Kandal province.' : (app()->getLocale() === 'km' ? 'សកម្មភាពវេចខ្ចប់អង្ករនៅខេត្តកណ្តាល។' : '干丹省的大米包装活动。') }}</h1>

                        </div>
                    </div>
                    <div class="relative overflow-hidden group bg-black" data-aos="fade-up" data-aos-duration="1000">
                        <img src="{{ asset('assets/images/Activites-5.JPG') }}" alt="Image"
                            class="w-full h-[500px] object-cover object-bottom transition-all duration-300 group-hover:opacity-50">

                        <div
                            class="absolute bottom-[-100%] left-0 w-full bg-black/60 text-white px-4 py-4 transition-all duration-300 text-[12px] group-hover:bottom-0 ">
                            <h1 class="text-[14px] md:text-[15px] font-[700]"> {{ app()->getLocale() === 'en' ? 'Harvesting activities in Battambang province.' : (app()->getLocale() === 'km' ? 'សកម្មភាពប្រមូលផលនៅខេត្តបាត់ដំបង។' : '马丹奉省的采收活动。') }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
