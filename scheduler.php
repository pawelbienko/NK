<?php

/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
/*
Template Name: scheduler
*/

get_header(); ?>

<div id="primary" class="container">
    <main id="main" class="site-main" role="main">
            
    <?php
    if (is_user_logged_in()){

        if(isset($_GET['day'])){
            $day   = $_GET['day'];
            $month = $_GET['month'];
            $year  = $_GET['year'];
            $date  = $year.'-'.$month.'-'.$day;
            
            $user_ID = get_current_user_id();
            echo $user_ID;


            global $wpdb;
            $rowsTeachers = $wpdb->get_results("SELECT u.ID as id, user_login as name
                                        FROM `wp_users` as u
                                        LEFT JOIN `wp_usermeta` as m 
                                        ON u.ID = m.user_id
                                        WHERE m.meta_value LIKE '%teacher_role%'");


            $rowsScheduler = $wpdb->get_results("SELECT sch.id, sub.name as subject, tea.display_name as teacher, cla.name as class, lesson, class_room 
                                            FROM
                                            school_scheduler as sch 
                                            LEFT JOIN school_class as cla ON sch.class = cla.id 
                                            LEFT JOIN wp_users as tea ON sch.teacher = tea.id
                                            LEFT JOIN school_subjects as sub ON sch.subject = sub.id 
                                            WHERE subject_date = '$date' ORDER BY class ASC"
            );
            
            ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Przedmiot</th><th>Nauczyciel</th><th>Klasa</th><th>Godzina lekcyjna</th><th>Klasa Lekcyjna</th>
                        </tr>
                    </thead>
                    <tbody>
             <?php       
                    foreach ($rowsScheduler as $row ){
                       echo '<tr>'
                          . '<td>'. $row->subject. '</td>'
                          . '<td>'. $row->teacher.'</td>'
                          . '<td>'. $row->class.'</td>'
                          . '<td>'. $row->lesson.'</td>'
                          . '<td>'. $row->class_room.'</td>'     
                          . '</tr>';
                    }    
            ?>        
                    </tbody>
                </table>
        <?php
        }else{   
            $calendar = new Calendar();
            echo $calendar->show();
        }
    }    
    ?>
    </main><!-- .site-main -->

</div><!-- .content-area -->
<?php get_footer(); ?>


