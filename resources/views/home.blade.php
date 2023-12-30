<!DOCTYPE html>
<!-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> -->
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gauri Traders Home-Page</title>



    <!-- ✨ component css here 👇 -->
    @vite('resources/css/components/main-navbar.css')
    @vite('resources/css/components/main-screen-card.css')
    @vite('resources/css/components/footer.css')


    <!--✨ global css here 👇  -->
    @vite('resources/css/app.css')

</head>

<body class="bg-gray-100 h-screen font-sans">

    <!-- Navigation Bar -->
    <header>
        <nav>
            <x-main-navbar :brand="'Logo Here'" :fYear="'FY:2023'" :closeButton="'Exit'" />
        </nav>
    </header>

    <!-- Main Content Area -->
    <div class="main ">
        <div class="ms-container m-10 flex justify-start items-center flex-wrap gap-10">
            
            <x-main-screen-card :title="'POS'"/>
            <x-main-screen-card :title="'POS Transaction Inquiry'"/>
            <x-main-screen-card :title="'Sale Return'"/>
            <x-main-screen-card :title="'Data Backup'"/>
            <x-main-screen-card :title="'Report'"/>
            <x-main-screen-card :title="'Open Cash Drawer'"/>
            <x-main-screen-card :title="'Daily Sales'"/>
            <x-main-screen-card :title="'Stock Entry'"/>
            <x-main-screen-card :title="'Product Entry'"/>
        </div>
    </div>

    <!-- Footer / Credit -->
    <footer>
        <x-footer />
    </footer>



    <!-- Include your JavaScript files or scripts here -->

</body>

</html>