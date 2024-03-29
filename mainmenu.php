<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skyline - Main menu</title>
    <link rel="icon" href="./assets/images/favicon.jpg">
    <style>
        body {
            background-image: url("./assets/images/mainmenubg.jpg");
            background-color: #f0f0f0;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            margin: 0;
            overflow-x: hidden;
            padding: 10px;
            position: relative;
        }

        body::before {
            content: "";
            position: fixed; 
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); 
            z-index: -1; 
        }

        header {
            display: flex; 
            align-items: center; 
            justify-content: space-between; 
            padding: 20px 10px; 
            background-color: rgba(0, 0, 0, 0.7); 
            width: 100%; 
            box-sizing: border-box; 
            margin: 0; 
            position: fixed; 
            top: 0; 
            left: 0; 
        }

        .logo {
            display: flex; 
            align-items: center; 
            padding-left: 15px;
        }

        .logo img {
            height: 50px; 
            margin-right: 15px; 
        }

        .title h1 {
            margin: 0;
            color: #fff;
            font-size: 30px; 
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            font-size: 20px;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        nav ul li a:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        main {
            
            padding-top: 700px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: #fff;
            z-index: 1;
        }

        main h1 {
            font-size: 50px;
            margin-bottom: 2px;
        }

        main h4 {
            font-size: 20px;
        }
        .button {
            background-color: #4E8DF5; /* Change the background color to a shade of blue */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-top: 15px; 
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease; /* Smooth transition effect */
        }
        .button:hover {
            background-color: #356ab4; /* Darker shade of blue on hover */
        }
    </style>
</head>
<body>
<header>
    <div class="logo">
        <img src="./assets/images/logo.jpg" alt="Airline Logo">
        <div class="title">
            <h1>Skyline Airlines PH</h1>
        </div>
    </div>
    <nav>
        <ul>
            <li><a href="/Github_Repository/Group_Skyline_Airways/dashboard.php">Dashboard</a></li>
            <li><a href="#">Flights</a></li>
            <li><a href="#">Bookings</a></li>
            <li><a href="/Github_Repository/Group_Skyline_Airways/login.php">Login</a></li>
        </ul>
    </nav>
</header>
<main>
    <h1>Discover Your Dream Vacation</h1>
    <h4>Experience the ultimate getaway with our fantastic airline vacation deals. Booking your dream trip is hassle-free and convenient with us. Whether you're longing for tropical beaches, cultural exploration, or stunning natural landscapes, we've got you covered.</h4>
    <a href="/Github_Repository/Group_Skyline_Airways/offers.php" class="button">Book Now</a>
</main>
</body>
</html>