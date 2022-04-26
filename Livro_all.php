<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <h1 align="center">Livros</h1>

        <a class="btn btn-success" style="margin-bottom: 5%;" href="./?classe=Livro&acao=create">Novo</a>

        <table class="table table-striped table-dark table-hover">
            <thead>
            <tr>
                <th>LIVRO_ID</th>
                <th>TITULO</th>
                <th>AUTORES</th>
                <th>SECAO</th>
                <th>AÇÕES</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($livros as $livro){ ?>
                <tr>
                    <td> <?=$livro->id?> </td>
                    <td> <?=$livro->titulo?> </td>
                    <td> <?=$livro->autores?> </td>
                    <td> <?=$livro->secao_id?> </td>
                    <td>
                            <a class="btn btn-primary" href="./?classe=Livro&acao=update&id=<?=$livro->id?>"><i class="fa fa-edit" aria-hidden="true"></i> Editar</a>
                            <button
                                type='button'
                                class='btn btn-danger'
                                data-toggle='modal'
                                data-target='#exclui-modal-<?=$livro->id?>'
                                data-id='<?=$livro->id?>'>
                                <i class="fa fa-trash-o" aria-hidden="true"></i> Excluir
                            </button>
                    </td>
                </tr>

                <div class="modal fade" id="exclui-modal-<?=$livro->id?>">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Cabeçalho -->
                            <div class="modal-header">
                                <h4 class="modal-title">Excluir</h4>
                                <button type="button" class="close" data-dismiss="modal">×</button>
                            </div>

                            <!-- Corpo -->
                            <div class="modal-body">
                                Confirma exclusão?
                            </div>

                            <!-- Rodapé -->
                            <div class="modal-footer">
                                <a class="btn btn-primary" href="./?classe=Livro&acao=delete&id=<?=$livro->id?>">Sim</a>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Não</button>
                            </div>

                        </div>
                    </div>
                </div>

            <?php } ?>
            </tbody>
        </table>
    </div>
    <div class="col-md-3"></div>
</div>