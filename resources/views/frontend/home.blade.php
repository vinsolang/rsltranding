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

{{-- banner --}}
<section>
    <div class="main-banner bg-cover relative">
        <video autoplay muted loop playsinline class="absolute inset-0 z-[-10] object-cover w-full h-full"
            poster="fallback-image.jpg">
            <source src="{{ url('assets/videos/bg.mp4') }}" type="video/mp4">
            <source src="{{ url('assets/videos/bg.webm') }}" type="video/webm">
        </video>
        {{-- <img class="img-banner" src="{{ asset('assets/images/banner-img-1.png') }}"> --}}
        <video id="logoVideo" autoplay muted loop playsinline preload="auto" class="home-banner-logo hidden">
            <source src="{{ asset('assets/videos/bg-rsl/LOGO-koko.mp4') }}" type="video/webm">
        </video>

        <img id="logoImg" src="{{ asset('assets/images/logo.png') }}" class="home-banner-logo" alt="Logo">


        <div class="home-banner-context">
            {{-- <h5 class="popup">{{ __('messages.home') }}</h5> --}}
            <h5 class="uppercase" data-aos="zoom-in-up" data-aos-duration="1000">{{ app()->getLocale() === 'en' ? 'Welcome to' : (app()->getLocale() === 'km' ? 'សូមស្វាគមន៍មកកាន់' : '欢迎来到') }}</h5>
            <h1 data-aos="zoom-in-up" data-aos-duration="1200" class="{{ app()->getLocale() === 'km' ? 'khmer-title' : 'english-title' }}">{{ app()->getLocale() === 'en' ? 'RSL TRADING' : (app()->getLocale() === 'km' ? 'ក្រុមហ៊ុន អ អេស អិល ត្រេឌីង ឯ.ក' : 'RSL 贸易有限公司') }}</h1>
            <h3 data-aos="zoom-in-up" data-aos-duration="1400">{{ app()->getLocale() === 'en' ? 'Health Life Future' : (app()->getLocale() === 'km' ? 'សុខភាព ជីវិត អនាគត' : '健康 生活 未来') }}</h3>

            <button class="btn-explore-our-exports" data-aos="zoom-in-up" data-aos-duration="1600">
                <img src="{{ asset('assets/images/btn-submit-bg.png') }}">
                <p><a href="{{ route('export') }}#rice">{{ app()->getLocale() === 'en' ? 'Explore Our Products' : (app()->getLocale() === 'km' ? 'ពត៌មានបន្ថែមអំពីការនាំចេញ' : '探索我们的出口业务') }}</a></p>
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
        class=" relative z-20 w-full h-full max-w-8xl mx-auto flex flex-col items-center justify-center text-center font-[700] pt-72">

        <h2 class="text-[#8DC640] text-[20px] md:text-[25px] welcome-to-text">{{ app()->getLocale() === 'en' ? 'Welcome to' : (app()->getLocale() === 'km' ? 'សូមស្វាគមន៍មកកាន់' : '欢迎来到') }}</h2>

        <h1 class="text-[30px] md:text-[50px] text-[#059848] leading-tight fw-bolder {{ app()->getLocale() == 'km' ? 'text-xl md:text-2xl' : 'text-[30px] md:text-[50px]' }}">
            {{ app()->getLocale() === 'en' ? 'RSL TRADING' : (app()->getLocale() === 'km' ? 'ក្រុមហ៊ុន អ អេស​ អិល ត្រេឌីង ឯ.ក' : 'RSL 贸易有限公司') }}
        </h1>

        <p class="text-[14px] md:text-[16px] font-[400] pt-4 md:px-10 {{ app()->getLocale() === 'km'
                    ? 'max-w-5xl'
                    : 'max-w-6xl'
                }}">
            {{ app()->getLocale() === 'en' ? 'Founded in 2015, RSL Trading Co., LTD. focuses on Agriculture Products for Local and International Markets,
                dedicated to connecting local farmers with us to bring agriculture products such as Rice, Coffee, Pepper,
                Banana, Cashew Nuts, Mango, Dried Mango, Dried Cassava and other several local products to buyers worldwide
                while supporting them for better opportunities and incomes.'
                : (app()->getLocale() === 'km' ? ' ក្រុមហ៊ុន អ អេស​ អិល ត្រេឌីង ឯ.ក ត្រូវបានបង្កើតឡើងក្នុងឆ្នាំ ២០១៥ ​ដោយ
                ផ្តោតនាំចេញផលិតផលកសិកម្មលក់លើទីផ្សារទីផ្សារក្នុងស្រុក និងទីផ្សារអន្តរជាតិ ផ្សាភ្ជាប់ទំនាក់ទំនងជាមួយកសិករក្នុងស្រុកដើម្បីនាំយកផលិតផលកសិកម្មដូចជា
                អង្ករ កាហ្វេ ម្រេច ចេក គ្រាប់ស្វាយចន្ទី ដំណាប់ស្វាយ ដំឡូងមី និងផលិតផលជាច្រើនទៀត ព្រមទាំងផ្ដល់ការគាំទ្រដល់ពួកគាត់សម្រាប់ការ ប្រមូលផល
                និងជួយបង្កើតប្រាក់ចំណូលកាន់តែប្រសើរ។'
                : 'RSL贸易有限公司成立于2015年，专注于本地和国际市场的农产品，致力于将当地农民与我们联系起来，将大米，咖啡，胡椒，香蕉，腰果，芒果，芒果干，木薯干等几种当地产品带给全球买家，同时支持他们获得更好的机会和收入。') }}
        </p>

        {{-- <p class="text-[14px] md:text-[16px] font-[400] pt-4 md:px-10 {{ app()->getLocale() === 'km'
                    ? 'max-w-5xl'
                    : 'max-w-6xl'
                }}">
        {{ app()->getLocale() === 'en' ? 'Founded in 2015, RSL Trading connects Cambodian farmers with global markets. We specialize in exporting agricultural products such as rice, coffee, corn, cashew nuts and tropical fruits to countries worldwide. So far, we have successfully exported 3 tons of coffee beans to Russia through our coffee bean processing partner in Siem Reap.'
                : (app()->getLocale() === 'km' ? ' ក្រុមហ៊ុន អ អេស​ អិល ត្រេឌីង ឯ.ក ត្រូវបានបង្កើតឡើងក្នុងឆ្នាំ ២០១៥ ​ដោយ
                ផ្តោតនាំចេញផលិតផលកសិកម្មលក់លើទីផ្សារទីផ្សារក្នុងស្រុក និងទីផ្សារអន្តរជាតិ ផ្សាភ្ជាប់ទំនាក់ទំនងជាមួយកសិករក្នុងស្រុកដើម្បីនាំយកផលិតផលកសិកម្មដូចជា
                អង្ករ កាហ្វេ ម្រេច ចេក គ្រាប់ស្វាយចន្ទី ដំណាប់ស្វាយ ដំឡូងមី និងផលិតផលជាច្រើនទៀត ព្រមទាំងផ្ដល់ការគាំទ្រដល់ពួកគាត់សម្រាប់ការ ប្រមូលផល
                និងជួយបង្កើតប្រាក់ចំណូលកាន់តែប្រសើរ។'
                : 'RSL贸易有限公司成立于2015年，专注于本地和国际市场的农产品，致力于将当地农民与我们联系起来，将大米，咖啡，胡椒，香蕉，腰果，芒果，芒果干，木薯干等几种当地产品带给全球买家，同时支持他们获得更好的机会和收入。') }}
        </p> --}}

        <div class="w-full flex flex-col lg:flex-col items-center ">

            <!-- Google Map (TOP) -->
            {{-- <div class=" w-[400px] md:w-[900px] lg:w-[500px] h-52 lg:h-48">
                <iframe
                    src="https://www.google.com/maps?q=11.587,104.8988611&z=16&output=embed"
                    class="w-full h-full rounded-lg"
                    style="border:0;"
                    allowfullscreen
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div> --}}

            <!-- Image (BOTTOM) -->
            <div class="w-full max-w-[1000px] mb-48">
                <img
                    src="{{ asset('assets/images/map-3.png') }}"
                    alt="Map Image"
                    class="w-full h-auto mx-auto rounded-lg">
            </div>

        </div>


    </div>
