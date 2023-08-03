<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'dblibreria';


try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Error de conexión: ' . $e->getMessage();
}

// Consulta para obtener la lista de autores
$stmt = $pdo->query('SELECT DISTINCT apellido, pais, nombre FROM autores');
$autores = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<?php include 'index.php'; ?>
<!-- Contenido específico de la página autores -->
<section class="fade-in">
    <h2>Listado de Autores</h2>
    
    <ul>
        <?php foreach ($autores as $autor): ?>
            <li><?php echo $autor['nombre'] . '-' . $autor['apellido'] . '--' . $autor['pais'];?></li>
        <?php endforeach; ?>
    </ul>
 
</section>