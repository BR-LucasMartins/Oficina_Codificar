
$(document).ready( function () {
$('#minhaTabela').DataTable({
    "language": {
"sEmptyTable": "Nenhum registro encontrado",
"sInfo": "<strong> Mostrando de _START_ até _END_ de _TOTAL_ registros </strong>",
"sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
"sInfoFiltered": "(Filtrados de _MAX_ registros)",
"sInfoPostFix": "",
"sInfoThousands": ".",
"sLengthMenu": "<b>Resultados por Página</b> _MENU_ ",
"sLoadingRecords": "Carregando...",
"sProcessing": "Processando...",
"sZeroRecords": "Nenhum registro encontrado",
"sSearch": "<strong> Pesquisar <strong>",
"oPaginate": {
    "sNext": "Próximo",
    "sPrevious": "Anterior",
    "sFirst": "Primeiro",
    "sLast": "Último"
},
"oAria": {
    "sSortAscending": ": Ordenar colunas de forma ascendente",
    "sSortDescending": ": Ordenar colunas de forma descendente"
}
}
});
} );


