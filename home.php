<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Store Dadakan</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
    body {
        margin: 0;
        font-family: 'Roboto', sans-serif;
        color: #000;
        background-color: #f2f2f2;
    }

    .container {
        width: 80%;
        margin: 0 auto;
    }

    header {
        background: #333;
        color: #fff;
        padding: 20px 0;
    }

    .header-content {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .logo h1 {
        margin: 0;
        font-size: 24px;
    }

    .header-content {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .menu ul {
        list-style: none;
        display: flex;
        justify-content: space-between;
        /* Memberikan ruang di antara Home dan Pembelian */
    }

    .menu ul li {
        margin-right: 100px;
    }

    .menu ul li a {
        color: #fff;
        text-decoration: none;
        transition: color 0.3s ease-in-out;
    }

    .menu ul li a:hover {
        color: #ccc;
    }

    .user-actions {
        display: flex;
        align-items: center;
    }

    .btn-login,
    .btn-register {
        background-color: #007bff;
        color: #fff;
        padding: 8px 16px;
        border-radius: 3px;
        text-decoration: none;
        transition: background-color 0.3s ease-in-out;
        margin-right: 20px;
    }

    .btn-register {
        margin-right: 0;
    }

    .btn-login:hover,
    .btn-register:hover {
        background-color: #0056b3;
    }


    .welcome {
        background-image: url('https://blog.hoster.co.id/wp-content/uploads/2023/02/hoster-unlimited-ssd-hosting-terbaik-indonesia-3.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        text-align: center;
        color: #fff;
        padding: 200px;
    }

    .welcome-content {
        max-width: 600px;
        margin: 0 auto;
    }

    .welcome h2 {
        font-size: 48px;
        margin-bottom: 20px;
    }

    .welcome p {
        font-size: 18px;
        margin-bottom: 30px;
    }

    .btn {
        display: inline-block;
        padding: 8px 16px;
        background-color: #007bff;
        color: #fff;
        text-decoration: none;
        border-radius: 3px;
        transition: background-color 0.3s ease-in-out;
    }

    .btn:hover {
        background-color: #0056b3;
    }

    .products {
        display: flex;
        justify-content: center;
        margin-top: 50px;
    }

    .product-card {
        width: 300px;
        border: 1px solid #eee;
        margin: 0 15px;
        overflow: hidden;
        background: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 15px;
        margin-bottom: 20px;
        margin-top: 20px;
    }

    .product-card img {
        width: 100%;
        height: auto;
    }

    .product-card h2 {
        font-size: 24px;
        margin: 10px 0;
        text-align: center;
    }

    .description {
        color: #666;
        margin-bottom: 15px;
        text-align: center;
    }

    footer {
        background: #333;
        color: #fff;
        text-align: center;
        padding: 15px 0;
        margin-top: 100px;
    }
    </style>
</head>

<body>
    <header>
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <h1>Store Dadakan</h1>
                </div>
                <div class="user-actions">
                    <div class="menu">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">List Pembelian</a></li>
                        </ul>
                    </div>
                    <div class="user-auth">
                        <a href="login.php" class="btn-login">Login</a>
                        <a href="register.php" class="btn-register">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>
        <section class="welcome">
            <div class="container welcome-content">
                <h2 style="color: #000;">Selamat Datang di Website Store Dadakan</h2>
                <p style="color: #000;">Temukan berbagai produk menarik dan berkualitas di toko online kami.</p>
            </div>
        </section>

        <div class="container">
            <section class="products">
                <div class="product-card">
                    <img src="https://www.asus.com/media/Odin/Websites/global/ProductLine/20200824120814.jpg"
                        alt="Product Image">
                    <h2 style="text-align: center">Laptop ROG</h2>
                    <p class="description" style="text-align: center">Laptop Mahal dan bagus</p>
                </div>

                <div class=" product-card">
                    <img src="https://images.tokopedia.net/img/cache/500-square/VqbcmM/2022/2/20/a9b399df-9f0a-484c-8b53-adea25ddd513.jpg"
                        alt="Phone Image">
                    <h2 style="text-align: center">Handphone ROG</h2>
                    <p class="description" style="text-align: center">Handphone Keren</p>
                </div>

                <div class="product-card">
                    <img src="https://down-id.img.susercontent.com/file/5c5c7c1dc11c78d433a3f30742aef016"
                        alt="Tablet Image">
                    <h2 style="text-align: center">Tablet</h2>
                    <p class="description" style="text-align: center">Tablet Mewah</p>
                </div>

                <div class="product-card">
                    <img src="https://buku.laditrikarya.com/wp-content/uploads/2020/05/feed-web-Sajak-Rindu-.jpg"
                        alt="Tablet Image">
                    <h2 style="text-align: center">Buku Puisi</h2>
                    <p class="description" style="text-align: center">Sajak Rindu untuk Biru</p>
                </div>
            </section>
        </div>
    </main>


    <footer>
        <div class="container">
            <p>&copy; 2023 Store Dadakan. All Rights Zainul dong.</p>
        </div>
    </footer>
</body>

</html>