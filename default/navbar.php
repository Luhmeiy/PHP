<nav class="navbar navbar-expand-lg navbar-dark bg-body">
  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    	<span class="navbar-toggler-icon"></span>
  	</button>
  	<ul class="navbar-nav mr-auto">
      	<li>
    		<a class="navbar-brand" href="https://legendsslayer.000webhostapp.com/rpg-cyberpunk">RPG - Cyberpunk</a>
    	</li>
    </ul>
  	<div class="collapse navbar-collapse" id="navbarText">
    	<ul class="navbar-nav mr-auto">
      		<li class="nav-item">
        		<a class="nav-link" href="https://legendsslayer.000webhostapp.com/rpg-cyberpunk">Classes</a>
      		</li>
      		<li class="nav-item">
        		<a class="nav-link" href="https://legendsslayer.000webhostapp.com/rpg-cyberpunk/enemies.php">Inimigos</a>
      		</li>
      		<li class="nav-item">
        		<a class="nav-link" href="https://legendsslayer.000webhostapp.com/rpg-cyberpunk/itens.php">Itens</a>
      		</li>
      		<li class="nav-item">
        		<a class="nav-link" href="https://legendsslayer.000webhostapp.com/rpg-cyberpunk/local.php">Locais</a>
      		</li>
      		<li class="nav-item">
        		<a class="nav-link" href="https://legendsslayer.000webhostapp.com/rpg-cyberpunk/about.php">Sobre o Sistema</a>
      		</li>
    	</ul>
  	</div>
  	<form class="form-inline" style="padding-right: 25px;" id="myP">
    	<div class="input-group">
            <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-outline-success" type="button"><i class="fas fa-search"></i></button>
            </div>
        </div>
  	</form>
  	 <a class="navbar-brand" id="brand" href="<?php if(isset($_SESSION['COD_USER'])) { echo "https://legendsslayer.000webhostapp.com/rpg-cyberpunk/profile.php"; } else { echo "https://legendsslayer.000webhostapp.com/rpg-cyberpunk/login.php"; }?>"><i class="fas fa-user" style="font-size: 25px;"></i></a>
</nav>
<nav class="navbar navbar-expand-lg navbar-dark bg-body justify-content-center hidden" id="nav">
  	<form method="POST" style="width:100%;">
    	<div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-outline-success" type="button"><i class="fas fa-search"></i></button>
            </div>
        </div>
  	</form>
</nav>
<style>
.hidden {
    display:none;  
}
</style>
<script>
var y = window.matchMedia("(max-width: 991px)");
myFunction(y); // Call listener function at run time
y.addListener(myFunction);
function myFunction(y) {
    if (y.matches) { // If media query matches
        $("#brand" ).after($("#navbarText"));
        $('#myP').after($("#brand"));
    }
    else {
        $("#brand" ).before($("#navbarText"));
        $('#myP').before($("#navbarText"));
    }
}
var x = window.matchMedia("(max-width: 600px)");
myFunction2(x); // Call listener function at run time
x.addListener(myFunction2);
function myFunction2(x) {
    if (x.matches) { // If media query matches
        $('#myP').addClass('hidden');
        $('#nav').removeClass('hidden');
    }
    else {
        $('#myP').removeClass('hidden');
        $('#nav').addClass('hidden');
    }
}
</script>
