<div style="overflow:hidden;">
  <div class="form-group">
      <div class="row">
          <div class="col-md-8">
              <div id="datetimepicker12"></div>
          </div>
      </div>
  </div>
  </div>



    @push('scripts')
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/2.1.22/moment.min.js" ></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js" ></script>
      <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.css" >

      <script type="text/javascript">
  $(function () {
      $('#datetimepicker12').datetimepicker({
        date: "fa fa-calendar",
          inline: true,
      });
  });
</script>
  @endpush
