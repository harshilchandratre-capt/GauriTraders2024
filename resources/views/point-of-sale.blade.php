<!DOCTYPE html>
<!-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> -->
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Gauri Traders POS</title>



  <!-- ✨ component css here 👇 -->
  @vite('resources/css/components/navbar.css')
  <!-- @vite('resources/css/components/main-screen-card.css') -->
  <!-- @vite('resources/css/components/brand-watermark.css') -->
  <!-- @vite('resources/css/components/hold-button.css') -->
  @vite('resources/css/components/footer.css')
  @vite('resources/css/components/point-of-sale/user-detail-panel-pos.css')
  @vite('resources/css/components/point-of-sale/sell-customer-payment-pos.css')
  @vite('resources/css/components/point-of-sale/item-table-pos.css')
  @vite('resources/css/components/point-of-sale/amount-pos.css')
  @vite('resources/css/components/point-of-sale/control-buttons-pos.css')
  @vite('resources/css/components/point-of-sale/payment-details-pos.css')


  <!--✨ global css here 👇  -->
  @vite('resources/css/app.css')

</head>

<body class="bg-gray-100 h-screen font-sans ">

  <!-- Navigation Bar -->
  <header>
    <nav>
        <x-navbar :brand="'Point Of Sale'" :fYear="'FY:2024'" :closeButton="'X'" />
    </nav>
  </header>

  <!-- Main Content Area -->
  <div class="main">
    <div class="content">
      <!-- User Detail Panel Area -->
      <x-user-detail-panel-pos />

      <!-- Sell Customer Payment -->
      <x-sell-customer-payment-pos />

      <!-- Amount Indicator -->
      <x-amount-pos />

      <x-separator />

      <!-- Control Button Area -->
      <x-control-buttons-pos />

    </div>

  </div>

  <!-- Footer / Credit -->
  <footer>
    <x-footer />
  </footer>







  <!-- Include your JavaScript files or scripts here -->
  <script src="/sell-customer-payment-tab.js"></script>
  <script src="/payment-modal.js"></script>
</body>

</html>