<?php
	include('menu.html');
	include('connect.php');
	include('fonctions.php');
/*Inclure le menu / les procédures...*/

?>
	<body>
		<center>
			<form name="x" action="accueil.php" method="post">
				<input type="submit" value="Retour">
			</form>
		</center>
		<section>
	<body>
		<center>
			<h2>Match</h2>

<?php
AfficheMatch();
?>
			</table>
		</center>
		</section>		
	</body>
</html>