</section>

{{-- Why We Started --}}
<section>
    <div class="we-start">
        <img class="we-start-bg" src="{{ asset('assets/images/bg-2.png') }}">
        <div class="we-start-context">
            <div class="-mt-[6rem] 2xl:-mt-[10rem]" class="context-one">
                <h5 class="!text-[20px] md:!text-[30px] !text-[#059848] !text-center">{{ app()->getLocale() === 'en' ? 'Why We Started ?' : (app()->getLocale() === 'km' ? 'មូលហេតុនៃការស្ថាបនា ?' : '创办这家公司的原因?') }}</h5>
                <p>{{ app()->getLocale() === 'en' ? '“We help local farmers by creating global opportunities for Cambodian agricultural products.”' : (app()->getLocale() === 'km' ? '“យើងខ្ញុំជួយកសិករក្នុងស្រុកដោយបង្កើតឱកាសសម្រាប់ការលក់ផលិតផលកសិកម្មផលិតដោយកូនខ្មែរ។”' : '“我们通过为柬埔寨的农产品创造全球市场机会，来帮助当地的农民。”') }}</p>
            </div>
        </div>

        <div class="we-start-person-none">
            <img src="{{ asset('assets/logo/person-rice-photo.png') }}">
        </div>

        <div class="we-start-person">
            <img src="{{ asset('assets/logo/person-rice-photo.png') }}" class="2xl:ml-40 ml-36 w-[50%] h-[60%]">


        </div>
    </div>
