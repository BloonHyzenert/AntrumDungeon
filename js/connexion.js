$('#formu .btn-12').on('click',function(event){
    event.preventDefault();
    console.log('AJAX');
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
    console.log('AJAX');
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
