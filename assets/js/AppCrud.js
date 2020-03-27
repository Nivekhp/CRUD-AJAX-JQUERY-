$(document).ready(function(){

    $("#gridUser").DataTable();
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

  //===========================================================================================================================================

   //Inserção do usuario 
    $("#botao").click(function(){
        var form = $("#formulario").serialize()+"&botao=true";
        var url = "Controller/UsuarioController.php";
        console.log(form);
        $.post(url, form,function (json, textStatus, jqXHR) {
                if(jqXHR.status == 200){
                    toastr.options.fadeOut = 10;
                    toastr.success(json.msg);
                }else{
                    toastr.error(json.msg);
                }
            },
            "json"
        );
       });

    //DELETAR USUARIO   
    $(".delete").click(function(){
         var id = $(this).attr("id");
         var url = "Controller/UsuarioController.php/"+id;
         if(confirm("Deseja realmente deletar o registro?")){
         $.ajax({
             type: "post",
             url: url,
             data: {'delete':'true',"id":id},
             dataType:"JSON",
             success: function (json) {
               toastr.success(json.msg);
             }
         });
           return false;
        }
       });

       //PEGA DADOS FORM EDIT 
    $(".edit").click(function(){
        var id = $(this).attr("id");
        var url = "Controller/UsuarioController.php/"+id;
        $.ajax({
            type:"get",
            url:url,
            data:{'getdadosUser':'true','id':id},
            dataType:"JSON",
            success:function(data){
             
                $(".editarUsuario").attr("id",data.id);
                $("#editNome").val(data.nome);
                $("#editEmail").val(data.email);
                $("#editEndereco").val(data.endereco);
                $("#editTelefone").val(data.telefone);

            }
        })
    })

    $(".editarUsuario").click(function () {
        var id = $(this).attr("id");
        var url = "Controller/UsuarioController.php/"+id;
        $.ajax({
            type: "POST",
            url: url,
            data: {"editUser":"true","id":id},
            dataType: "JSON",
            success: function (json) {
            
            }
        });



        return false;
    });


});
