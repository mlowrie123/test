<!doctype html>
<html lang="en">
  <head>

      <script src="https://kit.fontawesome.com/72ad49ba97.js" crossorigin="anonymous"></script>
      <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
      

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
  <link rel="stylesheet"href="./application/css/bootstrap.css">
  <link rel="stylesheet" href="./application/css/custom.css">


    <!-- X3dom -->
    <link rel='stylesheet' type='text/css' href='./application/css/x3dom.css'></link>
    <script type='text/javascript' src='./application/js/x3dom.js'></script>

    <link rel="stylesheet" type="text/css" href="./application/css/jquery.fancybox.min.css">

    <?php $data = $_SESSION["data"];?>



  </head>
  <body id="bodyColor">
    <body>

    <!-- Logo and navigation bar -->
<nav id="headerColor" Class="navbar sticky-top navbar-expand-sm navbar_coca_cola">

        <!-- Brand -->
        <div class="logo">
          <a class="navbar-brand" href="index.php">
          <h1>1</h1>
          <h1>Coca</h1>
          <h2>Cola </h2>
          <p>Solving your problems, one coke at a time</p>
          </a>
          </div>
          <!-- Three bar icon that appears when page is shrunk, collapses the navigation links, not data target is the id selector #navbarSupportedContent -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
          </button>
          
          <!-- Link Menu item button to the links class navbar-collapse id selector #navbarSupportedContent -->
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- The Links -->
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link active" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a id="navAbout"class="nav-link active" href="#" data-toggle="popover" data-trigger="hover" 
                  data-placement="bottom" title="About Web 3D Applications" data-content="Click here to see the deeper understanding">Deeper Understanding</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#" data-toggle="popover" data-trigger="hover" 
                data-placement="bottom" title="Contact Details" data-content="Should you wish to contact me about this website, please email example@gmail.com">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="javascript:changeLook()">Restyle</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="javascript:changeBack()">Reset</a>
              </li>
              <li class="nav-item">
                <a id="navModels" class="nav-link active"   data-toggle="popover" data-trigger="hover" data-placement="bottom" title="X3D Models" data-content="There are four X3D models: Coke, Sprite, coke Zero and a coke Bottle">Models</a>
              </li>
     </ul>
    </div>
  </nav>


    <!-- main -->


    <div class="container-fluid main_contents">
      <div class="main_contents" id='home'>
        <div class="row">
          <div class="col-sm-12">
           <div id="main_3d_image">
            <div id="main_text" class="col-xs-12 col-sm-4">
              <div id="title_home"></div>
              <div id="subTitle_home"></div>
              <div id="description_home"></div>
            </div> 
        </div>
      </div>
    </div>



  
 <!-- row of cards on the grid -->
 <div class= "row">
    <!-- coca cola column -->
    <div class= "col-sm-4">
        <div class= "card">
             <a href="./application/assets/images/cokeCanBig.png" data-fancybox data-caption= "My 3D coke can render" class="thumbnail">
                <img class="card-img-top img-fluid img-thumbnail" src="./application/assets/images/cokeCan.png" width="200" height="150" alt="Coca Cola">
            </a>
            <div class="card-body">
              <div id ="title_left" class="card-title homeText"></div>
              <div id ="subTitle_left" class="card-title homeText"></div>
              <div id ="description_left" class="card-title homeText"></div>
                <a href="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola" class="btn btn-primary">Find out more ...</a>
            </div>
          </div>
      </div>

          <!-- sprite column -->
    <div class= "col-sm-4">
        <div class= "card">
          <a href="./application/assets/images/spriteBottleBig.png" data-fancybox data-caption= "My 3D sprite bottle render" class="thumbnail">
                <img class="card-img-top img-fluid img-thumbnail" src="./application/assets/images/spriteBottle.png" alt="Coca Cola">
            </a>
            <div class="card-body">
              <div id ="title_centre" class="card-title homeText"></div>
              <div id ="subTitle_centre" class="card-title homeText"></div>
              <div id ="description_centre" class="card-title homeText"></div>
                    <a href="http://www.coca-cola.co.uk/drinks/sprite/sprite" class="btn btn-primary">Find out more ...</a>
                </div>
          </div>
      </div>

                <!-- coke zero column -->
    <div class= "col-sm-4">
        <div class= "card">
          <a href="./application/assets/images/cokeZeroBig.png" data-fancybox data-caption= "My 3D coke zero can render" class="thumbnail">
                <img class="card-img-top img-fluid img-thumbnail" src="./application/assets/images/cokeZero.png" alt="Coca Cola">
            </a>
            <div class="card-body">
              <div id ="title_right" class="card-title homeText"></div>
              <div id ="subTitle_right" class="card-title homeText"></div>
              <div id ="description_right" class="card-title homeText"></div>
                <a href="http://www.coca-cola.co.uk/drinks/dr-pepper/dr-pepper" class="btn btn-primary">Find out more ...</a>
            </div>
          </div>
      </div>

