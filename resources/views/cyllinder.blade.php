@extends('layouts.header_dealer')

@section('content')
<div class="container-fluid p-0">
    <div class="secondary-header" id="secondaryHeader">
        <div class="secondary-nav">
            <button class="secondary-back-btn" onclick="window.location.href='{{ route('home')}}'">
                <i class="bi bi-chevron-left"></i>
            </button>
            <span class="secondary-title">CYLINDER</span>
            
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
            <h1 class="page-title">Cylinder</h1>
        </div>
    </div>

    <!-- Your Last Order Section -->
    <div class="last-order-section">
        <div class="last-order-header">
            <h2 class="last-order-title">Your Last Order</h2>
            <button class="add-all-btn" onclick="addAllToBasket()">Add all to basket</button>
        </div>
        
        <div class="last-order-grid">
            <div class="last-order-item" data-product-name="330g LPG Refill" data-product-price="54.00">
                <div class="last-order-image">
                    <img src="{{asset('images/cyllinder.jpg')}}" alt="330g LPG Refill">
                </div>
                <div class="last-order-info">
                    <h4 class="last-order-name">330g LPG Refill</h4>
                    <p class="last-order-description">Refill Value Only</p>
                    <div class="last-order-bottom">
                        <p class="last-order-price">₱54</p>
                        <button class="last-order-add-btn" data-name="330g LPG Refill" data-price="54.00" data-image="{{asset('images/cyllinder.jpg')}}">
                            <i class="bi bi-plus"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="last-order-item" data-product-name="330g Gaz Lite Cylinder" data-product-price="80.00">
                <div class="last-order-image">
                    <img src="{{asset('images/cyllinder.jpg')}}" alt="330g Gaz Lite Cylinder">
                </div>
                <div class="last-order-info">
                    <h4 class="last-order-name">330g Gaz Lite Cylinder</h4>
                    <p class="last-order-description">Deposit Value Only</p>
                    <div class="last-order-bottom">
                        <p class="last-order-price">₱80</p>
                        <button class="last-order-add-btn" data-name="330g Gaz Lite Cylinder" data-price="80.00" data-image="{{asset('images/cyllinder.jpg')}}">
                            <i class="bi bi-plus"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="last-order-item" data-product-name="Burner Assembly" data-product-price="50.00">
                <div class="last-order-image">
                    <img src="{{asset('images/cyllinder.jpg')}}" alt="Burner Assembly">
                </div>
                <div class="last-order-info">
                    <h4 class="last-order-name">Burner Assembly</h4>
                    <p class="last-order-description">Deposit Value Only</p>
                    <div class="last-order-bottom">
                        <p class="last-order-price">₱50</p>
                        <button class="last-order-add-btn" data-name="Burner Assembly" data-price="50.00" data-image="{{asset('images/cyllinder.jpg')}}">
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
        <div class="product-item" data-product-name="330g Gaz Lite Cylinder" data-product-price="80.00">
            <div class="product-info">
                <h3 class="product-name">330g Gaz Lite Cylinder</h3>
                <p class="product-description">Deposit Value Only - Refundable</p>
                <p class="product-price">₱80.00</p>
            </div>
            <div class="product-image">
                <img src="{{asset('images/grill-placeholder.jpg')}}" alt="330g Gaz Lite Griller Kit" data-name="330g Gaz Lite Cylinder" data-price="80.00" data-image="{{asset('images/grill-placeholder.jpg')}}">
                <button class="add-btn" data-name="330g Gaz Lite Cylinder" data-price="80.00" data-image="{{asset('images/grill-placeholder.jpg')}}">
                    <i class="bi bi-plus"></i>
                </button>
            </div>
        </div>

        <div class="product-item" data-product-name="230g Gaz Lite Cylinder" data-product-price="1067.00">
            <div class="product-info">
                <h3 class="product-name">230g Gaz Lite Cylinder</h3>
                <p class="product-description">1 Stove + 2 Filled 330g Cylinder + Black Case</p>
                <p class="product-price">₱1,067.00</p>
            </div>
            <div class="product-image">
                <img src="{{asset('images/grill-placeholder.jpg')}}" alt="330g Gaz Lite Griller Kit v2" data-name="230g Gaz Lite Cylinder" data-price="1067.00" data-image="{{asset('images/grill-placeholder.jpg')}}">
                <button class="add-btn" data-name="230g Gaz Lite Cylinder" data-price="1067.00" data-image="{{asset('images/grill-placeholder.jpg')}}">
                    <i class="bi bi-plus"></i>
                </button>
            </div>
        </div>

        <div class="product-item" data-product-name="Burner Assembly" data-product-price="50.00">
            <div class="product-info">
                <h3 class="product-name">Burner Assembly</h3>
                <p class="product-description">Deposit Value Only - Refundable</p>
                <p class="product-price">₱50.00</p>
            </div>
            <div class="product-image">
                <img src="{{asset('images/grill-placeholder.jpg')}}" alt="230g Gaz Lite Griller Kit" data-name="Burner Assembly" data-price="50.00" data-image="{{asset('images/grill-placeholder.jpg')}}">
                <button class="add-btn" data-name="Burner Assembly" data-price="50.00" data-image="{{asset('images/grill-placeholder.jpg')}}">
                    <i class="bi bi-plus"></i>
                </button>
            </div>
        </div>

        <div class="product-item" data-product-name="330g LPG Refill" data-product-price="54.00">
            <div class="product-info">
                <h3 class="product-name">330g LPG Refill</h3>
                <p class="product-description">330g LPG Refill Value Only</p>
                <p class="product-price">₱54.00</p>
            </div>
            <div class="product-image">
                <img src="{{asset('images/grill-placeholder.jpg')}}" alt="Cooking Grill" data-name="330g LPG Refill" data-price="54.00" data-image="{{asset('images/grill-placeholder.jpg')}}">
                <button class="add-btn" data-name="330g LPG Refill" data-price="54.00" data-image="{{asset('images/grill-placeholder.jpg')}}">
                    <i class="bi bi-plus"></i>
                </button>
            </div>
        </div>

        <div class="product-item" data-product-name="Burner Tube" data-product-price="130.00">
            <div class="product-info">
                <h3 class="product-name">Burner Tube</h3>
                <p class="product-description">Stove Parts</p>
                <p class="product-price">₱130.00</p>
            </div>
            <div class="product-image">
                <img src="{{asset('images/grill-placeholder.jpg')}}" alt="Burner Tube" data-name="Burner Tube" data-price="130.00" data-image="{{asset('images/grill-placeholder.jpg')}}">
                <button class="add-btn" data-name="Burner Tube" data-price="130.00" data-image="{{asset('images/grill-placeholder.jpg')}}">
                    <i class="bi bi-plus"></i>
                </button>
            </div>
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
        font-size: 18px;
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
        background: url('{{asset("images/cyllinder.jpg")}}') center center no-repeat;
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

    /* Products Container */
    .products-container {
        padding: 0;
        background: white;
        min-height: calc(100vh - 150px);
    }

    /* Product Item Styles */
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

    .add-btn.with_quantity,
    .last-order-add-btn.with_quantity {
        background: #ca1f1f !important;
    }

    .add-btn.with_quantity:hover,
    .last-order-add-btn.with_quantity:hover {
        background: #a91717 !important;
    }

    .quantity_indicator {
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

    .cyl_modal_overlay {
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

    .cyl_modal_overlay.active {
        opacity: 1;
        visibility: visible;
    }

    .cylinder_qty_modal {
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

    .cylinder_qty_modal.active {
        opacity: 1;
        visibility: visible;
        padding: 20px;
    }

    .cyl_modal_header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
        padding-bottom: 15px;
        border-bottom: 1px solid #e9ecef;
    }

    .cyl_modal_title {
        font-size: 16px;
        font-weight: 600;
        color: #333;
        margin: 0;
    }

    .close_cyl_modal {
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

    .close_cyl_modal:hover {
        background: #f5f5f5;
        color: #333;
    }

    .cyl_product_info {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 15px 0;
        border-bottom: 1px solid #f0f0f0;
        margin-bottom: 20px;
    }

    .cyl_product_image {
        width: 60px;
        height: 60px;
        object-fit: contain;
        border-radius: 8px;
        background: #f5f5f5;
        padding: 8px;
    }

    .cyl_product_details {
        flex: 1;
    }

    .cyl_product_name {
        font-size: 16px;
        font-weight: 600;
        color: #333;
        margin-bottom: 4px;
        line-height: 1.3;
    }

    .cyl_product_price {
        font-size: 18px;
        font-weight: 700;
        color: #4A90E2;
    }

    .cyl_qty_section {
        margin-bottom: 20px;
    }

    .cyl_qty_controls_wrapper {
        display: flex;
        flex-direction: column;
        gap: 12px;
    }

    .cyl_qty_label {
        font-size: 14px;
        font-weight: 600;
        color: #333;
    }

    .cyl_qty_controls {
        display: flex;
        align-items: center;
        gap: 12px;
        justify-content: center;
    }

    .cyl_qty_button {
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

    .cyl_qty_button:hover {
        background: #e9ecef;
        border-color: #dee2e6;
        transform: translateY(-1px);
    }

    .cyl_qty_button:active {
        transform: translateY(0) scale(0.95);
    }

    .cyl_qty_button.decrease {
        color: #dc3545;
        border-color: #f5c6cb;
    }

    .cyl_qty_button.decrease:hover {
        background: #f8d7da;
        border-color: #f1aeb5;
    }

    .cyl_qty_button.increase {
        color: #28a745;
        border-color: #c3e6cb;
    }

    .cyl_qty_button.increase:hover {
        background: #d4edda;
        border-color: #b8dabd;
    }

    .cyl_qty_input {
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

    .cyl_qty_input:focus {
        border-color: #4A90E2;
        box-shadow: 0 0 0 3px rgba(74, 144, 226, 0.1);
    }

    .cyl_qty_input::-webkit-outer-spin-button,
    .cyl_qty_input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    .cyl_qty_input[type=number] {
        -moz-appearance: textfield;
    }

    .cyl_total_display {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 15px 0;
        border-top: 1px solid #e9ecef;
        margin-bottom: 15px;
    }

    .cyl_total_text {
        font-size: 14px;
        font-weight: 500;
        color: #666;
    }

    .cyl_total_amount {
        font-size: 16px;
        font-weight: 700;
        color: #4A90E2;
    }

    .cyl_modal_actions {
        display: flex;
        gap: 12px;
        margin-top: 20px;
        padding-top: 15px;
        border-top: 1px solid #e9ecef;
    }

    .cyl_action_btn {
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

    .cyl_cancel_btn {
        background: #f8f9fa;
        color: #6c757d;
        border: 1px solid #e9ecef;
    }

    .cyl_cancel_btn:hover {
        background: #e9ecef;
        color: #495057;
        transform: translateY(-1px);
    }

    .cyl_add_btn {
        background: #4A90E2;
        color: #fff;
        box-shadow: 0 2px 4px rgba(74, 144, 226, 0.3);
    }

    .cyl_add_btn:hover {
        background: #186ed1;
        transform: translateY(-1px);
        box-shadow: 0 3px 6px rgba(74, 144, 226, 0.4);
    }

    /* Toast styles */
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

    .toast.show {
        transform: translateX(0);
    }

    /* Responsive Design */
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

        .cylinder_qty_modal {
            width: 95%;
            max-height: 75vh;
        }

        .cylinder_qty_modal.active {
            padding: 15px;
        }

        .cyl_product_image {
            width: 50px;
            height: 50px;
        }

        .cyl_product_name {
            font-size: 14px;
        }

        .cyl_product_price {
            font-size: 16px;
        }

        .cyl_qty_button {
            width: 36px;
            height: 36px;
            font-size: 16px;
        }

        .cyl_qty_input {
            width: 70px;
            height: 36px;
            font-size: 14px;
        }

        .cyl_action_btn {
            padding: 10px 14px;
            font-size: 13px;
        }

        .quantity_indicator {
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
                secondaryHeader.classList.add('show');
            } else {
                secondaryHeader.classList.remove('show');
            }
            
            lastScrollTop = scrollTop;
        });

        // Get all buttons
        const addBtns = document.querySelectorAll('.add-btn');
        const lastOrderAddBtns = document.querySelectorAll('.last-order-add-btn');
        const addAllBtn = document.querySelector('.add-all-btn');
        
        // Create modal overlay if doesn't exist
        let modalOverlay = document.getElementById('modalOverlay');
        if (!modalOverlay) {
            modalOverlay = document.createElement('div');
            modalOverlay.className = 'cyl_modal_overlay';
            modalOverlay.id = 'cylModalOverlay';
            document.body.appendChild(modalOverlay);
        }

        // Track button states - GLOBAL VARIABLES
        const btnQuantities = new Map();
        const btnProductData = new Map();
        const lastOrderQuantities = new Map();
        const lastOrderProductData = new Map();
        let currentQtyModal = null;

        // GLOBAL REFRESH FUNCTION FOR REAL-TIME UPDATES
        function refreshAllButtonDisplays() {
            // Refresh regular product buttons
            btnProductData.forEach((productData, button) => {
                const currentQty = getProductQuantityFromCart(productData.name);
                btnQuantities.set(button, currentQty);
                updateBtnDisplay(button, currentQty);
            });

            // Refresh last order buttons
            lastOrderProductData.forEach((productData, button) => {
                const currentQty = getProductQuantityFromCart(productData.name);
                lastOrderQuantities.set(button, currentQty);
                updateLastOrderBtnDisplay(button, currentQty);
            });
        }

        // Initialize regular product buttons
        addBtns.forEach((btn) => {
            const prodName = btn.getAttribute('data-name');
            const prodPrice = parseFloat(btn.getAttribute('data-price'));
            const prodImg = btn.getAttribute('data-image');
            
            btnProductData.set(btn, {
                name: prodName,
                price: prodPrice,
                image: prodImg
            });

            const savedQty = getProductQuantityFromCart(prodName);
            btnQuantities.set(btn, savedQty);
            updateBtnDisplay(btn, savedQty);
        });

        // Initialize last order buttons
        lastOrderAddBtns.forEach((btn) => {
            const prodName = btn.getAttribute('data-name');
            const prodPrice = parseFloat(btn.getAttribute('data-price'));
            const prodImg = btn.getAttribute('data-image');
            
            lastOrderProductData.set(btn, {
                name: prodName,
                price: prodPrice,
                image: prodImg
            });

            // ✅ Load saved qty from cart
            const savedQty = getProductQuantityFromCart(prodName);
            lastOrderQuantities.set(btn, savedQty);
            updateLastOrderBtnDisplay(btn, savedQty);
        });

        // Regular product button click handlers
        addBtns.forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                
                const prodData = btnProductData.get(this);
                if (!prodData) return;

                const { name, price, image } = prodData;
                
                if (currentQtyModal) closeQtyModal();
                showQtyModal(this, name, price, image, 'regular');

                // Button animation feedback
                this.style.transform = 'scale(0.9)';
                setTimeout(() => {
                    this.style.transform = 'scale(1)';
                }, 150);
            });
        });

        // Last order button click handlers
        lastOrderAddBtns.forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                
                const prodData = lastOrderProductData.get(this);
                if (!prodData) return;

                const { name, price, image } = prodData;
                
                if (currentQtyModal) closeQtyModal();
                showQtyModal(this, name, price, image, 'lastorder');

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
                    const imgEl = item.querySelector('img');
                    const img = imgEl ? imgEl.src : '';
                    
                    if (name && price && !isNaN(price)) {
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
                });

                if (itemsAdded > 0) {
                    displayToast(`${totalItems} item(s) from last order added to cart!`, 'success');
                    // GLOBAL REFRESH AFTER ADD ALL
                    setTimeout(() => refreshAllButtonDisplays(), 100);
                } else {
                    displayToast('Failed to add items to cart', 'error');
                }
            });
        }

        function getProductQuantityFromCart(productName) {
            const cartData = getCartData();
            let totalQty = 0;

            cartData.forEach(item => {
                if (item.name === productName) {
                    totalQty += parseInt(item.quantity) || 0;
                }
            });

            return totalQty;
        }

        // Main quantity modal function
        function showQtyModal(button, productName, price, productImage, buttonType) {
            let currentQty = 0;
            
            if (buttonType === 'regular') {
                currentQty = btnQuantities.get(button) || 0;
            } else if (buttonType === 'lastorder') {
                currentQty = lastOrderQuantities.get(button) || 0;
            }
            
            // GET FRESH QUANTITY FROM CART FOR "CURRENTLY IN CART" DISPLAY
            const cartQty = getProductQuantityFromCart(productName);
            
            const modalHTML = `
                <div class="cylinder_qty_modal" data-product-name="${productName}" data-product-price="${price}" data-product-image="${productImage}" data-button-type="${buttonType}">
                    <div class="cyl_modal_header">
                        <h4 class="cyl_modal_title">Select Quantity</h4>
                        <button class="close_cyl_modal">
                            <i class="bi bi-x"></i>
                        </button>
                    </div>
                    
                    <div class="cyl_qty_section">
                        <div class="cyl_product_info">
                            <img src="${productImage}" alt="${productName}" class="cyl_product_image" 
                                onerror="this.src='{{asset('images/grill-placeholder.jpg')}}'">
                            <div class="cyl_product_details">
                                <div class="cyl_product_name">${productName}</div>
                                <div class="cyl_product_price">₱ ${price.toFixed(2)}</div>
                            </div>
                        </div>
                        
                        <div class="cyl_qty_controls_wrapper">
                            <label class="cyl_qty_label">Quantity:</label>
                            <div class="current_cart_qty" style="font-size: 12px; color: #666; margin-bottom: 10px;">
                                Currently in cart: ${cartQty}
                            </div>
                            <div class="cyl_qty_controls">
                                <button type="button" class="cyl_qty_button decrease" data-action="decrease">-</button>
                                <input type="number" class="cyl_qty_input" placeholder="0" min="1" max="999">
                                <button type="button" class="cyl_qty_button increase" data-action="increase">+</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="cyl_total_display">
                        <span class="cyl_total_text">Total:</span>
                        <span class="cyl_total_amount">₱ ${price.toFixed(2)}</span>
                    </div>
                    
                    <div class="cyl_modal_actions">
                        <button class="cyl_action_btn cyl_cancel_btn">Cancel</button>
                        <button class="cyl_action_btn cyl_add_btn">Confirm</button>
                    </div>
                </div>
            `;

            document.body.insertAdjacentHTML('beforeend', modalHTML);
            
            const modal = document.querySelector('.cylinder_qty_modal');
            currentQtyModal = modal;
            
            modalOverlay.classList.add('active');
            modal.classList.add('active');
            document.body.style.overflow = 'hidden';
            
            setupQtyModalEvents(modal, price, button, buttonType);
        }

        // Setup modal events
        function setupQtyModalEvents(modal, price, originalBtn, buttonType) {
            const qtyInput = modal.querySelector('.cyl_qty_input');
            const minusBtn = modal.querySelector('.decrease');
            const plusBtn = modal.querySelector('.increase');
            const totalPriceEl = modal.querySelector('.cyl_total_amount');
            const closeBtn = modal.querySelector('.close_cyl_modal');
            const cancelBtn = modal.querySelector('.cyl_cancel_btn');
            const confirmBtn = modal.querySelector('.cyl_add_btn');

            function updateTotalPrice() {
                const qty = parseInt(qtyInput.value) || 0;
                const total = price * qty;
                totalPriceEl.textContent = `₱ ${total.toFixed(2)}`;
            }

            // Quantity controls
            minusBtn.addEventListener('click', function() {
                const currentVal = parseInt(qtyInput.value) || 0;
                if (currentVal > 0) {
                    qtyInput.value = currentVal - 1;
                    updateTotalPrice();
                }
            });

            plusBtn.addEventListener('click', function() {
                const currentVal = parseInt(qtyInput.value) || 0;
                if (currentVal < 999) {
                    qtyInput.value = currentVal + 1;
                    updateTotalPrice();
                }
            });

            qtyInput.addEventListener('input', function() {
                let value = parseInt(this.value) || 0;
                if (value < 0) value = 0;
                if (value > 999) value = 999;
                this.value = value;
                updateTotalPrice();
            });

            // Close modal handlers
            closeBtn.addEventListener('click', closeQtyModal);
            cancelBtn.addEventListener('click', closeQtyModal);
            
            // Click overlay to close
            modalOverlay.addEventListener('click', function(e) {
                if (e.target === modalOverlay) {
                    closeQtyModal();
                }
            });

            // Confirm button - add to cart
            confirmBtn.addEventListener('click', function() {
                const qty = parseInt(qtyInput.value) || 1;
                
                if (qty > 0) {
                    let prodData;
                    if (buttonType === 'regular') {
                        prodData = btnProductData.get(originalBtn);
                    } else if (buttonType === 'lastorder') {
                        prodData = lastOrderProductData.get(originalBtn);
                    }
                    
                    if (prodData) {
                        const cartItem = {
                            id: Date.now() + Math.random(),
                            name: prodData.name,
                            price: prodData.price,
                            quantity: qty,
                            image: prodData.image,
                            color: null
                        };
                        
                        if (addItemToCart(cartItem)) {
                            // UPDATE THE SPECIFIC BUTTON IMMEDIATELY
                            const newQty = getProductQuantityFromCart(prodData.name);
                            if (buttonType === 'regular') {
                                btnQuantities.set(originalBtn, newQty);
                                updateBtnDisplay(originalBtn, newQty);
                            } else if (buttonType === 'lastorder') {
                                lastOrderQuantities.set(originalBtn, newQty);
                                updateLastOrderBtnDisplay(originalBtn, newQty);
                            }
                            
                            // REFRESH ALL BUTTONS AFTER A SHORT DELAY FOR REAL-TIME SYNC
                            setTimeout(() => refreshAllButtonDisplays(), 100);
                            
                            displayToast(`${qty} item(s) added to cart!`, 'success');
                        } else {
                            displayToast('Failed to add item to cart', 'error');
                        }
                    }
                }

                closeQtyModal();
            });

            // Keyboard support - esc to close
            const keydownHandler = function(e) {
                if (e.key === 'Escape' && currentQtyModal) {
                    closeQtyModal();
                    document.removeEventListener('keydown', keydownHandler);
                }
            };
            document.addEventListener('keydown', keydownHandler);
        }

        // Close modal function
        function closeQtyModal() {
            if (currentQtyModal) {
                modalOverlay.classList.remove('active');
                currentQtyModal.classList.remove('active');
                document.body.style.overflow = '';
                
                setTimeout(() => {
                    if (currentQtyModal && currentQtyModal.parentNode) {
                        currentQtyModal.parentNode.removeChild(currentQtyModal);
                    }
                    currentQtyModal = null;
                }, 300);
            }
        }

        // Update regular button display
        function updateBtnDisplay(button, qty) {
            if (qty > 0) {
                button.classList.add('with_quantity');
                button.innerHTML = `<span class="quantity_indicator">${qty}</span>`;
            } else {
                button.classList.remove('with_quantity');
                button.innerHTML = '<i class="bi bi-plus"></i>';
            }
        }

        // Update last order button display
        function updateLastOrderBtnDisplay(button, qty) {
            if (qty > 0) {
                button.classList.add('with_quantity');
                button.innerHTML = `<span class="quantity_indicator">${qty}</span>`;
            } else {
                button.classList.remove('with_quantity');
                button.innerHTML = '<i class="bi bi-plus"></i>';
            }
        }

        // Handle image loading errors
        const images = document.querySelectorAll('.product-image img, .last-order-image img');
        images.forEach(function(img) {
            img.addEventListener('error', function() {
                this.style.display = 'none';
                if (!this.parentNode.querySelector('.image-placeholder')) {
                    const placeholder = document.createElement('div');
                    placeholder.className = 'image-placeholder';
                    placeholder.style.cssText = 'width:40px;height:40px;background:#ddd;border-radius:8px;display:flex;align-items:center;justify-content:center;color:#999;font-size:12px;';
                    placeholder.innerHTML = '<i class="bi bi-image"></i>';
                    this.parentNode.appendChild(placeholder);
                }
            });
        });

        // Smooth scrolling
        document.documentElement.style.scrollBehavior = 'smooth';
        
        // INITIAL REFRESH OF ALL BUTTON DISPLAYS AFTER DOM LOADED
        setTimeout(() => {
            refreshAllButtonDisplays();
        }, 500);
        
        console.log('Cylinder page with last order and regular product cart functionality initialized');
    });

    // Dropdown and search functions (placeholder)
    function toggleDropdown() {
        console.log('Dropdown toggled');
    }

    function openSearch() {
        console.log('Search opened');
    }

    function showMessage(text, type) {
        var message = document.createElement('div');
        message.className = 'toast ' + type;
        message.innerText = text;
        
        document.body.appendChild(message);
        
        setTimeout(function() {
            message.classList.add('show');
        }, 50);
        
        setTimeout(function() {
            message.classList.remove('show');
            setTimeout(function() {
                document.body.removeChild(message);
            }, 300);
        }, 2500);
    }

    // Toast notification function
    function displayToast(message, type, duration) {
        var toast = document.createElement('div');
        toast.className = 'toast ' + type;
        toast.textContent = message;
        
        document.body.appendChild(toast);
        
        setTimeout(function() {
            toast.classList.add('show');
        }, 100);
        
        setTimeout(function() {
            toast.classList.remove('show');
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
            
            return true;
        } catch (e) {
            console.error('Error saving cart:', e);
            return false;
        }
    }

    // Add item to cart - UPDATED WITH GLOBAL REFRESH
    function addItemToCart(productData) {
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
        
        // GLOBAL REFRESH FOR REAL-TIME UPDATES
        if (success) {
            setTimeout(() => {
                refreshAllButtonDisplays();
                
                if (typeof triggerCartBadgeUpdate === 'function') {
                    triggerCartBadgeUpdate();
                }
            }, 100);
        }
        
        return success;
    }

    // Add product to cart - UPDATED WITH GLOBAL REFRESH
    function addProductToCart(product) {
        var cart = getCartData();
        var found = false;
        
        // Look for existing item
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
        
        // GLOBAL REFRESH FOR REAL-TIME UPDATES
        if (success) {
            setTimeout(() => {
                refreshAllButtonDisplays();
                
                if (typeof triggerCartBadgeUpdate === 'function') {
                    triggerCartBadgeUpdate();
                }
            }, 100);
        }
        
        console.log('Added: ' + product.name);
        return success;
    }

    // Utility functions - UPDATED WITH GLOBAL REFRESH
    function viewCylCart() {
        var cart = getCartData();
        console.log('Cylinder cart items:', cart);
        return cart;
    }

    function clearCylCart() {
        localStorage.removeItem('dealerCartData');
        localStorage.removeItem('cartItems');
        localStorage.removeItem('cartTotal');
        
        // GLOBAL REFRESH AFTER CLEARING
        setTimeout(() => refreshAllButtonDisplays(), 100);
        
        showMessage('Cart cleared', 'success');
        console.log('Cart cleared from cylinder page');
    }
</script>
@endsection