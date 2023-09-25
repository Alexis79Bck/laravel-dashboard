@extends('layouts.app')

@section('content')
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">
            Tablero
        </div> <!-- container -->

    </div> <!-- content -->
@endsection

@section('footer')
    <footer class="footer float-right">
        2022 - <span id="footer-year"></span> &copy; Alexis E. Mata
    </footer>
@endsection

@section('scripts')
    <script>
        const footerYear = document.querySelectorAll("#footer-year");
        footerYear.forEach(copyright => {
            copyright.innerHTML = new Date().getFullYear();
        });
    </script>
@endsection
