<?php
include_once("db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timeline Post System - PHP & AJAX</title>
    <link rel="stylesheet" href="css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="blue lighten-1">
    
    <div class="container">
        <div class="row">
            <div class="col m10 offset-m1">
                <h1 class="center white-text">Timeline Post System - PHP & AJAX</h1>
                <div class="card-panel">
                    <form action="">
                        <div class="input-field">
                            <label for="post-text">Write Something here...</label>
                            <textarea id="post-text" class="materialize-textarea"></textarea>
                        </div>
                        <input type="submit" class="btn blue darken-3" value="POST" onclick="post('add')" disabled>
                    </form>
                </div>

                <div id="posts-container">
                    

                </div>
            </div>
        </div>
    </div>

     <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
        <h4>Update Post</h4>
            <form>
                <div class="input-field">
                    <textarea  id="edit-post-text" class="materialize-textarea"></textarea>
                </div>
                <input type="submit" id="edit-post-btn" class="btn blue darken-3 modal-close" value="Update" onclick="post('edit')">
                <input type="hidden" name="" id="post-id">
            </form>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancel</a>
    </div>
  </div>


    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>

<?php
?>