<div id="sidebar" class="col-md-4">
    <!-- search box -->
    <div class="search-box-container">
        <h4>Search</h4>
        <form class="search-post" action="search.php" method ="GET">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Search .....">
                <span class="input-group-btn">
                    <button type="submit" class="btn btn-danger">Search</button>
                </span>
            </div>
        </form>
    </div>
    <!-- /search box -->
    <!-- recent posts box -->
    <div class="recent-post-container">
        <h4>Recent Posts</h4>
        <?php

        include "config.php";

            /* Calculation Offset Code */
            $limit = 3;
            if(isset($_GET['page'])){
                $page = $_GET['page'];
            }else{
                $page = 1;
            }
            $offset = ($page - 1) * $limit;

            $sql = "SELECT post.post_id, post.title, post.description, post.post_date,post.author,
            category.category_name, user.username,post.category,post.post_img FROM post 
            LEFT JOIN category ON post.category = category.category_id
            LEFT JOIN user ON post.author = user.user_id
            ORDER BY post.post_id DESC LIMIT {$offset}, {$limit}";

            $result = mysqli_query($con, $sql) or die ("Query Faild.");
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)) {
        ?>
        <div class="recent-post">
            <a class="post-img" href="">
                <img src="images/post-format.jpg" alt=""/>
            </a>
            <div class="post-content">
                <h5><a href="single.php">Lorem ipsum dolor sit amet</a></h5>
                <span>
                    <i class="fa fa-tags" aria-hidden="true"></i>
                    <a href='category.php'>Html</a>
                </span>
                <span>
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                    01 Nov, 2019
                </span>
                <a class="read-more" href="single.php">read more</a>
            </div>
        </div>
    </div>
    <!-- /recent posts box -->
</div>
