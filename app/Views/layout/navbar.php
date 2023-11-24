<nav class="navbar navbar-expand-lg" style="background-color: #A0522D;">
    <div class="container-fluid">
        <a class="navbar-brand" href="/home" style="font-size: 24px;">Coffee Dua Arah</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link" href="/home" style="font-size: 18px;">Home</a>
                <a class="nav-link" href="/about" style="font-size: 18px;">About Us</a>
                <a class="nav-link" href="/menupelanggan" style="font-size: 18px;">Menu</a>
            </div>
        </div>
    </div>
</nav>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const currentLocation = window.location.href;

        const navLinks = document.querySelectorAll('.navbar-nav a');

        navLinks.forEach(link => {
            if (link.href === currentLocation) {
                link.classList.add('active');
            }
        });
    });
</script>