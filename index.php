<html lang="pt-br">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
    <script type="text/javascript" src="js/jquery.collapsibleCheckboxTree.js"></script>
    <link rel="stylesheet" href="css/jquery.collapsibleCheckboxTree.css" type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <script type="text/javascript">
        // jQuery(document).ready(function(){
        //     $('ul#lista-quesitos2').collapsibleCheckboxTree();
        // });

        jQuery(document).ready(function(){
                $('ul#lista-quesitos').collapsibleCheckboxTree({
                checkParents : true, // Quando marcar uma caixa, marcar todos os parentes (Padrão: true)
                checkChildren : true, // Quando marcar uma caixa, todos os filhos são marcados (Padrão: false)
                shiftClickEffectChildren : false, // Quando marcar uma caixa com shift, todos os filhos são marcados ou desmarcados (Padrão: true)
                uncheckChildren : true, // Quando marcar uma caixa, todos os filhos são desmarcados (Padrão: true)
                includeButtons : true, // Exibir botões de expandir tudo ou recolher (Padrão: true)
                initialState : 'default' // Opções - 'expand' (expandir tudo), 'collapse' (recolher tudo) ou default
            });
        });
    </script>
    <title>Collapsible Checkbox Tree jQuery Plugin</title>
</head>
<body>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 offset-2 mb-3">
            <h1>Collapsible Checkbox Tree jQuery Plugin</h1>
            <p>
                Project home:
                <a href="http://www.redcarrot.co.uk/2009/11/11/collapsible-checkbox-tree-jquery-plugin/" target="_blank">
                    http://www.redcarrot.co.uk/2009/11/11/collapsible-checkbox-tree-jquery-plugin/
                </a>
            </p>
            <p>
                Github:
                <a href="https://github.com/sean-wallace/Collapsible-Checkbox-Tree-jQuery-Plugin" target="_blank">
                    https://github.com/sean-wallace/Collapsible-Checkbox-Tree-jQuery-Plugin
                </a>
            </p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 offset-2">
            <?php
                if(isset($_POST['cadastro']))
                {
                    if(isset($_POST['quesitos'])) {
                        foreach($_POST['quesitos'] as $q)
                        {
                            echo  $q . '<br>';
                        }
                    }

                    else {
                        echo "<div class='alert alert-danger text-center'>Marque pelo menos uma opção</div>";
                    }
                }
            ?>

            <form name="cadastro" action="index.php" method="post">
                <ul class="mt-1" id="lista-quesitos">
                    <li>
                        <input class="category-tree" value="" type="checkbox">
                        Categoria 01
                        <ul>
                            <li>
                                <input class="item" value="Item 01" type="checkbox" name="quesitos[]">
                                Item 01
                            </li>
                        </ul>
                    </li>

                    <li>
                        <input class="category-tree" value="" type="checkbox" />
                        Cidadania
                        <ul>
                            <li>
                                <input class="category-tree" value="" type="checkbox" />
                                Comunidades terapêuticas
                                <ul>
                                    <li>
                                        <input class="item-tree" value="item-01" type="checkbox" name="quesitos[]" />
                                        Item 01
                                    </li>
                                    <li>
                                        <input class="item-tree" value="item-02" type="checkbox" name="quesitos[]" />
                                        Item 02
                                    </li>
                                    <li>
                                        <input class="item-tree" value="item-03" type="checkbox" name="quesitos[]" />
                                        Item 03
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <input class="category-tree" type="checkbox" />
                                Idosos
                                <ul>
                                    <li>
                                        <input value="item-01" class="item-tree" type="checkbox" name="quesitos[]" />
                                        Item 01
                                    </li>
                                    <li>
                                        <input value="item-02" class="item-tree" type="checkbox" name="quesitos[]" />
                                        Item 02
                                    </li>
                                    <li>
                                        <input value="item-03" class="item-tree" type="checkbox" name="quesitos[]" />
                                        Item 03
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>

                <button type="submit" class="btn btn-success" name="cadastro" value="Cadastrar">
                    Cadastrar
                </button>
            </form>
        </div>
    </div>
</div>


</body>
</html>