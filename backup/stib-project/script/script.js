const on = (id, evt, fn) => {
  const el = document.getElementById(id);
  if (el) el.addEventListener(evt, fn);
};

// Mobile menu toggle
on("mobileMenuBtn", "click", () => {
  document.getElementById("mobileMenu")?.classList.toggle("hidden");
});

// User dropdown toggle
on("userDropdownBtn", "click", () => {
  document.getElementById("userDropdown")?.classList.toggle("hidden");
});

// Cart modal
on("cartBtn", "click", () => {
  document.getElementById("cartModal")?.classList.remove("hidden");
});
on("closeCartBtn", "click", () => {
  document.getElementById("cartModal")?.classList.add("hidden");
});

// Delivery modal
on("closeDeliveryBtn", "click", () => {
  document.getElementById("deliveryModal")?.classList.add("hidden");
});

// Farmer dashboard modal
on("closeFarmerDashboard", "click", () => {
  document.getElementById("farmerDashboard")?.classList.add("hidden");
});
