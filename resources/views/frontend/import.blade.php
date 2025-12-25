@extends('layouts.master')

@section('title')
    <title>Import - RSL Trading</title>
@endsection

@section('css')
     <link rel="stylesheet" href="{{ asset('assets/css/import.css') }}">
@endsection

@section('content') 

<section>
<div class="main-banner">
  <img class="img-banner" src="{{ asset('assets/images/banner-img-1.png') }}">
     <div class="main-banner-h1-bg">
        <h1>Import</h1>
       <h1>Commodities</h1>
     </div>
     <div class="main-banner-p-bg">
    <p>Premium Cambodian Agricultural Products – Rice, Coffee, Corn, Cashew Nuts, Mangoes & Cassava, Exported Worldwide with Quality You Can Trust.</p>
     </div>
    <button class="btn-Interest-to-export">Interest to Import</button>
</div>
</section>

<section>
    <div class="first-card">
      <div class="first-card-background">
        <img src="{{ asset('assets/images/second-bg.png') }}">
      </div>
      <div class="main-card-product">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 col-12">
          <div class="card-product">
            <img class="card-product-bg" src="{{ asset('assets/images/export-card-product-1.png') }}">
             <div class="card-product-detail">
                 <h5> Premium Rice Varieties</h5>
                 <p>High-quality imported aromatic and medium-grain rice varieties trusted by international buyers.</p>    
                <div class="smaill-detail-card">
                <button><a>Basmati Rice (India)</a></button>
               <button><a>Yellow Corn</a></button>
                </div>
                             
                  <div class="btn-card-interest-to-export">
                  <button >Interest to Export</button>
                </div>

              <div class="card-no">
                <p>01</p>
              </div>
             </div>
        </div>
          </div>


                    <div class="col-lg-3 col-md-6 col-12">
          <div class="card-product">
            <img class="card-product-bg" src="{{ asset('assets/images/export-card-product-1.png') }}">
             <div class="card-product-detail">
                 <h5> Whole Spices</h5>
                 <p>Sourced from reputable growers to ensure purity, aroma, and strong market demand.</p>    
                <div class="smaill-detail-card">
                <button><a>Cumin Seeds</a></button>
               <button><a>Turmeric (Whole)</a></button>
                    <button><a>Red Peppers (Whole)</a></button>
                         <button><a>Cardamom (Green)</a></button>
                </div>
                             
                  <div class="btn-card-interest-to-export">
                  <button >Interest to Export</button>
                </div>

              <div class="card-no">
                <p>02</p>
              </div>
             </div>
        </div>
          </div>



                    <div class="col-lg-3 col-md-6 col-12">
          <div class="card-product">
            <img class="card-product-bg" src="{{ asset('assets/images/export-card-product-1.png') }}">
             <div class="card-product-detail">
                 <h5> Spice Powders</h5>
                 <p>Finely milled premium spice powders ready for wholesale and reprocessing.</p>    
                <div class="smaill-detail-card">
                <button><a>Turmeric Powder</a></button>
               <button><a>Red Pepper Powder</a></button>
                </div>
                             
                  <div class="btn-card-interest-to-export">
                  <button >Interest to Export</button>
                </div>

              <div class="card-no">
                <p>03</p>
              </div>
             </div>
        </div>
          </div>



                    <div class="col-lg-3 col-md-6 col-12">
          <div class="card-product">
            <img class="card-product-bg" src="{{ asset('assets/images/export-card-product-1.png') }}">
             <div class="card-product-detail">
                 <h5> Dehydrated Vegetables</h5>
                 <p>Long-shelf-life dehydrated garlic and onion products ideal for food production and distribution.</p>    
                <div class="smaill-detail-card">
                <button><a>Dried Garlic</a></button>
               <button><a>Yellow Corn</a></button>
                </div>
                             
                  <div class="btn-card-interest-to-export">
                  <button >Interest to Export</button>
                </div>

              <div class="card-no">
                <p>04</p>
              </div>
             </div>
        </div>
          </div>

        </div>
      </div>
      </div>
    </div>
