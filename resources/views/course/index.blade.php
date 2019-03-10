<html>
    <body>
    <strong>Course</>
        <table class="table" border='1'>
            <thead class="thead-dark">
                <tr>                 
                <th scope="col">Course Name</th>
                <th scope="col">Teacher</th>                
                </tr>
            </thead>
            <tbody>
                @foreach($course as $course)
                <tr>                    
                    <td>{{$course->name}}</td>
                    <td>{{$course->teacher}}</td>               
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="flex-center position-ref full-height">
            <div class="content">
               <p>
                <button><a href="course">Course</a></button> 
                <button><a href="student">Student</a></button>  
                <button><a href="test">Test</a></button>  
                <button><a href="mark">Mark</a></button>                 
                <button><a href="report">Report </a></button> 
               </p>
            </div>
        </div>
    </body>
</html>