<?php /* Template Name: Clearstream Home Page */ ?>

<?php get_header(); ?>

<?php get_template_part("template-parts/navigation"); ?>

<video id="home-page-video" width="100%" height="100%" autoplay="" loop="" muted="" style="object-fit: cover; object-position: center;" poster="https://i.vimeocdn.com/video/1190834157" data-keepplaying="">
	<!-- 1920x1080 -->
	<source type="video/mp4" src="https://localhost/wordpress/wp-content/uploads/2021/08/CS-Hero-SPAC.mp4?s=dab10383c2ec048b7ba1ef8b53a972749e85e3d1&amp;profile_id=175" media="all and (min-width: 1200px)">
	<!-- 1280x720 -->
	<source type="video/mp4" src="https://localhost/wordpress/wp-content/uploads/2021/08/CS-Hero-SPAC.mp4?s=dab10383c2ec048b7ba1ef8b53a972749e85e3d1&amp;profile_id=174" media="all and (min-width: 992px)">
	<!-- 960x540 -->
	<source type="video/mp4" src="https://localhost/wordpress/wp-content/uploads/2021/08/CS-Hero-SPAC.mp4?s=925024670655b5d6a36876cf2cba9416a7c8f896&amp;profile_id=165" media="all and (min-width: 768px)">
	<!-- 640x360 -->
	<source type="video/mp4" src="https://localhost/wordpress/wp-content/uploads/2021/08/CS-Hero-SPAC.mp4?s=925024670655b5d6a36876cf2cba9416a7c8f896&amp;profile_id=164" media="all and (max-width: 767px)">
	<!-- no browser support -->
	<img src="https://i.vimeocdn.com/video/1190834157" alt="Clearstream Welcome Video Thumbnail for No Support Browsers">
</video>

<?php get_template_part("template-parts/about-us"); ?>
