<?php $__env->startSection('content'); ?>

    <div class="container">
        <div class="well">

            <form action="<?php echo e(action('PlaceController@update', $place->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>

                <input type="hidden" value="PUT" name="_method">

                <div class="form-group">
                    <label for="name">
                        Place Name
                    </label>
                    <input type = "text" name="name" id="name" class="form-control"><?php echo e($place->name); ?>>
                </div>

                <div class="form-group">
                    <label for="vicinity">
                        Place Address
                    </label>
                    <input type = "text" name="vicinity" id="vicinity" class="form-control"><?php echo e($place->vicinity); ?>>
                </div>

                <div class="form-group">
                    <label for="name">
                        Place Coordinates
                    </label>
                    <input type = "text" name="coordinates" id="coordinates" class="form-control"><?php echo e($place->coordinates); ?>>
                </div>

                <div class="form-group">
                    <label for="type">
                        Place Type
                    </label>
                    <input type="text" id="type" name="type" class="form-control" value="<?php echo e($place->type); ?>">
                </div>

                <button role="button" class="btn btn-primary">
                    Submit
                </button>

            </form>

        </div>
    </div>

<?php $__env->appendSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>