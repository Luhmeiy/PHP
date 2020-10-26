<!-- Site footer -->
<footer class="site-footer">
    <div class="container column">
        <div class="row">
            <div class="col-md-4">
                <p>(13) 3034-8091</p>
                <p>Email: </p>
                <p><a href="termos.php">Termos de Serviço</a></p>
                <p><a href="privacidade.php">Política de Privacidade</a></p>
            </div>
            <div class="col-md-4">
                <center><img src="IMGs/logo.png" style="height: 100px;"></center>
            </div>
            <div class="col-md-4">
                <ul class="social-icons">
                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>  
                </ul>
            </div>
        </div>
        <hr>
        <div class="row justify-content-center">
            <div class="col-xs-12">
                <p class="copyright-text">Copyright &copy; 2020 <a href="#">Barrica's Bar</a></p>
            </div>
        </div>
    </div>
</footer>
<script type="text/javascript">
var x = window.matchMedia("(max-width: 1799px)");
myFunction(x);
x.addListener(myFunction);
function myFunction(x) {
    if (x.matches) { 
        $(".column").removeClass("center"); 
    } else {
    }
}
var y = window.matchMedia("(min-width: 1800px)");
ourFunction(y);
y.addListener(ourFunction);
function ourFunction(y) {
    if (y.matches) {
        $(".column").addClass("center");  
    } else {
    }
}
</script>