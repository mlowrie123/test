
    // Javascrript 
    var counter =0;
    var s= "test";
    $(document).ready(function() {
	
        selectPage();
        selectModel();
        selectView();


        function selectPage() {
        console.log(s);
        $('#home').show();
        $('#about').hide();
        $('#about1').hide();
        $('#about2').hide();
        $('#about3').hide();
        $('#models').hide();
        $('#interaction').hide();
        $('#cokeDescription').hide();
        $('#spriteDescription').hide(); 
        $('#zeroDescription').hide(); 
        $('#myCarousel').show();

        $('#navModels').click(function(){
            $('#home').hide();
            $('#about').hide();
            $('#about1').hide();
            $('#about2').hide();
            $('#about3').hide();
            $('#models').show();
            $('#interaction').show(); 
            $('#cokeDescription').show();
            $('#spriteDescription').hide(); 
            $('#zeroDescription').hide();
            $("#x3dModelTitle_coke").show();
            $("#x3dModelTitle_sprite").hide();
            $("#x3dModelTitle_zero").hide();
            $("#x3dCreationMethod_coke").show();
            $("#x3dCreationMethod_sprite").hide();
            $("#x3dCreationMethod_zero").hide(); 
            $('#myCarousel').hide();
        });

        $('#navAbout').click(function(){
            $('#home').hide();
            $('#about').show();
            $('#about1').show();
            $('#about2').show();
            $('#about3').show();
            $('#models').hide();
            $('#interaction').hide(); 
            $('#cokeDescription').hide();
            $('#spriteDescription').hide(); 
            $('#zeroDescription').hide();
            $("#x3dModelTitle_coke").hide();
            $("#x3dModelTitle_sprite").hide();
            $("#x3dModelTitle_zero").hide();
            $("#x3dCreationMethod_coke").hide();
            $("#x3dCreationMethod_sprite").hide();
            $("#x3dCreationMethod_zero").hide(); 
            $('#myCarousel').hide();
        });

    }


	function selectModel() {

		$('#navCoke').click(function(){
			$('#coke').show();
			$('#sprite').hide();
			$('#zero').hide();
            $('#cokeBottle').hide();
			$('#interaction').show(); 
			$('#cokeDescription').show();
			$('#spriteDescription').hide(); 
			$('#zeroDescription').hide(); 
		});

		$('#navSprite').click(function(){
            $('#home').hide();
			$('#coke').hide();
			$('#sprite').show();
			$('#zero').hide();
            $('#cokeBottle').hide();
			$('#interaction').show(); 
			$('#cokeDescription').hide();
			$('#spriteDescription').show();
			$('#zeroDescription').hide();  	 
            $("#x3dCreationMethod_sprite").show();   
            $("#x3dModelTitle_sprite").show(); 	  
		});

		$('#navZero').click(function(){
			$('#coke').hide();
			$('#sprite').hide();
			$('#zero').show();
            $('#cokeBottle').hide();
			$('#interaction').show(); 
			$('#cokeDescription').hide();
			$('#spriteDescription').hide(); 
			$('#zeroDescription').show(); 
            $("#x3dCreationMethod_zero").show();   
            $("#x3dModelTitle_zero").show();	   
		});


		$('#navCokeBottle').click(function(){
			$('#coke').hide();
			$('#sprite').hide();
            $('#zero').hide();
			$('#cokeBottle').show();
			$('#interaction').show(); 
			$('#cokeDescription').show();
			$('#spriteDescription').hide(); 
			$('#zeroDescription').hide(); 	
            $("#x3dCreationMethod_coke").show();   
            $("#x3dModelTitle_coke").show();
		});
	}
    function selectView() {
        $('#cameras').show();

		$('#navCameras').click(function(){
			$('#cameras').show();
            $('#audio').hide();
			$('#animation').hide();
            $('#Model').hide();
            $('#lights').hide();
		});

		$('#navAnimation').click(function(){
			$('#cameras').hide();
            $('#audio').hide();
			$('#animation').show();
            $('#Model').hide();
            $('#lights').hide();
		});

        $('#navAudio').click(function(){
			$('#cameras').hide();
			$('#animation').hide();
            $('#audio').show();
            $('#Model').hide();
            $('#lights').hide();
		});

        $('#navLights').click(function(){
			$('#cameras').hide();
			$('#animation').hide();
            $('#audio').hide();
            $('#Model').hide();
            $('#lights').show();
		});

        $('#navModel').click(function(){
			$('#cameras').hide();
			$('#animation').hide();
            $('#audio').hide();
            $('#Model').show();
            $('#lights').hide();
		});
	}
});
var x = document.getElementById("myAudio");

function playAudio() {
  x.play();
}

function pauseAudio() {
  x.pause();
}

   function swap(selected)
   {
       document.getElementById('home').style.display = 'none';
       document.getElementById('coke').style.display = 'none';
       document.getElementById('sprite').style.display = 'none';
       document.getElementById('zero').style.display = 'none';
     document.getElementById('cokeBottle').style.display = 'none';
     document.getElementById('animation').style.display = 'none';
     document.getElementById('cameras').style.display = 'none';
     document.getElementById('models').style.display = 'none';
     document.getElementById('test').style.display = 'none';
     document.getElementById('test1').style.display = 'none';
       
       document.getElementById(selected).style.display = 'block';
   }
   
   function changeLook() {
       counter += 1;
       switch (counter) {
           case 1:
               document.getElementById('bodyColor').style.backgroundColor = 'lightblue';
               document.getElementById('headerColor').style.backgroundColor = '#FF0000';
               document.getElementById('footerColor').style.backgroundColor = '#FF9900';
               break;
           case 2:
               document.getElementById('bodyColor').style.backgroundColor = '#FF6600';
               document.getElementById('headerColor').style.backgroundColor = '#FF9999';
               document.getElementById('footerColor').style.backgroundColor = '#996699';
               break;
           case 3:
               document.getElementById('bodyColor').style.backgroundColor = 'coral';
               document.getElementById('headerColor').style.backgroundColor = 'darkcyan';
               document.getElementById('footerColor').style.backgroundColor = 'darksalmom';
               break;
           case 4:
               counter = 0;
               document.getElementById('bodyColor').style.backgroundColor = 'lightgrey';
               document.getElementById('headerColor').style.backgroundColor = 'chocolate';
               document.getElementById('footerColor').style.backgroundColor = 'dimgrey';
               break;
       }
   }
   
   function changeBack() {
       document.getElementById('bodyColor').style.backgroundColor = 'rgb(110 228 255)';
       document.getElementById('headerColor').style.backgroundColor = '#ec0b12';
       document.getElementById('footerColor').style.backgroundColor = '#097945';
   }
   
   
