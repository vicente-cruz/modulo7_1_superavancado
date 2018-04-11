//function editar(id)
function editar(obj)
{
    var tr = $(obj).closest('tr');
    var nome = tr.attr('data-nome');
    var email = tr.attr('data-email');
    var senha = tr.attr('data-senha');
    var id = tr.attr('data-id');
    
    $('#modal-editar').find('.modal-body').find('input[name=nome]').val(nome);
    $('#modal-editar').find('.modal-body').find('input[name=email]').val(email);
    $('#modal-editar').find('.modal-body').find('input[name=senha]').val(senha);
    $('#modal-editar').find('.modal-body').find('input[name=id]').val(id);
    
    $('#modal-editar').find('.modal-body').find('form').on('submit', salvar);
    $('#modal-editar').modal('show');
    
//    $.ajax({
//        url:'editar.php',
//        type:'POST',
//        data:{id:id},
//        beforeSend:function() {
//            $('#modal').find('.modal-body').html('Carregando...');
//            $('#modal').modal('show');
//        },
//        success:function(html) {
//            $('#modal').find('.modal-body').html(html);
//            $('#modal').find('.modal-body').find('form').on('submit', salvar);
//            $('#modal').modal('show');
//        }
//    });
}

function salvar(e)
{
    e.preventDefault();

    var nome = $(this).find('input[name=nome]').val();
    var email = $(this).find('input[name=email]').val();
    var senha = $(this).find('input[name=senha]').val();
    var id = $(this).find('input[name=id]').val();

    $.ajax({
        url:'salvar.php',
        type:'POST',
        data:{nome:nome, email:email, senha:senha, id:id},
        success:function(){
            alert('Dados alterados com sucesso!');
            window.location.href=window.location.href;
        }
    });
}

function excluir(id)
{
    $('#modal').find('.modal-body').html('Tem certeza de que deseja excluir id '+id+'?<br/><button onclick="ExcluirUsuario('+id+')">Sim</button><button onclick="Fechar()">Não</button>');
    $('#modal').modal('show');
}

function Fechar()
{
    $('#modal').modal('hide');
}

function ExcluirUsuario(id)
{
    $.ajax({
        url:'excluir.php',
        type:'POST',
        data:{id:id},
        success:function(){
            alert('Usuário excluído com sucesso!');
            window.location.href = window.location.href;
        }
    });
}