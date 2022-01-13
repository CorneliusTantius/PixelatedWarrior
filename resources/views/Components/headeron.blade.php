<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <span class="fs-4">Pixelated Warrior</span>
        </a>

        <ul class="nav nav-pills">
            @if (Auth::user()->is_admin == false)
                <li class="nav-item"><a href="/game" class="nav-link active" aria-current="page">Play</a></li>
                <li class="nav-item"><a href="/dashboard" class="nav-link">My Account</a></li>
            @endif
            <li class="nav-item"><a href="/faq" class="nav-link">FAQs</a></li>
            <li class="nav-item"><a href="/about" class="nav-link">About</a></li>
            <li class="nav-item"><a href="/auth/logout" class="nav-link">Log Out</a></li>
        </ul>
    </header>
</div>
