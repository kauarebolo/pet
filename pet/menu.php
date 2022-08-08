<?php
    include 'conecta.php';
    $usuario = $_SESSION["user"];
    $menu_query = "SELECT * FROM usuario WHERE login='$usuario' AND tipo='1'";
    $result = $con->query($menu_query);
    if($result->num_rows > 0)
    {
        echo "<li class='nav-item'><a class='nav-link' href='dash.php'>HOME</a></li>";  
        echo "<li class='nav-item'><a class='nav-link' href='agendamento.php'>AGENDAMENTO</a></li>"; 
        echo "<li class='nav-item'><a class='nav-link' href='entrega.php'>ENTREGA</a></li>"; 
        echo "<li class='nav-item'><a class='nav-link' href='cliente.php'>CLIENTE   </a></li>"; 
        echo "<li class='nav-item'><a class='nav-link' href='produto.php'>PRODUTO</a></li>"; 
        echo "<li class='nav-item'><a class='nav-link' href='usuario.php'>USUARIO</a></li>"; 
        echo "<li class='nav-item'><a class='nav-link' href='relatorio.php'>RELATÓRIOS</a></li>"; 
    }
    else
    {
        echo "<li class='nav-item'><a class='nav-link' href='dash.php'>HOME</a></li>";  
        echo "<li class='nav-item'><a class='nav-link' href='agendamento.php'>AGENDAMENTO</a></li>"; 
        echo "<li class='nav-item'><a class='nav-link' href='entrega.php'>ENTREGA</a></li>"; 
        echo "<li class='nav-item'><a class='nav-link' href='cliente.php'>CLIENTE</a></li>"; 
    }
?>