<?php
/**
 * Template Name: Single Event
 * 
 */

get_header();
// Retrieve the current post object
$post = get_post();

?>

<div class="container">
    <h2 class="text-center"><?php echo $post->post_title; ?></h2>
    <p class="text-center">Elevate your skills with our most in-demand training programmes</p>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>Title</th>
                <th>Date</th>
                <th>Duration</th>
                <th>Location</th>
                <th>Fees</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $post->post_title; ?></td>
                <td><?php echo get_field('event_date', $post->ID); ?></td>
                <td><?php echo get_field('event_duration', $post->ID); ?></td>
                <td><?php echo get_field('event_location', $post->ID); ?></td>
                <td><?php echo get_field('event_fees', $post->ID); ?></td>
            </tr>
        </tbody>
    </table>
</div>

<?php get_footer(); ?>




