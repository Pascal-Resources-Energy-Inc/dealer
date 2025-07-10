@extends('layouts.header_dealer')

@section('content')
<div class="notifications-page">
    <!-- Header -->
    <div class="notifications-header">
        <div class="header-content">
            <button class="back-btn" onclick="window.history.back()">
                <i class="bi bi-arrow-left"></i>
            </button>
            <h1>Messages</h1>
            <button class="mark-all-read-btn">
                <i class="bi bi-check2-all"></i>
                Mark all read
            </button>
        </div>
    </div>

    <!-- Tab Navigation -->
    <div class="tabs-container">
        <div class="tab-navigation">
            <button class="tab-btn active" data-tab="chats">
                <i class="bi bi-chat-dots"></i>
                Chats
                <span class="tab-badge">2</span>
            </button>
            <button class="tab-btn" data-tab="notifications">
                <i class="bi bi-bell"></i>
                Notifications
                <span class="tab-badge">3</span>
            </button>
        </div>
    </div>

    <!-- Chats Tab Content -->
    <div class="tab-content active" id="chats-tab">
        <div class="messages-list">
            <div class="message-item unread" data-id="1">
                <div class="message-avatar promo">
                    <i class="bi bi-megaphone-fill"></i>
                </div>
                <div class="message-content">
                    <div class="message-header">
                        <h3>Gaz Lite Promotions</h3>
                        <span class="message-time">5 Sep</span>
                    </div>
                    <p class="message-text">Try Our New Promo today! Get 20% off on all LPG refills this week.</p>
                    <div class="message-status">
                        <span class="unread-indicator"></span>
                    </div>
                </div>
            </div>

            <div class="message-item unread" data-id="2">
                <div class="message-avatar promo">
                    <i class="bi bi-megaphone-fill"></i>
                </div>
                <div class="message-content">
                    <div class="message-header">
                        <h3>Gaz Lite Promotions</h3>
                        <span class="message-time">3 Sep</span>
                    </div>
                    <p class="message-text">Special Bundle Offer: Buy 2 LPG cylinders and get 1 torch free!</p>
                    <div class="message-status">
                        <span class="unread-indicator"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Notifications Tab Content -->
    <div class="tab-content" id="notifications-tab">
        <div class="notifications-list">
            <div class="notification-item unread" data-id="3">
                <div class="notification-avatar order">
                    <i class="bi bi-cart-check-fill"></i>
                </div>
                <div class="notification-content">
                    <div class="notification-header">
                        <h3>Order Confirmed</h3>
                        <span class="notification-time">2 min ago</span>
                    </div>
                    <p class="notification-text">Your order #GZ-12345 for 330g LPG Refill has been confirmed and is being processed.</p>
                    <div class="notification-status">
                        <span class="unread-indicator"></span>
                    </div>
                </div>
            </div>

            <div class="notification-item unread" data-id="4">
                <div class="notification-avatar payment">
                    <i class="bi bi-credit-card-fill"></i>
                </div>
                <div class="notification-content">
                    <div class="notification-header">
                        <h3>Payment Successful</h3>
                        <span class="notification-time">3 hours ago</span>
                    </div>
                    <p class="notification-text">Payment of ₱156.00 for order #GZ-12344 has been processed successfully.</p>
                    <div class="notification-status">
                        <span class="unread-indicator"></span>
                    </div>
                </div>
            </div>

            <div class="notification-item" data-id="5">
                <div class="notification-avatar delivery">
                    <i class="bi bi-truck"></i>
                </div>
                <div class="notification-content">
                    <div class="notification-header">
                        <h3>Order Delivered</h3>
                        <span class="notification-time">1 day ago</span>
                    </div>
                    <p class="notification-text">Your order #GZ-12343 has been successfully delivered. Thank you for your purchase!</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Empty State (hidden by default) -->
    <div class="empty-state" id="empty-state" style="display: none;">
        <div class="empty-illustration">
            <i class="bi bi-inbox"></i>
        </div>
        <h3>No messages yet</h3>
        <p>When you receive messages, they'll appear here.</p>
    </div>
</div>
@endsection

