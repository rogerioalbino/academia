<?php
    if(isset($_POST['enviar'])){

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

        $sql = 'INSERT INTO aluno (
                matricula,
                nome,
                endereco,
                bairro,
                cidade,
                cep,
                uf,
                telefone,
                celular,
                sexo,
                cpf,
                rg,
                cref,
                email,
                data_nascimento,
                situacao
            )';

        $sql .= 'VALUES (
                :matricula,
                :nome,
                :endereco,
                :bairro,
                :cidade,
                :cep,
                :uf,
                :telefone,
                :celular,
                :sexo,
                :cpf,
                :rg,
                :cref,
                :email,
                :data_nascimento,
                :situacao
        )';

        try {
            // Variavel "create" abaixo é um exemplo.
            // Ou seja, pode ser qualquer nome
            $create = $db->prepare($sql);

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


            if($create->execute()){
                echo "
                <p class=\"alert alert-success\">
                    Inserido com sucesso!
                </p>";
            } else {
                echo "
                <p class=\"alert alert-danger\">
                    Erro ao inserir dados! " . $e->getMessage() . "
                </p>";

            }
        } catch(PDOException $e){

        }
    }

?>
