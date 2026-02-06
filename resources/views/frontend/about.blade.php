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
          .first-card-background img {
        height: 140vh; /* exactly one viewport height */
        width: 100%;   /* scale width proportionally */
        object-fit: cover; /* cover whole section */
    }
    }


    @media screen and (max-width: 1440px) and (min-width: 1025px) {
        .first-card {
            position: relative;
            width: 100%;
            height: 180vh;
            padding-top: 18rem;
            margin-top: -13% !important;
        }
         .first-card-background img {
        height: 140vh; /* exactly one viewport height */
        width: 100%;   /* scale width proportionally */
        object-fit: cover; /* cover whole section */
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
        height: 180vh;
    }

    /* Mobile only */
@media (max-width: 768px) {
    .first-card-background img {
        height: 170vh;
    }
}
@media (max-width: 426px) {
    .first-card-background img {
        height: 100vh;
    }
}
    /* 4K and large monitors */
    @media screen and (min-width: 2560px) {
    .first-card-background img {
        height: 110vh; /* exactly one viewport height */
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

   
  

    .banner-content {
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
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

    .wrapper-banner .logo-video {
        display: flex;
        justify-content: center;
        align-items: center;

    }

    .wrapper-banner .home-banner-logo {
        width: 400px !important;
    }

   

    .first-card {
        /* position: relative;
        width: 100%;
        height: 100%; */
        margin-top: -10% !important;
    }

    @media screen and (max-width: 1025px) {
       

    }

    @media screen and (max-width: 769px) {
      

      

       

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
            /* margin-top: 55% !important; */
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
        margin-top: -1300px; 
    }
}
 @media screen and (min-width: 1024px) and (max-width: 2517px) {
    .-mt-4k {
        margin-top: -320px; 
    }
}


 @media screen and (min-width: 2560px) {
    .m-4kk {
        margin-top: 300px; 
    }
}
@media screen and (max-width: 768px) {
    .founder-section {
        margin-top: 350px !important;
        position: relative;
        z-index: 1;
    }
    
}
@media screen and (max-width: 426px) {
    .founder-section {
        margin-top: 30px !important;
        position: relative;
        z-index: 1;
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
        <video autoplay muted loop playsinline class="absolute banner-img inset-0 z-[-10] object-cover w-full h-full "
            poster="fallback-image.jpg">
            <source src="{{ url('assets/videos/bg.mp4') }}" type="video/mp4" class="banner-des">
            <source src="{{ url('assets/videos/bg.webm') }}" type="video/webm">
        </video>
        <div class="wrapper-banner">
            <div class="logo-video">
                <video id="logoVideo" autoplay muted loop playsinline class="home-banner-logo">
                    <source src="{{ asset('assets/videos/LOGO.webm') }}" type="video/webm">
                </video>
                <img id="logoImg" src="{{ asset('assets/images/logo.png') }}" class="home-banner-logo" alt="Logo">
                <video src="">
                    <source src="{{ url('assets/videos/bg-rsl/bg-rsl-mobile/bg-apple-rsl.mp4') }}" type="video/mp4" class="">
                </video>
            </div>
            <div class="banner-content md:mt-0 -mt-14">
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


        <div class="home-banner-context md:mt-0 mt-44">
            {{-- <h5 class="popup">{{ __('messages.home') }}</h5>
            <h5 class="uppercase md:mt-0 mt-6" data-aos="zoom-in-up" data-aos-duration="1000">{{ app()->getLocale() === 'en' ? 'Welcome to' : (app()->getLocale() === 'km' ? 'សូមស្វាគមន៍មកកាន់' : '欢迎来到') }}</h5>
            <h1 data-aos="zoom-in-up" data-aos-duration="1200" class="{{ app()->getLocale() === 'km' ? 'khmer-title' : 'english-title' }}">{{ app()->getLocale() === 'en' ? 'RSL TRADING' : (app()->getLocale() === 'km' ? 'ក្រុមហ៊ុន អ អេស អិល ត្រេឌីង ឯ.ក' : 'RSL 贸易有限公司') }}</h1>
            <h3 data-aos="zoom-in-up" data-aos-duration="1400">{{ app()->getLocale() === 'en' ? 'Health Life Future' : (app()->getLocale() === 'km' ? 'សុខភាព ជីវិត អនាគត' : '健康 生活 未来') }}</h3>

            <button class="btn-explore-our-exports md:mt-0 -mt-5" data-aos="zoom-in-up" data-aos-duration="1600">
                <img src="{{ asset('assets/images/btn-submit-bg.png') }}">
                <p><a href="{{ route('export') }}#rice">{{ app()->getLocale() === 'en' ? 'Explore Our Products' : (app()->getLocale() === 'km' ? 'ពត៌មានបន្ថែមអំពីការនាំចេញ' : '探索我们的出口业务') }}</a></p>
            </button> --}}

             <div class="banner-content md:mt-0 mt-2">
                <div class="main-banner-h1-bg">
                    <h1 data-aos="zoom-in-up" data-aos-duration="1000" class="{{ app()->getLocale() === 'km' ? 'font-moul md:mt-0 mt-14 km-title' : '' }}">{{ app()->getLocale() === 'en' ? 'About Us' : (app()->getLocale() === 'km' ? 'អំពីយើងខ្ញុំ' : '公司简介') }}</h1>
                </div>
                <div class="main-banner-p-bg">
                    <p data-aos="zoom-in-up" data-aos-duration="1200" class="pt-6">{{ app()->getLocale() === 'en' ? '​​Your Trusted Partner in Cambodian Agricultural Exports' : (app()->getLocale() === 'km' ? 'យើងខ្ញ៉ំជាដៃគូដែលអតិថិជនអាចទុកចិត្តក្នុងការនាំចេញផលិតផលកសិកម្មរបស់កម្ពុជា។' : '我们是您值得信赖的柬埔寨农产品出口合作伙伴') }}</p>
                </div>
                <a data-aos="zoom-in-up" data-aos-duration="1400" href="#first-card"><button class="btn-Interest-to-export"> {{ app()->getLocale() === 'en' ? 'Interest to Export' : (app()->getLocale() === 'km' ? 'ចំណាប់អារម្មណ៍ក្នុងការនាំចេញ' : '兴趣出口') }}</button></a>
            </div>
        </div>
    </div>
</section>



<section>
    <div class="first-card">
        <div class="first-card-background">
            <img src="{{ asset('assets/images/bg-1.png') }}" class="-z-40">
        </div>
        <div class="md:mt-1 m-4kk">
            <div class="relative mx-auto max-w-6xl px-4 md:px-80 -mt-14">
                <div class="gap-b-32 space-y-8">
                    {{-- Vision --}}
                    <div class="relative mx-auto min-h-14 md:mb-12 max-w-4xl md:py-0 py-2">
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
                                        {{ app()->getLocale() === 'en' ? 'Vision' : (app()->getLocale() === 'km' ? 'ចក្ខុវិស័យ' : '愿景') }}
                                    </h2>

                                    <div class="leading-3 text-[8px] sm:text-sm lg:text-base">

                                        <p class="">
                                            {!! app()->getLocale() === 'en'
                                            ? 'Everyone has Better Health, Longer Life &amp;<br class="hidden sm:block"> Greater Future.'
                                            : (app()->getLocale() === 'km'
                                            ? 'គ្រប់គ្នាមានសុខភាពល្អជាងមុន អាយុវែងជាងមុន និងអនាគត<br class="hidden sm:block">អស្ចារ្យជាងមុន។'
                                            : '每个人都拥有更健康、更长寿与更美好的未来。') !!}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Mission --}}
                    <div class="relative mx-auto min-h-14 my-1 mb-20 max-w-4xl md:py-0 py-2">

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
                                       {{ app()->getLocale() === 'en' ? 'Mission' : (app()->getLocale() === 'km' ? 'បេសកកម្ម ' : '使命宣言') }}
                                    </h2>

                                    <div class="leading-3 text-[8px] sm:text-sm lg:text-base">
                                        <p>
                                            {!! app()->getLocale() === 'en'
                                            ? 'To find the BEST quality products with reasonable <br/> price for customers.'
                                            : (app()->getLocale() === 'km'
                                            ? 'ស្វែងរកផលិតផលគុណភាពល្អបំផុតជាមួយតម្លៃសមរម្យសម្រាប់អតិថិជន។'
                                            : '为客户寻找最优质、价格合理的产品。') !!}
                                            <br>

                                            {!! app()->getLocale() === 'en'
                                            ? 'To Bring <span class="font-bold text-green-600">“Made in Cambodia”</span> to THE WORLD.'
                                            : (app()->getLocale() === 'km'
                                            ? 'នាំ <span class="font-bold text-green-600">“ផលិតនៅកម្ពុជា”</span>ទៅកាន់ពិភពលោក។'
                                            : '将 <span class="font-bold text-green-600">“柬埔寨制造”</span> 推向世界。') !!}
                                            <br>

                                            {{ app()->getLocale() === 'en'
                                                    ? 'To Help Farmer to get more jobs and better incomes. '
                                                    : (app()->getLocale() === 'km'
                                                        ? 'ជួយកសិករឲ្យមានការងារច្រើនជាងមុន និងចំណូលប្រសើរជាងមុន។'
                                                        : '帮助农民获得更多工作和更好收入。') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Core Values --}}
                    {{-- <div class="relative text-center mt-2 py-2 md:py-0">
                        
                        <img 
                            src="{{ asset('assets/about-core/core-value-style-kh/bg-corevalues.svg') }}" 
                            alt="Core Values Background"
                            class="mx-auto w-full max-w-md md:max-w-2xl"
                        >

                     
                        <div class="absolute inset-0 flex items-center justify-center">
                            <h3
                                class="mv-title-mission
                                    text-lg sm:text-2xl md:text-3xl
                                    font-extrabold tracking-tight text-black
                                    px-4 text-center">
                                {{ app()->getLocale() === 'en'
                                    ? 'Core Values'
                                    : (app()->getLocale() === 'km'
                                        ? 'គុណតម្លៃស្នូល'
                                        : '核心价值观') }}
                            </h3>
                        </div>
                    </div> --}}

                    <div class="relative top-[20px] md:top-20 mx-auto min-h-14 my-1 mb-20 max-w-4xl md:py-0 py-2">

                        {{-- Background image (BEHIND text) --}}
                        <div class="absolute inset-0 z-0 flex items-center justify-center pointer-events-none">
                            <img
                                src="{{ asset('assets/about-core/core-value-style-kh/bg-corevalues.svg') }}"
                                alt=""
                                class="lg:w-[1000px] object-contain" />
                        </div>
                        {{-- Card content (ABOVE image) --}}
                        <div class="mv-card relative z-20">
                            <div class="flex items-center gap-2 md:gap-6 ">
                                <div
                                    class="max-w-10 sm:max-w-12 md:max-w-16 flex items-center text-orange-500 ml-[19%] md:ml-[18%]">
                                    {{-- icon --}}
                                    <img class="w-full ml-[-12px]" src="{{ asset('assets/about-core/core-value-style-kh/icon-corevalue.svg') }}" alt="">
                                </div>

                                <div class="mv-title-mission md:mt-0 md:ml-[20px] text-lg leading-[10px] sm:text-2xl md:text-3xl font-extrabold tracking-tight text-[#79c259]">
                                   {{ app()->getLocale() === 'en' ? 'Core Values' : (app()->getLocale() === 'km' ? 'គុណតម្លៃស្នូល' : '核心价值观') }}
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="relative top-[-6px] md:top-[80px] lg:top-[100px] max-w-[600px] md:max-w-[750px] lg:max-w-[1200px] mx-auto {{ app()->getLocale() === 'km' ? 'left-2' : '' }}">
                        <img src="{{ asset(
                            app()->getLocale() === 'en' ? 'assets/about-core/core-value-style-kh/core-value-en.svg'
                                : (app()->getLocale() === 'km' ? 'assets/about-core/core-value-style-kh/core-value-khmer-1.svg'
                                : 'assets/about-core/core-value-style-kh/core-value-chin-1.svg')
                        ) }}" alt="" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="founder-section relative md:mt-[120px] -mt-4k z-[999]">
    <div class="lg:mt-[25rem] text-center flex flex-col gap-2 items-center justify-center max-w-7xl mx-auto px-2 ">
        <img src="{{ asset('assets/profile-team/1-new.png') }}" class="w-72 h-72 rounded-full object-contain p-1">
        <h5 class="text-[20px] md:text-[25px] font-[700] text-[#059848]">{{ app()->getLocale() === 'en' ? 'MESSAGE FROM FOUNDER' : (app()->getLocale() === 'km' ? 'សារពីស្ថាបនិក' : '董事会寄语 ') }}</h5>
        <div class="p-bg">
            <p class="{{ app()->getLocale() === 'km'
                    ? 'max-w-4xl'
                    : 'max-w-4xl' 
                }} text-left">
                {{ app()->getLocale() === 'en' ? 'At the heart of our mission is a commitment to global well-being. By providing premium, high-quality
                    products, we aim to enhance longevity and health for people everywhere. We are dedicated to serving
                    and supporting our global community indefinitely, ensuring a thriving future for all humanity.' 
                    : (app()->getLocale() === 'km' ? 'យើងខ្ញ៉ំនឹងជ្រើសរើសផលិតផលល្អៗដែលមានគុណភាពខ្ពស់ ធ្វើឱ្យប្រជាជនជុំវិញពិភពលោក មានសុខភាពល្អ អាយុវែង ហើយយើងខ្ញ៉ំនឹងតាមបម្រើ តាមការពារ និងតាមថែរក្សាពួកគាត់ជារៀងរហូតតាមរយៈការផ្គត់ផ្គង់ផលិតផល ដើម្បីអនាគតដ៏អស្ចារ្យសម្រាប់មនុស្សជាតិ៚' 
                    : '我们使命的核心是致力于全球福祉。通过提供优质的产品，我们的目标是为世界各地的人们延长寿命和健康。我们致力于无限期地服务和支持我们的全球社区，确保全人类繁荣的未来。') }}
            </p>
            <div class="text-black inline-block px-4 py-1 text-sm font-semibold mt-1">
                
                {{ app()->getLocale() === 'en' ? 'Warm Regards,' : (app()->getLocale() === 'km' ? 'ដោយក្តីគោរព' : '温暖的问候，') }}
            </div>
            <p class="mt-3 text-[20px] font-bold">
                
                {{ app()->getLocale() === 'en' ? 'Mr. REACH SOTHORN' : (app()->getLocale() === 'km' ? 'លោក រាជ​ សុធន' : 'Reach Sothorn 先生') }}
            </p>
           
        </div>
    </div>
