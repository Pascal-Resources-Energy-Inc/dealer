@extends('layouts.header_dealer')

@section('content')
<div class="transaction-history-page">
  <div class="content-area-fix">
    <div class="page-header-nya">
      <button class="back-btn" onclick="history.back()">
        <i class="bi bi-arrow-left"></i>
      </button>
      <h1 class="page-title">Popular</h1>
      <div class="header-icons">
            <a href="{{url('/cart')}}" class="nav-item {{ request()->is('cart') ? 'active' : '' }}">
                <div class="nav-icon-container">
                    <i class="bi bi-cart"></i>
                    <div class="cart-badge" id="cartBadge">0</div>
                </div>
            </a>
      </div>
    </div>


<div class="content-area container-fluid" id="contentWrapper">
  <div class="row g-2">
    @forelse($products as $index => $product)
      <div class="col-6">
        <div class="product-card-container bg-white rounded-3 shadow-sm border" id="container-{{ $product->id }}">
          <div class="product-card p-3 text-center h-100">
            <div class="product-image-container d-flex justify-content-center align-items-center mb-3 rounded-2">
              @if($product->product_image)
                <img src="{{ asset('uploads/products/' . $product->product_image) }}" alt="{{ $product->product_name }}" class="img-fluid">
              @else
                <img src="{{ asset('images/stovewcyllinder.jpg') }}" alt="{{ $product->product_name }}" class="img-fluid">
              @endif
            </div>
            
            <div class="product-info d-flex flex-column h-100">
              <div class="product-name mb-2">{{ $product->product_name }}</div>
              
              <div class="price-add-container d-flex justify-content-between align-items-center mt-auto">
                <div class="product-price fw-bold text-primary flex-grow-1 text-start">₱ {{ number_format($product->price, 2) }}</div>
                <div class="add-to-cart">
                  @if(stripos($product->product_name, 'stove') !== false)
                    <button class="add-btn btn btn-primary rounded-circle p-0 d-flex justify-content-center align-items-center" 
                            data-container="container-{{ $product->id }}" 
                            data-price="{{ $product->price }}" 
                            data-name="{{ $product->product_name }}" 
                            data-image="{{ $product->product_image ? asset('uploads/products/' . $product->product_image) : asset('images/stovewcyllinder.jpg') }}">
                      <i class="bi bi-plus"></i>
                    </button>
                  @else
                    <button class="add-btn btn btn-primary rounded-circle p-0 d-flex justify-content-center align-items-center" 
                            data-price="{{ $product->price }}" 
                            data-name="{{ $product->product_name }}" 
                            data-image="{{ $product->product_image ? asset('uploads/products/' . $product->product_image) : asset('images/stovewcyllinder.jpg') }}">
                      <i class="bi bi-plus"></i>
                    </button>
                  @endif
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    @empty
      <!-- Bootstrap utilities for empty state -->
      <div class="col-12">
        <div class="text-center py-5 text-muted">
          <i class="bi bi-box display-1 mb-3 d-block text-light"></i>
          <h3 class="fs-5 mb-2">No Products Available</h3>
          <p class="fs-6">There are currently no products to display.</p>
        </div>
      </div>
    @endforelse
    <div class="col-6">
      <div class="product-card-container add-item-card bg-white rounded-3 shadow-sm border" onclick="handleAddItem()">
        <div class="product-card p-3 text-center h-100">
          <div class="add-item-content">
            <i class="bi bi-plus-circle add-item-icon"></i>
            <div class="add-item-text">Add Item</div>
            <div class="add-item-subtitle">Create popular item</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('css')

