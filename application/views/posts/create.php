<h1> <?=  $title ;?>  </h1>

<br>


<?php echo validation_errors(); ?>

<?php echo form_open('posts/create'); ?>
  <div class="form-group">
    <label >Enter Product Name</label>
    <input type="text" class="form-control"  name="title">
  </div>

  <div class="form-group">
    <label >Product Description</label>
    <textarea class="form-control"  name="body"  ></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>