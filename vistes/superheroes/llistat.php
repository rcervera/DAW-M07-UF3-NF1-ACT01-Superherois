

<div class="container">
<h3>Llista superherois</h3>
<?php

        echo "<a href='index.php?control=ControlSuperheroes&operacio=showformnew'>Nou</a>";
		
?>
 <table class="table table-sm">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Codi</th>
      <th scope="col">Nom Súper</th>
      <th scope="col">Nom real</th>
      <th scope="col">Gènere</th>
      <th scope="col">Procedència</th>
      <th scope="col" colspan="3">Operacions</th>
             
    </tr>
  </thead>
  <tbody>

<?php
        
	
    	foreach($res as $super) {
		echo "<tr>"; 
		echo "<td>".$super['id']."</td>";
		echo "<td>".$super['heroname']."</td>";
		echo "<td>".$super['realname']."</td>";
		echo "<td>".$super['gender']."</td>";
		echo "<td>".$super['race']."</td>";
		// echo "<td>".$projecte['estat']."</td>";
		
		echo "<td><a href='index.php?control=ControlSuperheroes&operacio=delete&codi=".$super['id']."'>
                     Esborrar</td>";
		echo "<td><a href='index.php?control=ControlSuperheroes&operacio=showformupdate&codi=".$super['id']."'>
                     Actualitzar</td>";
		echo "</tr>";
        }
        echo "</table>";

        if(isset($_SESSION['missatge'])) {
			echo $_SESSION['missatge'];
			unset($_SESSION['missatge']);
		}
?>
