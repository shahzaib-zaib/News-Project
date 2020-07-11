<div id ="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php

                    include "config.php";

                    $sql = "SELECT * FROM settings ";
                    $result = mysqli_query($con, $sql) or die ("Query Faild.");
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)) {

                ?>
                <span>© Copyright 2020 News | Powered by <a href="#">Zaib</a></span>
            </div>
        </div>
    </div>
</div>
</body>
</html>
