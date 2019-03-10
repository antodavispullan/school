<html>
    <body>
    <strong>Student</>
        <table class="table" border='1'>
            <thead class="thead-dark">
                <tr>               
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Action</th>                
                </tr>
            </thead>
            <tbody>
                @foreach($student as $student)
                <tr>                    
                    <td>{{$student->id}}</td>
                    <td><a href='/report/{{$student->id}}/{{$student->name}}'>{{$student->name}}</a></td> 
                    <td><a href='/report/{{$student->id}}/{{$student->name}}'>View Report</a></td>
                </tr>                                    
                @endforeach
            </tbody>0
        </table>
        <p>
                <button><a href="course">Course</a></button> 
                <button><a href="student">Student</a></button>  
                <button><a href="test">Test</a></button>  
                <button><a href="mark">Mark</a></button>                 
                <button><a href="report">Report </a></button> 
        </p>
    </body>
</html>