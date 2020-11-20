<!DOCTYPE html>
<?php 
    session_start();
    include "default/conect2.php"; 
?>
<html>
<meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0"/>
<meta charset="utf-8">
<head>
	<title>RPG - Cyberpunk</title>
<?php include "default/bootstrap.php"; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body>
<?php include "default/navbar.php"; ?>
<div class="container">
<div class="gallery">
    <button class="prev"><i class="fas fa-arrow-left"></i></button>
    <button class="next" style="float: right;"><i class="fas fa-arrow-right"></i></button>
    <div class="movable">
        <div>
            <?php include "sheet/sheet.php"; ?>
        </div>
        <div>
            <?php include "sheet/adapter.php"; ?>
        </div>
    </div>
</div>
</div>
<?php include "default/footer.php"; ?>
<script>
$(function(){
    $('.gallery').each(function() {
        var $gal     = $(this),
            $movable = $(".movable", $gal), 
            $slides  = $(">*", $movable),
            N        = $slides.length,
            C        = 0,
            itv      = null;
        function anim() {
            C = ($(this).is(".prev") ? --C : ++C) <0 ? N-1 : C%N;
            $movable.css({transform: "translateX(-"+ (C*100) +"%)"});
        }
        $(".prev, .next", this).on("click", anim);
    });
});
</script>
<style>
.gallery{
    height: auto;
    overflow: hidden;
}
.gallery .movable{
    display: flex;
    transition: transform 0.4s;
}
.gallery .movable > div {
    flex:1;
    min-width:100%;
}
.card-img-top {
    height: 145px;
    object-fit: cover;
}
#input {
    margin-bottom: 5px;
    border-style: solid;
    border-width: 1.5px;
    border-radius: 5px;
    border-color: lightgray;
}
#row {
    padding-top: 3px;
    padding-bottom: 3px;
}
</style>
</body>
</html>