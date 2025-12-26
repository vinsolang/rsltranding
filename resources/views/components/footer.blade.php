<style>
    :root {
        color: #FFFFFF
    }

    footer {
        position: relative;
        width: 100%;
        margin-top: 1rem;
        height: 100%;
        color: #FFFFFF;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    footer .footer-bg {
        position: absolute;
        top: 0;
        z-index: -1 !important;
        width: 100%;
        height: 600px;
        object-fit: cover;
    }

    footer .footer-content {
        width: 100%;
        display: grid;
        grid-template-columns: 2fr 2.5fr 4fr 5fr;
        gap: 1.5rem;
        padding-left: 3rem;
        padding-right: 3rem;
        font-size: 16px !important;
        margin-top: 7rem;
    }

    footer .footer-content .footer-navigate {
        text-align: end;
        width: 100%;
    }

    footer .footer-content .footer-navigate h5 {
        font-weight: bolder;
        font-size: 16px !important;
    }

    footer .footer-content .footer-navigate li {
        list-style: none;
    }


    footer .footer-content .footer-navigate li a {
        color: #FFFFFF;
        text-decoration: none;
        transition: all 0.5s ease;
        font-size: 16px !important;
    }

    footer .footer-content .footer-navigate li:hover a {
        background-color: #0F963A;

    }


    footer .footer-content .footer-address {
        text-align: end;
        width: 100%;
    }

    footer .footer-content .footer-address li {
        list-style: none;
        font-size: 16px !important;
    }


    footer .footer-content .footer-address h5 {
        font-size: 16px !important;
        font-weight: bolder;
    }

    footer .footer-content .footer-address li {
        font-size: 16px !important;
    }

    footer .footer-content .footer-address li h5 {
        font-size: 16px !important;
    }

    footer .footer-content .footer-social {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        width: 100%;
    }

    footer .footer-content .footer-social img {
        width: 250px;
        max-width: auto;
    }

    footer .footer-content .footer-social h5 {
        text-align: center;
        font-weight: bold;
        margin-top: 2rem;
        margin-bottom: 1rem;
        font-size: 16px;
    }


    footer .footer-content .footer-social .link-social {
        display: flex;
        gap: 2rem;
        padding-left: 3rem;
        padding-right: 3rem;
    }

    footer .footer-content .footer-company .company-bg {
        width: 100%
    }

    footer .footer-content .footer-company h5 {
        font-weight: bold;
        font-size: 16px;

    }

    footer .footer-content .footer-company .company-bg {
        width: 352px;
        max-width: 100%;
        height: 114px;
        max-height: 100%;
        background-color: #D9D9D9;

    }

    @media screen and (max-width: 1220px) {
        footer {
            font-size: 14px !important;
        }

        footer .footer-bg {
            position: absolute;
            top: 0;
            z-index: -1 !important;
            width: 100%;
            height: 650px;
            object-fit: cover;
        }

        footer .footer-content {
            width: 100%;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2rem;
            padding-left: 1rem;
            padding-right: 1rem;
            margin-top: 1rem;
        }

        footer .footer-content .footer-navigate {
            text-align: center;
            width: 100%;
        }


        footer .footer-content .footer-address {
            text-align: start;
            width: 100%;
        }
    }

    @media screen and (max-width: 1024px) {
        footer .footer-bg {
            position: absolute;
            top: 0;
            z-index: -1 !important;
            width: 100%;
            height: 700px;
            object-fit: cover;
        }
    }


    @media screen and (max-width:789px) {
        footer {
            font-size: 14px !important;
            background-color: #0F963A;
            padding-top: 1rem;
        }


        footer .footer-content {
            width: 100%;
            display: grid;
            grid-template-columns: 100%;
            gap: 1rem;
            padding-left: 1rem;
            padding-right: 1rem;
            padding-bottom: 1rem;

        }


        footer .footer-content .footer-navigate {
            text-align: start;
        }

        footer .footer-content .footer-address {
            text-align: start;
        }
    }

    .footer-social-display {
        display: none !important;
    }

    @media screen and (max-width: 769px) {
        .footer-social-display {
            display: flex !important;
        }

        .footer-social {
            order: 1;
        }

        .footer-navigate {
            order: 2
        }

        .footer-address {
            order: 3;
        }

        .footer-company {
            order: 4
        }
    }

    @media screen and (max-width: 1221px) {
        footer .footer-bg {
            height: 100%;
        }
    }


    @media screen and (max-width: 1025px) {
        footer .footer-bg {
            height: 700px !important;
        }

        footer .footer-content .footer-navigate h5 {
            font-weight: bolder;
            font-size: 14px !important;
        }

        footer .footer-content .footer-navigate li a {
            list-style: none;
            font-size: 14px !important;
        }

        footer .footer-content .footer-address h5 {
            font-size: 14px !important;
            font-weight: bolder;
        }

        footer .footer-content .footer-address li {
            font-size: 14px !important;
        }

        footer .footer-content .footer-address li h5 {
            font-size: 14px !important;
        }

        footer .footer-content .footer-company h5 {
            font-weight: bold;
            font-size: 14px;

        }

        footer .footer-content .footer-company p {
            font-size: 14px;

        }

    }
