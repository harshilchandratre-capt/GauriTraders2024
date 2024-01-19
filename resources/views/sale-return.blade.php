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
    @vite('resources/css/components/user-detail-panel.css')
    @vite('resources/css/components/item-table.css')
    @vite('resources/css/components/control-buttons.css')
    @vite('resources/css/components/swapping-buttons.css')


    <!--✨ global css here 👇  -->
    @vite('resources/css/app.css')
</head>

<body>
    <!-- navigation bar -->
    <header>
        <nav>
            <x-navbar :brand="'Sale Return'" :fYear="'FY:2024'" :closeButton="'X'" />
        </nav>
    </header>
    <div class="main">
        <!-- content -->
        <div class="content">

            <!-- top field group -->
            <x-user-detail-panel />
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

                        <!-- item-table -->
                        <x-item-table />
                        <!-- item-table -->
                    </fieldset>

                </div>
                <!-- swapping buttons -->
                <x-swapping-buttons />
                <!-- swapping buttons -->

                <!-- <x-separator /> -->

                <!-- control-buttons -->
                <x-control-buttons />
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