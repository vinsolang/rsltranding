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
                <h5>{{ app()->getLocale() === 'en' ? 'Navigation' : (app()->getLocale() === 'km' ? 'ការរុករក' : '導航') }}</h5>

                <li><a href="{{ route('home') }}">
                        {{ app()->getLocale() === 'en' ? 'Home' : (app()->getLocale() === 'km' ? 'ទំព័រដើម' : '住宅') }}
                    </a></li>
                <li><a href="{{ route('about') }}">
                        {{ app()->getLocale() === 'en' ? 'About Us' : (app()->getLocale() === 'km' ? 'អំពីយើងខ្ញុំ' : '公司简介') }}
                    </a></li>
                <li><a href="{{ route('our_product') }}">
                        {{ app()->getLocale() === 'en' ? 'Our Product' : (app()->getLocale() === 'km' ? 'ផលិតផលរបស់យើងខ្ញុំ' : '我们的产品') }}
                    </a></li>
                
                <li><a href="{{ route('events') }}">
                        {{ app()->getLocale() === 'en' ? 'our Activities' : (app()->getLocale() === 'km' ? 'សកម្មភាព' : '商业活动') }}
                    </a></li>
                <li><a href="{{ route('career') }}">
                        {{ app()->getLocale() === 'en' ? 'Career' : (app()->getLocale() === 'km' ? 'ឱកាសការងារ' : '就业机会') }}
                    </a></li>
                <li><a href="{{ route('contact') }}">
                        {{ app()->getLocale() === 'en' ? 'Contact us' : (app()->getLocale() === 'km' ? 'ការទំនាក់ទំនង' : '联系方法') }}
                    </a></li>

            </div>
            
            <div class="footer-address">
                {{-- <h5>Full Office Address</h5> --}}

                {{-- <li><a style="color: #FFFFFF">{{ app()->getLocale() === 'en' ? '#202, Borey 999 Honey, {{  2<sup>nd</sup> }} Floor, Street 355, Group 03, Village 1 , Boeng
                        Kak 1 Commune, Toul Kork District, Phnom Penh' : (app()->getLocale() === 'km' ? '#202, Borey 999 Honey, 2 {{  2<sup>nd</sup> }} Floor, Street 355, Group 03, Village 1 , Boeng
                        Kak 1 Commune, Toul Kork District, Phnom Penh' : '#202, Borey 999 Honey, 2nd Floor, Street 355, Group 03, Village 1 , Boeng
                        Kak 1 Commune, Toul Kork District, Phnom Penh') }}</a>
                </li> --}}
                <li>
                    <a style="color:#FFFFFF">
                        {!! app()->getLocale() === 'en'
                            ? '#202, Borey 999 Honey, 2<sup>nd</sup> Floor, Street 355, Group 03, Village 1, Boeng Kak 1 Commune, Toul Kork District, Phnom Penh'
                            : (app()->getLocale() == 'km' ? 'អាសយដ្ឋាន៖ ផ្ទះលេខ ២០២ បុរី ៩៩៩ ហានី ជាន់ទី ២ ផ្លូវលេខ ៣៥៥ ក្រុមទី ០៣ ភូមិ ១ សង្កាត់បឹងកក់ ១ ខណ្ឌទួលគោក រាជធានីភ្នំពេញ'
                            : '办公地址：金边市土角区Boeng Kak 1公社1村03组355街2楼Borey 999 Honey 202号')
                        !!}
                    </a>
                </li>

                <li>
                    <h5 class="mt-3">{{ app()->getLocale() === 'en' ? 'info@rsltrading.com' : (app()->getLocale() === 'km' ? 'អ៉ីមែល៖ info@rsltrading.com' : 'info@rsltrading.com') }}</h5>
                </li>
                <li>
                    <h5 class="mt-3">{{ app()->getLocale() === 'en' ? '+855 11 678 588' : (app()->getLocale() === 'km' ? 'លេខទូរស័ព្ទ៖ +៨៥៥ ១១ ៦៧៨ ៥៨៨' : '+855 11 678 588') }}</h5>
                </li>
                <li>
                    <h5 class="mt-3">{{ app()->getLocale() === 'en' ? 'Operation Hour' : (app()->getLocale() === 'km' ? 'ម៉ោងធ្វើការ' : '办公时间:') }}</h5>
                </li>
                <li>{{ app()->getLocale() === 'en' ? 'Mon - Fri' : (app()->getLocale() === 'km' ? 'ច័ន្ទ - សុក្រ' : '星期一至五') }}</li>
                <li>{{ app()->getLocale() === 'en' ? '8:00am - 5:00pm' : (app()->getLocale() === 'km' ? 'ម៉ោង ៨:០០ ព្រឹក - ៥:០០ ល្ងាច' : '8:00am - 5:00pm') }}</li>

            </div>



            <div class="footer-social">
                <img src="{{ asset('assets/images/footer-logo.png') }}">

                <h5 class="">{{ app()->getLocale() === 'en' ? 'Follow Us' : (app()->getLocale() === 'km' ? 'ទំនាក់ទំនងមកយើងខ្ញុំ' : '聯絡我們') }}</h5>

                <div class="link-social">
                    <a href="https://www.facebook.com/rsltradingcambodia" target="_blank"><svg width="27"
                            height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M13.3161 0C5.97362 0 0 5.97362 0 13.3161C0 20.658 5.97362 26.6321 13.3161 26.6321C20.658 26.6321 26.6321 20.658 26.6321 13.3161C26.6321 5.97362 20.6591 0 13.3161 0ZM16.6277 13.7849H14.4612V21.5065H11.251C11.251 21.5065 11.251 17.2874 11.251 13.7849H9.72503V11.0558H11.251V9.29057C11.251 8.02633 11.8518 6.05086 14.4907 6.05086L16.8696 6.05998V8.70914C16.8696 8.70914 15.424 8.70914 15.143 8.70914C14.8619 8.70914 14.4623 8.84967 14.4623 9.45255V11.0563H16.9082L16.6277 13.7849Z"
                                fill="#007BFF" />
                        </svg></a>

                    <a href="https://t.me/+85511678588" target="_blank">
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
                <p>{{ app()->getLocale() === 'en' ? 'Founded in 2015, RSL Trading is a Cambodian leader in agricultural exports, dedicated to connecting
                    local farmers with global markets. Our goal is to bring the finest “Made in Cambodia” products such
                    as rice, coffee, corn, cashew nuts, mangoes, and cassava and other nutrient fruits—to buyers
                    worldwide while supporting farmers with better opportunities and incomes.' 
                    : (app()->getLocale() === 'km' ? 'ក្រុមហ៊ុន អ អេស​ អិល ត្រេឌីង ឯ.ក ត្រូវបានបង្កើតឡើងក្នុងឆ្នាំ ២០១៥ ​ដោយ ផ្តោតនាំចេញផលិតផលកសិកម្មលក់លើទីផ្សារទីផ្សារក្នុងស្រុក និងទីផ្សារអន្តរជាតិ ផ្សាភ្ជាប់ទំនាក់ទំនងជាមួយកសិករក្នុងស្រុកដើម្បីនាំយកផលិតផលកសិកម្មដូចជា អង្ករ កាហ្វេ ម្រេច ចេក គ្រាប់ស្វាយចន្ទី ដំណាប់ស្វាយ ដំឡូងមី និងផលិតផលជាច្រើនទៀត ព្រមទាំងផ្ដល់ការគាំទ្រដល់ពួកគាត់សម្រាប់ការ ប្រមូលផល និងជួយបង្កើតប្រាក់ចំណូលកាន់តែប្រសើរ។' 
                    : 'RSL贸易公司成立于2015年，是柬埔寨农业出口的领导者，致力于将当地农民与全球市场联系起来。我们的目标是将最好的“柬埔寨制造”产品（如大米、咖啡、玉米、腰果、芒果、木薯和其他营养水果）带给世界各地的买家，同时为农民提供更好的机会和收入。') }}</p>
                <div class="company-bg">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3908.297500132666!2d104.86175!3d11.6021264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31095385a229bec1%3A0xada2a43a8ca90037!2z4Z6Y4Z-Q4Z6a4Z6V4Z-S4Z6b4Z654Z6fIE1vcmUgUGx1cw!5e0!3m2!1sen!2skh!4v1766630998356!5m2!1sen!2skh"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>


                {{-- <div class="footer-social footer-social-display">

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

                </div> --}}


                </li>
            </div>

        </div>

    </footer>
</section>
