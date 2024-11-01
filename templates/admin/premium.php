<style>
    .landing {
        margin-right: 15px;
        border: 1px solid #d8d8d8;
        border-top: 0;
    }

    .section {
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
        background: #fafafa;
    }

    .section h1 {
        text-align: center;
        text-transform: uppercase;
        color: #445674;
        font-size: 35px;
        font-weight: 700;
        line-height: normal;
        display: inline-block;
        width: 100%;
        margin: 50px 0 0;
    }

    .section .section-title h2 {
        vertical-align: middle;
        padding: 0;
        line-height: normal;
        font-size: 24px;
        font-weight: 600;
        color: #445674;
        text-transform: none;
        background: none;
        border: none;
        text-align: center;
    }

    .section p {
        margin: 15px 0;
        font-size: 15px;
        line-height: 28px;
        font-weight: 300;
        text-align: center;
    }

    .section ul li {
        margin-bottom: 4px;
    }

    .section.section-cta {
        background: #fff;
    }

    .cta-container,
    .landing-container {
        display: flex;
        max-width: 1200px;
        margin-left: auto;
        margin-right: auto;
        padding: 30px 0;
        align-items: center;
    }

    .landing-container-wide {
        flex-direction: column;
    }

    .cta-container {
        display: block;
        max-width: 860px;
    }

    .landing-container:after {
        display: block;
        clear: both;
        content: '';
    }

    .landing-container .col-1,
    .landing-container .col-2 {
        float: left;
        box-sizing: border-box;
        padding: 0 15px;
    }

    .landing-container .col-1 {
        width: 58.33333333%;
    }

    .landing-container .col-2 {
        width: 41.66666667%;
    }

    .landing-container .col-1 img,
    .landing-container .col-2 img,
    .landing-container .col-wide img {
        max-width: 100%;
    }

    .premium-cta {
        color: #4b4b4b;
        border-radius: 10px;
        padding: 30px 25px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        width: 100%;
        box-sizing: border-box;
    }

    .premium-cta:after {
        content: '';
        display: block;
        clear: both;
    }

    .premium-cta p {
        margin: 10px 0;
        line-height: 1.5em;
        display: inline-block;
        text-align: left;
    }

    .premium-cta a.button {
        border-radius: 25px;
        float: right;
        background: #e09004;
        box-shadow: none;
        outline: none;
        color: #fff;
        position: relative;
        padding: 10px 50px 8px;
        text-align: center;
        text-transform: uppercase;
        font-weight: 600;
        font-size: 20px;
        line-height: 25px;
        border: none;
    }

    .premium-cta a.button:hover,
    .premium-cta a.button:active,
    .wp-core-ui .yith-plugin-ui .premium-cta a.button:focus {
        color: #fff;
        background: #d28704;
        box-shadow: none;
        outline: none;
    }

    .premium-cta .highlight {
        text-transform: uppercase;
        background: none;
        font-weight: 500;
    }


    @media (max-width: 768px) {
        .landing-container{
            display: block;
            padding: 50px 0 30px;
        }

        .landing-container .col-1,
        .landing-container .col-2{
            float: none;
            width: 100%;
        }

        .premium-cta{
            display: block;
            text-align: center;
        }

        .premium-cta p{
            text-align: center;
            display: block;
            margin-bottom: 30px;
        }
        .premium-cta a.button{
            float: none;
            display: inline-block;
        }
    }

    @media (max-width: 480px) {
        .wrap {
            margin-right: 0;
        }

        .section {
            margin: 0;
        }

        .landing-container .col-1,
        .landing-container .col-2 {
            width: 100%;
            padding: 0 15px;
        }

        .section-odd .col-1 {
            float: left;
            margin-right: -100%;
        }

        .section-odd .col-2 {
            float: right;
            margin-top: 65%;
        }
    }

    @media (max-width: 320px) {
        .premium-cta a.button {
            padding: 9px 20px 9px 70px;
        }

        .section .section-title img {
            display: none;
        }
    }
