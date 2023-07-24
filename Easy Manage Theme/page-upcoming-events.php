<?php
/**
 * Template Name: Events
 */
get_header();?>
   <!-- Header -->
   <body style="max-width:100%; overflow-x: hidden;">
  <head>
     <style>
         .site-header {
  z-index: 10;
  font-family: 'Roboto Condensed', sans-serif;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  position: -webkit-sticky;
  position: sticky;
  top: 0;
  background-color: #FFF;
}

@media screen and (min-width: 1250px) {
  .site-header {
    -webkit-box-pack: justify;
        -ms-flex-pack: justify;
            justify-content: space-between;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
        -ms-flex-direction: row;
            flex-direction: row;
  }
}

.site-header .nav-logo {
  -ms-flex-item-align: start;
      align-self: flex-start;
  padding: 10px 5px 5px;
}

.site-header .nav-logo a img {
  max-width: 200px;
  height: auto;
}

@media screen and (min-width: 768px) {
  .site-header .nav-logo a img {
    max-width: 314px;
    height: auto;
  }
}

.site-header .nav-links {
  display: none;
  width: 100%;
  background-color: #DEF0FF;
}

@media screen and (min-width: 1250px) {
  .site-header .nav-links {
    display: block;
    background-color: #FFF;
  }
}

.site-header .nav-links ul {
  padding: 0;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-pack: end;
      -ms-flex-pack: end;
          justify-content: flex-end;
}

@media screen and (min-width: 1250px) {
  .site-header .nav-links ul {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
        -ms-flex-direction: row;
            flex-direction: row;
  }
}

.site-header .nav-links ul li {
  list-style: none;
}

.site-header .nav-links ul li a {
  font-size: 18px;
  text-transform: uppercase;
  font-family: 400;
  color: #7f53ac;
  letter-spacing: 1.2px;
  padding: 10px 15px;
  text-decoration: none;
  display: block;
}

.site-header .nav-links ul li:hover {
  background-color: #efe0ff;
}

.site-header button {
  cursor: pointer;
  background: transparent;
  border: none;
  max-width: 50px;
  display: block;
  position: absolute;
  top: 10px;
  right: 10px;
}

@media screen and (min-width: 768px) {
  .site-header button {
    top: 20px;
  }
}

@media screen and (min-width: 1250px) {
  .site-header button {
    display: none;
  }
}

.nav-links.active {
  display: block;
}
     </style>
     
 </head> 

<body>
  <nav class="site-header">
    <div class="nav-logo">
      <a href="index.html">
       <img src="<?php echo get_template_directory_uri()?>/assets/img/front/kiit-removebg.png" width="120px" height="80px">
      </a>
    </div>
    <div><h4 class="text-uppercase">Project Management Consultancy</h4></div>
<button class="hamburger">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/front/menu.png" width="50px" height="50px">
</button>
    <div class="nav-links">
      <ul>
        <li><a href="https://consultancy.kiit.ac.ke/">Home</a></li>
        <!--<li><a class="nav-link" href="#about">About</a></li>-->
        <!--<li><a class="nav-link"href="#services">Services</a></a></li>-->
        <!--<li> <a class="nav-link" href="#portfolio">Portfolio</a></li>-->
        <!--<li><a class="nav-link" href="#team">Team</a></li>-->
        <!--<li><a class="nav-link" href="#contact">Contact</a></li>-->
        <li><a class="nav-link" href="https://consultancy.kiit.ac.ke/events/">Events</a></li>
      </ul>
    </div>
  </nav>

         <div class="container-fluid ">
    <div  class="bg-image opacity-50 " style= "background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/front/unsplash.jpg'); height: 200px; ">
        <h3 class="d-flex justify-content-center align-items-center text-dark ">Upcoming Events</h3>
    </div>

</div>

