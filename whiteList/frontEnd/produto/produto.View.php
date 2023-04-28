<?php

function produtoView ($d, $msg_ret, $data_ret) {
    @session_start();
    $secUtil = new SecurityUtil();
    $secUtil->authenticateSession();
    $secUtil->authenticateUser();
    $secUtil->recordAccess('Access Page: produto.View.php');
    
    $list_of_produtos = $d;
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
    				
    				<legend><a style='text-decoration:none;' href='#' id='btShowInsertProduto'><font size=2 color='#000000'>Criar Produto</font></a></legend>
    				<div id='divInsertProduto' style='display:none;'>
        			
        				<br>
        				
        				<table>
        					<tr>
        						<td align=right><font size=2>Produto:</font></td>
        						<td><input style='border-radius:10px;border-color:<?php echo VIEW_COLOR; ?>;' type=text id='dc_produto' name='dc_produto'></td>
        					</tr>
        					<tr>
        						<td align=right><font size=2>Valor:</font></td>
        						<td><input style='border-radius:10px;border-color:<?php echo VIEW_COLOR; ?>;' type=text id='vl_produto' name='vl_produto'></td>
        					</tr>
        					<tr>
                				<td align=right>&nbsp;</td>
                				<td>
                					<input style='border-radius:10px;border-color:<?php echo VIEW_COLOR; ?>;color:<?php echo VIEW_COLOR; ?>;background-color:#ffffff;' type=button id='bt_createProduto' name='bt_createProduto' value='Criar'>
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
    				if (isset($list_of_produtos) && count($list_of_produtos) > 0) {
    				    foreach ($list_of_produtos as $nuM => $i_prod) {
    				        echo '<tr>';
    				        
    				        echo '<td><a style=\'text-decoration:none;\' href=\'#\' onclick=\'bt_prepareUpdateProduto('.$i_prod->getcoprdproduto().');\'><font color='.$ft_color.'>'.$i_prod->getdcproduto().' ('.$i_prod->getvlproduto().')</font></a></td>';
    				        echo '<td width=10 align=right><a href=\'#\' onclick=\'bt_deleteProduto('.$i_prod->getcoprdproduto().');\'><img width=20 src=\'/img/trash.png\'></a></td>';
    				        echo '<tr>';
    				        if (count($list_of_produtos) > 1 && count($list_of_produtos) != $nuM+1) {
    				            echo '<tr><td colspan=4><hr></td></tr>';
    				        }
    				    }
    				} else {
    				    echo '<tr><td>Sem Proodutos Cadastrados.</td></tr>';
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
    $(document).attr("title", "Manter Produto");
    $('#btShowInsertProduto').click(function(){
		if ($('#divInsertProduto').css('display') == 'none') {
			$('#divInsertProduto').css('display', 'block');
		} else if ($('#divInsertProduto').css('display') == 'block') {
			$('#divInsertProduto').css('display', 'none');
		}
		return false;
	});
	$('#bt_createProduto').click(function() {
		alert("Ação Bloqueada!");
		return false;
		
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
	function bt_deleteProduto (coprdproduto) {
		if (confirm("Tem certeza que deseja deletar esse Produto?")) {
        	$("#loadingDeleteUpdate").append("<center><img src='/img/loading.gif' width='50'></center>");
        	$.ajax({
        		type: 'POST', url: '/', data: { u: 'UserFacade/deleteUser', d: coprdproduto }, 
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
    function bt_prepareUpdateProduto (couseuser) {
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
