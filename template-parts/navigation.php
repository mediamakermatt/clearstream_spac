<!-- Navbar goes here -->
<nav id="spac-nav">
    <div class="mx-auto px-4 py-8">
        <div class="flex justify-between">
            <div class="flex space-x-7">
                <div class="lg:pl-0 xl:pl-24">
                    <!-- Website Logo -->
                    <a href="#home">
                        <?php include_once get_template_directory() . '../resources/images/logo-desktop.svg'; ?>
                    </a>
                </div>
            </div>
            <!-- Primary Navbar items -->
            <div class="hidden xl:flex px-0 py-0">
                <?php wp_nav_menu(array(
                    'menu' => 'Clearstream SPAC',
                )); ?>
            </div>
            <!-- Mobile menu button -->
            <div class="xl:hidden flex items-center">
                <button class="outline-none mobile-menu-button">
                    <svg class="w-6 h-6 text-white hover:text-green-100"
                        x-show="!showMenu"
                        fill="none"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <!-- mobile menu -->
    <div class="hidden mobile-menu">
        <?php wp_nav_menu(array(
            'menu' => 'Clearstream SPAC',
        )); ?>
    </div>
    <script>
        const btn = document.querySelector("button.mobile-menu-button");
        const menu = document.querySelector(".mobile-menu");
        btn.addEventListener("click", () => {
            menu.classList.toggle("hidden");
        });
    </script>
</nav>