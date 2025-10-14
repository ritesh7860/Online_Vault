<?php
include_once 'NavBar.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Files | FreeSpace</title>

    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <style>
        body {
            background: url('sky.jpg') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
            color: #fff;
            padding-top: 80px;
            margin-top: 2%;
        }

        .page-header {
            text-align: center;
            margin-bottom: 40px;
            animation: fadeIn 1.2s ease-in-out;
        }

        .file-gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
            gap: 25px;
            padding: 0 5%;
        }

        .file-card {
            position: relative;
            background: rgba(255, 255, 255, 0.12);
            border-radius: 15px;
            overflow: hidden;
            text-align: center;
            backdrop-filter: blur(10px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            animation: fadeUp 0.8s ease-in-out;
        }

        .file-card:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
        }

        .file-card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-radius: 10px;
        }

        .file-card p {
            margin-top: 10px;
            font-weight: 500;
            font-size: 15px;
            color: #e8e8e8;
            word-break: break-word;
            padding-bottom: 15px;
        }

        /* Overlay for hover buttons */
        .file-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.6);
            opacity: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            transition: opacity 0.3s ease;
        }

        .file-card:hover .file-overlay {
            opacity: 1;
        }

        .file-btn {
            background-color: #007bff;
            border: none;
            color: #fff;
            padding: 8px 14px;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.3s;
            font-size: 14px;
        }

        .file-btn:hover {
            background-color: #0056b3;
        }

        .file-btn.delete {
            background-color: #dc3545;
        }

        .file-btn.delete:hover {
            background-color: #b02a37;
        }

        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="page-header">
            <h2>Welcome to Your File Space</h2>
            <p>Hover over your files to view, download, or delete them.</p>
        </div>

        <div class="file-gallery">
            <?php
            $link = mysqli_connect("localhost", "root", "", "freespace");
            if (!$link) {
                die("Database connection failed: " . mysqli_connect_error());
            }

            $email = $_SESSION['email'] ?? '';
            if ($email) {
                $qry = "SELECT * FROM updfiles WHERE email='$email'";
                $result = mysqli_query($link, $qry);

                if (mysqli_num_rows($result) > 0) {
                    while ($file = mysqli_fetch_assoc($result)) {
                        $filepath = $file['filepath'];
                        $filename = basename($filepath);

                        echo "
                        <div class='file-card'>
                            <img src='$filepath' alt='File Image'>
                            <div class='file-overlay'>
                                <button class='file-btn' onclick=\"viewFile('$filepath')\">View</button>
                                <a href='$filepath' download class='file-btn'>Download</a>
                                <form method='post' style='display:inline;'>
                                    <input type='hidden' name='delete_file' value='$filepath'>
                                    <button type='submit' class='file-btn delete'>Delete</button>
                                </form>
                            </div>
                            <p>$filename</p>
                        </div>
                        ";
                    }
                } else {
                    echo "<p style='text-align:center; color:#ccc;'>No files uploaded yet.</p>";
                }
            } else {
                echo "<p style='text-align:center; color:#ccc;'>Please log in to view your files.</p>";
            }

            // Delete file functionality
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_file'])) {
                $deleteFile = $_POST['delete_file'];

                // Remove from DB
                $delQry = "DELETE FROM updfiles WHERE email='$email' AND filepath='$deleteFile'";
                mysqli_query($link, $delQry);

                // Delete from server
                if (file_exists($deleteFile)) {
                    unlink($deleteFile);
                }

                echo "<script>alert('File deleted successfully!'); window.location.href='ufiles.php';</script>";
            }
            ?>
        </div>
    </div>


    <!-- View File Modal -->
    <div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content bg-dark text-white">
                <div class="modal-header border-0">
                    <h5 class="modal-title" id="viewModalLabel">File Preview</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img id="previewImage" src="" class="img-fluid rounded" alt="Preview">
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function viewFile(path) {
            document.getElementById('previewImage').src = path;
            const modal = new bootstrap.Modal(document.getElementById('viewModal'));
            modal.show();
        }
    </script>

</body>
</html>
