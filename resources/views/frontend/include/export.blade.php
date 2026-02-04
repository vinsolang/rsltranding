@extends('layouts.master')

@section('title')
    <title>Export - RSL Trading</title>
@endsection

@section('css')
     <link rel="stylesheet" href="{{ asset('assets/css/export.css') }}">
@endsection

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
            height: 340px !important;
            min-height: unset;
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
         .card-product .card-product-bg-1 {
            width: 100%;

        }

        .card-product .card-product-detail-1 {
            width: 100%;
            height: 520px !important;
            min-height: unset;
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

         @media screen and (max-width: 2560px) {
            .card-product .card-product-detail-1 {
                width: 100%;
                height: 580px !important;
            }
             html[lang="km"] .card-product .card-product-detail-1 {
                height: 490px !important;
            }

        }

        
         @media screen and (max-width: 1040px) {
            .card-product .card-product-detail-1 {
                width: 100%;
                height: 520px !important;
            }
              html[lang="km"] .card-product .card-product-detail-1 {
                height: 490px !important;
            }

        }

        @media screen and (max-width: 767px) {
            .card-product .card-product-detail {
                width: 100%;
                height: auto;
            }

        }



        @media screen and (max-width: 426px) {
            .card-product .card-product-detail {
                height: auto;
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


        

         .card-product .card-product-detail-1 .smaill-detail-card button {
            color: #1E1E1E;
            font-size: 20px;
            width: 274px;
            height: 47px;
        }

        .card-product .card-product-detail-1 .smaill-detail-card button a {
            color: #000000;
            text-decoration: none;
        }


        .card-product .card-product-detail-1 .smaill-detail-card button:hover {
            background-color: #059848;
            color: #FFFFFF;
            width: 274px;
            height: 47px;
            border-radius: 23.5px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card-product .card-product-detail-1 .smaill-detail-card button:hover a {
            color: #FFFFFF
        }


        .card-product .card-product-detail-1 .btn-card-interest-to-export {
            position: absolute;
            bottom: 5%;
            left: 50%;
            transform: translateX(-50%);
        }

        .card-product .card-product-detail-1 .btn-card-interest-to-export button {
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

        .main-banner .banner-img-1 {
            position: absolute;
            width: 100%;
            height: 120vh;
            top: 0%;
            z-index: -1;
            object-fit: cover;
            display: none;
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
                display: none;
                position: absolute;
                width: 100%;
                height: 130vh;
                top: 0%;
                z-index: -1;
                object-fit: cover;
            }

             .main-banner .banner-img-1 {
                position: absolute;
                display: flex;
                width: 100%;
                height: 130vh;
                top: 0%;
                z-index: -1;
                object-fit: cover;
            }
             .wrapper-banner .home-banner-logo {
                width: 200px !important;
                display: none;
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

           

            .banner-content .main-banner-h1-bg h1 {
                font-size: 20px;
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
        
    </style>

    <section>
        <div class="main-banner relative">
           <!-- <img class="banner-img" src="{{ asset('assets/images/banner-img-1.png') }}">  -->
            <video autoplay muted loop playsinline class="absolute banner-img inset-0 z-[-10] object-cover w-full h-full"
                poster="fallback-image.jpg">
                <source src="{{ url('assets/videos/bg.mp4') }}" type="video/mp4" >
                <source src="{{ url('assets/videos/bg.webm') }}" type="video/webm">
            </video>
            <video autoplay muted loop playsinline class="absolute banner-img-1 inset-0 z-[-10] object-cover w-full h-full"
                poster="fallback-image.jpg">
                <source src="{{ asset('assets/vdo/animation-rsl-final.mp4') }}" type="video/mp4" >
                {{-- <source src="{{ url('assets/videos/bg.webm') }}" type="video/webm"> --}}
            </video>
            <div class="wrapper-banner">
                <div class="logo-video">
                    <video id="logoVideo" autoplay muted loop playsinline class="home-banner-logo hidden">
                        <source src="{{ asset('assets/videos/LOGO.webm') }}" type="video/webm">
                    </video>

                    {{-- <img id="logoImg" src="{{ asset('assets/images/logo.png') }}" class="home-banner-logo" alt="Logo"> --}}
                </div>
                <div class="banner-content md:mt-0 mt-64">
                    <div class="main-banner-h1-bg">
                        <h1 data-aos="zoom-in-up" data-aos-duration="1000" class="{{ app()->getLocale() === 'km' ? 'font-moul km-title' : ''  }}">
                            {{ app()->getLocale() === 'en' ? 'Our Main Products' : (app()->getLocale() === 'km' ? 'ផលិតផលចម្បង' : '我们的主要产品') }}
                        </h1>
                        {{-- <h1 data-aos="zoom-in-up" data-aos-duration="1200">
                            {{ app()->getLocale() === 'en' ? 'Main Products' : (app()->getLocale() === 'km' ? '' : '') }}
                        </h1> --}}
                    </div>
                    <div class="main-banner-p-bg">
                        <p data-aos="zoom-in-up" data-aos-duration="1400" class="text-left">
                            {{ app()->getLocale() === 'en'
                                ? 'Premium Cambodian Agricultural Products – Rice, Coffee, Pepper, Corn, Cashew Nuts, Mangoes, Cassava, Charcoal & Plantation Wood, Exported Worldwide with Quality You Can Trust.'
                                : (app()->getLocale() === 'km'
                                    ? 'ផលិតផលកសិកម្មកម្ពុជារួមមាន អង្ករ កាហ្វេ ម្រេច ចេក គ្រាប់ស្វាយចន្ទី ដំណាប់ស្វាយ ដំឡូងមី ធ្យូង ឈើដាំ និងផលិតផលជាច្រើនទៀតត្រូវបាននាំចេញទៅកាន់ទីផ្សារពិភពលោកជាមួយនឹងគុណភាពដែលលោកអ្នកអាចទុកចិត្តបាន។'
                                    : '优质柬埔寨农产品——大米、咖啡、辣椒、玉米、腰果、芒果、木薯、木炭及种植林木材，全部出口至世界各地，品质值得信赖。') }}
                        </p>
                    </div>
                    <a data-aos="zoom-in-up" data-aos-duration="1600" href="#interest"><button
                            class="btn-Interest-to-export">
                            {{ app()->getLocale() === 'en' ? 'Explore Our Products' : (app()->getLocale() === 'km' ? 'ពត៌មានបន្ថែមអំពីផលិតផល' : '探索我们的产品') }}
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
                <div class="container mt-[-140px]">
                    <div class="row gap-y-20">
                    <h2 class="text-[22px] sm:text-[28px] md:text-[36px] lg:text-[40px] text-[#059848] leading-tight fw-bolder pb-2 text-center 2xl:py-36">
                         {{ app()->getLocale() === 'en' ? 'Our Main Commodities' : (app()->getLocale() === 'km' ? 'ផលិតផលចម្បង' : '我们的主要商品') }}
                    </h2>
                        
                        <div class="col-lg-4 col-md-6 col-12" id="products">
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

                                },
                                init() {
                                    const hash = window.location.hash.replace('#','');
                                    if (hash && this.products[hash]) {
                                        this.active = hash; // open the right product

                                        const el = document.getElementById('products');
                                        if(el) {
                                            setTimeout(() => {
                                                // calculate offset so the full card shows
                                                const paddingBottom = 1050; // adjust this to give extra space at bottom
                                                const elementBottom = el.offsetTop + el.offsetHeight;
                                                const scrollPosition = elementBottom - window.innerHeight + paddingBottom;

                                                window.scrollTo({
                                                    top: scrollPosition > 0 ? scrollPosition : 0, // don't scroll negative
                                                    behavior: 'smooth'
                                                });
                                            }, 50);
                                        }
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
                                        <button 
                                            x-show="active === 'default'"
                                            @click="active='rice'; history.replaceState(null,'','#rice')">
                                            {{ app()->getLocale() === 'en' ? 'Rice' : (app()->getLocale() === 'km' ? 'អង្ករ' : '大米') }}
                                        </button>

                                        <!-- Dried Mango -->
                                        <button 
                                            x-show="active === 'default'"
                                            @click="active='yellow_corn'; history.replaceState(null,'','#yellow_corn')">
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
                                },
                                 init() {
                                    const hash = window.location.hash.replace('#','');
                                    if (hash && this.products[hash]) {
                                        this.active = hash; // open the right product

                                        const el = document.getElementById('fruits');
                                        if(el) {
                                            setTimeout(() => {
                                                // calculate offset so the full card shows
                                                const paddingBottom = 1050; // adjust this to give extra space at bottom
                                                const elementBottom = el.offsetTop + el.offsetHeight;
                                                const scrollPosition = elementBottom - window.innerHeight + paddingBottom;

                                                window.scrollTo({
                                                    top: scrollPosition > 0 ? scrollPosition : 0, // don't scroll negative
                                                    behavior: 'smooth'
                                                });
                                            }, 50);
                                        }
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
                                        <button x-show="active === 'default'" @click="active='fresh_mango'; history.replaceState(null,'','#fresh_mango')">
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

                        <div class="col-lg-4 col-md-6 col-12" id="nuts_leg">
                            <div class="card-product" x-data="{
                                active: 'default',
                                products: {
                                    default: {
                                        title: '{{ app()->getLocale() === 'en' ? 'Nuts & Legumes' : (app()->getLocale() === 'km' ? 'គ្រាប់ធញ្ញជាតិ និង​សណ្តែក​' : '坚果和豆类') }}',
                                        desc: '{{ app()->getLocale() === 'en' ? 'Premium-grade nuts and legumes sourced from trusted Cambodian farmers.' : (app()->getLocale() === 'km' ? 'គ្រាប់ធញ្ញជាតិ និង​សណ្តែក​​លំដាប់​ខ្ពស់​ដែល​មាន​ប្រភព​មក​ពី​កសិករ​ក្នុងស្រុក​ប្រកបដោយទំនុកចិត្ត។' : '优质的坚果和豆类均来自可信赖的柬埔寨农民所种植的作物。') }}',
                                        img: '{{ asset('assets/products/coffee/Cashew-Nut06.jpg') }}'
                                    },
                                    cashew: {
                                        title: '{{ app()->getLocale() === 'en' ? 'Cashew Nuts' : (app()->getLocale() === 'km' ? 'គ្រាប់ស្វាយចន្ទី' : '腰果') }}',
                                        desc: '{{ app()->getLocale() === 'en' ? 'High-quality Cambodian cashew nuts suitable for global export markets.' : (app()->getLocale() === 'km' ? 'គ្រាប់ស្វាយចន្ទីកម្ពុជាប្រកបដោយគុណភាពខ្ពស់ សមស្របសម្រាប់ទីផ្សារនាំចេញពិភពលោក។' : '高品质的柬埔寨腰果，适合出口全球市场。') }}',
                                        img: '{{ asset('assets/products/coffee/Cashew-Nut04.jpg') }}'
                                    },
                                    peanut: {
                                        title: '{{ app()->getLocale() === 'en' ? 'Peanuts' : (app()->getLocale() === 'km' ? 'សណ្តែកដី' : '花生') }}',
                                        desc: '{{ app()->getLocale() === 'en' ? 'Premium peanuts processed for food and industrial use.' : (app()->getLocale() === 'km' ? 'សណ្តែកដីប្រកបដោយគុណភាពខ្ពស់កែច្នៃសម្រាប់ម្ហូបអាហារ និងការប្រើប្រាស់ក្នុងឧស្សាហកម្មនានា។' : '优质花生，用于食品和工业加工。') }}',
                                        img: '{{ asset('assets/images/export/peanut.jpg') }}'
                                    }
                                },
                                 init() {
                                    const hash = window.location.hash.replace('#','');
                                    if (hash && this.products[hash]) {
                                        this.active = hash; // open the right product

                                        const el = document.getElementById('nuts_leg');
                                        if(el) {
                                            setTimeout(() => {
                                                // calculate offset so the full card shows
                                                const paddingBottom = 1050; // adjust this to give extra space at bottom
                                                const elementBottom = el.offsetTop + el.offsetHeight;
                                                const scrollPosition = elementBottom - window.innerHeight + paddingBottom;

                                                window.scrollTo({
                                                    top: scrollPosition > 0 ? scrollPosition : 0, // don't scroll negative
                                                    behavior: 'smooth'
                                                });
                                            }, 50);
                                        }
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
                                        <button 
                                                x-show="active === 'default'" 
                                                @click="active='cashew'; history.replaceState(null,'','#cashew')">
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
                        
                        <div class="flex justify-center items-center max-w-5xl mx-auto px-12">
                            
                            <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-y-20 gap-x-4">
                                {{-- item 1 --}}

                                <div class="" id="cassavas">
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
                                        },
                                         init() {
                                                const hash = window.location.hash.replace('#','');
                                                if (hash && this.products[hash]) {
                                                    this.active = hash; // open the right product

                                                    const el = document.getElementById('cassavas');
                                                    if(el) {
                                                        setTimeout(() => {
                                                            // calculate offset so the full card shows
                                                            const paddingBottom = 900; // adjust this to give extra space at bottom
                                                            const elementBottom = el.offsetTop + el.offsetHeight;
                                                            const scrollPosition = elementBottom - window.innerHeight + paddingBottom;

                                                            window.scrollTo({
                                                                top: scrollPosition > 0 ? scrollPosition : 0, // don't scroll negative
                                                                behavior: 'smooth'
                                                            });
                                                        }, 50);
                                                    }
                                                }
                                            }

                                    }">
                                        <!-- Image -->
                                        <img class="card-product-bg-1 h-[250px] object-cover" :src="products[active].img">

                                        <div class="card-product-detail-1">
                                            <!-- Title -->
                                        <h5 x-text="products[active].title"></h5>

                                        <!-- Description -->
                                        <p x-text="products[active].desc"></p>

                                        <!-- Buttons -->
                                        <div class="smaill-detail-card">
                                            <!-- Dried Cassava -->
                                            <button x-show="active === 'default'" @click="active='cassava'; history.replaceState(null,'','#cassava')" class="relative top-6">
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

                                {{-- item 2 --}}
                                <div class="" id="pepper_product">
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
                                        },
                                        init() {
                                                const hash = window.location.hash.replace('#','');
                                                if (hash && this.products[hash]) {
                                                    this.active = hash; // open the right product

                                                    const el = document.getElementById('pepper_product');
                                                    if(el) {
                                                        setTimeout(() => {
                                                            // calculate offset so the full card shows
                                                            const paddingBottom = 900; // adjust this to give extra space at bottom
                                                            const elementBottom = el.offsetTop + el.offsetHeight;
                                                            const scrollPosition = elementBottom - window.innerHeight + paddingBottom;

                                                            window.scrollTo({
                                                                top: scrollPosition > 0 ? scrollPosition : 0, // don't scroll negative
                                                                behavior: 'smooth'
                                                            });
                                                        }, 50);
                                                    }
                                                }
                                            }
                                    }">
                                        <!-- Image -->
                                        <img class="card-product-bg-1 h-[250px] object-cover" :src="products[active].img">

                                        <div class="card-product-detail-1">
                                            <!-- Title -->
                                        <h5 x-text="products[active].title"></h5>

                                        <!-- Description -->
                                        <p x-text="products[active].desc"></p>

                                        <!-- Buttons -->
                                        <div class="smaill-detail-card">
                                            <!-- Pepper -->
                                            <button x-show="active === 'default'" @click="active='pepper'; history.replaceState(null,'','#pepper')" class="relative top-6">
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

                                {{-- item 3 --}}
                                <div class="" id="coffee">
                                    <div class="card-product" x-data="{
                                        active: 'default',
                                            products: {
                                                default: {
                                                    title: '{{ app()->getLocale() === 'en' ? 'Coffee & Beverages' : (app()->getLocale() === 'km' ? 'កាហ្វេ និងភេសជ្ជៈ' : '咖啡与饮品') }}',
                                                    desc: '{{ app()->getLocale() === 'en'
                                                        ? 'Premium Cambodian coffee products carefully selected and exported following international standards.'
                                                        : (app()->getLocale() === 'km'
                                                        ? 'ផលិតផលកាហ្វេកម្ពុជាគុណភាពខ្ពស់ ត្រូវបានជ្រើសរើស និងនាំចេញតាមស្តង់ដាអន្តរជាតិ។'
                                                        : '精选的柬埔寨优质咖啡产品，按照国际标准出口。') }}',
                                                    img: '{{ asset('assets/images/export-card-product-6.png') }}'
                                                },

                                                bean: {
                                                    title: '{{ app()->getLocale() === 'en' ? 'Roasted Coffee Beans' : (app()->getLocale() === 'km' ? 'គ្រាប់កាហ្វេលីង' : '烘焙咖啡豆') }}',
                                                    desc: '{{ app()->getLocale() === 'en'
                                                        ? 'Carefully roasted Cambodian coffee beans with rich aroma and balanced flavor, suitable for global markets.'
                                                        : (app()->getLocale() === 'km'
                                                        ? 'គ្រាប់កាហ្វេលីងកម្ពុជាមានក្លិនឈ្ងុយ និងរសជាតិសមតុល្យ សមស្របសម្រាប់ទីផ្សារអន្តរជាតិ។'
                                                        : '精心烘焙的柬埔寨咖啡豆，香气浓郁，口感均衡，适合国际市场。') }}',
                                                    img: '{{ asset('assets/products/coffee/coffee-bean.jpg') }}'
                                                },

                                                powder: {
                                                    title: '{{ app()->getLocale() === 'en' ? 'Roasted Coffee Powder' : (app()->getLocale() === 'km' ? 'ម្សៅកាហ្វេលីង' : '咖啡粉') }}',
                                                    desc: '{{ app()->getLocale() === 'en'
                                                        ? 'Finely ground roasted coffee powder, ready for brewing and ideal for retail and export.'
                                                        : (app()->getLocale() === 'km'
                                                        ? 'ម្សៅកាហ្វេលីងល្អិត រួចរាល់សម្រាប់ឆុង និងសមស្របសម្រាប់លក់ និងនាំចេញ។'
                                                        : '细磨烘焙咖啡粉，即冲即用，适合零售及出口。') }}',
                                                    img: '{{ asset('assets/products/coffee/coffee_beans_4_800x.webp') }}'
                                                }
                                            },
                                           init() {
                                                const hash = window.location.hash.replace('#','');
                                                if (hash && this.products[hash]) {
                                                    this.active = hash; // open the right product

                                                    const el = document.getElementById('coffee');
                                                    if(el) {
                                                        setTimeout(() => {
                                                            // calculate offset so the full card shows
                                                            const paddingBottom = 900; // adjust this to give extra space at bottom
                                                            const elementBottom = el.offsetTop + el.offsetHeight;
                                                            const scrollPosition = elementBottom - window.innerHeight + paddingBottom;

                                                            window.scrollTo({
                                                                top: scrollPosition > 0 ? scrollPosition : 0, // don't scroll negative
                                                                behavior: 'smooth'
                                                            });
                                                        }, 50);
                                                    }
                                                }
                                            }


                                    }">
                                        <!-- Image -->
                                        <img class="card-product-bg-1 h-[250px] object-cover" :src="products[active].img">

                                        <div class="card-product-detail-1">
                                           <!-- Title -->
                                        <h5 x-text="products[active].title"></h5>

                                        <!-- Description -->
                                        <p x-text="products[active].desc"></p>

                                        <!-- Buttons -->
                                        <div class="smaill-detail-card">
                                            <!-- Roasted Coffee Beans -->
                                            <button 
                                                x-show="active === 'default'" 
                                                @click="active='bean'; history.replaceState(null,'','#bean')">
                                                {{ app()->getLocale() === 'en' ? 'Roasted Coffee Bean' : (app()->getLocale() === 'km' ? 'គ្រាប់កាហ្វេលីង' : '咖啡豆') }}
                                            </button>

                                            <!-- Roasted Coffee Powder -->
                                            <button x-show="active === 'default'" @click="active = 'powder'">
                                                {{ app()->getLocale() === 'en' ? 'Roasted Coffee Powder' : (app()->getLocale() === 'km' ? 'ម្សៅកាហ្វេលីង' : '咖啡粉') }}
                                            </button>

                                            <!-- Back -->
                                            <button x-show="active !== 'default'" @click="active = 'default'" class="btn-back">
                                                {{ app()->getLocale() === 'en' ? 'Back' : (app()->getLocale() === 'km' ? 'ត្រឡប់ក្រោយ' : '回去') }}
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

                                {{-- item 4 --}}
                                <div class="" id="product">
                                    <div class="card-product" x-data="{
                                           active: 'default',
                                            products: {
                                                default: {
                                                    title: '{{ app()->getLocale() === 'en' ? 'Plantation Wood' : (app()->getLocale() === 'km' ? 'ឈើដាំ' : '种植林木') }}',
                                                    desc: '{{ app()->getLocale() === 'en' ? 'There is very good quality wood such as Acacia which will be wood log, wood chip, sawtimber and wood pellets for export from here.' : (app()->getLocale() === 'km' ? 'ផ្គត់ផ្គង់ឈើដាំប្រកបដោយគុណភាពល្អដូចជាឈើអាកាស្យា ឈើដុំ ឈើបន្ទះ ឈើអារ និងគ្រាប់ឈើសម្រាប់នាំចេញពីទីនេះ។' : '这里有着非常优质的木材，比如金合欢木，这些木材将被加工成原木、木屑、锯材以及木屑颗粒，用于出口。') }}',
                                                    img: '{{ asset('assets/products/pro-7/Wood-Log.JPG') }}'
                                                },

                                                charcoal: {
                                                    title: '{{ app()->getLocale() === 'en' ? 'Coconut Shell Charcoal' : (app()->getLocale() === 'km' ? 'ធ្យូងសំបកដូង' : '椰壳炭') }}',
                                                    desc: '{{ app()->getLocale() === 'en' ? 'High-quality natural charcoal made from coconut shells. Long burning time, low smoke, ideal for BBQ and industrial use.' : (app()->getLocale() === 'km' ? 'ធ្យូងធម្មជាតិដែលមានគុណភាពខ្ពស់ផលិតពីសំបកដូង។ ដុតបានយូរ មានផ្សែងតិច ល្អសម្រាប់ដុតសាច់អាំង និងប្រើប្រាស់ក្នុងឧស្សាហកម្ម។' : '由椰壳制成的高品质天然炭。燃烧时间长，烟雾少，非常适合烧烤和工业用途。') }}',
                                                    img: '{{ asset('assets/products/Coconut-Shell.jpg') }}'
                                                },

                                                white_black: {
                                                    title: '{{ app()->getLocale() === 'en' ? 'White & Black Charcoal' : (app()->getLocale() === 'km' ? 'ធ្យូងស និងខ្មៅ' : '白黑炭') }}',
                                                    desc: '{{ app()->getLocale() === 'en' ? 'Premium white and black charcoal with high carbon content, clean combustion, and strong heat output.' : (app()->getLocale() === 'km' ? 'ធ្យូងស និងខ្មៅលំដាប់ខ្ពស់ ដែលមានជាតិកាបូនខ្ពស់ ចំហេះស្អាត និងបញ្ចេញកំដៅខ្លាំង។' : '优质白黑炭，含碳量高，燃烧干净，热输出强劲。') }}',
                                                    img: '{{ asset('assets/products/pro-7/White-black-Charcoal.png') }}'
                                                },

                                                wood_chip: {
                                                    title: '{{ app()->getLocale() === 'en' ? 'Wood Chip' : (app()->getLocale() === 'km' ? 'បន្ទះឈើ' : '木屑') }}',
                                                    desc: '{{ app()->getLocale() === 'en' ? 'Processed wood chips used for biomass fuel, landscaping, animal bedding, and industrial applications.' : (app()->getLocale() === 'km' ? 'បន្ទះឈើកែច្នៃដែលប្រើសម្រាប់ចំហេះឥន្ធនៈ ររៀបចំដេគ័រខាងក្រៅ ធ្វើរោងសត្វ និងប្រើក្នុងឧស្សាហកម្មនានា។' : '经过加工的木屑，可用于生物质燃料、园林绿化、动物垫料以及工业用途。') }}',
                                                    img: '{{ asset('assets/products/Wood-Chip.jpg') }}'
                                                },

                                                sawdust: {
                                                    title: '{{ app()->getLocale() === 'en' ? 'Wood Sawdust' : (app()->getLocale() === 'km' ? 'កំទេចឈើ' : '木屑') }}',
                                                    desc: '{{ app()->getLocale() === 'en' ? 'Fine wood particles suitable for fuel briquettes, composting, particle board, and agricultural use.' : (app()->getLocale() === 'km' ? 'កំទេចឈើល្អិតៗដែលសមស្របសម្រាប់ដុតជាចំហេះធ្យូងឥន្ធនៈ ការធ្វើជីកំប៉ុស ប្រើជាបន្ទះឈើតូចៗ និងការប្រើប្រាស់កសិកម្ម។' : '优质的木屑颗粒，可用于制作燃料砖块、堆肥、刨花板以及农业用途。') }}',
                                                    img: '{{ asset('assets/products/pro-7/Sawdust.JPG') }}'
                                                },

                                                timber: {
                                                    title: '{{ app()->getLocale() === 'en' ? 'Wood Timber' : (app()->getLocale() === 'km' ? 'ដំុឈើ' : '木材') }}',
                                                    desc: '{{ app()->getLocale() === 'en' ? 'High-quality plantation timber for construction, furniture manufacturing, and export markets.' : (app()->getLocale() === 'km' ? 'ដំុឈើប្រកបដោយគុណភាពខ្ពស់ប្រើប្រាស់សម្រាប់សំណង់ ការផលិតគ្រឿងសង្ហារឹម និងទីផ្សារនាំចេញ។' : '高品质的种植林木材，适用于建筑、家具制造以及出口市场。') }}',
                                                    img: '{{ asset('assets/products/pro-7/Saw-Timber.JPG') }}'
                                                },

                                                pellet: {
                                                    title: `{{ 
                                                        app()->getLocale() === 'en'
                                                            ? 'Wood Pellet'
                                                            : (app()->getLocale() === 'km'
                                                                ? 'គ្រាប់ឈើ'
                                                                : '木屑颗粒')
                                                    }}`,
                                                    desc: `{{ 
                                                        app()->getLocale() === 'en'
                                                            ? 'Compressed wood pellets used as renewable biomass fuel with high energy efficiency.'
                                                            : (app()->getLocale() === 'km'
                                                                ? 'គ្រាប់ឈើដែលបានបង្ហាប់ ប្រើជាឥន្ធនៈជីវម៉ាសដែលអាចកកើតឡើងវិញ មានប្រសិទ្ធភាពថាមពលខ្ពស់។'
                                                                : '作为可再生生物质燃料使用的压缩木屑颗粒，具有极高的能源效率。')
                                                    }}`,
                                                    img: '{{ asset('assets/products/pro-7/Wood-Pellets.JPG') }}'
                                                }

                                            },
                                            init() {
                                                const hash = window.location.hash.replace('#','');
                                                if (hash && this.products[hash]) {
                                                    this.active = hash; // open the right product

                                                    const el = document.getElementById('product');
                                                    if(el) {
                                                        setTimeout(() => {
                                                            // calculate offset so the full card shows
                                                            const paddingBottom = 900; // adjust this to give extra space at bottom
                                                            const elementBottom = el.offsetTop + el.offsetHeight;
                                                            const scrollPosition = elementBottom - window.innerHeight + paddingBottom;

                                                            window.scrollTo({
                                                                top: scrollPosition > 0 ? scrollPosition : 0, // don't scroll negative
                                                                behavior: 'smooth'
                                                            });
                                                        }, 50);
                                                    }
                                                }
                                            }
                                        }">
                                        <!-- Image -->
                                        <img class="card-product-bg-1 h-[250px] object-cover" :src="products[active].img">

                                        <div class="card-product-detail-1">
                                           <!-- Title -->
                                        <h5 x-text="products[active].title"></h5>

                                        <!-- Description -->
                                        <p x-text="products[active].desc"></p>

                                       <!-- Buttons -->
                                        <div class="smaill-detail-card">

                                            <button x-show="active === 'default'" @click="active = 'charcoal'" class="relative -top-6">
                                                
                                                {{ app()->getLocale() === 'en' ? 'Coconut Shell Charcoal' : (app()->getLocale() === 'km' ? 'ធ្យូងសំបកដូង' : '椰壳炭') }}
                                            </button>

                                            <button x-show="active === 'default'" @click="active='white_black'; history.replaceState(null,'','#white_black')" class="relative -top-6">
                                                
                                                {{ app()->getLocale() === 'en' ? 'White & Black Charcoal' : (app()->getLocale() === 'km' ? 'ធ្យូងស និងខ្មៅ' : '白黑炭') }}
                                            </button>

                                            <button x-show="active === 'default'" @click="active = 'wood_chip'" class="relative -top-6">
                                               
                                                {{ app()->getLocale() === 'en' ? 'Wood Chip' : (app()->getLocale() === 'km' ? 'បន្ទះឈើ' : '木屑') }}
                                            </button>

                                            <button x-show="active === 'default'" @click="active = 'sawdust'" class="relative -top-6">
                                               
                                                {{ app()->getLocale() === 'en' ? 'Wood Sawdust' : (app()->getLocale() === 'km' ? 'កំទេចឈើ' : '木屑') }}
                                            </button>

                                            <button x-show="active === 'default'" @click="active = 'timber'" class="relative -top-6">
                                               
                                                {{ app()->getLocale() === 'en' ? 'Wood Timber' : (app()->getLocale() === 'km' ? 'ដំុឈើ' : '木材') }}
                                            </button>

                                            <button x-show="active === 'default'" @click="active = 'pellet'" class="relative -top-6">
                                                {{ 
                                                        app()->getLocale() === 'en'
                                                            ? 'Wood Pellet'
                                                            : (app()->getLocale() === 'km'
                                                                ? 'គ្រាប់ឈើ'
                                                                : '木屑颗粒')
                                                    }}
                                            </button>

                                            <!-- Back -->
                                            <button x-show="active !== 'default'" @click="active = 'default'" class="btn-back">
                                                 {{ app()->getLocale() === 'en' ? 'Back' : (app()->getLocale() === 'km' ? 'ត្រឡប់ក្រោយ' : '回去') }}
                                            </button>
                                        </div>


                                        <div class="btn-card-interest-to-export">
                                            <button><a href="#contact"
                                                    class="text-[#fff] decoration-transparent">{{ app()->getLocale() === 'en' ? 'Interest to Export' : (app()->getLocale() === 'km' ? 'ចំណាប់អារម្មណ៍ក្នុងការនាំចេញ' : '兴趣出口') }}</a></button>
                                        </div>

                                        <!-- Card Number -->
                                        <div class="card-no">
                                            <p>{{ app()->getLocale() === 'en' ? '07' : (app()->getLocale() === 'km' ? '០៧' : '07') }}</p>
                                        </div>
                                        </div>
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
   
    <section class="mt-[-100px]">
        @include('frontend.include.import')
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
