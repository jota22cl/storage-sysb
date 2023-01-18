<!-- Footer-->
<footer class="content-footer footer bg-footer-theme">
  <div class="{{ (!empty($containerNav) ? $containerNav : 'container-fluid') }} d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
    <div class="mb-2 mb-md-0">
      SysB © <script>
        document.write(new Date().getFullYear())
      </script>
      , by Almacenes Generales de Deposito Storage S.A.
    </div>
    {{-- <div>
      <a href="{{ config('variables.documentation') ? config('variables.documentation') : '#' }}" target="_blank" class="footer-link me-4">Documentation</a>
    </div> --}}
  </div>
</footer>
<!--/ Footer-->
