<!DOCTYPE html>
<html>
<head>
    <title>Students</title>
     @vite('resources/css/app.css')
</head>
<body>
    
    <!-- Exercise 6: Model & CRUD -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-xl font-bold">Student List</h1>
    <hr>
            @foreach ($students as $student)

                    <p><b>Name:</b> {{ $student->name }}</p> 
                    <p><b>Age:</b> {{ $student->age }} years old</p>
                    <p><b>Email:</b> {{ $student->email }} </p>
                    <hr>
            
            @endforeach
            <br>

            <a href="/dashboard" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Back to Dashboard</a>

                </div>
            </div>
        </div>
    </div>
    
</body>
</html>