</section>

<section>

  <div class="partner-main">
    <img class="partner-bg" src="{{ asset('assets/images/bg-3.png') }}">
    <h1>Why Partner with RSL Trading?</h1>
    
      <div class="partner-card-wrapper">
      <div class="partner-card">
         <svg width="82" height="82" viewBox="0 0 82 82" fill="none" xmlns="http://www.w3.org/2000/svg">
<mask id="mask0_47_4715" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="82" height="82">
<path d="M80.5 80.5V1.5H1.5V80.5H80.5Z" fill="white" stroke="white" stroke-width="3"/>
</mask>
<g mask="url(#mask0_47_4715)">
<path d="M8.00732 45.9648C8.89139 45.9648 9.60889 46.6823 9.60889 47.5664C9.60889 48.4505 8.89139 49.168 8.00732 49.168C7.12326 49.168 6.40576 48.4505 6.40576 47.5664C6.40576 46.6823 7.12326 45.9648 8.00732 45.9648Z" fill="white"/>
<path d="M14.4136 66.7948C14.4088 68.5598 12.977 69.9883 11.2104 69.9883H1.60107V41.1602H11.2104C12.9802 41.1602 14.4136 42.5937 14.4136 44.3633V66.7948Z" stroke="white" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M54.462 59.7943L74.142 53.0295C76.2417 52.2718 78.7289 52.9877 79.7891 54.9496C81.2289 57.6132 79.9685 60.5504 77.5229 61.5288L47.5977 74.705C45.1505 75.8181 42.4935 76.3945 39.8061 76.3945C36.3948 76.3945 33.0475 75.4672 30.1231 73.7119L21.7469 68.6864C19.8138 67.5267 16.6603 66.8766 14.4133 66.7948" stroke="white" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M14.4136 44.3633H27.0931C28.7444 44.3633 30.3667 44.7877 31.8049 45.5981L40.2676 50.3579C40.7481 50.6286 41.2878 50.7695 41.8387 50.7695H52.2105C54.8642 50.7695 57.0151 52.9204 57.0151 55.5742C57.0151 57.368 56.0334 58.9311 54.576 59.7559C53.8777 60.1531 53.0705 60.3789 52.2105 60.3789H35.929" stroke="white" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M27.2183 13.2947C28.5154 8.86784 32.2041 5.5896 37.1078 5.5896C45.0067 5.5896 47.5019 14.5984 47.5019 14.5984C47.5019 14.5984 49.9971 5.5896 57.8976 5.5896C64.0508 5.5896 68.2918 10.7546 68.2918 16.8724C68.2918 24.9685 60.6587 30.388 47.6941 41.6248C39.8841 34.8556 33.5491 30.1257 29.9542 25.4166" stroke="white" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M27.0659 18.0977C27.95 18.0977 28.6675 18.8152 28.6675 19.6992C28.6675 20.5833 27.95 21.3008 27.0659 21.3008C26.1819 21.3008 25.4644 20.5833 25.4644 19.6992C25.4644 18.8152 26.1819 18.0977 27.0659 18.0977Z" fill="white"/>
</g>
</svg>
<h5>Strong Financial Stabilityt</h5>
<p>We have the resources and expertise to handle large-scale exports efficiently and reliably.</p>
      </div>


          <div class="partner-card">
         <svg width="82" height="82" viewBox="0 0 82 82" fill="none" xmlns="http://www.w3.org/2000/svg">
