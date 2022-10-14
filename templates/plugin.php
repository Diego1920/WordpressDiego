<?php

$args=array(

);

$query=new WP_Query(args);

if($query->have_posts()){


    while ($query->have_posts()){
        $query->the_post();
    }

}

wp_reset_postdata();

?>