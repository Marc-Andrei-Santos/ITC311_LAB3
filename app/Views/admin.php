<!DOCTYPE html>
<html>

<head>

    <style>
        body {
            background-color: #f2f2f2;
            margin: 0;
            font-family: 'Poppins', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login_btn-container span {
            background-color: red;
            padding: 5px 10px;
            border-radius: 5px;
            color: white;
            text-decoration: none;
        }

        .header_section {
            background-color: darkblue;
            color: #fff;
            padding: 20px 0;
            text-align: center;
            font-family: "Times New Roman", Times, serif;
        }

        .navbar-brand {
            color: #fff;
            font-size: 24px;
            text-decoration: none !important;
        }

        .form-inline input[type="search"] {
            width: 300px;
        }

        .modal-footer {
            display: flex;
            align-items: flex-end;
            margin-top: 15px;
        }

        .login_btn-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }

        .login_btn-container a {
            text-decoration: none;
            color: #fff;
            display: flex;
            align-items: center;
        }

        .login_btn-container img {
            margin-right: 5px;
        }

        .container-xl {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
        }

        .table-responsive {
            overflow-x: auto;
        }

        .table.table-striped th {
            background-color: darkgreen;
            color: white;
            padding: 5px;
            font-weight: normal;
        }

        .table.table-striped th,
        .table.table-striped td {
            padding: 6px;
        }

        .table.table-striped td {
            background-color: #f8f9fa;
            color: #333;
            padding: 10px;
        }

        .form-inline input[type="search"] {
            width: 300px;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
        }

        .form-inline button.nav_search-btn {
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 15px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .form-inline button.nav_search-btn:hover {
            background-color: #0056b3;
        }

        #addEmployeeModal {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            padding: 25px;
        }

        .btn.btn-success {
            cursor: pointer;
        }

        .btn.btn-success:hover {
            background-color: #218838;
        }

        .btn.btn-secondary {
            background-color: white;
            color: black;
            margin-right: 10px;
        }

        .btn.btn-success {
            background-color: #28a745;
            color: #fff;
        }

        .btn.btn-danger {
            background-color: #ff0000;
        }
    </style>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Bookstore Admin Santos</title>

    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700|Roboto:400,700&display=swap"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
    <div class="book_area"></div>
    <header class="header_section">
        <div class="container">
            <div class="top_contact-container">
            </div>
        </div>
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
                <a class="navbar-brand" href="index.html">
                    <img src="images/logo.png" alt="">
                    <span>
                        Bookstore Website
                    </span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="d-flex  flex-column flex-lg-row align-items-center w-100 justify-content-between">

                        <form class="form-inline ">
                            <input type="search" placeholder="Search">
                            <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
                        </form>
                        <div class="login_btn-container">
                            <a style="background-color: red" href="/logout">logout</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <!-- table items -->
    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div id="addEmployeeModal">
                    <div class="edit">

                        <form method="post" action="/save" enctype="multipart/form-data">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="image">Book Image</label>
                                    <input type="hidden" name="id" value="<?= isset($pro['id']) ? $pro['id'] : '' ?>">
                                    <input type="file" class="form-control-file" id="image" name="image"
                                        accept="image/*" required>
                                </div>

                                <div class="form-group">
                                    <label for="name">Book Name</label>
                                    <input type="text" class="form-control" id="name" name="name" required
                                        value="<?= isset($pro['name']) ? $pro['name'] : '' ?>">
                                </div>

                                <div class="form-group">
                                    <label for="description">Book Description</label>
                                    <textarea class="form-control" id="description" name="description" rows="3"
                                        required><?= isset($pro['description']) ? $pro['description'] : '' ?></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="price">Book Price</label>
                                    <input type="number" class="form-control" id="price" name="price" required
                                        value="<?= isset($pro['price']) ? $pro['price'] : '' ?>">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <a href="/admin" class="btn btn-secondary">Clear</a>
                                <button type="submit" class="btn btn-success">Save</button>
                            </div>
                        </form>
                    </div>
                </div>

                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Book Image</th>
                            <th>Book Name</th>
                            <th>Book Description</th>
                            <th>Book Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (isset($booktable)):
                            foreach ($booktable as $book): ?>
                                <tr>
                                    <td><img src="/uploads/<?= $book['image']; ?>" alt="<?= $book['name']; ?>" width="100">
                                    </td>
                                    <td>
                                        <?= $book['name']; ?>
                                    </td>
                                    <td>
                                        <?= $book['description']; ?>
                                    </td>
                                    <td>
                                        <?= $book['price']; ?>
                                    </td>
                                    <td>
                                        <a href="/edit/<?= $book['id'] ?>" class="edit">Edit</a>
                                        <a href="/delete/<?= $book['id'] ?>" class="edit">Delete</a>
                                        <!-- You may want to add a similar line for the "Delete" link here -->
                                    </td>
                                </tr>
                            <?php endforeach; else: ?>
                            <tr>
                                <td colspan="4">No items found</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>

</body>

</html>