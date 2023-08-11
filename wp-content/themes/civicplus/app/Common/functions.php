<?php
/**
 * CPS button
 *
 * @param $btn
 * @param $class
 *
 * @return void
 */
function cps_button( $btn, $class = 'btn' ) {

	if ( $btn ) {
		echo '<a href="' . $btn['url'] . '" class="' . $class . '"
           title="' . $btn['title'] . '" target="' . $btn['target'] . '">' . $btn['title'] . '</a>';
	}
}

/**
 * Get Clone Group
 *
 * @param $data
 * @param $slug
 *
 * @return mixed|null
 */
function get_clone_group( $data, $slug ) {
	if ( $data[ $slug ] ) {
		return $data[ $slug ];
	}

	return null;
}

/**
 * Show hubspot form
 *
 * @return String
 */
function hbsptForms( $formId, $trakingId = null, $title = null ) { ?>
    <div class="form-box">
		<?php if ( $title ) {
			echo '<p class="title">' . $title . '</p>';
		} ?>
        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
        <script>
           hbspt.forms.create({
              region: "na1",
              portalId: "158743",
              onFormReady: window.initUtmFields,
              formId: "<?php echo $formId; ?>",
			   <?php if($trakingId) { ?>
              sfdcCampaignId: "<?php echo $trakingId; ?>",
			   <?php }?>
           });
        </script>

    </div>
<?php }

/**
 * Show hubspot form
 *
 * @return String
 */
function hubSpotForm( $form ) {
	$portal_id = get_field( 'portal_id', $form['hubspot_account'] );
	?>
    <div class="form-box">
		<?php if ( $form['title'] ) {
			echo '<p class="title">' . $form['title'] . '</p>';
		} ?>
        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
        <script>
           hbspt.forms.create({
              region: "na1",
              portalId: "<?php echo $portal_id; ?>",
              onFormReady: window.initUtmFields,
              formId: "<?php echo $form['id']; ?>",
			   <?php if($form['salesforce_campaign_id']) { ?>
              sfdcCampaignId: "<?php echo $form['salesforce_campaign_id']; ?>",
			   <?php }?>
			   <?php if($form['success_type'] == 'url' && $form['success_url']) { ?>
              onFormSubmit: function () {
                 window.location.href = "<?php echo $form['success_url']; ?>"
              }
			   <?php if($form['success_type'] == 'url' && $form['success_url']) { ?>
              onFormSubmit: function () {}
			   <?php } }?>
           });
        </script>

    </div>
<?php }
