@extends('layouts.master')

@section('title')
    <title>Home - RSL Trading</title>
@endsection

{{-- @section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
@endsection --}}

@section('content')
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


        @media screen and (max-width: 426px) {

            .main-banner {
                gap: 2rem;
            }


            .main-banner .home-banner-logo {
                width: 230px;
                max-width: 100%;
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
                width: 35vh;
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
            height: auto;
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
            display: flex;
            justify-content: space-between;
            margin-top: 2.5rem;
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

    {{-- banner --}}
    <section>
        <div class="main-banner bg-cover relative">
            <video autoplay muted loop playsinline class="absolute inset-0 z-[-10] object-cover w-full h-full"
                poster="fallback-image.jpg">
                <source src="{{ url('assets/videos/bg.mp4') }}" type="video/mp4">
                <source src="{{ url('assets/videos/bg.webm') }}" type="video/webm">
            </video>
            {{-- <img class="img-banner" src="{{ asset('assets/images/banner-img-1.png') }}"> --}}
            <video id="logoVideo" autoplay muted loop playsinline class="home-banner-logo hidden">
                <source src="{{ asset('assets/videos/LOGO.webm') }}" type="video/webm">
            </video>

            <img id="logoImg" src="{{ asset('assets/images/logo.png') }}" class="home-banner-logo" alt="Logo">


            <div class="home-banner-context">
                {{-- <h5 class="popup">{{ __('messages.home') }}</h5> --}}
                <h5 data-aos="zoom-in-up" data-aos-duration="1000">WELCOME TO</h5>
                <h1 data-aos="zoom-in-up" data-aos-duration="1200">RSL TRADING</h1>
                <h3 data-aos="zoom-in-up" data-aos-duration="1400">Health Life Future</h3>

                <button class="btn-explore-our-exports" data-aos="zoom-in-up" data-aos-duration="1600">
                    <img src="{{ asset('assets/images/btn-submit-bg.png') }}">
                    <p><a href="{{ route('export') }}#rice">Explore Our Exports</a></p>
                </button>
            </div>
        </div>
    </section>

    {{-- contact --}}
    <section class="home-first-banner relative w-full h-[100vh] md:h-[130vh] ">

        <!-- Background Image -->
        <div class="absolute inset-0 z-10">
            <img src="{{ asset('assets/images/bg-1.png') }}" alt="" class="w-full h-full object-cover object-top">
        </div>

        <!-- Content -->
        <div
            class="relative z-20 w-full h-full max-w-7xl mx-auto flex flex-col items-center justify-center text-center font-[700] pt-40">

            <h2 class="text-[#8DC640] text-[20px] md:text-[25px] welcome-to-text">Welcome to</h2>

            <h1 class="text-[30px] md:text-[50px] text-[#059848] leading-tight fw-bolder">
                RSL TRADING
            </h1>

            <p class="text-[14px] md:text-[16px] font-[400] pt-4  md:px-10">
                Founded in 2015, RSL Trading Co., LTD. focuses on Agriculture Products for Local and International Markets,
                dedicated to connecting local farmers with us to bring agriculture products such as Rice, Coffee, Pepper,
                Banana, Cashew Nuts, Mango, Dried Mango, Dried Cassava and other several local products to buyers worldwide
                while supporting them for better opportunities and incomes.
            </p>


            <div class="w-[100%] h-full pb-20">
                <img src="{{ asset('assets/images/map-1.png') }}" class="w-full h-full mx-auto">
            </div>

        </div>
    </section>

    {{-- Why We Started --}}
    <section>
        <div class="we-start">
            <img class="we-start-bg" src="{{ asset('assets/images/bg-2.png') }}">
            <div class="we-start-context">
                <div class="-mt-[6rem] 2xl:-mt-[10rem]" class="context-one">
                    <h5 class="!text-[20px] md:!text-[30px] !text-[#059848] !text-center">Why We Started</h5>
                    <p>“We help local farmers by creating global opportunities for Cambodian agricultural products.”</p>
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

    {{-- Commodities --}}
    <section>
        <h5 class="text-[20px] md:text-[30px] text-[#059848] text-center pt-10">Our Main Commodities</h5>
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card">
                        <img src="{{ asset('assets/images/card-1.png') }}">
                        <div class="card-content">
                            <h4>Rice</h4>
                            <p>We specialize in exporting agricultural products such as rice, coffee, corn, cashew nuts and
                                tropical fruits to countries worldwide.</p>

                            <div class="wrapper-card-content">
                                <a href="{{ route('export') }}#rice"><button class="btn-explore">Explore
                                        More</button></a>
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
                                <a href="{{ route('export') }}#coffee"><button class="btn-explore">Explore
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
                                <a href="{{ route('export') }}#rice"><button class="btn-explore">Explore More</button></a>
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
                                <a href="{{ route('export') }}#nuts"><button class="btn-explore">Explore
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
                                <a href="{{ route('export') }}#root_crops"><button class="btn-explore">Explore
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
                                <a href="{{ route('export') }}#fruits"><button class="btn-explore">Explore
                                        More</button></a>
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

    {{-- achievement --}}
    <section>
        <div class="achievement">
            <img class="firstbg-achievement" src="{{ asset('assets/images/bg-3.png') }}">


            <div class="achievement-content">

                <h4>Acheivement in Number</h4>

                <div class="container wrapper-achievement-card">
                    <div class="row">

                        <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                            <div class="achievement-card">
                                <div class="achievement-card-img">
                                    <img src="{{ asset('assets/images/achievement-card-img-1.png') }}">
                                </div>

                                <div class="achievement-card-content">
                                    <h1 class="counter plus" data-target="1000">0</h1>
                                    <p>local farmers supported</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6 col-6 ">
                            <div class="achievement-card">
                                <div class="achievement-card-img">
                                    <img src="{{ asset('assets/images/achievement-card-img-2.png') }}">
                                </div>

                                <div class="achievement-card-content">
                                    <h1 class="counter plus" data-target="5">0</h1>
                                    <p>Continents Export</p>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                            <div class="achievement-card">
                                <div class="achievement-card-img">
                                    <img src="{{ asset('assets/images/achievement-card-img-3.png') }}">
                                </div>

                                <div class="achievement-card-content">
                                    <h1 class="counter plus" data-target="500">0</h1>
                                    <p>Export Commodities</p>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                            <div class="achievement-card">
                                <div class="achievement-card-img">
                                    <img src="{{ asset('assets/images/achievement-card-img-4.png') }}">
                                </div>

                                <div class="achievement-card-content">
                                    <h1 class="counter plus" data-target="10">0</h1>
                                    <p>Years in Operation</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                            <div class="achievement-card">
                                <div class="achievement-card-img">
                                    <img src="{{ asset('assets/images/achievement-card-img-5.png') }}">
                                </div>

                                <div class="achievement-card-content">
                                    <h1 class="counter percent" data-target="20">0</h1>
                                    <p>Farmers Sources</p>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                            <div class="achievement-card">
                                <div class="achievement-card-img">
                                    <img src="{{ asset('assets/images/achievement-card-img-6.png') }}">
                                </div>

                                <div class="achievement-card-content">
                                    <h1 class="counter percent" data-target="80">0</h1>
                                    <p>Communities Sources</p>
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

    {{-- faq --}}
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
                                <p class="answer">A: MOQ varies depending on the product and destination. Contact our
                                    export team in Phnom Penh for customized details.</p>
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
                                <p class="answer">A:  We currently export to international markets, including Russia, and
                                    are expanding globally to bring Cambodian agricultural products to buyers worldwide.
                                </p>
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
                                <p class="question"><span>Q:</span> How does RSL Trading ensure product quality and safe
                                    delivery?</p>
                                <p class="answer">A: All Cambodian products are carefully sourced, inspected, and packaged
                                    to meet international standards. As an affiliate of RSL Global Logistics, we
                                    professionally handle cargo, shipping, and export documentation to ensure smooth
                                    delivery worldwide.
                                </p>
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
                                <p class="answer">A:  Yes. We can accommodate custom packaging and labeling to meet the
                                    requirements of international buyers.</p>
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
                                <p class="answer">A: Buyers can contact RSL Trading in Phnom Penh via our website, phone,
                                    or email. Our team will guide you through product selection, pricing, shipping, and
                                    customs documentation.
                                </p>
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
                                        <p class="answer">A: Farmers from across Cambodia can partner with RSL Trading to
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
                                        <p class="answer">A:   We assess local and international market prices and provide
                                            competitive, transparent rates to help Cambodian farmers earn sustainable
                                            income.</p>
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
                                        <p class="answer">A:   We help farmers access global markets, provide fair and
                                            transparent pricing, and offer guidance on agricultural best practices and
                                            quality improvements.</p>
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
                                        <p class="answer">A:   RSL Trading works with rice, coffee, corn, cashew nuts,
                                            mangoes, cassava, and other agricultural products that meet international
                                            quality standards.</p>
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
                                        <p class="answer">A:   We assess local and international market prices and provide
                                            competitive, transparent rates to help Cambodian farmers earn sustainable
                                            income.</p>
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

    {{-- contact --}}
    <section class="relative z-[50]">
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


@endsection


@section('home')
    <script src="{{ asset('assets/js/home.js') }}"></script>
@endsection
