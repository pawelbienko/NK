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
    $rows = $wpdb->get_results("SELECT
                                id, id_student, mark, id_lesson, date_time 
                                FROM school_marks
                                WHERE id_student = $id_student
                                ");
    echo "<table class='table'>";
    echo "<tr><th>ID</th><th>Uczeń</th><th>Ocena</th><th>Przedmiot</th><th>Data</th></tr>";
    foreach ($rows as $row ){
            echo "<tr>";
            echo "<td>$row->id</td>";
            echo "<td>$row->id_student</td>";
            echo "<td>$row->mark</td>";
            echo "<td>$row->id_lesson</td>";
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

