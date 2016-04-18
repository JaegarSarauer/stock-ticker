<div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Dropdown
    <span class="caret"></span>
  </button> 
<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <?php foreach($menuLinks as $item): ?>
    <li><a href="<?=$item[0]?>"><?=$item[1]?></a></li>
    <?php endforeach; ?>
  </ul>
</div>