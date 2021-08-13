<?php

include('includes/info.php');
include('includes/header.php');
include('includes/navigation.php');
include('dbconnect.php');

?>
<!-- banner section begins -->
<section class="news_events_banner">
    <div class="container-fluid">
        <div class="news_banner_msg">
            <center>
                <p class="h1 text-white">News and Events</p>
            </center>
        </div>
    </div>
</section>
<!-- banner section ends -->
<!-- news section begins -->
<section class="news_events_section">
    <div class="container">
        <p class="h4 pt-5 text-center">Let's get Informed</p>
        <center><div class="border"></div></center>
        <div class="row">
            <div class="col-sm-12 col-md-8">

                <?php

                $query = "SELECT * FROM events ORDER BY created_at";
                $query_run = mysqli_query($connection, $query);

                if(mysqli_num_rows($query_run) > 0){
                    while($events = mysqli_fetch_assoc($query_run)){
                        echo '<div class="card my-4">
                                <img src="asset/images/maths contest.jpg" class="card-img-top p-2" alt="Book and calculator" style="height: 18rem;">
                                <div class="date-div text-center text-white pt-2 ms-2" style="width: 6rem; height: 5rem;">
                                    <p class="h4">' . date_format(date_create($events['event_date']), "j") . ' <br> ' . date_format(date_create($events['event_date']), "M") . '</p>
                                </div>
                                <div class="card-body mt-4">
                                    <h5 class="card-title">' . $events['event_name'] . '</h5>
                                    <p class="card-text">' . $events['event_desc'] . '</p>
                                </div>
                            </div>';
                    }
                }
                ?>                 

            </div>
            <div class="news_col col-sm-12 col-md-4">
                <p class="text-center fw-bold">Latest News</p>
                <div class="news-bottom-border"></div>

                <?php

                $query = "SELECT * FROM news ORDER BY created_at";
                $query_run = mysqli_query($connection, $query);

                if(mysqli_num_rows($query_run) > 0){
                    while($news = mysqli_fetch_assoc($query_run)){
                        echo '<div class="row my-3">
                                <div class="col-5">
                                    <img src="asset/images/card-image1.jpg" alt="..." style="width: 100%">
                                </div>
                                <div class="col-7 pt-4">
                                    <a class="text-secondary" href="#">' . $news['title'] . '</a>
                                </div>
                            </div>';
                    }
                }

                ?>

            </div>
        </div>
    </div>
</section>
<!-- news section ends -->

<?php

include('includes/scripts.php');

?>