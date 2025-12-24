@extends('layouts.master')

@section('title')
    <title>Home - RSL Trading</title>
@endsection

@section('css')
   <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
@endsection



@section('content')

<section>
<div class="main-banner">
 <video autoplay muted class="home-banner-logo">
  <source src="{{ asset('assets/videos/LOGO.mp4') }}">
  </source>
 </video>

            {{-- <div class="home-banner-logo">
              <img src="{{ asset('assets/images/logo.png') }}">
            </div> --}}
          <div class="home-banner-context">
            <h5>{{ __('messages.home') }}</h5>
           <h1>RSL TRADING</h1>
           <h3>Health Life Future</h3>

           <button class="btn-explore-our-exports">
            <img src="{{ asset('assets/images/btn-submit-bg.png') }}">
            <p><a  href="{{ route('export') }}">Explore Our Exports</a></p>
           </button>
          </div>
     </div>
</section>

    <section class="home-first-banner relative w-full h-[110vh] ">

        <!-- Background Image -->
        <div class="absolute inset-0 z-10">
            <img src="{{ asset('assets/images/bg-1.png') }}" alt="" class="w-full h-full object-cover object-top">
        </div>

        <!-- Content -->
        <div
            class="relative z-20 w-full h-full max-w-7xl mx-auto flex flex-col items-center justify-center text-center font-[700] px-4 pt-4">

            <h2 class="text-[#8DC640] text-[20px] md:text-[25px] mt-5">Welcome to</h2>

            <h1 class="text-[30px] md:text-[50px] text-[#059848] leading-tight fw-bolder">
                RSL TRADING
            </h1>

            <p class="text-[14px] md:text-[16px] font-[400] pt-4  md:px-10">
                Founded in 2015, RSL Trading connects Cambodian farmers with global markets.
                We specialize in exporting agricultural products such as rice, coffee, corn,
                cashew nuts and tropical fruits to countries worldwide. So far, we have
                successfully exported 3 tons of coffee beans to Russia through our coffee bean
                processing partner in Siem Reap.
            </p>

            <img src="{{ asset('assets/images/export.png') }}" alt="" class="pt-20">

        </div>
    </section>

    <section>
    <div class="we-start">
      <img class="we-start-bg" src="{{ asset('assets/images/bg-2.png') }}">
      <div class="we-start-context">
         <div class="context-one">
         <h5>Why We Started</h5>
          <p>“We help local farmers by creating global opportunities for Cambodian agricultural products.”</p>
         </div>
          <div class="context-two">
         <h5> Export Commodities</h5>
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


<section>

<div class="container">
<div class="row">

<div class="col-lg-4 col-md-6 col-sm-12 col-12">
<div class="card">
<img src="{{asset ('assets/images/card-1.png')}}">
<div class="card-content">
<h4>Rice</h4>
<p>We specialize in exporting agricultural products such as rice, coffee, corn, cashew nuts and tropical fruits to countries worldwide.</p>

<div class="wrapper-card-content">
<button  class="btn-explore"><a href="{{ route('rice-detail') }}">Explore More</a></button>
<h1>.01</h1>
</div>

<div class="card-content-logo">
<img src="{{asset ('assets/images/card-logo-1.png')}}">
<div>
</div>
</div>
</div>
</div>
</div>


<div class="col-lg-4 col-md-6 col-sm-12 col-12">
<div class="card">
<img src="{{asset ('assets/images/card-2.png')}}">
<div class="card-content">
<h4>Coffee</h4>
<p>We specialize in exporting agricultural products such as rice, coffee, corn, cashew nuts and tropical fruits to countries worldwide.</p>

<div class="wrapper-card-content">
<button class="btn-explore"><a href="{{ route('coffee-detail') }}">Explore More</a></button>
<h1>.02</h1>
</div>

<div class="card-content-logo">
<img src="{{asset ('assets/images/card-logo-2.png')}}">
<div>
</div>
</div>
</div>
</div>
</div>


<div class="col-lg-4 col-md-6 col-sm-12 col-12">
<div class="card">
<img src="{{asset ('assets/images/card-3.png')}}">
<div class="card-content">
<h4>Corn</h4>
<p>We specialize in exporting agricultural products such as rice, coffee, corn, cashew nuts and tropical fruits to countries worldwide.</p>

