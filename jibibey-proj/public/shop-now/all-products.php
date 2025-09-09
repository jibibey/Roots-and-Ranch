<?php include './includes/navigation.php'; ?>

<section class="mb-12 mx-6 sm:mx-12 lg:mx-24 mt-10">
  <h2 class="text-2xl font-bold mb-6">All Farm Products</h2>
  
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
    <!-- Example Card for Rice -->
    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
      <img src="https://via.placeholder.com/400x300?text=Rice" alt="Rice" class="w-full h-48 object-cover">
      <div class="p-4">
        <h3 class="font-semibold text-lg">Rice</h3>
        <p class="text-gray-500 text-sm mb-2">Premium quality grains.</p>
        <p class="font-bold text-blue-600 mb-3">$25.00</p>
        <a href="rice.php" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Shop Now</a>
      </div>
    </div>

    <!-- Repeat for Vegetables, Fruits, Eggs, Milk, Chicken -->
  </div>
</section>

<?php include './includes/footer.php'; ?>
