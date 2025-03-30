<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</head>

<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <?php include 'sidebar.php' ?>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Top Navbar -->

            <?php include 'navbar.inc.php';?>

            <!-- Content Area -->
            <main class="flex-1 overflow-y-auto p-4 bg-gray-100">
                <h1 class="text-2xl">Create Jobs Here</h1>
            </main>
        </div>
    </div>
    <script src="dashboard.js"></script>
</body>

</html>