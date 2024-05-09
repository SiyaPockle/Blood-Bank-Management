<?php
include 'db_config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation History</title>
    <link rel="stylesheet" href="css/donationhistory.css">
</head>
<body>
<img class="bg" src="images\bb1.jpg">
<h1>Donation History</h1>
<div>
    <form action="searchhistory.php" method="POST">
        <input type='text' class="form-control" id="history" name="bgrp" autocomplete="off" placeholder="Search...">
        <button type='submit'>Search</button>
    </form>
</div>
<div id="searchresult"></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $("#history").keyup(function(){
        var input = $(this).val();
        if (input != ""){
            $.ajax({
                url:"searchhistory.php",
                method:"POST",
                data:{bgrp:input},
                success:function(data){
                    $("#searchresult").html(data);
                }
            });
         } else{
            $("#searchresult").css("display","none");
        }
    });
});
</script>
</body>
</html>
