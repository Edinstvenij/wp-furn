<article class="popup-order">
    <div class="popup-order__row">
        <div class="popup-order__wrapper">
            <form class="popup-order__form" action="<?= admin_url( 'admin-ajax.php?action=send_message' ) ?>">
                <div class="popup-order__form-item">
                    <input type="hidden" name="form-name" value="Check Price">
                    <input type="hidden" name="product" value="<?= the_title(); ?>">
                    <input class="popup-order__form-input" id="name" type="text" name="name" placeholder="YOUR NAME" required>
                </div>
                <div class="popup-order__form-item">
                    <input class="popup-order__form-input" id="email" type="email" name="email" placeholder="YOUR EMAIL" required>
                </div>
                <div class="popup-order__form-item">
                    <input class="popup-order__form-input" id="tel" type="tel" name="tel" placeholder="YOUR PHONE" required>
                </div>
                <div class="popup-order__form-item">
                    <input class="popup-order__form-input" id="country" type="text" name="country" placeholder="COUNTRY OF DELIVERY" required>
                </div>
                <div class="popup-order__form-item">
                    <input class="popup-order__form-input" id="address" type="text" name="address" placeholder="Address of delivery" required>
                </div>
                <div class="popup-order__form-item">
                    <textarea class="popup-order__form-input" name="massege" rows="4" placeholder="YOUR COMMENT"></textarea>
                </div>

                <button class="popup-order__form-btn" type="submit">SEND</button>
            </form>
        </div>
        <div class="header__nav-overlay"></div>
    </div>
</article>