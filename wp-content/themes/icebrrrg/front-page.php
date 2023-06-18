<?php get_header(); ?>

<!-- ab hier: index.php -->
<div id="main">
    <div>
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : ?>
                <?php the_post(); ?>
                <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanenter Link zu diesem Artikel">
                    <?php the_title('<h2>', '</h2>', true); ?></a>
                <?php the_content('<br /><span class="ym-button ym-next">Weiterlesen</span>'); ?>
            <?php endwhile; ?>
        <?php else : ?>
            <h2>Nichts gefunden</h2>
            <p>Sorry, aber du suchst gerade nach etwas, was hier nicht ist.</p>
        <?php endif; ?>
        
        <!-- Add your static content here -->
        <div class="container">
    
    <div class="sixteen columns">
    
    <div class="flex-container">
    <div class="flexslider">
<ul class="slides">
<li>
<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/nord.jpeg" alt="Nordsee trains" /></a>
  <div class="flex-caption">
            <h5><a href="#">DISCOVER THE NORDSEE WITH ONLY 49€ </a></h5>
    
            <p>From Beaches to Wildlife Reserves: Unforgettable Encounters in Nordsee's Natural Paradises.</p>		
</div>
</li>
<li>
<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/montains.jpeg" alt="Montains" /></a>
  <div class="flex-caption" style="display:none;">
            <h5><a href="#">Nature's Majesty Revealed: Unraveling the Secrets of Germany's Majestic Mountain Scenery</a></h5>
    
            <p>Immerse Yourself in a Tapestry of Dramatic Landscapes and Alpine Wonders with Germany 49€ Ticket</p>		
</div>
</li>
<li>
<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/frankfurt.jpeg" alt="Frankfurt Am Main" /></a>
  <div class="flex-caption" style="display:none;">
            <h5><a href="#">Discover Frankfurt Am Main and other big cities</a></h5>
    
            <p>Discover the Best of Germany: Embark on a Journey to Frankfurt Am Main and More with the Deutschland Ticket.</p>		
</div>
</li>
</ul>
</div>

    


</div>

<div class="tagline">
<p>Welcome to <strong>Germany 49€</strong>, your source for discovering Germany's captivating destinations like never before.</p>
    <p>Immerse yourself in a tapestry of vibrant cultures, awe-inspiring architecture, and breathtaking landscapes across the scenic landscapes of Germany.</p>
    </div>

    </div><!-- container -->
    
    <hr>
    
    <section class="container">
    
    <div class="one-third column">
    <h3><i class="icon-heart rounded"></i> Great Tips</h3>
    <p>Discover a treasure trove of great tips and insider recommendations to enhance your travel experiences. From hidden gems to local secrets, we'll help you make the most of your journey.</p>
</div>
<div class="one-third column">
    <h3><i class="icon-cog rounded"></i> Travel Information</h3>
    <p>Stay informed with comprehensive travel information that covers everything you need to know before embarking on your adventure. From visa requirements to local customs, we've got you covered.</p>
</div>
<div class="one-third column">
    <h3><i class="icon-resize-full rounded"></i> Free</h3>
    <p>Access a wealth of valuable travel resources and information absolutely free. We believe in making travel accessible to all, and our commitment to providing free content ensures that you can explore the world without breaking the bank.</p>
</div>

    
    </section>
    
    <hr>
    
    <section class="container">
    
    <article id="photo-item-1" class="feature-column one-third column">
        <div class="featured-image img-wrapper">
            <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/maps1.jpg" rel="prettyPhoto" class="img-link" title="Maps">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/maps1.jpg" class="scale-with-grid" alt="Maps">
                <div class="overlay zoom"></div>
            </a>
        </div>
    
        <h4><a href="#">Maps</a></h4>
        <p>Explore interactive maps to get a better understanding of your dream destinations. Find points of interest, landmarks, and plan your itinerary with ease.</p>
    </article>
    
    <article id="photo-item-2" class="feature-column one-third column">
        <div class="featured-image img-wrapper">
            <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/destinations.jpg" rel="prettyPhoto" class="img-link" title="Maps">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/destinations.jpg" class="scale-with-grid" alt="Maps from germany">
                <div class="overlay zoom"></div>
            </a>
        </div>
        <h4><a href="#">Destinations</a></h4>
        <p>Discover a wide range of breathtaking destinations waiting to be explored. From stunning natural landscapes to vibrant cities, find inspiration for your next adventure.</p>
    </article>
    
    <article id="photo-item-3" class="feature-column one-third column">
        <div class="featured-image img-wrapper">
            <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/trains.jpg" rel="prettyPhoto" class="img-link" title="Photo Item 1">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/trains.jpg" class="scale-with-grid" alt="Train times">
                <div class="overlay zoom"></div>
            </a>
        </div>
        <h4><a href="#">Train Times</a></h4>
        <p>Access up-to-date train schedules and plan your journeys efficiently. Get information on departure times, arrivals, and make the most of your travel by train.</p>
    </article>
   
