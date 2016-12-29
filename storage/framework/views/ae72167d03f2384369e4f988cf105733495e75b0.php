<?php $__env->startSection('content'); ?>

    <div class="container">
        <a href="<?php echo e(action('PlaceController@create')); ?>" class="btn btn-primary" style="margin-bottom: 10px">
            Create Place
        </a>

        <table class="table table-bordered table-responsive">
            <thead>
            <tr>
                <th>
                    ID
                </th>
                <th>
                    Place Name
                </th>
                <th>
                    Place Address
                </th>
                <th>
                    Place Latitude
                </th>
                <th>
                    Place Longitude
                </th>
                <th>
                    Place Type
                </th>
                <th>
                    Options
                </th>
            </tr>
            </thead>

            <tbody>
            <?php $__currentLoopData = $places; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $place): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <tr>
                    <td>
                        <?php echo e($place->id); ?>

                    </td>
                    <td>
                        <?php echo e($place->name); ?>

                    </td>
                    <td>
                        <?php echo e($place->vicinity ? $place->vicinity : 'Not set'); ?>

                    </td>
                    <td>
                        <?php echo e($place->lat); ?>

                    </td>
                    <td>
                        <?php echo e($place->lng); ?>

                    </td>
                    <td>
                        <?php echo e($place->type ? $place->type : 'Not set'); ?>

                    </td>
                    <td>
                        <a href="<?php echo e(action('PlaceController@edit', $place->id)); ?>" class="btn btn-success">
                            Edit
                        </a>

                        <form method="POST" action="<?php echo e(action('PlaceController@destroy', $place->id)); ?>" style="margin-top: 10px">
                            <?php echo csrf_field(); ?>

                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-danger">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
            </tbody>
        </table>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>