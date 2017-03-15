<?php
// Template Name: Example Markup
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

<div class="dm-section">
    <h3>Typography</h3>
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
</div>


<div class="dm-section">
<h3>Navigation elements</h3>
<div class="row">
    <div class="col-sm-3">
        <h4>Panel navigation</h4>
        <ul class="dm-nav--panel">
            <li><a href="#">Primary nav item</a></li>
            <li>
                <a href="#">Primary nav item</a>
                <ul class="dm-nav--sub">
                    <li><a href="#">Secondary nav item</a></li>
                    <li>
                        <a href="#">Secondary nav item</a>
                        <ul class="dm-nav--tert">
                            <li><a href="#">Tertiary nav item</a></li>
                            <li><a href="#">Tertiary nav item</a></li>
                            <li><a href="#">Tertiary nav item</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Secondary nav item</a></li>
                </ul>
            </li>
            <li><a href="#">Primary nav item</a></li>
            <li><a href="#">Primary nav item</a></li>
            <li><a href="#">Primary nav item</a></li>
        </ul>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <h4>Breadcrumbs</h4>
        <p class="dm-breadcrumbs"><a href="/">home</a> » <a href="/insights">insights</a> » <a href="#">current page here</a><span class="crumb-grad"></span></p>
    </div>
</div>
</div>



<div class="dm-section">
<h3>Form elements</h3>
<form class="dm-form--default">
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
    <p class="custom-select">
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
<br />
<h4>Buttons</h4>
<p><input type="submit" value="Primary"/></p>
<p><a class="button button-secondary">Secondary</a></p>
<p><button disabled>Disabled</button></p>
</div>


<div class="dm-section">
    <h3>Messages</h3>
    <h4>Success</h4>
    <div class="dm-message dm-message--success">
        <i class="fa fa-check dm-message--icon" aria-hidden="true"></i>
        <p><span>Successful message!</span> You have submitted an entry.</p>
    </div>

    <h4>Warning</h4>
    <div class="dm-message dm-message--warning">
        <i class="fa fa-exclamation-triangle dm-message--icon" aria-hidden="true"></i>
        <p><span>Warning message!</span> Are you sure you want to continue?</p>
    </div>

    <h4>Error</h4>
    <div class="dm-message dm-message--error">
        <i class="fa fa-times dm-message--icon" aria-hidden="true"></i>
        <p><span>Error message!</span> You have not saved your session.</p>
    </div>
</div>


<div class="dm-section">
<h3>Content Containers</h3>
    <div class="inner">
        <div class="dm-expand">
            <h4>Expand &amp; Collapse</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut mauris faucibus, condimentum est vel, pellentesque urna. Morbi suscipit consectetur sem. Pellentesque nisi risus, varius ut ipsum nec, interdum hendrerit quam.</p>
            <div class="dm-expand--content">
                <p>Curabitur placerat velit a purus dictum tincidunt. Pellentesque ornare sollicitudin tristique. Fusce eu feugiat arcu. Pellentesque nisi risus, varius ut ipsum nec, interdum hendrerit quam. Aliquam aliquet ante eu porttitor eleifend. Proin efficitur libero nec ligula lobortis tempor elementum in dui. Donec et erat feugiat sapien dapibus facilisis eget non arcu. Aliquam nec pretium sem, nec molestie purus.</p>
            </div>
            <p><a href="#" class="dm-expand--action button button-sml button-light">View more +</a></p>
        </div>
        <div class="dm-expand">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut mauris faucibus, condimentum est vel, pellentesque urna. Morbi suscipit consectetur sem. Pellentesque nisi risus, varius ut ipsum nec, interdum hendrerit quam.</p>
            <div class="dm-expand--content">
                <p>Curabitur placerat velit a purus dictum tincidunt. Pellentesque ornare sollicitudin tristique. Fusce eu feugiat arcu. Pellentesque nisi risus, varius ut ipsum nec, interdum hendrerit quam. Aliquam aliquet ante eu porttitor eleifend. Proin efficitur libero nec ligula lobortis tempor elementum in dui. Donec et erat feugiat sapien dapibus facilisis eget non arcu. Aliquam nec pretium sem, nec molestie purus.</p>
            </div>
            <p><a href="#" class="dm-expand--action">View more +</a></p>
        </div>
