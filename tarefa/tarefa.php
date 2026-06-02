<?php
@session_start();

if (!isset($_SESSION['lista_tarefas'])) {
    $_SESSION['lista_tarefas'] = array();
}


$tarefa = $_POST['nova_tarefa'] ?? null;

if (!empty($tarefa)) {
    $_SESSION['lista_tarefas'][] = trim($tarefa);
    
}


if (isset($_POST['remover_id'])) {
    $id_para_remover = $_POST['remover_id'];

    
    unset($_SESSION['lista_tarefas'][$id_para_remover]);

    
    $_SESSION['lista_tarefas'] = array_values($_SESSION['lista_tarefas']);

    
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
</script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

<style>
#add {
    font-size: 15px;

}
</style>


<form method="POST" class="p-1 m-1 mt-2 ">
    <input type="text" name="nova_tarefa" placeholder="Digite uma tarefa" required>
    <button type="submit" id="add">

        <i class="bi bi-check-lg"></i>
    </button>
</form>

<hr>


<ul>
    <?php if (!empty($_SESSION['lista_tarefas'])): ?>
    <?php foreach ($_SESSION['lista_tarefas'] as $index => $item): ?>
    <li class="p-2">
        <?php echo $item; ?>

        <form method="POST" style="display: inline;">
            <input type="hidden" name="remover_id" value="<?php echo $index; ?>">
            <button type="submit" style="color: red; margin-left: 10px;">
                <i class="bi bi-trash3"></i>
            </button>
        </form>
    </li>
    <?php endforeach; ?>
    <?php else: ?>
    <p>Nenhuma tarefa na lista.</p>
    <?php endif; ?>
</ul>