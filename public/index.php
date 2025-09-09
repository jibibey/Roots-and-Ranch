<?php include '../includes/header.php'; ?>

<!-- Hero Section -->

<section class="relative h-screen bg-gray-900">
  <!-- Background Image -->
  <img src="/media/farm.jpg" alt="Background"
       class="absolute inset-0 w-full h-full object-cover">

  <!-- Overlay -->
  <div class="absolute inset-0 bg-black/50"></div>

  <!-- Content on top -->
  <div class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white px-4">
    <h1 class="text-4xl md:text-6xl font-bold mb-4">Roots and Ranch</h1>
    <p class="text-lg md:text-xl mb-6">Discover high-quality products at unbeatable prices. Upgrade your style, your home, and your lifestyle.</p>
    <a href="about.php" class="bg-blue-500 px-6 py-3 rounded-lg hover:bg-blue-600">
      Learn More
    </a>
  </div>
</section>


<section class="bg-gradient-to-r from-blue-600 to-indigo-600 text-white rounded-2xl shadow-lg p-10 mb-10">
  <div class="max-w-3xl">
    <h1 class="text-4xl md:text-5xl font-bold mb-4">Shop the Latest Trends</h1>
    <p class="text-lg mb-6">Discover high-quality products at unbeatable prices. Upgrade your style, your home, and your lifestyle.</p>
    <a href="Shop-Now" class="bg-white text-blue-600 font-semibold px-6 py-3 rounded-lg shadow hover:bg-gray-200">
      Shop Now
    </a>
  </div>
</section>

<!-- Farm Products -->
<section class="mb-12 mx-6 sm:mx-12 lg:mx-24 mt-10">
  <h2 class="text-2xl font-bold mb-6">Farm Fresh Products</h2>

  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">

    <!-- Rice -->
    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
      <img src="https://via.placeholder.com/400x300?text=Rice" alt="Rice" class="w-full h-48 object-cover">
      <div class="p-4">
        <h3 class="font-semibold text-lg">Rice</h3>
        <p class="text-gray-500 text-sm mb-2">Premium quality grains for everyday meals.</p>
        <p class="font-bold text-blue-600 mb-3">$25.00</p>
        <a href="/public/shop-now/rice.php" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Shop Now</a>
      </div>
    </div>

    <!-- Vegetables -->
    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
      <img src="https://via.placeholder.com/400x300?text=Vegetables" alt="Vegetables" class="w-full h-48 object-cover">
      <div class="p-4">
        <h3 class="font-semibold text-lg">Vegetables</h3>
        <p class="text-gray-500 text-sm mb-2">Fresh and organic farm-picked greens.</p>
        <p class="font-bold text-blue-600 mb-3">$15.00</p>
        <a href="/public/shop-now/vegetables.php" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Shop Now</a>
      </div>
    </div>

    <!-- Fruits -->
    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
      <img src="https://via.placeholder.com/400x300?text=Fruits" alt="Fruits" class="w-full h-48 object-cover">
      <div class="p-4">
        <h3 class="font-semibold text-lg">Fruits</h3>
        <p class="text-gray-500 text-sm mb-2">Sweet and juicy seasonal fruits.</p>
        <p class="font-bold text-blue-600 mb-3">$20.00</p>
        <a href="/public/shop-now/fruits.php" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Shop Now</a>
      </div>
    </div>

    <!-- Eggs -->
    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
      <img src="https://via.placeholder.com/400x300?text=Eggs" alt="Eggs" class="w-full h-48 object-cover">
      <div class="p-4">
        <h3 class="font-semibold text-lg">Eggs</h3>
        <p class="text-gray-500 text-sm mb-2">Farm fresh free-range eggs.</p>
        <p class="font-bold text-blue-600 mb-3">$10.00</p>
        <a href="/public/shop-now/eggs.php" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Shop Now</a>
      </div>
    </div>

    <!-- Milk -->
    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
      <img src="https://via.placeholder.com/400x300?text=Milk" alt="Milk" class="w-full h-48 object-cover">
      <div class="p-4">
        <h3 class="font-semibold text-lg">Milk</h3>
        <p class="text-gray-500 text-sm mb-2">Fresh cow’s milk, rich and creamy.</p>
        <p class="font-bold text-blue-600 mb-3">$12.00</p>
        <a href="/public/shop-now/milk.php" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Shop Now</a>
      </div>
    </div>

    <!-- Chicken -->
    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
      <img src="https://via.placeholder.com/400x300?text=Chicken" alt="Chicken" class="w-full h-48 object-cover">
      <div class="p-4">
        <h3 class="font-semibold text-lg">Chicken</h3>
        <p class="text-gray-500 text-sm mb-2">Farm-raised fresh chicken meat.</p>
        <p class="font-bold text-blue-600 mb-3">$30.00</p>
        <a href="/public/shop-now/chicken.php" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Shop Now</a>
      </div>
    </div>

    <!-- Show All -->
    <div class="bg-blue-600 text-white flex items-center justify-center rounded-xl shadow-md hover:bg-blue-700 transition">
      <a href="/public/shop-now/all-products.php" class="text-lg font-semibold py-16 px-8">Show All Products →</a>
    </div>

  </div>
</section>






<!-- Promo / Call-to-Action -->
<section class="bg-yellow-100 rounded-2xl shadow-md p-10 text-center">
  <h2 class="text-3xl font-bold mb-4">Limited Time Offer!</h2>
  <p class="text-lg mb-6">Get up to <span class="font-bold text-red-600">50% OFF</span> on selected items. Don’t miss out!</p>
  <a href="#" class="bg-red-500 text-white px-6 py-3 rounded-lg font-semibold hover:bg-red-600">
    Shop Deals
  </a>
</section>

<?php include '../includes/footer.php'; ?>
