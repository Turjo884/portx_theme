<div class="sidebar__widget mb-40">
	<div class="sidebar__widget-content">
		<div class="sidebar__search">
			<form action="/" method="get">
				<div class="sidebar__search-input-2">
					<input type="text" name="s" value="<?php the_search_query(); ?>" placeholder="<?php echo esc_attr__("Search here","portx"); ?>">
						<button type="submit"><i class="far fa-search"></i></button>
				</div>
			</form>
		</div>
	</div>
</div>