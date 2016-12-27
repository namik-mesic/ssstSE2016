<?php $__env->startSection('content'); ?>

    <div class="container">
        <div class="well">

            <form action="<?php echo e(action('PlaceController@store')); ?>" method="POST">
                <?php echo csrf_field(); ?>


                <div class="form-group">
                    <label for="name">
                        Place Name
                    </label>
                    <input type="text" id="name" name="name" placeholder="Place Name" class="form-control">
                </div>

                <div class="form-group">
                    <label for="vicinity">
                        Place Address
                    </label>
                    <input type = "text" name="vicinity" placeholder="Address" id="vicinity" class="form-control">
                </div>

                <div class="form-group">
                    <label for="coordinates">
                        Place Coordinates
                    </label>
                    <!-- Might change to number input -->
                    <input type="text" id="coordinates" placeholder="{lat: , lng: }" name="coordinates" class="form-control">
                </div>
                <div class="form-group">
                    <label for="coordinates">
                        Place Type
                    </label>
                    <!-- Will change to limited selection of choices -->
                    <input type="text" id="type" placeholder="Type" name="type" class="form-control">
                </div>

                <button role="button" class="btn btn-primary">
                    Submit
                </button>

            </form>

        </div>
    </div>

<?php $__env->appendSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>