<?php 
$sched_arr = array();
$max = 0;
?>
<section class="py-5 px-5 min-vh-100 mt-5">
    <div class="container mt-5 card d-flex justify-content-center">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-dark">
            <h1 class="display-4 fw-bolder">Welcome <?php echo $_settings->info('name') ?></h1>
        </div>
    </div>
       <div class="col-md-6 p-0">
           <div class="p-4">
               <div class="card-title text-center w-100">Login</div>
           </div>
           <div class="card-body">
               <form action="" id="login-client">
                    <div class="form-group">
                        <label for="email" class='control-label'>Email</label>
                        <input type="text" class="form-control" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="password" class='control-label'>Password</label>
                        <input type="password" class="form-control" name="password" required>
                    </div>
                    <div class="form-group d-flex justify-content-end">
                        <button class="btn btn-sm btn-block btn-dark btn-flat">Login</button>
                    </div>
               </form>
           </div>
       </div>
    </div>
</section>
<script>
</script>