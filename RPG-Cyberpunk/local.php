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
</head>
<body>
<?php include "default/navbar.php"; ?>
<center><section id="section">
    <section class="item1">
        <div class="container" id="txt">
            <h1 id="txt-c">RPG - Cyberpunk</h1>
            <p id="txt-c">O mundo vasto de RPG - Cyberpunk pode parecer maravilhoso a princípio, mas logo você descobrira que a vida não é tão fácil assim. De gigantes corporações a milícias e crime organizado, robôs gigantes ainda parecem uma surpresa para muitos dos jogadores. Cada rua, cada viela, cada centímetro da cidade contém um segredo ou um perigo: basta saber procurar!</p>
        </div>
    </section>
    <section class="item2">
        <div class="container" id="txt">
            <h1 id="txt-c">Rio de Março</h1>
            <p id="txt-c">A principal cidade do Brasil Cyberpunk, toma a extensão do que antes era todo o Sudeste brasileiro. Mesmo com tamanha extensão territorial, a cidade está superpopulada, em especial por criminosos. Os civis constantemente se encontram em perigo com os tiroteios, gangues e perseguições em alta velocidade. As corporações dominam a cidade, mas um novo poder cresce cada vez mais, formando braços que aos poucos se fecham sobre os altos prédios espelhados.</p>
            <?php include "modal/modal-RM.php"; ?>
        </div>
    </section>
    <section class="item3">
        <div class="container" id="txt">
            <h1 id="txt-c">NeoPaul</h1>
            <p id="txt-c">A cerca de meio século, uma guerra aconteceu na área baixa de São Paulo, levando a vida de milhares de cidadões. Negando ajuda, os habitantes da área alta colocaram em prática o plano que há muito já sabiam ser inevitável: uma cidade flutuante. Os mais de 300km² voadores foram financiados pelos Estados Unidos da América do Norte.</p>
            <?php include "modal/modal-NP.php"; ?>
        </div>
    </section>
    <section style="height: auto;">
        <?php include "default/footer.php"; ?>
    </section>
</section></center>
<style type="text/css">
body {
    overflow: hidden;
}
#section {
    scroll-snap-type: y mandatory;
    overflow-y: scroll;
}
section {
    height: 90vh;
    scroll-snap-align: center;
}
.item1, .item2, .item3 {
    width: 100%;
    display: table;
}
.item1 {
    background-image: url("https://i.pinimg.com/originals/75/35/04/7535042d25896182f31f01297640733c.jpg");
}
.item2 {
    background-color: green;
}
.item3 {
    background-color: red;
}
#txt {
    vertical-align: middle;
    display: table-cell;
}
#txt-c {
    color: white;
    font-weight: 900;
    text-shadow: black 0px 0px 10px;
    text-transform: uppercase;
}
.modal-body::-webkit-scrollbar {
    width: 10px;
}
.modal-body::-webkit-scrollbar-track {
    box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
}
.modal-body::-webkit-scrollbar-thumb {
    background-color: #F90;
}
</style>
</body>
</html>