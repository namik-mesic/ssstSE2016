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
<<<<<<< HEAD
                    <label for="lat">
                        Place Latitude
                    </label>
                    <input type="number" step = "0.0000001" id="lat" placeholder="latitude" name="lat" class="form-control"><?php echo e($place->lat); ?>>
                </div>

                <div class="form-group">
                    <label for="longitude">
                        Place Longitude
                    </label>
                    <input type="number" step = "0.0000001" id="lng" placeholder="longitude" name="lng" class="form-control"><?php echo e($place->lng); ?>>
=======
                    <label for="name">
                        Place Coordinates
                    </label>
                    <input type = "text" name="coordinates" id="coordinates" class="form-control"><?php echo e($place->coordinates); ?>>
>>>>>>> d9ee37e9850b184bde413408a8d22c3204a53aff
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