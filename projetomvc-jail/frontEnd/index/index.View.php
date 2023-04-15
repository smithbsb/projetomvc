<?php

function indexView ($d, $msg_ret, $data_ret) {
    @session_start();
    $secUtil = new SecurityUtil();
    $secUtil->authenticateSession();
    $secUtil->authenticateUser();
    $secUtil->recordAccess('Access Page: index.View.php');
    ?>
<!DOCTYPE html>
<html lang="pt-br">
<body>
    <div id='mbody'><!-- Inicio MBody -->
    
    <br><br><br><br><br>
	
	<center>
	<table border=0>
		<tr>
			<td width='200' align='middle' valign='middle'><a href='/'><img src='/img/smith-software-logo-maior.png' width=300></a></td>
		</tr>
		<tr>
			<td align='center' valign='middle'>
				<table style='border-radius:10px;border:2px solid <?php echo VIEW_COLOR; ?>;width:300px;'>
					<tr id=tr1>
						<td align=right><br><font size=2 color=<?php echo VIEW_COLOR; ?>>Email:</font></td>
						<td><br><input style='border-radius:10px;border-color:<?php echo VIEW_COLOR; ?>;' id='dc_mail' name='dc_mail' type='text' size='15' value=''></td>
					</tr>
					<tr id=tr2>
						<td align=right><font size=2 color=<?php echo VIEW_COLOR; ?>>Senha:</font></td>
						<td><input style='border-radius:10px;border-color:<?php echo VIEW_COLOR; ?>;' id='dc_pass' name='dc_pass' type='password' size='15' value=''></td>
					</tr>
					<tr id=tr3>
						<td>&nbsp;</td>
						<td>
							<input style='border-radius:10px;border-color:<?php echo VIEW_COLOR; ?>;color:<?php echo VIEW_COLOR; ?>;background-color:#ffffff;' id=bt_login name=bt_login type='button' value='Acessar'>
							<br><br>
						</td>
					</tr>
					<tr><td colspan=2><div id='loading'></div></td></tr>
				</table>
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
    $('#bt_login').click(function() {
    	var ml = $('#dc_mail').val();
        var ps = $('#dc_pass').val();
        
        if (ml == '') { alert('Campo Email vazio, favor preencher.'); return false; }
        if (ps == '') { alert('Campo Senha vazio, favor preencher.'); return false; }
       	
        $('#tr1').remove();
        $('#tr2').remove();
        $('#tr3').remove();
        
        $("#loading").append("<center><br><img src='/img/loading.gif' width='50'><br><br></center>");
        $.ajax({
        	type: 'POST', url: '/', data: { u: 'LoginFacade/login', d: ml+'@@@'+ps }, 
        	success: function(rs) {
        		$("#mbody").empty();
        		$("#mbody").append(rs);
        		$("#loading").empty();
        	}, 
        	error: function() { alert('Erro inexperado!'); } 
        });
        return false;
   	});
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
