<html>
    <head>
         <script src="//ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>
         <script type="text/javascript">
            function searchPage(value){
                $.post("result.php",{keyword:value}, function(data){
                    $("#results").html(data);
                });
            }
         </script>
    </head>
    
    <body>
        <input type="text" onkeyup="searchPage(this.value)" />
        <br>
        <div id="results"></div>
    </body>
</html>