<?php
/**
 * Template Name: Success
 */
get_header();?>
<style>
  .container {
    height: 500px;
  }

  @media (max-width: 767px) {
    /* Mobile devices */
    .container {
      height: 100vh; /* Cover the entire screen */
    }
  }
</style>

<div class="container mt-5 text-center p-5">
  <h2>Form Submission Successful</h2>
  <p>Thank you for registering!</p>
  <p>We have received your registration details and will be in touch shortly.</p>
  <a href="https://consultancy.kiit.ac.ke/" class="btn btn-info btn-lg text-bg-primary">
    <span class="glyphicon glyphicon-home"></span> Home Page
  </a>
</div>

<?php get_footer(); ?>


