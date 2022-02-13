</div>

<footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> Final
    </div>
    <strong>Copyright &copy; 2021 <a href="https://github.com/luthfidhiya" target="blank">Luthfi Dhiya Ulhaq</a>.</strong> Web Developer.
  </footer>


<script src="<?php echo base_url('assets/'); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url('assets/'); ?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url('assets/'); ?>bower_components/fastclick/lib/fastclick.js"></script>
<script src="<?php echo base_url('assets/'); ?>dist/js/adminlte.min.js"></script>
<script src="<?php echo base_url('assets/'); ?>dist/js/demo.js"></script>
<script src="<?php echo base_url('assets/'); ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('assets/'); ?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>
</body>
</html>