<?php 
$site_name = "armillaria";
include ("./includes/head.php"); 
include ("./includes/nav.php"); ?>

      <body>   
           <div class="bg-image formdiv"> 
           <div class="newsletter"> 
           
           <h1 class="h1_news"><b>news</b></h2>
                <div class="news_form_wrap">
                <form class="text-center input_form">  
                     <label><b>Dein Name</b></label>  
                     <input type="text" name="name" id="name" class="form-control" required/>  
                     <br />  
                     <label><b>Deine Mailadresse</b></label>  
                     <input name="message" id="message" class="form-control" required/>  
                     <br /> 
                     <ul style="list-style: none;">
                     <li><input type="button" name="submit" id="submit" class="btn btn-info" value="stay_tuned" /></li>
                     <li class="msg_pos"><span id="error_message" class="text-dark"></span>  </li>
                     <li class="msg_pos"><span id="success_message" class="text-dark"></span>  </li>
                     </ul>
                </form>  
                </div>
           </div>  
            </div>
            <?php include ("./includes/footer.php"); ?>
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#submit').click(function(){  
           var name = $('#name').val();  
           var message = $('#message').val();  
           if(name == '' || message == '')  
           {  
                $('#error_message').html("Beide Felder ausfüllen!");  
           }  
           else  
           {  
                $('#error_message').html('');  
                $.ajax({  
                     url:"insert.php",  
                     method:"POST",  
                     data:{name:name, message:message},  
                     success:function(data){  
                          $("form").trigger("reset");  
                          $('#success_message').fadeIn().html(data);  
                          setTimeout(function(){  
                               $('#success_message').fadeOut("Slow");  
                          }, 5000);  
                     }  
                });  
           }  
      });  
 });  
 </script>  
