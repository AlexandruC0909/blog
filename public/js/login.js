$(document).ready(function(){
    
    $("#log_in").click(function(){
        var pseudo = $("#login_pseudo").val();
        var pass = $("#login_pass").val();
        
        var isValid = true;
        
        
        if(pseudo == ''){
            isValid = false;
            $("#error_pseudo").html("<div class='alert alert-danger'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>le pseudo-champ ne peut pas être vide</div>");
            
        }else{
            $("#error_pseudo").html("");
        }
        
        if(pass == ''){
            isValid = false;
            $("#error_pass").html("<div class='alert alert-danger'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>Le champ mot de passe ne peut pas être vide</div>");
            
        }else{
            $("#error_pass").html("");
        }
        if(isValid == true){
            
            $.ajax({
                url: "../../view/frontend/login.php",
                type: "POST",
                data: {
                    pseudo: pseudo,
                    pass: pass,        
                },
                success: function(){
                    
                }
            });
            
        }   else    {
                return false;
        }
    });

   
    
    $(".modal").on("hidden.bs.modal", function(){
        $(this).find(":pseudo, :pass").val('').end();
        $("#error_pseudo").html("");
        $("#error_pass").html("");
        $(".alert-danger").remove();
        $(".alert").remove();
        
    });
    
    
    
    
});

