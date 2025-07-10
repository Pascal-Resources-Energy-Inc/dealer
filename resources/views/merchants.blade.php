@extends('layouts.header_dealer')

@section('content')
<div class="merchants-page">
  <div class="content-area-fix">
    <div class="page-header">
      <button class="back-btn" onclick="history.back()">
        <i class="bi bi-arrow-left"></i>
      </button>
      <h1 class="page-title">Merchants</h1>
    </div>

    <!-- Category Filter Section - Moved to top -->
    <div class="category-section">
      <div class="category-filter-row">
        <div class="category-dropdown-container">
          <button class="category-toggle-btn" id="categoryToggleBtn" onclick="toggleCategoryDropdown()">
            <span class="category-current" id="currentCategory">All Merchants</span>
            <i class="bi bi-chevron-down category-arrow" id="categoryArrow"></i>
          </button>
          
          <div class="category-dropdown" id="categoryDropdown">
            <div class="category-option active" onclick="selectCategory('all', 'All Merchants')">
              <span>All Merchants</span>
              <i class="bi bi-check category-check"></i>
            </div>
            <div class="category-option" onclick="selectCategory('RH', 'RH - Store Available')">
              <span>RH - Store Available</span>
              <i class="bi bi-check category-check"></i>
            </div>
            <div class="category-option" onclick="selectCategory('MG', 'MG - Store Available')">
              <span>MG - Store Available</span>
              <i class="bi bi-check category-check"></i>
            </div>
            <div class="category-option" onclick="selectCategory('PD', 'PD - Store Available')">
              <span>PD - Store Available</span>
              <i class="bi bi-check category-check"></i>
            </div>
          </div>
        </div>

        <div class="search-and-toggle">
          <div class="search-container">
            <input type="text" class="search-input" placeholder="Search..." id="merchantSearchInput">
            <i class="bi bi-search search-icon"></i>
          </div>
          
          <!-- Sliding Toggle Button -->
          <div class="toggle-container">
            <span class="toggle-label">Restock</span>
            <div class="toggle-switch" onclick="toggleRestock()">
              <div class="toggle-slider" id="toggleSlider"></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="merchants-section">
      <div class="merchant-list" id="merchantList">
        <!-- Sample merchants based on your image -->
        <div class="merchant-item" onclick="selectMerchant('MJ')">
          <div class="merchant-info">
            <div class="merchant-name">MJ</div>
          </div>
          <i class="bi bi-chevron-right merchant-arrow"></i>
        </div>
        <div class="merchant-item" onclick="selectMerchant('Andrea')">
          <div class="merchant-info">
            <div class="merchant-name">Andrea</div>
          </div>
          <i class="bi bi-chevron-right merchant-arrow"></i>
        </div>
        <!-- More merchants will be populated by JavaScript -->
      </div>
    </div>
  </div>
</div>
@endsection

