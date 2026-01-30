<!DOCTYPE html>
<html lang="en" class="overflow-x-hidden">

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
  <script src="https://unpkg.com/alpinejs..." defer></script>
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs..."></script>


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

<body class="{{ app()->getLocale() === 'en' ? 'inter' : 'kantumruy' }} overflow-hidden">
  @php
  $locale = app()->getLocale();
  @endphp
  @include('components.header')

  <div class="relative w-full h-full p-0">
    @include('components.navbar')

    @yield('content')

    <div class="md:mt-0 {{ Route::is('career') ? '-mt-48' : '' }}">
        @include('components.footer')
    </div>
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
    // =========================
    // Counter animation
    // =========================
    const counters = document.querySelectorAll(".counter");

    function animateCount(counter) {
      const target = parseInt(counter.getAttribute("data-target").replace(/,/g, ""), 10);
      const unit = counter.dataset.unit || "";

      const duration = 2000;
      let start = 0;
      const increment = target / (duration / 16);

      const step = () => {
        start += increment;
        let value = Math.floor(start);

        let suffix = "";
        if (counter.classList.contains("plus")) suffix = "+";
        if (counter.classList.contains("percent")) suffix = "%";

        if (value < target) {
          counter.textContent = value.toLocaleString() + unit + suffix;
          requestAnimationFrame(step);
        } else {
          counter.textContent = target.toLocaleString() + unit + suffix;
        }
      };

      step();
    }

    // run once (optional)
    counters.forEach(counter => animateCount(counter));

    // run on scroll into view
    const observer = new IntersectionObserver((entries, obs) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          animateCount(entry.target);
          obs.unobserve(entry.target);
        }
      });
    }, {
      threshold: 0.3
    });

    counters.forEach(counter => observer.observe(counter));
  </script>

  <script>
    // ===== Commodity list + OTHER =====
    const tradeSelect = document.getElementById("tradeType");
    const commodityList = document.getElementById("commodityList");
    const commodityListWrap = document.getElementById("commodityListWrap");
    const otherWrapper = document.getElementById("otherWrapper");
    const otherInput = document.getElementById("commodityOtherInput");

    const OTHER_VALUE = "__other__";
    const OTHER_LABEL = "{{ app()->getLocale() === 'en' ? 'Other' : (app()->getLocale() === 'km' ? 'ផ្សេងៗ' : '其他') }}";

    const data = {
      import: [
        "{{ app()->getLocale() === 'en' ? 'Basmati Rice (India)' : (app()->getLocale() === 'km' ? 'អង្ករបាសម៉ាទី' : '巴斯马蒂大米（印度）') }}",
        "{{ app()->getLocale() === 'en' ? 'Yellow Corn' : (app()->getLocale() === 'km' ? 'ពោតលឿង' : '黄色玉米') }}",
        "{{ app()->getLocale() === 'en' ? 'Cumin Seeds' : (app()->getLocale() === 'km' ? 'គ្រាប់ម្អម ' : '孜然籽') }}",
        "{{ app()->getLocale() === 'en' ? 'Turmeric (Whole)' : (app()->getLocale() === 'km' ? 'គ្រាប់រមៀត' : '姜黄（整粒）') }}",
        "{{ app()->getLocale() === 'en' ? 'Red Peppers (Whole)' : (app()->getLocale() === 'km' ? 'ម្ទេសក្រហម' : '红辣椒（整颗）') }}",
        "{{ app()->getLocale() === 'en' ? 'Cardamom (Green)' : (app()->getLocale() === 'km' ? 'ក្រវាញបៃតង' : '绿豆蔻（绿色）') }}",
        "{{ app()->getLocale() === 'en' ? 'Red Pepper Powder' : (app()->getLocale() === 'km' ? 'ម្សៅម្រេចក្រហម' : '红辣椒粉') }}",
        "{{ app()->getLocale() === 'en' ? 'Dried Garlic' : (app()->getLocale() === 'km' ? 'ខ្ទឹម' : '干大蒜') }}",
        OTHER_VALUE
      ],

      export: [
        "{{ app()->getLocale() === 'en' ? 'Rice' : (app()->getLocale() === 'km' ? 'អង្ករ ' : '大米') }}",
        "{{ app()->getLocale() === 'en' ? 'Yellow Corn' : (app()->getLocale() === 'km' ? 'ពោតលឿង' : '黄色玉米') }}",
        "{{ app()->getLocale() === 'en' ? 'Fresh Mango' : (app()->getLocale() === 'km' ? 'ស្វាយ' : '新鲜芒果') }}",
        "{{ app()->getLocale() === 'en' ? 'Dried Mango' : (app()->getLocale() === 'km' ? 'ដំណាប់ស្វាយ' : '干芒果') }}",
        "{{ app()->getLocale() === 'en' ? 'Cashew Nuts' : (app()->getLocale() === 'km' ? 'គ្រាប់ស្វាយចន្ទី ' : '腰果') }}",
        "{{ app()->getLocale() === 'en' ? 'Peanuts' : (app()->getLocale() === 'km' ? 'សណ្តែកដី ' : '花生') }}",
        "{{ app()->getLocale() === 'en' ? 'Dried Cassava' : (app()->getLocale() === 'km' ? 'ដំឡូងមី' : '乾木薯') }}",
        "{{ app()->getLocale() === 'en' ? 'Pepper' : (app()->getLocale() === 'km' ? 'ម្រេច' : '胡椒') }}",
        "{{ app()->getLocale() === 'en' ? 'Coffee Beans' : (app()->getLocale() === 'km' ? 'គ្រាប់កាហ្វេ' : '咖啡豆') }}",
        OTHER_VALUE
      ],

      local_buying: [
        "{{ app()->getLocale() === 'en' ? 'Basmati Rice (India)' : (app()->getLocale() === 'km' ? 'អង្ករបាសម៉ាទី' : '巴斯马蒂大米（印度）') }}",
        "{{ app()->getLocale() === 'en' ? 'Yellow Corn' : (app()->getLocale() === 'km' ? 'ពោតលឿង' : '黄色玉米') }}",
        "{{ app()->getLocale() === 'en' ? 'Cumin Seeds' : (app()->getLocale() === 'km' ? 'គ្រាប់ម្អម ' : '孜然籽') }}",
        "{{ app()->getLocale() === 'en' ? 'Turmeric (Whole)' : (app()->getLocale() === 'km' ? 'គ្រាប់រមៀត' : '姜黄（整粒）') }}",
        "{{ app()->getLocale() === 'en' ? 'Red Peppers (Whole)' : (app()->getLocale() === 'km' ? 'ម្ទេសក្រហម' : '红辣椒（整颗）') }}",
        "{{ app()->getLocale() === 'en' ? 'Cardamom (Green)' : (app()->getLocale() === 'km' ? 'ក្រវាញបៃតង' : '绿豆蔻（绿色）') }}",
        "{{ app()->getLocale() === 'en' ? 'Red Pepper Powder' : (app()->getLocale() === 'km' ? 'ម្សៅម្រេចក្រហម' : '红辣椒粉') }}",
        "{{ app()->getLocale() === 'en' ? 'Dried Garlic' : (app()->getLocale() === 'km' ? 'ខ្ទឹម' : '干大蒜') }}",
        "{{ app()->getLocale() === 'en' ? 'Rice' : (app()->getLocale() === 'km' ? 'អង្ករ ' : '大米') }}",
        "{{ app()->getLocale() === 'en' ? 'Yellow Corn' : (app()->getLocale() === 'km' ? 'ពោតលឿង' : '黄色玉米') }}",
        "{{ app()->getLocale() === 'en' ? 'Fresh Mango' : (app()->getLocale() === 'km' ? 'ស្វាយ' : '新鲜芒果') }}",
        "{{ app()->getLocale() === 'en' ? 'Dried Mango' : (app()->getLocale() === 'km' ? 'ដំណាប់ស្វាយ' : '干芒果') }}",
        "{{ app()->getLocale() === 'en' ? 'Cashew Nuts' : (app()->getLocale() === 'km' ? 'គ្រាប់ស្វាយចន្ទី ' : '腰果') }}",
        "{{ app()->getLocale() === 'en' ? 'Peanuts' : (app()->getLocale() === 'km' ? 'សណ្តែកដី ' : '花生') }}",
        "{{ app()->getLocale() === 'en' ? 'Dried Cassava' : (app()->getLocale() === 'km' ? 'ដំឡូងមី' : '乾木薯') }}",
        "{{ app()->getLocale() === 'en' ? 'Pepper' : (app()->getLocale() === 'km' ? 'ម្រេច' : '胡椒') }}",
        "{{ app()->getLocale() === 'en' ? 'Coffee Beans' : (app()->getLocale() === 'km' ? 'គ្រាប់កាហ្វេ' : '咖啡豆') }}",
        OTHER_VALUE
      ]
    };

    function clearCommodityInvalid() {
      commodityListWrap.classList.remove("invalid");
      commodityListWrap.classList.remove("invalid-box");
    }

    function setCommodityInvalid() {
      commodityListWrap.classList.add("invalid");
      // commodityListWrap.classList.add("invalid-box");
    }

    function buildCommodities(type) {
      commodityList.innerHTML = "";
      otherWrapper.style.display = "none";
      otherInput.value = "";
      otherInput.required = false;

      if (!type || !data[type]) return;

      data[type].forEach(item => {
        const wrapper = document.createElement("div");
        wrapper.className = "form-check d-flex align-items-center";

        const input = document.createElement("input");
        input.type = "checkbox";
        input.className = "form-check-input commodity-check";
        input.name = "commodities[]";
        input.value = item;

        input.addEventListener("change", () => {
          // if any checked -> remove invalid
          if (document.querySelectorAll(".commodity-check:checked").length > 0) {
            commodityListWrap.classList.remove("invalid");
            commodityListWrap.classList.remove("invalid-box");
          }

          // OTHER show/hide
          if (input.value === OTHER_VALUE) {
            if (input.checked) {
              otherWrapper.style.display = "block";
              otherInput.required = true;
              otherInput.focus();
            } else {
              otherWrapper.style.display = "none";
              otherInput.required = false;
              otherInput.value = "";
              otherInput.closest(".field-wrap").classList.remove("invalid");
              otherInput.classList.remove("is-invalid");
            }
          }
        });

        const safeId = "commodity_" + Math.random().toString(36).slice(2);
        input.id = safeId;

        const label = document.createElement("label");
        label.className = "form-check-label";
        label.setAttribute("for", safeId);
        label.textContent = (item === OTHER_VALUE) ? OTHER_LABEL : item;

        wrapper.appendChild(input);
        wrapper.appendChild(label);
        commodityList.appendChild(wrapper);
      });
    }

    if (tradeSelect && commodityList) {
      tradeSelect.addEventListener("change", function() {
        buildCommodities(this.value);
      });
    }

    // ===== Custom validation (red star + red border) =====
    const form = document.getElementById("contactForm");

    function setInvalid(el) {
      const wrap = el.closest(".field-wrap");
      if (!wrap) return;
      wrap.classList.add("invalid");
      el.classList.add("is-invalid");
    }

    function clearInvalid(el) {
      const wrap = el.closest(".field-wrap");
      if (!wrap) return;
      wrap.classList.remove("invalid");
      el.classList.remove("is-invalid");
    }

    function validateField(el) {
      if (!el.hasAttribute("required")) return true;

      // checkbox required (policy)
      if (el.type === "checkbox") {
        if (!el.checked) {
          setInvalid(el);
          return false;
        }
        clearInvalid(el);
        return true;
      }

      // selects / inputs / textarea
      if (!el.value || el.value.trim() === "") {
        setInvalid(el);
        return false;
      }

      clearInvalid(el);
      return true;
    }

    function validateCommodities() {
      const type = tradeSelect ? tradeSelect.value : "";
      if (!type) return true; // trade type field handles itself

      const checked = document.querySelectorAll(".commodity-check:checked").length;
      if (checked === 0) {
        setCommodityInvalid();
        return false;
      }
      clearCommodityInvalid();
      return true;
    }

    function validateOtherWhenChecked() {
      const otherChecked = document.querySelector('.commodity-check[value="__other__"]:checked');
      if (otherChecked) {
        if (!otherInput.value || otherInput.value.trim() === "") {
          setInvalid(otherInput);
          return false;
        }
        clearInvalid(otherInput);
      }
      return true;
    }

    // live remove error when typing/selecting
    form.querySelectorAll("input, select, textarea").forEach(el => {
      el.addEventListener("input", () => validateField(el));
      el.addEventListener("change", () => validateField(el));
    });

    // submit
    form.addEventListener("submit", function(e) {
      let ok = true;

      // validate all required fields
      form.querySelectorAll("[required]").forEach(el => {
        if (!validateField(el)) ok = false;
      });

      // validate commodities group + other input
      if (!validateCommodities()) ok = false;
      if (!validateOtherWhenChecked()) ok = false;

      if (!ok) {
        e.preventDefault();

        // scroll to first invalid field
        const firstInvalid = form.querySelector(".is-invalid") || document.querySelector("#commodityListWrap.invalid");
        if (firstInvalid && firstInvalid.scrollIntoView) {
          firstInvalid.scrollIntoView({
            behavior: "smooth",
            block: "center"
          });
        }
      }
    });
  </script>



</body>

</html>