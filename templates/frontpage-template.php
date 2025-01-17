<?php
/*
 * Template Name: Front Page
 * Template Post Type: post, page, whatever
 */

get_header();
?>

<div class="relative bg-gray-50 overflow-hidden">
  <div class="hidden lg:block lg:absolute lg:inset-0" aria-hidden="true">
	<svg class="absolute top-0 left-1/2 transform translate-x-64 -translate-y-8" width="640" height="784" fill="none" viewBox="0 0 640 784">
	  <defs>
		<pattern id="9ebea6f4-a1f5-4d96-8c4e-4c2abf658047" x="118" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
		  <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
		</pattern>
	  </defs>
	  <rect y="72" width="640" height="640" class="text-gray-50" fill="currentColor" />
	  <rect x="118" width="404" height="784" fill="url(#9ebea6f4-a1f5-4d96-8c4e-4c2abf658047)" />
	</svg>
  </div>

  <div class="relative pt-6 pb-16 sm:pb-24 lg:pb-32">
	  <div x-data="Components.popover({ open: false, focus: true })" x-init="init()" @keydown.escape="onEscape" @close-popover-group.window="onClosePopoverGroup">
	  <nav class="relative max-w-7xl mx-auto flex items-center justify-between px-4 sm:px-6" aria-label="Global">
		<div class="flex items-center flex-1">
		  <div class="flex items-center justify-between w-full md:w-auto">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
			  <span class="sr-only">PersonalBridge</span>
			  <img class="h-8 w-auto sm:h-10" src="https://personalbridge.sgp1.digitaloceanspaces.com/fulfillments/logo.png" alt="">
			</a>
			<div class="-mr-2 flex items-center md:hidden">
			  <button type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" @click="toggle" @mousedown="if (open) $event.preventDefault()" aria-expanded="false" :aria-expanded="open.toString()">
				<span class="sr-only">Open main menu</span>
				<!-- Heroicon name: outline/menu -->
				<svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
				  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
				</svg>
			  </button>
			</div>
		  </div>
		  <div class="hidden md:block md:ml-10 md:space-x-10">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="font-medium text-gray-900 hover:text-gray-900">Home</a>

			<a href="#features" class="font-medium text-gray-500 hover:text-gray-900">Features</a>

			<a href="https://personalbridge.myshopify.com/" target="_blank" class="font-medium text-gray-500 hover:text-gray-900">Demos</a>

			<a href="#pricing" class="font-medium text-gray-500 hover:text-gray-900">Pricing</a>

			<a href="#partners" class="font-medium text-gray-500 hover:text-gray-900">Partners</a>
			<a href="#team" class="font-medium text-gray-500 hover:text-gray-900">Team</a>

			<a href="https://support.personalbridge.com" target="_blank" class="font-medium text-gray-500 hover:text-gray-900">Helps</a>
		  </div>
		</div>
		<div class="hidden md:block text-right">
		  <span class="inline-flex rounded-md shadow-md ring-1 ring-black ring-opacity-5">
			<a href="https://dashboard.personalbridge.com" target="_blank" class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md text-indigo-600 bg-white hover:bg-gray-50">
			Get Started
			</a>
		  </span>
		</div>
	  </nav>

	  <div x-show="open" x-transition:enter="duration-150 ease-out" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="duration-100 ease-in" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" x-description="Mobile menu, show/hide based on menu open state." class="absolute top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden" x-ref="panel" @click.away="open = false" style="display: none;">
		<div class="rounded-lg shadow-md bg-white ring-1 ring-black ring-opacity-5 overflow-hidden">
		  <div class="px-5 pt-4 flex items-center justify-between">
			<div>
			  <img class="h-8 w-auto" src="https://personalbridge.sgp1.digitaloceanspaces.com/fulfillments/logo.png" alt="">
			</div>
			<div class="-mr-2">
			  <button type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" @click="toggle">
				<span class="sr-only">Close main menu</span>
				<!-- Heroicon name: outline/x -->
				<svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
				  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
				</svg>
			  </button>
			</div>
		  </div>
		  <div class="px-2 pt-2 pb-3 space-y-1">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Home</a>

			<a href="#features" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Features</a>

			<a href="https://personalbridge.myshopify.com/" target="_blank" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Demos</a>

			<a href="#pricing" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Pricing</a>
			<a href="#partners" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Partners</a>
			<a href="#team" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Team</a>

			<a href="https://support.personalbridge.com" target="_blank" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Helps</a>
		  </div>
		  <a href="https://dashboard.personalbridge.com" target="_blank" class="block w-full px-5 py-3 text-center font-medium text-indigo-600 bg-gray-50 hover:bg-gray-100">
		  Get Started
		  </a>
		</div>
	  </div>
	</div>

	<main class="mt-16 mx-auto max-w-7xl px-4 sm:mt-24 sm:px-6 lg:mt-32 lg:px-8">
	  <div class="lg:grid lg:grid-cols-12 lg:gap-8">
		<div class="sm:text-center md:max-w-2xl md:mx-auto lg:col-span-6 lg:text-left">
		  <h1>
			<span class="block text-sm font-semibold uppercase tracking-wide text-gray-500 sm:text-base lg:text-sm xl:text-base">PersonalBridge</span>
			<span class="mt-1 block text-4xl tracking-tight font-extrabold sm:text-5xl xl:text-5xl">
			  <span class="block text-gray-900">Design, sell, and print </span>
			  <span class="block text-indigo-600">personal products faster</span>
			</span>
		  </h1>
		  <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">
		  Making better ecommerce user experience with the best tools for personalized products.
		  </p>
		  <?php get_template_part( 'templates/partials/install', 'app' ); ?>
		  
		</div>
		<div class="mt-12 relative sm:max-w-lg sm:mx-auto lg:mt-0 lg:max-w-none lg:mx-0 lg:col-span-6 lg:flex lg:items-center">
		  <div class="relative mx-auto w-full rounded-lg shadow-lg featured-media">
				<!--<div class="embed-youtube"><iframe width="592" height="300" src="https://www.youtube.com/embed/eud-ubKwlqE?autoplay=1" allow="autoplay" frameborder="0" allowfullscreen></iframe></div> -->
				<video width="100%" height="100%" loop="" muted="" autoplay="" playsinline="" controls="">
					<source src="https://personalbridge.sgp1.digitaloceanspaces.com/pb-video-demo-hd.mp4" type="video/mp4">
					Your browser does not support the video tag.
				</video>
		  </div>
		</div>
	  </div>
	</main>
  </div>
