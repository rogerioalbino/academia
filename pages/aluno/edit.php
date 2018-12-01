<article>
    <section class="jumbotron">

        <?php
            if(isset($_GET['action']) && $_GET['action'] == 'update'){
                $id = (int)$_GET['id'];

                $sqlSelect = 'SELECT * FROM aluno WHERE id = :id';

                try{
                    // Variavel "select" abaixo é um exemplo.
                    // Ou seja, pode ser qualquer nome
                    $select = $db->prepare($sqlSelect);
                    $select->bindValue(':id', $id, PDO::PARAM_INT);
                    $select->execute();
                } catch (PDOException $e){
                    echo $e->getMessage();
                }

                $result = $select->fetch(PDO::FETCH_OBJ);
        ?>

            <ul class="breadcrumb">
                <li><a href="/pages/aluno/gerenciamento.php">Aluno</a> <span class="divider"></span> </li>
                <li>Atualizar</li>
            </ul>
            <form method="post" action="">
                <div class="input-group">

                    <input type="text" name="matricula" class="form-control" value="<?= $result->matricula; ?>" placeholder="matricula"/>
                    <input type="text" name="nome" class="form-control" value="<?= $result->nome; ?>" placeholder="nome"/>
                    <input type="text" name="endereco" class="form-control" value="<?= $result->endereco; ?>" placeholder="endereco"/>
                    <input type="text" name="bairro" class="form-control" value="<?= $result->bairro; ?>" placeholder="bairro"/>
                    <input type="text" name="cidade" class="form-control" value="<?= $result->cidade; ?>" placeholder="cidade"/>
                    <input type="text" name="cep" class="form-control" value="<?= $result->cep; ?>" placeholder="cep"/>
                    <input type="text" name="uf" class="form-control" value="<?= $result->uf; ?>" placeholder="uf"/>
                    <input type="text" name="telefone" class="form-control" value="<?= $result->telefone; ?>" placeholder="telefone"/>
                    <input type="text" name="celular" class="form-control" value="<?= $result->celular; ?>" placeholder="celular"/>
                    <input type="text" name="sexo" class="form-control" value="<?= $result->sexo; ?>" placeholder="sexo"/>
                    <input type="text" name="cpf" class="form-control" value="<?= $result->cpf; ?>" placeholder="cpf"/>
                    <input type="text" name="rg" class="form-control" value="<?= $result->rg; ?>" placeholder="rg"/>
                    <input type="text" name="cref" class="form-control" value="<?= $result->cref; ?>" placeholder="cref"/>
                    <input type="text" name="email" class="form-control" value="<?= $result->email; ?>" placeholder="email"/>

                </div>
                
                <br>
                <input type="submit" class="btn btn-primary pull-right" value="Atualizar Dados" name="atualizar"/>
            </form>
        <?php } else { ?>
            <form method="post" action="">

                <div class="input-group">

                    <input type="text" name="matricula" class="form-control" placeholder="matricula"/>
                    <input type="text" name="nome" class="form-control" placeholder="nome"/>
                    <input type="text" name="endereco" class="form-control" placeholder="endereco"/>
                    <input type="text" name="bairro" class="form-control" placeholder="bairro"/>
                    <input type="text" name="cidade" class="form-control" placeholder="cidade"/>
                    <input type="text" name="cep" class="form-control" placeholder="cep"/>
                    <input type="text" name="uf" class="form-control" placeholder="uf"/>
                    <input type="text" name="telefone" class="form-control" placeholder="telefone"/>
                    <input type="text" name="celular" class="form-control" placeholder="celular"/>
                    <input type="text" name="sexo" class="form-control" placeholder="sexo"/>
                    <input type="text" name="cpf" class="form-control" placeholder="cpf"/>
                    <input type="text" name="rg" class="form-control" placeholder="rg"/>
                    <input type="text" name="cref" class="form-control" placeholder="cref"/>
                    <input type="text" name="email" class="form-control" placeholder="email"/>
                    
                </div>
                <br>
                <input type="submit" class="btn btn-primary pull-right" value="Salvar" name="enviar"/>
            </form>
        <?php } ?>
    </section>
<article>


<?php

#UPDATE
if(isset($_POST['atualizar'])){
    $id = (int)$_GET['id'];
    $matricula = $_POST['matricula'];
    $endereço = $_POST['endereco'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $cep = $_POST['cep'];
    $uf = $_POST['uf'];
    $telefone = $_POST['telefone'];
    $celular = $_POST['celular'];
    $sexo = $_POST['sexo'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $cref = $_POST['cref'];
    $email = $_POST['email'];
    $data_nascimento = $_POST['data_nascimento'];
    $situação = $_POST['situacao'];

    $sqlUpdate = 'UPDATE aluno SET nome = :nome, email = :email WHERE id = :id';

    try{
        // Variavel "update" abaixo é um exemplo.
        // Ou seja, pode ser qualquer nome
        $update = $db->prepare($sqlUpdate);
        $update->bindValue(':id', $id, PDO::PARAM_INT);
        $create->bindValue(':matricula', $matricula, PDO::PARAM_STR);
        $create->bindValue(':nome', $nome, PDO::PARAM_STR);
        $create->bindValue(':endereco', $endereco, PDO::PARAM_STR);
        $create->bindValue(':bairro', $bairro, PDO::PARAM_STR);
        $create->bindValue(':cidade', $cidade, PDO::PARAM_STR);
        $create->bindValue(':cep', $cep, PDO::PARAM_STR);
        $create->bindValue(':uf', $uf, PDO::PARAM_STR);
        $create->bindValue(':telefone', $telefone, PDO::PARAM_STR);
        $create->bindValue(':celular', $celular, PDO::PARAM_STR);
        $create->bindValue(':sexo', $sexo, PDO::PARAM_STR);
        $create->bindValue(':cpf', $cpf, PDO::PARAM_STR);
        $create->bindValue(':rg', $rg, PDO::PARAM_STR);
        $create->bindValue(':cref', $cref, PDO::PARAM_STR);
        $create->bindValue(':email', $email, PDO::PARAM_STR);
        $create->bindValue(':data_nascimento', $data_nascimento, PDO::PARAM_STR);
        $create->bindValue(':situação', $situação, PDO::PARAM_STR);
        if($update->execute()){
            echo "
            <p class=\"alert alert-success\">
                Atualizado com sucesso!
            </p>";
            }
        }
    catch (PDOException $e){
            echo "
            <p class=\"alert alert-danger\">
                Erro ao atualizar dados! " . $e->getMessage() . "
            </p>";
    }
}

# DELETE
if(isset($_GET['action']) && $_GET['action'] == 'delete'){
    $id = (int)$_GET['id'];

    $sqlDelete = 'DELETE FROM aluno WHERE id = :id';

    try{
        // Variavel "delete" abaixo é um exemplo.
        // Ou seja, pode ser qualquer nome
        $delete = $db->prepare($sqlDelete);
        $delete->bindValue(':id', $id, PDO::PARAM_INT);
        //$delete->bindValue(':nome', $nome, PDO::PARAM_STR);
        //$delete->bindValue(':email', $email, PDO::PARAM_STR);
        if($delete->execute()){
            echo "
            <p class=\"alert alert-success\">
                Deletado com sucesso!
            </p>";
        }
    }
    catch (PDOException $e){
        echo "
            <p class=\"alert alert-danger\">
                Erro ao deletar dados! <br  />
                 Erro: " . $e->getMessage() . "
            </p>";
    }
}
?>