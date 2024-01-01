<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sale-Return</title>
    <!-- ✨ component css here 👇 -->
    @vite('resources/css/components/navbar.css')
    @vite('resources/css/components/footer.css')
    @vite('resources/css/components/sale-return.css')


    <!--✨ global css here 👇  -->
    @vite('resources/css/app.css')
</head>

<body>
    <div class="bg-gray-100 min-h-28 font-sans">

        <!-- navigation bar -->
        <header>
            <nav>
                <x-navbar :brand="'Sale Return'" :fYear="'FY:2023'" :closeButton="'X'" />
            </nav>
        </header>

        <!-- content -->
        <div class="content">

            <!-- top field group -->
            <div class="top-field-group">
                <div class="group1">

                    <div class="top-field">
                        <span>Return Invoice No.:</span>
                        <input type="text" name="" id="" />
                    </div>

                    <div class="top-field">
                        <span>Staff Id:</span>
                        <input type="text" name="" id="" />
                    </div>

                </div>
                <div class="group2">

                    <div class="top-field">
                        <span>Date & Time:</span>
                        <input type="text" name="" id="" />
                    </div>
                    <div class="top-field">
                        <span>Staff Name:</span>
                        <input type="text" name="" id="" />
                    </div>

                </div>

                <div class="group3">
                    <div class="top-field">
                        <span>Store Id:</span>
                        <input type="text" name="" id="" />
                    </div>
                    <div class="top-field">
                        <span>Return Payment Type:</span>
                        <input type="text" name="" id="" />
                    </div>
                </div>
                <div class="group4">
                    <div class="top-field">
                        <span>Lt. Re. Invoice No.:</span>
                        <input type="text" name="" id="" />
                    </div>
                    <div class="top-field">
                        <span>POS Id:</span>
                        <input type="text" name="" id="" />
                    </div>
                </div>
            </div>
            <!-- top-field-group ends -->

            <!-- transaction-return-group -->
            <div class="transaction-return-group">

                <div class="transaction">
                    <fieldset class="tbox">
                        <legend>Transaction Info:</legend>


                        <div class="tinfo-group">
                            <div class="t-field">
                                <span>Bill No.:</span>
                                <input type="text" name="" id="" />
                            </div>
                            <div class="t-field">
                                <span>Date & Time:</span>
                                <input type="text" name="" id="" />
                            </div>
                            <div class="t-field">
                                <span>Staff Detail:</span>
                                <input type="text" name="" id="" />
                            </div>
                            <div class="t-field">
                                <span>Payment Type:</span>
                                <input type="text" name="" id="" />
                            </div>
                        </div>

                        <div class="itemTable">
                            <div class="t-head">
                                <div class="head-left">
                                    <span class="item-indic"></span>
                                    <span>Sr. No.</span>
                                    <span>Particular</span>
                                </div>
                                <div class="head-right">
                                    <span>Price</span>
                                </div>
                            </div>
                            <hr>
                            <div class="t-item">
                                <div class="item-left">
                                    <span class="item-indic"><svg width="8" height="11" viewBox="0 0 8 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4.09005 0L4.18802 5.14431L6.67607 1.61091L4.32657 5.35267L7.74724 5.5L4.32657 5.64733L6.67607 9.38909L4.18802 5.85569L4.09005 11L3.99208 5.85569L1.50403 9.38909L3.85353 5.64733L0.432861 5.5L3.85353 5.35267L1.50403 1.61091L3.99208 5.14431L4.09005 0Z" fill="black" />
                                        </svg>
                                    </span>
                                    <span>Sr. No.</span>
                                    <span>Particular</span>
                                </div>
                                <div class="item-right">
                                    <span>Price</span>
                                </div>
                            </div>
                            <div class="t-item">
                                <div class="item-left">
                                    <span class="item-indic"><svg width="6" height="9" viewBox="0 0 6 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.68905 0.888989L3.27507 4.39308L5.86109 0.888989L3.53108 4.77808L5.86109 8.66716L3.27507 5.16308L0.68905 8.66716L3.01907 4.77808L0.68905 0.888989Z" fill="#FF0000" />
                                        </svg>
                                    </span>
                                    <span>Sr. No.</span>
                                    <span>Particular</span>
                                </div>
                                <div class="item-right">
                                    <span>Price</span>
                                </div>
                            </div>
                            <div class="t-item">
                                <div class="item-left">
                                    <span class="item-indic"><svg width="6" height="9" viewBox="0 0 6 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.68905 0.888989L3.27507 4.39308L5.86109 0.888989L3.53108 4.77808L5.86109 8.66716L3.27507 5.16308L0.68905 8.66716L3.01907 4.77808L0.68905 0.888989Z" fill="#FF0000" />
                                        </svg>
                                    </span>
                                    <span>Sr. No.</span>
                                    <span>Particular</span>
                                </div>
                                <div class="item-right">
                                    <span>Price</span>
                                </div>
                            </div>
                            <div class="t-item">
                                <div class="item-left">
                                    <span class="item-indic"><svg width="6" height="9" viewBox="0 0 6 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.68905 0.888989L3.27507 4.39308L5.86109 0.888989L3.53108 4.77808L5.86109 8.66716L3.27507 5.16308L0.68905 8.66716L3.01907 4.77808L0.68905 0.888989Z" fill="#FF0000" />
                                        </svg>
                                    </span>
                                    <span>Sr. No.</span>
                                    <span>Particular</span>
                                </div>
                                <div class="item-right">
                                    <span>Price</span>
                                </div>
                            </div>
                            <div class="t-item">
                                <div class="item-left">
                                    <span class="item-indic"><svg width="6" height="9" viewBox="0 0 6 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.68905 0.888989L3.27507 4.39308L5.86109 0.888989L3.53108 4.77808L5.86109 8.66716L3.27507 5.16308L0.68905 8.66716L3.01907 4.77808L0.68905 0.888989Z" fill="#FF0000" />
                                        </svg>
                                    </span>
                                    <span>Sr. No.</span>
                                    <span>Particular</span>
                                </div>
                                <div class="item-right">
                                    <span>Price</span>
                                </div>
                            </div>
                            <div class="t-item">
                                <div class="item-left">
                                    <span class="item-indic"><svg width="6" height="9" viewBox="0 0 6 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.68905 0.888989L3.27507 4.39308L5.86109 0.888989L3.53108 4.77808L5.86109 8.66716L3.27507 5.16308L0.68905 8.66716L3.01907 4.77808L0.68905 0.888989Z" fill="#FF0000" />
                                        </svg>
                                    </span>
                                    <span>Sr. No.</span>
                                    <span>Particular</span>
                                </div>
                                <div class="item-right">
                                    <span>Price</span>
                                </div>
                            </div>
                            <div class="t-item">
                                <div class="item-left">
                                    <span class="item-indic"><svg width="6" height="9" viewBox="0 0 6 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.68905 0.888989L3.27507 4.39308L5.86109 0.888989L3.53108 4.77808L5.86109 8.66716L3.27507 5.16308L0.68905 8.66716L3.01907 4.77808L0.68905 0.888989Z" fill="#FF0000" />
                                        </svg>
                                    </span>
                                    <span>Sr. No.</span>
                                    <span>Particular</span>
                                </div>
                                <div class="item-right">
                                    <span>Price</span>
                                </div>
                            </div>
                            <div class="t-item">
                                <div class="item-left">
                                    <span class="item-indic"><svg width="6" height="9" viewBox="0 0 6 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.68905 0.888989L3.27507 4.39308L5.86109 0.888989L3.53108 4.77808L5.86109 8.66716L3.27507 5.16308L0.68905 8.66716L3.01907 4.77808L0.68905 0.888989Z" fill="#FF0000" />
                                        </svg>
                                    </span>
                                    <span>Sr. No.</span>
                                    <span>Particular</span>
                                </div>
                                <div class="item-right">
                                    <span>Price</span>
                                </div>
                            </div>
                        </div>
                    </fieldset>

                </div>
                <div class="swapping-buttons">
                    <div class="return-button">Return >></div>
                    <div class="unreturn-button">
                        << Unreturn</div>
                    </div>
                    <div class="return">
                        <fieldset class="rbox">
                            <legend>Return Item Info:</legend>
                            <div class="itemTable">
                                <div class="t-head">
                                    <div class="head-left">
                                        <span></span>
                                        <span>Sr. No.</span>
                                        <span>Particular</span>
                                    </div>
                                    <div class="head-right">
                                        <span>Price</span>
                                    </div>
                                </div>
                                <hr>

                            </div>
                        </fieldset>
                    </div>

                </div>

                <!-- control-buttons -->
                <div class="control-buttons">
                    <button class="hold-button"><span>Hold</span><svg width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.21276 8.6363L1.53456 12.2072C0.762859 13.2362 0.833446 14.6688 1.70253 15.617L6.75921 21.1333C7.26545 21.6855 7.97899 22 8.72821 22C10.1798 22 12.5537 22 14.9037 22C18.111 22 20.2492 19.9954 20.2492 16.6545C20.2492 16.6545 20.2492 7.49086 20.2492 5.19995" stroke="white" stroke-width="2.00455" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M16.24 5.9635C16.24 5.9635 16.24 5.79629 16.24 5.19986C16.24 2.14529 20.2491 2.14529 20.2491 5.19986" stroke="white" stroke-width="2.00455" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M12.231 5.96364C12.231 5.96364 12.231 5.18814 12.231 3.99526M12.231 3.99526C12.231 3.69705 12.231 3.2909 12.231 3.2909M12.231 3.99526C12.231 0.940708 16.2401 0.940708 16.2401 3.99526C16.2401 4.29348 16.2401 4.90177 16.2401 5.19999C16.2401 5.79643 16.2401 5.96364 16.2401 5.96364" stroke="white" stroke-width="2.00455" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M12.231 5.96364C12.231 5.96364 12.231 5.18814 12.231 3.99526C12.231 0.940708 16.2401 0.940708 16.2401 3.99526C16.2401 4.29348 16.2401 4.90177 16.2401 5.19999C16.2401 5.79643 16.2401 5.96364 16.2401 5.96364" stroke="white" stroke-width="2.00455" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M8.22168 5.96365C8.22168 5.96365 8.22168 5.10455 8.22168 3.29091C8.22168 0.236362 12.2308 0.236362 12.2308 3.29091C12.2308 3.29091 12.2308 3.69706 12.2308 3.99529C12.2308 5.18816 12.2308 5.96365 12.2308 5.96365" stroke="white" stroke-width="2.00455" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M4.21265 12.6456V3.29093C4.21265 2.18386 5.11011 1.28638 6.2172 1.28638C7.32429 1.28638 8.22175 2.02834 8.22175 3.13542C8.22175 3.18596 8.22175 3.2378 8.22175 3.29093C8.22175 5.10458 8.22175 5.96367 8.22175 5.96367" stroke="white" stroke-width="2.00455" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <span class="notification-overlay">1</span>
                    </button>
                    <button class="save-button"><span>Save</span><svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 17.8889V3.11111C1 1.94518 1.94518 1 3.11111 1H14.9034C15.4632 1 16.0002 1.22242 16.3961 1.61833L19.3817 4.60389C19.7776 4.99981 20 5.53677 20 6.09668V17.8889C20 19.0549 19.0549 20 17.8889 20H3.11111C1.94518 20 1 19.0549 1 17.8889Z" stroke="white" stroke-width="1.58333" />
                            <path d="M6.91117 7.33333H14.0889C14.4388 7.33333 14.7223 7.04978 14.7223 6.7V1.63333C14.7223 1.28355 14.4388 1 14.0889 1H6.91117C6.56139 1 6.27783 1.28355 6.27783 1.63333V6.7C6.27783 7.04978 6.56139 7.33333 6.91117 7.33333Z" stroke="white" stroke-width="1.58333" />
                            <path d="M4.16675 12.189V20.0001H16.8334V12.189C16.8334 11.8392 16.5499 11.5557 16.2001 11.5557H4.80008C4.4503 11.5557 4.16675 11.8392 4.16675 12.189Z" stroke="white" stroke-width="1.58333" />
                        </svg>
                    </button>
                    <button class="cancel-button"><span>Cancel</span><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 14.8594L7.92971 7.92972M7.92971 7.92972L14.8594 1M7.92971 7.92972L1 1M7.92971 7.92972L14.8594 14.8594" stroke="white" stroke-width="1.9827" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
                <!-- control-buttons ends-->


            </div>
            <!-- transaction-return-group -->





        </div>
        <!-- Footer / Credit -->
        <footer>
            <x-footer />
        </footer>

</body>

</html>