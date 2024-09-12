<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    echo "<h1>Mensagem Recebida!</h1>";
    echo "<p><strong>Nome:</strong> " . $name . "</p>";
    echo "<p><strong>Email:</strong> " . $email . "</p>";
    echo "<p><strong>Mensagem:</strong> " . $message . "</p>";
  } else {
    echo "<p>Houve um erro ao enviar o formulário. Por favor, tente novamente.</p>";
  }
?>
