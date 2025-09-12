<!DOCTYPE html>
<html>
<head>
    <title>Students</title>
</head>
<body>
    <!-- Exercise 6: Model & CRUD -->
    <h1>Student List</h1>
    <hr>
            @foreach ($students as $student)

                    <p><b>Name:</b> {{ $student->name }}</p> 
                    <p><b>Age:</b> {{ $student->age }} years old</p>
                    <p><b>Email:</b> {{ $student->email }} </p>
                    <hr>
            
            @endforeach
        

</body>
</html>
