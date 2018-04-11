$(document).ready(function(){
    $("#modulos").change(function(){
        var item = $(this).val();
        
        $.ajax({
            url:BASE_URL+"home/pegarAulas",
            type:"POST",
            dataType:'json',
            data:{modulo:item},
            success:function(json) {
                var html = "";
                
                for (var i in json) {
                    html += '<option value="'+json[i].id+'">'+json[i].titulo+'</option>';
                }
                $("#aulas").html(html);
            }
        });
    });
});