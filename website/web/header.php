<div id="header">
    <div style="height: 90%;">
        <h1>Serien-Verwaltung</h1>
    </div>

    <div id="nav">
        <a class="nav_link" href="/">Home</a>
        <a class="nav_link" href=""></a>
        <?php
            if($_SESSION["admin"] === 1){
                echo '<a class="nav_link" href="">Add</a>';
            }
        ?>
        <?php
        if(isset($_SESSION["email"])){
            echo '<a class="nav_link" href="/logout">Logout</a>';
        }
        else{
            echo '<a class="nav_link" href="/login">Login</a>';
            echo '<a class="nav_link" href="/register">Register</a>';
        }
        ?>

        <a class="nav_link" href="">Account</a>
    </div>
</div>