<div class="wrapper-card-content">
<button class="btn-explore"><a href="{{ route('corn-detail') }}">Explore More</a></button>
<h1>.03</h1>
</div>

<div class="card-content-logo">
<img src="{{asset ('assets/images/card-logo-3.png')}}">
<div>
</div>
</div>
</div>
</div>
</div>



<div class="col-lg-4 col-md-6 col-sm-12 col-12">
<div class="card">
<img src="{{asset ('assets/images/card-4.png')}}">
<div class="card-content">
<h4>Cashew Nuts</h4>
<p>We specialize in exporting agricultural products such as rice, coffee, corn, cashew nuts and tropical fruits to countries worldwide.</p>

<div class="wrapper-card-content">
<button class="btn-explore"><a href="{{ route('cashewnuts-detail') }}">Explore More</a></button>
<h1>.04</h1>
</div>

<div class="card-content-logo">
<img src="{{asset ('assets/images/card-logo-4.png')}}">
<div>
</div>
</div>
</div>
</div>
</div>



<div class="col-lg-4 col-md-6 col-sm-12 col-12">
<div class="card">
<img src="{{asset ('assets/images/card-5.png')}}">
<div class="card-content">
<h4>Potato / Cassava</h4>
<p>We specialize in exporting agricultural products such as rice, coffee, corn, cashew nuts and tropical fruits to countries worldwide.</p>

<div class="wrapper-card-content">
<button class="btn-explore"><a href="{{ route('potatocassava-detail') }}">Explore More</a></button>
<h1>.05</h1>
</div>

<div class="card-content-logo">
<img src="{{asset ('assets/images/card-logo-5.png')}}">
<div>
</div>
</div>
</div>
</div>
</div>



<div class="col-lg-4 col-md-6 col-sm-12 col-12">
<div class="card">
<img src="{{asset ('assets/images/card-6.png')}}">
<div class="card-content">
<h4>Mango</h4>
<p>We specialize in exporting agricultural products such as rice, coffee, corn, cashew nuts and tropical fruits to countries worldwide.</p>

<div class="wrapper-card-content">
<button class="btn-explore"><a href="{{ route('mango-detail') }}">Explore More</a></button>
<h1>.06</h1>
</div>

<div class="card-content-logo">
<img src="{{asset ('assets/images/card-logo-6.png')}}">
<div>
</div>
</div>
</div>
</div>
</div>



</div>
</div>
</section>

<section>
 <div class="achievement">
   <img class="firstbg-achievement"  src="{{ asset('assets/images/bg-3.png') }}">


   <div class="achievement-content">

 <h4>Achievenmet in Number</h4>

 <div class="container wrapper-achievement-card">
    <div class="row">

<div class="col-lg-3 col-md-6 col-sm-6 col-6">
    <div class="achievement-card">
     <div class="achievement-card-img">
       <img src="{{ asset('assets/images/achievement-card-img-1.png') }}">
     </div>

    <div class="achievement-card-content">
     <h1>3</h1>
     <p>Tons of coffee Exported
to Russia</p>
    </div>
    </div>
</div>

<div class="col-lg-3 col-md-6 col-sm-6 col-6 ">
    <div class="achievement-card">
     <div class="achievement-card-img">
       <img src="{{ asset('assets/images/achievement-card-img-2.png') }}">
     </div>

    <div class="achievement-card-content">
     <h1>100+</h1>
     <p>Local Farmers Supported</p>
    </div>
    </div>
</div>


<div class="col-lg-3 col-md-6 col-sm-6 col-6">
    <div class="achievement-card">
     <div class="achievement-card-img">
       <img src="{{ asset('assets/images/achievement-card-img-3.png') }}">
     </div>

    <div class="achievement-card-content">
     <h1>500+</h1>
     <p>Export
Products</p>
    </div>
    </div>
</div>


<div class="col-lg-3 col-md-6 col-sm-6 col-6">
    <div class="achievement-card">
     <div class="achievement-card-img">
       <img src="{{ asset('assets/images/achievement-card-img-4.png') }}">
     </div>

    <div class="achievement-card-content">
     <h1>10+</h1>
     <p>Years in
Operations</p>
    </div>
    </div>
