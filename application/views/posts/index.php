<h2> <?php echo $title ;?> </h2>

<br>

<?php foreach( $posts as $post ):  ?>
 <h3> <?php echo $post['title'] ?> </h3>
 <small class="post-date"> Since : <?php echo $post['created_at'] ?> </small>
<p> <?php echo $post['body'] ?> </p>
<br>

<p> <a class="btn btn-primary" href="<?php echo site_url('/posts/'.$post['slug']) ?>"> More </a> </p>


<?php endforeach ; ?>