<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Employee</title>

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
            <h2 class="text-3xl font-bold text-orange-400">Employee List</h2>
            <a href="<?= base_url('department') ?>" class="bg-transparent border-2 border-orange-500 text-orange-500 px-4 py-2 rounded-md hover:bg-orange-500 hover:text-white transition">
                Department
            </a>
        </div>
        <div class="flex justify-between items-center mb-6">
            <a href="<?= base_url('employee/create') ?>" class="bg-orange-500 text-white px-4 py-2 rounded-md shadow hover:bg-orange-600 transition">Add Employee</a>
        </div>
        <div class="bg-gray-900 shadow-lg rounded-lg p-8 overflow-x-auto">
            <table class="min-w-full max-w-full table-auto bg-gray-800 text-orange-300 rounded-md">
                <thead>
                    <tr>
                        <th class="px-4 py-2 border-b">ID</th>
                        <th class="px-4 py-2 border-b">Name</th>
                        <th class="px-4 py-2 border-b">Gender</th>
                        <th class="px-4 py-2 border-b">Birth</th>
                        <th class="px-4 py-2 border-b">Location</th>
                        <th class="px-4 py-2 border-b">Phone Number</th>
                        <th class="px-4 py-2 border-b">Email</th>
                        <th class="px-4 py-2 border-b">Position</th>
                        <th class="px-4 py-2 border-b">Salary</th>
                        <th class="px-4 py-2 border-b">Department</th>
                        <th class="px-4 py-2 border-b">Edit</th>
                        <th class="px-4 py-2 border-b">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($employees as $employee): ?>
                    <tr>
                        <td class="px-4 py-2 border-b"><?= $employee->id ?></td>
                        <td class="px-4 py-2 border-b"><?= $employee->name ?></td>
                        <td class="px-4 py-2 border-b"><?= $employee->gender ?></td>
                        <td class="px-4 py-2 border-b"><?= $employee->birth ?></td>
                        <td class="px-4 py-2 border-b"><?= $employee->location ?></td>
                        <td class="px-4 py-2 border-b"><?= $employee->phone_number ?></td>
                        <td class="px-4 py-2 border-b"><?= $employee->email ?></td>
                        <td class="px-4 py-2 border-b"><?= $employee->position ?></td>
                        <td class="px-4 py-2 border-b"><?= $employee->salary ?></td>
                        <td class="px-4 py-2 border-b"><?= $employee->department_name ?></td>
                        <td class="px-4 py-2 border-b text-center">
                            <a href="<?= base_url('employee/edit/' . $employee->id) ?>" class="bg-orange-500 text-white px-2 py-1 rounded-md hover:bg-orange-600">Edit</a>
                        </td>
                        <td class="px-4 py-2 border-b text-center">
                            <a href="<?= base_url('employee/delete/' . $employee->id) ?>" onclick="return confirm('Are you sure?');" class="bg-red-500 text-white px-2 py-1 rounded-md hover:bg-red-600">Delete</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>