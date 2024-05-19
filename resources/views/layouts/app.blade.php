<!DOCTYPE HTML>
<html lang='ru'>
<head>
    <meta charset='UTF-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Планировщик задач">
    <meta name="author" content="Пользователь">
    <meta name="robots" content="index, follow">
    <title> Планировщик задачи - @yield('title')</title>

    <style>
        body {
            background-color: #FFE4C4;
            font-family: Arial, sans-serif;
        }

        .title {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
        }

        .container {
            background-color: #d0bdf4;
            margin: 1rem auto;
            padding: 1rem;
            border: 3px solid;
            max-width: 500px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group span {
            display: block;
            margin-bottom: 5px;
        }

        .form-group textarea {
            resize: none; /* prevent textarea from being resizable */
            height: 200px; /* set default height */
            width: 100%; /* set default width */
        }

        .form-group input[type="text"] {
            width: 50%; /* set default width for title input field */
            height: 30px; /* set default height for title input field */
        }

        ul {
            list-style: none;
            margin: 0 auto;
            padding: 0;
        }

        li {
            margin-bottom: 20px;
        }

        .button-group {
            display: flex;
            justify-content: center;
            margin: 10px auto;
        }

        .button-group > * {
            margin: 0 0px;
        }

        .btn {
            background-color: #337ab7;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            margin: 0 5px;
            border-radius: 5px;
            text-decoration: none;
        }

        .btn:hover {
            background-color: #23527c;
        }

        .btn-primary {
            background-color: #337ab7;
        }

        .btn-secondary {
            background-color: #666;
        }

        .btn-danger {
            background-color: #d9534f;
        }

        .pagination {
            text-align: center;
            margin: 20px 0;
            list-style: none;
            padding: 0;
        }

        .pagination li {
            display: inline-block;
            margin: 0 10px;
        }

        .pagination li a {
            color: #337ab7;
            text-decoration: none;
        }

        .pagination li a:hover {
            color: #23527c;
        }

        .pagination li.active a {
            color: #fff;
            background-color: #337ab7;
            border-radius: 3px;
            padding: 5px 10px;
        }


    </style>
</head>

<body>

<div class="sidebar">
    @yield('sidebar')
</div>

<main>
    @yield('content')
</main>

</body>
</html>