</div>

<!-- Features -->
<!-- Mobile -->
<div id="features" class="bg-gray-100">
	<?php
		$feature_label = 'Customers customize — And buy! Personalized products from your store';
		$feature_desc  = 'Let your customers customize any product and visualize how they’ll look before checking out. PersonalBridge automates your work by integrating with your favorite fulfillment services: CustomCat, Gearment, Dreamship, ScalablePress, Merchize.';

		$backend_features = array(
			array(
				'label' => 'Upload cliparts from folder',
				'desc'  => 'Upload and manage settings of all clipart images easily and quickly with uploading nested folders.',
				'image' => 'https://personalbridge.sgp1.digitaloceanspaces.com/upload-cliaprt-by-folder.jpg',
			),
			array(
				'label' => 'Create mockup from PSD',
				'desc'  => 'Create your own mockup quickly by importing PSD files. Easily edit and display artwork on product mockup in your own style.',
				'image' => 'https://personalbridge.sgp1.digitaloceanspaces.com/create-mockup.png',
			),
			array(
				'label' => 'Artwork Templates from PSD',
				'desc'  => 'Powerful artwork editor to help you create design and manage personalization settings. Re-use artwork for multiple POD products and campaigns. Automatically create templates based on PSD file structure.',
				'image' => 'https://personalbridge.sgp1.digitaloceanspaces.com/artwork.png',
			),
			array(
				'label' => 'Auto fulfill with fulfillment services',
				'desc'  => 'Automate fulfillment with your favorite fulfillments. Automatic create file design file base on the selection of your customer. You can download file print or automatically send orders to your fulfillment service.',
				'image' => 'https://personalbridge.sgp1.digitaloceanspaces.com/order-auto-fulfill.png',
			),
			array(
				'label' => 'Create your own product catalog',
				'desc'  => 'Import product catalog from your favorite provider with just one click or add product catalog from any provider manually with no limitation.',
				'image' => 'https://personalbridge.sgp1.digitaloceanspaces.com/create-catalog.png',
			),
		);

		$frontend_features = array(
			array(
				'label' => 'Customizations',
				'desc'  => 'Customers changes clipart, enter text or can upload their own images and use them to create uniquely personal products. Your customer only need change and buy.',
				'image' => 'https://personalbridge.sgp1.digitaloceanspaces.com/unlimited-customization.png',
			),
			array(
				'label' => 'Conditional Logic',
				'desc'  => 'Conditional logic lets you show and hide options depending on the value of previous options.',
				'image' => 'https://personalbridge.sgp1.digitaloceanspaces.com/conditional-logic.png',
			),
			array(
				'label' => 'Live Preview',
				'desc'  => 'PersonalBridge allows you to configure a live preview image that will automatically get updated when your customers will change their selection.',
				'image' => 'https://personalbridge.sgp1.digitaloceanspaces.com/live-preview.png',
			),
		);

		$mobile_features = array_merge( $backend_features, $frontend_features );
		?>
		<div class="relative pt-28">
			<h2 class="text-2xl px-4 leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl text-center">
				<?php echo $feature_label; ?>
			</h2>
			<p class="mt-4 px-4 max-w-7xl mx-auto text-md text-gray-500 text-center text-base sm:text-xl lg:text-lg xl:text-xl">
				<?php echo $feature_desc; ?>
			</p>
		</div>

	<div id="features-mobile" class="md:hidden px-6 py-14 relative">
		<div class="mt-16">
		<?php
		foreach ( $mobile_features as $index => $feature ) {
			if ( 0 == $index % 2 ) { // even.
				$wrap_class    = 'lg:pb-16 lg:pt-16';
				$item_class    = 'sm:w-1/2 order-first sm:order-last';
				$image_class   = 'sm:w-4/5';
				$content_class = 'order-last sm:order-first';
			} else { // odd.
				$wrap_class    = 'lg:pt-16 lg:pb-32';
				$item_class    = 'w-full sm:w-1/2';
				$image_class   = 'sm:w-4/5 sm:ml-0';
				$content_class = '';
			}
			?>
		<div class="flex flex-col sm:flex-row items-center content-center py-6 md:py-12 <?php echo $wrap_class; ?>">
			<!-- Start Feature Image -->
			<div class="feature-2 <?php echo $item_class; ?> mb-4 lg:mb-0 relative">
				<img src="<?php echo esc_url( $feature['image'] ); ?>" class="lazy mx-auto z-10 relative w-2/3 <?php echo $image_class; ?> lg:w-2/3 loaded" alt="<?php echo $feature['label']; ?>" data-ll-status="loaded" src="<?php echo esc_url( $feature['image'] ); ?>">
			</div>
			<!-- End Feature Image -->

			<!-- Start Feature Content -->
			<div class="w-full sm:w-1/2 <?php echo $content_class; ?>">
				<h2 class="text-xl text-center sm:text-left sm:text-2xl lg:text-3xl font-semibold"><?php echo $feature['label']; ?></h2>
				<p class="text-sm text-center sm:text-left lg:text-lg pt-4 pb-8 text-gray-700">
					<?php echo $feature['desc']; ?>
				</p>
			
			</div>
			<!-- End Feature Content -->
		</div>
		<?php } ?>
		</div>
	</div>
	<!-- End Mobile -->
	<div id="features-md">
		
		<div class="feature featurescroll relative opacity-0 hidden md:block m-auto px-4 sm:px-6 lg:px-8 lg:max-w-7xl" id="features-md-backend">
			<div class="containerscroll w-container sm:ml-6 lg:ml-8"">
				<div class="w-layout-grid contenttext">
					<div class="content-features">
						<div class="relative">
							<h2 class="text-2xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-3xl">
								Unlimited Customization
							</h2>
							<p class="mt-4 max-w-4xl mx-auto text-md text-gray-500">
								Add unlimited customization options, conditional logic, personalized campaigns, powerful & easy to use interface.
							</p>
						</div>
					</div>
					<?php
					$backend_feature_images = array();
					foreach ( $backend_features as $index => $feature ) {
						$backend_feature_images[] = '<div id="backend-img-scroll-' . $index . '" class="content-image-2 imagescroll py-2 flex h-screen items-center">
						<img src="' . esc_url( $feature['image'] ) . '" alt="" class="image-38 image-scroll md-image-scroll"></div>';
						?>
							<div class="div-block-211 block-text hidetext">
								<h3 class="heading-21 headingtextscroll">
									<span class="text-lg leading-6 font-medium text-gray-900"><?php echo $feature['label']; ?></span>
								</h3>
								<div class="textscroll-wrap hidden">
									<p data-img-scroll="backend-img-scroll-<?php echo esc_attr( $index ); ?>" class="pa textscroll block text-md text-gray-500">
									<?php echo $feature['desc']; ?>
									</p>
								</div>
							</div>
							<?php
					}
					?>
				</div>
			</div>
			<div class="w-layout-grid contentimage pr-4 sm:pr-6 lg:pr-8" data-ix="new-interaction">
				<?php echo implode( '', $backend_feature_images ); ?>
			</div>
		</div>

		
		<div class="feature featurescroll relative opacity-0 hidden md:block pb-16 m-auto px-4 sm:px-6 lg:px-8 lg:max-w-7xl" id="features-md-frontend">
			<div class="containerscroll w-container">
				<div class="w-layout-grid contenttext">
					<div class="content-features">
						<div class="relative">
							<h2 class="text-2xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-3xl">
							Empower Your Customers
							</h2>
							<p class="mt-4 max-w-4xl mx-auto text-md text-gray-500">
							Let your customers customize your products. Allow them to visualize the final product before placing an order.
							</p>
						</div>
					</div>
					<?php
					$frontend_feature_images = array();
					foreach ( $frontend_features as $index => $feature ) {
						$frontend_feature_images[] = '<div id="frontend-img-scroll-' . $index . '" class="content-image-2 imagescroll py-2 flex h-screen items-center">
							<img src="' . esc_url( $feature['image'] ) . '" alt="" class="image-38 image-scroll md-image-scroll"></div>';
						?>
							<div class="div-block-211 block-text hidetext">
								<h3 class="heading-21 headingtextscroll">
									<span class="text-lg leading-6 font-medium text-gray-900"><?php echo $feature['label']; ?></span>
								</h3>
								<div class="textscroll-wrap hidden">
									<p data-img-scroll="frontend-img-scroll-<?php echo esc_attr( $index ); ?>" class="pa textscroll block text-md text-gray-500">
									<?php echo $feature['desc']; ?>
									</p>
								</div>
							</div>
							<?php
					}
					?>
				</div>
			</div>
			<div class="w-layout-grid contentimage" data-ix="new-interaction"><!-- pr-4 sm:pr-6 lg:pr-8 -->
				<?php echo implode( '', $frontend_feature_images ); ?>
			</div>
		</div>
		
	</div>
