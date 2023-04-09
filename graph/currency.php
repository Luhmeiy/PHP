<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<select class="form-control" id="currency" v-model="message">
    
</select>
<script>
$.getJSON("https://economia.awesomeapi.com.br/json/all", function(json) {
    document.getElementById("currency").innerHTML += "<option value='' disabled selected>Selecione uma moeda</option>";
    document.getElementById("currency").innerHTML += "<option value='"+json.USD.high+"' id='"+json.USD.name+"'>"+json.USD.name+"</option>";
    document.getElementById("currency").innerHTML += "<option value='"+json.USDT.high+"' id='"+json.USDT.name+"'>"+json.USDT.name + "</option>";
    document.getElementById("currency").innerHTML += "<option value='"+json.CAD.high+"' id='"+json.CAD.name+"'>"+json.CAD.name + "</option>";
    document.getElementById("currency").innerHTML += "<option value='"+json.EUR.high+"' id='"+json.EUR.name+"'>"+json.EUR.name + "</option>";
    document.getElementById("currency").innerHTML += "<option value='"+json.GBP.high+"' id='"+json.GBP.name+"'>"+json.GBP.name + "</option>";
    document.getElementById("currency").innerHTML += "<option value='"+json.ARS.high+"' id='"+json.ARS.name+"'>"+json.ARS.name + "</option>";
    document.getElementById("currency").innerHTML += "<option value='"+json.BTC.high+"' id='"+json.BTC.name+"'>"+json.BTC.name + "</option>";
    document.getElementById("currency").innerHTML += "<option value='"+json.LTC.high+"' id='"+json.LTC.name+"'>"+json.LTC.name + "</option>";
    document.getElementById("currency").innerHTML += "<option value='"+json.JPY.high+"' id='"+json.JPY.name+"'>"+json.JPY.name + "</option>";
    document.getElementById("currency").innerHTML += "<option value='"+json.CHF.high+"' id='"+json.CHF.name+"'>"+json.CHF.name + "</option>";
    document.getElementById("currency").innerHTML += "<option value='"+json.AUD.high+"' id='"+json.AUD.name+"'>"+json.AUD.name + "</option>";
    document.getElementById("currency").innerHTML += "<option value='"+json.CNY.high+"' id='"+json.CNY.name+"'>"+json.CNY.name + "</option>";
    document.getElementById("currency").innerHTML += "<option value='"+json.ILS.high+"' id='"+json.ILS.name+"'>"+json.ILS.name + "</option>";
});
</script>