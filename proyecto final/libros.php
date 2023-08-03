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

// Consulta para obtener la lista de libros
$stmt = $pdo->query('SELECT DISTINCT titulo, tipo,  precio FROM libros');
$libros = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<?php include 'index.php'; ?>
<!-- Contenido específico de la página libros -->
<section class="fade-in">
    <h2>Listado de Libros</h2>
    
    <?php foreach ($libros as $libro): ?>
        <li><?php echo $libro['titulo'] . ' -- ' . $libro['tipo'] . ' -- ' . $libro['precio']; ?></li>
    <?php endforeach; ?>

</section>
