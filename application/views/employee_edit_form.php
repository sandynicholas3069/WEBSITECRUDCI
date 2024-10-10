<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Employee</title>

    <!-- Memanggil Tailwind CSS -->
    <link href="<?= base_url('assets/css/style.css'); ?>" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-gray-800 to-gray-900 flex items-center justify-center min-h-screen py-20">
    <div class="bg-gray-900 shadow-lg rounded-lg p-8 w-full max-w-3xl mx-auto">
        <h2 class="text-3xl font-bold text-center text-orange-400 mb-6">Edit Employee</h2>
        <form action="<?= base_url('employee/update/' . $employee->id) ?>" method="post">
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-orange-300">Name</label>
                <input type="text" id="name" name="name" value="<?= $employee->name ?>" class="mt-1 block w-full p-2 border border-gray-700 bg-gray-700 text-orange-300 rounded-md focus:ring focus:ring-orange-500" required>
            </div>
            <div class="mb-4">
                <label for="gender" class="block text-sm font-medium text-orange-300">Gender</label>
                <select id="gender" name="gender" class="mt-1 block w-full p-2 border border-gray-700 bg-gray-700 text-orange-300 rounded-md focus:ring focus:ring-orange-500" required>
                    <option value="Male" <?= $employee->gender == 'Male' ? 'selected' : '' ?>>Male</option>
                    <option value="Female" <?= $employee->gender == 'Female' ? 'selected' : '' ?>>Female</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="birth" class="block text-sm font-medium text-orange-300">Date of Birth</label>
                <input type="date" id="birth" name="birth" value="<?= $employee->birth ?>" class="mt-1 block w-full p-2 border border-gray-700 bg-gray-700 text-orange-300 rounded-md focus:ring focus:ring-orange-500" required>
            </div>
            <div class="mb-4">
                <label for="location" class="block text-sm font-medium text-orange-300">Location</label>
                <input type="text" id="location" name="location" value="<?= $employee->location ?>" class="mt-1 block w-full p-2 border border-gray-700 bg-gray-700 text-orange-300 rounded-md focus:ring focus:ring-orange-500">
            </div>
            <div class="mb-4">
                <label for="phone_number" class="block text-sm font-medium text-orange-300">Phone Number</label>
                <input type="text" id="phone_number" name="phone_number" value="<?= $employee->phone_number ?>" class="mt-1 block w-full p-2 border border-gray-700 bg-gray-700 text-orange-300 rounded-md focus:ring focus:ring-orange-500">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-orange-300">Email</label>
                <input type="email" id="email" name="email" value="<?= $employee->email ?>" class="mt-1 block w-full p-2 border border-gray-700 bg-gray-700 text-orange-300 rounded-md focus:ring focus:ring-orange-500">
            </div>
            <div class="mb-4">
                <label for="position" class="block text-sm font-medium text-orange-300">Position</label>
                <input type="text" id="position" name="position" value="<?= $employee->position ?>" class="mt-1 block w-full p-2 border border-gray-700 bg-gray-700 text-orange-300 rounded-md focus:ring focus:ring-orange-500">
            </div>
            <div class="mb-4">
                <label for="salary" class="block text-sm font-medium text-orange-300">Salary</label>
                <input type="number" id="salary" name="salary" value="<?= $employee->salary ?>" class="mt-1 block w-full p-2 border border-gray-700 bg-gray-700 text-orange-300 rounded-md focus:ring focus:ring-orange-500">
            </div>
            <div class="mb-4">
                <label for="department_id" class="block text-sm font-medium text-orange-300">Department</label>
                <select id="department_id" name="department_id" class="mt-1 block w-full p-2 border border-gray-700 bg-gray-700 text-orange-300 rounded-md focus:ring focus:ring-orange-500">
                    <?php foreach ($departments as $department): ?>
                        <option value="<?= $department->department_id ?>" <?= $employee->department_id == $department->department_id ? 'selected' : '' ?>><?= $department->department_name ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="mt-6">
                <button type="submit" class="w-full px-4 py-2 bg-orange-600 text-white font-semibold rounded-md shadow-lg hover:bg-orange-700 focus:ring focus:ring-orange-500">Update Employee</button>
            </div>
        </form>
    </div>
</body>
</html>