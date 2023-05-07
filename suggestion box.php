<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylehome.css" />
    <script src="scripthome.js"></script>
    <title>Your Suggestion!</title>
    <style>
     .container{
        width: 100%;
        max-width: 400px;

    
    }
    #suggestion_box h2{
        color: black;
        display: block;
        font-size: 30px;
        font-weight: 400;
        margin: 5px 0 15px;

    }
    #suggestion_box textarea{
        width: 100%;
        border: 1px solid #CCC;
        background-color: #FFF;
        margin: 0 0 5px;
        padding: 10px;

    }
    fieldset{
        border: medium none !important;
        margin:0 0 10px;
        padding: 0;
        width: 100%;
    }
    #suggestion_box button[type="submit"]{
        cursor:pointer;
        color: white;
    width: 160px;
    height: 40px;
    margin-top: 10px;
    margin-left: 0px;
    background: #005af0;
    border: 1px solid #005af0;
    border-radius: 30px;

    }
    #suggestion_box button[type="submit"]:hover
    {
        background-color:#09C;
    }
  
     
    </style>
    <script>
        function func(){
            alert("Thank You For Your Suggestion");
        }
    </script>
</head>

<body>
        <div class="leftnavbar">
            <div class="header">
                <div id="name">
                    <a href="home.html" style="color: black;
    text-decoration: dashed;"> WeBlog </a>
                </div>
                <div id="form">
                    <form>
                        <input type="type" id="searchbar" placeholder="Search"></input>
                    </form>
                </div>
            </div>

            <a href="home.html" style="color: black;
    text-decoration: dashed;"><button id="Home" type="button">Home</button></a>
            <button id="Blogs" type="button" onclick="Blogs()">Category</button>
            <div id="menu" style="display:none">
                <a href="home.html#mainTECH"><button id="tech" type="button">Tech</button></a>
                <a href="home.html#mainDSA"><button id="DSA" type="button">DSA</button></a>
                <a href="home.html#mainSTL"><button id="STL" type="button">STL</button></a>
                <a href="home.html#mainOOPs"><button id="OOPs" type="button">OOPs</button></a>
                </div>
            <a href="http://localhost/WeBlog-main/contact.php" ><button id="Contact" type="button" style="border-left: 3px solid #005af0;">Contact</button></a>
            <a href="privacy.html"><button id="Privacy" type="button">Privacy</button></a>
            <a href="about.html"><button id="About" type="button">About</button></a>
            <a href="terms and condition.html"><button id="tnc" type="button">Terms and conditions</button></a>
            
        </div>
    <div class="info_page">
<div class="container">
    <form id="suggestion_box" action="insert.php" method="post" target="_blank">
        <h2>Your Suggestion!</h2>
        <fieldset>
            <textarea placeholder="Enter Your Suggestion here" name="suggestion_text" rows="8" cols="60" required></textarea>
        </fieldset>
<fieldset> 
    <button name="Submit" type="submit" id="suggestion_box" onclick="func();" >SUBMIT</button>
</fieldset>
    </form>
</div>
</div>

</body>
</html>