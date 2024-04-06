<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Create New Student</h1>
    <form method="post" action="{{route('student.store')}}">
    @csrf
    @method('post')

        <div>
            <label for="studentId"> Student Id</label>
            <input type="number" name="studentId" id="studentId" placeholder="Student Id">
        </div>
        <div>
            <label for="fName"> First Name</label>
            <input type="text" name="firstName" id="fName" placeholder="First Name">
        </div>
        <div>
            <label for="lName"> Last Name</label>
            <input type="text" name="lastName" id="lName" placeholder="Last Name">
        </div>
        <div>
            <label for="dob"> Date of Birth</label>
            <input type="date" name="dob" id="dob" placeholder="Date of Birth">
        </div>
        <div>
            <input type="submit" value="Save New Student"/>
        </div>
    </form>
</body>
</html>