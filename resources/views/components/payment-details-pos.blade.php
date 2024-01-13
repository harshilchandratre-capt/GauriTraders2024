<div class="payement">
    <div class="payment-top">
        <fieldset class="payment-method-group">
            <legend>Payment Method</legend>
            <div class="methods">
                <div class="cash-method active" onclick="openModal('cash')"><span>Ctrl + F1 - </span><b>Cash</b></div>
                <div class="card-method" onclick="openModal('card')"><span>Ctrl + F2 - </span><b>Credit/Debit Card</b></div>
                <div class="cheque-method" onclick="openModal('cheque')"><span>Ctrl + F3 - </span><b>Cheque</b></div>
                <div class="upi-method" onclick="openModal('upi')"><span>Ctrl + U - </span><b>UPI</b></div>
            </div>
            <div id="cashModal" class="modal">
                <div class="form-container">
                    <span class="close-btn" onclick="closeModal('cash')">&times;</span>
                    <h2>Cash Payment Form</h2>
                    <!-- Your cash payment form fields go here -->
                </div>
            </div>

            <div id="cardModal" class="modal">
                <div class="form-container">
                    <span class="close-btn" onclick="closeModal('card')">&times;</span>
                    <h2>Credit/Debit Card Payment Form</h2>
                    <!-- Your card payment form fields go here -->
                </div>
            </div>

            <div id="chequeModal" class="modal">
                <div class="form-container">
                    <span class="close-btn" onclick="closeModal('cheque')">&times;</span>
                    <h2>Cheque Payment Form</h2>
                    <!-- Your cheque payment form fields go here -->
                </div>
            </div>

            <div id="upiModal" class="modal">
                <div class="form-container">
                    <span class="close-btn" onclick="closeModal('upi')">&times;</span>
                    <h2>UPI Payment Form</h2>
                    <!-- Your UPI payment form fields go here -->
                </div>
            </div>

            <div class="overlay" onclick="closeAllModals()"></div>
        </fieldset>
        <!-- <fieldset> -->
        <div class="billing-amount-group">
            <div class="billing-amount">
                <div class="billing-amount-left">
                    <div class="billing-amount-field">
                        <span>Bill Amount</span>
                        <input type="number" name="Bill amount" id="net-amount" value="5725" readonly />
                    </div>
                    <div class="billing-amount-field">
                        <span>Deposit Amount</span>
                        <input type="number" name="Deposite amount" id="net-amount" value="5725" readonly />
                    </div>
                    <div class="billing-amount-field">
                        <span>SGST</span>
                        <input type="number" name="SGST" id="net-amount" value="5725" readonly />
                    </div>
                    <div class="billing-amount-field">
                        <span>CGST</span>
                        <input type="number" name="CGST" id="net-amount" value="5725" readonly />
                    </div>

                </div>
                <div class="billing-amount-right">
                    <div class="billing-amount-field-right">
                        <span>Customer Saving</span>
                        <input type="number" name="Customer Saving" id="net-amount" value="5725" readonly />
                    </div>
                    <div class="billing-amount-field-right">
                        <span>received Amount </span>
                        <input type="number" name="Received amount" id="net-amount" value="5725" readonly />
                    </div>
                    <div class="billing-amount-field-right">
                        <span>Remaining Amount</span>
                        <input type="number" name="Remaining Amount" id="net-amount" value="5725" readonly />
                    </div>
                </div>


            </div>

        </div>
    </div>
    <div class="payment-bottom">
        <div class="table">
            <p> Table contant here</p>
        </div>
    </div>



</div>