</section>

{{-- Commodities --}}
<section>
    <h5 class="text-[20px] md:text-[30px] text-[#059848] text-center pt-10">{{ app()->getLocale() === 'en' ? 'Our Main Products' : (app()->getLocale() === 'km' ? '' : '主要商品') }}</h5>
    <div class="container">
        <div class="row">

            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card">
                    <img src="{{ asset('assets/images/card-1.png') }}">
                    <div class="card-content">
                        <h4>{{ app()->getLocale() === 'en' ? 'Rice' : (app()->getLocale() === 'km' ? 'អង្ករ' : '大米') }}</h4>
                        <p>{{ app()->getLocale() === 'en' ? 'Premium export-quality rice carefully processed to meet international food standards.'
                                : (app()->getLocale() === 'km' ? 'អង្ករ​ដែល​មាន​គុណភាព​ខ្ពស់​សម្រាប់​នាំចេញ។'
                                : '优质出口级大米，经过精心加工，符合国际食品标准。') }}</p>

                        <div class="wrapper-card-content">
                            <a href="{{ route('our_product') }}#rice"><button class="btn-explore">{{ app()->getLocale() === 'en' ? 'Detail' : (app()->getLocale() === 'km' ? 'ស្វែងយល់បន្ថែម' : '了解更多') }}</button></a>
                            <h1>{{ app()->getLocale() === 'en' ? '.01' : (app()->getLocale() === 'km' ? '.០១' : '.01') }}</h1>
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
                        <h4>{{ app()->getLocale() === 'en' ? 'Roasted Coffee Bean' : (app()->getLocale() === 'km' ? 'កាហ្វេ' : '咖啡') }}</h4>
                        <p>{{ app()->getLocale() === 'en' ? 'High-quality Cambodian coffee beans roasted and prepared for global export markets.'
                                : (app()->getLocale() === 'km' ? 'គ្រាប់កាហ្វេកម្ពុជាកម្រិតខ្ពស់ត្រូវបានលីង និងរៀបចំសម្រាប់នាំចេញទៅកាន់ទីផ្សារពិភពលោក។'
                                : '高品质的柬埔寨咖啡豆经过精心烘焙和加工，以供全球出口市场使用。') }}</p>

                        <div class="wrapper-card-content">
                            <a href="{{ route('our_product') }}#coffee"><button class="btn-explore">{{ app()->getLocale() === 'en' ? 'Detail' : (app()->getLocale() === 'km' ? 'ស្វែងយល់បន្ថែម' : '了解更多') }}</button></a>
                            <h1>{{ app()->getLocale() === 'en' ? '.02' : (app()->getLocale() === 'km' ? '.០២' : '.02') }}</h1>
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
                        <h4>{{ app()->getLocale() === 'en' ? 'Corn' : (app()->getLocale() === 'km' ? 'ពោត' : '黄玉米') }}</h4>
                        <p>{{ app()->getLocale() === 'en' ? 'High-grade yellow corn suitable for animal feed, food processing, and industrial use.'
                                : (app()->getLocale() === 'km' ? 'ពោតលឿងគុណភាពខ្ពស់ ស័ក្តិសមសម្រាប់ចំណីសត្វ ការកែច្នៃអាហារ។​'
                                : '高品质的黄玉米，可用于动物饲料、食品加工以及工业用途。') }}</p>

                        <div class="wrapper-card-content">
                            <a href="{{ route('our_product') }}#rice"><button class="btn-explore">{{ app()->getLocale() === 'en' ? 'Detail' : (app()->getLocale() === 'km' ? 'ស្វែងយល់បន្ថែម' : '了解更多') }}</button></a>
                            <h1>{{ app()->getLocale() === 'en' ? '.03' : (app()->getLocale() === 'km' ? '.០៣' : '.03') }}</h1>
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
                    <img src="{{ asset('assets/products/cashew-nuts.jpg') }}" class="h-[208px] xl:h-[294px] object-cover">
                    <div class="card-content">
                        <h4>{{ app()->getLocale() === 'en' ? 'Cashew Nuts' : (app()->getLocale() === 'km' ? 'គ្រាប់ស្វាយចន្ទី' : '腰果') }}</h4>
                        <p>{{ app()->getLocale() === 'en' ? 'High-quality Cambodian cashew nuts suitable for global export markets.'
                                : (app()->getLocale() === 'km' ? 'គ្រាប់ស្វាយចន្ទីកម្ពុជាប្រកបដោយគុណភាពខ្ពស់ សមស្របសម្រាប់ទីផ្សារនាំចេញពិភពលោក។'
                                : ' 高品质的柬埔寨腰果，适合出口全球市场。') }}</p>

                        <div class="wrapper-card-content">
                            <a href="{{ route('our_product') }}#nuts"><button class="btn-explore">{{ app()->getLocale() === 'en' ? 'Detail' : (app()->getLocale() === 'km' ? 'ស្វែងយល់បន្ថែម' : '了解更多') }}</button></a>
                            <h1>{{ app()->getLocale() === 'en' ? '.04' : (app()->getLocale() === 'km' ? '.០៤' : '.04') }}</h1>
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
                        <h4>{{ app()->getLocale() === 'en' ? 'Cassava' : (app()->getLocale() === 'km' ? 'ដំឡូង/ដំឡូងមី' : '土豆/木薯') }}</h4>
                        <p>{{ app()->getLocale() === 'en' ? 'High-quality dried cassava for industrial processing and international export.'
                                : (app()->getLocale() === 'km' ? 'ដំឡូងមីស្ងួតប្រកបដោយគុណភាពខ្ពស់សម្រាប់កែច្នៃឧស្សាហកម្ម និងការនាំចេញអន្តរជាតិ។'
                                : '高品质的干木薯，可用于工业加工及国际出口。') }}</p>

                        <div class="wrapper-card-content">
                            <a href="{{ route('our_product') }}#root_crops"><button class="btn-explore">{{ app()->getLocale() === 'en' ? 'Detail' : (app()->getLocale() === 'km' ? 'ស្វែងយល់បន្ថែម' : '了解更多') }}</button></a>
                            <h1>{{ app()->getLocale() === 'en' ? '.05' : (app()->getLocale() === 'km' ? '.០៥' : '.05') }}</h1>
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
                        <h4>{{ app()->getLocale() === 'en' ? 'Mango' : (app()->getLocale() === 'km' ? 'ផ្លែស្វាយ' : '芒果') }}</h4>
                        <p>{{ app()->getLocale() === 'en' ? 'Export-quality fresh mangoes with rich flavor and natural sweetness.'
                                : (app()->getLocale() === 'km' ? 'ស្វាយស្រស់ៗ គុណភាពនាំចេញ ជាមួយនឹងរសជាតិឈ្ងុយឆ្ងាញ់ និងផ្អែមធម្មជាតិ។'
                                : '出口级新鲜芒果，味道浓郁，甜度自然。') }}</p>

                        <div class="wrapper-card-content">
                            <a href="{{ route('our_product') }}#fruits"><button class="btn-explore">{{ app()->getLocale() === 'en' ? 'Detail' : (app()->getLocale() === 'km' ? 'ស្វែងយល់បន្ថែម' : '了解更多') }}</button></a>
                            <h1>{{ app()->getLocale() === 'en' ? '.06' : (app()->getLocale() === 'km' ? '.០៦' : '.06') }}</h1>
                        </div>

                        <div class="card-content-logo">
                            <img src="{{ asset('assets/images/card-logo-6.png') }}">
                            <div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card">
                    <img src="{{ asset('assets/images/pepper1.png') }}">
                    <div class="card-content">
                        <h4>{{ app()->getLocale() === 'en' ? 'Pepper ' : (app()->getLocale() === 'km' ? '' : '') }}</h4>
                        <p>{{ app()->getLocale() === 'en' ? 'Premium Cambodian pepper known for its rich aroma and bold flavor, suitable for global food and spice markets.'
                                : (app()->getLocale() === 'km' ? 'ស្វាយស្រស់ៗ គុណភាពនាំចេញ ជាមួយនឹងរសជាតិឈ្ងុយឆ្ងាញ់ និងផ្អែមធម្មជាតិ។'
                                : '出口级新鲜芒果，味道浓郁，甜度自然。') }}</p>

                        <div class="wrapper-card-content">
                            <a href="{{ route('our_product') }}#fruits"><button class="btn-explore">{{ app()->getLocale() === 'en' ? 'Detail' : (app()->getLocale() === 'km' ? 'ស្វែងយល់បន្ថែម' : '了解更多') }}</button></a>
                            <h1>{{ app()->getLocale() === 'en' ? '.07' : (app()->getLocale() === 'km' ? '.០៧' : '.08') }}</h1>
                        </div>

                        <div class="card-content-logo">
                            <img src="{{ asset('assets/images/charcoalIcon.png') }}">
                            <div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card">
                    <img src="{{ asset('assets/products/charcoul.jpg') }}" class="object-cover md:h-[238px] lg:h-[207px] xl:h-[292px]">
                    <div class="card-content">
                        <h4>{{ app()->getLocale() === 'en' ? 'Charcoal' : (app()->getLocale() === 'km' ? '' : '') }}</h4>
                        <p>{{ app()->getLocale() === 'en' ? 'Standard Coconut Shell Charcoal and Black & White Charcoal for Local and International Demand.'
                                : (app()->getLocale() === 'km' ? 'Standard Coconut Shell Charcoal and Black & White Charcoal for Local and International Demand.'
                                : 'Standard Coconut Shell Charcoal and Black & White Charcoal for Local and International Demand.') }}</p>

                        <div class="wrapper-card-content">
                            <a href="{{ route('our_product') }}#fruits"><button class="btn-explore">{{ app()->getLocale() === 'en' ? 'Detail' : (app()->getLocale() === 'km' ? 'ស្វែងយល់បន្ថែម' : '了解更多') }}</button></a>
                            <h1>{{ app()->getLocale() === 'en' ? '.08' : (app()->getLocale() === 'km' ? '.៨' : '.08') }}</h1>
                        </div>

                        <div class="card-content-logo">
                            <img src="{{ asset('assets/images/charcoal.png') }}">
                            <div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card">
                    <img src="{{ asset('assets/products/plantation-wood.jpg') }}" class="object-cover h-[280px] md:h-[238px] lg:h-[207px] xl:h-[292px]">
                    <div class="card-content">
                        <h4>{{ app()->getLocale() === 'en' ? 'Plantation Wood' : (app()->getLocale() === 'km' ? 'Plantation Wood' : 'Plantation Wood') }}</h4>
                        <p>{{ app()->getLocale() === 'en' ? 'There are very good quality wood such as Acacia, Eucalyptus, Cashew and Rubber Wood will be wood log, wood chip, sawdust, sawtimber and wood pellets for export from here.'
                                : (app()->getLocale() === 'km' ? 'There are very good quality wood such as Acacia, Eucalyptus, Cashew and Rubber Wood will be wood log, wood chip, sawdust, sawtimber and wood pellets for export from here.'
                                : 'There are very good quality wood such as Acacia, Eucalyptus, Cashew and Rubber Wood will be wood log, wood chip, sawdust, sawtimber and wood pellets for export from here.') }}</p>

                        <div class="wrapper-card-content">
                            <a href="{{ route('our_product') }}#fruits"><button class="btn-explore">{{ app()->getLocale() === 'en' ? 'Detail' : (app()->getLocale() === 'km' ? 'ស្វែងយល់បន្ថែម' : '了解更多') }}</button></a>
                            <h1>{{ app()->getLocale() === 'en' ? '.09' : (app()->getLocale() === 'km' ? '.០៩' : '.09') }}</h1>
                        </div>

                        <div class="card-content-logo">
                            <img src="{{ asset('assets/images/pepperIcon.png') }}">
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

            <h4>{{ app()->getLocale() === 'en' ? 'Acheivement in Number' : (app()->getLocale() === 'km' ? 'សមិទ្ធផលជាតួលេខ' : '数量上的成就') }}</h4>

            <div class="container wrapper-achievement-card">
                <div class="flex md:flex-row flex-wrap justify-center items-center py-24">

                    {{-- <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                            <div class="achievement-card">
                                <div class="achievement-card-img">
                                    <img src="{{ asset('assets/images/achievement-card-img-1.png') }}">
                </div>

                <div class="achievement-card-content">
                    <h1
                        class="counter plus"
                        data-target="1000"
                        data-unit="{{ app()->getLocale() === 'km' ? 'នាក់' : '' }}">
                        0
                    </h1>
                    <p>{{ app()->getLocale() === 'en' ? 'local farmers supported' : (app()->getLocale() === 'km' ? 'គាំទ្រកសិករក្នុងស្រុកជាង' : '支持多名当地农民') }}</p>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-6 col-6 ">
            <div class="achievement-card">
                <div class="achievement-card-img">
                    <img src="{{ asset('assets/images/achievement-card-img-2.png') }}">
                </div>

                <div class="achievement-card-content">
                    <h1 class="counter no" data-target="5" data-unit="{{ app()->getLocale() === 'km' ? 'ទ្វីប' : '' }}">0</h1>
                    <p>{{ app()->getLocale() === 'en' ? 'Continents Export' : (app()->getLocale() === 'km' ? 'នាំចេញទៅកាន់ទ្វីបចំនួន' : '大洲出口') }}</p>
                </div>
            </div>
        </div>


        <div class="col-lg-4 col-md-6 col-sm-6 col-6">
            <div class="achievement-card">
                <div class="achievement-card-img">
                    <img src="{{ asset('assets/images/achievement-card-img-3.png') }}">
                </div>

                <div class="achievement-card-content">
                    <h1 class="counter plus" data-target="500" data-unit="{{ app()->getLocale() === 'km' ? 'ប្រភេទ' : '' }}">0</h1>
                    <p>{{ app()->getLocale() === 'en' ? 'Export Commodities' : (app()->getLocale() === 'km' ? 'ផលិតផលនាំចេញជាង' : '出口产品') }}</p>
                </div>
            </div>
        </div> --}}


        <div class="col-lg-4 col-md-6 col-sm-6 col-6">
            <div class="achievement-card">
                <div class="achievement-card-img">
                    <img src="{{ asset('assets/images/achievement-card-img-4.png') }}">
                </div>

                <div class="achievement-card-content">
                    <h1 class="counter plus" data-target="10" data-unit="{{ app()->getLocale() === 'km' ? 'ឆ្នាំ' : '' }}">0</h1>
                    <p>{{ app()->getLocale() === 'en' ? 'Years in Operation' : (app()->getLocale() === 'km' ? 'បទពិសោធន៍ប្រតិបត្តិការជាង' : '年以上运营经验') }}</p>
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
                    <p>{{ app()->getLocale() === 'en' ? 'Farmers Sources' : (app()->getLocale() === 'km' ? 'ប្រមូលទិញពីកសិករ' : '农民来源') }}</p>
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
                    <p>{{ app()->getLocale() === 'en' ? 'Communities Sources' : (app()->getLocale() === 'km' ? 'ប្រមូលទិញពីសហគមន៍' : '社区资源') }}</p>
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
        <img src="{{ asset('assets/logo/rsl-ac-home-style-1.png') }}" alt="">
         {{-- <img src="{{ asset('assets/logo/rsl-ac-home-style-1.png') }}" alt=""> --}}
    </div>
    </div>