</section>

<!-- container -->
</head>
<style>
  .accordion-content {
    display: none;
  }

  .active {
    font-weight: bold;
  }

  .accordion-header::after {
    content: '\25B6';
    float: right;
    transition: transform 0.3s;
  }

  .accordion-header.active::after {
    transform: rotate(90deg);
  }
</style>

<h1>FAQ</h1>

<div class="accordion">
  <div class="accordion-item">
    <h4 class="accordion-header" onclick="toggleAccordion(1)">1. Where is the 49-Euro-Ticket valid and how does it work?</h4>
    <div class="accordion-content">
      <p>The 49-Euro-Ticket, officially known as the Germany Ticket, was launched on May 1, 2023. It is the successor to the successful 9-Euro-Ticket and aims to make public transportation more attractive. Where is it valid? Where can you buy it? What special regulations apply in the northern German states? How can you save with the Germany Ticket? Find answers to important questions below.</p>
    </div>
  </div>

  <div class="accordion-item">
    <h4 class="accordion-header" onclick="toggleAccordion(2)">2. Where can you buy the 49-Euro-Ticket?</h4>
    <div class="accordion-content">
      <p>The Germany Ticket is available through the apps or websites of transportation companies, the Deutsche Bahn, and customer centers. Various companies also offer their own apps, such as Mobility Inside with the "Dein Deutschlandticket" app, to purchase the subscription. Customers receive the ticket on their smartphones via the app or on a chip card, and for a transitional period, it is also available as a paper ticket. Existing subscribers should inquire with their transport association about automatic conversion.</p>
    </div>
  </div>

  <div class="accordion-item">
    <h4 class="accordion-header" onclick="toggleAccordion(3)">3. Is the 49-Euro-Ticket a subscription?</h4>
    <div class="accordion-content">
      <p>Yes, the Germany Ticket is only available as a subscription. However, the subscription can be canceled until the 10th of each month for the following month. The Germany Ticket can be paid either on a monthly basis or as an annual lump sum.</p>
    </div>
  </div>

  <div class="accordion-item">
    <h4 class="accordion-header" onclick="toggleAccordion(4)">4. How can you pay for the 49-Euro-Ticket?</h4>
    <div class="accordion-content">
      <p>The payment options for the Germany Ticket vary depending on the transport company. Since the ticket is designed as a subscription model, many transport companies have chosen direct debit as the payment method, allowing for easy recurring payments. Additionally, several transport companies also offer payment by credit or debit card, as well as PayPal. Cash payment at the service points of transport associations is also possible, but it requires payment for the entire year upfront.</p>
    </div>
  </div>

  <div class="accordion-item">
    <h4 class="accordion-header" onclick="toggleAccordion(5)">5. Can you travel throughout Germany with the 49-Euro-Ticket?</h4>
    <div class="accordion-content">
      <p>Yes, the 49-Euro-Ticket is valid nationwide for buses and trains in local and regional transport. For example, if you buy a ticket from the Hamburg Transport Association (HVV), you can also use regional trains in Bavaria or the subway in Berlin. The

 ticket is also accepted on the Hamburg harbor ferries. Excluded are ferries to the North Sea islands of Schleswig-Holstein and long-distance trains such as ICE, IC, or EC. The exception is the IC between Bremen and Norddeich, which operates as a local train on that section. It can be used with the Germany Ticket.</p>
    </div>
  </div>

  <div class="accordion-item">
    <h4 class="accordion-header" onclick="toggleAccordion(6)">6. What special regulations apply in Lower Saxony?</h4>
    <div class="accordion-content">
      <p>In addition to a Germany-wide ticket, there are also numerous state-specific tickets. In Lower Saxony, for example, the government plans to introduce a statewide ticket for 29 euros per month for students, apprentices, and voluntary service providers. However, it is expected to be available only in 2024. The Hanover region offers the annual ticket, previously available only to volunteers, for 365 euros starting from May 1, also to holders of job or social tickets. The Germany Ticket can also be used on the IC between Bremen and Norddeich, which operates as a local train on that route.</p>
    </div>
  </div>

  <div class="accordion-item">
    <h4 class="accordion-header" onclick="toggleAccordion(7)">7. How does it work in Hamburg?</h4>
    <div class="accordion-content">
      <p>Existing subscriptions at the Hamburg Transport Association (HVV) will be automatically adjusted once the new ticket starts. New customers can purchase the Germany Ticket since April 3 through the "HVV Switch App" and at all service points. Alternatively, the ticket is available as a chip card. Hamburg offers the Germany Ticket at a lower price for many individuals. For example, students pay only 19 euros for a monthly pass. Apprentices can use the nationwide public transport with the "Bonus Ticket" for 29 euros per month, and low-income individuals can use it for 19 euros. A new addition is the Climate Ticket. All employees of companies that choose it will receive either three free day tickets for the entire HVV network ("Climate Ticket S") or a nationwide monthly ticket ("Climate Ticket XL") for a maximum of 34.30 euros.</p>
    </div>
  </div>

  <div class="accordion-item">
    <h4 class="accordion-header" onclick="toggleAccordion(8)">8. What about Schleswig-Holstein?</h4>
    <div class="accordion-content">
      <p>In addition to the 49-Euro-Ticket, Schleswig-Holstein also offers additional options. Those who have a NAH.SH job ticket have two choices. They can continue using the ticket as before, with the discount and employer subsidy remaining. Alternatively, they can switch their job ticket to the Germany Ticket, which also grants employer subsidy and discount, making it available for as low as 16.55 euros. The Germany Ticket has sparked new discussions about the Bäderbahn, which connects the seaside resorts on the Lübeck Bay. It may continue to operate.</p>
    </div>
  </div>

  <div class="accordion-item">
    <h4 class="accordion-header" onclick="toggleAccordion(9)">9. What are the plans for Mecklenburg-Vorpommern?</h4>
    <div class="accordion-content">
      <p>Apprentices, vocational school students, voluntary service providers, and civil servant trainees in Mecklenburg-Vorpommern will receive the ticket for 29 euros. The state government also plans to

 introduce a discounted ticket for seniors in the summer or at the beginning of autumn.</p>
    </div>
  </div>

  <div class="accordion-item">
    <h4 class="accordion-header" onclick="toggleAccordion(10)">10. How can students with a semester ticket benefit from the Germany Ticket?</h4>
    <div class="accordion-content">
      <p>Students can also benefit from the Germany Ticket. Initially, there are transitional upgrade models where students can pay the difference between their semester ticket and the 49-Euro-Ticket to have nationwide local transport coverage. In Schleswig-Holstein, for example, students can upgrade their semester ticket to a Germany Ticket starting from July 1. Some states are planning cheaper offers specifically for students. A permanent nationwide model is being developed and will follow.</p>
    </div>
  </div>

  <div class="accordion-item">
    <h4 class="accordion-header" onclick="toggleAccordion(11)">11. Are additional persons or bicycles allowed to travel for free?</h4>
    <div class="accordion-content">
      <p>Unlike monthly tickets from many transport companies, the 49-Euro-Ticket generally does not allow you to take other people with you, except for children under the age of six who can travel for free. However, Hamburg has a regulation allowing apprentices with the "Bonus Ticket" and employees using the Premium Company Ticket to take additional persons. The conditions for taking bicycles and dogs depend on the respective transport association. In most local transport associations and regional trains, passengers are usually required to purchase a separate bicycle ticket.</p>
    </div>
  </div>

  <div class="accordion-item">
    <h4 class="accordion-header" onclick="toggleAccordion(12)">12. Is the 49-Euro-Ticket worth it?</h4>
    <div class="accordion-content">
      <p>The new Germany Ticket is more expensive than the previous 9-Euro-Ticket, but it is still likely to be worthwhile for many consumers. For example, someone who has an annual subscription for buses and trains in the city area of Hanover currently pays 59.80 euros per month. By using the 49-Euro-Ticket instead, they would save around 130 euros per year. With a subscription for the three tariff zones A, B, and C, the monthly cost is 97.80 euros, resulting in a savings of 585 euros per year with the new ticket.</p>
    </div>
  </div>

  <div class="accordion-item">
    <h4 class="accordion-header" onclick="toggleAccordion(13)">13. How long will the price remain at 49 euros?</h4>
    <div class="accordion-content">
      <p>That is still uncertain. The price of 49 euros is only the introductory price. The federal and state governments will jointly determine how financing will be ensured with the agreed subsidies and ticket revenue for the years after 2023. Therefore, future price increases are possible.</p>
    </div>
  </div>

  <div class="accordion-item">
    <h4 class="accordion-header" onclick="toggleAccordion(14)">14. How is the Germany Ticket financed?</h4>
    <div class="accordion-content">
      <p>The federal and state governments will each contribute to compensating the revenue losses incurred by the transport companies due to the lower ticket price. The federal government will provide 1.5 billion euros per year for the Germany Ticket from 2023 to 2025, and the states will cover the other half of the funding.</p>
    </div>
  </div>
