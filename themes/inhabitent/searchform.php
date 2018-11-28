<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	
		<i class="fa fa-search toggle-search-icon"></i>

		<button class="search-submit screen-reader-text" >
			<!-- <span class="icon-search" aria-hidden="true"> -->
				<i class="fa fa-search" ></i>
			</span>
			<span class="screen-reader-text"><?php echo esc_html( 'Search' ); ?></span>
		</button>	
		<label>
			<input type="search" class="search-field" placeholder="TYPE & HIT ENTER" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
		</label>
		
	
</form>
