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
  @vite('resources/css/components/user-detail-panel-pos.css')
  @vite('resources/css/components/sell-customer-payment-pos.css')
  @vite('resources/css/components/item-table-pos.css')
  @vite('resources/css/components/amount-pos.css')
  @vite('resources/css/components/control-buttons-pos.css')
  @vite('resources/css/components/payment-details-pos.css')


  <!--✨ global css here 👇  -->
  @vite('resources/css/app.css')

</head>

<body class="bg-gray-100 h-screen font-sans ">

  <!-- Navigation Bar -->
  <header>
    <nav>
      <a href="{{ route('root') }}">
        <x-navbar :brand="'Point Of Sale'" :fYear="'FY:2024'" :closeButton="'X'" />
      </a>
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

      <!-- Control Button Area -->
      <x-control-buttons-pos />

    </div>

  </div>

  <!-- Footer / Credit -->
  <footer>
    <x-footer />
  </footer>







  <!-- Include your JavaScript files or scripts here -->
  <script>
    function openTab(tabId) {
      // Hide all tab contents
      var tabContents = document.getElementsByClassName('tab-content');
      for (var i = 0; i < tabContents.length; i++) {
        tabContents[i].style.display = 'none';
      }

      // Remove 'active-tab' class from all tabs
      var tabs = document.getElementsByClassName('tab');
      for (var i = 0; i < tabs.length; i++) {
        tabs[i].classList.remove('active-tab');
      }

      // Show the selected tab content and mark it as active
      document.getElementById(tabId).style.display = 'block';
      document.querySelector('[onclick="openTab(\'' + tabId + '\')"]').classList.add('active-tab');
    }

    function openModal(type) {
      document.getElementById(type + 'Modal').style.display = 'block';
      document.querySelector('.overlay').style.display = 'block';
    }

    function closeModal(type) {
      document.getElementById(type + 'Modal').style.display = 'none';
      document.querySelector('.overlay').style.display = 'none';
    }

    function closeAllModals() {
      document.querySelectorAll('.modal').forEach(modal => modal.style.display = 'none');
      document.querySelector('.overlay').style.display = 'none';
    }
  </script>
</body>

</html>