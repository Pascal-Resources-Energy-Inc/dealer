@extends('layouts.header_dealer')

@section('content')
<div class="content-area">
    <!-- Top Header Section -->
    <div class="page-header-nya">
        <div class="greeting-section">
            <h2>Hello MD_John!</h2>
            <p><small>What do you want to order?</small></p>
        </div>
        <div class="header-icons">
            <div class="notification-icon">
                <i class="bi bi-chat-dots"></i>
                <span class="notification-badge">2</span>
                
                <div class="notification-dropdown" id="notificationDropdown">
                    <div class="notification-header">
                        <h4 class="notification-title">Messages</h4>
                    </div>
                    
                    <!-- Add tab container -->
                    <div class="tab-container">
                        <button class="tab-button active" data-tab="chats">Chats</button>
                        <button class="tab-button" data-tab="notifications">Notifications</button>
                    </div>
                    
                    <!-- Chats tab content -->
                    <div class="tab-content active" id="chats-content">
                        <div class="notification-list">
                            <div class="notification-item unread chat-item">
                                <div class="notification-icon-wrapper promo">
                                    <i class="bi bi-megaphone-fill"></i>
                                </div>
                                <div class="notification-content">
                                    <div class="notification-message">Try Our New Promo today!</div>
                                    <div class="notification-time">
                                        5 Sep
                                        <span class="unread-dot"></span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="notification-item unread chat-item">
                                <div class="notification-icon-wrapper promo">
                                    <i class="bi bi-megaphone-fill"></i>
                                </div>
                                <div class="notification-content">
                                    <div class="notification-message">Try Our New Promo today!</div>
                                    <div class="notification-time">
                                        5 Sep
                                        <span class="unread-dot"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Notifications tab content -->
                    <div class="tab-content" id="notifications-content">
                        <div class="notification-list">
                            <div class="notification-item unread">
                                <div class="notification-icon-wrapper order">
                                    <i class="bi bi-cart-check-fill"></i>
                                </div>
                                <div class="notification-content">
                                    <div class="notification-message">Order Confirmed</div>
                                    <div class="notification-description">Your order #GZ-12345 for 330g LPG Refill has been confirmed and is being processed.</div>
                                    <div class="notification-time">2 minutes ago</div>
                                </div>
                            </div>
                            
                            <div class="notification-item unread">
                                <div class="notification-icon-wrapper payment">
                                    <i class="bi bi-credit-card-fill"></i>
                                </div>
                                <div class="notification-content">
                                    <div class="notification-message">Payment Successful</div>
                                    <div class="notification-description">Payment of ₱156.00 for order #GZ-12344 has been processed successfully.</div>
                                    <div class="notification-time">3 hours ago</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="{{url('/cart')}}" class="nav-item">
                <div class="notification-icon">
                    <i class="bi bi-cart"></i>
                    <div class="cart-badge" id="cartBadge"></div>
                </div>
            </a>
            <!-- <div class="profile-icon">
                <img src="images/icon.png" alt="Profile" class="profile-image">
            </div> -->
        </div>
    </div>

    <!-- Search Bar
    <div class="search-container">
        <div class="search-bar">
            <i class="bi bi-search search-icon"></i>
            <input type="text" placeholder="Search" class="search-input">
        </div>
    </div> -->

    <!-- Welcome Banner -->
    <div class="welcome-banner">
        <div class="banner-content">
            <div class="banner-text">
                <h2>Welcome to<br>Gaz Lite!</h2>
                <button class="explore-btn">Explore Now</button>
            </div>
            <div class="banner-icon">
                <div class="location-pin">
                    <img src="images/pin.png">
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="section">
        <div class="section-header">
            <h3>Current Order</h3>
            <a href="{{ url('/orders') }}" class="see-details">See Details</a>
        </div>
        
        <div class="order-status-card">
            <div class="status-progress">
                <div class="progress-step active">
                    <div class="step-dot"></div>
                    <span class="step-label">Preparing</span>
                </div>
                <div class="progress-line-container">
                    <div class="progress-line active"></div>
                </div>
                <div class="progress-step active">
                    <div class="step-dot"></div>
                    <span class="step-label">On the way</span>
                </div>
                <div class="progress-line-container">
                    <div class="progress-line-2"></div>
                </div>
                <div class="progress-step">
                    <div class="step-dot"></div>
                    <span class="step-label">Delivered</span>
                </div>
            </div>
        </div>
    </div> -->

    <!-- Product Line Section -->
    <div class="section">
        <div class="section-header">
            <h3>Gaz Lite Product Line</h3>
        </div>
        <div class="product-grid">
            <div class="product-item">
                <a href="{{ url('grill') }}">
                    <div class="product-icon coffee">
                        <img src="{{ asset('images/stove.png') }}">
                    </div>
                    <span>Grill</span>
                </a>
            </div>
            <div class="product-item">
                <a href="{{ url('eazy_kalan') }}">
                    <div class="product-icon stove">
                        <img src="images/ezkalan.png">
                    </div>
                    <span>Stove</span>
                </a>
            </div>
            <div class="product-item">
                <a href="{{ url('cyllinder') }}">
                    <div class="product-icon cylinder">
                        <img src="images/cyllinder.png">
                    </div>
                    <span>Cylinder</span>
                </a>
            </div>
            <div class="product-item">
                <a href="{{ url('torch') }}">
                    <div class="product-icon torch">
                        <img src="images/torch-red.png">
                    </div>
                    <span>Torch</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Popular Section -->
    <div class="section">
        <div class="section-header">
            <h3>Popular</h3>
            <a href="{{ url ('popular') }}" class="view-more">View more</a>
        </div>
        <div class="popular-items">     
            <div class="popular-item">
                <div class="item-image">
                    <img src="{{ asset('images/stove.png') }}" alt="330g LPG Refill">
                </div>
                <div class="item-info">
                    <h4>330g LPG Refill</h4>
                    <p class="item-subtitle"><small>Small</small></p>
                    <div class="item-footer">
                        <span class="price">₱54</span>
                        <button class="add-btn" data-name="330g LPG Refill" data-price="54.00" data-image="{{asset('images/stove.png')}}">
                            <i class="bi bi-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="popular-item">
                <div class="item-image">
                    <img src="{{ asset('images/stove.png') }}" alt="330g LPG Refill">
                </div>
                <div class="item-info">
                    <h4>230g LPG Refill</h4>
                    <p class="item-subtitle"><small>Medium</small></p>
                    <div class="item-footer">
                        <span class="price">₱37</span>
                        <button class="add-btn" data-name="230g LPG Refill" data-price="37.00" data-image="{{asset('images/stove.png')}}">
                            <i class="bi bi-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="popular-item">
                <div class="item-image">
                    <img src="{{ asset('images/stove.png') }}" alt="330g LPG Refill">
                </div>
                <div class="item-info">
                    <h4>330g Gas</h4>
                    <p class="item-subtitle"><small>Large</small></p>
                    <div class="item-footer">
                        <span class="price">₱75</span>
                        <button class="add-btn" data-name="330g Gas" data-price="75.00" data-image="{{asset('images/stove.png')}}">
                            <i class="bi bi-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="section-header">
            <h3>Promo</h3>
            <a href="{{ url ('add_promo') }}" class="view-more">Add promo</a>
        </div>
        </div>
        <div class="image-slider-container">
            <div class="slider-wrapper">
                <div class="slider-track" id="sliderTrack">
                    <div class="slide active">
                        <img src="{{ asset('images/promo1.jpg') }}" alt="Slide 1" onerror="this.src='{{ asset('images/promo1.jpg') }}'">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('images/promo1.jpg') }}" alt="Slide 2" onerror="this.src='{{ asset('images/promo2.jpg') }}'">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('images/promo1.jpg') }}" alt="Slide 3" onerror="this.src='{{ asset('images/promo1.jpg') }}'">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('images/promo1.jpg') }}" alt="Slide 4" onerror="this.src='{{ asset('images/promo2.jpg') }}'">
                    </div>
                </div>
                
                <!-- Slider Controls -->
                <button class="slider-btn prev-btn" id="prevBtn">
                    <i class="bi bi-chevron-left"></i>
                </button>
                <button class="slider-btn next-btn" id="nextBtn">
                    <i class="bi bi-chevron-right"></i>
                </button>
                
                <!-- Slide Indicators -->
                <div class="slider-indicators">
                    <span class="indicator active" data-slide="0"></span>
                    <span class="indicator" data-slide="1"></span>
                    <span class="indicator" data-slide="2"></span>
                    <span class="indicator" data-slide="3"></span>
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection

