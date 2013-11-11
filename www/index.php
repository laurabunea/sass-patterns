<?php 
    include 'header.php'; 
?>
<div class='clearfix'>   
	<!--add a theme class-->
		<div class='content  '>
			<h1 class='uppercase h0' style='color:white'>F<span style='color:#E6DB74'>r</span>ed</h1>
			
		</div>
</div><!--content_wrapper ends-->
<div class='clearfix m'> 
	<div class='content tb__primary grid__item'>
		<div class='content--padding'>
			<p>
				FRED the friendly FED takes the stress out of starting a new project... intro text some tips to get you started.. etc
			</p>

			<h3>
				Naming Conventions
			</h3>
			<!-- code block starts -->
            <div class='block--xs tb__tertiary'>
                <h4 class='tiny uppercase text_muted'>
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
		</div>
	</div>
</div>
<?php 
    include 'footer.php'; 
?>