@section('css')
<style>
  * {
    box-sizing: border-box;
  }

  .merchants-page {
    background: #f8f9fa;
    min-height: 100vh;
  }

  .content-area-fix {
    max-width: 100%;
    margin: 0 auto;
  }

  .page-header {
    background: #fff;
    padding: 16px 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
    border-bottom: 1px solid #e9ecef;
  }

  .back-btn {
    position: absolute;
    left: 20px;
    background: none;
    border: none;
    font-size: 24px;
    color: #333;
    cursor: pointer;
    padding: 8px;
    border-radius: 50%;
    transition: background-color 0.2s ease;
  }

  .back-btn:hover {
    background: #f0f0f0;
  }

  .page-title {
    font-size: 20px;
    font-weight: 600;
    color: #4A90E2;
    margin: 0;
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
  }

  /* Category Section - New Layout */
  .category-section {
    background: #fff;
    padding: 16px 20px;
    border-bottom: 1px solid #e9ecef;
  }

  .category-filter-row {
    display: flex;
    align-items: center;
    gap: 12px;
  }

  .category-dropdown-container {
    position: relative;
    flex-shrink: 0;
  }

  .category-toggle-btn {
    background: #f8f9fa;
    border: 1px solid #e9ecef;
    border-radius: 8px;
    padding: 8px 12px;
    display: flex;
    align-items: center;
    gap: 8px;
    cursor: pointer;
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
    font-size: 14px;
    font-weight: 400;
    color: #333;
    transition: all 0.2s ease;
    min-width: 140px;
    justify-content: space-between;
  }

  .category-toggle-btn:hover {
    background: #e9ecef;
    border-color: #4A90E2;
  }

  .category-toggle-btn.active {
    background: #fff;
    border-color: #4A90E2;
    box-shadow: 0 2px 8px rgba(74, 144, 226, 0.15);
  }

  .category-arrow {
    font-size: 12px;
    transition: transform 0.2s ease;
    color: #666;
  }

  .category-toggle-btn.active .category-arrow {
    transform: rotate(180deg);
  }

  .category-dropdown {
    position: absolute;
    top: calc(100% + 5px);
    left: 0;
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
    z-index: 1000;
    min-width: 200px;
    opacity: 0;
    visibility: hidden;
    transform: translateY(-10px);
    transition: all 0.2s ease;
    border: 1px solid #e9ecef;
  }

  .category-dropdown.show {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
  }

  .category-option {
    padding: 12px 16px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    cursor: pointer;
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
    font-size: 14px;
    color: #333;
    transition: background-color 0.2s ease;
    border-bottom: 1px solid #f0f0f0;
  }

  .category-option:last-child {
    border-bottom: none;
    border-radius: 0 0 8px 8px;
  }

  .category-option:first-child {
    border-radius: 8px 8px 0 0;
  }

  .category-option:hover {
    background: #f8f9fa;
  }

  .category-option.active {
    background: #e3f2fd;
    color: #4A90E2;
    font-weight: 500;
  }

  .category-check {
    font-size: 16px;
    color: #4A90E2;
    opacity: 0;
    transition: opacity 0.2s ease;
  }

  .category-option.active .category-check {
    opacity: 1;
  }

  /* Search and Toggle Section */
  .search-and-toggle {
    display: flex;
    align-items: center;
    gap: 12px;
    flex: 1;
  }

  .search-container {
    position: relative;
    flex: 1;
    max-width: 180px;
  }

  .search-input {
    width: 100%;
    height: 36px;
    padding: 0 40px 0 16px;
    border: 1px solid #e0e0e0;
    border-radius: 50px;
    font-size: 14px;
    background: #f8f9fa;
    transition: all 0.2s ease;
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
    box-shadow: none;
  }

  .search-input:focus {
    outline: none;
    border-color: #4A90E2;
    background: #fff;
    box-shadow: 0 0 0 2px rgba(74, 144, 226, 0.1);
  }

  .search-input::placeholder {
    color: #999;
    font-size: 14px;
  }

  .search-icon {
    position: absolute;
    right: 14px;
    top: 50%;
    transform: translateY(-50%);
    color: #666;
    font-size: 16px;
    pointer-events: none;
  }

  /* Toggle Switch Styles */
  .toggle-container {
    display: flex;
    align-items: center;
    gap: 8px;
    flex-shrink: 0;
  }

  .toggle-label {
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
    font-size: 14px;
    color: #333;
    font-weight: 400;
  }

  .toggle-switch {
    width: 44px;
    height: 24px;
    background: #e0e0e0;
    border-radius: 12px;
    position: relative;
    cursor: pointer;
    transition: background-color 0.3s ease;
    border: none;
    box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);
  }

  .toggle-switch.active {
    background: #4A90E2;
  }

  .toggle-slider {
    width: 20px;
    height: 20px;
    background: #fff;
    border-radius: 50%;
    position: absolute;
    top: 2px;
    left: 2px;
    transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15);
  }

  .toggle-switch.active .toggle-slider {
    transform: translateX(20px);
  }

  /* Merchants Section */
  .merchants-section {
    background: #fff;
    margin: 0;
  }

  .merchant-list {
    padding: 0;
  }

  .merchant-item {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 16px 20px;
    border-bottom: 1px solid #f0f0f0;
    cursor: pointer;
    transition: background-color 0.2s ease;
    background: #fff;
  }

  .merchant-item:hover {
    background: #f8f9fa;
  }

  .merchant-item:last-child {
    border-bottom: none;
  }

  .merchant-info {
    flex-grow: 1;
    min-width: 0;
  }

  .merchant-name {
    font-size: 16px;
    font-weight: 400;
    color: #333;
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
    margin: 0;
  }

  .merchant-arrow {
    font-size: 16px;
    color: #999;
    flex-shrink: 0;
  }

  /* Empty State */
  .empty-state {
    text-align: center;
    padding: 40px 20px;
    color: #666;
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
  }

  .empty-state i {
    font-size: 48px;
    color: #ddd;
    margin-bottom: 16px;
  }

  .empty-state h3 {
    font-size: 18px;
    margin-bottom: 8px;
    color: #333;
  }

  .empty-state p {
    font-size: 14px;
    color: #666;
  }

  /* Responsive Design */
  @media (max-width: 768px) {
    .category-filter-row {
      flex-direction: column;
      align-items: stretch;
      gap: 12px;
    }

    .search-and-toggle {
      justify-content: space-between;
    }

    .search-container {
      max-width: none;
      flex: 1;
    }

    .category-toggle-btn {
      min-width: 120px;
    }
  }

  @media (max-width: 480px) {
    .page-header {
      padding: 12px 16px;
    }
    
    .category-section {
      padding: 12px 16px;
    }
    
    .category-toggle-btn {
      min-width: 110px;
      font-size: 13px;
      padding: 6px 10px;
    }
    
    .search-input {
      font-size: 13px;
      padding: 6px 32px 6px 10px;
    }
    
    .toggle-label {
      font-size: 13px;
    }
    
    .toggle-switch {
      width: 44px;
      height: 22px;
    }
    
    .toggle-slider {
      width: 18px;
      height: 18px;
    }
    
    .toggle-switch.active .toggle-slider {
      transform: translateX(22px);
    }
    
    .merchant-item {
      padding: 14px 16px;
    }
    
    .merchant-name {
      font-size: 15px;
    }

    .search-icon {
      font-size: 14px;
      right: 10px;
    }
  }
