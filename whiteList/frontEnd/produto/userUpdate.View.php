<?php

function userUpdateView ($d, $msg_ret, $data_ret) {
    @session_start();
    $secUtil = new SecurityUtil();
    $secUtil->authenticateSession();
    $secUtil->authenticateUser();
    $secUtil->recordAccess('Access Page: userUpdate.View.php');
    
    $userTO = $d;
    
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
    		<td valign=top>
				<br>
				
				<!-- Final - Form -->
				<center>
    			<fieldset style="border-radius:10px;border:2px solid <?php echo VIEW_COLOR; ?>;width:450px;">
					<br>
					    				
    				<input type=hidden id='co_user_alter' name='co_user_alter' value='<?php echo $userTO->getcouseuser(); ?>'>
        			
    				<legend><a style='text-decoration:none;' href='#' id='btShowInsertUser'><font size=2 color='#000000'>Atualizar Usu&aacute;rio</font></a></legend>
    				<table>
        				<tr>
        					<td align=right><font size=2>Nome:</font></td>
        					<td><input style='border-radius:10px;border-color:<?php echo VIEW_COLOR; ?>;' type=text id='dc_name_alter' name='dc_name_alter' value='<?php echo $userTO->getdcname(); ?>'></td>
        				</tr>
        				<tr>
        					<td align=right><font size=2>Email:</font></td>
        					<td><input style='border-radius:10px;border-color:<?php echo VIEW_COLOR; ?>;' type=text id='dc_mail_alter' name='dc_mail_alter' value='<?php echo $userTO->getdcmail(); ?>'></td>
        				</tr>
        				<tr>
        					<td align=right><font size=2>Senha:</font></td>
        					<td><input style='border-radius:10px;border-color:<?php echo VIEW_COLOR; ?>;' type=text id='dc_pass_alter' name='dc_pass_alter' value='<?php echo $userTO->getdcpass(); ?>'></td>
        				</tr>
        				<tr>
        					<td align=right><font size=2>Status:</font></td>
        					<td>
        						<select style='border-radius:10px;border-color:<?php echo VIEW_COLOR; ?>;' id='co_status_alter' name='co_status_alter'>
                					<option value='1' <?php if ($userTO->getcostatus() == 1) { echo "selected"; } ?>>Ativo</option>
                					<option value='0' <?php if ($userTO->getcostatus() == 0) { echo " selected"; } ?>>InAtivo</option>
                				</select>
        					</td>
        				</tr>
        				<tr>
                			<td align=right>&nbsp;</td>
                			<td>
                				<input style='border-radius:10px;border-color:<?php echo VIEW_COLOR; ?>;color:<?php echo VIEW_COLOR; ?>;background-color:#ffffff;' type=button id='bt_updateUser' name='bt_updateUser' value='Atualizar'>
                				<div id='loadingUpdate'></div>
                			</td>
                		</tr>
        			</table>
        			
        			<br>
        			
            	</fieldset>
            	</center>
    			<!-- Final - Form -->
    			
    			<br>
			
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
    $(document).attr("title", "Atualizar Usuário");
    $('#bt_updateUser').click(function() {
    	var co = $('#co_user_alter').val();
    	var dn = $('#dc_name_alter').val();
    	var dm = $('#dc_mail_alter').val();
    	var ds = $('#dc_pass_alter').val();
    	var st = $('#co_status_alter').val();
    	
    	if (dn == '') { alert('Campo Nome Vazio, favor preencher.'); return false; }
    	if (dm == '') { alert('Campo Email Vazio, favor preencher.'); return false; }
    	if (ds == '') { alert('Campo Senha Vazio, favor preencher.'); return false; }
    	
    	$("#loadingUpdate").append("<center><img src='/img/loading.gif' width='50'></center>");
    	$.ajax({
    		type: 'POST', url: '/', data: { u: 'UserFacade/updateUser', d: '1'+'@@@'+co+'@@@'+dn+'@@@'+dm+'@@@'+ds+'@@@'+st }, 
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
