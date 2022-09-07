<?php include dirname(__FILE__) . '/layouts/isadmin.php'; ?>
<?php
    include dirname(__FILE__, 2).'/functions/report.php';
    $report = new Report();
    $rows = $report->index();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin</title>

  <?php include dirname(__FILE__) . '/layouts/css.php'; ?>
  <!DOCTYPE html>
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="wrapper">

    <?php include dirname(__FILE__) . '/layouts/preloader.php'; ?>

    <?php include dirname(__FILE__) . '/layouts/navbar.php'; ?>
    <?php include dirname(__FILE__) . '/layouts/sidebar.php'; ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="card">
          <div class="card-header border-0">
            <h3 class="card-title">High Categories History Report</h3>
            <div class="card-tools">
              <a href="#" class="btn btn-tool btn-sm">
                <i class="fas fa-download"></i>
              </a>
              <a href="#" class="btn btn-tool btn-sm">
                <i class="fas fa-bars"></i>
              </a>
            </div>
          </div>
          <div class="card-body table-responsive p-0">
            <table class="table table-striped table-valign-middle">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Product</th>
                  <th>Rating</th>
                </tr>
              </thead>
              <tbody>
                <?php $i=0; foreach($rows as $row) { ?>
                <tr>
                  <td><?= ++$i ?></td>
                  <td><?= $row['title'] ?></td>
                  <td>
                    <small class="<?= $row['rating'] == 0? 'text-warning': 'text-success' ?> mr-1">
                      <i class="<?= $row['rating'] == 0? 'fas fa-arrow-down': 'fas fa-arrow-up' ?>"></i>
                      <?= $row['rating'] * count($rows) /100 ?>%
                    </small>
                    <?= $row['rating'] ?>
                  </td>
                </tr>
                <?php  } ?>
              </tbody>
            </table>
          </div>
        </div>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- ./wrapper -->

  <?php include dirname(__FILE__) . '/layouts/script.php' ?>
  
</body>

</html>