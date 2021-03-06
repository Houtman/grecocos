<div id="box" style="border: solid; width: 400px;">
  My content is copied into the facybox!
</div>

<div id="wrap">
  <?php echo $this->Session->flash(); ?>
  <?php if (!$closed): ?>
  <div class="cart_list">
    <h3>Your shopping cart</h3>
    <div id="cart_content">
      <?php e($form->create(null, array('controller' => 'carts', 'action' => 'confirm'))); ?>
      <table id="products" width="100%" cellpadding="0" cellspacing="0">
        <thead>
          <tr>
            <td>Qty</td>
            <td>Item Description</td>
            <td>Item Price</td>
            <td>Sub-Total</td>
          </tr>
        </thead>
        <?php $i = 1; $j = 1; $categoryNum = 1;?>
        <?php foreach($products as $productCategory): ?>
        <tbody>
          <tr>
            <td></td>
            <td>
              <span id = "<?php echo "category{$categoryNum}"; ?>" class="category ui-state-default ui-corner-all ui-icon ui-icon-minus" style="float:left;margin-right:0.5em;">  
              </span>
              <strong><?php e($productCategory['Category']['name']); ?></strong>
          </td>
          <td></td>
          <td></td>
        </tr>
      </tbody>
      <tbody class="<?php echo "category{$categoryNum}"; ?>">
      <?php foreach($productCategory['Product'] as $product):?>
      
      <tr <?php if($i&1){ echo 'class="alt"'; }?> >
      <td>
        <?php e($form->hidden('.'. $j .'.id', array('value' => $product['id'])))?>
        <?php e($form->text('.'. $j .'.quantity', array('value' => "0", 'maxlength' => '3', 'size' => '5')))?>
      </td>
      <td>
        <a class="short_description" href="javascript:void(0);">
          <?php echo $product['short_description']; ?>
        </a>
      </td>
      <td>&#3647 <?php echo $product['selling_price']; ?></td>
      <td>&#3647 <?php echo "0" ?></td>
    </tr>
    <?php $j++; $i++; ?>
    <?php endforeach; ?>
  </tbody>
  <?php $categoryNum++ ?>
  <?php endforeach; ?>
  <tr>
    <td></td>
    <td></td>
    <td><h3>Total</h3></td>
    <td><h3>&#3647; 0<h3></td>
  </tr>
  
</table>
<p>

  <?php 
    e($form->button('View your order', array('div' => false, 'id' => 'toggle_zero', 'class' => 'empty')));
  ?>
</p>
<p>
  <?php e($form->submit('Checkout', array('div' => false, 'id' => "update"))); ?>
  <?php e($form->end());?>
  <?php 
    e($form->submit('Reset', array('div' => false, 'id' => 'empty_cart', 'class' => 'empty')));
  ?>
  
</p>

</div>
</div>
<?php else: ?>
  <h1>
    The order system is currently closed because we are preparing your orders for <?php echo $nextDeliveryDate; ?>.
  </h1>
<?php endif; ?>
</div>
