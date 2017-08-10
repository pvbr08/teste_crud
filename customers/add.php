<?php 
    require_once('function.php'); 
    add();
?>

<?php include(HEADER_TEMPLATE); ?>

    <h2>Novo Cliente</h2>

    <form action="add.php" method="post">
    
        <hr />
        <div class="row">
            <div class="form-group col-md-7">
                <label for="name">Nome / Razão Social</label>
                <input type="text" class="form-control" name="customer['name']">
            </div>

            <div class="form-group col-md-3">
                <label for="campo2">CNPJ / CPF</label>
                <input type="text" class="form-control" name="customer['cpf_cnpj']">
            </div>

            <div class="form-group col-md-2">
                <label for="campo3">Data de Nascimento</label>
                <input type="text" class="form-control" name="customer['birthdate']">
            </div>
        </div>
  
        <div class="row">
    
            <div class="form-group col-md-2">
                <label for="campo3">Data de Cadastro</label>
                <input type="text" class="form-control" name="customer['created']" disabled>
            </div>
        </div>
  
  
        <div id="actions" class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Salvar</button>
                    <a href="index.php" class="btn btn-default">Cancelar</a>
            </div>
        </div>
    </form>

<?php include(FOOTER_TEMPLATE); ?>