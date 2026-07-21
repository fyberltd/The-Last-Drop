<?php
/*template name: gift-voucher*/
get_header(); ?>

<main id="gift_voucher_page" class="gift-voucher-main">
    <section class="gift-voucher-hero">
        <img src="<?php echo get_template_directory_uri(); ?>/images/website-identity/gift-voucher-hero-bg.jpg" class="hero-image">
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="hero-title laima-font">Give the Gift of </br> The Last Drop</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="gift-card">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="img-data">
                        <img src="https://thelastdropcobh.com/wp-content/uploads/2026/03/git-voucher-new.gif" alt="">
                        <div class="offer">
                            <h6>SUMMER </br> <span>OFFER</span> </h6>
                            <p>Spend €50 </br> save 5%</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <h1 class="text-gold">Gift Card</h1>
                    <p>Treat someone to memorable food, signature drinks and a warm Cobh welcome with a digital gift voucher from The Last Drop. Available from £20 upwards and delivered straight by email.</p>
                    <p class="text-bold">All vouchers are delivered by email. No physical voucher is required.</p>

                    <div class="gift-voucher-form-wrap">
                        <form class="gift-voucher-form" id="giftVoucherForm" method="post" action="">
                            
                            <div class="voucher-amount-block">
                                <label class="section-label">Voucher Amount:</label>

                                <div class="voucher-amount-row">
                                    <div class="voucher-select-group">
                                        <label for="voucher_amount_select" class="field-helper">Select a voucher value</label>
                                        <select id="voucher_amount_select" name="voucher_amount_select" class="voucher-select">
                                            <option value="20">€20</option>
                                            <option value="50" selected>€50</option>
                                            <option value="100">€100</option>
                                            <option value="150">€150</option>
                                            <option value="200">€200</option>
                                        </select>
                                    </div>

                                    <div class="voucher-or-text">or enter a custom amount</div>

                                    <div class="voucher-custom-group">
                                        <label for="voucher_custom_amount" class="screen-reader-text">Custom voucher amount</label>
                                        <input
                                            type="number"
                                            id="voucher_custom_amount"
                                            name="voucher_custom_amount"
                                            class="voucher-custom-input"
                                            placeholder="€50.00"
                                            min="20"
                                            step="0.01"
                                        >
                                    </div>
                                </div>

                                <div class="voucher-total" id="voucherTotal"> <p> Total: €50.00 </p></div>
                                <div class="voucher-min-note"> <p> *Minimum voucher amount is €20. </p></div>
                            </div>

                            <div class="addressee-block">
                                <h3 class="addressee-title">Addressee Details:</h3>

                                <div class="name-row">
                                    <div class="field-group">
                                        <input
                                            type="text"
                                            id="addressee_first_name"
                                            name="addressee_first_name"
                                            class="text-input"
                                            placeholder="First name*"
                                            required
                                        >
                                    </div>

                                    <div class="field-group">
                                        <input
                                            type="text"
                                            id="addressee_last_name"
                                            name="addressee_last_name"
                                            class="text-input"
                                            placeholder="Last name*"
                                            required
                                        >
                                    </div>
                                </div>

                                <div class="field-group full-width">
                                    <input
                                        type="email"
                                        id="addressee_email"
                                        name="addressee_email"
                                        class="text-input"
                                        placeholder="Email*"
                                        required
                                    >
                                </div>

                                <div class="field-group full-width">
                                    <textarea
                                        id="gift_message"
                                        name="gift_message"
                                        class="message-textarea"
                                        maxlength="500"
                                    ></textarea>
                                </div>

                                <div class="required-note">
                                    <p>
                                        *Field Required. Please fill in the required fields to proceed.
                                    </p>
                                </div>

                                <button type="submit" class="gift-submit-btn">Add to Basket</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="occasion-gift">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="text-gold">A Gift for Any Occasion</h2>
                    <p>Whether it’s a birthday, anniversary, thank you or simply a treat for someone special, a gift voucher for The Last Drop offers the chance to enjoy great food, crafted drinks and time well spent in one of Cobh’s most welcoming dining destinations.</p>
                    <p>Choose any value from £20 upwards, complete your purchase online, and the voucher will be sent by email — ready to use or forward on as a gift.</p>
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part('z-components/call-to-action'); ?>

</main>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        const selectField = document.getElementById('voucher_amount_select');
        const customField = document.getElementById('voucher_custom_amount');
        const totalText = document.getElementById('voucherTotal');

        function updateVoucherTotal() {
            let amount = parseFloat(selectField.value);

            if (customField.value && parseFloat(customField.value) >= 20) {
                amount = parseFloat(customField.value);
            }

            totalText.textContent = 'Total: €' + amount.toFixed(2);
        }

        selectField.addEventListener('change', function () {
            if (customField.value !== '') {
                customField.value = '';
            }
            updateVoucherTotal();
        });

        customField.addEventListener('input', function () {
            updateVoucherTotal();
        });

        updateVoucherTotal();
    });
</script>

<?php get_footer(); ?>