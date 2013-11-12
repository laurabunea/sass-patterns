<?php 
    include 'header.php'; 
?>
<!--<div class='clearfix'>   
	add a theme class-->
		<!--<div class='content  '>
			<h1 class='uppercase h0' style='color:white'>F<span style='color:#E6DB74'>r</span>ed</h1>
			
		</div>
</div>--><!--content_wrapper ends-->
<div class='clearfix'>
    <div class='media'>
        <img class='media__image' src='assets/images/fred.png' alt='Fred the friendly FED'/>
        <div class='media__body'>
            <!--TODO delete inline-->
            <div class='arrow--side block tb__tertiary br--s' >
                <p style='color:white' class='h1 '>Hi I'm  F<span>R</span>ED the friendly FED.</p>
                <i class='arrow  arrow-left'></i>
            </div>
        </div>
    </div> 

	<div class='content tb__primary grid__item '>
        
		<div class='content--padding'>
			<p class='intro'>
                Notes on Fred here ... and good rules ...
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