<style>
 .back-btn {
    background: none;
    border: none;
    color: #666;
    font-size: 18px;
    cursor: pointer;
    padding: 5px;
    transition: color 0.2s ease;
  }

  .back-btn:hover {
    color: #4A90E2;
  }

  .page-header-nya {
    background: #fff;
    padding: 20px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 10px !important;
    position: relative;
    outline: 0.2px solid #e1e1e1ff;
  }

  .page-title {
      font-size: 20px;
      font-weight: 600;
      color: #4A90E2;
      margin: 0;
      position: absolute;
      left: 50%;
      transform: translateX(-50%);
    }

    /* Product grid and cards */
    .product-card-container {
      transition: all 0.3s ease;
    }

    .product-card {
      height: 100%;
      display: flex;
      flex-direction: column;
    }

    .product-image-container {
      height: 150px;
      background: #f8f9fa;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .product-image-container img {
      max-height: 100%;
      max-width: 100%;
      object-fit: contain;
    }

    .product-info {
      flex: 1;
      display: flex;
      flex-direction: column;
    }

    .product-name {
      font-size: 14px;
      font-weight: 500;
      color: #333;
      margin-bottom: 8px;
      line-height: 1.3;
      min-height: 36px;
    }

    .price-add-container {
      margin-top: auto;
    }

    .product-price {
      font-size: 16px;
      font-weight: 700;
      color: #4A90E2;
    }

    .add-btn {
      width: 32px;
      height: 32px;
      background: #4A90E2;
      color: white;
      border: none;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      transition: all 0.2s ease;
      font-size: 14px;
    }

    .add-btn:hover {
      background: #186ed1;
      transform: scale(1.05);
    }

    .add-btn.has-quantity {
      background: #ca1f1f;
    }

    .add-btn.has-quantity:hover {
      background: #ca1f1f;
    }

    .quantity-badge {
      font-size: 12px;
      font-weight: 700;
      color: #fff;
    }

    /* Filter animations */
    .product-card-container.filtered-out { 
      display: none !important; 
    }

    .product-card-container.filtered-in {
      display: block;
      animation: fadeInUp 0.3s ease-out;
    }

    @keyframes fadeInUp {
      from { 
        opacity: 0; 
        transform: translateY(20px); 
      }
      to { 
        opacity: 1; 
        transform: translateY(0); 
      }
    }

    .filter-empty-state {
      text-align: center;
      padding: 60px 20px;
      color: #666;
    }

    .filter-empty-state i {
      font-size: 48px;
      margin-bottom: 16px;
      display: block;
      color: #ccc;
    }

    .filter-empty-state h3 {
      font-size: 18px;
      margin-bottom: 8px;
      font-weight: 600;
    }

    .clear-filter-btn {
      background: #4A90E2;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 6px;
      font-size: 14px;
      cursor: pointer;
      transition: background 0.2s ease;
    }

    .clear-filter-btn:hover { 
      background: #186ed1; 
    }


    /* Color selection modal */
    .color-selection-expansion {
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background: #fff;
      border: 1px solid #e9ecef;
      border-radius: 12px;
      padding: 0;
      width: 90%;
      max-width: 350px;
      max-height: 80vh;
      overflow: hidden;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
      z-index: 2000;
      opacity: 0;
      visibility: hidden;
      transition: all 0.3s ease;
    }

    .color-selection-expansion.active {
      opacity: 1;
      visibility: visible;
      padding: 20px;
    }

    .expansion-overlay {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: rgba(0, 0, 0, 0.5);
      z-index: 1999;
      opacity: 0;
      visibility: hidden;
      transition: all 0.3s ease;
    }

    .expansion-overlay.active {
      opacity: 1;
      visibility: visible;
    }

    .expansion-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 20px;
      padding-bottom: 15px;
      border-bottom: 1px solid #e9ecef;
    }

    .expansion-title {
      font-size: 16px;
      font-weight: 600;
      color: #333;
      margin: 0;
    }

    .close-expansion {
      background: none;
      border: none;
      color: #666;
      font-size: 18px;
      cursor: pointer;
      padding: 4px;
      border-radius: 50%;
      width: 28px;
      height: 28px;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: background 0.2s ease;
    }

    .close-expansion:hover {
      background: #f5f5f5;
      color: #333;
    }

    .color-options { 
      margin-bottom: 20px; 
    }

    .color-option-row {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 8px 0;
      border-bottom: 1px solid #f0f0f0;
    }

    .color-option-row:last-child { 
      border-bottom: none; 
    }

    .color-label {
      font-size: 14px;
      font-weight: 500;
      color: #333;
      text-transform: capitalize;
      min-width: 60px;
    }

    .color-input-wrapper {
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .color-quantity-input {
      width: 60px;
      padding: 6px 8px;
      border: 1px solid #ddd;
      border-radius: 6px;
      text-align: center;
      font-size: 14px;
      font-weight: 500;
      outline: none;
      transition: border-color 0.2s ease;
    }

    .color-quantity-input:focus { 
      border-color: #4A90E2; 
    }

    .color-quantity-input::-webkit-outer-spin-button,
    .color-quantity-input::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }

    .color-quantity-input[type=number] { 
      -moz-appearance: textfield; 
    }

    .expansion-total {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 0;
      border-top: 1px solid #e9ecef;
      margin-bottom: 15px;
    }

    .expansion-total-label {
      font-size: 14px;
      font-weight: 500;
      color: #666;
    }

    .expansion-total-price {
      font-size: 16px;
      font-weight: 700;
      color: #4A90E2;
    }

    .add-to-cart-expansion {
      background: #4A90E2;
      color: #fff;
      border: none;
      padding: 12px 16px;
      border-radius: 8px;
      font-size: 14px;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.2s ease;
      width: 100%;
    }

    .add-to-cart-expansion:hover { 
      background: #186ed1; 
    }

    .add-to-cart-expansion:disabled {
      background: #ccc;
      cursor: not-allowed;
    }

    /* Quantity modal */
    .quantity-modal {
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background: #fff;
      border: 1px solid #e9ecef;
      border-radius: 12px;
      padding: 0;
      width: 90%;
      max-width: 400px;
      max-height: 80vh;
      overflow: hidden;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
      z-index: 2000;
      opacity: 0;
      visibility: hidden;
      transition: all 0.3s ease;
    }

    .quantity-modal.active {
      opacity: 1;
      visibility: visible;
      padding: 20px;
    }

    .product-info-modal {
      display: flex;
      align-items: center;
      gap: 12px;
      padding: 15px 0;
      border-bottom: 1px solid #f0f0f0;
      margin-bottom: 20px;
    }

    .modal-product-image {
      width: 60px;
      height: 60px;
      object-fit: contain;
      border-radius: 8px;
      background: #f5f5f5;
      padding: 8px;
    }

    .modal-product-details {
      flex: 1;
    }

    .modal-product-name {
      font-size: 16px;
      font-weight: 600;
      color: #333;
      margin-bottom: 4px;
      line-height: 1.3;
    }

    .modal-product-price {
      font-size: 18px;
      font-weight: 700;
      color: #4A90E2;
    }

    .quantity-selection {
      margin-bottom: 20px;
    }

    .quantity-input-section {
      display: flex;
      flex-direction: column;
      gap: 12px;
    }

    .quantity-label {
      font-size: 14px;
      font-weight: 600;
      color: #333;
    }

    .quantity-controls {
      display: flex;
      align-items: center;
      gap: 12px;
      justify-content: center;
    }

    .quantity-btn {
      background: #f8f9fa;
      border: 2px solid #e9ecef;
      color: #495057;
      width: 40px;
      height: 40px;
      border-radius: 8px;
      font-size: 18px;
      font-weight: 600;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      transition: all 0.2s ease;
      user-select: none;
    }

    .quantity-btn:hover {
      background: #e9ecef;
      border-color: #dee2e6;
      transform: translateY(-1px);
    }

    .quantity-btn:active {
      transform: translateY(0) scale(0.95);
    }

    .quantity-btn.minus-btn {
      color: #dc3545;
      border-color: #f5c6cb;
    }

    .quantity-btn.minus-btn:hover {
      background: #f8d7da;
      border-color: #f1aeb5;
    }

    .quantity-btn.plus-btn {
      color: #28a745;
      border-color: #c3e6cb;
    }

    .quantity-btn.plus-btn:hover {
      background: #d4edda;
      border-color: #b8dabd;
    }

    .quantity-input {
      width: 80px;
      height: 40px;
      text-align: center;
      font-size: 16px;
      font-weight: 600;
      border: 2px solid #e9ecef;
      border-radius: 8px;
      outline: none;
      transition: border-color 0.2s ease;
    }

    .quantity-input:focus {
      border-color: #4A90E2;
      box-shadow: 0 0 0 3px rgba(74, 144, 226, 0.1);
    }

    .quantity-input::-webkit-outer-spin-button,
    .quantity-input::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }

    .quantity-input[type=number] {
      -moz-appearance: textfield;
    }

    .modal-actions {
      display: flex;
      gap: 12px;
      margin-top: 20px;
      padding-top: 15px;
      border-top: 1px solid #e9ecef;
    }

    .modal-action-btn {
      flex: 1;
      padding: 12px 16px;
      border: none;
      border-radius: 8px;
      font-size: 14px;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.2s ease;
      text-align: center;
    }

    .cancel-btn {
      background: #f8f9fa;
      color: #6c757d;
      border: 1px solid #e9ecef;
    }

    .cancel-btn:hover {
      background: #e9ecef;
      color: #495057;
      transform: translateY(-1px);
    }

    .confirm-btn {
      background: #4A90E2;
      color: #fff;
      box-shadow: 0 2px 4px rgba(74, 144, 226, 0.3);
    }

    .confirm-btn:hover {
      background: #186ed1;
      transform: translateY(-1px);
      box-shadow: 0 3px 6px rgba(74, 144, 226, 0.4);
    }

    /* Cart summary */
    .cart-summary-wrapper {
      position: fixed;
      bottom: 100px;
      left: 15px;
      right: 15px;
      z-index: 1000;
    }

    .cart-summary-btn {
      width: 100%;
      background: linear-gradient(135deg, #4A90E2 0%, #357abd 100%);
      color: #fff;
      border: none;
      padding: 16px 20px;
      font-size: 15px;
      font-weight: 600;
      display: flex;
      justify-content: space-between;
      align-items: center;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(74, 144, 226, 0.4);
      cursor: pointer;
      text-align: center;
      transition: all 0.2s ease;
    }

    .cart-summary-btn:active {
      transform: scale(0.98);
      box-shadow: 0 2px 8px rgba(74, 144, 226, 0.6);
    }

    .cart-summary-btn i {
      font-size: 18px;
      margin-right: 6px;
    }

    /* Add Item Card specific styling */
  .add-item-card {
    border: 2px dashed #4A90E2 !important;
    background: rgba(74, 144, 226, 0.05) !important;
    cursor: pointer;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
  }

  .add-item-card:hover {
    border-color: #186ed1 !important;
    background: rgba(74, 144, 226, 0.1) !important;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(74, 144, 226, 0.2) !important;
  }

  .add-item-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.4), transparent);
    transition: left 0.5s;
  }

  .add-item-card:hover::before {
    left: 100%;
  }

  .add-item-content {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100%;
    text-align: center;
    color: #4A90E2;
    padding: 20px 0;
  }

  .add-item-icon {
    font-size: 48px;
    margin-bottom: 12px;
    transition: all 0.3s ease;
  }

  .add-item-card:hover .add-item-icon {
    transform: scale(1.1) rotate(90deg);
    color: #186ed1;
  }

  .add-item-text {
    font-size: 14px;
    font-weight: 600;
    margin-bottom: 4px;
    transition: color 0.3s ease;
    line-height: 1.3;
  }

  .add-item-card:hover .add-item-text {
    color: #186ed1;
  }

  .add-item-subtitle {
    font-size: 12px;
    color: #666;
    font-weight: 400;
    opacity: 0.8;
    line-height: 1.2;
  }

  .add-item-card:hover .add-item-subtitle {
    color: #4A90E2;
    opacity: 1;
  }

  /* Pulse animation for extra attention */
  @keyframes pulse {
    0% { box-shadow: 0 0 0 0 rgba(74, 144, 226, 0.4); }
    70% { box-shadow: 0 0 0 10px rgba(74, 144, 226, 0); }
    100% { box-shadow: 0 0 0 0 rgba(74, 144, 226, 0); }
  }

  .add-item-card.pulse {
    animation: pulse 2s infinite;
  }

  /* Mobile responsive for add item card */
  @media (max-width: 480px) {
    .add-item-icon {
      font-size: 36px;
      margin-bottom: 8px;
    }

    .add-item-text {
      font-size: 12px;
    }

    .add-item-subtitle {
      font-size: 11px;
    }

    .add-item-content {
      padding: 15px 0;
    }
  }

  @media (max-width: 375px) {
    .add-item-icon {
      font-size: 32px;
      margin-bottom: 6px;
    }

    .add-item-text {
      font-size: 11px;
    }

    .add-item-subtitle {
      font-size: 10px;
    }
  }


    /* Mobile responsive */
    @media (max-width: 480px) {  
      .page-header-nya {
            align-items: center;
        }
      
      .content-area {
        margin-top: 20px !important;
        padding: 12px !important;
      }
      
      .product-name {
        font-size: 12px;
        min-height: 30px;
      }
      
      .product-price { 
        font-size: 15px; 
      }
      
      .add-btn {
        width: 28px;
        height: 28px;
      }
      
      .add-btn i { 
        font-size: 12px; 
      }
      
      .color-selection-expansion,
      .quantity-modal {
        width: 95%;
        max-height: 75vh;
      }
      
      .color-selection-expansion.active,
      .quantity-modal.active { 
        padding: 15px; 
      }
      
      .color-quantity-input {
        width: 50px;
        padding: 5px 6px;
        font-size: 13px;
      }
      
      .expansion-title { 
        font-size: 15px; 
      }
      
      .color-label {
        font-size: 13px;
        min-width: 55px;
      }
      
      .search-container { 
        padding: 12px 15px; 
      }
      
      .search-input {
        padding: 10px 14px;
        font-size: 14px;
      }
      
      .search-btn {
        padding: 10px 16px;
        font-size: 13px;
      }
      
      .modal-product-image {
        width: 50px;
        height: 50px;
      }
      
      .modal-product-name {
        font-size: 14px;
      }
      
      .modal-product-price {
        font-size: 16px;
      }
      
      .quantity-btn {
        width: 36px;
        height: 36px;
        font-size: 16px;
      }
      
      .quantity-input {
        width: 70px;
        height: 36px;
        font-size: 14px;
      }
      
      .modal-action-btn {
        padding: 10px 14px;
        font-size: 13px;
      }
      
      .quantity-badge {
        font-size: 12px;
      }
    }

    @media (max-width: 375px) {
      .content-area {
        margin-top: 65px !important;
        padding: 10px !important;
      }
      
      .category-dropdown {
        font-size: 15px;
        padding: 6px 10px;
      }
    }
