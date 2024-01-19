<div class="navbar">
    <div class="nav-left ">
        <label for="brand">{{ $brand }}</label>
    </div>
    <div class="nav-right">
        <label for="fyear">{{ $fYear }}</label>
        <div class="close-button">
            <a href="{{ route('root') }}">
                {{ $closeButton }}
            </a>
        </div>

    </div>
</div>