</div> 

<!-- Partners -->
<!-- This example requires Tailwind CSS v2.0+ -->
<div class="bg-white" id="partners">
  <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
	<div class="lg:grid lg:grid-cols-2 lg:gap-8 lg:items-center">
	  <div>
		<h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
			Automatic Fulfillment Partners
		</h2>
		<p class="mt-3 max-w-3xl text-lg text-gray-500">
		Automatic send orders with ready to print files to your fulfillment service and update tracking order to your store.
		</p>
		<div class="mt-8 sm:flex">
		  <div class="rounded-md shadow">
			<a href="https://dashboard.personalbridge.com/register" class="flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">
			  Create A Free Account
			</a>
		  </div>
		</div>
		<p class="mt-3 max-w-3xl text-sm text-gray-500">
		Personalbridge app also provide custom order CSV with ready-to-print files for other fulfillments such as Printify, Printful ...
		</p>
	  </div>
	  <div class="mt-8 grid grid-cols-2 gap-0.5 md:grid-cols-3 lg:mt-0 lg:grid-cols-2">
		<?php
			$fulfillments = array(
				array(
					'name' => 'Customcat',
					'logo' => 'https://personalbridge.sgp1.digitaloceanspaces.com/fulfillments/customcat.png',
				),
				array(
					'name' => 'ScalablePress',
					'logo' => 'https://personalbridge.sgp1.digitaloceanspaces.com/fulfillments/scalablepress.png',
				),
				array(
					'name' => 'Gearment',
					'logo' => 'https://personalbridge.sgp1.digitaloceanspaces.com/fulfillments/gearment.png',
				),
				array(
					'name' => 'Merchize',
					'logo' => 'https://personalbridge.sgp1.digitaloceanspaces.com/fulfillments/merchize.png',
				),
				array(
					'name' => 'Dreamship',
					'logo' => 'https://personalbridge.sgp1.digitaloceanspaces.com/fulfillments/dreamship.svg',
				),
			);

			foreach ( $fulfillments as $fulfillment ) {
				?>
				<div class="col-span-1  justify-center py-8 px-8 bg-gray-50">
					<img class="max-w-12" src="<?php echo esc_url( $fulfillment['logo'] ); ?>" alt="<?php echo esc_attr( $fulfillment['name'] ); ?>">
				</div>
				<?php
			}
			?>
		<div class="col-span-1 justify-center py-8 px-8 bg-gray-50 items-center inline-flex">
		  <div class="text-sm text-gray-500">More coming soon!</div>
		</div> 
	  </div>
	</div>
  </div>
