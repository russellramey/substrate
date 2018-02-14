<?php
// Template Name: Page - Documentation
?>
<?php
// Get the header
get_header(); ?>

<section id="content" role="main">
    <?php
    // Start WP Loop
    if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <?php edit_post_link(); ?>
                <h1 class="entry-title">
                    <?php the_title(); ?>
                </h1>
            </header>

            <section class="entry-body">
                <?php
                // If has thumbnail
                if ( has_post_thumbnail() ) { ?>
                    <div class="entry-thumb">
                        <?php
                        // Show thumbnail
                        the_post_thumbnail(); ?>
                    </div>
                <?php } ?>

                <div class="entry-content">
                    <?php
                    // Show content
                    the_content(); ?>
                </div>

<div class="bt-section">
    <h3>Typography</h3><br />
    <div class="inner">
        <h4>Headlines</h4>
        <h1>Headline H1</h1>
        <h2>Headline H2</h2>
        <h3>Headline H3</h3>
        <h4>Headline H4</h4>
        <h5>Headline H5</h5>
        <h6>Headline H6</h6>

        <br />
        <br />
        <h4>Body text</h4>
        <p>Paragraph text...lorem ipsum dolor sit amet, <b>bolded text</b> consectetur adipiscing elit. <em>italic text</em> Aenean quis augue ultricies, tempus lorem sed, volutpat dolor. Praesent tristique arcu a ex efficitur, eget rhoncus eros tempus. Sed ultricies mauris in mauris aliquam, sit amet pulvinar dui aliquam. Integer id nibh in dolor venenatis gravida ac id ante. Phasellus eleifend efficitur ante id commodo. Vestibulum ut porta velit, in sodales diam. Nulla maximus porta tellus nec tincidunt. Duis diam mi, posuere nec nibh ut, mattis malesuada magna. Curabitur mollis sagittis dolor, sed molestie erat finibus ut. Sed at vulputate neque, sed imperdiet lorem.</p>
        <p>Lorem ipsum dolor sit amet, <b>bolded text</b> consectetur adipiscing elit. <em>italic text</em> Aenean quis augue ultricies, tempus lorem sed, volutpat dolor. Praesent tristique arcu a ex efficitur, eget rhoncus eros tempus. Sed ultricies mauris in mauris aliquam, sit amet pulvinar dui aliquam. Integer id nibh in dolor venenatis gravida ac id ante. Phasellus eleifend efficitur ante id commodo. Vestibulum ut porta velit, in sodales diam. Nulla maximus porta tellus nec tincidunt. Duis diam mi, posuere nec nibh ut, mattis malesuada magna. Curabitur mollis sagittis dolor, sed molestie erat finibus ut. Sed at vulputate neque, sed imperdiet lorem.</p>
        <p>
            <a href="#">Hyperlink text</a><br />
            <a href="#">New tab hyperlink &raquo;</a>
        </p>

    <br />
    <br />
    <h4>Blockquote</h4>
    <blockquote><p>The XYZ Doohickey Company was founded in 1971, and has been providing quality doohickeys to the public ever since. Located in Gotham City, XYZ employs over 2,000 people and does all kinds of awesome things for the Gotham community.</p></blockquote>
    <br />
    <br />
    <h4>Lists</h4>
    <p>Ordered List</p>
    <ol>
        <li>Ordered list item</li>
        <li>Ordered list item</li>
        <li>Ordered list item</li>
        <li>Ordered list item</li>
    </ol>

    <p>Unordered List</p>
    <ul>
        <li>Unordered list item</li>
        <li>Unordered list item</li>
        <li>Unordered list item</li>
        <li>Unordered list item</li>
    </ul>
    </div>
    <br />
    <br />
    <div class="row">
        <div class="col-sm-12">
            <h4>Breadcrumbs</h4>
            <p class="bt-breadcrumbs"><a href="/">home</a> » <a href="/insights">Subpage</a> » <a href="#">Current Page</a><span class="crumb-grad"></span></p>
        </div>
    </div>
</div>

