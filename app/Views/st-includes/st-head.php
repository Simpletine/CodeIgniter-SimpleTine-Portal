<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="/assets/plugins/fontawesome-free/css/all.min.css">

  <?php if (isset($datatables_script) && $datatables_script === true) : ?>
    <!-- DataTables -->
    <link rel="stylesheet" href="/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <?php endif; ?>

  <link rel="stylesheet" href="/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="/assets/dist/css/docs.css">
  <link rel="stylesheet" href="/assets/dist/css/highlighter.css">
  <link rel="stylesheet" href="/assets/dist/css/adminlte.min.css">

  <?php if (isset($css) && is_array($css)) {
    foreach ($css as $css_script) {
      echo "<link rel='stylesheet' href='$css_script'>" . PHP_EOL;
    }
  } ?>
  <title>SimpleTIne | Portal</title>
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">