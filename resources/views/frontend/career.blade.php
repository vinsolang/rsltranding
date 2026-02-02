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

        

        .btn-Interest-to-export {
            width: 228px;
            height: 43px;
            background-color: #FFFFFF;
            color: #059848;
            border-radius: 41.5px;
            margin-top: 3rem;
        }

        @media screen and (max-width: 1025px) {
           

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
            /* padding-left: 10rem;
            padding-right: 10rem; */
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

        

        .banner-content {
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }


        .wrapper-banner .logo-video {
            display: flex;
            justify-content: center;
            align-items: center;

        }

        .wrapper-banner .home-banner-logo {
            width: 400px !important;
        }

      

        @media screen and (max-width: 769px) {
           
            .wrapper-banner .home-banner-logo {
                width: 250px !important;
            }

            

            .first-card {
                position: relative;
                width: 100%;
                height: 100%;
                margin-top: 7% !important;
            }


        }


        @media screen and (max-width: 641px) {
           

            .first-card {
                position: relative;
                width: 100%;
                height: 100%;
                margin-top: 75% !important;
            }
        }

        @media screen and (max-width: 426px) {
            
            .wrapper-banner .home-banner-logo {
                width: 200px !important;
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
         .banner-content .main-banner-h1-bg .km-title{
         font-size: 50px;
        font-weight: bolder;
        font-family: "Moul", serif;
        color: #059848
    }
    
       @media screen and (max-width: 641px) {
         .banner-content .main-banner-h1-bg .km-title{
         font-size: 30px;
        font-weight: bolder;
        font-family: "Moul", serif;
        color: #059848
    }
    
       }
    /* Base: Mobile */
.btn-view-more {
    position: relative;
    top: 0;
    z-index: 50;
    padding: 0.5rem 1.25rem; /* example px-5 py-2 */
    border-radius: 9999px; /* full rounded */
}
       /* Desktop / medium screens */
@media (min-width: 1440px) {
    .btn-view-more {
        top: -8rem; 
    }
}

/* Large screens (iMac / 4K) */
@media (min-width: 2560px) {
    .btn-view-more {
        top: 0;
    }
}
    </style>

<style>
    :root {
        color: #059848;
    }

    .main-banner {
        width: 100%;
        height: 115vh;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 4rem;
        padding-left: 2rem;
        padding-right: 2rem;
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

    .main-banner .home-banner-logo {
        width: 400px;
        margin-top: -2rem;
    }

    .main-banner .home-banner-logo img {
        width: 100%;
    }

    .main-banner .home-banner-context {
        text-align: center;
    }

    .main-banner .home-banner-context h5 {
        font-size: 30px;
        font-weight: bold;
    }

    .main-banner .home-banner-context h1 {
        font-size: 90px;
        font-weight: bolder;
        color: #059848
    }

    .main-banner .home-banner-context .khmer-title {
        font-size: 60px;
        font-weight: bolder;
        color: #059848
    }

    .main-banner .home-banner-context h3 {
        font-size: 40px;
        font-weight: bold;
        margin-bottom: 3rem;
    }

    .main-banner .home-banner-context .btn-explore-our-exports {
        position: relative;
        width: 319.03px;
        height: 64.41px;
    }

    .main-banner .home-banner-context .btn-explore-our-exports img {
        position: absolute;
        top: 0%;
        z-index: 1;
    }

    .main-banner .home-banner-context .btn-explore-our-exports p a {
        color: #ffffff;
        text-decoration: none;
    }

    .main-banner .home-banner-context .btn-explore-our-exports p {
        width: 100%;
        font-size: 20px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 2;
        color: #FFFFFF;
    }

    @media screen and (max-width: 1025px) {
        .main-banner {
            width: 100%;
            height: 115vh;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 4rem;
            padding-left: 1rem;
            padding-right: 1rem;
        }

        .main-banner .home-banner-logo {
            width: 260px;
        }

        .main-banner .home-banner-logo img {
            width: 100%;
        }

        .main-banner .home-banner-context {
            text-align: center;
        }

        .main-banner .home-banner-context h5 {
            font-size: 15px;
            font-weight: bold;
        }

        .main-banner .home-banner-context h1 {
            font-size: 50px;
            font-weight: bolder;
            color: #059848
        }

        .main-banner .home-banner-context h3 {
            font-size: 30px;
            font-weight: bold;
        }

        .main-banner .home-banner-context .btn-explore-our-exports {
            position: relative;
            width: 270.03px;
            height: 50.41px;
        }

        .main-banner .home-banner-context .btn-explore-our-exports p {
            width: 100%;
            font-size: 18px;
            position: absolute;
            top: 53%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 2;
            color: #FFFFFF;
        }
    }


    @media screen and (max-width: 769px) {
        .main-banner {
            width: 100%;
            height: 115vh;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            gap: 2rem;
            padding-left: 1rem;
            padding-right: 1rem;
            padding-bottom: 5rem;
        }
         

    }

    @media screen and (max-width: 772px) {
        .main-banner .home-banner-logo {
            display: none;
        }
    }

    @media screen and (max-width: 426px) {

        .main-banner {
            gap: 2rem;
        }


        .main-banner .home-banner-logo {
            width: 230px;
            max-width: 100%;
            display: none;
        }


        .main-banner .home-banner-context h5 {
            font-size: 13px;
            font-weight: bold;
        }

        .main-banner .home-banner-context h1 {
            font-size: 35px;
            font-weight: bolder;
            color: #059848
        }

        .main-banner .home-banner-context h3 {
            font-size: 18px;
            font-weight: bold;
        }

        .main-banner .home-banner-context .btn-explore-our-exports {
            position: relative;
            width: 230.03px;
            height: 35.41px;
        }

        .main-banner .home-banner-context .btn-explore-our-exports p {
            width: 100%;
            font-size: 15px;
            position: absolute;
            top: 65%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 2;
            color: #FFFFFF;
        }
    }

    .home-first-banner {
        margin-top: -10rem;
    }

    @media screen and (min-width: 769px) and (max-width: 952px) {
        .home-first-banner {
            margin-top: -15%;
        }
    }

    @media screen and (max-width: 769px) {
        .home-first-banner {
            margin-top: -6rem;
        }
    }

    .rsl-trading-map {
        width: 900px;
        max-width: 100%
    }

    .rsl-trading-map img {
        width: 100%;
        height: 100%;
    }

    @media screen and (max-width: 426px) {
        .rsl-trading-map {
            width: 1200px;
        }

        .rsl-trading-map img {
            width: 1200px;
        }
    }

    .we-start {
        width: 100%;
        height: 60vh;
        background-color: #DBDBDB;
        position: relative;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding-left: 1rem;
        padding-right: 1rem;
    }

    .we-start .we-start-bg {
        position: absolute;
        top: 0;
        width: 100%;
        height: 60vh;
        object-fit: cover;
        opacity: 0.7 !important;
    }


    .we-start .we-start-context {
        position: relative;
        z-index: 60;
        text-align: center;
        display: flex;
        flex-direction: column;
        gap: 5rem;
        margin-top: -5rem;
    }


    .we-start .we-start-context p {
        width: 34rem;
        font-size: 20px;
        color: #1E1E1E;
        font-weight: 200;

    }

    .we-start .we-start-context h5 {
        font-size: 20px;
        color: #059848;
        font-weight: bolder;
    }

    .we-start .we-start-person {
        position: absolute;
        bottom: 0;
        z-index: 50 !important;
        left: -10%;
        width: 110vh;
        max-width: 100%;
    }

    .we-start .we-start-perso img {
        width: 100%;
        height: 100%;
    }

    @media screen and (max-width: 1025px) {
        .we-start .we-start-context p {
            font-size: 16px;
        }

        .we-start .we-start-context h5 {
            font-size: 16px;
        }

        .we-start .we-start-person {
            width: 90vh;
        }

        .we-start {
            height: 50vh;
        }

        .we-start .we-start-bg {
            height: 50vh;
        }
    }

    .we-start .we-start-person-none {
        display: none;
        position: absolute;
        z-index: 50 !important;
        bottom: 0;
        width: 40vh;
    }

    .we-start .we-start-perso-none img {
        opacity: 1 !important;
    }

    @media screen and (max-width: 769px) {
        .we-start .we-start-context p {
            font-size: 14px;
        }

        .we-start .we-start-context h5 {
            font-size: 14px;
        }

        .we-start .we-start-person {
            width: 80vh;
        }

        .we-start {
            height: 50vh;
        }

        .we-start .we-start-bg {
            height: 50vh;
        }

        .we-start .we-start-person {
            display: none;
        }

        .we-start .we-start-person-none {
            display: block;
        }

        .we-start .we-start-context {
            gap: 1rem;
            margin-top: -5rem;
        }

    }


    @media screen and (max-width: 566px) {
        .we-start .we-start-context p {
            width: 100%;
        }

        .we-start .we-start-person-none {
            width: 30vh;
        }
    }

    .welcome-to-text {
        margin-top: 10rem;
    }

    @media screen and (max-width: 615px) {
        .welcome-to-text {
            margin-top: 4rem;
        }
    }


    .card {
        border: none !important;
        position: relative;
        margin-top: 3rem;
        margin-bottom: 9rem;
    }

    .card img {
        width: 100%;
    }

    .card .card-content {
        position: absolute;
        bottom: -60%;
        left: 50%;
        transform: translateX(-50%);
        width: 380px;
        height: 300px;
        background-color: #ECECEC;
        border-radius: 20px;
        padding-left: 0.8rem;
        padding-right: 0.8rem;
        padding-top: 4rem;
        padding-bottom: 0.2rem;
    }

    .card-content h4 {
        color: #059848;
        font-weight: bolder;
    }

    .wrapper-card-content {
        position: absolute;
        bottom: 10px;
        left: 0;
        width: 100%;
        display: flex;
        justify-content: space-between;
        padding: 0 10px;
    }

    .wrapper-card-content .btn-explore {
        background: linear-gradient(to right, #8DC640, #059848);
        font-weight: bolder;
        width: 160px;
        height: 45px;
        font-size: 0.9rem;
        border-radius: 41.5px;
        color: #ffffff;
    }

    .wrapper-card-content .btn-explore a {
        color: #ffffff;
        text-decoration: none;
    }


    .wrapper-card-content h1 {
        color: #059848;
    }

    .card-content-logo {
        background-color: #059848;
        width: 90px;
        height: 90px;
        border-radius: 100px;
        display: flex;
        justify-content: center;
        align-items: center;
        position: absolute;
        right: 5%;
        top: -16%
    }

    .card-content-logo img {
        width: 50%;
    }

    @media screen and (max-width: 1399.5px) {

        .card {
            margin-bottom: 10rem;
        }

        .card .card-content {
            bottom: -80%;
            width: 320px;
        }

        .wrapper-card-content {
            display: flex;
            justify-content: space-between;
            margin-top: 2rem;
        }

        .card-content-logo {
            background-color: #059848;
            width: 65px;
            height: 65px;
            border-radius: 100px;
            display: flex;
            justify-content: center;
            align-items: center;
            position: absolute;
            right: 5%;
            top: -10%
        }
    }


    @media screen and (max-width: 1199.5px) {
        .card {
            margin-bottom: 14rem;
        }


        .card .card-content {
            bottom: -125%;
            width: 280px;
        }


        .wrapper-card-content {
            display: flex;
            justify-content: space-between;
            margin-top: 1rem;
        }
    }

    @media screen and (max-width: 991.5px) {
        .card .card-content {
            bottom: -90%;
            width: 310px;
        }

        .card {
            margin-bottom: 11rem;
        }
    }

    @media screen and (max-width: 769px) {
        .card {
            margin-bottom: 7rem;
        }

        .card .card-content {
            bottom: -40%;
            width: 320px;
            max-width: auto;
        }

        .wrapper-card-content {
            margin-bottom: 0.3rem;
        }
    }


    @media screen and (max-width: 538.5px) {
        .card .card-content {
            width: 390px;
        }
    }


    @media screen and (max-width: 425.5px) {
        .card {
            margin-bottom: 8rem;
        }

        .card .card-content {
            bottom: -60% !important;
            width: 290px;
        }
    }

    @media screen and (max-width: 375.5px) {
        .card {
            margin-bottom: 10rem;
        }

        .card .card-content {
            bottom: -80% !important
        }
    }


    @media screen and (max-width: 344.5px) {
        .card {
            margin-bottom: 11rem;
        }

        .card .card-content {
            bottom: -95% !important
        }
    }

    .achievement {
        position: relative;
        margin-top: 3rem !important;
        width: 100%;
        height: 40rem;
    }

    .achievement .firstbg-achievement {
        width: 100%;
        height: 40rem;
        object-fit: cover;
        position: absolute;
        z-index: 5;
    }

    .achievement .background-achievement-main {
        position: absolute;
        top: 0%;
        width: 100%;
        height: 60rem;
        z-index: 0;

    }

    .achievement .background-achievement-main img {
        width: 100%;
        height: 60rem;
        object-fit: cover;
    }

    @media screen and (max-width: 769px) {
        .achievement {
            height: 44rem;
        }

        .achievement .firstbg-achievement {
            height: 44rem;
        }

    }

    .achievement h4 {
        color: #ffffff;
        font-size: 25px;
        font-weight: bolder;
        margin-bottom: 2rem;
    }



    .achievement-content {
        position: absolute;
        top: 10%;
        width: 100%;
        z-index: 5 !important;
    }

    .achievement-content h4 {
        text-align: center;
    }

    .achievement-card {
        width: 100%;
        height: 15rem;
        display: flex;
        flex-direction: column;
        align-items: center;

    }

    .achievement-card-img {
        margin-left: -6rem;
    }

    .achievement-card-img img {
        width: 96px;
        height: 96px;
    }

    .achievement-card-content {
        display: flex;
        gap: 10px;
    }

    .achievement-card-content h1 {
        font-size: 55px;
        color: #8DC640;
        margin-top: 0.2rem;
    }


    .achievement-card-content p {
        width: 180px;
        font-size: 16px;
        height: max-content;
        margin-top: 0.7rem;
        color: #ffffff
    }

    .wrapper-achievement-card {
        padding-left: 5rem !important;
        padding-right: 5rem !important;

    }


    @media screen and (max-width: 1222.5px) {

        .achievement h4 {
            color: #ffffff;
            font-size: 22px;
            font-weight: bolder;
        }

        .achievement-card-img img {
            width: 60px;
            height: 60px;
        }

        .achievement-card-content h1 {
            font-size: 38px;
            color: #8DC640
        }

        .achievement-card-content p {
            width: 150px;
            font-size: 15px;
            height: max-content;
            margin-top: 0.5rem;
            color: #ffffff
        }
    }

    @media screen and (max-width: 1025px) {
        .achievement h4 {
            color: #ffffff;
            font-size: 20px;
            font-weight: bolder;
        }
    }


    @media screen and (max-width: 991.5px) {
        .achievement-card {
            width: 100%;
            height: 5rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 5rem;
        }

        .achievement-card-img img {
            width: 65px;
            height: 65px;
        }

        .achievement-content {
            position: absolute;
            top: 5%;
            width: 100%;
        }
    }

    @media screen and (max-width: 769px) {
        .achievement-card-img {
            margin-left: 0rem;
        }

        .achievement-card-content {
            display: flex;
            flex-direction: column;
        }

        .achievement-card-content h1 {
            font-size: 35px;
            color: #8DC640;
            text-align: center;
        }

        .achievement-card-content p {
            font-size: 14px;
            height: max-content;
            color: #ffffff;
            margin-top: -1rem;
            text-align: center;
        }

        .achievement h4 {
            color: #ffffff;
            font-size: 20px;
            font-weight: bolder;
            margin-top: 1rem;
        }

        .achievement-card {
            width: 100%;
            height: 10rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 2rem;
        }

    }

    @media screen and (max-width: 525.5px) {
        .achievement-card-img img {
            width: 55px;
            height: 55px;
        }

        .achievement-card-content h1 {
            font-size: 35px;
            color: #8DC640
        }

        .achievement-card-content p {
            width: 190px;
            font-size: 14px;
            height: max-content;
            margin-top: -1rem;
            color: #ffffff
        }

        .achievement-card-content {
            display: flex;
            gap: 5px;
            width: 170px;
        }

        .wrapper-achievement-card {
            padding-left: 3.7rem !important;
            padding-right: 3.7rem !important;

        }
    }


    @media screen and (max-width: 432.5px) {
        .achievement-card-img img {
            width: 50px;
            height: 50px;
        }

        .achievement-card-content h1 {
            font-size: 35px;
            color: #8DC640
        }

        .achievement-card-content p {
            width: 170px;
            font-size: 13px;
            height: max-content;
            max-width: 100%;
            margin-top: -1rem;
            color: #ffffff
        }

        .achievement-card-content {
            display: flex;
            gap: 5px;
            width: 140px;
        }


        .wrapper-achievement-card {
            padding-left: 2rem !important;
            padding-right: 2rem !important;
        }
    }

    .achievement-main-logo {
        position: absolute;
        bottom: -15%;
        left: 50%;
        transform: translate(-50%);
        z-index: 5 !important;
    }

    .achievement-main-logo img {
        width: 192.09px;
        height: 192.09px;
    }


    @media screen and (max-width: 992px) {
        .achievement-main-logo {
            position: absolute;
            bottom: -11%;
            left: 50%;
            transform: translate(-50%);
        }

        .achievement-main-logo img {
            width: 142.09px;
            height: 142.09px;
        }
    }


    @media screen and (max-width: 692.5px) {
        .achievement-main-logo {
            position: absolute;
            bottom: -9%;
            left: 50%;
            transform: translate(-50%);
        }

        .achievement-main-logo img {
            width: 122.09px;
            height: 122.09px;
        }
    }

    .background-achievement-main {
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
    }

    .background-achievement-main img {
        width: 100%;
        height: 45rem;
        object-fit: cover;
    }

    .FAQ-background {
        margin-top: 13rem;
        padding-bottom: 5rem;
        width: 100%;
        height: max-content;
        background-color: #ECECEC;
    }

    .FAQ-content {
        padding-top: 4rem;
    }

    .FAQ-content h1 {
        color: #8DC640;
        font-weight: bolder;
        font-weight: 40px;
    }

    .FAQ-content h5 {
        margin-top: 1rem;
        font-weight: bolder;
        font-size: 15px;
    }

    .drop-down-card {
        width: 100%;
        max-height: auto;
        background-color: #FFFFFF;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding-left: 1rem;
        padding-right: 1rem;
        margin-top: 1rem;
        margin-bottom: 0.1rem;
        border: 1px solid #DBDBDB;
    }

    .drop-down-card p {
        margin-top: 1rem;
        font-size: 15px;
    }

    .drop-down-card button svg {
        width: 60px;
    }

    .drop-down-card button svg.active {
        transform: rotate(180deg);
        margin-top: -2.5rem;
    }

    .drop-down-card .question span.active {
        display: none;
    }

    .qanda .answer {
        color: #059848
    }

    .qanda .answer {
        display: none;
    }

    .qanda .answer.active {
        display: block;
    }

    @media screen and (max-width: 1200px) {
        .drop-down-card button svg.active {
            transform: rotate(180deg);
            margin-top: -3.5rem;
        }
    }

    @media screen and (max-width: 992px) {
        .drop-down-card button svg.active {
            transform: rotate(180deg);
            margin-top: -5rem;
        }
    }

    @media screen and (max-width: 768px) {
        .drop-down-card button svg.active {
            transform: rotate(180deg);
            margin-top: -3rem;
        }
    }

    @media screen and (max-width: 426px) {
        .drop-down-card button svg.active {
            transform: rotate(180deg);
            margin-top: -4rem;
        }
    }

    @media screen and (max-width: 326px) {
        .drop-down-card button svg.active {
            transform: rotate(180deg);
            margin-top: -6rem;
        }
    }

    .wrapper-contact {
        margin-top: 3rem !important;
        padding-top: 2.5rem;
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


    .rsl-trading {
        width: 95%;
        margin-top: 3rem;
    }

    .rsl-trading img {
        width: 100%
    }

    .rsl-trading .rsl-trading-context {
        width: 100%;
        display: flex;
        justify-content: space-between;
        margin-top: 0.5rem;
    }

    .rsl-trading .rsl-trading-context p {
        font-weight: 500 !important;
    }

    .rsl-trading .rsl-trading-context h5 {
        color: #ffffff
    }

    .rsl-trading p {
        font-weight: 500;
    }

    .showcommoditylist {
        width: 100%;
        height: auto;
        background-color: #059848;
        color: #ffffff;
        border-radius: 24.5px;
        padding-left: 1rem;
    }

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
    {{-- <section>
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

                     <video autoplay muted loop playsinline class="absolute inset-0 z-[-10] object-cover w-full h-full md:hidden"
                    poster="fallback-image.jpg">
                    <source src="{{ asset('assets/videos/bg-rsl/bg-rsl-mobile/bg-apple-rsl.mp4') }}" type="video/mp4">
                   
                </video>
                    <img id="logoImg" src="{{ asset('assets/images/logo.png') }}" class="home-banner-logo" alt="Logo">
                </div>
                <div class="banner-content">
                    <div class="main-banner-h1-bg">
                        <h1 data-aos="zoom-in-up" data-aos-duration="1000"> {{ app()->getLocale() === 'en' ? 'Career' : (app()->getLocale() === 'km' ? 'ឱកាសការងារ' : '就业机会') }}</h1>
                    </div>
                    <div class="main-banner-p-bg">
                        <p data-aos="zoom-in-up" data-aos-duration="1200">{{ app()->getLocale() === 'en' ? 'J​​oin Our Team and Grow with Cambodia’s Leading Agricultural Exporter' : (app()->getLocale() === 'km' ? 'ចូលរួមជាមួយក្រុមការងាររបស់យើងខ្ញុំនឹងរីកចម្រើនជាមួយក្រុមហ៊ុននាំចេញផលិតផលកសិកម្មឈានមុខគេរបស់ប្រទេសកម្ពុជា' : '加入我们的团队，与柬埔寨领先的农业出口商') }}</p>

                        <p data-aos="zoom-in-up" data-aos-duration="1400">
                            {{ app()->getLocale() === 'en' ? '​Be part of a company that connects local farmers to global markets, values integrity, and delivers quality products worldwide.' 
                            : (app()->getLocale() === 'km' ? 'ក្លាយជាផ្នែកមួយនៃក្រុមហ៊ុនដែលផ្សាភ្ជាប់កសិករក្នុងស្រុកទៅកាន់ទីផ្សារសកល ឱ្យតម្លៃលើភាពសុចរិត និងផ្តល់ផលិតផលដែលមានគុណភាពទូទាំងពិភពលោក។' 
                            : '起成长-成为公司的一员，将当地农民与全球市场联系起来，重视诚信，并在全球范围内') }}
                        </p>
                    </div>
                    <a data-aos="zoom-in-up" data-aos-duration="1600" href="#first-card"><button class="btn-Interest-to-export">{{ app()->getLocale() === 'en' ? 'View Open Positions' : (app()->getLocale() === 'km' ? 'មើលមុខតំណែងទំនេរ' : '“查看空缺职位') }}</button></a>
                </div>
            </div>
        </div>
        </div>
    </section> --}}

    <section>
    <div class="main-banner bg-cover relative">
        <video autoplay muted loop playsinline class="absolute inset-0 z-[-10] object-cover w-full h-full"
            poster="fallback-image.jpg">
            <source src="{{ url('assets/videos/bg.mp4') }}" type="video/mp4">
            {{-- <source src="{{ url('assets/videos/bg.webm') }}" type="video/webm"> --}}
        </video>
        {{-- <img class="img-banner" src="{{ asset('assets/images/banner-img-1.png') }}"> --}}
        <video
            id="logoVideo"
            autoplay
            muted
            loop
            playsinline
            preload="auto"
            class="home-banner-logo hidden"
        >
            <source src="{{ asset('assets/videos/LOGO.webm') }}" type="video/webm">
        </video>

        <video autoplay muted loop playsinline class="absolute inset-0 z-[-10] object-cover w-full h-full md:hidden"
            poster="fallback-image.jpg">
            <source src="{{ asset('assets/videos/bg-rsl/bg-rsl-mobile/bg-apple-rsl.mp4') }}" type="video/mp4">
            {{-- <source src="{{ url('assets/videos/bg.webm') }}" type="video/webm"> --}}
        </video>
        {{-- <img id="logoImg" src="{{ asset('assets/images/logo.png') }}" class="home-banner-logo" alt="Logo"> --}}


        <div class="home-banner-context md:mt-0 mt-[260px]">
             <div class="banner-content">
                    <div class="main-banner-h1-bg">
                        <h1 data-aos="zoom-in-up" data-aos-duration="1000" class="{{ app()->getLocale() === 'km' ? 'font-moul km-title' : ''  }}"> {{ app()->getLocale() === 'en' ? 'Career' : (app()->getLocale() === 'km' ? 'ឱកាសការងារ' : '就业机会') }}</h1>
                    </div>
                    <div class="main-banner-p-bg max-w-[550px] text-left">
                        <p data-aos="zoom-in-up" data-aos-duration="1200">{{ app()->getLocale() === 'en' ? 'J​​oin Our Team and Grow with Cambodia’s Leading Agricultural Exporter' : (app()->getLocale() === 'km' ? 'ចូលរួមជាមួយក្រុមការងាររបស់យើងខ្ញុំនឹងរីកចម្រើនជាមួយក្រុមហ៊ុននាំចេញផលិតផលកសិកម្មឈានមុខគេរបស់ប្រទេសកម្ពុជា' : '加入我们的团队，与柬埔寨领先的农业出口商') }}</p>

                        <p data-aos="zoom-in-up" data-aos-duration="1400">
                            {!! app()->getLocale() === 'en' ? '​Be part of a company that connects local farmers to global markets, values integrity, and delivers quality products worldwide.' 
                            : (app()->getLocale() === 'km' ? 'ក្លាយជាផ្នែកមួយនៃក្រុមហ៊ុនដែលផ្សាភ្ជាប់កសិករក្នុងស្រុកទៅកាន់ទីផ្សារសកល ឱ្យតម្លៃលើភាព <br/> សុចរិត និងផ្តល់ផលិតផលដែលមានគុណភាពទូទាំងពិភពលោក។' 
                            : '起成长-成为公司的一员，将当地农民与全球市场联系起来，重视诚信，并在全球范围内') !!}
                        </p>
                    </div>
                    <a data-aos="zoom-in-up" data-aos-duration="1600" href="#first-card"><button class="btn-Interest-to-export">{{ app()->getLocale() === 'en' ? 'View Open Positions' : (app()->getLocale() === 'km' ? 'មើលមុខតំណែងទំនេរ' : '“查看空缺职位') }}</button></a>
                </div>
        </div>
    </div>
</section>

    <section id="first-card" class="md:mt-0 -mt-96">
        <div class="first-card">
            <div class="first-card-background">
                <img src="{{ asset('assets/logo/rsl-ac-home-style-1.png') }}">
            </div>
            @if (session('successfully'))
                <div x-data="{ show: true }"
                    x-init="setTimeout(() => show = false, 3000)"
                    x-show="show"
                    x-transition
                    class="fixed top-6 right-6 z-50 bg-green-600 text-white px-6 py-4 rounded-xl shadow-lg">
                    {{ session('successfully') }}
                </div>
            @endif


            @if ($errors->any())
                <div class="mb-6 rounded-xl bg-red-50 border border-red-200 p-4 text-red-600">
                    <ul class="list-disc pl-5 space-y-1">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif  
           <div class="flex flex-col lg:flex-row w-full h-full"
                 x-data="{
                    open: false,
                    active: null,
                    items: [
                        {
                            img: '{{ asset('assets/job/sale-executive.jpeg') }}',
                            title: 'Sales Executive',
                            desc: 
                                `
                                    <h4>Job Summary</h4>
                                    <p>
                                        The Sales Executive is responsible for generating new business, maintaining client relationships,
                                        and achieving sales targets through effective product promotion and customer engagement.
                                    </p>

                                    <h4>Key Responsibilities</h4>
                                    <ul>
                                        <li>Identify and develop new customers in local and international markets</li>
                                        <li>Promote and sell company products to wholesalers, distributors, and partners</li>
                                        <li>Prepare quotations, follow up on inquiries, and close sales deals</li>
                                        <li>Maintain strong relationships with existing clients</li>
                                        <li>Collect market feedback and competitor information</li>
                                        <li>Prepare sales reports and update customer databases</li>
                                        <li>Coordinate with operations and logistics teams to ensure smooth delivery</li>
                                    </ul>

                                    <h4>Requirements</h4>
                                    <ul>
                                        <li>Bachelor’s degree in Business, Marketing, or related field</li>
                                        <li>Minimum 1–2 years of sales experience (trading or FMCG preferred)</li>
                                        <li>Strong communication and negotiation skills</li>
                                        <li>Self-motivated and target-driven</li>
                                        <li>Good command of English; Khmer required (additional languages are an advantage)</li>
                                        <li>Willingness to travel when required</li>
                                    </ul>
                                `
                        },
                        {
                            img: '{{ asset('assets/job/sale-supvisor.jpeg') }}',
                            title: 'Sales Supervisor',
                            desc: 
                                `
                                    <h4>Job Summary</h4>
                                        <p>
                                            The Sales Supervisor supports the Sales Manager by supervising daily sales activities,
                                            guiding the sales team, and ensuring targets and performance standards are met.
                                        </p>

                                        <h4>Key Responsibilities</h4>
                                        <ul>
                                            <li>Supervise and support Sales Executives in daily operations</li>
                                            <li>Monitor sales performance and ensure achievement of targets</li>
                                            <li>Assist in implementing sales strategies and promotional plans</li>
                                            <li>Train, coach, and motivate sales staff</li>
                                            <li>Ensure proper reporting of sales activities and customer feedback</li>
                                            <li>Maintain strong relationships with key customers</li>
                                            <li>Coordinate between sales team and management</li>
                                        </ul>

                                        <h4>Requirements</h4>
                                        <ul>
                                            <li>Bachelor’s degree in Business, Marketing, or related field</li>
                                            <li>Minimum 3 years of sales experience, with supervisory exposure preferred</li>
                                            <li>Strong leadership and team management skills</li>
                                            <li>Good analytical and reporting skills</li>
                                            <li>Excellent communication and problem-solving abilities</li>
                                            <li>Proficient in Microsoft Office and CRM systems</li>
                                        </ul>
                                `
                        },
                        {
                            img: '{{ asset('assets/job/sales-manager.jpeg') }}',
                            title: 'Sales Manager',
                            desc: `
                                <h4>Job Summary</h4>
                                <p>
                                    The Sales Manager leads the sales department, develops sales strategies,
                                    drives revenue growth, and expands market presence for RSL Trading Company.
                                </p>

                                <h4>Key Responsibilities</h4>
                                <ul>
                                    <li>Develop and implement short- and long-term sales strategies</li>
                                    <li>Set sales targets and monitor team performance</li>
                                    <li>Lead, manage, and develop the sales team</li>
                                    <li>Identify new markets, business opportunities, and strategic partnerships</li>
                                    <li>Manage key accounts and high-value clients</li>
                                    <li>Analyze sales data, market trends, and competitor activities</li>
                                    <li>Prepare sales forecasts, budgets, and management reports</li>
                                    <li>Collaborate with senior management to support company growth</li>
                                </ul>

                                <h4>Requirements</h4>
                                <ul>
                                    <li>Bachelor’s or Master’s degree in Business, Marketing, or related field</li>
                                    <li>Minimum 5 years of sales experience, including management level</li>
                                    <li>Proven track record in sales growth and team leadership</li>
                                    <li>Strong strategic thinking and negotiation skills</li>
                                    <li>Excellent communication and presentation skills</li>
                                    <li>Experience in trading, import/export, or commodities is a strong advantage</li>
                                </ul>
                            `

                        }
                    ]
                }"
           >
                <div class="flex lg:flex-row flex-col lg:w-1/2 w-full z-50 ">
                     <template x-for="(item, index) in items" :key="index">
                        <div class="text-center">

                            <img
                                :src="item.img"
                                class="w-full h-[515px] md:h-[750px] lg:h-[515px] object-contain"
                                alt="">

                            <!-- Button below image -->
                            <button
                                @click="active = item; open = true"
                                class="btn-view-more z-50 px-5 py-2 text-white rounded-full">
                                <img src="{{ asset('assets/products/btn-view-more.png') }}" alt="">
                            </button>

                        </div>
                    </template>
                </div>

                <!-- Full Screen Popup -->
    <div
    x-show="open"
    x-transition.opacity
    x-cloak
    class="fixed inset-0 bg-black/80 z-50 flex items-center justify-center">

    <div
        class="bg-white max-w-3xl w-full mx-4 p-6 relative rounded-lg
               max-h-[90vh] overflow-y-auto">

        <!-- Close -->
        <button
            @click="open = false"
            class="absolute top-3 right-3 text-2xl text-gray-600 hover:text-black">
            ✕
        </button>

        <!-- Dynamic Content -->
        <template x-if="active">
            <div>
                <h2 class="text-2xl font-semibold mb-4" x-text="active.title"></h2>
                <div class="text-gray-700 leading-relaxed" x-html="active.desc"></div>
            </div>
        </template>

    </div>
</div>


                <div class="lg:w-1/2 w-full">
                    <form action="{{ route('contacts.send') }}" method="POST" enctype="multipart/form-data"
                        class="career-main-form">
                        @csrf
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label class="text-[#fff] mb-1" for="name">{{ app()->getLocale() === 'en' ? 'Name' : (app()->getLocale() === 'km' ? 'ឈ្មោះ' : '姓名') }}</label>
                                    <div class="career-input-form">
                                        <input id="name" name="name" placeholder="{{ app()->getLocale() === 'en' ? 'Enter your full name' : (app()->getLocale() === 'km' ? 'បញ្ចូលឈ្មោះពេញរបស់អ្នក' : '请输入您的全名') }}">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <label class="text-[#fff] mb-1" for="email">{{ app()->getLocale() === 'en' ? 'Email' : (app()->getLocale() === 'km' ? 'អុីម៉ែល' : '邮箱') }}</label>
                                    <div class="career-input-form">
                                        <input id="email" name="email" placeholder="{{ app()->getLocale() === 'en' ? 'Enter your email address' : (app()->getLocale() === 'km' ? 'បញ្ចូលអាសយដ្ឋានអ៉ីម៉ែលរបស់អ្នក' : '请输入您的邮箱地址') }}">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <label class="text-[#fff] mb-1" for="phone">{{ app()->getLocale() === 'en' ? 'Phone Number' : (app()->getLocale() === 'km' ? 'លេខទូរសព្ទ' : '电话号码') }}</label>
                                    <div class="career-input-form">
                                        <input id="phone" name="phone" placeholder="{{ app()->getLocale() === 'en' ? 'Enter your phone number' : (app()->getLocale() === 'km' ? 'បញ្ចូលលេខទូរសព្ទរបស់អ្នក' : '请输入您的电话号码') }}">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <label class="text-[#fff] mb-1" for="cv">{{ app()->getLocale() === 'en' ? 'Upload CV' : (app()->getLocale() === 'km' ? 'អាប់ឡូត CV' : '上传简历') }}</label>
                                    <div class="career-file-form">
                                        <input type="file" id="cv" name="cv" placeholder="Upload your CV" accept=".pdf,.doc,.docx">
                                    </div>
                                    <small class="text-red-500">
                                        {{-- Max file size: 20MB --}}
                                    </small>
                                </div>

                                <div class="col-lg-6">
                                    <label class="text-[#fff] mb-1" for="position">{{ app()->getLocale() === 'en' ? 'Position' : (app()->getLocale() === 'km' ? 'មុខតំណែង' : '职位') }}</label>
                                    <div class="career-input-form">
                                        <select id="position" name="position" class="form-select">
                                            <option selected disabled>{{ app()->getLocale() === 'en' ? 'Select a position' : (app()->getLocale() === 'km' ? 'បំពេញមុខតំណែង' : '请选择职位') }}</option>
                                            <option value="Sales Executive">
                                                {{ app()->getLocale() === 'en' ? 'Sales Executive' : (app()->getLocale() === 'km' ? 'អ្នកប្រត្តិបត្តិផ្នែកលក់' : '销售主管') }}
                                            </option>
                                            <option value="Sales Supervisor">
                                                {{ app()->getLocale() === 'en' ? 'Sales Supervisor' : (app()->getLocale() === 'km' ? 'អ្នកត្រួតពិនិត្យផ្នែកលក់' : '销售主管') }}
                                            </option>
                                            <option value="Sales Manager">
                                                {{ app()->getLocale() === 'en' ? 'Sales Manager' : (app()->getLocale() === 'km' ? ' ប្រធានផ្នែកលក់' : '销售经理') }}
                                            </option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <label class="text-[#fff] mb-1" for="cover_letter">{{ app()->getLocale() === 'en' ? 'Upload Cover Letter' : (app()->getLocale() === 'km' ? 'អាប់ឡូត Cover Letter' : '上传求职信') }}</label>
                                    <div class="career-file-form">
                                        <input type="file" id="cover_letter" name="cover_letter" accept=".pdf,.doc,.docx"
                                            placeholder="Upload your cover letter">
                                    </div>
                                    <small class="text-red-500">
                                        {{-- Max file size: 20MB --}}
                                    </small>
                                </div>

                                <div class="col-12 d-flex justify-content-center">
                                    <button type="submit" class="btn-career-submit">
                                        <img src="{{ asset('assets/images/btn-submit-bg.png') }}">
                                        <p>{{ app()->getLocale() === 'en' ? 'Submit' : (app()->getLocale() === 'km' ? 'ដាក់ស្នើ' : '提交') }}</p>
                                    </button>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
             
           </div>


        </div>
    </section>
@endsection


@section('career')
    <script src="{{ asset('assets/js/career.js') }}"></script>
   <script>
    document.getElementById('cv').addEventListener('change', function () {
        const file = this.files[0];
        const maxSize = 20 * 1024 * 1024; // 20MB

        if (file && file.size > maxSize) {
            alert('CV file size must be 20MB or less.');
            this.value = '';
        }
    });
</script>
<script>
    document.getElementById('cover_letter').addEventListener('change', function () {
        const file = this.files[0];
        const maxSize = 20 * 1024 * 1024; // 20MB

        if (file && file.size > maxSize) {
            alert('Cover Letter file size must be 20MB or less.');
            this.value = '';
        }
    });
</script>

@endsection