<h4>Expand & Collapse List</h4>
<ul class="dm-expand--list">
    <li class="dm-expand--list-item">
        <div class="dm-expand--list-action">
            <p><b>Sabre AirVision 5-year Vision</b></p>
        </div>
        <div class="dm-expand--list-content" style="display: none;">
            <p>Welcome the customer community, share how AirVision delivered in 2016, and where we’re heading in 2017. Participate in engaging conversation about new opportunities, product areas, and our five year vision.</p>
        </div>
    </li>
    <li class="dm-expand--list-item">
        <div class="dm-expand--list-action">
            <p><b>Integrated Schedule Management</b></p>
        </div>
        <div class="dm-expand--list-content" style="display: none;">
            <p>In this joint session with operations leaders, explore how technology can help remove silos in schedule management between different planning and operational departments. Join us for a discussion on requirements for this alignment and the opportunities it creates for higher profitability and more efficient operations.</p>
        </div>
    </li>
    <li class="dm-expand--list-item">
        <div class="dm-expand--list-action">
            <p><b>Pricing &amp; Revenue Management Evolution: Powering A Smarter Airline</b></p>
        </div>
        <div class="dm-expand--list-content">
            <p>Join us as we discuss how an evolved airline pricing &amp; retail offering plays a key role in Sabre’s overall commercial platform vision. Discover Sabre’s expanded Total Revenue Optimization Suite and be part of the conversation as we discuss a new approach to accelerating the pricing and revenue management space at your airline.</p>
        </div>
    </li>
</ul>
<br />
        <br />
        <div class="dm-accordion">
            <h4>Accordion</h4>
            <div class="dm-accordion--item">
                <div class="dm-accordion--action">
                    <p><b>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut mauris faucibue</b></p>
                </div>
                <div class="dm-accordion--content">
                    <p>Curabitur placerat velit a purus dictum tincidunt. Pellentesque ornare sollicitudin tristique. Fusce eu feugiat arcu. Pellentesque nisi risus, varius ut ipsum nec, interdum hendrerit quam. Aliquam aliquet ante eu porttitor eleifend. Proin efficitur libero nec ligula lobortis tempor elementum in dui. Donec et erat feugiat sapien dapibus facilisis eget non arcu. Aliquam nec pretium sem, nec molestie purus.</p>
                </div>
            </div>
            <div class="dm-accordion--item">
                <div class="dm-accordion--action">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut mauris faucibue</p>
                </div>
                <div class="dm-accordion--content">
                    <p>Curabitur placerat velit a purus dictum tincidunt. Pellentesque ornare sollicitudin tristique. Fusce eu feugiat arcu. Pellentesque nisi risus, varius ut ipsum nec, interdum hendrerit quam. Aliquam aliquet ante eu porttitor eleifend. Proin efficitur libero nec ligula lobortis tempor elementum in dui. Donec et erat feugiat sapien dapibus facilisis eget non arcu. Aliquam nec pretium sem, nec molestie purus.</p>
                    <p>Curabitur placerat velit a purus dictum tincidunt. Pellentesque ornare sollicitudin tristique. Fusce eu feugiat arcu. Pellentesque nisi risus, varius ut ipsum nec, interdum hendrerit quam. Aliquam aliquet ante eu porttitor eleifend. Proin efficitur libero nec ligula lobortis tempor elementum in dui. Donec et erat feugiat sapien dapibus facilisis eget non arcu. Aliquam nec pretium sem, nec molestie purus.</p>
                </div>
            </div>
            <div class="dm-accordion--item">
                <div class="dm-accordion--action">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut mauris faucibue</p>
                </div>
                <div class="dm-accordion--content">
                    <p>Curabitur placerat velit a purus dictum tincidunt. Pellentesque ornare sollicitudin tristique. Fusce eu feugiat arcu. Pellentesque nisi risus, varius ut ipsum nec, interdum hendrerit quam. Aliquam aliquet ante eu porttitor eleifend. Proin efficitur libero nec ligula lobortis tempor elementum in dui. Donec et erat feugiat sapien dapibus facilisis eget non arcu. Aliquam nec pretium sem, nec molestie purus.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<br />
<br />

