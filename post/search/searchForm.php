<form id="searchForm">
	<!-- title inupt -->
	<div class="form-row">
		<label for="postTitle">Title</label>
		<input id="postTitle" class="form-control" type="text" name="postTitle" placeholder="Title" value="<?= isset($_GET['postTitle']) ? $_GET['postTitle'] : '' ?>" />
	</div>
	<br>

	<!-- rating input -->
	<div class="form-row">
		<label for="rating">Rating</label>
		<div id="rating" class="input-group">
			<input id="ratingL" class="form-control" type="number" name="ratingL" placeholder="Low" min="0" max="10" />
			<div class="input-group-append">
				<span class="input-group-text border-right-0"> to </span>
			</div>
			<input id="ratingH" class="form-control" type="number" name="ratingH" placeholder="High" min="1" max="10" />
		</div>
	</div>
	<br>

	<!-- user select -->
	<div class="form-row">
		<label for="user">Posted By</label>
		<select class="form-control" name="user" id="users">
			<option value="0">Anyone</option>
			<optgroup label="Users" id="userGroup"></optgroup>
		</select>
	</div>
	<br>

	<!-- sort select -->
	<div class="form-row">
		<label for="sort">Sort by</label>
			<select id="sort" class="form-control" name="sort">
				<option value="date">Date</option>
				<option value="rating">Rating</option>
				<option value="title">Title</option>
			</select>
	</div>
	<br>

	<!-- order descending -->
	<div class="form-row">
		<div class="form-check">
			<input id="order" class="form-check-input" type="checkbox" name="order" />
			<label for="order" class="form-check-label">Decending</label>
		</div>
	</div>
	<br>

	<!-- submit input -->
	<div class="form-row">
		<div class="btn-group">
			<input id="searchS" class="btn btn-outline-primary" type="submit" name="search" value="Search" />
			<input id="reset" class="btn btn-outline-danger" type="reset" name="reset" value="Reset" />
			<!-- sets the form back to values, override in js -->
		</div>
	</div>

</form>
