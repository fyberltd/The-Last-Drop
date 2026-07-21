<?php
/*template name: basket*/
get_header(); ?>

<main id="basket_page" class="basket-main">
    <div class="container">
        <div class="row g-0 basket-layout">
            <!-- Left Side Section -->
            <div class="col-12 col-lg-7 basket-left-section">
                <div class="basket-left-content">
                    <h1 class="basket-title laima-font">Your Basket.</h1>
                    <?php
                    $basket_items = isset($_SESSION['basket_items']) ? $_SESSION['basket_items'] : array();
                    $total_items = 0;
                    $subtotal = 0;
                    foreach ($basket_items as $item) {
                        $total_items += $item['quantity'];
                        $subtotal += ($item['amount'] * $item['quantity']);
                    }
                    ?>
                    <h5 class="basket-item-count"><?php echo esc_html($total_items); ?>
                        Item<?php echo $total_items !== 1 ? 's' : ''; ?>.</h5>

                    <!-- Main Product(s) -->
                    <div class="basket-items-container">
                        <?php if (empty($basket_items)): ?>
                            <p>Your basket is currently empty.</p>
                            <a href="https://thelastdropcobh.com/gift-voucher"
                                class="btn btn-gold d-block text-center mt-4">Add Gift Card</a>
                        <?php else: ?>
                            <?php foreach ($basket_items as $item): ?>
                                <div class="main-basket-item" data-item-id="<?php echo esc_attr($item['id']); ?>">
                                    <div class="item-info-wrap">
                                        <div class="product-thumb-wrap">
                                            <?php if ($item['type'] === 'gift_card'): ?>
                                                <img src="<?php echo get_template_directory_uri(); ?>/images/website-identity/TLD-Gift-Card-shadow.png"
                                                    alt="Gift Card" class="product-thumb">
                                            <?php else: ?>
                                                <img src="https://thelastdropcobh.com/wp-content/uploads/2026/06/basket-thumbnail.png"
                                                    alt="Product" class="product-thumb">
                                            <?php endif; ?>
                                        </div>
                                        <div class="item-details">
                                            <p class="product-name">
                                                <?php echo $item['type'] === 'gift_card' ? 'Gift Card' : 'Product'; ?>
                                            </p>
                                            <?php if ($item['type'] === 'gift_card'): ?>
                                                <p class="addressee-details">Addressee
                                                    Details:<br><?php echo esc_html($item['first_name'] . ' ' . $item['last_name'] . ', ' . $item['email']); ?>
                                                </p>
                                            <?php endif; ?>
                                            <p class="product-price">€<?php echo number_format($item['amount'], 2); ?></p>
                                            <div class="quantity-selector">
                                                <button class="qty-btn btn-minus"
                                                    data-item-id="<?php echo esc_attr($item['id']); ?>">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/minus.png"
                                                        alt="minus">
                                                </button>
                                                <span class="quantity-value"><?php echo esc_html($item['quantity']); ?></span>
                                                <button class="qty-btn btn-plus"
                                                    data-item-id="<?php echo esc_attr($item['id']); ?>">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/plus.png"
                                                        alt="plus">
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn-remove" data-item-id="<?php echo esc_attr($item['id']); ?>">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/icons/close.png"
                                            alt="remove">
                                    </button>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>

                    <!-- <h3 class="basket-subtitle laima-font mt-5">Complete your purchase.</h3>
                    <p class="purchase-desc mb-4">Add popular accessories to protect, enhance you Fuego purchase or add
                        from our amazing selection of food and start your journey into whole new cooking experience.</p> -->

                    <!-- <div class="accessory-items">
                        <div class="accessory-item">
                            <div class="accessory-info-wrap">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/website-identity/TLD-Gift-Card-shadow.png"
                                    alt="Lorem ipsum" class="accessory-thumb">
                                <div class="accessory-details">
                                    <p class="accessory-name">Lorem ipsum</p>
                                    <div class="stars">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/icons/star-filled.png"
                                            alt="star">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/icons/star-filled.png"
                                            alt="star">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/icons/star-filled.png"
                                            alt="star">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/icons/star-filled.png"
                                            alt="star">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/icons/star-filled.png"
                                            alt="star">
                                    </div>
                                    <p class="accessory-price"><span class="price-discounted">€47.50</span> <del
                                            class="price-original">€50.00</del> <span class="price-save">(Save
                                            10%)</span></p>
                                </div>
                            </div>
                            <button class="btn btn-gold">Add</button>
                        </div>

                        <div class="accessory-item">
                            <div class="accessory-info-wrap">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/website-identity/TLD-Gift-Card-shadow.png"
                                    alt="Lorem ipsum" class="accessory-thumb">
                                <div class="accessory-details">
                                    <p class="accessory-name">Lorem ipsum</p>
                                    <div class="stars">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/icons/star-filled.png"
                                            alt="star">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/icons/star-filled.png"
                                            alt="star">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/icons/star-filled.png"
                                            alt="star">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/icons/star-filled.png"
                                            alt="star">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/icons/star-filled.png"
                                            alt="star">
                                    </div>
                                    <p class="accessory-price">€55.00</p>
                                </div>
                            </div>
                            <button class="btn btn-gold">Add</button>
                        </div>
                    </div> -->
                </div>
            </div>

            <!-- Right Side Section -->
            <div class="col-12 col-lg-5 basket-right-section">
                <div class="basket-right-content">
                    <div class="summary-top text-end mb-4">
                        <p class="discount-link">Have a discount code?</p>
                    </div>

                    <div class="summary-row">
                        <span class="summary-label">Subtotal</span>
                        <span class="summary-val"
                            id="basket-subtotal">€<?php echo number_format($subtotal, 2); ?></span>
                    </div>

                    <div class="summary-row align-items-center" style="display:none;">
                        <span class="summary-label">Coupon</span>
                        <div class="coupon-tag">
                            <span class="coupon-code">LIGHTUPSUMMER</span>
                            <button class="btn-remove-coupon">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/icons/close.png"
                                    alt="remove">
                            </button>
                        </div>
                    </div>

                    <div class="summary-row savings-row" style="display:none;">
                        <span class="summary-label">Savings</span>
                        <span class="summary-val">€234.00</span>
                    </div>

                    <div class="summary-row">
                        <span class="summary-label">Shipping</span>
                        <span class="summary-val">€9.50</span>
                    </div>

                    <div class="summary-row mb-4">
                        <span class="summary-label">Long Item Delivery Surcharge</span>
                    </div>

                    <hr class="summary-divider">

                    <?php $total = $subtotal > 0 ? $subtotal + 9.50 : 0; ?>
                    <div class="summary-total-row">
                        <span class="total-label">Total</span>
                        <span class="total-val" id="basket-total">€<?php echo number_format($total, 2); ?></span>
                    </div>

                    <a href="<?php echo home_url('/checkout/'); ?>" id="checkoutBtn"
                        class="btn btn-gold d-block text-center mt-4">Checkout</a>

                    <div class="help-box">
                        <h4 class="help-title laima-font">Help with your purchase?</h4>
                        <p class="help-desc">Having difficulty making a purchase? Call a member of our customer service
                            team for help on +353 (21) 471 8282 or email us at admin@thelastdropcobh.com.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Loader Overlay -->
    <style>
        .basket-loader-spinner {
            border: 4px solid rgba(0, 0, 0, 0.1);
            border-top: 4px solid #c9a050;
            /* Using gold-like color */
            border-radius: 50%;
            width: 50px;
            height: 50px;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>
    <div id="basketLoaderOverlay"
        style="display:none; position:fixed; z-index:9999; left:0; top:0; width:100%; height:100%; background-color:rgba(255,255,255,0.7); align-items:center; justify-content:center;">
        <div class="basket-loader-spinner"></div>
    </div>
</main>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const container = document.querySelector('.basket-items-container');
        const loaderOverlay = document.getElementById('basketLoaderOverlay');
        const checkoutBtn = document.getElementById('checkoutBtn');

        if (checkoutBtn) {
            checkoutBtn.addEventListener('click', function () {
                if (loaderOverlay) loaderOverlay.style.display = 'flex';
            });
        }

        if (container) {
            container.addEventListener('click', function (e) {
                const btnMinus = e.target.closest('.btn-minus');
                const btnPlus = e.target.closest('.btn-plus');
                const btnRemove = e.target.closest('.btn-remove');

                if (btnMinus) {
                    e.preventDefault();
                    const itemId = btnMinus.getAttribute('data-item-id');
                    const qtySpan = btnMinus.nextElementSibling;
                    let currentQty = parseInt(qtySpan.textContent);
                    if (currentQty > 0) {
                        updateCartItem(itemId, currentQty - 1);
                    }
                }

                if (btnPlus) {
                    e.preventDefault();
                    const itemId = btnPlus.getAttribute('data-item-id');
                    const qtySpan = btnPlus.previousElementSibling;
                    let currentQty = parseInt(qtySpan.textContent);
                    updateCartItem(itemId, currentQty + 1);
                }

                if (btnRemove) {
                    e.preventDefault();
                    const itemId = btnRemove.getAttribute('data-item-id');
                    removeCartItem(itemId);
                }
            });
        }

        function updateCartItem(itemId, quantity) {
            if (loaderOverlay) loaderOverlay.style.display = 'flex';
            const formData = new FormData();
            formData.append('action', 'update_basket_qty');
            formData.append('item_id', itemId);
            formData.append('quantity', quantity);

            fetch(ajax_url, {
                method: 'POST',
                body: formData
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        location.reload();
                    }
                });
        }

        function removeCartItem(itemId) {
            if (loaderOverlay) loaderOverlay.style.display = 'flex';
            const formData = new FormData();
            formData.append('action', 'remove_basket_item');
            formData.append('item_id', itemId);

            fetch(ajax_url, {
                method: 'POST',
                body: formData
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        location.reload();
                    }
                });
        }
    });
</script>

<?php get_footer(); ?>