</section>

<section>
  
    <section class="relative w-full overflow-hidden">
         <h1 class="text-center text-2xl text-[#059848] mt-12 font-bold">{{ app()->getLocale() === 'en' ? 'OUR FOUNDING TEAM' : (app()->getLocale() === 'km' ? 'ស្ថាបនិក និងសហស្ថាបនិក' : '创始团队') }}</h1>
    <!-- Content -->
    <div class="relative max-w-6xl mx-auto px-6 py-20 md:space-y-20 space-y-6">

        <!-- PERSON 1 -->
        <div class="flex md:flex-row flex-col items-center gap-10">
            <!-- Diamond Image -->
            <div class="relative w-[260px] lg:w-72 h-60 md:h-44 lg:h-56 rotate-45 flex items-center justify-center">
                <img src="{{ asset('assets/profile-team/1-new.png') }}"
                    class="w-full h-full object-cover rotate-[-45deg]"
                    alt="">
                
            </div>

            <!-- Text -->
            <div class="text-black w-full md:max-w-5xl">
                <h3 class="text-xl md:text-2xl font-bold uppercase">
                      {{ app()->getLocale() === 'en' ? 'Mr. Reach Sothorn' : (app()->getLocale() === 'km' ? 'លោក រាជ សុធន' : 'Reach Sothorn 先生') }}
                </h3>
                <div class="text-white inline-block bg-[linear-gradient(135deg,#41a346,#65b045,#84bf41)] px-4 py-1 text-sm font-semibold mt-1">
                    
                      {{ app()->getLocale() === 'en' ? 'Founder' : (app()->getLocale() === 'km' ? 'ស្ថាបនិក' : '创始人') }}
                </div>
                <p class="mt-3 text-base">
                    
                    {{ app()->getLocale() === 'en' ? 'Mr. Sothorn has over 20 years in Shipping & Logistics Industry.' : (app()->getLocale() === 'km' ? 'លោក សុធន មានបទពិសោធន៍ជាង 20 ឆ្នាំក្នុងវិស័យដឹកជញ្ជូន។' : 'Sothorn先生在航运和物流行业拥有超过20年的经验。') }}
                </p>
            </div>
        </div>

        <!-- PERSON 2 -->
        <div class="flex md:flex-row flex-col items-center gap-10 justify-center lg:ml-32">
            <div class="relative w-[260px] lg:w-72 h-60 md:h-44 lg:h-56 rotate-45 flex items-center justify-center">
                <img src="{{ asset('assets/profile-team/2-new.png') }}"
                    class="w-full h-full object-cover rotate-[-45deg]"
                    alt="">
                
            </div>

            <div class="text-black w-full md:max-w-5xl">
                <h3 class="text-xl lg:text-2xl font-bold ">
                    {!! app()->getLocale() === 'en' ? '<span class="uppercase">Mr. Chov Sombath</span> (Mike)' : (app()->getLocale() === 'km' ? 'លោក ចូវ សម្បត្តិ (ម៉ៃ)' : 'Chov Sambath (Mike) 先生') !!}
                </h3>
                <div class="text-white inline-block bg-[linear-gradient(135deg,#41a346,#65b045,#84bf41)] px-4 py-1 text-sm font-semibold mt-1">
                    
                    {{ app()->getLocale() === 'en' ? 'Co-Founder' : (app()->getLocale() === 'km' ? 'សហស្ថាបនិក' : '联合创始人') }}
                </div>
                <p class="mt-3 text-base">
                   
                    {{ app()->getLocale() === 'en' ? ' Mr. Mike has over 13 years in Logistics & Supply Chain Management.' : (app()->getLocale() === 'km' ? 'លោក ម៉ៃ មានបទពិសោធន៍ជាង ១៣ ឆ្នាំក្នុងវិស័យដឹកជញ្ជូន និងការគ្រប់គ្រងខ្សែច្រវាក់ផ្គត់ផ្គង់។' : 'Mike 先生有超过13年的物流和供应链管理经验。') }}
                </p>
            </div>
        </div>

        <!-- PERSON 3 -->
        <div class="flex md:flex-row flex-col items-center gap-10">
            <div class="relative w-[260px] lg:w-72 h-60 md:h-44 lg:h-56 rotate-45 flex items-center justify-center">
                <img src="{{ asset('assets/profile-team/3.png') }}"
                    class="w-full h-full object-cover rotate-[-45deg]"
                    alt="">
                
            </div>

            <div class="text-black w-full md:max-w-5xl">
                <h3 class="text-xl md:text-2xl font-bold uppercase">
                      {{ app()->getLocale() === 'en' ? 'Mr. Chheng Sony' : (app()->getLocale() === 'km' ? 'លោក ឆេង សូនី' : 'Chheng Sony 先生') }}
                </h3>
                <div class="text-white inline-block bg-[linear-gradient(135deg,#41a346,#65b045,#84bf41)] px-4 py-1 text-sm font-semibold mt-1">
                    {{ app()->getLocale() === 'en' ? 'Co-Founder' : (app()->getLocale() === 'km' ? 'សហស្ថាបនិក' : '联合创始人') }}
                </div>
                <p class="mt-3 text-base">
                    
                    {{ app()->getLocale() === 'en' ? 'Mr. Sony has over 15 years in Agriculture Industry.' : (app()->getLocale() === 'km' ? 'លោក សូនី មានបទពិសោធន៍ជាង ១៥ ឆ្នាំក្នុងវិស័យកសិកម្ម។' : 'Sony 先生 在农业领域拥有超过15年的经验行业经验。') }}
                </p>
            </div>
        </div>

         <!-- PERSON 2 -->
        <div class="flex md:flex-row flex-col items-center gap-10 justify-center lg:ml-32">
            <div class="relative w-[260px] lg:w-72 h-60 md:h-44 lg:h-56 rotate-45 flex items-center justify-center">
                <img src="{{ asset('assets/profile-team/4.png') }}"
                    class="w-full h-full object-cover rotate-[-45deg]"
                    alt="">
                
            </div>

            <div class="text-black w-full md:max-w-5xl">
                <h3 class="text-xl lg:text-2xl font-bold">
                    {!! app()->getLocale() === 'en' ? '<span class="uppercase">Ms. SRUN PHECHLANG</span> (Jessie)' : (app()->getLocale() === 'km' ? 'កញ្ញា ស្រ៊ុន ផិចឡាង(Jessie)' : 'Srun Phechlang (Jessie) 女士') !!}
                </h3>
                <div class="text-white inline-block bg-[linear-gradient(135deg,#41a346,#65b045,#84bf41)] px-4 py-1 text-sm font-semibold mt-1">
                     {{ app()->getLocale() === 'en' ? 'Co-Founder' : (app()->getLocale() === 'km' ? 'សហស្ថាបនិក' : '联合创始人') }}
                </div>
                <p class="mt-3 text-base">
                    
                    {{ app()->getLocale() === 'en' ? 'Ms. Jessie has over 15 years in Accounting & Finance Management.' : (app()->getLocale() === 'km' ? 'កញ្ញា ផិចឡាង មានបទពិសោធន៍ជាង ១៥ ឆ្នាំក្នុងការគ្រប់គ្រងគណនេយ្យ និងហិរញ្ញវត្ថុ។' : 'Jessie 女士在会计和财务管理领域拥有超过 15 年的经验。') }}
                </p>
            </div>
        </div>

    </div>
