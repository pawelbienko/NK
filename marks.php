<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
/*
Template Name: marks
*/
get_header(); ?>

<div class="container">
<h2>Oceny</h2>
<?php
$user_ID = get_current_user_id();
$id_student = $wpdb->get_var("SELECT id FROM school_students WHERE guardian = $user_ID");

if($id_student != 0){
    $rows = $wpdb->get_results("SELECT marks.id, stu.name as stu_name, mark, sub.name as sub_name, date_time 
                                FROM school_marks as marks
                                LEFT JOIN school_students as stu ON marks.id_student = stu.id
                                LEFT JOIN school_subjects as sub ON marks.id_lesson = sub.id
                                WHERE marks.id_student = $id_student
                                ");
    echo "<table class='table'>";
    echo "<tr><th>Uczeń</th><th>Ocena</th><th>Przedmiot</th><th>Data</th></tr>";
    foreach ($rows as $row ){
            echo "<tr>";
           // echo "<td>$row->id</td>";
            echo "<td>$row->stu_name</td>";
            echo "<td>$row->mark</td>";
            echo "<td>$row->sub_name</td>";
            echo "<td>$row->date_time</td>";
            echo "</tr>";       
        }
    echo "</table>";
}else{
    ?>
    <p>Uczeń nie posiada ocen !</p>
<?php
}
?>
</div>

<?php get_footer(); ?>

