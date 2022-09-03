<?php include "./layouts/isadmin.php" ?>
<?php
include "../functions/category.php";
$category = new Category();
$rows = $category->getCategory();

if (isset($_POST['category-btn-add'])) {
    $title = trim($_POST['category-input-title']);
    if ($category->insert($title)) {
        header('refresh: 1');
    } else {
        $msg_err = 'failed inserted';
    }
}

if (isset($_POST['category-btn-del'])) {
    $id = $_POST['id'];
    if($category->delete($id)) {
        header('refresh: 1');
        $msg_suc = 'Successfully Deleted';
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin | category</title>
    <?php include "./layouts/css.php" ?>
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">

        <?php include "./layouts/preloader.php" ?>

        <?php include "./layouts/navbar.php" ?>
        <?php include "./layouts/sidebar.php" ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">รายการหมวดหมู่</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">รายการหมวดหมู่</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Category Details</h3>
                        <button class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">เพิ่มหมวดหมู่</button>
                    </div>

                    <div class="card-body">
                        <?php if (isset($msg_err)) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $msg_err ?>
                            </div>
                        <?php endif; ?>
                        <?php if (isset($msg_suc)) : ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo $msg_suc ?>
                            </div>
                        <?php endif; ?>
                        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">

                            <div class="row">
                                <div class="col-sm-12">

                                    <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="example1_info">
                                        <thead>
                                            <tr>
                                                <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">No.</th>
                                                <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Title</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Rating</th>
                                                <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if (empty($rows)) { ?>
                                                <td colspan="4" class="text-center">Not found data.</td>
                                            <?php } else { ?>
                                            <?php for ($i = 0; $i < count($rows); $i++) { ?>
                                                <tr>
                                                    <td><?php echo $i+1;  ?></td>
                                                    <td><?php echo $rows[$i]['title'];  ?></td>
                                                    <td><?php echo $rows[$i]['rating'];  ?></td>
                                                    <td>
                                                        <form action="" method="post" >
                                                            <input type="hidden" name="id" value="<?= $rows[$i]['id'] ?>">
                                                            <input type="submit" onclick="return confirm('Do you want delete to <?= $rows[$i]['title'] ?>')" value="Delete" class="btn btn-secondary w-100" name="category-btn-del">
                                                        </form>
                                                    </td>
                                                </tr>
                                            <?php  } ?>
                                            <?php  } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

    </div>
    <!-- ./wrapper -->

    <!-- modal -->
    <form action="" method="post">
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">เพิ่มหมวดหมู่</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="text" class="form-control" name="category-input-title" id="category-input-title" aria-describedby="emailHelp" placeholder="Enter category name">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" disabled name="category-btn-add" id="category-btn-add" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <?php include "./layouts/script.php" ?>

    <script>
        $('#category-input-title').keyup(function(e) {
            $('#category-input-title').val() == '' ? $('#category-btn-add').attr('disabled', true) : $('#category-btn-add').removeAttr('disabled');
        })
        $(document).ready(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        })
    </script>
</body>

</html>