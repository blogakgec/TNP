<?php
    include('includes/header.php');
?>
<form method="POST" action="process_register.php">
<div class="container-fluid">
    <section class="container">
        <div class="container-page">                
            <div class="col-md-6">
                <h3 class="dark-grey">Registration</h3>
                
                <div class="form-group col-lg-12">
                    <label>Username</label>
                    <input type="text" name="name" class="form-control" id="" value="">
                </div>
                
                <div class="form-group col-lg-6">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" id="" value="">
                </div>
                                
                <div class="form-group col-lg-6">
                    <label>Email Address</label>
                    <input type="email" name="email" class="form-control" id="" value="">
                </div>

                <div class="form-group col-lg-6">
                    <label>Phone number</label>
                    <input type="text" name="phone_no" class="form-control" id="" value="">
                </div>
                <div class="form-group col-lg-6">
                    <label>10th percentage:</label>
                    <input type="text" name="tenth" class="form-control" id="" value="">
                </div>
                <div class="form-group col-lg-6">
                    <label>12th percentage:</label>
                    <input type="text" name="twelth" class="form-control" id="" value="">
                </div>

                 <div class="form-group col-lg-6">
                    <label>Graduation percentage"</label>
                    <input type="text" name="grad" class="form-control" id="" value="">
                </div>
                <div class="form-group col-lg-6">
                    <label>Qulalifications</label>
                    <input type="text" name="quali" class="form-control" id="" value="">
                </div>
                <div class="form-group col-lg-6">
                    <label>Place</label>
                    <input type="text" name="place" class="form-control" id="" value="">
                </div>
            </div>
            <br><br><br>
            <div class="col-md-6">
                <h3 class="dark-grey">Terms and Conditions</h3>
                <p>
                    By clicking on "Register" you agree to The websites Terms and Conditions
                </p>
                <p>
                    This website mwerly gives information about training and placements. Data collected is from newspapers or external sources. if not true
                    admin of this website will not be responsible.
                </p>
                <p>
                    Should there be an error in the description, we will provide you with help.
                </p>
                <input type="submit" class="btn btn-primary" value="Register" /> 
            </div>
        </div>
    </section>
</div>
<form>
<?php
    include('includes/footer.php');
?>