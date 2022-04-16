 <!-- Masthead-->
 <header class="masthead">
     <div class="container">
         <div class="masthead-subheading">Welcome To Hotel NazgaminG</div>
         <div class="masthead-heading text-uppercase">NazgaminG</div>
         
         <?php
                    if ($this->session->userdata('status') == "login") {
                     
                        echo '<a class="btn btn-primary btn-xl text-uppercase" href=" ' . base_url('index.php/pesan_kamar') . '">Pesan Kamar</a></li>';
                    } else {
                       
                    }
                    ?>
     </div>
 </header>
