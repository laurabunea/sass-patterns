<?php 
    include '../header.php'; 
?>
<?php 
    include '../helper-list.php'; 
?>
<div class='relative mb-l col-8-10 grid__item mt-xxxl' >
    <img class='absolute fred-media' alt='Fred the fed' src='/assets/images/fred-side.png' />


    <div class='block-l tp-block ml-l' >  

        <h2 class='heading heading--keyline'>
           Media blocks
        </h2>
        <p>
            Float an image to the left, with a clearfixed block of content to the right.
        </p>
        <!--  code block starts -->
        <div class=' block-s tt-block'>
            <h4 class='tiny uppercase text-muted'>
                code
            </h4>
            <pre>
<code class="language-markup">
&lt;div class='media'&gt;
    &lt;img class='media__image' src='/assets/images/green-bird.jpg' alt='' /&gt;
    &lt;div class='media__body'&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code>
<code class='language-markup'>
&lt;div class='media--rev'&gt;
    &lt;img class='media__image' src='/assets/images/green-bird.jpg' alt='' /&gt;
    &lt;div class='media__body'&gt;
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
            <div class='media'>
                <img src='/assets/images/green-bird.jpg' class='media__image'>
                <div class='media__body'>
                    <p class='mt-0'>
                        Uncle Bully was pashing when the pearler packing a sad event occured. Oh no! I'm beached as, this carked it seabed is as stoked as a flat stick kumara. Mean while, in a waka, Rhys Darby and Cardigan Bay were up to no good with a bunch of random milks.
                    </p>
                </div>
            </div>
            <hr class='mt-m' />
            <div class='media--rev'>
                <img src='/assets/images/green-bird.jpg' class='media__image'>
                <div class='media__body'>
                   <p class=''>
                    I'd slam that clam, good afterble constanoon. The snarky force of his burning my Vogel's was on par with Hercules Morse, as big as a horse's good as mate.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
    include '../footer.php'; 
?>