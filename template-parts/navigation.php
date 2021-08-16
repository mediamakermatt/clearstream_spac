<!-- Navbar goes here -->
<nav id="spac-nav">
    <div class="mx-auto px-4 py-8">
        <div class="flex justify-between">
            <div class="flex space-x-7">
                <div class="lg:pl-0 xl:pl-24">
                    <!-- Website Logo -->
                    <a id="logo-default" href="#home">
                        <?php include_once get_template_directory() . '../resources/images/logo-default.svg'; ?>
                    </a>
                    <a id="logo-white" href="#home">
                        <?php include_once get_template_directory() . '../resources/images/logo-white.svg'; ?>
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

        handlePageLoad();
        handleResponsiveNavigation();
        handleScrolling();
        handleResizing();

        function handlePageLoad(){
            // hide logos on page load depending on width of browser
            window.onload = function() {
                let width = window.innerWidth;
                if(width >= 1280){
                    showDefaultLogo();
                } else if(width < 1280) {
                    showWhiteLogo();
                }
            }
        }

        function handleResponsiveNavigation(){
            // builds the toggle for mobile menu
            const btn = document.querySelector("button.mobile-menu-button");
            const menu = document.querySelector(".mobile-menu");
            btn.addEventListener("click", () => {
                menu.classList.toggle("hidden");
            });
        }

        function handleScrolling(){
            // detect if user is scrolling on desktop
            const logoDefault = document.querySelector("#logo-default");
            const logoWhite = document.querySelector("#logo-white");
            const nav = document.querySelector("#spac-nav");
            window.onscroll = function(event){
                if(window.scrollY == 0){ // < (window.innerHeight - 100 {works better but video text box is problematic}
                    //console.log("user scrolled near top of the page");
                    nav.style.backgroundColor = "transparent";
                    if(window.innerWidth >= 1280){ 
                        showDefaultLogo(); // show the gray text logo on desktop
                    } else {
                        showWhiteLogo(); // show the white text logo on mobile
                    }
                } else {
                    //console.log("user has NOT scrolled near top of the page"); 
                    nav.style.backgroundColor = "#07524B";  // tailwind.config.js: green
                    showWhiteLogo();
                }
            };
        }

        function handleResizing(){
            window.onresize  = function(event){
                // update logo based on screen width when user resizes window
                if(window.innerWidth >= 1280){ // if on desktop
                    if(window.scrollY == 0){ // < (window.innerHeight - 100 {works better but video text box is problematic}
                        showDefaultLogo(); // if near top of page
                    } else {
                        showWhiteLogo(); // if not near top of page
                    }
                } else {
                    if(window.scrollY == 0){ // if not on desktop // < (window.innerHeight - 100 {works better but video text box is problematic}
                        showWhiteLogo(); // if near top of page
                    } else {
                        showWhiteLogo(); // if not near top of page
                    }
                }
            };
        }

        function showWhiteLogo(){
            const logoDefault = document.querySelector("#logo-default");
            const logoWhite = document.querySelector("#logo-white");
            logoDefault.style.display = "none";
            logoWhite.style.display   = "block";
        }

        function showDefaultLogo(){
            const logoDefault = document.querySelector("#logo-default");
            const logoWhite = document.querySelector("#logo-white");
            logoDefault.style.display = "block";
            logoWhite.style.display   = "none";
        }

    </script>
    
</nav>