<mask id="mask0_47_4715" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="82" height="82">
<path d="M80.5 80.5V1.5H1.5V80.5H80.5Z" fill="white" stroke="white" stroke-width="3"/>
</mask>
<g mask="url(#mask0_47_4715)">
<path d="M8.00732 45.9648C8.89139 45.9648 9.60889 46.6823 9.60889 47.5664C9.60889 48.4505 8.89139 49.168 8.00732 49.168C7.12326 49.168 6.40576 48.4505 6.40576 47.5664C6.40576 46.6823 7.12326 45.9648 8.00732 45.9648Z" fill="white"/>
<path d="M14.4136 66.7948C14.4088 68.5598 12.977 69.9883 11.2104 69.9883H1.60107V41.1602H11.2104C12.9802 41.1602 14.4136 42.5937 14.4136 44.3633V66.7948Z" stroke="white" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M54.462 59.7943L74.142 53.0295C76.2417 52.2718 78.7289 52.9877 79.7891 54.9496C81.2289 57.6132 79.9685 60.5504 77.5229 61.5288L47.5977 74.705C45.1505 75.8181 42.4935 76.3945 39.8061 76.3945C36.3948 76.3945 33.0475 75.4672 30.1231 73.7119L21.7469 68.6864C19.8138 67.5267 16.6603 66.8766 14.4133 66.7948" stroke="white" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M14.4136 44.3633H27.0931C28.7444 44.3633 30.3667 44.7877 31.8049 45.5981L40.2676 50.3579C40.7481 50.6286 41.2878 50.7695 41.8387 50.7695H52.2105C54.8642 50.7695 57.0151 52.9204 57.0151 55.5742C57.0151 57.368 56.0334 58.9311 54.576 59.7559C53.8777 60.1531 53.0705 60.3789 52.2105 60.3789H35.929" stroke="white" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M27.2183 13.2947C28.5154 8.86784 32.2041 5.5896 37.1078 5.5896C45.0067 5.5896 47.5019 14.5984 47.5019 14.5984C47.5019 14.5984 49.9971 5.5896 57.8976 5.5896C64.0508 5.5896 68.2918 10.7546 68.2918 16.8724C68.2918 24.9685 60.6587 30.388 47.6941 41.6248C39.8841 34.8556 33.5491 30.1257 29.9542 25.4166" stroke="white" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M27.0659 18.0977C27.95 18.0977 28.6675 18.8152 28.6675 19.6992C28.6675 20.5833 27.95 21.3008 27.0659 21.3008C26.1819 21.3008 25.4644 20.5833 25.4644 19.6992C25.4644 18.8152 26.1819 18.0977 27.0659 18.0977Z" fill="white"/>
</g>
</svg>
<h5>Integrity You Can Trust</h5>
<p>We operate with transparency, honesty, and professionalism in every transaction.</p>

      </div>
          <div class="partner-card">
         <svg width="82" height="82" viewBox="0 0 82 82" fill="none" xmlns="http://www.w3.org/2000/svg">
