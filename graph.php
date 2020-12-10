<?php include "default/bootstrap.php"; ?>
<?php include "default/conect.php"; ?>
<?php include "random.php"; ?>
<?php 
    if (isset($_POST['button'])) {
        header("location:https://pijamas-marcia.000webhostapp.com/?name=".$_POST['name']."&name2=".$_POST['name2']."");
    }
?>
<script src="https://www.gstatic.com/charts/loader.js"></script>
<form method="POST">
<div class="row justify-content-center">
    <p id="title" style="margin-top: 15px;"></p>
</div>
<div class="row justify-content-center">
    <center style="width: 100% !important;"><div id="curve_chart" style="width: 100% !important;"></div></center>
</div>
<div class="row">
    <div class="col-md-6 col-6">
        <select class="form-control" id="currency1" name="name"></select>
    </div>
    <div class="col-md-6 col-6">
        <select class="form-control" id="currency2" name="name2"></select>
    </div>
</div>
<div class="row justify-content-center" style="margin-top: 15px;">
    <input class="btn btn-info" type="submit" style="width: 80%;" value="Comparar" name="button">
</div>
</form>
<script>
var data_month1 = [<?php foreach ($currency as $code) { echo $code; } ?>];
var data_month2 = [<?php foreach ($currency2 as $code) { echo $code; } ?>];
google.charts.load('current', {
    packages: ['corechart']
}).then(function drawChart() {
    // month 1
    var data1 = new google.visualization.DataTable();
    data1.addColumn({label: 'Hour', type: 'number'});
    data1.addColumn({label: 'currency1', type: 'number'});
    data1.addRows(data_month1);
    // month 2
    var data2 = new google.visualization.DataTable();
    data2.addColumn({label: 'Hour', type: 'number'});
    data2.addColumn({label: 'currency2', type: 'number'});
    data2.addRows(data_month2);
    // join data tables
    var join1 = google.visualization.data.join(data1, data2, 'full', [[0,0]], [1], [1]);
    // Curved line
    var options = {
        title: '',
        curveType: 'function',
        legend: { position: 'bottom' }
    };
    // Curved chart
    var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
    chart.draw(join1, options);
}); // End bracket from drawChart
//Currency1
$.getJSON("https://economia.awesomeapi.com.br/json/all", function(json) {
    var name = <?php echo "'".$_GET['name']."'"; ?>;
    var name2 = <?php echo "'".$_GET['name2']."'"; ?>;
    document.getElementById("title").innerHTML +=("Comparando <b>"+name+"</b> com <b>"+name2+"</b>");
    document.getElementById("currency1").innerHTML += "<option value='' disabled selected>Selecione uma moeda</option>";
    document.getElementById("currency1").innerHTML += "<option value='"+json.USD.code+"' name='currency1'>"+json.USD.name+"</option>";
    document.getElementById("currency1").innerHTML += "<option value='"+json.USDT.code+"' name='currency1'>"+json.USDT.name + "</option>";
    document.getElementById("currency1").innerHTML += "<option value='"+json.CAD.code+"' name='currency1'>"+json.CAD.name + "</option>";
    document.getElementById("currency1").innerHTML += "<option value='"+json.EUR.code+"' name='currency1'>"+json.EUR.name + "</option>";
    document.getElementById("currency1").innerHTML += "<option value='"+json.GBP.code+"' name='currency1'>"+json.GBP.name + "</option>";
    document.getElementById("currency1").innerHTML += "<option value='"+json.ARS.code+"' name='currency1'>"+json.ARS.name + "</option>";
    document.getElementById("currency1").innerHTML += "<option value='"+json.BTC.code+"' name='currency1'>"+json.BTC.name + "</option>";
    document.getElementById("currency1").innerHTML += "<option value='"+json.LTC.code+"' name='currency1'>"+json.LTC.name + "</option>";
    document.getElementById("currency1").innerHTML += "<option value='"+json.JPY.code+"' name='currency1'>"+json.JPY.name + "</option>";
    document.getElementById("currency1").innerHTML += "<option value='"+json.CHF.code+"' name='currency1'>"+json.CHF.name + "</option>";
    document.getElementById("currency1").innerHTML += "<option value='"+json.AUD.code+"' name='currency1'>"+json.AUD.name + "</option>";
    document.getElementById("currency1").innerHTML += "<option value='"+json.CNY.code+"' name='currency1'>"+json.CNY.name + "</option>";
    document.getElementById("currency1").innerHTML += "<option value='"+json.ILS.code+"' name='currency1'>"+json.ILS.name + "</option>";
});
//Currency2
$.getJSON("https://economia.awesomeapi.com.br/json/all", function(json) {
    document.getElementById("currency2").innerHTML += "<option value='' disabled selected>Selecione uma moeda</option>";
    document.getElementById("currency2").innerHTML += "<option value='"+json.USD.code+"' name='currency2'>"+json.USD.name+"</option>";
    document.getElementById("currency2").innerHTML += "<option value='"+json.USDT.code+"' name='currency2'>"+json.USDT.name + "</option>";
    document.getElementById("currency2").innerHTML += "<option value='"+json.CAD.code+"' name='currency2'>"+json.CAD.name + "</option>";
    document.getElementById("currency2").innerHTML += "<option value='"+json.EUR.code+"' name='currency2'>"+json.EUR.name + "</option>";
    document.getElementById("currency2").innerHTML += "<option value='"+json.GBP.code+"' name='currency2'>"+json.GBP.name + "</option>";
    document.getElementById("currency2").innerHTML += "<option value='"+json.ARS.code+"' name='currency2'>"+json.ARS.name + "</option>";
    document.getElementById("currency2").innerHTML += "<option value='"+json.BTC.code+"' name='currency2'>"+json.BTC.name + "</option>";
    document.getElementById("currency2").innerHTML += "<option value='"+json.LTC.code+"' name='currency2'>"+json.LTC.name + "</option>";
    document.getElementById("currency2").innerHTML += "<option value='"+json.JPY.code+"' name='currency2'>"+json.JPY.name + "</option>";
    document.getElementById("currency2").innerHTML += "<option value='"+json.CHF.code+"' name='currency2'>"+json.CHF.name + "</option>";
    document.getElementById("currency2").innerHTML += "<option value='"+json.AUD.code+"' name='currency2'>"+json.AUD.name + "</option>";
    document.getElementById("currency2").innerHTML += "<option value='"+json.CNY.code+"' name='currency2'>"+json.CNY.name + "</option>";
    document.getElementById("currency2").innerHTML += "<option value='"+json.ILS.code+"' name='currency2'>"+json.ILS.name + "</option>";
});
</script>