<div class="dm-section">
<h4>Panels</h4>
    <div class="row">
        <div class="col-sm-6">
            <div class="dm-panel">
                <div class="dm-panel--thumbnail">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/thumbnail_placeholder.jpg" width="auto" height="auto"  /><br />
                </div>
                <div class="dm-panel--meta">
                    <a href="#">Category</a> <span>May 4, 2016</span>
                </div>
                <div class="dm-panel--content">
                    <h4>Panel with thumbnail &amp; button</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mollis felis lectus, eu molestie metus dictum in. Morbi a nulla id orci vehicula viverra. Aenean arcu nulla, convallis et quam vitae, vestibulum tempor lorem.</p>
                    <p><a href="#" class="dm-expand-action button button-sml">Learn more &raquo;</a></p>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="dm-panel">
                <div class="dm-panel--thumbnail">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/thumbnail_placeholder.jpg" width="auto" height="auto"  /><br />
                </div>
                <div class="dm-panel--meta">
                    <a href="#">Category</a> <span>May 4, 2016</span>
                </div>
                <div class="dm-panel--content">
                    <h4>Panel with thumbnail &amp; button</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mollis felis lectus, eu molestie metus dictum in. Morbi a nulla id orci vehicula viverra. Aenean arcu nulla, convallis et quam vitae, vestibulum tempor lorem.</p>
                    <p><a href="#" class="dm-expand-action button button-sml">Learn more &raquo;</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4">
            <div class="dm-panel">
                <div class="dm-panel--thumbnail">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/thumbnail_placeholder.jpg" width="auto" height="auto"  /><br />
                </div>
                <div class="dm-panel--meta">
                    <a href="#">Category</a> <span>May 4, 2016</span>
                </div>
                <div class="dm-panel--content">
                    <h4>Panel with thumbnail &amp; button</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mollis felis lectus, eu molestie metus dictum in. Morbi a nulla id orci vehicula viverra. Aenean arcu nulla, convallis et quam vitae, vestibulum tempor lorem.</p>
                    <p><a href="#" class="dm-expand-action button button-sml">Learn more &raquo;</a></p>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="dm-panel">
                <div class="dm-panel--thumbnail">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/thumbnail_placeholder.jpg" width="auto" height="auto"  /><br />
                </div>
                <div class="dm-panel--meta">
                    <a href="#">Category</a> <span>May 4, 2016</span>
                </div>
                <div class="dm-panel--content">
                    <h4>Panel with thumbnail &amp; button</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mollis felis lectus, eu molestie metus dictum in. Morbi a nulla id orci vehicula viverra. Aenean arcu nulla, convallis et quam vitae, vestibulum tempor lorem.</p>
                    <p><a href="#" class="dm-expand-action button button-sml">Learn more &raquo;</a></p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="dm-panel">
                <div class="dm-panel--thumbnail">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/thumbnail_placeholder.jpg" width="auto" height="auto"  /><br />
                </div>
                <div class="dm-panel--meta">
                    <a href="#">Category</a> <span>May 4, 2016</span>
                </div>
                <div class="dm-panel--content">
                    <h4>Panel with thumbnail &amp; button</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mollis felis lectus, eu molestie metus dictum in. Morbi a nulla id orci vehicula viverra. Aenean arcu nulla, convallis et quam vitae, vestibulum tempor lorem.</p>
                    <p><a href="#" class="dm-expand-action button button-sml">Learn more &raquo;</a></p>
                </div>
            </div>
        </div>
    </div>
    <br />
    <br />
    <h4>Panel Lists</h4>
    <div class="row">
        <div class="col-sm-6">
            <div class="dm-panel-list">
                <div class="dm-panel--meta">
                    <a href="#">Category</a> <span>May 4, 2016</span>
                </div>
                <div class="dm-panel--content">
                    <p><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mollis felis lectus</a></p>
                </div>
            </div>
            <div class="dm-panel-list">
                <div class="dm-panel--meta">
                    <a href="#">Category</a> <span>May 4, 2016</span>
                </div>
                <div class="dm-panel--content">
                    <p><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mollis felis lectus</a></p>
                </div>
            </div>
            <div class="dm-panel-list">
                <div class="dm-panel--meta">
                    <a href="#">Category</a> <span>May 4, 2016</span>
                </div>
                <div class="dm-panel--content">
                    <p><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mollis felis lectus</a></p>
                </div>
            </div>
        </div>
    </div>

    <br />
    <br />
    <h4>Tiles</h4>
    <div class="row">
        <div class="col-sm-4">
            <div class="dm-tile">
                <div class="dm-tile--thumbnail">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/thumbnail_placeholder.jpg" width="auto" height="auto"  /><br />
                </div>
                <div class="dm-tile--content">
                    <div class="dm-tile--details">
                        <p>Panel with thumbnail &amp; button</p>
                        <p><a href="#" class="dm-tile--action button button-secondary button-sml">Read more &raquo;</a></p>
                    </div>
                    <div class="dm-panel--meta">
                        <a href="#">Category</a> <span>May 4, 2016</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="dm-tile">
                <div class="dm-tile--thumbnail">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/thumbnail_placeholder.jpg" width="auto" height="auto"  /><br />
                </div>
                <div class="dm-tile--content">
                    <div class="dm-tile--details">
                        <p>Panel with thumbnail &amp; button</p>
                        <p><a href="#" class="dm-tile--action button button-secondary button-sml">Read more &raquo;</a></p>
                    </div>
                    <div class="dm-panel--meta">
                        <a href="#">Category</a> <span>May 4, 2016</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="dm-tile">
                <div class="dm-tile--thumbnail">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/thumbnail_placeholder.jpg" width="auto" height="auto"  /><br />
                </div>
                <div class="dm-tile--content">
                    <div class="dm-tile--details">
                        <p>Panel with thumbnail &amp; button</p>
                        <p><a href="#" class="dm-tile--action button button-secondary button-sml">Read more &raquo;</a></p>
                    </div>
                    <div class="dm-panel--meta">
                        <a href="#">Category</a> <span>May 4, 2016</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

