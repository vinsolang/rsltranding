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

        @media screen and (max-width: 1025px) {
           

            .wrapper-banner .home-banner-logo {
                width: 300px !important;
            }

           
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
                margin-top: 30% !important;
            }

            
        }

        @media screen and (max-width: 426px) {
           

            

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

      @media screen and (min-width: 2560px) {
        .main-banner .home-banner-context {
            text-align: center;
            position: relative;
            left: 700px;
            top: -80px;
        }
    }

    @media screen and (min-width: 1700px) and (max-width: 2542px) {
        .main-banner .home-banner-context {
            text-align: center;
            position: relative;
            left: 600px;
            top: -80px;
        }
    }
     @media screen and (max-width: 1699px) {
        .main-banner .home-banner-context {
            text-align: center;
            position: relative;
            left: 250px;
            top: -80px;
        }
      
    }

     @media screen and (max-width: 1024px) {
        .main-banner .home-banner-context {
            text-align: center;
            position: relative;
            left: 250px;
            top: -50px;
        }
    }
      @media screen and (max-width: 768px) {
        .main-banner .home-banner-context {
            text-align: center;
            position: relative;
            left: 150px;
            top: -40px;
        }
    }
    
       @media screen and (max-width: 732px) {
        .main-banner .home-banner-context {
            text-align: center;
            position: relative;
            left: 10px;
            top: -30px;
        }
    }
      @media screen and (max-width: 588px) {
        .main-banner .home-banner-context {
            text-align: center;
            position: relative;
            left: 10px;
            top: -40px;
        }
    }
    @media screen and (max-width: 426px) {
        .rsl-trading-map {
            width: 1200px;
        }

        .rsl-trading-map img {
            width: 1200px;
        }
        .main-banner .home-banner-context {
            margin-top: 200px;
             text-align: center;
            position: relative;
            left: 0px;
            top: px;
        }
    }
     @media screen and (max-width: 375px) {
        .main-banner .home-banner-context {
            text-align: center;
            position: relative;
            left: 0px;
            top: 0px;
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
    </section> --}}

      <section>
    <div class="main-banner bg-cover relative">
        <video autoplay muted loop playsinline class="absolute inset-0 z-[-10] object-cover w-full h-full"
            poster="fallback-image.jpg">
            <source src="{{ asset('assets/vdo/8.mp4') }}" type="video/mp4">
            {{-- <source src="{{ url('assets/videos/bg.webm') }}" type="video/webm"> --}}
        </video>
        {{-- <img class="img-banner" src="{{ asset('assets/images/banner-img-1.png') }}"> --}}
        {{-- <video
            id="logoVideo"
            autoplay
            muted
            loop
            playsinline
            preload="auto"
            class="home-banner-logo hidden"
        >
            <source src="{{ asset('assets/videos/LOGO.webm') }}" type="video/webm">
        </video> --}}

        <video autoplay muted loop playsinline class="absolute inset-0 z-[-10] object-cover w-full h-full md:hidden"
            poster="fallback-image.jpg">
            <source src="{{ asset('assets/vdo/animation-rsl-final-vdo.mp4') }}" type="video/mp4">
            {{-- <source src="{{ url('assets/videos/bg.webm') }}" type="video/webm"> --}}
        </video>
        {{-- <img id="logoImg" src="{{ asset('assets/images/logo.png') }}" class="home-banner-logo" alt="Logo"> --}}


        <div class="home-banner-context md:mt-0 mt-[260px]">
            <div class="banner-content">
                    <div class="main-banner-h1-bg">
                        <h1 data-aos="zoom-in-up" data-aos-duration="1000" class="{{ app()->getLocale() === 'km' ? 'font-moul km-title' : ''  }}">{{ app()->getLocale() === 'en' ? 'Activites' : (app()->getLocale() === 'km' ? 'សកម្មភាពអាជីវកម្ម' : '商业活动') }}</h1>
                    </div>
                    <div class="main-banner-p-bg md:w-full max-w-[300px] ">
                        <p data-aos="zoom-in-up" data-aos-duration="1200">​​{{ app()->getLocale() === 'en' ? '​Your Trusted Partner in Cambodian Agricultural Exports' : (app()->getLocale() === 'km' ? 'យើងខ្ញ៉ំជាដៃគូដែលអតិថិជនអាចទុកចិត្តក្នុងការនាំចេញផលិតផលកសិកម្មរបស់កម្ពុជា' : '您在柬埔寨农产品出口领域的可靠合作伙伴') }}</p>
                    </div>
                    <a data-aos="zoom-in-up" data-aos-duration="1400" href="#contact"><button
                            class="btn-Interest-to-export"> {{ app()->getLocale() === 'en' ? 'Interest to Export' : (app()->getLocale() === 'km' ? 'ចំណាប់អារម្មណ៍ក្នុងការនាំចេញ' : '兴趣出口') }}</button></a>
                </div>
        </div>
    </div>
</section>

    <section>
        <div class="first-card">
            <div class="first-card-background">
                <img src="{{ asset('assets/images/second-bg.png') }}">
            </div>
            {{-- <div class="w-full max-w-7xl mx-auto pt-20">
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
            </div> --}}
            @php
                $albums = [
                    [
                        'title_en' => 'Visit rice mills in Battambang province.',
                        'title_km' => 'ទស្សនារោងម៉ាស៊ីនកិនស្រូវនៅខេត្តបាត់ដំបង។',
                        'title_cn' => '参观马德望省的碾米厂。',
                        'date' => '12 Jan 2025',
                        'images' => [
                            'assets/images/Activites-2.JPG',
                            'assets/images/image.png',
                            'assets/images/card-1.png',
                        ],
                    ],
                    [
                        'title_en' => 'Rice packing activities in Kandal province.',
                        'title_km' => 'សកម្មភាពវេចខ្ចប់អង្ករនៅខេត្តកណ្តាល។',
                        'title_cn' => '干丹省的大米包装活动。',
                        'date' => '25 Feb 2025',
                        'images' => [
                            'assets/images/Activites-4.JPG',
                            'assets/images/card-1.png',
                            'assets/images/Activites-4.JPG',
                        ],
                    ],
                    [
                        'title_en' => 'Harvesting activities in Battambang province.',
                        'title_km' => 'សកម្មភាពប្រមូលផលនៅខេត្តបាត់ដំបង។',
                        'title_cn' => '马丹奉省的采收活动。',
                        'date' => '25 Feb 2025',
                        'images' => [
                            'assets/images/Activites-5.JPG',
                            'assets/images/card-5.png',
                            'assets/images/Activites-5.JPG',
                        ],
                    ],
                     [
                        'title_en' => 'Coffee Export Activities',
                        'title_km' => 'សកម្មភាពនាំចេញកាហ្វេ',
                        'title_cn' => '咖啡出口活动',
                        'date' => '15 Jan 2025',
                        'images' => [
                            'assets/images/card-2.png',
                            'assets/images/export/coffee_bean.jpg',
                            'assets/images/card-2.png',
                        ],
                    ],
                    [
                        'title_en' => 'Yellow Corn Export Activities',
                        'title_km' => 'សកម្មភាពនាំចេញពោតលឿង',
                        'title_cn' => '黄玉米出口活动',
                        'date' => '02 Feb 2025',
                        'images' => [
                            'assets/images/Activites-3.JPG',
                            'assets/images/export-card-product-1.png',
                            'assets/images/Activites-3.JPG',
                        ],
                    ],
    
                ];
            @endphp
          {{-- GALLERY WRAPPER --}}
<div x-data="gallery({{ Js::from($albums) }})">

    {{-- CONTENT --}}
    <div class="max-w-7xl mx-auto pt-20 px-4 space-y-20">

        @foreach ($albums as $index => $album)

            @php $isEven = $index % 2 === 0; @endphp

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center"
                 data-aos="fade-up">

                {{-- IMAGE --}}
                <div class="{{ $isEven ? '' : 'lg:order-2' }}">
                    <img
                        src="{{ asset($album['images'][0]) }}"
                        class="w-full h-[750px] object-cover rounded-2xl cursor-pointer"
                        @click="open({{ $index }})">
                </div>

                {{-- TEXT --}}
                <div>
                    <h3 class="text-2xl font-semibold text-[#03254B] mb-3">
                        {{ app()->getLocale() === 'en'
                            ? $album['title_en']
                            : (app()->getLocale() === 'km'
                                ? $album['title_km']
                                : $album['title_cn']) }}
                    </h3>

                    <p class="text-gray-500 mb-4">{{ $album['date'] }}</p>

                    {{-- <p class="text-gray-600 mb-6 line-clamp-3">
                        {{ $album['description'] }}
                    </p> --}}

                    <button
                        @click="open({{ $index }})"
                        class="px-6 py-3 bg-[#03254B] text-white rounded-lg">
                        {{ app()->getLocale() === 'en' ? 'Details' : (app()->getLocale() === 'km' ? 'ព័ត៌មានលម្អិត' : '细节') }} →
                    </button>
                </div>

            </div>

        @endforeach
    </div>

    {{--  FULLSCREEN MODAL (OUTSIDE CONTAINER) --}}
    <div
        x-show="show"
        x-cloak
        x-transition.opacity
        class="fixed inset-0 bg-black/90 z-[99999] flex items-center justify-center">

        <button class="absolute top-6 right-6 text-white text-3xl"
                @click="close()">✕</button>

        <button class="absolute left-6 text-white text-5xl"
                @click="prev()">‹</button>

        <!-- Image wrapper -->
        <div class="w-[90vw] h-[90vw] max-w-[600px] max-h-[600px]">
            <img
                :src="images[current]"
                class="w-full h-full object-cover rounded-lg">
        </div>

        <button class="absolute right-6 text-white text-5xl"
                @click="next()">›</button>
    </div>

</div>



        </div>
    </section>

    <section id="contact" class="relative z-10">
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

    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

<script>
    function gallery(albums) {
        return {
            show: false,
            images: [],
            current: 0,

            open(index) {
                this.images = albums[index].images;
                this.current = 0;
                this.show = true;
            },

            close() {
                this.show = false;
            },

            next() {
                this.current = (this.current + 1) % this.images.length;
            },

            prev() {
                this.current =
                    (this.current - 1 + this.images.length) % this.images.length;
            }
        }
    }
</script>

<script>
document.addEventListener('DOMContentLoaded', () => {
    // Close modal if language switch happened
    setTimeout(() => {
        document.querySelectorAll('[x-data]').forEach(el => {
            if (el.__x) {
                el.__x.$data.show = false;
            }
        });
    }, 500); // ⏱ 0.5s (change to 1000 for 1s)
});
</script>

@endsection
