<!DOCTYPE html>
<html lang="en">

<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="icon" type="image/png" href="{{ asset('assets/images/logo.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/images/logo.png') }}">

    @yield('title')

    @yield('css')


    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <!-- Kantumruy Pro -->
    <link href="https://fonts.googleapis.com/css2?family=Kantumruy+Pro:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>

    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
    <!-- Kantumruy Pro -->
    <link href="https://fonts.googleapis.com/css2?family=Kantumruy+Pro:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    {{-- aos --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<style>
    [x-cloak] {
        display: none !important;
    }

    .kantumruy {
        font-family: "Kantumruy Pro", sans-serif;
    }

    .ibm {
        font-family: "IBM Plex Serif", serif;
    }

    .inter {
        font-family: "Inter", sans-serif;
    }


    .prose ul {
        list-style-type: disc;
        padding-left: 1.25rem;
        font-size: 16px;
    }

    .prose ul li::marker {}

    .prose ol {
        list-style-type: decimal;
        padding-left: 1.25rem;
        font-size: 16px;
    }

    .prose p {
        font-size: 16px;
    }

    .prose strong {
        font-size: 18px;
    }

    @media (max-width: 639px) {

        .prose strong {
            font-size: 16px;
        }

        .prose p span {
            font-size: 14px;
        }

        .prose ul {
            list-style-type: disc;
            padding-left: 1.25rem;
            font-size: 14px;
        }
    }
</style>

{{-- <body class="{{ app()->getLocale() === 'en' ? 'inter' : 'kantumruy' }}" > --}}

<body class="{{ app()->getLocale() === 'en' ? 'inter' : 'kantumruy' }}">
    @php
        $locale = app()->getLocale();
    @endphp
    @include('components.header')

    <div class="relative w-full h-full p-0">
        @include('components.navbar')

        @yield('content')

        @include('components.footer')
    </div>

    @yield('home')
    @yield('export-detail')
    @yield('career')
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 20
        });
    </script>
    <script>
        if (!/^((?!chrome|android).)*safari/i.test(navigator.userAgent)) {
            logoVideo.classList.remove('hidden')
            logoImg.classList.add('hidden')
        }
    </script>
    <script>
        const counters = document.querySelectorAll(".counter");

function animateCount(counter) {
    const target = parseInt(
        counter.getAttribute("data-target").replace(/,/g, ""),
        10
    );

    const unit = counter.dataset.unit || ""; // 👈 ADD THIS

    const duration = 2000;
    let start = 0;
    const increment = target / (duration / 16);

    const step = () => {
        start += increment;
        let value = Math.floor(start);

        // suffix
        let suffix = "";
        if (counter.classList.contains("plus")) suffix = "+";
        if (counter.classList.contains("percent")) suffix = "%";

        if (value < target) {
            counter.textContent =
                value.toLocaleString() + unit + suffix;
            requestAnimationFrame(step);
        } else {
            counter.textContent =
                target.toLocaleString() + unit + suffix;
        }
    };

    step();
}

// run animation
counters.forEach(counter => animateCount(counter));


const observer = new IntersectionObserver((entries, obs) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            animateCount(entry.target);
            obs.unobserve(entry.target);
        }
    });
}, { threshold: 0.3 });

