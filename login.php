<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="assets/icon.png" />
    <title>Login</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <style>
        body {
            background-color: #e0f7fa;
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #00897b;
            color: #fff;
            padding: 10px;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .logo img {
            height: 50px;
            width: auto;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
            font-weight: bold;
        }

        main {
            padding: 20px;
            text-align: center;
        }

        .form-login {
            background-color: #fff;
            border-radius: 10px;
            padding: 30px; /* Menyesuaikan padding */
            max-width: 400px; /* Menyesuaikan lebar maksimum */
            margin: 0 auto;
        }

        .form-login h3 {
            margin-bottom: 20px;
        }

        input[type="text"],
        input[type="password"],
        button {
            width: calc(100% - 22px); /* Menyesuaikan lebar input dengan padding dan border */
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-family: 'Poppins', sans-serif;
        }

        button {
            background-color: #00897b;
            color: #fff;
            cursor: pointer;
        }

        a {
            color: #333;
            text-decoration: none;
            font-weight: bold;
        }

        footer {
            background-color: #00897b;
            color: #fff;
            padding: 10px;
            text-align: center;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <img src="assets/logo.png" alt="" />
        </div>
        <nav>
            <a href="index.php">Home</a>
            <a href="#">Categories</a>
            <a href="login.php">Daftar Reservasi Pariwisata Pantai Kuyon</a>
        </nav>
    </header>
    <main>
        <div class="center">
        <div class="form-login">
            <h3>Login</h3>
            <form action="login-proses.php" method="post">
                <input type="text" name="username" id="username" placeholder="Username" />
                <input type="password" name="password" id="password" placeholder="Password" />
                <!-- <button type="button" onclick="submitForm()">Login</button> -->
                <button type="submit" class="btn_login" name="login" id="login"> Login</button>
            </form>
            <a href="register.php">Register Disini</a>
        </div>
        </div>
    </main>
    <footer>
        <h4>&copy; Pariwisata Pantai Trenggalek</h4>
    </footer>

    <script>
        async function submitForm() {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;
            
            if (username.trim() === "" || password.trim() === "") {
                alert("Harap isi semua kolom!");
                return;
            }
           
            // Menggunakan PopUp Box untuk memberikan pesan kepada pengguna
            var confirmation = confirm("Apakah Anda yakin ingin melakukan login?");
            if (confirmation) {
                // Simulasi proses login dengan timeout 1 detik
                await new Promise(resolve => setTimeout(resolve, 1000));
                alert("Login berhasil!"); // Pesan login berhasil
                // Simpan data pengguna ke dalam localStorage
                localStorage.setItem("username", username);
                // Redirect ke halaman setelah login
                window.location.href = "dashboard.php";
            }
        }
    </script>
</body>
</html>