@section('css')
<style>
.notifications-page {
    margin-top: -60px;
    min-height: 100vh;
    background: #f8f9fa;
    padding-bottom: 80px;
}

.notifications-header {
    background: #fff;
    border-bottom: 1px solid #e9ecef;
    padding: 15px 20px;
    position: sticky;
    top: 0;
    z-index: 100;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
}

.header-content {
    display: flex;
    align-items: center;
    justify-content: space-between;
    max-width: 600px;
    margin: 0 auto;
}

.back-btn {
    background: none;
    border: none;
    color: #333;
    font-size: 20px;
    cursor: pointer;
    padding: 8px;
    border-radius: 50%;
    transition: background 0.2s ease;
    display: flex;
    align-items: center;
    justify-content: center;
}

.back-btn:hover {
    background: #f5f5f5;
}

.notifications-header h1 {
    font-size: 20px;
    font-weight: 600;
    color: #333;
    margin: 0;
}

.mark-all-read-btn {
    background: none;
    border: none;
    color: #01B8EA;
    font-size: 14px;
    font-weight: 600;
    cursor: pointer;
    padding: 8px 12px;
    border-radius: 8px;
    transition: background 0.2s ease;
    display: flex;
    align-items: center;
    gap: 6px;
}

.mark-all-read-btn:hover {
    background: rgba(1, 184, 234, 0.1);
}

.tabs-container {
    background: #fff;
    border-bottom: 1px solid #e9ecef;
    padding: 0 20px;
    position: sticky;
    top: 57px;
    z-index: 99;
}

.tab-navigation {
    display: flex;
    max-width: 600px;
    margin: 0 auto;
}

.tab-btn {
    flex: 1;
    background: none;
    border: none;
    padding: 16px 20px;
    cursor: pointer;
    transition: all 0.2s ease;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    font-size: 14px;
    font-weight: 600;
    color: #666;
    border-bottom: 2px solid transparent;
}

.tab-btn.active {
    color: #01B8EA;
    border-bottom-color: #01B8EA;
}

.tab-btn:hover:not(.active) {
    background: #f8f9fa;
    color: #333;
}