</div>

<script>
  function toggleAccordion

(index) {
    const item = document.getElementsByClassName("accordion-item")[index - 1];
    const content = item.getElementsByClassName("accordion-content")[0];
    const header = item.getElementsByClassName("accordion-header")[0];

    content.style.display = content.style.display === "block" ? "none" : "block";
    header.classList.toggle("active");
  }
</script>
<body>
  
 <hr>
 
 <section class="container recent-posts">
 
 <aside class="eight columns">
 <h4>Latest Blog Entries</h4>
 
 <?php
$args = array(
    'posts_per_page' => 2, // Display the latest two posts
    'post_status' => 'publish', // Only retrieve published posts
);

$latest_posts = new WP_Query($args);

if ($latest_posts->have_posts()) {
    while ($latest_posts->have_posts()) {
        $latest_posts->the_post();
        ?>
        <article class="eight columns alpha">
            <div class="two columns alpha">
                <div class="featured-image img-wrapper">
                    <?php the_post_thumbnail('thumbnail', array('class' => 'scale-with-grid thumb-link', 'alt' => get_the_title())); ?>
                </div>
            </div>

            <div class="six columns omega">
                <header>
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <div class="meta">
                        <span class="post-date">by <strong><?php the_author(); ?></strong> on <strong><?php the_date('F j, Y'); ?></strong></span>
                        <span class="post-category">Category: <?php the_category(', '); ?></span>
                    </div>
                </header>
                <p><?php the_excerpt(); ?></p>
            </div>
        </article>
        <?php
    }
    wp_reset_postdata();
} else {
    echo 'No posts found.';
}
?>

 
 </aside>
 
 <aside class="eight columns">
 
 <blockquote class="testimonial">
 Germany 49€ is an incredible resource for travelers. Their detailed information about different places in Germany helped me plan my trip seamlessly. Highly recommended!
 <cite>Praveen</cite>
 </blockquote>
 <blockquote class="testimonial">
 As a frequent traveler, I rely on Germany 49€ for accurate and up-to-date tourist information. Their website is user-friendly, and their recommendations have never disappointed me. Great job!
 <cite>Bilal</cite>
 </blockquote>
 <blockquote class="testimonial">
 Germany 49€ has been my go-to source for exploring Germany's hidden gems. Their insider tips and local insights have made my trips unforgettable. Thank you!
  <cite>Emilio</cite>
 </blockquote>
 </aside>
 </section>
</div>
     
        </div>
        
    </div>
</div>
<!-- bis hier: index.php -->

<?php get_footer(); ?>
