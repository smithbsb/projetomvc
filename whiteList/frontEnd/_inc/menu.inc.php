<?php 
echo "<td width='140px' valign='top'>";
echo "<table style='border-radius:10px;border:3px solid ".VIEW_COLOR.";width:160px;'>";
    
echo "<tr bgcolor='".VIEW_COLOR."'>";
echo "<td align='center' valign='middle'><font size='3' color='#ffffff'><strong>Dom&iacute;nios</strong></font></td>";
echo "</tr>";
    
    echo "<tr><td onmouseover=\"this.style.backgroundColor='#c0c0c0';\" onmouseout=\"this.style.backgroundColor='#ffffff';\" align='left' valign='middle'>";
    echo "&nbsp;<a style='text-decoration:none;' href='#' id='lk_users'><font size='2' color='#000000'>Manter Usu&aacute;rios</font></a>";
    echo "</td></tr>";
    
    
echo "</table>";
echo '<br>';
echo "<table style='width:160px;'>";
echo "<tr>";
echo "<td align='center' valign='middle'>";
echo "<a style='text-decoration:none;' href='#' id='bt_logout'>";
echo "<font size='2' color='#ffffff'><img src='/img/logout.png' width='15%'></font>";
echo "</a><br><div id='loadingLogout'></div><br>";
echo "</td>";
echo "</tr>";
echo "</table>";
echo "</td>";
?>
<script src="/js/jquery.min.js"></script>
<script>
$('#lk_users').click(function() {
	$("#loading").append("<center><img src='/img/loading.gif' width='50'></center>");
	$.ajax({
    	type: 'POST', url: '/', data: { u: 'UserFacade/readUsers', d: '' }, 
        success: function(rs) {
        	$("#mbody").empty();
        	$("#mbody").append(rs);
        	$("#loading").empty();
        }, 
        error: function() { alert('Erro inexperado!'); } 
	});
    return false;
});
$('#bt_logout').click(function() {
	$("#loading").append("<center><img src='/img/loading.gif' width='50'></center>");
	$.ajax({
    	type: 'POST', url: '/', data: { u: 'LoginFacade/logout', d: '' }, 
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
