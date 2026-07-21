<?php
/*template name: checkout*/
get_header(); ?>

<main id="checkout_page" class="checkout-main">
    <div class="container">
        <div class="row g-0 basket-layout">
            <!-- Left Side Section -->
            <div class="col-12 col-lg-7 checkout-left-section">
                <div class="left-content">
                    <div class="top">
                        <div class="heading">
                            <input type="checkbox" name="subscribe" id="subscribe">
                            <label for="subscribe">Subscribe to Newsletter</label>
                        </div>
                        <p>Sign up with your email to receive news and updates from The Last Drop.</p>
                    </div>
                    <div class="form">
                        <form action="#" method="POST" class="checkout-form" id="checkoutForm">
                            <!-- Section 1: Your Details -->
                            <div class="form-section">
                                <div class="section-title">
                                    <span class="step-number">1</span>
                                    <h2>Your Details</h2>
                                </div>
                                <p class="required-text">*Required Field</p>

                                <div class="form-group full-width">
                                    <label for="email">Email</label>
                                    <input type="email" id="email" name="email" placeholder="Email*" required>
                                </div>

                                <div class="form-row">
                                    <div class="form-group half-width">
                                        <label for="first_name">First name</label>
                                        <input type="text" id="first_name" name="first_name" placeholder="First name*"
                                            required>
                                    </div>
                                    <div class="form-group half-width">
                                        <label for="last_name">Last name</label>
                                        <input type="text" id="last_name" name="last_name" placeholder="Last name*"
                                            required>
                                    </div>
                                </div>

                                <div class="form-group full-width">
                                    <label for="phone">Phone</label>
                                    <input type="tel" id="phone" name="phone" placeholder="Phone*" required>
                                </div>

                                <div class="form-group full-width">
                                    <label for="company">Company name</label>
                                    <input type="text" id="company" name="company" placeholder="Company name">
                                </div>

                                <div class="form-group full-width">
                                    <label class="section-label">Billing Address</label>
                                </div>

                                <div class="form-group full-width mb-0">
                                    <label for="address_search">Address</label>
                                    <input type="text" id="address_search" name="address_search"
                                        placeholder="Start typing a postcode, street or address">
                                </div>
                                <div class="manual-address-link">
                                    <a href="#">Enter Address Manually</a>
                                </div>

                                <div class="form-row mt-3">
                                    <div class="form-group half-width">
                                        <label for="address_1">Address Line 1*</label>
                                        <input type="text" id="address_1" name="address_1" placeholder="Address Line 1"
                                            required>
                                    </div>
                                    <div class="form-group half-width">
                                        <label for="address_2">Address Line 2</label>
                                        <input type="text" id="address_2" name="address_2" placeholder="Address Line 2">
                                    </div>
                                </div>

                                <div class="form-group full-width">
                                    <label for="city">City*</label>
                                    <input type="text" id="city" name="city" placeholder="City" required>
                                </div>

                                <div class="form-row">
                                    <div class="form-group half-width">
                                        <label for="postcode">Postcode*</label>
                                        <input type="text" id="postcode" name="postcode" placeholder="Postcode"
                                            required>
                                    </div>
                                    <div class="form-group half-width">
                                        <label for="country">Country*</label>
                                        <div class="custom-select">
                                            <select id="country" name="country" required>
                                                <option value="" disabled selected>Select</option>
                                                <option value="IE">Ireland</option>
                                                <option value="GB">United Kingdom</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr class="section-divider">

                            <!-- Section 2: Payment -->
                            <div class="form-section">
                                <div class="section-title">
                                    <span class="step-number">2</span>
                                    <h2>Payment</h2>
                                </div>

                                <div class="payment-method">
                                    <label class="radio-container">
                                        <input type="radio" name="payment_method" value="card" checked>
                                        <span class="radio-checkmark"></span>
                                        Credit/Debit Card
                                    </label>

                                    <div class="payment-details card-details">
                                        <div class="form-row">
                                            <div class="form-group half-width">
                                                <label for="card_type">Card Type*</label>
                                                <div class="custom-select">
                                                    <select id="card_type" name="card_type" required>
                                                        <option value="" disabled selected>Card Type</option>
                                                        <option value="visa">Visa</option>
                                                        <option value="mastercard">Mastercard</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group half-width">
                                                <label for="name_on_card">Name on Card</label>
                                                <input type="text" id="name_on_card" name="name_on_card"
                                                    placeholder="Card Number">
                                            </div>
                                        </div>

                                        <div class="form-row align-items-end">
                                            <div class="form-group half-width">
                                                <label for="card_number">Card Number*</label>
                                                <input type="text" id="card_number" name="card_number"
                                                    placeholder="Card Number" required>
                                            </div>
                                            <div class="form-group quarter-width expiry-group">
                                                <label>Expiry Date (MM/YY)</label>
                                                <div class="expiry-inputs">
                                                    <input type="text" name="exp_month" placeholder="00" maxlength="2">
                                                    <span class="separator">/</span>
                                                    <input type="text" name="exp_year" placeholder="00" maxlength="2">
                                                </div>
                                            </div>
                                            <div class="form-group quarter-width">
                                                <label for="cvv">CVV</label>
                                                <input type="text" id="cvv" name="cvv" placeholder="***" maxlength="4">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="payment-method mt-4">
                                    <label class="radio-container">
                                        <input type="radio" name="payment_method" value="paypal">
                                        <span class="radio-checkmark"></span>
                                        Paypal
                                    </label>
                                </div>

                                <div class="terms-group mt-5">
                                    <label class="checkbox-container">
                                        <input type="checkbox" name="terms" required checked>
                                        <span class="checkmark"></span>
                                        I have read and agree to the website <a href="#">terms and conditions</a>
                                    </label>
                                </div>

                                <button type="submit" class="btn-place-order mt-5">Place Order</button>
                                <button type="button" class="btn-paypal mt-3">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/paypal-logo.png"
                                        alt="PayPal">
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Right Side Section -->
            <div class="col-12 col-lg-5 basket-right-section">
                <div class="basket-right-content">
                    <?php
                    $basket_items = isset($_SESSION['basket_items']) ? $_SESSION['basket_items'] : array();
                    $subtotal = 0;
                    foreach ($basket_items as $item) {
                        $subtotal += ($item['amount'] * $item['quantity']);
                    }
                    ?>
                    <div class="summary-top text-end mb-4">
                        <p class="discount-link">Have a discount code?</p>
                    </div>

                    <div class="summary-row">
                        <span class="summary-label">Subtotal</span>
                        <span class="summary-val">€<?php echo number_format($subtotal, 2); ?></span>
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
                        <span class="total-val">€<?php echo number_format($total, 2); ?></span>
                    </div>

                    <div class="help-box">
                        <h4 class="help-title laima-font">Help with your purchase?</h4>
                        <p class="help-desc">Having difficulty making a purchase? Call a member of our customer service
                            team for help on +353 (21) 471 8282 or email us at admin@thelastdropcobh.com.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Thank You Modal -->
    <div id="thankYouModal" class="modal"
        style="display:none; position:fixed; z-index:9999; left:0; top:0; width:100%; height:100%; background-color:rgba(0,0,0,0.5);">
        <div class="modal-content"
            style="background-color:#fefefe; margin:15% auto; padding:40px; border:1px solid #888; width:80%; max-width:500px; text-align:center; border-radius:8px;">
            <h2 class="laima-font text-gold">Thank You!</h2>
            <p>Your order has been processed successfully. An email has been sent with the voucher details.</p>
            <a href="<?php echo home_url('/gift-voucher/'); ?>" class="btn btn-gold mt-4">OK</a>
        </div>
    </div>

    <!-- Loader Overlay -->
    <style>
        .page-loader-spinner {
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
    <div id="pageLoaderOverlay"
        style="display:none; position:fixed; z-index:9999; left:0; top:0; width:100%; height:100%; background-color:rgba(255,255,255,0.7); align-items:center; justify-content:center;">
        <div class="page-loader-spinner"></div>
    </div>
</main>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const checkoutForm = document.getElementById('checkoutForm');
        const thankYouModal = document.getElementById('thankYouModal');
        const loaderOverlay = document.getElementById('pageLoaderOverlay');

        if (checkoutForm) {
            checkoutForm.addEventListener('submit', function (e) {
                e.preventDefault();

                if (loaderOverlay) loaderOverlay.style.display = 'flex';

                const formData = new FormData(checkoutForm);
                formData.append('action', 'process_checkout');

                const submitBtn = checkoutForm.querySelector('.btn-place-order');
                submitBtn.disabled = true;
                submitBtn.textContent = 'Processing...';

                fetch(ajax_url, {
                    method: 'POST',
                    body: formData
                })
                    .then(response => response.json())
                    .then(data => {
                        if (loaderOverlay) loaderOverlay.style.display = 'none';
                        if (data.success) {
                            thankYouModal.style.display = 'block';
                        } else {
                            alert('Error: ' + data.data.message);
                            submitBtn.disabled = false;
                            submitBtn.textContent = 'Place Order';
                        }
                    })
                    .catch(error => {
                        if (loaderOverlay) loaderOverlay.style.display = 'none';
                        alert('An error occurred. Please try again.');
                        submitBtn.disabled = false;
                        submitBtn.textContent = 'Place Order';
                    });
            });
        }
    });
</script>

<?php get_footer(); ?>