<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Book Appointment - SM Mehndi Artist</title>

    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600&family=Great+Vibes&display=swap" rel="stylesheet">
</head>

<body>

<header>

    <div class="logo">
        <img src="logo.jpeg" alt="SM Mehndi Artist">
    </div>

    <nav id="navMenu">

        <a href="index.php">HOME</a>

        <a href="about.php">ABOUT US</a>

        <div class="dropdown">
            <a href="gallery.php">GALLERY ▾</a>

            <div class="dropdown-content">
                <a href="arabic.php">ARABIC MEHNDI</a>
                <a href="bridal.php">BRIDAL MEHNDI</a>
                <a href="engagement.php">GLITTER / WHITE MEHNDI</a>
                <a href="traditional.php">TRADITIONAL MEHNDI</a>
            </div>
        </div>

        <a href="contact.php">CONTACT</a>

        <a href="book.php" class="book-btn active">
            BOOK APPOINTMENT
        </a>

    </nav>

</header>


<section class="contact-section">

    <h1>BOOK APPOINTMENT</h1>

    <div class="contact-container">

        <div class="contact-info">

            <h2>Book Your Mehndi</h2>

            <p>
                Fill in the details below to book your mehndi appointment.
                We will contact you to confirm your booking.
            </p>

            <div class="contact-item">
                <h3>📞 Phone</h3>
                <p>+91 98765 43210</p>
            </div>

            <div class="contact-item">
                <h3>📧 Email</h3>
                <p>smmehndiartist@gmail.com</p>
            </div>

            <div class="contact-item">
                <h3>📍 Location</h3>
                <p>Dwarka, Gujarat, India</p>
            </div>

        </div>


        <div class="contact-form">

            <h2>Appointment Details</h2>

            <form action="db.php" method="POST">

                <input
                    type="text"
                    name="name"
                    placeholder="Your Name"
                    required
                >

                <input
                    type="tel"
                    name="phone"
                    placeholder="Your Phone Number"
                    maxlength="10"
                    minlength="10"
                    pattern="[0-9]{10}"
                    inputmode="numeric"
                    oninput="this.value = this.value.replace(/[^0-9]/g, '')"
                    required
                >

                <input
                    type="email"
                    name="email"
                    placeholder="Your Email"
                    required
                >

                <label>Appointment Date</label>

                <input
                    type="date"
                    name="appointment_date"
                    min="<?php echo date('Y-m-d'); ?>"
                    required
                >

                <label>Appointment Time</label>

                <input
                    type="time"
                    name="appointment_time"
                    required
                >

                <select name="mehndi_type" required>

                    <option value="">Select Mehndi Type</option>

                    <option value="Bridal Mehndi">
                        Bridal Mehndi
                    </option>

                    <option value="Arabic Mehndi">
                        Arabic Mehndi
                    </option>

                    <option value="Traditional Mehndi">
                        Traditional Mehndi
                    </option>

                    <option value="Glitter / White Mehndi">
                        Glitter / White Mehndi
                    </option>

                </select>

                <input
                    type="number"
                    name="people"
                    placeholder="Number of People"
                    min="1"
                    max="50"
                    required
                >

                <textarea
                    name="message"
                    placeholder="Any Special Requirement"
                    rows="5"
                ></textarea>

                <button type="submit">
                    BOOK APPOINTMENT
                </button>

            </form>

        </div>

    </div>

</section>


<footer>
    © 2026 SM MEHNDI ARTIST | ALL RIGHTS RESERVED
</footer>

</body>
</html>