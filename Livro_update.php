<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <h1 align="center">Livros</h1>

        <form action="./?classe=Livro&acao=update&id=<?=$livro->id?>" method="post">
            <div class="form-group">
                <label>Titulo</label>
                <input class="form-control" type="text" id="titulo" name="titulo" value="<?=$livro->titulo?>">
            </div>

            <div class="form-group">
                <label>Autores</label>
                <input class="form-control" type="text" id="autores" name="autores" value="<?=$livro->autores?>">
            </div>

            <div class="form-group">
                <label>Seção ID</label>
                <select class="form-control" id="secao" name="secao">
                    <?php foreach ($secoes as $secao) {
                        if ($livro->secao_id == $secao->id) { ?>
                            <option selected value="<?= $secao->id ?>"><?= $secao->nome ?></option>
                        <?php } else {
                            ?>
                            <option value="<?= $secao->id ?>"><?= $secao->nome ?></option>
                        <?php }
                    }?>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="./" class="btn btn-danger">Voltar</a>
        </form>
    </div>
    <div class="col-md-4"></div>
</div>