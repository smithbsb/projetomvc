<?php

function userView ($d, $msg_ret, $data_ret) {
    @session_start();
    $secUtil = new SecurityUtil();
    $secUtil->authenticateSession();
    $secUtil->authenticateUser();
    $secUtil->recordAccess('Access Page: user.View.php');
    
    $list_of_users = $d;
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
    				
    				<legend><a style='text-decoration:none;' href='#' id='btShowInsertUser'><font size=2 color='#000000'>Criar Usu&aacute;rio</font></a></legend>
    				<div id='divInsertUser' style='display:none;'>
        			
        				<br>
        				
        				<table>
        					<tr>
        						<td align=right><font size=2>Nome:</font></td>
        						<td><input style='border-radius:10px;border-color:<?php echo VIEW_COLOR; ?>;' type=text id='dc_name' name='dc_name'></td>
        					</tr>
        					<tr>
        						<td align=right><font size=2>Email:</font></td>
        						<td><input style='border-radius:10px;border-color:<?php echo VIEW_COLOR; ?>;' type=text id='dc_mail' name='dc_mail'></td>
        					</tr>
        					<tr>
        						<td align=right><font size=2>Senha:</font></td>
        						<td><input style='border-radius:10px;border-color:<?php echo VIEW_COLOR; ?>;' type=text id='dc_pass' name='dc_pass'></td>
        					</tr>
        					<tr>
                				<td align=right>&nbsp;</td>
                				<td>
                					<input style='border-radius:10px;border-color:<?php echo VIEW_COLOR; ?>;color:<?php echo VIEW_COLOR; ?>;background-color:#ffffff;' type=button id='bt_createUser' name='bt_createUser' value='Criar'>
                					<div id='loadingCreate'></div>
                				</td>
                			</tr>
        				</table>
            		
            			<br>
            			
            		</div>
            	
            	</fieldset>
            	</center>
    			<!-- Final - Form -->
    			
    			<br><br>
				<div id='loadingDeleteUpdate'></div>
				<!-- Início - Grid -->
				<font size=2>
				<table border=0 style='border-radius:10px;border:2px solid <?php echo VIEW_COLOR; ?>;width:550px;'>
    				<?php 
    				if (isset($list_of_users) && count($list_of_users) > 0) {
    				    foreach ($list_of_users as $nuM => $i_user) {
    				        echo '<tr>';
    				        
    				        $ft_color = "#000000";
    				        if ($i_user->getcostatus() == 0) {
    				            $ft_color = "#ff0000";
    				        }
    				        
    				        echo '<td><a style=\'text-decoration:none;\' href=\'#\' onclick=\'bt_prepareUpdateUser('.$i_user->getcouseuser().');\'><font color='.$ft_color.'>'.$i_user->getdcname().' ('.$i_user->getdcmail().')</font></a></td>';
    				        echo '<td width=10 align=right><a href=\'#\' onclick=\'bt_deleteUser('.$i_user->getcouseuser().');\'><img width=20 src=\'/img/trash.png\'></a></td>';
    				        echo '<tr>';
    				        if (count($list_of_users) > 1 && count($list_of_users) != $nuM+1) {
    				            echo '<tr><td colspan=4><hr></td></tr>';
    				        }
    				    }
    				} else {
    				    echo '<tr><td>Sem Usuarios Cadastrados.</td></tr>';
    				}
    				?>
    			</table>
    			</font>
			    <!-- Final - Grid -->
			
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
    $(document).attr("title", "Manter Usuários");
    $('#btShowInsertUser').click(function(){
		if ($('#divInsertUser').css('display') == 'none') {
			$('#divInsertUser').css('display', 'block');
		} else if ($('#divInsertUser').css('display') == 'block') {
			$('#divInsertUser').css('display', 'none');
		}
		return false;
	});
	$('#bt_createUser').click(function() {
    	var dn = $('#dc_name').val();
    	var dm = $('#dc_mail').val();
    	var ds = $('#dc_pass').val();
    	
    	if (dn == '') { alert('Campo Nome Vazio, favor preencher.'); return false; }
    	if (dm == '') { alert('Campo Email Vazio, favor preencher.'); return false; }
    	if (ds == '') { alert('Campo Senha Vazio, favor preencher.'); return false; }
    	
    	$("#loadingCreate").append("<center><img src='/img/loading.gif' width='50'></center>");
    	$.ajax({
    		type: 'POST', url: '/', data: { u: 'UserFacade/createUser', d: dn+'@@@'+dm+'@@@'+ds }, 
    		success: function(rs) {
    			$("#mbody").empty();
    			$("#mbody").append(rs);
    			$("#loading").empty();
    		}, 
    		error: function() { alert('Erro inexperado!'); } 
    	});
    	return false;
    });
	function bt_deleteUser (couseuser) {
		if (confirm("Tem certeza que deseja deletar esse Usuário?")) {
        	$("#loadingDeleteUpdate").append("<center><img src='/img/loading.gif' width='50'></center>");
        	$.ajax({
        		type: 'POST', url: '/', data: { u: 'UserFacade/deleteUser', d: couseuser }, 
        		success: function(rs) {
        			$("#mbody").empty();
        			$("#mbody").append(rs);
        			$("#loading").empty();
        		}, 
        		error: function() { alert('Erro inexperado!'); } 
        	});
        }
    	return false;
    }
    function bt_prepareUpdateUser (couseuser) {
	   	$("#loadingDeleteUpdate").append("<center><img src='/img/loading.gif' width='50'></center>");
       	$.ajax({
       		type: 'POST', url: '/', data: { u: 'UserFacade/updateUser', d: '0'+'@@@'+couseuser }, 
       		success: function(rs) {
       			$("#mbody").empty();
       			$("#mbody").append(rs);
       			$("#loading").empty();
       		}, 
       		error: function() { alert('Erro inexperado!'); } 
       	});
    	return false;
    }
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
