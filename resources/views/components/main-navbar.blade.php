<div class="main-navbar ">
    <div class="nav-left ">
        <!-- <label for="brand">{{ $brand }}</label> -->
        <a href="{{ route('root') }}">
            <img class="brand-logo" style="width: 7rem; aspect-ratio: auto; margin-left: 1rem;" src="{{ asset('media/gauri-traders-logo.png') }}" alt="Gauri Traders Logo">
        </a>
    </div>
    <div class="nav-right ">
        <label for="fyear">{{ $fYear }}</label>
        <div class="exit-button flex items-center justify-center">{{ $closeButton }}</div>
    </div>
</div>