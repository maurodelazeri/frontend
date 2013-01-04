<li>
  <img src="<?php $this->utility->safe($this->user->getAvatarFromEmail(50, $activity[0]['owner'])); ?>" alt="church" class="thumbnail" />
  <?php $this->utility->safe($this->user->getNameFromEmail($activity[0]['owner'])); ?> uploaded <?php printf('%d %s', count($activity), $this->utility->plural(count($activity), 'photo', false)); ?>, 
  <em><?php $this->utility->timeAsText($activity[0]['data']['dateUploaded']); ?></em>
  <?php foreach($activity as $activityDetails) { ?>
    <a href="<?php $this->url->photoView($activityDetails['data']['id']); ?>"><img src="<?php $this->utility->safe($activityDetails['data']['path100x100xCR']); ?>" class="activityfeed-thumbnail"></a>
  <?php } ?>
</li>