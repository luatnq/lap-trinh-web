<div class="clear">
</div>
<div class="main">
    <?php
            if(isset($_GET['action'])){
                $tam = $_GET['action'];
            }else{
                $tam = '';
            }
            if($tam=='quanlydonhang'){
                include("./modules/quanlydonhang/pheduyet.php");
                include("./modules/quanlydonhang/lietke.php");
            }else{
                include("./modules/dashboard.php");
            }
    ?>
</div>