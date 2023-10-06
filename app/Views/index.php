<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Book Store Santos</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="templatemo_style.css" rel="stylesheet" type="text/css" />


</head>

<body>

    <div id="templatemo_container">
        <div id="templatemo_menu">
            <ul>
                <li><a href="index.html" class="current">Home</a></li>
                <li><a href="subpage.html">Search</a></li>
                <li><a href="subpage.html">Books</a></li>
                <li><a href="subpage.html">New Releases</a></li>
                <li><a href="#">Company</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="/logout">Logout</a></li>
            </ul>
        </div>

        <div id="templatemo_header">
            <div id="templatemo_special_offers">
                <p>
                    <span>25%</span> discounts for purchase over $80
                </p>
                <a href="subpage.html" style="margin-left: 50px;">Read more...</a>
            </div>

            <div id="templatemo_new_books">
                <ul>
                    <li>Suspen disse</li>
                    <li>Maece nas metus</li>
                    <li>In sed risus ac feli</li>
                </ul>
                <a href="subpage.html" style="margin-left: 50px;">Read more...</a>
            </div>
        </div>

        <div id="templatemo_content">

            <div id="templatemo_content_left">
                <div class="templatemo_content_left_section">
                    <h1>Categories</h1>
                    <ul>
                        <li><a href="subpage.html">Fantasy Novels</a></li>
                        <li><a href="#">Mystery Thrillers</a></li>
                        <li><a href="#">Science Fiction</a></li>
                        <li><a href="#">Romantic Fiction</a></li>
                        <li><a href="#">Historical Fiction</a></li>
                        <li><a href="#">Biographies</a></li>
                        <li><a href="#">Non-Fiction Essays</a></li>
                        <li><a href="#">Self-Help Books</a></li>
                        <li><a href="#">Cookbooks</a></li>
                    </ul>
                </div>
                <div class="templatemo_content_left_section">
                    <h1>Bestselling Books</h1>
                    <ul>
                        <li><a href="#">The Great Gatsby by F. Scott Fitzgerald</a></li>
                        <li><a href="#">To Kill a Mockingbird by Harper Lee</a></li>
                        <li><a href="#">Harry Potter and the Sorcerer's Stone by J.K. Rowling</a></li>
                        <li><a href="#">The Da Vinci Code by Dan Brown</a></li>
                        <li><a href="#">The Girl on the Train by Paula Hawkins</a></li>
                        <li><a href="#">Dune by Frank Herbert</a></li>
                        <li><a href="#">The Silent Patient by Alex Michaelides</a></li>
                        <li><a href="#">Pride and Prejudice by Jane Austen</a></li>
                        <li><a href="#">The Hobbit by J.R.R. Tolkien</a></li>
                        <li><a href="#">1984 by George Orwell</a></li>
                    </ul>
                </div>

                <div class="templatemo_content_left_section">
                    <a href="http://validator.w3.org/check?uri=referer"><img style="border:0;width:88px;height:31px"
                            src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Transitional" width="88"
                            height="31" vspace="8" border="0" /></a>
                    <a href="http://jigsaw.w3.org/css-validator/check/referer"><img
                            style="border:0;width:88px;height:31px"
                            src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="Valid CSS!" vspace="8"
                            border="0" /></a>
                </div>
            </div>

            <div id="templatemo_content_right">
                <?php $counter = 0; ?>
                <?php foreach ($booktable as $item): ?>
                    <?php if ($counter >= 6)
                        break; ?>
                    <div class="templatemo_product_box">
                        <h1>
                            <?= $item['name']; ?>
                        </h1>
                        <div class="img-box">
                            <a href="<?= base_url('productDetails/' . $item['id']) ?>">
                                <img src="/uploads/<?= $item['image'] ?>" alt="product image"
                                    style="width: 100px; height: 150px;">
                            </a>
                        </div>
                        <div class="product_info">
                            <p>
                                <?= $item['description']; ?>
                            </p>
                            <h3>$
                                <?= $item['price']; ?>
                            </h3>
                            <div class="buy_now_button"><a href="subpage.html">Buy Now</a></div>
                            <div class="detail_button"><a href="subpage.html">Detail</a></div>
                        </div>
                    </div>
                    <?php $counter++; ?>
                <?php endforeach; ?>
            </div>





            <div id="templatemo_footer">
                <a href="subpage.html">Home</a> | <a href="subpage.html">Search</a> | <a href="subpage.html">Books</a> |
                <a href="#">New Releases</a> | <a href="#">FAQs</a> | <a href="#">Contact Us</a><br />
                Copyright © 2024 <a href="#"><strong>Santos BookStore</strong></a>
                >
            </div>



            <script>
                document.addEventListener('DOMContentLoaded', function () {

                    var logoutButton = document.getElementById('logout-button');


                    logoutButton.addEventListener('click', function () {

                        window.location.href = 'http://localhost:8080';
                    });
                });
            </script>

</body>

</html>