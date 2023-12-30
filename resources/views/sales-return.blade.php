<!DOCTYPE html>
<!-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> -->
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sales-Return</title>



    <!-- ✨ component css here 👇 -->
    @vite('resources/css/components/navbar.css')
    @vite('resources/css/components/footer.css')


    <!--✨ global css here 👇  -->
    @vite('resources/css/app.css')

</head>

<body class="bg-gray-100 h-screen font-sans">

    <!-- Navigation Bar -->
    <header>
        <nav>
            <x-navbar :brand="'Sales Return'" :fYear="'FY:2023'" :closeButton="'X'" />
        </nav>
    </header>

    <!-- Main Content Area -->
    <div class="main">
        <div class="container">
            <h1>this is Sales Return area.</h1>


        </div>
    </div>

    <!-- Footer / Credit -->
    <footer>
        <x-footer />
    </footer>



    <!-- Include your JavaScript files or scripts here -->

</body>

</html>