</div>


<!-- Pricing -->

<!-- This example requires Tailwind CSS v2.0+ -->
<div class="bg-gray-100" id="pricing">
  <div class="pt-12 sm:pt-16 lg:pt-20">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
	  <div class="text-center">
		<h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl lg:text-5xl">
		  Simple no-tricks pricing
		</h2>
		<p class="mt-4 text-xl text-gray-600">
		  If you're not satisfied, contact us within the first 14 days and we'll send you a full refund.
		</p>
	  </div>
	</div>
  </div>
  <div class="mt-8 bg-white pb-16 sm:mt-12 sm:pb-20 lg:pb-28">
	<div class="relative transition-all">
	  <div class="absolute inset-0 h-1/2 bg-gray-100"></div>
	  <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<div class="max-w-lg mx-auto rounded-lg shadow-lg overflow-hidden lg:max-w-none lg:flex">
		  <div class="flex-1 bg-white px-6 py-8 lg:p-12">
			<h3 class="text-2xl font-extrabold text-gray-900 sm:text-3xl">
				PAY AS YOU GO
			</h3>
			<div class="mt-6 overflow-hidden">
				<p class="text-base text-gray-500 lg:float-left estimate-cost-desc">
					Simple usage based pricing with no long term commitments.
				</p>
				<p id="action-estimate-cost" class="mt-4 lg:mt-0 text-right text-base text-indigo-600 lg:float-right cursor-pointer">
					<span class="inline-flex items-center text-indigo-600 ">	
						<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
						</svg>
						<span class="ml-1">Estimate your cost</span>
					</span>
				</p>
			</div>
			
			<div class="mt-8">
			  <div class="flex items-center">
				<div id="box-calc-cost" class="hidden xl:inline-flex xl:items-center w-full justify-between"> 
					<input type="number" id="calc-total-cost" min="1" max="9999999" onkeyup="this.value=this.value.replace(/[^\d]/,'')" class="shop-domain py-3 px-3 text-base rounded-md placeholder-gray-500 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border border-gray-300 w-full pb-w-275" placeholder="Enter your average order/month"/>
					<div class="inline-flex items-center justify-between hidden my-4 xl:my-0" id="box-calc-result">
						<span>Pay as you go</span>
						<span id="pb-app-pricing" class="text-4xl font-extrabold text-gray-900 ml-4"></span>
					</div>
				</div>
				<div class="flex-1 border-t-2 border-gray-200"></div>
			  </div>
			  <ul role="list" class="mt-8 space-y-5 lg:space-y-0 lg:grid lg:grid-cols-2 lg:gap-x-8 lg:gap-y-5">
				<li class="flex items-start lg:col-span-1">
				  <div class="flex-shrink-0">
					<!-- Heroicon name: solid/check-circle -->
					<svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
					  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
					</svg>
				  </div>
				  <p class="ml-3 text-sm text-gray-700">
					14 days free trial
				  </p>
				</li>

				<li class="flex items-start lg:col-span-1">
				  <div class="flex-shrink-0">
					<!-- Heroicon name: solid/check-circle -->
					<svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
					  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
					</svg>
				  </div>
				  <p class="ml-3 text-sm text-gray-700">
					  Unlimited number of stores
				  </p>
				</li>

				<li class="flex items-start lg:col-span-1">
				  <div class="flex-shrink-0">
					<!-- Heroicon name: solid/check-circle -->
					<svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
					  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
					</svg>
				  </div>
				  <p class="ml-3 text-sm text-gray-700">
				  Unlimited product catalogs
				  </p>
				</li>

				<li class="flex items-start lg:col-span-1">
				  <div class="flex-shrink-0">
					<!-- Heroicon name: solid/check-circle -->
					<svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
					  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
					</svg>
				  </div>
				  <p class="ml-3 text-sm text-gray-700">
				  Unlimited customization options
				  </p>
				</li>

				<li class="flex items-start lg:col-span-1">
				  <div class="flex-shrink-0">
					<!-- Heroicon name: solid/check-circle -->
					<svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
					  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
					</svg>
				  </div>
				  <p class="ml-3 text-sm text-gray-700">
					Unlimited ready to print file exports or API
				  </p>
				</li>

				<li class="flex items-start lg:col-span-1">
				  <div class="flex-shrink-0">
					<!-- Heroicon name: solid/check-circle -->
					<svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
					  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
					</svg>
				  </div>
				  <p class="ml-3 text-sm text-gray-700">
				  Unlimited personalized campaigns
				  </p>
				</li>


			  </ul>
			</div>
		  </div>
		  <div class="py-8 px-6 bg-gray-50 lg:flex-shrink-0 lg:flex lg:flex-col lg:justify-center lg:p-12">
			<div class="flex items-center justify-center text-5xl font-extrabold text-gray-900">
			  <span>
				$39
			  </span>
			  <span class="ml-3 text-xl font-medium text-gray-500">
				USD/MONTH
			  </span>
			</div>
			<p class="mt-4 text-sm font-medium">Plus transaction fee:</p>
			<p class="mt-2 text-sm text-gray-500">Free transaction fee for first 20 orders</p>
			<p class="mt-2 text-sm text-gray-500">$0.4 transaction fee up to 200 orders</p>
			<p class="mt-2 text-sm text-gray-500">$0.3 transaction fee up to 1,000 orders</p>
			<p class="mt-2 text-sm text-gray-500">$0.2 transaction fee up to 5,000 orders</p>
			<p class="mt-2 text-sm text-gray-500">$0.1 transaction fee from 5.001 orders and above.</p>
			<div class="mt-6">
			  <div class="rounded-md shadow">
				<a href="https://dashboard.personalbridge.com" class="flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-gray-800 hover:bg-gray-900">
				  Get Started
				</a>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	</div>
  </div>
