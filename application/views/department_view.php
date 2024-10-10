<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Department</title>

    <!-- Memanggil Tailwind CSS -->
    <link href="<?= base_url('assets/css/style.css'); ?>" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-gray-800 to-gray-900 min-h-screen py-20">
    <div class="container mx-auto p-8">
        <h1 class="text-4xl font-bold text-orange-400 text-center mb-20">WEBSITE DATABASE SANDYTECH OFFICE</h1>
        <div class="flex justify-between mb-6">
            <a href="<?= base_url('employee') ?>" class="bg-transparent border-2 border-orange-500 text-orange-500 px-4 py-2 rounded-md hover:bg-orange-500 hover:text-white transition">
                Employee
            </a>
            <h2 class="text-3xl font-bold text-orange-400">Department List</h2>
            <a href="<?= base_url('department') ?>" class="bg-transparent border-2 border-orange-500 text-orange-500 px-4 py-2 rounded-md hover:bg-orange-500 hover:text-white transition">
                Department
            </a>
        </div>
        <div class="flex justify-between items-center mb-6">
            <a href="<?= base_url('department/create') ?>" class="bg-orange-500 text-white px-4 py-2 rounded-md shadow hover:bg-orange-600 transition">Add Department</a>
        </div>
        <div class="bg-gray-900 shadow-lg rounded-lg p-8">
            <table class="min-w-full table-auto bg-gray-800 text-orange-300 rounded-md">
                <thead>
                    <tr>
                        <th class="px-4 py-2 border-b text-center">Department ID</th>
                        <th class="px-4 py-2 border-b text-center">Department Name</th>
                        <th class="px-4 py-2 border-b text-center">Edit</th>
                        <th class="px-4 py-2 border-b text-center">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($departments as $department): ?>
                    <tr>
                        <td class="px-4 py-2 border-b text-center"><?= $department->department_id ?></td>
                        <td class="px-4 py-2 border-b text-center"><?= $department->department_name ?></td>
                        <td class="px-4 py-2 border-b text-center">
                            <a href="<?= base_url('department/edit/' . $department->department_id) ?>" class="bg-orange-500 text-white px-2 py-1 rounded-md hover:bg-orange-600">Edit</a>
                        </td>
                        <td class="px-4 py-2 border-b text-center">
                            <a href="<?= base_url('department/delete/' . $department->department_id) ?>" onclick="return confirm('Are you sure to delete this Department?');" class="bg-red-500 text-white px-2 py-1 rounded-md hover:bg-red-600">Delete</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>