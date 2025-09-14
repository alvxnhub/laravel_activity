<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
    @vite('resources/css/app.css')
</head>
<body>

<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-lg font-bold">Add Student</h1>
    <hr>
    <br>

    <!-- Exercise 7: Form Handling -->  
    <form action="/students" method="POST">
    @csrf

    <div>
        <label for="name">Name</label>
        <input type="text" name="name" placeholder = "Enter name">
        @error('name')
            <div style="color:red;">Min of 3 characters</div>
        @enderror
    </div>

    <br>
    
        <div>
            <label for="age">Age</label>
            <input type="number" name="age" placeholder = "Enter age">
            @error('age')
                <div style="color:red;">Must be 18 and above</div>
            @enderror
        </div>
        <br>

        <div>
            <label for="email">Email</label>
            <input type="email" name="email" placeholder = "Enter email">
            @error('email')
                <div style="color:red;">Email is required, unique and must be a valid email</div>
            @enderror
        </div>
        <br>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Save</button>
        <br><br>
        <a href="/dashboard" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 ">Back to Dashboard</a>

    </form>

                </div>
            </div>
        </div>
    </div>

</body>
</html>