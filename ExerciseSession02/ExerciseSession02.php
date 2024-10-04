<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Modificar Array en Sesión</title>
</head>
<body>

<?php
session_start();

if (!isset($_SESSION['numeros'])) {
    $_SESSION['numeros'] = [10, 20, 30];
}

if (isset($_POST['modificar'])) {
    $posicion = $_POST['posicion'];
    $nuevo_valor = $_POST['nuevo_valor'];
    $_SESSION['numeros'][$posicion] = $nuevo_valor;
}

if (isset($_POST['promedio'])) {
    $promedio = array_sum($_SESSION['numeros']) / count($_SESSION['numeros']);
}

if (isset($_POST['reset'])) {
    $_SESSION['numeros'] = [10, 20, 30];
}
?>

<h1>Modify array saved in sesion</h1>

<form method="post">
    <label>Posición a modificar:</label>
    <select name="posicion">
        <?php foreach ($_SESSION['numeros'] as $i => $valor): ?>
            <option value="<?= $i ?>"><?= $i ?></option>
        <?php endforeach; ?>
    </select>

    <label>Nuevo valor:</label>
    <input type="text" name="nuevo_valor" required>

    <button type="submit" name="modificar">Modificar</button>
    <button type="submit" name="promedio">Promedio</button>
    <button type="submit" name="reset">Resetear</button>
</form>

<p>Array actual: <?= implode(", ", $_SESSION['numeros']) ?></p>

<?php if (isset($promedio)): ?>
    <p>Promedio: <?= $promedio ?></p>
<?php endif; ?>

</body>
</html>
