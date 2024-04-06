<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Student</h1>
    <a href="{{route('student.create')}}">Create new student</a>
    <div>
        @if(session() -> has('success'))
            <div>
                {{session('success')}}
            </div>

        @endif
       
    </div>
    <div>
        <table border="1">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Student Id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Date of Birth</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                <tr>
                    <td>{{$student->id}}</td>
                    <td>{{$student->studentId}}</td>
                    <td>{{$student->firstName}}</td>
                    <td>{{$student->lastName}}</td>
                    <td>{{$student->dob}}</td>
                    <td>
                        <a href="{{route('student.edit',['student' => $student])}}">Edit</a>
                        <form method="post" action="{{route('student.destroy',['student' => $student])}}">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete" />

                        </form>
                    </td>
                   
                </tr>

                @endforeach
            </tbody>

        </table>
    </div>
</body>
</html>