<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiteSettingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('site_settings', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('site_name', 100)->nullable();
			$table->string('site_slogan', 150)->nullable();
			$table->string('site_logo', 100)->nullable();
			$table->string('site_phone_primary', 20)->nullable();
			$table->string('site_phone_secondary', 20)->nullable();
			$table->integer('default_country_id')->nullable();
			$table->string('default_currency_code', 4)->nullable();
			$table->string('site_street_address', 250)->nullable();
			$table->text('site_google_map')->nullable();
			$table->enum('mail_driver', array('array','log','sparkpost','ses','mandrill','mailgun','sendmail','smtp','mail'))->nullable()->default('smtp');
			$table->string('mail_host', 100)->nullable();
			$table->integer('mail_port')->nullable();
			$table->string('mail_from_address', 100)->nullable();
			$table->string('mail_from_name', 100)->nullable();
			$table->string('mail_to_address', 100)->nullable();
			$table->string('mail_to_name', 100)->nullable();
			$table->string('mail_encryption', 10)->nullable();
			$table->string('mail_username', 100)->nullable();
			$table->string('mail_password', 100)->nullable();
			$table->string('mail_sendmail', 50)->nullable();
			$table->string('mail_pretend', 50)->nullable();
			$table->string('mailgun_domain', 100)->nullable();
			$table->string('mailgun_secret', 100)->nullable();
			$table->string('mandrill_secret', 100)->nullable();
			$table->string('sparkpost_secret', 100)->nullable();
			$table->string('ses_key', 100)->nullable();
			$table->string('ses_secret', 100)->nullable();
			$table->string('ses_region', 100)->nullable();
			$table->text('facebook_address')->nullable();
			$table->text('twitter_address')->nullable();
			$table->text('google_plus_address')->nullable();
			$table->text('youtube_address')->nullable();
			$table->text('instagram_address')->nullable();
			$table->text('pinterest_address')->nullable();
			$table->text('linkedin_address')->nullable();
			$table->text('tumblr_address')->nullable();
			$table->text('flickr_address')->nullable();
			$table->timestamps(10);
			$table->text('index_page_below_top_employes_ad')->nullable();
			$table->text('above_footer_ad')->nullable();
			$table->text('dashboard_page_ad')->nullable();
			$table->text('cms_page_ad')->nullable();
			$table->text('listing_page_vertical_ad')->nullable();
			$table->text('listing_page_horizontal_ad')->nullable();
			$table->string('nocaptcha_sitekey', 150)->nullable();
			$table->string('nocaptcha_secret', 150)->nullable();
			$table->string('facebook_app_id', 150)->nullable();
			$table->string('facebeek_app_secret', 150)->nullable();
			$table->string('google_app_id', 150)->nullable();
			$table->string('google_app_secret', 150)->nullable();
			$table->string('twitter_app_id', 150)->nullable();
			$table->string('twitter_app_secret', 150)->nullable();
			$table->string('paypal_account', 250)->nullable();
			$table->string('paypal_client_id', 250)->nullable();
			$table->string('paypal_secret', 250)->nullable();
			$table->enum('paypal_live_sandbox', array('live','sandbox'))->nullable()->default('sandbox');
			$table->string('stripe_key', 250)->nullable();
			$table->string('stripe_secret', 250)->nullable();
			$table->text('bank_details')->nullable();
			$table->integer('listing_age')->default(15);
			$table->boolean('country_specific_site')->nullable()->default(0);
			$table->boolean('is_paypal_active')->nullable()->default(1);
			$table->boolean('is_bank_transfer_active')->nullable()->default(1);
			$table->boolean('is_jobseeker_package_active')->default(0);
			$table->boolean('is_stripe_active')->nullable()->default(1);
			$table->boolean('is_slider_active')->nullable()->default(0);
			$table->text('mailchimp_api_key')->nullable();
			$table->text('mailchimp_list_name')->nullable();
			$table->text('mailchimp_list_id')->nullable();
			$table->boolean('is_company_package_active')->default(1);
			$table->boolean('is_payu_active')->nullable()->default(1);
			$table->string('payu_money_mode')->nullable();
			$table->string('payu_money_key')->nullable();
			$table->string('salt')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('site_settings');
	}

}
