<?php

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();

$container = get_theme_mod('understrap_container_type');

?>

<?php
$json = file_get_contents('https://wtksu92k7b.execute-api.us-east-1.amazonaws.com/production/statistics/');
$obj = json_decode($json);
$countOfDocuments = $obj->documents->count;
?>

<div class="wrapper">
	<div class="features-wrapper parallax">
	<div class="container features">
		<div id="inner-container" class="inner-container">
			<div class="row">
				<div class="col-lg-4">
					<div class="logo">

						<div class="title obps fittext-obps">
							<img
								style="max-width: 50px;margin-bottom: 30px;"
								src="/wp-content/themes/understrap/images/obp-logo-without-text.png" />cean Best Practices System
						</div>
						<div class="title our-vision">Our Vision</div>

						<div class="map">
							<div class="text-container">
								<div class="text">
									To have agreed and broadly adopted methods across ocean research, operations and application.</div>
								<br/>
								<!-- <div class="title2"><?php echo $countOfDocuments; ?></div> -->
							</div>
						</div>
						<!-- <div class="text2">
							Best practices in the Repository
						</div> -->
					</div>
				</div>
				<div class="col-lg-8">
					<div class="row feature-row">
						<div class="col-lg-4">
							<div id="feature-1" class="feature">
								<img class="image" src="/wp-content/themes/understrap/images/what-is-a-best-practice.png" />
								<div class="title">What is a Best Practice?</div>
								<div>
									<div class="text">A best practice is a methodology that has repeatedly produced superior results relative to other methodologies with the same objective; to be fully elevated to a best practice, a promising method will have been adopted and employed by multiple organizations.</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="feature">
								<img class="image" src="/wp-content/themes/understrap/images/what-is-the-obps.png" />
								<div class="title">What is the OBPS?</div>
								<div>
									<div class="text">The OBPS is a global, sustained system comprising technological solutions and community approaches to enhance management of methods as well as support the development of ocean best practices.</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
                            <div class="feature feature-search">
                                <a href="https://search.oceanbestpractices.org" target="_blank">
                                    <img class="image" src="/wp-content/themes/understrap/images/search-for-a-best-practice.png" />
                                    <div class="title">Search for a Best Practice</div>
                                </a>
                                <a href="https://repository.oceanbestpractices.org/password-login" target="_blank">
                                    <div class="title">Submit a Best Practice</div>
                                </a>
                                <div class="text2"><?php echo $countOfDocuments; ?></div>
                                <div class="text"> Best Practices in the Repository</div>
                            </div>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
</div>

<div class="wrapper">
	<div id="parallax" class="container parallax">
	</div>
</div>

<div class="wrapper">
	<div id="news"></div>
	<div class="news-wrapper parallax">

    <div class="container news">

	<div class="inner-container">
			<div class="row">
				<div class="col-lg-4">
					<div class="our-news">News</div>
					<button class="btn-round btn-more-news"><a href="/news">See more news</a></button>
				</div>
				<div class="col-lg-8">
					<?php
$the_query = new WP_Query(array(
    'showposts' => 6,
    'post_type' => 'post',
));

