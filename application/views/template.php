<?php
  if (!isset($page) || $page == null ) {
      $page = 'accueil_user';
  }
  // echo $page;
?>

<html>
	<body>
		<h1>Hello Template</h1>
		<?php include $page . ".php"; ?>
	</body>
</html>