<?php 
    include 'header.php'; 
?>

<div class='media mt-xxxl col'>
    <img class='media__image' src='assets/images/fred.png' alt='Fred the friendly FED'/>
    <div class='media__body'>
        <div class='arrow--side block-s tt-block' >
            <p class='h1 '>Hi I'm F<span>R</span>ED the friendly FED.</p>
            <i class='arrow  arrow-left'></i>
        </div>
    </div>
</div>

<div class='block--stacked block-l block-small--s mb-l tp-block'>
	
    <p class='intro'>
        Introduction on FRED here ...
    </p>
    
    <hr class='mt-m'/>
	
    <h3>
        Fred's friendly rules:
    </h3>
    <ul class='list-styled'>
        <li>
            Comment everything (that isn't obvious). You should write comments in the <a href='#commentStyleAnchor'>DocBlockr style</a>, and limit lines to 80 chars.
        </li>
        <li>
            Stick to Fred's <a href='#namingConventionsAnchor'>naming conventions</a> listed  below
        </li>
        <li>
            Don't use JS to replicate HTML/CSS functionality unless a puppy's life depends on it.
        </li>
        <li>
            Don't do crazy SaSS nesting (3 levels at most)
        </li>
        <li>
            Limit nested blocks to 50 lines
        </li>
        <li>
            No styles on IDs
        </li>
        <li>
            All JS hooks should be prefixed with js. E.g, .js_show_nav
        </li>
        <li>
            Always, always always check your compiled CSS output. This is what matters.
        </li>
        <li>
            Don't use HTML5 elements when a div will do.
        </li>
        <li>
            Indent sub-components in CSS
        </li>
        <li>
            Be consistent with vertical spacing. Avoid setting arbitrary margins on items. 
            Defer these to a variable, and use multiples of that variable to control your vertical spacing. 
            Our designs will often change right up til the end, so it's worth making stuff really easy to change.
        </li>
    </ul>
    <hr class='mt-l'/>
    <h3 id='namingConventionsAnchor'>
		Fred's Naming Conventions
	</h3>

	<!-- code block starts -->
    <div class=' block-s tt-block'>
        <h4 class='tiny uppercase text-muted'>
            code
        </h4>
        <pre>
<code class='language-css'>
.name or .complex-name {
    /* This is a class! */
    color: red;
}

.name--extension {
    /*This modifies the class*/
    font-weight: bold;
}

.name__component {
	/*This is a sub-component of the class*/
}

	.name__component__subcomponent {
		/*Tabbed to simulate sass nesting, without the specificity*/
	}
</code>
        </pre>
    </div><!-- code block ends -->

    <hr class='mt-l'/>
    <h3 id='commentStyleAnchor'>
        Fred's Commenting styles 
    </h3>
    <p>
        Make use of CSS comments rather than SaSS // line-comment style in your general styles. 
        This makes it easy for us to comment consistently across projects that are in SaSS or 
        vanilla CSS, and means the non-minified CSS output still has all the context explaining 
        what you've done.
    </p>
    <!-- code block starts -->
    <div class='block-s tt-block'>
        <h4 class='tiny uppercase text-muted'>
            code
        </h4>
        <pre>
<code class='language-css'>
/**
 * Oh hai there, I'm a comment! We write comments in the jsDoc|DocBlockr style,
 * so that our CSS and JS comments all look the same. You can read about jsDoc
 * over at the repo: https://github.com/spadgos/sublime-jsdocs
 */

/**
 * Oh hai there, I'm a comment with a title!
 * ----------------------------------------------------------------------------
 *
 * Wrap lines that are longer than 80 chars. A comment might need a title block
 * which should be underscored by 76 dashes so it comes to 80 chars total.
 *
 * In General, butt the comment block up against the CSS item that follows it,
 * like so:
 *
 */
.some-selector {
    /* I'm a line comment in a CSS selector. */
}
</code>
        </pre>
    </div>

    <p class='m'>
        Use the // line-comment style in SaSS mixins, since they shouldn't really make it to 
        the CSS output
    </p>

     <!-- code block starts -->
    <div class='block-s tt-block'>
        <h4 class='tiny uppercase text-muted'>
            code
        </h4>
        <pre>
<code class='language-css'>
// This mixin converts pixels to ems, assuming a base em-size of 16px:
@function pxem($px-val, $base: 16) {
    @return #{ ($px-val / $base) }em;
}
</code>
        </pre>
    </div>


</div><!--content padding ends-->


<?php 
    include 'footer.php'; 
?>