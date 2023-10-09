<div class="footer-mark text-center text-white">
     &copy; 2022 - <span id="footer-year"></span>. Desarrollado por: Alexis E. Mata
</div>

<script>
    const footerYear = document.querySelectorAll("#footer-year");
    footerYear.forEach(copyright => {
        copyright.innerHTML = new Date().getFullYear();
    });
</script>