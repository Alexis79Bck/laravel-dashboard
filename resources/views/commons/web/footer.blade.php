 <!-- Copyright -->
 <div class="content container">
    <div class="row">
        <div class="col-xs-6 justify-content-center">
            <span class="margin-b-0 " id="footer-year"></span>
        
            <span class="color-base fweight-700 " > Desarrollado por Alexis E. Mata </span>
        </div>
    </div>
    <!--// end row -->
</div>
<!-- End Copyright -->

<script>
    const footerYear = document.querySelectorAll("#footer-year");
    footerYear.forEach(copyright => {
        copyright.innerHTML = '&copy; 2022 -' + new Date().getFullYear() + '. Todos los Derechos Reservados.';
    });
</script>