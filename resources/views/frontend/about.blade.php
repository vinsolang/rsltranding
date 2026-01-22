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

    /* 4K and large monitors */
    @media screen and (min-width: 2560px) {
    .first-card-background img {
        height: 100vh; /* exactly one viewport height */
        width: 100%;   /* scale width proportionally */
        object-fit: cover; /* cover whole section */
    }
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
        margin-top: 5rem;
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
        /* position: relative;
        width: 100%;
        height: 100%; */
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
    @media screen and (min-width: 2560px) {
    .-mt-4k {
        margin-top: -1300px; /* huge negative margin only on 4K */
    }
}

 @media screen and (min-width: 2560px) {
    .m-4kk {
        margin-top: 300px; /* huge negative margin only on 4K */
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
                    <h1 data-aos="zoom-in-up" data-aos-duration="1000">{{ app()->getLocale() === 'en' ? 'About Us' : (app()->getLocale() === 'km' ? 'អំពីយើងខ្ញុំ' : '公司简介') }}</h1>
                </div>
                <div class="main-banner-p-bg">
                    <p data-aos="zoom-in-up" data-aos-duration="1200">{{ app()->getLocale() === 'en' ? '​​Your Trusted Partner in Cambodian Agricultural Exports' : (app()->getLocale() === 'km' ? 'យើងខ្ញ៉ំជាដៃគូដែលអតិថិជនអាចទុកចិត្តក្នុងការនាំចេញផលិតផលកសិកម្មរបស់កម្ពុជា' : '我们是您值得信赖的柬埔寨农产品出口合作伙伴') }}</p>
                </div>
                <a data-aos="zoom-in-up" data-aos-duration="1400" href="#first-card"><button class="btn-Interest-to-export"> {{ app()->getLocale() === 'en' ? 'Interest to Export' : (app()->getLocale() === 'km' ? 'ចំណាប់អារម្មណ៍ក្នុងការនាំចេញ' : '兴趣出口') }}</button></a>
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
        <div class="md:mt-1 m-4kk">
            <div class="relative mx-auto max-w-6xl px-4 md:px-80">
                <div class="gap-b-32">
                    {{-- Mission --}}
                    <div class="relative mx-auto min-h-14 md:mb-12 max-w-4xl">

                        {{-- Background image (BEHIND text) --}}
                        <div class="absolute inset-0 z-0 flex items-center justify-center pointer-events-none">
                            <img
                                src="{{ asset('assets/images/Group 314(1).png') }}"
                                alt=""
                                class="lg:w-[1000px] object-contain" />
                        </div>
                        {{-- Card content (ABOVE image) --}}
                        <div class="mv-card relative z-20">
                            <div class="flex items-center gap-2 md:gap-6 ">
                                <div
                                    class="max-w-10 sm:max-w-12 md:max-w-16 flex items-center text-orange-500 ml-[19%] md:ml-[18%]">
                                    {{-- icon --}}
                                    <img class="w-full ml-[-12px]" src="{{ asset('assets/images/g195.png') }}" alt="">
                                </div>

                                <div class="min-w-0 md:ml-[25px] ">
                                    <h2 class="mv-title-mission text-lg mt-3 leading-[10px] sm:text-2xl md:text-3xl font-extrabold tracking-tight text-orange-500">
                                       {{ app()->getLocale() === 'en' ? 'Our Mission' : (app()->getLocale() === 'km' ? 'Our Mission' : 'Our Mission') }}
                                    </h2>

                                    <div class="leading-3 text-[8px] sm:text-sm lg:text-base">
                                        <p>
                                            {!! app()->getLocale() === 'en'
                                            ? 'To Find the BEST Quality Products with Reasonable<br>Price for Customer'
                                            : (app()->getLocale() === 'km'
                                            ? 'ស្វែងរកផលិតផលគុណភាពល្អបំផុត<br>ជាមួយតម្លៃសមរម្យសម្រាប់អតិថិជន'
                                            : '为客户寻找最优质、价格合理的产品') !!}
                                            <br>

                                            {!! app()->getLocale() === 'en'
                                            ? 'To Bring <span class="font-bold text-green-600">“Made in Cambodia”</span> to THE WORLD.'
                                            : (app()->getLocale() === 'km'
                                            ? 'នាំ <span class="font-bold text-green-600">“ផលិតនៅកម្ពុជា”</span> ទៅកាន់ពិភពលោក'
                                            : '将 <span class="font-bold text-green-600">“柬埔寨制造”</span> 推向世界。') !!}
                                            <br>

                                            {{ app()->getLocale() === 'en'
                                                    ? 'To Help Farmer to get more jobs and better incomes'
                                                    : (app()->getLocale() === 'km'
                                                        ? 'ជួយកសិករឲ្យមានការងារច្រើនជាងមុន និងចំណូលប្រសើរជាងមុន'
                                                        : '帮助农民获得更多工作和更好收入') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Vision --}}
                    <div class="relative mx-auto min-h-14 my-1 mb-20 max-w-4xl ">
                        {{-- Background image (BEHIND text) --}}
                        <div class="absolute inset-0 z-0 flex items-center justify-center pointer-events-none">
                            <img
                                src="{{ asset('assets/images/Group 321.png') }}"
                                alt=""
                                class="lg:w-[1000px] object-contain" />
                        </div>
                        {{-- Card content (ABOVE image) --}}
                        <div class="mv-card relative ">
                            <div class="flex items-center gap-2 md:gap-6">
                                <div class="max-w-10 sm:max-w-12 md:max-w-16 flex items-center text-orange-500 ml-[19%] md:ml-[19%]">
                                    {{-- icon --}}
                                    <img class="w-24 ml-[-12px]" src="{{ asset('assets/images/g3831.png') }}" alt="">
                                </div>

                                <div class="min-w-0  md:ml-[22px]">
                                    <h2 class="mv-title-mission text-lg mt-3 leading-[10px] sm:text-2xl md:text-3xl font-extrabold tracking-tight text-green-600">
                                        {{ app()->getLocale() === 'en' ? 'Our Vision' : (app()->getLocale() === 'km' ? 'ចក្ខុវិស័យរបស់យើង' : '我们的愿景') }}
                                    </h2>

                                    <div class="leading-3 text-[8px] sm:text-sm lg:text-base">

                                        <p class="mt-2 mr-5 lg:mr-1 text-xs md:text-base font-semibold leading-relaxed text-gray-800">
                                            {!! app()->getLocale() === 'en'
                                            ? 'Everyone has Better Health, Longer Life &amp;<br class="hidden sm:block">Greater Future.'
                                            : (app()->getLocale() === 'km'
                                            ? 'គ្រប់គ្នាមានសុខភាពល្អជាងមុន អាយុវែងជាងមុន និងអនាគត<br class="hidden sm:block">អស្ចារ្យជាងមុន'
                                            : '每个人都拥有更健康、更长寿与更美好的未来。') !!}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Core Values --}}
                    <div class="text-center mt-[60px]">
                        <h3 class="text-3xl md:text-4xl font-extrabold text-white">
                            {{ app()->getLocale() === 'en' ? 'Our Core Values' : (app()->getLocale() === 'km' ? 'តម្លៃស្នូលរបស់យើង' : '我们的核心价值观') }}
                        </h3>
                        <div class="mt-1 text-lg md:text-xl font-bold tracking-[0.5em] text-white/90">
                            P E A C E
                        </div>
                    </div>

                    @php
                    $values = [
                    [
                    'letter' => 'P',
                    'title' => app()->getLocale() === 'en' ? 'Passion' : (app()->getLocale() === 'km' ? 'ចំណង់ខ្លាំង' : '激情'),
                    'desc' => app()->getLocale() === 'en'
                    ? 'Having a strong drive and enthusiasm for your work, fueled by energy and genuine love for what you do.'
                    : (app()->getLocale() === 'km'
                    ? 'មានកម្លាំងចិត្ត និងភាពសកម្មក្នុងការងារ ដោយចំណង់ចំណូលចិត្ត និងសេចក្តីស្រលាញ់ពិតប្រាកដ។'
                    : '对工作充满热情与动力，源于真正的热爱。'),
                    ],
                    [
                    'letter' => 'E',
                    'title' => app()->getLocale() === 'en' ? 'Excellence' : (app()->getLocale() === 'km' ? 'ឧត្តមភាព' : '卓越'),
                    'desc' => app()->getLocale() === 'en'
                    ? 'Striving to achieve the best possible results through dedication, skill, and continuous improvement.'
                    : (app()->getLocale() === 'km'
                    ? 'ខិតខំប្រឹងប្រែងឲ្យអស់លទ្ធភាព ដើម្បីទទួលបានលទ្ធផលល្អបំផុត។'
                    : '通过奉献、技能与持续改进追求最佳成果。'),
                    ],
                    [
                    'letter' => 'A',
                    'title' => app()->getLocale() === 'en' ? 'Accountability' : (app()->getLocale() === 'km' ? 'ភាពទទួលខុសត្រូវ' : '问责'),
                    'desc' => app()->getLocale() === 'en'
                    ? 'Taking full responsibility for your actions, decisions, and outcomes.'
                    : (app()->getLocale() === 'km'
                    ? 'ទទួលខុសត្រូវពេញលេញចំពោះសកម្មភាព ការសម្រេចចិត្ត និងលទ្ធផល។'
                    : '对自己的行为、决定与结果负全责。'),
                    ],
                    [
                    'letter' => 'C',
                    'title' => app()->getLocale() === 'en' ? 'Compassion' : (app()->getLocale() === 'km' ? 'មេត្តាករុណា' : '同情心'),
                    'desc' => app()->getLocale() === 'en'
                    ? 'Showing kindness, care, and a willingness to help others in need.'
                    : (app()->getLocale() === 'km'
                    ? 'មានចិត្តល្អ យកចិត្តទុកដាក់ និងជួយអ្នកដទៃពេលចាំបាច់។'
                    : '以善意关怀与行动帮助有需要的人。'),
                    ],
                    [
                    'letter' => 'E',
                    'title' => app()->getLocale() === 'en' ? 'Empathy' : (app()->getLocale() === 'km' ? 'ការយល់ចិត្ត' : '同理心'),
                    'desc' => app()->getLocale() === 'en'
                    ? 'Understanding and sharing the feelings, needs, and challenges of others.'
                    : (app()->getLocale() === 'km'
                    ? 'យល់ចិត្ត និងយល់អារម្មណ៍ ព្រមទាំងយល់ពីតម្រូវការ និងបញ្ហារបស់អ្នកដទៃ។'
                    : '理解并体会他人的感受、需求与挑战。'),
                    ],
                    ];
                    @endphp
                    <div class="mt-4 md:mt-10 grid grid-cols-2 gap-6 md:grid-cols-5">
                        @foreach ($values as $v)
                        <div class="peace-card">
                            <div class="relative flex items-center pl-2">
                                <!-- Background image -->
                                <img
                                    src="{{ asset('assets/images/core.png') }}"
                                    alt=""
                                    class=" absolute left-0 top-1/2 -translate-y-1/2 h-8 sm:h-10 lg:h-8 md:h-7">

                                <!-- Letter -->
                                <div class="z-10 text-left lg:text-[30px] md:text-[20px] text-[25px] sm:text-3xl font-black text-[#059848] ">
                                    {{ $v['letter'] }}
                                </div>

                                <!-- Bar -->
                                <div class="peace-bar mx-3"></div>
                            </div>


                            <div class="mt-0 lg:text-[30px] md:text-[20px] sm:text-[30px] text-[25px] font-extrabold text-[#FFFFFF]">
                                {{ $v['title'] }}
                            </div>

                            <p class="mt-[-5px] text-sm md:text-[15px] leading-relaxed text-[#FFFFFF] h-[100px]">
                                {{ $v['desc'] }}
                            </p>
                            <div class=" peace-card text-center sm:text-left mt-3 h-[6px]  sm:w-32 md:w-[155px] lg:w-[195px] bg-[#8FD1AD] rounded-full"></div>
                        </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="md:-mt-96 mt-10 -mt-4k">
    {{-- <img class="second-banner-img" src="{{ asset('assets/images/about-us-second-image.png') }}"> --}}
    <div class="lg:mt-[25rem] text-center flex flex-col gap-2 items-center justify-center max-w-7xl mx-auto px-2 ">
        {{-- <img class="second-banner-img" src="{{ asset('assets/images/about-us-second-image.png') }}"> --}}
        <img src="{{ asset('assets/profile-team/REACH-SOTHORN.png') }}" class="w-48 h-48 rounded-full object-contain bg-gray-200 p-1">
        <h5 class="text-[20px] md:text-[25px] font-[700] text-[#059848]">{{ app()->getLocale() === 'en' ? 'Message from Board of Director' : (app()->getLocale() === 'km' ? 'សាររបស់ប្រធានក្រុមប្រឹក្សាភិបាល' : '董事会寄语 ') }}</h5>
        <div class="p-bg">
            <p class="{{ app()->getLocale() === 'km'
                    ? 'max-w-4xl'
                    : 'max-w-4xl' 
                }} text-left">
                {{ app()->getLocale() === 'en' ? 'At the heart of our mission is a commitment to global well-being. By providing premium, high-quality
                    products, we aim to enhance longevity and health for people everywhere. We are dedicated to serving
                    and supporting our global community indefinitely, ensuring a thriving future for all humanity.' 
                    : (app()->getLocale() === 'km' ? 'យើងនឹងជ្រើសរើសផលិតផលល្អៗដែលមានគុណភាពខ្ពស់ ធ្វើឱ្យប្រជាជនជុំវិញពិភពលោក មានសុខភាពល្អ អាយុវែង ហើយយើងនឹងតាមបម្រើ តាមការពារ និងតាមថែរក្សាពួកគាត់ជារៀងរហូតតាមរយៈការផ្គត់ផ្គង់ផលិតផលរបស់យើង ដើម្បីអនាគតដ៏អស្ចារ្យសម្រាប់មនុស្សជាតិ៚' 
                    : '我们使命的核心是致力于全球福祉。通过提供优质的产品，我们的目标是为世界各地的人们延长寿命和健康。我们致力于无限期地服务和支持我们的全球社区，确保全人类繁荣的未来。') }}
            </p>
        </div>
    </div>