</style>
<div class="landing">
	<div class="section section-cta section-odd">
		<div class="landing-container">
			<div class="premium-cta">
				<p>
					<?php echo wp_kses_post( sprintf( __( 'Upgrade to %1$spremium version%2$s of %1$sYITH WooCommerce Points and Rewards%2$s to benefit from all features!', 'yith-woocommerce-points-and-rewards' ), '<span class="highlight">', '</span>' ) ); ?>
				</p>
				<a href="<?php echo esc_url( $this->get_premium_landing_uri() ); ?>" target="_blank"
					class="premium-cta-button button btn">
					<?php esc_html_e( 'UPGRADE', 'yith-woocommerce-points-and-rewards' ); ?>
				</a>
			</div>
		</div>
	</div>
	<div class="one section section-even clear">
		<h1><?php esc_html_e( 'Premium Features', 'yith-woocommerce-points-and-rewards' ); ?></h1>
		<div class="landing-container">
			<div class="col-1">
				<img src="<?php echo esc_url( YITH_YWPAR_ASSETS_URL ); ?>/images/001-1.webp" alt="Feature 01"/>
			</div>
			<div class="col-2">
				<div class="section-title">
					<h2><?php esc_html_e( 'Loyalize your customers with points-based loyalty programs and instant rewards', 'yith-woocommerce-points-and-rewards' ); ?></h2>
				</div>
				<p>
					<?php  esc_html_e( 'The collection of points is a very powerful tool to involve and loyalize customers and allow them to save money or receive a reward or gift after reaching specific point thresholds.', 'yith-woocommerce-points-and-rewards' ); ?>
				</p>
				<p>
					<?php  esc_html_e( 'In the landscape of marketing strategies, collector schemes are a milestone in loyalty activities. Thanks to YITH WooCommerce Points and Rewards, you will be able to encourage users to register to your shop in order to earn points, as well as assign points on every purchase they make, on specific spent thresholds, on their birthday, on every review published on your products, etc.', 'yith-woocommerce-points-and-rewards' ); ?>
				</p>
				<p>
					<?php  esc_html_e( 'Points redeem automatically through a discount coupon applied to the user’s cart. Easy to set up and manage, our plugin is the definitive solution to build a powerful loyalty program for your customers in just a few minutes.', 'yith-woocommerce-points-and-rewards' ); ?>
				</p>
			</div>
		</div>
	</div>
	<div class="two section section-odd clear">
		<div class="landing-container">
			<div class="col-2">
				<div class="section-title">
					<h2><?php esc_html_e( 'Configure a global rule for points and set different rules by specific products or categories', 'yith-woocommerce-points-and-rewards' ); ?></h2>
				</div>
				<p>
					<?php  esc_html_e( 'Create a global rule to define the number of points to be assigned based on the product value and, if needed, assign a different number to specific products or categories (e.g. you can assign a higher number of points on the purchase of product X only and no points at all to products belonging to category Y).', 'yith-woocommerce-points-and-rewards' ); ?>
				</p>
			</div>
			<div class="col-1">
				<img src="<?php echo esc_url( YITH_YWPAR_ASSETS_URL ); ?>/images/002-1.webp" alt="feature 02"/>
			</div>
		</div>
	</div>
	<div class="three section section-even clear">
		<div class="landing-container">
			<div class="col-1">
				<img src="<?php echo esc_url( YITH_YWPAR_ASSETS_URL ); ?>/images/003-1.webp" alt="Feature 03"/>
			</div>
			<div class="col-2">
				<div class="section-title">
					<h2><?php esc_html_e( 'Enable point earning for all the users or only for those registered with a specific role', 'yith-woocommerce-points-and-rewards' ); ?></h2>
				</div>
				<p>
					<?php  esc_html_e( 'Choose whether to enable point earning for all the users purchasing on your shop or to make it available only to users with a specific role.', 'yith-woocommerce-points-and-rewards' ); ?>
				</p>
			</div>
		</div>
	</div>
	<div class="four section section-odd clear">
		<div class="landing-container">
			<div class="col-2">
				<div class="section-title">
					<h2><?php esc_html_e( 'Assign extra points based on the achievement of some goals or on certain conditions such as the users', 'yith-woocommerce-points-and-rewards' ); ?></h2>
				</div>
				<p>
					<?php  esc_html_e( 'Choose whether to enable point earning for all the users purchasing on your shop or to make it available only to users with a specific role.Reward your users by assigning extra points when reaching a goal (e.g. extra points after placing 100 orders, after spending a total amount of €1000, when earning 500 points) or on specific conditions (e.g. 10 points on their birthday, 5 points for every review posted, etc.).', 'yith-woocommerce-points-and-rewards' ); ?>
				</p>
			</div>
			<div class="col-1">
				<img src="<?php echo esc_url( YITH_YWPAR_ASSETS_URL ); ?>/images/004-1.webp" alt="Feature 04"/>
			</div>
		</div>
	</div>
	<div class="five section section-even clear">
		<div class="landing-container">
			<div class="col-1">
				<img src="<?php echo esc_url( YITH_YWPAR_ASSETS_URL ); ?>/images/005-1.jpg" alt="Feature 05"/>
			</div>
			<div class="col-2">
				<div class="section-title">
					<h2><?php esc_html_e( 'Customize the messages shown on the product, loop and cart pages', 'yith-woocommerce-points-and-rewards' ); ?></h2>
				</div>
				<p>
					<?php  esc_html_e( 'Insert a custom text, upload an icon or an image, change the text and background colors to enhance the message shown to users related to points they\'ll earn with the purchase of the product.', 'yith-woocommerce-points-and-rewards' ); ?>
				</p>
			</div>
		</div>
	</div>

	<div class="six section section-odd clear">
		<div class="landing-container">
			<div class="col-2">
				<div class="section-title">
					<h2><?php esc_html_e( 'Choose whether to offer a fixed or a percentage discount when redeeming points', 'yith-woocommerce-points-and-rewards' ); ?></h2>
				</div>
				<p>
					<?php  esc_html_e( 'Points earned by users can be redeemed as a discount that will apply to their cart. Choose whether to apply the discount as a fixed amount (e.g. €50) or as a percentage (20% on the cart value).', 'yith-woocommerce-points-and-rewards' ); ?>
				</p>
			</div>
			<div class="col-1">
				<img src="<?php echo esc_url( YITH_YWPAR_ASSETS_URL ); ?>/images/006-1.webp" alt="Feature 06"/>
			</div>
		</div>
	</div>
	<div class="seven section section-even clear">
		<div class="landing-container">
			<div class="col-1">
				<img src="<?php echo esc_url( YITH_YWPAR_ASSETS_URL ); ?>/images/007-1.webp" alt="Feature 07"/>
			</div>
			<div class="col-2">
				<div class="section-title">
					<h2><?php esc_html_e( 'Set different conversion rates to earn and redeem points based on user roles', 'yith-woocommerce-points-and-rewards' ); ?></h2>
				</div>
				<p>
					<?php  esc_html_e( 'Offer a higher or lower discount to users belonging to a specific role by creating advanced rules for each user role available in your store.', 'yith-woocommerce-points-and-rewards' ); ?>
				</p>
			</div>
		</div>
	</div>
	<div class="eight section section-odd clear">
		<div class="landing-container">
			<div class="col-2">
				<div class="section-title">
					<h2><?php esc_html_e( 'Offer free shipping to users who place an order and redeem points earned', 'yith-woocommerce-points-and-rewards' ); ?></h2>
				</div>
				<p>
					<?php  esc_html_e( 'Choose whether to offer free shipping to users who place an order and use collected points to get a discount. Free shipping can be a good incentive to loyalize customers and encourage them to purchase!', 'yith-woocommerce-points-and-rewards' ); ?>
				</p>
			</div>
			<div class="col-1">
				<img src="<?php echo esc_url( YITH_YWPAR_ASSETS_URL ); ?>/images/008-1.webp" alt="Feature 08"/>
			</div>
		</div>
	</div>
	<div class="nine section section-even clear">
		<div class="landing-container">
			<div class="col-1">
				<img src="<?php echo esc_url( YITH_YWPAR_ASSETS_URL ); ?>/images/009-1.webp" alt="Feature 09"/>
			</div>
			<div class="col-2">
				<div class="section-title">
					<h2><?php esc_html_e( 'Set conditions to redeem points based on the minimum cart value or set a maximum discount they can get', 'yith-woocommerce-points-and-rewards' ); ?></h2>
				</div>
				<p>
					<?php  esc_html_e( 'Based on your needs, you can set conditions to let users redeem points: for example, you can set a minimum cart amount, a maximum discount on the single product, or on the cart when purchasing with a coupon.', 'yith-woocommerce-points-and-rewards' ); ?>
				</p>
			</div>
		</div>
	</div>
	<div class="ten section section-odd clear">
		<div class="landing-container">
			<div class="col-2">
				<div class="section-title">
					<h2><?php esc_html_e( 'Let users choose how many points they want to redeem and the discount to apply on the cart page', 'yith-woocommerce-points-and-rewards' ); ?></h2>
				</div>
				<p>
					<?php  esc_html_e( 'Improve the user experience by offering clear and immediate feedback about the value of points redeemed in the cart. Let users choose and insert the number of points to redeem and know the related discount in real-time.', 'yith-woocommerce-points-and-rewards' ); ?>
				</p>
			</div>
			<div class="col-1">
				<img src="<?php echo esc_url( YITH_YWPAR_ASSETS_URL ); ?>/images/010.webp" alt="Feature 10"/>
			</div>
		</div>
	</div>
	<div class="eleven section section-even clear">
		<div class="landing-container">
			<div class="col-1">
				<img src="<?php echo esc_url( YITH_YWPAR_ASSETS_URL ); ?>/images/011.webp" alt="Feature 11"/>
			</div>
			<div class="col-2">
				<div class="section-title">
					<h2><?php esc_html_e( 'A dashboard to easily track and manually edit the users’ points', 'yith-woocommerce-points-and-rewards' ); ?></h2>
				</div>
				<p>
					<?php  esc_html_e( 'Track users and the points earned and edit their profile manually by adding, removing, resetting points, or banning users in case of anomalies.', 'yith-woocommerce-points-and-rewards' ); ?>
				</p>
			</div>
		</div>
	</div>
	<div class="section section-odd clear">
		<div class="landing-container">

			<div class="col-2">
				<div class="section-title">
					<h2><?php esc_html_e( 'Manage points linked to canceled or refunded orders', 'yith-woocommerce-points-and-rewards' ); ?></h2>
				</div>
				<p>
					<?php  esc_html_e( 'You can choose to remove earned points if the order is canceled or refunded and to reassign points redeemed with an order that was refunded.', 'yith-woocommerce-points-and-rewards' ); ?>
				</p>
			</div>
			<div class="col-1">
				<img src="<?php echo esc_url( YITH_YWPAR_ASSETS_URL ); ?>/images/012-1.webp" alt="Feature 12"/>
			</div>
		</div>
	</div>
	<div class="eleven section section-even clear">
		<div class="landing-container">
			<div class="col-1">
				<img src="<?php echo esc_url( YITH_YWPAR_ASSETS_URL ); ?>/images/013.webp" alt="Feature 13"/>
			</div>
			<div class="col-2">
				<div class="section-title">
					<h2><?php esc_html_e( 'Quick import or export points from or to a CSV file', 'yith-woocommerce-points-and-rewards' ); ?></h2>
				</div>
				<p>
					<?php  esc_html_e( 'You can now import your customer’s points from another solution without fearing they will loose their rewards using the CSV import feature. The same functionality would be useful if you want to export the points to a spreadsheet and re-import them after updating the totals.', 'yith-woocommerce-points-and-rewards' ); ?>
				</p>
			</div>
		</div>
	</div>
	<div class="section section-odd clear">
		<div class="landing-container">

			<div class="col-2">
				<div class="section-title">
					<h2><?php esc_html_e( 'Offer users a reserved area where they can monitor collected points and their progress', 'yith-woocommerce-points-and-rewards' ); ?></h2>
				</div>
				<p>
					<?php  esc_html_e( 'Users can easily keep track of the points earned, orders placed and actions related to their points from their personal profile.', 'yith-woocommerce-points-and-rewards' ); ?>
				</p>
			</div>
			<div class="col-1">
				<img src="<?php echo esc_url( YITH_YWPAR_ASSETS_URL ); ?>/images/014.webp" alt="Feature 14"/>
			</div>
		</div>
	</div>
	<div class="eleven section section-even clear">
		<div class="landing-container">
			<div class="col-1">
				<img src="<?php echo esc_url( YITH_YWPAR_ASSETS_URL ); ?>/images/015.webp" alt="Feature 15"/>
			</div>
			<div class="col-2">
				<div class="section-title">
					<h2><?php esc_html_e( 'Send notifications to users to encourage them to place an order before points expire', 'yith-woocommerce-points-and-rewards' ); ?></h2>
				</div>
				<p>
					<?php  esc_html_e( 'Push your customers to go back to your shop to purchase again without losing points they have collected so far: a powerful and easy strategy to have returning customers and boost your sales.', 'yith-woocommerce-points-and-rewards' ); ?>
				</p>
			</div>
		</div>
	</div>
	<div class="section section-cta section-odd">
		<div class="landing-container">
			<div class="premium-cta">
				<p>
					<?php echo sprintf( esc_html( __( 'Upgrade to %1$spremium version%2$s of %1$sYITH WooCommerce Points and Rewards%2$s to benefit from all features!', 'yith-woocommerce-points-and-rewards' ) ), '<span class="highlight">', '</span>' ); ?>
				</p>
				<a href="<?php echo esc_url( $this->get_premium_landing_uri() ); ?>" target="_blank"
					class="premium-cta-button button btn">
					<?php esc_html_e( 'UPGRADE', 'yith-woocommerce-points-and-rewards' ); ?>
				</a>
			</div>
		</div>
	</div>
</div>
