<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register PPDB</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            background-color: #b5ace9;
        }

        .container{
            width: 400px;
            background: rgb(184, 177, 245);
            margin: 50px auto;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.2);
        }

        h2{
            text-align: center;
            color: darkblue;
        }

        input, select, textarea{
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        button{
            width: 100%;
            padding: 12px;
            background-color: rgb(8, 8, 114);
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover{
            background-color: blue;
        }

        .container{
             width: 420px;
             padding: 35px;
             border-radius: 20px;

            /* WARNA PUTIH */
            background: white;

             /* BAYANGAN */
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);

             /* BLUR */
            backdrop-filter: blur(10px);
        }
    </style>
</head>

<body>

<div class="container">
    <h2>Register PPDB SMKN 4</h2>

    <form action="" method="post">

        <label>Nama Lengkap</label>
        <input type="text" name="nama" placeholder="Masukkan nama">

        <label>Email</label>
        <input type="email" name="email" placeholder="Masukkan email">

        <label>Password</label>
        <input type="password" name="password" placeholder="Masukkan password">


        <button type="submit">Daftar</button>

    </form>
</div>

</body>
</html>