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
          <a href="job.php"
                class="link-danger">Jobs</a>
        </button>
        <button type="submit" name="cat"class="btn btn-primary me-3">
          <a href="categories.php"
                class="link-danger">Categories</a>
        </button>
        <button type="submit" name="viewapplication"class="btn btn-primary me-3">
          <a href="viewsubmittedapp.php"
                class="link-danger">view Application</a>
        </button>
        <button type="submit" name="viewuser"class="btn btn-primary me-3">
          <a href="viewuser.php"
                class="link-danger">view user</a>
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