</div>
</div>

<!-- About-->
<div id="about" style="display:none;"  class= "row">
  <div class= "col-sm-12">
      <div class= "card">
          <div class="card-body">
            <h1> Cinema 4D </h1>
            <h> Cinema 4D was used to model the 3D drinks. They were then exported to a .wrl file, and then encoded on instantplayer to .x3d.
              The models textures look a lot nicer in cinema 4D than in the .x3d file and .wrl files and throughout my website, you can see 
              rendered out pictures of the models within cinema 4D. </h>
          </div>
      </div>
        <a href="./application/assets/c4d/cokeBottle.c4d" class="btn btn-primary">Coke Bottle c4d file</a>
          <a href="./application/assets/c4d/spriteBottle.c4d" class="btn btn-primary">Sprite Bottle c4d file</a>
          <a href="./application/assets/c4d/cokeCan.c4d" class="btn btn-primary">Coke Can Can c4d file</a>
          <a href="./application/assets/c4d/cokeZero.c4d" class="btn btn-primary">Coke Zero Can c4d file</a>
    </div>
</div>


  <div id="about1" style="display:none;"  class= "row">
  <div class= "col-sm-12">
      <div class= "card">
        <div class="card-body">
            <h1> JavaScipt </h1>
            <h> Javascript functions are used within this website. If you click on the imaged in the gallery or on the home page
              they will show a larger view of the rendered images.  </h>
              <h> Javascript is also used to make the web page a single page API, through the use of the jquery hide and show methods. </h>
              <h> Javascript is also used for the restyle and reset buttons, which can change the look of the web page. </h>
          </div>
    </div>
  </div> 
</div>


<div id="about2" style="display:none;"  class= "row">
  <div class= "col-sm-12">
      <div class= "card">
          <div class="card-body">
            <h1> Image carousel  </h1>
            <h> On the home page you can see an image carousl, these images were taken from the cinema 4D renders and were then edited in photoshop.</h>
          </div>
        </div>
    </div>
  </div> 
</div>

<div id="about3" style="display:none;"  class= "row">
  <div class= "col-sm-12">
      <div class= "card">
          <div class="card-body">
            <h1> MVC </h1>
            <h> An MVC design pattern has been used to fetch the data variables for the x3d model title and caption, as well as for the title, subtitle and descirption of the card below the model describing the drink.</h>
          </div>
        </div>
    </div>
  </div> 
</div>







