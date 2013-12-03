<?php 
    $page = 'grid';
    include '../header.php'; 
    include '../helper-list.php'; 
?>
<div class='relative mb-l col-8-10 grid__item mt-xxxl ' >
    <img class='absolute fred-grid' alt='Fred the fed' src='/assets/images/fred-side.png'  />


    <div class='block-l tp-block ml-l' >  

       <h2 class='heading heading--keyline'>
           Grids
        </h2>
        <h3 class='h4'>
            a) Inline Grid
        </h3>
        <p>
            Sets the child elements to take up full justified width of the parent.
        </p>
        <p> 
            The prefix class is 'col' (although you can change this in the variables file) and the suffix is the fraction you require.
        </p>
        <!--  code block ends -->
        <div class='block-s tt-block'>
            <h4 class='tiny uppercase text-muted'>
                code
            </h4>
            <pre>
<code class='language-markup'>
Grid columns
------------------------------------------
.col { width: 100%; }
.col-1-3 { width: 33.33333%; }
.col-2-3 { width: 66.66667%; }
.col-1-4 { width: 25%; }
.col-2-4 { width: 50%; }
.col-3-4 { width: 75%; }
.col-1-5 { width: 20%; }
.col-2-5 { width: 40%; }
.col-3-5 { width: 60%; }
.col-4-5 { width: 80%; }
.col-1-10 { width: 10%; }
.col-2-10 { width: 20%; }
.col-3-10 { width: 30%; }
.col-4-10 { width: 40%; }
.col-5-10 { width: 50%; }
.col-6-10 { width: 60%; }
.col-7-10 { width: 70%; }
.col-8-10 { width: 80%; }
.col-9-10 {width: 90%; }

&lt;p&gt;Example one:&lt;/p&gt; 
&lt;div class='grid'&gt;
    &lt;div class='grid__item col'&gt;
       &lt;div class='pink-block block-s'&gt;
            &lt;p&gt;
                full width
            &lt;/p&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;p&gt;Example two:&lt;/p&gt;
&lt;div class='grid'&gt;
    &lt;div class='grid__item col-2-4'&gt;
        &lt;div class='blue-block block-s'&gt;
            &lt;p&gt;
                50%
            &lt;/p&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class='grid__item col-2-4 '&gt;
        &lt;div class='blue-block block-s'&gt;
            &lt;p&gt;
                50%
            &lt;/p&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code>
            </pre>
        </div>
        <!--  hello world block starts -->
        <div class='block--stacked block-s ts-block'> 
            <p>Example one:</p> 
            <div class='grid'>
                <div class='grid__item col'>
                   <div class='pink-block block-s'>
                        <p>
                            full width
                        </p>
                    </div>
                </div>
            </div>
            <p>Example two:</p>
            <div class='grid'>
                <div class='grid__item col-2-4' >
                    <div class='blue-block block-s'>
                        <p>
                            50%
                        </p>
                    </div>
                </div>
                <div class='grid__item col-2-4'>
                    <div class='blue-block block-s'>
                        <p>
                            50%
                        </p>
                    </div>
                </div>
            </div>
            <p>Example three:</p>
            <div class='grid'>
                <div class='grid__item col-1-4'>
                    <div class='green-block block-s'>
                        <p>
                            25%
                        </p>
                    </div>
                </div>
                <div class='grid__item col-1-4'>
                    <div class='green-block block-s'>
                        <p>
                            25%
                        </p>
                    </div>
                </div>
                <div class='grid__item col-1-4 '>
                    <div class='green-block block-s'>
                        <p>
                            25%
                        </p>
                    </div>
                </div>
                <div class='grid__item col-1-4 '>
                    <div class='green-block block-s'>
                        <p>
                            25%
                        </p>
                    </div>
                </div>
            </div>
            <p>Example four:</p>
            <div class='grid'>
                <div class='grid__item col-6-10'>
                    <div class='ts-block block-s'>
                        <p>
                            60%
                        </p>
                    </div>
                </div>
                <div class='grid__item col-4-10'>
                    <div class='ts-block block-s'>
                        <p>
                            40%
                        </p>
                    </div>
                </div>
            </div>
            <p>Example five:</p>
            <div class='grid'>
                <div class='grid__item col-8-10'>
                    <div class='tt-block block-s'>
                        <p>
                            80%
                        </p>
                    </div>
                </div>
                <div class='grid__item col-2-10'>
                    <div class='tt-block block-s'>
                        <p>
                            20%
                        </p>
                    </div>
                </div>
            </div>

            <br />

            <p>
                Vertical align these grid items in the middle!
            </p>

            <div class='grid grid--middle'>
                <div class='col-1-4'>
                    <div class='green-block block-s'>
                        <p>
                            1/4
                        </p>
                    </div>
                </div>
                <div class='col-1-4'>
                    <div class='green-block block-s'>
                        <p>
                            1/4
                        </p>
                    </div>
                </div>
                <div class='col-1-4'>
                    <div class='green-block block-s'>
                        <p>
                            1/4
                        </p>
                    </div>
                </div>
                <div class='col-1-4'>
                   <div class='green-block block-s'>
                        <p>
                            1/4
                        </p>
                    </div>
                </div>
            </div>   
        </div><!--  hello world block ends -->
    
        <h3 class='h4 mt-l'>
            Inline Grid - Responsive
        </h3>
        <p>
            This works exactly the same as what's mentioned above. 
            You just need to add an extra suffix onto the classes which relates to the breakpoint you want to target.
        </p>
        <!--  code block starts -->
        <div class=' block-s tt-block'> 
            <h4 class='tiny uppercase text-muted'>
                Media query suffix: 
            </h4>
            <pre>
