<!DOCTYPE html>
<html>
<?php include "default/bootstrap.php"; ?>
<meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0"/>
<meta charset="utf-8">
<head>
	<title>Gráfico</title>
<?php include "random.php"; ?>
<script src="https://unpkg.com/vue@next"></script>
<script src="https://www.gstatic.com/charts/loader.js"></script>
</head>
<body>
<div class="center">
<div class="container shadow-drop-center">
    <div class="row">
        <div class="col-md-5 col-12" id="two-way-binding">
            <div class="row" style="padding-top: 15px; padding-bottom: 15px;">
                <div class="col-md-12">
                    <p style="display: inline;"><script>document.write("{{ number }} ");</script></p>
                    <p id="name" style="display: inline;">
                    <script>
                    $.getJSON("https://economia.awesomeapi.com.br/json/all", function(json) {
                        document.getElementById("name").innerHTML += " "+json.USD.name+" é igual a";
                    });
                    </script>
                    </p>
                    <h1>R$ {{ number * message }}</h1>
                    <p class="p" id='gray'>
                    <script>
                    $.getJSON("https://economia.awesomeapi.com.br/json/all", function(json) {
                        document.getElementById("gray").innerHTML += json.USD.create_date;
                    });
                    </script>
                    </p>
                </div>
            </div>
            <div class="row" style="padding-bottom: 15px; float: bottom;">
                <div class="col-md-12">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">R$</span>
                        </div>
                        <input class="form-control" type="number" min="1" v-model="number" aria-describedby="basic-addon1">
                        </div>
                </div>
                <div class="col-md-12">
                    <?php include "currency.php"; ?>
                </div>
            </div>
        </div>
        <div class="col-md-7 col-12" id="graph">
            <?php include "graph.php"; ?>
        </div>
    </div>
    <div class="col-md-12" style="padding-top: 25px; padding-bottom: 10px;">
        <p id="gray">*Os valores são em comparação ao Real (BRL)</p>
    </div>
</div>
<div class="container shadow-drop-center" style="padding-top: 15px;padding-bottom: 10px; margin-top: 25px;">
    <center><?php include "upload.php"; ?></center>
    <p id="gray" style="padding-top: 10px;">*Adiciona a cotação atualizada de todas as moedas.</p>
</div>
</div>
<script>

var y = window.matchMedia("(max-width: 600px)");
myFunction(y); // Call listener function at run time
y.addListener(myFunction);
function myFunction(y) {
    if (y.matches) { // If media query matches
        $("#inputs" ).before($("#graph"));
    }
    else {
        $("#inputs" ).after($("#graph"));
    }
}
const TwoWayBindingApp = {
    data() {
        return {
            number: ''
        }
    }
}
Vue.createApp(TwoWayBindingApp).mount('#two-way-binding')
$(document).ready(function() {
    $('#currency').change(function(){ 
        var selectBox = document.getElementById("currency");
        var currency = selectBox.options[selectBox.selectedIndex].id
        document.getElementById("name").innerHTML = " "+currency+" é igual a";
    });
});
</script>
<style>
#gray {
    color: gray;
    font-size: 12px;
}
.center{
    width: 100%;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    padding-top: 25px;
}
.shadow-drop-center {
	-webkit-animation: shadow-drop-center 0s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
	        animation: shadow-drop-center 0s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
}
/* ----------------------------------------------
 * Generated by Animista on 2020-12-9 9:8:7
 * Licensed under FreeBSD License.
 * See http://animista.net/license for more info. 
 * w: http://animista.net, t: @cssanimista
 * ---------------------------------------------- */
/**
 * ----------------------------------------
 * animation shadow-drop-center
 * ----------------------------------------
 */
@-webkit-keyframes shadow-drop-center {
    0% {
        -webkit-box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
            box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
    }
    100% {
        -webkit-box-shadow: 0 0 20px 0px rgba(0, 0, 0, 0.35);
            box-shadow: 0 0 20px 0px rgba(0, 0, 0, 0.35);
    }
}
@keyframes shadow-drop-center {
    0% {
        -webkit-box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
            box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
    }
    100% {
        -webkit-box-shadow: 0 0 20px 0px rgba(0, 0, 0, 0.35);
            box-shadow: 0 0 20px 0px rgba(0, 0, 0, 0.35);
    }
}
</style>
</body>
</html>