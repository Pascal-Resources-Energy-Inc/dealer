@extends('layouts.header_dealer')

@section('content')
<div class="container-fluid p-0">
    <div class="secondary-header" id="secondaryHeader">
        <div class="secondary-nav">
            <button class="secondary-back-btn" onclick="window.location.href='{{ route('home')}}'">
                <i class="bi bi-chevron-left"></i>
            </button>
            <span class="secondary-title">EAZY KALAN</span>
            
            <div class="header-controls">
                <div class="dropdown-container">
                    <button class="dropdown-btn" onclick="toggleDropdown()">
                        <span>Your Last Order</span>
                        <i class="bi bi-chevron-down"></i>
                    </button>
                </div>
                <button class="search-btn" onclick="openSearch()">
                    <i class="bi bi-search"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Main Header Section -->
    <div class="bbq-header" id="mainHeader">
        <div class="header-content">
            <button class="back-btn-item" onclick="window.location.href='{{ route('home')}}'">
                <i class="bi bi-chevron-left"></i>
            </button>
            <h1 class="page-title">Eazy Kalan</h1>
        </div>
    </div>

    <!-- Your Last Order Section -->
    <div class="last-order-section">
        <div class="last-order-header">
            <h2 class="last-order-title">Your Last Order</h2>
            <button class="add-all-btn" onclick="addAllToBasket()">Add all to basket</button>
        </div>
        
        <div class="last-order-grid">
            <div class="last-order-item" data-product-name="330g Gaz Lite Stove Kit" data-product-price="736.00" data-product-type="stove">
                <div class="last-order-image">
                    <img src="{{asset('images/stove.png')}}" alt="330g Gaz Lite Stove Kit">
                </div>
                <div class="last-order-info">
                    <h4 class="last-order-name">330g Gaz Lite Stove Kit</h4>
                    <p class="last-order-description">1 Stove + 1 Filled Cylinder</p>
                    <div class="last-order-bottom">
                        <p class="last-order-price">₱736</p>
                        <button class="last-order-add-btn" data-name="330g Gaz Lite Stove Kit" data-price="736.00" data-image="{{asset('images/stove.png')}}" data-type="stove">
                            <i class="bi bi-plus"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="last-order-item" data-product-name="Burner Assembly" data-product-price="711.00" data-product-type="other">
                <div class="last-order-image">
                    <img src="{{asset('images/stove.png')}}" alt="Burner Assembly">
                </div>
                <div class="last-order-info">
                    <h4 class="last-order-name">Burner Assembly</h4>
                    <p class="last-order-description">1 Stove + 1 Filled 230g</p>
                    <div class="last-order-bottom">
                        <p class="last-order-price">₱711</p>
                        <button class="last-order-add-btn" data-name="Burner Assembly" data-price="711.00" data-image="{{asset('images/stove.png')}}" data-type="other">
                            <i class="bi bi-plus"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="last-order-item" data-product-name="Drip Pan" data-product-price="72.00" data-product-type="other">
                <div class="last-order-image">
                    <img src="{{asset('images/stove.png')}}" alt="Drip Pan">
                </div>
                <div class="last-order-info">
                    <h4 class="last-order-name">Drip Pan</h4>
                    <p class="last-order-description">Stove Parts</p>
                    <div class="last-order-bottom">
                        <p class="last-order-price">₱72</p>
                        <button class="last-order-add-btn" data-name="Drip Pan" data-price="72.00" data-image="{{asset('images/stove.png')}}" data-type="other">
                            <i class="bi bi-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Products List -->
    <div class="products-container">
        <h2 class="last-order-title">For you</h2>
        <div class="product-item" data-product-type="stove" data-product-name="330g Gaz Lite Stove Kit 2" data-product-price="736.00">
            <div class="product-info">
                <h3 class="product-name">330g Gaz Lite Stove Kit 2</h3>
                <p class="product-description">1 Stove + 1 Filled 330g Cylinder</p>
                <p class="product-price">₱736.00</p>
            </div>
            <div class="product-image">
                <img src="{{asset('images/stove.png')}}" alt="330g Gaz Lite Griller Kit" data-name="330g Gaz Lite Stove Kit 2" data-price="736.00" data-image="{{asset('images/stove.png')}}">
                <button class="add-btn" data-name="330g Gaz Lite Stove Kit 2" data-price="736.00" data-image="{{asset('images/grill-placeholder.jpg')}}">
                    <i class="bi bi-plus"></i>
                </button>
            </div>
        </div>

        <div class="product-item" data-product-type="stove" data-product-name="330g Gaz Lite Stove Kit v2" data-product-price="1067.00">
            <div class="product-info">
                <h3 class="product-name">330g Gaz Lite Stove Kit v2</h3>
                <p class="product-description">1 Stove + 2 Filled 330g Cylinder + Black Case</p>
                <p class="product-price">₱1,067.00</p>
            </div>
            <div class="product-image">
                <img src="{{asset('images/stove.png')}}" alt="330g Gaz Lite Griller Kit v2" data-name="330g Gaz Lite Stove Kit v2" data-price="1067.00" data-image="{{asset('images/stove.png')}}">
                <button class="add-btn" data-name="330g Gaz Lite Stove Kit v2" data-price="1067.00" data-image="{{asset('images/stove.png')}}">
                    <i class="bi bi-plus"></i>
                </button>
            </div>
        </div>

        <div class="product-item" data-product-type="other" data-product-name="Burner Assembly" data-product-price="711.00">
            <div class="product-info">
                <h3 class="product-name">Burner Assembly</h3>
                <p class="product-description">1 Stove + 1 Filled 230g Cylinder</p>
                <p class="product-price">₱711.00</p>
            </div>
            <div class="product-image">
                <img src="{{asset('images/stove.png')}}" alt="230g Gaz Lite Griller Kit" data-name="Burner Assembly" data-price="711.00" data-image="{{asset('images/stove.png')}}">
                <button class="add-btn" data-name="Burner Assembly" data-price="711.00" data-image="{{asset('images/stove.png')}}">
                    <i class="bi bi-plus"></i>
                </button>
            </div>
        </div>

        <div class="product-item" data-product-type="other" data-product-name="Drip Pan" data-product-price="72.00">
            <div class="product-info">
                <h3 class="product-name">Drip Pan</h3>
                <p class="product-description">Stove Parts</p>
                <p class="product-price">₱72.00</p>
            </div>
            <div class="product-image">
                <img src="{{asset('images/stove.png')}}" alt="Cooking Grill" data-name="Drip Pan" data-price="72.00" data-image="{{asset('images/stove.png')}}">
                <button class="add-btn" data-name="Drip Pan" data-price="72.00" data-image="{{asset('images/stove.png')}}">
                    <i class="bi bi-plus"></i>
                </button>
            </div>
        </div>

        <div class="product-item" data-product-type="other" data-product-name="Burner Tube" data-product-price="130.00">
            <div class="product-info">
                <h3 class="product-name">Burner Tube</h3>
                <p class="product-description">Stove Parts</p>
                <p class="product-price">₱130.00</p>
            </div>
            <div class="product-image">
                <img src="{{asset('images/stove.png')}}" alt="Burner Tube" data-name="Burner Tube" data-price="130.00" data-image="{{asset('images/stove.png')}}">
                <button class="add-btn" data-name="Burner Tube" data-price="130.00" data-image="{{asset('images/stove.png')}}">
                    <i class="bi bi-plus"></i>
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Stove Color Selection Modal -->
<div id="stoveModal" class="modal-overlay">
    <div class="modal-content">
        <div class="modal-header">
            <h3 id="modalProductName" class="modal-title">Select Stove Color</h3>
            <button class="modal-close" onclick="closeModal()">
                <i class="bi bi-x"></i>
            </button>
        </div>
        
        <div class="modal-body">
            <div class="product-summary">
                <img id="modalProductImage" src="{{ asset('images/stove.png') }}" alt="Product">
                <div class="product-details">
                    <h4 id="modalProductTitle"></h4>
                    <p id="modalProductPrice"></p>
                </div>
            </div>
            
            <div class="color-selection">
                <h4>Stove Color</h4>
                <div class="color-list">
                    <div class="color-item" data-color="yellow">
                        <div class="color-info">
                            <div class="color-circle yellow"></div>
                            <span class="color-name">Yellow</span>
                        </div>
                        <span>stock: 20</span>
                        <div class="quantity-controls">
                            <button class="qty-btn minus" onclick="changeQty('yellow', -1)">-</button>
                            <span class="qty-display" id="qty-yellow">0</span>
                            <button class="qty-btn plus" onclick="changeQty('yellow', 1)">+</button>
                        </div>
                    </div>
                    
                    <div class="color-item" data-color="red">
                        <div class="color-info">
                            <div class="color-circle red"></div>
                            <span class="color-name">Red</span>
                        </div>
                        <span>stock: 20</span>
                        <div class="quantity-controls">
                            <button class="qty-btn minus" onclick="changeQty('red', -1)">-</button>
                            <span class="qty-display" id="qty-red">0</span>
                            <button class="qty-btn plus" onclick="changeQty('red', 1)">+</button>
                        </div>
                    </div>
                    
                    <div class="color-item" data-color="blue">
                        <div class="color-info">
                            <div class="color-circle blue"></div>
                            <span class="color-name">Blue</span>
                        </div>
                        <span>stock: 20</span>
                        <div class="quantity-controls">
                            <button class="qty-btn minus" onclick="changeQty('blue', -1)">-</button>
                            <span class="qty-display" id="qty-blue">0</span>
                            <button class="qty-btn plus" onclick="changeQty('blue', 1)">+</button>
                        </div>
                    </div>
                    
                    <div class="color-item" data-color="green">
                        <div class="color-info">
                            <div class="color-circle green"></div>
                            <span class="color-name">Green</span>
                        </div>
                        <span>stock: 20</span>
                        <div class="quantity-controls">
                            <button class="qty-btn minus" onclick="changeQty('green', -1)">-</button>
                            <span class="qty-display" id="qty-green">0</span>
                            <button class="qty-btn plus" onclick="changeQty('green', 1)">+</button>
                        </div>
                    </div>
                    
                    <div class="color-item" data-color="choco">
                        <div class="color-info">
                            <div class="color-circle choco"></div>
                            <span class="color-name">Choco</span>
                        </div>
                        <span>stock: 20</span>
                        <div class="quantity-controls">
                            <button class="qty-btn minus" onclick="changeQty('choco', -1)">-</button>
                            <span class="qty-display" id="qty-choco">0</span>
                            <button class="qty-btn plus" onclick="changeQty('choco', 1)">+</button>
                        </div>
                    </div>
                    
                    <div class="color-item" data-color="white">
                        <div class="color-info">
                            <div class="color-circle white"></div>
                            <span class="color-name">White</span>
                        </div>
                        <span>stock: 20</span>
                        <div class="quantity-controls">
                            <button class="qty-btn minus" onclick="changeQty('white', -1)">-</button>
                            <span class="qty-display" id="qty-white">0</span>
                            <button class="qty-btn plus" onclick="changeQty('white', 1)">+</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="modal-footer">
            <button class="btn-add-cart" onclick="addToCartFromModal()">
                <span>Add to Cart - </span>
                <span id="totalPrice">₱736.00</span>
            </button>
        </div>
    </div>
