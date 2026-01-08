@extends('layouts.master')

@section('content')
    <!-- Slider -->
    <div class="slider-container">
        <div class="slider">
            <div class="slide slide1">
                <div>
                    <div style="display: flex; align-items: center; justify-content: center; gap: 15px;">
                        <span class="material-icons" style="font-size: 48px;">celebration</span>
                        MEGA SALE
                    </div>
                    <div style="font-size: 20px; margin-top: 15px; font-weight: 400;">Up to 70% OFF on Electronics</div>
                </div>
            </div>
            <div class="slide slide2">
                <div>
                    <div style="display: flex; align-items: center; justify-content: center; gap: 15px;">
                        <span class="material-icons" style="font-size: 48px;">flash_on</span>
                        FLASH DEALS
                    </div>
                    <div style="font-size: 20px; margin-top: 15px; font-weight: 400;">Limited Time Offers - Grab Now!</div>
                </div>
            </div>
            <div class="slide slide3">
                <div>
                    <div style="display: flex; align-items: center; justify-content: center; gap: 15px;">
                        <span class="material-icons" style="font-size: 48px;">local_shipping</span>
                        FREE SHIPPING
                    </div>
                    <div style="font-size: 20px; margin-top: 15px; font-weight: 400;">On Orders Above ₹499</div>
                </div>
            </div>
        </div>
        <button class="slider-btn prev">
            <span class="material-icons">chevron_left</span>
        </button>
        <button class="slider-btn next">
            <span class="material-icons">chevron_right</span>
        </button>
    </div>

    <!-- Categories Section -->
    <div class="categories-section">
        <div class="section-container">
            <h2 class="section-title">Shop by Category</h2>
            <div class="categories-grid">
                <div class="category-item">
                    <div class="category-icon">
                        <span class="material-icons">phone_android</span>
                    </div>
                    <h3>Electronics</h3>
                    <p>Latest gadgets</p>
                </div>
                <div class="category-item">
                    <div class="category-icon">
                        <span class="material-icons">checkroom</span>
                    </div>
                    <h3>Fashion</h3>
                    <p>Trending styles</p>
                </div>
                <div class="category-item">
                    <div class="category-icon">
                        <span class="material-icons">home</span>
                    </div>
                    <h3>Home</h3>
                    <p>Decor & more</p>
                </div>
                <div class="category-item">
                    <div class="category-icon">
                        <span class="material-icons">menu_book</span>
                    </div>
                    <h3>Books</h3>
                    <p>Best sellers</p>
                </div>
                <div class="category-item">
                    <div class="category-icon">
                        <span class="material-icons">sports_esports</span>
                    </div>
                    <h3>Gaming</h3>
                    <p>Latest games</p>
                </div>
                <div class="category-item">
                    <div class="category-icon">
                        <span class="material-icons">fitness_center</span>
                    </div>
                    <h3>Sports</h3>
                    <p>Stay active</p>
                </div>
            </div>
        </div>
    </div>

    <!-- New Arrivals Section -->
    <div class="new-arrivals-section">
        <div class="section-container">
            <div class="section-header">
                <h2 class="section-title">
                    <span class="material-icons">new_releases</span>
                    New Arrivals
                </h2>
                <a href="#" class="view-all">
                    View All
                    <span class="material-icons">arrow_forward</span>
                </a>
            </div>
            <div class="new-arrivals-grid" id="newArrivalsGrid"></div>
        </div>
    </div>

    <!-- Deals Section -->
    <div class="deals-section">
        <div class="section-container">
            <div class="section-header">
                <h2 class="section-title">
                    <span class="material-icons">local_fire_department</span>
                    Hot Deals
                </h2>
                <a href="#" class="view-all">
                    View All
                    <span class="material-icons">arrow_forward</span>
                </a>
            </div>
            <div class="deals-grid">
                <div class="deal-card deal-card-large">
                    <div class="deal-content">
                        <span class="deal-badge">UP TO 80% OFF</span>
                        <h3>Electronics Bonanza</h3>
                        <p>Smartphones, Laptops & More</p>
                        <button class="deal-btn">
                            Shop Now
                            <span class="material-icons">arrow_forward</span>
                        </button>
                    </div>
                </div>
                <div class="deal-card">
                    <div class="deal-content">
                        <span class="deal-badge">50% OFF</span>
                        <h3>Fashion Sale</h3>
                        <p>Trending Styles</p>
                        <button class="deal-btn">Shop Now</button>
                    </div>
                </div>
                <div class="deal-card">
                    <div class="deal-content">
                        <span class="deal-badge">60% OFF</span>
                        <h3>Home Essentials</h3>
                        <p>Kitchen & Decor</p>
                        <button class="deal-btn">Shop Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container">
        <!-- Filters -->
        <aside class="filters" id="filters">
            <h3>
                <span class="material-icons">filter_list</span>
                Filters
            </h3>
            
            <div class="filter-group">
                <h4>
                    <span class="material-icons" style="font-size: 18px;">category</span>
                    Category
                </h4>
                <label><input type="checkbox" class="category-filter" value="electronics"> Electronics</label>
                <label><input type="checkbox" class="category-filter" value="fashion"> Fashion</label>
                <label><input type="checkbox" class="category-filter" value="home"> Home & Kitchen</label>
                <label><input type="checkbox" class="category-filter" value="books"> Books</label>
            </div>

            <div class="filter-group">
                <h4>
                    <span class="material-icons" style="font-size: 18px;">payments</span>
                    Price Range
                </h4>
                <div class="price-range">
                    <input type="number" id="minPrice" placeholder="Min" value="0">
                    <span>-</span>
                    <input type="number" id="maxPrice" placeholder="Max" value="50000">
                </div>
            </div>

            <div class="filter-group">
                <h4>
                    <span class="material-icons" style="font-size: 18px;">star</span>
                    Rating
                </h4>
                <label><input type="checkbox" class="rating-filter" value="4"> 4★ & above</label>
                <label><input type="checkbox" class="rating-filter" value="3"> 3★ & above</label>
            </div>

            <button class="filter-btn" onclick="applyFilters()">
                <span class="material-icons">done</span>
                Apply Filters
            </button>
        </aside>

        <!-- Products -->
        <main class="products">
            <button class="mobile-filter-toggle" onclick="toggleFilters()">
                <span class="material-icons">tune</span>
                Filters
            </button>
            
            <div class="products-header">
                <h2>Featured Products</h2>
                <select class="sort-select" onchange="sortProducts(this.value)">
                    <option value="default">Sort By</option>
                    <option value="price-low">Price: Low to High</option>
                    <option value="price-high">Price: High to Low</option>
                    <option value="rating">Rating</option>
                </select>
            </div>

            <div class="products-grid" id="productsGrid"></div>
        </main>
    </div>

    <div class="overlay" id="overlay" onclick="toggleFilters()"></div>
