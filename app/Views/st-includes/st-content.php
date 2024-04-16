<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><?= $heading ?? 'Blank Page' ?></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <?= $breadcrumb ?? '' ?>
                        <li class="breadcrumb-item active"><?= $heading ?? 'Current' ?></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <?php $message = $message ?? session('message');
            if (is_string($message) && $message !== "") : ?>
                <div class="row">
                    <div class="col-12">
                        <?= $message ?>
                    </div>
                </div>
            <?php endif; ?>
            <?php if (isset($contents) && is_array($contents)) {
                foreach ($contents as $content) {
                    echo view($content);
                }
            } ?>

        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>