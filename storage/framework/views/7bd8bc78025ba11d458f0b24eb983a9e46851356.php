<html>
    <body>
      
        <table   border='1'>
            <tr>
                <th colspan="6">REPORT CARD</th>            
            </tr>
            <tr>
                <td>Student ID</td>
                <td colspan="5"><?php echo e($data['studentid']); ?>  </td>            
            </tr>
            <tr>
                <td>Name</td>
                <td colspan="5"><?php echo e($data['studentname']); ?>  </td>            
            </tr>
            <tr>
                <td>Total Average</td>
                <td colspan="5"><?php echo e($data['totalaverage']); ?> </td>            
            </tr>

            <?php $__currentLoopData = $data['finalgradedata']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td bgcolor="#d8ea31">Course</td>
                <td bgcolor="#d8ea31"><?php echo e($value['coursename']); ?>  </td>
                <td bgcolor="#5cbfed">Teacher</td>
                <td bgcolor="#5cbfed"><?php echo e($value['teacher']); ?>  </td>        
                <td bgcolor="#70e576">Grade</td>
                <td bgcolor="#70e576"><?php echo e($value['grade']); ?>  </td>      
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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