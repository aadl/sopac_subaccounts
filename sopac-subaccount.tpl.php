<div class="sopac-subaccount">
  <a name="<?php print $anchor; ?>"></a>

  <ul class="remove-card">
    <li class="button red"><?php print l('Remove Card', $remove_path); ?></li>
  </ul>

  <h3><?php print $title; ?></h3>

  <div class="checkouts-wrapper"><div class="checkouts">
    <h4><?php print $checkout_total . ' Checked Out Item' . ($checkout_total == 1 ? '' : 's') ?></h4>
    <?php print $checkouts; ?>
    <?php if ($checkout_total > 0): ?>
    <ul class="renew-items">
      <li class="button green"><?php print l('Renew Items', $full_path); ?></li>
    </ul>
    <?php endif; ?>
  </div></div>

  <div class="holds-wrapper"><div class="holds">
    <h4><?php print $hold_total . ' Requested Item' . ($hold_total == 1 ? '' : 's') ?></h4>
    <?php print $holds; ?>
    <?php if ($hold_total > 0): ?>
    <ul class="cancel-requests">
      <li class="button green"><?php print l('Cancel Requests', $full_path); ?></li>
    </ul>
    <?php endif; ?>
  </div></div>

  <div style="clear: both;"></div>

</div>
