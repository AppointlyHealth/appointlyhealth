<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to AppointlyHealth</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section>
            <h1>Welcome to AppointlyHealth</h1>
            <p>Your healthcare scheduling solution</p>
        </section>
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} AppointlyHealth. All rights reserved.</p>
    </footer>
</body>
</html>

