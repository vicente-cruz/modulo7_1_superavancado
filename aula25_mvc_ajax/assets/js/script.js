$(document).ready(function(){
    $('button').click(function(){
        var nome = $('#nome').val();
        
        $.ajax({
            url:'http://cursophp.pc/modulo5_intermediario/aula40_mvc_ajax/ajax',
            type:'POST',
            data:{nome:nome},
            dataType:'json',
            success:function(json) {
                $('.borda').html(json.frase);
            }
        });
    });
});