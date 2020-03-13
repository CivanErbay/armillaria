<?php require('includes/config.php'); 
    $site_name = "armillaria";
    include($_SERVER['DOCUMENT_ROOT']."/includes/head.php"); 
    include($_SERVER['DOCUMENT_ROOT']."/includes/nav.php");?>

 <div class="big_letter"><span>AK</span></div>

<div class="container resp_cont">
    <div class="row">
        <div class="design_div3"></div>
        <div class="design_div1"></div>
<h2 class="h2_blog_title">If I can't <b>dance</b> to it, it's not my revolution.</h2>

        <div class="design_div2"></div>
          
</div>
</div>
    <div id="wrapper">
  
   
    
      
        <?php
            try {

                $stmt = $db->query('SELECT postID, postTitle, postDesc, postDate FROM blog_posts ORDER BY postID DESC');
                while($row = $stmt->fetch()){
                    
                    echo '<div class="responsive_blog">';
                        echo '<div><h2><a class="btn" href="viewpost.php?id='.$row['postID'].'">'.$row['postTitle'].'</a></h2><div>';
                        echo '<p>Posted on '.date('jS M Y H:i:s', strtotime($row['postDate'])).'</p>';
                        echo '<p>'.$row['postDesc'].'</p> ';                
                        echo '<p><a href="viewpost.php?id='.$row['postID'].'">zum Artikel</a></p>';                
                    echo '</div><br>';

                }

            } catch(PDOException $e) {
                echo $e->getMessage();
            }
        ?>
        
        </div>
    

</body>
</html>