<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>include and require</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            width: 100%;
            border: 1px solid black;
        }

        header,
        footer {
            padding: 1em;
            color: white;
            background-color: black;
            clear: left;
            text-align: center;
        }

        nav {
            float: left;
            width: 100%;
            margin: 0;
            padding: 1em;
        }

        nav ul {
            list-style-type: none;
        }

        nav ul li {
            background-color: white;
            margin: 0 auto;
        }

        nav ul a {
            text-decoration: none;
            font-size: 18px;
        }

        article {
            border-left: 1px solid gray;
            padding: 1em;
            overflow: hidden;
        }
    </style>
</head>

<body>
    <div class="container">
        <header>
            <?php require 'header.php';  ?>
        </header>
        <nav>
            <?php require 'nav.php'; ?>
        </nav>
        <article>
            <?php require 'content.php'; ?>
        </article>
        <footer>
            <?php require 'footer.php'; ?>
        </footer>
    </div>
</body>

</html>