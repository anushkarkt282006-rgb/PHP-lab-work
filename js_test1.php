<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JavaScript Test</title>
    <body>
        <div class=""data">
            <h2 id="h2_data">This is a test data</h2>
            <form action="" method="get">

            <input type="text" name="for php" id="for_php" value="This is a test data for php">
            </form>
    </body>
    <script>
        //Get data
        var data = document.getElementbyID('h2_data').innerText;

        //Set Data
        var element = document.getElementsByTagname('h2')[0];
        element.innerText = data + " = THIS IS A TEST";
        element.style.color="red";
        // when you want to load script before content
    </script>
    </head>
    <body> 
        This is a test page for JavaScript.
        <br>

        <button onclick="myFunction()">
            Click me</button>
        <?php
        echo "Hello, this is a test js file.";
        ?>
       <br>

    <script type="text/javascript" lang="javascript">
        var str= "hello! this is AI";
        if (str== "Anushka") {
            str = str.toUpperCase();
            document.write("not the data");
        }
        else {

        document.write("not the data");
        }
        </script>
         
    </body>
</html>


     