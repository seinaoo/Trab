<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $taskName = htmlspecialchars($_POST['task-name']);
    $dueDate = htmlspecialchars($_POST['due-date']);
    $priority = htmlspecialchars($_POST['priority']);
    $description = htmlspecialchars($_POST['description']);

    echo "<h1>Tarefa Adicionada com Sucesso!</h1>";
    echo "<p><strong>Nome da Tarefa:</strong> " . $taskName . "</p>";
    echo "<p><strong>Data de Entrega:</strong> " . $dueDate . "</p>";
    echo "<p><strong>Prioridade:</strong> " . $priority . "</p>";
    echo "<p><strong>Descrição:</strong> " . $description . "</p>";
  } else {
    echo "<p>Houve um erro ao enviar o formulário. Por favor, tente novamente.</p>";
  }
?>