<div id='models' style="display: none;">
  <div class="row">
        <!-- Row to hold two cards to hold 1) the X3D model and 2) the gallery -->
        <div class="row bgImage"> 
          <!-- Column to hold the X3D Model -->
          <div class="col-sm-10 "> 
              <div class="card text-left">
                  <div class="card-body">
          <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
              <li class="nav-item">
                  <a id="navCoke"class="nav-link" >Coke</a>
              </li>
              <li class="nav-item">
                <a id="navSprite"class="nav-link" >Sprite</a>
              </li>
              <li class="nav-item">
                  <a id="navZero" class="nav-link" >Coke Zero</a>
              </li>
              <li class="nav-item">
                <a id="navCokeBottle"class="nav-link" >Coke Bottle</a>
            </li>
            </ul>
        </div>  




         <!-- Bootstrap card body to hold information about the X3D model-->
         <div class="card-body">
          <div id="coke">

          <div id="x3dModelTitle_coke" class="card-title drinksText"></div>
          <h1><?php echo $data[0]['x3dModelTitle'] ?></h1>




       <!-- Place the X3D code here -->
        <div class="model3D">
        <x3d>
            <scene class="bgCoke">
              <inline nameSpaceName="model" mapDEFToID="true" onClick="animateModel();"  url="./application/assets/x3d/cokeCanLights.x3d"> </inline>
            </scene>
        </x3d>
        </div>  
        <div id ="x3dCreationMethod_coke" class="card-title drinksText"></div>
        <h><?php echo $data[0]['x3dCreationMethod'] ?></h>
          </div>


          <!-- sprite -->
          <div id="sprite" style="display:none;">
            <div id="x3dModelTitle_sprite" class="card-title drinksText"></div>
            <h1><?php echo $data[1]['x3dModelTitle'] ?></h1>
            <!-- Place the X3D code here -->
            <div class="model3D">
                <x3d id="model">
                    <scene class="bgCoke">
                        <inline nameSpaceName="models" mapDEFToID="true" onclick="animateModel();" url="./application/assets/x3d/spriteBottleFinal.x3d"> </inline>
                    </scene>
                </x3d>
            </div> 
            <div id="x3dCreationMethod_sprite" class="card-text drinksText"></div>
            <h><?php echo $data[1]['x3dCreationMethod'] ?></h>
        </div>

                  <!-- coke zero -->
                  
                  <div id="zero" style="display:none;">
                    <div id ="x3dModelTitle_zero" class="card-title drinksText"></div>
                    <h1><?php echo $data[2]['x3dModelTitle'] ?></h1>
                 <!-- Place the X3D code here -->
                  <div id="test1" class="model3D">
                  <x3d>
                      <scene class="bgCoke">
                        <inline nameSpaceName="modelz" mapDEFToID="true" onClick="animateModel();"  url="./application/assets/x3d/cokeZero3.x3d"> </inline>
                      </scene>
                  </x3d>
                  </div>  
                  <div id ="x3dCreationMethod_zero" class="card-title drinksText"></div>
                  <h><?php echo $data[2]['x3dCreationMethod'] ?></h>
                  </div>
    
                            <!-- coke bottle -->
                            <div id="cokeBottle" style="display:none;">
                              <div id ="x3dModelTitle_zero2" class="card-title drinksText"></div>
                              <h1><?php echo $data[0]['x3dModelTitle'] ?></h1>
                           <!-- Place the X3D code here -->
                            <div id="test" class="model3D">
                            <x3d>
                                <scene class="bgCoke">
                                  <inline nameSpaceName="modelc" mapDEFToID="true" onClick="animateModel();"  url="./application/assets/x3d/cokeBottle2.x3d"> </inline>
                                </scene>
                            </x3d>
                            </div>  
                            <div id ="x3dCreationMethod_zero2" class="card-title drinksText"></div>
                            <h><?php echo $data[0]['x3dCreationMethod'] ?></h>
                            </div>
                          </div>
                        </div>

</div>
</div> 



<!-- gallery -->
<div class="col-sm-2">
  <div class="card text-left">
  <div class="card-header gallery-header">
  Gallery
  </div>
  <div class="card-body">
    <div class = "gallery" id="gallery_coke"></div> 
    <div class= "card-title title_gallery drinksText"></div>
    <div class ="gallery" id ="gallery1"></div>
    <div class = "card-text description_gallery drinksText" ></div> 
  
  </div>
  </div>
  </div> 
  