</div>


<!-- FAQs -->
<!-- This example requires Tailwind CSS v2.0+ -->
<div class="bg-gray-50">
	<div class="max-w-7xl mx-auto py-12 px-4 sm:py-16 sm:px-6 lg:px-8">
		<div class="max-w-3xl mx-auto divide-y-2 divide-gray-200">
			<h2 class="text-center text-3xl font-extrabold text-gray-900 sm:text-4xl">
				Frequently asked questions
			</h2>
			<dl class="mt-6 space-y-6 divide-y divide-gray-200">
			<?php
				$faqs = array(
					array(
						'question' => 'What is PersonalBridge?',
						'answer'   => 'PersonalBridge is an product personalization application, built to enhance e-commerce experiences. With PersonalBridge your products can be customized easily online in your store by your own clients. PersonalBridge works also as powerful web to print tool, so not only will your customers personalize what they are buying, but you will also receive a ready to print (or engrave) file of the design they created.',
					),
					array(
						'question' => 'How can I add PersonalBridge to my e-commerce store?',
						'answer'   => 'At the moment we support Shopify and Shopbase app. You just need a few steps to install the app & start using the app. If you need any further information, please feel free to contact us via email <strong>support@personalbridge.com</strong>.',
					),
					array(
						'question' => 'What are the payment options?',
						'answer'   => 'Our payments are processed through PayPal. You can pay with your PayPal account or Credit Card (Mastercard, Visa, American Express and Discover).',
					),
					array(
						'question' => 'Do all plans include support?',
						'answer'   => 'Yes, our plans include standard support, where you can reach out to our support team at <strong>support@personalbridge.com</strong> and get an answer in less than 24 hs, during normal office hours.',
					),
					array(
						'question' => 'Can my customers add their own pictures to my products?',
						'answer'   => 'Yes, there\'s a custom picture upload option, where your customers are able to upload their own pictures, logos or designs in JPG or PNG files.',
					),
					array(
						'question' => 'What kind of support do you offer?',
						'answer'   => 'All our plans include email support.',
					),
				);

				foreach ( $faqs as $index => $faq ) {
					$open_var = 'false';
					if ( 0 == $index ) {
						$open_var = 'true';
					}
					?>
					<div x-data="{ open: <?php echo esc_attr( $open_var ); ?> }" class="pt-6">
						<dt class="text-lg">
							<button type="button" x-description="Expand/collapse question button" class="text-left w-full flex justify-between items-start text-gray-400" aria-controls="faq-<?php echo esc_attr( $index ); ?>" @click="open = !open" aria-expanded="false" x-bind:aria-expanded="open.toString()">
								<?php if ( isset( $faq['question'] ) && ! empty( $faq['question'] ) ) { ?>	
									<span class="font-medium text-gray-900">
									<?php echo $faq['question']; ?>
									</span>
								<?php } ?>
								<span class="ml-6 h-7 flex items-center">
									<svg class="h-6 w-6 transform rotate-0" x-description="Expand/collapse icon, toggle classes based on question open state.
										Heroicon name: outline/chevron-down" x-state:on="Open" x-state:off="Closed" :class="{ '-rotate-180': open, 'rotate-0': !(open) }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
									</svg>
								</span>
							</button>
						</dt>
						<dd class="mt-2 pr-12" id="faq-<?php echo esc_attr( $index ); ?>" x-show="open" style="display: none;">
							<?php if ( isset( $faq['answer'] ) && ! empty( $faq['answer'] ) ) { ?>		
							<p class="text-base text-gray-500">
								<?php echo $faq['answer']; ?>
							</p>
							<?php } ?>
						</dd>
					</div>
					<?php
				}
				?>
			</dl>
		</div>
	</div>
