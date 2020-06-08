<?php include  'inc/header.php'; ?>
<div class="jumbotron">
    <h1 class="display-3">Find A Job</h1>
    <form>
        <select name="category" class="form-control">
            <option value="0">Choose Category</option>
            <?php foreach ($categories as $category): ?>
                  <option value="<?php echo $category->id; ?>">
                      <?php echo $category->name ?>
                      </option>

            <?php endforeach; ?>
        </select>
    </form>
</div>

<?php foreach ($jobs as $job): ?>
<div class="row marketing">
    <div class="col-md-10">
        <h4><?php echo $job->job_title; ?></h4>
        <p><?php echo $job->description; ?></p>
    </div>
    <div class="col-md-2">
        <a class="btn btn-info" href="#">View</a>
    </div>
</div>
    <?php endforeach; ?>




<?php include  'inc/footer.php'; ?>