<mask id="mask0_47_4715" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="82" height="82">
<path d="M80.5 80.5V1.5H1.5V80.5H80.5Z" fill="white" stroke="white" stroke-width="3"/>
</mask>
<g mask="url(#mask0_47_4715)">
<path d="M8.00732 45.9648C8.89139 45.9648 9.60889 46.6823 9.60889 47.5664C9.60889 48.4505 8.89139 49.168 8.00732 49.168C7.12326 49.168 6.40576 48.4505 6.40576 47.5664C6.40576 46.6823 7.12326 45.9648 8.00732 45.9648Z" fill="white"/>
<path d="M14.4136 66.7948C14.4088 68.5598 12.977 69.9883 11.2104 69.9883H1.60107V41.1602H11.2104C12.9802 41.1602 14.4136 42.5937 14.4136 44.3633V66.7948Z" stroke="white" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M54.462 59.7943L74.142 53.0295C76.2417 52.2718 78.7289 52.9877 79.7891 54.9496C81.2289 57.6132 79.9685 60.5504 77.5229 61.5288L47.5977 74.705C45.1505 75.8181 42.4935 76.3945 39.8061 76.3945C36.3948 76.3945 33.0475 75.4672 30.1231 73.7119L21.7469 68.6864C19.8138 67.5267 16.6603 66.8766 14.4133 66.7948" stroke="white" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M14.4136 44.3633H27.0931C28.7444 44.3633 30.3667 44.7877 31.8049 45.5981L40.2676 50.3579C40.7481 50.6286 41.2878 50.7695 41.8387 50.7695H52.2105C54.8642 50.7695 57.0151 52.9204 57.0151 55.5742C57.0151 57.368 56.0334 58.9311 54.576 59.7559C53.8777 60.1531 53.0705 60.3789 52.2105 60.3789H35.929" stroke="white" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M27.2183 13.2947C28.5154 8.86784 32.2041 5.5896 37.1078 5.5896C45.0067 5.5896 47.5019 14.5984 47.5019 14.5984C47.5019 14.5984 49.9971 5.5896 57.8976 5.5896C64.0508 5.5896 68.2918 10.7546 68.2918 16.8724C68.2918 24.9685 60.6587 30.388 47.6941 41.6248C39.8841 34.8556 33.5491 30.1257 29.9542 25.4166" stroke="white" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M27.0659 18.0977C27.95 18.0977 28.6675 18.8152 28.6675 19.6992C28.6675 20.5833 27.95 21.3008 27.0659 21.3008C26.1819 21.3008 25.4644 20.5833 25.4644 19.6992C25.4644 18.8152 26.1819 18.0977 27.0659 18.0977Z" fill="white"/>
</g>
</svg>
<h5>High-Quality Products</h5>
<p>Our agricultural products are carefully sourced from local farmers and meet international standards.</p>

      </div>

          <div class="partner-card">
       <svg width="82" height="75" viewBox="0 0 82 75" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M73.3737 43.495C72.991 43.495 72.7359 43.3674 72.4808 43.1123C71.9706 42.6021 71.9706 41.8368 72.4808 41.3266C81.0267 32.6532 81.0267 18.7501 72.4808 10.0766C68.2716 5.86745 62.7869 3.57153 56.9196 3.57153C51.0522 3.57153 45.44 5.86745 41.3584 10.0766L28.3481 22.9593C29.7512 23.9797 31.4094 24.6174 33.0675 24.6174C35.1084 24.745 37.0216 23.9797 38.4247 22.5766L38.9349 22.0664C41.1033 19.3879 44.4196 18.495 47.4808 19.5154C48.6288 19.8981 49.7767 20.1532 50.9247 20.1532C54.4961 20.1532 57.8124 18.2399 59.8533 15.0511C60.2359 14.4134 61.0012 14.2858 61.639 14.6685C62.2767 15.0511 62.4043 15.8164 62.0216 16.4542C59.5982 20.4083 55.389 22.7042 50.9247 22.7042C49.3941 22.7042 47.991 22.4491 46.5879 21.9389C44.5471 21.1736 42.3788 21.9389 40.8481 23.7246C40.593 23.9797 40.4655 24.2348 40.2104 24.4899C38.2971 26.4032 35.7461 27.4236 32.94 27.296C30.1339 27.1685 27.5828 26.0205 25.542 23.9797L24.6492 23.0868L39.4451 8.29092C44.0369 3.69908 50.2869 1.02051 56.9196 1.02051C63.5522 1.02051 69.6747 3.57153 74.3941 8.29092C83.9604 17.8572 83.9604 33.546 74.3941 43.1123C74.0114 43.3674 73.7563 43.495 73.3737 43.495Z" fill="white"/>