</div> <!-- end of moodels -->
  </div> <!-- End row class -->

         <!-- Start the interaction panels -->

         <div id="interaction" class="row" >
          <!-- Column for the camera view controls -->
          <div class="col-sm-10">
              <div class="card text-left">
                  <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                    <!-- Dropdown nav-tab -->
                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Views</a>
                        <div class="dropdown-menu">
                          <a id="navCameras"class="dropdown-item"  >Cameras</a>
                          <a id="navAnimation"class="dropdown-item"  >Animation</a>
                          <a id="navAudio"class="dropdown-item"  >Audio</a>
                          <a id="navLights"class="dropdown-item"  >Lights</a>
                          <a id="navModel"class="dropdown-item"  >Model</a>
  
                        </div>
                      </li>
                    </ul>
                  </div>
                  <div id="cameras"  class="card-body">
                    <div class="card-Title x3dCamera_Subtitle drinksText">
                      <h3>Camera Views</h3>
                    </div>                            
                    <a href="#" class="btn btn-success btn-responsive camera-font" onclick="cameraRight();">Right</a>
                    <a href="#" class="btn btn-success btn-responsive camera-font"onclick="cameraLeft();">Left</a>
                      <a href="#" class="btn btn-danger btn-responsive camera-font" onclick="cameraFront();">Front</a>
                      <a href="#" class="btn btn-danger  btn-responsive camera-font"onclick="cameraBack();">Back</a>
                      <a href="#" class="btn btn-primary btn-responsive camera-font" onclick="cameraTop();"> Top</a>
                      <a href="#" class="btn btn-primary btn-responsive camera-font" onclick="cameraBottom();"> Bottom</a>
                    <div class="card-text x3dCameraDescription drinksText">
                      <p>These buttons select a limited range of X3D model viewpoints, use the dropdown menu for more other options</p>
                    </div>
                  </div>
  
  
                  <div id="animation" style="display:none;" class="card-body">
                    <div class="card-Title x3dCamera_Subtitle drinksText">
                      <h3>Animation</h3>
                    </div>                            
                    <a href="#" class="btn btn-success btn-responsive camera-font" onclick="spin();"> Go</a>
                    <a href="#" class="btn btn-danger btn-responsive camera-font" onclick="stopRotation();"> Stop</a>
                    <div class="card-text x3dCameraDescription drinksText">
                      <p>These buttons animate the model, use the dropdown menu for more other options</p>
                    </div>
                  </div>

                  <div id="audio"  style="display:none;" class="card-body">
                    <div class="card-Title x3dCamera_Subtitle drinksText">
                      <h3>Audio</h3>
                    </div>                            
                    <a href="#" class="btn btn-success btn-responsive camera-font" onclick="playAudio();">Play</a>
                    <a href="#" class="btn btn-danger btn-responsive camera-font" onclick="pauseAudio();"> Stop</a>
                    <audio  id="myAudio" >
                      <source src="./application/assets/audio/coke.mp3" type="audio/mp3">
                    Your browser does not support the audio element.
                    </audio>
                    <script type="text/javascript">
                      var x = document.getElementById("myAudio");
                      function playAudio() {
                        x.play();
                      }
                      function pauseAudio() {
                        x.pause();
                      }
                    </script>
                    <div class="card-text x3dCameraDescription drinksText">
                      <p>These buttons select a limited range of X3D model viewpoints, use the dropdown menu for more other options</p>
                    </div>
                  </div>

                  <div id="lights" style="display:none;" class="card-body">
                    <div class="card-Title x3dCamera_Subtitle drinksText">
                      <h3>Lights</h3>
                    </div>                            
                    <a href="javascript:swap('zero')" class="btn btn-success btn-responsive camera-font" > On</a>
                    <a href="javascript:swap('coke')"class="btn btn-danger btn-responsive camera-font" > Off</a>
                    <div class="card-text x3dCameraDescription drinksText">
                      <p>These buttons animate the model, use the dropdown menu for more other options</p>
                    </div>
                  </div>

                  <div id="Model" style="display:none;" class="card-body">
                    <div class="card-Title x3dCamera_Subtitle drinksText">
                      <h3>Models</h3>
                    </div>                            
                    <a href="#" class="btn btn-success btn-responsive camera-font" onclick="spin();"> Normal</a>
                    <a href="#" class="btn btn-danger btn-responsive camera-font" onclick="wireframe();"> Wireframe</a>
                    <div class="card-text x3dCameraDescription drinksText">
                      <p>These buttons animate the model, use the dropdown menu for more other options</p>
                    </div>
                  </div>

                </div>
          </div>
  </div> <!-- end of itneracion -->
  </div>


