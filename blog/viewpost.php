<?php require('includes/config.php'); 
include($_SERVER['DOCUMENT_ROOT']."/includes/head.php");
include($_SERVER['DOCUMENT_ROOT']."/includes/nav.php");

$stmt = $db->prepare('SELECT postID, postTitle, postCont, postDate FROM blog_posts WHERE postID = :postID');
$stmt->execute(array(':postID' => $_GET['id']));
$row = $stmt->fetch();

//if post does not exists redirect user.
if($row['postID'] == ''){
	header('Location: ./');
	exit;
}

?>

<body class="post_body">

	<div id="wrapper">

		

		<?php	
			echo '<div>';
				echo '<h2 class="btn" style="font-size: 10vh;">'.$row['postTitle'].'</h2>';
				echo '<p>Posted on '.date('jS M Y', strtotime($row['postDate'])).'</p>';
				echo '<p style="margin-top: 3%;">'.$row['postCont'].'</p>';				
			echo '</div>';
		?>
<hr />
	<p><a class="btn_back btn" style="margin-top: 3%;" href="./">back</a></p>
	</div>

</body>
</html> 