<div id="node-<?php print $node->nid; ?>" class="node<?php if ($sticky) { print ' sticky'; } ?><?php if (!$status) { print ' node-unpublished'; } ?>">

  <?php if (!$page) { ?>
    <h2><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
  <?php } else { ?>
    <h2><?php print $title ?></h2>
  <?php } ?>
  
  <?php if ($submitted): ?>
    <span class="submitted">Posted on <?php print date('l, F j, Y', $node->created); ?></span>
  <?php endif; ?>
  
  <div class="content clear-block">
    <?php print $content ?>
  </div>

  <?php if ($links): ?>
    <div class="links"><?php print $links; ?></div>
  <?php endif; ?>
</div>
