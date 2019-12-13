function load(){
    var objDiv = document.getElementById("chatBloc");
    objDiv.scrollTop = objDiv.scrollHeight;
}
$('#js-send').on('click',function(event){
    event.preventDefault();
    console.log('AJAX');
    if($("#send .messBlock #inputText").val().length!==0){
        $.ajax({
            url : 'send.php',
            type : 'POST',
            data :{
                message : $("#send .messBlock #inputText").val(),
                idForum : getURLParameter('idForum'),
            },
            dataType:'text',
            success : function(retour) {
                $( "#chatBloc" ).append( retour );
                $("#send .messBlock #inputText").val("");
                var objDiv = document.getElementById("chatBloc");
                objDiv.scrollTop = objDiv.scrollHeight;
            },
            fail: function(a,b,c){
                console.log(a,b,c);
            }
        });
    }
});
$('#js-create').on('click',function(event){
    event.preventDefault();
    console.log('AJAX');
    if($("#Subject").val().length!==0){
        $.ajax({
            url : 'create.php',
            type : 'POST',
            data :{
                Subject : $("#Subject").val(),
            },
            dataType:'text',
            success : function(retour) {
                console.log(retour);
                $( "#table" ).append( retour );
                $("#Subject").val("");
                fermer();
            },
            fail: function(a,b,c){
                console.log(a,b,c);
            }
        });
    }else {
        $("#msgError").html("Le Sujet est invalide");
    }
});
function getURLParameter(name) {
  return decodeURIComponent((new RegExp('[?|&]' + name + '=' + '([^&;]+?)(&|#|;|$)').exec(location.search) || [null, ''])[1].replace(/\+/g, '%20')) || null;
}
