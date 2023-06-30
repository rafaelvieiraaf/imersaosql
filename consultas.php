<?php

function listar_paginas()
{
	$host = 'localhost';
	$db = 'imersao_sql';
	$user = 'root'; 
	$password = ''; 

	try
	{
		$conn = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e) {
		echo "Falha na conexão: " . $e->getMessage();
	}
	
	try 
	{
		$sql = "SELECT * FROM paginas";
		$stmt = $conn->query($sql);
		
		while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) 
		{   
			echo '<li class="nav-item">';
			echo '<a class="nav-link" href="paginas.php?id='.$row['paginas_id'].'">';
			echo '		<i class="'. $row['pagina_icone'] .'"></i>';
			echo '		<span>'. $row['pagina_nome'] .'</span></a>';
			echo '	</li>';
		}


	} 
	catch(PDOException $e)
	{
		echo "Erro na consulta: " . $e->getMessage();
	}
	
}

function carregar_tabela()
{
/*	$titulo = 'Tables';	
	$descricao = 'Descricão';
	$titulo_tabela = 'Table';
	echo '<div class="container-fluid">';


	echo '<h1 class="h3 mb-2 text-gray-800">Tables</h1>';
	echo '<p class="mb-4"></p>';

	echo '<div class="card shadow mb-4">';
	echo '<div class="card-header py-3">';
	echo '<h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>';
	echo '</div>';
	echo '<div class="card-body">';
	echo '<div class="table-responsive">';
	echo '<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">';
	echo '<thead>';
	echo '<tr>';
	for($i = 0 ; $i < count($colunas) ; ++$)
	{
		echo '<th>'.$coluna_nome.'</th>';
	}
	echo '</tr>';
	echo '</thead>';
	echo '<tfoot>';
	echo '<tr>';
	for($i = 0 ; $i < count($colunas) ; ++$)
	{
		echo '<th>'.$coluna_nome.'</th>';
	}
	echo '</tr>';
	echo '</tfoot>';
	echo '<tbody>';
	echo '<tr>';
	for($i = 0 ; $i < count($colunas) ; ++$)
	{
		echo '<th>'.$coluna_nome.'</th>';
	}
	echo '</tr>';
	echo '</tbody>';
	echo '</table>';
	echo '</div>';
	echo '</div>';
	echo '</div>';

	echo '</div>';
	echo '<!-- /.container-fluid -->';
	* */
}

?> 
