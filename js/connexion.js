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
                window.location = 'index.php';
            } else {
                $('#msgError').html("Erreur : "+retour);
            }
        }
    });
});
