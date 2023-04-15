<?php

function main ($d, $msg_ret, $data_ret) {
    @session_start();
    $secUtil = new SecurityUtil();
    $secUtil->authenticateSession();
    $secUtil->authenticateUser();
    $secUtil->recordAccess('Access Page: main.View.php');
    ?>
<!DOCTYPE html>
<html lang="pt-br">
<body>
    <div id='mbody'><!-- Inicio MBody -->
    
    <center>
    <table border=0 style="border-radius:10px;border:3px solid <?php echo VIEW_COLOR; ?>;width:700px;height:400px;">
    	<tr>
    		<!-- Inicio Menu -->
    		<?php include(VIEW_INC	. '/menu.inc.php'); ?>
    		<!-- Fim Menu -->
    		<td>
			
    		</td>
    	</tr>
    </table>
    </center>
    
    <!-- Inicio Rodape -->
    <center><?php include(VIEW_INC . '/footer.inc.php'); ?></td></center>
	<!-- Fim Rodape -->
    
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/custom.js"></script>
    
    <script>
    $(document).attr("title", "Projeto MVC");
    </script>
    
    <!-- Inicio Popup -->
    <?php if ($msg_ret != '') { ?>
		<script>alert('<?php echo $msg_ret; ?>');</script>
	<?php } ?>
	<!-- Fim Popup -->
	
    </div><!-- Fim MBody -->
</body>
</html>

	<?php
	exit();
}
?>
