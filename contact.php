<!DOCTYPE html>
<html>
<head>
    <title>Contact Us - Spark Events</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header>
    <h1>Spark Events</h1>
    <nav>
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="events.php">Events</a>
        <a href="gallery.php">Gallery</a>
        <a href="contact.php">Contact</a>
    </nav>
</header>

<section class="services">

    <h2>Book Your Event</h2>

    <form action="submit_contact.php" method="POST">

        <input type="text" name="name" placeholder="Name" required><br><br>

        <input type="email" name="email" placeholder="Email" required><br><br>

        <input type="text" name="phone" placeholder="Phone" required><br><br>

        <input type="text" name="subject" placeholder="Subject" required><br><br>

        <textarea name="message" placeholder="Message" rows="5" required></textarea><br><br>

        <button type="submit" class="btn">
            Submit Inquiry
        </button>

    </form>

</section>

<footer>
    <p>Designed and Developed by Riddhi Pawar</p>
</footer>

</body>
</html>