// $posts_array = array_reverse($the_query->posts);
// $the_query->posts = $posts_array;
?>

					<?php if ($the_query->have_posts()): $count = 0;while ($the_query->have_posts()): $the_query->the_post();
        $count++;?>
								<?php if ($count == 1 || $count == 4): ?>
								<div class="row" id="<?php echo "row-" . (floor($count / 3)); ?>">
								<?php endif;?>

							<?php $feat_image = get_the_post_thumbnail($post->ID, 'latest-news-small');?>

							<?php
    $class = "";
    if ($count == 1 || $count == 4) {
        $class = "left-column-news";
    } else if ($count == 3 || $count == 6) {
    $class = "right-column-news";
} else {
    $class = "middle-column-news";
}
?>
						<div class="col-md news-column-container <?php echo $class; ?>">
						<div class="news-column-content">

							<?php if ($feat_image): ?>
								<div class='news-image'>
									<a href='<?php the_permalink()?>'><?php echo $feat_image; ?></a>
								</div>
								<div class='news-content'>
									<div class='news-title'>
										<a href='<?php the_permalink()?>'><?php echo wp_trim_words(get_the_title(), 6); ?></a>
									</div>

									<div class='news-description'>
										<?php echo do_shortcode(wp_trim_words(str_replace("", "", get_the_content()), 15)); ?>
									</div>

									<div class='news-articl-more'><a href='<?php the_permalink()?>'>Read more</a></div>

									<!-- <div class='share-link'>
										<a href="#">SHARE</a>
									</div> -->
								</div>
							<?php else: ?>
								<div class='news-content'>
									<div class='news-title'>
										<a href='<?php the_permalink()?>'><?php echo wp_trim_words(get_the_title(), 8); ?></a>
									</div>

									<div class='news-description'>
										<?php echo do_shortcode(wp_trim_words(str_replace("", "", get_the_content()), 35)); ?>
									</div>

								<div class='news-articl-more'><a href='<?php the_permalink()?>'>Read more</a></div>

								<!-- <div class='share-link'>
									<a href="#">SHARE</a>
								</div> -->
								</div>

							<?php endif;?>


						</div>

					</div>

					<?php if ($count == 3 || $count == 6): ?>
					</div>
					<?php endif;?>

					<?php endwhile;?>

					<?php wp_reset_postdata();?>
					<?php endif;?>


				</div>
			</div>
		</div>

	</div>
    </div>
</div>

<?php
function wrap_event($scope, $offset, $limit)
{
    echo do_shortcode("
	[events_list scope='$scope' order='ASC' limit=$limit offset=$offset ]
		<div class='events-row col-md-4'>
			<div class='event-content'>
				<div class='event-title-container'>
					<div class='event-title'>
						<a href='#_EVENTURL'>#_EVENTNAME</a>
					</div>

					<div class='event-date'>
					#F #d-#@F #@d, #Y
					</div>

					<div class='event-location'>
					#_LOCATIONNAME
					</div>
				</div>

				<div class='event-description'>
					#_EVENTEXCERPT{15}
				</div>
			</div>
		</div>
	[/events_list]
");
}

?>

<div class="wrapper">
	<div id="events"></div>
	<div class="events-wrapper parallax">

    <div class="container events">

		<div class="inner-container">
			<div class="row">
				<div class="col-lg-4">
					<div class="our-events">Events</div>
					<button class="btn-round btn-more-events"><a href="/events">See more events</a></button>
				</div>
				<div class="col-lg-8">
					<?php $events_exist = strlen(trim(do_shortcode("
								[events_list scope='future' order='ASC' limit=6 offset=0 ]
								<div><a href='#_EVENTURL'>#j#S #F #Y: #_EVENTNAME</a></div>
								[/events_list]")));
echo "<!-- $events_exist -->";
?>

					<?php if ($events_exist > 0): ?>
						<div class="row" id="row-0">
							<?php wrap_event('future', 0, 3);?>
						</div>

						<div class="row" id="row-1">
							<?php wrap_event('future', 3, 3);?>
						</div>

					<?php else: ?>

					<div class="row" id="row-0">
						<?php wrap_event('all', 0, 3);?>
					</div>

					<div class="row" id="row-1">
						<?php wrap_event('all', 3, 3);?>
					</div>

					<?php endif;?>
				</div>

				</div>
			</div>
		</div>
    </div>
	</div>
</div>

<!-- <div class="wrapper">
    <div class="container feedback">

		<div class="inner-container">
			<div class="row">
				<div class="col-lg-4">
					<div class="feedback-title">Feedback</div>
				</div>
				<div class="col-lg-8">
					<div class="feedback-text">
						We welcom your feedback and hearing about your practice and procedure. Please get in touch with us by <a href="/contact">Contacting Us</a> via the website.
					</div>
				</div>
			</div>
		</div>

	</div>
</div> -->

<div class="wrapper">
    <div class="container brands">

		<div class="inner-container">
			<div>
				<img class="ioc" src="/wp-content/themes/understrap/images/UNESCO-IOC.jpg" />
				<img class="iode" src="/wp-content/themes/understrap/images/iode.png" />
				<img class="goos" src="/wp-content/themes/understrap/images/goos.png" />
			</div>
		</div>

	</div>
</div>


<?php get_footer();?>