</div>

    </div>
 </div>

   </div>

   <div class="achievement-main-logo">
    <img src="{{ asset ('assets/images/achievement-main-logo.png') }}">
   </div>

   <div class="background-achievement-main">
      <img src="{{ asset('assets/images/background-achievement-main.png') }}" alt="">
   </div>
 </div>
</section>

<section>
    <div class="FAQ-background">
        <div class="container">
        <div class="FAQ-content">
         <h1>FAQs</h1>
        <h5>For buyers/Importers</h5>
        </div>

        <div class="row">
           <div class="col-lg-6 col-md-6 col-12">
             <div class="drop-down-card">
                <div class="qanda">
                 <p class="question"><span>Q:</span> What Cambodian products does RSL Trading export?</p>
                  <p class="answer">A: RSL Trading exports premium Cambodian agricultural products, including rice, coffee beans, corn, cashew nuts, mangoes, and cassava. All products are sourced directly from local farmers in Cambodia.</p>
                </div>

                <button onclick="toggleDropdown(this)" >
           <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M9.70851 15.6649C9.32815 16.3536 8.33811 16.3536 7.95775 15.6649L0.126071 1.48343C-0.241993 0.816944 0.240089 1.9447e-07 1.00145 2.61031e-07L16.6648 1.63036e-06C17.4262 1.69693e-06 17.9083 0.816944 17.5402 1.48343L9.70851 15.6649Z" fill="#D9D9D9"/>
</svg>

                </button>
             </div>
           </div>

               <div class="col-lg-6 col-md-6 col-12">
             <div class="drop-down-card">
                <div class="qanda">
                 <p class="question"><span>Q:</span>What is the minimum order quantity (MOQ) for exports?</p>
                  <p class="answer">A: RSL Trading exports premium Cambodian agricultural products, including rice, coffee beans, corn, cashew nuts, mangoes, and cassava. All products are sourced directly from local farmers in Cambodia.</p>
                </div>

                <button onclick="toggleDropdown(this)" >
           <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M9.70851 15.6649C9.32815 16.3536 8.33811 16.3536 7.95775 15.6649L0.126071 1.48343C-0.241993 0.816944 0.240089 1.9447e-07 1.00145 2.61031e-07L16.6648 1.63036e-06C17.4262 1.69693e-06 17.9083 0.816944 17.5402 1.48343L9.70851 15.6649Z" fill="#D9D9D9"/>
</svg>

                </button>
             </div>
           </div>


               <div class="col-lg-6 col-md-6 col-12">
             <div class="drop-down-card">
                <div class="qanda">
                 <p class="question"><span>Q:</span> Which countries do you export to?</p>
                  <p class="answer">A: RSL Trading exports premium Cambodian agricultural products, including rice, coffee beans, corn, cashew nuts, mangoes, and cassava. All products are sourced directly from local farmers in Cambodia.</p>
                </div>

                <button onclick="toggleDropdown(this)" >
           <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M9.70851 15.6649C9.32815 16.3536 8.33811 16.3536 7.95775 15.6649L0.126071 1.48343C-0.241993 0.816944 0.240089 1.9447e-07 1.00145 2.61031e-07L16.6648 1.63036e-06C17.4262 1.69693e-06 17.9083 0.816944 17.5402 1.48343L9.70851 15.6649Z" fill="#D9D9D9"/>
</svg>

                </button>
             </div>
           </div>


               <div class="col-lg-6 col-md-6 col-12">
             <div class="drop-down-card">
                <div class="qanda">
                 <p class="question"><span>Q:</span> Which countries do you export to?</p>
                  <p class="answer">A: RSL Trading exports premium Cambodian agricultural products, including rice, coffee beans, corn, cashew nuts, mangoes, and cassava. All products are sourced directly from local farmers in Cambodia.</p>
                </div>

                <button onclick="toggleDropdown(this)" >
           <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M9.70851 15.6649C9.32815 16.3536 8.33811 16.3536 7.95775 15.6649L0.126071 1.48343C-0.241993 0.816944 0.240089 1.9447e-07 1.00145 2.61031e-07L16.6648 1.63036e-06C17.4262 1.69693e-06 17.9083 0.816944 17.5402 1.48343L9.70851 15.6649Z" fill="#D9D9D9"/>
