
<?php include_once('../../layout/header.php'); ?>

<h3>Gerenciamento Funcionario</h3>

</header>

<?php include_once('./add.php'); ?>
<?php include_once('./edit.php'); ?>
 
<article>
    <section class="jumbotron">
        <table class="table table-hover">
            <thead>            
                <tr>
                    <th>#</th>
                    <th>Matricula:</th>
                    <th>Nome:</th>
                    <th>Endereço:</th>
                    <th>Bairro:</th>
                    <th>Cidade:</th>
                    <th>CEP:</th>
                    <th>UF:</th>
                    <th>Celular:</th>
                    <th>EMail:</th>
                    <th>RG:</th>
                    <th>Cref:</th>
                    <th>Sexo:</th>
                    <th>Ações:</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sqlRead = 'SELECT * FROM aluno';
                    try{
                        // Variavel "read" abaixo é um exemplo.
                        // Ou seja, pode ser qualquer nome
                        $read = $db->prepare($sqlRead);
                        $read->execute();
                    } catch (PDOException $e){
                        echo $e->getMessage();
                    }
                    while( $rs = $read->fetch(PDO::FETCH_OBJ)){
                    ?>

                <tr>

                    <td><?=$rs->id;?></td>
                    <td><?=$rs->matricula;?></td>
                    <td><?=$rs->nome;?></td>
                    <td><?=$rs->endereco;?></td>
                    <td><?=$rs->Bairro;?></td>
                    <td><?=$rs->Cidade;?></td>
                    <td><?=$rs->CEP;?></td>
                    <td><?=$rs->UF;?></td>
                    <td><?=$rs->Celular;?></td>
                    <td><?=$rs->email;?></td>
                    <td><?=$rs->rg;?></td>
                    <td><?=$rs->cref;?></td>
                    <td><?=$rs->sexo;?></td>

                    <td>
                        <div class="btn-group" role="group" aria-label="Editar ou Deletar Registro">
                            <a href="gerenciamento.php?action=update&id=<?= $rs->id; ?>" class="btn btn-default" aria-label="Editar">
                                <i aria-hidden="true" class="glyphicon-pencil glyphicon" style="font-size:10px"></i>
                            </a>
                            <a href="gerenciamento.php?action=delete&id=<?= $rs->id; ?>" class="btn btn-danger" aria-label="Apagar" onclick="return confirm('Deseja deletar este registro?')">
                                <i aria-hidden="true" class="glyphicon-remove glyphicon" style="font-size:10px"></i>
                            </a>
                        </div>
                    </td>
                </tr>
                    <?php } ?>
            </tbody>

            </thead>
        </table>
    </section>
</article>
</div>

<?php include_once('../../layout/footer.php'); ?>
