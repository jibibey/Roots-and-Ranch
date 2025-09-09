<?php
// contact.php
session_start();
include '../includes/header.php'; 
?>

  <h1 class="text-3xl font-bold text-blue-600 mb-6">Contact Us</h1>
  
  <p class="mb-4 text-gray-700">We’d love to hear from you! Please fill out the form below:</p>
  
  <!-- Simple Contact Form -->
  <form action="send-message.php" method="POST" class="space-y-4 max-w-lg">
    <div>
      <label class="block text-sm font-medium">Name</label>
      <input type="text" name="name" required class="mt-1 block w-full rounded border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500" />
    </div>
    <div>
      <label class="block text-sm font-medium">Email</label>
      <input type="email" name="email" required class="mt-1 block w-full rounded border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500" />
    </div>
    <div>
      <label class="block text-sm font-medium">Message</label>
      <textarea name="message" rows="5" required class="mt-1 block w-full rounded border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500"></textarea>
    </div>
    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
      Send Message
    </button>
  </form>

<?php include '../includes/footer.php'; ?>
