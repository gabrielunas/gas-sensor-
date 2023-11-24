<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Recupera os dados do formulário
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $sensorInfo = htmlspecialchars($_POST["sensorInfo"]);

    // Configurações de email
    $to = "seu-email@dominio.com";
    $subject = "Novo Cadastro - Sensor de Gás";
    $message = "Nome: $name\n";
    $message .= "Email: $email\n";
    $message .= "Informações do Sensor: $sensorInfo\n";

    // Envia o email
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        // Resposta de sucesso
        echo json_encode(["success" => true, "message" => "Cadastro realizado com sucesso. Você receberá atualizações por email."]);
    } else {
        // Resposta de erro
        echo json_encode(["success" => false, "message" => "Erro ao processar o cadastro. Tente novamente mais tarde."]);
    }
} else {
    // Resposta de erro se não for uma solicitação POST
    echo json_encode(["success" => false, "message" => "Acesso não autorizado."]);
}
?>