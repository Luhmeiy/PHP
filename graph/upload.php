<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<?php include "default/conect.php"; ?>
<?php
$post = [$_POST['USD'], $_POST['USDT'], $_POST['CAD'], $_POST['EUR'], $_POST['GBP'], $_POST['ARS'], $_POST['BTC'], $_POST['LTC'], $_POST['JPY'], $_POST['CHF'], $_POST['AUD'], $_POST['CNY'], $_POST['ILS']];
$query = "SELECT * FROM info ORDER BY cd_info DESC LIMIT 1";
if ($result = $mysqli->query($query)) {
    while ($obj = $result->fetch_object()){
        $guide = $obj->guide + 1;
    }
}
foreach ($post as $code2) {
    $query = "SELECT * FROM info ORDER BY cd_info DESC LIMIT 1";
    if ($result = $mysqli->query($query)) {
        while ($obj = $result->fetch_object()){
            $number = $obj->cd_info + 1;
        }
    }
    $array = $code2;
    $array2 = $_POST['USD2'];
    $array3 = ["", "", "nmallinfo", "high", "", "", "pctChange", "", "", "",  "createdate"];
    foreach ($array as $code => $index) {
        if ($array2[$code] == low || $array2[$code] == varBid || $array2[$code] == bid || $array2[$code] == ask || $array2[$code] == timestamp || $array2[$code] == codein) {
        }
        else if ($array2[$code] == code) {
            $query = "INSERT INTO info (cd_info, nm_info, guide, nmallinfo, high, pctChange, createdate) VALUES (NULL, '".$index."', '".$guide."', 1, 1, 1, 1)";
            if ($result = $mysqli->query($query)) {
            }
        }
        else {
            $query = "UPDATE info SET ".$array3[$code]." = '".$index."' WHERE cd_info = ".$number."";
            if ($result = $mysqli->query($query)) {
            }
        }
    }
}
?>
<script>
$.getJSON("all.php", function(data) {
    var items = [];
    $.each(data, function(usd,code,key) {
        var jsonArray = JSON.stringify(code);
        var jsonParsedArray = JSON.parse(jsonArray);
        for (key in jsonParsedArray) {
            if (jsonParsedArray.hasOwnProperty(key)) {
                items.push("<input type='hidden' value='"+jsonParsedArray[key]+"' name='"+usd+"[]'>");
                items.push("<input type='hidden' value='"+key+"' name='"+usd+"2[]'>");
            }
        }
    });
    $( "<div>", {
        "class": "my-new-list",
        html: items.join("")
    }).appendTo("form");
});
</script>
<form method="POST">
    <input class="btn btn-info" type="submit" value="Adicionar novos valores">
</form>