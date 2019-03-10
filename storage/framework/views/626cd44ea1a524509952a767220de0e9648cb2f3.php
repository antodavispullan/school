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
                <?php $__currentLoopData = $student; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>                    
                    <td><?php echo e($student->id); ?></td>
                    <td><a href='/report/<?php echo e($student->id); ?>/<?php echo e($student->name); ?>'><?php echo e($student->name); ?></a></td> 
                    <td><a href='/report/<?php echo e($student->id); ?>/<?php echo e($student->name); ?>'>View Report</a></td>
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