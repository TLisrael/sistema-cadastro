<?php
require_once('conexao.php');
$filtroEmail = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$dadosForm = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if($dadosForm) {
        // Se os dados do formulario nao forem vazios, adiciona cada string em sua devida coluna
        $query = "INSERT INTO usuarios (nome, email, profissao) VALUES (:nome, :email, :profissao)";
        $contato = $conn->prepare($query);
        $contato->bindParam(':nome', $dadosForm['nome']);
        $contato->bindParam(':email', $dadosForm['email']);
        $contato->bindParam(':profissao', $dadosForm['profissao']);

        $contato->execute();
        
        /*
         * Checa se houve inserção e retorna mensagem de Sucesso
         */
        if ($contato->rowCount()) {
            echo "<p style='color:green;'>Mensagem enviada com sucesso!</p>";

        } else {
            echo "<p style='color:red;'>Erro</p>";
        }
    }