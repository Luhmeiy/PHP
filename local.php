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
        <!-- Button to Open the Modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Open modal</button>
    <!-- The Modal -->
    <div class="modal" id="myModal" style="color: black; text-decoration: none;">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h1 class="modal-title">Modal Heading</h1>
                    <button type="button" class="close" data-dismiss="modal">×</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <h3>Some text to enable scrolling..</h3>
                    <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>
        </div>
    </div>
    </section>
        </div>
    <section class="container item2">
        <div id="txt">
            <h1 id="txt-c">RPG - Cyberpunk</h1>
            <p id="txt-c">O mundo vasto de RPG - Cyberpunk pode parecer maravilhoso a princípio, mas logo você descobrira que a vida não é tão fácil assim. De gigantes corporações a milícias e crime organizado, robôs gigantes ainda parecem uma surpresa para muitos dos jogadores. Cada rua, cada viela, cada centímetro da cidade contém um segredo ou um perigo: basta saber procurar!</p>
        </div>
    </section>
    <section class="container item3">
        <div id="txt">
            <h1 id="txt-c">RPG - Cyberpunk</h1>
            <p id="txt-c">O mundo vasto de RPG - Cyberpunk pode parecer maravilhoso a princípio, mas logo você descobrira que a vida não é tão fácil assim. De gigantes corporações a milícias e crime organizado, robôs gigantes ainda parecem uma surpresa para muitos dos jogadores. Cada rua, cada viela, cada centímetro da cidade contém um segredo ou um perigo: basta saber procurar!</p>
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