</style>
@endsection

@section('javascript')
<script>
// Sample merchants data
const merchants = [
  { id: 'MJ', name: 'MJ', category: 'all' },
  { id: 'Andrea', name: 'Andrea', category: 'all' },
  // Add more merchants as needed
];

let currentFilter = 'all';
let searchQuery = '';
let restockMode = false;

function toggleCategoryDropdown() {
  const dropdown = document.getElementById('categoryDropdown');
  const toggleBtn = document.getElementById('categoryToggleBtn');
  const arrow = document.getElementById('categoryArrow');
  
  dropdown.classList.toggle('show');
  toggleBtn.classList.toggle('active');
}

function selectCategory(categoryId, categoryName) {
  currentFilter = categoryId;
  
  // Update UI
  document.getElementById('currentCategory').textContent = categoryName;
  
  // Update active state
  document.querySelectorAll('.category-option').forEach(option => {
    option.classList.remove('active');
  });
  
  event.currentTarget.classList.add('active');
  
  // Close dropdown
  document.getElementById('categoryDropdown').classList.remove('show');
  document.getElementById('categoryToggleBtn').classList.remove('active');
  
  // Filter merchants
  filterMerchants();
}

function toggleRestock() {
  restockMode = !restockMode;
  const toggleSwitch = document.querySelector('.toggle-switch');
  
  if (restockMode) {
    toggleSwitch.classList.add('active');
  } else {
    toggleSwitch.classList.remove('active');
  }
  
  console.log('Restock mode:', restockMode ? 'ON' : 'OFF');
  // Handle restock mode change here
}

function filterMerchants() {
  const merchantList = document.getElementById('merchantList');
  let filteredMerchants = merchants;
  
  // Apply category filter
  if (currentFilter !== 'all') {
    filteredMerchants = merchants.filter(merchant => 
      merchant.category === currentFilter || merchant.category === 'all'
    );
  }
  
  // Apply search filter
  if (searchQuery) {
    filteredMerchants = filteredMerchants.filter(merchant =>
      merchant.name.toLowerCase().includes(searchQuery.toLowerCase())
    );
  }
  
  // Render merchants
  if (filteredMerchants.length === 0) {
    merchantList.innerHTML = `
      <div class="empty-state">
        <i class="bi bi-people"></i>
        <h3>No merchants found</h3>
        <p>Try adjusting your search or filter criteria</p>
      </div>
    `;
  } else {
    merchantList.innerHTML = filteredMerchants.map(merchant => `
      <div class="merchant-item" onclick="selectMerchant('${merchant.id}')">
        <div class="merchant-info">
          <div class="merchant-name">${merchant.name}</div>
        </div>
        <i class="bi bi-chevron-right merchant-arrow"></i>
      </div>
    `).join('');
  }
}

function selectMerchant(merchantId) {
  console.log('Selected merchant:', merchantId);
  // Handle merchant selection
}

// Search functionality
document.addEventListener('DOMContentLoaded', function() {
  const searchInput = document.getElementById('merchantSearchInput');
  
  if (searchInput) {
    searchInput.addEventListener('input', function() {
      searchQuery = this.value;
      filterMerchants();
    });
  }
  
  // Close dropdown when clicking outside
  document.addEventListener('click', function(event) {
    const dropdown = document.getElementById('categoryDropdown');
    const toggleBtn = document.getElementById('categoryToggleBtn');
    
    if (!toggleBtn.contains(event.target)) {
      dropdown.classList.remove('show');
      toggleBtn.classList.remove('active');
    }
  });
  
  // Initial render
  filterMerchants();
});
</script>
@endsection