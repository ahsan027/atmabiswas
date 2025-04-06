<?php
session_start();
include '../Database/db.php';

if (!isset($_SESSION['username'])) {
    header("Location: ../login/login.php");
    exit();
}


$db = new Db();

$conn = $db->connect();

try {

    $sql = "SELECT * FROM blogs";

    $stmt = $conn->prepare($sql);

    $stmt->execute();

    $blogs = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo $e;
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard-ATMABISWAS</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="">
    <link rel="icon" type="image/png" href="../images/logo/logo.png">
</head>

<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <?php include 'sidebar.php' ?>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden overflow-x-hidden">
            <!-- Top Navbar -->

            <?php include 'navbar.inc.php'; ?>

            <!-- Content Area -->
            <main class="flex-1 overflow-y-auto p-4 bg-gray-100">
                <div class="mb-6">
                    <h2 class="text-2xl font-semibold text-gray-800">
                        Dashboard Overview
                    </h2>
                    <p class="text-gray-600">
                        Welcome back, ATMABISWAS!
                    </p>
                </div>

                <!-- Stats Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
                    <!-- Revenue Card -->
                    <div class="bg-white rounded-lg shadow p-4">
                        <div class="flex items-center justify-between mb-2">
                            <div class="text-gray-500">Revenue</div>
                            <div class="bg-green-100 p-1 rounded">
                                <i class="fas fa-chart-line text-green-600"></i>
                            </div>
                        </div>
                        <div class="text-2xl font-bold">$24,780</div>
                        <div class="flex items-center text-sm">
                            <span class="text-green-600 flex items-center">
                                <i class="fas fa-arrow-up mr-1"></i> 12%
                            </span>
                            <span class="text-gray-500 ml-2">from last month</span>
                        </div>
                    </div>

                    <!-- Orders Card -->
                    <div class="bg-white rounded-lg shadow p-4">
                        <div class="flex items-center justify-between mb-2">
                            <div class="text-gray-500">Orders</div>
                            <div class="bg-blue-100 p-1 rounded">
                                <i class="fas fa-shopping-bag text-blue-600"></i>
                            </div>
                        </div>
                        <div class="text-2xl font-bold">1,482</div>
                        <div class="flex items-center text-sm">
                            <span class="text-green-600 flex items-center">
                                <i class="fas fa-arrow-up mr-1"></i> 8%
                            </span>
                            <span class="text-gray-500 ml-2">from last month</span>
                        </div>
                    </div>

                    <!-- Customers Card -->
                    <div class="bg-white rounded-lg shadow p-4">
                        <div class="flex items-center justify-between mb-2">
                            <div class="text-gray-500">Customers</div>
                            <div class="bg-purple-100 p-1 rounded">
                                <i class="fas fa-users text-purple-600"></i>
                            </div>
                        </div>
                        <div class="text-2xl font-bold">928</div>
                        <div class="flex items-center text-sm">
                            <span class="text-green-600 flex items-center">
                                <i class="fas fa-arrow-up mr-1"></i> 4%
                            </span>
                            <span class="text-gray-500 ml-2">new customers</span>
                        </div>
                    </div>

                    <!-- Conversion Card -->
                    <div class="bg-white rounded-lg shadow p-4">
                        <div class="flex items-center justify-between mb-2">
                            <div class="text-gray-500">Conversion</div>
                            <div class="bg-yellow-100 p-1 rounded">
                                <i class="fas fa-percentage text-yellow-600"></i>
                            </div>
                        </div>
                        <div class="text-2xl font-bold">24.8%</div>
                        <div class="flex items-center text-sm">
                            <span class="text-red-600 flex items-center">
                                <i class="fas fa-arrow-down mr-1"></i> 2%
                            </span>
                            <span class="text-gray-500 ml-2">from last week</span>
                        </div>
                    </div>
                </div>



                <!-- blogs Table -->
                <div class="bg-white rounded-lg shadow mb-6">
                    <div class="p-4 border-b border-gray-200 flex justify-between items-center">
                        <h3 class="font-semibold text-lg">Published Blogs Lists</h3>
                        <button class="px-4 py-2 bg-primary-500 text-white rounded-lg hover:bg-primary-600 text-sm">
                            View All
                        </button>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead>
                                <tr class="bg-gray-50">
                                    <th
                                        class="py-3 px-4 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">
                                        Blog ID
                                    </th>
                                    <th
                                        class="py-3 px-4 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">
                                        Blog Title
                                    </th>
                                    <th
                                        class="py-3 px-4 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">
                                        Blog Author
                                    </th>
                                    <th
                                        class="py-3 px-4 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">
                                        Blog Content
                                    </th>
                                    <th
                                        class="py-3 px-4 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">
                                        Published Date
                                    </th>
                                    <th
                                        class="py-3 px-4 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                function concatStrings($blog)
                                {
                                    $maximumLength = 80;

                                    $display = (strlen($blog) > $maximumLength) ? substr($blog, 0, $maximumLength) . "...." : $blog;

                                    return $display;
                                }

                                foreach ($blogs as $blog) {

                                    echo '<tr class="border-b">
                                    <td class="py-3 px-4 text-gray-700">' . $blog['blog_id'] . '</td>
                                    <td class="py-3 px-4 text-gray-700">' . concatStrings($blog['blog_title']) . '</td>
                                    <td class="py-3 px-4">
                                        <span class="px-2 py-2 text-xs text-white bg-blue-500 rounded">' . $blog['blog_author'] . '</span>
                                    </td>
                                    <td class="py-3 px-4 text-gray-700">' . concatStrings($blog['blog_content']) . '</td>
                                    <td class="py-3 px-4 text-gray-700">' . $blog['upload_date'] . '</td>
                                    <td class="py-3 px-4">
                                      <a onclick="return confirm(\'Are you sure you want to delete this blog?\');" href="deleteblog.php?blog_id=' . $blog['blog_id'] . '" class="px-2 py-2 text-xs text-white bg-red-500 rounded">
                                      Delete
                                    </td>
                                </tr>';
                                }
                                ?>

                            </tbody>
                        </table>
                    </div>
                </div>



                <!-- images Table -->
                <div class="bg-white rounded-lg shadow mb-6">
                    <div class="p-4 border-b border-gray-200 flex justify-between items-center">
                        <h3 class="font-semibold text-lg">Recent Orders</h3>
                        <button class="px-4 py-2 bg-primary-500 text-white rounded-lg hover:bg-primary-600 text-sm">
                            View All
                        </button>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead>
                                <tr class="bg-gray-50">
                                    <th
                                        class="py-3 px-4 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">
                                        Order ID
                                    </th>
                                    <th
                                        class="py-3 px-4 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">
                                        Customer
                                    </th>
                                    <th
                                        class="py-3 px-4 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">
                                        Status
                                    </th>
                                    <th
                                        class="py-3 px-4 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">
                                        Date
                                    </th>
                                    <th
                                        class="py-3 px-4 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">
                                        Total
                                    </th>
                                    <th
                                        class="py-3 px-4 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b">
                                    <td class="py-3 px-4 text-gray-700">#1001</td>
                                    <td class="py-3 px-4 text-gray-700">Alice Johnson</td>
                                    <td class="py-3 px-4">
                                        <span class="px-2 py-1 text-xs text-white bg-green-500 rounded">Completed</span>
                                    </td>
                                    <td class="py-3 px-4 text-gray-700">Mar 12, 2025</td>
                                    <td class="py-3 px-4 text-gray-700">$320.00</td>
                                    <td class="py-3 px-4">
                                        <button class="text-blue-500 hover:underline">
                                            View
                                        </button>
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <td class="py-3 px-4 text-gray-700">#1002</td>
                                    <td class="py-3 px-4 text-gray-700">Michael Smith</td>
                                    <td class="py-3 px-4">
                                        <span class="px-2 py-1 text-xs text-white bg-yellow-500 rounded">Pending</span>
                                    </td>
                                    <td class="py-3 px-4 text-gray-700">Mar 11, 2025</td>
                                    <td class="py-3 px-4 text-gray-700">$150.00</td>
                                    <td class="py-3 px-4">
                                        <button class="text-blue-500 hover:underline">
                                            View
                                        </button>
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <td class="py-3 px-4 text-gray-700">#1003</td>
                                    <td class="py-3 px-4 text-gray-700">Sophia Brown</td>
                                    <td class="py-3 px-4">
                                        <span class="px-2 py-1 text-xs text-white bg-red-500 rounded">Cancelled</span>
                                    </td>
                                    <td class="py-3 px-4 text-gray-700">Mar 10, 2025</td>
                                    <td class="py-3 px-4 text-gray-700">$75.00</td>
                                    <td class="py-3 px-4">
                                        <button class="text-blue-500 hover:underline">
                                            View
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>


                <!-- images Table -->
                <div class="bg-white rounded-lg shadow mb-6">
                    <div class="p-4 border-b border-gray-200 flex justify-between items-center">
                        <h3 class="font-semibold text-lg">Recent Orders</h3>
                        <button class="px-4 py-2 bg-primary-500 text-white rounded-lg hover:bg-primary-600 text-sm">
                            View All
                        </button>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead>
                                <tr class="bg-gray-50">
                                    <th
                                        class="py-3 px-4 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">
                                        Order ID
                                    </th>
                                    <th
                                        class="py-3 px-4 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">
                                        Customer
                                    </th>
                                    <th
                                        class="py-3 px-4 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">
                                        Status
                                    </th>
                                    <th
                                        class="py-3 px-4 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">
                                        Date
                                    </th>
                                    <th
                                        class="py-3 px-4 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">
                                        Total
                                    </th>
                                    <th
                                        class="py-3 px-4 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b">
                                    <td class="py-3 px-4 text-gray-700">#1001</td>
                                    <td class="py-3 px-4 text-gray-700">Alice Johnson</td>
                                    <td class="py-3 px-4">
                                        <span class="px-2 py-1 text-xs text-white bg-green-500 rounded">Completed</span>
                                    </td>
                                    <td class="py-3 px-4 text-gray-700">Mar 12, 2025</td>
                                    <td class="py-3 px-4 text-gray-700">$320.00</td>
                                    <td class="py-3 px-4">
                                        <button class="text-blue-500 hover:underline">
                                            View
                                        </button>
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <td class="py-3 px-4 text-gray-700">#1002</td>
                                    <td class="py-3 px-4 text-gray-700">Michael Smith</td>
                                    <td class="py-3 px-4">
                                        <span class="px-2 py-1 text-xs text-white bg-yellow-500 rounded">Pending</span>
                                    </td>
                                    <td class="py-3 px-4 text-gray-700">Mar 11, 2025</td>
                                    <td class="py-3 px-4 text-gray-700">$150.00</td>
                                    <td class="py-3 px-4">
                                        <button class="text-blue-500 hover:underline">
                                            View
                                        </button>
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <td class="py-3 px-4 text-gray-700">#1003</td>
                                    <td class="py-3 px-4 text-gray-700">Sophia Brown</td>
                                    <td class="py-3 px-4">
                                        <span class="px-2 py-1 text-xs text-white bg-red-500 rounded">Cancelled</span>
                                    </td>
                                    <td class="py-3 px-4 text-gray-700">Mar 10, 2025</td>
                                    <td class="py-3 px-4 text-gray-700">$75.00</td>
                                    <td class="py-3 px-4">
                                        <button class="text-blue-500 hover:underline">
                                            View
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </main>
        </div>
    </div>
    <script src="js/dashboard.js"></script>
</body>

</html>