<?php include("desktop/conexao.php");
?>

<html lang="pt-br">

    <head>
        <title>Lista de deveres</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>lista de deveres</h1>
        <input form action="database.sql" method="post" type="text" placeholder="Insira um item a sua lista"/>
         <input type="submit">  
            <p>
                <input type="checkbox" name="pao" value="on">Pão italiano (baguete) 
            </p>
            <p>
                <input type="checkbox" name="parmesao" value="on">Parmesão (pedaço, 200g)
            </p>
            <p>
                <input type="checkbox" name="presunto" value="on">Presunto parma (~200g)
            </p>
            <p>
                <input type="checkbox" name="vinho" value="on">Chadornnay ou Suivignon blanc (Amayana)
            </p>
            <p>
                <input type="checkbox" name="frutas" value="on">Frutas: uvas, morangos, damasco,...
            </p>
            <p>
                <input type="submit" value="concluir"/> 
            </p>
            
        </form>
        
    </body>
</html>