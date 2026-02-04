
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
            height: 100%;
            width: 100%;
            top: 0;
            margin-top: -5.5rem;

        }

        .first-card-background img {
            object-fit: cover;
            width: 100%;
            height: 170vh;
        }



        @media screen and (max-width: 769px) {
            .first-card {
                margin-top: 6% !important;
            }
        }

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

        .card-product {
            position: relative;
            margin-top: -5rem;
        }

        .card-product .card-product-bg {
            width: 100%;
        }

        .card-product .card-product-detail-im {
            width: 100%;
            height: 480px;
            background-color: #D7FFEE;
            position: relative;
            margin-top: -5rem;
            border: #EEFFF8;
            border-radius: 20px;
            padding-left: 2rem;
            padding-right: 2rem;
            padding-top: 3rem;
            padding-bottom: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .card-product .card-product-detail-im h5 {
            font-weight: bolder;
            color: #059848;
            font-size: 20px;
        }

        .smaill-detail-card {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            position: relative;
        }



        .card-product .card-product-detail-im .smaill-detail-card button {
            color: #1E1E1E;
            font-size: 20px;
            width: 274px;
            max-width: 100%;
            height: 47px;
        }

        .card-product .card-product-detail-im .smaill-detail-card button a {
            color: #000000;
            text-decoration: none;
        }


        .card-product .card-product-detail-im .smaill-detail-card button:hover {
            background-color: #059848;
            color: #FFFFFF;
            width: 274px;
            max-width: 100%;
            height: 47px;
            border-radius: 23.5px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card-product .card-product-detail-im .smaill-detail-card button:hover a {
            color: #FFFFFF;
        }

        .card-product .card-product-detail-im .btn-card-interest-to-export {
            position: absolute;
            bottom: 5%;
            left: 50%;
            transform: translate(-50%);

        }

        .card-product .card-product-detail-im .btn-card-interest-to-export button {
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
            top: -7%;
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
            margin-top: 5rem;
            z-index: 10;
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
            font-size: 25px;
            color: #FFFFFF;
            font-weight: bolder;
            margin-bottom: 2.5rem;
            margin-top: 2.5rem;
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
                margin-top: 50% !important;
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
                margin-top: 70% !important;
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

    </style>
    <section id="first-card">
        <div class="first-card">
            <div class="main-card-product">
                <div class="container mt-[-400px] lg:mt-[-180px]">
                    <h2 class="text-[22px] sm:text-[28px] md:text-[36px] lg:text-[40px] text-[#059848] leading-tight fw-bolder pb-20 text-center">
                        {{ app()->getLocale() === 'en' ? 'Commodities' : (app()->getLocale() === 'km' ? 'ផលិតផល' : '商品') }}
                    </h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-y-20 gap-x-4">
                        {{-- item 1 --}}

                        <div class="" >
                            <div class="card-product" x-data="{
                                active: 'default',
                                products: {
                                    default: {
                                        title: '{{ app()->getLocale() === 'en' ? 'Premium Rice Varieties' : (app()->getLocale() === 'km' ? 'ពូជអង្ករលំដាប់ខ្ពស់' : '优质水稻品种') }}',
                                        desc: '{{ app()->getLocale() === 'en' ? 'High-quality imported aromatic and medium-grain rice varieties trusted by international buyers.' : (app()->getLocale() === 'km' ? 'ពូជអង្ករក្រអូបនាំចូល និងពូជអង្ករកម្រិតមធ្យមប្រកបដោយគុណភាពខ្ពស់ដែលអតិថិជនអាចទុកចិត្តបាន។' : '优质进口香米、中粒米品种，深受国际买家信赖。') }}',
                                        img: '{{ asset('assets/images/import/premium _rice.jpg') }}'
                                    },
                                    basmati: {
                                        title: '{{ app()->getLocale() === 'en' ? 'Basmati Rice (India)' : (app()->getLocale() === 'km' ? 'អង្ករបាសម៉ាទី (ឥណ្ឌា)' : '印度巴斯马蒂大米（印度）') }}',
                                        desc: '{{ app()->getLocale() === 'en' ? 'Premium long-grain basmati rice imported from India with rich aroma and superior quality.' : (app()->getLocale() === 'km' ? 'អង្ករបាសម៉ាទីគ្រាប់វែង នាំចូលពីប្រទេសឥណ្ឌា មានក្លិនក្រអូបឈ្ងុយឆ្ងាញ់ និងគុណភាពខ្ពស់។' : '印度进口优质长粒香米，香气浓郁，品质优越') }}',
                                        img: '{{ asset('assets/images/import/rice.jpg') }}'
                                    },
                                    corn: {
                                        title: '{{ app()->getLocale() === 'en' ? 'Yellow Corn' : (app()->getLocale() === 'km' ? 'ពោតលឿង' : '黄色玉米') }}',
                                        desc: '{{ app()->getLocale() === 'en' ? 'High-grade yellow corn suitable for food processing and animal feed.' : (app()->getLocale() === 'km' ? 'ពោតលឿងប្រកបដោយគុណភាពខ្ពស់ ស័ក្តិសមសម្រាប់កែច្នៃអាហារ និងចំណីសត្វ។' : '适用于食品加工和动物饲料的高档黄玉米。') }}',
                                        img: '{{ asset('assets/images/export-card-product-1.png') }}'
                                    }
                                }
                            }">
                                <!-- Image -->
                                <img class="card-product-bg h-[250px] object-cover" :src="products[active].img">

                                <div class="card-product-detail-im">
                                    <!-- Title -->
                                    <h5 x-text="products[active].title"></h5>

                                    <!-- Description -->
                                    <p x-text="products[active].desc"></p>

                                    <!-- Buttons -->
                                    <div class="smaill-detail-card">
                                        <!-- Basmati -->
                                        <button x-show="active === 'default'" @click="active = 'basmati'">
                                            {{ app()->getLocale() === 'en' ? 'Basmati Rice (India)' : (app()->getLocale() === 'km' ? 'អង្ករបាសម៉ាទី (ឥណ្ឌា)' : '印度巴斯马蒂大米（印度）') }}
                                        </button>

                                        <!-- Yellow Corn -->
                                        <button x-show="active === 'default'" @click="active = 'corn'">
                                           {{ app()->getLocale() === 'en' ? 'Yellow Corn' : (app()->getLocale() === 'km' ? 'ពោតលឿង' : '黄色玉米') }}
                                        </button>

                                        <!-- Back -->
                                        <button x-show="active !== 'default'" @click="active = 'default'" class="btn-back">
                                            {{ app()->getLocale() === 'en' ? 'Back' : (app()->getLocale() === 'km' ? 'ត្រឡប់ក្រោយ' : '回去') }}
                                        </button>
                                    </div>

                                    <!-- Interest Button -->
                                    <div class="btn-card-interest-to-export">
                                        <button>
                                            <a href="#contact" class="text-[#fff] decoration-transparent">
                                                {{ app()->getLocale() === 'en' ? 'Interest to Import' : (app()->getLocale() === 'km' ? 'ចំណាប់អារម្មណ៍ក្នុងការនាំចូល' : '进口兴趣') }}
                                            </a>
                                        </button>
                                    </div>

                                    <!-- Card Number -->
                                    <div class="card-no">
                                        <p>{{ app()->getLocale() === 'en' ? '01' : (app()->getLocale() === 'km' ? '០១' : '01') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- item 2 --}}
                        <div class="">
                            <div class="card-product" x-data="{
                                active: 'default',
                                products: {
                                    default: {
                                        title: '{{ app()->getLocale() === 'en' ? 'Whole Spices' : (app()->getLocale() === 'km' ? 'គ្រឿងទេសទាំងមូល' : '整个香料') }}',
                                        desc: '{{ app()->getLocale() === 'en' ? 'Sourced from reputable growers to ensure purity, aroma, and strong market demand.' : (app()->getLocale() === 'km' ? 'ទទួលទិញពីប្រភពដែលមានកេរ្តិ៍ឈ្មោះល្អ ដើម្បីធានាបាននូវគុណភាព ក្លិនឈ្ងុយ និងមានតម្រូវការទីផ្សារខ្លាំង។' : '采购自信誉良好的种植者，以确保纯度') }}',
                                        img: '{{ asset('assets/images/export/spices.jpg') }}'
                                    },
                                    cumin: {
                                        title: '{{ app()->getLocale() === 'en' ? 'Cumin Seeds' : (app()->getLocale() === 'km' ? 'គ្រាប់ជីអង្កាម' : '香气和强劲的市场需求。') }}',
                                        desc: '{{ app()->getLocale() === 'en' ? 'High-quality whole cumin seeds with strong aroma for global spice markets.' : (app()->getLocale() === 'km' ? 'គ្រាប់​ជីអង្កាម​ជាមួយ​នឹង​ក្លិន​ឈ្ងុយ​ខ្លាំង​សម្រាប់​ទីផ្សារ​គ្រឿងទេស​ពិភពលោក។' : '高品质全孜然种子，香气浓郁，畅销全球香料市场。') }}',
                                        img: '{{ asset('assets/images/import/cumin_seed.jpg') }}'
                                    },
                                    turmeric: {
                                        title: '{{ app()->getLocale() === 'en' ? 'Turmeric (Whole)' : (app()->getLocale() === 'km' ? 'រមៀត' : '子姜黄（整个）') }}',
                                        desc: '{{ app()->getLocale() === 'en' ? 'Whole turmeric roots known for vibrant color and medicinal properties.' : (app()->getLocale() === 'km' ? '​រមៀត​មានចម្រុះពណ៌ និង​មាន​លក្ខណៈសម្បត្តិ​ជាឱសថ។' : '整个姜黄根以鲜艳的颜色和药用特性而闻名。') }}',
                                        img: '{{ asset('assets/images/import/turmeric-1.jpg') }}'
                                    },
                                    red_pepper: {
                                        title: '{{ app()->getLocale() === 'en' ? 'Red Peppers (Whole)' : (app()->getLocale() === 'km' ? 'ម្ទេសក្រហម ' : 'Red Peppers (Whole)') }}',
                                        desc: '{{ app()->getLocale() === 'en' ? 'Whole dried red peppers with bold heat and rich color.' : (app()->getLocale() === 'km' ? 'ម្ទេសក្រហមមានរសជាតិហឹរខ្លាំង និងមានចម្រុះពណ៌។' : '整个干红椒，辣味浓烈，色泽丰富') }}',
                                        img: '{{ asset('assets/images/import/red_peppers.jpg') }}'
                                    },
                                    cardamom: {
                                        title: '{{ app()->getLocale() === 'en' ? 'Cardamom (Green)' : (app()->getLocale() === 'km' ? 'ក្រវាញ ' : '小豆蔻(绿色)') }}',
                                        desc: '{{ app()->getLocale() === 'en' ? 'Premium green cardamom pods with intense aroma and flavor.' : (app()->getLocale() === 'km' ? 'ផ្លែក្រវាញបៃតងគុណភាពខ្ពស់ ជាមួយនឹងក្លិនក្រអូប និងរសជាតិដិត។' : '优质绿色小豆蔻豆荚，香气浓郁。') }}',
                                        img: '{{ asset('assets/images/import/cardamom.jpg') }}'
                                    }
                                }
                            }">
                                <!-- Image -->
                                <img class="card-product-bg h-[250px] object-cover" :src="products[active].img">

                                <div class="card-product-detail-im">
                                    <!-- Title -->
                                    <h5 x-text="products[active].title"></h5>

                                    <!-- Description -->
                                    <p x-text="products[active].desc"></p>

                                    <!-- Buttons -->
                                    <div class="smaill-detail-card">
                                        <button x-show="active === 'default'" @click="active = 'cumin'">
                                            {{ app()->getLocale() === 'en' ? 'Cumin Seeds' : (app()->getLocale() === 'km' ? 'គ្រាប់ជីអង្កាម' : '薄荷籽') }}
                                        </button>

                                        <button x-show="active === 'default'" @click="active = 'turmeric'">
                                            {{ app()->getLocale() === 'en' ? 'Turmeric (Whole)' : (app()->getLocale() === 'km' ? 'រមៀត' : '子姜黄（整个）') }}
                                        </button>

                                        <button x-show="active === 'default'" @click="active = 'red_pepper'">
                                            {{ app()->getLocale() === 'en' ? 'Red Peppers (Whole)' : (app()->getLocale() === 'km' ? 'ម្ទេសក្រហម ' : '红辣椒（整个）') }}
                                        </button>

                                        <button x-show="active === 'default'" @click="active = 'cardamom'">
                                            {{ app()->getLocale() === 'en' ? 'Cardamom (Green)' : (app()->getLocale() === 'km' ? 'ក្រវាញ ' : '小豆蔻(绿色)') }}
                                        </button>

                                        <!-- Back -->
                                        <button x-show="active !== 'default'" @click="active = 'default'" class="btn-back">
                                            {{ app()->getLocale() === 'en' ? 'Back' : (app()->getLocale() === 'km' ? 'ត្រឡប់ក្រោយ ' : '回去') }}
                                        </button>
                                    </div>

                                    <!-- Interest Button -->
                                    <div class="btn-card-interest-to-export">
                                        <button><a href="#contact" class="text-[#fff] decoration-transparent">{{ app()->getLocale() === 'en' ? 'Interest to Import' : (app()->getLocale() === 'km' ? 'ចំណាប់អារម្មណ៍ក្នុងការនាំចូល' : ' 进口兴趣') }}</a></button>
                                    </div>

                                    <!-- Card Number -->
                                    <div class="card-no">
                                        <p>{{ app()->getLocale() === 'en' ? '02' : (app()->getLocale() === 'km' ? '០២' : '02') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- item 3 --}}
                        <div class="">
                            <div class="card-product" x-data="{
                                active: 'default',
                                products: {
                                    default: {
                                        title: '{{ app()->getLocale() === 'en' ? 'Spice Powders' : (app()->getLocale() === 'km' ? 'ម្សៅគ្រឿងទេស ' : '香料粉') }}',
                                        desc: '{{ app()->getLocale() === 'en' ? 'Finely milled premium spice powders ready for wholesale and reprocessing.' : (app()->getLocale() === 'km' ? 'ម្សៅគ្រឿងទេសគុណភាពខ្ពស់កិនល្អិតៗរួចរាល់សម្រាប់លក់ដុំ និងកែច្នៃឡើងវិញ។ ' : '精细研磨的优质香料粉末准备批发和再加工。') }}',
                                        img: '{{ asset('assets/images/import/spices_powder.jpg') }}'
                                    },
                                    turmeric_powder: {
                                        title: '{{ app()->getLocale() === 'en' ? 'Turmeric Powder' : (app()->getLocale() === 'km' ? 'ម្សៅរមៀត ' : '姜黄粉') }}',
                                        desc: '{{ app()->getLocale() === 'en' ? 'Premium turmeric powder with vibrant color and strong aroma for food processing.' : (app()->getLocale() === 'km' ? 'ម្សៅរមៀតគុណភាពខ្ពស់ជាមួយនឹងចម្រុះពណ៌ និងក្លិនក្រអូបដិត សម្រាប់កែច្នៃអាហារ។ ' : '优质的姜黄粉，颜色鲜艳，香气浓郁，适合食品加工。') }}',
                                        img: '{{ asset('assets/images/import/turmeric.jpg') }}'
                                    },
                                    red_pepper_powder: {
                                        title: '{{ app()->getLocale() === 'en' ? 'Red Pepper Powder' : (app()->getLocale() === 'km' ? 'ម្សៅម្រេចក្រហម ' : '红辣椒粉') }}',
                                        desc: '{{ app()->getLocale() === 'en' ? 'High-quality red pepper powder with rich color and balanced heat.' : (app()->getLocale() === 'km' ? 'ម្សៅម្រេចក្រហមដែលមានគុណភាពខ្ពស់ ជាមួយនឹងពណ៌សម្បូរបែប។ ' : '优质红椒粉，色泽丰富，辣度均衡。') }}',
                                        img: '{{ asset('assets/images/import/red_peppers_powder.jpg') }}'
                                    }
                                }
                            }">
                                <!-- Image -->
                                <img class="card-product-bg h-[250px] object-cover" :src="products[active].img">

                                <div class="card-product-detail-im">
                                    <!-- Title -->
                                    <h5 x-text="products[active].title"></h5>

                                    <!-- Description -->
                                    <p x-text="products[active].desc"></p>

                                    <!-- Buttons -->
                                    <div class="smaill-detail-card">
                                        <!-- Turmeric Powder -->
                                        <button x-show="active === 'default'" @click="active = 'turmeric_powder'">
                                            {{ app()->getLocale() === 'en' ? 'Turmeric Powder' : (app()->getLocale() === 'km' ? 'ម្សៅរមៀត ' : '姜黄粉') }}
                                        </button>

                                        <!-- Red Pepper Powder -->
                                        <button x-show="active === 'default'" @click="active = 'red_pepper_powder'">
                                            {{ app()->getLocale() === 'en' ? 'Red Pepper Powder' : (app()->getLocale() === 'km' ? 'ម្សៅម្រេចក្រហម ' : '红辣椒粉') }}
                                        </button>

                                        <!-- Back -->
                                        <button x-show="active !== 'default'" @click="active = 'default'" class="btn-back">
                                            {{ app()->getLocale() === 'en' ? 'Back' : (app()->getLocale() === 'km' ? 'ត្រឡប់ក្រោយ ' : '回去') }}
                                        </button>
                                    </div>

                                    <!-- Interest Button -->
                                    <div class="btn-card-interest-to-export">
                                        <button>
                                            <a href="#contact" class="text-[#fff] decoration-transparent">
                                                {{ app()->getLocale() === 'en' ? 'Interest to Import' : (app()->getLocale() === 'km' ? 'ចំណាប់អារម្មណ៍ក្នុងការនាំចូល' : '进口兴趣') }}
                                            </a>
                                        </button>
                                    </div>

                                    <!-- Card Number -->
                                    <div class="card-no">
                                        <p>{{ app()->getLocale() === 'en' ? '03' : (app()->getLocale() === 'km' ? '០៣' : '03') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- item 4 --}}
                        <div class="">
                            <div class="card-product" x-data="{
                                active: 'default',
                                products: {
                                    default: {
                                        title: '{{ app()->getLocale() === 'en' ? 'Dehydrated Vegetables' : (app()->getLocale() === 'km' ? 'បន្លែសម្ងួត' : '脱水蔬菜') }}',
                                        desc: '{{ app()->getLocale() === 'en' ? 'Long-shelf-life dehydrated garlic and onion products ideal for food production and distribution.' : (app()->getLocale() === 'km' ? 'ផលិតផលខ្ទឹមស ដែលមានកាលបរិច្ឆេទប្រើប្រាស់បានយូរ ស័ក្តិសមសម្រាប់ការផលិត និងចែកចាយអាហារ។' : '长保质期脱水大蒜和洋葱产品的理想食品生产和分销。') }}',
                                        img: '{{ asset('assets/images/import/dehydrated_vegetables.jpg') }}'
                                    },
                                    garlic: {
                                        title: '{{ app()->getLocale() === 'en' ? 'Dried Garlic' : (app()->getLocale() === 'km' ? 'ខ្ទឹមសស្ងួត' : '干蒜') }}',
                                        desc: '{{ app()->getLocale() === 'en' ? 'Premium dehydrated garlic with strong aroma and extended shelf life for global food markets.' : (app()->getLocale() === 'km' ? 'ខ្ទឹមសស្ងួតគុណភាពខ្ពស់ ជាមួយនឹងក្លិនក្រអូបខ្លាំង និងកាលបរិច្ឆេទរក្សាទុកបានយូរសម្រាប់ទីផ្សារម្ហូបអាហារពិភពលោក។' : '优质脱水大蒜，香气浓郁，保质期延长，畅销全球食品市场。') }}',
                                        img: '{{ asset('assets/images/import/garlic.jpg') }}'
                                    }
                                }
                            }">
                                <!-- Image -->
                                <img class="card-product-bg  h-[250px] object-cover" :src="products[active].img">

                                <div class="card-product-detail-im">
                                    <!-- Title -->
                                    <h5 x-text="products[active].title"></h5>

                                    <!-- Description -->
                                    <p x-text="products[active].desc"></p>

                                    <!-- Buttons -->
                                    <div class="smaill-detail-card">
                                        <!-- Dried Garlic -->
                                        <button x-show="active === 'default'" @click="active = 'garlic'">
                                            {{ app()->getLocale() === 'en' ? 'Dried Garlic' : (app()->getLocale() === 'km' ? 'ខ្ទឹមសស្ងួត' : '干蒜') }}
                                        </button>

                                        <!-- Back -->
                                        <button x-show="active !== 'default'" @click="active = 'default'"
                                            class="btn-back">
                                            {{ app()->getLocale() === 'en' ? 'Back' : (app()->getLocale() === 'km' ? 'ត្រឡប់ក្រោយ ' : '回去') }}
                                        </button>
                                    </div>

                                    <!-- Interest Button -->
                                    <div class="btn-card-interest-to-export">
                                        <button><a href="#contact" class="text-[#fff] decoration-transparent">{{ app()->getLocale() === 'en' ? 'Interest to Import' : (app()->getLocale() === 'km' ? 'ចំណាប់អារម្មណ៍ក្នុងការនាំចូល' : '进口兴趣') }}</a></button>
                                    </div>

                                    <!-- Card Number -->
                                    <div class="card-no">
                                        <p>{{ app()->getLocale() === 'en' ? '04' : (app()->getLocale() === 'km' ? '០៤' : '04') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>  