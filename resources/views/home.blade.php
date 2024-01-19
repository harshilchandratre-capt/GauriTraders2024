<!DOCTYPE html>
<!-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> -->
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gauri Traders Home-Page</title>



    <!-- ✨ component css here 👇 -->
    @vite('resources/css/components/main-screen/main-navbar.css')
    @vite('resources/css/components/main-screen/main-screen-card.css')
    @vite('resources/css/components/brand-watermark.css')
    @vite('resources/css/components/hold-button.css')
    @vite('resources/css/components/footer.css')


    <!--✨ global css here 👇  -->
    @vite('resources/css/app.css')

</head>

<body class="bg-gray-100 h-screen font-sans">

    <!-- Navigation Bar -->
    <header>
        <nav>
            <x-main-navbar :brand="'logo here'" :fYear="'FY:2024'" :closeButton="'Exit'" />
        </nav>
    </header>


    <!-- Main Content Area -->
    <div class="main">
        <div class="ms-container flex justify-start items-center flex-wrap gap-10">

            <a href="{{ route('point-of-sale') }}"><x-main-screen-card :title="'POS'" /></a>
            <a><x-main-screen-card :title="'POS Transaction Inquiry'" /></a>
            <a href="{{ route('sale-return') }}"><x-main-screen-card :title="'Sale Return'" /></a>
            <a><x-main-screen-card :title="'Data Backup'" /></a>
            <a><x-main-screen-card :title="'Report'" /></a>
            <a><x-main-screen-card :title="'Open Cash Drawer'" /></a>
            <a><x-main-screen-card :title="'Daily Sales'" /></a>
            <a><x-main-screen-card :title="'Stock Entry'" /></a>
            <a><x-main-screen-card :title="'Product Entry'" /></a>
        </div>

        <!-- Control Button Area -->
        <div class="control-button-area mt-10 flex items-center justify-between">
            <x-brand-watermark />
            <x-hold-button />
        </div>


    </div>

    <!-- Footer / Credit -->
    <footer class="flex items-end justify-end p-0 mx-10 my-6">
        <!-- <x-footer /> -->
        <div class="text-right text-gray-500 text-xs font-josefin-sans font-semibold leading-4 break-words">Created By:&nbsp;</div>
        <div class="text-right text-gray-400 text-xs font-josefin-sans font-semibold leading-4 break-words">CAPT Technology</div>

    </footer>







    <!-- Include your JavaScript files or scripts here -->

</body>

</html>