<path d="M37.532 75.0002C35.7462 75.0002 34.2156 74.3625 32.9401 73.0869C30.3891 70.5359 30.3891 66.4543 32.9401 63.9033L37.7871 59.0563C39.0626 57.7808 40.5932 57.1431 42.3789 57.1431C44.1646 57.1431 45.6952 57.7808 46.9707 59.0563C49.5218 61.6074 49.5218 65.689 46.9707 68.24L42.1238 73.0869C40.8483 74.2349 39.1901 75.0002 37.532 75.0002ZM42.2513 59.6941C41.2309 59.6941 40.2105 60.0767 39.4452 60.842L34.5983 65.689C33.0677 67.2196 33.0677 69.7706 34.5983 71.3012C36.1289 72.8318 38.6799 72.8318 40.2105 71.3012L45.0575 66.4543C46.5881 64.9237 46.5881 62.3727 45.0575 60.842C44.2922 60.0767 43.3993 59.6941 42.2513 59.6941Z" fill="white"/>
<path d="M29.2412 68.495C27.4555 68.495 25.7973 67.8572 24.6493 66.5817C22.0983 64.0307 22.0983 59.949 24.6493 57.398L31.9198 50.1276C33.1953 48.8521 34.8534 48.2144 36.5116 48.2144C38.1698 48.2144 39.9555 48.8521 41.1034 50.1276C43.6545 52.6786 43.6545 56.7603 41.1034 59.3113L33.833 66.5817C32.5575 67.7297 30.8993 68.495 29.2412 68.495ZM36.5116 50.6378C35.4912 50.6378 34.4708 51.0205 33.7055 51.7858L26.4351 59.0562C24.9045 60.5868 24.9045 63.1378 26.4351 64.6684C27.9657 66.199 30.5167 66.199 32.0473 64.6684L39.3177 57.398C40.8483 55.8674 40.8483 53.3164 39.3177 51.7858C38.5524 51.148 37.532 50.6378 36.5116 50.6378Z" fill="white"/>
<path d="M20.8226 61.9898C19.0369 61.9898 17.5063 61.3521 16.2308 60.0766L16.1032 59.949C13.5522 57.398 13.5522 53.3164 16.1032 50.8929L27.0726 39.9235C28.3481 38.648 29.8787 38.0103 31.6644 38.0103C33.4501 38.0103 34.9808 38.648 36.2563 39.9235L36.3838 40.0511C38.9348 42.6021 38.9348 46.6837 36.3838 49.1072L25.4144 60.0766C24.1389 61.3521 22.6083 61.9898 20.8226 61.9898ZM31.792 40.4337C30.7716 40.4337 29.7512 40.8164 28.9859 41.5817L18.0165 52.5511C16.4859 54.0817 16.4859 56.5051 18.0165 58.0358L18.144 58.1633C19.6746 59.6939 22.2257 59.6939 23.6287 58.1633L34.5981 47.1939C36.1287 45.6633 36.1287 43.2398 34.5981 41.7092L34.4706 41.5817C33.8328 40.9439 32.8124 40.4337 31.792 40.4337Z" fill="white"/>
<path d="M14.3176 53.5716C12.5319 53.5716 10.8737 52.9338 9.72577 51.6583C7.17474 49.1073 7.17474 45.0257 9.72577 42.4746L16.3584 35.842C17.6339 34.5665 19.2921 33.9287 20.9503 33.9287C22.736 33.9287 24.3941 34.5665 25.5421 35.842C28.0931 38.393 28.0931 42.4746 25.5421 45.0257L18.9094 51.6583C17.7615 52.9338 16.1033 53.5716 14.3176 53.5716ZM20.9503 36.4797C19.9298 36.4797 18.9094 36.8624 18.1441 37.6277L11.5115 44.2603C9.98087 45.791 9.98087 48.342 11.5115 49.8726C13.0421 51.4032 15.5931 51.4032 17.1237 49.8726L23.7564 43.2399C25.287 41.7093 25.287 39.1583 23.7564 37.6277C22.9911 36.8624 21.9707 36.4797 20.9503 36.4797Z" fill="white"/>
<path d="M10.1084 44.5153C9.72577 44.5153 9.47066 44.3878 9.21556 44.1327L7.17474 42.0918C-2.39158 32.5255 -2.39158 16.8367 7.17474 7.27041C11.7666 2.67857 18.0166 0 24.6492 0C31.2819 0 37.4043 2.55102 42.1237 7.27041C42.6339 7.78061 42.6339 8.54592 42.1237 9.05612C41.6135 9.56633 40.8482 9.56633 40.338 9.05612C36.1288 4.84694 30.6441 2.55102 24.7768 2.55102C18.9094 2.55102 13.2972 4.84694 9.21556 9.05612C0.669644 17.7296 0.669644 31.6327 9.21556 40.3061L11.2564 42.3469C11.7666 42.8571 11.7666 43.6225 11.2564 44.1327C10.7462 44.3878 10.4911 44.5153 10.1084 44.5153Z" fill="white"/>
<path d="M54.7513 67.7299C52.9655 67.7299 51.4349 67.0922 50.1594 65.8167L45.44 61.0973C44.9298 60.5871 44.9298 59.8218 45.44 59.3116C45.9502 58.8013 46.7155 58.8013 47.2257 59.3116L51.9451 64.0309C53.4757 65.5616 56.0268 65.5616 57.5574 64.0309C59.088 62.5003 59.088 59.9493 57.5574 58.4187L50.9247 51.786C50.4145 51.2758 50.4145 50.5105 50.9247 50.0003C51.4349 49.4901 52.2002 49.4901 52.7104 50.0003L59.3431 56.633C61.8941 59.184 61.8941 63.2656 59.3431 65.8167C58.0676 66.9646 56.4094 67.7299 54.7513 67.7299Z" fill="white"/>
<path d="M45.4401 73.3418C44.0371 73.3418 42.7615 72.9591 41.6136 72.0663C41.1034 71.6836 40.9758 70.7908 41.3585 70.2805C41.7411 69.7703 42.634 69.6428 43.1442 70.0254C44.6748 71.1734 46.9707 71.0459 48.2462 69.6428C49.7768 68.1122 49.7768 65.5612 48.2462 64.0305L47.0983 62.755C46.5881 62.2448 46.5881 61.4795 47.0983 60.9693C47.6085 60.4591 48.3738 60.4591 48.884 60.9693L50.0319 62.1173C52.583 64.6683 52.583 68.7499 50.0319 71.301C48.884 72.704 47.0983 73.3418 45.4401 73.3418Z" fill="white"/>
<path d="M63.9351 62.1178C62.277 62.1178 60.6188 61.4801 59.3433 60.2045L47.481 48.3423C46.9708 47.8321 46.9708 47.0668 47.481 46.5566C47.9912 46.0464 48.7566 46.0464 49.2668 46.5566L61.129 58.4188C62.6596 59.9495 65.2106 59.9495 66.7412 58.4188C68.2719 56.8882 68.2719 54.3372 66.7412 52.8066L55.8994 41.9648C55.3892 41.4546 55.3892 40.6892 55.8994 40.179C56.4096 39.6688 57.1749 39.6688 57.6851 40.179L68.527 51.0209C71.078 53.5719 71.078 57.6535 68.527 60.2045C67.2514 61.4801 65.5933 62.1178 63.9351 62.1178Z" fill="white"/>
<path d="M69.5472 52.9339C67.889 52.9339 66.2309 52.2961 64.9553 51.0206L53.0931 39.1583C52.5829 38.6481 52.5829 37.8828 53.0931 37.3726C53.6033 36.8624 54.3686 36.8624 54.8788 37.3726L66.7411 49.2349C68.2717 50.7655 70.8227 50.7655 72.2258 49.2349L72.3533 49.1073C73.8839 47.5767 73.8839 45.1532 72.3533 43.6226L54.1135 25.2553C53.6033 24.7451 53.6033 23.9798 54.1135 23.4696C54.6237 22.9594 55.389 22.9594 55.8992 23.4696L74.139 41.8369C76.69 44.3879 76.69 48.4696 74.139 50.893L74.0115 51.0206C72.8635 52.1685 71.3329 52.9339 69.5472 52.9339Z" fill="white"/>
</svg>


