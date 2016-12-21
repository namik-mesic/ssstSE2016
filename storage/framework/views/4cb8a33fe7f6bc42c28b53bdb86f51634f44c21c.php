<?php $__env->startSection('content'); ?>

    <div class="container">
        <div class="well">

            <form action="<?php echo e(action('placeController@store')); ?>" method="POST">
                <?php echo csrf_field(); ?>


                <div class="form-group">
                    <label for="assignee_id">
                        Assignee
                    </label>
                    <input type="text" id="assignee_id" name="assignee_id" placeholder="ID" class="form-control">
                </div>

                <div class="form-group">
                    <label for="content">
                        Content
                    </label>
                    <textarea name="content" placeholder="Content" id="content" cols="30" rows="10" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <label for="color">
                        Color
                    </label>

                    <input type="text" id="color" name="color" class="form-control">
                </div>

                <button role="button" class="btn btn-primary">
                    Submit
                </button>

            </form>

        </div>
    </div>

<?php $__env->appendSection(); ?>
<?php echo $__env->make('layouts.admintool', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>