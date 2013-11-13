<?php 
    include 'header.php'; 
?>

<div class='content--padding clearfix tb__primary'>
    <div class='page-header tb__header'>
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

    <div class='page-header tb__header mxx'>
        <h1>

            Mixins
            <span class='tiny'>
                - Helper mixins
            </span>
        </h1>
    </div>

    <ul class='list--styled_decimal'>
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
    </ul><!--list unstyled ends-->
    <!-- /****************************************  Vendor block  *******************************/ -->
    <hr class='mx'>
    <div class='section--l' id='mixinAnchor1'>
        <h2 class='h3'>
           01. Vendor 
        </h2>

        <p>This mixin takes the hassle out of defining one css-attribute in all vendor-specific prefixes (-moz, -webkit, -o, -ms).</p>
        <!--  code block starts -->
        <div class='block block--s tb__tertiary'>
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
        <div class='block block--s tb__secondary'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4>
            <div class='img-rounded xm testbox-100-100 tb__green'>
            </div>
        
        </div><!--  hello world block ends -->
    </div><!-- mixin-vendor ends-->
    <hr class='mx'>
    <!-- /****************************************  Media break point block  *******************************/ -->

    <div class='section--xl' id='mixinAnchor2'>
        <h2 class='h3'>
            02. Media break point 
        </h2>
        <!--  code block starts -->
        <div class='block block--s tb__tertiary'>
            <h4 class='tiny uppercase text-muted'>
                scss code
            </h4>
            <pre>
<code class='language-css'>
.element{
    background-color:#fff;

    @include media(skinny-only){
        background-color:pink;
    }

    @include media(mobile-only){
        background-color:blue;
    }
}
</code>
            </pre>
        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class='block__stacked block--s tb__secondary'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4>
            <div class='element block__stacked block--s'>
                resize the browser
            </div>
        </div><!--  hello world block ends -->
    </div><!-- mixin-break-point ends-->
    <hr class='mx'>
    <!-- /****************************************  Opacity block  *******************************/ -->

    <div class='section--xl' id='mixinAnchor1'>
        <h2 class='h3'>
           03. Opacity 
        </h2>
        <!--  code block starts -->
        <div class='block block--s tb__tertiary'>
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
        <div class='block__stacked block--s tb__secondary'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4>
            <div class='grid'>
                <div class='overlay--25 m testbox-100-100 block block--s tb__green'>
                    <p>25% opacity</p>
                </div>

                <div class='overlay--50 m testbox-100-100 block block--s tb__green'>
                    <p>50% opacity</p>
                </div>

                <div class='m testbox-100-100 block block--s tb__green'>
                    <p>Block with out an opacity class</p>
                </div>
            </div>
        </div><!--  hello world block ends -->
    </div><!-- mixin-opacity ends-->
    <hr class='mx'>
    <!-- /****************************************  Placeholder  *******************************/ -->

    <div class='section--xl' id='mixinAnchor4'>
        <h2 class='h3'>
            04. Placeholder Mixin 
        </h2>
        <!--  code block starts -->

        <p>This mixin takes the hassle out of defining placeholder prefixes (:-moz-placeholder, ::-webkit-input-placeholder, ::-moz-placeholder, :-ms-input-placeholder).</p>
        
        <div class='block block--s tb__tertiary'>
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
        <div class='block__stacked block--s tb__secondary'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4>
            <form class='xm'>
                <input class='pink-input-text' type="text" name="fname" placeholder="First name">
            </form>
        
        </div><!--  hello world block ends -->
    </div><!-- mixin-vendor ends-->
    <hr class='mx'>
    <!-- /****************************************  Theme mixin  *******************************/ -->

    <div class='section--xl' id='mixinAnchor5'>
        <h2 class='h3'>
            05. Theme Mixin 
        </h2>
        <!--  code block starts -->

        <p>
            This mixin can be used for simple theme blocks you can pass in a background, text and border colour. <br />
            <span style='color:red;font-weight:bold'>QUESTION:</span> For now it the border elements are just extending the border selecter - should we pass in the border width and style as well or have a seperate border mixin .... Thoughts people 
        </p>
        
        <div class='block block--s tb__tertiary'>
            <h4 class='tiny uppercase text-muted'>
                scss code
            </h4>
            <pre>
<code class='language-css'>
   .tb__blue {
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
&lt;div class='tb__blue'&gt;
    &lt;p&gt; Some text &lt;/p&gt;
&lt;/div&gt;  
</code>
            </pre>
        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class='block__stacked block--s tb__secondary'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4>
            <div class='xm tb__blue block block--s'>
                <p>Some text</p>
            </div>
        
        </div><!--  hello world block ends -->
    </div><!-- mixin-vendor ends-->  

    <!-- /****************************************  Theme mixin  *******************************/ -->

    <div class='section--xl' id='mixinAnchor6'>
        <h2 class='h3'>
            06. Form validation
        </h2>
        <!--  code block starts -->

        <p>
            Apply contextual and semantic states to individual form controls. 
        </p>
        
        <div class='block block--s tb__tertiary'>
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
&lt;div class='tb__blue'&gt;
    &lt;p&gt; Some text &lt;/p&gt;
&lt;/div&gt;  
</code>
            </pre>
        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class='block__stacked block--s tb__secondary'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4>
            <div class='xm tb__blue block block--s'>
                <p>Some text</p>
            </div>
        
        </div><!--  hello world block ends -->
    </div><!-- mixin-vendor ends-->               
         

</div><!-- content padding ends-->

<?php 
    include 'footer.php'; 
?>