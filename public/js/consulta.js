
function deletar(id) {
    var r = confirm("Esta ação irá excluir permanentemente este artigo.");
    if (r == true) {
        $.ajax({
            url: '/artigo/' + id,
            type: 'GET',
            success: function (data) {
                alert("Item excluído com sucesso");
                location.reload();
            },
            error: function (erro) {
                console.log(erro);
                alert("Houve um erro ao tentar excluir, tente novamente");
            }
        });
    } else {
        console.log("You pressed Cancelar");
    }
}