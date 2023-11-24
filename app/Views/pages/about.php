<!-- File: app/Views/about.php -->

<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<style>
    h1 {
        text-align: left;
        animation: fadeIn 1s ease-in-out;
        /* Animasi muncul */
    }

    p {
        font-size: 18px;
        text-align: left;

        animation: fadeIn 1s ease-in-out;
        margin-top: 20px;
        /* Animasi muncul */
    }

    strong {
        font-weight: bold;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    .hidden {
        display: none;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col">
            <p style="background-color:bisque;color: black; ; padding: 20px;">
                <strong>Coffee Dua Arah</strong><br>
                Selamat datang di Coffee Dua Arah! Kami adalah tempat bagi para pecinta kopi yang mencari pengalaman yang unik dalam menikmati kopi berkualitas. Didirikan pada tahun 2018, Coffee Dua Arah berkomitmen untuk menyajikan kopi terbaik kepada pelanggan kami.
            </p>
            <p style="background-color:bisque;color: black; padding: 20px;">
                <strong>Filosofi Kami</strong><br>
                Kami percaya bahwa secangkir kopi bukan hanya tentang rasa, tetapi juga tentang pengalaman. Filosofi kami adalah menciptakan momen yang istimewa bagi setiap individu yang memasuki kedai kami. Kami ingin menciptakan ruang yang nyaman, tempat Anda bisa bersantai, bekerja, atau sekadar menikmati kenikmatan kopi.
            </p>
            <p style="background-color:bisque; color: black; padding: 20px;">
                <strong>Produk Kami</strong><br>
                Di Coffee Dua Arah, kami mengutamakan kualitas. Kami menyediakan berbagai macam biji kopi pilihan, disajikan dengan cermat oleh barista profesional kami. Dari espresso yang kaya akan cita rasa hingga kopi manual yang lembut, kami menawarkan berbagai jenis minuman kopi yang memuaskan berbagai selera.
            </p>

            <div class="contact-section">
                <h1>Contact Us</h1>
                <div class="contact-icons">
                    <a href="https://instagram.com/duaarah.coffee?igshid=OGQ5ZDc2ODk2ZA==" target="_blank">
                        <img src="/img/IG.png" alt="Instagram" class="gambar" style="width: 50px; height: 50px;">
                    </a>
                    <a href="https://wa.wizard.id/140f3a" target="_blank">
                        <img src="/img/WA.png" alt="WhatsApp" class="gambar" style="width: 50px; height: 50px;">
                    </a>

                </div>
            </div>
        </div>
    </div>
    <?= $this->endSection(); ?>