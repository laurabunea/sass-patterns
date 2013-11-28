<?php 
    include 'header.php'; 
?>

<div class='block-l block-small--s mb-l clearfix pt-block'>
    <div class='page-header pt-page-header'>
        <h1>
            Mixins
            <span class='tiny'>
                - Intro
            </span>
        </h1>
    </div>

    <p class='intro'>
        intro text
    </p>

    <div class='page-header pt-page-header mt-xl'>
        <h1>

            Mixins
            <span class='tiny'>
                - Helper mixins
            </span>
        </h1>
    </div>

    <ul class='list-styled--decimal mt-m'>
        <li>
            <a href='#mixinAnchor1'>
                Vendor
            </a>
        </li>
        <li>
            <a href='#mixinAnchor2'>
                Media breakpoint
            </a>
        </li>
        <li>
            <a href='#mixinAnchor3'>
                Opacity
            </a>
        </li>
        <li>
            <a href='#mixinAnchor4'>
                Placeholder
            </a>
        </li>
        <li>
            <a href='#mixinAnchor5'>
                Theme mixin
            </a>
        </li>
        <li>
            <a href='#mixinAnchor6'>
                Form validation
            </a>
        </li>
        <li>
            <a href='#mixinAnchor7'>
                Spacer Mixin
            </a>
        </li>
        <li>
            <a href='#mixinAnchor7'>
                Grid Mixin
            </a>
        </li>
    </ul><!--list unstyled ends-->
    <!-- /****************************************  Vendor block  *******************************/ -->
    <hr class='mt-l'>
    <div class='mt-l' id='mixinAnchor1'>
        <h2 class='h3'>
           01. Vendor 
        </h2>

        <p>This mixin takes the hassle out of defining one css-attribute in all vendor-specific prefixes (-moz, -webkit, -o, -ms).</p>
        <!--  code block starts -->
        <div class='block-s tt-block'>
            <h4 class='tiny uppercase text-muted'>
                scss code
            </h4>
            <pre>
<code class='language-css'>
.img-rounded {
    /* @include vendor($property, $value); */
    @include vendor(border-radius, 50% 50% 50% 50%);
}
</code>
            </pre>
            <h4 class='tiny uppercase text-muted m0 '>
                html code
            </h4>
            <pre>
<code class='language-markup'>
&lt;div class='img-rounded'&gt; .. &lt;/div&gt;
</code>
            </pre>
        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class='block--stacked block-s st-block'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4>
            <div class='img-rounded mt-xs  testbox-100-100 green-block'>
            </div>
        
        </div><!--  hello world block ends -->
    </div><!-- mixin-vendor ends-->
    <hr class='mt-l'>
    <!-- /****************************************  Media break point block  *******************************/ -->

    <div class='mt-l' id='mixinAnchor2'>
        <h2 class='h3'>
            02. Media break point 
        </h2>
        <!--  code block starts -->
        <div class='block-s tt-block'>
            <h4 class='tiny uppercase text-muted'>
                scss code
            </h4>
            <pre>
<code class='language-css'>
.element{
    @include media(xlarge){
        background-color:#F92672;
    }
    @include media(desktop-only){
        background-color:#A6E22E;
    }
    @include media(medium-only){
        background-color:#4AA1C5;
    }
    @include media(small-only){
        background-color:#E6DB74;
    }
}
</code>
            </pre>
        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class='block--stacked block-s st-block'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4>
            <div class='element block--stacked block-s'>
                resize the browser
            </div>
        </div><!--  hello world block ends -->
    </div><!-- mixin-break-point ends-->
    <hr class='mt-l'>
    <!-- /****************************************  Opacity block  *******************************/ -->

    <div class='mt-l' id='mixinAnchor1'>
        <h2 class='h3'>
           03. Opacity 
        </h2>
        <!--  code block starts -->
        <div class='block-s tt-block'>
            <h4 class='tiny uppercase text-muted'>
                scss code
            </h4>
            <pre>
<code class='language-css'>
.overlay--50 {
    /* @include opacity($value); */
    @include opacity(0.5); 
}
.overlay--25 {
    /* @include opacity($value); */
    @include opacity(0.5); 
}
</code>
            </pre>
            <h4 class='tiny uppercase text-muted m0 '>
                html code
            </h4>
            <pre>
<code class='language-markup'>
&lt;div class='overlay--50'&gt; .. &lt;/div&gt;

&lt;div class='overlay--25'&gt; .. &lt;/div&gt;
</code>
            </pre>

        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class='block--stacked block-s st-block'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4>
            <div class='grid'>
                <div class='overlay--25 mt-m  testbox-100-100 block-s green-block'>
                    <p>25% opacity</p>
                </div>

                <div class='overlay--50 mt-m  testbox-100-100 block-s green-block'>
                    <p>50% opacity</p>
                </div>

                <div class='mt-m  testbox-100-100 block-s green-block'>
                    <p>Block with out an opacity class</p>
                </div>
            </div>
        </div><!--  hello world block ends -->
    </div><!-- mixin-opacity ends-->
    <hr class='mt-l'>
    <!-- /****************************************  Placeholder  *******************************/ -->

    <div class='mt-l' id='mixinAnchor4'>
        <h2 class='h3'>
            04. Placeholder Mixin 
        </h2>
        <!--  code block starts -->

        <p>This mixin takes the hassle out of defining placeholder prefixes (:-moz-placeholder, ::-webkit-input-placeholder, ::-moz-placeholder, :-ms-input-placeholder).</p>
        
        <div class='block-s tt-block'>
            <h4 class='tiny uppercase text-muted'>
                scss code
            </h4>
            <pre>