@endsection

@push('scripts')
<script>
    // Sample Products Data
    const products = [
        { id: 1, name: "Wireless Headphones", category: "electronics", price: 2999, originalPrice: 5999, rating: 4.5, discount: 50, icon: "🎧" },
        { id: 2, name: "Smart Watch", category: "electronics", price: 4499, originalPrice: 8999, rating: 4.3, discount: 50, icon: "⌚" },
        { id: 3, name: "Cotton T-Shirt", category: "fashion", price: 499, originalPrice: 999, rating: 4.0, discount: 50, icon: "👕" },
        { id: 4, name: "Running Shoes", category: "fashion", price: 2499, originalPrice: 4999, rating: 4.7, discount: 50, icon: "👟" },
        { id: 5, name: "Coffee Maker", category: "home", price: 3499, originalPrice: 6999, rating: 4.2, discount: 50, icon: "☕" },
        { id: 6, name: "Blender", category: "home", price: 1999, originalPrice: 3999, rating: 4.4, discount: 50, icon: "🔪" },
        { id: 7, name: "Fiction Novel", category: "books", price: 299, originalPrice: 599, rating: 4.6, discount: 50, icon: "📚" },
        { id: 8, name: "Study Guide", category: "books", price: 399, originalPrice: 799, rating: 4.1, discount: 50, icon: "📖" },
        { id: 9, name: "Bluetooth Speaker", category: "electronics", price: 1999, originalPrice: 3999, rating: 4.5, discount: 50, icon: "🔊" },
        { id: 10, name: "Backpack", category: "fashion", price: 899, originalPrice: 1799, rating: 4.3, discount: 50, icon: "🎒" },
        { id: 11, name: "Desk Lamp", category: "home", price: 799, originalPrice: 1599, rating: 4.0, discount: 50, icon: "💡" },
        { id: 12, name: "Cookbook", category: "books", price: 449, originalPrice: 899, rating: 4.4, discount: 50, icon: "📕" },
    ];

    // New Arrivals Data
    const newArrivals = [
        { id: 13, name: "4K Webcam", category: "electronics", price: 3999, originalPrice: 7999, rating: 4.6, discount: 50, icon: "📹" },
        { id: 14, name: "Leather Jacket", category: "fashion", price: 3999, originalPrice: 7999, rating: 4.8, discount: 50, icon: "🧥" },
        { id: 15, name: "Smart Thermostat", category: "home", price: 2999, originalPrice: 5999, rating: 4.5, discount: 50, icon: "🌡️" },
        { id: 16, name: "Graphic Novel", category: "books", price: 699, originalPrice: 1399, rating: 4.7, discount: 50, icon: "📙" },
        { id: 17, name: "Wireless Mouse", category: "electronics", price: 899, originalPrice: 1799, rating: 4.4, discount: 50, icon: "🖱️" },
        { id: 18, name: "Sneakers", category: "fashion", price: 1999, originalPrice: 3999, rating: 4.6, discount: 50, icon: "👟" },
    ];

    let filteredProducts = [...products];

    // Display Products
    function displayProducts(productsToDisplay) {
        const grid = $('#productsGrid');
        grid.empty();

        productsToDisplay.forEach(product => {
            const stars = '★'.repeat(Math.floor(product.rating)) + '☆'.repeat(5 - Math.floor(product.rating));
            const card = `
                <div class="product-card" data-category="${product.category}" data-price="${product.price}" data-rating="${product.rating}">
                    <div class="product-image">
                        ${product.icon}
                        <span class="discount-badge">${product.discount}% OFF</span>
                    </div>
                    <div class="product-info">
                        <div class="product-title">${product.name}</div>
                        <div>
                            <span class="product-price">₹${product.price}</span>
                            <span class="product-original-price">₹${product.originalPrice}</span>
                        </div>
                        <div class="product-rating">
                            <span class="material-icons" style="font-size: 16px;">star</span>
                            ${product.rating}
                        </div>
                        <button class="add-to-cart" onclick="addToCart(${product.id})">
                            <span class="material-icons" style="font-size: 18px;">shopping_cart</span>
                            Add to Cart
                        </button>
                    </div>
                </div>
            `;
            grid.append(card);
        });
    }
    
    // Display New Arrivals
    // Note: home.html creates newArrivals array but I didn't see explicit function to display them?
    // Ah, lines 1046: <div id="newArrivalsGrid"></div>
    // I should implement displayNewArrivals or check if I missed it in home.html script.
    // I missed it in home.html view! 
    // Let's implement it similar to displayProducts.
    
    function displayNewArrivals() {
        const grid = $('#newArrivalsGrid');
        grid.empty();
        
        newArrivals.forEach(product => {
             const card = `
                <div class="product-card" style="box-shadow: none; border: 1px solid #eee;">
                    <div class="product-image" style="height: 200px; font-size: 60px;">
                        ${product.icon}
                    </div>
                    <div class="product-info">
                         <div class="product-title">${product.name}</div>
                         <div class="product-price">₹${product.price}</div>
                    </div>
                </div>
            `;
            grid.append(card);
        });
    }


    // Apply Filters
    function applyFilters() {
        const selectedCategories = $('.category-filter:checked').map(function() {
            return $(this).val();
        }).get();

        const selectedRatings = $('.rating-filter:checked').map(function() {
            return parseFloat($(this).val());
        }).get();

        const minPrice = parseInt($('#minPrice').val()) || 0;
        const maxPrice = parseInt($('#maxPrice').val()) || 999999;

        filteredProducts = products.filter(product => {
            const categoryMatch = selectedCategories.length === 0 || selectedCategories.includes(product.category);
            const priceMatch = product.price >= minPrice && product.price <= maxPrice;
            const ratingMatch = selectedRatings.length === 0 || selectedRatings.some(rating => product.rating >= rating);

            return categoryMatch && priceMatch && ratingMatch;
        });

        displayProducts(filteredProducts);
        
        if (window.innerWidth <= 768) {
            toggleFilters();
        }
    }

    // Sort Products
    function sortProducts(sortBy) {
        let sorted = [...filteredProducts];

        switch(sortBy) {
            case 'price-low':
                sorted.sort((a, b) => a.price - b.price);
                break;
            case 'price-high':
                sorted.sort((a, b) => b.price - a.price);
                break;
            case 'rating':
                sorted.sort((a, b) => b.rating - a.rating);
                break;
        }

        displayProducts(sorted);
    }

    // Add to Cart
    function addToCart(productId) {
        alert(`Product ${productId} added to cart!`);
    }

    // Toggle Filters on Mobile
    function toggleFilters() {
        $('#filters').toggleClass('active');
        $('#overlay').toggleClass('active');
    }

    // Slider
    let currentSlide = 0;
    const slides = $('.slide').length;

    function showSlide(n) {
        if (n >= slides) currentSlide = 0;
        if (n < 0) currentSlide = slides - 1;
        $('.slider').css('transform', `translateX(-${currentSlide * 100}%)`);
    }

    $('.prev').click(function() {
        currentSlide--;
        showSlide(currentSlide);
    });

    $('.next').click(function() {
        currentSlide++;
        showSlide(currentSlide);
    });

    // Auto slide
    setInterval(function() {
        currentSlide++;
        showSlide(currentSlide);
    }, 5000);

    // Initialize
    $(document).ready(function() {
        displayProducts(products);
        displayNewArrivals();
    });
</script>
@endpush
