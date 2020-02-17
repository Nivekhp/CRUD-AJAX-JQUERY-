$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();
	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;                        
			});
		} else{
			checkbox.each(function(){
				this.checked = false;                        
			});
		} 
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
        }
    });
    
    $("#botao").click(function(){
        var form = $("#formulario").serialize();
        var url = "Controller/UsuarioController.php";
        $.post(url, form,function (json, textStatus, jqXHR) {
                if(jqXHR.status == 200){
                    toastr.success(json.msg);
                }else{
                    toastr.error(json.msg);
                }
            },
            "json"
        );
        return false;
       });

       $("#teste2").click(function(){
         var id = $(this).val();
            //var id = $(".delete").val();
            console.log(id);
           return false;
       });
      
  

  
          
  
});
