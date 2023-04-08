<?php include "bootstrap.php"; ?>
<div class="row justify-content-center" id="content">
<?php
    $ab = array("1", "2", "3", "4", "5", "6", "7", "8");
    $name = array("Rifle de Assalto", "Rifle de Precisão", "Metralhadora", "Escopeta", "Pistolas", "Armas Brancas", "Bombas", "Arremessáveis");
    foreach($ab as $index => $code) {
        echo "<a class='PA1' id=".$code." onClick='reply_click(this.id)'><div class='module mid'>
              <img src='https://upload-os-bbs.mihoyo.com/upload/2020/07/24/1096276/0f89226f0480c0226990705e7a7bb27c_945582593248283206.png?x-oss-process=image/resize,s_740/quality,q_80/auto-orient,0/interlace,1/format,jpg' class='bg-img'>
              <p><h2>".$name[$index]."</h2></p>
              <p id='p1'>(39/50)</p>
              </div></a>";
    }
?>
</div>
<script>
function reply_click(clicked_id) {
    var id = clicked_id;
    window.location = "https://legendsslayer.000webhostapp.com/rpg-cyberpunk/sheet/itens.php?cod="+id;
}
</script>
<style>
.bg-img {
    object-fit: cover;
    filter: brightness(0.30) blur(2px);
    width: 150px;
    height: 150px;
}
.module {
    background: 
        linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
    background-size: cover;
    width: 150px;
    height: 150px;
    margin-left: 3px;
    margin-right: 3px;
    margin-top: 3px;
    margin-bottom: 3px;
    position: relative;
    float: left;
}
.mid h2 {
    font-family: 'Roboto', sans-serif;
    font-weight: 900;
    color: orange;
    text-transform: uppercase;
    margin: 0;
    position: absolute;
    top: 50%;
    left: 50%;
    font-size: 1.25rem;
    transform: translate(-50%, -50%);
}
.mid p {
    font-family: 'Roboto', sans-serif;
    font-weight: 450;
    color: white;
    margin: 0;
    position: absolute;
    left: 50%;
    font-size: 1rem;
    transform: translate(-50%, -50%);
}
#p1 {
    top: 75%;
}
a{
    cursor: pointer;
}
</style>