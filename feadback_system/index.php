<!DOCTYPE html>
<?php
?>
<html lang="en">
     <!-- project develope by sarthak gadakh -->

<head>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script>
        function searchdetails() {
            $.post("publicshow.php",
                {
                    userserach: $('#userserach').val()
                },
                function (data, status) {
                    document.getElementById('searchdetail').innerHTML = data;
                });
        }

    </script>
    <script type="text/javascript">
        function save() {
            $.post("insertdata.php",
                {
                    name: $('#name').val(),
                    contact: $('#contact').val(),
                    massage: $('#massage').val()
                },
                function (data, status) {
                    alert(data);
                });
        }
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feadback</title>
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        body {
            background-color: black;
        }

        main {
            height: 10vh;
            position: relative;
            background-position: center center;

        }

        .data {

            height: 30vh;
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        nav {
            font-weight: bolder;
            font-style: italic;
            font-size: 50px;
            height: 57px;
            width: 100%;
            color: white;
            opacity: .69;
            background-color: #40939e8e;
            display: flex;
            justify-content: center;
            align-content: center;
            text-align: center;
        }

        input {
            height: 30px;
            margin: 10px;
            width: 350px;
        }

        button {
            background-color: #40939e8e;
            color: #ffffff;
            width: 100px;
            height: 30px;
            
        }

        table {
            color: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            
        }

        .data2 {
            
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        } 
       
    </style>
</head>

<body onload="searchdetails();">
    <main>
        <nav>
            CYNOR Project
        </nav>
 <!-- project develope by sarthak gadakh -->
    </main>
    <div class="data">
        <input type="text" placeholder="Name" id="name">
        <input type="number" placeholder="Number" id="contact">
        <input type="text" placeholder="Massage" id="massage">
        <button id="btn" onclick="save()">Submit</button>
    </div>
    <div class="data2">
        <input type="text" name="userserach" id="userserach" placeholder="Search your name"  onkeypress="searchdetails();">
        <table>
            <colspan="2">
                <span id="searchdetail"></span>
        </table>
        <!-- project develope by sarthak gadakh -->

    </div>

</body>

</html>