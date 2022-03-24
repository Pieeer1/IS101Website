<html lang = 'en'>
<head>
    <meta name = 'viewport' content = 'width=device-wdith, initial-scale=1.0'>
    <meta charset = 'UTF-8'>
    <title>Mason's Portfolio</title>
    <link rel = "stylesheet" href ="css/style.css" type="text/css">
</head>
<body>
    <header>
        <a href="index.html"class='logo'><img src="img/logo.png" class="logoimage"></a>
        <div class="toggle" onclick="toggleMenu();"></div>
        <ul class="menu">
            <li><a href="index.html" onclick="toggleMenu();">Home</a></li>
            <li><a href="about.html" onclick="toggleMenu();">About</a></li>
            <li><a href="resume.html" onclick="toggleMenu();">Resume</a></li>
            <li><a href="gallery.html" onclick="toggleMenu();">Gallery</a></li>
            <li><a href="blog.html" onclick="toggleMenu();">Blog</a></li>
        </ul>
    </header>
    <section class="blog">
        <hr>
        <div class="blogText">
            <h1>Blog</h1>
        </div>
        <div class="blogPost">
        <h2>Hoaxes, Scams, and Data Manipulation </h2>
        <p> One Scam I have come accross in my life has been a 'Nigerian Prince' sending me repeated emails detailing my missing fortune that he would like to give me. While my email spam filter picks up 90% of these absurd 'gifts', the 10% that get through are concerning. The email details a large sum of money, normally in the millions, that the sender claims to owe you. This scam normally entails the user responding to the email chain, where the scammer will ask for bank transfer information to send the ficticious money to. Once the victim responds, the scammer will take that information and steal money or information from the user's bank account. This is a very real concern, and can target less tech-savvy folk as well as vunerable populations such as the elderly. With more information on scams like these, they can be prevented and awareness can be raised to reduce the amount of people falling for them. Generally, determining this email was scam was simple, no one, through email, will randomly offer you large sums of money.</p>
        </div>
        <div class="comments">
        <ul>
        <?php
            $servername = "localhost";
            $username = "Pieeer1";
            $password = "456456";
            $dbname = "is101";
            
            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            // Check connection
            if (!$conn) {
              die("Connection failed: " . mysqli_connect_error());
            }
            
            $sql = "SELECT * FROM comments";
            $result = mysqli_query($conn, $sql);
            
            if (mysqli_num_rows($result) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($result)) {
                echo "<li>" . $row["name"]. " : " . $row["comment"]. "</li><br>";
              }
            } else {
              echo "0 Comments";
            }
            
            mysqli_close($conn);
            ?>
            </ul>
            </div>
            <div class="formBx">
            <form action = "includes/comment.php" method = "post">
            <input type="text" name="name" placeholder="Name">
            <input type="text" name="comment" placeholder="Comment">
            <button type = "submit" name = "submit">Add Comment</button>
            </div>
        </form>
    </section>


    
</body>
</html>
<script src="js/script.js"></script>