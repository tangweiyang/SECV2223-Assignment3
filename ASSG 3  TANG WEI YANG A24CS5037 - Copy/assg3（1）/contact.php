<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header>
    <div class="nav-container">
        <div class="logo">TWY Portfolio</div>

        <nav>
            <ul class="nav-links">
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="projects.html">Projects</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>

<main>

<section class="hero">
    <h1>Contact Me</h1>
    <p>Send me a message.</p>
</section>

<div class="grid-container">

<section class="card main-content" style="grid-column: span 3;">

<h2>Contact Form</h2>

<form action="save_contact.php" method="POST">

<p>
<label>Name</label><br>
<input type="text"
name="name"
required
style="width:100%;padding:10px;">
</p>

<br>

<p>
<label>Email</label><br>
<input type="email"
name="email"
required
style="width:100%;padding:10px;">
</p>

<br>

<p>
<label>Message</label><br>
<textarea
name="message"
rows="6"
required
style="width:100%;padding:10px;"></textarea>
</p>

<br>

<button type="submit">
Send Message
</button>

<?php
if(isset($_GET['success']))
{
    echo "
    <div style='
        background:#d4edda;
        color:#155724;
        padding:12px;
        margin-bottom:20px;
        border-radius:6px;
    '>
        Message sent successfully!
    </div>";
}
?>

</form>

</section>

</div>

</main>

<footer>
    <p>© 2026 Tang Wei Yang | Universiti Teknologi Malaysia</p>
</footer>

</body>
</html>