</svg>

                </button>
             </div>
           </div>

            <div class="col-lg-6 col-md-6 col-12">
             <div class="drop-down-card">
                <div class="qanda">
                 <p class="question"><span>Q:</span>  Can RSL Trading provide custom packaging or labeling for buyers?</p>
                  <p class="answer">A: RSL Trading exports premium Cambodian agricultural products, including rice, coffee beans, corn, cashew nuts, mangoes, and cassava. All products are sourced directly from local farmers in Cambodia.</p>
                </div>

                <button onclick="toggleDropdown(this)" >
           <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M9.70851 15.6649C9.32815 16.3536 8.33811 16.3536 7.95775 15.6649L0.126071 1.48343C-0.241993 0.816944 0.240089 1.9447e-07 1.00145 2.61031e-07L16.6648 1.63036e-06C17.4262 1.69693e-06 17.9083 0.816944 17.5402 1.48343L9.70851 15.6649Z" fill="#D9D9D9"/>
</svg>

                </button>
             </div>
           </div>


            <div class="col-lg-6 col-md-6 col-12">
             <div class="drop-down-card">
                <div class="qanda">
                 <p class="question"><span>Q:</span> How can I order Cambodian agricultural products from RSL Trading?</p>
                  <p class="answer">A: RSL Trading exports premium Cambodian agricultural products, including rice, coffee beans, corn, cashew nuts, mangoes, and cassava. All products are sourced directly from local farmers in Cambodia.</p>
                </div>

                <button onclick="toggleDropdown(this)" >
           <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M9.70851 15.6649C9.32815 16.3536 8.33811 16.3536 7.95775 15.6649L0.126071 1.48343C-0.241993 0.816944 0.240089 1.9447e-07 1.00145 2.61031e-07L16.6648 1.63036e-06C17.4262 1.69693e-06 17.9083 0.816944 17.5402 1.48343L9.70851 15.6649Z" fill="#D9D9D9"/>
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
                 <p class="question"><span>Q:</span> How can local farmers supply products to RSL Trading?</p>
                  <p class="answer">A:  Farmers from across Cambodia can partner with RSL Trading to export rice, coffee, corn, fruits, and other crops. We guide farmers on quality standards, harvesting, and packaging to meet export requirements.</p>
                </div>

                <button onclick="toggleDropdown(this)" >
           <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M9.70851 15.6649C9.32815 16.3536 8.33811 16.3536 7.95775 15.6649L0.126071 1.48343C-0.241993 0.816944 0.240089 1.9447e-07 1.00145 2.61031e-07L16.6648 1.63036e-06C17.4262 1.69693e-06 17.9083 0.816944 17.5402 1.48343L9.70851 15.6649Z" fill="#D9D9D9"/>
</svg>

                </button>
             </div>
           </div>

               <div class="col-lg-6 col-md-6 col-12">
             <div class="drop-down-card">
                <div class="qanda">
                 <p class="question"><span>Q:</span> How does RSL Trading ensure fair pricing for farmers?</p>
                  <p class="answer">A:  Farmers from across Cambodia can partner with RSL Trading to export rice, coffee, corn, fruits, and other crops. We guide farmers on quality standards, harvesting, and packaging to meet export requirements.</p>
                </div>

                <button onclick="toggleDropdown(this)" >
           <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M9.70851 15.6649C9.32815 16.3536 8.33811 16.3536 7.95775 15.6649L0.126071 1.48343C-0.241993 0.816944 0.240089 1.9447e-07 1.00145 2.61031e-07L16.6648 1.63036e-06C17.4262 1.69693e-06 17.9083 0.816944 17.5402 1.48343L9.70851 15.6649Z" fill="#D9D9D9"/>
</svg>

                </button>
             </div>
           </div>

               <div class="col-lg-6 col-md-6 col-12">
             <div class="drop-down-card">
                <div class="qanda">
                 <p class="question"><span>Q:</span>  What support does RSL Trading provide to farmers?</p>
                  <p class="answer">A:  Farmers from across Cambodia can partner with RSL Trading to export rice, coffee, corn, fruits, and other crops. We guide farmers on quality standards, harvesting, and packaging to meet export requirements.</p>
                </div>

                <button onclick="toggleDropdown(this)" >
           <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M9.70851 15.6649C9.32815 16.3536 8.33811 16.3536 7.95775 15.6649L0.126071 1.48343C-0.241993 0.816944 0.240089 1.9447e-07 1.00145 2.61031e-07L16.6648 1.63036e-06C17.4262 1.69693e-06 17.9083 0.816944 17.5402 1.48343L9.70851 15.6649Z" fill="#D9D9D9"/>