<div class="bt-section">
<h3>Input elements</h3>
<form class="bt-form--default">
    <p>
        <label for="name">Full name</label>
        <input type="text" name="name" value="" placeholder="Firstname Lastname" />
    </p>
    <p>
        <label for="email">Email address</label>
        <input type="email" name="email" placeholder="email@address.com" />    </p>
    <p>
        <label for="comments">Comments</label>
        <textarea name="comments" placeholder="What do you have to say..."></textarea>
    </p>
    <p>
        <label for="checkbox"><input type="checkbox" id="checkbox" name="radio" /> Checkbox</label>
    </p>
    <p>
        <label for="radio"><input type="radio" id="radio" name="radio" /> Radio</label>
    </p>
    <p class="bt-select">
        <label for="sample">What should you choose?</label>
        <select name="sample">
            <option selected="selected" disabled="disabled">Select one</option>
            <option>This is the first option</option>
            <option>This is the second option and far longer</option>
            <option>This is the third option</option>
        </select>
    </p>
</form>
<br />
<h4>Inputs - In Field Labels</h4>
<form class="bt-form">
    <p>
        <label class="bt-label" for="name">Full name</label>
        <input type="text" name="name" value="" placeholder="Joe Smith" />
    </p>
    <p>
        <label class="bt-label" for="email">Email address</label>
        <input type="email" name="email" placeholder="email@domain.com" />
    </p>
    <p>
        <label class="bt-label" for="comments">Comments</label>
        <textarea name="comments" placeholder="Let us know..."></textarea>
    </p>
    <p>
        <label class="bt-checkbox"><input type="checkbox" name="checkbox" value="checkbox">Checkbox</label>
    </p>
    <p>
        <label class="bt-radio"><input type="radio" name="radio" value="radio">Radio</label>
    </p>
    <p class="bt-select">
        <label class="bt-label" for="sample">What should you choose?</label>
        <select name="sample">
            <option selected="selected" disabled="disabled"></option>
            <option>This is the first option</option>
            <option>This is the second option and far longer</option>
            <option>This is the third option</option>
        </select>
    </p>
</form>

<br />
<br />
<h4>Buttons</h4>
<p><input type="submit" value="Primary"/></p>
<p><a href="#" class="button button-sml"/>Primary - small</a></p>
<p><a class="button button-secondary">Secondary</a></p>
<p><a class="button button-secondary button-sml">Secondary - small</a></p>
<p><button disabled>Disabled</button></p>
</div>

<div class="bt-section">
    <div class="inner">
    <h3>Messages</h3>
    <h4>Success</h4>
    <div class="bt-message bt-message--success">
        <i class="fa fa-check bt-message--icon"></i>
        <p><span>Successful message!</span> You have submitted an entry.</p>
    </div>

    <h4>Warning</h4>
    <div class="bt-message bt-message--warning">
        <i class="fa fa-exclamation-triangle bt-message--icon"></i>
        <p><span>Warning message!</span> Are you sure you want to continue?</p>
    </div>

    <h4>Error</h4>
    <div class="bt-message bt-message--error">
        <i class="fa fa-times bt-message--icon"></i>
        <p><span>Error message!</span> You have not saved your session.</p>
    </div>
    </div>
</div>

<div class="bt-section">
<h3>Universal Content Containers</h3>
    <div class="inner">
        <div class="bt-expand">
            <h4>Expand &amp; Collapse</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut mauris faucibus, condimentum est vel, pellentesque urna. Morbi suscipit consectetur sem. Pellentesque nisi risus, varius ut ipsum nec, interdum hendrerit quam.</p>
            <div class="bt-expand--content">
                <p>Curabitur placerat velit a purus dictum tincidunt. Pellentesque ornare sollicitudin tristique. Fusce eu feugiat arcu. Pellentesque nisi risus, varius ut ipsum nec, interdum hendrerit quam. Aliquam aliquet ante eu porttitor eleifend. Proin efficitur libero nec ligula lobortis tempor elementum in dui. Donec et erat feugiat sapien dapibus facilisis eget non arcu. Aliquam nec pretium sem, nec molestie purus.</p>
            </div>
            <a href="#" class="bt-expand--action button button-sml button-light">View more +</a>
        </div>
        <Br />
