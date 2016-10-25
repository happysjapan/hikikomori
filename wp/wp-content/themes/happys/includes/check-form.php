<?php
if ($_POST["robotest"]) {
  echo 'Error: Bot spotted';
}
else {
  $check_1 = isset($_POST["check_1"]);
  $check_2 = isset($_POST["check_2"]);
  $check_3 = isset($_POST["check_3"]);
  $check_4 = isset($_POST["check_4"]);

  $score = 0;
  if( $check_1 ) { $score++; }
  if( $check_2 ) { $score++; }
  if( $check_3 ) { $score++; }
  if( $check_4 ) { $score++; }

  $title = '';
  $content = '';
  $display_phone = true;

  switch ($score) {
    case 0:
      $title = 'Score: 0% Hikikomori';
      $content = 'According to your answers, you have nothing to worry about.';
      $display_phone = false;
      break;
    case 1:
      $title = 'Score: 25% Hikikomori';
      $content = 'According to your answers, you have nothing to worry about.';
      break;
    case 2:
      $title = 'Score: 50% Hikikomori';
      $content = 'Nothing to worry about. You can still call us for more information.';
      break;
    case 3:
      $title = 'Score: 75% Hikikomori';
      $content = 'Every case is different, you should probably think about giving us a call.';
      break;
    case 4:
      $title = 'Score: 100% Hikikomori';
      $content = 'According to your answers, you should give us a call now.';
      break;
  }
?>
  <h3 class="checker--result--title"><?php echo $title; ?></h3>
  <div class="checker--result--main">
    <?php echo $content; ?>
  </div>
  <?php if($display_phone){ ?>
    <div class="checker--phone--holder">
      <a class="checker--phone" href="tel:120-000-000" title="120-000-000">
        <i class="header_phone--sprite" aria-hidden="true"><span class="sprite icon_phone"></span></i>
        <div class="checker--phone--main">
          <strong class="checker--phone--number">120-000-000</strong>
        </div>
      </a>
    </div>
  <?php } ?>
<?php
}
?>
