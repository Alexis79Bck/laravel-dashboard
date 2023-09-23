<footer class="footer footer-alt">
    2022 - <span id="footer-year"></span> &copy; Alexis E. Mata
</footer>

<script>
    const footerYear = document.querySelectorAll("#footer-year");
    footerYear.forEach(copyright => {
        copyright.innerHTML = new Date().getFullYear();
    });
</script>