<h4>Expand & Collapse List</h4>
<ul class="bt-expand--list">
    <li class="bt-expand--list-item">
        <div class="bt-expand--list-action">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut mauris faucibue</p>
        </div>
        <div class="bt-expand--list-content" style="display: none;">
            <p>Curabitur placerat velit a purus dictum tincidunt. Pellentesque ornare sollicitudin tristique. Fusce eu feugiat arcu. Pellentesque nisi risus, varius ut ipsum nec, interdum hendrerit quam. Aliquam aliquet ante eu porttitor eleifend. Proin efficitur libero nec ligula lobortis tempor elementum in dui. Donec et erat feugiat sapien dapibus facilisis eget non arcu. Aliquam nec pretium sem, nec molestie purus.</p>
        </div>
    </li>
    <li class="bt-expand--list-item">
        <div class="bt-expand--list-action">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut mauris faucibue</p>
        </div>
        <div class="bt-expand--list-content" style="display: none;">
            <p>Curabitur placerat velit a purus dictum tincidunt. Pellentesque ornare sollicitudin tristique. Fusce eu feugiat arcu. Pellentesque nisi risus, varius ut ipsum nec, interdum hendrerit quam. Aliquam aliquet ante eu porttitor eleifend. Proin efficitur libero nec ligula lobortis tempor elementum in dui. Donec et erat feugiat sapien dapibus facilisis eget non arcu. Aliquam nec pretium sem, nec molestie purus.</p>
            <p>Curabitur placerat velit a purus dictum tincidunt. Pellentesque ornare sollicitudin tristique. Fusce eu feugiat arcu. Pellentesque nisi risus, varius ut ipsum nec, interdum hendrerit quam. Aliquam aliquet ante eu porttitor eleifend. Proin efficitur libero nec ligula lobortis tempor elementum in dui. Donec et erat feugiat sapien dapibus facilisis eget non arcu. Aliquam nec pretium sem, nec molestie purus.</p>
        </div>
    </li>
    <li class="bt-expand--list-item">
        <div class="bt-expand--list-action">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut mauris faucibue</p>
        </div>
        <div class="bt-expand--list-content">
            <p>Curabitur placerat velit a purus dictum tincidunt. Pellentesque ornare sollicitudin tristique. Fusce eu feugiat arcu. Pellentesque nisi risus, varius ut ipsum nec, interdum hendrerit quam. Aliquam aliquet ante eu porttitor eleifend. Proin efficitur libero nec ligula lobortis tempor elementum in dui. Donec et erat feugiat sapien dapibus facilisis eget non arcu. Aliquam nec pretium sem, nec molestie purus.</p>
        </div>
    </li>
