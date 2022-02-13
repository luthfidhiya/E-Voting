<section class="content">
<div class="row">

  <div class="col-md-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3> <?php echo $tuser ?> </h3>

              <p>Total User</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            <a href="<?php echo site_url('admin/user') ?>" class="small-box-footer">klik untuk info selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
          </div>
  </div>

  <div class="col-md-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3> <?php echo $tsuara ?> </h3>

              <p>User Yang Sudah Memilih</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="<?php echo site_url('admin/suara') ?>" class="small-box-footer">klik untuk info selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
  </div>

<br>

<canvas id="chartsuara" height="150"></canvas>
<script>
  const ctx = document.getElementById('chartsuara').getContext('2d');
  const myChart = new Chart(ctx, {
      type: 'bar',
      data: {
          labels: ['Calon Ke-1', 'Calon ke-2', 'Calon Ke-3'],
          datasets: [{
              label: 'Hasil Suara',
              data: [
                <?php echo $kandidat1 ?>,
                <?php echo $kandidat2 ?>,
                <?php echo $kandidat3 ?>
              ],
              backgroundColor: [
                  'rgba(250, 100, 100, 0.3)',
                  'rgba(100, 100, 250, 0.3)',
                  'rgba(100, 250, 100, 0.3)'
              ],
              borderColor: [
                  'rgba(250, 100, 100, 1)',
                  'rgba(100, 100, 250, 1)',
                  'rgba(100, 250, 100, 1)'
              ],
              borderWidth: 1
          }]
      },
      options: {
          scales: {
              y: {
                  beginAtZero: true
              }
          }
      }
  });
</script>
</section>