</style>

<section>
    <footer>

        <img class="footer-bg" src="{{ asset('assets/images/footer-bg.png') }}">

        <div class="footer-content">
            <div class="footer-navigate">
                <h5>Navigation</h5>

                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('export') }}">Main Commodities</a></li>
                <li><a href="{{ route('import') }}">Import</a></li>
                <li><a href="{{ route('about') }}">About Us</a></li>
                <li><a href="{{ route('events') }}">Activities</a></li>
                <li><a href="{{ route('career') }}">Career</a></li>
                <li><a href="{{ route('contact') }}">Contact Us</a></li>

            </div>
            <div class="footer-address">
                <h5>Full Office Address</h5>

                <li><a style="color: #FFFFFF">#202, Borey 999 Honey, 2nd Floor, Street 355, Group 03, Village 1 , Boeng
                        Kak 1 Commune, Toul Kork District, Phnom Penh</a></li>
                <li>
                    <h5 class="mt-3" style="text-decoration: underline;">info@rsltrading.com</h5>
                </li>
                <li>
                    <h5 class="mt-3">+855 77 678 300</h5>
                </li>
                <li>
                    <h5 class="mt-3">Operation Hour</h5>
                </li>
                <li>Mon - Fri </li>
                <li>8:00am - 5:00pm</li>

            </div>



            <div class="footer-social">
                <img src="{{ asset('assets/images/footer-logo.png') }}">

                <h5 class="">Follow Us</h5>

                <div class="link-social">
                    <a href="https://www.facebook.com/rsltradingcambodia" target="_blank"><svg width="27"
                            height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M13.3161 0C5.97362 0 0 5.97362 0 13.3161C0 20.658 5.97362 26.6321 13.3161 26.6321C20.658 26.6321 26.6321 20.658 26.6321 13.3161C26.6321 5.97362 20.6591 0 13.3161 0ZM16.6277 13.7849H14.4612V21.5065H11.251C11.251 21.5065 11.251 17.2874 11.251 13.7849H9.72503V11.0558H11.251V9.29057C11.251 8.02633 11.8518 6.05086 14.4907 6.05086L16.8696 6.05998V8.70914C16.8696 8.70914 15.424 8.70914 15.143 8.70914C14.8619 8.70914 14.4623 8.84967 14.4623 9.45255V11.0563H16.9082L16.6277 13.7849Z"
                                fill="#007BFF" />
                        </svg></a>

                    <a href="https://t.me/+85577678300" target="_blank">
                        <svg width="27" height="27" viewBox="0 0 27 27" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M13.3161 26.6321C20.6703 26.6321 26.6321 20.6703 26.6321 13.3161C26.6321 5.96181 20.6703 0 13.3161 0C5.96181 0 0 5.96181 0 13.3161C0 20.6703 5.96181 26.6321 13.3161 26.6321Z"
                                fill="#039BE5" />
                            <path
                                d="M6.09322 13.0279L18.9321 8.07768C19.528 7.8624 20.0485 8.22304 19.8554 9.1241L19.8565 9.12299L17.6704 19.4219C17.5084 20.152 17.0745 20.3296 16.4676 19.9856L13.1385 17.5321L11.5328 19.079C11.3553 19.2565 11.2055 19.4063 10.8615 19.4063L11.0978 16.0185L17.2676 10.4446C17.5362 10.2082 17.2077 10.0751 16.8537 10.3103L9.22916 15.1108L5.94231 14.0854C5.22879 13.8591 5.21325 13.3719 6.09322 13.0279Z"
                                fill="white" />
                        </svg>
                    </a>
                </div>
            </div>





            <div class="footer-company">
                <p>Founded in 2015, RSL Trading is a Cambodian leader in agricultural exports, dedicated to connecting
                    local farmers with global markets. Our goal is to bring the finest “Made in Cambodia” products such
                    as rice, coffee, corn, cashew nuts, mangoes, and cassava and other nutrient fruits—to buyers
                    worldwide while supporting farmers with better opportunities and incomes.</p>
                <div class="company-bg">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3908.297500132666!2d104.86175!3d11.6021264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31095385a229bec1%3A0xada2a43a8ca90037!2z4Z6Y4Z-Q4Z6a4Z6V4Z-S4Z6b4Z654Z6fIE1vcmUgUGx1cw!5e0!3m2!1sen!2skh!4v1766630998356!5m2!1sen!2skh"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>


                <div class="footer-social footer-social-display">

                    <h5>Follow Us</h5>

                    <div class="link-social">
                        <a href="https://www.facebook.com/rsltradingcambodia" target="_blank"><svg width="27"
                                height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M13.3161 0C5.97362 0 0 5.97362 0 13.3161C0 20.658 5.97362 26.6321 13.3161 26.6321C20.658 26.6321 26.6321 20.658 26.6321 13.3161C26.6321 5.97362 20.6591 0 13.3161 0ZM16.6277 13.7849H14.4612V21.5065H11.251C11.251 21.5065 11.251 17.2874 11.251 13.7849H9.72503V11.0558H11.251V9.29057C11.251 8.02633 11.8518 6.05086 14.4907 6.05086L16.8696 6.05998V8.70914C16.8696 8.70914 15.424 8.70914 15.143 8.70914C14.8619 8.70914 14.4623 8.84967 14.4623 9.45255V11.0563H16.9082L16.6277 13.7849Z"
                                    fill="#007BFF" />
                            </svg></a>

                        <a href="https://t.me/+85577678300" target="_blank">
                            <svg width="27" height="27" viewBox="0 0 27 27" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M13.3161 26.6321C20.6703 26.6321 26.6321 20.6703 26.6321 13.3161C26.6321 5.96181 20.6703 0 13.3161 0C5.96181 0 0 5.96181 0 13.3161C0 20.6703 5.96181 26.6321 13.3161 26.6321Z"
                                    fill="#039BE5" />
                                <path
                                    d="M6.09322 13.0279L18.9321 8.07768C19.528 7.8624 20.0485 8.22304 19.8554 9.1241L19.8565 9.12299L17.6704 19.4219C17.5084 20.152 17.0745 20.3296 16.4676 19.9856L13.1385 17.5321L11.5328 19.079C11.3553 19.2565 11.2055 19.4063 10.8615 19.4063L11.0978 16.0185L17.2676 10.4446C17.5362 10.2082 17.2077 10.0751 16.8537 10.3103L9.22916 15.1108L5.94231 14.0854C5.22879 13.8591 5.21325 13.3719 6.09322 13.0279Z"
                                    fill="white" />
                            </svg>
                        </a>




                    </div>

                </div>


                </li>
            </div>

        </div>

    </footer>







</section>
