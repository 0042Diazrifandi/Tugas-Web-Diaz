<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/128/15466/15466052.png" type="image/x-icon">
    <style>
        body {
            background-color: #e0f7fa; /* Warna baby blue */
        }
        .card {
            background-color: #ffffff; /* Putih untuk kartu */
            border: 1px solid #b3e5fc; /* Baby blue border */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .btn-primary {
            background-color: #b3e5fc; /* Baby blue untuk tombol */
            border: none;
        }
        .btn-primary:hover {
            background-color: #81d4fa; /* Warna baby blue yang lebih gelap saat hover */
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2>Add New User</h2>
        <form action="index.php?action=store" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <button type="submit" class="btn btn-primary">Add User</button>
        </form>
    </div>
</body>
</html>