</ul>
<br />
        <br />
        <div class="bt-accordion">
            <h4>Accordion</h4>
            <div class="bt-accordion--item">
                <div class="bt-accordion--action">
                    <p><b>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut mauris faucibue</b></p>
                </div>
                <div class="bt-accordion--content">
                    <p>Curabitur placerat velit a purus dictum tincidunt. Pellentesque ornare sollicitudin tristique. Fusce eu feugiat arcu. Pellentesque nisi risus, varius ut ipsum nec, interdum hendrerit quam. Aliquam aliquet ante eu porttitor eleifend. Proin efficitur libero nec ligula lobortis tempor elementum in dui. Donec et erat feugiat sapien dapibus facilisis eget non arcu. Aliquam nec pretium sem, nec molestie purus.</p>
                </div>
            </div>
            <div class="bt-accordion--item">
                <div class="bt-accordion--action">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut mauris faucibue</p>
                </div>
                <div class="bt-accordion--content">
                    <p>Curabitur placerat velit a purus dictum tincidunt. Pellentesque ornare sollicitudin tristique. Fusce eu feugiat arcu. Pellentesque nisi risus, varius ut ipsum nec, interdum hendrerit quam. Aliquam aliquet ante eu porttitor eleifend. Proin efficitur libero nec ligula lobortis tempor elementum in dui. Donec et erat feugiat sapien dapibus facilisis eget non arcu. Aliquam nec pretium sem, nec molestie purus.</p>
                    <p>Curabitur placerat velit a purus dictum tincidunt. Pellentesque ornare sollicitudin tristique. Fusce eu feugiat arcu. Pellentesque nisi risus, varius ut ipsum nec, interdum hendrerit quam. Aliquam aliquet ante eu porttitor eleifend. Proin efficitur libero nec ligula lobortis tempor elementum in dui. Donec et erat feugiat sapien dapibus facilisis eget non arcu. Aliquam nec pretium sem, nec molestie purus.</p>
                </div>
            </div>
            <div class="bt-accordion--item">
                <div class="bt-accordion--action">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut mauris faucibue</p>
                </div>
                <div class="bt-accordion--content">
                    <p>Curabitur placerat velit a purus dictum tincidunt. Pellentesque ornare sollicitudin tristique. Fusce eu feugiat arcu. Pellentesque nisi risus, varius ut ipsum nec, interdum hendrerit quam. Aliquam aliquet ante eu porttitor eleifend. Proin efficitur libero nec ligula lobortis tempor elementum in dui. Donec et erat feugiat sapien dapibus facilisis eget non arcu. Aliquam nec pretium sem, nec molestie purus.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<br />
<br />

<div class="bt-section">
<h4>Tabs</h4>
    <div class="row">
        <div class="col-sm-12">
            <div class="bt-tab">
                <ul class="bt-tab--nav clearfix">
                    <li class="active"><a href="#">Tab One</a></li>
                    <li><a href="#">Tab Two</a></li>
                    <li><a href="#">Tab Three</a></li>
                </ul>
                <ul class="bt-tab--panels">
                    <li class="bt-panel active">
                        <div class="bt-panel--content">
                            <h4>Tab 1</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mollis felis lectus, eu molestie metus dictum in. Morbi a nulla id orci vehicula viverra. Aenean arcu nulla, convallis et quam vitae, vestibulum tempor lorem.</p>
                        </div>
                    </li>
                    <li class="bt-panel">
                        <div class="bt-panel--content">
                            <h4>Tab 2</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mollis felis lectus, eu molestie metus dictum in. Morbi a nulla id orci vehicula viverra. Aenean arcu nulla, convallis et quam vitae, vestibulum tempor lorem.</p>
                        </div>
                    </li>
                    <li class="bt-panel">
                        <div class="bt-panel--content">
                            <h4>Tab 3</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mollis felis lectus, eu molestie metus dictum in. Morbi a nulla id orci vehicula viverra. Aenean arcu nulla, convallis et quam vitae, vestibulum tempor lorem.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <br />
    <br />


<h4>Tables</h4>
<div class="bt-table--wrapper">
<table class="bt-table">
    <th>
        Day
    </th>
    <th>
        Time
    </th>
    <tr>
        <td width="25%">
            Tuesday
        </td>
        <td>
            12:30 p.m. – 2:30 p.m.
        </td>
    </tr>
    <tr>
        <td>
            Wednesday
        </td>
        <td>
            5:30 p.m. – 7:00p.m
        </td>
    </tr>
    <tr>
        <td>
            Thursday
        </td>
        <td>
            4:00 p.m.  – 6:00 p.m
        </td>
    </tr>
</table>
</div>

<br />
<br />
<div id="grid" class="bt-module">


<h4>Grid</h4>
<p>This theme includes a powerful mobile-first <a href="https://getbootstrap.com/css/#grid" target="_blank">Bootstrap</a> grid system for building layouts of all shapes and sizes. It’s based on a 12 column layout and has multiple tiers, one for each media query range.</p>

</div>
</section>
</article>

    <?php
    // End WP Loop
    endwhile; endif; ?>
</section>

<?php
// Get the footer
get_footer(); ?>
