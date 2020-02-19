<?php
/**
 * Template Name: Airports
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Elegrad_Mobile
 */
get_header();
?>
<div class="section full mt-2">
    <div class="section-title">Αεροδρόμια</div>
    <div class="wide-block pt-2 pb-2">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="section-title bg-primary text-light">Αφίξεις - Σκύρος (SKU)</div>
				<ul mv-app="flights1" mv-storage="https://arkdrop-gson.herokuapp.com/api?id=1cdE10U_OtamemWrctb5juQ0lZJXYkcr_Y38ANBA14uI&sheet=2&columns=false" mv-bar="none" class="listview">
					<li property="rows" mv-multiple>
						<div>
							<header property="flight">...</header>
							<span property="origin">...</span>
						</div>
						<div class='text-right'>
							<header property="carrier">...</header>
							<span property="arrival">...</span>
						</div>
						<span property="status" class="badge badge-secondary">...</span>
					</li>
				</ul>
			</div>
			<div class="col-12 col-md-6">
				<div class="section-title bg-primary text-light">Αναχωρήσεις - Σκύρος (SKU)</div>
				<ul mv-app="flights2" mv-storage="https://arkdrop-gson.herokuapp.com/api?id=1cdE10U_OtamemWrctb5juQ0lZJXYkcr_Y38ANBA14uI&sheet=3&columns=false" mv-bar="none" class="listview">
					<li property="rows" mv-multiple>
						<div>
							<header property="flight">...</header>
							<span property="destination">...</span>
						</div>
						<div class='text-right'>
							<header property="carrier">...</header>
							<span property="departure">...</span>
						</div>
						<span property="status" class="badge badge-secondary">...</span>
					</li>
				</ul>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="section-title bg-primary mt-2 text-light">Αφίξεις - Αθήνα (ATH)</div>
				<ul mv-app="flights3" mv-storage="https://arkdrop-gson.herokuapp.com/api?id=1kh3DNx0LvfdGDWB_a4ghudmKKQhCdIE018DVuAuFHl8&sheet=2&columns=false" mv-bar="none" class="listview">
					<li property="rows" mv-multiple>
						<div>
							<header property="flight">...</header>
							<span property="origin">...</span>
						</div>
						<div class='text-right'>
							<header property="carrier">...</header>
							<span property="arrival">...</span>
						</div>
						<span property="status" class="badge badge-secondary">...</span>
					</li>
				</ul>
			</div>
			<div class="col-12 col-md-6">
				<div class="section-title mt-2 bg-primary mt-2 text-light">Αναχωρήσεις - Αθήνα (ATH)</div>
				<ul mv-app="flights4" mv-storage="https://arkdrop-gson.herokuapp.com/api?id=1kh3DNx0LvfdGDWB_a4ghudmKKQhCdIE018DVuAuFHl8&sheet=3&columns=false" mv-bar="none" class="listview">
					<li property="rows" mv-multiple>
						<div>
							<header property="flight">...</header>
							<span property="destination">...</span>
						</div>
						<div class='text-right'>
							<header property="carrier">...</header>
							<span property="departure">...</span>
						</div>
						<span property="status" class="badge badge-secondary">...</span>
					</li>
				</ul>
            </div>
        </div>
    </div>
</div>


<?php
get_footer();