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
            <?php $__currentLoopData = $mark; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mark): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>  
                   <td><?php echo e($mark->markid); ?></td>              
                   <td><?php echo e($mark->studentid); ?></td>  
                   <td><?php echo e($mark->testid); ?></td> 
                   <td><?php echo e($mark->name); ?></td>
                   <td><?php echo e($mark->course_id); ?></td>
                   <td><?php echo e($mark->coursename); ?></td>
                   <td><?php echo e($mark->teacher); ?></td>
                   <td><?php echo e($mark->weight); ?></td> 
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </body>
</html>