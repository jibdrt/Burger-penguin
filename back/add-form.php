<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add project</title>
</head>
<body>
    
 <div>
    <form action="add-form-handler.php" method="post" enctype="multipart/form-data">
        <div>
            <label for="input_title">Title</label>
            <input type="text" id="input_title" name="project_title">
        </div>
        <div>
            <label for="input_picture">Picture</label>
            <input type="file" id="input_picture" name="project_picture">
        </div>
        <div>
            <label for="input_begin">Begining date</label>
            <input type="date" id="input_begin" name="project_begin">
        </div>
        <div>
            <label for="input_end">Ending date</label>
            <input type="date" id="input_end" name="project_end">
        </div>
        <div>
            <label for="input_context">Context</label>
            <textarea name="project_context" id="input_context" cols="30" rows="10"></textarea>
        </div>
        <div>
            <label for="input_specs">Specs</label>
            <textarea name="project_specs" id="input_specs" cols="30" rows="10"></textarea>
        </div>

        <div>
            <label for="input_githublink">GitHub link</label>
            <input type="text" id="input_githublink" name="project_githublink">
        </div>
        <div>
            <label for="input_link">Project link</label>
            <input type="text" id="input_link" name="project_link">
        </div>
        <div>
            <input type="submit">
        </div>

    </form>
</div>   
    
    
    
    
    </form>
</body>
</html>

