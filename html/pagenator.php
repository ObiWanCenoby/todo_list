<nav>
  <ul class="pagination">
    <li>
      <a href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
<?php
if ($pages > 1) {
	for($i = 1; $i <= $pages; $i++) { ?>

		<li><a href="/index.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
<?php
	}
} ?>
    <li>
      <a href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>