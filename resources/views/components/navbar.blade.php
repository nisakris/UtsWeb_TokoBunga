<!DOCTYPE html>
<html>
<head>
    <style>
        nav.navbar ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        /* Style for the navigation links */
        body, nav.navbar ul {
            margin: 0;
            padding: 0;
        }

        /* Style the navigation */
        nav.navbar {
            background-color: darkgoldenrod;
            padding: 10px 0; 
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); 
        }

        nav.navbar ul {
            list-style-type: none; 
            text-align: center; 
        }

        nav.navbar li {
            display: inline-block; 
            margin-right: 50px; 
        }

        nav.navbar a {
            text-decoration: none; 
            color: black; 
            font-weight: bold; 
            font-size: 16px; 
            transition: color 0.3s; 
            padding: 5px 10px;
        }

        nav.navbar a:hover {
            color: #fff; 
            background-color: rgba(255, 255, 255, 0.3); 
            border-radius: 5px; 
        }
    </style>
</head>
<body>
<nav class="navbar">
    <ul>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('order') }}">Order</a></li>
        <li><a href="{{ route('login') }}">Login Admin</a></li>
    </ul>
</nav>
</body>
</html>
