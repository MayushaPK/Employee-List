<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Employee List</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>

    <body>
        
        <div class="container" style="margin-top:50px">    
             <br>        
             <?php if (isset($error)): ?>
                <div class="alert alert-error"><?php echo $error; ?></div>
            <?php endif; ?>
             
            <h4>Select CSV file</h4>
                <form method="post" action="<?php echo base_url() ?>csv_import/importcsv" enctype="multipart/form-data">
                    <input type="file" name="userfile" ><br><br>
                    <input type="submit" name="submit" value="UPLOAD" class="btn btn-primary">
                </form>
            
            <br><br>
            <table class="table table-striped table-hover table-bordered">
                <h2><center>Employee List</center></h2>
                <thead>
                    <tr>
                        <th>Sr.No</th>
                        <th>Employee Code</th>
                        <th>Employee Name</th>
                        <th>Department</th>
                        <th>Age</th>
                        <th>Experience in the organization</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($emplist == FALSE): ?>
                        <tr><td colspan="4">There are currently No Employee details</td></tr>
                    <?php else: ?>
                        
                        <?php foreach ($emplist as $row): ?>
                            <?php 
                                $dateOfBirth = $row['emp_dob'];
                                $dateOfJoining = $row['joining_date'];
                                $today = date("Y-m-d");
                                $dobdiff = date_diff(date_create($dateOfBirth), date_create($today));
                                $age = $dobdiff->format('%y');
                                $joindiff = date_diff(date_create($dateOfJoining), date_create($today));
                                $Joindate = $joindiff->format('%y');
                            ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['emp_code']; ?></td>
                                <td><?php echo $row['emp_name']; ?></td>
                                <td><?php echo $row['department']; ?></td>
                                <td><?php echo $age; ?></td>
                                <td><?php echo $Joindate; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
            <hr>
        </div>
    </body>
</html>
