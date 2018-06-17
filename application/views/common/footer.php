
    <footer class="py-5 bg-black footer">
      <div class="container">
        <p class="m-0 text-center text-white small">Copyright &copy; Crash Bash 2018</p>
      </div>
    </footer>

    <script type="text/javascript" src="<?= base_url() ?>vendor/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>vendor/fontawesome/svg-with-js/js/fontawesome-all.min.js"></script>

    <script type="text/javascript">
      $(document).ready(function() {
        $('#link').click(function(event) {

          window.location = "<?= base_url('Routes') ?>"

        });
      });
    </script>

  </body>
</html>
