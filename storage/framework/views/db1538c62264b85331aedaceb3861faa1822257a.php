<!-- Original concept: Namik Mesic-->
<!-- Tweaked by Adem Hadrovic -->


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
                    <input type = "text" name="name" id="name" class="form-control" value = "<?php echo e($place->name); ?>">
                </div>

                <div class="form-group">
                    <label for="vicinity">
                        Place Address
                    </label>
                    <input type = "text" name="vicinity" maxlength="100" id="vicinity" class="form-control" value = "<?php echo e($place->vicinity); ?>">
                </div>

                <div class="form-group">
                    <label for="lat">
                        Place Latitude
                    </label>
                    <input type="number" step = "0.0000001" id="lat" placeholder="latitude" name="lat" class="form-control" value = "<?php echo e($place->lat); ?>">
                </div>

                <div class="form-group">
                    <label for="longitude">
                        Place Longitude
                    </label>
                    <input type="number" step = "0.0000001" id="lng" placeholder="longitude" name="lng" class="form-control" value = "<?php echo e($place->lng); ?>">
                </div>

                <div class="form-group">
                    <label for="type">
                        Place Type
                    </label>

                    <select id = "type" name = "type" class="form-control" placeholder="<?php echo e($place->type); ?>">
                        <option value="food">food</option>
                        <option value="drink">drink</option>
                        <option value="entertainment">entertainment</option>
                        <option value="hotel">hotel</option>
                        <option value="bank">bank</option>
                        <option value="parking">parking</option>
                        <option value="shopping">shopping</option>
                        <option value="worship">worship</option>
                    </select>
                </div>

                <button role="button" class="btn btn-primary">
                    Submit
                </button>

            </form>

        </div>
    </div>

<?php $__env->appendSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>