<h5>Supporting Local Farmers</h5>
<p>By partnering with RSL Trading, you help create jobs and improve incomes for Cambodian farmers.</p>

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
  <input class="col-12" placeholder="Import
">
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
       <option selected disabled>Select a Country</option>
    <option value="AF">Afghanistan</option>
    <option value="AL">Albania</option>
    <option value="DZ">Algeria</option>
    <option value="AD">Andorra</option>
    <option value="AO">Angola</option>
    <option value="AR">Argentina</option>
    <option value="AM">Armenia</option>
    <option value="AU">Australia</option>
    <option value="AT">Austria</option>
    <option value="AZ">Azerbaijan</option>
    <option value="BS">Bahamas</option>
    <option value="BH">Bahrain</option>
    <option value="BD">Bangladesh</option>
    <option value="BB">Barbados</option>
    <option value="BY">Belarus</option>
    <option value="BE">Belgium</option>
    <option value="BZ">Belize</option>
    <option value="BJ">Benin</option>
    <option value="BT">Bhutan</option>
    <option value="BO">Bolivia</option>
    <option value="BA">Bosnia and Herzegovina</option>
    <option value="BW">Botswana</option>
    <option value="BR">Brazil</option>
    <option value="BN">Brunei</option>
    <option value="BG">Bulgaria</option>
    <option value="BF">Burkina Faso</option>
    <option value="BI">Burundi</option>
    <option value="KH">Cambodia</option>
    <option value="CM">Cameroon</option>
    <option value="CA">Canada</option>
    <option value="CV">Cape Verde</option>
    <option value="CF">Central African Republic</option>
    <option value="TD">Chad</option>
    <option value="CL">Chile</option>
    <option value="CN">China</option>
    <option value="CO">Colombia</option>
    <option value="KM">Comoros</option>
    <option value="CG">Congo</option>
    <option value="CR">Costa Rica</option>
    <option value="HR">Croatia</option>
    <option value="CU">Cuba</option>
    <option value="CY">Cyprus</option>
    <option value="CZ">Czech Republic</option>
    <option value="DK">Denmark</option>
    <option value="DJ">Djibouti</option>
    <option value="DM">Dominica</option>
    <option value="DO">Dominican Republic</option>
    <option value="EC">Ecuador</option>
    <option value="EG">Egypt</option>
    <option value="SV">El Salvador</option>
    <option value="GQ">Equatorial Guinea</option>
    <option value="ER">Eritrea</option>
    <option value="EE">Estonia</option>
    <option value="ET">Ethiopia</option>
    <option value="FJ">Fiji</option>
    <option value="FI">Finland</option>
    <option value="FR">France</option>
    <option value="GA">Gabon</option>
    <option value="GM">Gambia</option>
    <option value="GE">Georgia</option>
    <option value="DE">Germany</option>
    <option value="GH">Ghana</option>
    <option value="GR">Greece</option>
    <option value="GD">Grenada</option>
    <option value="GT">Guatemala</option>
    <option value="GN">Guinea</option>
    <option value="GW">Guinea-Bissau</option>
    <option value="GY">Guyana</option>
    <option value="HT">Haiti</option>
    <option value="HN">Honduras</option>
    <option value="HU">Hungary</option>
    <option value="IS">Iceland</option>
    <option value="IN">India</option>
    <option value="ID">Indonesia</option>
    <option value="IR">Iran</option>
    <option value="IQ">Iraq</option>
    <option value="IE">Ireland</option>
    <option value="IL">Israel</option>
    <option value="IT">Italy</option>
    <option value="JM">Jamaica</option>
    <option value="JP">Japan</option>
    <option value="JO">Jordan</option>
    <option value="KZ">Kazakhstan</option>
    <option value="KE">Kenya</option>
    <option value="KI">Kiribati</option>
    <option value="KP">North Korea</option>
    <option value="KR">South Korea</option>
    <option value="KW">Kuwait</option>
    <option value="KG">Kyrgyzstan</option>
    <option value="LA">Laos</option>
    <option value="LV">Latvia</option>
    <option value="LB">Lebanon</option>
    <option value="LS">Lesotho</option>
    <option value="LR">Liberia</option>
    <option value="LY">Libya</option>
    <option value="LI">Liechtenstein</option>
    <option value="LT">Lithuania</option>
    <option value="LU">Luxembourg</option>
    <option value="MG">Madagascar</option>
    <option value="MW">Malawi</option>
    <option value="MY">Malaysia</option>
    <option value="MV">Maldives</option>
    <option value="ML">Mali</option>
    <option value="MT">Malta</option>
    <option value="MH">Marshall Islands</option>
    <option value="MR">Mauritania</option>
    <option value="MU">Mauritius</option>
    <option value="MX">Mexico</option>
    <option value="FM">Micronesia</option>
    <option value="MD">Moldova</option>
    <option value="MC">Monaco</option>
    <option value="MN">Mongolia</option>
    <option value="ME">Montenegro</option>
    <option value="MA">Morocco</option>
    <option value="MZ">Mozambique</option>
    <option value="MM">Myanmar</option>
    <option value="NA">Namibia</option>
    <option value="NR">Nauru</option>
    <option value="NP">Nepal</option>
    <option value="NL">Netherlands</option>
    <option value="NZ">New Zealand</option>
    <option value="NI">Nicaragua</option>
    <option value="NE">Niger</option>
    <option value="NG">Nigeria</option>
    <option value="NO">Norway</option>
    <option value="OM">Oman</option>
    <option value="PK">Pakistan</option>
    <option value="PW">Palau</option>
    <option value="PA">Panama</option>
    <option value="PG">Papua New Guinea</option>
    <option value="PY">Paraguay</option>
    <option value="PE">Peru</option>
    <option value="PH">Philippines</option>
    <option value="PL">Poland</option>
    <option value="PT">Portugal</option>
    <option value="QA">Qatar</option>
    <option value="RO">Romania</option>
    <option value="RU">Russia</option>
    <option value="RW">Rwanda</option>
    <option value="KN">Saint Kitts and Nevis</option>
    <option value="LC">Saint Lucia</option>
    <option value="VC">Saint Vincent and the Grenadines</option>
    <option value="WS">Samoa</option>
    <option value="SM">San Marino</option>
    <option value="ST">Sao Tome and Principe</option>
    <option value="SA">Saudi Arabia</option>
    <option value="SN">Senegal</option>
    <option value="RS">Serbia</option>
    <option value="SC">Seychelles</option>
    <option value="SL">Sierra Leone</option>
    <option value="SG">Singapore</option>
    <option value="SK">Slovakia</option>
    <option value="SI">Slovenia</option>
    <option value="SB">Solomon Islands</option>
    <option value="SO">Somalia</option>
    <option value="ZA">South Africa</option>
    <option value="ES">Spain</option>
    <option value="LK">Sri Lanka</option>
    <option value="SD">Sudan</option>
    <option value="SR">Suriname</option>
    <option value="SZ">Swaziland</option>
    <option value="SE">Sweden</option>
    <option value="CH">Switzerland</option>
    <option value="SY">Syria</option>
    <option value="TW">Taiwan</option>
    <option value="TJ">Tajikistan</option>
    <option value="TZ">Tanzania</option>
    <option value="TH">Thailand</option>
    <option value="TG">Togo</option>
    <option value="TO">Tonga</option>
    <option value="TT">Trinidad and Tobago</option>
    <option value="TN">Tunisia</option>
    <option value="TR">Turkey</option>
    <option value="TM">Turkmenistan</option>
    <option value="TV">Tuvalu</option>
    <option value="UG">Uganda</option>
    <option value="UA">Ukraine</option>
    <option value="AE">United Arab Emirates</option>
    <option value="GB">United Kingdom</option>
    <option value="US">USA</option>
    <option value="UY">Uruguay</option>
    <option value="UZ">Uzbekistan</option>
    <option value="VU">Vanuatu</option>
    <option value="VE">Venezuela</option>
    <option value="VN">Vietnam</option>
    <option value="YE">Yemen</option>
    <option value="ZM">Zambia</option>
    <option value="ZW">Zimbabwe</option>
</select>

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

<section>
  <div class="last-banner">
    <img src="{{ asset('assets/images/bg-3.png') }}">
  </div>
</section>

@endsection