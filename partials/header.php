<?php
  session_start();

  require 'database.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, nombre, isAdmin FROM cliente WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    } else {
        $records = null;
        $records = $conn->prepare('SELECT id, nombre, isAdmin FROM administrador WHERE id = :id');
        $records->bindParam(':id', $_SESSION['user_id']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);
    
        $user = null; 
        
        if (count($results) > 0) {
            $user = $results;
        }
    }
  }
?>

<header>
    <div class="menu">
        <div class="logo">
            <img src="assets/img/icons/logo2.png" alt="logo">
            <h1>Panaderia Bali</h1>
        </div>
        <div class="cont-menu">
            <nav>
                <ul>
                    <a href="index.php">
                        <li>Inicio</li>
                    </a>
                    <li>
                        Productos
                        <ul>
                            <a href="Panes.php">
                                <li id="border">Panes</li>
                            </a>
                            <a href="Postres.php">
                                <li>Postres</li>
                            </a>
                        </ul>
                    </li>
                    <a href="reporte.php">
                        <li>Reportes</li>
                    </a>

                    <?php if(!empty($user)): ?>
                        <a href="logout.php">
                            <li>Cerrar session</li>
                        </a>
                        
                        <?php if($user['isAdmin'] == 1 ): ?>
                            <li>
                            Administrador
                            <ul>
                                <a href="Gestion_cliente.php">
                                    <li id="border">Gestión de Clientes</li>
                                </a>
                                <a href="Gestion_ventas.php">
                                    <li id="border">Gestión de ventas</li>
                                </a>
                                <a href="Gestion_producto.php">
                                    <li>Gestión de productos</li>
                                </a>
                            </ul>
                        <?php endif; ?>
                    </li>

                    <?php else: ?>

                        <a href="Sing-up.php">
                            <li>Registrate</li>
                        </a>
                    <?php endif; ?>
                </ul>
            </nav>
        </div>
    </div>
</header>