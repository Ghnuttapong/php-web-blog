<?php include "./layouts/isadmin.php" ?>
<?php

include '../functions/article.php';
$article = new Article();
$rows = $article->joinCategory();

if (isset($_POST['article-btn-add'])) {
    echo $_FILES['article-input-picture']['name'];
    // $article->insert([
    //     $_POST['article-input-title'],
    //     $_POST['article-input-detail'],
    //     /* picture */
    //     $_POST['article-select-category']
    // ]);
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin | บทความ</title>
    <?php include "./layouts/css.php" ?>
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">

        <?php include "./layouts/preloader.php" ?>

        <?php include "./layouts/navbar.php" ?>
        <!-- Main Sidebar Container -->
        <?php include "./layouts/sidebar.php" ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">เพิ่มบทความ</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">เพิ่มบทความ</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Form artical</h3>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="exampleInputFile">Title</label>
                                        <input type="text" name="article-input-title" class="form-control form-control-border border-width-2" id="exampleInputBorderWidth2" placeholder="Title">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="exampleSelectBorderWidth2">Categories Select</label>
                                        <select class="custom-select form-control-border border-width-2" id="exampleSelectBorderWidth2" name="article-select-category">
                                            <?php for ($i = 0; $i < count($rows); $i++) { ?>
                                                <option value="<?= $rows[$i]['id'] ?>"><?= $rows[$i]['title'] ?></option>
                                            <?php  } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="summernote">Detail</label>
                                        <textarea name="aritcle-input-detail" id="summernote"></textarea>
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="form-group">
                                        <label for="exampleInputFile">Picture</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="article-input-picture" class="custom-file-input" id="exampleInputFile">
                                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                    <?php

                                    if (isset($_POST['article-btn-add'])) {
                                        echo $_FILES['article-input-detail']['name'];
                                        echo $_FILES['article-input-picture']['type'];
                                        // $article->insert([
                                        //     $_POST['article-input-title'],
                                        //     $_POST['article-input-detail'],
                                        //     /* picture */
                                        //     $_POST['article-select-category']
                                        // ]);
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <input type="submit" name="article-btn-add" class="btn btn-success w-50 float-right" value="Save">
                        </div>
                    </div>
                </form>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

    </div>
    <!-- ./wrapper -->

    <?php include './layouts/script.php' ?>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 200
            });
            bsCustomFileInput.init();
        });
    </script>
</body>

</html>