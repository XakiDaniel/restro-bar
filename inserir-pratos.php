    
   
    <?php
        include_once 'db_connect.php';
        
        $pratos = array (

            array (
                'codigo' => 'jardim-cogumelos',
                'nome' => 'Jardim de Cogumelos',
                'categoria' => 'Entradas',
                'descr' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sodales justo eu mauris tincidunt, id dignissim magna elementum. Sed euismod efficitur tortor eu facilisis. Proin augue nunc, luctus hendrerit velit sit amet, iaculis porta velit. In vulputate tristique urna. Praesent tempus ipsum augue, sit amet tristique lacus semper cursus.',
                'preco' => 12.00,
                'calorias' => 290,
                'destaque' => 0

            ),

            array (
                'codigo' => 'camarao-alho',
                'nome' => 'Camarões Ao Alho',
                'categoria' => 'Entradas',
                'descr' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sodales justo eu mauris tincidunt, id dignissim magna elementum. Sed euismod efficitur tortor eu facilisis. Proin augue nunc, luctus hendrerit velit sit amet, iaculis porta velit. In vulputate tristique urna. Praesent tempus ipsum augue, sit amet tristique lacus semper cursus.',
                'preco' => 16.00,
                'calorias' => 340,
                'destaque' => 1

            ),

            array (
                'codigo' => 'salada-grega',
                'nome' => 'Salada Grega',
                'categoria' => 'Entradas',
                'descr' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sodales justo eu mauris tincidunt, id dignissim magna elementum. Sed euismod efficitur tortor eu facilisis. Proin augue nunc, luctus hendrerit velit sit amet, iaculis porta velit. In vulputate tristique urna. Praesent tempus ipsum augue, sit amet tristique lacus semper cursus.',
                'preco' => 11.00,
                'calorias' => 180,
                'destaque' => 0

            ),

            array (
                'codigo' => 'brie-geleia',
                'nome' => 'Tapas de Queijo Brie e Geleia',
                'categoria' => 'Entradas',
                'descr' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sodales justo eu mauris tincidunt, id dignissim magna elementum. Sed euismod efficitur tortor eu facilisis. Proin augue nunc, luctus hendrerit velit sit amet, iaculis porta velit. In vulputate tristique urna. Praesent tempus ipsum augue, sit amet tristique lacus semper cursus.',
                'preco' => 14.00,
                'calorias' => 400,
                'destaque' => 0

            ),

            array (
                'codigo' => 'picanha-brasileira',
                'nome' => 'Picanha à Brasileira',
                'categoria' => 'Pratos Principais',
                'descr' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sodales justo eu mauris tincidunt, id dignissim magna elementum. Sed euismod efficitur tortor eu facilisis. Proin augue nunc, luctus hendrerit velit sit amet, iaculis porta velit. In vulputate tristique urna. Praesent tempus ipsum augue, sit amet tristique lacus semper cursus.',
                'preco' => 28.00,
                'calorias' => 890,
                'destaque' => 1

            ),

             array (
                'codigo' => 'costelinha',
                'nome' => 'Costelinha de Porco',
                'categoria' => 'Pratos Principais',
                'descr' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sodales justo eu mauris tincidunt, id dignissim magna elementum. Sed euismod efficitur tortor eu facilisis. Proin augue nunc, luctus hendrerit velit sit amet, iaculis porta velit. In vulputate tristique urna. Praesent tempus ipsum augue, sit amet tristique lacus semper cursus.',
                'preco' => 29.00,
                'calorias' => 930,
                'destaque' => 0

            ),

            array (
                'codigo' => 'salmao-legumes',
                'nome' => 'Salmão Aos Legumes',
                'categoria' => 'Pratos Principais',
                'descr' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sodales justo eu mauris tincidunt, id dignissim magna elementum. Sed euismod efficitur tortor eu facilisis. Proin augue nunc, luctus hendrerit velit sit amet, iaculis porta velit. In vulputate tristique urna. Praesent tempus ipsum augue, sit amet tristique lacus semper cursus.',
                'preco' => 29.00,
                'calorias' => 690,
                'destaque' => 1

            ),

            array (
                'codigo' => 'churrasco-misto',
                'nome' => 'Churrasco Misto',
                'categoria' => 'Pratos Principais',
                'descr' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sodales justo eu mauris tincidunt, id dignissim magna elementum. Sed euismod efficitur tortor eu facilisis. Proin augue nunc, luctus hendrerit velit sit amet, iaculis porta velit. In vulputate tristique urna. Praesent tempus ipsum augue, sit amet tristique lacus semper cursus.',
                'preco' => 26.00,
                'calorias' => 700,
                'destaque' => 0

            ),

            array (
                'codigo' => 'cheesecake-cereja',
                'nome' => 'Cheese Cake de Cereja',
                'categoria' => 'Sobremesas',
                'descr' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sodales justo eu mauris tincidunt, id dignissim magna elementum. Sed euismod efficitur tortor eu facilisis. Proin augue nunc, luctus hendrerit velit sit amet, iaculis porta velit. In vulputate tristique urna. Praesent tempus ipsum augue, sit amet tristique lacus semper cursus.',
                'preco' => 16.00,
                'calorias' => 680,
                'destaque' => 1

            ),

            array (
                'codigo' => 'flan-frutas-vermelhas',
                'nome' => 'Flan de Frutas Vermelhas',
                'categoria' => 'Sobremesas',
                'descr' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sodales justo eu mauris tincidunt, id dignissim magna elementum. Sed euismod efficitur tortor eu facilisis. Proin augue nunc, luctus hendrerit velit sit amet, iaculis porta velit. In vulputate tristique urna. Praesent tempus ipsum augue, sit amet tristique lacus semper cursus.',
                'preco' => 14.00,
                'calorias' => 620,
                'destaque' => 0

            ),

            array (
                'codigo' => 'petit-gateau',
                'nome' => 'Petit Gateau',
                'categoria' => 'Sobremesas',
                'descr' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sodales justo eu mauris tincidunt, id dignissim magna elementum. Sed euismod efficitur tortor eu facilisis. Proin augue nunc, luctus hendrerit velit sit amet, iaculis porta velit. In vulputate tristique urna. Praesent tempus ipsum augue, sit amet tristique lacus semper cursus.',
                'preco' => 19.00,
                'calorias' => 720,
                'destaque' => 0

            ),

            array (
                'codigo' => 'creme-papaya',
                'nome' => 'Creme de Papaya com Cassis',
                'categoria' => 'Sobremesas',
                'descr' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sodales justo eu mauris tincidunt, id dignissim magna elementum. Sed euismod efficitur tortor eu facilisis. Proin augue nunc, luctus hendrerit velit sit amet, iaculis porta velit. In vulputate tristique urna. Praesent tempus ipsum augue, sit amet tristique lacus semper cursus.',
                'preco' => 15.00,
                'calorias' => 520,
                'destaque' => 0

            ),
            array (
                'codigo' => 'sushi',
                'nome' => 'sushi',
                'categoria' => 'Comida Japonesa',
                'descr' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sodales justo eu mauris tincidunt, id dignissim magna elementum. Sed euismod efficitur tortor eu facilisis. Proin augue nunc, luctus hendrerit velit sit amet, iaculis porta velit. In vulputate tristique urna. Praesent tempus ipsum augue, sit amet tristique lacus semper cursus.',
                'preco' => 55.00,
                'calorias' => 120,
                'destaque' => 1

            )



        );

    ?>


    <?php

            foreach ($pratos as $prato) {
                
                $codigo = $prato['codigo'];
                $nome = $prato['nome'];
                $categoria = $prato['categoria'];
                $descr = $prato['descr'];
                $preco = $prato['preco'];
                $calorias = $prato['calorias'];
                $destaque = $prato['destaque'];


                $sql = "INSERT INTO pratos 
                        (codigo, nome, categoria, descricao, preco, calorias, destaque) 
                        VALUES 
                        ('$codigo', '$nome', '$categoria', '$descr', '$preco', '$calorias', '$destaque')";

                if($db_connect->query($sql)) {
                    echo '<b><h1>'. $nome . '</b></h1>' . ' Cadastrado com sucesso ' . '<hr><br>';
                }else {
                    echo 'Não foi possível cadastrar' . $nome . '<hr><br>';
                    echo mysqli_error($db_connect) . '<hr><br>'; 
                }           
            }

        /*

            1º Criado um array com todos os produtos 
            2º abrir uma conexao com o banco 
            3º um loop no array pratos , pra cada um dos elementos iremos pegar as informações
            4º inserir no banco de dados
            5º usar o metodo query para rodar as informações
        
        */
    ?>   

 