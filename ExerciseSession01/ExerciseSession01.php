<?php
session_start();

if (!isset($_SESSION['inventario'])) {
    $_SESSION['inventario'] = [
        'refresco' => 0,
        'leche' => 0
    ];
}

if (isset($_POST['nombre_trabajador']) && !empty($_POST['nombre_trabajador'])) {
    $_SESSION['nombre_trabajador'] = $_POST['nombre_trabajador'];
}

function actualizarInventario($producto, $cantidad, $accion) {
    if ($accion === 'añadir') {
        $_SESSION['inventario'][$producto] += $cantidad;
    } elseif ($accion === 'quitar') {
        if ($_SESSION['inventario'][$producto] >= $cantidad) {
            $_SESSION['inventario'][$producto] -= $cantidad;
        } else {
            echo "<p style='color:red;'>ERROR: You can't remove more units than are available in the inventory.</p>";
        }
    } elseif ($accion === 'reset') {
        $_SESSION['inventario'][$producto] = 0;
    }
}

if (isset($_POST['producto'], $_POST['cantidad'], $_POST['accion'])) {
    $producto = $_POST['producto'];
    $cantidad = (int) $_POST['cantidad'];
    $accion = $_POST['accion'];
    
    actualizarInventario($producto, $cantidad, $accion);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supermarket Management</title>
</head>
<body>
    <h1>Supermarket Management</h1>

    <?php if (isset($_SESSION['nombre_trabajador'])) { ?>
        <label>Worker name: 
            <input type="text" name="nombre_trabajador" value="<?php echo htmlspecialchars($_SESSION['nombre_trabajador']); ?>" readonly>
        </label>
        
        <h2>Choose product:</h2>
        <form method="post">
            <label for="producto">Choose product:</label>
            <select name="producto" id="producto" required>
                <option value="refresco">Soft Drink</option>
                <option value="leche">Milk</option>
            </select>

            <label for="cantidad">Product quantity:</label>
            <input type="number" name="cantidad" id="cantidad" required min="1" value="1">

            <button type="submit" name="accion" value="añadir">Add</button>
            <button type="submit" name="accion" value="quitar">Remove</button>
            <button type="submit" name="accion" value="reset">Reset</button>
        </form>

        <h2>Inventory:</h2>
        <p>Worker: <?php echo htmlspecialchars($_SESSION['nombre_trabajador']); ?></p>
        <ul>
            <li>Units of milk: <?php echo $_SESSION['inventario']['leche']; ?></li>
            <li>Units of soft drink: <?php echo $_SESSION['inventario']['refresco']; ?></li>
        </ul>

    <?php } else { ?>
        <h2>Enter worker name</h2>
        <form method="post">
            <label for="nombre_trabajador">Worker name:</label>
            <input type="text" name="nombre_trabajador" id="nombre_trabajador" required>
            <button type="submit">Submit</button>
        </form>
    <?php } ?>
</body>
</html>
