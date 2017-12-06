<form action="/" method="get">
    <div class="input-group">
        <input type="text" name="s" id="search" class="form-control" placeholder="Search..." value="<?php the_search_query(); ?>">
        <button type="submit" class="input-group-addon">
            <i class="fa fa-search" aria-hidden="true"></i>
        </button>
    </div>
</form>