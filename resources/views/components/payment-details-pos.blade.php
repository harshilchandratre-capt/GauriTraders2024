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
                <div class="popup">
                    <div class="popup-title">
                        <div class="header">
                            <h2>Cash</h2>
                            <span class="close-btn" onclick="closeModal('cash')"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 14.8594L7.92971 7.92972M7.92971 7.92972L14.8594 1M7.92971 7.92972L1 1M7.92971 7.92972L14.8594 14.8594" stroke="black" stroke-width="1.9827" stroke-linecap="round" stroke-linejoin="round" />
                                </svg></span>

                        </div>
                        <div class="separator"></div>


                    </div>
                    <div class="container">
                        <div class="content">
                            <div class="input-field">
                                <label for="transaction-id">Cash Amount:</label>
                                <input type="text" id="transaction-id" placeholder="529" />
                            </div>
                            <div class="buttons">
                                <button class="save-btn">Save</button>
                                <button class="cancel-btn">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div id="cardModal" class="modal">
                <div class="popup-card">
                    <div class="popup-title">
                        <div class="header">
                            <h2>Credit/Debit Card Method</h2>
                            <span class="close-btn" onclick="closeModal('card')"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 14.8594L7.92971 7.92972M7.92971 7.92972L14.8594 1M7.92971 7.92972L1 1M7.92971 7.92972L14.8594 14.8594" stroke="black" stroke-width="1.9827" stroke-linecap="round" stroke-linejoin="round" />
                                </svg></span>

                        </div>
                        <div class="separator"></div>


                    </div>
                    <div class="container">
                        <div class="content">
                            <div class="input-field">
                                <label for="transaction-id">Transaction ID:</label>
                                <input type="text" id="transaction-id" placeholder="57987298529" readonly />
                            </div>
                            <div class="input-field">
                                <label for="upi-amount">card 1:</label>
                                <input type="number" id="card 1" placeholder="6525 5354 5658 4547" readonly />
                            </div>
                            <div class="input-field">
                                <label for="upi-amount">card 2:</label>
                                <input type="number" id="card 1" placeholder="6525 5354 5658 4547" readonly />
                            </div>
                        </div>
                        <div class="buttons">
                            <button class="save-btn">Save</button>
                            <button class="cancel-btn">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>

            <div id="chequeModal" class="modal">
                <div class="popup-cheque">
                    <div class="popup-title">
                        <div class="header">
                            <h2>Cheque Method</h2>
                            <span class="close-btn" onclick="closeModal('cheque')"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 14.8594L7.92971 7.92972M7.92971 7.92972L14.8594 1M7.92971 7.92972L1 1M7.92971 7.92972L14.8594 14.8594" stroke="black" stroke-width="1.9827" stroke-linecap="round" stroke-linejoin="round" />
                                </svg></span>

                        </div>
                        <div class="separator"></div>

                    </div>
                    <div class="container">
                        <div class="content">
                            <div class="bank">
                                <div class="input-field">
                                    <label for="transaction-id">Bank Name:</label>
                                    <input type="text" id="transaction-id" placeholder="State Bank of India" readonly />
                                </div>
                                <div class="input-field">
                                    <label for="transaction-id">A/c Number:</label>
                                    <input type="number" id="transaction-id" placeholder="52921641556416" readonly />
                                </div>
                                <div class="input-field">
                                    <label for="transaction-id">IFSC Code:</label>
                                    <input type="text" id="transaction-id" placeholder="SBIOOOO619" readonly />
                                </div>
                                <div class="input-field">
                                    <label for="transaction-id">Beneficiary Name:</label>
                                    <input type="text" id="transaction-id" placeholder="Abhishek Upadhyay" readonly />
                                </div>

                            </div>

                            <div class="cheque">
                                <div class="input-field">
                                    <label for="transaction-id">Cheque No:</label>
                                    <input type="number" id="transaction-id" placeholder="00619" readonly />
                                </div>
                                <div class="input-field">
                                    <label for="transaction-id">Cheque Amount:</label>
                                    <input type="number" id="transaction-id" placeholder="529" readonly />
                                </div>
                                <div class="input-field">
                                    <label for="transaction-id">Cheque Date:</label>
                                    <input type="date" id="transaction-id" placeholder readonly />

                                </div>
                            </div>
                        </div>
                        <div class="buttons">
                            <button class="save-btn">Save</button>
                            <button class="cancel-btn">Cancel</button>
                        </div>
                    </div>
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
                        <span>Received Amount </span>
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
            <p> Table content here</p>
        </div>
    </div>



</div>