</div>
@endsection

@section('css')
<style>
    body {
        padding-top: 0 !important;
    }

    .content-area {
        margin-top: 0 !important;
    }

    /* Secondary Header (appears on scroll) */
    .secondary-header {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        background: white;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        z-index: 1000;
        transform: translateY(-100%);
        transition: transform 0.3s ease;
        height: 80px;
        display: flex;
        align-items: center;
        padding: 0 20px;
    }

    .secondary-header.show {
        transform: translateY(0);
    }

    .secondary-nav {
        display: flex;
        align-items: center;
        width: 100%;
        gap: 15px;
    }

    .secondary-back-btn {
        background: none;
        border: none;
        color: #333;
        font-size: 20px;
        cursor: pointer;
        padding: 8px;
        border-radius: 50%;
        transition: background 0.2s ease;
    }

    .secondary-back-btn:hover {
        background: #f5f5f5;
    }

    .secondary-title {
        font-size: 14px;
        font-weight: 600;
        color: #333;
        margin-right: auto;
    }

    .header-controls {
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .dropdown-container {
        position: relative;
    }

    .dropdown-btn {
        background: #f8f9fa;
        border: 1px solid #e9ecef;
        border-radius: 20px;
        padding: 8px 16px;
        font-size: 14px;
        color: #495057;
        cursor: pointer;
        display: flex;
        align-items: center;
        gap: 8px;
        transition: all 0.2s ease;
        min-width: 140px;
        justify-content: space-between;
    }

    .dropdown-btn:hover {
        background: #e9ecef;
    }

    .search-btn {
        background: #f8f9fa;
        border: 1px solid #e9ecef;
        border-radius: 50%;
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        color: #495057;
        transition: all 0.2s ease;
    }

    .search-btn:hover {
        background: #e9ecef;
    }

    .bbq-header {
        height: 173px;
        background: #01B8EA;
        padding: 0;
        position: relative;
        overflow: hidden;
        opacity: 100%;
        transition: opacity 0.3s ease;
    }

    .bbq-header::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('{{asset("images/ezkalan.png")}}') center center no-repeat;
        background-size: 500px 500px;
        opacity: 0.1;
        pointer-events: none;
    }

    .header-content {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 40px 20px 30px;
        position: relative;
        z-index: 2;
    }

    .back-btn {
        background: rgba(255, 255, 255, 0.48);
        border: none;
        width: 40px;
        height: 40px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 15px;
        backdrop-filter: blur(10px);
        transition: all 0.3s ease;
        position: absolute;
        left: 20px;
        margin: 20px 0 0 0;
    }

    .back-btn:hover {
        background: rgba(255, 255, 255, 0.3);
        transform: scale(1.05);
    }

    .back-btn i {
        color: white;
        font-size: 20px;
        font-weight: bold;
    }

    .page-title {
        color: white;
        font-size: 55.52px !important;
        font-weight: bold !important;
        margin: 15px 0 0 20px;
        text-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }

    /* Your Last Order Section */
    .last-order-section {
        background: white;
        padding: 20px;
        border-bottom: 8px solid #f8f9fa;
    }

    .last-order-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 16px;
    }

    .last-order-title {
        font-size: 15px;
        font-weight: 600;
        color: #333;
        margin: 0;
    }

    .add-all-btn {
        background: none;
        border: none;
        color: #007bff;
        font-size: 14px;
        font-weight: 500;
        cursor: pointer;
        text-decoration: none;
        transition: color 0.2s ease;
    }

    .add-all-btn:hover {
        color: #0056b3;
        text-decoration: underline;
    }

    .last-order-grid {
        display: flex;
        gap: 12px;
        overflow-x: auto;
        scrollbar-width: none;
        -ms-overflow-style: none;
        padding-bottom: 4px;
    }

    .last-order-grid::-webkit-scrollbar {
        display: none;
    }

    .last-order-item {
        min-width: 140px;
        background: white;
        border: 1px solid #e9ecef;
        border-radius: 16px;
        display: flex;
        flex-direction: column;
        position: relative;
        overflow: hidden;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        transition: all 0.3s ease;
    }

    .last-order-item:hover {
        box-shadow: 0 4px 12px rgba(0,0,0,0.12);
        transform: translateY(-2px);
    }

    .last-order-image {
        width: 100%;
        height: 100px;
        background: #f5f5f5;
        border-radius: 16px 16px 0 0;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        position: relative;
    }

    .last-order-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .last-order-info {
        padding: 12px;
        display: flex;
        flex-direction: column;
        flex-grow: 1;
        position: relative;
    }

    .last-order-name {
        font-size: 14px;
        font-weight: 600;
        color: #333;
        margin: 0 0 2px 0;
        line-height: 1.3;
        text-align: left;
    }

    .last-order-description {
        font-size: 12px;
        color: #888;
        margin: 0 0 8px 0;
        line-height: 1.2;
        text-align: left;
    }

    .last-order-bottom {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: auto;
    }

    .last-order-price {
        font-size: 14px;
        font-weight: 700;
        color: #333;
        margin: 0;
    }

    .last-order-add-btn {
        background: #007bff;
        border: none;
        width: 32px;
        height: 32px;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 14px;
        font-weight: bold;
        transition: all 0.3s ease;
        box-shadow: 0 2px 4px rgba(0, 123, 255, 0.3);
        flex-shrink: 0;
    }

    .last-order-add-btn:hover {
        background: #0056b3;
        transform: scale(1.05);
        box-shadow: 0 3px 6px rgba(0, 123, 255, 0.4);
    }

    .products-container {
        padding: 0;
        background: white;
        min-height: calc(100vh - 150px);
    }

    .product-item {
        background: white;
        border-radius: 0;
        padding: 20px 16px;
        margin-bottom: 0;
        box-shadow: none;
        display: flex;
        align-items: center;
        position: relative;
        transition: all 0.3s ease;
        border: none;
        border-bottom: 1px solid #f0f0f0;
        cursor: pointer;
    }

    .product-item:last-child {
        border-bottom: none;
    }

    .product-item:hover {
        background: #f8f9fa;
    }

    .product-info {
        flex: 1;
        padding-right: 15px;
    }

    .product-name {
        font-size: 14px !important;
        font-weight: 600;
        color: #333;
        margin: 0 0 4px 0;
        line-height: 1.2;
    }

    .product-description {
        font-size: 14px;
        color: #888;
        margin: 0 0 8px 0;
        line-height: 1.3;
        font-weight: 400;
    }

    .product-price {
        font-size: 18px;
        font-weight: 600;
        color: #333;
        margin: 0;
    }

    .product-image {
        width: 100px;
        height: 100px;
        background: #f5f5f5;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        position: relative;
        margin-right: 20px;
    }

    .product-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 12px;
    }

    .product-image:empty::before {
        content: '';
        width: 40px;
        height: 40px;
        background: #ddd;
        border-radius: 8px;
        display: block;
    }

    .add-btn {
        background: #4facfe;
        border: none;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 16px;
        font-weight: bold;
        transition: all 0.3s ease;
        box-shadow: 0 2px 8px rgba(79, 172, 254, 0.4);
        position: absolute;
        bottom: 4px;
        right: 4px;
        z-index: 10;
    }

    .add-btn:hover {
        background: #00d2ff;
        transform: scale(1.1);
        box-shadow: 0 4px 12px rgba(79, 172, 254, 0.5);
    }

    .add-btn:active {
        transform: scale(0.95);
    }

    /* Button state with quantity - copied from other pages */
    .add-btn.with_quantity,
    .last-order-add-btn.with_quantity {
        background: #ca1f1f !important;
    }

    .add-btn.with_quantity:hover,
    .last-order-add-btn.with_quantity:hover {
        background: #a91717 !important;
    }

    .qty_badge {
        font-size: 12px;
        font-weight: 700;
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        height: 100%;
        border-radius: 50%;
    }

    /* Modal styles */
    .modal-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        align-items: center;
        justify-content: center;
        z-index: 9999 !important;
        backdrop-filter: blur(5px);
    }

    .modal-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.6);
        display: none;
        align-items: center;
        justify-content: center;
        z-index: 9999 !important;
        backdrop-filter: blur(8px);
        padding: 20px;
    }

    .modal-overlay.show {
        display: flex;
        animation: fadeIn 0.3s ease;
    }

    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    /* Modal content - improved structure */
    .modal-content {
        background: white !important;
        border-radius: 20px;
        width: 100%;
        max-width: 420px;
        max-height: 85vh;
        overflow: hidden;
        box-shadow: 0 25px 50px rgba(0, 0, 0, 0.25);
        animation: slideUp 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
        display: flex;
        flex-direction: column;
    }

    @keyframes slideUp {
        from { 
            transform: translateY(30px) scale(0.95); 
            opacity: 0; 
        }
        to { 
            transform: translateY(0) scale(1); 
            opacity: 1; 
        }
    }

    /* Modal header - better spacing and hierarchy */
    .modal-header {
        padding: 24px 24px 16px;
        border-bottom: 1px solid #f0f0f0;
        background: white;
        position: sticky;
        top: 0;
        z-index: 10;
    }

    .modal-header .modal-title {
        font-size: 20px;
        font-weight: 700;
        color: #1a1a1a;
        margin: 0 0 16px 0;
    }

    .modal-close {
        position: absolute;
        top: 20px;
        right: 20px;
        background: #f8f9fa;
        border: none;
        width: 36px;
        height: 36px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        color: #6c757d;
        font-size: 18px;
        transition: all 0.2s ease;
    }

    .modal-close:hover {
        background: #e9ecef;
        color: #495057;
        transform: scale(1.05);
    }

    /* Product summary - enhanced layout */
    .product-summary {
        display: flex;
        align-items: center;
        gap: 16px;
        margin-top: 8px;
    }

    .product-summary img {
        width: 64px;
        height: 64px;
        border-radius: 12px;
        object-fit: cover;
        border: 1px solid #f0f0f0;
        background: #f8f9fa;
    }

    .product-details {
        flex: 1;
    }

    .product-details h4 {
        font-size: 16px;
        font-weight: 600;
        color: #1a1a1a;
        margin: 0 0 4px 0;
        line-height: 1.3;
    }

    .product-details p {
        font-size: 20px;
        font-weight: 700;
        color: #01B8EA;
        margin: 0;
    }

    /* Modal body - better scrolling */
    .modal-body {
        flex: 1;
        overflow-y: auto;
        padding: 0 24px;
        scrollbar-width: thin;
        scrollbar-color: #e0e0e0 transparent;
    }

    .modal-body::-webkit-scrollbar {
        width: 6px;
    }

    .modal-body::-webkit-scrollbar-track {
        background: transparent;
    }

    .modal-body::-webkit-scrollbar-thumb {
        background: #e0e0e0;
        border-radius: 3px;
    }

    /* Color selection section - improved spacing */
    .color-selection {
        padding: 24px 0;
    }

    .color-selection h4 {
        font-size: 18px;
        font-weight: 600;
        color: #1a1a1a;
        margin: 0 0 20px 0;
    }

    /* Color list - enhanced design */
    .color-list {
        display: flex;
        flex-direction: column;
        gap: 4px;
    }

    /* Color items - much better visual design */
    .color-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 16px 12px;
        border-radius: 12px;
        transition: all 0.2s ease;
        position: relative;
        background: transparent;
    }

    .color-item:hover {
        background: #f8f9fa;
        transform: translateX(4px);
    }

    /* Color info section */
    .color-info {
        display: flex;
        align-items: center;
        gap: 14px;
        flex: 1;
    }

    /* Enhanced color circles */
    .color-circle {
        width: 28px;
        height: 28px;
        border-radius: 50%;
        border: 2px solid #fff;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15), 
                    inset 0 0 0 1px rgba(0, 0, 0, 0.1);
        transition: all 0.2s ease;
        position: relative;
    }

    .color-circle:hover {
        transform: scale(1.1);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2), 
                    inset 0 0 0 1px rgba(0, 0, 0, 0.1);
    }

    /* Improved color variants with gradients */
    .color-circle.yellow { 
        background: linear-gradient(135deg, #FFD700 0%, #FFA500 100%); 
    }

    .color-circle.red { 
        background: linear-gradient(135deg, #FF6B6B 0%, #FF4757 100%); 
    }

    .color-circle.blue { 
        background: linear-gradient(135deg, #4A90E2 0%, #2E86AB 100%); 
    }

    .color-circle.green { 
        background: linear-gradient(135deg, #26C281 0%, #20A068 100%); 
    }

    .color-circle.choco { 
        background: linear-gradient(135deg, #8B4513 0%, #A0522D 100%); 
    }

    .color-circle.white { 
        background: linear-gradient(135deg, #FFFFFF 0%, #F8F9FA 100%);
        border-color: #dee2e6;
    }

    /* Color name styling */
    .color-name {
        font-size: 16px;
        color: #2c3e50;
        font-weight: 500;
        text-transform: capitalize;
    }

    /* Quantity controls - much better design */
    .quantity-controls {
        display: flex;
        align-items: center;
        gap: 12px;
        background: #f8f9fa;
        padding: 6px;
        border-radius: 12px;
        border: 1px solid #e9ecef;
    }

    .qty-btn {
        background: white;
        border: 1px solid #e0e0e0;
        width: 32px;
        height: 32px;
        border-radius: 8px;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.2s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    }

    .qty-btn:hover {
        background: #f8f9fa;
        transform: translateY(-1px);
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15);
    }

    .qty-btn:active {
        transform: translateY(0);
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    }

    .qty-btn.minus {
        color: #dc3545;
        border-color: #f5c6cb;
    }

    .qty-btn.minus:hover {
        background: #fff5f5;
        border-color: #f1aeb5;
    }

    .qty-btn.plus {
        color: #01B8EA;
        border-color: #b8e6f3;
    }

    .qty-btn.plus:hover {
        background: #f0fcff;
        border-color: #7dd3fc;
    }

    /* Quantity display */
    .qty-display {
        font-size: 16px;
        font-weight: 600;
        color: #2c3e50;
        min-width: 24px;
        text-align: center;
        padding: 0 4px;
    }

    /* Modal footer - enhanced button */
    .modal-footer {
        padding: 20px 24px 24px;
        border-top: 1px solid #f0f0f0;
        background: white;
        position: sticky;
        bottom: 0;
    }

    .btn-add-cart {
        width: 100%;
        padding: 16px 20px;
        border: none;
        border-radius: 12px;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        background: linear-gradient(135deg, #01B8EA 0%, #0EA5D6 100%);
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        box-shadow: 0 4px 12px rgba(1, 184, 234, 0.3);
        position: relative;
        overflow: hidden;
    }

    .btn-add-cart::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
        transition: left 0.5s;
    }

    .btn-add-cart:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(1, 184, 234, 0.4);
        background: linear-gradient(135deg, #0EA5D6 0%, #0C94C2 100%);
    }

    .btn-add-cart:hover::before {
        left: 100%;
    }

    .btn-add-cart:active {
        transform: translateY(0);
    }

    .btn-add-cart:disabled {
        opacity: 0.6;
        cursor: not-allowed;
        transform: none;
    }

    /* quantity modal for non-stove products - copied and modified */
    .qty_modal_other {
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

    .qty_modal_other.show {
        opacity: 1;
        visibility: visible;
        padding: 20px;
    }

    .other_modal_overlay {
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

    .other_modal_overlay.show {
        opacity: 1;
        visibility: visible;
    }

    .other_modal_header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
        padding-bottom: 15px;
        border-bottom: 1px solid #e9ecef;
    }

    .other_modal_title {
        font-size: 16px;
        font-weight: 600;
        color: #333;
        margin: 0;
    }

    .close_other_modal {
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

    .close_other_modal:hover {
        background: #f5f5f5;
        color: #333;
    }

    .other_product_info {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 15px 0;
        border-bottom: 1px solid #f0f0f0;
        margin-bottom: 20px;
    }

    .other_product_img {
        width: 60px;
        height: 60px;
        object-fit: contain;
        border-radius: 8px;
        background: #f5f5f5;
        padding: 8px;
    }

    .other_product_details {
        flex: 1;
    }

    .other_product_name {
        font-size: 16px;
        font-weight: 600;
        color: #333;
        margin-bottom: 4px;
        line-height: 1.3;
    }

    .other_product_price {
        font-size: 18px;
        font-weight: 700;
        color: #4A90E2;
    }

    .other_qty_section {
        margin-bottom: 20px;
    }

    .other_qty_wrapper {
        display: flex;
        flex-direction: column;
        gap: 12px;
    }

    .other_qty_label {
        font-size: 14px;
        font-weight: 600;
        color: #333;
    }

    .other_qty_controls {
        display: flex;
        align-items: center;
        gap: 12px;
        justify-content: center;
    }

    .other_qty_btn {
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

    .other_qty_btn:hover {
        background: #e9ecef;
        border-color: #dee2e6;
        transform: translateY(-1px);
    }

    .other_qty_btn.btn_minus {
        color: #dc3545;
        border-color: #f5c6cb;
    }

    .other_qty_btn.btn_minus:hover {
        background: #f8d7da;
        border-color: #f1aeb5;
    }

    .other_qty_btn.btn_plus {
        color: #28a745;
        border-color: #c3e6cb;
    }

    .other_qty_btn.btn_plus:hover {
        background: #d4edda;
        border-color: #b8dabd;
    }

    .other_qty_input {
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

    .other_qty_input:focus {
        border-color: #4A90E2;
        box-shadow: 0 0 0 3px rgba(74, 144, 226, 0.1);
    }

    .other_total_section {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 15px 0;
        border-top: 1px solid #e9ecef;
        margin-bottom: 15px;
    }

    .other_total_label {
        font-size: 14px;
        font-weight: 500;
        color: #666;
    }

    .other_total_price {
        font-size: 16px;
        font-weight: 700;
        color: #4A90E2;
    }

    .other_modal_btns {
        display: flex;
        gap: 12px;
        margin-top: 20px;
        padding-top: 15px;
        border-top: 1px solid #e9ecef;
    }

    .other_modal_btn {
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

    .other_btn_cancel {
        background: #f8f9fa;
        color: #6c757d;
        border: 1px solid #e9ecef;
    }

    .other_btn_cancel:hover {
        background: #e9ecef;
        color: #495057;
        transform: translateY(-1px);
    }

    .other_btn_confirm {
        background: #4A90E2;
        color: #fff;
        box-shadow: 0 2px 4px rgba(74, 144, 226, 0.3);
    }

    .other_btn_confirm:hover {
        background: #186ed1;
        transform: translateY(-1px);
        box-shadow: 0 3px 6px rgba(74, 144, 226, 0.4);
    }

    /* Toast notification */
    .toast {
        position: fixed;
        top: 80px;
        right: 20px;
        padding: 12px 20px;
        border-radius: 8px;
        z-index: 9999;
        font-weight: 500;
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        transform: translateX(100%);
        transition: transform 0.3s ease;
        max-width: 300px;
        font-size: 14px;
    }

    .toast.success {
        background: #28a745;
        color: white;
    }

    .toast.error {
        background: #dc3545;
        color: white;
    }

    .toast.warning {
        background: #ffc107;
        color: #212529;
    }

    .toast.show {
        transform: translateX(0);
    }

    @media (max-width: 480px) {
        .modal-content {
            left: 48% !important;
        }
    }

    @media (max-width: 768px) {
        .secondary-header {
            height: 70px;
            padding: 0 15px;
        }
        
        .dropdown-btn {
            min-width: 120px;
            font-size: 13px;
            padding: 6px 12px;
        }
        
        .search-btn {
            width: 36px;
            height: 36px;
        }
        
        .header-content {
            padding: 35px 15px 25px;
        }
        
        .page-title {
            font-size: 24px;
        }

        .last-order-section {
            padding: 16px;
        }

        .last-order-grid {
            gap: 10px;
        }

        .last-order-item {
            min-width: 130px;
        }

        .last-order-image {
            height: 90px;
        }

        .last-order-name {
            font-size: 11px;
        }

        .last-order-price {
            font-size: 14px;
        }
  
        .products-container {
            padding: 15px;
        }
        
        .product-item {
            padding: 16px;
            margin-bottom: 0;
        }
        
        .product-image {
            width: 80px;
            height: 80px;
            margin-right: 16px;
        }
        
        .product-name {
            font-size: 14px;
        }
        
        .product-description {
            font-size: 13px;
        }

        .product-price {
            font-size: 16px;
        }
        
        .add-btn {
            width: 26px;
            height: 26px;
            font-size: 14px;
        }

        .modal-content {
            width: 95%;
            margin: 10px;
        }

        .quantity-controls {
            gap: 10px;
        }

        .qty-btn {
            width: 28px;
            height: 28px;
            font-size: 14px;
        }

        .qty_modal_other {
            width: 95%;
            max-height: 75vh;
        }

        .qty_modal_other.show {
            padding: 15px;
        }

        .other_product_img {
            width: 50px;
            height: 50px;
        }

        .other_product_name {
            font-size: 14px;
        }

        .other_product_price {
            font-size: 16px;
        }

        .other_qty_btn {
            width: 36px;
            height: 36px;
            font-size: 16px;
        }

        .other_qty_input {
            width: 70px;
            height: 36px;
            font-size: 14px;
        }

        .other_modal_btn {
            padding: 10px 14px;
            font-size: 13px;
        }

        .qty_badge {
            font-size: 10px;
        }
    }

    .product-image,
    .last-order-image {
        background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
        background-size: 200% 100%;
        animation: loading 1.5s infinite;
    }

    @keyframes loading {
        0% { background-position: 200% 0; }
        100% { background-position: -200% 0; }
    }

    .product-image img,
    .last-order-image img {
        position: relative;
        z-index: 1;
    }

    /* hide spinners on number input */
    .other_qty_input::-webkit-outer-spin-button,
    .other_qty_input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    .other_qty_input[type=number] {
        -moz-appearance: textfield;
    }
</style>
@endsection

@section('js')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const mainHeader = document.getElementById('mainHeader');
        const secondaryHeader = document.getElementById('secondaryHeader');
        let lastScrollTop = 0;
        const headerHeight = 173;

        // Scroll header functionality
        window.addEventListener('scroll', function() {
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            
            if (scrollTop > headerHeight) {
                if (secondaryHeader) {
                    secondaryHeader.classList.add('show');
                }
            } else {
                if (secondaryHeader) {
                    secondaryHeader.classList.remove('show');
                }
            }
            
            lastScrollTop = scrollTop;
        });

        // Get all buttons
        const lastOrderAddBtns = document.querySelectorAll('.last-order-add-btn');
        const addAllBtn = document.querySelector('.add-all-btn');
        
        // Track button states for last order items
        const lastOrderQuantities = new Map();
        const lastOrderProductData = new Map();

        // GLOBAL REFRESH FUNCTION FOR REAL-TIME UPDATES
        function refreshAllButtonDisplays() {
            // Refresh last order buttons
            lastOrderProductData.forEach((productData, button) => {
                const currentQty = getProductQuantityFromCart(productData.name);
                lastOrderQuantities.set(button, currentQty);
                updateLastOrderBtnDisplay(button, currentQty);
            });

            // Refresh all product buttons
            updateAllProductButtons();
        }

        // Make functions global for access
        window.refreshAllButtonDisplays = refreshAllButtonDisplays;

        // Initialize last order buttons
        lastOrderAddBtns.forEach((btn, idx) => {
            const prodName = btn.getAttribute('data-name');
            const prodPrice = parseFloat(btn.getAttribute('data-price'));
            const prodImg = btn.getAttribute('data-image');
            const prodType = btn.getAttribute('data-type');
            
            lastOrderProductData.set(btn, {
                name: prodName,
                price: prodPrice,
                image: prodImg,
                type: prodType
            });
            
            // Get current quantity from cart
            const currentQty = getProductQuantityFromCart(prodName);
            lastOrderQuantities.set(btn, currentQty);
            updateLastOrderBtnDisplay(btn, currentQty);
        });

        // Last order button click handlers
        lastOrderAddBtns.forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                
                const prodData = lastOrderProductData.get(this);
                if (!prodData) return;

                const { name, price, image, type } = prodData;
                
                if (type === 'stove') {
                    // Create a temporary product item for stove modal
                    const tempItem = document.createElement('div');
                    tempItem.setAttribute('data-product-name', name);
                    tempItem.setAttribute('data-product-price', price);
                    tempItem.setAttribute('data-product-type', 'stove');
                    const tempImg = document.createElement('img');
                    tempImg.src = image;
                    tempItem.appendChild(tempImg);
                    openStoveModal(tempItem, this); // Pass the button reference
                } else {
                    // Show quantity modal for other products
                    showOtherQtyModal(this, name, price, image, 'lastorder');
                }

                // Button animation feedback
                this.style.transform = 'scale(0.9)';
                setTimeout(() => {
                    this.style.transform = 'scale(1)';
                }, 150);
            });
        });

        // Add all to basket functionality
        if (addAllBtn) {
            addAllBtn.addEventListener('click', function(e) {
                e.preventDefault();
                
                const lastOrderItems = document.querySelectorAll('.last-order-item');
                let itemsAdded = 0;
                let totalItems = 0;

                lastOrderItems.forEach(item => {
                    const name = item.getAttribute('data-product-name');
                    const price = parseFloat(item.getAttribute('data-product-price'));
                    const type = item.getAttribute('data-product-type');
                    const imgEl = item.querySelector('img');
                    const img = imgEl ? imgEl.src : '';
                    
                    if (name && price && !isNaN(price)) {
                        if (type === 'stove') {
                            // Add stove with default yellow color
                            const cartItem = {
                                id: Date.now() + Math.random(),
                                name: name + ' (Yellow)',
                                originalName: name,
                                price: price,
                                quantity: 1,
                                image: img,
                                color: 'yellow'
                            };
                            
                            if (addItemToCart(cartItem)) {
                                itemsAdded++;
                                totalItems += 1;
                            }
                        } else {
                            // Add other products normally
                            const cartItem = {
                                id: Date.now() + Math.random(),
                                name: name,
                                price: price,
                                quantity: 1,
                                image: img,
                                color: null
                            };
                            
                            if (addItemToCart(cartItem)) {
                                itemsAdded++;
                                totalItems += 1;
                            }
                        }
                    }
                });

                if (itemsAdded > 0) {
                    displayToast(`${totalItems} item(s) from last order added to cart!`, 'success');
                    // GLOBAL REFRESH AFTER ADD ALL
                    refreshAllButtonDisplays();
                } else {
                    displayToast('Failed to add items to cart', 'error');
                }
            });
        }

        // Initialize regular product buttons
        updateAllProductButtons();

        // Create other modal overlay
        window.otherModalOverlay = document.createElement('div');
        window.otherModalOverlay.className = 'other_modal_overlay';
        window.otherModalOverlay.id = 'otherModalOverlay';
        document.body.appendChild(window.otherModalOverlay);

        var products = document.querySelectorAll('.product-item');
        
        // Add click handlers to products
        for (var i = 0; i < products.length; i++) {
            products[i].addEventListener('click', function(event) {
                handleProductClick(this, event);
            });
        }

        var buttons = document.querySelectorAll('.add-btn');
        
        // Add click handlers to buttons
        for (var i = 0; i < buttons.length; i++) {
            buttons[i].addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                handleAddClick(this);
            });
        }

        // Modal close when clicking outside
        const stoveModal = document.getElementById('stoveModal');
        if (stoveModal) {
            stoveModal.addEventListener('click', function(e) {
                if (e.target == this) {
                    closeModal();
                }
            });
        }

        // INITIAL REFRESH OF ALL BUTTON DISPLAYS AFTER DOM LOADED
        setTimeout(() => {
            refreshAllButtonDisplays();
        }, 100);

        console.log('Eazy Kalan page initialized');
    });

    // Helper function to get product quantity from cart
    function getProductQuantityFromCart(productName) {
        try {
            const cartData = getCartData();
            let totalQty = 0;
            
            cartData.forEach(item => {
                if (item.name === productName || item.originalName === productName) {
                    totalQty += parseInt(item.quantity) || 0;
                }
            });
            
            return totalQty;
        } catch (error) {
            console.error('Error getting product quantity:', error);
            return 0;
        }
    }

    // Update last order button display with animation
    function updateLastOrderBtnDisplay(button, qty) {
        if (qty > 0) {
            button.classList.add('with_quantity');
            button.innerHTML = `<span class="qty_badge pulse">${qty}</span>`;
            
            // Remove pulse class after animation
            setTimeout(() => {
                const badge = button.querySelector('.qty_badge');
                if (badge) badge.classList.remove('pulse');
            }, 600);
        } else {
            button.classList.remove('with_quantity');
            button.innerHTML = '<i class="bi bi-plus"></i>';
        }
    }

    // Update all last order buttons
    function updateAllLastOrderButtons() {
        const lastOrderAddBtns = document.querySelectorAll('.last-order-add-btn');
        lastOrderAddBtns.forEach(btn => {
            const name = btn.getAttribute('data-name');
            const qty = getProductQuantityFromCart(name);
            updateLastOrderBtnDisplay(btn, qty);
        });
    }

    // Update all product buttons
    function updateAllProductButtons() {
        const productBtns = document.querySelectorAll('.add-btn');
        productBtns.forEach(btn => {
            const productItem = btn.closest('.product-item');
            if (productItem) {
                const name = productItem.getAttribute('data-product-name');
                const qty = getProductQuantityFromCart(name);
                updateProductBtnDisplay(btn, qty);
            }
        });
    }

    // Update product button display with animation
    function updateProductBtnDisplay(button, qty) {
        if (qty > 0) {
            button.classList.add('with_quantity');
            button.innerHTML = `<span class="qty_badge pulse">${qty}</span>`;
            
            // Remove pulse class after animation
            setTimeout(() => {
                const badge = button.querySelector('.qty_badge');
                if (badge) badge.classList.remove('pulse');
            }, 600);
        } else {
            button.classList.remove('with_quantity');
            button.innerHTML = '<i class="bi bi-plus"></i>';
        }
    }

    // Enhanced toast notification function
    function displayToast(message, type, duration) {
        var toast = document.createElement('div');
        toast.className = 'toast ' + (type || 'info');
        toast.textContent = message;
        
        // Add basic toast styles if not defined in CSS
        toast.style.cssText = `
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 15px 20px;
            border-radius: 5px;
            color: white;
            z-index: 10000;
            opacity: 0;
            transform: translateX(100%);
            transition: all 0.3s ease;
        `;
        
        // Set background color based on type
        switch(type) {
            case 'success':
                toast.style.backgroundColor = '#28a745';
                break;
            case 'error':
                toast.style.backgroundColor = '#dc3545';
                break;
            case 'warning':
                toast.style.backgroundColor = '#ffc107';
                toast.style.color = '#212529';
                break;
            default:
                toast.style.backgroundColor = '#17a2b8';
        }
        
        document.body.appendChild(toast);
        
        setTimeout(function() {
            toast.style.opacity = '1';
            toast.style.transform = 'translateX(0)';
        }, 100);
        
        setTimeout(function() {
            toast.style.opacity = '0';
            toast.style.transform = 'translateX(100%)';
            setTimeout(function() {
                if (toast.parentNode) {
                    toast.parentNode.removeChild(toast);
                }
            }, 300);
        }, duration || 3000);
    }

    // Get cart data from localStorage
    function getCartData() {
        try {
            var cartData = localStorage.getItem('dealerCartData');
            if (cartData) {
                return JSON.parse(cartData);
            }
            return [];
        } catch (e) {
            console.error('Error reading cart:', e);
            return [];
        }
    }

    // Save cart data to localStorage
    function saveCartData(cartData) {
        try {
            localStorage.setItem('dealerCartData', JSON.stringify(cartData));
            
            // Update cart totals for compatibility
            var totalItems = 0;
            var totalAmount = 0;
            for (var i = 0; i < cartData.length; i++) {
                totalItems += cartData[i].quantity;
                totalAmount += cartData[i].price * cartData[i].quantity;
            }
            
            localStorage.setItem('cartItems', totalItems.toString());
            localStorage.setItem('cartTotal', totalAmount.toFixed(2));
            
            // Call cart update functions if they exist
            if (typeof updateCartBadge === 'function') {
                updateCartBadge();
            }
            if (typeof updateFloatingCartButton === 'function') {
                updateFloatingCartButton();
            }
            if (typeof updateCartBadgeAfterAction === 'function') {
                updateCartBadgeAfterAction();
            }
            
            return true;
        } catch (e) {
            console.error('Error saving cart:', e);
            return false;
        }
    }

    // Enhanced addItemToCart with immediate refresh
    function addItemToCart(productData) {
        if (!productData || !productData.name || !productData.price) {
            console.error('Invalid product data:', productData);
            return false;
        }
        
        var cartData = getCartData();
        var existingIndex = -1;
        
        for (var i = 0; i < cartData.length; i++) {
            if (cartData[i].name === productData.name) {
                existingIndex = i;
                break;
            }
        }
        
        if (existingIndex >= 0) {
            cartData[existingIndex].quantity += productData.quantity;
        } else {
            cartData.push(productData);
        }
        
        const success = saveCartData(cartData);
        
        // IMMEDIATE REFRESH FOR REAL-TIME UPDATES
        if (success) {
            if (window.refreshAllButtonDisplays) {
                window.refreshAllButtonDisplays();
            }
            
            if (typeof triggerCartBadgeUpdate === 'function') {
                triggerCartBadgeUpdate();
            }
        }
        
        return success;
    }

    // Enhanced addToCart with immediate refresh
    function addToCart(product) {
        if (!product || !product.name || !product.price) {
            console.error('Invalid product:', product);
            return false;
        }
        
        var cart = getCartData();
        var found = false;
        
        for (var i = 0; i < cart.length; i++) {
            if (cart[i].name == product.name) {
                cart[i].quantity = cart[i].quantity + product.quantity;
                found = true;
                break;
            }
        }
        
        if (!found) {
            cart.push(product);
        }
        
        const success = saveCartData(cart);
        
        // IMMEDIATE REFRESH FOR REAL-TIME UPDATES
        if (success) {
            if (window.refreshAllButtonDisplays) {
                window.refreshAllButtonDisplays();
            }
            
            if (typeof triggerCartBadgeUpdate === 'function') {
                triggerCartBadgeUpdate();
            }
        }
        
        console.log('Added: ' + product.name);
        return success;
    }

    // Modal stuff for stoves
    var currentProduct = null;
    var currentSourceButton = null;
    var colorQty = {
        yellow: 0,
        red: 0,
        blue: 0,
        green: 0,
        choco: 0,
        white: 0
    };

    // Enhanced changeQty with visual feedback
    function changeQty(color, change) {
        var newQty = colorQty[color] + change;
        if (newQty >= 0) {
            colorQty[color] = newQty;
            var qtyDisplay = document.getElementById('qty-' + color);
            if (qtyDisplay) {
                var colorItem = qtyDisplay.closest('.color-item');
                
                // Update quantity with animation
                qtyDisplay.innerText = newQty;
                qtyDisplay.classList.add('updated');
                
                // Add visual feedback for selected colors
                if (newQty > 0) {
                    if (colorItem) colorItem.classList.add('has-quantity');
                } else {
                    if (colorItem) colorItem.classList.remove('has-quantity');
                }
                
                // Remove animation class after animation
                setTimeout(() => {
                    qtyDisplay.classList.remove('updated');
                }, 200);
                
                updatePrice();
                updateAddToCartButton();
            }
        }
    }

    // Enhanced updatePrice with animation
    function updatePrice() {
        if (!currentProduct) return;
        
        var unitPrice = parseFloat(currentProduct.getAttribute('data-product-price'));
        var totalQty = 0;
        
        for (var color in colorQty) {
            totalQty = totalQty + colorQty[color];
        }
        
        var totalPrice = unitPrice * totalQty;
        var priceElement = document.getElementById('totalPrice');
        
        if (priceElement) {
            // Animate price change
            priceElement.style.transform = 'scale(1.05)';
            priceElement.style.color = '#01B8EA';
            
            setTimeout(() => {
                priceElement.innerText = '₱' + totalPrice.toFixed(2);
                priceElement.style.transform = 'scale(1)';
            }, 100);
        }
    }

    // New function to update add to cart button state
    function updateAddToCartButton() {
        var totalQty = 0;
        for (var color in colorQty) {
            totalQty += colorQty[color];
        }
        
        var addBtn = document.querySelector('.btn-add-cart');
        if (addBtn) {
            addBtn.disabled = false;
            addBtn.style.opacity = '1';
            
            if (totalQty > 0) {
                var unitPrice = currentProduct ? parseFloat(currentProduct.getAttribute('data-product-price')) : 0;
                addBtn.innerHTML = `<span>Add ${totalQty} to Cart - </span><span id="totalPrice">₱${(unitPrice * totalQty).toFixed(2)}</span>`;
            } else {
                addBtn.innerHTML = `<span>Add to Cart - </span><span id="totalPrice">₱0.00</span>`;
            }
        }
    }

    // Handle product clicks
    function handleProductClick(productItem, event) {
        if (event.target.closest('.add-btn')) {
            return;
        }

        var productType = productItem.getAttribute('data-product-type');
        
        if (productType == 'stove') {
            openStoveModal(productItem);
        } else {
            // show qty modal for other products
            var productName = productItem.getAttribute('data-product-name');
            var productPrice = parseFloat(productItem.getAttribute('data-product-price'));
            var productImg = productItem.querySelector('img');
            var imgSrc = productImg ? productImg.src : '';
            
            showOtherQtyModal(productItem, productName, productPrice, imgSrc, 'regular');
        }
    }

    // Enhanced openStoveModal with better initialization
    function openStoveModal(productItem, sourceButton = null) {
        currentProduct = productItem;
        currentSourceButton = sourceButton;
        var productName = productItem.getAttribute('data-product-name');
        var productPrice = productItem.getAttribute('data-product-price');
        var productImageEl = productItem.querySelector('img');
        var productImage = productImageEl ? productImageEl.src : '/images/stove.png';

        // Update modal content
        var modalProductName = document.getElementById('modalProductName');
        var modalProductTitle = document.getElementById('modalProductTitle');
        var modalProductPrice = document.getElementById('modalProductPrice');
        var modalProductImage = document.getElementById('modalProductImage');
        
        if (modalProductName) modalProductName.innerText = 'Select Options';
        if (modalProductTitle) modalProductTitle.innerText = productName;
        if (modalProductPrice) modalProductPrice.innerText = '₱' + parseFloat(productPrice).toFixed(2);
        if (modalProductImage) modalProductImage.src = productImage;
        
        // Reset quantities and remove visual states
        colorQty = { yellow: 0, red: 0, blue: 0, green: 0, choco: 0, white: 0 };
        for (var color in colorQty) {
            var qtyDisplay = document.getElementById('qty-' + color);
            if (qtyDisplay) {
                var colorItem = qtyDisplay.closest('.color-item');
                qtyDisplay.innerText = colorQty[color];
                if (colorItem) {
                    colorItem.classList.remove('has-quantity');
                }
            }
        }
        
        updatePrice();
        updateAddToCartButton();
        
        // Show modal with enhanced animation
        var modal = document.getElementById('stoveModal');
        if (modal) {
            modal.classList.add('show');
            document.body.style.overflow = 'hidden';
            
            // Focus trap for accessibility
            var focusableElements = modal.querySelectorAll('button, input, select, textarea, [tabindex]:not([tabindex="-1"])');
            if (focusableElements.length > 0) {
                focusableElements[0].focus();
            }
        }
    }

    // Enhanced closeModal with better cleanup
    function closeModal() {
        var modal = document.getElementById('stoveModal');
        if (modal) {
            modal.classList.remove('show');
        }
        document.body.style.overflow = 'auto';
        
        // Reset states
        currentProduct = null;
        currentSourceButton = null;
        
        // Remove any lingering visual states
        document.querySelectorAll('.color-item.has-quantity').forEach(item => {
            item.classList.remove('has-quantity');
        });
    }

    // Enhanced addToCartFromModal with immediate refresh
    function addToCartFromModal() {
        if (!currentProduct) {
            displayToast('Product not found', 'error');
            return;
        }

        var productName = currentProduct.getAttribute('data-product-name');
        var productPrice = parseFloat(currentProduct.getAttribute('data-product-price'));
        var productImageEl = currentProduct.querySelector('img');
        var productImage = productImageEl ? productImageEl.src : '/images/stove.png';
        
        var addedItems = 0;
        var totalQty = 0;
        
        // Check if any colors are selected
        for (var color in colorQty) {
            totalQty += colorQty[color];
        }
        
        if (totalQty === 0) {
            displayToast('Please select at least one color and quantity', 'warning');
            return;
        }
        
        // Add each color to cart
        for (var color in colorQty) {
            if (colorQty[color] > 0) {
                var productData = {
                    id: new Date().getTime() + Math.random(),
                    name: productName + ' (' + color.charAt(0).toUpperCase() + color.slice(1) + ')',
                    originalName: productName,
                    price: productPrice,
                    quantity: colorQty[color],
                    image: productImage,
                    color: color
                };
                
                if (addToCart(productData)) {
                    addedItems += colorQty[color];
                }
            }
        }

        if (addedItems > 0) {
            displayToast(`Added ${addedItems} item(s) to cart!`, 'success');
            closeModal();
        } else {
            displayToast('Failed to add items to cart', 'error');
        }
    }

    // quantity modal for other products - UPDATED WITH GLOBAL REFRESH
    var currentOtherModal = null;

    function showOtherQtyModal(productItem, productName, productPrice, productImg, buttonType) {
        // get current quantity for this product
        var currentQty = getProductQuantityFromCart(productName);
        var defaultImg = '/images/grill-placeholder.jpg';

        var modalHTML = `
            <div class="qty_modal_other" data-product-name="${productName}" data-product-price="${productPrice}">
                <div class="other_modal_header">
                    <h4 class="other_modal_title">Select Quantity</h4>
                    <button class="close_other_modal">
                        <i class="bi bi-x"></i>
                    </button>
                </div>
                
                <div class="other_qty_section">
                    <div class="other_product_info">
                        <img src="${productImg || defaultImg}" alt="${productName}" class="other_product_img" 
                            onerror="this.src='${defaultImg}'">
                        <div class="other_product_details">
                            <div class="other_product_name">${productName}</div>
                            <div class="other_product_price">₱ ${productPrice.toFixed(2)}</div>
                        </div>
                    </div>
                    
                    <div class="other_qty_wrapper">
                        <label class="other_qty_label">Add Quantity:</label>
                        <div class="current_qty_info" style="font-size: 12px; color: #666; margin-bottom: 10px;">
                            Currently in cart: ${currentQty}
                        </div>
                        <div class="other_qty_controls">
                            <button type="button" class="other_qty_btn btn_minus">-</button>
                            <input type="number" class="other_qty_input" placeholder="0" min="1" max="999">
                            <button type="button" class="other_qty_btn btn_plus">+</button>
                        </div>
                    </div>
                </div>
                
                <div class="other_modal_btns">
                    <button class="other_modal_btn other_btn_cancel">Cancel</button>
                    <button class="other_modal_btn other_btn_confirm">Add to Cart</button>
                </div>
            </div>
        `;

        document.body.insertAdjacentHTML('beforeend', modalHTML);
        
        var modal = document.querySelector('.qty_modal_other');
        currentOtherModal = modal;
        
        if (window.otherModalOverlay) {
            window.otherModalOverlay.classList.add('show');
        }
        modal.classList.add('show');
        document.body.style.overflow = 'hidden';
        
        setupOtherModalEvents(modal, productPrice, productItem, buttonType);
    }

    // Enhanced setupOtherModalEvents with immediate refresh
    function setupOtherModalEvents(modal, price, originalItem, buttonType) {
        var qtyInput = modal.querySelector('.other_qty_input');
        var minusBtn = modal.querySelector('.btn_minus');
        var plusBtn = modal.querySelector('.btn_plus');
        var totalPriceEl = modal.querySelector('.other_total_price');
        var closeBtn = modal.querySelector('.close_other_modal');
        var cancelBtn = modal.querySelector('.other_btn_cancel');
        var confirmBtn = modal.querySelector('.other_btn_confirm');

        function updateOtherTotal() {
            var qty = parseInt(qtyInput.value) || 1;
            var total = price * qty;
            if (totalPriceEl) {
                totalPriceEl.textContent = `₱ ${total.toFixed(2)}`;
            }
        }

        // qty controls
        if (minusBtn) {
            minusBtn.addEventListener('click', function() {
                var currentVal = parseInt(qtyInput.value) || 0;
                if (currentVal > 0) {
                    qtyInput.value = currentVal - 1;
                    updateOtherTotal();
                }
            });
        }

        if (plusBtn) {
            plusBtn.addEventListener('click', function() {
                var currentVal = parseInt(qtyInput.value) || 0;
                if (currentVal < 999) {
                    qtyInput.value = currentVal + 1;
                    updateOtherTotal();
                }
            });
        }

        if (qtyInput) {
            qtyInput.addEventListener('input', function() {
                var value = parseInt(this.value) || 0;
                if (value < 0) value = 0;
                if (value > 999) value = 999;
                this.value = value;
                updateOtherTotal();
            });
        }

        // close handlers
        if (closeBtn) closeBtn.addEventListener('click', closeOtherModal);
        if (cancelBtn) cancelBtn.addEventListener('click', closeOtherModal);
        
        // overlay click
        if (window.otherModalOverlay) {
            window.otherModalOverlay.addEventListener('click', function(e) {
                if (e.target === window.otherModalOverlay) {
                    closeOtherModal();
                }
            });
        }

        // Enhanced confirm - add to cart with immediate refresh
        if (confirmBtn) {
            confirmBtn.addEventListener('click', function() {
                var qty = parseInt(qtyInput.value) || 1;
                
                if (qty <= 0) {
                    displayToast('Please enter a valid quantity', 'warning');
                    return;
                }
                
                var productName, productImage;
                
                if (buttonType === 'lastorder') {
                    productName = originalItem.getAttribute('data-name');
                    productImage = originalItem.getAttribute('data-image');
                } else {
                    productName = originalItem.getAttribute('data-product-name');
                    var imgEl = originalItem.querySelector('img');
                    productImage = imgEl ? imgEl.src : '';
                }
                
                var cartItem = {
                    id: new Date().getTime() + Math.random(),
                    name: productName,
                    price: price,
                    quantity: qty,
                    image: productImage,
                    color: null
                };
                
                const success = addToCart(cartItem);
                
                if (success) {
                    displayToast(`${qty} item(s) added to cart!`, 'success');
                } else {
                    displayToast('Failed to add item to cart', 'error');
                }

                closeOtherModal();
            });
        }

        // esc key handler
        var escHandler = function(e) {
            if (e.key === 'Escape' && currentOtherModal) {
                closeOtherModal();
            }
        };
        document.addEventListener('keydown', escHandler);
        
        // Store handler for removal
        modal._escHandler = escHandler;

        // Initial total update
        updateOtherTotal();
    }

    function closeOtherModal() {
        if (currentOtherModal) {
            if (window.otherModalOverlay) {
                window.otherModalOverlay.classList.remove('show');
            }
            currentOtherModal.classList.remove('show');
            document.body.style.overflow = '';
            
            // Remove escape key handler
            if (currentOtherModal._escHandler) {
                document.removeEventListener('keydown', currentOtherModal._escHandler);
            }
            
            setTimeout(() => {
                if (currentOtherModal && currentOtherModal.parentNode) {
                    currentOtherModal.parentNode.removeChild(currentOtherModal);
                }
                currentOtherModal = null;
            }, 300);
        }
    }

    // Handle button clicks
    function handleAddClick(btn) {
        var productItem = btn.closest('.product-item');
        if (!productItem) {
            console.error('Product item not found');
            return;
        }
        
        var productType = productItem.getAttribute('data-product-type');
        var productName = productItem.getAttribute('data-product-name');
        var productPrice = parseFloat(productItem.getAttribute('data-product-price'));
        
        if (!productName || isNaN(productPrice)) {
            console.error('Invalid product data');
            return;
        }
        
        if (productType == 'stove') {
            openStoveModal(productItem);
        } else {
            var productImg = productItem.querySelector('img');
            var imgSrc = productImg ? productImg.src : '';
            showOtherQtyModal(productItem, productName, productPrice, imgSrc, 'regular');
        }
    }

    // Add keyboard navigation support for stove modal
    document.addEventListener('keydown', function(e) {
        var modal = document.getElementById('stoveModal');
        if (modal && modal.classList.contains('show')) {
            if (e.key === 'Escape') {
                closeModal();
            }
            
            // Number key shortcuts for quantities (1-6 for colors)
            if (e.key >= '1' && e.key <= '6') {
                var colors = ['yellow', 'red', 'blue', 'green', 'choco', 'white'];
                var colorIndex = parseInt(e.key) - 1;
                if (colorIndex < colors.length) {
                    changeQty(colors[colorIndex], 1);
                }
            }
        }
    });

    // Make key functions globally available
    window.addToCartFromModal = addToCartFromModal;
    window.changeQty = changeQty;
    window.closeModal = closeModal;
    window.openStoveModal = openStoveModal;
    window.showOtherQtyModal = showOtherQtyModal;
    window.closeOtherModal = closeOtherModal;
    window.addToCart = addToCart;
    window.addItemToCart = addItemToCart;
    window.getCartData = getCartData;
    window.saveCartData = saveCartData;
    window.displayToast = displayToast;
    window.getProductQuantityFromCart = getProductQuantityFromCart;

    // Dropdown and search functions (placeholder)
    function toggleDropdown() {
        console.log('Dropdown toggled');
    }

    function openSearch() {
        console.log('Search opened');
    }

    // Simple notification function - copied from other pages
    function showMessage(text, type) {
        displayToast(text, type);
    }

    // Enhanced debug functions with immediate refresh
    function viewCart() {
        var cart = getCartData();
        console.log('Cart items:', cart);
        console.table(cart);
        return cart;
    }

    function clearCart() {
        try {
            localStorage.removeItem('dealerCartData');
            localStorage.removeItem('cartItems');
            localStorage.removeItem('cartTotal');
            
            // IMMEDIATE REFRESH AFTER CLEARING
            if (window.refreshAllButtonDisplays) {
                window.refreshAllButtonDisplays();
            }
            
            if (typeof updateCartBadgeAfterAction === 'function') {
                updateCartBadgeAfterAction();
            }
            if (typeof updateCartBadge === 'function') {
                updateCartBadge();
            }
            if (typeof updateFloatingCartButton === 'function') {
                updateFloatingCartButton();
            }
            
            console.log('Cart cleared successfully');
            displayToast('Cart cleared', 'success');
            return true;
        } catch (error) {
            console.error('Error clearing cart:', error);
            displayToast('Error clearing cart', 'error');
            return false;
        }
    }

    // Make debug functions globally available
    window.viewCart = viewCart;
    window.clearCart = clearCart;
    window.showMessage = showMessage;

    // Add smooth scrolling to modal body if needed
    document.addEventListener('DOMContentLoaded', function() {
        var modalBody = document.querySelector('.modal-body');
        if (modalBody) {
            modalBody.style.scrollBehavior = 'smooth';
        }
        
        // Initialize CSS for toast notifications if not present
        if (!document.querySelector('#toast-styles')) {
            var toastStyles = document.createElement('style');
            toastStyles.id = 'toast-styles';
            
            document.head.appendChild(toastStyles);
        }
    });

    // Error handling for missing elements
    window.addEventListener('error', function(e) {
        console.error('JavaScript Error:', e.error);
    });

    // Performance monitoring
    if (window.performance && window.performance.mark) {
        window.performance.mark('eazy-kalan-js-end');
        if (window.performance.getEntriesByName('eazy-kalan-js-start').length > 0) {
            window.performance.measure('eazy-kalan-js-execution', 'eazy-kalan-js-start', 'eazy-kalan-js-end');
            var measure = window.performance.getEntriesByName('eazy-kalan-js-execution')[0];
            console.log('JavaScript execution time:', measure.duration.toFixed(2), 'ms');
        }
    }

    console.log('Eazy Kalan JavaScript fully loaded and initialized');
</script>
@endsection