<?php 
$site_name = "armillaria";
include ("./includes/head.php");
include ("./includes/nav.php"); ?>


<!-- <?php  include("{$_SERVER['DOCUMENT_ROOT']}head.php"); ?> -->

<!-- <?php  include("{$_SERVER['DOCUMENT_ROOT']}navbar.php"); ?> -->

<!-- NAVBAR SECTIOn END-->
<!--MAIN SECTION -->

<body>
    <div class="bg-image4 flexy" id="mobile_screen">
        <span class="center_span"><h1>/armillaria/</h1><br>
         <span class="progressive">make techno <b>progressive</b> again</span></span>
    </div>

    <!-- MAIN SECTION END-->
    <!-- EVENTS SECTION-->
    <div id="bgbg">
        <div class="events asymmetric3">

            <div class="row">
                <div class="col-md-12 text-center" style="background-color: white;">
                    <div class="row">
                        <div class="h_wrap">
                            <div class="upcoming_button" id="event_toggle">
                                <h3 class="h31"><b>Upcoming</b></h3>
                            </div>
                        </div>
                        <div class="weite">
                            <div class="container">
                                <div class="span4" id="hide_div">
                                    <a href="https://www.facebook.com/events/226048158444130/" target="_blank"><img class="img_present" src="/images/MN.jpg"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row events asymmetric2">
            <div class="col-md-12 text-center">
                <div class="row">
                    <div class="h_wrap2">
                        <div class="past_button"  id="event_toggle2">
                            <h3 class="h32"><b>Past</b></h3>
                        </div>
                    </div>
                    <div class="container" id="hide_div2">
                        <div class="span8">
                            <a href="https://www.facebook.com/events/612944335916587/" target="_blank" class="a1"><img class="img_past" src="/images/event_20_02.JPG"></a>
                            <a href="https://www.facebook.com/events/2289920827990334/" target="_blank" class="a1"><img class="img_past" src="/images/event_19_12.JPG"></a>
                            <a href="https://www.facebook.com/events/2144596198933779/" target="_blank" class="a1"><img class="img_past" src="/images/event_19_03.JPG"></a>
                            <a href="https://www.facebook.com/events/947517218982498/" target="_blank" class="a1"><img class="img_past" id="img_past" src="images/event_18_12.JPG"></a>
                        </div>
                    </div>
                </div>


            </div>
        </div>

        <!-- EVENT SECTION END-->
        <div class="bg-image2" id="mobile_screen"></div>
        <!-- PURPOSE SECTION-->
        <div">
            <div class="row py-4">
                
               
                    <div class="about_us" id="about_toggle"><h4><b>about_us</b></h4></div>
                    <p class="purpose_text" id="hide_about">
                    Wir sind ein Zusammenschluss junger Menschen aus Köln und wollen durch Soli-Partys und andere Veranstaltungen zivilgesellschaftliche Strukturen ohne Umwege f&oumlrdern und Solidarit&aumlt praktisch werden lassen. Neben dem finanziellen Support durch eure Spenden ist es unser Anliegen lokale, soziale und kulturelle Freir&aumlume zu erhalten und die Schaffung Neuer zu unterst&uumltzen. Wir sind der Meinung, dass die solidarische Kraft, welche die „Rave-Szene“ aufbieten kann, nicht an spezifische politische Dogmen gebunden ist und damit die M&oumlglichkeit bietet, übergreifend über verschiedene ideologische Grenzen hinweg, eine Vielzahl von solidarischen Projekten zu unterstützen.
                      Darüber hinaus ist es unser &uumlbergeordnetes Ziel, Vernetzungen zu schaffen und die Weichen zu stellen für eine gezielte Zusammenarbeit zwischen subkulturellen Gruppen auf der einen und sozialen Einrichtungen auf der anderen Seite.
                      Wir wollen Vernetzung aktiv mit euch gestalten und die Freude am Leben soll dabei natürlich nicht zu kurz kommen. Tragt euch in den Newsletter ein, folgt uns auf Facebook oder schaut gelegentlich hier vorbei, um kein Event mehr zu verpassen!
             


                        <br>
                         
                        </p>
                      

              


            </div>
        </div>
    </div>
<?php include ("./includes/footer.php"); ?>

    
    <!--<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->
    <script>
        $(document).ready(function() {
            $("#event_toggle").click(function() {
                $("#hide_div").fadeToggle(750);
            });
        });
    </script>
      <script>
        $(document).ready(function() {
            $("#event_toggle2").click(function() {
                $("#hide_div2").fadeToggle(750);
            });
        });
    </script>
     <script>
        $(document).ready(function() {
            $("#about_toggle").click(function() {
                $("#hide_about").fadeToggle(750);
            });
        });
    </script>
   
</body>
<!-- PURPOSE SECTION END -->

</html>
