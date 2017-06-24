<div id="header">
    <div>
        <h1>Serien-Verwaltung</h1>
    </div>

    <div id="nav">
        <a class="nav_link" href="/">Home</a>
        <a class="nav_link" href="/search-series">Search series</a>
        <a class="nav_link" href="/search-actor">Search actor</a>
        <?php
        if(isset($_SESSION["email"])){
            if($_SESSION["is_admin"] == 1){
                echo '<a class="nav_link" href="/add-series">Add Series</a>';
                echo '<a class="nav_link" href="/add-actors">Add Actors</a>';
            }
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