<!-- coke info-->
<div id="cokeDescription" class= "row">
<!-- coca cola column -->
<div class= "col-sm-12">
    <div class= "card">
        <div class="card-body">
          <div id ="title_coke" class="card-title drinksText"></div>
          <div id ="description_coke" class="card-title drinksText"></div>
          <h1><?php echo $data[0]['modelTitle'] ?></h1>
          <h2><?php echo $data[0]['modelSubtitle'] ?></h2>
          <h><?php echo $data[0]['modelDescription'] ?></h>
         <a href="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola" class="btn btn-primary">Find out more ...</a>
        </div>
      </div>
  </div>
</div>

<!-- sprite info-->
<div id="spriteDescription" style="display:none;" class= "row">
  <!-- coca cola column -->
  <div class= "col-sm-12">
    <div class= "card">
        <div class="card-body">
          <div id ="title_sprite" class="card-title drinksText"></div>
          <div id ="description_sprite" class="card-title drinksText"></div>
          <h1><?php echo $data[1]['modelTitle'] ?></h1>
          <h2><?php echo $data[1]['modelSubtitle'] ?></h2>
          <h><?php echo $data[1]['modelDescription'] ?></h>
         <a href="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola" class="btn btn-primary">Find out more ...</a>
        </div>
      </div>
  </div>
  </div>

<!-- coke zero info-->
<div id="zeroDescription" style="display:none;" class= "row">
  <!-- coca cola column -->
  <div class= "col-sm-12">
      <div class= "card">
          <div class="card-body">
          <div id ="title_zero" class="card-title drinksText"></div>
          <div id ="description_zero" class="card-title drinksText"></div>
          <h1><?php echo $data[2]['modelTitle'] ?></h1>
          <h2><?php echo $data[2]['modelSubtitle'] ?></h2>
          <h><?php echo $data[2]['modelDescription'] ?></h>
         <a href="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola" class="btn btn-primary">Find out more ...</a>
          </div>
        </div>
    </div>
  </div> 



</div><!-- end of test page  -->




<div class = "container">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
              <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>

            <div class="carousel-inner">
              <div class=" carousel-item active">
                <img src="./application/assets/images/spriteBottleBigC.png" alt="Coke Bottle">
              </div>

              <div class="carousel-item">
                <img src="./application/assets/images/cokeCanBigC.png" alt="Sprite Bottle">
              </div>

              <div class="carousel-item">
                <img src="./application/assets/images/cokeZeroBigC.png" alt="Coke Zero can">
              </div>
              <div class="carousel-item">
                <img src="./application/assets/images/cokeBottleBigCC.png" alt="Coke Bottle ">
              </div>
            </div>
       </div>
 </div>


    <!-- footer -->

<nav id="footerColor"  class="navbar navbar-expand-sm footer">
    <div class = "container">
            <div class = "navbar-text float-left copyright">
              <p><span class="align-baseline">&copy Maximillian Lowrie's 3D app | Cand No:215698  </span></p>
        </div>
        <div class = "navbar-text float-right social">
          <a href="https://www.facebook.com"> <i class= "fab fa-facebook-square fa-2x" style="font-size:20px;color:rgb(34, 73, 202);"></i></a>
          <a href="https://www.twitter.com"> <i class= "fab fa-twitter fa-2x" style="font-size:20px;color:rgb(83, 160, 233);"></i></a>
          <a href="https://www.google.com"> <i class= "fab fa-google-plus fa-2x" style="font-size:20px;color:rgb(128, 13, 128);"></i></a>
          <a href="https://www.github.com"> <i class= "fab fa-github-square fa-2x" style="font-size:20px;color:rgb(128, 0, 21);"></i></a>
        </div>
    </div>
</nav>

<!-- Js links -->
<script src="./application/js/jquery-3.5.1.js"></script>
<script src="./application/js/popper.min.js"></script>
<script src="./application/js/bootstrap.js"></script>
<script src="./application/js/custom.js"></script>
<script src="./application/js/x3dom.js"></script>
<script src="./application/js/getJsonData.js"></script>
 <script src="./application/js/gallery_generator2.js"></script>

     <!--fancyBox3 => http://fancyapps.com/fancybox/3/ -->
     <script src="./application/js/jquery.fancybox.min.js"></script>

     <script src="./application/js/modelInteractions.js"></script>
  
    <!-- JavaScript to swap for SPA and restyle -->
    <script src="./application/js/swap_restyle.js"></script>





  </body>
</html>