<header class="bg-white/90 backdrop-blur-md shadow-md fixed top-0 w-full z-50 mb-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center py-4">

            <!-- Logo -->
            <a href="index.php" class="text-xl font-bold text-blue-600">Jakol Tayo PH</a>

            <!-- Desktop Navigation -->
            <nav class="hidden md:flex space-x-6 items-center">
                <a href="index.php" class="hover:text-blue-600">Home</a>
                <a href="about.php" class="hover:text-blue-600">About</a>
                <a href="contact.php" class="hover:text-blue-600">Contact</a>

                <!-- Cart Icon -->
                <a href="cart.php" class="relative hover:text-blue-600 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        class="w-6 h-6">
                        <!-- Cart Body -->
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6h15l-2 8H6L3 6z" />
                        <!-- Wheels (circles) -->
                        <circle cx="7.5" cy="18" r="1.5" fill="currentColor" />
                        <circle cx="15.5" cy="18" r="1.5" fill="currentColor" />
                    </svg>
                    <!-- Cart Badge (optional) -->
                    <span
                        class="absolute -top-2 -right-2 bg-red-500 text-white text-xs px-1.5 py-0.5 rounded-full">3</span>
                </a>

                <?php if (isset($_SESSION['user'])): ?>
                    <a href="logout.php" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">
                        Logout
                    </a>
                <?php else: ?>
                    <a href="login.php" class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">
                        Login
                    </a>
                <?php endif; ?>
            </nav>

            <!-- Mobile Hamburger Button -->
            <button id="menu-toggle" class="md:hidden text-gray-700 focus:outline-none">
                <svg id="menu-icon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>

        <!-- Mobile Menu (with animation) -->
        <div id="mobile-menu"
            class="overflow-hidden max-h-0 transition-all duration-500 ease-in-out md:hidden flex-col space-y-2">
            <a href="index.php" class="block py-2 hover:text-blue-600">Home</a>
            <a href="about.php" class="block py-2 hover:text-blue-600">About</a>
            <a href="contact.php" class="block py-2 hover:text-blue-600">Contact</a>
            <a href="cart.php" class="block py-2 hover:text-blue-600 items-center">
                <!-- Small cart icon for mobile -->
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    class="w-5 h-5 mr-2">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2 9m13-9l2 9m-5-9v9m-4-9v9" />
                </svg>
                Cart
            </a>

            <?php if (isset($_SESSION['user'])): ?>
                <a href="logout.php" class="block bg-red-500 text-white px-3 py-2 rounded hover:bg-red-600">
                    Logout
                </a>
            <?php else: ?>
                <a href="login.php" class="block bg-blue-500 text-white px-3 py-2 rounded hover:bg-blue-600">
                    Login
                </a>
            <?php endif; ?>
        </div>
    </div>
</header>

<script>
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    let menuOpen = false;
    menuToggle.addEventListener('click', () => {
        menuOpen = !menuOpen;
        if (menuOpen) {
            mobileMenu.classList.remove('max-h-0');
            mobileMenu.classList.add('max-h-96');
        } else {
            mobileMenu.classList.remove('max-h-96');
            mobileMenu.classList.add('max-h-0');
        }
    });
</script>