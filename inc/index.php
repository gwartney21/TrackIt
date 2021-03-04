
<?php 

//Add job descirption to database 
require 'functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //$project_id = get_project(filter_input(INPUT_POST, 'id' , FILTER_SANITIZE_NUMBER_INT));
    $joblink = trim(filter_input(INPUT_POST, 'joblink', FILTER_SANITIZE_STRING));
    $jobdescription = trim(filter_input(INPUT_POST, 'jobdescription', FILTER_SANITIZE_STRING));
    
    if (empty($joblink) || empty($jobdescription)) {
        $error_message = 'Please fill in the required fields';
        echo $error_message;
    } else {
       add_job($joblink,$jobdescription);
       echo 'sucess';
       exit;
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
    <title></title>
    </head>

    <body>

    <div>
    <div>
        <div>
            <h1 class="actions-header">
           
            <form class="form-container form-add" method="post" action="index.php">
                <table>
                   

                    <tr>
                        <th><label for="joblink">joblink<span class="required">*</span></label></th>
                        <td><input type="text" name="joblink" value="" /></td>
                    </tr>

                    <tr>
                        <th><label for="jobdescription">Title<span class="required">*</span></label></th>
                        <td><input type="text" name="jobdescription" value="" /></td>
                    </tr>
                </table>
               
                <input type="submit" value="Submit" />
            </form>
        </div>
    </div>
</div>
    </body>

</html>