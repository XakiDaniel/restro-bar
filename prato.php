<?php 
    include_once 'header.php';
    include_once 'db_connect.php';
?>
           
    <div class="product-page small-11 large-12 columns no-padding small-centered">    
        <div class="global-page-container">
            <?php 
        
                $cod_prato = $_GET['prato'];   
                if ( $cod_prato != NULL ) {
      
                    $sql = "SELECT * FROM pratos WHERE codigo='$cod_prato'";
                    $result = $db_connect->query($sql);
                     if ($result->num_rows > 0) {
                         while ($row = $result->fetch_assoc()) { 
                             $prato_nome = $row['nome'];
                             $prato_categoria = $row['categoria'];
                             $prato_descricao = $row['descricao'];
                             $prato_preco = $row['preco'];
                             $prato_calorias = $row['calorias'];
                             $prato_codigo = $row['codigo'];
                         } 
                     }else {
                         echo 'Não há destaques' . '<br><br>';
                     }
             ?>
             
    <?php 
             
        if ( $prato_nome != NULL ) { ?>
            <div class="product-section">
                <div class="product-info small-12 large-5 columns no-padding">
                    <h3><?php echo $prato_nome; ?></h3>
                    <h4><?php echo $prato_categoria; ?></h4>
                    <p><?php echo $prato_descricao; ?></p>
                    <h5><b>Preço: </b>R$ <?php echo $prato_preco; ?></h5>
                    <h5><b>Calorias: </b><?php echo $prato_calorias; ?></h5>
                </div>
      
                <div class="product-picture small-12 large-7 columns no-padding">
                    <img src="img/cardapio/<?php echo $prato_codigo; ?>.jpg" alt="Foto do prato: <?php echo $prato_nome; ?>">
                </div>
      
            </div>
            <?php  } else {
                echo 'Prato não encontrado!' . '<br>';
            } 
      
       } else {
      
        echo 'Código do prato inválido.' . '<br>';   
    }
    
    ?>
     

        <div class="go-back small-12 columns no-padding">
            <a href="cardapio.php">< Voltar ao Cardápio</a>
        </div>

            </div>
        </div>
            


    <?php include_once 'footer.php';?>