<code class='language-css'>
// Media query prefixes
// -------------------------------------------------- 

$breakpoint-none:"";
$breakpoint-xxlarge-name: "xxlarge";
$breakpoint-xlarge-name: "xlarge";
$breakpoint-large-name: "large";
$breakpoint-medium-name: "medium";
$breakpoint-small-name: "small";
$breakpoint-classname-prefix: "--q-";
</code>
<code class='language-markup'>
&lt;div class='grid'&gt;
    &lt;div class='grid__item col-1-4 col-2-4--q-medium col--q-small col-6-10--q-xlarge'&gt;
       &lt;div class='pink-block block-s'&gt;
            &lt;p&gt;
                1
           &lt;/p&gt;
        &lt;/div>
    &lt;/div>
    &lt;div class='grid__item col-1-4 col-2-4--q-medium col--q-small col-6-10--q-xlarge'&gt;
       &lt;div class='pink-block block-s'&gt;
            &lt;p&gt;
                1
            &lt;/p&gt;
        &lt;/div>
    &lt;/div>
    &lt;div class='grid__item col-1-4 col-2-4--q-medium col--q-small col-6-10--q-xlarge'&gt;
       &lt;div class='pink-block block-s'&gt;
            &lt;p&gt;
                1
            &lt;/p&gt;
        &lt;/div>
    &lt;/div>
    &lt;div class='grid__item col-1-4 col-2-4--q-medium col--q-small col-6-10--q-xlarge'&gt;
       &lt;div class='pink-block block-s'&gt;
            &lt;p&gt;
                1
            &lt;/p&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code>
            </pre>
        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class='block--stacked block-s ts-block'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4> 
          
            
            <div class='grid'>
                <div class='grid__item col-1-4 col-2-4--q-medium col--q-small col-6-10--q-xlarge'>
                   <div class='pink-block block-s'>
                        <p>
                            1<!--<strong>Desktop:</strong> 1/4 <br />
                            <strong>Skinny:</strong> 1/2 <br />
                           <strong>mobile:</strong> full width<br />
                           <strong>wide:</strong> 60/40-->
                       </p>
                    </div>
                </div>
                <div class='grid__item col-1-4 col-2-4--q-medium col--q-small col-6-10--q-xlarge'>
                   <div class='pink-block block-s'>
                        <p>
                            1
                        </p>
                    </div>
                </div>
                <div class='grid__item col-1-4 col-2-4--q-medium col--q-small col-6-10--q-xlarge'>
                   <div class='pink-block block-s'>
                        <p>
                            1
                        </p>
                    </div>
                </div>
                <div class='grid__item col-1-4 col-2-4--q-medium col--q-small col-6-10--q-xlarge'>
                   <div class='pink-block block-s'>
                        <p>
                            1
                        </p>
                    </div>
                </div>
            </div>
        </div><!--  hello world block ends -->

        <h3 class='h4'>
            b) Float Grid
        </h3>
    </div><!--Inline grid section starts-->
    
        
</div>
<?php 
    include '../footer.php'; 
?>