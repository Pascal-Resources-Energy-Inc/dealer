<!-- header dealer -->
<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- @laravelPWA --}}
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="shortcut icon"  href="{{url('images/aaa.png')}}">
    <link rel="icon"  href="{{url('images/aaa.png')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
<!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
 
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" rel="stylesheet">

    <style>
        .loader {
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background: url("{{ asset('login_css/images/loader.gif')}}") 50% 50% no-repeat white ;
            opacity: .8;
            background-size:120px 120px;
        }
      .bg-overlay {
		    background: linear-gradient(to right, #c3c3c3, #c3c3c3) !important;
		}
    </style>
    @yield('css')

  <style>
     body {
      margin: 0;
      background: #f8f9fa;
      font-family: 'Poppins', Arial, sans-serif;
      padding-top: 60px;
      padding-bottom: 120px;
    }

    .content-area {
    margin-top: -90px;
    }

    .content-area-fix {
    margin-top: -59px;
    padding-bottom: 70px !important; 
    }

    .page-header-nya {
        display: flex;
        background: #ffffff;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 40px;
        padding: 25px 27px 15px 27px;
    }

    .page-header {
        background: #fff;
        padding: 20px 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: -10px !important;
        margin-bottom: 10px !important;
        position: relative;
        outline: 0.2px solid #e1e1e1ff;
        }


    .back-btn-item {
        background: rgba(255, 255, 255, 1) !important;
        border: none;
        width: 35px;
        height: 35px;
        border-radius: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 15px;
        backdrop-filter: blur(10px);
        transition: all 0.3s ease;
        position: absolute;
        left: 20px;
        margin: -70px 0 0 0;
    }

    .back-btn-item:hover {
        background: rgba(255, 255, 255, 0.3);
        transform: scale(1.05);
    }

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
    
    .header-icons {
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .notification-icon {
        position: relative;
        width: 40px;
        height: 40px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .notification-icon:hover {
        transform: scale(1.05);
        box-shadow: 0 4px 12px rgba(0, 210, 255, 0.3);
    }

    .notification-icon i {
        color: white;
        font-size: 18px;
    }

    

    .profile-icon {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        overflow: hidden;
        cursor: pointer;
        transition: transform 0.3s ease;
    }

    .profile-icon:hover {
        transform: scale(1.05);
    }

    .profile-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 50%;
    }

    .greeting-section {
        flex: 1;
    }

    .greeting-section h2 {
        font-size: 14px;
        font-weight: 600;
        color: #333;
        margin: 10px 0 0 0;
        line-height: 1.2;
    }

    .greeting-section p {
        font-size: 14px;
        color: #666;
        margin: 0;
        font-weight: 400;
    }

    .header-icons {
        display: flex;
        align-items: center;
        gap: 12px;
        flex-shrink: 0;
        margin: 10px 0 0 0;
    }

    .notification-icon {
        position: relative;
        width: 40px;
        height: 40px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .notification-icon:hover {
        transform: scale(1.05);
        box-shadow: 0 4px 12px rgba(0, 210, 255, 0.3);
    }

    .notification-icon i {
        color: black !important;
        font-size: 18px;
    }

    .notification-badge {
        position: absolute;
        top: -2px;
        right: -2px;
        width: 12px;
        height: 12px;
        background: #ff4757;
        border: 2px solid white;
        border-radius: 50%;
    }

    .profile-icon {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        overflow: hidden;
        cursor: pointer;
        transition: transform 0.3s ease;
    }

    .profile-icon:hover {
        transform: scale(1.05);
    }

    .profile-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 50%;
    }

    .floating-cart-btn {
        position: fixed;
        bottom: 100px;
        left: 50%;
        transform: translateX(-50%);
        background: #5BC2E7;
        color: white;
        border: none;
        border-radius: 5px;
        padding: 12px 20px;
        font-size: 14px;
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 10px;
        box-shadow: 0 4px 20px rgba(79, 172, 254, 0.4);
        cursor: pointer;
        transition: all 0.3s ease;
        z-index: 1050;
        opacity: 0;
        visibility: hidden;
        transform: translateX(-50%) translateY(-20px);
        font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
        text-decoration: none;
        min-width: 180px;
        justify-content: center;
    }


    .floating-cart-btn.show {
        opacity: 1;
        visibility: visible;
        transform: translateX(-50%) translateY(0);
    }

    .floating-cart-btn:hover {
        transform: translateX(-50%) translateY(-3px);
        box-shadow: 0 6px 25px rgba(79, 172, 254, 0.5);
        background: #46bce7ff;
        color: white;
        text-decoration: none;
    }

    .floating-cart-btn:active {
        transform: translateX(-50%) translateY(-1px);
    }

    .floating-cart-btn .cart-icon {
        font-size: 16px;
    }

    .floating-cart-btn .cart-text {
        flex: 1;
        text-align: left;
    }

    .floating-cart-btn .cart-total {
        font-weight: 700;
        font-size: 15px;
    }

    .floating-cart-btn .cart-badge {
        position: absolute;
        top: -5px;
        left: 15px;
        background: #ff4757;
        color: white;
        border-radius: 50%;
        min-width: 20px;
        height: 20px;
        font-size: 11px;
        font-weight: 600;
        display: flex;
        align-items: center;
        justify-content: center;
        line-height: 1;
        border: 2px solid white;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    }

    @keyframes cartButtonSlideDown {
        from {
            opacity: 0;
            transform: translateX(0%) translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateX(0%) translateY(0);
        }
    }

    .floating-cart-btn.animate-in {
        animation: cartButtonSlideDown 0.4s ease-out;
    }

    /* ===== Modern Bottom Navigation ===== */
    .bottom-nav {
        position: fixed;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 80px;
        background: white;
        border-top: 1px solid #e9ecef;
        display: flex;
        justify-content: space-around;
        align-items: center;
        box-shadow: 0 -2px 20px rgba(0,0,0,0.1);
        z-index: 1000;
        padding: 0;
    }
        
    .bottom-nav .under {
        margin-bottom: 5px;
    }
    
    .nav-item {
        flex: 1;
        display: flex !important;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        color: #999;
        font-size: 11px;
        font-weight: 500;
        height: 100%;
        padding: 8px 2px;
        box-sizing: border-box;
        transition: all 0.3s ease;
        position: relative;
        min-width: 0;
    }

    .nav-item i {
        font-size: 20px !important;
        margin-bottom: 4px !important;
        line-height: 1 !important;
        width: 20px;
        height: 24px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    /* Active State */
    .bottom-nav .nav-item.active,
    .bottom-nav .nav-item:hover {
      color: #4facfe;
    }

    .bottom-nav .nav-item.active i,
    .bottom-nav .nav-item:hover i {
      color: #4facfe;
    }

    .nav-icon-container {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .card-icon-up {
      position: absolute;
      bottom: 25px;
      left: 50%;
      transform: translateX(-50%);
      text-align: center;
      text-decoration: none;
      color: #5bc2e7;
      display: flex;
      flex-direction: column;
      align-items: center;
      z-index: 1100;
      cursor: pointer;
    }

    /* The circle around the QR icon */
    .icon-wrapper {
      width: 50px;
      height: 50px !important;
      border: 2px solid #5bc2e7;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 6px;
      background: #fff;
      transition: all 0.3s ease;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15); /* Subtle shadow */
    }

    .card-icon-up i {
      font-size: 22px;
      color: #5bc2e7;
    }

    .card-icon-up span {
      font-size: 12px;
      font-weight: 500;
      color: #5bc2e7;
    }

    /* Hover effects */
    .card-icon-up:hover .icon-wrapper {
      background-color: #5bc2e7;
    }

    .card-icon-up:hover i {
      color: #fff;
    }

    .card-icon-up:hover span {
      color: #5bc2e7;
    }

    .cart-badge {
        position: absolute;
        top: -8px;
        right: -8px;
        background: #ca1f1f;
        color: white;
        border-radius: 50%;
        min-width: 20px;
        height: 20px;
        font-size: 11px;
        font-weight: 600;
        display: flex;
        align-items: center;
        justify-content: center;
        line-height: 1;
        border: 2px solid white;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        transform: scale(0);
        transition: transform 0.2s ease, background-color 0.2s ease;
    }

    .cart-badge.show {
        transform: scale(1);
    }

    .cart-badge.animate {
        animation: cartBounce 0.4s ease;
    }

    .modal {
    display: none;
    position: fixed;
    z-index: 1050;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.8);
    backdrop-filter: blur(8px);
    animation: fadeIn 0.3s ease-out;
    }

    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    @keyframes slideUp {
        from { 
            opacity: 0;
            transform: translate(-50%, -40%) scale(0.9);
        }
        to { 
            opacity: 1;
            transform: translate(-50%, -50%) scale(1);
        }
    }

    .modal-content {
        background: transparent;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 90%;
        max-width: 420px;
        min-width: 320px;
        animation: slideUp 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
    }

    .modal-header {
        text-align: center;
        margin-bottom: 25px;
    }

    .modal-title {
        color: white;
        font-size: clamp(24px, 5vw, 28px);
        font-weight: 700;
        margin: 0 0 8px 0;
        text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
    }

    .close-btn {
        color: white;
        position: absolute;
        top: -60px;
        right: 10px;
        font-size: 24px;
        font-weight: bold;
        cursor: pointer;
        background: rgba(255, 255, 255, 0.2);
        border-radius: 50%;
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
        backdrop-filter: blur(10px);
    }

    .close-btn:hover {
        background: rgba(255, 255, 255, 0.3);
        transform: rotate(90deg);
    }

    .flip-card {
        perspective: 1000px;
        width: min(340px, 90vw);
        height: min(215px, 56vw);
        max-height: 215px;
        margin: auto;
    }

    .flip-card-inner {
        position: relative;
        width: 100%;
        height: 100%;
        text-align: center;
        transition: transform 0.8s ease;
        transform-style: preserve-3d;
        border-radius: 15px;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
    }

    .flip-card-front,
    .flip-card-back {
        position: absolute;
        width: 100%;
        height: 100%;
        backface-visibility: hidden;
        border-radius: 12px;
    }

    .flip-card-front {
        background: #1573FF;
        color: white;
        overflow: hidden;
        padding: 0;
    }

    .flip-card-front::before {
        content: '';
        position: absolute;
        top: -15%;
        right: -15%;
        width: 45%;
        height: 70%;
        background: #4DB1FB;
        border-radius: 50%;
        pointer-events: none;
    }

    .flip-card-front::after {
        content: '';
        position: absolute;
        bottom: -60%;
        left: -60%;
        width: 130%;
        height: 180%;
        background: #1E1671;
        border-radius: 50%;
        pointer-events: none;
    }

    .front-content {
        padding: min(20px, 5vw);
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        position: relative;
        z-index: 2;
    }

    .bottom-section {
        display: flex;
        justify-content: space-between;
        align-items: flex-end;
    }

    .bottom-left {
        text-align: left;
        flex-grow: 1;
    }

    .bottom-right {
        display: flex;
        align-items: center;
    }

    .cardholder-name {
        font-size: clamp(11px, 3.5vw, 13px);
        font-weight: 600;
        text-transform: none;
        letter-spacing: 0.3px;
        margin-bottom: 2px;
    }

    .cardholder-title {
        font-size: 10px !important;
        font-weight: 400;
        opacity: 0.9;
        line-height: 1;
        margin-bottom: 5px;
    }

    .logo-area {
    display: flex;
    align-items: center;
    padding: 8px 12px;
    border-radius: 6px;
    }

    .logo-area img {
        height: clamp(20px, 6vw, 24px);
        width: auto;
        max-width: clamp(50px, 15vw, 70px);
        object-fit: contain;
        margin-bottom: -10px;
        margin-right: -20px !important
    }

    .logo-fallback {
        color: #1e40af;
        font-size: clamp(12px, 4vw, 16px);
        font-weight: 700;
        letter-spacing: 1px;
    }

    .card-number {
        font-size: 15px !important;
        font-weight: 500;
        letter-spacing: clamp(1px, 0.8vw, 3px);
        text-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
    }

    .card-type {
        font-size: 10px !important;
        text-transform: uppercase;
        letter-spacing: 1px;
        opacity: 0.95;
    }

    .flip-card-back {
        background: #1573FF;
        color: white;
        transform: rotateY(180deg);
        display: flex;
        flex-direction: column;
        padding: 0;
        box-sizing: border-box;
        position: relative;
        overflow: hidden;
    }

    .magnetic-stripe {
        background: #000000ff;
        height: 50px !important;
        width: 100%;
        margin-top: 25px;
        border-radius: 0;
        position: relative;
    }

    .back-content {
        padding: 20px;
        display: flex;
        flex-direction: column;
        height: calc(100% - 35px);
        justify-content: space-between;
    }

    .back-message {
        font-size: 7px;
        color: white;
        text-align: left;
        margin-bottom: 15px;
        padding: 0;
        line-height: 1.3;
    }

    .barcode-section {
        position: absolute;
        right: 15px;
        top: 50%;
        transform: translateY(-50%);
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: min(8px, 2vw);
        border-radius: 4px;
        width: min(80px, 20vw);
        height: min(100px, 25vw);
        justify-content: center;
    }

    .barcode {
        width: 100%;
        height: min(40px, 10vw);
        background: repeating-linear-gradient(
            to right,
            #000,
            #000 2px,
            transparent 2px,
            transparent 4px
        );
        margin-bottom: 8px;
        border-radius: 2px;
    }

    .barcode-number {
        font-size: 7px;
        letter-spacing: 0.5px;
        color: #ffffffff;
        text-align: center;
        line-height: 1;
        writing-mode: horizontal-tb;
    }

    .terms-text {
        font-size: 7px;
        color: rgba(255, 255, 255, 0.9);
        text-align: justify;
        line-height: 1.4;
        padding-right: 2px !important;
    }

    .validity-info {
        text-align: left;
        margin-top: auto;
        padding-right: 100px;
    }

    .date-info {
        font-size: 7px;
        color: white;
        text-align: right;
        position: absolute;
        right: 35px;
        top: 7px;
    }

    .card-info-boxes {
        display: flex;
        gap: 8px;
        margin: 0 0;
        justify-content: flex-start;
    }

    .info-box {
        background: rgba(255, 255, 255, 0.15);
        border: 1px solid rgba(255, 255, 255, 0.3);
        border-radius: 6px;
        padding: 6px 10px;
        min-width: 80px;
        text-align: center;
        backdrop-filter: blur(5px);
    }

    .info-labels {
        font-size: 6px;
        color: rgba(255, 255, 255, 0.8);
        text-transform: uppercase;
        letter-spacing: 0.5px;
        line-height: 1;
        margin-bottom: 2px;
        font-weight: 500;
    }

    .info-values {
        font-size: 8px;
        color: white;
        font-weight: 600;
        line-height: 1;
        letter-spacing: 0.3px;
    }

    .flip-toggle {
        text-align: center;
        margin: 20px 0;
    }

    .flip-btn {
        background: rgba(255, 255, 255, 0.2);
        color: white;
        border: 2px solid rgba(255, 255, 255, 0.3);
        padding: min(10px, 2.5vw) min(20px, 5vw);
        border-radius: 25px;
        cursor: pointer;
        transition: all 0.3s ease;
        font-size: clamp(12px, 3.5vw, 14px);
        font-weight: 600;
        backdrop-filter: blur(10px);
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        margin: 0 auto;
    }

    .flip-btn:hover {
        background: rgba(255, 255, 255, 0.3);
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(255, 255, 255, 0.2);
    }

    .card-actions {
        text-align: center;
        margin-top: 25px;
        display: flex;
        justify-content: center;
        gap: min(16px, 4vw);
        flex-wrap: wrap;
    }

    .action-btn {
        background: rgba(255, 255, 255, 0.2);
        color: white;
        border: 2px solid rgba(255, 255, 255, 0.3);
        padding: min(12px, 3vw) min(24px, 6vw);
        border-radius: 25px;
        cursor: pointer;
        transition: all 0.3s ease;
        font-size: clamp(12px, 3.5vw, 14px);
        font-weight: 600;
        backdrop-filter: blur(10px);
        display: flex;
        align-items: center;
        gap: 8px;
        white-space: nowrap;
    }

    .action-btn:hover {
        background: rgba(255, 255, 255, 0.3);
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(255, 255, 255, 0.2);
    }

    .show-back .flip-card-inner {
        transform: rotateY(180deg);
    }

    .show-front .flip-card-inner {
        transform: rotateY(0deg);
    }

    @media (max-width: 480px) {
        .modal-content {
            width: 95%;
            max-width: 380px;
        }
        
        .flip-card {
            width: min(320px, 90vw);
            height: min(200px, 56vw);
        }
        
        .card-actions {
            flex-direction: row;
            justify-content: center;
            gap: 12px;
        }
        
        .action-btn {
            min-width: 100px;
            padding: 10px 16px;
            font-size: 13px;
        }
        
        .flip-btn {
            padding: 8px 16px;
            font-size: 13px;
        }

        .card-number {
            font-size: 12px !important;
            letter-spacing: 3px;
        }
    }

    @media (min-width: 768px) {
        .modal-content {
            width: 420px;
            max-width: 420px;
        }
        
        .flip-card {
            width: 340px;
            height: 215px;
        }
    }

    @keyframes cartBounce {
        0% { transform: scale(1); }
        50% { transform: scale(1.3); }
        100% { transform: scale(1); }
    }

    .nav-item .nav-icon-container + .under {
        margin-top: 4px;
    }

    @media (max-width: 480px) {
        .floating-cart-btn {
            bottom: 110px;
            left: 15px;
            right: 15px;
            transform: none;
            width: calc(100% - 30px);
        }
        
        .floating-cart-btn.show {
            transform: translateX(0) translateY(0);
        }
        
        .floating-cart-btn:hover {
            transform: translateX(0) translateY(-3px);
        }
        
        .floating-cart-btn:active {
            transform: translateX(0) translateY(-1px);
        }
    }
    </style>
</head>
<body>

  <!-- ===== Overlay ===== -->
  <div class="overlay" id="overlay"></div>

                @yield('content')

                
@if (!request()->is('account') && !request()->is('notification') && !request()->is('cart') && !request()->is('order_dealer') && !request()->is('merchants') && !request()->is('add_product') && !request()->is('list_product') && !request()->is('history') && !request()->is('manage_store'))
  <a href="{{ route('cart') }}" class="floating-cart-btn" id="floatingCartBtn">
      <i class="bi bi-cart cart-icon"></i>
      <div class="" id="floatingCartBadge">0</div>
      <span class="cart-text">View your cart</span>
      <span class="cart-total" id="floatingCartTotal">₱ 0.00</span>
  </a>
@endif

@if (!request()->is('account') && !request()->is('notification')  && !request()->is('list_product') && !request()->is('add_product') && !request()->is('manage_store'))
  <!-- Bottom Navbar -->
  <nav class="bottom-nav">
    <a href="{{url('/home')}}" class="nav-item {{ request()->is('home') ? 'active' : '' }}">
      <i class="bi bi-house-door"></i>
      <span class="under">Home</span>
    </a>
    <a href="{{url('/products')}}" class="nav-item {{ request()->is('products') ? 'active' : '' }}">
      <i class="bi bi-bag"></i>
      <span class="under">Products</span>
    </a>
    <!-- Kaagapay Card -->
    <div class="card-icon-up" id="kaagapaycar">
        <div class="icon-wrapper">
            <i class="fas fa-credit-card"></i>
        </div>
        <span>Card</span>
    </div>
    <a href="#" class="nav-item">
      <i class=""></i>
      <span style='color:white;'></span>
    </a>
    <a href="{{url('/history')}}" class="nav-item {{ request()->is('history') ? 'active' : '' }}">
      <i class="bi bi-clock-history"></i>
      <span class="under">History</span>
    </a>
   
    <a href="{{url('/account')}}" class="nav-item {{ request()->is('account') ? 'active' : '' }}">
      <i class="bi bi-person"></i>
      <span class="under">Profile</span>
    </a>
  </nav>
@endif

<div id="kaagapayModal" class="modal">
    <div class="modal-content">
        <span class="close-btn">&times;</span>
        
     

        <div class="flip-card" id="flipCard">
            <div class="flip-card-inner">
                <!-- FRONT SIDE -->
                <div class="flip-card-front">
                    <div class="front-content">
                        <div class="top-section"></div>
                        <div class="bottom-section">
                            <div class="bottom-left">
                                <div class="cardholder-name">Andrea Jane B. Austero</div>
                                <div class="cardholder-title">Mega Dealer</div>
                                <div class="card-number">1234 5678 9087 1314</div>
                                <div class="card-type">KAAGAPAY CARD</div>
                            </div>
                            <div class="bottom-right">
                                <div class="logo-area">
                                    <img src="images/card-logo.png" alt="GAZ LITE">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- BACK SIDE -->
                <div class="flip-card-back">
                    <div class="validity-info">
                        <div class="date-info">06-2025</div>
                    </div>
                    <div class="magnetic-stripe"></div>
                    <div class="back-content">
                        <div class="back-message">
                            Present this Kaagapay Card and enjoy discounts!
                        </div>
                        <div class="terms-text">
                            The use of this card is governed by the terms and 
                            <p>conditions of the Kaagapay Card Program. If found,
                                <br>please return to any Gaz Lite Branch.
                            </p>
                            <p>Your membership is valid for two (2) years from <br>date of application.</p>
                        </div>
                        
                        <!-- Info Boxes Section -->
                        <div class="card-info-boxes">
                            <div class="info-box">
                                <div class="info-labels">EXP DATE</div>
                                <div class="info-values">06/2027</div>
                            </div>
                            <div class="info-box">
                                <div class="info-labels">STORE DELIVERY NO.</div>
                                <div class="info-values">1234567890</div>
                            </div>
                        </div>
                        
                        <div class="barcode-section">
                            <div class="barcode"></div>
                            <div class="barcode-number">987654321098</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Flip Button -->
        <div class="flip-toggle">
            <button class="flip-btn" onclick="toggleCard()">
                <i class="bi bi-arrow-repeat"></i> Flip Card
            </button>
        </div>
    </div>
</div>

 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
  
    @yield('js')
</body>

<script>
document.addEventListener('DOMContentLoaded', function() {
    updateCartBadge();
    updateFloatingCartButton();
    
    window.addEventListener('storage', function(e) {
        if (e.key === 'dealerCartData' || e.key === 'dealerCartItems') {
            updateCartBadge();
            updateFloatingCartButton();
        }
    });
});

function updateCartBadge() {
    try {
        let totalItems = 0;

        const cartData = localStorage.getItem('dealerCartData');
        if (cartData) {
            const parsedData = JSON.parse(cartData);
            if (Array.isArray(parsedData)) {
                totalItems = parsedData.length;
            }
        } else {
            const storedItems = localStorage.getItem('dealerCartItems');
            totalItems = storedItems ? parseInt(storedItems) || 0 : 0;
        }

        const badge = document.getElementById('cartBadge');
        if (badge) {
            const currentCount = parseInt(badge.textContent) || 0;

            if (totalItems > 0) {
                badge.textContent = totalItems;
                badge.classList.add('show');

                if (totalItems > currentCount) {
                    badge.classList.add('animate');
                    setTimeout(() => {
                        badge.classList.remove('animate');
                    }, 400);
                }
            } else {
                badge.textContent = '';
                badge.style.display = 'none'; // 👈 HIDE badge
                badge.classList.remove('show');
            }
        }

        console.log('Cart badge updated:', totalItems);
    } catch (error) {
        console.error('Error updating cart badge:', error);
        const badge = document.getElementById('cartBadge');
        if (badge) {
            badge.textContent = '';
            badge.style.display = 'none'; // 👈 HIDE on error too
            badge.classList.remove('show');
        }
    }
}


function updateFloatingCartButton() {
    try {
        const floatingBtn = document.getElementById('floatingCartBtn');
        const floatingBadge = document.getElementById('floatingCartBadge');
        const floatingTotal = document.getElementById('floatingCartTotal');
        
        if (!floatingBtn || !floatingBadge || !floatingTotal) return;

        let totalItems = 0;
        let totalAmount = 0;

        // Get cart data
        const cartData = localStorage.getItem('dealerCartData');
        if (cartData) {
            const parsedData = JSON.parse(cartData);
            if (Array.isArray(parsedData)) {
                totalItems = parsedData.length;
                
                totalAmount = parsedData.reduce((sum, item) => {
                    const price = parseFloat(item.price) || 0;
                    const quantity = parseInt(item.quantity) || 0;
                    return sum + (price * quantity);
                }, 0);
            }
        }

        // Update badge
        floatingBadge.textContent = totalItems;
        
        // Update total
        floatingTotal.textContent = `₱ ${totalAmount.toFixed(2)}`;

        if (totalItems > 0) {
            if (!floatingBtn.classList.contains('show')) {
                floatingBtn.classList.add('show', 'animate-in');
                setTimeout(() => {
                    floatingBtn.classList.remove('animate-in');
                }, 400);
            }
        } else {
            floatingBtn.classList.remove('show');
        }

        console.log('Floating cart button updated:', { totalItems, totalAmount });
    } catch (error) {
        console.error('Error updating floating cart button:', error);
    }
}

function triggerCartBadgeUpdate() {
    setTimeout(() => {
        updateCartBadge();
        updateFloatingCartButton();
    }, 50);
}

function updateCartBadgeAfterAction() {
    setTimeout(() => {
        updateCartBadge();
        updateFloatingCartButton();
    }, 100);
}

// function for addItemToCartthat won't interfere with adding products
function addItemToCart(productData) {
    try {
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

        const result = saveCartData(cartData);
        
        if (result) {
            requestAnimationFrame(() => {
                if (typeof updateCartBadge === 'function') {
                    updateCartBadge();
                }
                if (typeof updateFloatingCartButton === 'function') {
                    updateFloatingCartButton();
                }
            });
        }
        
        return result;
    } catch (error) {
        console.error('Error in addItemToCart:', error);
        return false;
    }
}

// function for safely get cart data
function getCartData() {
    try {
        const stored = localStorage.getItem('dealerCartData');
        return stored ? JSON.parse(stored) : [];
    } catch (error) {
        console.error('Error getting cart data:', error);
        return [];
    }
}

function saveCartData(cartData) {
    try {
        localStorage.setItem('dealerCartData', JSON.stringify(cartData));
        
        // updating the item count for badge
        const totalItems = cartData.reduce((sum, item) => sum + (parseInt(item.quantity) || 0), 0);
        localStorage.setItem('dealerCartItems', totalItems.toString());
        
        return true;
    } catch (error) {
        console.error('Error saving cart data:', error);
        return false;
    }
}

// quantity modal confirm button
function handleQuantityModalConfirm(qty, cartItem) {
    if (qty > 0) {
        const success = addItemToCart(cartItem);
        
        if (success) {
            displayToast(`${qty} item(s) added to cart!`, 'success');
        } else {
            displayToast('Failed to add item to cart', 'error');
        }
    }
    
    closeQtyModal();
}

function triggerFloatingCartUpdate() {
    setTimeout(() => {
        updateFloatingCartButton();
    }, 50);
}
</script>
<script>
    function toggleCard() {
    const flipCard = document.getElementById('flipCard');
    const flipBtn = document.querySelector('.flip-btn');

    flipCard.classList.toggle('show-back');

    if (flipCard.classList.contains('show-back')) {
        flipBtn.innerHTML = '<i class="bi bi-arrow-repeat"></i> Show Front';
    } else {
        flipBtn.innerHTML = '<i class="bi bi-arrow-repeat"></i> Show Back';
    }
}

function downloadCard() {
    Swal.fire({
        title: '💾 Download Card',
        text: 'Your Kaagapay card will be saved to your device.',
        icon: 'info',
        showCancelButton: true,
        confirmButtonText: 'Download',
        cancelButtonText: 'Cancel'
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire('Downloaded!', 'Your card has been saved successfully.', 'success');
        }
    });
}

function shareCard() {
    if (navigator.share) {
        navigator.share({
            title: 'My Kaagapay Card',
            text: 'Check out my exclusive Kaagapay rewards card!',
            url: window.location.href
        });
    } else {
        Swal.fire({
            title: '📱 Share Card',
            text: 'Card details copied to clipboard!',
            icon: 'success',
            timer: 2000
        });
    }
}

document.addEventListener('DOMContentLoaded', function() {
    const modal = document.getElementById("kaagapayModal");
    const kaagapayButton = document.getElementById("kaagapaycar");
    const closeBtn = modal.querySelector(".close-btn");

    if (kaagapayButton) {
        kaagapayButton.addEventListener("click", function (e) {
            e.preventDefault();
            modal.style.display = "block";
            document.body.style.overflow = "hidden";
            
            const flipCard = document.getElementById('flipCard');
            flipCard.classList.remove('show-front');
            const flipBtn = document.querySelector('.flip-btn');
            flipBtn.innerHTML = '<i class="bi bi-arrow-repeat"></i> Show Front';
        });
    }

    function closeModal() {
        modal.style.display = "none";
        document.body.style.overflow = "auto";
        
        const flipCard = document.getElementById('flipCard');
        flipCard.classList.remove('show-front');
        const flipBtn = document.querySelector('.flip-btn');
        flipBtn.innerHTML = '<i class="bi bi-arrow-repeat"></i> Show Front';
    }

    if (closeBtn) {
        closeBtn.addEventListener("click", closeModal);
    }

    window.addEventListener("click", (event) => {
        if (event.target === modal) {
            closeModal();
        }
    });

    document.addEventListener("keydown", (event) => {
        if (event.key === "Escape" && modal.style.display === "block") {
            closeModal();
        }
    });
});
</script>

</html>