<br />
<br />
<h4>Tabs</h4>
    <div class="row">
        <div class="col-sm-12">
            <div class="dm-tab">
                <ul class="dm-tab--nav clearfix">
                    <li class="active"><a href="#">Tab One</a></li>
                    <li><a href="#">Tab Two</a></li>
                    <li><a href="#">Tab Three</a></li>
                </ul>
                <br />
                <ul class="dm-tab--panels">
                    <li class="active">
                        <div class="dm-panel--content">
                            <h4>Tab 1</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mollis felis lectus, eu molestie metus dictum in. Morbi a nulla id orci vehicula viverra. Aenean arcu nulla, convallis et quam vitae, vestibulum tempor lorem.</p>
                        </div>
                    </li>
                    <li class="">
                        <div class="dm-panel--content">
                            <h4>Tab 2</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mollis felis lectus, eu molestie metus dictum in. Morbi a nulla id orci vehicula viverra. Aenean arcu nulla, convallis et quam vitae, vestibulum tempor lorem.</p>
                        </div>
                    </li>
                    <li class="">
                        <div class="dm-panel--content">
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
<table class="dm-table">
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

<br />
<br />
<div id="grid" class="dm-module">


<h4>Grid</h4>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque in bibendum enim. Fusce ornare porttitor justo, non lacinia eros dictum a. Vestibulum pretium lectus sapien, vel auctor turpis laoreet a. Nunc feugiat nibh sit amet massa faucibus rhoncus. Curabitur ac molestie justo. Donec ut arcu vitae orci posuere dictum eu tempus leo. </p>
    <div class="row">
        <div class="col-sm-1">
            <p>.col-*-1</p>
        </div>
        <div class="col-sm-11">
            <p>.col-*-11</p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2">
            <p>.col-*-2</p>
        </div>
        <div class="col-sm-10">
            <p>.col-*-10</p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <p>.col-*-3</p>
        </div>
        <div class="col-sm-9">
            <p>.col-*-9</p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <p>.col-*-3</p>
        </div>
        <div class="col-sm-8">
            <p>.col-*-9</p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-5">
            <p>.col-*-3</p>
        </div>
        <div class="col-sm-6">
            <p>.col-*-9</p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <p>.col-*-3</p>
        </div>
        <div class="col-sm-6">
            <p>.col-*-9</p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-7">
            <p>.col-*-3</p>
        </div>
        <div class="col-sm-5">
            <p>.col-*-9</p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-8">
            <p>.col-*-3</p>
        </div>
        <div class="col-sm-4">
            <p>.col-*-9</p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-9">
            <p>.col-*-3</p>
        </div>
        <div class="col-sm-3">
            <p>.col-*-9</p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-10">
            <p>.col-*-3</p>
        </div>
        <div class="col-sm-2">
            <p>.col-*-9</p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-11">
            <p>.col-*-3</p>
        </div>
        <div class="col-sm-1">
            <p>.col-*-9</p>
        </div>
    </div>
</div>
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
