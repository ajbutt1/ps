<?php $__env->startSection('table'); ?>
                                            <?php $__currentLoopData = $shares; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $share): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                             <tr>
                                            <td class="min-mobile"><?php echo e($share->shareId); ?></td>
                                            <td class="min-tablet-l"><?php echo e($share->LDCP); ?></td>
                                            <td class="min-tablet-p"><?php echo e($share->OPEN); ?></td>
                                            <td class="min-tablet-l"><?php echo e($share->HIGH); ?></td>
                                            <td class="min-tablet-l"><?php echo e($share->LOW); ?></td>
                                            <td class="min-mobile"><?php echo e($share->CURRENT); ?></td>
                                            <td class="min-mobile-p"><?php echo e($share->CHANGE); ?></td>
                                            <td class="min-tablet-p"><?php echo e($share->VOLUME); ?></t>
                                            <td class="never">URL</td>
                                        </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('marketSummary', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>