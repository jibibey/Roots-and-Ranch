<?php include ('includes/header.php'); ?>

  <!-- ✅ HERO -->
  <section id="home" class="hero-gradient text-white py-16">
    <div class="container mx-auto px-4 flex flex-col md:flex-row items-center">
      <div class="md:w-1/2">
        <h1 class="text-4xl font-bold mb-4">Fresh Produce Direct From Local Farms</h1>
        <p class="text-xl mb-6">Connecting farmers to customers for fresher, healthier communities</p>
        <a href="#marketplace" class="bg-white text-blue-700 px-6 py-3 rounded-lg">Shop Fresh Produce</a>
      </div>
      <div class="md:w-1/2 flex justify-center">
        <img src="https://placehold.co/600x400" alt="Fresh produce" class="rounded-lg shadow-xl">
      </div>
    </div>
  </section>

  <!-- ✅ STATS -->
  <section class="py-12 bg-gray-100">
    <div class="container mx-auto px-4 grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
      <div><p class="text-4xl font-bold text-blue-700">150+</p><p class="text-gray-600">Local Farms</p></div>
      <div><p class="text-4xl font-bold text-blue-700">1200+</p><p class="text-gray-600">Products</p></div>
      <div><p class="text-4xl font-bold text-blue-700">10k+</p><p class="text-gray-600">Customers</p></div>
      <div><p class="text-4xl font-bold text-blue-700">97%</p><p class="text-gray-600">Satisfaction</p></div>
    </div>
  </section>

  <!-- ✅ MARKETPLACE -->
  <section id="marketplace" class="py-16">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold mb-8 text-center">Farm Fresh Marketplace</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
        <!-- Example product card -->
        <div class="bg-white shadow rounded-lg overflow-hidden card-hover">
          <div class="product-image-container">
            <img src="https://placehold.co/300x300" class="product-image w-full object-cover" alt="Vegetables">
          </div>
          <div class="p-4">
            <h3 class="text-lg font-semibold">Organic Vegetables</h3>
            <p class="text-gray-600">Fresh from the farm</p>
            <div class="flex justify-between items-center mt-3">
              <span class="text-blue-700 font-bold">Php. 120.00</span>
              <button class="bg-blue-600 text-white px-3 py-1 rounded text-sm">Add to Cart</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ✅ FARMERS -->
  <section id="farmers" class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold text-center mb-8">Meet Our Farmers</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white shadow rounded-lg p-6 text-center card-hover">
          <img src="https://placehold.co/150x150" class="rounded-full mx-auto mb-4" alt="Farmer">
          <h3 class="text-xl font-semibold">John Doe</h3>
          <p class="text-gray-600">Organic Farm, CA</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ✅ TESTIMONIALS -->
  <section class="bg-blue-700 text-white py-16">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold text-center mb-8">What Our Customers Say</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-blue-800 p-6 rounded-lg">
          <p>"Best produce I've ever had! Fresh and tasty."</p>
          <p class="mt-4 font-semibold">– Sarah M.</p>
        </div>
        <div class="bg-blue-800 p-6 rounded-lg">
          <p>"Quick delivery and amazing farmers. Highly recommend!"</p>
          <p class="mt-4 font-semibold">– Mark T.</p>
        </div>
        <div class="bg-blue-800 p-6 rounded-lg">
          <p>"Finally a way to support local farms directly."</p>
          <p class="mt-4 font-semibold">– Anna K.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ✅ ABOUT -->
  <section id="about" class="py-16 bg-gray-100 text-center">
    <h2 class="text-3xl font-bold mb-6">Are You a Farmer?</h2>
    <p class="text-xl mb-8">Join our platform to sell your products directly to customers.</p>
    <button class="px-6 py-3 bg-blue-700 text-white rounded-lg">Register Your Farm</button>
  </section>

<?php include ('includes/footer.php'); ?>
