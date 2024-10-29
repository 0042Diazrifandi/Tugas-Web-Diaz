<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MVC - M DIAZ RIFANDI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/128/15466/15466052.png" type="image/x-icon">
    <style>
        /* Warna latar belakang lembut */
        body {
            background-color: #e6f7ff; /* Baby blue lembut untuk latar belakang */
        }

        h1 {
            color: #005f99; /* Biru yang lebih kuat untuk judul */
        }

        /* Warna tombol Bootstrap yang dikustomisasi */
        .btn-primary {
            background-color: #0099cc;
            border-color: #0099cc;
        }

        .btn-primary:hover,
        .btn-primary:focus {
            background-color: #007399;
            border-color: #007399;
        }

        .btn-info {
            background-color: #66c2ff;
            border-color: #66c2ff;
            color: #ffffff;
        }

        .btn-info:hover,
        .btn-info:focus {
            background-color: #4da6ff;
            border-color: #4da6ff;
        }

        .btn-warning {
            background-color: #33b5e5;
            border-color: #33b5e5;
            color: #ffffff;
        }

        .btn-warning:hover,
        .btn-warning:focus {
            background-color: #1a91d6;
            border-color: #1a91d6;
        }

        .btn-danger {
            background-color: #ff9999;
            border-color: #ff9999;
        }

        .btn-danger:hover,
        .btn-danger:focus {
            background-color: #ff6666;
            border-color: #ff6666;
        }

        /* Warna tabel lembut */
        table {
            background-color: #f0fbff; /* Latar tabel yang lebih terang */
            border-color: #cce7f3;
        }

        th {
            background-color: #cce7f3; /* Warna biru lembut untuk header tabel */
        }

        tr:nth-child(even) {
            background-color: #e6f7ff; /* Sedikit lebih gelap untuk baris genap */
        }

        tr:hover {
            background-color: #b3e0ff; /* Efek hover pada baris tabel */
        }
    </style>
</head>

<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12 d-flex justify-content-between align-items-center">
                <h1>User Details</h1>
                <!-- Tombol Add -->
                <a href="index.php?action=add" class="btn btn-primary">Add User</a>
            </div>
            <table class="table mt-3">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($user as $data): ?>
                        <tr>
                            <th scope="row"><?php echo $no++; ?></th>
                            <td><?php echo htmlspecialchars($data['name']); ?></td>
                            <td><?php echo htmlspecialchars($data['email']); ?></td>
                            <td>
                                <!-- Tombol dengan warna Bootstrap -->
                                <a href="index.php?action=view&id=<?php echo $data['id']; ?>" class="btn btn-info btn-sm">View</a>
                                <a href="index.php?action=edit&id=<?php echo $data['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="index.php?action=delete&id=<?php echo $data['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?');">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