<code class='language-css'>
.pink-input-text {
    /* @include placeholder($color);*/
    @include placeholder(#F92672);
}
</code>
            </pre>
            <h4 class='tiny uppercase text-muted'>
                html code
            </h4>
            <pre>
<code class='language-markup'>
&lt;form&gt;
    &lt;input class='pink-input-text' type='text' name='fname' placeholder='irst name'/&gt;
&lt;/form&gt;
</code>
            </pre>
        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class='block--stacked block-s st-block'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4>
            <form class='mt-xs '>
                <input class='pink-input-text' type="text" name="fname" placeholder="First name">
            </form>
        
        </div><!--  hello world block ends -->
    </div><!-- mixin-vendor ends-->
    <hr class='mt-l'>
    <!-- /****************************************  Theme mixin  *******************************/ -->

    <div class='mt-l' id='mixinAnchor5'>
        <h2 class='h3'>
            05. Theme Mixin 
        </h2>
        <!--  code block starts -->

        <p>
            This mixin can be used for simple theme blocks you can pass in a background, text and border colour. <br />
            <span style='color:red;font-weight:bold'>QUESTION:</span> For now it the border elements are just extending the border selecter - should we pass in the border width and style as well or have a seperate border mixin .... Thoughts people 
        </p>
        
        <div class=' block-s tt-block'>
            <h4 class='tiny uppercase text-muted'>
                scss code
            </h4>
            <pre>
<code class='language-css'>
   .blue-block {
        /* @include theme-block($bg-color, $txt-color, $border-color);*/
        @include theme-block( #4AA1C5, #fff, #4AA1C5 );
    }
</code>
            </pre>
            <h4 class='tiny uppercase text-muted'>
                html code
            </h4>
            <pre>
<code class='language-markup'>
&lt;div class='blue-block'&gt;
    &lt;p&gt; Some text &lt;/p&gt;
&lt;/div&gt;  
</code>
            </pre>
        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class='block--stacked block-s st-block'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4>
            <div class='mt-xs  blue-block block-s'>
                <p>Some text</p>
            </div>
        
        </div><!--  hello world block ends -->
    </div><!-- mixin-vendor ends-->  

    <!-- /****************************************  Theme mixin  *******************************/ -->

    <div class='mt-l' id='mixinAnchor6'>
        <h2 class='h3'>
            06. Form validation
        </h2>
        <!--  code block starts -->

        <p>
            Apply contextual and semantic states to individual form controls. 
        </p>
        
        <div class='block-s tt-block'>
            <h4 class='tiny uppercase text-muted'>
                scss code
            </h4>
            <pre>
<code class='language-css'>
.has-success {
    @include form-control-validation($state-success-text, $state-success-text, $state-success-bg);
}      
</code>
            </pre>
            <h4 class='tiny uppercase text-muted'>
                html code
            </h4>
            <pre>
<code class='language-markup'>
&lt;div class='blue-block'&gt;
    &lt;p&gt; Some text &lt;/p&gt;
&lt;/div&gt;  
</code>
            </pre>
        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class='block--stacked block-s st-block'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4>
            <div class='mt-xs  blue-block block-s'>
                <p>Some text</p>
            </div>
        
        </div><!--  hello world block ends -->
    </div><!-- mixin-vendor ends-->  

    <!-- /****************************************  Sapcer mixin  *******************************/ -->

    <div class='mt-l' id='mixinAnchor6'>
        <h2 class='h3'>
           Spacer Mixin
        </h2>
        <!--  code block starts -->

        <p>
            Notes
        </p>
        
        <div class='block-s tt-block'>
            <h4 class='tiny uppercase text-muted'>
                scss code
            </h4>
            <pre>
<code class='language-css'>
//these variables are in the fred variables file
$fred-grid-breakpoints:     default, small, medium, large;
$fred-margin-types: "mt", "mb";
$fred-padding-types: "pt", "pb";


@include fred-breakpoint-sizer($fred-margin-breakpoints, $fred-margin-types);
@include fred-breakpoint-sizer($fred-padding-breakpoints, $fred-padding-types);


</code>
            </pre>
            <h4 class='tiny uppercase text-muted'>
                html code
            </h4>
            <pre>
<code class='language-markup'>
&lt;div class='blue-block'&gt;
    &lt;p&gt; Some text &lt;/p&gt;
&lt;/div&gt;  
</code>
            </pre>
        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class='block--stacked block-s st-block'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4>
            <div class='mt-xs  blue-block block-s'>
                <p>Some text</p>
            </div>
        
        </div><!--  hello world block ends -->
    </div><!-- mixin-vendor ends-->             
         

</div><!-- content padding ends-->

<?php 
    include 'footer.php'; 
?>