</div>

<!-- The Team -->
<div id="team" class="bg-gray-900">
  <div class="mx-auto py-12 px-4 max-w-7xl sm:px-6 lg:px-8 lg:py-24">
	<div class="space-y-12">
		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
			<div class="text-center">
				<h2 class="text-3xl text-white font-extrabold sm:text-4xl lg:text-5xl">
				Meet our team
				</h2>
				<p class="mt-4 text-xl text-gray-600">
				These are the people that make the magic happen.
				</p>
			</div>
		</div>
		<ul role="list" class="space-y-4 sm:grid sm:grid-cols-2 sm:gap-6 sm:space-y-0 lg:grid-cols-4 lg:gap-8">
			<?php
			$teams = array(
				array(
					'name'     => 'Simon Vu',
					'position' => 'Product Manager',
					'image'    => 'https://personalbridge.sgp1.digitaloceanspaces.com/teams/teams/simon-vu-avatar.jpg',
				),
				array(
					'name'     => 'Cong Nguyen',
					'position' => 'Lead Developer',
					'image'    => 'https://personalbridge.sgp1.digitaloceanspaces.com/teams/teams/cong-nguyen-avatar.jpg',
				),
				array(
					'name'     => 'Jimmy Nguyen',
					'position' => 'Lead Developer',
					'image'    => 'https://personalbridge.sgp1.digitaloceanspaces.com/teams/teams/jimmy-nguyen-avatar.jpg',
				),
				array(
					'name'     => 'Quang Nguyen',
					'position' => 'Advisor',
					'image'    => 'https://personalbridge.sgp1.digitaloceanspaces.com/teams/quang-nguyen-avatar2.png',
				),
				array(
					'name'     => 'Truong Tuyen',
					'position' => 'UX Architect',
					'image'    => 'https://personalbridge.sgp1.digitaloceanspaces.com/teams/teams/truong-tuyen-avatar.jpg',
				),
				array(
					'name'     => 'Nhat Hoang',
					'position' => 'Senior Developer',
					'image'    => 'https://personalbridge.sgp1.digitaloceanspaces.com/teams/teams/nhat-hoang-avatar.jpg',
				),
				array(
					'name'     => 'Huy Le',
					'position' => 'Senior Developer',
					'image'    => 'https://personalbridge.sgp1.digitaloceanspaces.com/teams/teams/huy-le-avatar.jpg',
				),
				array(
					'name'     => 'Trang Doan',
					'position' => 'Engineering',
					'image'    => 'https://personalbridge.sgp1.digitaloceanspaces.com/teams/teams/trang-doan-avatar.jpg',
				),

			);
			foreach ( $teams as $member ) {
				?>
				<li class="py-10 px-6 bg-gray-800 text-center xl:px-10">
					<div class="space-y-6 xl:space-y-10">
						<img class="mx-auto h-auto w-40 rounded-full" src="<?php echo esc_url( $member['image'] ); ?>" alt="">
						<div class="font-medium text-lg leading-6 space-y-1 text-center">
							<h3 class="text-white"><?php echo esc_html( $member['name'] ); ?></h3>
							<p class="text-indigo-400"><?php echo esc_html( $member['position'] ); ?></p>
						</div>
					</div>
				</li>
			<?php } ?>
			<!-- More people... -->
		</ul>
	</div>
  </div>
</div>

<!-- Footer -->
<?php
get_footer();
