<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' || !empty($_GET)) {
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Práctica con formularios</title>
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="styles/response.css">
    
</head>
<body>
   <main>
    <h2>GET</h2>
        <!-- DATOS GET -->
        <table>
            <tr><th>Input</th><th>Valor</th></tr>
            <?php foreach ($_GET as $key => $value): ?>
            <tr>
                <td><?= htmlspecialchars($key) ?></td>
                <td><?= htmlspecialchars($value) ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <!-- DATOS POST-->
        <h2>POST</h2>
        <table>
            <tr><th>Input</th><th>Valor</th></tr>
            <?php foreach ($_POST as $key => $value): ?>
            <tr>
                <td><?= htmlspecialchars($key) ?></td>
                <td><?= htmlspecialchars($value) ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <a href="/" class="primary-btn">Volver al inicio</a>
   </main>
</body>
</html>
<?php
    } else {
        echo "<h2>No hay datos en GET o POST</h2>";
    }
?>