</svg>

                </button>
             </div>
           </div>

               <div class="col-lg-6 col-md-6 col-12">
             <div class="drop-down-card">
                <div class="qanda">
                 <p class="question"><span>Q:</span>  Which types of Cambodian products are suitable for export?</p>
                  <p class="answer">A:  Farmers from across Cambodia can partner with RSL Trading to export rice, coffee, corn, fruits, and other crops. We guide farmers on quality standards, harvesting, and packaging to meet export requirements.</p>
                </div>

                <button onclick="toggleDropdown(this)" >
           <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M9.70851 15.6649C9.32815 16.3536 8.33811 16.3536 7.95775 15.6649L0.126071 1.48343C-0.241993 0.816944 0.240089 1.9447e-07 1.00145 2.61031e-07L16.6648 1.63036e-06C17.4262 1.69693e-06 17.9083 0.816944 17.5402 1.48343L9.70851 15.6649Z" fill="#D9D9D9"/>
</svg>

                </button>
             </div>
           </div>


             <div class="col-lg-6 col-md-6 col-12">
             <div class="drop-down-card">
                <div class="qanda">
                 <p class="question"><span>Q:</span>  Are there contracts or agreements with farmers?</p>
                  <p class="answer">A:  Farmers from across Cambodia can partner with RSL Trading to export rice, coffee, corn, fruits, and other crops. We guide farmers on quality standards, harvesting, and packaging to meet export requirements.</p>
                </div>

                <button onclick="toggleDropdown(this)" >
           <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M9.70851 15.6649C9.32815 16.3536 8.33811 16.3536 7.95775 15.6649L0.126071 1.48343C-0.241993 0.816944 0.240089 1.9447e-07 1.00145 2.61031e-07L16.6648 1.63036e-06C17.4262 1.69693e-06 17.9083 0.816944 17.5402 1.48343L9.70851 15.6649Z" fill="#D9D9D9"/>
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

<section>
<div class="wrapper-contact container">
<p>Contact Form</p>
<div class="row">
<div class="col-lg-6 col-md-6 input-field">
  <input class="col-12" placeholder="Name">
</div>

<div class="col-lg-6 col-md-6 input-field">
  <input class="col-12" placeholder="Mobile Phone ">
</div>

<div class="col-lg-6 col-md-6 input-field">
  <input class="col-12" placeholder="Company Name">
</div>

<div class="col-lg-6 col-md-6 input-field">
 <select class="form-select" aria-label="Default select example">
 <option selected>Import</option>
  <option value="1">Select Commodities</option>
  <option value="2">Select Commodities</option>
  <option value="3">Select Commodities</option>
</select>
</div>

<div class="col-lg-6 col-md-6 input-field">
<select class="form-select" aria-label="Default select example">
  <option selected>Country</option>
  <option value="1">Cambodia</option>
  <option value="2">China</option>
  <option value="3">USA</option>
</select>

</div>

<div class="col-lg-6 col-md-6 input-field">
  <input class="col-12" placeholder="Export
">
</div>

<div class="col-lg-6 col-md-6 input-field">
  <input class="col-12" placeholder="Adress
">
</div>

<div class="col-lg-6 col-md-6 input-field">
  <input class="col-12" placeholder="Email
">
</div>

<div class="col-12 input-field">
  <textarea class="col-12" placeholder="Messages
"></textarea>
</div>
</div>

<div class="confirm-policy">
<input type="checkbox">
<div class="confrim-policy-text">
<p>I consent to having this website store my submitted
information so they can respond to my enquiry.”
</p>
</div>
</div>


<div class="d-flex justify-content-center">
  <button class="btn-Submit">
      <img src="{{ asset('assets/images/btn-submit-bg.png') }}">
      <p>Submit</p>
  </button>
</div>
</div>
</section>






@endsection


@section('home')
    <script src="{{ asset('assets/js/home.js') }}"></script>
@endsection
