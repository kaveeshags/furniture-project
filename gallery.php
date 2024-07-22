<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Professional Gallery</title>
</head>
<style>
    /* Reset some default styles */
body, h1, h2, p {
    margin: 0;
    padding: 0;
}

/* Basic styling */
body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
}

header {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 1rem 0;
}

main {
    padding: 2rem;
}

.gallery {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    grid-gap: 2rem;
}

.artwork {
    border: 1px solid #ddd;
    padding: 1rem;
    background-color: #fff;
    text-align: center;
}

.artwork img {
    max-width: 100%;
    height: auto;
}

footer {
    text-align: center;
    padding: 1rem 0;
    background-color: #333;
    color: #fff;
}

</style>
<body>
    <header>
        <h1>Furniture Gallery</h1>
    </header>
    <main>
        <section class="gallery">
            <div class="artwork">
                <img src="images/plastic 1.jpg" alt="Artwork 1">
                <h2>Our projects</h2>
                <p>Description of Artwork 1.</p>
            </div>
            <div class="artwork">
                <img src="images/outdoor 4.jpg" alt="Artwork 2">
                <h2>Artwork 2</h2>
                <p>Description of Artwork 2.</p>
            </div>
            <!-- Add more artwork divs as needed -->
        </section>
    </main>
    <footer>
        <p>&copy; 2023 Art Gallery. All rights reserved.</p><br>
        <div class="footer">
        <?php   include 'footer.php' ?>
        </div>
    </footer>

</body>
</html>