@section('css')
<style> 

    .page-header-nya {
        position: sticky;
        top: 0;
        z-index: 1000;
        background: #fff;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

   .search-container {
        margin-bottom: 25px;
    }

    .search-bar {
    position: relative;
    align-items: center;
    background: white;  
    border-radius: 10px;
    padding: 12px 25px !important;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
    border: 1px solid #f0f0f0;
    transition: all 0.3s ease;
    width: 100%;
    max-width: 100%;
    margin: 0 auto;
    box-sizing: border-box;
    }

    .search-bar:focus-within {
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.12);
        border-color: #00d2ff;
    }

    .search-icon {
        color: #999;
        font-size: 16px;
        margin-right: 12px;
    }

    .search-input {
        flex: 1;
        border: none;
        outline: none;
        font-size: 16px;
        color: #333;
        background: transparent;
    }

    .search-input::placeholder {
        color: #999;
        font-weight: 400;
    }

    /* Image Slider Styles */
    .image-slider-container {
        margin-bottom: 25px;
    }

    .slider-wrapper {
        position: relative;
        width: 100%;
        height: auto !important;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }

    .slider-track {
        display: flex;
        width: 400%;
        height: 100%;
        transition: transform 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }

    .slide {
        position: relative;
        width: 25%;
        height: 100%;
        flex-shrink: 0;
    }

    .slide img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    .slide-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(transparent, rgba(0, 0, 0, 0.7));
        color: white;
        padding: 20px;
        text-align: left;
    }

    .slide-overlay h3 {
        font-size: 18px;
        font-weight: 700;
        margin: 0 0 8px 0;
        text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
    }

    .slide-overlay p {
        font-size: 14px;
        margin: 0;
        opacity: 0.9;
        text-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);
    }

    .slider-btn {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: rgba(255, 255, 255, 0.9);
        border: none;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        color: #333;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 16px;
        transition: all 0.3s ease;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        z-index: 10;
        opacity: 0;
        visibility: hidden;
    }

    .slider-wrapper:hover .slider-btn {
        opacity: 1;
        visibility: visible;
    }

    .slider-btn:hover {
        background: white;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        transform: translateY(-50%) scale(1.1);
    }

    .prev-btn {
        left: 15px;
    }

    .next-btn {
        right: 15px;
    }

    .slider-indicators {
        position: absolute;
        bottom: 15px;
        left: 50%;
        transform: translateX(-50%);
        display: flex;
        gap: 8px;
        z-index: 10;
    }

    .indicator {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.5);
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .indicator.active {
        background: white;
        transform: scale(1.2);
    }

    .indicator:hover {
        background: rgba(255, 255, 255, 0.8);
    }

    @media (max-width: 480px) {
        .slider-wrapper {
            height: 160px;
        }

        .slide-overlay {
            padding: 15px;
        }

        .slide-overlay h3 {
            font-size: 16px;
        }

        .slide-overlay p {
            font-size: 12px;
        }

        .slider-btn {
            width: 35px;
            height: 35px;
            font-size: 14px;
        }

        .prev-btn {
            left: 10px;
        }

        .next-btn {
            right: 10px;
        }
    }

    /* Welcome Banner */
    .welcome-banner {
        background: #01B8EA;
        border-radius: 10px;
        padding: 30px 25px;
        margin-bottom: 30px;
        color: white;
        overflow: hidden;
    }

    .current-order-section {
        background: #F8F9FA;
        border-radius: 7.29px !important;
        padding: 25px 20px;
        margin-bottom: 25px;
    }

    .order-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 25px;
    }

    .order-header h3 {
        font-size: 20px;
        font-weight: 700;
        color: #2D2D2D;
        margin: 0;
    }

    .see-details {
        color: #4A90E2;
        text-decoration: none;
        font-size: 14px;
        font-weight: 500;
        transition: color 0.2s ease;
    }

    .see-details:hover {
        color: #186ed1;
        text-decoration: none;
    }

    .order-status-card {
        background: white;
        border-radius: 7.29px;
        padding: 25px 20px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    .status-progress {
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
        position: relative;
    }

    .progress-step {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 12px;
        flex: 0 0 auto;
        z-index: 2;
    }

    .step-dot {
        width: 20px;
        height: 20px;
        border-radius: 50%;
        background: #D1D5DB;
        transition: all 0.3s ease;
    }

    .progress-step.active .step-dot {
        background: #4A90E2;
    }

    .step-label {
        font-size: 13px;
        color: #6B7280;
        font-weight: 500;
        white-space: nowrap;
        text-align: center;
    }

    .progress-step.active .step-label {
        color: #2D2D2D;
        font-weight: 600;
    }

    .progress-line-container {
        flex: 1;
        display: flex;
        align-items: center;
        padding: 0;
        position: relative;
        top: 10px;
    }

    .progress-line {
        position: absolute;
        margin: 0 -29px;
        width: 170%;
        height: 4px;
        background: #D1D5DB;
        border-radius: 2px;
        transition: all 0.3s ease;
    }

    .progress-line-2 {
        position: absolute;
        margin: 0 -29px;
        width: 157%;
        height: 4px;
        background: #D1D5DB;
        border-radius: 2px;
        transition: all 0.3s ease;
    }

    .progress-line.active {
        background: #4A90E2;
    }

    /* Hide order section if no active order */
    .current-order-section.hidden {
        display: none;
    }

    @media (max-width: 480px) {
        .order-header {
            margin-bottom: 20px;
        }
        
        .order-header h3 {
            font-size: 18px;
        }
        
        .see-details {
            font-size: 13px;
        }
        
        .order-status-card {
            padding: 20px 15px;
        }
        
        .step-dot {
            width: 16px;
            height: 16px;
        }
        
        .step-label {
            font-size: 11px;
        }
        
        .progress-line-container {
            padding: 0 5px;
            top: 8px;
        }
        
        .progress-line {
            height: 3px;
        }
    }

    .banner-content {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .banner-text h2 {
        font-size: 28px;
        font-weight: 700;
        margin-bottom: 20px;
        line-height: 1.2;
    }

    .explore-btn {
        background: #FFFFFF;
        border: 1px solid rgba(255, 255, 255, 0.3);
        color: #205CAD;
        padding: 7px 24px;
        border-radius: 9.17px;
        font-weight: 600;
        font-size: 14px;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .explore-btn:hover {
        background: #f2f8ffff;
        transform: translateY(-2px);
    }

    .banner-icon {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .flame-icon {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%) rotate(45deg);
        color: #ff6b35;
        font-size: 16px;
    }

    .section {
        margin-bottom: 30px;
    }

    .section-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }

    .section-header h3 {
        font-size: 15px;
        font-weight: 600;
        color: #333;
        margin: 0;
    }

    .view-more {
        color: #007bff;
        text-decoration: none;
        font-size: 14px;
        font-weight: 500;
    }

    .view-more:hover {
        text-decoration: underline;
    }

    /* Product Grid */
    .product-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
        margin-bottom: 20px;
    }

    .product-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        gap: 12px;
    }

    .product-item a {
        text-decoration: none;
        color: inherit;
        display: block;
    }

    .product-item img {
        width: 50px;
        height: 50px;
        border-radius: 20px;
    }

    .product-icon {
        width: 60px;
        height: 60px;
        border-radius: 18px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        color: white;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    .product-icon.coffee {
        width: 70px;
        height: 70px;
        background: #769dd1ff;
    }

    .product-icon.stove {
        width: 70px;
        height: 70px;
        background: #769dd1ff;
    }

    .product-icon.cylinder {
        width: 70px;
        height: 70px;
        background: #769dd1ff;
        color: #fff;
    }

    .product-icon.torch {
        width: 70px;
        height: 70px;
        background: #769dd1ff;
    }


    .product-item span {
        font-size: 14px;
        font-weight: 500;
        color: #666;
    }

    .popular-items {
        display: flex;
        gap: 15px;
        overflow-x: auto;
        scroll-behavior: smooth;
        padding-bottom: 10px;
        scrollbar-width: none;
        -ms-overflow-style: none;
    }

    .popular-items::-webkit-scrollbar {
        display: none;
    }

    .popular-item {
        background: white;
        border-radius: 20px;
        padding: 0;
        box-shadow: 0 2px 15px rgba(0, 0, 0, 0.08);
        transition: transform 0.2s ease, box-shadow 0.2s ease;
        flex: 0 0 180px;
        min-width: 180px;
        overflow: hidden;
        border: 1px solid #f5f5f5;
    }

    .popular-item:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
    }

    @media (max-width: 480px) {
        .popular-item {
            flex: 0 0 160px;
            min-width: 160px;
        }
        
        .popular-items {
            gap: 12px;
        }
    }

    .item-image {
        width: 100%;
        height: 140px;
        background: #f8f9fa;
        border-radius: 20px 20px 0 0;
        margin-bottom: 0;
        border-bottom: 1px solid #f0f0f0;
    }

    .item-image img {
        width: 100%;
        height: 100%;
    }

    .item-info {
        padding: 10px;
    }

    .item-info h4 {
        font-size: 14px;
        font-weight: 700;
        color: #1a1a1a;
        margin: 0 0 8px 0;
        line-height: 1.3;
    }

    .item-subtitle {
        font-size: 14px;
        color: #8e8e93;
        margin: 0 0 20px 0;
        font-weight: 400;
    }

    .item-footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: auto;
    }

    .price {
        font-size: 16px;
        font-weight: 550;
        color: #1a1a1a;
    }

    .add-btn {
        width: 36px;
        height: 36px;
        background: #205CAD;
        border: none;
        border-radius: 10px;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.2s ease;
        box-shadow: 0 2px 8px rgba(0, 122, 255, 0.3);
    }

    .add-btn:hover {
        background: #0056b3;
        transform: scale(1.05);
        box-shadow: 0 4px 12px rgba(0, 122, 255, 0.4);
    }

    .add-btn:active {
        transform: scale(0.95);
    }

    .add-btn i {
        font-size: 16px;
        font-weight: bold;
    }

    .add-btn.with_quantity {
        background: #ca1f1f !important;
    }

    .add-btn.with_quantity:hover {
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
        border-radius: 10px;
    }

    .home_modal_overlay {
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

    .home_modal_overlay.show {
        opacity: 1;
        visibility: visible;
    }

    .home_qty_modal {
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
        z-index: 9999 !important;
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease;
    }

    .home_qty_modal.show {
        opacity: 1;
        visibility: visible;
        padding: 20px;
    }

    .home_modal_header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
        padding-bottom: 15px;
        border-bottom: 1px solid #e9ecef;
    }

    .home_modal_title {
        font-size: 16px;
        font-weight: 600;
        color: #333;
        margin: 0;
    }

    .close_home_modal {
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

    .close_home_modal:hover {
        background: #f5f5f5;
        color: #333;
    }

    .home_product_info {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 15px 0;
        border-bottom: 1px solid #f0f0f0;
        margin-bottom: 20px;
    }

    .home_product_img {
        width: 60px;
        height: 60px;
        object-fit: contain;
        border-radius: 8px;
        background: #f5f5f5;
        padding: 8px;
    }

    .home_product_details {
        flex: 1;
    }

    .home_product_name {
        font-size: 16px;
        font-weight: 600;
        color: #333;
        margin-bottom: 4px;
        line-height: 1.3;
    }

    .home_product_price {
        font-size: 18px;
        font-weight: 700;
        color: #4A90E2;
    }

    .home_quantity_section {
        margin-bottom: 20px;
    }

    .home_qty_input_wrapper {
        display: flex;
        flex-direction: column;
        gap: 12px;
    }

    .home_qty_label {
        font-size: 14px;
        font-weight: 600;
        color: #333;
    }

    .home_qty_controls {
        display: flex;
        align-items: center;
        gap: 12px;
        justify-content: center;
    }

    .home_qty_btn {
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

    .home_qty_btn:hover {
        background: #e9ecef;
        border-color: #dee2e6;
        transform: translateY(-1px);
    }

    .home_qty_btn:active {
        transform: translateY(0) scale(0.95);
    }

    .home_qty_btn.minus {
        color: #dc3545;
        border-color: #f5c6cb;
    }

    .home_qty_btn.minus:hover {
        background: #f8d7da;
        border-color: #f1aeb5;
    }

    .home_qty_btn.plus {
        color: #28a745;
        border-color: #c3e6cb;
    }

    .home_qty_btn.plus:hover {
        background: #d4edda;
        border-color: #b8dabd;
    }

    .home_qty_input {
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

    .home_qty_input:focus {
        border-color: #4A90E2;
        box-shadow: 0 0 0 3px rgba(74, 144, 226, 0.1);
    }

    .home_qty_input::-webkit-outer-spin-button,
    .home_qty_input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    .home_qty_input[type=number] {
        -moz-appearance: textfield;
    }

    .home_total_section {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 15px 0;
        border-top: 1px solid #e9ecef;
        margin-bottom: 15px;
    }

    .home_total_label {
        font-size: 14px;
        font-weight: 500;
        color: #666;
    }

    .home_total_amount {
        font-size: 16px;
        font-weight: 700;
        color: #4A90E2;
    }

    .home_modal_buttons {
        display: flex;
        gap: 12px;
        margin-top: 20px;
        padding-top: 15px;
        border-top: 1px solid #e9ecef;
    }

    .home_modal_btn {
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

    .home_btn_cancel {
        background: #f8f9fa;
        color: #6c757d;
        border: 1px solid #e9ecef;
    }

    .home_btn_cancel:hover {
        background: #e9ecef;
        color: #495057;
        transform: translateY(-1px);
    }

    .home_btn_confirm {
        background: #4A90E2;
        color: #fff;
        box-shadow: 0 2px 4px rgba(74, 144, 226, 0.3);
    }

    .home_btn_confirm:hover {
        background: #186ed1;
        transform: translateY(-1px);
        box-shadow: 0 3px 6px rgba(74, 144, 226, 0.4);
    }

    .notification_toast {
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

    .notification_toast.success {
        background: #28a745;
        color: white;
    }

    .notification_toast.show {
        transform: translateX(0);
    }

    .notification-badge {
        background: #ca1f1f !important;
        top: -8px !important;
        right: -8px !important;
        color: white;
        border-radius: 50%;
        width: 20px !important;
        height: 20px !important;
        font-size: 11px;
        font-weight: 600;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 2px solid white;
        animation: pulse 2s infinite;
        border: 2px solid white;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    }

    .cart-badge {
        animation: pulse 2s infinite;
    }

    @keyframes pulse {
        0% { transform: scale(1); }
        50% { transform: scale(1.1); }
        100% { transform: scale(1); }
    }

    .notification-dropdown {
        position: absolute;
        top: calc(100% + 15px);
        right: 0;
        width: 300px !important;
        background: white;
        border-radius: 16px;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.15);
        border: 1px solid #e9ecef;
        z-index: 999999 !important;
        opacity: 0;
        visibility: hidden;
        transform: translateY(-10px);
        transition: all 0.3s ease;
        max-height: 500px;
        overflow: visible !important;
    }


    .notification-dropdown.show {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }

    .notification-dropdown::before {
        content: '';
        position: absolute;
        top: -8px;
        right: 20px;
        width: 0;
        height: 0;
        border-left: 8px solid transparent;
        border-right: 8px solid transparent;
        border-bottom: 8px solid white;
        filter: drop-shadow(0 -2px 4px rgba(0, 0, 0, 0.1));
    }

    .notification-header {
        padding: 20px 20px 15px;
        border-bottom: 1px solid #f0f0f0;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .notification-title {
        font-size: 18px;
        font-weight: 700;
        color: #333;
        margin: 0;
    }

    .mark-all-read {
        color: #01B8EA;
        font-size: 13px;
        font-weight: 600;
        text-decoration: none;
        padding: 6px 12px;
        border-radius: 8px;
        transition: all 0.2s ease;
    }

    .mark-all-read:hover {
        background: rgba(1, 184, 234, 0.1);
        text-decoration: none;
        color: #01B8EA;
    }

    .notification-list {
        max-height: 400px;
        overflow-y: auto;
        scrollbar-width: none;
        -ms-overflow-style: none;
    }

    .notification-list::-webkit-scrollbar {
        display: none;
    }

    .notification-item {
        padding: 16px 20px;
        border-bottom: 1px solid #f5f5f5;
        cursor: pointer;
        transition: all 0.2s ease;
        position: relative;
        display: flex;
        gap: 12px;
        align-items: flex-start;
    }

    .notification-item:hover {
        background: #f8f9fa;
        transform: translateX(2px);
    }

    .notification-item:last-child {
        border-bottom: none;
    }

    .notification-item.unread {
        background: rgba(1, 184, 234, 0.03);
        border-left: 3px solid #01B8EA;
    }

    .notification-item.unread::before {
        content: '';
        position: absolute;
        top: 20px;
        right: 20px;
        width: 8px;
        height: 8px;
        background: #01B8EA;
        border-radius: 50%;
        box-shadow: 0 0 0 3px rgba(1, 184, 234, 0.2);
    }

    .notification-icon-wrapper {
        width: 40px;
        height: 40px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        font-size: 18px;
        color: white;
    }

    .notification-icon-wrapper.order {
        background: linear-gradient(135deg, #4CAF50, #45a049);
    }

    .notification-icon-wrapper.delivery {
        background: linear-gradient(135deg, #2196F3, #1976D2);
    }

    .notification-icon-wrapper.promotion {
        background: linear-gradient(135deg, #FF9800, #F57C00);
    }

    .notification-icon-wrapper.system {
        background: linear-gradient(135deg, #9C27B0, #7B1FA2);
    }

    .notification-icon-wrapper.payment {
        background: linear-gradient(135deg, #205CAD, #1a4a8a);
    }

    .notification-content {
        flex: 1;
        min-width: 0;
    }

    .notification-message {
        font-size: 14px;
        font-weight: 600;
        color: #333;
        margin-bottom: 4px;
        line-height: 1.4;
    }

    .notification-description {
        font-size: 13px;
        color: #666;
        margin-bottom: 6px;
        line-height: 1.3;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .notification-time {
        font-size: 12px;
        color: #999;
        font-weight: 500;
    }

    .notification-footer {
        padding: 15px 20px;
        border-top: 1px solid #f0f0f0;
        text-align: center;
        background: #fafafa;
    }

    .view-all-notifications {
        color: #01B8EA;
        font-size: 14px;
        font-weight: 600;
        text-decoration: none;
        padding: 8px 16px;
        border-radius: 8px;
        transition: all 0.2s ease;
        display: inline-block;
    }

    .view-all-notifications:hover {
        background: rgba(1, 184, 234, 0.1);
        text-decoration: none;
        color: #01B8EA;
    }

    .notification-title {
        font-size: 20px;
        font-weight: 700;
        color: #333;
        margin: 0;
    }

    .tab-container {
        display: flex;
        gap: 8px;
        margin-top: 16px;
        padding: 0 20px 15px;
        border-bottom: 1px solid #f0f0f0;
    }

    .tab-button {
        flex: 1;
        padding: 10px 16px;
        border: none;
        border-radius: 12px;
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.2s ease;
        text-align: center;
    }

    .tab-button.active {
        background: #e8f4f8;
        color: #01B8EA;
    }

    .tab-button:not(.active) {
        background: transparent;
        color: #666;
    }

    .tab-button:not(.active):hover {
        background: #f5f5f5;
        color: #333;
    }

    .tab-content {
        display: none;
    }

    .tab-content.active {
        display: block;
    }

    .chat-item .notification-content {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .chat-item .notification-time {
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 12px;
        color: #999;
        font-weight: 500;
        flex-shrink: 0;
    }

    .unread-dot {
        width: 6px;
        height: 6px;
        background: #ff4757;
        border-radius: 50%;
        display: inline-block;
    }

    .chat-item .notification-description {
        display: none;
    }

    .notification-icon-wrapper.promo {
        background: linear-gradient(135deg, #01B8EA, #0ea5d9);
    }

    .notification-item.chat-item {
        padding: 16px 20px;
        border-bottom: 1px solid #f5f5f5;
    }

    .notification-item.chat-item:hover {
        background: #f8f9fa;
    }

    .notification-item.chat-item.unread::before {
        display: none;
    }

    @media (max-width: 480px) {
        .tab-container {
            padding: 0 15px 15px;
            gap: 6px;
        }
        
        .tab-button {
            padding: 8px 12px;
            font-size: 13px;
        }
        
        .notification-title {
            font-size: 18px;
        }
    }

    @media (max-width: 480px) {
        .notification-dropdown {
            width: calc(100vw - 30px);
            right: -15px;
            max-height: 450px;
        }
        
        .notification-header {
            padding: 15px;
        }
        
        .notification-title {
            font-size: 16px;
        }
        
        .notification-item {
            padding: 14px 15px;
            gap: 10px;
        }
        
        .notification-icon-wrapper {
            width: 35px;
            height: 35px;
            font-size: 16px;
        }
    }

    @media (max-width: 480px) {
        .content-area {
            padding: 15px;
        }

        .page-header-nya {
            align-items: center;
            margin-left: -15px;
            margin-right: -15px;
            width: calc(100% + 30px);
            padding: 15px 15px;
        }

        .greeting-section h2 {
            font-size: 16px;
        }

        .greeting-section p {
            font-size: 12px;
        }

        .banner-text h2 {
            font-size: 24px;
        }

        .product-grid {
            gap: 15px;
        }

        .product-icon {
            width: 50px;
            height: 50px;
            font-size: 20px;
        }

        .home_qty_modal {
            width: 95%;
            max-height: 75vh;
        }

        .home_qty_modal.show {
            padding: 15px;
        }

        .home_product_img {
            width: 50px;
            height: 50px;
        }

        .home_product_name {
            font-size: 14px;
        }

        .home_product_price {
            font-size: 16px;
        }

        .home_qty_btn {
            width: 36px;
            height: 36px;
            font-size: 16px;
        }

        .home_qty_input {
            width: 70px;
            height: 36px;
            font-size: 14px;
        }

        .home_modal_btn {
            padding: 10px 14px;
            font-size: 13px;
        }

        .quantity_indicator {
            font-size: 10px;
        }
    }
</style>
@endsection
@section('js')
<script>
class ImageSlider {
    constructor() {
        this.currentSlide = 0;
        this.totalSlides = 4;
        this.autoSlideInterval = null;
        this.isAutoPlaying = true;
        this.slideInterval = 4000;
        
        this.sliderTrack = document.getElementById('sliderTrack');
        this.prevBtn = document.getElementById('prevBtn');
        this.nextBtn = document.getElementById('nextBtn');
        this.indicators = document.querySelectorAll('.indicator');
        this.sliderWrapper = document.querySelector('.slider-wrapper');
        
        this.init();
    }
    
    init() {
        if (!this.sliderTrack) return;
        
        this.prevBtn.addEventListener('click', () => this.prevSlide());
        this.nextBtn.addEventListener('click', () => this.nextSlide());
        
        this.indicators.forEach((indicator, index) => {
            indicator.addEventListener('click', () => this.goToSlide(index));
        });
        
        this.sliderWrapper.addEventListener('mouseenter', () => this.pauseAutoSlide());
        this.sliderWrapper.addEventListener('mouseleave', () => this.resumeAutoSlide());
        
        this.setupTouchEvents();
        
        this.startAutoSlide();
        
        document.addEventListener('visibilitychange', () => {
            if (document.hidden) {
                this.pauseAutoSlide();
            } else {
                this.resumeAutoSlide();
            }
        });
    }
    
    setupTouchEvents() {
        let startX = 0;
        let startY = 0;
        let currentX = 0;
        let currentY = 0;
        let isDragging = false;
        let isHorizontalSwipe = false;
        
        this.sliderWrapper.addEventListener('touchstart', (e) => {
            startX = e.touches[0].clientX;
            startY = e.touches[0].clientY;
            isDragging = true;
            isHorizontalSwipe = false;
            this.pauseAutoSlide();
        });
        
        this.sliderWrapper.addEventListener('touchmove', (e) => {
            if (!isDragging) return;
            
            currentX = e.touches[0].clientX;
            currentY = e.touches[0].clientY;
            
            const deltaX = Math.abs(currentX - startX);
            const deltaY = Math.abs(currentY - startY);
            
            // Determine if this is a horizontal or vertical swipe
            if (!isHorizontalSwipe && deltaX > 10 || deltaY > 10) {
                isHorizontalSwipe = deltaX > deltaY;
            }
            
            // Only prevent default for horizontal swipes
            if (isHorizontalSwipe) {
                e.preventDefault();
            }
        });
        
        this.sliderWrapper.addEventListener('touchend', () => {
            if (!isDragging) return;
            
            // Only process horizontal swipes for slide navigation
            if (isHorizontalSwipe) {
                const deltaX = startX - currentX;
                const threshold = 50;
                
                if (Math.abs(deltaX) > threshold) {
                    if (deltaX > 0) {
                        this.nextSlide();
                    } else {
                        this.prevSlide();
                    }
                }
            }
            
            isDragging = false;
            isHorizontalSwipe = false;
            this.resumeAutoSlide();
        });
        
        // Add mouse drag support for desktop
        this.setupMouseDragEvents();
    }
    
    setupMouseDragEvents() {
        let startX = 0;
        let currentX = 0;
        let isDragging = false;
        let hasMoved = false;
        
        this.sliderWrapper.addEventListener('mousedown', (e) => {
            startX = e.clientX;
            isDragging = true;
            hasMoved = false;
            this.pauseAutoSlide();
            this.sliderWrapper.style.cursor = 'grabbing';
            e.preventDefault(); // Prevent text selection
        });
        
        document.addEventListener('mousemove', (e) => {
            if (!isDragging) return;
            
            currentX = e.clientX;
            const deltaX = Math.abs(currentX - startX);
            
            if (deltaX > 5) {
                hasMoved = true;
            }
        });
        
        document.addEventListener('mouseup', () => {
            if (!isDragging) return;
            
            if (hasMoved) {
                const deltaX = startX - currentX;
                const threshold = 30;
                
                if (Math.abs(deltaX) > threshold) {
                    if (deltaX > 0) {
                        this.nextSlide();
                    } else {
                        this.prevSlide();
                    }
                }
            }
            
            isDragging = false;
            hasMoved = false;
            this.sliderWrapper.style.cursor = 'grab';
            this.resumeAutoSlide();
        });
        
        // Add grab cursor
        this.sliderWrapper.style.cursor = 'grab';
    }
    
    goToSlide(slideIndex) {
        this.currentSlide = slideIndex;
        this.updateSlider();
        this.resetAutoSlide();
    }
    
    nextSlide() {
        this.currentSlide++;
        this.updateSlider();
        this.resetAutoSlide();
    }
        
    prevSlide() {
        this.currentSlide--;
        this.updateSlider();
        this.resetAutoSlide();
    }
    
    updateSlider() {
        const slideWidth = 100 / this.totalSlides; 
        const translateX = -this.currentSlide * slideWidth;

        if (this.currentSlide >= this.totalSlides) {
            this.sliderTrack.style.transition = 'none';
            this.currentSlide = 0;              
            this.sliderTrack.style.transform = `translateX(0%)`;
            
            this.sliderTrack.offsetHeight;
            
            this.indicators.forEach((indicator, index) => {
                indicator.classList.toggle('active', index === 0);
            });
            return;
        }

        if (this.currentSlide < 0) {
            this.sliderTrack.style.transition = 'none'; 
            this.currentSlide = this.totalSlides - 1; 
            this.sliderTrack.style.transform = `translateX(-${(this.totalSlides - 1) * slideWidth}%)`;
            
            this.sliderTrack.offsetHeight;
            
            this.indicators.forEach((indicator, index) => {
                indicator.classList.toggle('active', index === this.currentSlide);
            });
            return;
        }

        // Normal slide move
        this.sliderTrack.style.transition = 'transform 0.5s ease-in-out';
        this.sliderTrack.style.transform = `translateX(${translateX}%)`;

        // Update indicators
        this.indicators.forEach((indicator, index) => {
            indicator.classList.toggle('active', index === this.currentSlide);
        });
    }

    startAutoSlide() {
        if (this.isAutoPlaying) {
            this.autoSlideInterval = setInterval(() => {
                this.nextSlide();
            }, this.slideInterval);
        }
    }
    
    pauseAutoSlide() {
        if (this.autoSlideInterval) {
            clearInterval(this.autoSlideInterval);
            this.autoSlideInterval = null;
        }
    }
    
    resumeAutoSlide() {
        if (this.isAutoPlaying && !this.autoSlideInterval) {
            this.startAutoSlide();
        }
    }
    
    resetAutoSlide() {
        this.pauseAutoSlide();
        this.resumeAutoSlide();
    }
    
    toggleAutoSlide() {
        this.isAutoPlaying = !this.isAutoPlaying;
        if (this.isAutoPlaying) {
            this.startAutoSlide();
        } else {
            this.pauseAutoSlide();
        }
    }
}

function displayToast(text, type) {
    var toast = document.createElement('div');
    toast.className = 'notification_toast ' + type;
    toast.innerText = text;
    
    document.body.appendChild(toast);
    
    setTimeout(function() {
        toast.classList.add('show');
    }, 50);
    
    setTimeout(function() {
        toast.classList.remove('show');
        setTimeout(function() {
            document.body.removeChild(toast);
        }, 300);
    }, 2500);
}

// Get cart from localStorage
function getCartItems() {
    var cartData = localStorage.getItem('dealerCartData');
    if (cartData != null) {
        try {
            return JSON.parse(cartData);
        } catch (error) {
            console.log('Error getting cart data');
            return [];
        }
    }
    return [];
}

// Save cart to localStorage
function saveCartItems(cartItems) {
    localStorage.setItem('dealerCartData', JSON.stringify(cartItems));
    
    // Update cart totals
    var itemCount = 0;
    var totalPrice = 0;
    
    for (var i = 0; i < cartItems.length; i++) {
        itemCount = itemCount + cartItems[i].quantity;
        totalPrice = totalPrice + (cartItems[i].price * cartItems[i].quantity);
    }
    
    localStorage.setItem('cartItems', itemCount);
    localStorage.setItem('cartTotal', totalPrice.toFixed(2));
    
    // Update the badge display
    updateCartBadge();
    
    console.log('Cart saved - items: ' + itemCount + ', total: ₱' + totalPrice);
}

// Add item to cart
function addItemToCart(product) {
    var cart = getCartItems();
    var found = false;
    
    // check if already exists
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
    
    saveCartItems(cart);
    console.log('Item added: ' + product.name);
}

// Global variables
var homeModalOverlay;
var currentHomeModal = null;
var homeButtonQtyMap = new Map();
var homeButtonProductMap = new Map();

// Get product quantity from cart - MAKE THIS GLOBAL
function getHomeProductQuantity(productName) {
    const cart = getCartItems();
    let totalQty = 0;
    
    cart.forEach(item => {
        if (item.name === productName) {
            totalQty += parseInt(item.quantity) || 0;
        }
    });
    
    return totalQty;
}

// Refresh all button displays - MAKE THIS GLOBAL
function refreshAllButtonDisplays() {
    homeButtonProductMap.forEach((productData, button) => {
        const currentQty = getHomeProductQuantity(productData.name);
        homeButtonQtyMap.set(button, currentQty);
        updateHomeButtonDisplay(button, currentQty);
    });
}


// Updated showHomeQtyModal function
function showHomeQtyModal(btn, productName, price, productImg) {
    var currentQty = getHomeProductQuantity(productName);
    
    var modalHTML = `
        <div class="home_qty_modal" data-product-name="${productName}" data-product-price="${price}">
            <div class="home_modal_header">
                <h4 class="home_modal_title">Add to Cart</h4>
                <button class="close_home_modal">
                    <i class="bi bi-x"></i>
                </button>
            </div>
            
            <div class="home_quantity_section">
                <div class="home_product_info">
                    <img src="${productImg}" alt="${productName}" class="home_product_img" 
                         onerror="this.src='{{asset('images/grill-placeholder.jpg')}}'">
                    <div class="home_product_details">
                        <div class="home_product_name">${productName}</div>
                        <div class="home_product_price">₱ ${price.toFixed(2)}</div>
                    </div>
                </div>
                
                <div class="home_qty_input_wrapper">
                    <label class="home_qty_label">Add Quantity:</label>
                    <div class="current_cart_qty" style="font-size: 12px; color: #666; margin-bottom: 10px;">
                        Currently in cart: ${currentQty}
                    </div>
                    <div class="home_qty_controls">
                        <button type="button" class="home_qty_btn minus">-</button>
                        <input type="number" class="home_qty_input" placeholder="0" min="1" max="999">
                        <button type="button" class="home_qty_btn plus">+</button>
                    </div>
                </div>
            </div>
            
            <div class="home_modal_buttons">
                <button class="home_modal_btn home_btn_cancel">Cancel</button>
                <button class="home_modal_btn home_btn_confirm">Add to Cart</button>
            </div>
        </div>
    `;

    document.body.insertAdjacentHTML('beforeend', modalHTML);
    
    var modal = document.querySelector('.home_qty_modal');
    currentHomeModal = modal;
    
    homeModalOverlay.classList.add('show');
    modal.classList.add('show');
    document.body.style.overflow = 'hidden';
    
    setupHomeModalEvents(modal, price, btn, productName, currentQty);
}

// Updated setupHomeModalEvents function
function setupHomeModalEvents(modal, price, originalButton, productName, currentCartQty) {
    var qtyInput = modal.querySelector('.home_qty_input');
    var minusBtn = modal.querySelector('.minus');
    var plusBtn = modal.querySelector('.plus');
    var totalAmount = modal.querySelector('.home_total_amount');
    var newTotalQty = modal.querySelector('.new_total_qty');
    var closeBtn = modal.querySelector('.close_home_modal');
    var cancelBtn = modal.querySelector('.home_btn_cancel');
    var confirmBtn = modal.querySelector('.home_btn_confirm');

    function updateHomeTotal() {
        var addQty = parseInt(qtyInput.value) || 0;
        var additionalCost = price * addQty;
        var newTotal = currentCartQty + addQty;
        
        totalAmount.textContent = `₱ ${additionalCost.toFixed(2)}`;
        newTotalQty.textContent = newTotal;
    }

    minusBtn.addEventListener('click', function() {
        var currentVal = parseInt(qtyInput.value) || 0;
        if (currentVal > 0) {
            qtyInput.value = currentVal - 1;
            updateHomeTotal();
        }
    });

    plusBtn.addEventListener('click', function() {
        var currentVal = parseInt(qtyInput.value) || 0;
        if (currentVal < 999) {
            qtyInput.value = currentVal + 1;
            updateHomeTotal();
        }
    });

    qtyInput.addEventListener('input', function() {
        var value = parseInt(this.value) || 0;
        if (value < 0) value = 0;
        if (value > 999) value = 999;
        this.value = value;
        updateHomeTotal();
    });

    closeBtn.addEventListener('click', closeHomeModal);
    cancelBtn.addEventListener('click', closeHomeModal);
    
    homeModalOverlay.addEventListener('click', closeHomeModal);

    confirmBtn.addEventListener('click', function() {
        var addQty = parseInt(qtyInput.value) || 0;
        var newTotalQty = currentCartQty + addQty;
        
        if (addQty > 0) {
            var productData = homeButtonProductMap.get(originalButton);
            
            var cartItem = {
                id: new Date().getTime() + Math.random(),
                name: productData.name,
                price: productData.price,
                quantity: addQty,
                image: productData.image,
                color: null
            };
            
            addItemToCart(cartItem);
            
            homeButtonQtyMap.set(originalButton, newTotalQty);
            updateHomeButtonDisplay(originalButton, newTotalQty);
            
            setTimeout(() => refreshAllButtonDisplays(), 100);
            
            displayToast(`${addQty} more item(s) added to cart! Total: ${newTotalQty}`, 'success');
        }

        closeHomeModal();
    });

    updateHomeTotal();

    // Esc key to close
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && currentHomeModal) {
            closeHomeModal();
        }
    });
}

function closeHomeModal() {
    if (currentHomeModal) {
        currentHomeModal.classList.remove('show');
        homeModalOverlay.classList.remove('show');
        document.body.style.overflow = '';

        setTimeout(() => {
            if (currentHomeModal) {
                currentHomeModal.remove();
                currentHomeModal = null;
            }
        }, 300);
    }
}

function updateHomeButtonDisplay(button, qty) {
    if (qty > 0) {
        button.classList.add('with_quantity');
        button.innerHTML = `<span class="quantity_indicator">${qty}</span>`;
    } else {
        button.classList.remove('with_quantity');
        button.innerHTML = '<i class="bi bi-plus"></i>';
    }
}

function handleHomeAddBtnClick(btn) {
    var productData = homeButtonProductMap.get(btn);
    if (!productData) {
        console.error('No product data found for button:', btn);
        return;
    }

    var { name, price, image } = productData;

    if (currentHomeModal) closeHomeModal();
    showHomeQtyModal(btn, name, price, image);

    btn.style.transform = 'scale(0.9)';
    setTimeout(() => {
        btn.style.transform = 'scale(1)';
    }, 150);
}

// DOM Content Loaded Event
document.addEventListener('DOMContentLoaded', function() {
    console.log('DOM Content Loaded - initializing...');
    updateCartBadge();
    homeModalOverlay = document.createElement('div');
    homeModalOverlay.className = 'home_modal_overlay';
    homeModalOverlay.id = 'homeModalOverlay';
    document.body.appendChild(homeModalOverlay);

    // Initialize image slider
    let imageSlider = new ImageSlider();

    const notificationIcon = document.querySelector('.notification-icon');
    
    if (notificationIcon) {
        notificationIcon.addEventListener('click', function(e) {
            e.stopPropagation();
            window.location.href = '{{ url("/notification") }}';
        });
    }

    // Profile icon click
    const profileIcon = document.querySelector('.profile-icon');
    if (profileIcon) {
        profileIcon.addEventListener('click', function() {
            console.log('Profile clicked');
            window.location.href = '{{ url("/account") }}';
        });
    }

    const addBtns = document.querySelectorAll('.add-btn');
    console.log('Found add buttons:', addBtns.length);
    
    addBtns.forEach((btn, index) => {
        var productName = btn.getAttribute('data-name');
        var productPrice = parseFloat(btn.getAttribute('data-price'));
        var productImg = btn.getAttribute('data-image');
        
        console.log(`Button ${index + 1}:`, { productName, productPrice, productImg });
        
        homeButtonProductMap.set(btn, {
            name: productName,
            price: productPrice,
            image: productImg
        });

        const savedQty = getHomeProductQuantity(productName);
        homeButtonQtyMap.set(btn, savedQty);
        updateHomeButtonDisplay(btn, savedQty);
    });

    addBtns.forEach((btn) => {
        btn.addEventListener('click', function(e) {
            console.log('Add button clicked!');
            e.preventDefault();
            e.stopPropagation();
            handleHomeAddBtnClick(this);
        });
    });

    const productItems = document.querySelectorAll('.product-item');
    productItems.forEach(function(item) {
        item.addEventListener('click', function() {
            const productName = this.querySelector('span').textContent;
            console.log('Clicked on:', productName);
        });
    });

    console.log('Home page loaded - notification button will navigate to notifications page');
    
    // Check current cart items
    var currentCart = getCartItems();
    console.log('Current cart has ' + currentCart.length + ' different items');

    // Initial refresh of all button displays
    setTimeout(() => {
        refreshAllButtonDisplays();
    }, 500);
});

// Utility functions
function viewHomeCart() {
    var cart = getCartItems();
    console.log('Home page cart items:', cart);
    return cart;
}

function clearHomeCart() {
    localStorage.removeItem('dealerCartData');
    localStorage.removeItem('cartItems');
    localStorage.removeItem('cartTotal');
    displayToast('Cart cleared', 'success');
    refreshAllButtonDisplays();
    console.log('Cart cleared from home page');
}
</script>
@endsection