counters.forEach(counter => observer.observe(counter));




        const tradeSelect = document.getElementById("tradeType");
        const commodityList = document.getElementById("commodityList");

        const data = {
            import: [
                "{{ app()->getLocale() === 'en' ? 'Basmati Rice (India)' : (app()->getLocale() === 'km' ? 'អង្ករបាសម៉ាទី' : 'Basmati Rice (India)') }}",
                "{{ app()->getLocale() === 'en' ? 'Yellow Corn' : (app()->getLocale() === 'km' ? 'ពោតលឿង' : 'Yellow Corn') }}",
                "{{ app()->getLocale() === 'en' ? 'Cumin Seeds' : (app()->getLocale() === 'km' ? 'គ្រាប់ម្អម ' : 'Cumin Seeds') }}",
                "{{ app()->getLocale() === 'en' ? 'Turmeric (Whole)' : (app()->getLocale() === 'km' ? 'គ្រាប់រមៀត' : 'Turmeric (Whole)') }}",
                "{{ app()->getLocale() === 'en' ? 'Red Peppers (Whole)' : (app()->getLocale() === 'km' ? 'ម្ទេសក្រហម' : 'Red Peppers (Whole)') }}",
                "{{ app()->getLocale() === 'en' ? 'Cardamom (Green)' : (app()->getLocale() === 'km' ? 'ក្រវាញបៃតង' : 'Cardamom (Green)') }}",
                // "{{ app()->getLocale() === 'en' ? 'Turmeric Powder' : (app()->getLocale() === 'km' ? 'ម្សៅរមៀត' : 'Turmeric Powder') }}",
                "{{ app()->getLocale() === 'en' ? 'Red Pepper Powder' : (app()->getLocale() === 'km' ? 'ម្សៅម្រេចក្រហម' : 'Red Pepper Powder') }}",
                "{{ app()->getLocale() === 'en' ? 'Dried Garlic' : (app()->getLocale() === 'km' ? 'ខ្ទឹម' : 'Dried Garlic') }}",
                // "Dried Onions"
            ],

            export: [
                "{{ app()->getLocale() === 'en' ? 'Rice' : (app()->getLocale() === 'km' ? 'អង្ករ ' : 'Rice') }}",
                "{{ app()->getLocale() === 'en' ? 'Yellow Corn' : (app()->getLocale() === 'km' ? 'ពោតលឿង' : 'Yellow Corn') }}",
                "{{ app()->getLocale() === 'en' ? 'Fresh Mango' : (app()->getLocale() === 'km' ? 'ស្វាយ' : 'Fresh Mango') }}",
                "{{ app()->getLocale() === 'en' ? 'Dried Mango' : (app()->getLocale() === 'km' ? 'ដំណាប់ស្វាយ' : 'Dried Mango') }}",
                "{{ app()->getLocale() === 'en' ? 'Cashew Nuts' : (app()->getLocale() === 'km' ? 'គ្រាប់ស្វាយចន្ទី ' : 'Cashew Nuts') }}",
                "{{ app()->getLocale() === 'en' ? 'Peanuts' : (app()->getLocale() === 'km' ? 'អង្ករ ' : 'សណ្តែកដី') }}",
                "{{ app()->getLocale() === 'en' ? 'Dried Cassava' : (app()->getLocale() === 'km' ? 'ដំឡូងមី' : 'Dried Cassava') }}",
                "{{ app()->getLocale() === 'en' ? 'Pepper' : (app()->getLocale() === 'km' ? 'ម្រេច' : 'Pepper') }}",
                "{{ app()->getLocale() === 'en' ? 'Coffee Beans' : (app()->getLocale() === 'km' ? 'គ្រាប់កាហ្វេ' : 'Coffee Beans') }}"
            ]
        };

        tradeSelect.addEventListener("change", function() {
            const type = this.value;

            // clear old list
            commodityList.innerHTML = "";

            if (!type) return;

            // build checkbox list
            data[type].forEach(item => {
                const wrapper = document.createElement("div");
                wrapper.className = "form-check";

                const input = document.createElement("input");
                input.type = "checkbox";
                input.className = "form-check-input";
                input.name = "commodities[]"; // ✅ IMPORTANT
                input.value = item;
                input.id = item;

                const label = document.createElement("label");
                label.className = "form-check-label";
                label.setAttribute("for", item);
                label.textContent = item;

                wrapper.appendChild(input);
                wrapper.appendChild(label);
                commodityList.appendChild(wrapper);
            });

        });
    </script>
</body>

</html>
