Projeto  feito com framework laravel 5.4

primeiro deve criar um banco de dados com o nome "clientes'
executar a migration via php artisan no terminal  (php artisan make:migrate)

o código possui um arquivo  seeder para popular o banco de dados como teste, basta usar  o comando (php artisan db:seed) via terminal.

ou pode usar o meu banco de teste que está exportado no arquivo db_codificar.sql que se encontra na pasta raiz da aplicação.

o site está com css bootstrap , porém não responsivo.(resolução md )

o controle de rotas e validação passa todo pelo controller.

utilizei o framework "DataTables" para fazer a paginação e o filtro de busca da tabela, me senti mais confortável pois ainda não trabalhei com oo recurso paginate do laravel en outros projetos.

 Eu fiz a pesquisa dretornando os dados ordenados por ordem decrescente do campo data - created_at (campo de dateTime padrão do laravel),
porém o dataTables por padrão ordena os campos por ordem alfabética , mas todos os campos da tabela tem recursos de filtrar os resultados por ordem crescente e decrscente por valores e datas, então tem como visualizar pelos ultimos registros lançados.

códigos e principais funções comentadas.

o crud está totalmente funcional com inserção , update e busca por período entre datas.
Porém tive um problema com o recurso modal do botão de exclusão.
Ele estava encaminhando sempre  o id do primeiro campo como parametro, impossibilitando a exclusão do registro correto no banco, então como metódo de segurança para exclusão eu fiz um checkbox que quando acionado mostra/esconde o botão de excluir, pois já que ao ser selecionado faz a exclusão imediata do registro.





