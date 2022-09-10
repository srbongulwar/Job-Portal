<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<div>
	<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- Container wrapper -->
  <div class="container">
    <!-- Navbar brand -->
    <a class="navbar-brand me-2" href="https://mdbgo.com/">
      <img
        src="https://cdn1.vectorstock.com/i/thumb-large/17/05/j-letter-icon-for-job-search-portal-vector-23361705.jpg"
        height="50";
         alt="MDB Logo"
        loading="lazy"
        style="margin-top: -1px;"
      />
    </a>

    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarButtonsExample"
      aria-controls="navbarButtonsExample"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarButtonsExample">
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#">Dashboard</a>

          </li>
      </ul>
      <!-- Left links -->

      <?php
      session_start();
      
          echo '
          
                <button type="submit" name="job"class="btn btn-primary me-3">
          <a href="userhome.php"
                class="link-danger"> Home Page</a>
        </button>

    
         <button type="submit" name="job"class="btn btn-primary me-3">
          <a href="viewjobs.php"
                class="link-danger"> view Jobs</a>
        </button>
        
        <button type="submit" name="viewapplication"class="btn btn-primary me-3">
          <a href="job1.php"
                class="link-danger">Basic Table</a>
        </button>
       
       
        </button>
         <button type="submit" name="logout"class="btn btn-primary me-3">
          <a href="view.php"
                class="link-danger">Logout</a>
        </button>

        
        ';
      


     
     
       
        

      
      
       ?>
        
       
        
      </div>
    </div>
    <!-- Collapsible wrapper -->
  </div>
  <!-- Container wrapper -->
</nav>
</div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>