<?php
require_once "back-end/config.php";

$page = isset($_GET['page']) ? $_GET['page'] : '';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tim Hortons Web Application Proposal</title>
    <link rel="stylesheet" href="index.css">
    
</head>

<body>
    <header>
        <nav class="navbar">
    
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="locations.html">Locations</a></li>
                <li><a href="feedback.html">Feedback</a></li>
                <li><a href="about me.html">about me</a></li>
            </ul>
        </nav>
    </header>
    <div class="content">
          <!-- Harmandeep Singh (Student ID: 202107595) -->
        <img src="timhortons.jpeg" alt="timhortons">
        <h1>Welcome to our Tim Hortons Web Application Proposal</h1>

        <section>
            <h2>User's Viewpoint</h2>
            <p>Our web application aims to provide Tim Hortons customers with convenient access to information about Tim Hortons menu items, locations, and the ability to provide feedback.</p>
            <p>Key features include:</p>
            <ul>
                <li>Browse the menu with detailed descriptions of items</li>
                <li>Search for Tim Hortons locations using zip codes or city names</li>
                <li>View store hours, contact information, and directions to each location</li>
                <li>Submit feedback and suggestions to Tim Hortons</li>
                <li>Responsive and user-friendly interface</li>
            </ul>
        </section>

        <section>
            <h2>User Interface</h2>
            <p>The user interface will feature a clean and intuitive design, allowing users to easily navigate through menu items, locate nearby stores, and submit feedback. Each page will be visually appealing and optimized for both desktop and mobile devices.</p>
        </section>

        <section>
            <h2>Database Schema</h2>
            <p>The database will store information related to menu items, store locations, and user feedback. It will include tables such as:</p>
            <ul>
                <li>MenuItems</li>
                <li>Locations</li>
                <li>Feedback</li>
            </ul>
            <p>Each table will have appropriate fields to store relevant data, such as item names, descriptions, prices, store addresses, ratings, and comments. Relationships between tables will be established to ensure data integrity and efficient retrieval.</p>
        </section>
    </div>
    <section id="tim-hortons-coffees"> 
                <h2>Tim Hortons Coffees</h2> 
                <div class="container">
                    <ul>
                        <li><a href="back-end/create.php">Add New Coffee</a></li> 
                    </ul>
                </div>
                <?php
            $query = "SELECT * FROM coffees"; 
            $result = mysqli_query($link, $query);
    
            if (mysqli_num_rows($result) > 0) :
                ?>
                    <table>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Description</th> 
                                <th>Price</th> 
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                            <tr>
                                <td>
                                    <?php echo $row['id']; ?>
                                </td>
                                <td>
                                    <?php echo $row['name']; ?>
                                </td>
                                <td>
                                    <?php echo $row['description']; ?> 
                                </td>
                                <td>
                                    <?php echo $row['price']; ?> 
                                </td>
                                <td>
                                    <a href="back-end/read.php?id=<?php echo $row['id']; ?>" title="View Record">View</a>
                                    <a href="back-end/update.php?id=<?php echo $row['id']; ?>" title="Update Record">Update</a>
                                    <a href="back-end/delete.php?id=<?php echo $row['id']; ?>" title="Delete Record">Delete</a>
                                </td>
                            </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                    <?php else : ?>
                    <p>No records found.</p>
                    <?php endif; ?>
            </section>
            <?php
    ?>
    <footer>
        <p>© 2024 Tim Hortons Web Application Proposal</p>
    </footer>
</body>

</html>