</section>

<section>
    <div class="meet-our-team-card">
        <div class="container">
            <h1>{{ app()->getLocale() === 'en' ? 'Meet Our Team' : (app()->getLocale() === 'km' ? 'ស្ថាបនិក និងសហស្ថាបនិក' : '介绍我们的团队') }}</h1>
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <div class="card-profile">
                        <img src="{{ asset('assets/profile-team/REACH-SOTHORN.png') }}" class="w-48 h-48 rounded-full object-contain bg-gray-200 p-1">
                        <p class="profile-name">{{ app()->getLocale() === 'en' ? 'Mr. Reach Sothorn' : (app()->getLocale() === 'km' ? 'លោក រាជ សុធន់' : 'Reach Sothorn 先生') }}</p>
                        <p class="profile-position">{{ app()->getLocale() === 'en' ? 'Founder' : (app()->getLocale() === 'km' ? 'ស្ថាបនិក' : '创始人') }}</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card-profile">
                        
                        <img src="{{ asset('assets/profile-team/Chov-Sambath.png') }}" class="w-48 h-48 rounded-full object-contain bg-gray-200 p-1">
                        <p class="profile-name">{{ app()->getLocale() === 'en' ? 'Mr. Chov Sambath (Mike)' : (app()->getLocale() === 'km' ? 'លោក ចូវ សម្បត្តិ (Mike)' : 'Chov Sambath (Mike) 先生') }}</p>
                        <p class="profile-position">{{ app()->getLocale() === 'en' ? 'CO-Founder' : (app()->getLocale() === 'km' ? 'សហស្ថាបនិក' : '联合创始人') }}</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card-profile">
                        
                        <img src="{{ asset('assets/profile-team/CHHENG-SONY.png') }}" class="w-48 h-48 rounded-full object-contain bg-gray-200 p-1">
                        <p class="profile-name">{{ app()->getLocale() === 'en' ? 'Ms. Chheng Sony' : (app()->getLocale() === 'km' ? 'លោក ឆេង សូនី' : 'Chheng Sony 先生') }}</p>
                        <p class="profile-position">{{ app()->getLocale() === 'en' ? 'CO-Founder' : (app()->getLocale() === 'km' ? 'សហស្ថាបនិក' : '联合创始人') }}</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card-profile">
                        
                        <img src="{{ asset('assets/profile-team/SRUN-PHECHLANG-(Jessie).png') }}" class="w-48 h-48 rounded-full object-contain bg-gray-200 p-1">
                        <p class="profile-name">{{ app()->getLocale() === 'en' ? 'Mr. Srun Phechlang (Jessie)' : (app()->getLocale() === 'km' ? 'លោក ស្រ៊ុន ពេជ្រឡាង(Jessie)' : 'Srun Phechlang (Jessie) 女士') }}</p>
                        <p class="profile-position">{{ app()->getLocale() === 'en' ? 'CO-Founder' : (app()->getLocale() === 'km' ? 'សហស្ថាបនិក' : '联合创始人') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="credentail-card-title">
        <h1>{{ app()->getLocale() === 'en' ? 'Business Credential Licenses' : (app()->getLocale() === 'km' ? 'ឯកសារចុះបញ្ជិកាសហគ្រាស' : '营业执照') }}</h1>
    </div>
    <div class="business-credentail-card">
        {{-- <div class="business-credentail-card-wrapper">
                <div class="credentail-img">
                    <img src="{{ asset('assets/images/credentail-1.png') }}">
    </div>

    <div class="credentail-img">
        <img src="{{ asset('assets/images/credentail-2.png') }}">
    </div>

    <div class="credentail-img">
        <img src="{{ asset('assets/cartificate/4.png') }}">
    </div>
    </div> --}}
    <div class="flex lg:flex-row flex-col justify-center items-center gap-6 max-w-8xl mx-auto px-2">

        <div class="flex items-center">
            <img
                src="{{ asset('assets/images/credentail-1.png') }}"
                class="h-[420px] w-auto object-contain"
                alt="Certificate 1">
        </div>

        <div class="flex items-center">
            <img
                src="{{ asset('assets/images/credentail-2.png') }}"
                class="h-[420px] w-auto object-contain"
                alt="Certificate 2">
        </div>

        <div class="flex items-center">
            <img
                src="{{ asset('assets/cartificate/4.png') }}"
                class="h-[420px] w-auto object-contain"
                alt="Certificate 3">
        </div>

    </div>

    </div>
</section>

<section id="contact">
    @include('frontend.include.contact-form')
</section>

<section>
    <div class="last-banner">
        <img src="{{ asset('assets/images/bg-3.png') }}">
    </div>
</section>
@endsection