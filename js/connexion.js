$('#formu .btn-12').on('click',function(event){
    event.preventDefault();
    $.ajax({
        url : 'testConnexion.php',
        type : 'POST',
        data :{
            pseudo : $("#formu #pseudo").val(),
            password : $("#formu #password").val(),
        },
        dataType:'text',
        success : function(retour) {
            if (retour=='success') {
                window.location.href = 'index.php';
            } else {
                $('#msgError').html("Erreur : "+retour);
            }
        }
    });
});
$('#formuCrea .btn-12').on('click',function(event){
    event.preventDefault();
    $.ajax({
        url : 'testCreation.php',
        type : 'POST',
        data :{
            pseudo : $("#formuCrea #pseudo").val(),
            password : $("#formuCrea #password").val(),
            password2 : $("#formuCrea #password2").val(),
        },
        dataType:'text',
        success : function(retour) {
            if (retour=='success') {
                window.location.href = 'connexion.php';
            } else {
                $('#msgError').html("Erreur : "+retour);
            }
        }
    });
});
$('#formuModif .btn-12').on('click',function(event){
    event.preventDefault();
    $.ajax({
        url : 'testModification.php',
        type : 'POST',
        data :{
            oldPassword : $("#formuModif #oldPassword").val(),
            password : $("#formuModif #password").val(),
            password2 : $("#formuModif #password2").val(),
        },
        dataType:'text',
        success : function(retour) {
            if (retour=='success') {
                window.location.href = 'deconnexion.php';
            } else {
                $('#msgError').html("Erreur : "+retour);
            }
        }
    });
});
