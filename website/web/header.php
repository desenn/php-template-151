<div id="header">
    <div style="height: 90%;">
        <h1>Serien-Verwaltung</h1>
    </div>

    <div id="nav">
        <a class="nav_link" href="/">Home</a>
        <a class="nav_link" href="/search-actor">Search Actor</a>
        <a class="nav_link" href="/search-series">Search Series</a>
        <?php
            if($_SESSION["admin"] === 1){
                echo '<a class="nav_link" href="/add-items">Add</a>';
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
        if(isset($_SESSION["email"])){
            echo '<a class="nav_link" href="/account">Account</a>';
        }
        ?>


    </div>
</div>