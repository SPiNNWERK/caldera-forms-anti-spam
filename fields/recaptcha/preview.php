{{#if config/public_key}}
	{{#if config/private_key}}
		<div id="cap{{id}}" class="g-recaptcha" data-sitekey="{{config/public_key}}"></div>
		{{#script}}

		jQuery(document).ready( function(){
			if( typeof grecaptcha === 'object' ){
				
				var captch = jQuery('#cap{{id}}');

				grecaptcha.render( captch[0], {
					"sitekey"	:	"{{config/public_key}}",
					"theme"		:	"{{config/theme}}"
				});
			}
		});

		{{/script}}
	{{else}}
		<p><?php esc_html_e( 'No Secret Key Added', 'caldera-forms-anti-spam' ); ?></p>
	{{/if}}
{{else}}
	<p><?php esc_html_e( 'No Site Key Added', 'aldera-forms-anti-spam'); ?></p>
{{/if}}
