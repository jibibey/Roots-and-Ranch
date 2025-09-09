<?php
// header.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Roots and Ranches - Connecting Farmers to Customers</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body class="min-h-screen flex flex-col">

  <!-- ✅ HEADER -->
  <header class="bg-white shadow-md sticky top-0 z-50">
    <div class="container mx-auto px-4 py-3 flex justify-between items-center">
      <div class="flex items-center space-x-2">
        <img src="https://placehold.co/50x50" alt="Farm2Market logo" class="h-12">
        <h1 class="text-2xl font-bold text-blue-700">Roots and Ranch</h1>
      </div>
      <nav class="hidden md:flex space-x-8">
        <a href="#home" class="text-gray-700 hover:text-blue-600">Home</a>
        <a href="#marketplace" class="text-gray-700 hover:text-blue-600">Marketplace</a>
        <a href="#farmers" class="text-gray-700 hover:text-blue-600">Farmers</a>
        <a href="#about" class="text-gray-700 hover:text-blue-600">About Us</a>
      </nav>
      <div class="flex items-center space-x-4">
        <button id="cartBtn" class="relative text-gray-700 hover:text-blue-600">
          <i class="fas fa-shopping-cart text-xl"></i>
          <span id="cartCount" class="absolute -top-2 -right-2 bg-red-500 text-white text-xs rounded-full h-5 w-5 flex items-center justify-center hidden">0</span>
        </button>
        <div class="relative">
          <button id="userDropdownBtn" class="flex items-center space-x-1 text-gray-700 hover:text-blue-600">
            <i class="fas fa-user-circle text-xl"></i>
            <span class="hidden md:inline">Profile</span>
          </button>
          <div id="userDropdown" class="hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-50">
            <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">Dashboard</a>
            <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">My Orders</a>
            <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">Settings</a>
            <div class="border-t"></div>
            <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">Logout</a>
          </div>
        </div>
        <button id="mobileMenuBtn" class="md:hidden text-gray-700">
          <i class="fas fa-bars text-xl"></i>
        </button>
      </div>
    </div>
    <div id="mobileMenu" class="hidden md:hidden bg-white shadow-lg">
      <div class="container mx-auto px-4 py-3">
        <a href="#home" class="block py-2">Home</a>
        <a href="#marketplace" class="block py-2">Marketplace</a>
        <a href="#farmers" class="block py-2">Farmers</a>
        <a href="#about" class="block py-2">About</a>
      </div>
    </div>
  </header>
