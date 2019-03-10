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
                <?php $__currentLoopData = $course; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>                    
                    <td><?php echo e($course->name); ?></td>
                    <td><?php echo e($course->teacher); ?></td>               
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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