</section>

{{-- faq --}}
<section>
    <div class="FAQ-background">
        <div class="container">
            <div class="FAQ-content">
                <h1>{{ app()->getLocale() === 'en' ? 'Frequently Asked Questions' : (app()->getLocale() === 'km' ? 'សំណួរដែលសួរញឹកញាប់' : '常见问题解答') }}</h1>
                <h5>{{ app()->getLocale() === 'en' ? 'For buyers/Importers' : (app()->getLocale() === 'km' ? 'សម្រាប់អ្នកទិញ/អ្នកនាំចូល' : '买家/进口商') }}</h5>
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="drop-down-card">
                        <div class="qanda">
                            <p class="question"><span>{{ __('messages.q') }}</span> {{ __('messages.q1') }}</p>
                            <p class="answer">{{ __('messages.a1') }}</p>
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
                            <p class="question"><span>{{ __('messages.q') }}</span> {{ __('messages.q2') }}
                            </p>
                            <p class="answer">{{ __('messages.a2') }}</p>
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
                            <p class="question"><span>{{ __('messages.q') }}</span> {{ __('messages.q3') }}</p>
                            <p class="answer">{{ __('messages.a3') }}
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
                            <p class="question"><span>{{ __('messages.q') }}</span> {{ __('messages.q4') }}</p>
                            <p class="answer">{{ __('messages.a4') }}
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
                            <p class="question"><span>{{ __('messages.q') }}</span> {{ __('messages.q5') }}</p>
                            <p class="answer">{{ __('messages.a5') }}</p>
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
                            <p class="question"><span>{{ __('messages.q') }}</span> {{ __('messages.q6') }}</p>
                            <p class="answer">{{ __('messages.a6') }}
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
                    <h5>{{ app()->getLocale() === 'en' ? 'For Sellers / Local Farmers' : (app()->getLocale() === 'km' ? 'សម្រាប់អ្នកលក់ / កសិករក្នុងស្រុក' : '卖家/本地农民') }}</h5>
                </div>
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="drop-down-card">
                                <div class="qanda">
                                    <p class="question"><span>{{ __('messages.q') }}</span> {{ __('messages.q7') }}</p>
                                    <p class="answer">{{ __('messages.a7') }}</p>
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
                                    <p class="question"><span>{{ __('messages.q') }}</span> {{ __('messages.q8') }}</p>
                                    <p class="answer">{{ __('messages.a8') }}</p>
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
                                    <p class="question"><span>{{ __('messages.q') }}</span> {{ __('messages.q9') }}</p>
                                    <p class="answer">{{ __('messages.a9') }}</p>
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
                                    <p class="question"><span>{{ __('messages.q') }}</span> {{ __('messages.q10') }}</p>
                                    <p class="answer">{{ __('messages.a10') }}</p>
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


                        <!-- <div class="col-lg-6 col-md-6 col-12">
                            <div class="drop-down-card">
                                <div class="qanda">
                                    <p class="question"><span>{{ __('messages.q') }}</span> {{ __('messages.q11') }}
                                    </p>
                                    <p class="answer">{{ __('messages.a11') }}</p>
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
                        </div> -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- contact --}}
<section class="relative z-[50]">
    @include('frontend.include.contact-form')
</section>


@endsection


@section('home')
<script src="{{ asset('assets/js/home.js') }}"></script>
@endsection