.tab-badge {
    background: #ff4757;
    color: white;
    border-radius: 12px;
    padding: 2px 6px;
    font-size: 11px;
    font-weight: 600;
    min-width: 18px;
    height: 18px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.tab-btn.active .tab-badge {
    background: #01B8EA;
}

.tab-content {
    display: none;
    max-width: 600px;
    margin: 0 auto;
    padding: 0 20px;
}

.tab-content.active {
    display: block;
}

.messages-list,
.notifications-list {
    background: #fff;
    border-radius: 12px;
    margin-top: 20px;
    overflow: hidden;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
}

.message-item,
.notification-item {
    display: flex;
    padding: 20px;
    border-bottom: 1px solid #f0f0f0;
    cursor: pointer;
    transition: all 0.2s ease;
    position: relative;
}

.message-item:hover,
.notification-item:hover {
    background: #f8f9fa;
}

.message-item:last-child,
.notification-item:last-child {
    border-bottom: none;
}

.message-item.unread,
.notification-item.unread {
    background: rgba(1, 184, 234, 0.02);
    border-left: 3px solid #01B8EA;
}

.message-avatar,
.notification-avatar {
    width: 48px;
    height: 48px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
    color: white;
    margin-right: 16px;
    flex-shrink: 0;
}

.message-avatar.promo,
.notification-avatar.promo {
    background: linear-gradient(135deg, #01B8EA, #0ea5d9);
}

.notification-avatar.order {
    background: linear-gradient(135deg, #4CAF50, #45a049);
}

.notification-avatar.payment {
    background: linear-gradient(135deg, #205CAD, #1a4a8a);
}

.notification-avatar.delivery {
    background: linear-gradient(135deg, #2196F3, #1976D2);
}

.message-content,
.notification-content {
    flex: 1;
    min-width: 0;
}

.message-header,
.notification-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    margin-bottom: 8px;
}

.message-header h3,
.notification-header h3 {
    font-size: 16px;
    font-weight: 600;
    color: #333;
    margin: 0;
    line-height: 1.3;
}

.message-time,
.notification-time {
    font-size: 12px;
    color: #999;
    font-weight: 500;
    flex-shrink: 0;
    margin-left: 12px;
}

.message-text,
.notification-text {
    font-size: 14px;
    color: #666;
    line-height: 1.4;
    margin: 0;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.message-status,
.notification-status {
    margin-top: 8px;
    display: flex;
    align-items: center;
}

.unread-indicator {
    width: 8px;
    height: 8px;
    background: #01B8EA;
    border-radius: 50%;
    box-shadow: 0 0 0 3px rgba(1, 184, 234, 0.2);
}

.empty-state {
    text-align: center;
    padding: 60px 20px;
    color: #999;
    max-width: 600px;
    margin: 0 auto;
}

.empty-illustration {
    font-size: 64px;
    color: #ddd;
    margin-bottom: 24px;
}

.empty-state h3 {
    font-size: 20px;
    color: #666;
    margin-bottom: 8px;
}

.empty-state p {
    font-size: 14px;
    color: #999;
    margin: 0;
}

/* Responsive Design */
@media (max-width: 768px) {
    .notifications-header {
        padding: 12px 15px;
    }
    
    .tabs-container {
        padding: 0 15px;
    }
    
    .tab-content {
        padding: 0 15px;
    }
    
    .tab-btn {
        padding: 14px 16px;
        font-size: 13px;
    }
    
    .message-item,
    .notification-item {
        padding: 16px;
    }
    
    .message-avatar,
    .notification-avatar {
        width: 42px;
        height: 42px;
        font-size: 18px;
        margin-right: 12px;
    }
    
    .message-header h3,
    .notification-header h3 {
        font-size: 15px;
    }
    
    .message-text,
    .notification-text {
        font-size: 13px;
    }
}

@media (max-width: 480px) {
    .notifications-header {
        padding: 10px 12px;
    }
    
    .header-content {
        gap: 12px;
    }
    
    .notifications-header h1 {
        font-size: 18px;
    }
    
    .mark-all-read-btn {
        font-size: 12px;
        padding: 6px 8px;
    }
    
    .mark-all-read-btn span {
        display: none;
    }
    
    .tab-btn span:not(.tab-badge) {
        display: none;
    }
    
    .tab-btn {
        padding: 12px 8px;
    }
}

/* Animation for new notifications */
@keyframes slideInFromTop {
    from {
        transform: translateY(-20px);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

.message-item.new,
.notification-item.new {
    animation: slideInFromTop 0.3s ease-out;
}

/* Loading state */
.loading {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 40px;
    color: #999;
}

.loading-spinner {
    width: 24px;
    height: 24px;
    border: 2px solid #e9ecef;
    border-top: 2px solid #01B8EA;
    border-radius: 50%;
    animation: spin 1s linear infinite;
    margin-right: 12px;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}
</style>
@endsection

@section('js')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Tab switching functionality
    const tabButtons = document.querySelectorAll('.tab-btn');
    const tabContents = document.querySelectorAll('.tab-content');
    
    tabButtons.forEach(button => {
        button.addEventListener('click', function() {
            const targetTab = this.getAttribute('data-tab');
            
            tabButtons.forEach(btn => btn.classList.remove('active'));
            tabContents.forEach(content => content.classList.remove('active'));
            
            this.classList.add('active');
            document.getElementById(targetTab + '-tab').classList.add('active');
            
            console.log('Switched to tab:', targetTab);
        });
    });
    
    // Mark all as read functionality
    const markAllReadBtn = document.querySelector('.mark-all-read-btn');
    if (markAllReadBtn) {
        markAllReadBtn.addEventListener('click', function() {
            const unreadItems = document.querySelectorAll('.message-item.unread, .notification-item.unread');
            
            unreadItems.forEach(item => {
                item.classList.remove('unread');
                const indicator = item.querySelector('.unread-indicator');
                if (indicator) {
                    indicator.style.opacity = '0';
                    setTimeout(() => {
                        indicator.remove();
                    }, 200);
                }
            });
            
            // Update badges
            const badges = document.querySelectorAll('.tab-badge');
            badges.forEach(badge => {
                badge.textContent = '0';
                badge.style.display = 'none';
            });
            
            // Show success message
            showToast('All messages marked as read', 'success');
        });
    }
    
    // Message/notification item click handlers
    const messageItems = document.querySelectorAll('.message-item, .notification-item');
    messageItems.forEach(item => {
        item.addEventListener('click', function() {
            const itemId = this.getAttribute('data-id');
            
            // Mark as read
            if (this.classList.contains('unread')) {
                this.classList.remove('unread');
                const indicator = this.querySelector('.unread-indicator');
                if (indicator) {
                    indicator.style.opacity = '0';
                    setTimeout(() => {
                        indicator.remove();
                    }, 200);
                }
                
                // Update badge count
                updateBadgeCount();
            }
            
            // Handle different item types
            if (this.classList.contains('message-item')) {
                console.log('Opening message:', itemId);
                // You can add navigation to message detail page here
                // window.location.href = '/messages/' + itemId;
            } else if (this.classList.contains('notification-item')) {
                console.log('Opening notification:', itemId);
                // Handle notification click (e.g., navigate to order details)
                // window.location.href = '/orders/' + itemId;
            }
        });
    });
    
    // Update badge counts
    function updateBadgeCount() {
        const chatsBadge = document.querySelector('[data-tab="chats"] .tab-badge');
        const notificationsBadge = document.querySelector('[data-tab="notifications"] .tab-badge');
        
        const unreadChats = document.querySelectorAll('#chats-tab .message-item.unread').length;
        const unreadNotifications = document.querySelectorAll('#notifications-tab .notification-item.unread').length;
        
        if (chatsBadge) {
            chatsBadge.textContent = unreadChats;
            chatsBadge.style.display = unreadChats > 0 ? 'flex' : 'none';
        }
        
        if (notificationsBadge) {
            notificationsBadge.textContent = unreadNotifications;
            notificationsBadge.style.display = unreadNotifications > 0 ? 'flex' : 'none';
        }
    }
    
    // Toast notification function
    function showToast(message, type = 'info') {
        const toast = document.createElement('div');
        toast.className = `toast toast-${type}`;
        toast.style.cssText = `
            position: fixed;
            top: 20px;
            right: 20px;
            background: ${type === 'success' ? '#4CAF50' : '#01B8EA'};
            color: white;
            padding: 12px 20px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 500;
            z-index: 1000;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            transform: translateX(100%);
            transition: transform 0.3s ease;
        `;
        toast.textContent = message;
        
        document.body.appendChild(toast);
        
        // Trigger animation
        setTimeout(() => {
            toast.style.transform = 'translateX(0)';
        }, 100);
        
        // Remove toast after 3 seconds
        setTimeout(() => {
            toast.style.transform = 'translateX(100%)';
            setTimeout(() => {
                document.body.removeChild(toast);
            }, 300);
        }, 3000);
    }
    
    // Initialize badge counts
    updateBadgeCount();
    
    console.log('Notifications page initialized');
});

// Function to simulate receiving a new message
function simulateNewMessage() {
    const messagesList = document.querySelector('#chats-tab .messages-list');
    const newMessage = document.createElement('div');
    newMessage.className = 'message-item unread new';
    newMessage.setAttribute('data-id', Date.now());
    
    newMessage.innerHTML = `
        <div class="message-avatar promo">
            <i class="bi bi-megaphone-fill"></i>
        </div>
        <div class="message-content">
            <div class="message-header">
                <h3>Gaz Lite Promotions</h3>
                <span class="message-time">Now</span>
            </div>
            <p class="message-text">🎉 Flash Sale Alert! 30% off on all products for the next 2 hours only!</p>
            <div class="message-status">
                <span class="unread-indicator"></span>
            </div>
        </div>
    `;
    
    messagesList.insertBefore(newMessage, messagesList.firstChild);
    
    // Update badge
    const badge = document.querySelector('[data-tab="chats"] .tab-badge');
    const currentCount = parseInt(badge.textContent) || 0;
    badge.textContent = currentCount + 1;
    badge.style.display = 'flex';
    
    console.log('New message added');
}
</script>
@endsection