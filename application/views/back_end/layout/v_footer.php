<footer class="main-footer">
  <div class="footer-right text-dark">
    Copyright &copy;<strong><?= date('Y'); ?></strong>
  </div>
</footer>
</div>
</div>

<!-- General JS Scripts -->
<script src="<?= base_url(); ?>vendor/back-end/assets/js/jquery.min.js"></script>
<script src="<?= base_url(); ?>vendor/back-end/assets/js/popper.js"></script>
<script src="<?= base_url(); ?>vendor/back-end/assets/js/tooltip.js"></script>
<script src="<?= base_url(); ?>vendor/back-end/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="<?= base_url(); ?>vendor/back-end/assets/js/page/bootstrap-modal.js"></script>
<script src="<?= base_url(); ?>vendor/back-end/assets/js/jquery.nicescroll.min.js"></script>
<script src="<?= base_url(); ?>vendor/back-end/assets/js/moment.min.js"></script>
<script src="<?= base_url(); ?>vendor/back-end/assets/js/stisla.js"></script>
<script src="<?= base_url(); ?>vendor/back-end/assets/plugins/summernote/summernote-bs4.js"></script>

<!-- Data Tables -->
<script type="text/javascript" src="<?= base_url() ?>vendor/back-end/assets/plugins/dataTables/datatables.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>vendor/back-end/assets/plugins/dataTables/DataTables-1.10.24/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>vendor/back-end/assets/plugins/dataTables/DataTables-1.10.24/js/dataTables.bootstrap4.js"></script>
<script type="text/javascript" src="<?= base_url() ?>vendor/back-end/assets/plugins/dataTables/Responsive-2.2.7/js/dataTables.responsive.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>vendor/back-end/assets/plugins/dataTables/Buttons-1.7.0/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>vendor/back-end/assets/plugins/dataTables/Buttons-1.7.0/js/buttons.bootstrap4.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>vendor/back-end/assets/plugins/dataTables/Buttons-1.7.0/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>vendor/back-end/assets/plugins/dataTables/Buttons-1.7.0/js/buttons.print.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>vendor/back-end/assets/plugins/dataTables/Buttons-1.7.0/js/buttons.colVis.min.js"></script>

<!-- Template JS File -->
<script type="text/javascript" src="<?= base_url(); ?>vendor/back-end/assets/js/custom.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>vendor/back-end/assets/js/scripts.js"></script>
<script type="text/javascript" src="<?= base_url() ?>vendor/back-end/assets/plugins/dayjs/dayjs.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>vendor/back-end/assets/plugins/apexcharts/apexcharts.js"></script>
<script type="text/javascript" src="<?= base_url() ?>vendor/back-end/assets/js/page/ui-apexchart.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>vendor/back-end/assets/js/page/index-0.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>vendor/back-end/assets/plugins/toastr/toastr.min.js"></script>

<!-- Page Specific JS File -->
<script>
  $('.custom-file-input').on('change', function() {
    let fileName = $(this).val().split('\\').pop();
    $(this).next('.custom-file-label').addClass("selected").html(fileName)
  });
  $('#berita, #misi, #sejarah, #profile, #portfolio').summernote({
    dialogsInBody: true,
    minHeight: 300,
    toolbar: [
      ['style', ['style', 'bold', 'italic', 'underline', 'clear']],
      ['fontsize', ['fontsize']],
      ['para', ['ul', 'paragraph']],
      ['insert', ['link']]
    ],
  });
</script>
<!-- Input Only Number -->
<script>
  function validate(evt) {
    var theEvent = evt || window.event;

    // Handle paste
    if (theEvent.type === 'paste') {
      key = event.clipboardData.getData('text/plain');
    } else {
      // Handle key press
      var key = theEvent.keyCode || theEvent.which;
      key = String.fromCharCode(key);
    }
    var regex = /[0-9]|\./;
    if (!regex.test(key)) {
      theEvent.returnValue = false;
      if (theEvent.preventDefault) theEvent.preventDefault();
    }
  }
</script>
<!-- DATA TABLE -->
<script>
  $(function() {
    $('#dataTable').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
      dom: 'Bfrtip',
      buttons: [
        'copy', 'csv', 'excel', 'pdf', 'print'
      ]
    });
  });
</script>
<script>
  toastr.options = {
    "closeButton": true,
    "debug": false,
    "newestOnTop": true,
    "progressBar": false,
    "positionClass": "toast-top-center",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "600",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
  }
</script>
<?php if ($this->session->flashdata('success')) : ?>
  <div class="success-message"><?= $this->session->flashdata('success') ?></div>
  <script type="text/javascript">
    toastr.success($(".success-message"))
  </script>
<?php endif; ?>

<?php if ($this->session->flashdata('info')) : ?>
  <div class="info-message"><?= $this->session->flashdata('info') ?></div>
  <script type="text/javascript">
    toastr.info($(".info-message"))
  </script>
<?php endif; ?>

<?php if ($this->session->flashdata('warning')) : ?>
  <div class="warning-message"><?= $this->session->flashdata('warning') ?></div>
  <script type="text/javascript">
    toastr.warning($(".warning-message"))
  </script>
<?php endif; ?>

<?php if ($this->session->flashdata('error')) : ?>
  <div class="error-message"><?= $this->session->flashdata('error') ?></div>
  <script type="text/javascript">
    toastr.error($(".error-message"))
  </script>
<?php endif; ?>
<script>
  function previewFile(input) {
    var file = $("input[type=file]").get(0).files[0];

    if (file) {
      var reader = new FileReader();

      reader.onload = function() {
        $("#image-previews").attr("src", reader.result);
      }

      reader.readAsDataURL(file);
    }
  }
</script>
</body>

</html>