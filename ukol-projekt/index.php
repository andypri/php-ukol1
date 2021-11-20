<!DOCTYPE html>
<html>
<?php require __DIR__ . '/layout/head.php'; ?>
<?php require __DIR__ . '/config.php'; ?>
<?php require __DIR__ . '/funkce.php'; ?>

<body>
  <div id="wrapper">
    <?php require __DIR__ . '/layout/sidebar.php'; ?>
    <div id="page-wrapper" class="gray-bg">
      <?php require __DIR__ . '/layout/topbar.php'; ?>

      <!-- Main content -->
      <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
          <!-- Nově: pomocí funkce vypisKontakt -->
          <?php echo vypisKontakt($kontakty); ?>
          <!-- Původní řešení: -->
          <!-- <?php foreach($kontakty as $kontakt) : ?>
          <div class="col-lg-4">
            <div class="contact-box">
              <a class="row" href="#">
                <div class="col-4">
                  <div class="text-center">
                    <img alt="image" class="rounded-circle m-t-xs img-fluid" src="<?php echo $kontakt['obrazek']; ?>" />
                    <div class="m-t-xs font-bold"><?php echo $kontakt['pozice']; ?></div>
                  </div>
                </div>
                <div class="col-8">
                  <h3><strong><?php echo $kontakt['jmeno']; ?></strong></h3>
                  <address>
                    <i class="fa fa-map-marker"></i> <?php echo $kontakt['adresa']; ?>
                  </address>
                </div>
              </a>
            </div>
          </div>
          <?php endforeach; ?> -->
        </div>
      </div>
      <!-- /End Main content -->
      <?php require __DIR__ . '/layout/footer.php'; ?>

    </div>
  </div>

  <?php require __DIR__ . '/layout/scripts.php'; ?>
</body>

</html>