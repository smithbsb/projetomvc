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