</style>
@endsection

@section('js')

<script>
document.addEventListener('DOMContentLoaded', function() {
  // Get all the buttons and cart elements
  const addButtons = document.querySelectorAll('.add-btn');
  
  // Make sure overlay exists
  let expansionOverlay = document.getElementById('expansionOverlay');
  if (!expansionOverlay) {
    expansionOverlay = document.createElement('div');
    expansionOverlay.className = 'expansion-overlay';
    expansionOverlay.id = 'expansionOverlay';
    document.body.appendChild(expansionOverlay);
  }

  // Cart variables
  let cart = {
    items: 0,
    amount: 0,
    products: []
  };

  // Track button states
  const buttonQuantities = new Map();
  const buttonToProduct = new Map();
  const stoveColorQuantities = new Map();

  let currentExpansion = null;
  const availableColors = ['yellow', 'blue', 'red', 'white', 'choco', 'green'];

  // First, set up all the buttons with their product data
  addButtons.forEach((button, index) => {
    const productName = button.getAttribute('data-name');
    const productId = `btn-${index}-${Date.now()}`;
    
    buttonToProduct.set(button, {
      name: productName,
      price: parseFloat(button.getAttribute('data-price')),
      image: button.getAttribute('data-image'),
      containerId: button.getAttribute('data-container') || button.closest('[id^="container-"]')?.id || productId
    });
    
    buttonQuantities.set(button, 0);
    
    // For stove products, set up color tracking
    if (productName.toLowerCase().includes('stove')) {
      const colorMap = {};
      availableColors.forEach(color => {
        colorMap[color] = 0;
      });
      stoveColorQuantities.set(button, colorMap);
    }
    
    updateButtonDisplay(button, 0);
  });

  // Load saved cart data when page starts
  loadSavedCart();

  // Set up button click handlers
  addButtons.forEach(button => {
    button.addEventListener('click', function() {
      const productData = buttonToProduct.get(this);
      if (!productData) return;

      const { name, price, image } = productData;

      if (name.toLowerCase().includes('stove')) {
        if (currentExpansion) closeExpansion();
        showStoveModal(this, name, price, image);
      } else {
        if (currentExpansion) closeExpansion();
        showQuantityModal(this, name, price, image);
      }

      // Button click animation
      this.style.transform = 'scale(0.9)';
      setTimeout(() => {
        this.style.transform = 'scale(1)';
      }, 150);
    });
  });

  // Load cart data from localStorage
  function loadSavedCart() {
    try {
      // Check for saved cart data
      const savedProducts = localStorage.getItem('dealerCartData');
      const savedItems = localStorage.getItem('dealerCartItems');
      const savedTotal = localStorage.getItem('dealerCartTotal');
      
      if (savedProducts) {
        cart.products = JSON.parse(savedProducts);
        cart.items = parseInt(savedItems) || 0;
        cart.amount = parseFloat(savedTotal) || 0;
        
        console.log('Found saved cart:', cart);
        
        // Update button displays based on saved data
        updateButtonsFromSavedData();
        
        // Trigger header cart update on page load if function exists
        if (typeof window.updateCartBadge === 'function') {
          window.updateCartBadge();
        }
      }
    } catch (error) {
      console.error('Error loading saved cart:', error);
      // If there's an error, just start fresh
      cart = { items: 0, amount: 0, products: [] };
    }
  }

  // Update buttons to show quantities from saved cart
  function updateButtonsFromSavedData() {
    // Go through each button and check if we have saved data for it
    addButtons.forEach((button, buttonIndex) => {
      const productData = buttonToProduct.get(button);
      if (!productData) return;
      
      // Find products in cart that match this button
      const matchingProducts = cart.products.filter(product => {
        return (product.originalName === productData.name || product.name.includes(productData.name)) 
               && (product.buttonId === buttonIndex || !product.buttonId);
      });
      
      if (matchingProducts.length > 0) {
        let totalQuantity = 0;
        
        // Handle stove products differently
        if (productData.name.toLowerCase().includes('stove')) {
          const colorMap = {};
          availableColors.forEach(color => colorMap[color] = 0);
          
          // Add up quantities by color
          matchingProducts.forEach(product => {
            if (product.color) {
              colorMap[product.color] = (colorMap[product.color] || 0) + product.quantity;
              totalQuantity += product.quantity;
            } else {
              totalQuantity += product.quantity;
            }
          });
          
          stoveColorQuantities.set(button, colorMap);
        } else {
          // Regular products - just add up all quantities
          totalQuantity = matchingProducts.reduce((sum, product) => sum + product.quantity, 0);
        }
        
        buttonQuantities.set(button, totalQuantity);
        updateButtonDisplay(button, totalQuantity);
      }
    });
  }

  // Show quantity modal for regular products
  function showQuantityModal(button, productName, price, productImage) {
    const currentQuantity = buttonQuantities.get(button) || 0;
    
    // Remove any existing modal
    const existingModal = document.querySelector('.quantity-modal');
    if (existingModal) {
      existingModal.remove();
    }

    const modalHTML = `
      <div class="color-selection-expansion quantity-modal" data-product-name="${productName}" data-product-price="${price}" data-product-image="${productImage}">
        <div class="expansion-header">
          <h4 class="expansion-title">Select Quantity</h4>
          <button class="close-expansion">
            <i class="bi bi-x"></i>
          </button>
        </div>
        
        <div class="quantity-selection">
          <div class="product-info-modal">
            <img src="${productImage}" alt="${productName}" class="modal-product-image" 
                 onerror="this.src='/images/stovewcyllinder.jpg'">
            <div class="modal-product-details">
              <div class="modal-product-name">${productName}</div>
              <div class="modal-product-price">₱ ${price.toFixed(2)}</div>
            </div>
          </div>
          
          <div class="quantity-input-section">
            <label class="quantity-label">Quantity:</label>
            <div class="quantity-controls">
              <button type="button" class="quantity-btn minus-btn" data-action="decrease">-</button>
              <input type="number" class="quantity-input" value="${currentQuantity}" min="0" max="999">
              <button type="button" class="quantity-btn plus-btn" data-action="increase">+</button>
            </div>
          </div>
        </div>
        
        <div class="expansion-total">
          <span class="expansion-total-label">Total:</span>
          <span class="expansion-total-price">₱ ${(price * currentQuantity).toFixed(2)}</span>
        </div>
        
        <div class="modal-actions">
          <button class="modal-action-btn cancel-btn">Cancel</button>
          <button class="modal-action-btn confirm-btn">Confirm</button>
        </div>
      </div>
    `;

    document.body.insertAdjacentHTML('beforeend', modalHTML);
    
    const modal = document.querySelector('.quantity-modal');
    currentExpansion = modal;
    
    expansionOverlay.classList.add('active');
    modal.classList.add('active');
    document.body.style.overflow = 'hidden';
    
    setupQuantityModalEvents(modal, price, button);
  }

  // Set up events for quantity modal
  function setupQuantityModalEvents(modal, basePrice, button) {
    const quantityInput = modal.querySelector('.quantity-input');
    const totalPrice = modal.querySelector('.expansion-total-price');
    const confirmBtn = modal.querySelector('.confirm-btn');
    const cancelBtn = modal.querySelector('.cancel-btn');
    const closeBtn = modal.querySelector('.close-expansion');
    const plusBtn = modal.querySelector('.plus-btn');
    const minusBtn = modal.querySelector('.minus-btn');

    // Update total when quantity changes
    function updateTotal() {
      const quantity = parseInt(quantityInput.value) || 0;
      const total = basePrice * quantity;
      totalPrice.textContent = `₱ ${total.toFixed(2)}`;
    }

    // Plus button
    plusBtn.addEventListener('click', () => {
      const currentValue = parseInt(quantityInput.value) || 0;
      quantityInput.value = Math.min(currentValue + 1, 999);
      updateTotal();
    });

    // Minus button
    minusBtn.addEventListener('click', () => {
      const currentValue = parseInt(quantityInput.value) || 0;
      quantityInput.value = Math.max(currentValue - 1, 0);
      updateTotal();
    });

    // Input change
    quantityInput.addEventListener('input', () => {
      let value = parseInt(quantityInput.value) || 0;
      value = Math.max(0, Math.min(value, 999));
      quantityInput.value = value;
      updateTotal();
    });

    // Confirm button
    confirmBtn.addEventListener('click', () => {
      const quantity = parseInt(quantityInput.value) || 0;
      const productData = buttonToProduct.get(button);
      
      if (!productData) return;

      const oldQuantity = buttonQuantities.get(button) || 0;
      buttonQuantities.set(button, quantity);
      
      // Update the cart
      updateRegularProductCart(productData, button, oldQuantity, quantity);
      updateButtonDisplay(button, quantity);
      
      closeExpansion();
    });

    // Cancel and close buttons
    cancelBtn.addEventListener('click', closeExpansion);
    closeBtn.addEventListener('click', closeExpansion);
  }

  // Show stove modal with color options
  function showStoveModal(button, productName, price, productImage) {
    // Remove any existing modal
    const existingModal = document.querySelector('.dynamic-color-modal');
    if (existingModal) {
      existingModal.remove();
    }

    const colorOptionsHTML = availableColors.map(color => `
      <div class="color-option-row">
        <span class="color-label">${color.charAt(0).toUpperCase() + color.slice(1)}</span>
        <div class="color-input-wrapper">
          <span class="qty-stock text-mute">0</span>
          <input type="number" class="color-quantity-input" data-color="${color}" min="0" value="0" max="999">
        </div>
      </div>
    `).join('');

    const modalHTML = `
      <div class="color-selection-expansion dynamic-color-modal" data-product-name="${productName}" data-product-price="${price}" data-product-image="${productImage}">
        <div class="expansion-header">
          <h4 class="expansion-title">Choose Color & Quantity</h4>
          <button class="close-expansion">
            <i class="bi bi-x"></i>
          </button>
        </div>
        
        <div class="color-options">
          ${colorOptionsHTML}
        </div>
        
        <div class="expansion-total">
          <span class="expansion-total-label">Total:</span>
          <span class="expansion-total-price">₱ 0.00</span>
        </div>
        
        <button class="add-to-cart-expansion" disabled>Confirm</button>
      </div>
    `;

    document.body.insertAdjacentHTML('beforeend', modalHTML);
    
    const modal = document.querySelector('.dynamic-color-modal');
    currentExpansion = modal;
    
    // Load existing color quantities for this button
    loadColorQuantitiesInModal(modal, button);
    
    expansionOverlay.classList.add('active');
    modal.classList.add('active');
    document.body.style.overflow = 'hidden';
    
    setupStoveModalEvents(modal, price, button);
  }

  // Load saved color quantities into the modal
  function loadColorQuantitiesInModal(modal, button) {
    const colorQuantities = stoveColorQuantities.get(button) || {};
    const quantityInputs = modal.querySelectorAll('.color-quantity-input');
    
    quantityInputs.forEach(input => {
      const color = input.getAttribute('data-color');
      const existingQuantity = colorQuantities[color] || 0;
      input.value = existingQuantity;
    });
    
    const price = parseFloat(modal.dataset.productPrice);
    updateStoveModalTotal(modal, price);
  }

  // Set up events for stove modal
  function setupStoveModalEvents(modal, basePrice, button) {
    const quantityInputs = modal.querySelectorAll('.color-quantity-input');
    const addToCartBtn = modal.querySelector('.add-to-cart-expansion');
    const closeBtn = modal.querySelector('.close-expansion');
    
    // Handle input changes
    quantityInputs.forEach(input => {
      input.addEventListener('input', function() {
        if (parseInt(this.value) < 0) {
          this.value = 0;
        }
        updateStoveModalTotal(modal, basePrice);
      });

      input.addEventListener('blur', function() {
        if (this.value === '' || isNaN(parseInt(this.value))) {
          this.value = 0;
        }
        updateStoveModalTotal(modal, basePrice);
      });
    });
    
    // Confirm button
    addToCartBtn.addEventListener('click', function() {
      const productData = buttonToProduct.get(button);
      if (!productData) return;
      
      // Save the color quantities
      saveColorQuantitiesFromModal(modal, button);
      
      // Calculate totals
      const colorQuantities = stoveColorQuantities.get(button) || {};
      const newTotalQuantity = Object.values(colorQuantities).reduce((sum, qty) => sum + qty, 0);
      const oldTotalQuantity = buttonQuantities.get(button) || 0;
      
      // Update button quantity
      buttonQuantities.set(button, newTotalQuantity);
      
      // Update the cart
      updateStoveProductCart(productData, button, oldTotalQuantity, newTotalQuantity, colorQuantities);
      
      // Update button display
      updateButtonDisplay(button, newTotalQuantity);
      
      closeExpansion();
    });
    
    // Close button
    closeBtn.addEventListener('click', () => {
      saveColorQuantitiesFromModal(modal, button);
      
      // Update button display when closing
      const colorQuantities = stoveColorQuantities.get(button) || {};
      const totalQuantity = Object.values(colorQuantities).reduce((sum, qty) => sum + qty, 0);
      buttonQuantities.set(button, totalQuantity);
      updateButtonDisplay(button, totalQuantity);
      
      closeExpansion();
    });
  }

  // Save color quantities from modal inputs
  function saveColorQuantitiesFromModal(modal, button) {
    const quantityInputs = modal.querySelectorAll('.color-quantity-input');
    const colorQuantities = stoveColorQuantities.get(button) || {};
    
    quantityInputs.forEach(input => {
      const color = input.getAttribute('data-color');
      const quantity = parseInt(input.value) || 0;
      colorQuantities[color] = quantity;
    });
    
    stoveColorQuantities.set(button, colorQuantities);
  }

  // Update stove modal total
  function updateStoveModalTotal(modal, basePrice) {
    const quantityInputs = modal.querySelectorAll('.color-quantity-input');
    const totalPrice = modal.querySelector('.expansion-total-price');
    const addToCartBtn = modal.querySelector('.add-to-cart-expansion');
    
    let totalQuantity = 0;
    
    quantityInputs.forEach(input => {
      const quantity = parseInt(input.value) || 0;
      totalQuantity += quantity;
    });
    
    const total = basePrice * totalQuantity;
    totalPrice.textContent = `₱ ${total.toFixed(2)}`;
    addToCartBtn.disabled = totalQuantity === 0;
  }

  // Update cart for regular products
  function updateRegularProductCart(productData, button, oldQuantity, newQuantity) {
    const quantityDiff = newQuantity - oldQuantity;
    const priceDiff = productData.price * quantityDiff;
    
    cart.items += quantityDiff;
    cart.amount += priceDiff;
    
    const buttonId = Array.from(addButtons).indexOf(button);
    
    // Find existing product in cart
    const existingProductIndex = cart.products.findIndex(p => 
      p.name === productData.name && p.buttonId === buttonId
    );
    
    if (newQuantity === 0) {
      // Remove from cart if quantity is 0
      if (existingProductIndex !== -1) {
        cart.products.splice(existingProductIndex, 1);
      }
    } else if (existingProductIndex !== -1) {
      // Update existing product
      cart.products[existingProductIndex].quantity = newQuantity;
    } else {
      // Add new product - Generate unique ID
      cart.products.push({
        id: Date.now() + Math.random(),
        name: productData.name,
        originalName: productData.name,
        price: productData.price,
        quantity: newQuantity,
        image: productData.image,
        buttonId: buttonId
      });
    }
    
    saveCartToLocalStorage();
  }

  // Update cart for stove products
  function updateStoveProductCart(productData, button, oldTotalQuantity, newTotalQuantity, colorQuantities) {
    const buttonId = Array.from(addButtons).indexOf(button);
    
    // Remove all existing stove products for this button
    cart.products = cart.products.filter(p => 
      !(p.originalName === productData.name && p.buttonId === buttonId)
    );
    
    // Update totals
    cart.items -= oldTotalQuantity;
    cart.amount -= (productData.price * oldTotalQuantity);
    
    // Add new color products
    Object.entries(colorQuantities).forEach(([color, quantity]) => {
      if (quantity > 0) {
        const productIdentifier = `${productData.name} (${color})`;
        cart.products.push({
          id: Date.now() + Math.random(),
          name: productIdentifier,
          originalName: productData.name,
          price: productData.price,
          quantity: quantity,
          image: productData.image,
          color: color,
          buttonId: buttonId
        });
        
        cart.items += quantity;
        cart.amount += (productData.price * quantity);
      }
    });
    
    saveCartToLocalStorage();
  }

  // Update button appearance
  function updateButtonDisplay(button, quantity) {
    const productData = buttonToProduct.get(button);
    const isStove = productData && productData.name.toLowerCase().includes('stove');
    
    if (quantity > 0) {
      button.innerHTML = `<span class="quantity-badge">${quantity}</span>`;
      button.classList.add('has-quantity');
      
      if (isStove) {
        button.classList.add('stove-product');
      }
    } else {
      button.innerHTML = `<i class="bi bi-plus"></i>`;
      button.classList.remove('has-quantity', 'stove-product');
    }
  }

  // Save cart to localStorage and trigger header cart update
  function saveCartToLocalStorage() {
    try {
      localStorage.setItem('dealerCartData', JSON.stringify(cart.products));
      localStorage.setItem('dealerCartTotal', cart.amount.toFixed(2));
      localStorage.setItem('dealerCartItems', cart.items.toString());
      
      // Also save to regular cart keys for compatibility
      localStorage.setItem('cartData', JSON.stringify(cart.products));
      localStorage.setItem('cartTotal', cart.amount.toFixed(2));
      localStorage.setItem('cartItems', cart.items.toString());
      
      // Trigger header cart update if function exists
      if (typeof window.updateCartBadge === 'function') {
        window.updateCartBadge();
      }
      
      console.log('Cart saved to localStorage:', {
        items: cart.items,
        amount: cart.amount,
        products: cart.products.length
      });
    } catch (error) {
      console.error('Error saving cart:', error);
    }
  }

  // Close modal
  function closeExpansion() {
    if (currentExpansion) {
      currentExpansion.classList.remove('active');
      
      setTimeout(() => {
        if (currentExpansion && (
          currentExpansion.classList.contains('dynamic-color-modal') ||
          currentExpansion.classList.contains('quantity-modal')
        )) {
          currentExpansion.remove();
        }
      }, 300);
      
      currentExpansion = null;
    }
    
    expansionOverlay.classList.remove('active');
    document.body.style.overflow = '';
  }

  // Event listeners
  expansionOverlay.addEventListener('click', closeExpansion);
  
  document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape' && currentExpansion) {
      closeExpansion();
    }
  });
});
</script>
@endsection