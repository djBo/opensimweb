<?php
$page_title = "Home";
define('OSW_IN_SYSTEM', true);
require_once('inc/header.php');
?>
<div class="row">
	<div class="col-md-4">
  		<h3><?php echo $osw->config['GridName']; ?> News</h3>
  		<?php echo $osw->site->getNews('0', ''); ?>
	</div>
</div>
<?php
include ('inc/footer.php');
?>