<div class="container mt-5">
  <h2 class="text-center text-uppercase">Upcoming <span class="text-danger"> Events</span></h2>
  <p  class="text-center">Elevate your skills with our most in-demand training programmes</p>           
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Tittle</th>
        <th>Date</th>
        <th>Duration</th>
        <th>Location</th>
        <th>Fees</th>
        <th>Register</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>The roles of Project Management skills  in 21st century economic growth </td>
        <td>7th July 2023 </td>
        <td>2 Hours (5:00Pm-7:00Pm)</td>
        <td>Virtual </td>
        <td>KES 1500 (Certificate to be provided)</td>
        <td><a href="https://consultancy.kiit.ac.ke/form/"><button type="button" class="btn btn-primary">Apply</button></a></td>
      </tr>
      <tr>
        <td>The Roles of Monitoring Evaluation Accountability and Learning (MEAL) as a Strategy for project success.</td>
        <td>14th July 2023 </td>
        <td>2Hours (5:00Pm-7:00Pm)</td>
        <td>Virtual</td>
        <td>KES 1500 (Certificate to be provided)</td>
        <td><a href="https://consultancy.kiit.ac.ke/form/"><button type="button" class="btn btn-primary">Apply</button></a></td>
      </tr>
      <tr>
        <td>Human Resource Management strategic success in Medium sized and big Projects </td>
        <td>11th August 2023 </td>
        <td>2 Hours (5:00Pm-7:00Pm)</td>
        <td>Virtual</td>
        <td>KES 1500 (Certificate to be provided)</td>
       <td><a href="https://consultancy.kiit.ac.ke/form/"><button type="button" class="btn btn-primary">Apply</button></a></td>
      </tr>
      <tr>
        <td>Theory of Change as a tool for Project Managers </td>
        <td>21st - 25th August 2023 </td>
        <td>5 days </td>
        <td>Mombasa Kenya </td>
        <td>KES 55,000 </td>
       <td><a href="https://consultancy.kiit.ac.ke/form/"><button type="button" class="btn btn-primary">Apply</button></a></td>
      </tr>
      <tr>
      <td>Procurement management in Project Management </td>
        <td>31st August 2023 </td>
        <td>2 Hours (5:00Pm-7:00Pm)	</td>
        <td>Virtual</td>
        <td>KES 1500 (Certificate to be provided) </td>
        <td><a href="https://consultancy.kiit.ac.ke/form/"><button type="button" class="btn btn-primary">Apply</button></a></td>
      </tr>
        <tr>
      <td>The Roles Of Monitoring Evaluation Accountability And Learning (Meal) As A Strategy For Project Success In Non-Governmental Organization In Kenya.</td>
        <td>6th - 8th September 2023</td>
        <td>3 days</td>
        <td>Nairobi</td>
        <td>KES 25,000 (Certificate to be provided) </td>
        <td><a href="https://consultancy.kiit.ac.ke/form/"><button type="button" class="btn btn-primary">Apply</button></a></td>
      </tr>
      <tr>
      <td>Service Quality and Customer Satisfaction </td>
        <td>4th- 8th September 2023 </td>
        <td>5 days </td>
        <td>Kisumu Kenya </td>
        <td>KES 55,000 </td>
       <td><a href="https://consultancy.kiit.ac.ke/form/"><button type="button" class="btn btn-primary">Apply</button></a></td>
      </tr>
      <tr>
      <td>How can agile project management be used to achieve project success/ objectives in the 21st century </td>
        <td>15th September 2023 </td>
        <td>2 Hours (5:00Pm-7:00Pm)</td>
        <td>Virtual </td>
        <td>KES 1500 (Certificate to be provided)</td>
        <td><a href="https://consultancy.kiit.ac.ke/form/"><button type="button" class="btn btn-primary">Apply</button></a></td>
      </tr>
      <tr>
      <td>School Administration’s Monitoring and Evaluation Procedures.</td>
        <td>25th - 29th September 2023 </td>
        <td>5 days</td>
        <td>Kisumu Kenya  </td>
        <td>KES 55,000</td>
       <td><a href="https://consultancy.kiit.ac.ke/form/"><button type="button" class="btn btn-primary">Apply</button></a></td>
      </tr>
      <tr>
      <td>Developing a winning business case individuals and companies dealing with tenders </td>
        <td>13th October 2023 </td>
        <td>2 Hours (5:00Pm - 7:00Pm) </td>
        <td>Virtual </td>
        <td>KES 1500(Certificate to be provided)</td>
       <td><a href="https://consultancy.kiit.ac.ke/form/"><button type="button" class="btn btn-primary">Apply</button></a></td>
      </tr>
      <tr>
      <td>Roles of Entrepreneurs in  project management </td>
        <td>23rd - 27th October 2023 </td>
        <td>5 days </td>
        <td>Nakuru Kenya </td>
        <td>KES 55,000</td>
       <td><a href="https://consultancy.kiit.ac.ke/form/"><button type="button" class="btn btn-primary">Apply</button></a></td>
      </tr>
      <tr>
      <td>Importance of Accountability and Transparency as a Sustainability Strategy for Complex Community Based  Programs.</td>
        <td>10th November 2023    </td>
        <td>2 Hours (5:00Pm-7:00Pm) </td>
        <td>Virtual</td>
        <td>KES 1500(Certificate to be provided)</td>
       <td><a href="https://consultancy.kiit.ac.ke/form/"><button type="button" class="btn btn-primary">Apply</button></a></td>
      </tr>
      <tr>
      <td>Unlocking the potential in performance management by Small and International projects </td>
        <td>20th - 24th November 2023</td>
        <td>5 days</td>
        <td>Kigali Rwanda</td>
        <td>KES 75,000 USD 538</td>
       <td><a href="https://consultancy.kiit.ac.ke/form/"><button type="button" class="btn btn-primary">Apply</button></a></td>
      </tr>
      <tr>
      <td>Influence of data and software in projects of the 21st century and beyond.</td>
        <td>4th - 8th December 2023</td>
        <td>5 days </td>
        <td>Mombasa, Kenya</td>
        <td>KES 55,000</td>
     <td><a href="https://consultancy.kiit.ac.ke/form/"><button type="button" class="btn btn-primary">Apply</button></a></td>
      </tr>
    </tbody>
    
  </table>
  </div>

  </div>
  <hr>

  </div>
  
  <script>
document.addEventListener('DOMContentLoaded', function() {
  const hamburger = document.getElementsByClassName("hamburger")[0];
  const mobileNavs = document.getElementsByClassName("nav-links")[0];

  hamburger.addEventListener("click", () => {
    mobileNavs.classList.toggle("active");
  });
});
</script>


</body>

<?php get_footer();?>