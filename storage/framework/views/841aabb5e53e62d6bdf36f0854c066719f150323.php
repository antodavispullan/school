<html>
    <body>
        <strong>Mark </strong>
        <table class="table" border='1'>
            <thead class="thead-dark">
                <tr>
                <th scope="col">ID</th>                
                <th scope="col">Student Name</th> 
                <th scope="col">Course ID</th> 
                <th scope="col">Course Name</th>  
                <th scope="col">Weight</th>                         
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $mark; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mark): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>  
                   <td><?php echo e($mark->markid); ?></td>
                   <td><?php echo e($mark->name); ?></td>
                   <td><?php echo e($mark->course_id); ?></td>
                    <td><?php echo e($mark->coursename); ?></td>
                   <td><?php echo e($mark->weight); ?></td> 
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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