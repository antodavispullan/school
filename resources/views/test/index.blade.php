<html>
    <body>
        <strong>Test</strong>
        <table class="table" border='1'>
            <thead class="thead-dark">
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Course Name</th>
                <th scope="col">Weight</th>                
                </tr>
            </thead>
            <tbody>
                @foreach($test as $test)
                <tr>  
                   <td>{{$test->testid}}</td>              
                   <td>{{$test->name}}</td>  
                   <td>{{$test->weight}}</td>  
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