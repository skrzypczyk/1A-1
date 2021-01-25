<?php

	$filiere = [
					"classe 1"=>[
						0=>["Simon", "FIOCRE", 22],
						1=>["Alexandre", "LELONG", 21],
						2=>["Bilel", "SAIGH", 18]
					],

					"classe 2"=>[
						0=>["Simon", "FIOCRE", 22],
						1=>["Alexandre", "LELONG", 21],
						2=>["Bilel", "SAIGH", 18]
					],
					
					"classe 3"=>[
						0=>[
							"firstname"=>[0=>"Simon",1=>"Pierre"], 
							"lastname"=>"FIOCRE",
							"age"=>22
						],
						1=>[
							0=>"Alexandre", 
							1=>"LELONG", 
							2=>21],
						2=>[
							0=>"Bilel", 
							1=>"SAIGH", 
							2=>18]
					]

				];



?>

<table border="1px">
	<thead>
		<tr>
			<th>Classe</th>
			<th>Prénom</th>
			<th>Nom</th>
			<th>Moyenne</th>
		</tr>
	</thead>
	<tbody>


		<?php

		
		foreach ($filiere as $class => $listOfStudents) {

			foreach ($listOfStudents as $student) {
				echo "<tr><td>".$class."</td>";
				foreach ($student as $info) {

					if(is_array($info)){
						echo "<td>".implode(" - ", $info)."</td>";
					}else{
						echo "<td>".$info."</td>";	
					}
					


				}
				echo "</tr>";
			}

		}


		?>


	</tbody>
</table>




