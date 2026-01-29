<style>
    .nav_link {
        position: relative;
        width: 100%;
        height: 100%;
    }

    .nav_link.active {
        position: relative;
        width: 100%;
        height: 100%;
        font-weight: 600;
    }

    .nav_link.active::before {
        content: '';
        position: absolute;
        width: 120%;
        height: 4px;
        bottom: -14px;
        left: 50%;
        transform: translateX(-50%);
        background-color: #059848;
    }

    .nav_link::before {
        content: '';
        position: absolute;
        width: 0;
        height: 4px;
        bottom: -14px;
        left: 50%;
        transform: translateX(-50%);
        background-color: #059848;
        transition: all 0.5s;
    }

    .nav_link:hover::before {
        width: 120%;
    }
</style>

<nav class="w-full absolute left-1/2 -translate-x-1/2 mt-4 z-30 px-4 hidden lg:block uppercase">
    <ul class="w-full h-[70px] max-w-7xl mx-auto px-4 flex items-center justify-center py-4 bg-cover bg-center gap-6 "
        style="background-image: url('{{ asset('assets/images/nav_bg.png') }}')">
        <li>
            <a href="{{ route('home') }}"
                class="text-[#000] px-4 py-4 w-full nav_link text-[16px] text-decoration-none {{ Route::is('home') ? 'active' : '' }}">
                {{ app()->getLocale() === 'en' ? 'Home' : (app()->getLocale() === 'km' ? 'ទំព័រដើម' : '住宅') }}
            </a>
        </li>
        <li>
            <a href="{{ route('about') }} "

                class="text-[#000] px-4 py-4 w-full nav_link text-[16px] text-decoration-none {{ Route::is('about') ? 'active' : '' }}">
                            {{ app()->getLocale() === 'en' ? 'About Us' : (app()->getLocale() === 'km' ? 'អំពីយើងខ្ញុំ' : '公司简介') }}</a>
        </li>
        <li>
            <a href="{{ route('our_product') }}"
                class="text-[#000] px-4 py-4 w-full nav_link text-[16px] text-decoration-none {{ Route::is('our_product') ? 'active' : '' }}">
                {{ app()->getLocale() === 'en' ? 'Our Products' : (app()->getLocale() === 'km' ? 'ផលិតផល' : '我们的产品') }}
            </a>
        </li>

        
        <li>
            <a href="{{ route('events') }} "
                class="text-[#000] px-4 py-4 w-full nav_link text-[16px] text-decoration-none {{ Route::is('events') ? 'active' : '' }}">
                {{ app()->getLocale() === 'en' ? 'our Activities' : (app()->getLocale() === 'km' ? 'សកម្មភាព' : '商业活动') }}
            </a>
        </li>
        <li>
            <a href="{{ route('career') }} "
                class="text-[#000] px-4 py-4 w-full nav_link text-[16px] text-decoration-none {{ Route::is('career') ? 'active' : '' }}">
                {{ app()->getLocale() === 'en' ? 'Career' : (app()->getLocale() === 'km' ? 'ឱកាសការងារ' : '就业机会') }}
            </a>
        </li>
        <li>
            <a href="{{ route('contact') }}"
                class="text-[#000] px-4 py-4 w-full nav_link text-[16px] text-decoration-none {{ Route::is('contact') ? 'active' : '' }}">
                {{ app()->getLocale() === 'en' ? 'Contact us' : (app()->getLocale() === 'km' ? 'ការទំនាក់ទំនង' : '联系方法') }}
            </a>
        </li>
    </ul>
</nav>