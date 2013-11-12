<div class="list-group">
<?php if($is_owner): ?>
  <div class="list-group-item">
    <ul class="nav nav-pills nav-stacked">
      <li<?=(isset($act)&&$act==='upload')?' class="active"':''?>>
        <a href="<?=url("/app/upload?id={$app->getId()}")?>"><i class="fa fa-upload"></i> Upload</a>
      </li>
      <li<?=(isset($act)&&$act==='preference')?' class="active"':''?>>
        <a href="<?=url("/app/preference?id={$app->getId()}")?>"><i class="fa fa-cog"></i> Preference</a>
      </li>
    </ul>
  </div>
<?endif?>
  <div class="list-group-item">
    <dl>
<?php if($app->getLastUpload()): ?>
      <dt>last upload</dt>
      <dd><?=$app->getLastUpload()?></dd>
<?php endif ?>
      <dt>created</dt>
      <dd><?=$app->getCreated()?></dd>
<?php if($app->getRepository()): ?>
      <dt>repository</dt>
      <dd><?=$app->getRepository()?></dd>
<?php endif ?>
      <dt>owners</dt>
<?php foreach($app->getOwners() as $owner):?>
      <dd><a href="mailto:<?=$owner->getOwnerMail()?>"><?=$owner->getOwnerMail()?></a></dd>
<?php endforeach ?>
    </dl>
  </div>
  <div class="list-group-item">
    <div class="text-center">
      <img src="http://chart.apis.google.com/chart?chs=150&cht=qr&chl=<?=urlencode(mfwRequest::url())?>">
    </div>
  </div>
</div>
