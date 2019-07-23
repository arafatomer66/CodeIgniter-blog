<!-- main product listing  -->
<h2> <?php echo $title ;?> </h2>

<br>

<small class="post-date"> Since : <?php echo $post['created_at'] ?> </small>

<br>

<div class="post-body">
    <?php echo $post['body'] ;?>

</div>

<br>

<?php echo form_open('/post/delete/' .$post['id']) ;?>
    <input type="submit" value="Delete" class="btn btn-danger" >
</form>