</section>

</section>

<section>
    <div class="credentail-card-title">
        <h1>{{ app()->getLocale() === 'en' ? 'Business Credential Licenses' : (app()->getLocale() === 'km' ? 'ឯកសារផ្លូវការរបស់ក្រុមហ៊ុន' : '营业执照') }}</h1>
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
    <div class="flex lg:flex-row flex-col justify-center items-center gap-8 max-w-8xl mx-auto px-2">

    <div class="flex items-center bg-white p-4 rounded-xl shadow-lg hover:shadow-2xl transition duration-300">
        <img
            src="{{ asset('assets/images/credentail-1.png') }}"
            class="md:h-[420px] w-auto object-contain rounded-md border"
            alt="Certificate 1">
    </div>

    <div class="flex items-center bg-white p-4 rounded-xl shadow-lg hover:shadow-2xl transition duration-300">
        <img
            src="{{ asset('assets/images/credentail-2.png') }}"
            class="md:h-[420px] w-auto object-contain rounded-md border"
            alt="Certificate 2">
    </div>

    <div class="flex items-center bg-white p-4 rounded-xl shadow-lg hover:shadow-2xl transition duration-300">
        <img
            src="{{ asset('assets/cartificate/4.png') }}"
            class="md:h-[420px] w-auto object-contain rounded-md border"
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