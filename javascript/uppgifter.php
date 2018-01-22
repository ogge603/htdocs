<!DOCTYPE html>
<html>

<head>
<style>

	#colorbox {
		width:60px;
		hegiht:60px;
		background-color:blue;
	}
	
	#moveDiv {
		width:60px;
		height:60px;
		background-color:red;
		
	}
	

</style>
</head>

<body>


<button type="button" onclick="alert('wassup')">Click Me!</button>

<div id = "page">
	
	
	<br><br> 
	
	<img onmouseover="bigger(this)" onmouseleave="smaller(this)" id="bild" src="staty.jpg" width=200 height=200>
	<br> <br>
	<button onmousedown="hide()">Hide/Show</button>
	<button onmousedown="changeColor()">Change color</button>
	<button onmousedown="clearPage()">Clear website</button>
	<br><br>
	
	<div id="colorbox" onmousedown="changeColorBox()"> </div>
	<div id="counter">
	
		<button onmousedown="increase(1)">1<1/button>
		<button onmousedown="increase(10)">10</button>
		<button onmousedown="increase(100)">100</button>
		<br><br>
		
		<button onmousedown="resetcoutner()">Reset</button>
	</div>
		
	<br><br>
	
	<p id="cleartext"></p>
	
	<script>
	
	
		var counter = 0;
		
		function move(dir){
			
			if(dir == "up")
				margin = element.style.marginTop;
				margin = margin.replace("px","");
				element.style.marginTop = margin - 1;

		}
		
		if(dir == "down"){
			
			margin = element.style.marginTop;
				margin = margin.replace("px","");
				element.style.marginTop = margin + 1;
			
			
		}
		
		if(dir == "left"){
			
			margin = element.style.marginLeft;
				margin = margin.replace("px","");
				element.style.marginLeft = margin - 1;
			
		}
		
		
		if(dir == "right"){
			
			margin = element.style.marginLeft;
				margin = margin.replace("px","");
				element.style.marginLeft = margin + 1;
			
		}
			
			function pressed() {
				
				alert("Pressed!");
				
				
				
			}
					
		function bigger(image) {
			
			image.style.height = "400px";
			image.style.width = "400px";
			
			
		}
		function smaller(image) {
			image.style.height = "200px";
			image.style.width = "200px";
		}
	
	
		function hide() {
				var image = document.getElementById("bild");
				if(image.style.display == "none") {
					image.style.display = "inline";
				} else {
					image.style.display = "none";
				}
			}
	
		
	</script>
	
	
	

</body>

</html>
