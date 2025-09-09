<?php
// footer.php
?>
  <!-- ✅ FOOTER -->
  <footer class="bg-gray-800 text-gray-300 py-12">
    <div class="container mx-auto px-4 text-center">
      <p>© 2025 Roots and Ranch. All rights reserved.</p>
    </div>
  </footer>

  <!-- ✅ MODALS -->
  <div id="cartModal" class="fixed inset-0 bg-black bg-opacity-50 hidden flex items-center justify-center">
    <div class="bg-white w-96 p-6 rounded-lg shadow-lg">
      <h2 class="text-xl font-bold mb-4">Your Cart</h2>
      <div id="cartItems" class="mb-4">Cart is empty</div>
      <button id="closeCartBtn" class="bg-red-500 text-white px-4 py-2 rounded">Close</button>
    </div>
  </div>

  <div id="deliveryModal" class="fixed inset-0 bg-black bg-opacity-50 hidden flex items-center justify-center">
    <div class="bg-white w-96 p-6 rounded-lg shadow-lg">
      <h2 class="text-xl font-bold mb-4">Delivery Info</h2>
      <p>Enter your address and delivery preferences here.</p>
      <button id="closeDeliveryBtn" class="bg-red-500 text-white px-4 py-2 rounded mt-4">Close</button>
    </div>
  </div>

  <div id="farmerDashboard" class="fixed inset-0 bg-black bg-opacity-50 hidden flex items-center justify-center">
    <div class="bg-white w-[600px] p-6 rounded-lg shadow-lg">
      <h2 class="text-xl font-bold mb-4">Farmer Dashboard</h2>
      <p>Manage your farm products, orders, and deliveries here.</p>
      <button id="closeFarmerDashboard" class="bg-red-500 text-white px-4 py-2 rounded mt-4">Close</button>
    </div>
  </div>

  <script src="script/script.js"></script>
</body>
</html>
