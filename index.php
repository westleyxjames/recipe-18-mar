<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Recipe Journal - Your Source for Delicious Home-Cooked Meals</title>
  <meta name="description" content="Discover delicious home-cooked recipes, cooking tips, and meal planning advice for families and home cooks.">
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <!-- Header -->
  <header>
    <div class="header-container">
      <a href="index.html" class="logo">Home Recipe Journal</a>
      <button class="mobile-menu-btn">☰</button>
      <nav>
        <ul class="nav-menu">
          <li><a href="index.html">Home</a></li>
          <li><a href="recipes.html">Recipes</a></li>
          <li><a href="blog.html">Blog</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="hero" style="background-image: url('https://images.unsplash.com/photo-1556910103-1c02745aae4d?w=1600');">
    <div class="hero-content">
      <h1>Welcome to Home Recipe Journal</h1>
      <p>Your trusted source for delicious, family-friendly recipes</p>
      <a href="recipes.html" class="btn btn-primary">Explore Recipes</a>
    </div>
  </section>

  <!-- Featured Recipes -->
  <section style="background: #FAF7F2; padding: 4rem 0;">
    <div class="container-wide">
      <h2 class="section-title">Featured Recipes</h2>
      <div class="grid grid-3">
        <a href="recipes/classic-new-york-cheesecake.html" class="card">
          <img src="https://images.unsplash.com/photo-1595677825885-3744fec631cf?w=600" alt="Classic New York Cheesecake">
          <div class="card-body">
            <h3 class="card-title">Classic New York Cheesecake</h3>
            <p class="card-text">Rich and creamy New York-style cheesecake with a graham cracker crust</p>
            <div style="display: flex; gap: 1rem; font-size: 0.875rem; color: #666;">
              <span>⏱️ 5 hours</span>
              <span>👥 12 servings</span>
            </div>
          </div>
        </a>

        <a href="recipes/garlic-butter-roasted-chicken.html" class="card">
          <img src="https://images.unsplash.com/photo-1710143608680-6ed21d27fd82?w=600" alt="Garlic Butter Roasted Chicken">
          <div class="card-body">
            <h3 class="card-title">Garlic Butter Roasted Chicken</h3>
            <p class="card-text">Juicy whole chicken roasted with garlic herb butter</p>
            <div style="display: flex; gap: 1rem; font-size: 0.875rem; color: #666;">
              <span>⏱️ 1 hour 45 min</span>
              <span>👥 6 servings</span>
            </div>
          </div>
        </a>

        <a href="recipes/chocolate-chip-cookies.html" class="card">
          <img src="https://images.unsplash.com/photo-1499636136210-6f4ee915583e?w=600" alt="Chocolate Chip Cookies">
          <div class="card-body">
            <h3 class="card-title">Perfect Chocolate Chip Cookies</h3>
            <p class="card-text">Classic chocolate chip cookies that are crispy on the outside, chewy inside</p>
            <div style="display: flex; gap: 1rem; font-size: 0.875rem; color: #666;">
              <span>⏱️ 25 minutes</span>
              <span>👥 24 cookies</span>
            </div>
          </div>
        </a>
      </div>
      <div class="text-center" style="margin-top: 3rem;">
        <a href="recipes.html" class="btn btn-secondary">View All Recipes</a>
      </div>
    </div>
  </section>

  <!-- Why Choose Us -->
  <section style="background: white; padding: 4rem 0;">
    <div class="container">
      <h2 class="section-title">Why Choose Us</h2>
      <div class="grid grid-3">
        <div style="text-align: center; padding: 2rem;">
          <div style="font-size: 3rem; margin-bottom: 1rem;">👨‍🍳</div>
          <h3 style="margin-bottom: 1rem;">Tested Recipes</h3>
          <p style="color: #666;">Every recipe is thoroughly tested in our kitchen to ensure perfect results</p>
        </div>
        <div style="text-align: center; padding: 2rem;">
          <div style="font-size: 3rem; margin-bottom: 1rem;">🥗</div>
          <h3 style="margin-bottom: 1rem;">Healthy Options</h3>
          <p style="color: #666;">Nutritious meals that don't compromise on flavor for you and your family</p>
        </div>
        <div style="text-align: center; padding: 2rem;">
          <div style="font-size: 3rem; margin-bottom: 1rem;">⏰</div>
          <h3 style="margin-bottom: 1rem;">Time-Friendly</h3>
          <p style="color: #666;">Quick and easy recipes perfect for busy weeknight dinners</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Blog Preview -->
  <section style="background: #FAF7F2; padding: 4rem 0;">
    <div class="container-wide">
      <h2 class="section-title">From Our Blog</h2>
      <div class="grid grid-3">
        <a href="blog/essential-kitchen-tools.html" class="blog-card">
          <img src="https://images.unsplash.com/photo-1556911220-bff31c812dba?w=600" alt="Kitchen Tools">
          <div class="blog-card-body">
            <span class="blog-category">Kitchen Tips</span>
            <h3 style="font-size: 1.25rem; margin-bottom: 0.5rem; color: #8B4513;">10 Essential Kitchen Tools Every Home Cook Needs</h3>
            <p style="color: #666; font-size: 0.875rem;">Discover the must-have kitchen tools that will elevate your cooking...</p>
            <div class="blog-meta" style="margin-top: auto;">
              <span>Sarah Mitchell</span>
              <span>5 min read</span>
            </div>
          </div>
        </a>

        <a href="blog/seasonal-cooking-winter.html" class="blog-card">
          <img src="https://i.ibb.co/r2vymHHZ/img001.jpg" alt="Winter Vegetables">
          <div class="blog-card-body">
            <span class="blog-category">Seasonal Cooking</span>
            <h3 style="font-size: 1.25rem; margin-bottom: 0.5rem; color: #8B4513;">Embracing Seasonal Cooking: Winter Edition</h3>
            <p style="color: #666; font-size: 0.875rem;">Learn how to cook with winter's best produce and create comforting meals...</p>
            <div class="blog-meta" style="margin-top: auto;">
              <span>David Chen</span>
              <span>6 min read</span>
            </div>
          </div>
        </a>

        <a href="blog/global-spice-guide.html" class="blog-card">
          <img src="https://i.ibb.co/h0hLBDD/download.jpg" alt="Spices">
          <div class="blog-card-body">
            <span class="blog-category">Cooking Tips</span>
            <h3 style="font-size: 1.25rem; margin-bottom: 0.5rem; color: #8B4513;">A Global Guide to Essential Spices</h3>
            <p style="color: #666; font-size: 0.875rem;">Explore spices from around the world and learn how to use them...</p>
            <div class="blog-meta" style="margin-top: auto;">
              <span>Sarah Mitchell</span>
              <span>6 min read</span>
            </div>
          </div>
        </a>
      </div>
      <div class="text-center" style="margin-top: 3rem;">
        <a href="blog.html" class="btn btn-secondary">Read More Articles</a>
      </div>
    </div>
  </section>

  <!-- Newsletter -->
  <section style="background: #FF6B35; color: white; padding: 4rem 0;">
    <div class="container text-center">
      <h2 style="color: white; margin-bottom: 1rem;">Get Weekly Recipe Inspiration</h2>
      <p style="font-size: 1.125rem; margin-bottom: 2rem; color: #fff4ed;">Join our newsletter for new recipes, cooking tips, and seasonal menus delivered to your inbox</p>
      <form class="newsletter-form" style="max-width: 500px; margin: 0 auto; display: flex; gap: 1rem;">
        <input type="email" placeholder="Enter your email" required style="flex: 1; padding: 0.75rem; border-radius: 0.5rem; border: none; font-size: 1rem;">
        <button type="submit" class="btn" style="background: white; color: #FF6B35;">Subscribe</button>
      </form>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="footer-content">
      <div class="footer-section">
        <h4>Home Recipe Journal</h4>
        <p style="color: #f0e5d8;">Your trusted source for delicious, family-friendly recipes and cooking inspiration.</p>
      </div>
      <div class="footer-section">
        <h4>Quick Links</h4>
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="recipes.html">Recipes</a></li>
          <li><a href="blog.html">Blog</a></li>
          <li><a href="about.html">About Us</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
      </div>
      <div class="footer-section">
        <h4>Categories</h4>
        <ul>
          <li><a href="recipes.html">Breakfast</a></li>
          <li><a href="recipes.html">Main Courses</a></li>
          <li><a href="recipes.html">Desserts</a></li>
          <li><a href="recipes.html">Soups & Salads</a></li>
        </ul>
      </div>
      <div class="footer-section">
        <h4>Legal</h4>
        <ul>
          <li><a href="legal/legal.html">Legal Information</a></li>
          <li><a href="legal/privacy.html">Privacy Policy</a></li>
          <li><a href="legal/terms.html">Terms of Service</a></li>
          <li><a href="legal/cookies.html">Cookie Policy</a></li>
          <li><a href="legal/disclaimer.html">Disclaimer</a></li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <p>&copy; 2026 Home Recipe Journal. All rights reserved.</p>
    </div>
  </footer>

  <!-- Cookie Consent Banner -->
  <div class="cookie-banner">
    <div class="cookie-content">
      <div>
        <strong>We value your privacy</strong>
        <p style="margin-top: 0.5rem; color: #666;">We use cookies to enhance your browsing experience and analyze our traffic. By clicking "Accept", you consent to our use of cookies. <a href="legal/cookies.html" style="color: #FF6B35;">Learn more</a></p>
      </div>
      <div class="cookie-buttons">
        <button id="accept-cookies" class="btn btn-primary">Accept</button>
        <button id="decline-cookies" class="btn btn-secondary">Decline</button>
      </div>
    </div>
  </div>

  <script src="js/main.js"></script>
</body>
</html>
