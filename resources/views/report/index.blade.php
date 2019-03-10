<html>
    <body>
        <strong>Report </strong>
        <table class="table" border='1'>
            <thead class="thead-dark">
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Student ID</th>
                <th scope="col">Test ID</th>
                <th scope="col">Student Name</th> 
                <th scope="col">Course ID</th> 
                <th scope="col">Course Name</th>  
                <th scope="col">Course Teacher</th> 
                <th scope="col">Weight</th>                         
                </tr>
            </thead>
            <tbody>              
            @foreach($mark as $mark)
                <tr>  
                   <td>{{$mark->markid}}</td>              
                   <td>{{$mark->studentid}}</td>  
                   <td>{{$mark->testid}}</td> 
                   <td>{{$mark->name}}</td>
                   <td>{{$mark->course_id}}</td>
                   <td>{{$mark->coursename}}</td>
                   <td>{{$mark->teacher}}</td>
                   <td>{{$mark->weight}}</td> 
                </tr>
                @endforeach
            </tbody>
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